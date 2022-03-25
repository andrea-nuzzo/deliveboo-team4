<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/admin.js') }}" defer></script> --}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <!-- Styles -->
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
    
    {{-- Test Modale --}}
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">--}}
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src= "https://unpkg.com/sweetalert/dist/sweetalert.min.js"> </script>
    <script src="{{ asset('js/admin.js') }}" defer></script>
</head>

<body>
    <div id="body-pd">
        {{-- Se è un utente non Loggato--}}
        @guest
            <div class="d-flex justify-content-between align-items-center">
                {{-- logo --}}
                <div>
                    <a href="{{ url('/') }}" class="">
                        {{-- {{ config('app.name', 'Laravel') }} --}}
                        <img src="{{asset('/storage/image/logo/LogoColored.png')}}" alt="Logo-DeliveBoo" width="100">
                    </a>
                </div>

                <div class="d-flex">

                    {{-- login --}}
                    <button class="generalBtn btn--green d-flex align-items-center">
                        <i class="fas fa-user-circle"></i>
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Accedi') }}</a>
                    </button>

                    {{-- register --}}
                    @if (Route::has('register'))
                        <button class="generalBtn btn--green d-flex align-items-center">
                            <i class="fas fa-user-circle"></i>
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Registrati') }}</a>
                        </button>
                    @endif

                </div>

            </div>

        @else

        {{-- Se è un utente Loggato--}}
        {{-- Header --}}
        <header class="header" id="header">
            <div class="header_toggle">
                <i class="fa-solid fa-bars bx bx-menu" id="header-toggle"></i>
            </div>

            <div class="header_img"> <img src="{{ asset("storage/{$user->image}") }}" alt="Logo users" class="rounded-circle">  </div>
        </header>

        {{-- Navbar --}}
        <div class="l-navbar" id="nav-bar">
            <nav class="nav">
                <div> 
                    <a href="{{ url('/') }}" class="nav_logo">
                        <img src="{{asset('/storage/image/logo/LogoNavbar.png')}}" alt="Logo-DeliveBoo" width="20">
                        <span class="nav_logo-name">DeliveBoo</span>
                    </a>
                    
                    <div class="nav_list">
                        <a href="{{ route('home') }}" class="{{ Request::path() ==  'admin/home' ? 'nav_link active' : 'nav_link'  }}">
                            <i class="bx fa-solid fa-house nav_icon"></i>
                            <span class="nav_name">Dashboard</span> 
                        </a>
    
                        <a href="{{ route('dishes.index') }}" class="{{ Request::path() ==  'admin/dishes' ? 'nav_link active' : 'nav_link'  }}">
                            <i class="bx fa-solid fa-utensils nav_icon"></i>
                            <span class="nav_name">Piatti</span> 
                        </a>
                        
                        <a href="#" class="nav_link">
                            <i class="bx fa-solid fa-basket-shopping nav_icon"></i>
                            <span class="nav_name">Ordini</span>
                        </a>
                        <a href="#" class="nav_link">
                            <i class="bx fa-solid fa-chart-pie nav_icon"></i>
                            <span class="nav_name">Statistiche</span> 
                        </a>
                    </div>
                </div>

                <a class="nav_link" href="{{ route('logout') }}"
                    onclick="event.preventDefault(); 
                    document.getElementById('logout-form').submit();">

                    <i class="fa-solid fa-right-from-bracket nav_icon"></i> 
                    <span class="nav_name">{{ __('Esci') }}</span>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form> 
            </nav>

            <script>
                document.addEventListener("DOMContentLoaded", function(event) {

                const showNavbar = (toggleId, navId, bodyId, headerId) =>{
                    const toggle = document.getElementById(toggleId),
                    nav = document.getElementById(navId),
                    bodypd = document.getElementById(bodyId),
                    headerpd = document.getElementById(headerId)

                    // Validate that all variables exist
                    if(toggle && nav && bodypd && headerpd){
                        toggle.addEventListener('click', ()=>{
                        // show navbar
                        nav.classList.toggle('show')
                        // change icon
                        toggle.classList.toggle('bx-x')
                        // add padding to body
                        bodypd.classList.toggle('body-pd')
                        // add padding to header
                        headerpd.classList.toggle('body-pd')
                        })
                    }
                }
                showNavbar('header-toggle','nav-bar','body-pd','header');
                });
            </script>
        </div>
        
        
        @endguest

        {{-- Contenuto --}}
        <main class="height-100 bg-light d-flex justify-content-center">
            @yield('content')
        </main>
    </div>
</body>
</html>



