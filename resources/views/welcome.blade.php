<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="horizontal" data-nav-style="menu-click" data-menu-position="fixed"
    data-theme-mode="light" loader="enable">
<head>
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Lintas Inovasi Global | Dashboard </title>
    <meta name="Author" content="Lintas Inovasi Global">
    <meta name="Description" content="Lintas Inovasi Global is a technology company providing IT services, including website, mobile, and desktop application development. We cater to startups and large corporations, offering innovative solutions such as modern website upgrades, data management, and customizable templates with efficient dashboards. With a dedicated team of top-tier experts, we focus on delivering high-quality services tailored to customer needs and keeping up with the latest digital standards.">
    <meta name="keywords" content="lintas inovasi global, bootstrap template, admin panel bootstrap, bootstrap dashboard, admin, admin dashboard template, dashboard template, html css templates, dashboard, template dashboard,  bootstrap dashboard template, dashboard html css, bootstrap admin dashboard,  bootstrap admin, dashboard template, bootstrap5 admin template">

    <link rel="icon" href="{{ asset('assets/images/brand-logos/favicon.ico') }}" type="image/x-icon">
    <link id="style" href="{{ asset('assets/libs/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/libs/node-waves/waves.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/libs/swiper/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/libs/flatpickr/flatpickr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/libs/@simonwep/pickr/themes/nano.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/libs/choices.js/public/assets/styles/choices.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        if (localStorage.ligalandingdarktheme) {
            document.querySelector("html").setAttribute("data-theme-mode", "dark")
        }
        if (localStorage.ligalandingrtl) {
            document.querySelector("html").setAttribute("dir", "rtl")
            document.querySelector("#style")?.setAttribute("href", "{{ asset('assets/libs/bootstrap/css/bootstrap.rtl.min.css') }}");
        }
    </script>


</head>

<body class="landing-body">

    <div class="offcanvas offcanvas-end" tabindex="-1" id="switcher-canvas" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header border-bottom">
            <h5 class="offcanvas-title" id="offcanvasRightLabel">Switcher</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="">
                <p class="switcher-style-head">Theme Color Mode:</p>
                <div class="row switcher-style">
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
            <div class="theme-colors">
                <p class="switcher-style-head">Theme Primary:</p>
                <div class="d-flex align-items-center switcher-style">
                    <div class="form-check switch-select me-3">
                        <input class="form-check-input color-input color-primary-1" type="radio" name="theme-primary"
                            id="switcher-primary">
                    </div>
                    <div class="form-check switch-select me-3">
                        <input class="form-check-input color-input color-primary-2" type="radio" name="theme-primary"
                            id="switcher-primary1">
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
                    <div class="form-check switch-select me-3 ps-0 mt-1 color-primary-light">
                        <div class="theme-container-primary"></div>
                        <div class="pickr-container-primary"></div>
                    </div>
                </div>
            </div>
            <div>
                <p class="switcher-style-head">reset:</p>
                <div class="text-center">
                    <button id="reset-all" class="btn btn-danger mt-3">Reset</button>
                </div>
            </div>
        </div>
    </div>

    <div class="landing-page-wrapper">
        <header class="app-header">
            <div class="main-header-container container-fluid">
                <div class="header-content-left">
                    <div class="header-element">
                        <div class="horizontal-logo">
                            <a href="{{ route('welcome') }}" class="header-logo">
                                <img src="{{ asset('assets/images/brand-logos/logo-ligal-sm.png') }}" alt="logo" class="toggle-logo">
                                <img src="{{ asset('assets/images/brand-logos/logo-ligal-sm.png') }}" alt="logo" class="toggle-dark">
                            </a>
                        </div>
                    </div>
                    <div class="header-element">
                        <a href="javascript:void(0);" class="sidemenu-toggle header-link" data-bs-toggle="sidebar">
                            <span class="open-toggle">
                                <i class="ri-menu-3-line fs-20"></i>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="header-content-right">
                    <div class="header-element align-items-center">
                        <div class="btn-list d-lg-none d-flex">
                            <a href="{{ route('sign-up') }}" class="btn btn-secondary-light">
                                Sign Up
                            </a>
                            <button class="btn btn-icon btn-special switcher-icon d-flex align-items-center justify-content-center" data-bs-toggle="offcanvas"
                                data-bs-target="#switcher-canvas">
                                <i class="ri-settings-3-line"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        
        <aside class="app-sidebar sticky" id="sidebar">
            <div class="container-xl">
                <div class="main-sidebar">
                    <nav class="main-menu-container nav nav-pills sub-open">
                        <div class="landing-logo-container">
                            <div class="horizontal-logo">
                                <a href="{{ route('welcome') }}" class="header-logo">
                                    <img src="{{ asset('assets/images/brand-logos/logo-ligal.png') }}" alt="logo"
                                        class="desktop-logo">
                                    <img src="{{ asset('assets/images/brand-logos/logo-ligal.png') }}" alt="logo"
                                        class="desktop-dark">
                                </a>
                            </div>
                        </div>
                        <div class="slide-left" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                                width="24" height="24" viewBox="0 0 24 24">
                                <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path>
                            </svg></div>
                        <ul class="main-menu">
                            <li class="slide">
                                <a class="side-menu__item" href="#home">
                                    <span class="side-menu__label">Home</span>
                                </a>
                            </li>
                            <li class="slide">
                                <a href="#about" class="side-menu__item">
                                    <span class="side-menu__label">About</span>
                                </a>
                            </li>
                            <li class="slide has-sub">
                                <a href="javascript:void(0);" class="side-menu__item">
                                    <span class="side-menu__label me-2">More</span>
                                    <i class="fe fe-chevron-right side-menu__angle op-8"></i>
                                </a>
                                <ul class="slide-menu child1">
                                    <li class="slide">
                                        <a href="#expectations" class="side-menu__item">Expectations</a>
                                    </li>
                                    <li class="slide">
                                        <a href="#services" class="side-menu__item">Services</a>
                                    </li>
                                    <li class="slide">
                                        <a href="#features" class="side-menu__item">Tech-Stack</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="slide">
                                <a href="#team" class="side-menu__item">
                                    <span class="side-menu__label">Team</span>
                                </a>
                            </li>
                            <li class="slide">
                                <a href="#pricing" class="side-menu__item">
                                    <span class="side-menu__label">Pricing</span>
                                </a>
                            </li>
                            <li class="slide">
                                <a href="#contact" class="side-menu__item">
                                    <span class="side-menu__label">Contact Us</span>
                                </a>
                            </li>
                        </ul>
                        <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                                width="24" height="24" viewBox="0 0 24 24">
                                <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z">
                                </path>
                            </svg></div>
                        <div class="d-lg-flex d-none">
                            <div class="btn-list d-lg-flex d-none mt-lg-2 mt-xl-0 mt-0">
                                <a href="{{ route('sign-in') }}" class="btn btn-wave btn-secondary">
                                    Sign In
                                </a>
                                <a href="{{ route('sign-up') }}" class="btn btn-wave btn-primary">
                                    Sign Up
                                </a>
                                <button class="btn btn-wave btn-icon btn-special switcher-icon d-flex align-items-center justify-content-center" data-bs-toggle="offcanvas"
                                    data-bs-target="#switcher-canvas">
                                    <i class="ri-settings-3-line"></i>
                                </button>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>

        </aside>
        <div class="main-content landing-main px-0">
            <div class="landing-banner" id="home">
                <section class="section">
                    <div class="container main-banner-container pb-lg-0">
                        <div class="row">
                            <div class="col-xxl-8 col-xl-7 col-lg-7 col-md-8">
                                <div class="pt-lg-5">
                                    <div class="mb-3">
                                        <h6 class="fw-medium text-fixed-white op-9">Powerful and Efficient</h6>
                                    </div>
                                    <p class="landing-banner-heading mb-3 text-fixed-white fw-semibold">Powerful Backend Application,  <span class="text-warning">LIGAL</span> Web Apps</p>
                                    <div class="fs-16 mb-5 text-fixed-white op-7">Empower your business with cutting-edge backend solutions. Backed by a professional team at Lintas Inovasi Global, we deliver tailored logic, analytics, and efficient features to meet your unique needs.</div>
                                    <a href="{{ route('dashboard') }}" class="m-1 btn btn-lg bg-secondary text-fixed-white">
                                        View Demos
                                        <i class="ri-eye-line ms-2 align-middle"></i>
                                    </a>
                                    <a href="{{ route('dashboard') }}"
                                        class="m-1 btn btn-lg btn-special btn-wave waves-effect waves-light">
                                        Learn More
                                        <i class="ri-arrow-right-line ms-2 align-middle"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-4 my-auto position-relative">
                                <div class="text-end landing-main-image landing-heading-img">
                                    <img src="{{ asset('') }}assets/images/media/rocket.png" alt="" class="img-fluid">
                                </div>
                                <div class="side-img-bg">
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 700 700" style="overflow: hidden; display: block;" width="700" height="700"><defs><linearGradient id="two-163" x1="350" y1="-350" x2="350" y2="350" spreadMethod="pad" gradientUnits="userSpaceOnUse"><stop offset="0%" stop-color="hsl(1.4, 100%, 67%)" stop-opacity="1"></stop><stop offset="100%" stop-color="hsl(167, 52%, 78%)" stop-opacity="1"></stop></linearGradient></defs><g id="two-0" transform="matrix(1 0 0 1 0 0)" opacity="1"><path transform="matrix(1 0 0 1 350 350)" id="two-213" d="M 237.85514 98.522825 C 227.062517 131.662812 219.074086 169.801869 195.095167 195.095167 C 171.051113 220.45717 130.070898 224.158279 100.684106 243.072935 C 64.937066 266.081332 42.380709 320.101632 0 323.4352 C -41.034117 326.662848 -75.939076 287.066961 -108.451391 261.824818 C -136.725275 239.87334 -158.984007 209.593513 -183.732535 183.732534 C -208.039029 158.333458 -235.224881 134.012468 -257.107091 106.497244 C -283.326775 73.527975 -318.380622 41.129234 -327.481752 0 C -336.690408 -41.615158 -333.90373 -93.598788 -308.385856 -127.737604 C -281.519872 -163.679977 -216.430462 -152.974506 -185.093668 -185.093668 C -153.021223 -217.966846 -172.127834 -295.546588 -129.52009 -312.689158 C -86.559482 -329.973697 -44.807453 -270.381947 -0.000001 -258.691719 C 32.86618 -250.116959 68.360799 -249.221147 102.24339 -246.837381 C 148.692933 -243.569483 207.63395 -273.235515 243.30323 -243.303231 C 277.21985 -214.841712 267.600266 -156.010774 269.894333 -111.793894 C 271.81461 -74.781613 264.844751 -36.621516 259.147299 -0.000001 C 254.033847 32.867732 248.155407 66.894677 237.85514 98.522825 Z " fill="rgba(255,255,255,0.1)" stroke="undefined" stroke-width="1" stroke-opacity="1" fill-opacity="1" visibility="visible" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="4"></path></g></svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="landing-shape">
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"  viewBox="0 0 2400 800" opacity="1"><g fill="##f5f6fa" transform="matrix(1,0,0,1,4.3314208984375,317.0009536743164)"><path d="M-10,10C92.08333333333334,16.041666666666664,277.9166666666667,49.20833333333333,480,39C682.0833333333333,28.791666666666668,760,-39.416666666666664,960,-39C1160,-38.583333333333336,1240,40.166666666666664,1440,41C1640,41.833333333333336,1720,-38.125,1920,-35C2120,-31.875,2247.9166666666665,-34.625,2400,56C2552.0833333333335,146.625,3254.1666666666665,224.16666666666669,2650,400C2045.8333333333335,575.8333333333333,156.25,795.8333333333334,-500,900" transform="matrix(1,0,0,1,0,35)" opacity="0.05"></path><path d="M-10,10C92.08333333333334,16.041666666666664,277.9166666666667,49.20833333333333,480,39C682.0833333333333,28.791666666666668,760,-39.416666666666664,960,-39C1160,-38.583333333333336,1240,40.166666666666664,1440,41C1640,41.833333333333336,1720,-38.125,1920,-35C2120,-31.875,2247.9166666666665,-34.625,2400,56C2552.0833333333335,146.625,3254.1666666666665,224.16666666666669,2650,400C2045.8333333333335,575.8333333333333,156.25,795.8333333333334,-500,900" transform="matrix(1,0,0,1,0,70)" opacity="1.00"></path></g></svg>  
                    </div>
                </section>
            </div>
            <section class="section pt-5" id="about">
                <div class="container position-relative">
                    <div class="text-center">
                        <span class="landing-text-heading">Glance</span>
                        <h3 class="fw-semibold mb-2 mt-3">Why Choose Our Services?</h3>
                        <div class="row justify-content-center">
                            <div class="col-xl-7">
                                <p class="text-muted fs-15 mb-5 fw-normal">We are dedicated to supporting you in achieving your objectives.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-4">
                            <div class="card custom-card landing-card landingmain border">
                                <div class="card-body">
                                    <div class="mb-4">
                                        <span class="avatar avatar-xl bg-primary-transparent">
                                            <span class="avatar avatar-lg bg-primary svg-white">
                                                <i class="ri-lightbulb-flash-line fs-25"></i>
                                            </span>
                                        </span>
                                    </div>
                                    <h5 class="fw-semibold">Unparalleled Expertise</h5>
                                    <p class="fs-14 text-muted">Our team combines years of industry experience with a deep understanding of the latest trends and technologies to deliver exceptional results.</p>
                                    <a href="javascript:void(0);" class="fw-medium text-primary">Read More <i
                                            class="ti ti-arrow-narrow-right ms-2 fs-5 align-middle"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="card custom-card landing-card landingmain border">
                                <div class="card-body">
                                    <div class="mb-4">
                                        <span class="avatar avatar-xl bg-secondary-transparent">
                                            <span class="avatar avatar-lg bg-secondary svg-white">
                                                <i class="ri-shield-star-line fs-25"></i>
                                            </span>
                                        </span>
                                    </div>
                                    <h5 class="fw-semibold">Proven Track Record</h5>
                                    <p class="fs-14 text-muted">With a portfolio of successful projects and satisfied clients, we have a history of delivering high-quality outcomes on time and within budget.</p>
                                    <a href="javascript:void(0);" class="fw-medium text-primary">Read More<i
                                            class="ti ti-arrow-narrow-right ms-2 fs-5 al align-middle"></i></a>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="col-xl-4">
                            <div class="card custom-card landing-card landingmain border">
                                <div class="card-body">
                                    <div class="mb-4">
                                        <span class="avatar avatar-xl bg-success-transparent">
                                            <span class="avatar avatar-lg bg-success svg-white">
                                                <i class="ri-shake-hands-line fs-25"></i>
                                            </span>
                                        </span>
                                    </div>
                                    <h5 class="fw-semibold">Commitment to Quality</h5>
                                    <p class="fs-14 text-muted"> We are dedicated to maintaining the highest standards in everything we do, from the initial consultation to the final delivery.</p>
                                    <a href="javascript:void(0);" class="fw-medium text-primary">Read More<i
                                            class="ti ti-arrow-narrow-right ms-2 fs-5 align-middle"></i></a>
                                </div>
                            </div>
                        </div> --}}
                        <div class="col-xl-4">
                            <div class="card custom-card landing-card landingmain border">
                                <div class="card-body">
                                    <div class="mb-4">
                                        <span class="avatar avatar-xl bg-special-transparent">
                                            <span class="avatar avatar-lg bg-special svg-white">
                                                <i class="ri-medal-2-line fs-25"></i>
                                            </span>
                                        </span>
                                    </div>
                                    <h5 class="fw-semibold">Efficiency is Our Souls</h5>
                                    <p class="fs-14 text-muted">We prioritize efficiency in every step, ensuring optimal performance and seamless delivery from start to finish.</p>
                                    <a href="javascript:void(0);" class="fw-medium text-primary">Read More<i
                                            class="ti ti-arrow-narrow-right ms-2 fs-5 align-middle"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section section-bg" id="expectations">
                <div class="container">
                    <div class="row gx-5 mx-0">
                        <div class="col-xl-5">
                            <div class="home-proving-image d-none d-xl-block">
                                <img src="{{ asset('') }}assets/images/media/mail-truck.png" alt="" class="img-fluid about-image">
                            </div>
                            <div class="proving-pattern-1"></div>   
                        </div>
                        <div class="col-xl-7 my-auto">
                            <div class="heading-section text-start mb-4">
                                <span class="landing-text-heading">About Us</span>
                                <h3 class="mt-3 fw-semibold mb-2">Delivering More Than Expected!</h3>
                                <div class="heading-description fs-16 text-muted">Welcome to Ligal Admin Dashboard, where we create a fast and personalized experience designed to surpass your expectations. Choose us and discover what true power feels like.</div>
                            </div>
                            <div class="row gy-3 mb-0">
                                <div class="col-xl-12">
                                    <div class="d-flex align-items-top">
                                        <div class="me-2 home-prove-svg">
                                            <i class="ri-arrow-right-circle-line align-middle fs-16 text-primary d-inline-block"></i>
                                        </div>
                                        <div>
                                            <span class="fs-15">
                                                Having accumulated years of experience, we have earned a reputable standing in our field.
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="d-flex align-items-top">
                                        <div class="me-2 home-prove-svg">
                                            <i class="ri-arrow-right-circle-line align-middle fs-16 text-primary d-inline-block"></i>
                                        </div>
                                        <div>
                                            <span class="fs-15">
                                                We have assembled a team of knowledgeable and proficient individuals.
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="d-flex align-items-top">
                                        <div class="me-2 home-prove-svg">
                                            <i class="ri-arrow-right-circle-line align-middle fs-16 text-primary d-inline-block"></i>
                                        </div>
                                        <div>
                                            <span class="fs-15">
                                                We recognize that every client is unique, and we customize our services accordingly.
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="d-flex align-items-top">
                                        <div class="me-2 home-prove-svg">
                                            <i class="ri-arrow-right-circle-line align-middle fs-16 text-primary d-inline-block"></i>
                                        </div>
                                        <div>
                                            <span class="fs-15">
                                                Designed with convenience in mind, our services aim to make your experience effortless.
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="d-flex align-items-top">
                                        <div class="me-2 home-prove-svg">
                                            <i class="ri-arrow-right-circle-line align-middle fs-16 text-primary d-inline-block"></i>
                                        </div>
                                        <div>
                                            <span class="fs-15">
                                                Our support is available around the clock, every day of the year.
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section" id="services">
                <div class="container">
                    <div class="text-center">
                        <span class="landing-text-heading">Services</span>
                        <h3 class="fw-semibold mt-3 mb-2">Premium Services at Your Fingertips</h3>
                        <div class="row justify-content-center">
                            <div class="col-xl-7">
                                <p class="text-muted fs-15 mb-5 fw-normal">enjoying top-tier services with ease and convenience.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-3">
                            <div class="card custom-card landing-card">
                                <div class="card-body text-center">
                                    <div class="mb-4">
                                        <span
                                            class="svg-gradient avatar avatar-lg bg-primary mx-auto svg-container primary svg-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                fill="#000000" viewBox="0 0 256 256">
                                                <path
                                                    d="M215,168.71a96.42,96.42,0,0,1-30.54,37l-9.36-9.37a8,8,0,0,0-3.63-2.09L150,188.59a8,8,0,0,1-5.88-8.9l2.38-16.2a8,8,0,0,1,4.84-6.22l30.46-12.66a8,8,0,0,1,8.47,1.49ZM159.89,105,182.06,79.2A8,8,0,0,0,184,74V50A96,96,0,0,0,50.49,184.65l9.92-6.52A8,8,0,0,0,64,171.49l.21-36.23a8.06,8.06,0,0,1,1.35-4.41l20.94-31.3a8,8,0,0,1,11.34-2l19.81,13a8.06,8.06,0,0,0,5.77,1.45l31.46-4.26A8,8,0,0,0,159.89,105Z"
                                                    opacity="0.2"></path>
                                                <path
                                                    d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm0,16a87.5,87.5,0,0,1,48,14.28V74L153.83,99.74,122.36,104l-.31-.22L102.38,90.92A16,16,0,0,0,79.87,95.1L58.93,126.4a16,16,0,0,0-2.7,8.81L56,171.44l-3.27,2.15A88,88,0,0,1,128,40ZM62.29,186.47l2.52-1.65A16,16,0,0,0,72,171.53l.21-36.23L93.17,104a3.62,3.62,0,0,0,.32.22l19.67,12.87a15.94,15.94,0,0,0,11.35,2.77L156,115.59a16,16,0,0,0,10-5.41l22.17-25.76A16,16,0,0,0,192,74V67.67A87.87,87.87,0,0,1,211.77,155l-16.14-14.76a16,16,0,0,0-16.93-3l-30.46,12.65a16.08,16.08,0,0,0-9.68,12.45l-2.39,16.19a16,16,0,0,0,11.77,17.81L169.4,202l2.36,2.37A87.88,87.88,0,0,1,62.29,186.47ZM185,195l-4.3-4.31a16,16,0,0,0-7.26-4.18L152,180.85l2.39-16.19L184.84,152,205,170.48A88.43,88.43,0,0,1,185,195Z">
                                                </path>
                                            </svg>
                                        </span>
                                    </div>
                                    <h6 class="fw-semibold">Business Analytics</h6>
                                    <p class="fs-15 text-muted mb-0">Delivering real-time data updates and actionable insights to keep your business ahead of the curve.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="card custom-card landing-card">
                                <div class="card-body text-center">
                                    <div class="mb-4">
                                        <div class="mb-4">
                                            <span
                                                class="svg-gradient avatar avatar-lg bg-secondary mx-auto svg-container secondary svg-white">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                    fill="#000000" viewBox="0 0 256 256">
                                                    <path d="M224,128a96,96,0,1,1-96-96A96,96,0,0,1,224,128Z"
                                                        opacity="0.2"></path>
                                                    <path
                                                        d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm0,192a88,88,0,1,1,88-88A88.1,88.1,0,0,1,128,216Zm40-68a28,28,0,0,1-28,28h-4v8a8,8,0,0,1-16,0v-8H104a8,8,0,0,1,0-16h36a12,12,0,0,0,0-24H116a28,28,0,0,1,0-56h4V72a8,8,0,0,1,16,0v8h16a8,8,0,0,1,0,16H116a12,12,0,0,0,0,24h24A28,28,0,0,1,168,148Z">
                                                    </path>
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                    <h6 class="fw-semibold">Marketing</h6>
                                    <p class="fs-15 text-muted mb-0">Empowering clients with cutting-edge tools to optimize sales strategies and achieve unmatched dashboard efficiency.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="card custom-card landing-card">
                                <div class="card-body text-center">
                                    <div class="mb-4">
                                        <div class="mb-4">
                                            <span
                                                class="svg-gradient avatar avatar-lg bg-success mx-auto svg-container success svg-white">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                    fill="#000000" viewBox="0 0 256 256">
                                                    <path d="M208,40V208H152V40Z" opacity="0.2"></path>
                                                    <path
                                                        d="M224,200h-8V40a8,8,0,0,0-8-8H152a8,8,0,0,0-8,8V80H96a8,8,0,0,0-8,8v40H48a8,8,0,0,0-8,8v64H32a8,8,0,0,0,0,16H224a8,8,0,0,0,0-16ZM160,48h40V200H160ZM104,96h40V200H104ZM56,144H88v56H56Z">
                                                    </path>
                                                </svg>
                                                </span>
                                        </div>
                                    </div>
                                    <h6 class="fw-semibold">Dynamic Charts</h6>
                                    <p class="fs-15 text-muted mb-0">Transforming raw data into interactive, visually engaging insights that empower smarter decisions.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="card custom-card landing-card">
                                <div class="card-body text-center">
                                    <div class="mb-4">
                                        <span
                                            class="svg-gradient avatar avatar-lg bg-info mx-auto svg-container info svg-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                fill="#000000" viewBox="0 0 256 256">
                                                <path d="M224,64l-12.16,66.86A16,16,0,0,1,196.1,144H70.55L56,64Z"
                                                    opacity="0.2"></path>
                                                <path
                                                    d="M230.14,58.87A8,8,0,0,0,224,56H62.68L56.6,22.57A8,8,0,0,0,48.73,16H24a8,8,0,0,0,0,16h18L67.56,172.29a24,24,0,0,0,5.33,11.27,28,28,0,1,0,44.4,8.44h45.42A27.75,27.75,0,0,0,160,204a28,28,0,1,0,28-28H91.17a8,8,0,0,1-7.87-6.57L80.13,152h116a24,24,0,0,0,23.61-19.71l12.16-66.86A8,8,0,0,0,230.14,58.87ZM104,204a12,12,0,1,1-12-12A12,12,0,0,1,104,204Zm96,0a12,12,0,1,1-12-12A12,12,0,0,1,200,204Zm4-74.57A8,8,0,0,1,196.1,136H77.22L65.59,72H214.41Z">
                                                </path>
                                            </svg>
                                            </span>
                                    </div>
                                    <h6 class="fw-semibold">Ecommerce</h6>
                                    <p class="fs-15 text-muted mb-0">E-commerce business logic such as efficient payment gateway, social media sharelink, and much more.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="card custom-card landing-card">
                                <div class="card-body text-center">
                                    <div class="mb-4">
                                        <span
                                            class="svg-gradient avatar avatar-lg bg-warning mx-auto svg-container warning svg-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-robot">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                <path d="M6 4m0 2a2 2 0 0 1 2 -2h8a2 2 0 0 1 2 2v4a2 2 0 0 1 -2 2h-8a2 2 0 0 1 -2 -2z" />
                                                <path d="M12 2v2" />
                                                <path d="M9 12v9" />
                                                <path d="M15 12v9" />
                                                <path d="M5 16l4 -2" />
                                                <path d="M15 14l4 2" />
                                                <path d="M9 18h6" />
                                                <path d="M10 8v.01" />
                                                <path d="M14 8v.01" />
                                            </svg>
                                        </span>
                                    </div>
                                    <h6 class="fw-semibold">AI Powered</h6>
                                    <p class="fs-15 text-muted mb-0">Harnessing the power of AI, including intelligent chatbots, to enhance user experience and streamline your operations.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="card custom-card landing-card">
                                <div class="card-body text-center">
                                    <div class="mb-4">
                                        <span
                                            class="svg-gradient avatar avatar-lg bg-teal mx-auto svg-container teal svg-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                fill="#000000" viewBox="0 0 256 256">
                                                <path d="M224,56l-96,88L32,56Z" opacity="0.2"></path>
                                                <path
                                                    d="M224,48H32a8,8,0,0,0-8,8V192a16,16,0,0,0,16,16H216a16,16,0,0,0,16-16V56A8,8,0,0,0,224,48Zm-96,85.15L52.57,64H203.43ZM98.71,128,40,181.81V74.19Zm11.84,10.85,12,11.05a8,8,0,0,0,10.82,0l12-11.05,58,53.15H52.57ZM157.29,128,216,74.18V181.82Z">
                                                </path>
                                            </svg>
                                            </span>
                                    </div>
                                    <h6 class="fw-semibold">Email Services</h6>
                                    <p class="fs-15 text-muted mb-0">Effortlessly manage your communication with our seamless and secure email solutions, tailored to keep you connected.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="card custom-card landing-card">
                                <div class="card-body text-center">
                                    <div class="mb-4">
                                        <span
                                            class="svg-gradient avatar avatar-lg bg-danger mx-auto svg-container danger svg-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                fill="#000000" viewBox="0 0 256 256">
                                                <path d="M168,100a60,60,0,1,1-60-60A60,60,0,0,1,168,100Z" opacity="0.2">
                                                </path>
                                                <path
                                                    d="M144,157.68a68,68,0,1,0-71.9,0c-20.65,6.76-39.23,19.39-54.17,37.17a8,8,0,0,0,12.25,10.3C50.25,181.19,77.91,168,108,168s57.75,13.19,77.87,37.15a8,8,0,0,0,12.25-10.3C183.18,177.07,164.6,164.44,144,157.68ZM56,100a52,52,0,1,1,52,52A52.06,52.06,0,0,1,56,100Zm197.66,33.66-32,32a8,8,0,0,1-11.32,0l-16-16a8,8,0,0,1,11.32-11.32L216,148.69l26.34-26.35a8,8,0,0,1,11.32,11.32Z">
                                                </path>
                                            </svg>
                                            </span>
                                    </div>
                                    <h6 class="fw-semibold">Skilled</h6>
                                    <p class="fs-15 text-muted mb-0">Our team brings unparalleled expertise and dedication to every project, ensuring top-notch results that exceed expectations.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="card custom-card landing-card">
                                <div class="card-body text-center">
                                    <div class="mb-4">
                                        <span
                                            class="svg-gradient avatar avatar-lg bg-pink mx-auto svg-container pink svg-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                fill="#000000" viewBox="0 0 256 256">
                                                <path d="M216,48V88H40V48a8,8,0,0,1,8-8H208A8,8,0,0,1,216,48Z"
                                                    opacity="0.2"></path>
                                                <path
                                                    d="M208,32H184V24a8,8,0,0,0-16,0v8H88V24a8,8,0,0,0-16,0v8H48A16,16,0,0,0,32,48V208a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V48A16,16,0,0,0,208,32ZM72,48v8a8,8,0,0,0,16,0V48h80v8a8,8,0,0,0,16,0V48h24V80H48V48ZM208,208H48V96H208V208Zm-38.34-85.66a8,8,0,0,1,0,11.32l-48,48a8,8,0,0,1-11.32,0l-24-24a8,8,0,0,1,11.32-11.32L116,164.69l42.34-42.35A8,8,0,0,1,169.66,122.34Z">
                                                </path>
                                            </svg>
                                            </span>
                                    </div>
                                    <h6 class="fw-semibold">Planning</h6>
                                    <p class="fs-15 text-muted mb-0">Craft precise, goal-oriented plans to help you navigate challenges and achieve business objectives with confidence.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section landing-Features" id="features">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-8">
                            <div class="heading-section text-center mb-0">
                                <span class="landing-text-heading dark-text">Tech-stack</span>
                                <h3 class="text-fixed-white text-center mt-3 fw-medium">Technology Used</h3>
                                <div class="fs-16 text-fixed-white text-center op-8">Built using robust backend technologies including PHP, Laravel, MySQL, SQLite, and MongoDB, delivering seamless performance and flexibility to handle diverse application needs.</div>
                                <div class="mt-4 mb-5 d-flex align-items-center justify-content-center">
                                    <a href="{{ route('dashboard') }}" class="btn bg-white-transparent me-3 mb-sm-0">Get Started
                                        Now</a>
                                    <a href="{{ route('dashboard') }}"
                                        class="btn text-fixed-white border border-white border-opacity-25 btn-wave waves-effect waves-light">Discover
                                        More<i class="fe fe-arrow-right fs-14 align-text-bottom ms-1"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-10 my-auto">
                            <div class="d-flex align-items-center justify-content-center trusted-companies sub-card-companies flex-wrap mb-3 mb-xl-0 gap-4">
                                <div class="trust-img">
                                    <img src="{{ asset('') }}assets/images/media/landing/logos--aws.png" alt="img">
                                </div>
                                <div class="trust-img">
                                    <img src="{{ asset('') }}assets/images/media/landing/logos--docker-icon.png" alt="img">
                                </div>
                                <div class="trust-img">
                                    <img src="{{ asset('') }}assets/images/media/landing/logos--laravel.png" alt="img">
                                </div>
                                <div class="trust-img">
                                    <img src="{{ asset('') }}assets/images/media/landing/logos--php.png" alt="img">
                                </div>
                                <div class="trust-img">
                                    <img src="{{ asset('') }}assets/images/media/landing/logos--nodejs-icon.png" alt="img">
                                </div>
                                <div class="trust-img">
                                    <img src="{{ asset('') }}assets/images/media/landing/logos--nestjs.png" alt="img">
                                </div>
                                <div class="trust-img">
                                    <img src="{{ asset('') }}assets/images/media/landing/logos--javascript.png" alt="img">
                                </div>
                                <div class="trust-img">
                                    <img src="{{ asset('') }}assets/images/media/landing/logos--mysql.png" alt="img">
                                </div>
                                <div class="trust-img">
                                    <img src="{{ asset('') }}assets/images/media/landing/logos--mongodb.png" alt="img">
                                </div>
                                <div class="trust-img">
                                    <img src="{{ asset('') }}assets/images/media/landing/logos--firebase.png" alt="img">
                                </div>
                                <div class="trust-img">
                                    <img src="{{ asset('') }}assets/images/media/landing/logos--google-gemini.png" alt="img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section" id="team">
                <div class="container">
                    <div class="text-center">
                        <span class="landing-text-heading">Our Team</span>
                        <h3 class="fw-semibold mt-3 mb-2">The Team Behind Our Success</h3>
                        <div class="row justify-content-center">
                            <div class="col-xl-7">
                                <p class="text-muted fs-15 mb-5 fw-normal">Our team consists of dedicated individuals who are truly passionate about their work.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 mb-lg-0 mb-4">
                            <div class="card custom-card team-member">
                                <div class="card-body text-center p-4">
                                        <span class="avatar avatar-xxl bg-primary-transparent avatar-rounded mb-3 border border-5 border-primary border-opacity-10">
                                            <img src="{{ asset('') }}assets/images/faces/team/profile-1.webp" class="card-img" alt="...">
                                        </span>
                                        <div class="text-center py-2">
                                            <h5 class="mb-0 fw-medium">Diki Hidayatullah</h5>
                                            <p class="mb-1 fs-14 fw-medium text-primary">Server-side Developer</p>
                                            <p class="mb-0 fs-13 text-muted op-8">Specialize in most of server-side task such as docker container, server deployment and other backend technologies.</p>
                                                <div class="d-flex justify-content-center mt-3">
                                                    <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-primary btn-wave waves-effect waves-light"><i class="ri-twitter-x-fill"></i></a>
                                                    <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-secondary btn-wave ms-2 waves-effect waves-light"><i class="ri-facebook-fill"></i></a>
                                                    <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-special btn-wave ms-2 waves-effect waves-light"><i class="ri-instagram-line"></i></a>
                                                    <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-info btn-wave ms-2 waves-effect waves-light"><i class="ri-linkedin-fill"></i></a>
                                                </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 mb-lg-0 mb-4">
                            <div class="card custom-card team-member">
                                <div class="card-body text-center p-4">
                                        <span class="avatar avatar-xxl bg-secondary-transparent avatar-rounded mb-3  border border-5 border-secondary border-opacity-10">
                                            <img src="{{ asset('') }}assets/images/faces/team/profile-2.webp" class="card-img" alt="...">
                                        </span>
                                        <div class="text-center py-2">
                                            <h5 class="mb-0 fw-medium">Maryo Pane</h5>
                                            <p class="mb-1 fs-14 fw-medium text-secondary">Frontend Developer</p>
                                            <p class="mb-0 fs-13 text-muted op-8">Specialize in most of all frontend task such as SEO, UI/UX, and mostly using reactjs and nextjs.</p>
                                                <div class="d-flex justify-content-center mt-3">
                                                    <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-primary btn-wave waves-effect waves-light"><i class="ri-twitter-x-fill"></i></a>
                                                    <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-secondary btn-wave ms-2 waves-effect waves-light"><i class="ri-facebook-fill"></i></a>
                                                    <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-special btn-wave ms-2 waves-effect waves-light"><i class="ri-instagram-line"></i></a>
                                                    <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-info btn-wave ms-2 waves-effect waves-light"><i class="ri-linkedin-fill"></i></a>
                                                </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 mb-lg-0 mb-4">
                            <div class="card custom-card team-member">
                                <div class="card-body text-center p-4">
                                        <span class="avatar avatar-xxl bg-special-transparent avatar-rounded mb-3 border border-5 border-special border-opacity-10">
                                            <img src="{{ asset('') }}assets/images/faces/team/profile-3.webp" class="card-img" alt="...">
                                        </span>
                                        <div class="text-center py-2">
                                            <h5 class="mb-0 fw-medium">Charles</h5>
                                            <p class="mb-1 fs-14 fw-medium text-special">Backend Developer</p>
                                            <p class="mb-0 fs-13 text-muted op-8">Specialize in learning new tech stack, mastering most of Laravel ecosystem also can write in Javascript frameworks.</p>
                                                <div class="d-flex justify-content-center mt-3">
                                                    <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-primary btn-wave waves-effect waves-light"><i class="ri-twitter-x-fill"></i></a>
                                                    <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-secondary btn-wave ms-2 waves-effect waves-light"><i class="ri-facebook-fill"></i></a>
                                                    <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-special btn-wave ms-2 waves-effect waves-light"><i class="ri-instagram-line"></i></a>
                                                    <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-info btn-wave ms-2 waves-effect waves-light"><i class="ri-linkedin-fill"></i></a>
                                                </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 mb-lg-0 mb-4">
                            <div class="card custom-card team-member">
                                <div class="card-body text-center p-4">
                                        <span class="avatar avatar-xxl bg-info-transparent avatar-rounded mb-3 border border-5 border-info border-opacity-10">
                                            <img src="{{ asset('') }}assets/images/faces/team/profile-4.webp" class="card-img" alt="...">
                                        </span>
                                        <div class="text-center py-2">
                                            <h5 class="mb-0 fw-medium">Irwan Setiawan</h5>
                                            <p class="mb-1 fs-14 fw-medium text-info">Backend Developer</p>
                                            <p class="mb-0 fs-13 text-muted op-8">Specialize in server-side scripting, master in Laravel API, and most business logic, also making secure apps efficiently.</p>
                                                <div class="d-flex justify-content-center mt-3">
                                                    <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-primary btn-wave waves-effect waves-light"><i class="ri-twitter-x-fill"></i></a>
                                                    <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-secondary btn-wave ms-2 waves-effect waves-light"><i class="ri-facebook-fill"></i></a>
                                                    <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-special btn-wave ms-2 waves-effect waves-light"><i class="ri-instagram-line"></i></a>
                                                    <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-info btn-wave ms-2 waves-effect waves-light"><i class="ri-linkedin-fill"></i></a>
                                                </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 mb-lg-0 mb-4">
                            <div class="card custom-card team-member">
                                <div class="card-body text-center p-4">
                                        <span class="avatar avatar-xxl bg-success-transparent avatar-rounded mb-3 border border-5 border-success border-opacity-10">
                                            <img src="{{ asset('') }}assets/images/faces/team/profile-5.webp" class="card-img" alt="...">
                                        </span>
                                        <div class="text-center py-2">
                                            <h5 class="mb-0 fw-medium">Ein Carvi</h5>
                                            <p class="mb-1 fs-14 fw-medium text-success">Android Package Kit Developer</p>
                                            <p class="mb-0 fs-13 text-muted op-8">Using React Native to its fullest potential, delivering seamless cross-platform applications with robust business logic and intuitive user experiences, tailored for scalability and performance.</p>
                                                <div class="d-flex justify-content-center mt-3">
                                                    <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-primary btn-wave waves-effect waves-light"><i class="ri-twitter-x-fill"></i></a>
                                                    <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-secondary btn-wave ms-2 waves-effect waves-light"><i class="ri-facebook-fill"></i></a>
                                                    <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-special btn-wave ms-2 waves-effect waves-light"><i class="ri-instagram-line"></i></a>
                                                    <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-info btn-wave ms-2 waves-effect waves-light"><i class="ri-linkedin-fill"></i></a>
                                                </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 mb-lg-0 mb-4">
                            <div class="card custom-card team-member">
                                <div class="card-body text-center p-4">
                                        <span class="avatar avatar-xxl bg-warning-transparent avatar-rounded mb-3 border border-5 border-warning border-opacity-10">
                                            <img src="{{ asset('') }}assets/images/faces/team/profile-6.webp" class="card-img" alt="...">
                                        </span>
                                        <div class="text-center py-2">
                                            <h5 class="mb-0 fw-medium">Renaldy Adrian Subrata</h5>
                                            <p class="mb-1 fs-14 fw-medium text-warning">UI/UX Designer</p>
                                            <p class="mb-0 fs-13 text-muted op-8">Specializing in crafting intuitive and visually captivating user interfaces, enhancing user experiences with seamless navigation, 2D animations, and engaging banners. Collaborating closely with Frontend Developers to bring designs to life with precision.</p>
                                                <div class="d-flex justify-content-center mt-3">
                                                    <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-primary btn-wave waves-effect waves-light"><i class="ri-twitter-x-fill"></i></a>
                                                    <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-secondary btn-wave ms-2 waves-effect waves-light"><i class="ri-facebook-fill"></i></a>
                                                    <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-special btn-wave ms-2 waves-effect waves-light"><i class="ri-instagram-line"></i></a>
                                                    <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-info btn-wave ms-2 waves-effect waves-light"><i class="ri-linkedin-fill"></i></a>
                                                </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 mb-lg-0 mb-4">
                            <div class="card custom-card team-member">
                                <div class="card-body text-center p-4">
                                        <span class="avatar avatar-xxl bg-danger-transparent avatar-rounded mb-3 border border-5 border-danger border-opacity-10">
                                            <img src="{{ asset('') }}assets/images/faces/team/profile-7.webp" class="card-img" alt="...">
                                        </span>
                                        <div class="text-center py-2">
                                            <h5 class="mb-0 fw-medium">Eko Wijaya</h5>
                                            <p class="mb-1 fs-14 fw-medium text-danger">Art Designer</p>
                                            <p class="mb-0 fs-13 text-muted op-8">Specialize in 3D model creation, skilled in using advanced design tools to bring ideas to life. Also proficient in designing intuitive UI/UX for back-office dashboards, blending functionality with aesthetic appeal.</p>
                                                <div class="d-flex justify-content-center mt-3">
                                                    <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-primary btn-wave waves-effect waves-light"><i class="ri-twitter-x-fill"></i></a>
                                                    <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-secondary btn-wave ms-2 waves-effect waves-light"><i class="ri-facebook-fill"></i></a>
                                                    <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-special btn-wave ms-2 waves-effect waves-light"><i class="ri-instagram-line"></i></a>
                                                    <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-info btn-wave ms-2 waves-effect waves-light"><i class="ri-linkedin-fill"></i></a>
                                                </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section section-bg" id="pricing">
                <div class="container">
                    <div class="text-center">
                        <span class="landing-text-heading">Pricing</span>
                        <h3 class="fw-semibold mt-3 mb-2">We Provide the Most Competitive Pricing</h3>
                        <div class="row justify-content-center">
                            <div class="col-xl-7">
                                <p class="text-muted fs-15 mb-5 fw-normal">Our plans are designed to be highly affordable, catering to every category with a focus on value and accessibility.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex align-items-center justify-content-center mb-5">
                        <div class="col-lg-8 col-xl-4 col-xxl-4 col-md-8 col-sm-12">
                            <div class="card custom-card pricing-card pricing-card1 border shadow-xs">
                                <div class="card-body p-4">
                                    <div class="d-flex gap-3 align-items-center p-1">
                                        <div class="p-2 border d-inline-block border-secondary rounded border-opacity-10 bg-secondary-transparent">
                                            <span class="avatar avatar-md bg-secondary svg-white">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256">
                                                    <path d="M80,104V208H32a8,8,0,0,1-8-8V112a8,8,0,0,1,8-8Z" opacity="0.2">
                                                    </path>
                                                    <path d="M234,80.12A24,24,0,0,0,216,72H160V56a40,40,0,0,0-40-40,8,8,0,0,0-7.16,4.42L75.06,96H32a16,16,0,0,0-16,16v88a16,16,0,0,0,16,16H204a24,24,0,0,0,23.82-21l12-96A24,24,0,0,0,234,80.12ZM32,112H72v88H32ZM223.94,97l-12,96a8,8,0,0,1-7.94,7H88V105.89l36.71-73.43A24,24,0,0,1,144,56V80a8,8,0,0,0,8,8h64a8,8,0,0,1,7.94,9Z">
                                                    </path>
                                                </svg>
                                            </span>
                                        </div>
                                        <div class="text-start">
                                            <h4 class="fw-medium mb-1">Promo</h4> <span class="mb-1 text-muted d-block">Essential features for a magical
                                                start</span>
                                        </div>
                                    </div>
                                    <hr class="border-top my-4">
                                    <div>
                                        <h2 class="mb-0 fw-semibold d-block">IDR 99.800/<span class="fs-12 fw-medium ms-1">Per Month</span></h2> <span class="text-muted fs-14"><span class="me-2 fw-semibold">Billed Annually</span></span>
                                    </div>
                                    <div class="text-center my-3 pricing-barrier">
                                        <span class="op-6 fs-12 px-2 py-1 border rounded-pill">Promo Plan</span>
                                    </div>
                                    <ul class="list-unstyled pricing-body">
                                        <li>
                                            <div class="d-flex align-items-center"> <span class="avatar avatar-xs svg-primary"> <i class="ri-arrow-right-circle-line fs-14 text-success"></i> </span> <span class="ms-1 my-auto flex-fill"> Shared Hosting </span> </div>
                                        </li>
                                        <li>
                                            <div class="d-flex align-items-center"> <span class="avatar avatar-xs svg-primary"> <i class="ri-arrow-right-circle-line fs-14 text-success"></i> </span> <span class="ms-1 my-auto"> Free Domain .com </span> </div>
                                        </li>
                                        <li>
                                            <div class="d-flex align-items-center"> <span class="avatar avatar-xs svg-primary"> <i class="ri-arrow-right-circle-line fs-14 text-success"></i> </span> <span class="ms-1 my-auto flex-fill"> Free Design Revise </span> <span class="text-muted fs-12 fw-medium">3 Times</span> </div>
                                        </li>
                                        <li>
                                            <div class="d-flex align-items-center"> <span class="avatar avatar-xs svg-primary"> <i class="ri-arrow-right-circle-line fs-14 text-success"></i> </span> <span class="ms-1 my-auto flex-fill"> SEO Optimization </span> </div>
                                        </li>
                                        <li>
                                            <div class="d-flex align-items-center"> <span class="avatar avatar-xs svg-primary"> <i class="ri-arrow-right-circle-line fs-14 text-success"></i> </span> <span class="ms-1 my-auto flex-fill"> Email Support </span> </div>
                                        </li>
                                        <li>
                                            <div class="d-flex align-items-center"> <span class="avatar avatar-xs svg-primary"> <i class="ri-arrow-right-circle-line fs-14 text-success"></i> </span> <span class="ms-1 my-auto flex-fill"> Free SSL </span> </div>
                                        </li>
                                        <li>
                                            <div class="d-flex align-items-center"> <span class="avatar avatar-xs svg-primary"> <i class="ri-arrow-right-circle-line fs-14 text-success"></i> </span> <span class="ms-1 my-auto flex-fill"> Free Maintenance </span> </div>
                                        </li>
                                    </ul>
                                    <button type="button" class="btn btn-lg mt-4 btn-secondary-light d-grid w-100 btn-wave waves-effect waves-light">
                                        <span class="ms-4 me-4">Schedule a Demo</span> </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-xl-4 col-xxl-4 col-md-8 col-sm-12">
                            <div class="card custom-card pricing-card pricing-card1 border shadow-xs">
                                <div class="card-body p-4">
                                    <div class="d-flex gap-3 align-items-center p-1">
                                        <div class="p-2 border d-inline-block border-primary rounded border-opacity-10 bg-primary-transparent">
                                            <span class="avatar avatar-md bg-primary svg-white">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256">
                                                    <path d="M128,48v80H40.87A146.29,146.29,0,0,1,40,112V56a8,8,0,0,1,8-8Zm0,80V232s78.06-21.3,87.13-104Z" opacity="0.2"></path>
                                                    <path d="M208,40H48A16,16,0,0,0,32,56v56c0,52.72,25.52,84.67,46.93,102.19,23.06,18.86,46,25.27,47,25.53a8,8,0,0,0,4.2,0c1-.26,23.91-6.67,47-25.53C198.48,196.67,224,164.72,224,112V56A16,16,0,0,0,208,40ZM120,220.55a130.85,130.85,0,0,1-30.93-18.74c-21.15-17.3-34.2-39.37-39-65.81H120ZM120,120H48.23c-.15-2.63-.23-5.29-.23-8l0-56h72Zm47.4,81.42A131.31,131.31,0,0,1,136,220.53V136h69.91C201.16,162.24,188.27,184.18,167.4,201.42ZM208,112c0,2.71-.08,5.37-.23,8H136V56h72Z">
                                                    </path>
                                                </svg>
                                            </span>
                                        </div>
                                        <div class="text-start">
                                            <h4 class="fw-medium mb-1">Growth</h4> <span class="mb-1 text-muted d-block">Essential
                                                features for a magical start</span>
                                        </div>
                                    </div>
                                    <hr class="border-top my-4">
                                    <div>
                                        <h2 class="mb-0 fw-semibold d-block ">IDR 499.800/<span class="fs-12  fw-medium ms-1">Per Month</span></h2> 
                                        <span class="text-muted fs-14"><span class=" me-2 fw-semibold">Billed Annually</span></span>
                                    </div>
                                    <div class="text-center my-3 pricing-barrier">
                                        <span class="op-6 fs-12 px-2 py-1 border rounded-pill">Reccomonded</span>
                                    </div>
                                    <ul class="list-unstyled pricing-body">
                                        <li>
                                            <div class="d-flex align-items-center"> <span class="avatar avatar-xs svg-primary"> <i class="ri-arrow-right-circle-line fs-14 text-success"></i> </span> <span class="ms-1 my-auto flex-fill"> All of Promo Plan benefits </span> <span class="badge bg-primary-transparent rounded-pill">Included</span> </div>
                                        </li>
                                        <li>
                                            <div class="d-flex align-items-center"> <span class="avatar avatar-xs svg-primary"> <i class="ri-arrow-right-circle-line fs-14 text-success"></i> </span> <span class="ms-1 my-auto"> Dedicated Hosting </span> </div>
                                        </li>
                                        <li>
                                            <div class="d-flex align-items-center"> <span class="avatar avatar-xs svg-primary"> <i class="ri-arrow-right-circle-line fs-14 text-success"></i> </span> <span class="ms-1 my-auto"> Zero Downtime Website </span> </div>
                                        </li>
                                        <li>
                                            <div class="d-flex align-items-center"> <span class="avatar avatar-xs svg-primary"> <i class="ri-arrow-right-circle-line fs-14 text-success"></i> </span> <span class="ms-1 my-auto"> Priority Technical Support </span> </div>
                                        </li>
                                        <li>
                                            <div class="d-flex align-items-center"> <span class="avatar avatar-xs svg-primary"> <i class="ri-arrow-right-circle-line fs-14 text-success"></i> </span> <span class="ms-1 my-auto flex-fill"> Free Design Revise  </span> <span class="text-muted fs-12 fw-medium">5 Times</span> </div>
                                        </li>
                                        <li>
                                            <div class="d-flex align-items-center"> <span class="avatar avatar-xs svg-primary"> <i class="ri-arrow-right-circle-line fs-14 text-success"></i> </span> <span class="ms-1 my-auto flex-fill"> Google Analytics Traffic </span> </div>
                                        </li>
                                        <li>
                                            <div class="d-flex align-items-center"> <span class="avatar avatar-xs svg-primary"> <i class="ri-arrow-right-circle-line fs-14 text-success"></i> </span> <span class="ms-1 my-auto flex-fill"> Admin Backoffice Panel </span> </div>
                                        </li>
                                    </ul>
                                    <button type="button" class="btn btn-lg mt-4 btn-primary d-grid w-100 btn-wave waves-effect waves-light">
                                        <span class="ms-4 me-4">Schedule a Demo</span> </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-xl-4 col-xxl-4 col-md-8 col-sm-12">
                            <div class="card custom-card pricing-card pricing-card1 border shadow-xs">
                                <div class="card-body p-4">
                                    <div class="d-flex gap-3 align-items-center p-1">
                                        <div class="p-2 border d-inline-block border-special rounded border-opacity-10 bg-special-transparent">
                                            <span class="avatar avatar-md bg-special svg-white">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256">
                                                    <path d="M209,81l-33,31,32,88-24,24-48-72-24,24v24L88,224,72,184,32,168l24-24H80l24-24L32,72,56,48l88,32,31-33A24,24,0,0,1,209,81Z" opacity="0.2"></path>
                                                    <path d="M185.33,114.21l29.14-27.43.17-.16a32,32,0,0,0-45.26-45.26l-.16.17L141.79,70.67l-83-30.2a8,8,0,0,0-8.39,1.86l-24,24a8,8,0,0,0,1.22,12.31l63.89,42.59L76.69,136H56a8,8,0,0,0-5.65,2.34l-24,24A8,8,0,0,0,29,175.42l36.82,14.73,14.7,36.75.06.16a8,8,0,0,0,13.18,2.47l23.87-23.88A8,8,0,0,0,120,200V179.31l14.76-14.76,42.59,63.89a8,8,0,0,0,12.31,1.22l24-24a8,8,0,0,0,1.86-8.39Zm-.07,97.23-42.59-63.89A8,8,0,0,0,136.8,144a7.09,7.09,0,0,0-.79,0,8,8,0,0,0-5.66,2.34l-24,24A8,8,0,0,0,104,176v20.69L90.93,209.76,79.43,181A8,8,0,0,0,75,176.57l-28.74-11.5L59.32,152H80a8,8,0,0,0,5.66-2.34l24-24a8,8,0,0,0-1.22-12.32L44.56,70.74l13.5-13.49,83.22,30.26a8,8,0,0,0,8.56-2l30.94-32.88A16,16,0,0,1,203.4,75.22l-32.87,30.94a8,8,0,0,0-2,8.56l30.26,83.22Z">
                                                    </path>
                                                </svg>
                                            </span>
                                        </div>
                                        <div class="text-start">
                                            <h4 class="fw-medium mb-1">Professional</h4> <span class="mb-1 text-muted d-block">Pinnacle excellence, VIP support.</span>
                                        </div>
                                    </div>
                                    <hr class="border-top my-4">
                                    <div>
                                        <h2 class="mb-0 fw-semibold d-block ">IDR ***/<span class="fs-12  fw-medium ms-1">By Requests</span></h2> <span class="text-muted fs-14"><span class=" me-2 fw-semibold"> Billed by Requested functionality </span></span>
                                    </div>
                                    <div class="text-center my-3 pricing-barrier">
                                        <span class="op-6 fs-12 px-2 py-1 border rounded-pill">Special Plan</span>
                                    </div>
                                    <ul class="list-unstyled pricing-body">
                                        <li>
                                            <div class="d-flex align-items-center"> <span class="avatar avatar-xs svg-primary"> <i class="ri-arrow-right-circle-line fs-14 text-success"></i> </span> <span class="ms-1 my-auto flex-fill"> All Growth Plan Benefits </span> <span class="badge bg-special-transparent rounded-pill">Included</span> </div>
                                        </li>
                                        <li>
                                            <div class="d-flex align-items-center"> <span class="avatar avatar-xs svg-primary"> <i class="ri-arrow-right-circle-line fs-14 text-success"></i> </span> <span class="ms-1 my-auto"> Premium Experience </span> </div>
                                        </li>
                                        <li>
                                            <div class="d-flex align-items-center"> <span class="avatar avatar-xs svg-primary"> <i class="ri-arrow-right-circle-line fs-14 text-success"></i> </span> <span class="ms-1 my-auto"> Infinite Updates </span> </div>
                                        </li>
                                        <li>
                                            <div class="d-flex align-items-center"> <span class="avatar avatar-xs svg-primary"> <i class="ri-arrow-right-circle-line fs-14 text-success"></i> </span> <span class="ms-1 my-auto"> Priority Technical Support </span> </div>
                                        </li>
                                        <li>
                                            <div class="d-flex align-items-center"> <span class="avatar avatar-xs svg-primary"> <i class="ri-arrow-right-circle-line fs-14 text-success"></i> </span> <span class="ms-1 my-auto"> Dedicated Virtual Servers </span> </div>
                                        </li>
                                        <li>
                                            <div class="d-flex align-items-center"> <span class="avatar avatar-xs svg-primary"> <i class="ri-arrow-right-circle-line fs-14 text-success"></i> </span> <span class="ms-1 my-auto flex-fill"> Risk-Free Trial </span> <span class="text-muted fs-12 fw-medium">14 Days</span> </div>
                                        </li>
                                        <li>
                                            <div class="d-flex align-items-center"> <span class="avatar avatar-xs svg-primary"> <i class="ri-arrow-right-circle-line fs-14 text-success"></i> </span> <span class="ms-1 my-auto flex-fill"> Satisfaction Guarantee </span> <span class="text-muted fs-12 fw-medium">30 Days</span> </div>
                                        </li>
                                    </ul>
                                    <button type="button" class="btn btn-lg btn-special-light mt-4 d-grid w-100 btn-wave waves-effect waves-light">
                                        <span class="ms-4 me-4">Schedule a Demo</span> </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
            <section class="section " id="contact">
                <div class="container text-center">
                    <span class="landing-text-heading">Contact Us</span>
                    <h3 class="fw-semibold mt-3 mb-2">Have any questions? We’d be happy to hear from you.</h3>
                    <div class="row justify-content-center">
                        <div class="col-xl-9">
                            <p class="text-muted fs-15 mb-5 fw-normal">Feel free to contact us anytime with any questions or inquiries. Don’t hesitate to clear your doubts before trying our product.</p>
                        </div>
                    </div>
                    <div class="card-body p-0 bg-white">
                        <div class="row text-start">
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 pe-0">
                                <div class="p-5 border-end">
                                    <form action="{{ route('send-mail-support') }}" method="POST">
                                        @csrf
                                        <div class="row gy-3">
                                            <div class="col-xl-6">
                                                <div class="row gy-3">
                                                    <div class="col-xl-12">
                                                        <label for="contact-address-name" class="form-label ">Full Name
                                                            :</label>
                                                        <input type="text" class="form-control"
                                                            id="contact-address-name" name="username" placeholder="Enter Name">
                                                    </div>
                                                    <div class="col-xl-12">
                                                        <label for="contact-address-phone" class="form-label ">Phone No
                                                            :</label>
                                                        <input type="text" class="form-control"
                                                            id="contact-address-phone" name="phone" placeholder="Enter Phone No">
                                                    </div>
                                                    <div class="col-xl-12">
                                                        <label for="contact-address-address" class="form-label ">Address
                                                            :</label>
                                                        <textarea class="form-control" name="address" id="contact-address-address"
                                                            rows="1"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <label for="contact-address-message" class="form-label ">Message
                                                    :</label>
                                                <textarea class="form-control" name="message" id="contact-address-message"
                                                    rows="8"></textarea>
                                            </div>
                                            <div class="col-xl-12">
                                                <div class="d-flex  mt-3">
                                                    <div class="">
                                                        <div class="btn-list">
                                                            <button class="btn btn-icon btn-info-light btn-wave">
                                                                <i class="ri-facebook-line fw-bold"></i>
                                                            </button>
                                                            <button class="btn btn-icon btn-secondary-light btn-wave">
                                                                <i class="ri-twitter-x-line fw-bold"></i>
                                                            </button>
                                                            <button class="btn btn-icon btn-special-light btn-wave">
                                                                <i class="ri-instagram-line fw-bold"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="ms-auto">
                                                        <button type="submit" class="btn btn-primary btn-wave">Send Message</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 pe-0">
                                <div class="p-5 landing-contact-info">
                                    <div class="">
                                        <div class="fs-18 fw-semibold mb-3">Contact Information</div>
                                        <div class="mb-3 text-default"> <i class="ri-map-pin-fill me-2 text-muted"></i> Jl. Gading Kirana Timur No. A-11/15 <span>(virtual office)</span></div>
                                        <div class="d-flex mb-3"> <i
                                                class="ri-phone-fill me-2 d-inline-block text-muted"></i>
                                            <div class="text-default">
                                                <div>+62 858 8881 8811</div> <span>+62 856 9116 8001</span>
                                            </div>
                                        </div>
                                        <div class="mb-4 text-default"><i class="ri-mail-fill me-2 d-inline-block text-muted"></i>
                                            support@lintasinovasiglobal.com</div>
                                    </div>
                                    <div class="">
                                        <div class="card custom-card border mb-0 shadow-none overflow-hidden"> <iframe
                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15867.15331396479!2d106.89463882112943!3d-6.159097601248749!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f5acac1d4801%3A0x82a5c1c379a7cea6!2sHive%20Five%20Kelapa%20Gading!5e0!3m2!1sen!2skh!4v1733750379676!5m2!1sen!2skh"
                                            height="100" style="border:0;width:100%" allowfullscreen=""
                                            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
            <section class="section landing-footer text-fixed-white">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-12 mb-md-0 mb-3">
                            <div class="px-4">
                                <p class="fw-medium mb-3"><a href="{{ route('dashboard') }}"><img
                                    src="{{ asset('') }}assets/images/brand-logos/logo-ligal.png" alt="" style="height: 75px"></a></p>
                                <p class="mb-2 op-6 fw-normal">
                                    Lintas Inovasi Global, a registered startup specializing in IT services, including website development, dedicated to delivering innovative solutions.
                                </p>
                                <p class="mb-0 op-6 fw-normal">
                                    Template by Zynix - Bootstrap
                                </p>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-6 col-12">
                            <div class="px-4">
                                <h6 class="fw-medium mb-3 text-fixed-white">PAGES</h6>
                                <ul class="list-unstyled op-6 fw-normal landing-footer-list">
                                    <li>
                                        <a href="{{ route('ecommerce') }}" class="text-fixed-white">E-Commerce</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('profile') }}" class="text-fixed-white">Profile</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('timeline') }}" class="text-fixed-white">Timeline</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('coming-soon') }}" class="text-fixed-white">Coming Soon</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-6 col-12">
                            <div class="px-4">
                                <h6 class="fw-medium text-fixed-white">INFO</h6>
                                <ul class="list-unstyled op-6 fw-normal landing-footer-list">
                                    <li>
                                        <a href="team.html" class="text-fixed-white">Our Team</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="text-fixed-white">Contact US</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="text-fixed-white">About</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="text-fixed-white">Services</a>
                                    </li>
                                    <li>
                                        <a href="blog.html" class="text-fixed-white">Blog</a>
                                    </li>
                                    <li>
                                        <a href="terms_conditions.html" class="text-fixed-white">Terms & Conditions</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-12">
                            <div class="px-4">
                                <h6 class="fw-medium text-fixed-white">CONTACT</h6>
                                <ul class="list-unstyled fw-normal landing-footer-list">
                                    <li>
                                        <a href="javascript:void(0);" class="text-fixed-white op-6"><i
                                                class="ri-home-4-line me-1 align-middle"></i> Jl. Gading Kirana Timur No. A-11/15, Indonesia</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="text-fixed-white op-6"><i
                                                class="ri-mail-line me-1 align-middle"></i> support@lintasinovasiglobal.com</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="text-fixed-white op-6"><i
                                                class="ri-phone-line me-1 align-middle"></i> +(62) 858 8881 8811</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="text-fixed-white op-6"><i
                                                class="ri-printer-line me-1 align-middle"></i> +(62) 856 9116 8001</a>
                                    </li>
                                    <li class="mt-3">
                                        <p class="mb-2 fw-medium op-8">FOLLOW US ON :</p>
                                        <div class="mb-0">
                                            <div class="btn-list">
                                                <button
                                                    class="btn btn-sm btn-icon btn-primary-light btn-wave waves-effect waves-light">
                                                    <i class="ri-facebook-line fw-bold"></i>
                                                </button>
                                                <button
                                                    class="btn btn-sm btn-icon btn-secondary-light btn-wave waves-effect waves-light">
                                                    <i class="ri-twitter-x-line fw-bold"></i>
                                                </button>
                                                <button
                                                    class="btn btn-sm btn-icon btn-special-light btn-wave waves-effect waves-light">
                                                    <i class="ri-instagram-line fw-bold"></i>
                                                </button>
                                                <button
                                                    class="btn btn-sm btn-icon btn-info-light btn-wave waves-effect waves-light">
                                                    <i class="ri-github-line fw-bold"></i>
                                                </button>
                                                <button
                                                    class="btn btn-sm btn-icon btn-warning-light btn-wave waves-effect waves-light">
                                                    <i class="ri-youtube-line fw-bold"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
            <div class="text-center landing-main-footer py-3">
                <span class="text-muted fs-15"> Copyright © <span id="year"></span> <a href="https://lintasinovasiglobal.com"
                        class="text-primary fw-medium"><u>Lintas Inovasi Global</u></a> All
                    rights
                    reserved
                </span>
            </div>
        </div>
    </div>
    @if(session()->has('success'))
    <script>
        Swal.fire({
            text: '{{ session('success') }}',
            icon: 'success',
            confirmButtonText: 'OK',
        }).then(() => {
            document.querySelectorAll('.swal2-success-circular-line-left, .swal2-success-fix, .swal2-success-circular-line-right').forEach(element => {
                element.style.backgroundColor = 'rgba(255, 255, 255, 0)';
            });
        });
    </script>
    @endif
    @foreach([
        'name',
        'phone',
        'address',
        'message',
    ] as $kalauError)
        @error($kalauError)
            <script>
                Swal.fire({
                    text: '{{ $message }}',
                    icon: 'error',
                    confirmButtonText: 'OK',
                });
            </script>
        @enderror
    @endforeach

    <div class="scrollToTop">
        <span class="arrow"><i class="ri-arrow-up-s-fill fs-20"></i></span>
    </div>
    <div id="responsive-overlay"></div>

    <script src="{{ asset('assets/libs/@popperjs/core/umd/popper.min.js') }}"></script>
    <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/libs/@simonwep/pickr/pickr.es5.min.js') }}"></script>
    <script src="{{ asset('assets/libs/choices.js/public/assets/scripts/choices.min.js') }}"></script>
    <script src="{{ asset('assets/libs/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/defaultmenu.min.js') }}"></script>
    <script src="{{ asset('assets/js/landing.js') }}"></script>
    <script src="{{ asset('assets/libs/node-waves/waves.min.js') }}"></script>
    <script src="{{ asset('assets/js/sticky.js') }}"></script>

</body>

</html>