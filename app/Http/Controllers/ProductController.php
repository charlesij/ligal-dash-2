<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductPhoto;
use App\Models\UserActivity;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function products()
    {
        $data = Product::with('productPhoto')->paginate(12);
        return view('ecommerce.product.index', [
            'products' => $data,
            'currency' => 'Rp. '
        ]);
    }
    public function addProduct()
    {
        return view('ecommerce.product.add-product');
    }
    public function cekIp(Request $request)
    {
        dd(UserActivity::where('user_ip', $request->ip())->first());
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
                'category' => 'required|string',
                'brands' => 'required|string',
                'availability' => 'required|string',
                'description' => 'required|string',
                'stock' => 'required|string',
                'media.*' => 'required|image|mimes:jpeg',
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
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'terjadi kesalahan',
                'error' => $e->getMessage(),
            ]);
        }
        
    }
    public function editProduct()
    {
        return view('ecommerce.product.edit-product');
    }
    public function productList()
    {
        return view('ecommerce.product.list-product');
    }
    public function productDetails()
    {
        return view('ecommerce.product.detail-product');
    }
    public function wishlist()
    {
        return view('ecommerce.product.wishlist');
    }
}
