<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title> @yield('title') </title>

    @include('backend.layouts.header')
    @yield('more-style')
    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>

<body class="theme-red">
    <!-- Page Loader -->
   
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    @include('backend.layouts.navtop')
    <!-- #Top Bar -->
    <!--NavBar side-->
    @include('backend.layouts.navbar')
    <!--#NavBar side-->
    <!--Content-->  
    @yield('content')
    <!--#Content-->

    <!--Footer-->
    @include('backend.layouts.footer')
    @yield('more-script')
    <!--#Footer-->
</body>

</html>
