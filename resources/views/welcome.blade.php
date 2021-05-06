
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="{{ asset('/js/app.js') }}" defer></script>

    <title>Mercat Virtual</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="/../../../node_modules/admin-lte/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="/../../../node_modules/admin-lte/plugins/fontawesome-free/css/all.min.css">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini control-sidebar-slide-open layout-fixed layout-navbar-fixed">
    <div id="app">
        @yield('content')
        <router-view :key="$route.fullPath"></router-view>
    </div>
</body>

</html>
