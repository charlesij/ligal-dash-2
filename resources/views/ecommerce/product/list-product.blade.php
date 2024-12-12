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
                          <li class="breadcrumb-item"><a href="javascript:void(0);">Apps</a></li>
                          <li class="breadcrumb-item"><a href="javascript:void(0);">Ecommerce</a></li>
                          <li class="breadcrumb-item active" aria-current="page">Products List</li>
                      </ol>
                  </nav>
              </div>
          </div>
          <div class="d-flex gap-2">
              <button class="btn btn-white btn-wave border-0 me-0 fw-normal waves-effect waves-light">
                  <i class="ri-filter-3-fill me-2"></i>Filter
              </button>
              <button type="button" class="btn btn-primary btn-wave waves-effect waves-light">
                  <i class="ri-upload-2-line me-2"></i> Export report
              </button>
          </div>
      </div>
      <!-- Page Header Close -->

      <!-- Start::row-1 -->
      <div class="row row-cols-xxl-5 row-cols-xl-3 row-cols-sm-2 row-cols-1">
          <div class="col">
              <div class="card custom-card border shadow-none">
                  <div class="card-body">
                      <div class="d-flex align-items-start gap-3">
                          <div>
                              <span class="avatar avatar-md bg-primary">
                                  <i class="ri-checkbox-circle-line fs-18"></i>
                              </span>
                          </div>
                          <div class="flex-fill">
                              <span class="d-block mb-2">Paymeny Success</span>
                              <h5 class="fw-semibold mb-2 lh-1">12,754 <span
                                      class="text-success fw-semibold fs-12 d-inline-flex align-items-center"><i
                                          class="ti ti-arrow-narrow-up"></i>0.19%</span></h5>
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
          <div class="col">
              <div class="card custom-card border shadow-none">
                  <div class="card-body">
                      <div class="d-flex align-items-start gap-3 flex-wrap">
                          <div>
                              <span class="avatar avatar-md bg-secondary">
                                  <i class="ri-close-circle-line fs-18"></i>
                              </span>
                          </div>
                          <div class="flex-fill">
                              <span class="d-block mb-2">Payment Cancelled</span>
                              <h5 class="fw-semibold mb-2 lh-1">895<span
                                      class="text-danger fw-semibold fs-12 d-inline-flex align-items-center"><i
                                          class="ti ti-arrow-narrow-down"></i>1.23%</span>
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
          <div class="col">
              <div class="card custom-card border shadow-none">
                  <div class="card-body">
                      <div class="d-flex align-items-start gap-3 flex-wrap">
                          <div>
                              <span class="avatar avatar-md bg-success">
                                  <i class="ri-group-line fs-18"></i>
                              </span>
                          </div>
                          <div class="flex-fill">
                              <span class="d-block mb-2">Total Customers</span>
                              <h5 class="fw-semibold mb-2 lh-1">32854<span
                                      class="text-success fw-semibold fs-12 d-inline-flex align-items-center"><i
                                          class="ti ti-arrow-narrow-up"></i>0.54%</span></h5>
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
          <div class="col">
              <div class="card custom-card border shadow-none">
                  <div class="card-body">
                      <div class="d-flex align-items-start gap-3 flex-wrap">
                          <div>
                              <span class="avatar avatar-md bg-info">
                                  <i class="ri-box-3-line fs-18"></i>
                              </span>
                          </div>
                          <div class="flex-fill">
                              <span class="d-block mb-2">Total Orders</span>
                              <h5 class="fw-semibold mb-2 lh-1">52675 <span
                                      class="text-danger fw-semibold fs-12 d-inline-flex align-items-center"><i
                                          class="ti ti-arrow-narrow-down"></i>0.16%</span>
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
          <div class="col">
              <div class="card custom-card border shadow-none">
                  <div class="card-body">
                      <div class="d-flex align-items-start gap-3 flex-wrap">
                          <div>
                              <span class="avatar avatar-md bg-warning">
                                  <i class="ri-team-line fs-18"></i>
                              </span>
                          </div>
                          <div class="flex-fill">
                              <span class="d-block mb-2">Total Sellers</span>
                              <h5 class="fw-semibold mb-2 lh-1">435<span
                                      class="text-success fw-semibold fs-12 d-inline-flex align-items-center"><i
                                          class="ti ti-arrow-narrow-up"></i>0.29%</span></h5>
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
                          <a href="add-product.html" class="btn btn-primary btn-sm me-2 text-nowrap"><i
                                  class="ri-add-line me-1 fw-medium align-middle"></i>Add Product</a>
                      </div>
                  </div>
                  <div class="card-body">
                      <div class="table-responsive">
                          <table class="table text-nowrap border">
                              <thead>
                                  <tr>
                                      <th scope="col">
                                          <input class="form-check-input check-all" type="checkbox"
                                              id="all-products" value="" aria-label="...">
                                      </th>
                                      <th scope="col">Product</th>
                                      <th scope="col">Category</th>
                                      <th scope="col">Price</th>
                                      <th scope="col">Stock</th>
                                      <th scope="col">Status</th>
                                      <th scope="col">Seller</th>
                                      <th scope="col">Published</th>
                                      <th scope="col">Action</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr class="product-list">
                                      <td class="product-checkbox"><input class="form-check-input"
                                              type="checkbox" id="product1" value="" aria-label="..."></td>
                                      <td>
                                          <div class="d-flex">
                                              <span
                                                  class="avatar avatar-md avatar-square bg-primary-transparent p-1"><img
                                                      src="{{ asset('/assets/images/ecommerce/png/1.png') }}"
                                                      class="w-100 h-100" alt="..."></span>
                                              <div class="ms-2">
                                                  <p class="fw-semibold mb-0 d-flex align-items-center"><a
                                                          href="javascript:void(0);">Wooden Sofa</a></p>
                                                  <p class="fs-12 text-muted mb-0">Accusam Brand</p>
                                              </div>
                                          </div>
                                      </td>
                                      <td>
                                          <span>Electronic</span>
                                      </td>
                                      <td>$1,299</td>
                                      <td>283</td>
                                      <td><span class="badge bg-primary-transparent">Published</span></td>
                                      <td>
                                          <div class="d-flex align-items-center fw-semibold">
                                              <span class="avatar avatar-sm p-1 bg-light me-2 avatar-rounded">
                                                  <img src="{{ asset('/assets/images/faces/4.jpg') }}" alt="">
                                              </span>
                                              <a href="javascript:void(0);">Mayor Kelly</a>
                                          </div>
                                      </td>
                                      <td>24,Nov 2023 - 04:42PM</td>
                                      <td>
                                          <div class="hstack gap-2 fs-15">
                                              <a href="edit-product.html"
                                                  class="btn btn-icon btn-sm btn-primary-light"><i
                                                      class="ri-edit-line"></i></a>
                                              <a href="javascript:void(0);"
                                                  class="btn btn-icon btn-sm btn-danger-light product-btn"><i
                                                      class="ri-delete-bin-line"></i></a>
                                          </div>
                                      </td>
                                  </tr>
                                  <tr class="product-list">
                                      <td class="product-checkbox"><input class="form-check-input"
                                              type="checkbox" id="product2" value="" aria-label="..."></td>
                                      <td>
                                          <div class="d-flex">
                                              <span
                                                  class="avatar avatar-md avatar-square bg-secondary-transparent p-1"><img
                                                      src="{{ asset('/assets/images/ecommerce/png/14.png') }}"
                                                      class="w-100 h-100" alt="..."></span>
                                              <div class="ms-2">
                                                  <p class="fw-semibold mb-0 d-flex align-items-center"><a
                                                          href="javascript:void(0);">Altra Pro Max Camera</a>
                                                  </p>
                                                  <p class="fs-12 text-muted mb-0">Saftynic Brand</p>
                                              </div>
                                          </div>
                                      </td>
                                      <td>
                                          <span>Furniture</span>
                                      </td>
                                      <td>$799</td>
                                      <td>98</td>
                                      <td>
                                          <span class="badge bg-secondary-transparent">Unpublished</span>
                                      </td>
                                      <td>
                                          <div class="d-flex align-items-center fw-semibold">
                                              <span class="avatar avatar-sm p-1 bg-light me-2 avatar-rounded">
                                                  <img src="{{ asset('/assets/images/faces/15.jpg') }}" alt="">
                                              </span>
                                              <a href="javascript:void(0);">Andrew Garfield </a>
                                          </div>
                                      </td>
                                      <td>18,Nov 2023 - 06:53AM</td>
                                      <td>
                                          <div class="hstack gap-2 fs-15">
                                              <a href="edit-product.html"
                                                  class="btn btn-icon btn-sm btn-primary-light"><i
                                                      class="ri-edit-line"></i></a>
                                              <a href="javascript:void(0);"
                                                  class="btn btn-icon btn-sm btn-danger-light product-btn"><i
                                                      class="ri-delete-bin-line"></i></a>
                                          </div>
                                      </td>
                                  </tr>
                                  <tr class="product-list">
                                      <td class="product-checkbox"><input class="form-check-input"
                                              type="checkbox" id="product5" value="" aria-label="..."></td>
                                      <td>
                                          <div class="d-flex">
                                              <span
                                                  class="avatar avatar-md avatar-square bg-success-transparent p-1"><img
                                                      src="{{ asset('/assets/images/ecommerce/png/33.png') }}"
                                                      class="w-100 h-100" alt="..."></span>
                                              <div class="ms-2">
                                                  <p class="fw-semibold mb-0 d-flex align-items-center"><a
                                                          href="javascript:void(0);">Jasmin Perfume</a></p>
                                                  <p class="fs-12 text-muted mb-0">Assian Brand</p>
                                              </div>
                                          </div>
                                      </td>
                                      <td>
                                          <span>Electronic</span>
                                      </td>
                                      <td>$2,499</td>
                                      <td>194</td>
                                      <td><span class="badge bg-primary-transparent">Published</span></td>
                                      <td>
                                          <div class="d-flex align-items-center fw-semibold">
                                              <span class="avatar avatar-sm p-1 bg-light me-2 avatar-rounded">
                                                  <img src="{{ asset('/assets/images/faces/11.jpg') }}" alt="">
                                              </span>
                                              <a href="javascript:void(0);">Simon Cowel </a>
                                          </div>
                                      </td>
                                      <td>12,Aug 2023 - 11:21AM</td>
                                      <td>
                                          <div class="hstack gap-2 fs-15">
                                              <a href="edit-product.html"
                                                  class="btn btn-icon btn-sm btn-primary-light"><i
                                                      class="ri-edit-line"></i></a>
                                              <a href="javascript:void(0);"
                                                  class="btn btn-icon btn-sm btn-danger-light product-btn"><i
                                                      class="ri-delete-bin-line"></i></a>
                                          </div>
                                      </td>
                                  </tr>
                                  <tr class="product-list">
                                      <td class="product-checkbox"><input class="form-check-input"
                                              type="checkbox" id="product6" value="" aria-label="..."></td>
                                      <td>
                                          <div class="d-flex">
                                              <span
                                                  class="avatar avatar-md avatar-square bg-info-transparent p-1"><img
                                                      src="{{ asset('/assets/images/ecommerce/png/10.png') }}"
                                                      class="w-100 h-100" alt="..."></span>
                                              <div class="ms-2">
                                                  <p class="fw-semibold mb-0 d-flex align-items-center"><a
                                                          href="javascript:void(0);">Alarm Clock</a></p>
                                                  <p class="fs-12 text-muted mb-0">Trends Brand</p>
                                              </div>
                                          </div>
                                      </td>
                                      <td>
                                          <span>Clothing</span>
                                      </td>
                                      <td>$899</td>
                                      <td>267</td>
                                      <td>
                                          <span class="badge bg-secondary-transparent">Unpublished</span>
                                      </td>
                                      <td>
                                          <div class="d-flex align-items-center fw-semibold">
                                              <span class="avatar avatar-sm p-1 bg-light me-2 avatar-rounded">
                                                  <img src="{{ asset('/assets/images/faces/8.jpg') }}" alt="">
                                              </span>
                                              <a href="javascript:void(0);">Mirinda Hers</a>
                                          </div>
                                      </td>
                                      <td>05,Sep 2023 - 10:14AM</td>
                                      <td>
                                          <div class="hstack gap-2 fs-15">
                                              <a href="edit-product.html"
                                                  class="btn btn-icon btn-sm btn-primary-light"><i
                                                      class="ri-edit-line"></i></a>
                                              <a href="javascript:void(0);"
                                                  class="btn btn-icon btn-sm btn-danger-light product-btn"><i
                                                      class="ri-delete-bin-line"></i></a>
                                          </div>
                                      </td>
                                  </tr>
                                  <tr class="product-list">
                                      <td class="product-checkbox"><input class="form-check-input"
                                              type="checkbox" id="product7" value="" aria-label="..."></td>
                                      <td>
                                          <div class="d-flex">
                                              <span
                                                  class="avatar avatar-md avatar-square bg-warning-transparent p-1"><img
                                                      src="{{ asset('/assets/images/ecommerce/png/34.png') }}"
                                                      class="w-100 h-100" alt="..."></span>
                                              <div class="ms-2">
                                                  <p class="fw-semibold mb-0 d-flex align-items-center"><a
                                                          href="javascript:void(0);">Children School Bag</a>
                                                  </p>
                                                  <p class="fs-12 text-muted mb-0">Topstyle Brand</p>
                                              </div>
                                          </div>
                                      </td>
                                      <td>
                                          <span>Clothing</span>
                                      </td>
                                      <td>$499</td>
                                      <td>143</td>
                                      <td><span class="badge bg-primary-transparent">Published</span></td>
                                      <td>
                                          <div class="d-flex align-items-center fw-semibold">
                                              <span class="avatar avatar-sm p-1 bg-light me-2 avatar-rounded">
                                                  <img src="{{ asset('/assets/images/faces/1.jpg') }}" alt="">
                                              </span>
                                              <a href="javascript:void(0);">Simon Cowel</a>
                                          </div>
                                      </td>
                                      <td>18,Nov 2023 - 14:35PM</td>
                                      <td>
                                          <div class="hstack gap-2 fs-15">
                                              <a href="edit-product.html"
                                                  class="btn btn-icon btn-sm btn-primary-light"><i
                                                      class="ri-edit-line"></i></a>
                                              <a href="javascript:void(0);"
                                                  class="btn btn-icon btn-sm btn-danger-light product-btn"><i
                                                      class="ri-delete-bin-line"></i></a>
                                          </div>
                                      </td>
                                  </tr>
                                  <tr class="product-list">
                                      <td class="product-checkbox"><input class="form-check-input"
                                              type="checkbox" id="product8" value="" aria-label="..."></td>
                                      <td>
                                          <div class="d-flex">
                                              <span
                                                  class="avatar avatar-md avatar-square bg-pink-transparent p-1"><img
                                                      src="{{ asset('/assets/images/ecommerce/png/31.png') }}"
                                                      class="w-100 h-100" alt="..."></span>
                                              <div class="ms-2">
                                                  <p class="fw-semibold mb-0 d-flex align-items-center"><a
                                                          href="javascript:void(0);">Ladies Hand Bag</a></p>
                                                  <p class="fs-12 text-muted mb-0">Licker Brand</p>
                                              </div>
                                          </div>
                                      </td>
                                      <td>
                                          <span>Watches</span>
                                      </td>
                                      <td>$999</td>
                                      <td>365</td>
                                      <td><span class="badge bg-primary-transparent">Published</span></td>
                                      <td>
                                          <div class="d-flex align-items-center fw-semibold">
                                              <span class="avatar avatar-sm p-1 bg-light me-2 avatar-rounded">
                                                  <img src="{{ asset('/assets/images/faces/2.jpg') }}" alt="">
                                              </span>
                                              <a href="javascript:void(0);">Mirinda Hers</a>
                                          </div>
                                      </td>
                                      <td>27,Nov 2023 - 05:12AM</td>
                                      <td>
                                          <div class="hstack gap-2 fs-15">
                                              <a href="edit-product.html"
                                                  class="btn btn-icon btn-sm btn-primary-light"><i
                                                      class="ri-edit-line"></i></a>
                                              <a href="javascript:void(0);"
                                                  class="btn btn-icon btn-sm btn-danger-light product-btn"><i
                                                      class="ri-delete-bin-line"></i></a>
                                          </div>
                                      </td>
                                  </tr>
                                  <tr class="product-list">
                                      <td class="product-checkbox"><input class="form-check-input"
                                              type="checkbox" id="product9" value="" aria-label="..."></td>
                                      <td>
                                          <div class="d-flex">
                                              <span
                                                  class="avatar avatar-md avatar-square bg-info-transparent p-1"><img
                                                      src="{{ asset('/assets/images/ecommerce/png/35.png') }}"
                                                      class="w-100 h-100" alt="..."></span>
                                              <div class="ms-2">
                                                  <p class="fw-semibold mb-0 d-flex align-items-center"><a
                                                          href="javascript:void(0);">Samsung Headset</a></p>
                                                  <p class="fs-12 text-muted mb-0">Adidas Brand</p>
                                              </div>
                                          </div>
                                      </td>
                                      <td>
                                          <span>Footware</span>
                                      </td>
                                      <td>$1,499</td>
                                      <td>257</td>
                                      <td>
                                          <span class="badge bg-secondary-transparent">Unpublished</span>
                                      </td>
                                      <td>
                                          <div class="d-flex align-items-center fw-semibold">
                                              <span class="avatar avatar-sm p-1 bg-light me-2 avatar-rounded">
                                                  <img src="{{ asset('/assets/images/faces/9.jpg') }}" alt="">
                                              </span>
                                              <a href="javascript:void(0);">Jhon Trendy</a>
                                          </div>
                                      </td>
                                      <td>29,Nov 2023 - 16:32PM</td>
                                      <td>
                                          <div class="hstack gap-2 fs-15">
                                              <a href="edit-product.html"
                                                  class="btn btn-icon btn-sm btn-primary-light"><i
                                                      class="ri-edit-line"></i></a>
                                              <a href="javascript:void(0);"
                                                  class="btn btn-icon btn-sm btn-danger-light product-btn"><i
                                                      class="ri-delete-bin-line"></i></a>
                                          </div>
                                      </td>
                                  </tr>
                              </tbody>
                          </table>
                      </div>
                  </div>
                  <div class="card-footer">
                      <div class="d-flex align-items-center flex-wrap overflow-auto">
                          <div class="mb-2 mb-sm-0">
                              Showing <b>1</b> to <b>5</b> of <b>10</b> entries <i
                                  class="bi bi-arrow-right ms-2 fw-semibold"></i>
                          </div>
                          <div class="ms-auto">
                              <ul class="pagination mb-0 overflow-auto">
                                  <li class="page-item disabled">
                                      <a class="page-link">Previous</a>
                                  </li>
                                  <li class="page-item active" aria-current="page"><a class="page-link"
                                          href="javascript:void(0)">1</a></li>
                                  <li class="page-item">
                                      <a class="page-link" href="javascript:void(0)">2</a>
                                  </li>
                                  <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a>
                                  </li>
                                  <li class="page-item"><a class="page-link" href="javascript:void(0)">4</a>
                                  </li>
                                  <li class="page-item"><a class="page-link" href="javascript:void(0)">5</a>
                                  </li>
                                  <li class="page-item">
                                      <a class="page-link" href="javascript:void(0)">Next</a>
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