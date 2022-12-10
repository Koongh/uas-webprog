<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Page Title -->
    <title>KSPEC STORE</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/template/app.css') }}">
    <!-- Swiper js -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
    <!-- Font -->
    <link rel="stylesheet" href="{{ asset('css/template/font.css') }}">
    <!-- Custom Navbar -->
    <link rel="stylesheet" href="{{ asset('css/template/navbar.css') }}">
    <!-- Footer -->
    <link rel="stylesheet" href="{{ asset('css/template/footer.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Custom CSS -->
    @yield('custom-css')
</head>
<style>
    body{
        background-color: #f3f4f6;
    }
</style>
<body id="body">
    @include('template.navbar')
    <div class="conten flex justify-center" >
        
        @yield('content')
    </div>
    
    <!-- Jquery 4 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Sweetalert -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Swiper -->
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script> 
    <script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    </script>
    @include('template.footer')
    <!-- Custom JS -->
    @yield('custom-js')
    
</body>
</html>