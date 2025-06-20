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
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Register to Chat Anonymously | Disting Disting</title>

    <meta name="description" content="Quickly enter your age, gender, and country to join Disting Disting—an anonymous chat platform. No email, phone, or registration required. Start chatting instantly.">
    <meta name="keywords" content="anonymous chat signup, free chat platform, join chat room, start chat without registration, Disting Disting registration">
    <meta name="robots" content="index,follow">
    <link rel="canonical" href="https://distingdisting.com/register">

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Register to Chat Anonymously | Disting Disting">
    <meta property="og:description" content="Join Disting Disting by providing your age, gender, and country. No login or verification needed—just start chatting with strangers worldwide.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://distingdisting.com/register">
    <meta property="og:image" content="https://distingdisting.com/frontend/assets/images/social_img.png">
    <meta property="og:site_name" content="Disting Disting">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Register to Chat Anonymously | Disting Disting">
    <meta name="twitter:description" content="Enter your details to join anonymous global chats instantly. No sign-up needed.">
    <meta name="twitter:image" content="https://distingdisting.com/frontend/assets/images/social_img.png">

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('frontend/assets/images/favicon.ico') }}">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap-icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/main.min.css') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
</head>


<body class="bg-logout min-vh-100 d-flex align-items-center justify-content-center">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-xxl-9 col-lg-12">
                <div class="card border-0 mb-0">
                    <div class="row justify-content-center align-items-center g-0">
                        <div class="col-lg-6 d-none d-lg-block">
                            <div class="card bg-primary-subtle shadow-none border-0 rounded-0 rounded-start mb-0 pt-5">
                                <div class="card-body p-0 pt-5 mt-5 mt-xl-3">
                                    {{-- <img src="{{ asset('frontend/assets/images/login-img.png') }}" alt=""class="img-fluid "> --}}
                                    <style>
                                        svg#freepik_stories-social-life:not(.animated) .animable {
                                            opacity: 0;
                                        }

                                        svg#freepik_stories-social-life.animated #freepik--Book--inject-253 {
                                            animation: 1.5s Infinite linear floating;
                                            animation-delay: 0s;
                                        }

                                        svg#freepik_stories-social-life.animated #freepik--friend-3--inject-253 {
                                            animation: 1.5s Infinite linear heartbeat;
                                            animation-delay: 0s;
                                        }

                                        svg#freepik_stories-social-life.animated #freepik--friend-2--inject-253 {
                                            animation: 1.5s Infinite linear heartbeat;
                                            animation-delay: 0s;
                                        }

                                        svg#freepik_stories-social-life.animated #freepik--friend-1--inject-253 {
                                            animation: 1.5s Infinite linear heartbeat;
                                            animation-delay: 0s;
                                        }

                                        @keyframes floating {
                                            0% {
                                                opacity: 1;
                                                transform: translateY(0px);
                                            }

                                            50% {
                                                transform: translateY(-10px);
                                            }

                                            100% {
                                                opacity: 1;
                                                transform: translateY(0px);
                                            }
                                        }

                                        @keyframes heartbeat {
                                            0% {
                                                transform: scale(1);
                                            }

                                            10% {
                                                transform: scale(1.1);
                                            }

                                            30% {
                                                transform: scale(1);
                                            }

                                            40% {
                                                transform: scale(1);
                                            }

                                            50% {
                                                transform: scale(1.1);
                                            }

                                            60% {
                                                transform: scale(1);
                                            }

                                            100% {
                                                transform: scale(1);
                                            }
                                        }
                                    </style>
                                    <svg class="animated" id="freepik_stories-social-life"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        viewBox="0 0 500 500" version="1.1" xmlns:svgjs="http://svgjs.com/svgjs">
                                        <g id="freepik--background-simple--inject-253" class="animable"
                                            style="transform-origin: 253.829px 250.609px;">
                                            <g id="el7h9ow94k45f">
                                                <path
                                                    d="M67.93,167.09s-27.88,72,11.3,144.5S199.11,422.39,263.7,455.14s131.66,16.8,163.53-36.84-11.84-91.93-11.9-168.42,11.45-96.74-30-161.36-143.06-78.93-219.9-31S67.93,167.09,67.93,167.09Z"
                                                    style="fill: rgb(255, 255, 255); opacity: 0.7; transform-origin: 248.588px 250.609px;"
                                                    class="animable"></path>
                                            </g>
                                            <path
                                                d="M49.56,238.67A108.67,108.67,0,0,1,72.33,178c18.74-24.44,48.06-37.39,78-41.39,43.53-5.82,81.85,4.44,122.49-19.31,12.53-7.32,23.9-16.54,36.59-23.6,37.42-20.82,79.5-5.4,105.31,26.45,53.83,66.43,51.73,168,26.32,245.34-11.4,34.73-37.26,62.84-70.23,78.58-74.59,35.6-174.28-1.42-235.82-47.78C89.11,361.76,46,298.78,49.56,238.67Z"
                                                style="fill: rgb(79, 201, 201); transform-origin: 253.829px 271.238px;"
                                                id="el0gcv79weoe0t" class="animable"></path>
                                            <g id="elc6okid6zpu6">
                                                <path
                                                    d="M49.56,238.67A108.67,108.67,0,0,1,72.33,178c18.74-24.44,48.06-37.39,78-41.39,43.53-5.82,81.85,4.44,122.49-19.31,12.53-7.32,23.9-16.54,36.59-23.6,37.42-20.82,79.5-5.4,105.31,26.45,53.83,66.43,51.73,168,26.32,245.34-11.4,34.73-37.26,62.84-70.23,78.58-74.59,35.6-174.28-1.42-235.82-47.78C89.11,361.76,46,298.78,49.56,238.67Z"
                                                    style="fill: rgb(255, 255, 255); opacity: 0.7; transform-origin: 253.829px 271.238px;"
                                                    class="animable"></path>
                                            </g>
                                        </g>
                                        <g id="freepik--Book--inject-253" class="animable"
                                            style="transform-origin: 322.535px 133.335px;">
                                            <path
                                                d="M340.1,157.12l-4.28,5.65s-15.52-7-20.47-17.2c0,0-12.28,5.1-21.32-1l4.35-16.29,29.22,8.94Z"
                                                style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 317.065px 145.525px;"
                                                id="eljjue03q4j5" class="animable"></path>
                                            <path
                                                d="M341.93,159.28l12.36-39.76s-15.2-2.87-21.62-12.68l-5.25-1.71a24.59,24.59,0,0,1-21.74-1.23l-14.9,36.34s11.12,7.32,22.61,2.36l3.94,2S332.54,162.9,341.93,159.28Z"
                                                style="fill: rgb(79, 201, 201); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 322.535px 131.827px;"
                                                id="el7jx394a0pml" class="animable"></path>
                                            <line x1="317.33" y1="144.59" x2="330.65" y2="109.5"
                                                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 323.99px 127.045px;"
                                                id="eln7wbodsrpyd" class="animable"></line>
                                            <line x1="327.42" y1="105.13" x2="315.18" y2="138.29"
                                                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 321.3px 121.71px;"
                                                id="el65xbca5abpv" class="animable"></line>
                                        </g>
                                        <g id="freepik--Character--inject-253" class="animable"
                                            style="transform-origin: 265.48px 308.536px;">
                                            <g id="elf8lb2hv915i">
                                                <path
                                                    d="M296.21,276.21s19.4,16,25.84,24.68,40.73,34.5,42.31,43.2-2.21,20.75-10.07,21.84-43.79-.73-43.79-.73l2.27,20.42s14.67-5.24,21.53-4.53,13.09,2.57,20,2.69,53.85-23.71,53.85-23.71l-48.52,71.8L288,447.73s-53,4.75-75.32-9.53-75.5-51.92-79.87-71.6-10-70-10-70,22,43.68,27.87,50.2,31.65,33.17,35.89,29.6c0,0-20.32-16.4-23.33-25.81s49.42-49.24,49.42-49.24Z"
                                                    style="opacity: 0.1; transform-origin: 265.48px 362.349px;"
                                                    class="animable"></path>
                                            </g>
                                            <path
                                                d="M344.82,211.45c0,8.89-9,51.24-14.78,62.43-.27.51-.51,1-.75,1.47-4.83,9.75-2.71,10.08-9.26,6.88-2.92-1.43-3.91-2-4.1-2.28-10.51-.41-102.36-3.89-122.11,0,0,0-6.23,8.43-9.9,5,0,0-2.23-10-7.17-16.22a.6.6,0,0,1-.09-.13c-5-6.76-13.07-57-13.29-65.55-.27-11.13-.52-16.55,4.22-13.36,0,0,4.07-.66,11.15-1.58,25.77-3.33,91.45-10,145.77-.29,2.4.42,4.77.89,7.12,1.38,0,0,10.56.16,13.19,2.72S344.82,202.56,344.82,211.45Z"
                                                style="fill: rgb(255, 255, 255); transform-origin: 254.618px 234.267px;"
                                                id="elvwdqjubslz" class="animable"></path>
                                            <g style="clip-path: url(&quot;#freepik--clip-path--inject-253&quot;); transform-origin: 253.519px 234.262px;"
                                                id="el55k8z3gwoqt" class="animable">
                                                <g id="elxub3vn8puqp">
                                                    <path
                                                        d="M329.29,275.35c-4.83,9.75-2.71,10.08-9.26,6.88-2.92-1.43-3.91-2-4.1-2.28-10.51-.41-102.36-3.89-122.11,0,0,0-6.23,8.43-9.9,5,0,0-2.23-10-7.17-16.22a.6.6,0,0,1-.09-.13c6.1,2.88,12.27,5.64,13.6,5.7,2.81.13,20.12-3.6,21.94-4.31s.38-8.63-8.78-12-8.81,7.86-18.29-8.62-3-17.32,2.94-19.54-4.41-17.72-8.81-19.6c-3.18-1.36-1.83-13-.52-22.13,25.77-3.33,91.45-10,145.77-.29,0,0-6.83,17.89-2.87,21S327.76,223,330,226s-6,13.24-10.38,14.82-7.63,9.81-9.16,10.84,8.27,8,10.92,8.33c-2.38.87-10.93,4.3-16.55,2.12-7-2.69-15.31,1.24-16.88,2.05s13.63,9.24,18.69,10.16,7.44-1.38,10.21.76C318.42,276.26,324.31,275.91,329.29,275.35Z"
                                                        style="opacity: 0.1; transform-origin: 253.519px 234.262px;"
                                                        class="animable"></path>
                                                </g>
                                            </g>
                                            <path
                                                d="M344.82,211.45c0,8.89-9,51.24-14.78,62.43-.27.51-.51,1-.75,1.47-4.83,9.75-2.71,10.08-9.26,6.88-2.92-1.43-3.91-2-4.1-2.28-10.51-.41-102.36-3.89-122.11,0,0,0-6.23,8.43-9.9,5,0,0-2.23-10-7.17-16.22a.6.6,0,0,1-.09-.13c-5-6.76-13.07-57-13.29-65.55-.27-11.13-.52-16.55,4.22-13.36,0,0,4.07-.66,11.15-1.58,25.77-3.33,91.45-10,145.77-.29,2.4.42,4.77.89,7.12,1.38,0,0,10.56.16,13.19,2.72S344.82,202.56,344.82,211.45Z"
                                                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 254.618px 234.267px;"
                                                id="elya7gi8s02p9" class="animable"></path>
                                            <path
                                                d="M300.54,385.61c1.42,2.4-3.56,8.07-3.56,8.07l-44.39-10.85,20.52-20.14,7-1.05Z"
                                                style="fill: rgb(79, 201, 201); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 276.692px 377.66px;"
                                                id="eljz0nbi2mw9g" class="animable"></path>
                                            <path
                                                d="M296.32,386.6l-2.36.48c-7,1.39-27.46,5.39-33.11,5.46h-1.11a78.89,78.89,0,0,1-10.89-.71s-.25-2.07-.4-4.56c-.26-4.11-.25-9.39,1.59-8.5,17.93,8.7,34.52-3.47,44.42,3.17l.72,1.82h0Z"
                                                style="fill: rgb(255, 255, 255); transform-origin: 272.325px 385.606px;"
                                                id="elw2cm2empyto" class="animable"></path>
                                            <g style="clip-path: url(&quot;#freepik--clip-path-2--inject-253&quot;); transform-origin: 271.755px 385.616px;"
                                                id="elxsgxgwou5ra" class="animable">
                                                <g id="elcyb6oc8cdu">
                                                    <path
                                                        d="M295.18,383.77c-.32-.12-6-2.33-10.43-1.82s-19.82,5.74-22.72,4.65l-.82,2.12-1.47,3.83a78.89,78.89,0,0,1-10.89-.71s-.25-2.07-.4-4.56c-.26-4.11-.25-9.39,1.59-8.5,17.93,8.7,34.52-3.47,44.42,3.17Z"
                                                        style="opacity: 0.2; transform-origin: 271.755px 385.616px;"
                                                        class="animable"></path>
                                                </g>
                                            </g>
                                            <path
                                                d="M296.32,386.6l-2.36.48c-7,1.39-27.46,5.39-33.11,5.46h-1.11a78.89,78.89,0,0,1-10.89-.71s-.25-2.07-.4-4.56c-.26-4.11-.25-9.39,1.59-8.5,17.93,8.7,34.52-3.47,44.42,3.17l.72,1.82h0Z"
                                                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 272.325px 385.606px;"
                                                id="elmc81snl6n3" class="animable"></path>
                                            <path
                                                d="M330,424.38,224.72,443.31s-3.3-11.65-4.38-14.34.93-13.66-.24-15.51-1.06-8.17,0-8c.49.1.81-3.76,1-7.92.23-4.78.31-9.95.31-9.95,4.29-1.49,17-1.11,27-.34a127.22,127.22,0,0,1,12.76,1.44l.24,0c3.75.87,23.23-.82,32.51-1.69,3-.28,4.93-.48,4.93-.48Z"
                                                style="fill: rgb(79, 201, 201); transform-origin: 274.632px 414.915px;"
                                                id="elywswr0jt7s" class="animable"></path>
                                            <g style="clip-path: url(&quot;#freepik--clip-path-3--inject-253&quot;); transform-origin: 275.55px 414.931px;"
                                                id="elxneinepiaxb" class="animable">
                                                <g id="el92k2emzxje">
                                                    <path
                                                        d="M261.21,388.72l-1.47,3.83-3.38,8.75S239,395,231.84,395.24a41.63,41.63,0,0,0-10.74,2.33c.23-4.78.31-9.95.31-9.95,4.29-1.49,17-1.11,27-.34A127.22,127.22,0,0,1,261.21,388.72Z"
                                                        style="opacity: 0.2; transform-origin: 241.155px 393.951px;"
                                                        class="animable"></path>
                                                </g>
                                                <g id="eli5ylclg6vh">
                                                    <path
                                                        d="M308.74,398.54c-10.93,6.6-12.22,23.27-13.91,26s-13,2.25-19.09,2.27a80.16,80.16,0,0,1,18.39-10.33,5.51,5.51,0,0,0-5.16-1.84,38.73,38.73,0,0,0-5.54,1.48c-4.31,1.16-8.85.76-13.29,1.1-1.43.1-3.08.44-3.7,1.73-.48,1-.19,2.25-.85,3.11-4.17-.94-16.31-7.27-18.33-9-4.1-3.45,1.07-9.78-10.36-11.81-5.57-1-14.23,9.06-14.23,9.06l2.05,32.95L330,424.38Z"
                                                        style="opacity: 0.2; transform-origin: 276.335px 420.9px;"
                                                        class="animable"></path>
                                                </g>
                                            </g>
                                            <path
                                                d="M330,424.38,224.72,443.31s-3.3-11.65-4.38-14.34.93-13.66-.24-15.51-1.06-8.17,0-8c.49.1.81-3.76,1-7.92.23-4.78.31-9.95.31-9.95,4.29-1.49,17-1.11,27-.34a127.22,127.22,0,0,1,12.76,1.44l.24,0c3.75.87,23.23-.82,32.51-1.69,3-.28,4.93-.48,4.93-.48Z"
                                                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 274.632px 414.915px;"
                                                id="eli0e60yhokps" class="animable"></path>
                                            <path d="M261.45,395.24s30.3,0,39.9-5.65"
                                                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 281.4px 392.415px;"
                                                id="el6h88cqkaqg3" class="animable"></path>
                                            <path d="M299.23,400.58s5.28,5.51,11.27,4.91"
                                                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 304.865px 403.058px;"
                                                id="elswobv2ow1v" class="animable"></path>
                                            <path d="M257,421.15l13.5,4.6s18.86-10.4,22-8.9"
                                                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 274.75px 421.226px;"
                                                id="el8c1t5t4om07" class="animable"></path>
                                            <path
                                                d="M263,401.3s.58,13.43,1.72,13.65,5.74,10.8,5.74,10.8-3.7,1.44-1,6.12"
                                                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 266.73px 416.585px;"
                                                id="elskzo5imymm" class="animable"></path>
                                            <path d="M294.46,382c1.59.83,4.23,2.68,3.05,3.66"
                                                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 296.132px 383.83px;"
                                                id="eljgjwba6ccwe" class="animable"></path>
                                            <path
                                                d="M207.74,282.32s20.57-13.94,43.78-13.94,41.67,7.7,48.52,13.85-12.66,66.13-12.66,66.13l13.16,37.25c-8.47-11.05-17.75-15.72-17.75-15.72-10.24,13.86-26,11.2-26,11.2L255,396.29c-11.65.78-27.37-7.11-37.3-2.33,0,0,2.86-38.22,3.81-44.39S207.58,319.51,207.74,282.32Z"
                                                style="fill: rgb(79, 201, 201); transform-origin: 254.618px 332.362px;"
                                                id="elwhl6jt9rax" class="animable"></path>
                                            <g style="clip-path: url(&quot;#freepik--clip-path-4--inject-253&quot;); transform-origin: 254.63px 332.265px;"
                                                id="elljafgc4flg" class="animable">
                                                <g id="elcil1gnmllwg">
                                                    <g style="opacity: 0.7; transform-origin: 254.2px 332.265px;"
                                                        class="animable">
                                                        <path
                                                            d="M291.13,375.72c-.48-.41-1-.8-1.42-1.17-1.54-4.65-3.38-9.08-5-12.94-2-4.74-3.6-8.66-4.14-11.56a5.59,5.59,0,0,1,.41-4.12c1.84-2.75,3.71-11.24,3.82-19.54a36.59,36.59,0,0,0-1.59-12.22c-3.47-9.76,3.76-33.57,4.28-35.24a8.73,8.73,0,0,1,1-3.48l.92.4a8,8,0,0,0-.95,3.19l0,.13c-.08.25-7.71,25.08-4.31,34.67a38.21,38.21,0,0,1,1.67,13c-.17,8.36-2.09,16.75-4,19.61a4.76,4.76,0,0,0-.23,3.46c.55,2.86,2.22,6.87,4.05,11.27S289.5,370.49,291.13,375.72Z"
                                                            style="fill: rgb(255, 255, 255); transform-origin: 285.741px 325.585px;"
                                                            id="el45j1jkxb7l5" class="animable"></path>
                                                        <path
                                                            d="M281.9,274c0,.25-4.17,22.67-3.73,28.89.22,3.06.45,12,.2,20.51-.2,6.76-.7,13.25-1.75,16.34a19.9,19.9,0,0,0-.47,9.62h0a23.23,23.23,0,0,0,1,3.86c0,.2,1.79,9.64,3,19.72-.3.31-.6.61-.91.89-1.23-10.31-3-20.19-3.08-20.34a23.37,23.37,0,0,1-1.13-4.51,20.31,20.31,0,0,1,.6-9.56c1-3,1.51-9.56,1.7-16.45.23-8,.05-16.46-.2-20-.45-6.34,3.57-28.19,3.74-29.12l.15-1.12,1,.31C282,273.37,281.94,273.69,281.9,274Z"
                                                            style="fill: rgb(255, 255, 255); transform-origin: 278.369px 323.28px;"
                                                            id="elfqrh35t26ws" class="animable"></path>
                                                        <path
                                                            d="M274,377.74c-.32.18-.64.35-.95.5-.47-5.72-1.21-12-1.83-17.23-.69-5.84-1.23-10.46-1.24-12.65,0-.62,0-1.2,0-1.75,0-1.57,0-2.85.07-4.1.07-2.74.13-5.33,0-10.53a90.49,90.49,0,0,1,.68-11.68c.15-1.39.3-2.79.46-4.18.58-5.21,1.14-10.14.95-13.16-.28-4.63.46-22.73.9-32.34l1,.21c-.43,9.64-1.16,27.57-.88,32.07.19,3.11-.37,8.07-1,13.33-.17,1.47-.33,3-.49,4.42A87.69,87.69,0,0,0,271,332c.17,5.22.11,7.83,0,10.59,0,1.37-.07,2.77-.07,4.54,0,.4,0,.83,0,1.27,0,2.14.58,7,1.23,12.54C272.77,366,273.49,372.11,274,377.74Z"
                                                            style="fill: rgb(255, 255, 255); transform-origin: 272.01px 324.43px;"
                                                            id="elkjgtvj958m" class="animable"></path>
                                                        <path
                                                            d="M264.91,372.84c.16,2.79.3,5.51.45,8-.34.07-.67.12-1,.17-.14-2.47-.29-5.23-.45-8.06-.44-7.9-.94-16.86-1.41-22.27-.16-1.81-.28-3.62-.35-5.45a167,167,0,0,1,1-26.14c0-.33.07-.69.11-1.08,1-9.81,2.87-36.22,3.72-48.42l1,.15c-.87,12.31-2.76,38.86-3.74,48.54,0,.33-.07.63-.1.92a166.59,166.59,0,0,0-1,25.71c.08,1.91.21,3.8.37,5.68C264,356,264.47,364.93,264.91,372.84Z"
                                                            style="fill: rgb(255, 255, 255); transform-origin: 264.998px 325.3px;"
                                                            id="el79v6jdspu6a" class="animable"></path>
                                                        <path
                                                            d="M250.41,359.09c-.12,4.44-.25,9-.07,11.88.22,3.38-.87,16.57-1.63,25l-1-.12c.76-8.46,1.84-21.59,1.63-24.87-.18-2.88-.05-7.5.07-12,.1-3.29.18-6.4.13-8.46,0-1.31-.2-3.33-.52-5.93-.74-6.2-2.27-15.63-4.61-26.2-.43-1.92-.88-3.89-1.36-5.88-3.25-13.47.06-34.59,1.8-43.84l1-.11c-1.72,9-5.11,30.27-1.87,43.72.48,2,.92,3.91,1.35,5.81,2.38,10.77,3.94,20.38,4.67,26.63.3,2.52.47,4.49.5,5.77C250.59,352.67,250.51,355.79,250.41,359.09Z"
                                                            style="fill: rgb(255, 255, 255); transform-origin: 246.108px 332.265px;"
                                                            id="ely0n7ylngkk" class="animable"></path>
                                                        <path
                                                            d="M243.73,350.58a9.83,9.83,0,0,1-.13,1.78c-.88,4.87-1.59,30.41-1.75,42.5l-1-.21c.13-12.45,1-37.95,1.81-42.46a11.76,11.76,0,0,0,.11-2.21c-.12-4.68-1.79-13.62-3.53-23-.38-2.05-.76-4.11-1.13-6.16-1.26-6.92-2.38-13.6-2.8-18.57-.79-9.49,1.32-23.93,3.14-32.48l1-.2c-1.73,8.15-4,22.72-3.17,32.6.4,4.88,1.5,11.44,2.75,18.26.38,2.11.78,4.25,1.17,6.37C242,336.59,243.74,345.92,243.73,350.58Z"
                                                            style="fill: rgb(255, 255, 255); transform-origin: 239.436px 332.215px;"
                                                            id="elu1zme5wfjac" class="animable"></path>
                                                        <path
                                                            d="M236.1,347.19c0,.4,0,.8,0,1.18a88.28,88.28,0,0,1-1.72,12.51c-1.23,6.66-2.49,13.54-1.81,20.16.46,4.41.67,8.64.76,12.14l-1-.17c-.09-3.44-.3-7.57-.74-11.87-.69-6.76.59-13.71,1.82-20.44a88.32,88.32,0,0,0,1.71-12.36c0-.3,0-.6,0-.91,0-6.31-2.05-15.64-3.84-23.52l-.3-1.31c-.85-3.71-1.58-6.92-2-9.4-.75-4.32.37-9.71,1.56-15.41,1.11-5.35,2.26-10.87,1.77-15.5-.4-3.91-.54-7.72-.58-10.87l1-.28c0,3.17.17,7.06.58,11,.5,4.79-.67,10.39-1.79,15.81-1.17,5.61-2.27,10.91-1.55,15,.43,2.46,1.15,5.66,2,9.36l.24,1.07C234,331.32,236.06,340.71,236.1,347.19Z"
                                                            style="fill: rgb(255, 255, 255); transform-origin: 232.419px 332.16px;"
                                                            id="eluyy4jmhn3fr" class="animable"></path>
                                                        <path
                                                            d="M230,348.36c0,.12,0,.24,0,.36-.1,4.26-1.09,10.78-2.13,17.67-1.33,8.79-2.81,18.49-2.88,26l-1,0c.07-7.63,1.55-17.39,2.89-26.22A172,172,0,0,0,228.94,349c0-.22,0-.43,0-.63.07-6.26-1.31-12.2-2.65-18-.28-1.19-.55-2.36-.8-3.5a56.82,56.82,0,0,1-1.28-7.77c-.35-4.44.22-10.91.68-16.12.38-4.25.76-8.64.37-9.45-.68-1.37-.53-8.41-.24-18.21,0-.57,0-1.13.05-1.69l1-.38-.06,2.1c-.2,6.95-.49,16.48.13,17.74.5,1,.24,4.28-.26,10-.46,5.17-1,11.6-.69,15.95a54.13,54.13,0,0,0,1.21,7.36c.26,1.23.55,2.49.85,3.77C228.63,336,230,342,230,348.36Z"
                                                            style="fill: rgb(255, 255, 255); transform-origin: 226.995px 332.82px;"
                                                            id="ela2sbctz01q" class="animable"></path>
                                                        <path
                                                            d="M223.62,350.33q-1.27,7-3.73,16.5c.18-2.19.36-4.32.54-6.31.86-3.65,1.58-6.95,2.13-9.91,1.17-6.28,1.63-11,1.37-14.18-.11-1.39-.27-4-.47-7.23,0-.36-.05-.74-.07-1.12-.55-9-1.37-21.91-2.48-31.66a138.46,138.46,0,0,0-3.64-19.4l.92-.43a139.39,139.39,0,0,1,3.72,19.72c1.09,9.59,1.89,22.25,2.45,31.23,0,.55.07,1.08.1,1.6.2,3.25.36,5.83.47,7.2C225.19,339.5,224.75,344.18,223.62,350.33Z"
                                                            style="fill: rgb(255, 255, 255); transform-origin: 221.136px 321.71px;"
                                                            id="elyopykr3kxop" class="animable"></path>
                                                    </g>
                                                </g>
                                                <g id="el4cs5id8tzkn">
                                                    <path
                                                        d="M292.8,330.44c-2.91,10.19-5.42,17.92-5.42,17.92a25.46,25.46,0,0,1-5.79,1.59c-.36.05-.7.08-1,.1a11.34,11.34,0,0,1-4.42-.68h0a6.21,6.21,0,0,1-1.08-.38c-1-.43-2.55-1.16-4.14-1.91l-1-.47a24,24,0,0,0-5.21-2,4.21,4.21,0,0,0-1.59.23,9.27,9.27,0,0,0-1,.32,57.31,57.31,0,0,0-7.27,3.54l-.26-3s-2.58-.58-4.58-.88l-1-.13c-.25,0-.47,0-.66,0-1.66,0-2.94,6.85-4.63,5.95-.28-.15-.62-.36-1-.6-1.86-1.2-4.55-3.24-4.55-3.24-.15,0-.91.17-2.08.45l-1,.24c-1.42.34-3.22.79-5.16,1.29l-1,.26c-1.74.43-3.57.9-5.32,1.35l-1.06.28-1.19.3c.07-.54.13-1,.18-1.34.41-2.65-2.11-8.57-5.11-17.41,2.07-1.27,4.43-2.67,6.95-4.08l1-.54,1.15-.64.92-.49c1.58-.85,3.2-1.69,4.84-2.5l.92-.46c1.95-.94,3.92-1.83,5.88-2.64.32-.14.63-.27,1-.39,1.82-.74,3.63-1.4,5.39-1.95l1-.3a34.42,34.42,0,0,1,8.55-1.54,34.81,34.81,0,0,1,9.37,1.33l1,.27c2.06.57,4.2,1.27,6.37,2.07l1,.35c1.91.72,3.85,1.5,5.77,2.33l1,.43c2.19,1,4.35,2,6.44,3l1,.49C288.29,328.09,290.65,329.3,292.8,330.44Z"
                                                        style="opacity: 0.2; transform-origin: 254.63px 333.83px;"
                                                        class="animable"></path>
                                                </g>
                                            </g>
                                            <path
                                                d="M207.74,282.32s20.57-13.94,43.78-13.94,41.67,7.7,48.52,13.85-12.66,66.13-12.66,66.13l13.16,37.25c-8.47-11.05-17.75-15.72-17.75-15.72-10.24,13.86-26,11.2-26,11.2L255,396.29c-11.65.78-27.37-7.11-37.3-2.33,0,0,2.86-38.22,3.81-44.39S207.58,319.51,207.74,282.32Z"
                                                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 254.618px 332.362px;"
                                                id="elqkdcf4tp7" class="animable"></path>
                                            <path
                                                d="M224.72,284.43s3.1-17.54,27.08-19.85,31.89,21.17,31.89,21.17-6.8-4-8.54-4S265,293.66,265,293.66a27.74,27.74,0,0,0-12.05,15.56s-2.81-11.08-7.65-13.45c0,0-12.63-11.87-13.48-13.19S224.72,284.43,224.72,284.43Z"
                                                style="fill: rgb(79, 201, 201); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 254.205px 286.82px;"
                                                id="el81jok5l49v7" class="animable"></path>
                                            <path
                                                d="M241.51,269.2s-5.82,4.61-4.5,10.84S251.8,299.2,251.8,299.2l1.12,3.69s15.21-17.67,16-25.58S255,264,241.51,269.2Z"
                                                style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 252.883px 285.018px;"
                                                id="elprhk6atxed" class="animable"></path>
                                            <path d="M255.94,293.34c1-3.47,5.06-3.34,7.78-4.78"
                                                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 259.83px 290.95px;"
                                                id="eljh79kixec9" class="animable"></path>
                                            <path d="M240.71,286.82c4.08,2.83,9,3.47,10.15,6.94"
                                                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 245.785px 290.29px;"
                                                id="elltwwbm6cags" class="animable"></path>
                                            <path
                                                d="M207.74,282.32c-7.23,6.88-14.77,19.14-20.57,31.91-7.31,16.13-26.58,32.74-10.42,44.13,10.36,7.3,19.52-5.4,38.18-30.83,0,0,5.08-24.71,0-33.77"
                                                style="fill: rgb(79, 201, 201); transform-origin: 193.828px 321.362px;"
                                                id="elp9qibb16u7e" class="animable"></path>
                                            <g style="clip-path: url(&quot;#freepik--clip-path-5--inject-253&quot;); transform-origin: 196.65px 317.095px;"
                                                id="elps1w32zej4k" class="animable">
                                                <g id="elkz1ayzgfvbp">
                                                    <g style="opacity: 0.4; transform-origin: 196.65px 317.095px;"
                                                        class="animable">
                                                        <path
                                                            d="M210.23,286.28l-.16,0c-3.77,0-12.15,16.33-16.65,25.14-1.81,3.56-3.13,6.13-3.77,7L188.52,320c-3.08,4.11-12.45,16.64-11.31,19.18a.5.5,0,0,1-.26.66.45.45,0,0,1-.2,0,.52.52,0,0,1-.46-.29c-1.21-2.72,5.1-11.73,11.43-20.19l1.12-1.5c.6-.82,2-3.5,3.69-6.88,6.42-12.59,13-24.87,17.11-25.65Z"
                                                            style="fill: rgb(255, 255, 255); transform-origin: 193.185px 312.591px;"
                                                            id="eldiyc8uycxna" class="animable"></path>
                                                        <path
                                                            d="M213.74,291.87l-.45.15c-.74.24-1.85.6-1.7,1.66-.94,1.83-10,19.13-16.91,26.56a77.91,77.91,0,0,0-5.68,7.13,118.36,118.36,0,0,0-7.4,11.68c-1.53,2.82-2.38,4.88-2,5.34a.48.48,0,0,0,.4.21.45.45,0,0,0,.29-.1.48.48,0,0,0,.18-.56,15.36,15.36,0,0,1,1.53-3.45,118,118,0,0,1,8.6-13.62,66.27,66.27,0,0,1,4.85-5.95c7.35-7.91,17.06-26.75,17.15-26.93a.51.51,0,0,0,0-.36c-.06-.22,0-.34,1-.66.23-.07.46-.15.68-.24Z"
                                                            style="fill: rgb(255, 255, 255); transform-origin: 196.895px 318.235px;"
                                                            id="elai4wokawkl9" class="animable"></path>
                                                        <path
                                                            d="M217.16,304.55a5.47,5.47,0,0,0-2.65,2.57,90.42,90.42,0,0,1-6.32,10h0a50.22,50.22,0,0,1-5.4,6.36c-6.22,6-13,17.73-13.11,17.84a.5.5,0,0,1-.43.25.47.47,0,0,1-.25-.07.49.49,0,0,1-.18-.68c.07-.12,7-11.92,13.27-18.06a45.38,45.38,0,0,0,4.51-5.19h0a89.85,89.85,0,0,0,7-10.92,6.77,6.77,0,0,1,3.5-3.24C217.13,303.81,217.15,304.18,217.16,304.55Z"
                                                            style="fill: rgb(255, 255, 255); transform-origin: 202.955px 322.49px;"
                                                            id="eleqc543p080h" class="animable"></path>
                                                        <path
                                                            d="M216.87,313.65c0,.43-.07.85-.12,1.26l-.56.35c-.56.35-1.14.71-1.78,1.13l-.34.5c-2,2.9-10.78,15.79-14,19.81-2.08,2.62-5.25,6.21-7.56,8.78h0c-1.67,1.86-2.89,3.19-2.92,3.22a.52.52,0,0,1-.37.16.51.51,0,0,1-.34-.14.5.5,0,0,1,0-.7s1-1.06,2.34-2.57h0c2.32-2.58,5.86-6.55,8.1-9.38,3-3.77,11-15.45,13.53-19.17h0l.78-1.15a.4.4,0,0,1,.13-.13c.69-.46,1.3-.84,1.89-1.21Z"
                                                            style="fill: rgb(255, 255, 255); transform-origin: 202.804px 331.255px;"
                                                            id="elddwq61a5prt" class="animable"></path>
                                                    </g>
                                                </g>
                                                <g id="el4ofwfm512ca">
                                                    <path
                                                        d="M216.55,316.93c-.67,6-1.62,10.6-1.62,10.6-4.69,6.39-8.78,12-12.44,16.65a48.39,48.39,0,0,1-10,1.3c-.45,0-.89,0-1.33,0-4.64-.18-8.25-1.58-9.25-5q-.22-.75-.36-1.44c-1.4-6.89,2.88-10.05,7.4-11.68.52-.19,1-.35,1.56-.5,1.53-.44,3-.74,4.25-1,4.85-.91,7.9-6.59,11.78-8.3a5.89,5.89,0,0,1,1.59-.45h0a43.31,43.31,0,0,1,4.67-.25h1.21C214.92,316.89,215.76,316.91,216.55,316.93Z"
                                                        style="opacity: 0.2; transform-origin: 198.915px 331.17px;"
                                                        class="animable"></path>
                                                </g>
                                            </g>
                                            <path
                                                d="M207.74,282.32c-7.23,6.88-14.77,19.14-20.57,31.91-7.31,16.13-26.58,32.74-10.42,44.13,10.36,7.3,19.52-5.4,38.18-30.83,0,0,5.08-24.71,0-33.77"
                                                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 193.828px 321.362px;"
                                                id="el4lg0pjtyy1u" class="animable"></path>
                                            <path
                                                d="M238.91,296.14v-2.9a1.9,1.9,0,0,1,1.9-1.9H265a1.9,1.9,0,0,1,1.9,1.9v3.51l-13.94,21.41Z"
                                                style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 252.905px 304.75px;"
                                                id="elfasfzo46poc" class="animable"></path>
                                            <path
                                                d="M261.11,332H244.66a2.25,2.25,0,0,1-2.24-2l-3.5-33.2a2.26,2.26,0,0,1,2.24-2.5h23.45a2.26,2.26,0,0,1,2.24,2.5l-3.5,33.2A2.25,2.25,0,0,1,261.11,332Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 252.885px 313.15px;"
                                                id="el6gnqcznk11v" class="animable"></path>
                                            <g style="clip-path: url(&quot;#freepik--clip-path-6--inject-253&quot;); transform-origin: 252.885px 313.15px;"
                                                id="elmvaqeza0mn" class="animable">
                                                <g id="elprraz38inzg">
                                                    <path
                                                        d="M261.11,332H244.66a2.25,2.25,0,0,1-2.24-2l-3.5-33.2a2.26,2.26,0,0,1,2.24-2.5h23.45a2.26,2.26,0,0,1,2.24,2.5l-3.5,33.2A2.25,2.25,0,0,1,261.11,332Z"
                                                        style="fill: rgb(255, 255, 255); opacity: 0.2; transform-origin: 252.885px 313.15px;"
                                                        class="animable"></path>
                                                </g>
                                            </g>
                                            <path
                                                d="M261.11,332H244.66a2.25,2.25,0,0,1-2.24-2l-3.5-33.2a2.26,2.26,0,0,1,2.24-2.5h23.45a2.26,2.26,0,0,1,2.24,2.5l-3.5,33.2A2.25,2.25,0,0,1,261.11,332Z"
                                                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 252.885px 313.15px;"
                                                id="elsh49maygfe" class="animable"></path>
                                            <path
                                                d="M242.19,298.64l.36,3.81a.53.53,0,0,0,.53.48h4.75a.53.53,0,0,0,.53-.53v-3.81a.54.54,0,0,0-.53-.54h-5.11A.54.54,0,0,0,242.19,298.64Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 245.274px 300.49px;"
                                                id="eluiziqxsp56" class="animable"></path>
                                            <g id="elfwdxy9fffxg">
                                                <ellipse cx="244.12" cy="299.54" rx="0.98" ry="0.65"
                                                    style="fill: rgb(255, 255, 255); opacity: 0.2; transform-origin: 244.12px 299.54px;"
                                                    class="animable"></ellipse>
                                            </g>
                                            <g id="el5mwkahn174c">
                                                <path
                                                    d="M247.48,301.54c0,.37-.42.66-.94.66s-.94-.29-.94-.66.42-.65.94-.65S247.48,301.18,247.48,301.54Z"
                                                    style="fill: rgb(255, 255, 255); opacity: 0.2; transform-origin: 246.54px 301.545px;"
                                                    class="animable"></path>
                                            </g>
                                            <g id="elni2f4a89kro">
                                                <ellipse cx="246.55" cy="299.54" rx="0.98" ry="0.65"
                                                    style="fill: rgb(255, 255, 255); opacity: 0.2; transform-origin: 246.55px 299.54px;"
                                                    class="animable"></ellipse>
                                            </g>
                                            <g id="elawiuij5asuw">
                                                <ellipse cx="244.35" cy="301.54" rx="0.94" ry="0.65"
                                                    style="fill: rgb(255, 255, 255); opacity: 0.2; transform-origin: 244.35px 301.54px;"
                                                    class="animable"></ellipse>
                                            </g>
                                            <path
                                                d="M177.69,335.79s7.91-6.53,14.24-5.34c0,0,10.5-2.77,12.08-3.76a10.61,10.61,0,0,1,4.54-1l6-3.95s7.84,9.29,8.16,19.58c0,0-21.83,13.05-29,15.82-6.3,2.45-10.5,4.62-15.12,2.35a11.38,11.38,0,0,1-1.1-.63c-.25-.16-.49-.33-.74-.51"
                                                style="fill: rgb(79, 201, 201); transform-origin: 199.73px 341.093px;"
                                                id="el2iu7z8vivux" class="animable"></path>
                                            <g style="clip-path: url(&quot;#freepik--clip-path-7--inject-253&quot;); transform-origin: 198.085px 342.46px;"
                                                id="elz5s9yq3wfib" class="animable">
                                                <g id="eldlgpdeiutue">
                                                    <g style="opacity: 0.4; transform-origin: 198.085px 342.46px;"
                                                        class="animable">
                                                        <path
                                                            d="M214.13,325.42c0,.37-.06.77-.07,1.21-8.46,5.1-22.61,9.33-29.72,10.25a19.9,19.9,0,0,0-6.79,2.28l0-1.13a20.37,20.37,0,0,1,6.61-2.14C192.38,334.84,206.3,330.36,214.13,325.42Z"
                                                            style="fill: rgb(255, 255, 255); transform-origin: 195.84px 332.29px;"
                                                            id="el69k9gcav3t2" class="animable"></path>
                                                        <path
                                                            d="M215.62,334.38c-7.32,3.67-19.91,7.74-29.69,10.9-3.47,1.12-6.58,2.13-8.76,2.9l.05-1.08c2.17-.75,5.12-1.71,8.4-2.77,9.27-3,22.27-7.2,29.6-10.89.06.18.13.35.21.53S215.55,334.25,215.62,334.38Z"
                                                            style="fill: rgb(255, 255, 255); transform-origin: 196.395px 340.81px;"
                                                            id="eljlvir5ayox" class="animable"></path>
                                                        <path
                                                            d="M219,339.26c-10,7.1-30.09,15.93-40.36,20.24a11.38,11.38,0,0,1-1.1-.63c9.95-4.17,30.64-13.22,40.77-20.34A9.79,9.79,0,0,0,219,339.26Z"
                                                            style="fill: rgb(255, 255, 255); transform-origin: 198.27px 349.015px;"
                                                            id="elmk4piqmp19e" class="animable"></path>
                                                    </g>
                                                </g>
                                            </g>
                                            <path
                                                d="M177.69,335.79s7.91-6.53,14.24-5.34c0,0,10.5-2.77,12.08-3.76a10.61,10.61,0,0,1,4.54-1l6-3.95s7.84,9.29,8.16,19.58c0,0-21.83,13.05-29,15.82-6.3,2.45-10.5,4.62-15.12,2.35a11.38,11.38,0,0,1-1.1-.63c-.25-.16-.49-.33-.74-.51"
                                                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 199.73px 341.093px;"
                                                id="el77khfs39382" class="animable"></path>
                                            <path
                                                d="M214.51,323.15a11.84,11.84,0,0,0-.32,1.73q0,.25-.06.54c0,.37-.06.77-.07,1.21s0,1,0,1.51a16.71,16.71,0,0,0,1.14,5.3c.06.18.13.35.21.53s.12.28.19.41a17.3,17.3,0,0,0,2.6,4.11l0,0a9.79,9.79,0,0,0,.69.73c.11.12.23.23.34.33a8.77,8.77,0,0,0,2.12,1.51"
                                                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 217.703px 332.105px;"
                                                id="elm7gglmrvujr" class="animable"></path>
                                            <path
                                                d="M248,316l2,6.92s-.88,1.77-3.18,0v4.16l-1.52,1.19-1,2.37s-1.25.2-2.58-4.05c-.77-2.47-3.6-1-3.6-1s-1.47,6.33-8.86,5.47l-8.87,7.5-1.16,1a12.6,12.6,0,0,1-1.07-1.1,17.76,17.76,0,0,1-2.79-4.52,16.92,16.92,0,0,1-1.35-5.83c0-.47.06-.89.11-1.26l1.45-.8c2.83-1.55,8.89-4.94,9.34-5.7.58-1,6.59-9.49,7.84-10.68s9.58-1.18,11.54,0a49.39,49.39,0,0,1,5.68,4.75S250.15,316.82,248,316Z"
                                                style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 232.01px 324.171px;"
                                                id="eleo89vtojg1u" class="animable"></path>
                                            <path d="M248,316s-3.65-3.06-4.51-3.56-5.35-.49-5.35-.49"
                                                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 243.07px 313.975px;"
                                                id="elvjy49ic2sy" class="animable"></path>
                                            <path d="M246.86,323l-1.12-4.44s-3.36-1.78-4.55-2.48a8,8,0,0,0-3-.79"
                                                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 242.525px 319.145px;"
                                                id="elvqoszeiy8an" class="animable"></path>
                                            <path
                                                d="M245.34,328.3A49.79,49.79,0,0,0,244,323c-.27-.2-5.34-2.37-5.34-2.37"
                                                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 242px 324.465px;"
                                                id="eleg05l38q8ff" class="animable"></path>
                                            <path
                                                d="M300,282.23c7.07,3.52,31.07,55.2,34.76,56.26s2.64,16.88-6.76,21.08c-5.55,2.48-15.39-5-17.63-7.62s-9.93-15.92-17-23.52c0,0-5.91-19.59-2.89-35.09"
                                                style="fill: rgb(79, 201, 201); transform-origin: 313.18px 321.148px;"
                                                id="elgtvnthsoyfk" class="animable"></path>
                                            <g style="clip-path: url(&quot;#freepik--clip-path-8--inject-253&quot;); transform-origin: 309.6px 317.645px;"
                                                id="eliz2az0qlbme" class="animable">
                                                <g id="elnuoofn12s6r">
                                                    <g style="opacity: 0.4; transform-origin: 309.6px 315.635px;"
                                                        class="animable">
                                                        <path
                                                            d="M329.5,336a24.77,24.77,0,0,0-5.94-8.08c-5.83-5.35-22.28-37-25.53-43.36l-.71.82c3.54,6.87,18.23,35.13,24.71,42.4a10.39,10.39,0,0,0,.85.88,24.69,24.69,0,0,1,2.68,2.85,23.56,23.56,0,0,1,2.6,4A3.23,3.23,0,0,1,329.5,336Z"
                                                            style="fill: rgb(255, 255, 255); transform-origin: 313.41px 310.28px;"
                                                            id="eld4yi0xfwfan" class="animable"></path>
                                                        <path
                                                            d="M324.51,346.17a.5.5,0,0,1-.46.54h0a.5.5,0,0,1-.5-.47,19.65,19.65,0,0,0-1.39-5.53c-2.58-6.59-8.09-14.13-11.94-17.38a14.28,14.28,0,0,1-2.05-2.31c-5.44-7.26-13.9-25.45-14.61-27-.6-.67-1.14-1.28-1.67-1.9l-.17-.19.66-.76.26.3c.55.62,1.1,1.25,1.72,1.93a.57.57,0,0,1,.08.13c.1.23,10.05,21.72,15.37,27.93a9.11,9.11,0,0,0,1.05,1.08c3.77,3.18,9.08,10.38,11.86,16.93A21.85,21.85,0,0,1,324.51,346.17Z"
                                                            style="fill: rgb(255, 255, 255); transform-origin: 308.116px 318.94px;"
                                                            id="eliy0m0gow8m" class="animable"></path>
                                                        <path
                                                            d="M316.93,341.5a.51.51,0,0,1-.7-.09c-1.29-1.65-8-12.47-9.62-16.58a18.12,18.12,0,0,0-2.58-3.92c-3.84-4.83-10.35-11.25-10.44-11.33-1-.93-2.27-1.93-3.46-2.91l-.43-.35c0-.44,0-.89,0-1.34l1.11.92c1.19,1,2.42,2,3.51,2.94a150,150,0,0,1,10.9,11.92,17.62,17.62,0,0,1,2.37,3.71c1.56,4,8.19,14.7,9.47,16.32A.51.51,0,0,1,316.93,341.5Z"
                                                            style="fill: rgb(255, 255, 255); transform-origin: 303.425px 323.29px;"
                                                            id="elwl4muc9k87g" class="animable"></path>
                                                        <path
                                                            d="M310.61,342.71a.51.51,0,0,1-.2,0,.5.5,0,0,1-.46-.29c-1.53-3.44-9.18-14.09-14.16-20.9L293,317.75l-.68-.92a2.33,2.33,0,0,1-.33-.65c-.09-.23-.12-.3-.29-.39-.36-.18-.73-.35-1.12-.5-.06-.37-.11-.74-.16-1.12a13.92,13.92,0,0,1,1.74.73,1.51,1.51,0,0,1,.76.92,1.83,1.83,0,0,0,.21.42l.67.92c.85,1.16,2,2.72,3.29,4.5,5,6.85,12.24,17,13.76,20.39A.49.49,0,0,1,310.61,342.71Z"
                                                            style="fill: rgb(255, 255, 255); transform-origin: 300.659px 328.445px;"
                                                            id="elv4zqc0negzc" class="animable"></path>
                                                    </g>
                                                </g>
                                                <g id="el3a4yir0ueqw">
                                                    <path
                                                        d="M325.56,331.52a8.07,8.07,0,0,1-1.05,4c-.64,1.3-1.23,2.63-1.83,3.95l-.56,1.22c-2.63,5.63-5.61,10.54-12.68,10-3-4.3-9.77-15.49-16.06-22.23,0,0-.87-2.87-1.77-7.29,1.29.14,2.75.3,4.18.42l1.31.1c2.73.18,5.14.18,5.81-.3a3.07,3.07,0,0,1,1.12-.45,6.42,6.42,0,0,1,1.15-.15,12.12,12.12,0,0,1,2.95.26,15,15,0,0,1,1.64.46,11.93,11.93,0,0,1,4.75,3c1.72,1.79,5,2.35,7.51,3.35C323.92,328.55,325.42,329.56,325.56,331.52Z"
                                                        style="opacity: 0.2; transform-origin: 308.585px 335.757px;"
                                                        class="animable"></path>
                                                </g>
                                            </g>
                                            <path
                                                d="M300,282.23c7.07,3.52,31.07,55.2,34.76,56.26s2.64,16.88-6.76,21.08c-5.55,2.48-15.39-5-17.63-7.62s-9.93-15.92-17-23.52c0,0-5.91-19.59-2.89-35.09"
                                                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 313.18px 321.148px;"
                                                id="eln5033y7vn6d" class="animable"></path>
                                            <path
                                                d="M329.1,335.79s-7.91-6.53-14.24-5.34c0,0-10.5-2.77-12.08-3.76a10.61,10.61,0,0,0-4.54-1l-6-3.95s-7.84,9.29-8.16,19.58c0,0,21.84,13.05,29,15.82s11.57,5.19,17,1.21"
                                                style="fill: rgb(79, 201, 201); transform-origin: 307.08px 341.093px;"
                                                id="elk28wdkxc3bo" class="animable"></path>
                                            <g style="clip-path: url(&quot;#freepik--clip-path-9--inject-253&quot;); transform-origin: 308.52px 343.065px;"
                                                id="elynp6yxml2vc" class="animable">
                                                <g id="els8m5cpdfxx9">
                                                    <g style="opacity: 0.4; transform-origin: 308.52px 343.065px;"
                                                        class="animable">
                                                        <path
                                                            d="M328.72,340.08l-.17-.21a1.52,1.52,0,0,1-.16-.33c-.56-.24-1.1-.46-1.58-.63-1.36-.48-3.43-1.11-5.81-1.84-7.62-2.34-19.81-6.08-28.27-10.58,0,.36,0,.75,0,1.15,8.37,4.37,20,7.94,28,10.39,2.38.72,4.43,1.36,5.78,1.83.49.17,1,.4,1.63.66h0l.24,0,.32,0a1,1,0,0,1,.06-.34Z"
                                                            style="fill: rgb(255, 255, 255); transform-origin: 310.745px 333.505px;"
                                                            id="el2kz8577pw08" class="animable"></path>
                                                        <path
                                                            d="M329.09,352.43a1.91,1.91,0,0,1-.43-.58c-3.15-1.54-6-3-8.13-4-5.42-2.57-14.1-7.16-21.76-11.21l-7-3.7c-.11.31-.24.62-.37.94l6.92,3.65c7.67,4.05,16.36,8.64,21.8,11.23,2.16,1,5.13,2.47,8.37,4.06h.09c.21.06.43.11.65.15h.1a1.22,1.22,0,0,1,.07-.17.94.94,0,0,1-.1-.28Z"
                                                            style="fill: rgb(255, 255, 255); transform-origin: 310.4px 342.955px;"
                                                            id="elq55e6lathx" class="animable"></path>
                                                        <path
                                                            d="M325.06,359.64a.91.91,0,0,1,.27-.24l.53-.33a.81.81,0,0,1-.07-.22c-9.72-3.89-28.74-12.11-37.45-20.1-.24.26-.48.5-.7.71,8.78,8.11,27.44,16.21,37.35,20.17Z"
                                                            style="fill: rgb(255, 255, 255); transform-origin: 306.75px 349.195px;"
                                                            id="elphs9dk1xxs" class="animable"></path>
                                                    </g>
                                                </g>
                                            </g>
                                            <path
                                                d="M329.1,335.79s-7.91-6.53-14.24-5.34c0,0-10.5-2.77-12.08-3.76a10.61,10.61,0,0,0-4.54-1l-6-3.95s-7.84,9.29-8.16,19.58c0,0,21.84,13.05,29,15.82s11.57,5.19,17,1.21"
                                                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 307.08px 341.093px;"
                                                id="elsu6k3avcit" class="animable"></path>
                                            <path
                                                d="M285.38,341.1a8.77,8.77,0,0,0,2.12-1.51l.14-.13c.22-.21.46-.45.7-.71.08-.08.15-.17.23-.26a17.76,17.76,0,0,0,2.79-4.52s0,0,0,0c.13-.32.26-.63.37-.94a17.62,17.62,0,0,0,1-4.91,3.27,3.27,0,0,0,0-.44c0-.4,0-.79,0-1.15,0-.6-.08-1.15-.13-1.61a11.84,11.84,0,0,0-.32-1.73"
                                                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 289.059px 332.145px;"
                                                id="eloe12enyr6g" class="animable"></path>
                                            <path
                                                d="M292.71,328.08a17,17,0,0,1-1.35,5.89,17.76,17.76,0,0,1-2.79,4.52,12.6,12.6,0,0,1-1.07,1.1l-1.16-1-8.87-7.5c-7.39.86-8.86-5.47-8.86-5.47s-2.83-1.48-3.6,1c-1.33,4.25-2.58,4.05-2.58,4.05l-1-2.37-1.52-1.19V323c-2.3,1.77-3.18,0-3.18,0l2-6.92c-2.11.79-2-1.58-2-1.58a49.39,49.39,0,0,1,5.68-4.75c2-1.18,10.29-1.18,11.54,0s7.26,9.7,7.84,10.68c.45.76,6.51,4.15,9.34,5.7l1.45.8C292.65,327.24,292.69,327.64,292.71,328.08Z"
                                                style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 274.72px 324.227px;"
                                                id="el94wrlp9rjt" class="animable"></path>
                                            <path d="M258.75,316s3.65-3.06,4.51-3.56,5.35-.49,5.35-.49"
                                                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 263.68px 313.975px;"
                                                id="ele26km23lobq" class="animable"></path>
                                            <path d="M259.93,323l1.12-4.44s3.36-1.78,4.55-2.48a8,8,0,0,1,3-.79"
                                                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 264.265px 319.145px;"
                                                id="elxy88bwlguip" class="animable"></path>
                                            <path
                                                d="M261.45,328.3a49.79,49.79,0,0,1,1.38-5.35c.27-.2,5.35-2.37,5.35-2.37"
                                                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 264.815px 324.44px;"
                                                id="elucjr9hwtcrh" class="animable"></path>
                                            <path d="M254.62,336.38s.44,31.85,1.64,35.21.49,9.5.49,9.5"
                                                style="fill: rgb(79, 201, 201); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 255.789px 358.735px;"
                                                id="el6gj4pfqrjfl" class="animable"></path>
                                            <path d="M285.41,300.19s1.28,11.51,5.17,15.05"
                                                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 287.995px 307.715px;"
                                                id="elay3u0qf0i9" class="animable"></path>
                                            <path d="M221.41,299.54s0,16.69-5,18.62"
                                                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 218.91px 308.85px;"
                                                id="eljt6igmithxf" class="animable"></path>
                                            <path d="M238.62,349.37s3.78,21.32,22.45,22.68"
                                                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 249.845px 360.71px;"
                                                id="el4jeo17cqp4q" class="animable"></path>
                                            <path d="M287.38,348.36s-8.57,6.29-13.66,3.91"
                                                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 280.55px 350.584px;"
                                                id="elm8x4rmplrve" class="animable"></path>
                                            <path d="M220.1,405.49s12.4-7.82,22.42-2.43"
                                                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 231.31px 403.327px;"
                                                id="elw1acnznaid" class="animable"></path>
                                            <circle cx="259.93" cy="377.66" r="1.13"
                                                style="fill: rgb(38, 50, 56); transform-origin: 259.93px 377.66px;"
                                                id="el9xr9e1s6lbt" class="animable"></circle>
                                            <circle cx="256.96" cy="352.27" r="1.13"
                                                style="fill: rgb(38, 50, 56); transform-origin: 256.96px 352.27px;"
                                                id="elx701tozsd3n" class="animable"></circle>
                                            <path
                                                d="M259.93,330.36v7.12c0,2.9,28,27.17,39.3,31.65s25.27,1.32,37.55-2.37,23.63-12.93,19.14-27.17-11.87-27.53-12.13-30.77,2.9-24.79,1.06-28.92S347,268.46,347,268.46"
                                                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 308.426px 319.896px;"
                                                id="elv68aw0mkfu" class="animable"></path>
                                            <path
                                                d="M351.22,326.91c-2.14-5,1.54-11.87,4.44-15.55s14.09,1.6,16.28-1,8.25-11.61,11.15-12.27,4.75-9.49,4.75-9.49"
                                                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 369.21px 307.755px;"
                                                id="elb6ex4b68b2l" class="animable"></path>
                                            <path
                                                d="M345,273.38c-.74-.26,1.79-5.83,3.56-6.71,2-1,3.36,1.2,3.36,1.2l-1.38,2.65s-1.06.68-1.45,0c-.19-.33-.9-.34-1.59-.27S345.92,273.71,345,273.38Z"
                                                style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 348.394px 269.906px;"
                                                id="elpxhnjjflzdm" class="animable"></path>
                                            <path
                                                d="M387.41,290.62c.75.25,2.16-5.69,1.31-7.48-1-2.06-3.39-1.11-3.39-1.11l-.54,2.94s.42,1.19,1.15.89c.35-.14.92.28,1.42.76S386.46,290.3,387.41,290.62Z"
                                                style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 386.887px 286.219px;"
                                                id="elz7192k7wbuj" class="animable"></path>
                                            <path
                                                d="M324.61,222.63s3.33,6.13-4.08,6.87c-5.45.54-10.09,1.68-13.2,5.26,1.33-3.71,3.14-6.75,8.13-7.12,0,0-7.46,0-11.74,3.62a11.1,11.1,0,0,1,.87-3.25c2.23-4.81,4.08-4.81,11.12-10.74s1.11-13.44-1.48-20.44a9.75,9.75,0,0,1,2.59-11.07s-10,4.72-7.78,11.07-12.23,11.91-12.23,11.91,9.26-5.56.74-16.68-13.34-15.2-9.64-20c0,0-9.33,7.78-6.89,16.78-.67-1.78-1.78-4.84-3.67-10.11-3.12-8.71-10.91-9.27-10.91-9.27s11.25,5.82,7.23,15.2a6.71,6.71,0,0,1-1.26,1.94,6.18,6.18,0,0,0-.16-4.46c-2.33-5.86-7.69-5.08-7.69-5.08s7.78,1.48,6.86,7a5.25,5.25,0,0,1-3,4.13,40.27,40.27,0,0,0-4.58-3.88,8.87,8.87,0,0,0-.35-6c-1.86-4.38-6.46-5.42-11.35-5.25a37.24,37.24,0,0,0-5-2.35c-18.53-7.23-32.62,6.3-32.62,6.3s12.94-10.38,26.21-5.37a14.8,14.8,0,0,1,4.15,2.3l-2.54.48c-7,1.34-8.44-1.67-10.72-2s-5-1.13-6.62,3c0,0,3.34-3.69,6.62-1.1a9.82,9.82,0,0,0,1.87,1.1c-9.83-1.92-14.18,2.69-20.63,5.76-7.42,3.52-16.87-.93-12.79-5,3.21-3.21,6.06-2.63,7.14-2.23a8.08,8.08,0,0,0-9.18,2.05c-4.26,4.63.93,10.93,9.27,9.26a7.74,7.74,0,0,1-7.6,3.9c-5.56-.37-10.38-5.75-13.9-3.34,0,0,3.33-.93,6.67,2.22,1.72,1.63,2.07,4.54,4.36,6.49a17,17,0,0,1-3.15.42c-3.43-4.22-2.09-6.82-7.88-7.15-6.49-.37-5.75,4.83-3.4,5.07,0,0-3-3.19,1.33-4s5.74-.43,7.76,5c.11.29.24.57.36.85a3.59,3.59,0,0,1-2.9-3.45s0,9.53,14.08,11.83c0,0-.24.11-.66.27a18.48,18.48,0,0,1-8.36-.27,8.18,8.18,0,0,1-5.8-6.27,9.3,9.3,0,0,0,0,4.7c-1,.85-2.38,3,2.55,6.72a9.53,9.53,0,0,0,2.59,1.35,25.37,25.37,0,0,0,9.53,10.87,27.72,27.72,0,0,1-8.41-4.69c-14.33-11.12-8.71-19.32-8.71-19.32s-8.22,9.56,8.09,20.44a57.38,57.38,0,0,0,12.69,6.64,26.34,26.34,0,0,1-12.07-4.19c-8.16-5.42-15.57-2.59-17.42,4.33,0,0,5.09-9.75,14.4-2.34,1.84,1.46,3.49,2.8,5,4a2.67,2.67,0,0,0-2.51,2.28c-.63,3.79,4.7,8.41,15.69,8.78.68,0,1.3,0,1.89,0-2.84,1.56-7.66,3.35-12.63,1.22-7.79-3.33-13,9.2-.75,12.76,0,0-8.52-4.66-1.48-6.49s12.6,8.12,23.35,6.49l-.22.35a8.53,8.53,0,0,1-2.94,1.72c-5.24,2-4.39,8.28,0,10.25,0,0-3.39-2.92-2.27-5.66.61-1.5,2-1.51,3.53-1.77a7.55,7.55,0,0,0,1.16,5.85c3.34,4.67,9.16,3.2,9.16,3.2s-4.57-2.68-1.67-5.24c0,0,3.14,1.35,7.89,2.84a4.56,4.56,0,0,1-1.54.66c-4.83,1.12-2.72,4-1.86,5-1-1.44-.29-5.55,6.31-3.26,2.94,1,4.65.65,5.66-.12,5.92,1.28,12.6,2.08,18.6,1.26,1.47.75,4.8,1.64,11.78.34,8.34-1.55,9.54-7.29,9.68-9.67,3.32,2.4,9.41-.34,16.67-1.74,6.47-1.24,6.86-5.25,7.34-9.35,3.24-4.9,6.43-10.37,13.54-10.84C330.91,233.57,324.61,222.63,324.61,222.63ZM282,191.32l-.07-.15A1,1,0,0,1,282,191.32Zm-21.12-10.56a3.34,3.34,0,0,1-.26,1.39,15.22,15.22,0,0,0-4.22-6C258.93,176.24,260.77,177.35,260.86,180.76Zm-13.22-3.22c.07.16.14.32.2.49-.48,0-1-.05-1.44-.05a24.23,24.23,0,0,0-4.21.39c-.85-.43-1.73-.83-2.62-1.19A29.2,29.2,0,0,0,247.64,177.54ZM189.81,206c-1.93-1.51-1.78-3-1.4-4a6.38,6.38,0,0,0,3.42,3.58c.13.42.29.93.51,1.51A6,6,0,0,1,189.81,206Zm5.81,22.8a2.19,2.19,0,0,1,1.71-2.76c5.11,4,9.06,6.69,14.35,8.15C205.7,235.43,196.17,231.65,195.62,228.76Zm78.05,35.59a21.94,21.94,0,0,1-7.67.28,23,23,0,0,0,2.88-1.07c7-3.2,11-6.22,13.35-8.56a4.73,4.73,0,0,0,1,1.1C282.94,258.19,281.36,263,273.67,264.35Zm30.8-13.11c-1.9,1.32-5.56.74-9.14,2.6s-6.8,2.34-9.27-.13a2.87,2.87,0,0,1-.81-3c0-.08,0-.13.05-.18l0-.08c.25.1,12.28,4.92,17.78,0a23.6,23.6,0,0,0,3.57-4.32C306.53,248.42,305.81,250.32,304.47,251.24Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 251.802px 218.082px;"
                                                id="elbggtqalw14k" class="animable"></path>
                                            <path
                                                d="M207.21,173.89a4.47,4.47,0,0,1,.46.2A2.78,2.78,0,0,0,207.21,173.89Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 207.44px 173.99px;"
                                                id="elhcktbr3g4tt" class="animable"></path>
                                            <path d="M231.62,267.92s-.12-.11-.3-.31A1.48,1.48,0,0,0,231.62,267.92Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 231.47px 267.765px;"
                                                id="el14z44do8dbt" class="animable"></path>
                                            <path
                                                d="M242.29,279.72c1.63-5,1-10.25-.27-14.76h0a45.26,45.26,0,0,0-5.26-11.54H266.9a35.93,35.93,0,0,0-2.37,6.12A38.73,38.73,0,0,0,263,269.2a34,34,0,0,0,.84,9"
                                                style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 251.83px 266.57px;"
                                                id="el7c8r3vcqwvg" class="animable"></path>
                                            <path
                                                d="M264.53,259.53A38.73,38.73,0,0,0,263,269.2c-3,2.61-6.8,5.14-10.11,4.44-6.23-1.31-10.64-8.24-10.91-8.68h0Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 253.255px 266.644px;"
                                                id="eljzaijreseq8" class="animable"></path>
                                            <path
                                                d="M274.34,236.49s3.72-2.58,5.94-1.24-3.33,9.92-3.58,11.68-2.84,4.15-4.39,3.45S270.37,240.23,274.34,236.49Z"
                                                style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 276.005px 242.685px;"
                                                id="elkzeo5hoq5gf" class="animable"></path>
                                            <path
                                                d="M230.84,236.49s-3.72-2.58-6-1.24,3.34,9.92,3.58,11.68,2.85,4.15,4.39,3.45S234.81,240.23,230.84,236.49Z"
                                                style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 229.114px 242.685px;"
                                                id="elabarlbbgzpv" class="animable"></path>
                                            <path
                                                d="M251.51,206.11c31.32,0,22.42,40.23,20.23,46.22-2.34,6.38-13.59,19.13-19.3,19.13-5.87,0-17.88-13.22-19.27-19.68C232.39,248.15,222.23,206.11,251.51,206.11Z"
                                                style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 252.713px 238.785px;"
                                                id="elij4un7bzb4j" class="animable"></path>
                                            <path
                                                d="M263.88,244.88a1.66,1.66,0,1,1-1.61-2A1.87,1.87,0,0,1,263.88,244.88Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 262.241px 244.54px;"
                                                id="elpjvcat740qe" class="animable"></path>
                                            <path
                                                d="M244.68,244.88a1.66,1.66,0,1,1-1.61-2A1.87,1.87,0,0,1,244.68,244.88Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 243.041px 244.54px;"
                                                id="eli4qbghtdasj" class="animable"></path>
                                            <path d="M257.63,236.74s5.07-4,9.27,1"
                                                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 262.265px 236.483px;"
                                                id="el0peyse49j1z" class="animable"></path>
                                            <path d="M246.51,237.24s-3.21-4.2-9.76,0"
                                                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 241.63px 236.307px;"
                                                id="eldkv1k9x7wj" class="animable"></path>
                                            <path d="M253.56,249.4c-.13,1.23,0,4.81.86,5.56s.29,2.47-1.71,2.47"
                                                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 253.759px 253.415px;"
                                                id="elpgnoo1hrzbs" class="animable"></path>
                                            <path
                                                d="M258.83,260.07c-5.07,1.73-12.24,0-12.24,0a5.62,5.62,0,0,0,5.32,4.08c4.32.12,5.31-2.72,5.31-2.72"
                                                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 252.71px 262.112px;"
                                                id="elby6i3whrz1h" class="animable"></path>
                                            <path
                                                d="M263.88,223c-1.09-3.93-21.32-2.35-25.27,0s-7,12.55-7.22,18.57c0,0-2.17-.16-3.9-15.85s12.27-26.69,26.27-25.83,23.52,16.68,24.63,24.22-4.85,20.78-4.85,20.78a24.81,24.81,0,0,0-2.33-10.52C268.75,229.54,265.18,227.68,263.88,223Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 252.936px 222.366px;"
                                                id="ele151a1ldj5n" class="animable"></path>
                                            <g id="ele3g7maqlp9">
                                                <g style="opacity: 0.4; transform-origin: 254.902px 206.048px;"
                                                    class="animable">
                                                    <path
                                                        d="M262.27,218.12a1.45,1.45,0,0,0,1.06-.57,3.14,3.14,0,0,0,.54-1.1,8.43,8.43,0,0,0,.24-2.46,24.73,24.73,0,0,0-.77-4.91,12.29,12.29,0,0,0-5.57-7.75,19.38,19.38,0,0,0-9.43-2.33,47,47,0,0,0-9.89.92c-1.63.28-3.29.63-5,.86a37.36,37.36,0,0,1-5.07.37,28.54,28.54,0,0,1-10-1.59,17.47,17.47,0,0,1-4.51-2.4,9.1,9.1,0,0,1-3.18-4,5.08,5.08,0,0,1,.84-4.91,10.31,10.31,0,0,1,4-3,10.79,10.79,0,0,0-3.8,3.15,4.76,4.76,0,0,0-.6,4.6,8.57,8.57,0,0,0,3.1,3.66,16.52,16.52,0,0,0,4.39,2.18,29.53,29.53,0,0,0,9.75,1.41,35.52,35.52,0,0,0,4.94-.41c1.64-.23,3.26-.6,4.93-.89a47.38,47.38,0,0,1,10.09-.84c3.37.14,6.89.68,9.81,2.58a12.5,12.5,0,0,1,2,1.58l.87,1a12.55,12.55,0,0,1,.76,1,14.82,14.82,0,0,1,2,4.7,24.38,24.38,0,0,1,.56,5,8.56,8.56,0,0,1-.36,2.51,3.23,3.23,0,0,1-.62,1.1A1.5,1.5,0,0,1,262.27,218.12Z"
                                                        style="fill: rgb(255, 255, 255); transform-origin: 237.362px 201.685px;"
                                                        id="elvucyn9pxe2" class="animable"></path>
                                                    <path
                                                        d="M254.81,219a5.07,5.07,0,0,0,2.77-3.46,5.7,5.7,0,0,0-1.3-4.2,4.12,4.12,0,0,0-3.87-1.57,19.32,19.32,0,0,0-4.48.88c-5.9,1.82-11.6,4.38-17.6,6.18s-12.41,2.77-18.61,1.42a27.65,27.65,0,0,1-8.72-3.49,22.11,22.11,0,0,1-3.64-3,10.34,10.34,0,0,1-2.51-3.92c1.22,2.9,3.81,4.89,6.41,6.46a26.79,26.79,0,0,0,8.61,3.15c6.06,1.16,12.29.21,18.18-1.62,3-.87,5.88-1.91,8.8-3s5.83-2.19,8.87-3a20.34,20.34,0,0,1,4.68-.77,6.18,6.18,0,0,1,2.39.38,3.8,3.8,0,0,1,1.9,1.54,6.13,6.13,0,0,1,1.15,4.53A5.08,5.08,0,0,1,254.81,219Z"
                                                        style="fill: rgb(255, 255, 255); transform-origin: 227.376px 213.42px;"
                                                        id="elui3p79qele" class="animable"></path>
                                                    <path
                                                        d="M266.9,221.2a50.58,50.58,0,0,0,5.32,6.78,27.69,27.69,0,0,0,6.57,5.42,10.83,10.83,0,0,0,8,1.44,9.52,9.52,0,0,0,1.92-.74c.62-.31,1.22-.72,1.82-1.07s1.14-.83,1.71-1.24a20.53,20.53,0,0,0,1.5-1.45,14.41,14.41,0,0,0,2.35-3.45c.65-1.25,1.17-2.61,1.89-3.91a12.39,12.39,0,0,1,2.83-3.46,13.57,13.57,0,0,1,1.85-1.24c.32-.18.64-.36,1-.53l1-.43,2-.84a11.88,11.88,0,0,0,1.88-1,4.34,4.34,0,0,0,.87-.6c.27-.22.56-.42.82-.65l.72-.77a6.44,6.44,0,0,0,.61-.84,7.09,7.09,0,0,0,1.11-4,9.61,9.61,0,0,0-1.06-4.12,9.27,9.27,0,0,1,1.32,4.11,7.41,7.41,0,0,1-.95,4.26,7.52,7.52,0,0,1-.62.93l-.74.83c-.26.26-.56.48-.84.72a4.84,4.84,0,0,1-.9.66,27,27,0,0,1-3.9,2l-1,.44c-.31.17-.61.36-.91.53a13.83,13.83,0,0,0-1.72,1.19,11.25,11.25,0,0,0-2.58,3.23c-.67,1.23-1.17,2.58-1.83,3.9a15.73,15.73,0,0,1-2.47,3.7c-.49.56-1.08,1-1.62,1.53s-1.18.9-1.81,1.28-1.25.77-1.92,1.1a10.37,10.37,0,0,1-2.12.79,11.35,11.35,0,0,1-8.58-1.66,28.23,28.23,0,0,1-6.56-5.75A45.68,45.68,0,0,1,266.9,221.2Z"
                                                        style="fill: rgb(255, 255, 255); transform-origin: 289.927px 220.218px;"
                                                        id="el14gaz8yo9nop" class="animable"></path>
                                                    <path
                                                        d="M269.86,217.12a51.5,51.5,0,0,0,5.95,2.25,20.18,20.18,0,0,0,6.14,1.11,5.25,5.25,0,0,0,2.81-.72,6.14,6.14,0,0,0,1.85-2.27c.88-1.82,1.25-4,2-6a12,12,0,0,1,3.86-5.28l.65-.5.58-.47a6.15,6.15,0,0,0,1-1.08,6.08,6.08,0,0,0,1-2.75,3.21,3.21,0,0,0,.05-.76c0-.25,0-.5,0-.76a9.78,9.78,0,0,0-.28-1.51,11.51,11.51,0,0,0-1.18-2.86,9.36,9.36,0,0,0-4.51-4.21,9.22,9.22,0,0,1,4.93,4,11.83,11.83,0,0,1,1.37,2.95,10.76,10.76,0,0,1,.37,1.61c0,.27,0,.55.05.83a2.9,2.9,0,0,1,0,.83,6.33,6.33,0,0,1-1.07,3.18,6.83,6.83,0,0,1-1.15,1.25l-.65.54-.6.48a11,11,0,0,0-3.49,4.93c-.79,1.91-1.17,4-2.16,6a7,7,0,0,1-2.18,2.57,5.65,5.65,0,0,1-3.29.78,20.93,20.93,0,0,1-6.3-1.42A42.37,42.37,0,0,1,269.86,217.12Z"
                                                        style="fill: rgb(255, 255, 255); transform-origin: 283.195px 206.292px;"
                                                        id="eld9hso1rmhat" class="animable"></path>
                                                    <path
                                                        d="M233,226a24.22,24.22,0,0,1-7.11,4.8,22.84,22.84,0,0,1-8.42,2,20.75,20.75,0,0,1-8.55-1.37A26.33,26.33,0,0,1,205,229.6a5.18,5.18,0,0,1-.91-.58l-.87-.62c-.59-.42-1.16-.84-1.73-1.27,1.28.65,2.45,1.46,3.74,2a25.82,25.82,0,0,0,3.93,1.54,22.92,22.92,0,0,0,8.25,1.1,25.66,25.66,0,0,0,8.18-1.72c.64-.27,1.3-.53,1.94-.82s1.27-.61,1.88-1A25.87,25.87,0,0,0,233,226Z"
                                                        style="fill: rgb(255, 255, 255); transform-origin: 217.245px 229.414px;"
                                                        id="ell7rfkosvzxf" class="animable"></path>
                                                    <path
                                                        d="M266.9,210.26a15.37,15.37,0,0,0,1.14-12.9c-.59-2.16-2.46-3.42-4.43-4.43a36.45,36.45,0,0,0-6.25-2.38,119.62,119.62,0,0,0-13.15-3.1c-2.21-.43-4.44-.81-6.67-1.16s-4.46-.71-6.7-1c4.52.25,9,.77,13.51,1.46a103.41,103.41,0,0,1,13.3,2.89,38.72,38.72,0,0,1,6.38,2.54,13.41,13.41,0,0,1,2.9,2,5.61,5.61,0,0,1,1.16,1.39,8.77,8.77,0,0,1,.68,1.64,14.86,14.86,0,0,1-1.87,13.15Z"
                                                        style="fill: rgb(255, 255, 255); transform-origin: 250.187px 197.825px;"
                                                        id="el0n7m36hs0itc" class="animable"></path>
                                                    <path
                                                        d="M260.87,187.84a24.31,24.31,0,0,0,1.9-5,8.73,8.73,0,0,0,.28-2.59,5.47,5.47,0,0,0-.78-2.49,4.39,4.39,0,0,1,1.16,2.45,7.27,7.27,0,0,1-.17,2.75,11.58,11.58,0,0,1-.95,2.56A12.69,12.69,0,0,1,260.87,187.84Z"
                                                        style="fill: rgb(255, 255, 255); transform-origin: 262.18px 182.8px;"
                                                        id="elr5ggubrvvm" class="animable"></path>
                                                    <path
                                                        d="M237.42,177.18c.92.89,1.86,1.76,2.82,2.59a32.15,32.15,0,0,0,3,2.36,19.69,19.69,0,0,0,3.22,2,11.56,11.56,0,0,0,3.6,1.14,9.13,9.13,0,0,1-3.76-.79,18.3,18.3,0,0,1-3.36-1.91,27,27,0,0,1-2.94-2.49A24.88,24.88,0,0,1,237.42,177.18Z"
                                                        style="fill: rgb(255, 255, 255); transform-origin: 243.74px 181.225px;"
                                                        id="elebr60o064ul" class="animable"></path>
                                                    <path
                                                        d="M251.83,176.16a13.91,13.91,0,0,1,1.8,1.88,15.35,15.35,0,0,1,1.46,2.18,12.5,12.5,0,0,1,1,2.42,7.64,7.64,0,0,1,.28,2.6,13.68,13.68,0,0,0-.64-2.48,21,21,0,0,0-1.09-2.3A37.4,37.4,0,0,0,251.83,176.16Z"
                                                        style="fill: rgb(255, 255, 255); transform-origin: 254.108px 180.7px;"
                                                        id="el5jo45yzckst" class="animable"></path>
                                                    <path
                                                        d="M277.7,182.81a40.5,40.5,0,0,1,1.25,6.85,35.59,35.59,0,0,1,0,7,16.62,16.62,0,0,1-2,6.78,8.12,8.12,0,0,1-2.43,2.62,6.73,6.73,0,0,1-3.35,1,7.24,7.24,0,0,0,5.11-4,18.8,18.8,0,0,0,1.68-6.51,53.85,53.85,0,0,0,.18-6.85c0-1.15-.09-2.3-.19-3.45S277.81,184,277.7,182.81Z"
                                                        style="fill: rgb(255, 255, 255); transform-origin: 275.146px 194.935px;"
                                                        id="el77rtt1542a4" class="animable"></path>
                                                </g>
                                            </g>
                                        </g>
                                        <g id="freepik--Blanket--inject-253" class="animable"
                                            style="transform-origin: 244.84px 344.069px;">
                                            <path
                                                d="M429.68,390.63a134.66,134.66,0,0,1-39.16,42c-2.67,1.86-5.42,3.64-8.23,5.3h0q-5.57,3.33-11.46,6.14t-12.2,5.11A149.84,149.84,0,0,1,325.3,457a178.35,178.35,0,0,1-27.5,1.17c-29.87-.93-60.5-8.62-89-20.23q-6.42-2.61-12.69-5.48a337.77,337.77,0,0,1-45.4-25.13l-.32-.21q-8-5.3-15.36-10.84a230.41,230.41,0,0,1-30.72-28l-.38-.42c-.52-.56-1-1.12-1.54-1.69q-6.28-7-12.09-14.54a233.27,233.27,0,0,1-13.67-19.79q-1.48-2.38-2.89-4.81A200.45,200.45,0,0,1,60,298.85c1.3-7.81,3.08-14.4,3.54-16.53,1.13-5.16-6-44.27,5.75-47.56s40.74-4.9,40.74-4.9-13.72,13.71-12.13,21.38a20.72,20.72,0,0,1,.42,3.5c.26,6.15-1.93,11.33-1.48,14.51A20.06,20.06,0,0,0,98,275.2c1.64,4.73,5.61,10.95,15.19,13.36a23.21,23.21,0,0,1,3.53,1.18c13.66,5.68,18.55,22.08,17.57,29.35-1,7.77,4.91,37,17.09,49l.47.45c12.51,11.7,17.19,15.35,32,16.43,3.07.22,7,.43,11.39.89,16.82,1.7,40.62,6.9,50.29,29.59a28.23,28.23,0,0,0,2.4,4.5c.21.32.43.64.65.95,10.65,14.89,33.08,13.86,48.52,2.05A40.71,40.71,0,0,0,311.9,401.3c8.14-29.91,23.69-8.22,46.77-11.68a32.37,32.37,0,0,0,4-.85c21.27-5.85,28.76-22.12,30.61-27.18.36-1,.51-1.52.51-1.52s8.74-13.06,23.71-17.28l.55-.16S427.65,373.72,429.68,390.63Z"
                                                style="fill: rgb(255, 255, 255); transform-origin: 244.84px 344.069px;"
                                                id="elkjuqdbaxall" class="animable"></path>
                                            <g style="clip-path: url(&quot;#freepik--clip-path-10--inject-253&quot;); transform-origin: 244.84px 344.035px;"
                                                id="el65bp847qcsy" class="animable">
                                                <g id="elu85ko9b440b">
                                                    <path
                                                        d="M71.11,307.72c3.53,6.59,3.5,13.81,2.61,19.35A200.45,200.45,0,0,1,60,298.85c1.3-7.81,3.08-14.4,3.54-16.53,1.13-5.16-6-44.27,5.75-47.56s40.74-4.9,40.74-4.9-13.72,13.71-12.13,21.38a20.72,20.72,0,0,1,.42,3.5c-2.88,1.19-6,2.43-8.43,3.28-6.24,2.17-16.32,1-18.8,9.11s-2.54,27.12-2.54,27.12S64.1,294.63,71.11,307.72Z"
                                                        style="opacity: 0.1; transform-origin: 85.015px 278.465px;"
                                                        class="animable"></path>
                                                </g>
                                                <g id="elkl2uccj4mll">
                                                    <path
                                                        d="M84.22,296.49s-.34-9.78,3.42-9.67c2,.06,6.5-5.91,10.38-11.62,1.64,4.73,5.61,10.95,15.19,13.36a23.21,23.21,0,0,1,3.53,1.18C95.3,304.09,84.22,296.49,84.22,296.49Z"
                                                        style="opacity: 0.1; transform-origin: 100.476px 286.85px;"
                                                        class="animable"></path>
                                                </g>
                                                <g id="elx3uu3w2lug">
                                                    <path
                                                        d="M195.25,385.85c-1,3,.37,6.8-7.08,6.82-12.43,0-23.79,7.94-26.52,10.39-1.46,1.3-6.7,2.89-11.28,4.1q-8-5.3-15.36-10.84a230.41,230.41,0,0,1-30.72-28c3.25-3.49,7.7-8.36,8.4-9.58,1.12-2,2.44-13.48,2.69-17.64S121,328.36,121,328.36C127.6,334,130.16,369,142.82,369a41.18,41.18,0,0,0,8.58-.92l.47.45c12.51,11.7,17.19,15.35,32,16.43C186.93,385.18,190.85,385.39,195.25,385.85Z"
                                                        style="opacity: 0.1; transform-origin: 149.77px 367.76px;"
                                                        class="animable"></path>
                                                </g>
                                                <g id="eltkw548vceh">
                                                    <path
                                                        d="M319.26,396.34s-5.35,18.64-18.47,25.38a14,14,0,0,1-3.68,1.22c-15.44,11.81-37.87,12.84-48.52-2.05-.41,6.24.57,14.51,7.27,19.47a43,43,0,0,0,8.63,4.91c-11.21-3.83-23.58-9.19-27.7-14.89-8.33-11.52-22.85-2.17-27.94-1.41S195.54,410.63,180,405.63c.19.49,6.59,16,12.37,20.12a9.06,9.06,0,0,1,3.75,6.75q6.27,2.87,12.69,5.48c28.52,11.61,59.15,19.3,89,20.23,0,0,25.42-34.88,27-43.26S319.26,396.34,319.26,396.34Zm-41.67,52.94c3.85.8,6.68,1.17,7.51,1.63C285.72,451.25,282.57,450.63,277.59,449.28Z"
                                                        style="opacity: 0.1; transform-origin: 252.519px 427.275px;"
                                                        class="animable"></path>
                                                </g>
                                                <g id="elecnwhvtwhfu">
                                                    <path
                                                        d="M388.55,406.41c-2.06,4.53-10.74,8.48-11.07,17.67-.18,5-10,16.05-18.85,25.13A149.84,149.84,0,0,1,325.3,457c16.28-14.26,35.78-40.38,34.32-42.09-2-2.3-2-6.79.39-9.46,1.51-1.7,0-10-1.34-15.87a32.37,32.37,0,0,0,4-.85c21.27-5.85,28.76-22.12,30.61-27.18C394.41,379.57,390.15,402.89,388.55,406.41Z"
                                                        style="opacity: 0.1; transform-origin: 359.384px 409.275px;"
                                                        class="animable"></path>
                                                </g>
                                                <g id="elz81ut37i9e">
                                                    <path
                                                        d="M429.68,390.63a134.66,134.66,0,0,1-39.16,42c-2.67,1.86-5.42,3.64-8.23,5.3,4.85-10.71,11.88-26.06,13.55-28.6,2.59-4,17.18-12.66,20.85-16.94,2.41-2.81,1.66-30.74.85-49.62l.55-.16S427.65,373.72,429.68,390.63Z"
                                                        style="opacity: 0.1; transform-origin: 405.985px 390.27px;"
                                                        class="animable"></path>
                                                </g>
                                                <g id="elq0yy0xjce1p">
                                                    <path
                                                        d="M103.91,367.9c-.52-.56-1-1.12-1.54-1.69q-6.28-7-12.09-14.54c3.55-.53,7-1.28,8.73-2.3,4.46-2.61,4.29-16.78,4.29-16.78l3.46,15.27A27.06,27.06,0,0,1,103.91,367.9Z"
                                                        style="opacity: 0.1; transform-origin: 98.9145px 350.245px;"
                                                        class="animable"></path>
                                                </g>
                                            </g>
                                            <path
                                                d="M429.68,390.63a134.66,134.66,0,0,1-39.16,42c-2.67,1.86-5.42,3.64-8.23,5.3h0q-5.57,3.33-11.46,6.14t-12.2,5.11A149.84,149.84,0,0,1,325.3,457a178.35,178.35,0,0,1-27.5,1.17c-29.87-.93-60.5-8.62-89-20.23q-6.42-2.61-12.69-5.48a337.77,337.77,0,0,1-45.4-25.13l-.32-.21q-8-5.3-15.36-10.84a230.41,230.41,0,0,1-30.72-28l-.38-.42c-.52-.56-1-1.12-1.54-1.69q-6.28-7-12.09-14.54a233.27,233.27,0,0,1-13.67-19.79q-1.48-2.38-2.89-4.81A200.45,200.45,0,0,1,60,298.85c1.3-7.81,3.08-14.4,3.54-16.53,1.13-5.16-6-44.27,5.75-47.56s40.74-4.9,40.74-4.9-13.72,13.71-12.13,21.38a20.72,20.72,0,0,1,.42,3.5c.26,6.15-1.93,11.33-1.48,14.51A20.06,20.06,0,0,0,98,275.2c1.64,4.73,5.61,10.95,15.19,13.36a23.21,23.21,0,0,1,3.53,1.18c13.66,5.68,18.55,22.08,17.57,29.35-1,7.77,4.91,37,17.09,49l.47.45c12.51,11.7,17.19,15.35,32,16.43,3.07.22,7,.43,11.39.89,16.82,1.7,40.62,6.9,50.29,29.59a28.23,28.23,0,0,0,2.4,4.5c.21.32.43.64.65.95,10.65,14.89,33.08,13.86,48.52,2.05A40.71,40.71,0,0,0,311.9,401.3c8.14-29.91,23.69-8.22,46.77-11.68a32.37,32.37,0,0,0,4-.85c21.27-5.85,28.76-22.12,30.61-27.18.36-1,.51-1.52.51-1.52s8.74-13.06,23.71-17.28l.55-.16S427.65,373.72,429.68,390.63Z"
                                                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 244.84px 344.069px;"
                                                id="elsx85i2d4dy" class="animable"></path>
                                            <path
                                                d="M63.56,282.32c3.76,21.43,29.61,28.91,34.88,36.77s11.61,43,6.33,45a5.89,5.89,0,0,0-2.4,2.15"
                                                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 85.1579px 324.28px;"
                                                id="elr1skyot7f2n" class="animable"></path>
                                            <path
                                                d="M273.72,450.91s-25.47-6.33-36.93-20.53S214,392.89,203.48,392.69s-32.25-1.38-39.1,7.92c-2.19,3-7.49,5.15-13.69,6.76"
                                                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 212.205px 421.723px;"
                                                id="elt3fk7p6kxb" class="animable"></path>
                                            <path
                                                d="M164.38,400.61c12.13-.86,33.41,17.15,34.64,20.54.8,2.22,6.16,11,9.76,16.83"
                                                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 186.58px 419.28px;"
                                                id="el0lakj7p73fkj" class="animable"></path>
                                            <path d="M73.65,319.09s1.69,5.71,3,12.79"
                                                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 75.15px 325.485px;"
                                                id="elx56mqjkhri" class="animable"></path>
                                            <path
                                                d="M393.83,360.07s0,41.4-5.28,46.34-11.07,11.94-11.07,17.67-23.21,26.3-27.43,26.83"
                                                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 371.94px 405.49px;"
                                                id="eley6z748ysl8" class="animable"></path>
                                            <path
                                                d="M390.52,432.65a21.68,21.68,0,0,1,3.31-8.57C401.74,412,406,405.49,406,405.49s9-.47,15.3-4.19"
                                                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 405.91px 416.975px;"
                                                id="eljwxoz3z8lg" class="animable"></path>
                                            <path
                                                d="M247.94,419.94c-.22,5.65,5,20.42,7.92,20.42s24.21,4.22,34.67,0,31-21.9,31-24.66"
                                                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 284.732px 428.968px;"
                                                id="el1ahsqykv7ly" class="animable"></path>
                                        </g>
                                        <g id="freepik--friend-3--inject-253" class="animable"
                                            style="transform-origin: 374.48px 207.4px;">
                                            <circle cx="419.44" cy="173.14" r="51.68"
                                                style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 419.44px 173.14px;"
                                                id="el5xbh5f2cics" class="animable"></circle>
                                            <circle cx="419.44" cy="173.14" r="45.93"
                                                style="fill: rgb(79, 201, 201); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 419.44px 173.14px;"
                                                id="ellghcpeas7a" class="animable"></circle>
                                            <path
                                                d="M461.3,192.05a45.94,45.94,0,0,1-81.81,3.76,42.38,42.38,0,0,1-1.94-3.8,3.84,3.84,0,0,1,.85-.1v-1.86s1.47.08,3.53.35h0c3.15.41,7.66,1.23,10.4,2.78a6.21,6.21,0,0,1,1.7,1.33l-1.69,3.8L391.11,205a37.5,37.5,0,0,1,7-3.1c6.31-2.5,18.05-4.07,18.05-4.07a10.9,10.9,0,0,1,6.21-9.53,12.19,12.19,0,0,1,1.76-.71l.76-.25c2.48-.79,5.32-1.61,8.2-2.35l.39-.1c2.79-.71,5.6-1.35,8.14-1.79a27.92,27.92,0,0,1,7.86-.56c4.7.74,4.89,8,4.89,8A22,22,0,0,1,461.3,192.05Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 419.425px 200.768px;"
                                                id="el69nx6m58p3l" class="animable"></path>
                                            <path d="M384.59,186.2,381,191.91s4.46,3.9,10,3.9l4.83-9.61"
                                                style="fill: rgb(191, 191, 191); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-miterlimit: 10; transform-origin: 388.415px 191.005px;"
                                                id="elusa53d6p1vs" class="animable"></path>
                                            <path
                                                d="M393.37,189c1.92.17,3.72-1.38,4.56-2.17a11.42,11.42,0,0,0,2-2.51,15.79,15.79,0,0,1,1.71-2.35c.42-.5.87-1,1.29-1.41a33.34,33.34,0,0,1,2.81-2.56s-.35-2-2.16-1.32a5.73,5.73,0,0,0-1.36.82c-.71.56-1.38,1.25-1.94,1.76a2.38,2.38,0,0,1-1.13.7,2.33,2.33,0,0,1-.53,0h-.05l-.2,0a2.27,2.27,0,0,1-1-.47A1.65,1.65,0,0,1,397,179a.23.23,0,0,1-.07-.11,3.45,3.45,0,0,1-.14-.34,7,7,0,0,1-.28-2h0a18.67,18.67,0,0,1,.22-2.93h0c.05-.36.11-.73.18-1.07a23.37,23.37,0,0,1,.6-2.62c.18-.61.36-1.27.52-1.94s.29-1.28.38-1.88c.25-1.75.11-3.13-1.06-3s-1.2.75-1.58,2.25c-.13.53-.29,1.15-.52,1.9a27.71,27.71,0,0,1-1.54,3.79h0q-.11.24-.24.48l-.69-.09c-.07.12-.12-.14-.15-.67h0a32.45,32.45,0,0,1,.13-4.14c.05-.63.12-1.29.21-1.95s.17-1.19.28-1.77c.54-2.92-1.6-2.35-2.25-1.56a7.57,7.57,0,0,0-.76,3c-.09.65-.17,1.33-.27,2-.05.32-.1.63-.16.92-.23,1.23-.46,2.49-.62,3.37l-.06.34-.9.22c0-.14-.08-.28-.11-.42h0a21.86,21.86,0,0,1-.62-3.75c-.06-.87,0-1.55-.07-2.09,0-1-.12-1.51-.86-1.76s-1.36.73-1.62,2a9.82,9.82,0,0,0-.14,3.08h0a3.73,3.73,0,0,0,.1.54,10.88,10.88,0,0,1,.16,2.81c0,.17,0,.37,0,.56l-.56.5c-.11-.25-.21-.5-.3-.73h0a21,21,0,0,1-.78-2.39h0a17.29,17.29,0,0,0-.57-2,1,1,0,0,0-.88-.79c-.69-.06-1,.78-1,1.83a8.69,8.69,0,0,0,.19,1.9,6.29,6.29,0,0,0,.44,1.35,11.38,11.38,0,0,1,.67,2.58c.06.35.12.71.17,1.07.2,1.3.34,2.51.38,2.93,0,.1,0,.16,0,.16-.07,1-.11,1.79-.11,2.52a11.39,11.39,0,0,0,.95,5c.34.83,1.5,1.47,2.94,1.94"
                                                style="fill: rgb(191, 191, 191); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-miterlimit: 10; transform-origin: 393.36px 174.863px;"
                                                id="el7t25dubtb75" class="animable"></path>
                                            <path d="M397,178.92s-4.15-.78-5.84,2.66"
                                                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 394.08px 180.212px;"
                                                id="elzna3f4aq04" class="animable"></path>
                                            <path
                                                d="M423.35,198.54s9.14-7.19,20.85-4c0,0,0,2.32-8.66,6.88a101.6,101.6,0,0,0-9.3,5.66S421.28,201.07,423.35,198.54Z"
                                                style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-miterlimit: 10; transform-origin: 433.522px 200.402px;"
                                                id="el8ozlp4jv8lg" class="animable"></path>
                                            <path
                                                d="M444.2,194.51c-4.16,6-18,4.19-18,4.19a41.51,41.51,0,0,0-.41-7.77,14.37,14.37,0,0,0-1.7-5.3,2.49,2.49,0,0,0-.32-.45s20.38-14.33,18.36-8S444.2,194.51,444.2,194.51Z"
                                                style="fill: rgb(191, 191, 191); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-miterlimit: 10; transform-origin: 433.985px 187.261px;"
                                                id="elnrrqsbpxur" class="animable"></path>
                                            <path d="M434.9,182.42s-3.46,7.64-9.07,8.51a14.37,14.37,0,0,0-1.7-5.3Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 429.515px 186.675px;"
                                                id="el31gk3ntxk6l" class="animable"></path>
                                            <path
                                                d="M415.24,153.62s-4.24,1.77-3.23,3.32,1.23,4.78-.16,5.78,2.45,3.63,3.39,3.17S415.24,153.62,415.24,153.62Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 413.604px 159.782px;"
                                                id="elppky5nyfnnn" class="animable"></path>
                                            <path
                                                d="M440.37,178.47a25.25,25.25,0,0,0,3.82-7.62c2.92-9.9-.78-30.37-17.76-25.54-11.68,3.33-14.19,13.94-12.65,21.58s-.56,7,2.47,13.46c1.72,3.69,3.77,8.32,8.27,8.32,3.57,0,11.64-4.73,11.64-7.47"
                                                style="fill: rgb(191, 191, 191); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-miterlimit: 10; transform-origin: 429.233px 166.627px;"
                                                id="el4hc3krmxl2j" class="animable"></path>
                                            <path d="M422.65,163.7s4.29-1,7.18,1.18"
                                                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 426.24px 164.176px;"
                                                id="elczggvy9q5qp" class="animable"></path>
                                            <path d="M417.1,163.49s-2.78-.36-3.73.7"
                                                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 415.235px 163.811px;"
                                                id="elhmia4kursrf" class="animable"></path>
                                            <path d="M418.14,166.63s1,1.9-.88,5.1c-1.83,3-2.59,5.42,1.92,4.38"
                                                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 417.501px 171.493px;"
                                                id="elo3q8ox08xb" class="animable"></path>
                                            <ellipse cx="425.37" cy="168.12" rx="0.87" ry="1.22"
                                                style="fill: rgb(38, 50, 56); transform-origin: 425.37px 168.12px;"
                                                id="elia1zytatx3" class="animable"></ellipse>
                                            <path
                                                d="M417.07,167.84c0,.67-.39,1.22-.87,1.22s-.87-.55-.87-1.22.39-1.21.87-1.21S417.07,167.17,417.07,167.84Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 416.2px 167.845px;"
                                                id="el6o0atxuyt0v" class="animable"></path>
                                            <path
                                                d="M418.43,178.19s4.05,1,6.94-.52a3.92,3.92,0,0,1-3.24,3.47,2.06,2.06,0,0,1-2.66-2.37"
                                                style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 421.9px 179.456px;"
                                                id="elgkxnxfcd4r" class="animable"></path>
                                            <path
                                                d="M414.85,155.16s-3.12-2.39-1.48-5,3.07.49,4.13-2.84,2.61-5.9,5.15-4.92,3.63,1.49,5.64,0,5.4-2.74,6.94-1.19,1.7,4.15,4.78,3.39,2.76-1.94,5.09,1,.62,6.39,2.32,6.69,5.76,2.3,4.27,4.15-3,4.41-1.8,5.6.15,5-1.55,6.24.31,6.09-2,6.93a4.56,4.56,0,0,0-3.24,3.22c-.16.85-2.16,2.32-2.93,2.74s-1.64-.44-1.64-.44,2.87-6-3.63-9.89a7.9,7.9,0,0,0-3.06-7.06c-1.9-1.45-.06-6.74-.93-8.26C429.23,152.62,420.57,159.59,414.85,155.16Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 432.453px 160.892px;"
                                                id="elfmiionzs8om" class="animable"></path>
                                            <path d="M435.54,171.9s.69-6.38,3.55-5.27,2.47,10.36-1.24,10.6"
                                                style="fill: rgb(191, 191, 191); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-miterlimit: 10; transform-origin: 438.256px 171.865px;"
                                                id="eldlapprntcl" class="animable"></path>
                                            <path d="M416.69,199.71s0,4.84,5.21,8.37"
                                                style="fill: none; stroke: rgb(255, 255, 255); stroke-linecap: round; stroke-miterlimit: 10; transform-origin: 419.295px 203.895px;"
                                                id="elilye79zrgpe" class="animable"></path>
                                            <path d="M391.11,206.5s-.2,1.07-.57,2.34"
                                                style="fill: none; stroke: rgb(255, 255, 255); stroke-linecap: round; stroke-miterlimit: 10; transform-origin: 390.825px 207.67px;"
                                                id="eloonbtk0baqh" class="animable"></path>
                                            <path
                                                d="M454.43,192.09a7.63,7.63,0,0,1-1.86,4.84c-1.95,2.23-21.13,9.57-22.74,11.15"
                                                style="fill: none; stroke: rgb(255, 255, 255); stroke-linecap: round; stroke-miterlimit: 10; transform-origin: 442.13px 200.085px;"
                                                id="el3pnu0lbta7v" class="animable"></path>
                                            <path d="M444.67,193.3s3.34-5.09,1.11-7.1"
                                                style="fill: none; stroke: rgb(255, 255, 255); stroke-linecap: round; stroke-miterlimit: 10; transform-origin: 445.609px 189.75px;"
                                                id="elkqayivottfr" class="animable"></path>
                                            <path d="M379.49,195.81s6.3,5.56,11.62,3.15"
                                                style="fill: none; stroke: rgb(255, 255, 255); stroke-linecap: round; stroke-miterlimit: 10; transform-origin: 385.3px 197.688px;"
                                                id="eloae55k0s46h" class="animable"></path>
                                            <path d="M422.85,197.69s-.49-3.47,1.28-4.85"
                                                style="fill: none; stroke: rgb(255, 255, 255); stroke-linecap: round; stroke-miterlimit: 10; transform-origin: 423.459px 195.265px;"
                                                id="eleawrbul9cc" class="animable"></path>
                                            <polyline points="377.55 200.38 277.84 293.34 385.3 211.92"
                                                style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 331.57px 246.86px;"
                                                id="eljko4ad2aitq" class="animable"></polyline>
                                        </g>
                                        <g id="freepik--friend-2--inject-253" class="animable"
                                            style="transform-origin: 201.23px 115.382px;">
                                            <g id="elqqmakyyxppk">
                                                <circle cx="201.23" cy="97.01" r="63.41"
                                                    style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 201.23px 97.01px; transform: rotate(-76.7deg);"
                                                    class="animable"></circle>
                                            </g>
                                            <path
                                                d="M259.39,97a58.16,58.16,0,1,1-58.16-58.16A57.76,57.76,0,0,1,259.39,97Z"
                                                style="fill: rgb(79, 201, 201); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 201.231px 96.9993px;"
                                                id="elehy8fhifwlh" class="animable"></path>
                                            <path
                                                d="M249.13,130a58.16,58.16,0,0,1-85.85,11.08,70.11,70.11,0,0,1,3.55-6.89c2.57-4.18,12.43-4.53,12.43-4.53s3.84-6.8,17.17-8.07,22.13,2.47,22.13,2.47a22.57,22.57,0,0,1,9.19-1.42C231.41,122.8,242.51,127.22,249.13,130Z"
                                                style="fill: rgb(191, 191, 191); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-miterlimit: 10; transform-origin: 206.205px 138.248px;"
                                                id="elu31zjj5wigh" class="animable"></path>
                                            <path
                                                d="M189.37,124.05s-10.68,4.62-10.08,10.13S218.56,143,218.56,143s7.21-7,3.65-13.39S208.56,121.85,189.37,124.05Z"
                                                style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 201.232px 133.036px;"
                                                id="el7nai3sj6nmd" class="animable"></path>
                                            <path
                                                d="M187.79,128.06c3.46-5.43,2.18-15.13-2.17-23.21s22,6.29,22,6.29-.07.7-.11,1.87a57,57,0,0,0,.13,6.57,18.7,18.7,0,0,0,2.65,8.48"
                                                style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 197.713px 115.222px;"
                                                id="el2i8pp5j4rad" class="animable"></path>
                                            <path
                                                d="M207.69,119.58c-5.89-3-8-7.2-8-7.2l7.9.63A57,57,0,0,0,207.69,119.58Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 203.69px 115.98px;"
                                                id="ely2cay1agjzq" class="animable"></path>
                                            <path
                                                d="M212.15,65.82s15.6,5.87,7.6,34.83-46.6-14.17-46.6-14.17-2.37,21.79,2.38,33.05c0,0-11.47,5.29-21.17,2,0,0-2.08-38.35,6.73-49.17S177.9,69.6,177.9,69.6Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 188.089px 94.214px;"
                                                id="el0wgh0uft5y7" class="animable"></path>
                                            <path
                                                d="M184.93,107.28a20.33,20.33,0,0,1-5.05-5.56c-5.14-9-9.69-34.26,21.56-35.82,15.36-.77,19.28,10.79,19.09,22.22,0,1.83,1.71,4.65,1.68,8.89-.06,7.18-2.59,17.46-7.32,18.95-4.44,1.39-16.42-.35-17.15-3.58"
                                                style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 199.205px 91.1531px;"
                                                id="el8m063ln7115" class="animable"></path>
                                            <path d="M207,83.92s-4.95-1.19-7.32,2.17"
                                                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 203.34px 84.9027px;"
                                                id="el2xg2rrpdmwu" class="animable"></path>
                                            <path d="M214.89,82.51s1.41-2.4,4.86,0"
                                                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 217.32px 81.9767px;"
                                                id="elggtq80vpkm" class="animable"></path>
                                            <path d="M212.85,88.07s3.45,5.8,6.9,7.45-3.45,4-3.45,4"
                                                style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 216.783px 93.795px;"
                                                id="ellykizwh9qeh" class="animable"></path>
                                            <path
                                                d="M217.32,103.83a19.11,19.11,0,0,1-10.34,0s1.05,4.82,5.87,5.11,3.29-4.42,3.29-4.42"
                                                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 212.15px 106.391px;"
                                                id="el2l1de51xq13" class="animable"></path>
                                            <path
                                                d="M207.67,89.65a1.27,1.27,0,1,1-1.23-1.58A1.44,1.44,0,0,1,207.67,89.65Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 206.423px 89.34px;"
                                                id="ell8ng4rgyc2o" class="animable"></path>
                                            <path
                                                d="M218.56,88.07a1.27,1.27,0,1,1-1.24-1.59A1.45,1.45,0,0,1,218.56,88.07Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 217.315px 87.75px;"
                                                id="el7xvxu4zhgr5" class="animable"></path>
                                            <path
                                                d="M207.67,62.49S195,58.4,183.44,63.74c-18.76,8.67-14.88,29.7-9.3,38.65,3.18,5.08,9.71,9.75,13.52,8.75,2.9-.76-.12-7.94,3.59-11.6,8.41-8.31,4.26-21.16,4.26-21.16.79.59,2.23,4.13,2.23,4.13a35.14,35.14,0,0,1,3.47-1.66,23.16,23.16,0,0,0-.36-8.44,27.63,27.63,0,0,1,2.87,7.49,35.45,35.45,0,0,1,6.38-1.48c.19-3.36.08-7.16-.95-9.93,0,0,2.5,3.12,3.41,9.68a34.38,34.38,0,0,1,5.11,0,17.16,17.16,0,0,0-.89-7.73s3.07,2.36,4.55,8.25a16.07,16.07,0,0,1,1.87.47C224.78,62.49,207.67,62.49,207.67,62.49Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 196.424px 86.1345px;"
                                                id="elsjw3krnyqsn" class="animable"></path>
                                            <path d="M196,95.71s-.89-5.7-7.81-7.48-4.76,15.86,5,15.45"
                                                style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 190.074px 95.8954px;"
                                                id="elw612jkfw3cq" class="animable"></path>
                                            <path d="M192,134.18a80.2,80.2,0,0,0,18.39,2.59c2.51.07,4.55,2.73,4.55,2.73"
                                                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 203.47px 136.84px;"
                                                id="el054aip60ilb6" class="animable"></path>
                                            <path
                                                d="M217.32,138.81l-.17-1.82a4.12,4.12,0,0,1,1.59-3.66,12.46,12.46,0,0,0,3.47-3.68"
                                                style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 219.671px 134.23px;"
                                                id="elhxighg9u5y" class="animable"></path>
                                            <polyline points="222.03 155.16 234.98 210.05 208.85 158.31"
                                                style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 221.915px 182.605px;"
                                                id="el9th0brx40mu" class="animable"></polyline>
                                        </g>
                                        <g id="freepik--friend-1--inject-253" class="animable"
                                            style="transform-origin: 113.223px 257.43px;">
                                            <g id="eldbd26deoa4j">
                                                <circle cx="75.72" cy="257.43" r="53.93"
                                                    style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 75.72px 257.43px; transform: rotate(-80.69deg);"
                                                    class="animable"></circle>
                                            </g>
                                            <path
                                                d="M124.46,257.43a48.74,48.74,0,1,1-48.74-48.74A48.6,48.6,0,0,1,124.46,257.43Z"
                                                style="fill: rgb(79, 201, 201); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 75.7201px 257.43px;"
                                                id="el8fkokhcihos" class="animable"></path>
                                            <path
                                                d="M107.33,294.52a48.73,48.73,0,0,1-68.6-5.37A86,86,0,0,1,60.4,285q2.9-.18,5.91-.12A87.11,87.11,0,0,1,78,286c1.16.17,2.32.37,3.46.59A130,130,0,0,1,107.33,294.52Z"
                                                style="fill: rgb(79, 201, 201); transform-origin: 73.03px 295.513px;"
                                                id="el6vq9dom87tr" class="animable"></path>
                                            <g style="clip-path: url(&quot;#freepik--clip-path-11--inject-253&quot;); transform-origin: 73.03px 295.513px;"
                                                id="ellaocsmehf7s" class="animable">
                                                <g id="elabpm4lu3xal">
                                                    <path
                                                        d="M107.33,294.52a48.73,48.73,0,0,1-68.6-5.37A86,86,0,0,1,60.4,285q2.9-.18,5.91-.12A87.11,87.11,0,0,1,78,286c1.16.17,2.32.37,3.46.59A130,130,0,0,1,107.33,294.52Z"
                                                        style="fill: rgb(255, 255, 255); opacity: 0.6; transform-origin: 73.03px 295.513px;"
                                                        class="animable"></path>
                                                </g>
                                            </g>
                                            <path
                                                d="M107.33,294.52a48.73,48.73,0,0,1-68.6-5.37A86,86,0,0,1,60.4,285q2.9-.18,5.91-.12A87.11,87.11,0,0,1,78,286c1.16.17,2.32.37,3.46.59A130,130,0,0,1,107.33,294.52Z"
                                                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 73.03px 295.513px;"
                                                id="elc4nmkuzgbzb" class="animable"></path>
                                            <path
                                                d="M58.94,287.65s7,10.09,19,8.71c6.62-.77,5.94-5.87,5.94-5.87a4.88,4.88,0,0,1-2-2.56c-.71-1.81-1-4.76.67-9.37,0-.13.09-.27.14-.4,1.88-5.05-20.77-12.07-20.77-12.07S64.68,279.15,58.94,287.65Z"
                                                style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 71.4199px 281.29px;"
                                                id="elftomlzg8o6" class="animable"></path>
                                            <path d="M69.91,275.08s4.2,10.47,12,12.85c-.71-1.81-1-4.76.67-9.37Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 76.245px 281.505px;"
                                                id="eldmgfkhc7p1a" class="animable"></path>
                                            <path
                                                d="M67.84,272.62c-.53,4.49,10.91,11.28,17.6,11.26,3.07,0,7.31-5.91,9.1-14.62.91-4.4-1.78-8.71.4-14.84,1.86-5.24-1.78-20.88-17.21-22.15C55.68,230.44,53.11,254.08,62.87,270"
                                                style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 76.4208px 258.025px;"
                                                id="elcgzsd46ppek" class="animable"></path>
                                            <path d="M95.38,253.23a5.17,5.17,0,0,0-5.39-2"
                                                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 92.685px 252.159px;"
                                                id="el6ar09h9147r" class="animable"></path>
                                            <path d="M82.67,251.11s-4.55-.45-7.31,2.12"
                                                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 79.015px 252.155px;"
                                                id="el3kuc7uxd3qm" class="animable"></path>
                                            <path
                                                d="M88.81,254.22c-2.08,8.21,4,9.1,3.88,10.78-.22,2.13-4.77,3.46-4.77,3.46"
                                                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 90.3059px 261.34px;"
                                                id="elv4lw7fy10pi" class="animable"></path>
                                            <path
                                                d="M79.9,258.23c0,.68.4,1.23.89,1.23s.89-.55.89-1.23-.39-1.24-.89-1.24S79.9,257.55,79.9,258.23Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 80.79px 258.225px;"
                                                id="elbz5gjfpq0hq" class="animable"></path>
                                            <path
                                                d="M90.69,258.23c0,.68.4,1.23.89,1.23s.89-.55.89-1.23-.39-1.24-.89-1.24S90.69,257.55,90.69,258.23Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 91.58px 258.225px;"
                                                id="el76yivgtv13b" class="animable"></path>
                                            <path d="M88.71,272.32s-5.24.69-7.92-2.08"
                                                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 84.75px 271.318px;"
                                                id="elypan8seh748" class="animable"></path>
                                            <path d="M81.68,271a4,4,0,0,0,3.07,3.22c2.77.69,2.67-1.8,2.67-1.8"
                                                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 84.5502px 272.67px;"
                                                id="el2ktvgkucayu" class="animable"></path>
                                            <path
                                                d="M73.87,242.35s24.53,6.73,27.1-3.65c0,0-4.46.53-9.39-4.85-6-6.6-15.73-8.31-23.94-5.34s-7.71,7.27-7.71,7.27-4.85.64-7,6.48,1.26,26.47,9.5,30.85l2.27-2.87s-.91-5.88,3-10.28l2.18.56s-2.38-5.1.1-7.88A14.6,14.6,0,0,0,73.87,242.35Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 76.6355px 250.107px;"
                                                id="el7u3yxlxkqpo" class="animable"></path>
                                            <path d="M67.64,259.46s-2.47-7.12-5.64-5.24.3,15.53,5.64,12.46"
                                                style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 64.215px 260.516px;"
                                                id="eljumm4gwwjx8" class="animable"></path>
                                            <path
                                                d="M95.38,245.41s-3-23.34-24-19.38-23.81,21.11-17,34.49c0,0-1.62-6.8,13.26-14.31S90.69,240.47,95.38,245.41Z"
                                                style="fill: rgb(153, 153, 153); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 73.2277px 243.049px;"
                                                id="elhnrcgoj18te" class="animable"></path>
                                            <path
                                                d="M66.31,246.21s12-18.83,24.38-19.11,22.1,4.55,18.94,9.55-14.25,8.76-14.25,8.76S90.64,234.54,66.31,246.21Z"
                                                style="fill: rgb(117, 117, 117); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 88.2709px 236.649px;"
                                                id="els1p2jmzasb" class="animable"></path>
                                            <polyline points="126.39 268.46 212.67 301.34 122.82 279.9"
                                                style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 167.745px 284.9px;"
                                                id="el9glrnzuth8h" class="animable"></polyline>
                                        </g>
                                        <defs>
                                            <filter id="active" height="200%">
                                                <feMorphology in="SourceAlpha" result="DILATED" operator="dilate"
                                                    radius="2"></feMorphology>
                                                <feFlood flood-color="#32DFEC" flood-opacity="1" result="PINK">
                                                </feFlood>
                                                <feComposite in="PINK" in2="DILATED" operator="in"
                                                    result="OUTLINE"></feComposite>
                                                <feMerge>
                                                    <feMergeNode in="OUTLINE"></feMergeNode>
                                                    <feMergeNode in="SourceGraphic"></feMergeNode>
                                                </feMerge>
                                            </filter>
                                            <filter id="hover" height="200%">
                                                <feMorphology in="SourceAlpha" result="DILATED" operator="dilate"
                                                    radius="2"></feMorphology>
                                                <feFlood flood-color="#ff0000" flood-opacity="0.5" result="PINK">
                                                </feFlood>
                                                <feComposite in="PINK" in2="DILATED" operator="in"
                                                    result="OUTLINE"></feComposite>
                                                <feMerge>
                                                    <feMergeNode in="OUTLINE"></feMergeNode>
                                                    <feMergeNode in="SourceGraphic"></feMergeNode>
                                                </feMerge>
                                                <feColorMatrix type="matrix"
                                                    values="0   0   0   0   0                0   1   0   0   0                0   0   0   0   0                0   0   0   1   0 ">
                                                </feColorMatrix>
                                            </filter>
                                        </defs>
                                        <defs>
                                            <clipPath id="freepik--clip-path--inject-253">
                                                <path
                                                    d="M344.82,211.45c0,8.89-9,51.24-14.78,62.43-.27.51-.51,1-.75,1.47-4.83,9.75-2.71,10.08-9.26,6.88-2.92-1.43-3.91-2-4.1-2.28-10.51-.41-102.36-3.89-122.11,0,0,0-6.23,8.43-9.9,5,0,0-2.23-10-7.17-16.22a.6.6,0,0,1-.09-.13c-5-6.76-13.07-57-13.29-65.55-.27-11.13-.52-16.55,4.22-13.36,0,0,4.07-.66,11.15-1.58,25.77-3.33,91.45-10,145.77-.29,2.4.42,4.77.89,7.12,1.38,0,0,10.56.16,13.19,2.72S344.82,202.56,344.82,211.45Z"
                                                    style="fill:#fff;stroke:#263238;stroke-linecap:round;stroke-linejoin:round">
                                                </path>
                                            </clipPath>
                                            <clipPath id="freepik--clip-path-2--inject-253">
                                                <path
                                                    d="M296.32,386.6l-2.36.48c-7,1.39-27.46,5.39-33.11,5.46h-1.11a78.89,78.89,0,0,1-10.89-.71s-.25-2.07-.4-4.56c-.26-4.11-.25-9.39,1.59-8.5,17.93,8.7,34.52-3.47,44.42,3.17l.72,1.82h0Z"
                                                    style="fill:#fff;stroke:#263238;stroke-linecap:round;stroke-linejoin:round">
                                                </path>
                                            </clipPath>
                                            <clipPath id="freepik--clip-path-3--inject-253">
                                                <path
                                                    d="M330,424.38,224.72,443.31s-3.3-11.65-4.38-14.34.93-13.66-.24-15.51-1.06-8.17,0-8c.49.1.81-3.76,1-7.92.23-4.78.31-9.95.31-9.95,4.29-1.49,17-1.11,27-.34a127.22,127.22,0,0,1,12.76,1.44l.24,0c3.75.87,23.23-.82,32.51-1.69,3-.28,4.93-.48,4.93-.48Z"
                                                    style="fill:#4FC9C9;stroke:#263238;stroke-linecap:round;stroke-linejoin:round">
                                                </path>
                                            </clipPath>
                                            <clipPath id="freepik--clip-path-4--inject-253">
                                                <path
                                                    d="M207.74,282.32s20.57-13.94,43.78-13.94,41.67,7.7,48.52,13.85-12.66,66.13-12.66,66.13l13.16,37.25c-8.47-11.05-17.75-15.72-17.75-15.72-10.24,13.86-26,11.2-26,11.2L255,396.29c-11.65.78-27.37-7.11-37.3-2.33,0,0,2.86-38.22,3.81-44.39S207.58,319.51,207.74,282.32Z"
                                                    style="fill:#4FC9C9;stroke:#263238;stroke-linecap:round;stroke-linejoin:round">
                                                </path>
                                            </clipPath>
                                            <clipPath id="freepik--clip-path-5--inject-253">
                                                <path
                                                    d="M207.74,282.32c-7.23,6.88-14.77,19.14-20.57,31.91-7.31,16.13-26.58,32.74-10.42,44.13,10.36,7.3,19.52-5.4,38.18-30.83,0,0,5.08-24.71,0-33.77"
                                                    style="fill:#4FC9C9;stroke:#263238;stroke-linecap:round;stroke-linejoin:round">
                                                </path>
                                            </clipPath>
                                            <clipPath id="freepik--clip-path-6--inject-253">
                                                <path
                                                    d="M261.11,332H244.66a2.25,2.25,0,0,1-2.24-2l-3.5-33.2a2.26,2.26,0,0,1,2.24-2.5h23.45a2.26,2.26,0,0,1,2.24,2.5l-3.5,33.2A2.25,2.25,0,0,1,261.11,332Z"
                                                    style="fill:#263238;stroke:#263238;stroke-linecap:round;stroke-linejoin:round">
                                                </path>
                                            </clipPath>
                                            <clipPath id="freepik--clip-path-7--inject-253">
                                                <path
                                                    d="M177.69,335.79s7.91-6.53,14.24-5.34c0,0,10.5-2.77,12.08-3.76a10.61,10.61,0,0,1,4.54-1l6-3.95s7.84,9.29,8.16,19.58c0,0-21.83,13.05-29,15.82-6.3,2.45-10.5,4.62-15.12,2.35a11.38,11.38,0,0,1-1.1-.63c-.25-.16-.49-.33-.74-.51"
                                                    style="fill:#4FC9C9;stroke:#263238;stroke-linecap:round;stroke-linejoin:round">
                                                </path>
                                            </clipPath>
                                            <clipPath id="freepik--clip-path-8--inject-253">
                                                <path
                                                    d="M300,282.23c7.07,3.52,31.07,55.2,34.76,56.26s2.64,16.88-6.76,21.08c-5.55,2.48-15.39-5-17.63-7.62s-9.93-15.92-17-23.52c0,0-5.91-19.59-2.89-35.09"
                                                    style="fill:#4FC9C9;stroke:#263238;stroke-linecap:round;stroke-linejoin:round">
                                                </path>
                                            </clipPath>
                                            <clipPath id="freepik--clip-path-9--inject-253">
                                                <path
                                                    d="M329.1,335.79s-7.91-6.53-14.24-5.34c0,0-10.5-2.77-12.08-3.76a10.61,10.61,0,0,0-4.54-1l-6-3.95s-7.84,9.29-8.16,19.58c0,0,21.84,13.05,29,15.82s11.57,5.19,17,1.21"
                                                    style="fill:#4FC9C9;stroke:#263238;stroke-linecap:round;stroke-linejoin:round">
                                                </path>
                                            </clipPath>
                                            <clipPath id="freepik--clip-path-10--inject-253">
                                                <path
                                                    d="M429.68,390.63a134.66,134.66,0,0,1-39.16,42c-2.67,1.86-5.42,3.64-8.23,5.3h0q-5.57,3.33-11.46,6.14t-12.2,5.11A149.84,149.84,0,0,1,325.3,457a178.35,178.35,0,0,1-27.5,1.17c-29.87-.93-60.5-8.62-89-20.23q-6.42-2.61-12.69-5.48a337.77,337.77,0,0,1-45.4-25.13l-.32-.21q-8-5.3-15.36-10.84a230.41,230.41,0,0,1-30.72-28l-.38-.42c-.52-.56-1-1.12-1.54-1.69q-6.28-7-12.09-14.54a233.27,233.27,0,0,1-13.67-19.79q-1.48-2.38-2.89-4.81A200.45,200.45,0,0,1,60,298.85c1.3-7.81,3.08-14.4,3.54-16.53,1.13-5.16-6-44.27,5.75-47.56s40.74-4.9,40.74-4.9-13.72,13.71-12.13,21.38a20.72,20.72,0,0,1,.42,3.5c.26,6.15-1.93,11.33-1.48,14.51A20.06,20.06,0,0,0,98,275.2c1.64,4.73,5.61,10.95,15.19,13.36a23.21,23.21,0,0,1,3.53,1.18c13.66,5.68,18.55,22.08,17.57,29.35-1,7.77,4.91,37,17.09,49l.47.45c12.51,11.7,17.19,15.35,32,16.43,3.07.22,7,.43,11.39.89,16.82,1.7,40.62,6.9,50.29,29.59a28.23,28.23,0,0,0,2.4,4.5c.21.32.43.64.65.95,10.65,14.89,33.08,13.86,48.52,2.05A40.71,40.71,0,0,0,311.9,401.3c8.14-29.91,23.69-8.22,46.77-11.68a32.37,32.37,0,0,0,4-.85c21.27-5.85,28.76-22.12,30.61-27.18.36-1,.51-1.52.51-1.52s8.74-13.06,23.71-17.28l.55-.16S427.65,373.72,429.68,390.63Z"
                                                    style="fill:#fff;stroke:#263238;stroke-linecap:round;stroke-linejoin:round">
                                                </path>
                                            </clipPath>
                                            <clipPath id="freepik--clip-path-11--inject-253">
                                                <path
                                                    d="M107.33,294.52a48.73,48.73,0,0,1-68.6-5.37A86,86,0,0,1,60.4,285q2.9-.18,5.91-.12A87.11,87.11,0,0,1,78,286c1.16.17,2.32.37,3.46.59A130,130,0,0,1,107.33,294.52Z"
                                                    style="fill:#4FC9C9;stroke:#263238;stroke-linecap:round;stroke-linejoin:round">
                                                </path>
                                            </clipPath>
                                        </defs>
                                    </svg>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">

                            <div class="card shadow-none border-0 rounded-lg-0 rounded-3 mb-0"
                                :class="{ 'border-0': darkTheme, 'border-0 shadow-md': !darkTheme }">
                                <div class="card-body text-center p-4 m-2">
                                    <img src="{{ asset('frontend/assets/images/login.png') }}" alt=""
                                        class="square-xxl">
                                   <h1 class="mt-5 mb-4" style="font-size: 20px; font-weight: 600; text-align: center">Join Disting Disting & Start Chatting Instantly</h1>


                                    <div>
                                        {{ $slot }}

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <button @click="darkTheme = !darkTheme" class="btn btn-dark  position-fixed custom-dark-button py-1 px-3"
        style="border-radius:0 9px 9px 0; !important">
        <i class="bi bi-brightness-high fs-4" :class="{ 'd-block': darkTheme, 'd-none': !darkTheme }"></i>
        <i class="bi bi-mask fs-4" :class="{ 'd-none': darkTheme, 'd-block': !darkTheme }"></i>
    </button>


</body>

</html>
