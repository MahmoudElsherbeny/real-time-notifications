<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <title>Real Time Notification</title>
    <link href="{{ url('assets/css/light/loader.css') }}" rel="stylesheet" type="text/css" />
    <script src="{{ url('assets/js/loader.js') }}"></script>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo&family=Tajawal&display=swap" rel="stylesheet">
    <link href="{{ url('bootstrap/css/bootstrap.rtl.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('assets/css/light/plugins.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('plugins/src/font-icons/fontawesome/css/regular.css') }}" rel="stylesheet" >
    <link href="{{ url('plugins/src/font-icons/fontawesome/css/fontawesome.css') }}" rel="stylesheet">
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link href="{{ url('assets/css/light/elements/alert.css') }}" rel="stylesheet" type="text/css">
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="layout-boxed ">
    <!-- BEGIN LOADER -->
    <div id="load_screen"> <div class="loader"> <div class="loader-content">
        <div class="spinner-grow align-self-center"></div>
    </div></div></div>
    <!-- END LOADER -->

    <!--  navbar  -->
    @include('layouts.navbar')

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>

        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">

                <div class="middle-content container-xxl p-0">
                    @yield('content')
                </div>

            </div>
        </div>
        <!--  END CONTENT AREA  -->
    </div>
    <!-- END MAIN CONTAINER -->

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{ url('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ url('plugins/src/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ url('plugins/src/mousetrap/mousetrap.min.js') }}"></script>
    <script src="{{ url('plugins/src/waves/waves.min.js') }}"></script>
    <script src="{{ url('assets/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ url('assets/js/app.js') }}"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src="{{ url('assets/js/custom.js') }}"></script>
    <!-- END PAGE LEVEL SCRIPTS -->

    @yield('js_code')

</body>
</html>
