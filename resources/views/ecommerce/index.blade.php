@extends('layout.main')
@section('container')
<div class="main-content app-content">
    <div class="container-fluid">
        <div class="my-4 page-header-breadcrumb d-flex align-items-center justify-content-between flex-wrap gap-2">
            <div>
                <h1 class="page-title fw-medium fs-18 mb-2">Ecommerce</h1>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item">
                    <a href="{{ route('ecommerce') }}">
                        Ecommerce
                    </a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Main Menu</li>
                </ol>
                </div>
                <div class="btn-list">
                    <a href="{{ route('products') }}">
                        <button class="btn btn-primary-light btn-wave me-0 waves-effect waves-light">
                            <i class="ri-box-3-line align-middle"></i> View Products
                        </button>
                    </a>
                <button class="btn btn-secondary-light btn-wave me-0 waves-effect waves-light">
                    <i class="ri-upload-cloud-line align-middle"></i> Export Report
                </button>
            </div>
        </div>
        <div class="row">
            <div class="col-xxl-4">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card custom-card ecommerce-banner-card overflow-hidden">
                            <div class="card-body p-4">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <h4 class="fw-semibold">
                                            Welcome to our Store!
                                        </h4>
                                        <p class="fs-14">Discover the latest trends, shop our curated collections, and enjoy exclusive discounts.</p>
                                        <button class="btn btn-primary btn-wave mt-1">Start shopping now<i class="ti ti-arrow-narrow-right align-middle mx-1"></i></button>
                                    </div>
                                    <div class="col-sm-4">
                                        <img src="../assets/images/ecommerce/png/ecommerce.png" alt="" class="d-sm-block d-none">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card custom-card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between flex-wrap">
                                    <div>
                                        <div class="flex-fill mb-2">Total Orders</div>
                                        <h3 class="fw-semibold mb-2">15,432</h3>
                                        <div class="fs-13">
                                            <span class="mb-0"><span class="text-success me-1 d-inline-flex align-items-center"><i class="ti ti-trending-up align-middle me-1"></i>+4.2%</span></span>
                                            <span class="text-muted mb-0">This Month</span>
                                        </div>
                                    </div>
                                    <div class="avatar avatar-md avatar-rounded bg-primary svg-white">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><path d="M209.67,208H46.33a8.06,8.06,0,0,1-8-7.07l-14.25-120a8,8,0,0,1,8-8.93H223.92a8,8,0,0,1,8,8.93l-14.25,120A8.06,8.06,0,0,1,209.67,208Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M88,104V64a40,40,0,0,1,80,0v40" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card custom-card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between flex-wrap">
                                    <div>
                                        <div class="flex-fill mb-2">Total Visitors</div>
                                        <h3 class="fw-semibold mb-2">2,21,635</h3>
                                        <div class="fs-13">
                                            <span class="mb-0"><span class="text-danger me-1 d-inline-flex align-items-center"><i class="ti ti-trending-up align-middle me-1"></i>-2.54%</span></span>
                                            <span class="text-muted mb-0">This Month</span>
                                        </div>
                                    </div>
                                    <div class="avatar avatar-md avatar-rounded bg-secondary svg-white">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><circle cx="128" cy="120" r="40" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M63.8,199.37a72,72,0,0,1,128.4,0" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="176" y1="56" x2="224" y2="56" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="200" y1="32" x2="200" y2="80" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M222.67,112A95.92,95.92,0,1,1,144,33.33" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card custom-card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between flex-wrap">
                                    <div>
                                        <div class="flex-fill mb-2">Total Sales</div>
                                        <h3 class="fw-semibold mb-2">27,525</h3>
                                        <div class="fs-13">
                                            <span class="mb-0"><span class="text-success me-1 d-inline-flex align-items-center"><i class="ti ti-trending-up align-middle me-1"></i>+0.94%</span></span>
                                            <span class="text-muted mb-0">This Month</span>
                                        </div>
                                    </div>
                                    <div class="avatar avatar-md avatar-rounded bg-success svg-white">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><polyline points="48 208 48 136 96 136" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="224" y1="208" x2="32" y2="208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><polyline points="96 208 96 88 152 88" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><polyline points="152 208 152 40 208 40 208 208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card custom-card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between flex-wrap">
                                    <div>
                                        <div class="flex-fill mb-2">Total Products</div>
                                        <h3 class="fw-semibold mb-2">1,25,032</h3>
                                        <div class="fs-13">
                                            <span class="mb-0"><span class="text-danger me-1 d-inline-flex align-items-center"><i class="ti ti-trending-up align-middle me-1"></i>+5.20%</span></span>
                                            <span class="text-muted mb-0">This Month</span>
                                        </div>
                                    </div>
                                    <div class="avatar avatar-md avatar-rounded bg-info svg-white">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><polyline points="32.7 76.92 128 129.08 223.3 76.92" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M131.84,25l88,48.18a8,8,0,0,1,4.16,7v95.64a8,8,0,0,1-4.16,7l-88,48.18a8,8,0,0,1-7.68,0l-88-48.18a8,8,0,0,1-4.16-7V80.18a8,8,0,0,1,4.16-7l88-48.18A8,8,0,0,1,131.84,25Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="128" y1="129.09" x2="128" y2="232" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-5">
                <div class="card custom-card">
                    <div class="card-header justify-content-between">
                        <div class="card-title">
                            Revenue Overview
                        </div>
                        <div class="d-flex gap-2">
                            <div class="btn btn-sm btn-outline-primary btn-wave">Today</div>
                            <div class="btn btn-sm btn-outline-primary btn-wave">Weakly</div>
                            <div class="btn btn-sm btn-primary btn-wave">Yearly</div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row mx-3 gy-3">
                            <div class="col-xl-4 col-sm-4 col-12">
                                <div class="text-center p-3 bg-light rounded border border-dashed">
                                    <span class="mb-0 d-block">Total Orders</span>
                                    <div class="mt-1">
                                        <span class="mb-0 fw-semibold h5">684
                                    </span></div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-4 col-12">
                                <div class="text-center p-3 bg-light rounded border border-dashed">
                                    <span class="mb-0 d-block">Total Sales</span>
                                    <div class="mt-1">
                                        <span class="mb-0 fw-semibold h5">1,284
                                    </span></div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-4 col-12">
                                <div class="text-center p-3 bg-light rounded border border-dashed">
                                    <span class="mb-0 d-block">Profit Per Sale :</span>
                                    <div class="mt-1">
                                        <span class="fw-semibold text-success h5 mb-0"><i class="ti ti-arrow-narrow-up align-middle"></i>+5.64%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="revenue-overview"></div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3">
                <div class="card custom-card">
                    <div class="card-header">
                        <div class="card-title">
                            Top Selling Products
                        </div>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled ecommerce-top-selling-list">
                            <li>
                                <div class="d-flex align-items-center flex-wrap">
                                    <div class="me-3 lh-1">
                                        <span class="avatar avatar-md">
                                            <img src="../assets/images/ecommerce/jpg/2.jpg" alt="">
                                        </span>    
                                    </div>
                                    <div class=" flex-fill">
                                        <span class="d-block mb-0 fw-semibold">Noice Headphones</span>
                                        <span class="text-muted fs-13">Electronics</span>
                                    </div>
                                    <div class="text-end">
                                        <span class="mb-0 d-block h6 fw-semibold">$49</span>
                                        <span class="mb-0 d-block text-muted fs-13">15,064 Sales</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-center flex-wrap">
                                    <div class="me-3 lh-1">
                                        <span class="avatar avatar-md">
                                            <img src="../assets/images/ecommerce/jpg/02.jpg" alt="">
                                        </span>
                                    </div>
                                    <div class="flex-fill">
                                        <span class="d-block mb-0 fw-semibold">Sneakers</span>
                                        <span class="text-muted fs-13">Fashion</span>
                                    </div>
                                    <div class="text-end">
                                        <span class="mb-0 d-block h6 fw-semibold">$799</span>
                                        <span class="mb-0 d-block text-muted fs-13">14,862 Sales</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-center flex-wrap">
                                    <div class="me-3 lh-1">
                                        <span class="avatar avatar-md">
                                            <img src="../assets/images/ecommerce/jpg/03.jpg" alt="">
                                        </span>
                                    </div>
                                    <div class="flex-fill">
                                        <span class="d-block mb-0 fw-semibold">School Bags</span>
                                        <span class="text-muted fs-13">Education</span>
                                    </div>
                                    <div class="text-end">
                                        <span class="mb-0 h6 d-block fw-semibold">$99</span>
                                        <span class="mb-0 text-muted d-block fs-13">20,124 Sales</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-center flex-wrap">
                                    <div class="me-3 lh-1">
                                        <span class="avatar avatar-md">
                                            <img src="../assets/images/ecommerce/jpg/04.jpg" alt="">
                                        </span>
                                    </div>
                                    <div class="flex-fill">
                                        <span class="d-block mb-0 fw-semibold">Sun Glasses</span>
                                        <span class="text-muted fs-13">Fashion</span>
                                    </div>
                                    <div class="text-end">
                                        <span class="mb-0 h6 d-block fw-semibold">$320</span>
                                        <span class="mb-0 text-muted d-block fs-13">18,673 Sales</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-center flex-wrap">
                                    <div class="me-3 lh-1">
                                        <span class="avatar avatar-md">
                                            <img src="../assets/images/ecommerce/jpg/05.jpg" alt="">
                                        </span>
                                    </div>
                                    <div class="flex-fill">
                                        <span class="d-block mb-0 fw-semibold">Refrigirator</span>
                                        <span class="text-muted fs-13">Electronics</span>
                                    </div>
                                    <div class="text-end">
                                        <span class="mb-0 h6 d-block fw-semibold">$1,299</span>
                                        <span class="mb-0 text-muted d-block fs-13">15,233 Sales</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-center flex-wrap">
                                    <div class="me-3 lh-1">
                                        <span class="avatar avatar-md">
                                            <img src="../assets/images/ecommerce/jpg/3.jpg" alt="">
                                        </span>
                                    </div>
                                    <div class="flex-fill">
                                        <span class="d-block mb-0 fw-semibold">Workon Clock</span>
                                        <span class="text-muted fs-13">Clocks</span>
                                    </div>
                                    <div class="text-end">
                                        <span class="mb-0 h6 d-block fw-semibold">$249</span>
                                        <span class="mb-0 text-muted d-block fs-13">12,451 Sales</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-center flex-wrap">
                                    <div class="me-3 lh-1">
                                        <span class="avatar avatar-md">
                                            <img src="../assets/images/ecommerce/jpg/06.jpg" alt="">
                                        </span>
                                    </div>
                                    <div class="flex-fill">
                                        <span class="d-block mb-0 fw-semibold">Dizo Digital Camera</span>
                                        <span class="text-muted fs-13">Gadgets</span>
                                    </div>
                                    <div class="text-end">
                                        <span class="mb-0 h6 d-block fw-semibold">$1499</span>
                                        <span class="mb-0 text-muted d-block fs-13">9,754 Sales</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xxl-3">
                <div class="card custom-card">
                    <div class="card-header">
                        <div class="card-title">
                            Orders Summary
                        </div>
                    </div>
                    <div class="card-body">
                        <div id="orders-summary"></div>
                    </div>
                    <div class="card-footer">
                        <div class="row gy-3">
                            <div class="col-xl-12">
                                <div class="d-flex align-items-center gap-2">
                                    <div>
                                        <span class="avatar avatar-sm bg-primary-transparent">
                                            <i class="ti ti-box fs-17"></i>
                                        </span>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between flex-fill">
                                        <span class="d-block flex-fill">Delivered</span>
                                        <span class="d-block fw-semibold h6 mb-0"><span class="me-2 text-success fs-13 d-inline-flex align-items-center"><i class="ti ti-arrow-narrow-up align-middle"></i>0.75%</span>1,754</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="d-flex align-items-center gap-2">
                                    <div>
                                        <span class="avatar avatar-sm bg-secondary-transparent">
                                            <i class="ti ti-circle-x fs-17"></i>
                                        </span>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between flex-fill">
                                        <span class="d-block flex-fill">Cancelled</span>
                                        <span class="d-block fw-semibold h6 mb-0"><span class="me-2 text-danger fs-13 d-inline-flex align-items-center"><i class="ti ti-arrow-narrow-down align-middle"></i>5.64%</span>1,234</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="d-flex align-items-center gap-2">
                                    <div>
                                        <span class="avatar avatar-sm bg-success-transparent">
                                            <i class="ti ti-file-alert fs-17"></i>
                                        </span>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between flex-fill">
                                        <span class="d-block flex-fill">Pending</span>
                                        <span class="d-block fw-semibold h6 mb-0"><span class="me-2 text-success fs-13 d-inline-flex align-items-center"><i class="ti ti-arrow-narrow-up align-middle"></i>2.90%</span>878</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="d-flex align-items-center gap-2">
                                    <div>
                                        <span class="avatar avatar-sm bg-info-transparent">
                                            <i class="ti ti-jump-rope fs-17"></i>
                                        </span>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between flex-fill">
                                        <span class="d-block flex-fill">Returned</span>
                                        <span class="d-block fw-semibold h6 mb-0"><span class="me-2 text-success fs-13 d-inline-flex align-items-center"><i class="ti ti-arrow-narrow-up align-middle"></i>1.55%</span>270</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-6">
                <div class="card custom-card overflow-hidden">
                    <div class="card-header justify-content-between">
                        <div class="card-title">Recent Orders</div>
                        <a href="javascript:void(0);" class="btn btn-outline-light border d-flex align-items-center text-muted btn-sm">
                            View All
                        </a>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table text-nowrap">
                                <thead>
                                    <tr>
                                        <th scope="col">Order ID</th>
                                        <th scope="col">Customer</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Amount</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><a href="javascript:void(0);" class="text-primary">#SPK781</a></td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="me-2 lh-1">
                                                    <span class="avatar avatar-md">
                                                        <img src="../assets/images/faces/1.jpg" alt="">
                                                    </span>
                                                </div>
                                                <div>
                                                    <a href="javascript:void(0)" class="fs-14 fw-medium">Simon Cowall</a>
                                                    <span class="fs-13 text-muted d-block">simoncowall209@gmail.com</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="d-block text-muted">Feb 22,2024</span>
                                        </td>
                                        <td>
                                            <span class="d-block mb-0 fw-semibold">$1,234.78</span>
                                        </td>
                                        <td><span class="badge bg-success-transparent">Paid</span></td>
                                    </tr>
                                    <tr>
                                        <td><a href="javascript:void(0);" class="text-primary">#SPK782</a></td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="me-2 lh-1">
                                                    <span class="avatar avatar-md">
                                                        <img src="../assets/images/faces/4.jpg" alt="">
                                                    </span>
                                                </div>
                                                <div>
                                                    <a href="javascript:void(0)" class="fs-14 fw-medium">Meisha Kerr</a>
                                                    <span class="fs-13 text-muted d-block">meishakerr766@gmail.com</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="d-block text-muted">Feb 23,2024</span>
                                        </td>
                                        <td>
                                            <span class="d-block mb-0 fw-semibold">$2,452.00</span>
                                        </td>
                                        <td><span class="badge bg-danger-transparent">Unpaid</span></td>
                                    </tr>
                                    <tr>
                                        <td><a href="javascript:void(0);" class="text-primary">#SPK783</a></td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="me-2 lh-1">
                                                    <span class="avatar avatar-md">
                                                        <img src="../assets/images/faces/10.jpg" alt="">
                                                    </span>
                                                </div>
                                                <div>
                                                    <a href="javascript:void(0)" class="fs-14 fw-medium">Jessica</a>
                                                    <span class="fs-13 text-muted d-block">jessica041@gmail.com</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="d-block text-muted">Feb 24,2024</span>
                                        </td>
                                        <td>
                                            <span class="d-block mb-0 fw-semibold">$1,544.99</span>
                                        </td>
                                        <td><span class="badge bg-success-transparent">Paid</span></td>
                                    </tr>
                                    <tr>
                                        <td><a href="javascript:void(0);" class="text-primary">#SPK784</a></td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="me-2 lh-1">
                                                    <span class="avatar avatar-md">
                                                        <img src="../assets/images/faces/2.jpg" alt="">
                                                    </span>
                                                </div>
                                                <div>
                                                    <a href="javascript:void(0)" class="fs-14 fw-medium">Amanda B</a>
                                                    <span class="fs-13 text-muted d-block">amandab144@gmail.com</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="d-block text-muted">Feb 25,2024</span>
                                        </td>
                                        <td>
                                            <span class="d-block mb-0 fw-semibold">$1,645.49</span>
                                        </td>
                                        <td><span class="badge bg-warning-transparent">Pending</span></td>
                                    </tr>
                                    <tr>
                                        <td class="border-bottom-0"><a href="javascript:void(0);" class="text-primary">#SPK785</a></td>
                                        <td class="border-bottom-0">
                                            <div class="d-flex align-items-center">
                                                <div class="me-2 lh-1">
                                                    <span class="avatar avatar-md">
                                                        <img src="../assets/images/faces/11.jpg" alt="">
                                                    </span>
                                                </div>
                                                <div>
                                                    <a href="javascript:void(0)" class="fs-14 fw-medium">Jason Stathman</a>
                                                    <span class="fs-13 text-muted d-block">sjasonstathman@gmail.com</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="border-bottom-0">
                                            <span class="d-block text-muted">Feb 22,2024</span>
                                        </td>
                                        <td class="border-bottom-0">
                                            <span class="d-block mb-0 fw-semibold">$4,550.99</span>
                                        </td>
                                        <td class="border-bottom-0"><span class="badge bg-danger-transparent">UnPaid</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3">
                <div class="card custom-card">
                    <div class="card-header">
                        <div class="card-title">
                            Visitors By Country
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex align-items-center gap-2 mb-3">
                            <div class="lh-1">
                                <span class="avatar avatar-md bg-primary">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><circle cx="128" cy="96" r="64" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M32,216c19.37-33.47,54.55-56,96-56s76.63,22.53,96,56" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                                </span>
                            </div>
                            <div class="flex-fill">
                                <span class="d-block mb-1">Total Visitors</span>
                                <h5 class="mb-0 fw-semibold text-default">1,739k</h5>
                            </div>
                            <div class="text-muted text-end">
                                <span class="badge bg-success-transparent text-success d-inline-flex align-items-center"><i class="ti ti-trending-up text-success me-1"></i>+4.2%</span>
                                <span class="fs-13 d-block mt-1">This month</span>
                            </div>
                        </div>
                        <ul class="list-unstyled ecommerce-visitors-country-list">
                            <li>
                                <div>
                                    <div class="mb-2 d-flex align-items-center justify-content-between">
                                        <span class="d-block">France</span>
                                        <span class="h6 mb-0 fw-semibold">1,354</span>
                                    </div>
                                    <div class="progress progress-animate progress-xs" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-primary" style="width: 80%"></div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <div class="mb-2 d-flex align-items-center justify-content-between">
                                        <span class="d-block">Argentina</span>
                                        <span class="h6 mb-0 fw-semibold">1,176</span>
                                    </div>
                                    <div class="progress progress-animate progress-xs" role="progressbar" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-secondary" style="width: 72%"></div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <div class="mb-2 d-flex align-items-center justify-content-between">
                                        <span class="d-block">China</span>
                                        <span class="h6 mb-0 fw-semibold">943</span>
                                    </div>
                                    <div class="progress progress-animate progress-xs" role="progressbar" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-success" style="width: 67%"></div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <div class="mb-2 d-flex align-items-center justify-content-between">
                                        <span class="d-block">Canada</span>
                                        <span class="h6 mb-0 fw-semibold">675</span>
                                    </div>
                                    <div class="progress progress-animate progress-xs" role="progressbar" aria-valuenow="53" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-warning" style="width: 53%"></div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <div class="mb-2 d-flex align-items-center justify-content-between">
                                        <span class="d-block">Germany</span>
                                        <span class="h6 mb-0 fw-semibold">1,253</span>
                                    </div>
                                    <div class="progress progress-animate progress-xs" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-info" style="width: 75%"></div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <div class="mb-2 d-flex align-items-center justify-content-between">
                                        <span class="d-block">Russia</span>
                                        <span class="h6 mb-0 fw-semibold">367</span>
                                    </div>
                                    <div class="progress progress-animate progress-xs" role="progressbar" aria-valuenow="39" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-danger" style="width: 39%"></div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xxl-9">
                <div class="card custom-card">
                    <div class="card-header justify-content-between">
                        <div class="card-title">
                            Products Summary
                        </div>
                        <div class="d-flex flex-wrap gap-2"> 
                            <div> 
                                <input class="form-control form-control-sm" type="text" placeholder="Search Here" aria-label=".form-control-sm example"> 
                            </div> 
                            <div class="dropdown"> 
                                <a href="javascript:void(0);" class="btn btn-primary btn-sm btn-wave waves-effect waves-light" data-bs-toggle="dropdown" aria-expanded="false"> Sort By<i class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i> 
                                </a> 
                                <ul class="dropdown-menu" role="menu"> 
                                    <li><a class="dropdown-item" href="javascript:void(0);">New</a></li> 
                                    <li><a class="dropdown-item" href="javascript:void(0);">Popular</a></li> 
                                    <li><a class="dropdown-item" href="javascript:void(0);">Relevant</a></li> 
                                </ul> 
                            </div> 
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table text-nowrap">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Client Name</th>
                                        <th>Product</th>
                                        <th>Transaction ID</th>
                                        <th>Status</th>
                                        <th>Cost</th>
                                        <th>Payment Method</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="">10-11-21</td>
                                        <td><a href="javascript:void(0);">Santi Argo</a></td>
                                        <td class="brder-bottom-0">
                                            <div class="d-flex align-items-center">
                                                <div class="avatar avatar-sm me-2">
                                                    <img src="../assets/images/ecommerce/jpg/2.jpg" alt="avatar" class="">
                                                </div>
                                                <a href="javascript:void(0)">Sed vero et ipsum et</a>
                                            </div>
                                        </td>
                                        <td><a href="javascript:void(0);">#23412858169</a></td>
                                        <td><span class="badge bg-primary-transparent">Shipped</span></td>
                                        <td>$18,900</td>
                                        <td>Cash On Delivery</td>
                                        <td>
                                            <div class="btn-list">
                                                <a href="javascript:void(0)" class="btn btn-icon btn-sm btn-primary-light"><i class="ti ti-edit"></i></a>
                                                <a href="javascript:void(0)" class="btn btn-icon btn-sm btn-secondary-light"><i class="ti ti-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="">26-01-22</td>
                                        <td><a href="javascript:void(0);">Carmen Goh</a></td>
                                        <td class="brder-bottom-0">
                                            <div class="d-flex align-items-center">
                                                <div class="avatar avatar-sm me-2">
                                                    <img src="../assets/images/ecommerce/jpg/02.jpg" alt="avatar" class="">
                                                </div>
                                                <a href="javascript:void(0);">Rebum dolores at erat ipsum</a>
                                            </div>
                                        </td>
                                        <td><a href="javascript:void(0);">#51702935164</a></td>
                                        <td><span class="badge bg-secondary-transparent">Pending</span></td>
                                        <td>$3,200</td>
                                        <td>Online</td>
                                        <td>
                                            <div class="btn-list">
                                                <a href="javascript:void(0)" class="btn btn-icon btn-sm btn-primary-light"><i class="ti ti-edit"></i></a>
                                                <a href="javascript:void(0)" class="btn btn-icon btn-sm btn-secondary-light"><i class="ti ti-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="">01-01-22</td>
                                        <td><a href="javascript:void(0);">Ruby Bartlett</a></td>
                                        <td class="brder-bottom-0">
                                            <div class="d-flex align-items-center">
                                                <div class="avatar avatar-sm me-2">
                                                    <img src="../assets/images/ecommerce/jpg/03.jpg" alt="avatar" class="">
                                                </div>
                                                <a href="javascript:void(0);">No voluptua amet sit clita</a>
                                            </div>
                                        </td>
                                        <td><a href="javascript:void(0);">#31201254680</a></td>
                                        <td><span class="badge bg-danger-transparent">Cancelled</span></td>
                                        <td>$15,500</td>
                                        <td>Online</td>
                                        <td>
                                            <div class="btn-list">
                                                <a href="javascript:void(0)" class="btn btn-icon btn-sm btn-primary-light"><i class="ti ti-edit"></i></a>
                                                <a href="javascript:void(0)" class="btn btn-icon btn-sm btn-secondary-light"><i class="ti ti-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="">06-08-21</td>
                                        <td><a href="javascript:void(0);">Anne Gloindian</a></td>
                                        <td class="brder-bottom-0">
                                            <div class="d-flex align-items-center">
                                                <div class="avatar avatar-sm me-2">
                                                    <img src="../assets/images/ecommerce/jpg/04.jpg" alt="avatar" class="">
                                                </div>
                                                <a href="javascript:void(0);">No stet eos justo voluptua</a>
                                            </div>
                                        </td>
                                        <td><a href="javascript:void(0);">#91012557664</a></td>
                                        <td><span class="badge bg-danger-transparent">Cancelled</span></td>
                                        <td>$6,700</td>
                                        <td>Cash On Delivery</td>
                                        <td>
                                            <div class="btn-list">
                                                <a href="javascript:void(0)" class="btn btn-icon btn-sm btn-primary-light"><i class="ti ti-edit"></i></a>
                                                <a href="javascript:void(0)" class="btn btn-icon btn-sm btn-secondary-light"><i class="ti ti-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="border-bottom-0">17-09-21</td>
                                        <td class="border-bottom-0"><a href="javascript:void(0);">Emma Grate</a></td>
                                        <td class="border-bottom-0">
                                            <div class="d-flex align-items-center">
                                                <div class="avatar avatar-sm me-2">
                                                    <img src="../assets/images/ecommerce/jpg/06.jpg" alt="avatar" class="">
                                                </div>
                                                <a href="javascript:void(0);">Ipsum et sit diam ut</a>
                                            </div>
                                        </td>
                                        <td class="border-bottom-0"><a href="javascript:void(0);">#71802951620</a></td>
                                        <td class="border-bottom-0"><span class="badge bg-success-transparent">Delivered</span></td>
                                        <td class="border-bottom-0">$22,600</td>
                                        <td class="border-bottom-0">Online</td>
                                        <td class="border-bottom-0">
                                            <div class="btn-list">
                                                <a href="javascript:void(0)" class="btn btn-icon btn-sm btn-primary-light"><i class="ti ti-edit"></i></a>
                                                <a href="javascript:void(0)" class="btn btn-icon btn-sm btn-secondary-light"><i class="ti ti-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        
                    </div>
                    <div class="card-footer"> 
                        <div class="d-flex align-items-center"> 
                            <div> Showing 5 Entries <i class="bi bi-arrow-right ms-2 fw-semibold"></i> </div>
                            <div class="ms-auto"> 
                            <nav aria-label="Page navigation" class="pagination-style-4"> 
                                <ul class="pagination mb-0"> 
                                    <li class="page-item disabled"> <a class="page-link" href="javascript:void(0);"> Prev </a> </li>
                                        <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li> 
                                        <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li> 
                                        <li class="page-item"> <a class="page-link text-primary" href="javascript:void(0);"> next </a> </li> 
                                    </ul> 
                                </nav> 
                            </div> 
                        </div> 
                    </div>
                </div>
            </div>
            <div class="col-xxl-3">
                <div class="card custom-card">
                    <div class="card-header">
                        <div class="card-title">
                            Top Customers
                        </div>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled mb-0 ecommerce-top-customers-list"> 
                            <li> 
                                <a href="javascript:void(0);"> 
                                    <div class="d-flex align-items-center justify-content-between"> 
                                        <div class="d-flex align-items-center justify-content-center"> 
                                            <div class="me-2"> 
                                                <span class="avatar avatar-md bg-primary-transparent"> 
                                                    EW
                                                </span> 
                                            </div> 
                                            <div> 
                                                <p class="mb-0 fw-semibold">Emma Wilson</p>
                                                <p class="mb-0 text-muted fs-13">15 Purchases<i class="bi bi-patch-check-fill text-primary ms-2"></i></p>
                                            </div> 
                                        </div> 
                                                
                                        <div class="text-end"> 
                                            <span class="text-muted d-block fs-13">Sale Value</span> 
                                            <span class="fw-semibold h6 mb-0">$1,835</span> 
                                        </div> 
                                    </div> 
                                </a> 
                            </li> 
                            <li> 
                                <a href="javascript:void(0);"> 
                                    <div class="d-flex align-items-center justify-content-between"> 
                                        <div class="d-flex align-items-center justify-content-center"> 
                                            <div class="me-2"> 
                                                <span class="avatar avatar-md bg-secondary-transparent"> 
                                                    RL
                                                </span> 
                                            </div> 
                                            <div> 
                                                <p class="mb-0 fw-semibold">Robert Lewis</p>
                                                <p class="mb-0 text-muted fs-13">18 Purchases<i class="bi bi-patch-check-fill text-primary ms-2"></i></p>
                                            </div> 
                                        </div> 
                                        <div class="text-end"> 
                                            <span class="text-muted d-block fs-13">Sale Value</span> 
                                            <span class="fw-semibold h6 mb-0">$2,415</span> 
                                        </div> 
                                    </div> 
                                </a> 
                            </li> 
                            <li> 
                                <a href="javascript:void(0);"> 
                                    <div class="d-flex align-items-center justify-content-between"> 
                                        <div class="d-flex align-items-center justify-content-center"> 
                                            <div class="me-2"> 
                                                <span class="avatar avatar-md bg-success-transparent"> 
                                                    AH
                                                </span> 
                                            </div> 
                                            <div> 
                                                <p class="mb-0 fw-semibold">Angelina Hose</p>
                                                <p class="mb-0 text-muted fs-13">21 Purchases<i class="bi bi-patch-check-fill text-primary ms-2"></i></p>
                                            </div> 
                                        </div> 
                                        <div class="text-end"> 
                                            <span class="text-muted d-block fs-13">Sale Value</span> 
                                            <span class="fw-semibold h6 mb-0">$2,341</span> 
                                        </div> 
                                    </div> 
                                </a> 
                            </li> 
                            <li> 
                                <a href="javascript:void(0);"> 
                                    <div class="d-flex align-items-center justify-content-between"> 
                                        <div class="d-flex align-items-center justify-content-center"> 
                                            <div class="me-2"> 
                                                <span class="avatar avatar-md bg-warning-transparent"> 
                                                    SS
                                                </span> 
                                            </div> 
                                            <div> 
                                                <p class="mb-0 fw-semibold">Samantha Sam</p>
                                                <p class="mb-0 text-muted fs-13">24 Purchases<i class="bi bi-patch-check-fill text-primary ms-2"></i></p>
                                            </div> 
                                        </div> 
                                        <div class="text-end"> 
                                            <span class="text-muted d-block fs-13">Sale Value</span> 
                                            <span class="fw-semibold h6 mb-0">$2,624</span> 
                                        </div> 
                                    </div> 
                                </a> 
                            </li> 
                            <li> 
                                <a href="javascript:void(0);"> 
                                    <div class="d-flex align-items-center justify-content-between"> 
                                        <div class="d-flex align-items-center justify-content-center"> 
                                            <div class="me-2"> 
                                                <span class="avatar avatar-md bg-info-transparent"> 
                                                    DS
                                                </span> 
                                            </div> 
                                            <div> 
                                                <p class="mb-0 fw-semibold">Dwayne Smith</p>
                                                <p class="mb-0 text-muted fs-13">32 Purchases<i class="bi bi-patch-check-fill text-primary ms-2"></i></p>
                                            </div> 
                                        </div> 
                                        <div class="text-end"> 
                                            <span class="text-muted d-block fs-13">Sale Value</span> 
                                            <span class="fw-semibold h6 mb-0">$3,172</span> 
                                        </div> 
                                    </div> 
                                </a> 
                            </li> 
                            <li> 
                                <a href="javascript:void(0);"> 
                                    <div class="d-flex align-items-center justify-content-between"> 
                                        <div class="d-flex align-items-center justify-content-center"> 
                                            <div class="me-2"> 
                                                <span class="avatar avatar-md bg-danger-transparent"> 
                                                    AH
                                                </span> 
                                            </div> 
                                            <div> 
                                                <p class="mb-0 fw-semibold">Alexa Healy</p>
                                                <p class="mb-0 text-muted fs-13">45 Purchases<i class="bi bi-patch-check-fill text-primary ms-2"></i></p>
                                            </div> 
                                        </div> 
                                        <div class="text-end"> 
                                            <span class="text-muted d-block fs-13">Sale Value</span> 
                                            <span class="fw-semibold h6 mb-0">$2,534</span> 
                                        </div> 
                                    </div> 
                                </a> 
                            </li> 
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection