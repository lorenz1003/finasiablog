<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Finasia') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="h-screen font-sans antialiased leading-none bg-gray-100">
    <div id="app">

        <header class="w-auto pt-0 mt-0 -p-0 -py-0 bg-white-800">
            <div class="container flex items-center justify-between px-6 mx-auto text-lg">
                <div>
                    <a href="{{ url('/') }}" class="text-lg font-semibold text-gray-100 no-underline">
                        <img src="https://www.finasialand.net/assets/img/logos/finasia_logo_2.png"
                                class="w-48"
                                alt="">
                             </a>

                </div>
                <nav class="space-x-4 text-lg text-gray-600 sm:text-base">

                    <a class="text-lg font-bold no-underline hover:underline" href="/blog">Blog
                    </a>
                    <a class="text-lg font-bold no-underline hover:underline" href="/about">About
                    </a>
                    <a class="text-lg font-bold no-underline hover:underline" href="/about">Property Listings
                    </a>
                    <a href="/blog" class="px-8 py-3 font-extrabold text-gray-100 uppercase bg-green-500 hover:bg-gray-700 text-s rounded-3xl">
                        Inquire Now
                    </a>
                     {{--  @guest
                        <a class="no-underline hover:underline" href="{{ route('login') }}">{{ __('Login') }}</a>
                        @if (Route::has('register'))
                            <a class="no-underline hover:underline" href="{{ route('register') }}">{{ __('Register') }}</a>
                        @endif
                    @else
                        <span>{{ Auth::user()->name }}</span>

                        <a href="{{ route('logout') }}"
                           class="no-underline hover:underline"
                           onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                            {{ csrf_field() }}
                        </form>
                    @endguest  --}}
                </nav>
            </div>
        </header>

        <div>
            @yield('content')
        </div>

        <div>
            @include('layouts.footer')
        </div>
    </div>
</body>
</html>
