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
                      <li class="breadcrumb-item"><a href="{{ route('products') }}">Products</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Add Categories</li>
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
  </div>
</div>
@endsection