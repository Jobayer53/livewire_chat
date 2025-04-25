<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" x-data="{ darkTheme: false }" x-init="const htmlTag = document.querySelector('html');
const storedTheme = sessionStorage.getItem('darkTheme');
if (storedTheme === 'true') {
    darkTheme = true;
    htmlTag.setAttribute('data-bs-theme', 'dark');
}
$watch('darkTheme', value => {
    htmlTag.setAttribute('data-bs-theme', value ? 'dark' : 'light');
    sessionStorage.setItem('darkTheme', value ? 'true' : 'false');
})" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>
        @yield('title')
    </title>
    <link rel="shortcut icon" href="{{asset('frontend/assets/images/favicon.ico')}}">
    <!-- simplebar CSS -->
    <link href="{{asset('frontend/assets/plugin/simplebar/simplebar.min.css')}}" rel="stylesheet">

    <!-- Fancyapps CSS -->
    {{-- <link href="{{asset('frontend/assets/plugin/%40fancyapps/ui/fancybox/fancybox.css')}}" rel="stylesheet"> --}}

    <!--------------Bootstrap Icon----------------->
    <link id="bootstrap-icons" href="{{asset('frontend/assets/css/bootstrap-icons.min.css')}}" type="text/css" rel="stylesheet">
    <!--------------Bootstrap CSS----------------->
    <link id="bootstrap" href="{{asset('frontend/assets/css/bootstrap.min.css')}}" type="text/css" rel="stylesheet">
    <!--------------Main CSS----------------->
    <link id="main-css" href="{{asset('frontend/assets/css/main.min.css')}}" type="text/css" rel="stylesheet">


    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> --}}
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"> --}}
    <!-- Fonts -->
    {{-- <link rel="preconnect" href="https://fonts.bunny.net"> --}}
    {{-- <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" /> --}}

    <!-- Scripts -->
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}

    @vite(['resources/js/app.js'])
    {{-- <link rel="stylesheet" href="{{ asset('css/chat.css') }}"> --}}
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    @yield('headerScript')
    @livewireStyles()

</head>

<body class="font-sans antialiased">

    {{$slot}}
    {{-- <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
        <livewire:layout.navigation />

        <!-- Page Heading -->
        @if (isset($header))
        <header class="bg-white dark:bg-gray-800 shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div> --}}




    @livewireScripts()

</body>

</html>
