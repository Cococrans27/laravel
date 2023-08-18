<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Nasril BLOG - {{ $title }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Premium Bootstrap 5 Landing Page Template">
    <meta name="keywords" content="Saas, Software, multi-uses, HTML, Clean, Modern">
    <meta name="author" content="Shreethemes">
    <meta name="email" content="support@shreethemes.in">
    <meta name="website" content="https://shreethemes.in">
    <meta name="Version" content="v4.7.0">

    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('blog') }}/assets/images/favicon.ico">

    <!-- Css -->
    <!-- Bootstrap Css -->
    <link href="{{ asset('blog') }}/assets/css/bootstrap.min.css" id="bootstrap-style" class="theme-opt" rel="stylesheet" type="text/css">
    <!-- Icons Css -->
    <link href="{{ asset('blog') }}/assets/libs/@mdi/font/css/materialdesignicons.min.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('blog') }}/assets/libs/@iconscout/unicons/css/line.css" type="text/css" rel="stylesheet">
    <!-- Style Css-->
    <link href="{{ asset('blog') }}/assets/css/style.min.css" id="color-opt" class="theme-opt" rel="stylesheet" type="text/css">

</head>

<body>
    <!-- Loader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>
    </div>
    <!-- Loader -->

    @include('partials.navbar')

    @yield('container')

    <!--   Footer Start -->
    <footer class="footer footer-bar position-absolute bottom-0 w-100">
        <div class="footer-py-30 ">
            <div class="container text-center">
                <div class="row align-items-center">
                    <div class="col-sm-3">
                        <div class="text-sm-start">
                            <a href="/" class="logo-footer text-blue">
                                <img src="{{ asset('blog') }}/assets/images/logo-icon.png" height="26" alt=""> Nasril
                            </a>
                        </div>
                    </div>

                    <div class="col-sm-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <div class="text-center">
                            <p class="mb-0">©
                                <script>
                                    document.write(new Date().getFullYear())
                                </script> . Design with <i class="mdi mdi-heart text-danger"></i> by <a href="" target="_blank" class="text-reset"> Nasril</a>.
                            </p>
                        </div>
                    </div>

                    <div class="col-sm-3 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <ul class="list-unstyled social-icon foot-social-icon text-sm-end mb-0">
                            <li class="list-inline-item mb-0"><a href="javascript:void(0)" class="rounded"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-facebook fea icon-sm fea-social">
                                        <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                                    </svg></a></li>
                            <li class="list-inline-item mb-0"><a href="javascript:void(0)" class="rounded"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-instagram fea icon-sm fea-social">
                                        <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                                        <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                        <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                                    </svg></a></li>
                            <li class="list-inline-item mb-0"><a href="javascript:void(0)" class="rounded"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter fea icon-sm fea-social">
                                        <path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path>
                                    </svg></a></li>
                            <li class="list-inline-item mb-0"><a href="javascript:void(0)" class="rounded"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-linkedin fea icon-sm fea-social">
                                        <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path>
                                        <rect x="2" y="9" width="4" height="12"></rect>
                                        <circle cx="4" cy="4" r="2"></circle>
                                    </svg></a></li>
                        </ul><!--end icon-->
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </div>
    </footer><!--end footer-->
    <!-- Footer End -->

    <a href="#" onclick="topFunction()" id="back-to-top" class="back-to-top fs-5"><i data-feather="arrow-up" class="fea icon-sm icons align-middle"></i></a>
    <!-- Back to top -->

    <!-- Javascript -->
    <!-- JAVASCRIPT -->
    <script src="{{ asset('blog') }}/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Main Js -->
    <script src="{{ asset('blog') }}/assets/libs/feather-icons/feather.min.js"></script>
    <script src="{{ asset('blog') }}/assets/js/plugins.init.js"></script><!--Note: All init js like tiny slider, counter, countdown, maintenance, lightbox, gallery, swiper slider, aos animation etc.-->
    <script src="{{ asset('blog') }}/assets/js/app.js"></script>
</body>

</html>
