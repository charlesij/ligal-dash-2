<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-vertical-style="overlay" data-theme-mode="light" data-header-styles="light" data-menu-styles="light" data-toggled="close">

<head>
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Lintas Inovasi Global | Coming Soon </title>
    <meta name="Author" content="Lintas Inovasi Global">
    <meta name="Description" content="Lintas Inovasi Global is a technology company providing IT services, including website, mobile, and desktop application development. We cater to startups and large corporations, offering innovative solutions such as modern website upgrades, data management, and customizable templates with efficient dashboards. With a dedicated team of top-tier experts, we focus on delivering high-quality services tailored to customer needs and keeping up with the latest digital standards.">
	<meta name="keywords" content="bootstrap template, admin panel bootstrap, bootstrap dashboard, admin, admin dashboard template, dashboard template, html css templates, dashboard, template dashboard,  bootstrap dashboard template, dashboard html css, bootstrap admin dashboard,  bootstrap admin, dashboard template, bootstrap5 admin template">

    <link rel="icon" href="{{ asset('assets/images/brand-logos/favicon.ico') }}" type="image/x-icon">
    <script src="{{ asset('assets/js/authentication-main.js') }}"></script>
    <link id="style" href="{{ asset('assets/libs/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" > 
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet" >
    <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet" >
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body class="coming-soon-main position-relative" id="particles-js">

    <div class="row authentication coming-soon justify-content-center g-0 my-auto">
    <div class="auth-main-bg">
        <div class="auth-shape">
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1440 120">
                <path d="M 0,36 C 144,53.6 432,123.2 720,124 C 1008,124.8 1296,56.8 1440,40L1440 140L0 140z"></path>
            </svg>
        </div>
    </div>
        <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-6 col-sm-7 col-11 my-auto">
            <div class="authentication-cover">
                <div class="p-5 auth-bg-banner text-center">
                    <div class="row justify-content-center align-items-center mx-0 g-0">
                        <div class="col-xxl-10 col-xl-10 col-lg-10 col-md-12 col-sm-12 col-12">
                            <div>
                                <div class="mb-2">
                                 <a href="/"> 
                                 {{-- <a href="{{ route('sales') }}">  --}}
                                    <img src="{{ asset('assets/images/brand-logos/logo-ligal.png') }}" alt="" class="authentication-brand desktop-light" width="225">
                                    <img src="{{ asset('assets/images/brand-logos/logo-ligal.png') }}" alt="" class="authentication-brand desktop-logodark" width="225"> 
                                 </a> 
                                </div>
                                <p class="fs-12 mb-1 text-muted op-8">STAY TUNED</p>
                                <h1 class="mb-3 fw-semibold">Coming Soon</h1>
                                <p class="mb-4 fs-16 text-muted">Something remarkable is coming soon stay tuned for the grand reveal An exciting transformation is near get ready for a fresh new experience!</p>
                                <form action="{{ route('subscription-emails') }}" method="POST">
                                    @csrf
                                    <div class="input-group mb-5">
                                        <input type="email" class="form-control form-control-lg" name="subscribers_emails" placeholder="your-email@gmail.com" aria-label="info@gmail.com" aria-describedby="button-addon2">
                                        <button type="submit" class="btn btn-primary btn-lg" type="button" id="button-addon2">Subscribe</button>
                                    </div>
                                    <div class="d-flex gap-4 flex-wrap mt-4 mb-0 gy-xxl-0 gy-3 justify-content-center" id="timer">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/libs/particles.js/particles.js') }}"></script>
    <script src="{{ asset('assets/js/coming-soon.js') }}"></script>
    @if(session()->has('success'))
    <script>
        Swal.fire({
            text: "{!! session('success') !!}",
            icon: 'success',
            confirmButtonText: 'OK',
        }).then(() => {
            document.querySelectorAll('.swal2-success-circular-line-left, .swal2-success-fix, .swal2-success-circular-line-right').forEach(element => {
                element.style.backgroundColor = 'rgba(255, 255, 255, 0)';
            });
        });
    </script>
    @endif

</body>

</html>