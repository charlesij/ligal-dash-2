@extends('layout.main')
@section('container')

{{-- @dd($product->description) --}}
<div class="main-content app-content">
  <div class="container-fluid">

      <!-- Page Header -->
      <div
          class="my-4 page-header-breadcrumb d-flex align-items-center justify-content-between flex-wrap gap-2">
          <div>
              <h1 class="page-title fw-medium fs-18 mb-2">Product Details</h1>
              <div class="">
                  <nav>
                      <ol class="breadcrumb mb-0">
                          <li class="breadcrumb-item"><a href="{{ route('ecommerce') }}">Ecommerce</a></li>
                          <li class="breadcrumb-item"><a href="{{ route('products') }}">Products</a></li>
                          <li class="breadcrumb-item active" aria-current="page">Product Details</li>
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
      <!-- Page Header Close -->

      <!-- Start:: row-1 -->
      <div class="row">
          <div class="col-xxl-5">
              <div class="row">
                  <div class="col-sm-2 col-12">
                      <div class="swiper swiper-view-details">
                          <div class="swiper-wrapper d-sm-block d-flex">
                            @foreach($product->productPhoto as $photo)
                              <div class="swiper-slide w-sm-100 mb-4 p-2">
                                  <img class="img-fluid bg-primary-transparent p-1"
                                      src="{{ asset('/storage').'/'.$photo->photo }}" alt="img">
                              </div>
                            @endforeach
                          </div>
                      </div>
                  </div>
                  <div class="col-sm-10 col-12">
                      <div class="swiper swiper-preview-details bg-white p-3 product-details-page">
                          <div class="swiper-wrapper">
                            @foreach($product->productPhoto as $photo)
                              <div class="swiper-slide" id="img-container">
                                  <img class="img-fluid bg-light" src="{{ asset('storage').'/'.$photo->photo }}"
                                      alt="img">
                              </div>
                            @endforeach
                          </div>
                          <div class="swiper-button-next"></div>
                          <div class="swiper-button-prev"></div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-xxl-7">
              <div class="card custom-card min-h-410px">
                  <div class="card-body">
                      <div>
                          <p class="fs-22 fw-semibold mb-0">{{ $product->name }}</p>
                          <p class="fs-14 mb-3">
                            @if($product->rating === 0)
                              <span class="fw-semibold ms-1 text-muted">No rating been given
                            @else
                              <i class="ri-star-s-fill text-warning align-middle"></i>
                              <i class="ri-star-s-fill text-warning align-middle"></i>
                              <i class="ri-star-s-fill text-warning align-middle"></i>
                              <i class="ri-star-s-fill text-warning align-middle"></i>
                              <i class="ri-star-half-s-fill text-warning align-middle"></i>
                              <span class="fw-semibold ms-1">{{ $product->rating }}
                            @endif
                                {{-- <a class="text-primary ms-2" href="javascript:void(0);">(4.4k Reviews)</a> --}}
                            </span>
                          </p>
                          <div class="row mb-3 justify-content-between">
                              <div class="col-xxl-8 col-xl-12 d-flex align-items-center gap-3">
                                    <p class="mb-1">
                                        <span class="h3 fw-semibold">
                                            <sup class="fs-14">{{ $currency }}</sup><span class="currency-format-2">{{ $product->fixed_price }}</span><sup class="fs-14">.00</sup>
                                        </span>
                                    </p>
                                  
                                    @if($product->discount !== 0)
                                    <div>
                                        <p class="mb-0 text-muted fs-12">{{ $currency }}<s>{{ $product->price }}</s></p>
                                        <span class="text-info fs-14">Don't Miss Out Save Upto {{ $product->discount }}% Off.</span>
                                    </div>
                                    @else
                                    {{-- <div>
                                        <span class="text-info fs-14">Promo price not available this time.</span>
                                    </div> --}}
                                    @endif
                              </div>
                              <div class="col-xxl-2">
                                  <a href="javascript:void(0);"
                                      class="mb-0 text-success fw-medium text-decoration-underline"><i
                                          class="ri-coupon-2-line me-1 align-middle d-inline-block"></i>Get a
                                      Coupon</a>
                              </div>
                          </div>
                          <div class="mb-3">
                              <p class="fs-15 fw-semibold mb-1">Description :</p>
                              <p class="text-muted mb-0 fs-13" id="description-container">
                                <span id="short-description"></span>
                                <span id="full-description" style="display: none;"></span>
                                <a href="javascript:void(0);" class="text-decoration-underline text-primary" id="read-more-link">Read More ?</a>
                              </p>
                          </div>
                          {{-- <div class="mb-2">
                              <div class="row">
                                  <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                      <p class="fs-15 fw-semibold mb-2">Select Color :</p>
                                      <p class="mb-0 d-flex">
                                          <button
                                              class="btn bg-primary-transparent border border-primary color-btn me-2 mb-1 d-flex align-items-center justify-content-center"><i
                                                  class="ri-circle-fill fs-14"></i>
                                          </button>
                                          <button class="btn bg-info-transparent color-btn me-2 mb-1"><i
                                                  class="ri-circle-fill fs-14"></i>
                                          </button>
                                          <button class="btn bg-danger-transparent color-btn me-2 mb-1"><i
                                                  class="ri-circle-fill fs-14"></i>
                                          </button>
                                          <button class="btn bg-warning-transparent color-btn me-2 mb-1"><i
                                                  class="ri-circle-fill fs-14"></i>
                                          </button>
                                          <button class="btn bg-success-transparent color-btn me-2 mb-1"><i
                                                  class="ri-circle-fill fs-14"></i>
                                          </button>
                                      </p>
                                      
                                  </div>
                                  <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                      <p class="fs-15 fw-semibold mb-2">Select Weight :</p>
                                      <p class="mb-0 d-flex">
                                      <p class="mb-0 d-flex">
                                          <a class="color-3 product-sizes" href="javascript:void(0)"> 20KG
                                          </a>
                                          <a class="color-1 product-sizes selected" href="javascript:void(0)">
                                              35KG
                                          </a>
                                          <a class="color-2 product-sizes" href="javascript:void(0)"> 100KG
                                          </a>
                                          <a class="color-3 product-sizes" href="javascript:void(0)">
                                              150KG
                                          </a>
                                      </p>
                                  </div>
                                  <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-6 col-sm-12 mt-md-0 mt-3">
                                      <p class="fs-15 fw-semibold mb-2">Select Pattren :</p>
                                      <p class="mb-0 d-flex">
                                          <a class="avatar avatar-sm me-2 avatar-rounded p-1 border border-primary border-opacity-50"
                                              href="javascript:void(0)">
                                              <img src="{{ asset('/assets/images/ecommerce/jpg/19.jpg') }}" alt="img">
                                          </a>
                                          <a class="avatar avatar-sm me-2 avatar-rounded p-1 border"
                                              href="javascript:void(0)">
                                              <img src="{{ asset('/assets/images/ecommerce/jpg/20.jpg') }}" alt="img">
                                          </a>
                                          <a class="avatar avatar-sm me-2 avatar-rounded p-1 border"
                                              href="javascript:void(0)">
                                              <img src="{{ asset('/assets/images/ecommerce/jpg/21.jpg') }}" alt="img">
                                          </a>
                                          <a class="avatar avatar-sm me-2 avatar-rounded p-1 border"
                                              href="javascript:void(0)">
                                              <img src="{{ asset('/assets/images/ecommerce/jpg/22.jpg') }}" alt="img">
                                          </a>
                                          <a class="avatar avatar-sm me-2 avatar-rounded p-1 border"
                                              href="javascript:void(0)">
                                              <img src="{{ asset('/assets/images/ecommerce/jpg/23.jpg') }}" alt="img">
                                          </a>
                                      </p>
                                  </div>
                              </div>
                          </div> --}}
                          <div class="d-flex align-items-center justify-content-between flex-wrap">
                              <div class="row align-items-center gy-3">
                                  <div class="col-lg-4">
                                      <div class="input-group border product-count rounded flex-nowrap">
                                          <div class="input-group p-1 rounded bg-light flex-nowrap">
                                              <button
                                                  class="btn btn-icon bg-white border input-group-text flex-fill product-quantity-minus"><i
                                                      class="ri-subtract-line"></i></button>
                                              <input type="text"
                                                  class="form-control form-control-sm border-0 text-center bg-light w-100"
                                                  aria-label="quantity" id="product-quantity5" value="1">
                                              <button
                                                  class="btn btn-icon bg-white border input-group-text flex-fill product-quantity-plus"><i
                                                      class="ri-add-line"></i></button>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-lg-8">
                                      <div class="d-flex">
                                          <a href="cart.html" class="btn btn-primary border-0"><i
                                                  class="ri-shopping-cart-2-line me-2"></i>Add To cart</a>
                                          <div class="ms-3 fs-14"> <a href="products.html"
                                                  class="btn btn-secondary border-0">
                                                  <i class="ri-money-dollar-circle-line me-2"></i>Buy Now</a>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="d-flex align-items-center flex-wrap gap-2 sm:mt-0 mt-3">
                                  <p class="fs-15 mb-0 me-4 fw-semibold">Share :</p>
                                  <div class="btn-list mb-0">
                                      <button
                                          class="btn btn-sm btn-icon btn-primary-light btn-wave waves-effect waves-light mb-md-0">
                                          <i class="ri-whatsapp-line"></i>
                                      </button>
                                      <button
                                          class="btn btn-sm btn-icon btn-primary-light btn-wave waves-effect waves-light mb-md-0">
                                          <i class="ri-instagram-line"></i>
                                      </button>
                                      <button
                                          class="btn btn-sm btn-icon btn-primary-light btn-wave waves-effect waves-light mb-md-0">
                                          <i class="ri-twitter-x-line"></i>
                                      </button>
                                      <button
                                          class="btn btn-sm btn-icon btn-primary-light btn-wave waves-effect waves-light mb-md-0">
                                          <i class="ri-youtube-line"></i>
                                      </button>
                                      <button
                                          class="btn btn-sm btn-icon btn-primary-light btn-wave waves-effect waves-light mb-md-0">
                                          <i class="ri-facebook-line"></i>
                                      </button>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          @if(!$products->isEmpty())
          <div class="col-xxl-8 pt-5">
            <div class="row">
                <div class="col-xxl-6 col-xl-6">
                    <div class="card card-style-3 custom-card mt-xl-0 mt-3">
                        <div class="card-body">
                            <div class="d-flex align-items-start gap-3">
                                <div class="min-w-fit-content">
                                        <span class="avatar avatar-md bg-primary shipping-icon me-2">
                                            <i class="ti ti-truck-delivery fs-25"></i></span>
                                </div>
                                <div class="flex-grow-1">
                                    <p class="mb-0 fw-semibold fs-16 text-primary">Free Delivery</p>
                                    <p class="mb-0 fs-13 text-muted">Consetetur eirmod dolor stet justo
                                        gubergren ea et lorem sadipscing.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-6">
                    <div class="card card-style-3 custom-card">
                        <div class="card-body">
                            <div class="d-flex align-items-start gap-3">
                                <div class="min-w-fit-content">
                                    <span class="avatar avatar-md bg-secondary shipping-icon-1 me-2">
                                        <i class="ti ti-tags fs-25"></i></span>
                            </div>
                                <div class="flex-grow-1">
                                    <p class="mb-0 fw-semibold fs-16 text-secondary">Secure Payment</p>
                                    <p class="mb-0 fs-13 text-muted">Consetetur eirmod dolor stet justo
                                        gubergren ea et lorem sadipscing.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-6">
                    <div class="card card-style-3 custom-card ">
                        <div class="card-body">
                            <div class="d-flex align-items-start gap-3">
                                <div class="min-w-fit-content">
                                    <span class="avatar avatar-md  bg-success shipping-icon-2 me-2">
                                        <i class="ti ti-arrow-back-up fs-25"></i></span>
                              </div>
                                <div class="flex-grow-1">
                                    <p class="mb-0 fw-semibold fs-16 text-success">Return Policy</p>
                                    <p class="mb-0 fs-13 text-muted">Consetetur eirmod dolor stet justo
                                        gubergren ea et lorem sadipscing.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-6">
                    <div class="card card-style-3 custom-card ">
                        <div class="card-body">
                            <div class="d-flex align-items-start gap-3">
                                <div class="min-w-fit-content">
                                    <span class="avatar avatar-md bg-info shipping-icon-4 me-2">
                                        <i class="ti ti-cell fs-25"></i></span>
                              </div>
                                <div class="flex-grow-1">
                                    <p class="mb-0 fw-semibold fs-16 text-info">Certified Original Celler</p>
                                    <p class="mb-0 fs-13 text-muted">Consetetur eirmod dolor stet justo
                                        gubergren ea et lorem sadipscing.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
          <div class="col-xxl-4 mb-3">
              <h6 class="fw-semibold mb-3">Similar Products :</h6>
              <div class="swiper vertical swiper-vertical">
                  <div class="swiper-wrapper">
                    @foreach($products as $prdct)
                      <div class="swiper-slide">
                          <div class="card custom-card">
                              <div class="card-body">
                                  <div class="row">
                                      <div class="col-xl-4 col-md-2 col-sm-3 col-4">
                                          <div class="bg-light rounded-2 p-2">
                                              <a href="javascript:void(0);">
                                                  <img src="{{ asset('/storage').'/'.$prdct->productPhoto[0]->photo }}" alt="img"
                                                      class="img-fluid w-100 bg-primary-transparent">
                                              </a>
                                          </div>
                                      </div>
                                      <div class="col-xl-8 col-md-10 col-sm-9 col-8">
                                          <div class="d-flex align-items-start justify-content-between mb-3">
                                              <div class="flex-grow-1">
                                                  <a href="javascript:void(0);"
                                                        class="mb-1 d-inline-block text-primary fs-12 fw-500">{{ $prdct->brand }}</a>
                                                  <h6 class="fs-16 mb-1 fw-semibold"><a
                                                        href="{{ route('product-details', ['id' => $prdct->id]) }}">{{ $prdct->name }}</a>
                                                  </h6>
                                                  <div class="d-flex align-items-baseline fs-11">
                                                      <div class="d-flex align-items-baseline fs-11">
                                                          <div class="min-w-fit-content">
                                                              <span class="text-warning"><i
                                                                      class="bi bi-star-fill"></i></span>
                                                              <span class="text-warning"><i
                                                                      class="bi bi-star-fill"></i></span>
                                                              <span class="text-warning"><i
                                                                      class="bi bi-star-fill"></i></span>
                                                              <span class="text-warning"><i
                                                                      class="bi bi-star"></i></span>
                                                          </div>
                                                          <p class="mb-0 ms-1 min-w-fit-content text-muted">
                                                              <span>({{ $prdct->rating }})</span>
                                                              <span>Ratings</span>
                                                          </p>
                                                      </div>
                                                  </div>
                                              </div>
                                              <span class="badge bg-danger-transparent">{{ $prdct->discount }}% Off</span>
                                          </div>
                                          <div class="d-flex align-items-center justify-content-between flex-wrap">
                                              <div class="d-flex align-items-baseline">
                                                  <h6 class="fs-20 text-primary mb-0 currency-format">{{ $currency.$prdct->fixed_price }}</h6>
                                                  <span
                                                      class="fs-13 ms-2 text-muted text-decoration-line-through currency-format">{{ $currency.$prdct->price }}</span>
                                              </div>
                                              <a href="cart.html"
                                                  class="btn btn-primary"><i
                                                      class="ti ti-shopping-cart-plus me-1"></i> Add Cart</a>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                    @endforeach
                  </div>
              </div>
          </div>

          @endif
      </div>

      <div class="">
          <div class="h6 fw-medium mb-3">Related Products :</div>
          <div class="">
              <div class="swiper swiper-related-products">
                  <div class="swiper-wrapper">
                    @foreach($byCategories as $relatedProduct)
                      <div class="swiper-slide">
                          <div class="row row-cols-xxl-5 row-cols-xl-3 row-cols-lg-3 row-cols-1">
                                @foreach($relatedProduct as $items)
                                <div class="col">
                                    <div class="card custom-card card-style-2">
                                        <div class="card-body p-0">
                                            @if($items->discount !== 0)
                                                <span class="badge bg-primary rounded py-1 top-left-badge">{{ $items->discount }}% Off</span>
                                            @endif
                                            <div class="card-img-top p-2 border-bottom border-block-end-dashed">
                                                <div class="btns-container-1 align-items-center gap-1"> <a
                                                        href="javascript:void(0);"
                                                        class="btn btn-icon btn-primary "
                                                        data-bs-toggle="tooltip" aria-label="Quick View"
                                                        data-bs-original-title="Quick View"><i class="bx bx-search"></i></a>
                                                    <a href="wishlist.html" class="btn btn-icon btn-secondary"
                                                        data-bs-toggle="tooltip" aria-label="Add to Wishlist"
                                                        data-bs-original-title="Add to Wishlist"><i
                                                            class="bx bx-heart align-center"></i></a> <a
                                                        href="javascript:void(0);"
                                                        class="btn btn-icon btn-success "
                                                        data-bs-toggle="tooltip" aria-label="Compare"
                                                        data-bs-original-title="Compare"><i class="bx bx-adjust"></i></a>
                                                </div>
                                                <div class="img-box-2 bg-primary-transparent"> <img src="{{ asset('/storage').'/'.$items->productPhoto[0]->photo }}"
                                                        alt="img"
                                                        class="scale-img img-fluid w-100 rounded">
                                                </div>
                                            </div>
                                            <div class="p-3">
                                                <h6 class="mb-1 fw-semibold fs-16"><a
                                                        href="{{ route('product-details', ['id' => $items->id]) }}">{{ $items->name }}</a></h6>
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
                                                                <span>({{ $items->rating }})</span> <span>Ratings</span> </p>
                                                        </div> <a href="javascript:void(0);"
                                                            class="text-primary1 fs-13 fw-semibold">{{ $items->brand }}</a>
                                                    </div>
                                                    <div class="min-w-fit-content">
                                                        <h5 class="fw-semibold mb-0 currency-format">{{ $currency.$items->fixed_price }}</h5> <span
                                                            class="fs-13 ms-2 text-muted text-decoration-line-through currency-format">{{ $currency.$items->price }}</span>
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
                          </div>
                      </div>
                    @endforeach
                  </div>
              </div>
          </div>
      </div>
      <!-- End:: row-3 -->
  </div>
</div>
<script src="{{ asset('assets/libs/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/product-details.js') }}"></script>
<script>
    const description = `{!! $product->description !!}`; // Deskripsi dari backend
    const maxLength = 500;

    // Format teks dengan <br> untuk menggantikan \n
    const formattedText = description.replace(/\n/g, '<br>');

    // Ambil elemen DOM
    const shortDescriptionElement = document.getElementById('short-description');
    const fullDescriptionElement = document.getElementById('full-description');
    const readMoreLink = document.getElementById('read-more-link');

    // Atur deskripsi singkat dan penuh
    if (description.length > maxLength) {
        shortDescriptionElement.innerHTML = formattedText.slice(0, maxLength) + '...'; // Format dengan <br>
        fullDescriptionElement.innerHTML = formattedText; // Format dengan <br>
    } else {
        shortDescriptionElement.innerHTML = formattedText;
        readMoreLink.style.display = 'none'; // Sembunyikan tombol "Read More" jika deskripsi pendek
    }

    // Event listener untuk tombol "Read More"
    readMoreLink.addEventListener('click', () => {
        fullDescriptionElement.style.display = 'inline';
        shortDescriptionElement.style.display = 'none';
        readMoreLink.style.display = 'none';
    });
</script>
@endsection