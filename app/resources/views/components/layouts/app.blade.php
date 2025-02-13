<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Page Title' }}</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">

    <!-- // Livewire styles -->
    @livewireStyles
    @stack('styles')

</head>
    <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">

            <livewire:navigation.navbar />

            <livewire:navigation.mainsidebarcontainer />

            <div class="content-wrapper">
                {{ $slot }}
            </div>

            <livewire:navigation.footer />

            <livewire:navigation.controlsidebar />

        </div>

        <!-- ./wrapper -->
        <!-- jQuery -->
        <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js') }}"></script>

        <script src="{{ asset('plugins/moment/moment.min.js') }}"></script>
        <!-- Bootstrap 4 -->
        <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

        <!-- AdminLTE App -->
        <script src="{{ asset('dist/js/adminlte.js') }}"></script>
        <!-- // Livewire scripts -->
        @livewireScripts
        @stack('scripts')

    </body>
</html>
