<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-theme-mode="light" data-header-styles="light" data-width="fullwidth" data-menu-styles="light" data-toggled="close" loader="disable">
  <head>
    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Lintas Inovasi Global | Dashboard </title>
    <meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
    <meta name="Author" content="Wcsrm Software Private Limited">
    <meta name="keywords" content="lintas inovasi global, bootstrap template, admin panel bootstrap, bootstrap dashboard, admin, admin dashboard template, dashboard template, html css templates, dashboard, template dashboard,  bootstrap dashboard template, dashboard html css, bootstrap admin dashboard,  bootstrap admin, dashboard template, bootstrap5 admin template">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <link rel="icon" href="{{ asset('/assets/images/brand-logos/favicon.ico') }}" type="image/x-icon">
    <script src="{{ asset('/assets/libs/choices.js/public/assets/scripts/choices.min.js') }}"></script>
    <script src="{{ asset('/assets/js/main.js') }}"></script>
    <link id="style" href="{{ asset('/assets/libs/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" >
    <link href="{{ asset('/assets/css/styles.css') }}" rel="stylesheet" >
    <link href="{{ asset('/assets/css/icons.css') }}" rel="stylesheet" >
    <link href="{{ asset('/assets/libs/node-waves/waves.min.css') }}" rel="stylesheet" > 
    <link href="{{ asset('/assets/libs/simplebar/simplebar.min.css') }}" rel="stylesheet" >
    <link rel="stylesheet" href="{{ asset('/assets/libs/swiper/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/libs/flatpickr/flatpickr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/libs/@simonwep/pickr/themes/nano.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/libs/choices.js/public/assets/styles/choices.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/libs/flatpickr/flatpickr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/libs/@tarekraafat/autocomplete.js/css/autoComplete.css') }}">
  </head>

  <body>
    <!-- Start Switcher -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="switcher-canvas" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header border-bottom d-block p-0">
            <div class="d-flex align-items-center justify-content-between p-3">
                <h5 class="offcanvas-title text-default" id="offcanvasRightLabel">Switcher</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <nav class="border-top border-block-start-dashed">
                <div class="nav nav-tabs nav-justified" id="switcher-main-tab" role="tablist">
                    <button class="nav-link active" id="switcher-home-tab" data-bs-toggle="tab" data-bs-target="#switcher-home"
                        type="button" role="tab" aria-controls="switcher-home" aria-selected="true">Theme Styles</button>
                    <button class="nav-link" id="switcher-profile-tab" data-bs-toggle="tab" data-bs-target="#switcher-profile"
                        type="button" role="tab" aria-controls="switcher-profile" aria-selected="false">Theme Colors</button>
                </div>
            </nav>
        </div>
        <div class="offcanvas-body">
          <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active border-0" id="switcher-home" role="tabpanel" aria-labelledby="switcher-home-tab"
              tabindex="0">
              <div class="">
                <p class="switcher-style-head">Theme Color Mode:</p>
                <div class="row switcher-style gx-0">
                  <div class="col-4">
                    <div class="form-check switch-select">
                      <label class="form-check-label" for="switcher-light-theme">
                        Light
                      </label>
                      <input class="form-check-input" type="radio" name="theme-style" id="switcher-light-theme"
                        checked>
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="form-check switch-select">
                      <label class="form-check-label" for="switcher-dark-theme">
                        Dark
                      </label>
                      <input class="form-check-input" type="radio" name="theme-style" id="switcher-dark-theme">
                    </div>
                  </div>
                </div>
              </div>
              <div class="">
                <p class="switcher-style-head">Directions:</p>
                <div class="row switcher-style gx-0">
                  <div class="col-4">
                    <div class="form-check switch-select">
                      <label class="form-check-label" for="switcher-ltr">
                          LTR
                      </label>
                      <input class="form-check-input" type="radio" name="direction" id="switcher-ltr" checked>
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="form-check switch-select">
                      <label class="form-check-label" for="switcher-rtl">
                        RTL
                      </label>
                      <input class="form-check-input" type="radio" name="direction" id="switcher-rtl">
                    </div>
                  </div>
                </div>
              </div>
              <div class="">
                <p class="switcher-style-head">Navigation Styles:</p>
                <div class="row switcher-style gx-0">
                  <div class="col-4">
                    <div class="form-check switch-select">
                      <label class="form-check-label" for="switcher-vertical">
                        Vertical
                      </label>
                      <input class="form-check-input" type="radio" name="navigation-style" id="switcher-vertical"
                        checked>
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="form-check switch-select">
                      <label class="form-check-label" for="switcher-horizontal">
                        Horizontal
                      </label>
                      <input class="form-check-input" type="radio" name="navigation-style"
                        id="switcher-horizontal">
                    </div>
                  </div>
                </div>
              </div>
              <div class="navigation-menu-styles">
                <p class="switcher-style-head">Vertical & Horizontal Menu Styles:</p>
                <div class="row switcher-style gx-0 pb-2 gy-2">
                  <div class="col-4">
                    <div class="form-check switch-select">
                      <label class="form-check-label" for="switcher-menu-click">
                        Menu Click
                      </label>
                      <input class="form-check-input" type="radio" name="navigation-menu-styles"
                        id="switcher-menu-click">
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="form-check switch-select">
                      <label class="form-check-label" for="switcher-menu-hover">
                        Menu Hover
                      </label>
                      <input class="form-check-input" type="radio" name="navigation-menu-styles"
                        id="switcher-menu-hover">
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="form-check switch-select">
                      <label class="form-check-label" for="switcher-icon-click">
                        Icon Click
                      </label>
                      <input class="form-check-input" type="radio" name="navigation-menu-styles"
                        id="switcher-icon-click">
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="form-check switch-select">
                      <label class="form-check-label" for="switcher-icon-hover">
                        Icon Hover
                      </label>
                      <input class="form-check-input" type="radio" name="navigation-menu-styles"
                        id="switcher-icon-hover">
                    </div>
                  </div>
                </div>
              </div>
              <div class="sidemenu-layout-styles">
                <p class="switcher-style-head">Sidemenu Layout Styles:</p>
                <div class="row switcher-style gx-0 pb-2 gy-2">
                  <div class="col-sm-6">
                    <div class="form-check switch-select">
                      <label class="form-check-label" for="switcher-default-menu">
                        Default Menu
                      </label>
                      <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                        id="switcher-default-menu" checked>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-check switch-select">
                      <label class="form-check-label" for="switcher-closed-menu">
                        Closed Menu
                      </label>
                      <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                        id="switcher-closed-menu">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-check switch-select">
                      <label class="form-check-label" for="switcher-icontext-menu">
                        Icon Text
                      </label>
                      <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                        id="switcher-icontext-menu">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-check switch-select">
                      <label class="form-check-label" for="switcher-icon-overlay">
                        Icon Overlay
                      </label>
                      <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                        id="switcher-icon-overlay">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-check switch-select">
                      <label class="form-check-label" for="switcher-detached">
                        Detached
                      </label>
                      <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                        id="switcher-detached">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-check switch-select">
                      <label class="form-check-label" for="switcher-double-menu">
                        Double Menu
                      </label>
                      <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                        id="switcher-double-menu">
                    </div>
                  </div>
                </div>
              </div>
              <div class="">
                <p class="switcher-style-head">Page Styles:</p>
                <div class="row switcher-style gx-0">
                  <div class="col-4">
                    <div class="form-check switch-select">
                      <label class="form-check-label" for="switcher-regular">
                        Regular
                      </label>
                      <input class="form-check-input" type="radio" name="page-styles" id="switcher-regular"
                      checked>
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="form-check switch-select">
                      <label class="form-check-label" for="switcher-classic">
                        Classic
                      </label>
                      <input class="form-check-input" type="radio" name="page-styles" id="switcher-classic">
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="form-check switch-select">
                      <label class="form-check-label" for="switcher-modern">
                        Modern
                      </label>
                      <input class="form-check-input" type="radio" name="page-styles" id="switcher-modern">
                    </div>
                  </div>
                </div>
              </div>
              <div class="">
                <p class="switcher-style-head">Layout Width Styles:</p>
                <div class="row switcher-style gx-0">
                  <div class="col-4">
                    <div class="form-check switch-select">
                      <label class="form-check-label" for="switcher-default-width">
                        compact
                      </label>
                      <input class="form-check-input" type="radio" name="layout-width" id="switcher-default-width"
                        >
                    </div>
                  </div>
                  <div class="col-5">
                    <div class="form-check switch-select">
                      <label class="form-check-label" for="switcher-full-width">
                        Full Width
                      </label>
                      <input class="form-check-input" type="radio" name="layout-width" id="switcher-full-width"  checked>
                    </div>
                  </div>
                  <div class="col-3">
                    <div class="form-check switch-select">
                      <label class="form-check-label" for="switcher-boxed">
                        Boxed
                      </label>
                      <input class="form-check-input" type="radio" name="layout-width" id="switcher-boxed">
                    </div>
                  </div>
                </div>
              </div>
              <div class="">
                  <p class="switcher-style-head">Menu Positions:</p>
                  <div class="row switcher-style gx-0">
                      <div class="col-4">
                          <div class="form-check switch-select">
                              <label class="form-check-label" for="switcher-menu-fixed">
                                  Fixed
                              </label>
                              <input class="form-check-input" type="radio" name="menu-positions" id="switcher-menu-fixed"
                                  checked>
                          </div>
                      </div>
                      <div class="col-4">
                          <div class="form-check switch-select">
                              <label class="form-check-label" for="switcher-menu-scroll">
                                  Scrollable
                              </label>
                              <input class="form-check-input" type="radio" name="menu-positions" id="switcher-menu-scroll">
                          </div>
                      </div>
                  </div>
              </div>
              <div class="">
                  <p class="switcher-style-head">Header Positions:</p>
                  <div class="row switcher-style gx-0">
                      <div class="col-4">
                          <div class="form-check switch-select">
                              <label class="form-check-label" for="switcher-header-fixed">
                                  Fixed
                              </label>
                              <input class="form-check-input" type="radio" name="header-positions"
                                  id="switcher-header-fixed" checked>
                          </div>
                      </div>
                      <div class="col-4">
                          <div class="form-check switch-select">
                              <label class="form-check-label" for="switcher-header-scroll">
                                  Scrollable
                              </label>
                              <input class="form-check-input" type="radio" name="header-positions"
                                  id="switcher-header-scroll">
                          </div>
                      </div>
                  </div>
              </div>
              <div class="">
                  <p class="switcher-style-head">Loader:</p>
                  <div class="row switcher-style gx-0">
                      <div class="col-4">
                          <div class="form-check switch-select">
                              <label class="form-check-label" for="switcher-loader-enable">
                                  Enable
                              </label>
                              <input class="form-check-input" type="radio" name="page-loader"
                                  id="switcher-loader-enable">
                          </div>
                      </div>
                      <div class="col-4">
                          <div class="form-check switch-select">
                              <label class="form-check-label" for="switcher-loader-disable">
                                  Disable
                              </label>
                              <input class="form-check-input" type="radio" name="page-loader"
                                  id="switcher-loader-disable" checked>
                          </div>
                      </div>
                  </div>
              </div>
            </div>
            <div class="tab-pane fade border-0" id="switcher-profile" role="tabpanel" aria-labelledby="switcher-profile-tab" tabindex="0">
              <div>
                <div class="theme-colors">
                  <p class="switcher-style-head">Menu Colors:</p>
                  <div class="d-flex switcher-style pb-2">
                    <div class="form-check switch-select me-3">
                      <input class="form-check-input color-input color-white" data-bs-toggle="tooltip"
                          data-bs-placement="top" title="Light Menu" type="radio" name="menu-colors"
                          id="switcher-menu-light" checked>
                    </div>
                    <div class="form-check switch-select me-3">
                      <input class="form-check-input color-input color-dark" data-bs-toggle="tooltip"
                          data-bs-placement="top" title="Dark Menu" type="radio" name="menu-colors"
                          id="switcher-menu-dark">
                    </div>
                    <div class="form-check switch-select me-3">
                      <input class="form-check-input color-input color-primary" data-bs-toggle="tooltip"
                          data-bs-placement="top" title="Color Menu" type="radio" name="menu-colors"
                          id="switcher-menu-primary">
                    </div>
                    <div class="form-check switch-select me-3">
                      <input class="form-check-input color-input color-gradient" data-bs-toggle="tooltip"
                          data-bs-placement="top" title="Gradient Menu" type="radio" name="menu-colors"
                          id="switcher-menu-gradient">
                    </div>
                    <div class="form-check switch-select me-3">
                      <input class="form-check-input color-input color-transparent"
                          data-bs-toggle="tooltip" data-bs-placement="top" title="Transparent Menu"
                          type="radio" name="menu-colors" id="switcher-menu-transparent">
                    </div>
                  </div>
                  <div class="px-4 pb-3 text-muted fs-11">Note:If you want to change color Menu dynamically change from below Theme Primary color picker</div>
                </div>
                <div class="theme-colors">
                  <p class="switcher-style-head">Header Colors:</p>
                  <div class="d-flex switcher-style pb-2">
                    <div class="form-check switch-select me-3">
                      <input class="form-check-input color-input color-white" data-bs-toggle="tooltip"
                          data-bs-placement="top" title="Light Header" type="radio" name="header-colors"
                          id="switcher-header-light" checked>
                    </div>
                    <div class="form-check switch-select me-3">
                      <input class="form-check-input color-input color-dark" data-bs-toggle="tooltip"
                          data-bs-placement="top" title="Dark Header" type="radio" name="header-colors"
                          id="switcher-header-dark">
                    </div>
                    <div class="form-check switch-select me-3">
                      <input class="form-check-input color-input color-primary" data-bs-toggle="tooltip"
                          data-bs-placement="top" title="Color Header" type="radio" name="header-colors"
                          id="switcher-header-primary">
                    </div>
                    <div class="form-check switch-select me-3">
                      <input class="form-check-input color-input color-gradient" data-bs-toggle="tooltip"
                          data-bs-placement="top" title="Gradient Header" type="radio" name="header-colors"
                          id="switcher-header-gradient">
                    </div>
                    <div class="form-check switch-select me-3">
                      <input class="form-check-input color-input color-transparent" data-bs-toggle="tooltip"
                          data-bs-placement="top" title="Transparent Header" type="radio" name="header-colors"
                          id="switcher-header-transparent">
                    </div>
                  </div>
                  <div class="px-4 pb-3 text-muted fs-11">Note:If you want to change color Header dynamically change from below Theme Primary color picker</div>
                </div>
                <div class="theme-colors">
                  <p class="switcher-style-head">Theme Primary:</p>
                  <div class="d-flex flex-wrap align-items-center switcher-style">
                    <div class="form-check switch-select me-3">
                      <input class="form-check-input color-input color-primary-1" type="radio"
                        name="theme-primary" id="switcher-primary">
                    </div>
                    <div class="form-check switch-select me-3">
                      <input class="form-check-input color-input color-primary-2" type="radio"
                        name="theme-primary" id="switcher-primary1">
                    </div>
                    <div class="form-check switch-select me-3">
                      <input class="form-check-input color-input color-primary-3" type="radio" name="theme-primary"
                        id="switcher-primary2">
                    </div>
                    <div class="form-check switch-select me-3">
                      <input class="form-check-input color-input color-primary-4" type="radio" name="theme-primary"
                        id="switcher-primary3">
                    </div>
                    <div class="form-check switch-select me-3">
                      <input class="form-check-input color-input color-primary-5" type="radio" name="theme-primary"
                        id="switcher-primary4">
                    </div>
                    <div class="form-check switch-select ps-0 mt-1 color-primary-light">
                      <div class="theme-container-primary"></div>
                      <div class="pickr-container-primary"  onchange="updateChartColor(this.value)"></div>
                    </div>
                  </div>
                </div>
                <div class="theme-colors">
                  <p class="switcher-style-head">Theme Background:</p>
                  <div class="d-flex flex-wrap align-items-center switcher-style">
                    <div class="form-check switch-select me-3">
                      <input class="form-check-input color-input color-bg-1" type="radio"
                          name="theme-background" id="switcher-background">
                    </div>
                    <div class="form-check switch-select me-3">
                      <input class="form-check-input color-input color-bg-2" type="radio"
                          name="theme-background" id="switcher-background1">
                    </div>
                    <div class="form-check switch-select me-3">
                      <input class="form-check-input color-input color-bg-3" type="radio" name="theme-background"
                          id="switcher-background2">
                    </div>
                    <div class="form-check switch-select me-3">
                      <input class="form-check-input color-input color-bg-4" type="radio"
                          name="theme-background" id="switcher-background3">
                    </div>
                    <div class="form-check switch-select me-3">
                      <input class="form-check-input color-input color-bg-5" type="radio"
                          name="theme-background" id="switcher-background4">
                    </div>
                    <div class="form-check switch-select ps-0 mt-1 tooltip-static-demo color-bg-transparent">
                      <div class="theme-container-background"></div>
                      <div class="pickr-container-background"></div>
                    </div>
                  </div>
                </div>
                <div class="menu-image mb-3">
                  <p class="switcher-style-head">Menu With Background Image:</p>
                  <div class="d-flex flex-wrap align-items-center switcher-style">
                    <div class="form-check switch-select m-2">
                    <input class="form-check-input bgimage-input bg-img1" type="radio"
                        name="menu-background" id="switcher-bg-img">
                    </div>
                    <div class="form-check switch-select m-2">
                      <input class="form-check-input bgimage-input bg-img2" type="radio"
                        name="menu-background" id="switcher-bg-img1">
                    </div>
                    <div class="form-check switch-select m-2">
                      <input class="form-check-input bgimage-input bg-img3" type="radio" name="menu-background"
                        id="switcher-bg-img2">
                    </div>
                    <div class="form-check switch-select m-2">
                      <input class="form-check-input bgimage-input bg-img4" type="radio"
                        name="menu-background" id="switcher-bg-img3">
                    </div>
                    <div class="form-check switch-select m-2">
                      <input class="form-check-input bgimage-input bg-img5" type="radio"
                        name="menu-background" id="switcher-bg-img4">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="d-block canvas-footer flex-wrap">
              <a href="javascript:void(0);" id="reset-all" class="btn btn-danger m-1 w-100">Reset</a> 
            </div>
          </div>
        </div>
    </div>
    <!-- End Switcher -->

    <!-- Loader -->
    <div id="loader" >
      <img src="{{ asset('/assets/images/media/loader.svg') }}" alt="">
    </div>
    <!-- Loader -->

    <div class="page">
      @include('partials.navbar')
      @include('partials.sidebar')
      @yield('container')
      @include('partials.footer')
        <div class="modal fade" id="header-responsive-search" tabindex="-1" aria-labelledby="header-responsive-search" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-body">
                <div class="input-group">
                  <input type="text" class="form-control border-end-0" placeholder="Search Anything ..."
                    aria-label="Search Anything ..." aria-describedby="button-addon2">
                  <button class="btn btn-primary" type="button"
                    id="button-addon2"><i class="bi bi-search"></i></button>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>

    <!-- Scroll To Top -->
    <div class="scrollToTop">
      <span class="arrow lh-1"><i class="ti ti-arrow-big-up fs-16"></i></span>
    </div>
    <div id="responsive-overlay"></div>
    <!-- Scroll To Top -->

    <!-- Popper JS -->
    <script src="{{ asset('/assets/libs/@popperjs/core/umd/popper.min.js') }}"></script>

    <!-- Bootstrap JS -->
    <script src="{{ asset('/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Defaultmenu JS -->
    <script src="{{ asset('/assets/js/defaultmenu.min.js') }}"></script>

    <!-- Node Waves JS-->
    <script src="{{ asset('/assets/libs/node-waves/waves.min.js') }}"></script>

    <!-- Sticky JS -->
    <script src="{{ asset('/assets/js/sticky.js') }}"></script>

    <!-- Simplebar JS -->
    <script src="{{ asset('/assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('/assets/js/simplebar.js') }}"></script>

    <!-- Auto Complete JS -->
    <script src="{{ asset('/assets/libs/@tarekraafat/autocomplete.js/autoComplete.min.js') }}"></script>

    <!-- Color Picker JS -->
    <script src="{{ asset('/assets/libs/@simonwep/pickr/pickr.es5.min.js') }}"></script>

    <!-- Date & Time Picker JS -->
    <script src="{{ asset('/assets/libs/flatpickr/flatpickr.min.js') }}"></script>

    @php
      $salesPage = request()->routeIs('dashboard');
      $analyticsPage = request()->routeIs('analytics');
      $ecommercePage = request()->routeIs('ecommerce');
      $crmPage = request()->routeIs('crm');
      $cryptoPage = request()->routeIs('crypto');
      $nftPage = request()->routeIs('nft');
      $projectsPage = request()->routeIs('projects');
      $jobsPage = request()->routeIs('jobs');
      $hrmPage = request()->routeIs('hrm');
      $coursesPage = request()->routeIs('courses');
      $stocksPage = request()->routeIs('stocks');
      $medicalPage = request()->routeIs('medical');
      $posSystemPage = request()->routeIs('pos-system');
      $podcastPage = request()->routeIs('podcast');
      $schoolPage = request()->routeIs('school');
      $socialMediaPage = request()->routeIs('social-media');
      $fullCalendarPage = request()->routeIs('full-calendar');
      $sweetAlertsPage = request()->routeIs('sweet-alerts');
      $addProductPage = request()->routeIs('ecommerce-addproduct');
      $pagesChatPage = request()->routeIs('pages-chat');
      $formAdvancedPage = request()->routeIs('forms-advanced');
      $examplePage = 'example';
    @endphp

    @if($salesPage)
      <!-- Apex Charts JS -->
      <script src="{{ asset('/assets/libs/apexcharts/apexcharts.min.js') }}"></script>
      <!-- Sales Dashboard --> 
      <script src="{{ asset('/assets/js/sales-dashboard.js') }}"></script>
    @elseif($analyticsPage)
      <!-- Apex Charts JS -->
      <script src="{{ asset('/assets/libs/apexcharts/apexcharts.min.js') }}"></script>
      <!-- Analytics Dashboard --> 
      <script src="{{ asset('/assets/js/analytics-dashboard.js') }}"></script>
    @elseif($ecommercePage)
      <!-- Apex Charts JS -->
      <script src="{{ asset('/assets/libs/apexcharts/apexcharts.min.js') }}"></script>
      <!-- Ecommerce Dashboard --> 
      <script src="{{ asset('/assets/js/ecommerce-dashboard.js') }}"></script>
    @elseif($crmPage)
      <!-- Apex Charts JS -->
      <script src="{{ asset('/assets/libs/apexcharts/apexcharts.min.js') }}"></script>
      <!-- CRM Dashboard --> 
      <script src="{{ asset('/assets/js/crm-dashboard.js') }}"></script>
    @elseif($cryptoPage)
      <!-- Apex Charts JS -->
      <script src="{{ asset('/assets/libs/apexcharts/apexcharts.min.js') }}"></script>
      <!-- Swiper JS -->
      <script src="{{ asset('/assets/libs/swiper/swiper-bundle.min.js') }}"></script>
      <!-- Crypto Dashboard --> 
      <script src="{{ asset('/assets/js/crypto-dashboard.js') }}"></script>
    @elseif($nftPage)
      <!-- Apex Charts JS -->
      <script src="{{ asset('/assets/libs/apexcharts/apexcharts.min.js') }}"></script>
      <!-- Swiper JS -->
      <script src="{{ asset('/assets/libs/swiper/swiper-bundle.min.js') }}"></script>
      <!-- NFT Dashboard --> 
      <script src="{{ asset('/assets/js/nft-dashboard.js') }}"></script>
    @elseif($projectsPage)
      <!-- Apex Charts JS -->
      <script src="{{ asset('/assets/libs/apexcharts/apexcharts.min.js') }}"></script>
      <!-- Projects Dashboard --> 
      <script src="{{ asset('/assets/js/projects-dashboard.js') }}"></script>
    @elseif($jobsPage)
      <!-- Apex Charts JS -->
      <script src="{{ asset('/assets/libs/apexcharts/apexcharts.min.js') }}"></script>
      <!-- Jobs Dashboard --> 
      <script src="{{ asset('/assets/js/jobs-dashboard.js') }}"></script>
    @elseif($hrmPage)
      <!-- Apex Charts JS -->
      <script src="{{ asset('/assets/libs/apexcharts/apexcharts.min.js') }}"></script>
      <!-- HRM Dashboard --> 
      <script src="{{ asset('/assets/js/hrm-dashboard.js') }}"></script>
    @elseif($coursesPage)
      <!-- Apex Charts JS -->
      <script src="{{ asset('/assets/libs/apexcharts/apexcharts.min.js') }}"></script>
      <!-- Courses Dashboard --> 
      <script src="{{ asset('/assets/js/courses-dashboard.js') }}"></script>
    @elseif($stocksPage)
      <!-- Apex Charts JS -->
      <script src="{{ asset('/assets/libs/apexcharts/apexcharts.min.js') }}"></script>
      <!-- Swiper JS -->
      <script src="{{ asset('/assets/libs/swiper/swiper-bundle.min.js') }}"></script>
      <!-- Stocks Dashboard --> 
      <script src="{{ asset('/assets/js/stocks-dashboard.js') }}"></script>
    @elseif($medicalPage)
      <!-- Apex Charts JS -->
      <script src="{{ asset('/assets/libs/apexcharts/apexcharts.min.js') }}"></script>
      <!-- Medical Dashboard --> 
      <script src="{{ asset('/assets/js/medical-dashboard.js') }}"></script>
    @elseif($posSystemPage)
      <!-- Isotope-layout JS -->
      <script src="{{ asset('/assets/libs/isotope-layout/isotope.pkgd.min.js') }}"></script>
      <!-- Internal POS-Dashboard JS -->
      <script src="{{ asset('/assets/js/pos-dashboard.js') }}"></script>
    @elseif($podcastPage)
      <!-- Podcast dashboard -->
      <script src="{{ asset('/assets/js/podcast-dashboard.js') }}"></script>
    @elseif($schoolPage)
      <!-- Apex Charts JS -->
      <script src="{{ asset('/assets/libs/apexcharts/apexcharts.min.js') }}"></script>
      <!-- School dashboard -->
      <script src="{{ asset('/assets/js/school-dashboard.js') }}"></script>
    @elseif($socialMediaPage)
      <!-- Apex Charts JS -->
      <script src="{{ asset('/assets/libs/apexcharts/apexcharts.min.js') }}"></script>
      <!-- Social Media dashboard -->
      <script src="{{ asset('/assets/js/social-media-dashboard.js') }}"></script>
    @elseif($fullCalendarPage)
      <!-- Moment JS -->
      <script src="{{ asset('/assets/libs/moment/min/moment.min.js') }}"></script>
      <!-- Fullcalendar JS -->
      <script src="{{ asset('/assets/libs/fullcalendar/index.global.min.js') }}"></script>
      <script src="{{ asset('/assets/js/fullcalendar.js') }}"></script>
    @elseif($addProductPage)
      <script src="{{ asset('/assets/libs/flatpickr/flatpickr.min.js') }}"></script>

      <!-- Quill Editor JS -->
      <script src="{{ asset('/assets/libs/quill/quill.js') }}"></script>

      <!-- Filepond JS -->
      <script src="{{ asset('/assets/libs/filepond/filepond.min.js') }}"></script>
      <script src="{{ asset('/assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.js') }}"></script>
      <script src="{{ asset('/assets/libs/filepond-plugin-image-exif-orientation/filepond-plugin-image-exif-orientation.min.js') }}"></script>
      <script src="{{ asset('/assets/libs/filepond-plugin-file-validate-size/filepond-plugin-file-validate-size.min.js') }}"></script>
      <script src="{{ asset('/assets/libs/filepond-plugin-file-encode/filepond-plugin-file-encode.min.js') }}"></script>
      <script src="{{ asset('/assets/libs/filepond-plugin-image-edit/filepond-plugin-image-edit.min.js') }}"></script>
      <script src="{{ asset('/assets/libs/filepond-plugin-file-validate-type/filepond-plugin-file-validate-type.min.js') }}"></script>
      <script src="{{ asset('/assets/libs/filepond-plugin-image-crop/filepond-plugin-image-crop.min.js') }}"></script>
      <script src="{{ asset('/assets/libs/filepond-plugin-image-resize/filepond-plugin-image-resize.min.js') }}"></script>
      <script src="{{ asset('/assets/libs/filepond-plugin-image-transform/filepond-plugin-image-transform.min.js') }}"></script>

      <!-- Internal Add Products JS -->
      <script src="{{ asset('/assets/js/add-products.js') }}"></script>
    @elseif($sweetAlertsPage)
      <!-- Sweetalerts JS -->
      <script src="{{ asset('/assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>
      <script src="{{ asset('/assets/js/sweet-alerts.js') }}"></script>
    @elseif($pagesChatPage)
      <!-- Emojji Picker JS -->
      <script src="../assets/libs/fg-emoji-picker/fgEmojiPicker.js"></script>
      <!-- Gallery JS -->
      <script src="../assets/libs/glightbox/js/glightbox.min.js"></script>
      <!-- Chat JS -->
      <script src="../assets/js/chat.js"></script>
    @elseif($formAdvancedPage)

    
    @endif
    <!-- Custom JS -->
    <script src="{{ asset('/assets/js/custom.js') }}"></script>

    <!-- Custom-Switcher JS -->
    <script src="{{ asset('/assets/js/custom-switcher.min.js') }}"></script>
  </body>
</html> 