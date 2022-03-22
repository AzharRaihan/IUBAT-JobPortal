<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="x-ua-compatible" content="IE=edge">
        <!----- all css file include ----->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="{{ asset('assets/users/node_modules/bootstrap/dist/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/users/node_modules/slick-carousel/slick/slick.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/users/node_modules/slick-carousel/slick/slick-theme.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/users/node_modules/venobox/dist/venobox.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/users/node_modules/@yaireo/tagify/dist/tagify.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/users/node_modules/@fortawesome/fontawesome-free/css/fontawesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/users/node_modules/owl.carousel/dist/assets/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/users/node_modules/owl.carousel/dist/assets/owl.theme.default.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/users/scss/styles.css') }}">
        <title> Basil Quality Testing Lab Private Limited </title>
    </head>
    <body>

    <!-- Header -->
    @include('layouts.users.partials.header')


    @yield('page-content')


    @include('layouts.users.partials.footer')







        <!----- main js ----->
        <script src="{{ asset('assets/users/js/jquery-1.12.4.min.js') }}"></script>
        <script src="{{ asset('assets/users/node_modules/venobox/dist/venobox.min.js') }}"></script>
        <script src="{{ asset('assets/users/node_modules/bootstrap/dist/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/users/node_modules/slick-carousel/slick/slick.min.js') }}"></script>
        <script src="{{ asset('assets/users/node_modules/@yaireo/tagify/dist/tagify.min.js') }}"></script>
        <script src="{{ asset('assets/users/node_modules/jquery-validation/dist/jquery.validate.min.js') }}"></script>
        <script src="{{ asset('assets/users/node_modules/@fortawesome/fontawesome-free/js/fontawesome.min.js') }}"></script>
        <script src="{{ asset('assets/users/node_modules/@fortawesome/fontawesome-free/js/brands.min.js') }}"></script>
        <script src="{{ asset('assets/users/node_modules/@fortawesome/fontawesome-free/js/solid.min.js') }}"></script>
        <script src="{{ asset('assets/users/node_modules/sticky-sidebar/dist/sticky-sidebar.min.js') }}"></script>
        <script src="{{ asset('assets/users/node_modules/owl.carousel/dist/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('assets/users/js/responsive-paginate.js') }}"></script>
        <script src="{{ asset('assets/users/js/main.js') }}"></script>
    </body>
</html>