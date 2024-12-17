@extends('layout.main')
@section('container')

<div class="main-content app-content">
  <div class="container-fluid">
      <div class="my-4 page-header-breadcrumb d-flex align-items-center justify-content-between flex-wrap gap-2">
          <div>
              <h1 class="page-title fw-medium fs-18 mb-2">Products</h1>
              <div class="">
                  <nav>
                      <ol class="breadcrumb mb-0">
                          <li class="breadcrumb-item"><a href="{{ route('ecommerce') }}">Ecommerce</a></li>
                          <li class="breadcrumb-item active" aria-current="page">Products</li>
                      </ol>
                  </nav>
              </div>
          </div>
          <div class="d-flex gap-2">
              <a href="{{ route('cart') }}">
                <button type="button" class="btn btn-primary-light btn-wave waves-effect waves-light">
                  <i class="ri-shopping-cart-2-line"></i> My Cart
                </button>
              </a>
              <a href="{{ route('wishlist') }}">
                <button type="button" class="btn btn-secondary-light btn-wave waves-effect waves-light">
                  <i class="ri-heart-line"></i> My Wishlist
                </button>
              </a>
              <a href="{{ route('product-list') }}">
                <button type="button" class="btn btn-special-light btn-wave waves-effect waves-light">
                    <i class="ri-box-3-line"></i> My Products
                  </button>
              </a>
          </div>
      </div>
      
      <div class="row">
          <div class="col-xl-12">
              <div class="card custom-card">
                  <div class="card-body p-3">
                      <div class="d-flex justify-content-between align-items-center gy-2 flex-wrap">
                          <div class="mb-sm-0 mb-2">
                              <div class="d-flex">
                                  <h5 class="fw-semibold mb-0"><span class="fw-normal">Showing</span> {{ $totalProduct }}
                                      Items</h5>
                              </div>
                          </div>
                          <div class="custom-form-group mb-2 w-sm-50 w-100 mb-sm-0"> <input type="text"
                                  class="form-control form-control-md py-2" placeholder="Search Product.."
                                  aria-label="Search Hear.."> <button
                                  class="btn btn-primary btn-sm border-0 custom-form-btn px-3" type="button">Search</button> </div>
                          {{-- <div class="text-sm-end text-start">
                              <div class="btn-group">
                                  <button class="btn btn-outline-light border dropdown-toggle" type="button"
                                      data-bs-toggle="dropdown" aria-expanded="false">
                                      <i class="ti ti-sort-descending-2 me-1"></i> Sort By
                                  </button>
                                  <ul class="dropdown-menu">
                                      <li><a class="dropdown-item" href="javascript:void(0)">Date
                                              Published</a></li>
                                      <li><a class="dropdown-item" href="javascript:void(0)">Most
                                              Relevant</a></li>
                                      <li><a class="dropdown-item" href="javascript:void(0)">Price Low to
                                              High</a></li>
                                      <li><a class="dropdown-item" href="javascript:void(0)">Price High to
                                              Low</a></li>
                                  </ul>
                              </div>
                          </div> --}}
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="row">
          <div class="col-xxl-9">
              <div class="row">
                @foreach($products as $product)
                <div class="col-xxl-3 col-lg-6 col-xl-4 col-sm-6">
                    <div class="card custom-card card-style-2">
                        <div class="card-body p-0">
                            @if($product->discount !== 0)
                            <span class="badge bg-primary rounded py-1 top-left-badge">
                                {{ $product->discount }}%
                            </span>
                            @endif
                            <div class="card-img-top p-2 border-bottom border-block-end-dashed">
                                <div class="btns-container-1 align-items-center gap-1"> <a
                                        href="{{ route('product-details', ['id' => $product->id]) }}"
                                        class="btn btn-icon btn-primary"
                                        data-bs-toggle="tooltip" aria-label="Quick View"
                                        data-bs-original-title="Quick View"><i class="ti ti-eye"></i></a>
                                    <a href="wishlist.html"
                                        class="btn btn-icon btn-secondary"
                                        data-bs-toggle="tooltip" aria-label="Add to Wishlist"
                                        data-bs-original-title="Add to Wishlist"><i
                                            class="ti ti-heart align-center"></i></a>
                                    <a
                                        href="cart.html"
                                        class="btn btn-icon btn-success"
                                        data-bs-toggle="tooltip" aria-label="Move To Cart"
                                        data-bs-original-title="Move To Cart"><i class="ti ti-shopping-cart"></i></a>
                                </div>
                                <div class="img-box-2 bg-primary-transparent position-relative overflow-hidden"> 
                                    <img src="{{ asset('storage').'/'.$product->productPhoto[0]->photo }}" alt="img" class="scale-img img-fluid w-100 h-100 object-fit-cover rounded">
                                </div>
                            </div>
                            <div class="min-h-20 p-3">
                                <h6 class="mb-1 fw-semibold fs-16"><a
                                        href="{{ route('product-details',['id'=> $product->id]) }}">{{ $product->name }}</a></h6>
                                <div class="d-flex align-items-end justify-content-between flex-wrap">
                                    <div class="flex-grow-1">
                                        <div class="d-flex align-items-baseline fs-11">
                                            <div class="min-w-fit-content"> <span class="text-warning"><i
                                                        class="bi bi-star-fill"></i></span> <span
                                                    class="text-warning"><i
                                                        class="bi bi-star-fill"></i></span> <span
                                                    class="text-warning"><i
                                                        class="bi bi-star-fill"></i></span> <span
                                                    class="text-warning"><i
                                                        class="bi bi-star-half"></i></span> </div>
                                            <p class="mb-1 ms-1 min-w-fit-content text-muted">
                                                <span>({{ $product->rating }})</span> <span>Ratings</span>
                                            </p>
                                        </div> <a href="javascript:void(0);"
                                            class="text-primary1 fs-13 fw-semibold">{{ $product->brand }}</a>
                                    </div>
                                    <div class="min-w-fit-content">
                                        <h5 class="fw-semibold mb-0 currency-format">{{ $currency . $product->fixed_price }}</h5> 
                                        @if($product->fixed_price !== $product->price)
                                        <span class="fs-13 ms-2 text-muted text-decoration-line-through">{{ $currency .$product->price }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="p-3 pt-0 d-grid">
                                <a href="cart.html" class="btn btn-light">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                @if(!$products->isEmpty())
                <div class="col-md-12">
                    <nav aria-label="..." class="">
                        <ul class="pagination justify-content-end mb-4">
                            <!-- Link "Previous" -->
                            <li class="page-item {{ $products->onFirstPage() ? 'disabled' : '' }}">
                                <a class="page-link" href="{{ $products->previousPageUrl() }}" tabindex="-1">Previous</a>
                            </li>
                
                            <!-- Link Nomor Halaman -->
                            @for ($i = 1; $i <= $products->lastPage(); $i++)
                                <li class="page-item {{ $products->currentPage() == $i ? 'active' : '' }}">
                                    <a class="page-link" href="{{ $products->url($i) }}">{{ $i }}</a>
                                </li>
                            @endfor
                
                            <!-- Link "Next" -->
                            <li class="page-item {{ $products->hasMorePages() ? '' : 'disabled' }}">
                                <a class="page-link" href="{{ $products->nextPageUrl() }}">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                @endif
              </div>
          </div>
          <div class="col-xxl-3">
              <div class="card custom-card products-navigation-card">
                  <div class="card-body p-0">
                      <div class="p-4 border-bottom">
                          <h6 class="fw-semibold mb-2">Categories</h6>
                          <div class="input-group mt-2">
                              <input type="text" class="form-control" placeholder="Search" aria-label="Search">
                          </div>
                          <div class="px-2 py-3 pb-0">
                              @foreach($categories as $category)
                              <div class="form-check mb-2">
                                  <input class="form-check-input me-2" type="checkbox" value="" id="c-1">
                                  <label class="form-check-label" for="c-1">
                                      {{ $category->category_name }}
                                  </label>
                              </div>
                              @endforeach
                              <a href="javascript:void(0);" class="text-decoration-underline text-primary">View All</a>
                          </div>
                      </div>
                      <div class="p-4 border-bottom">
                          <h6 class="fw-semibold mb-0">Price Range</h6>
                          <div class="px-2 py-3 pb-0">
                              <div id="nonlinear"></div>
                              <div class="d-flex mt-4 flex-wrap gap-2">
                                  <div class="fw-semibold px-3 py-1 border rounded">$<span
                                          id="lower-value"></span></div>
                                  <span class="fw-semibold px-2 py-1">-</span>
                                  <div class="fw-semibold px-3 py-1 border rounded">$<span
                                          id="upper-value"></span></div>
                              </div>
                          </div>
                      </div>
                      <div class="p-4 border-bottom">
                          <h6 class="fw-semibold mb-3">Sizes</h6>
                          <select class="form-control" data-trigger name="choices-single-default"
                              id="choices-single-default">
                              <option value="">Select Size</option>
                              <option value="Choice 1">Medium</option>
                              <option value="Choice 2">Small</option>
                              <option value="Choice 3">Large</option>
                          </select>
                      </div>
                      <div class="p-4 border-bottom">
                          <h6 class="fw-semibold mb-3">Brand</h6>
                          <select class="form-control" data-trigger name="choices-single-default"
                              id="choices-single-default1">
                              <option value="">Select Size</option>
                              <option value="Choice 1">Cateye</option>
                              <option value="Choice 2">Adidas</option>
                              <option value="Choice 3">Trends</option>
                          </select>
                      </div>
                      <div class="p-4">
                          <h6 class="fw-semibold mb-3">Color</h6>
                          <div class="d-sm-flex"> <button
                                  class="btn bg-primary-transparent border border-primary color-btn me-2 mb-1 d-flex align-items-center justify-content-center"><i
                                      class="ri-circle-fill fs-14"></i></button> <button
                                  class="btn bg-secondary-transparent color-btn me-2 mb-1"><i
                                      class="ri-circle-fill fs-14"></i></button> <button
                                  class="btn bg-danger-transparent color-btn me-2 mb-1"><i
                                      class="ri-circle-fill fs-14"></i></button> <button
                                  class="btn bg-warning-transparent color-btn me-2 mb-1"><i
                                      class="ri-circle-fill fs-14"></i></button> <button
                                  class="btn bg-success-transparent color-btn me-2 mb-1"><i
                                      class="ri-circle-fill fs-14"></i></button> <button
                                  class="btn bg-purple-transparent color-btn me-2 mb-1"><i
                                      class="ri-circle-fill fs-14"></i></button> <button
                                  class="btn bg-teal-transparent color-btn me-2 mb-1"><i
                                      class="ri-circle-fill fs-14"></i></button> <button
                                  class="btn bg-info-transparent color-btn me-2 mb-1"><i
                                      class="ri-circle-fill fs-14"></i></button> <button
                                  class="btn bg-pink-transparent color-btn me-2 mb-1"><i
                                      class="ri-circle-fill fs-14"></i></button> </div>
                      </div>
                      <div class="px-4 py-3 border-top text-center">
                          <button class="btn btn-secondary me-2 mb-2">Clear All</button>
                          <button class="btn btn-primary mb-2">Apply</button>
                      </div>
                  </div>
              </div>
          </div>
      </div>


  </div>
</div>

@endsection