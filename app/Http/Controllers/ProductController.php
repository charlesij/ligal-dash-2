<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Categories;
use App\Models\ProductPhoto;
use App\Models\UserActivity;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function products()
    {
        $data = Product::with('productPhoto')->paginate(8);
        $categories = Categories::all();
        return view('ecommerce.product.index', [
            'products' => $data,
            'categories' => $categories,
            'currency' => 'Rp. ',
            'totalProduct' => $data->count(),
        ]);
    }
    public function addProduct()
    {
        $categories = Categories::all();
        return view('ecommerce.product.add-product',[
            'categories' =>  $categories,
        ]);
    }
    public function cekIp(Request $request)
    {
        dd(UserActivity::where('user_ip', $request->ip())->first()->user_id);
    }
    public function storeProduct(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required|string|max:255',
                'price' => 'required|string',
                'fixed_price' => 'required|string',
                'discount_type' => 'required|string',
                'discount' => 'required|string',
                'category' => 'nullable|string',
                'brands' => 'required|string',
                'availability' => 'required|string',
                'description' => 'required|string',
                'stock' => 'required|string',
                'media.*' => 'required|image|mimes:jpg,jpeg,png,webp',
            ]);
            
            $userId = UserActivity::where('user_ip', $request->ip())->first();
            $productData = [
                'user_id' => $userId->user_id,
                'name' => $request->name,
                'price' => (float) str_replace(',', '.', $request->price),
                'stock' => (int) $request->stock,
                'fixed_price' => (float) str_replace(',', '.', $request->fixed_price),
                'discount_type' => $request->discount_type,
                'discount' => (float) str_replace(',', '.', $request->discount),
                'brand' => $request->brands,
                'availability' => $request->availability,
                'description' => $request->description,
            ];
            
            $product = Product::create($productData);
            
            if ($request->hasFile('media')) {
                foreach ($request->file('media') as $file) {
                    $path = $file->store('uploads', 'public');
                    
                    ProductPhoto::create([
                        'product_id' => $product->id,
                        'photo' => $path, 
                    ]);
                }
            }
            
            return response()->json([
                'status' => 'success',
                'message' => 'Produk berhasil ditambahkan!',
                'availability' => $productData['availability'],
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'terjadi kesalahan',
                'error' => $e->getMessage(),
            ]);
        }
        
    }
    public function editProduct(Request $request, $id)
    {
        $data = Product::with('productPhoto')->where('id', $id)->first();
        return view('ecommerce.product.edit-product', [
            'product' => $data
        ]);
    }
    public function updateProduct(Request $request, $id)
    {
        try {
            $request->validate([
                'name' => 'required|string|max:255',
                'price' => 'required|string',
                'fixed_price' => 'required|string',
                'discount_type' => 'required|string',
                'discount' => 'required|string',
                'category' => 'nullable|string',
                'brands' => 'required|string',
                'availability' => 'required|string',
                'description' => 'required|string',
                'stock' => 'required|string',
                'media.*' => 'required|image|mimes:jpg,jpeg,png,webp',
                'existing_photos' => 'nullable|array',
                'existing_photos.*' => 'string',
            ]);
        
            $product = Product::with('productPhoto')->findOrFail($id);
        
            $product->update([
                'name' => $request->name,
                'price' => (float) str_replace(',', '.', $request->price),
                'stock' => (int) $request->stock,
                'fixed_price' => (float) str_replace(',', '.', $request->fixed_price),
                'discount_type' => $request->discount_type,
                'discount' => (float) str_replace(',', '.', $request->discount),
                'brand' => $request->brands,
                'availability' => $request->availability,
                'description' => $request->description,
            ]);
        
            $existingPhotos = $request->input('existing_photos', []);
            foreach ($product->productPhoto as $photo) {
                if (!in_array(asset('storage/' . $photo->photo), $existingPhotos)) {
                    $oldPath = public_path('storage/' . $photo->photo);
                    if (file_exists($oldPath)) {
                        unlink($oldPath);
                    }
                    $photo->delete();
                }
            }

            if ($request->hasFile('media')) {
                foreach ($request->file('media') as $file) {
                    $path = $file->store('uploads', 'public');
                    ProductPhoto::create([
                        'product_id' => $product->id,
                        'photo' => $path,
                    ]);
                }
            }
        
            return response()->json([
                'status' => 'success',
                'message' => 'Product updated successfully!', 
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Product update failed', 
            ]);
        }
    }
    
    public function productList(Request $request)
    {
        $cek = optional(UserActivity::where('user_ip', $request->ip())->first())->user_id;
        if($cek === null) {
            return redirect(route('dashboard'));
        } else {
            $userId = UserActivity::where('user_ip', $request->ip())->first()->user_id;
        }
        
        $product = Product::with('productPhoto')->where('user_id', $userId)->paginate(10);
        $countProduct = count(Product::where('user_id', $userId)->get());
        $totalLiked = $product->sum('liked');
        $sold = $product->sum('sold');
        $totalIncome = $product->sum(function($prod) {
            return $prod->fixed_price * $prod->sold;
        });
        $rating = $product->filter(function($prod) {
            return $prod->rating > 0; // Memastikan rating > 0
        })->count();

        return view('ecommerce.product.list-product', [
            'product' => $product,
            'count' => $countProduct,
            'liked' => $totalLiked,
            'sold' => $sold,
            'income' => $totalIncome,
            'rating' => $rating,
        ]);
    }
    public function productDetails(Request $request, $id)
    {
        $data = Product::with('productPhoto')->where('id', $id)->first();
        if($data === null) {
            return redirect(route('dashboard'));
        }
        $otherProducts = Product::where('id', '!=', $id)->take(8)->get();
        $productsRelated = Product::where('id', '!=', $id)->get()->chunk(5); // ini nanti pakai where categories
        return view('ecommerce.product.detail-product',[
            'product' => $data,
            'currency' => 'Rp. ',
            'products' => $otherProducts,
            'byCategories' => $productsRelated,
        ]);
    }
    public function addCategory()
    {
        return view('ecommerce.product.add-category');
    }
    public function wishlist()
    {
        return view('ecommerce.product.wishlist');
    }
}
