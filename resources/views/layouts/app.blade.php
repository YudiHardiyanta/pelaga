<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pemerintah Desa Pelaga</title>
    <meta name="description" content="Responsive HTML5 Template" />
    <meta name="keywords" content="Onepage, creative, modern, bootstrap 5, multipurpose, clean" />
    <meta name="author" content="Shreethemes" />
    <meta name="website" content="https://shreethemes.in" />
    <meta name="email" content="support@shreethemes.in" />
    <meta name="version" content="1.2.0" />
    <!-- favicon -->
    <link href="{{ Vite::asset('resources/images/favicon.ico') }}" rel="shortcut icon">
    <!-- Bootstrap core CSS -->
    
    @vite([
            'resources/css/bootstrap.min.css',
            'resources/css/materialdesignicons.min.css',
            'resources/css/style.min.css',
    ])
    <!-- Tambahan CSS -->
    @vite([
    'resources/css/swiper.min.css',
    'resources/css/tobii.min.css',
    ])
</head>

<body>
    <!-- START NAVBAR -->
    <nav id="navbar" class="navbar navbar-expand-lg fixed-top sticky">
        <div class="container">
            <a class="navbar-brand" href="">
                <span class="logo-light-mode">
                    <img src="{{ Vite::asset('resources/images/logo-dark.png') }}" class="l-dark" alt="" height="50">
                    <img src="{{ Vite::asset('resources/images/logo-light.png') }}" class="l-light" alt="" height="50">
                </span>
                <img src="{{ Vite::asset('resources/images/logo-dark.png') }}" class="logo-dark-mode" alt="" height="50">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i data-feather="menu"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0" id="navbar-navlist">
                    
                    <li class="nav-item">
                        <a class="nav-link" href="#layanan">Layanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#galeri">Galeri</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#organisasi">Organisasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#berita">Berita</a>
                    </li>
                </ul>

                <ul class="list-inline menu-social mb-0 ps-lg-4 ms-2">
                    <li class="list-inline-item"><a href="" class="btn btn-primary">
                        @auth
                        {{ Auth::user()->name }}
                        @endauth
                    </a></li>
                </ul>
            </div>
            <!--end collapse-->
        </div>
        <!--end container-->
    </nav>
    <!-- END NAVBAR -->

    <!-- Start Hero -->
    
    <!-- FEATURES START -->
    <section class="section" id="" style="margin-top: 0em;">
                <img src="build/assets/desa-pelaga.jpg" alt="" width="100%">
    </section><!--end section-->
    <!-- End -->

            {{ $slot }}

    <!-- Project Start -->
    <section class="section" id="galeri" >
        <div class="container">
            <div class="row justify-content-center">
                <div class="col">
                    <div class="section-title text-center mb-4 pb-2">
                        <h4 class="title mb-3">Galeri Desa Pelaga</h4>
                        <p class="text-muted mx-auto para-desc mb-0">Galeri foto kegiatan dan kegiatan desa Pelaga.</p>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="row">
                <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                    <div class="card border-0 project project-primary position-relative d-block overflow-hidden rounded">
                        <div class="card-body p-0">
                            <img src="{{ Vite::asset('resources/images/portfolio/1.jpg') }}" class="img-fluid" alt="work-image">
                            <div class="overlay-work bg-dark"></div>
                            <div class="content">
                                <h6 class="mb-0"><a href="" class="text-white title">Mockup Collection</a></h6>
                                <p class="text-white-50 tag mb-0">Mockup</p>
                            </div>
                            <div class="icons text-center">
                                <a href="{{ Vite::asset('resources/images/portfolio/1.jpg') }}" class="btn btn-icon btn-pills lightbox"><i data-feather="camera" class="fea icon-sm image-icon"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                    <div class="card border-0 project project-primary position-relative d-block overflow-hidden rounded">
                        <div class="card-body p-0">
                            <img src="{{ Vite::asset('resources/images/portfolio/2.jpg') }}" class="img-fluid" alt="work-image">
                            <div class="overlay-work bg-dark"></div>
                            <div class="content">
                                <h6 class="mb-0"><a href="" class="text-white title">Mockup Collection</a></h6>
                                <p class="text-white-50 tag mb-0">Mockup</p>
                            </div>
                            <div class="icons text-center">
                                <a href="{{ Vite::asset('resources/images/portfolio/2.jpg') }}" class="btn btn-icon btn-pills lightbox"><i data-feather="camera" class="fea icon-sm image-icon"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                    <div class="card border-0 project project-primary position-relative d-block overflow-hidden rounded">
                        <div class="card-body p-0">
                            <img src="{{ Vite::asset('resources/images/portfolio/3.jpg') }}" class="img-fluid" alt="work-image">
                            <div class="overlay-work bg-dark"></div>
                            <div class="content">
                                <h6 class="mb-0"><a href="" class="text-white title">Abstract images</a></h6>
                                <p class="text-white-50 tag mb-0">Abstract</p>
                            </div>
                            <div class="icons text-center">
                                <a href="{{ Vite::asset('resources/images/portfolio/3.jpg') }}" class="btn btn-icon btn-pills lightbox"><i data-feather="camera" class="fea icon-sm image-icon"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                    <div class="card border-0 project project-primary position-relative d-block overflow-hidden rounded">
                        <div class="card-body p-0">
                            <img src="{{ Vite::asset('resources/images/portfolio/4.jpg') }}" class="img-fluid" alt="work-image">
                            <div class="overlay-work bg-dark"></div>
                            <div class="content">
                                <h6 class="mb-0"><a href="" class="text-white title">Yellow bg with Books</a></h6>
                                <p class="text-white-50 tag mb-0">Books</p>
                            </div>
                            <div class="icons text-center">
                                <a href="{{ Vite::asset('resources/images/portfolio/4.jpg') }}" class="btn btn-icon btn-pills lightbox"><i data-feather="camera" class="fea icon-sm image-icon"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                    <div class="card border-0 project project-primary position-relative d-block overflow-hidden rounded">
                        <div class="card-body p-0">
                            <img src="{{ Vite::asset('resources/images/portfolio/5.jpg') }}" class="img-fluid" alt="work-image">
                            <div class="overlay-work bg-dark"></div>
                            <div class="content">
                                <h6 class="mb-0"><a href="" class="text-white title">Company V-card</a></h6>
                                <p class="text-white-50 tag mb-0">V-card</p>
                            </div>
                            <div class="icons text-center">
                                <a href="{{ Vite::asset('resources/images/portfolio/5.jpg') }}" class="btn btn-icon btn-pills lightbox"><i data-feather="camera" class="fea icon-sm image-icon"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                    <div class="card border-0 project project-primary position-relative d-block overflow-hidden rounded">
                        <div class="card-body p-0">
                            <img src="{{ Vite::asset('resources/images/portfolio/6.jpg') }}" class="img-fluid" alt="work-image">
                            <div class="overlay-work bg-dark"></div>
                            <div class="content">
                                <h6 class="mb-0"><a href="" class="text-white title">Mockup box with paints</a></h6>
                                <p class="text-white-50 tag mb-0">Photography</p>
                            </div>
                            <div class="icons text-center">
                                <a href="{{ Vite::asset('resources/images/portfolio/6.jpg') }}" class="btn btn-icon btn-pills lightbox"><i data-feather="camera" class="fea icon-sm image-icon"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                    <div class="card border-0 project project-primary position-relative d-block overflow-hidden rounded">
                        <div class="card-body p-0">
                            <img src="{{ Vite::asset('resources/images/portfolio/7.jpg') }}" class="img-fluid" alt="work-image">
                            <div class="overlay-work bg-dark"></div>
                            <div class="content">
                                <h6 class="mb-0"><a href="" class="text-white title">Coffee cup</a></h6>
                                <p class="text-white-50 tag mb-0">Cups</p>
                            </div>
                            <div class="icons text-center">
                                <a href="{{ Vite::asset('resources/images/portfolio/7.jpg') }}" class="btn btn-icon btn-pills lightbox"><i data-feather="camera" class="fea icon-sm image-icon"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                    <div class="card border-0 project project-primary position-relative d-block overflow-hidden rounded">
                        <div class="card-body p-0">
                            <img src="{{ Vite::asset('resources/images/portfolio/8.jpg') }}" class="img-fluid" alt="work-image">
                            <div class="overlay-work bg-dark"></div>
                            <div class="content">
                                <h6 class="mb-0"><a href="" class="text-white title">Pen and article</a></h6>
                                <p class="text-white-50 tag mb-0">Article</p>
                            </div>
                            <div class="icons text-center">
                                <a href="{{ Vite::asset('resources/images/portfolio/8.jpg') }}" class="btn btn-icon btn-pills lightbox"><i data-feather="camera" class="fea icon-sm image-icon"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- Project End -->

    <!-- Start Pricing -->

    <!-- Start -->
    <section class="section bg-light" id="organisasi">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title text-center mb-4 pb-2">
                        <h4 class="title mb-3">Struktur Organisasi</h4>
                        <p class="para-desc mx-auto text-muted mb-0">Struktur Organisasi Desa Pelaga</p>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="row">
                <img src="{{ Vite::asset('resources/images/pelaga_so.png') }}" alt="">
            </div><!--end row-->
        </div><!--end container-->


    </section><!--end section-->
    <!-- End -->

    <!-- Start Blog -->
    <section class="section" id="berita">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col">
                    <div class="section-title text-center mb-4 pb-2">
                        <h4 class="title mb-3">Berita atau Artikel</h4>
                        <p class="text-muted para-desc mb-0 mx-auto">Berita terbaru dan artikel menarik tentang Desa Plaga.</p>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="row">
                <div class="col-lg-4 col-md-6 mt-4 pt-2">
                    <div class="card blog blog-primary shadow rounded overflow-hidden border-0">
                        <div class="blog-image position-relative overflow-hidden">
                            <img src="{{ Vite::asset('resources/images/blog/1.jpg') }}" class="img-fluid" alt="">
                        </div>

                        <div class="card-body content p-0">
                            <div class="p-4">
                                <a href="" class="h5 title text-dark d-block mb-0">Building Your Corporate Identity from Motos</a>
                                <p class="text-muted mt-2 mb-0">The most well-known dummy text is the 'Lorem Ipsum', in the 16th century.</p>

                                <div class="mt-3">
                                    <a href="" class="link text-dark">Read More <i class="uil uil-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-4 col-md-6 mt-4 pt-2">
                    <div class="card blog blog-primary shadow rounded overflow-hidden border-0">
                        <div class="blog-image position-relative overflow-hidden">
                            <img src="{{ Vite::asset('resources/images/blog/2.jpg') }}" class="img-fluid" alt="">
                        </div>

                        <div class="card-body content p-0">
                            <div class="p-4">
                                <a href="" class="h5 title text-dark d-block mb-0">The Dark Side of Overnight Success</a>
                                <p class="text-muted mt-2 mb-0">The most well-known dummy text is the 'Lorem Ipsum', in the 16th century.</p>

                                <div class="mt-3">
                                    <a href="" class="link text-dark">Read More <i class="uil uil-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-4 col-md-6 mt-4 pt-2">
                    <div class="card blog blog-primary shadow rounded overflow-hidden border-0">
                        <div class="blog-image position-relative overflow-hidden">
                            <img src="{{ Vite::asset('resources/images/blog/3.jpg') }}" class="img-fluid" alt="">
                        </div>

                        <div class="card-body content p-0">
                            <div class="p-4">
                                <a href="" class="h5 title text-dark d-block mb-0">The Right Hand of Business IT World</a>
                                <p class="text-muted mt-2 mb-0">The most well-known dummy text is the 'Lorem Ipsum', in the 16th century.</p>

                                <div class="mt-3">
                                    <a href="" class="link text-dark">Read More <i class="uil uil-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- End Blog -->

    <!-- Footer Start -->
    <footer class="bg-footer">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="footer-py-60">
                        <div class="row">
                            <div class="col-lg-3 col-12 mb-lg-0 mb-md-4 pb-lg-0 pb-md-2">
                                <a href="#" class="logo-footer">
                                    <img src="{{ Vite::asset('resources/images/logo-light.png') }}" height="50" alt="">
                                </a>
                                <p class="mt-4 mb-0">Jl. raya bukian, Pelaga, Petang, Badung</p>

                                <div class="pt-3 d-flex align-items-center">
                                    <i class="uil uil-clock text-primary me-2 fs-1"></i>
                                    <div class="content">
                                        <p class="mb-1 text-foot">Senin - Jumat:</p>
                                        <span class="text-white-50">08:00 sampai 16:00 WITA</span>
                                    </div>
                                </div>
                            </div><!--end col-->

                            <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                                <h5 class="footer-head">Layanan Kami</h5>
                                <ul class="list-unstyled footer-list mt-4">
                                    <li><a href="" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Layanan Penduduk</a></li>
                                    <li><a href="" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Layanan Pengaduan</a></li>
                                    <li><a href="" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Struktur Organisasi</a></li>
                                    <li><a href="" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Layanan Informasi</a></li>
                                    <li><a href="" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> APBDES</a></li>
                                    <li><a href="" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Statistik Desa</a></li>
                                </ul>
                            </div><!--end col-->

                           
                            </div><!--end col-->
                        </div><!--end row-->
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->

        <div class="footer-py-30 footer-bar">
            <div class="container text-center">
                <div class="row align-items-center justify-content-center">
                    <div class="col-sm-8">
                        <div class="text-sm-start">
                            <p class="mb-0">© <script>
                                    document.write(new Date().getFullYear())
                                </script> Desa Pelaga</p>
                        </div>
                    </div><!--end col-->

                    <div class="col-sm-4 mt-4 mt-sm-0">
                        <ul class="list-unstyled social-icon text-sm-end foot-social-icon mb-0">
                            <li class="list-inline-item"><a href="https://1.envato.market/motos" target="_blank" class="rounded"><i class="uil uil-shopping-cart align-middle" title="Buy Now"></i></a></li>
                            <li class="list-inline-item"><a href="https://dribbble.com/shreethemes" target="_blank" class="rounded"><i class="uil uil-dribbble align-middle" title="dribbble"></i></a></li>
                            <li class="list-inline-item"><a href="https://www.behance.net/shreethemes" target="_blank" class="rounded"><i class="uil uil-behance" title="Behance"></i></a></li>
                            <li class="list-inline-item"><a href="http://linkedin.com/company/shreethemes" target="_blank" class="rounded"><i class="uil uil-linkedin" title="Linkedin"></i></a></li>
                            <li class="list-inline-item"><a href="https://www.facebook.com/shreethemes" target="_blank" class="rounded"><i class="uil uil-facebook-f align-middle" title="facebook"></i></a></li>
                            <li class="list-inline-item"><a href="https://www.instagram.com/shreethemes/" target="_blank" class="rounded"><i class="uil uil-instagram align-middle" title="instagram"></i></a></li>
                            <li class="list-inline-item"><a href="https://twitter.com/shreethemes" target="_blank" class="rounded"><i class="uil uil-twitter align-middle" title="twitter"></i></a></li>
                            <li class="list-inline-item"><a href="mailto:support@shreethemes.in" class="rounded"><i class="uil uil-envelope align-middle" title="email"></i></a></li>
                            <li class="list-inline-item"><a href="https://forms.gle/QkTueCikDGqJnbky9" target="_blank" class="rounded"><i class="uil uil-file align-middle" title="customization"></i></a></li>
                        </ul><!--end icon-->
                    </div>
                </div><!--end row-->
            </div><!--end container-->
        </div>
    </footer><!--end footer-->
    <!-- Footer End -->

    <!-- Back to top -->
    <a href="#" onclick="topFunction()" id="back-to-top" class="back-to-top rounded-pill fs-5"><i data-feather="arrow-up" class="fea icon-sm icons align-middle"></i></a>
    <!-- Back to top -->

    <!-- Style switcher -->
    <div id="style-switcher" class="bg-light border p-3 pt-2 pb-2" onclick="toggleSwitcher()">
        <div>
            <h6 class="title text-center mb-0">Theme Option</h6>
            <ul class="text-center list-unstyled mb-0">
                <li class="d-grid"><a href="javascript:void(0)" class="btn btn-sm btn-block btn-primary rtl-version t-rtl-light mt-2" onclick="setTheme('style-rtl')">RTL</a></li>
                <li class="d-grid"><a href="javascript:void(0)" class="btn btn-sm btn-block btn-primary ltr-version t-ltr-light mt-2" onclick="setTheme('style')">LTR</a></li>
                <li class="d-grid"><a href="javascript:void(0)" class="btn btn-sm btn-block btn-primary dark-rtl-version t-rtl-dark mt-2" onclick="setTheme('style-dark-rtl')">RTL</a></li>
                <li class="d-grid"><a href="javascript:void(0)" class="btn btn-sm btn-block btn-primary dark-ltr-version t-ltr-dark mt-2" onclick="setTheme('style-dark')">LTR</a></li>
                <li class="d-grid"><a href="javascript:void(0)" class="btn btn-sm btn-block btn-dark dark-version t-dark mt-2" onclick="setTheme('style-dark')">Dark</a></li>
                <li class="d-grid"><a href="javascript:void(0)" class="btn btn-sm btn-block btn-dark light-version t-light mt-2" onclick="setTheme('style')">Light</a></li>
            </ul>

            <h6 class="title text-center pt-3 mb-0 border-top">Download</h6>
            <ul class="text-center list-unstyled mb-0">
                <li><a href="https://1.envato.market/motos" target="_blank" class="btn btn-sm btn-block btn-warning mt-2 w-100">Download</a></li>
            </ul>
        </div>
        <div class="bottom p-0">
            <a href="javascript: void(0);" class="settings bg-white shadow d-block"><i class="mdi mdi-cog ms-1 mdi-24px position-absolute mdi-spin text-primary"></i></a>
        </div>
    </div>
    
    @vite([
        "resources/js/bootstrap.bundle.min.js",
        "resources/js/swiper.min.js",
        "resources/js/tobii.min.js",
        "resources/js/contact.js",
        "resources/js/gumshoe.js",
        "resources/js/feather.min.js",
        "resources/js/plugins.init.js",
        "resources/js/app.js",
    ])
</body>

</html>