<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    <title>Nasril BLOG - Dashboard </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Premium Bootstrap 5 Landing Page Template" />
    <meta name="keywords" content="Saas, Software, multi-uses, HTML, Clean, Modern" />
    <meta name="author" content="Shreethemes" />
    <meta name="email" content="support@shreethemes.in" />
    <meta name="website" content="https://shreethemes.in" />
    <meta name="Version" content="v4.7.0" />

    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('dashboar') }}/assets/images/favicon.ico" />
    <!-- Css -->
    <link href="{{ asset('dashboar') }}/assets/libs/simplebar/simplebar.min.css" rel="stylesheet">
    <!-- Bootstrap Css -->
    <link href="{{ asset('dashboar') }}/assets/css/bootstrap.min.css" class="theme-opt" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('dashboar') }}/assets/libs/@mdi/font/css/materialdesignicons.min.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('dashboar') }}/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('dashboar') }}/assets/libs/@iconscout/unicons/css/line.css" type="text/css" rel="stylesheet" />
    <!-- Style Css-->
    <link href="{{ asset('dashboar') }}/assets/css/style.min.css" class="theme-opt" rel="stylesheet" type="text/css" />
    <!-- font-awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" />

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

    <div class="page-wrapper toggled">
        <!-- sidebar-wrapper -->
        {{-- @include('dashboard.layouts.sidebar') --}}
        <!-- sidebar-wrapper  -->

        <!-- Start Page Content -->
        <main class="page-content bg-light">
            <!-- Top Header -->
            @include('dashboard.layouts.header')
            <!-- Top Header -->

            <div class="container-fluid">
                <div class="layout-specing">
                    @include('dashboard.layouts.sidebar')
                    @yield('container')
                </div><!--end container-->

                <!-- Footer Start -->
                <footer class="shadow py-3">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col">
                                <div class="text-sm-start text-center mx-md-2">
                                    <p class="mb-0 text-muted">©
                                        <script>
                                            document.write(new Date().getFullYear())
                                        </script>
                                    </p>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div><!--end container-->
                </footer><!--end footer-->
                <!-- End -->
        </main>
        <!--End page-content" -->
    </div>
    <!-- page-wrapper -->

    <!-- Offcanvas Start -->
    <!-- Offcanvas End -->

    <!-- javascript -->
    <!-- JAVASCRIPT -->
    <script src="{{ asset('dashboar') }}/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('dashboar') }}/assets/libs/feather-icons/feather.min.js"></script>
    <script src="{{ asset('dashboar') }}/assets/libs/simplebar/simplebar.min.js"></script>
    <script src="{{ asset('dashboar') }}/assets/libs/apexcharts/apexcharts.min.js"></script>
    <!-- Main Js -->
    <script src="{{ asset('dashboar') }}/assets/js/plugins.init.js"></script>
    <script src="{{ asset('dashboar') }}/assets/js/app.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor5/38.1.1/ckeditor.min.js"></script>
    <script>
        ClassicEditor.create(document.querySelector("#editor")).catch(
            (error) => {
                console.error(error);
            }
        );
    </script>
</body>

</html>
