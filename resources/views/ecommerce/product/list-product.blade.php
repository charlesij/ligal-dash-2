@extends('layout.main')
@section('container')

<div class="main-content app-content">
  <div class="container-fluid">

      <!-- Page Header -->
      <div
          class="my-4 page-header-breadcrumb d-flex align-items-center justify-content-between flex-wrap gap-2">
          <div>
              <h1 class="page-title fw-medium fs-18 mb-2">Products List</h1>
              <div class="">
                  <nav>
                      <ol class="breadcrumb mb-0">
                          <li class="breadcrumb-item"><a href="{{ route('ecommerce') }}">Ecommerce</a></li>
                          <li class="breadcrumb-item"><a href="{{ route('products') }}">Products</a></li>
                          <li class="breadcrumb-item active" aria-current="page">Products List</li>
                      </ol>
                  </nav>
              </div>
          </div>
          
          <div class="btn-list">
            <a href="{{ route('add-product') }}">
              <button type="button" class="btn btn-secondary-light btn-wave waves-effect waves-light">
                <i class="ri-add-line"></i> Add Product
              </button>
            </a>
          </div>
          {{-- <div class="d-flex gap-2">
              <button class="btn btn-white btn-wave border-0 me-0 fw-normal waves-effect waves-light">
                  <i class="ri-filter-3-fill me-2"></i>Filter
              </button>
              <button type="button" class="btn btn-primary btn-wave waves-effect waves-light">
                  <i class="ri-upload-2-line me-2"></i> Export report
              </button>
          </div> --}}
      </div>
      
      <div class="row row-cols-xxl-5 row-cols-xl-3 row-cols-sm-2 row-cols-1">
          <div class="col">
              <div class="card custom-card border shadow-none">
                  <div class="card-body">
                      <div class="d-flex align-items-start gap-3">
                          <div>
                              <span class="avatar avatar-md bg-primary">
                                  <i class="ri-box-3-line fs-18"></i>
                              </span>
                          </div>
                          <div class="flex-fill">
                              <span class="d-block mb-2">Total Product</span>
                              <h5 class="fw-semibold mb-2 lh-1">{{ $count }}</h5>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col">
              <div class="card custom-card border shadow-none">
                  <div class="card-body">
                      <div class="d-flex align-items-start gap-3 flex-wrap">
                          <div>
                              <span class="avatar avatar-md bg-secondary">
                                  <i class="ri-heart-fill fs-18"></i>
                              </span>
                          </div>
                          <div class="flex-fill">
                              <span class="d-block mb-2">Product Liked</span>
                              <h5 class="fw-semibold mb-2 lh-1">{{ $liked }}</h5>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col">
              <div class="card custom-card border shadow-none">
                  <div class="card-body">
                      <div class="d-flex align-items-start gap-3 flex-wrap">
                          <div>
                              <span class="avatar avatar-md bg-success">
                                  <i class="ri-truck-line fs-18"></i>
                              </span>
                          </div>
                          <div class="flex-fill">
                              <span class="d-block mb-2">Product Sold </span>
                              <h5 class="fw-semibold mb-2 lh-1">{{ $sold }}
                                {{-- <span class="text-success fw-semibold fs-12 d-inline-flex align-items-center">
                                  <i class="ti ti-arrow-narrow-up"></i>
                                  0.54%</span> --}}
                              </h5>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col">
              <div class="card custom-card border shadow-none">
                  <div class="card-body">
                      <div class="d-flex align-items-start gap-3 flex-wrap">
                          <div>
                              <span class="avatar avatar-md bg-warning">
                                  <i class="ri-star-line fs-18"></i>
                              </span>
                          </div>
                          <div class="flex-fill">
                              <span class="d-block mb-2">Total Rating</span>
                              <h5 class="fw-semibold mb-2 lh-1">{{ $rating }}
                                {{-- <span class="text-success fw-semibold fs-12 d-inline-flex align-items-center">
                                  <i class="ti ti-arrow-narrow-up"></i>
                                  0.29%</span> --}}
                              </h5>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col">
              <div class="card custom-card border shadow-none">
                  <div class="card-body">
                      <div class="d-flex align-items-start gap-3 flex-wrap">
                          <div>
                              <span class="avatar avatar-md bg-special">
                                  <i class="ri-wallet-3-line fs-18"></i>
                              </span>
                          </div>
                          <div class="flex-fill">
                              <span class="d-block mb-2">Total Income</span>
                              <h5 class="fw-semibold mb-2 lh-1">{{ $income }} 
                                {{-- <span class="text-danger fw-semibold fs-12 d-inline-flex align-items-center">
                                  <i class="ti ti-arrow-narrow-down"></i>
                                  0.16%
                                </span> --}}
                              </h5>
                          </div>
                          <div class="dropdown">
                              <a aria-label="anchor" href="javascript:void(0);"
                                  data-bs-toggle="dropdown">
                                  <i class="ri-more-2-fill fs-18 text-muted"></i>
                              </a>
                              <ul class="dropdown-menu" role="menu">
                                  <li><a class="dropdown-item"
                                          href="javascript:void(0);">Week</a></li>
                                  <li><a class="dropdown-item"
                                          href="javascript:void(0);">Day</a></li>
                                  <li><a class="dropdown-item"
                                          href="javascript:void(0);">Year</a></li>
                              </ul>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          
      </div>
      <!--End::row-1 -->

      <!-- Start::row-2 -->
      <div class="row">
          <div class="col-xl-12">
              <div class="card custom-card">
                  <div class="card-header justify-content-between">
                      <div class="card-title">
                          Products List
                      </div>
                      <div class="d-flex gap-3">
                          <input class="form-control form-control-sm" type="text" placeholder="Search Here" aria-label=".form-control-sm example">
                          {{-- <a href="{{ route('edit-product', ['id' => 1]) }}" class="btn btn-primary btn-sm me-2 text-nowrap"><i
                                  class="ri-pencil-line me-1 fw-medium align-middle"></i>Edit Product</a> --}}
                      </div>
                  </div>
                  <div class="card-body">
                      <div class="table-responsive">
                          <table class="table text-nowrap border">
                              <thead>
                                  <tr>
                                      {{-- <th scope="col">
                                          <input class="form-check-input check-all" type="checkbox"
                                              id="all-products" value="" aria-label="...">
                                      </th> --}}
                                      <th scope="col">Product</th>
                                      {{-- <th scope="col">Category</th> --}}
                                      <th scope="col">Price</th>
                                      <th scope="col">Stock</th>
                                      <th scope="col">Status</th>
                                      <th scope="col">Seller</th>
                                      <th scope="col">Published</th>
                                      <th scope="col">Action</th>
                                  </tr>
                              </thead>
                              <tbody>
                                @if($product->isEmpty())
                                  <tr class="product-list">
                                    <td class="text-center text-muted" colspan="7" >There's no product here.</td>
                                  </tr>
                                @else
                                @foreach($product as $data)

                                  <tr class="product-list">
                                      {{-- <td class="product-checkbox">
                                        <input class="form-check-input" type="checkbox" id="product1" value="" aria-label="...">
                                      </td> --}}
                                      <td>
                                          <div class="d-flex">
                                              <span class="avatar avatar-md avatar-square bg-primary-transparent p-1">
                                                <img src="{{ asset('/storage').'/'.$data->productPhoto[0]->photo }}" class="w-100 h-100" alt="...">
                                              </span>
                                              <div class="ms-2">
                                                <p class="fw-semibold mb-0 d-flex align-items-center">
                                                  <a href="{{ route('product-details', ['id' => $data->id]) }}">{{ $data->name }}</a>
                                                </p>
                                                <p class="fs-12 text-muted mb-0">{{ $data->brands }}</p>
                                              </div>
                                          </div>
                                      </td>
                                      {{-- <td>
                                        <span>{{ $data->category }}</span>
                                      </td> --}}
                                      <td class="currency-format">{{ $data->fixed_price }}</td>
                                      <td>{{ $data->stock }}</td>
                                      <td>
                                        <span class="badge {{ $data->availability == 'In Stock' ? 'bg-primary-transparent' : ($data->availability == 'Pre Order' ? 'bg-warning-transparent' : 'bg-danger-transparent') }}">
                                          {{ $data->availability }}
                                        </span>
                                      </td>
                                      <td>
                                        <div class="d-flex align-items-center fw-semibold">
                                          <span class="avatar avatar-sm p-1 bg-light me-2 avatar-rounded">
                                            @if(auth()->user())
                                            <img src="{{ asset('/assets/images/faces/4.jpg') }}" alt="user_profile">
                                            @else
                                            <img src="{{ asset('/assets/images/faces/guest.jpg') }}" alt="visitor">
                                            @endif
                                          </span>
                                          <a href="javascript:void(0);">Visitor</a>
                                        </div>
                                      </td>
                                      <td>{{ $data->created_at }}</td>
                                      <td>
                                        <div class="hstack gap-2 fs-15">
                                          <a href="{{ route('edit-product', ['id' => $data->id ]) }}" class="btn btn-icon btn-sm btn-primary-light">
                                            <i class="ri-edit-line"></i>
                                          </a>
                                          <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-danger-light product-btn">
                                            <i class="ri-delete-bin-line"></i>
                                          </a>
                                        </div>
                                      </td>
                                  </tr>
                                @endforeach
                                @endif
                              </tbody>
                          </table>
                      </div>
                  </div>
                    <div class="card-footer">
                    <div class="d-flex align-items-center flex-wrap overflow-auto">
                        {{-- Menampilkan jumlah data yang sedang ditampilkan --}}
                        <div class="mb-2 mb-sm-0">
                            Showing <b>{{ $product->firstItem() }}</b> to <b>{{ $product->lastItem() }}</b> of <b>{{ $product->total() }}</b> entries 
                            <i class="bi bi-arrow-right ms-2 fw-semibold"></i>
                        </div>
                        
                        {{-- Tombol pagination --}}
                        <div class="ms-auto">
                            <ul class="pagination mb-0 overflow-auto">
                                {{-- Tombol Previous --}}
                                <li class="page-item {{ $product->onFirstPage() ? 'disabled' : '' }}">
                                    <a class="page-link" href="{{ $product->previousPageUrl() }}">Previous</a>
                                </li>
                
                                {{-- Link ke setiap halaman --}}
                                @foreach ($product->links()->elements[0] as $page => $url)
                                    <li class="page-item {{ $product->currentPage() == $page ? 'active' : '' }}">
                                        <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                                    </li>
                                @endforeach
                
                                {{-- Tombol Next --}}
                                <li class="page-item {{ !$product->hasMorePages() ? 'disabled' : '' }}">
                                    <a class="page-link" href="{{ $product->nextPageUrl() }}">Next</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
              </div>
          </div>
      </div>
      <!--End::row-2 -->

  </div>
</div>

@endsection