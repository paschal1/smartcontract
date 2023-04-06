


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
    {{-- font-awesome --}}
    <link href="{{ asset('css/fontawesome.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body class="nk-body body-wider theme-light mode-onepage">
    <div class="nk-wrap">
        <header class="nk-header page-header is-transparent is-sticky is-shrink is-light" id="header">
            <!-- Header @ -->
            <div class="header-main">
                <div class="header-container container">
                    <div class="header-wrap">
                        <!-- Logo  -->
                        <div class="header-logo logo animated" data-animate="fadeInDown" data-delay=".65">
                            <a href="{{ url('home')}}" class="logo-link">
                                <img class="logo-dark" src="{{ asset('frontend/images/logo.png')}}" srcset="{{ asset('frontend/images/logo.png 2x') }}" alt="logo">
                                <img class="logo-light" src="{{ asset('frontend/images/logo.png')}}" srcset="{{ asset('frontend/images/logo.png 2x') }}" alt="logo">
                            </a>
                        </div>
                        <!-- Menu Toogle b -->
                        <div class="header-nav-toggle">
                            <a href="#" class="navbar-toggle" data-menu-toggle="example-menu-04">
                                <div class="toggle-line">
                                    <span></span>
                                </div>
                            </a>
                        </div>
                        <!-- Menu b -->
                        <div class="header-navbar header-navbar-s1">
                            <nav class="header-menu" id="example-menu-04">
                                <ul class="menu menu-s2 animated" data-animate="fadeInDown" data-delay=".75">
                                    <li class="menu-item"><a class="menu-link nav-link" href="{{ url('home')}}">Dashboard</a></li>
                                    <li class="menu-item"><a class="menu-link nav-link" href="{{ url('fundAcc')}}">Fund your Account</a></li>
                                    <li class="menu-item"><a class="menu-link nav-link" href="{{ url('withdraw')}}">Withdraw Funds</a></li>
                                    <li class="menu-item"><a class="menu-link nav-link" href="{{ url('profitrec')}}">Profit Records</a></li>
                                    <li class="menu-item"><a class="menu-link nav-link" href="{{ url('transaction')}}">Transaction History</a></li>
                                    <li class="menu-item"><a class="menu-link nav-link" href="{{ url('crypto')}}">Crypto Exchange</a></li>
                                    
                                    <li class="menu-item"><a class="menu-link nav-link" href="{{ url('transfer')}}">Transfer funds</a></li>
                                                            <li class="menu-item has-sub">
                                        <a class="menu-link nav-link menu-toggle" href="#">Invest</a>
                                        <ul class="menu-sub menu-drop">
                                           
                                            <li class="menu-item"><a class="menu-link nav-link" href="{{ url('subscribe')}}">Subscribe to a Plan</a></li>
                                            <li class="menu-item"><a class="menu-link nav-link" href="{{ url('investment')}}">My Investment</a></li>
                                        </ul>
                                    </li>
                        
                                    <li class="menu-item"><a class="menu-link nav-link" href="{{ url('refer')}}">Refer Users</a></li>
                                    <li class="menu-item"><a class="menu-link nav-link" href="{{ url('support')}}">Help/Support</a></li>
                                </ul>
                                <ul class="menu-btns animated" data-animate="fadeInDown" data-delay=".85">

                                     @guest
                            @if (Route::has('login'))

                            {{-- <li>
                                <a href="{{ route('login') }}" class="btn btn-rg btn-auto btn-outline btn-grad on-bg-light btn-round"><span>{{ __('Login') }}</span></a>
                            </li> --}}
                               
                            @endif

                            @if (Route::has('register'))

                             {{-- <li>
                                <a href="{{ route('register') }}" data-bs-toggle="modal" data-bs-target="#login-popup" class="btn btn-rg btn-auto btn-outline btn-grad on-bg-light btn-round"><span>{{ __('Register') }}</span></a>
                            </li> --}}
                                
                            @endif
                        @else


                        <li class="menu-item has-sub">
                                        <a class="menu-link nav-link menu-toggle" href="#">{{ Auth::user()->name }}</a>
                                        <ul class="menu-sub menu-drop">
                                            <li class="menu-item"><a class="menu-link nav-link"  href="{{ route('logout') }}"  onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"> {{ __('Logout') }}</a>
                                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                         @csrf
                                                        </form>
                                </li>
                                            <li class="menu-item"><a class="menu-link nav-link" href="{{ url('settings')}}">Account Settings</a></li>
                                            
                                        </ul>
                                    </li>
                        
                                
                        @endguest
                    </ul>
                </div>
                                    
                                   
                                </ul>
                            </nav>
                        </div><!-- .header-navbar b -->
                    </div>
                </div>
            </div><!-- .header-main b -->
          
           <div >
            <main class="py-4">
            @yield('content')
        </main>
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

            <script type="module" src="https://cdn.jsdelivr.net/npm/ionicons/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://cdn.jsdelivr.net/npm/ionicons/dist/ionicons/ionicons.js"></script>
</body>

</html>
