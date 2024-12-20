<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-vertical-style="overlay" data-theme-mode="light" data-header-styles="light" data-menu-styles="light" data-toggled="close">

<head>
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Lintas Inovasi Global | Sign In </title>
    <meta name="Author" content="Lintas Inovasi Global">
    <meta name="Description" content="Lintas Inovasi Global is a technology company providing IT services, including website, mobile, and desktop application development. We cater to startups and large corporations, offering innovative solutions such as modern website upgrades, data management, and customizable templates with efficient dashboards. With a dedicated team of top-tier experts, we focus on delivering high-quality services tailored to customer needs and keeping up with the latest digital standards.">
    <meta name="keywords" content="lintas inovasi global, bootstrap template, admin panel bootstrap, bootstrap dashboard, admin, admin dashboard template, dashboard template, html css templates, dashboard, template dashboard,  bootstrap dashboard template, dashboard html css, bootstrap admin dashboard,  bootstrap admin, dashboard template, bootstrap5 admin template">

    <link rel="icon" href="{{ asset('assets/images/brand-logos/favicon.ico') }}" type="image/x-icon">
    <script src="{{ asset('assets/js/authentication-main.js') }}"></script>
    <link id="style" href="{{ asset('assets/libs/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" >
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet" >
    <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet" >
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script type="module">
    import { initializeApp } from "https://www.gstatic.com/firebasejs/9.17.1/firebase-app.js";
    import { getAuth, GoogleAuthProvider, signInWithPopup, connectAuthEmulator } from "https://www.gstatic.com/firebasejs/9.17.1/firebase-auth.js";

    const firebaseConfig = {
        apiKey: "fake-api-key",
        authDomain: "fake-auth-domain",
        projectId: "your-project-id"
    };

    const app = initializeApp(firebaseConfig);
    const auth = getAuth(app);

    connectAuthEmulator(auth, "http://127.0.0.1:9099");

    const provider = new GoogleAuthProvider();

    document.addEventListener('DOMContentLoaded', () => {
        const googleLoginBtn = document.getElementById('google-login');

        if (googleLoginBtn) {
            googleLoginBtn.addEventListener('click', async () => {
                try {
                    const result = await signInWithPopup(auth, provider);
                    const user = result.user;

                    console.log("Login Berhasil: ", user);

                    const response = await fetch('/firebase-login', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        body: JSON.stringify({
                            uid: user.uid,
                            name: user.displayName,
                            email: user.email,
                        })
                    });

                    const responseData = await response.json();

                    if (responseData.status === 'success') {
                        // console.log(responseData);
                        // Swal.fire({
                        //     position: 'top-end',
                        //     icon: 'success',
                        //     title: responseData.message || 'Login Success',
                        //     showConfirmButton: false,
                        //     timer: 3000
                        // });
                        location.reload(); 
                    } else {
                        Swal.fire({
                            position: 'top-end',
                            icon: 'error',
                            title: responseData.message || 'Login failed, you may report this to our team.',
                            showConfirmButton: false,
                            timer: 3000
                        });
                    }
                } catch (error) {
                    console.error("Error saat login:", error.message);
                    alert("Login gagal, silakan coba lagi.");
                }
            });
        } else {
            console.error("Element dengan ID 'google-login' tidak ditemukan.");
        }
    });
    </script>

</head>

<body class="authentication-background authenticationcover-background position-relative" id="particles-js">
    <div class="container">
        <div class="row justify-content-center authentication authentication-basic align-items-center h-100">
            <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-6 col-sm-8 col-12">
                <div class="card custom-card my-4 border z-3 position-relative">
                    <div class="card-body p-0">
                        <div class="p-5">
                          <form action="{{ route('post-login') }}" method="POST">
                            @csrf
                            <div class="d-flex align-items-center justify-content-center mb-3">
                                <span class="auth-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" id="password"><path fill="#6446fe" d="M59,8H5A1,1,0,0,0,4,9V55a1,1,0,0,0,1,1H59a1,1,0,0,0,1-1V9A1,1,0,0,0,59,8ZM58,54H6V10H58Z" class="color1d1f47 svgShape"></path><path fill="#6446fe" d="M36,35H28a3,3,0,0,1-3-3V27a3,3,0,0,1,3-3h8a3,3,0,0,1,3,3v5A3,3,0,0,1,36,35Zm-8-9a1,1,0,0,0-1,1v5a1,1,0,0,0,1,1h8a1,1,0,0,0,1-1V27a1,1,0,0,0-1-1Z" class="color0055ff svgShape"></path><path fill="#6446fe" d="M36 26H28a1 1 0 0 1-1-1V24a5 5 0 0 1 10 0v1A1 1 0 0 1 36 26zm-7-2h6a3 3 0 0 0-6 0zM32 31a1 1 0 0 1-1-1V29a1 1 0 0 1 2 0v1A1 1 0 0 1 32 31z" class="color0055ff svgShape"></path><path fill="#6446fe" d="M59 8H5A1 1 0 0 0 4 9v8a1 1 0 0 0 1 1H20.08a1 1 0 0 0 .63-.22L25.36 14H59a1 1 0 0 0 1-1V9A1 1 0 0 0 59 8zm-1 4H25l-.21 0a1.09 1.09 0 0 0-.42.2L19.73 16H6V10H58zM50 49H14a1 1 0 0 1-1-1V39a1 1 0 0 1 1-1H50a1 1 0 0 1 1 1v9A1 1 0 0 1 50 49zM15 47H49V40H15z" class="color1d1f47 svgShape"></path><circle cx="19.5" cy="43.5" r="1.5" fill="#6446fe" class="color0055ff svgShape"></circle><circle cx="24.5" cy="43.5" r="1.5" fill="#6446fe" class="color0055ff svgShape"></circle><circle cx="29.5" cy="43.5" r="1.5" fill="#6446fe" class="color0055ff svgShape"></circle><circle cx="34.5" cy="43.5" r="1.5" fill="#6446fe" class="color0055ff svgShape"></circle><circle cx="39.5" cy="43.5" r="1.5" fill="#6446fe" class="color0055ff svgShape"></circle><circle cx="44.5" cy="43.5" r="1.5" fill="#6446fe" class="color0055ff svgShape"></circle><path fill="#6446fe" d="M60 9a1 1 0 0 0-1-1H28.81l2.37-2.37A19.22 19.22 0 0 1 60 31zM35.19 56l-2.37 2.37A19.22 19.22 0 0 1 4 33V55a1 1 0 0 0 1 1z" opacity=".3" class="color0055ff svgShape"></path></svg>
                                </span>
                             </div>
                            <p class="h4 fw-semibold mb-0 text-center">Sign-In</p>
                            <div class="row gy-3">
                                <div class="col-xl-12">
                                    <label for="signup-firstname" class="form-label text-default">Email</label>
                                      <div class="position-relative">
                                        <input type="email" class="form-control form-control-lg" name="user-email" id="signup-firstname"
                                            placeholder="Enter Email" required>
                                    </div>
                                </div>
                                <div class="col-xl-12 mb-2">
                                    <label for="signin-password" class="form-label text-default d-block">Password<a href="{{ route('reset-password') }}" class="float-end  link-danger op-5 fw-medium fs-12">Forget password ?</a></label>
                                    <div class="position-relative">
                                        <input type="password" class="form-control form-control-lg" name="user-password" id="signin-password" placeholder="password" required>
                                        <a href="javascript:void(0);" class="show-password-button text-muted" onclick="createpassword('signin-password',this)" id="button-addon2"><i class="ri-eye-off-line align-middle"></i></a>
                                    </div>
                                    <div class="mt-2">
                                        <div class="form-check">
                                            <input class="form-check-input" name="remember_token" type="checkbox" value="checked" id="defaultCheck1">
                                            <label class="form-check-label text-muted fw-normal fs-12" for="defaultCheck1">
                                                Remember password ?
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center my-3 authentication-barrier">
                                <span class="op-4 fs-11">OR SignIn With</span>
                            </div>
                            <div class="d-flex align-items-center justify-content-center gap-3 mb-3 flex-wrap">
                                <button type="button" class="btn btn-secondary btn-md btn-icon" id="google-login"> 
                                  <i class="ti ti-brand-google fs-18"></i> 
                                </button> 
                                <button type="button" class="btn btn-special btn-md btn-icon" id="github-login"> 
                                  <i class="ti ti-brand-github fs-18"></i>
                                </button> 
                                <button type="button" class="btn btn-primary btn-md btn-icon" id="facebook-login"> 
                                  <i class="ti ti-brand-facebook fs-18"></i>
                                </button> 
                            </div>
                            <div class="d-grid mt-4">
                                <button type="submit" class="btn btn-primary">Sign In</button>
                            </div>
                            <div class="text-center mb-0">
                                <p class="text-muted mt-3 mb-0">Dont have an account? <a href="{{ route('sign-up') }}" class="text-primary">Sign Up</a></p>
                            </div>
                          </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
      document.addEventListener('DOMContentLoaded', function () {
        const footerGoogle = document.querySelector('.firebase-emulator-warning');
        if (footerGoogle) {
          footerGoogle.remove();
        }
      });
    </script>
    <script src="{{ asset('') }}assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('') }}assets/libs/particles.js/particles.js"></script>
    <script src="{{ asset('') }}assets/js/basic-password.js"></script>
    <script src="{{ asset('') }}assets/js/show-password.js"></script>
</body>

</html>