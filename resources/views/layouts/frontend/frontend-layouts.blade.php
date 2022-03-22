<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="x-ua-compatible" content="IE=edge">
        <title> @yield('page-css') </title>
        <!--- all css file include -->
        @include('layouts.frontend.partials.css')
        <!-- Page Css -->
        @stack('page-css')
    </head>
    <body>
        <!-- Header -->
        @include('layouts.frontend.partials.header')
        <!-- Main Content -->
        @yield('page-content')
        <!-- Footer -->
        @include('layouts.frontend.partials.footer')
        <!----- main js ----->
        @include('layouts.frontend.partials.script')
        <!-- Page Script -->
        @stack('page-script')
    </body>
</html>