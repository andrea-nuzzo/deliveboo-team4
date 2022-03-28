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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src= "https://unpkg.com/sweetalert/dist/sweetalert.min.js"> </script>
    <script src="{{ asset('js/admin.js') }}" defer></script>
</head>

<body>
    <div id="body-pd">
        {{-- Se è un utente non Loggato--}}
        @guest

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{asset('/storage/image/logo/LogoColored.png')}}" alt="Logo-DeliveBoo" width="100">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse mx-auto" id="navbarSupportedContent">
                    <div  class="mx-auto"></div>
                    <div class="d-flex justify-content-end mt-2">
                        <button class="generalBtn btn--green d-flex align-items-center mx-3">
                            <i class="fa-solid fa-user-astronaut"></i>
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Accedi') }}</a>
                        </button>
                        @if (Route::has('register'))
                            <button class="generalBtn btn--green d-flex align-items-center">
                                <i class="fa-solid fa-user-plus"></i>
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Registrati') }}</a>
                            </button>
                        @endif

                    </div>
                </div>
            </nav>
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
                        <a href="{{ route('chart')}}" class="{{ Request::path() ==  'admin/chart' ? 'nav_link active' : 'nav_link'  }}">
                            <i class="bx fa-solid fa-chart-pie nav_icon"></i>
                            <span class="nav_name">Statistiche</span>
                        </a>

                        <a href="{{ route('dishes.index') }}" class="{{ Request::path() ==  'admin/dishes' ? 'nav_link active' : 'nav_link'  }}">
                            <i class="bx fa-solid fa-utensils nav_icon"></i>
                            <span class="nav_name">Piatti</span>
                        </a>

                        <a href="{{ route('orders')}}" class="{{ Request::path() ==  'admin/orders' ? 'nav_link active' : 'nav_link'  }}">
                            <i class="bx fa-solid fa-basket-shopping nav_icon"></i>
                            <span class="nav_name">Ordini</span>
                        </a>
                        <router-view>

                        </router-view>
                        <a href="/ristorante/{{$user->slug}}" class="{{ Request::path() ==  '/ristorante' ? 'nav_link active' : 'nav_link'  }}">
                            <i class="bx fa-solid fa-house nav_icon"></i>
                            <span class="nav_name">Home</span>
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
        <main class="bg-light">
            @yield('content')
        </main>
    </div>
</body>
</html>



