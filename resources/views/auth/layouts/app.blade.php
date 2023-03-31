<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Real Time Notifications</title>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo&family=Tajawal&display=swap" rel="stylesheet">
    <link href="{{ url('bootstrap/css/bootstrap.rtl.min.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ url('assets/css/light/plugins.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ url('assets/css/dark/plugins.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('assets/css/light/elements/alert.css') }}" rel="stylesheet" type="text/css">
    <!-- END GLOBAL MANDATORY STYLES -->

</head>
<body class="form">

    <div class="auth-container d-flex">
        <div class="container mx-auto align-self-center">

            @yield('content')

        </div>
    </div>

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{ url('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ url('plugins/src/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ url('plugins/src/mousetrap/mousetrap.min.js') }}"></script>
    <script src="{{ url('plugins/src/waves/waves.min.js') }}"></script>
    <script src="{{ url('assets/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ url('assets/js/app.js') }}"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->
    <script src="{{ url('assets/js/custom.js') }}"></script>

</body>
</html>
