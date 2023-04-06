


<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="js">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="images/favicon.png">
    <!-- Site Title  -->
    <title>SECUREDGAINERS | User</title>
    <!-- Bundle and Base CSS -->
    <link rel="stylesheet" href="{{ ('main-html/assets/css/vendor.bundle.css?ver=200') }}">
    <link rel="stylesheet" href="{{ ('main-html/assets/css/style-dark.css?ver=200') }}">
    <!-- Extra CSS -->
    <link rel="stylesheet" href="{{ ('main-html/assets/css/theme.css?ver=200') }}">

    <link rel="icon" href="{{ ('frontend/storage/app/public/photos/8eIdz2index.html') }}" type="image/png"/>
                   
            <link href="{{ ('frontend/temp/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
            <!-- Icons -->
            <link href="{{ ('frontend/temp/css/materialdesignicons.min.css') }}" rel="stylesheet" type="text/css" />
        
            <link rel="stylesheet" href="{{ ('frontend/temp/css/line.css') }}">
            <script src="../www.google.com/recaptcha/api.js" async defer></script>
            <!-- Main Css -->
            <link href="{{ ('frontend/temp/css/style.css') }}" rel="stylesheet" type="text/css" />
            <link href="{{ ('frontend/temp/css/colors/default.css') }}" rel="stylesheet">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body class="nk-body body-wider theme-light mode-onepage">
    <div class="nk-wrap text-center">
       
                      
          
           <div >
            <main class="py-4">
            @yield('content')
        </main>
           </div>

    </div>        
        
    <div class="preloader"><span class="spinner spinner-round"></span></div>
    <!-- JavaScript -->
    <script src="{{ ('main-html/assets/js/jquery.bundle.js?ver=200') }}"></script>
    <script src="{{ ('main-html/assets/js/scripts.js?ver=200') }}"></script>
    <script src="{{ ('main-html/assets/js/charts.js?ver=200') }}"></script>
    <script src="{{ ('main-html/assets/js/charts.js?ver=200') }}"></script>


    
       <script src="{{ ('frontend/temp/js/jquery-3.5.1.min.js') }}"></script>
            <script src="{{ ('frontend/temp/js/bootstrap.bundle.min.js') }}"></script>
            
            <!-- SLIDER -->
            <script src="{{ ('frontend/temp/js/owl.carousel.min.js') }}"></script>
            <script src="{{ ('frontend/temp/js/owl.init.js') }}"></script>
            <!-- Icons -->
            <script src="{{ ('frontend/temp/js/feather.min.js') }}"></script>
            <script src="{{ ('frontend/temp/js/bundle.html') }}"></script>
            
            <script src="{{ ('frontend/temp/js/app.js') }}"></script>
            <script src="{{ ('frontend/temp/js/widget.js') }}"></script>
</body>

</html>


