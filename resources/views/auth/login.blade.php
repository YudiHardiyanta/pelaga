<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login - Pemerintah Desa Pelaga</title>
    <meta name="description" content="Responsive HTML5 Template" />
    <meta name="keywords" content="Onepage, creative, modern, bootstrap 5, multipurpose, clean" />
    <meta name="author" content="Shreethemes" />
    <meta name="website" content="https://shreethemes.in" />
    <meta name="email" content="support@shreethemes.in" />
    <meta name="version" content="1.2.0" />
    <!-- favicon -->
     
    <link href="resources/images/favicon.ico" rel="shortcut icon">
    
    <link href="resources/css/bootstrap.min.css" rel="stylesheet">
    <link href="resources/css/materialdesignicons.min.css" rel="stylesheet">
    <link href="resources/css/style.min.css" rel="stylesheet">

    <link href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" rel="stylesheet">
    <style scoped>
        @media (max-width: 768px) {
            .desktop-only {
                display: none;
            }
        }
    </style>
</head>

<body>
    <!-- Hero Start -->
    <section class="cover-user bg-white">
        <div class="container-fluid px-0">
            <div class="row g-0 position-relative">
                <div class="col-lg-4 cover-my-30 order-2">
                    <div class="cover-user-img d-flex align-items-center">
                        <div class="row">
                            <div class="col-12">
                                <div class="d-flex flex-column auth-hero">
                                    <div class="mt-md-5 text-center">
                                        <a href=""><img src="resources/images/logo-icon.png" alt=""></a>
                                    </div>
                                    <div class="title-heading my-lg-auto">
                                        <div class="card login-page border-0" style="z-index: 1">
                                            <div class="card-body p-0">
                                                <h4 class="card-title">Pemerintah Desa Pelaga</h4>
                                                <form class="login-form mt-4" method="POST" action="{{ route('login') }}">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="mb-3">
                                                                <label class="form-label">Masukan Nomor Induk Kependudukan <span class="text-danger">*</span></label>
                                                                <input type="text" class="form-control" placeholder="Nomor Induk Kependudukan" name="email" required="">
                                                            </div>
                                                        </div><!--end col-->

                                                        <div class="col-lg-12">
                                                            <div class="mb-3">
                                                                <label class="form-label">Masukan Nomor Kartu Keluarga <span class="text-danger">*</span></label>
                                                                <input type="password" class="form-control" placeholder="Nomor Kartu Keluarga" name="password" required="">
                                                            </div>
                                                        </div><!--end col-->
                                                       <!-- <div class="col-lg-12">
                                                            <div class="mb-3">
                                                                <div class="g-recaptcha form-control" data-sitekey="{{ env('CAPTCHA_SITE_KEY') }}"></div>
                                                            </div>
                                                            
                                                        </div>--><!--end col-->

                                                        <!--<div class="col-lg-12">
                                                            <div class="d-flex justify-content-between">
                                                                <div class="mb-3">
                                                                    <div class="form-check">-->
                                                                        <!-- <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                        <label class="form-check-label" for="flexCheckDefault">Remember me</label> -->
                                                                    <!--</div>
                                                                </div>-->
                                                                <!-- <p class="forgot-pass mb-0"><a href="auth-reset-password.html" class="text-dark">Forgot password ?</a></p> -->
                                                            <!--</div>
                                                        </div>end col-->

                                                        <div class="col-lg-12 mb-0">
                                                            <div class="d-grid">
                                                                <button class="btn btn-primary">{{ __('Log in') }}</button>
                                                            </div>
                                                        </div><!--end col-->

                                                        <!-- <div class="col-12">
                                                            <p class="mb-0 mt-3"><small class="text-dark me-2">Don't have an account ?</small> <a href="auth-signup.html" class="text-dark fw-semibold">Sign Up</a></p>
                                                        </div> --><!--end col-->
                                                    </div><!--end row-->
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-md-5 text-center">
                                        <p class="mb-0 text-muted">© <script>
                                                document.write(new Date().getFullYear())
                                            </script> Desa Pelaga </p>
                                    </div>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div> <!-- end about detail -->
                </div> <!-- end col -->

                <div class="col-lg-8 offset-lg-4 padding-less img order-1 desktop-only" style="background-image:url('resources/images/bg/pelaga1.webp')" data-jarallax='{"speed": 0.5}'></div><!-- end col -->

            </div><!--end row-->
        </div><!--end container fluid-->
    </section><!--end section-->
    <!-- Hero End -->

    <!-- Style switcher -->
    
    <!-- end Style switcher -->

    <!-- javascript -->

    <script src="https://www.google.com/recaptcha/api.js"></script>
</body>

</html>