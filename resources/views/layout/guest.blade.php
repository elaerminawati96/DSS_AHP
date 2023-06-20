<!doctype html>
<html lang="en" data-layout="horizontal" data-topbar="dark" data-sidebar-size="lg">

<head>

    <meta charset="utf-8" />
    <title>{{ @$title ? @$title . ' - ' : '' }} {{ config('app.name', 'DSS AHP') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Layout config Js -->
    <script src="{{ asset('assets/') }}/js/layout.js"></script>
    <!-- Bootstrap Css -->
    <link href="{{ asset('assets/') }}/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('assets/') }}/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('assets/') }}/css/app.min.css" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="{{ asset('assets/') }}/css/custom.min.css" rel="stylesheet" type="text/css" />

</head>

<body>

    <div class="auth-page-wrapper pt-5">
        <!-- auth page bg -->

        <!-- auth page content -->
        <div class="auth-page-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center mt-sm-5 mb-4 text-white-50">
                            <div>
                                <h1>{{ $title }}</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
                <div class="d-flex justify-content-center">
                    @yield('content')
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end auth page content -->

        <!-- footer -->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <p class="mb-0 text-muted">&copy;
                                <script>
                                    document.write(new Date().getFullYear())
                                </script> Crafted with <i class="mdi mdi-heart text-danger"></i>
                                by Team DSS AHP
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end Footer -->
    </div>
    <!-- end auth-page-wrapper -->

    <!-- JAVASCRIPT -->
    <script src="{{ asset('assets/') }}/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/') }}/libs/simplebar/simplebar.min.js"></script>
    <script src="{{ asset('assets/') }}/libs/node-waves/waves.min.js"></script>
    <script src="{{ asset('assets/') }}/libs/feather-icons/feather.min.js"></script>
    <script src="{{ asset('assets/') }}/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="{{ asset('assets/') }}/js/plugins.js"></script>

    <!-- particles js -->
    <script src="{{ asset('assets/') }}/libs/particles.js/particles.js"></script>
    <!-- particles app js -->
    <script src="{{ asset('assets/') }}/js/pages/particles.app.js"></script>
    <!-- validation init -->
    <script src="{{ asset('assets/') }}/js/pages/form-validation.init.js"></script>
</body>

</html>
