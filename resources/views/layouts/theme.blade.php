<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>


<body class="leading-normal tracking-normal text-white gradient" style="font-family: 'Source Sans Pro', sans-serif;">

<div id="app">

    <!--Nav-->
    <nav id="header" class="fixed w-full z-30 top-0 text-white">

        <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 py-2">

            <div class="pl-4 flex items-center">
                <a class="toggleColour text-white no-underline hover:no-underline font-bold text-2xl lg:text-4xl" href="{{ url('/') }}">
                    <!--Icon from: http://www.potlabicons.com/ -->
                    <svg id="icon-drone" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                         version="1.1" x="0px" y="0px" viewBox="0 0 510.604 510.604" style="enable-background:new 0 0 510.604 510.604;"
                         xml:space="preserve" width="70" height="70">
                        <g>
                            <path
                                d="M503.104,110.855h-63.066V94.099c0-4.142-3.358-7.5-7.5-7.5c-4.142,0-7.5,3.358-7.5,7.5v16.755h-63.065   c-4.142,0-7.5,3.358-7.5,7.5s3.358,7.5,7.5,7.5h63.065v16.45c-14.424,3.4-25.195,16.37-25.195,31.817v7.569H203.777   c-4.142,0-7.5,3.358-7.5,7.5c0,4.142,3.358,7.5,7.5,7.5h156.393l-7.811,30.002c-3.7,14.211-16.54,24.137-31.225,24.137h-35.836   c-4.142,0-7.5,3.358-7.5,7.5s3.358,7.5,7.5,7.5h18.27v23.457h-96.533v-23.457h48.263c4.142,0,7.5-3.358,7.5-7.5s-3.358-7.5-7.5-7.5   h-65.83c-14.685,0-27.525-9.925-31.225-24.137l-7.811-30.002h23.344c4.142,0,7.5-3.358,7.5-7.5c0-4.142-3.358-7.5-7.5-7.5h-63.017   v-7.569c0-15.447-10.771-28.417-25.195-31.817v-16.45h63.065c4.142,0,7.5-3.358,7.5-7.5s-3.358-7.5-7.5-7.5H85.565V94.099   c0-4.142-3.358-7.5-7.5-7.5c-4.142,0-7.5,3.358-7.5,7.5v16.755H7.5c-4.142,0-7.5,3.358-7.5,7.5s3.358,7.5,7.5,7.5h63.065v16.45   c-14.424,3.4-25.195,16.37-25.195,31.817v30.138c0,18.028,14.667,32.695,32.695,32.695s32.695-14.667,32.695-32.695v-7.569h24.173   l8.794,33.781c4.336,16.654,17.245,29.281,33.247,33.67l-7.011,4.591c-23.068,15.107-37.688,39.525-40.11,66.994l-7.064,80.118   c-0.364,4.126,2.687,7.766,6.813,8.13c0.224,0.02,0.446,0.029,0.668,0.029c3.844,0,7.118-2.94,7.462-6.842l7.064-80.118   c2.016-22.863,14.185-43.188,33.386-55.762l13.854-9.072v24.577c0,4.142,3.358,7.5,7.5,7.5h48.267v16.449h-22.165   c-10.854,0-19.683,8.83-19.683,19.683v29.659c0,10.853,8.829,19.683,19.683,19.683h61.051c10.854,0,19.683-8.83,19.683-19.683   v-29.659c0-10.853-8.83-19.683-19.683-19.683h-23.886v-16.449h48.267c4.142,0,7.5-3.358,7.5-7.5V272.21l13.854,9.072   c19.201,12.574,31.37,32.899,33.386,55.762l7.064,80.118c0.344,3.902,3.618,6.842,7.462,6.842c0.221,0,0.444-0.01,0.667-0.029   c4.126-0.364,7.176-4.004,6.813-8.13l-7.064-80.118c-2.422-27.468-17.042-51.887-40.11-66.994l-7.011-4.591   c16.003-4.388,28.911-17.015,33.247-33.67l8.795-33.781h24.172v7.569c0,18.028,14.667,32.695,32.695,32.695   c18.028,0,32.695-14.667,32.695-32.695v-30.138c0-15.447-10.771-28.417-25.195-31.817v-16.45h63.066c4.142,0,7.5-3.358,7.5-7.5   S507.246,110.855,503.104,110.855z M95.761,204.26c0,9.757-7.938,17.695-17.695,17.695c-9.757,0-17.695-7.938-17.695-17.695   v-30.138c0-9.757,7.938-17.695,17.695-17.695c9.757,0,17.695,7.938,17.695,17.695V204.26z M291.371,340.418v29.659   c0,2.582-2.101,4.683-4.683,4.683h-61.051c-2.583,0-4.683-2.101-4.683-4.683v-29.659c0-2.582,2.1-4.683,4.683-4.683h61.051   C289.27,335.735,291.371,337.836,291.371,340.418z M450.233,174.122v30.138c0,9.757-7.938,17.695-17.695,17.695   c-9.757,0-17.695-7.938-17.695-17.695v-30.138c0-9.757,7.938-17.695,17.695-17.695   C442.296,156.427,450.233,164.365,450.233,174.122z"/>
                            <path
                                d="M243.588,355.247c0,6.933,5.641,12.574,12.574,12.574c6.933,0,12.574-5.641,12.574-12.574s-5.641-12.574-12.574-12.574   C249.229,342.674,243.588,348.314,243.588,355.247z"/>
                        </g>
                    </svg>
                    {{ config('app.name', 'Laravel') }}
                </a>
            </div>

            <div class="block lg:hidden pr-4">
                <button id="nav-toggle" class="flex items-center px-3 py-2 border rounded text-gray-500 border-gray-600 hover:text-gray-800 hover:border-teal-500 appearance-none focus:outline-none">
                    <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title>
                        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/>
                    </svg>
                </button>
            </div>

            <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden lg:block mt-2 lg:mt-0 bg-white lg:bg-transparent text-black p-4 lg:p-0 z-20" id="nav-content">


                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>


                <ul class="list-reset lg:flex justify-end flex-1 items-center">
                    <!-- Authentication Links -->
                    @guest
                        <li class="mr-3">
                            <a class="inline-block py-2 px-4 text-black font-bold no-underline" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="mr-3">
                                <a class="inline-block py-2 px-4 text-black font-bold no-underline" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
                <button id="navAction" class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full mt-4 lg:mt-0 py-4 px-8 shadow opacity-75">Action</button>
            </div>
        </div>

        <hr class="border-b border-gray-100 opacity-25 my-0 py-0"/>
    </nav>


    <main>
        @yield('content')
    </main>

    @yield('footer', View::make('layouts.footer'))


</div>
</body>
