<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Disting Disting - Connect Beyond Words</title>
  <link rel="shortcut icon" href="{{ asset('frontend/assets/images/favicon.ico') }}">
    <!-- Bootstrap 5 CSS -->
    {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet"> --}}
    <link rel="stylesheet" href="{{asset('frontend/assets/css/bootstrap.min.css')}}">
     <!-- Add these preconnect links -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Google Fonts - Poppins -->
    {{-- <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet"> --}}
        <link rel="stylesheet" href="{{asset('frontend/assets/css/font.css')}}">

    <!-- AOS Animation Library -->
    {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet"> --}}
    <link rel="stylesheet" href="{{asset('frontend/assets/css/aos.css')}}">
    <!-- Bootstrap Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css"
        rel="stylesheet">

    <link rel="stylesheet" href="{{asset('frontend/assets/css/style.css')}}">
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#home">Disting Disting</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#features">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#stats">Stats</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#testimonials">Reviews</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero animated-bg">
        <div class="container home-container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12" data-aos="fade-right" data-aos-duration="1000">
                    <div class="hero-content">
                        <h1>Where Conversations Come <span
                                style="background: var(--secondary-gradient); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Alive</span>
                        </h1>
                        <p class="lead">Our anonymous chat platform connects you with strangers globally without email
                            or phone verification. Start meaningful conversations in seconds with complete privacy and
                            freedom.</p>
                        <a href="{{route('register')}}" class="btn btn-gradient btn-lg" id="ctaButton">
                            <i class="bi bi-chat-dots me-2"></i>Start Chatting Now
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 hide-for-mobile" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
                    <div class="position-relative">
                        <!-- Hero Chat Illustration -->
                        <svg class="hero-illustration floating" viewBox="0 0 500 400"
                            xmlns="http://www.w3.org/2000/svg">
                            <!-- Background Circle -->
                            <!-- <circle cx="250" cy="200" r="180" fill="url(#heroGradient)" opacity="0.1" /> -->

                            <!-- Chat Bubbles -->
                            <g class="floating-delayed">
                                <rect x="40" y="120" width="180" height="60" rx="30" fill="url(#bubbleGradient1)"
                                    opacity="0.9" />
                                <text x="130" y="155" text-anchor="middle" fill="white" font-family="Poppins"
                                    font-size="14" font-weight="500"> Up for deep talks?</text>
                            </g>

                            <g class="floating">
                                <rect x="270" y="180" width="200" height="60" rx="30" fill="url(#bubbleGradient2)"
                                    opacity="0.9" />
                                <text x="370" y="215" text-anchor="middle" fill="white" font-family="Poppins"
                                    font-size="14" font-weight="500">Good vibes only ✨</text>
                            </g>

                            <g class="floating-delayed">
                                <rect x="80" y="275" width="160" height="50" rx="25" fill="url(#bubbleGradient3)"
                                    opacity="0.9" />
                                <text x="160" y="305" text-anchor="middle" fill="white" font-family="Poppins"
                                    font-size="12" font-weight="500">Let's be friends! 👋</text>
                            </g>

                            <!-- Avatars -->
                            <circle cx="30" cy="70" r="25" fill="url(#avatarGradient1)" />
                            <text x="30" y="77" text-anchor="middle" fill="white" font-family="Poppins" font-size="16"
                                font-weight="600">💬</text>

                            <circle cx="235" cy="206" r="25" fill="url(#avatarGradient2)" />
                            <text x="235" y="210" text-anchor="middle" fill="white" font-family="Poppins" font-size="16"
                                font-weight="600">💕</text>

                            <!-- Floating Icons -->
                            <g class="floating">
                                <circle cx="300" cy="137" r="15" fill="url(#iconGradient)" opacity="0.8" />
                                <text x="300" y="144" text-anchor="middle" fill="white" font-family="Bootstrap-icons"
                                    font-size="12">💭</text>
                            </g>

                            <g class="floating-delayed">
                                <circle cx="342" cy="352" r="12" fill="url(#iconGradient2)" opacity="0.8" />
                                <text x="342" y="356" text-anchor="middle" fill="white" font-family="Bootstrap-icons"
                                    font-size="10">👍🏻</text>
                            </g>


                            <!-- Gradients -->
                            <defs>
                                <linearGradient id="heroGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                                    <stop offset="0%" style="stop-color:#667eea" />
                                    <stop offset="100%" style="stop-color:#764ba2" />
                                </linearGradient>
                                <linearGradient id="bubbleGradient1" x1="0%" y1="0%" x2="100%" y2="100%">
                                    <stop offset="0%" style="stop-color:#4facfe" />
                                    <stop offset="100%" style="stop-color:#00f2fe" />
                                </linearGradient>
                                <linearGradient id="bubbleGradient2" x1="0%" y1="0%" x2="100%" y2="100%">
                                    <stop offset="0%" style="stop-color:#f093fb" />
                                    <stop offset="100%" style="stop-color:#f5576c" />
                                </linearGradient>
                                <linearGradient id="bubbleGradient3" x1="0%" y1="0%" x2="100%" y2="100%">
                                    <stop offset="0%" style="stop-color:#667eea" />
                                    <stop offset="100%" style="stop-color:#764ba2" />
                                </linearGradient>
                                <linearGradient id="avatarGradient1" x1="0%" y1="0%" x2="100%" y2="100%">
                                    <stop offset="0%" style="stop-color:#ff9a9e" />
                                    <stop offset="100%" style="stop-color:#fecfef" />
                                </linearGradient>
                                <linearGradient id="avatarGradient2" x1="0%" y1="0%" x2="100%" y2="100%">
                                    <stop offset="0%" style="stop-color:#a8edea" />
                                    <stop offset="100%" style="stop-color:#fed6e3" />
                                </linearGradient>
                                <linearGradient id="iconGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                                    <stop offset="0%" style="stop-color:#ffecd2" />
                                    <stop offset="100%" style="stop-color:#fcb69f" />
                                </linearGradient>
                                <linearGradient id="iconGradient2" x1="0%" y1="0%" x2="100%" y2="100%">
                                    <stop offset="0%" style="stop-color:#ff9a9e" />
                                    <stop offset="100%" style="stop-color:#fad0c4" />
                                </linearGradient>
                            </defs>
                        </svg>

                        <svg class="animated" id="freepik_stories-mobile-user" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 500 500" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                            xmlns:svgjs="http://svgjs.com/svgjs"
                            style="transform: scale(-1,1); position:fixed;top: -11%;right: -14%;width: 96%;z-index: -99;">
                            <g id="freepik--Plants--inject-126" class="animable animator-hidden"
                                style="transform-origin: 250px 372.215px;">
                                <path
                                    d="M128.05,385.72H85.34s.1-6.36,4.3-8.05a5.72,5.72,0,0,1,6.69,1.61s1.72-11.69,9.54-11.69,11.57,10.08,11.57,10.08a6,6,0,0,1,6.1-2.48C127.88,375.76,128.05,385.72,128.05,385.72Z"
                                    style="fill: rgb(55, 71, 79); transform-origin: 106.695px 376.655px;"
                                    id="el2tz1q8kyxi7" class="animable"></path>
                                <path
                                    d="M456.75,385.72s-1.93-9-5.76-10.34-6.17,2.64-6.17,2.64-.9-8.57-6.34-11.13-9.52,2.69-9.52,2.69-4.18-10.87-11.63-10.87-11.22,15.9-11.22,15.9-4.4-4.74-8.91-2.06-4.51,13.17-4.51,13.17Z"
                                    style="fill: rgb(55, 71, 79); transform-origin: 424.72px 372.215px;"
                                    id="eltlk6srhclq" class="animable"></path>
                                <path
                                    d="M101,385.72H43.25S45.16,377.57,49,377s5.61,3.2,5.61,3.2-.17-11.36,7-13.3S74.73,375,74.73,375s4.49-5.72,10.6-5.35S93,379.47,93,379.47,98.56,376.19,101,385.72Z"
                                    style="fill: rgb(69, 90, 100); transform-origin: 72.125px 376.186px;"
                                    id="elrztcybw8awn" class="animable"></path>
                                <path
                                    d="M240.08,385.72H199.79s1.33-5.68,4-6.08,3.92,2.23,3.92,2.23-.13-7.93,4.86-9.27,9.18,5.65,9.18,5.65,3.13-4,7.39-3.74,5.35,6.85,5.35,6.85S238.37,379.07,240.08,385.72Z"
                                    style="fill: rgb(69, 90, 100); transform-origin: 219.935px 379.075px;"
                                    id="el42eq7u9mql5" class="animable"></path>
                                <path
                                    d="M396.83,385.72H361.34s.08-5.29,3.57-6.69a4.76,4.76,0,0,1,5.57,1.34s1.42-9.72,7.92-9.72S388,379,388,379a5,5,0,0,1,5.07-2.06C396.69,377.44,396.83,385.72,396.83,385.72Z"
                                    style="fill: rgb(69, 90, 100); transform-origin: 379.085px 378.185px;"
                                    id="ela61pz7crvpb" class="animable"></path>
                            </g>
                            <g id="freepik--Floor--inject-126" class="animable animator-hidden"
                                style="transform-origin: 250px 429.06px;">
                                <polygon
                                    points="34.95 385.79 88.71 385.55 142.48 385.46 250 385.3 357.52 385.46 411.29 385.55 465.05 385.79 411.29 386.04 357.52 386.13 250 386.29 142.48 386.13 88.71 386.04 34.95 385.79"
                                    style="fill: rgb(38, 50, 56); transform-origin: 250px 385.795px;" id="el6xd6s9yztyj"
                                    class="animable"></polygon>
                                <rect x="36.16" y="465.82" width="427.68" height="6.96"
                                    style="fill: rgb(199, 199, 199); transform-origin: 250px 469.3px;" id="elgy3t0d1eje"
                                    class="animable"></rect>
                                <path d="M66.15,465.82a12.36,12.36,0,0,1,0,7,12.13,12.13,0,0,1,0-7Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 66.145px 469.32px;"
                                    id="eli6olbpzo7d" class="animable"></path>
                                <path
                                    d="M99.57,465.82a11,11,0,0,1,.51,3.48,10.49,10.49,0,0,1-.51,3.48,12.36,12.36,0,0,1,0-7Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 99.5734px 469.28px;"
                                    id="elebdl2ajxxxq" class="animable"></path>
                                <path
                                    d="M133,465.82a11,11,0,0,1,.51,3.48,10.76,10.76,0,0,1-.51,3.48,12.13,12.13,0,0,1,0-7Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 132.998px 469.28px;"
                                    id="elej48rbxaifm" class="animable"></path>
                                <path d="M166.43,465.82a12.13,12.13,0,0,1,0,7,12.13,12.13,0,0,1,0-7Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 166.43px 469.32px;"
                                    id="elp63qey9orvq" class="animable"></path>
                                <path
                                    d="M199.86,465.82a12.13,12.13,0,0,1,0,7,10.49,10.49,0,0,1-.51-3.48A11,11,0,0,1,199.86,465.82Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 199.862px 469.32px;"
                                    id="eluyvm218irt" class="animable"></path>
                                <path d="M233.29,465.82a12.36,12.36,0,0,1,0,7,12.13,12.13,0,0,1,0-7Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 233.285px 469.32px;"
                                    id="elatnw7j8yebj" class="animable"></path>
                                <path d="M266.71,465.82a12.13,12.13,0,0,1,0,7,12.36,12.36,0,0,1,0-7Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 266.715px 469.32px;"
                                    id="elt2a21stpk59" class="animable"></path>
                                <path
                                    d="M300.14,465.82a11,11,0,0,1,.51,3.48,10.49,10.49,0,0,1-.51,3.48,12.13,12.13,0,0,1,0-7Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 300.138px 469.28px;"
                                    id="el9nhdvpx6hxj" class="animable"></path>
                                <path d="M333.57,465.82a12.13,12.13,0,0,1,0,7,12.13,12.13,0,0,1,0-7Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 333.57px 469.32px;"
                                    id="elnu0vtr7sjk" class="animable"></path>
                                <path
                                    d="M367,465.82a12.13,12.13,0,0,1,0,7,10.49,10.49,0,0,1-.51-3.48A11,11,0,0,1,367,465.82Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 367.002px 469.32px;"
                                    id="elq6sldlnuwpe" class="animable"></path>
                                <path
                                    d="M400.43,465.82a12.36,12.36,0,0,1,0,7,10.49,10.49,0,0,1-.51-3.48A11,11,0,0,1,400.43,465.82Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 400.427px 469.32px;"
                                    id="elrppky6dsnxb" class="animable"></path>
                                <path d="M433.85,465.82a12.13,12.13,0,0,1,0,7,12.36,12.36,0,0,1,0-7Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 433.855px 469.32px;"
                                    id="el7ip0c8x8aqd" class="animable"></path>
                            </g>
                            <g id="freepik--Sign--inject-126" class="animable animator-hidden"
                                style="transform-origin: 343.56px 249.175px;">
                                <rect x="339.67" y="32.53" width="7.78" height="433.29"
                                    style="fill: rgb(55, 71, 79); transform-origin: 343.56px 249.175px;"
                                    id="el1qoi7vyuzd5" class="animable"></rect>
                                <polygon
                                    points="376.38 37.52 376.38 114.22 310.74 114.22 310.74 37.52 343.56 37.52 376.38 37.52"
                                    style="fill: rgb(197, 63, 63); transform-origin: 343.56px 75.87px;"
                                    id="eluta41kzm13m" class="animable"></polygon>
                                <path d="M372.41,110.45h-57.7V41.29h57.7Zm-56.7-1h55.7V42.29h-55.7Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 343.56px 75.87px;"
                                    id="eluks99ce6stf" class="animable"></path>
                                <polygon
                                    points="359.5 82.88 327.61 82.88 327.61 69.04 330.41 50.99 356.7 50.99 359.5 69.04 359.5 82.88"
                                    style="fill: rgb(38, 50, 56); transform-origin: 343.555px 66.935px;"
                                    id="elnkafhyjnez" class="animable"></polygon>
                                <rect x="329.79" y="82.88" width="3.45" height="6.41"
                                    style="fill: rgb(38, 50, 56); transform-origin: 331.515px 86.085px;"
                                    id="el33mg8u2lx7r" class="animable"></rect>
                                <rect x="353.88" y="82.88" width="3.45" height="6.41"
                                    style="fill: rgb(38, 50, 56); transform-origin: 355.605px 86.085px;"
                                    id="elnrma3ns3daa" class="animable"></rect>
                                <path d="M333.18,76a1.67,1.67,0,1,1-1.67-1.66A1.67,1.67,0,0,1,333.18,76Z"
                                    style="fill: rgb(197, 63, 63); transform-origin: 331.51px 76.01px;"
                                    id="eltc0khu53xsp" class="animable"></path>
                                <path d="M357.27,76a1.67,1.67,0,1,1-1.66-1.66A1.66,1.66,0,0,1,357.27,76Z"
                                    style="fill: rgb(197, 63, 63); transform-origin: 355.6px 76.01px;" id="elwdyo8v6mlc"
                                    class="animable"></path>
                                <polygon points="353.94 57.24 333.18 57.24 331.34 69.04 355.78 69.04 353.94 57.24"
                                    style="fill: rgb(197, 63, 63); transform-origin: 343.56px 63.14px;"
                                    id="elfjd23sze2vo" class="animable"></polygon>
                                <rect x="337.6" y="52.56" width="11.91" height="2.29"
                                    style="fill: rgb(197, 63, 63); transform-origin: 343.555px 53.705px;"
                                    id="eldn1bcdqn6gj" class="animable"></rect>
                                <path d="M345.08,44.45a1.52,1.52,0,1,1-1.52-1.52A1.52,1.52,0,0,1,345.08,44.45Z"
                                    style="fill: rgb(219, 219, 219); transform-origin: 343.56px 44.45px;"
                                    id="elt985zd67tuh" class="animable"></path>
                                <path d="M345.08,107.28a1.52,1.52,0,1,1-1.52-1.52A1.52,1.52,0,0,1,345.08,107.28Z"
                                    style="fill: rgb(219, 219, 219); transform-origin: 343.56px 107.28px;"
                                    id="elto2w0h7h9z" class="animable"></path>
                                <path
                                    d="M328.73,98.46a1.36,1.36,0,0,1-.15.65,1.5,1.5,0,0,1-.4.47,1.85,1.85,0,0,1-.6.28,2.48,2.48,0,0,1-.73.1H324V94.14h3.12a1.14,1.14,0,0,1,.55.13,1.36,1.36,0,0,1,.41.34,1.42,1.42,0,0,1,.27.48,1.62,1.62,0,0,1-.12,1.33,1.3,1.3,0,0,1-.62.56,1.42,1.42,0,0,1,.79.53A1.53,1.53,0,0,1,328.73,98.46Zm-3.56-3.35v1.46h1.51a.69.69,0,0,0,.49-.19.85.85,0,0,0,0-1.08.58.58,0,0,0-.45-.19Zm2.42,3.14a.94.94,0,0,0,0-.3.87.87,0,0,0-.15-.25.68.68,0,0,0-.21-.17.6.6,0,0,0-.27-.06h-1.74V99h1.68a.68.68,0,0,0,.29-.06.63.63,0,0,0,.24-.16.58.58,0,0,0,.15-.24A.72.72,0,0,0,327.59,98.25Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 326.365px 97.05px;"
                                    id="el76shx6z8fv" class="animable"></path>
                                <path
                                    d="M332.08,99a1.28,1.28,0,0,0,.67-.16,1.32,1.32,0,0,0,.45-.43,1.6,1.6,0,0,0,.23-.6,3.26,3.26,0,0,0,.07-.7v-3h1.13v3a4,4,0,0,1-.15,1.12,2.4,2.4,0,0,1-.45.92,2.12,2.12,0,0,1-.79.62,2.57,2.57,0,0,1-1.15.23,2.69,2.69,0,0,1-1.19-.24,2.17,2.17,0,0,1-.79-.64,2.54,2.54,0,0,1-.44-.92,4.4,4.4,0,0,1-.14-1.09v-3h1.14v3a3.35,3.35,0,0,0,.07.71,1.74,1.74,0,0,0,.23.6,1.36,1.36,0,0,0,.44.42A1.26,1.26,0,0,0,332.08,99Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 332.08px 97.0557px;"
                                    id="elfbrg1bwiums" class="animable"></path>
                                <path
                                    d="M339.24,95.66a2,2,0,0,0-.21-.15,2.12,2.12,0,0,0-.37-.19,2.36,2.36,0,0,0-.47-.16,1.81,1.81,0,0,0-.52-.07,1.22,1.22,0,0,0-.7.17.59.59,0,0,0-.23.49.49.49,0,0,0,.09.3.88.88,0,0,0,.25.2,2.31,2.31,0,0,0,.41.17l.58.15c.29.08.54.16.78.25a2.21,2.21,0,0,1,.59.33,1.4,1.4,0,0,1,.37.47,1.53,1.53,0,0,1,.13.68,1.78,1.78,0,0,1-.17.8,1.45,1.45,0,0,1-.48.53,2,2,0,0,1-.69.3,3.1,3.1,0,0,1-.81.1,4.46,4.46,0,0,1-1.3-.2,4,4,0,0,1-1.15-.56l.5-1a1.63,1.63,0,0,0,.27.19,4.6,4.6,0,0,0,.45.24,4.07,4.07,0,0,0,.59.2,2.82,2.82,0,0,0,.65.08c.63,0,.94-.2.94-.6a.52.52,0,0,0-.11-.32.91.91,0,0,0-.3-.23,4.13,4.13,0,0,0-.48-.18l-.62-.18a6.16,6.16,0,0,1-.73-.25,2.12,2.12,0,0,1-.51-.32,1.1,1.1,0,0,1-.31-.43,1.42,1.42,0,0,1-.1-.57,1.8,1.8,0,0,1,.16-.79,1.62,1.62,0,0,1,.46-.58,2.12,2.12,0,0,1,.67-.34,2.82,2.82,0,0,1,.83-.12,3.25,3.25,0,0,1,1.14.19,4.22,4.22,0,0,1,.9.46Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 337.641px 97.0499px;"
                                    id="el31pyu9q1tk4" class="animable"></path>
                                <path
                                    d="M346.23,95.66a2,2,0,0,0-.21-.15,1.81,1.81,0,0,0-.37-.19,2.16,2.16,0,0,0-.47-.16,1.79,1.79,0,0,0-.51-.07,1.18,1.18,0,0,0-.7.17.59.59,0,0,0-.23.49.49.49,0,0,0,.09.3.76.76,0,0,0,.25.2,1.81,1.81,0,0,0,.41.17l.58.15c.28.08.54.16.77.25a2.07,2.07,0,0,1,.59.33,1.43,1.43,0,0,1,.38.47,1.68,1.68,0,0,1,.13.68,1.66,1.66,0,0,1-.18.8,1.42,1.42,0,0,1-.47.53,2,2,0,0,1-.69.3,3.12,3.12,0,0,1-.82.1,4.34,4.34,0,0,1-1.29-.2,4,4,0,0,1-1.15-.56l.5-1a2,2,0,0,0,.26.19,3.87,3.87,0,0,0,.46.24,3.93,3.93,0,0,0,.58.2,2.84,2.84,0,0,0,.66.08q.93,0,.93-.6a.51.51,0,0,0-.1-.32,1.09,1.09,0,0,0-.31-.23,4.7,4.7,0,0,0-.47-.18l-.63-.18a5.41,5.41,0,0,1-.72-.25,2,2,0,0,1-.52-.32,1.19,1.19,0,0,1-.3-.43,1.41,1.41,0,0,1-.11-.57,1.8,1.8,0,0,1,.17-.79,1.71,1.71,0,0,1,.45-.58,2.17,2.17,0,0,1,.68-.34,2.78,2.78,0,0,1,.83-.12,3.15,3.15,0,0,1,1.13.19,4,4,0,0,1,.9.46Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 344.64px 97.0499px;"
                                    id="elkk5cohkp0i" class="animable"></path>
                                <path d="M352.1,95.13h-1.86V100h-1.12V95.13h-1.86v-1h4.84Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 349.68px 97.065px;"
                                    id="elp9w6npmzz3" class="animable"></path>
                                <path
                                    d="M355,100a2.6,2.6,0,0,1-1.16-.25,2.79,2.79,0,0,1-.89-.66,3.07,3.07,0,0,1-.58-1,2.93,2.93,0,0,1-.21-1.09,3.06,3.06,0,0,1,.22-1.12A3.28,3.28,0,0,1,353,95a2.85,2.85,0,0,1,.91-.65,2.71,2.71,0,0,1,1.14-.24,2.46,2.46,0,0,1,1.15.26,2.82,2.82,0,0,1,.89.67,3.38,3.38,0,0,1,.57,1,3,3,0,0,1,.21,1.09,2.82,2.82,0,0,1-.22,1.11,3,3,0,0,1-.59.93,2.81,2.81,0,0,1-.9.65A2.71,2.71,0,0,1,355,100Zm-1.69-3a2.24,2.24,0,0,0,.12.73,1.68,1.68,0,0,0,.33.62,1.62,1.62,0,0,0,.53.44,1.53,1.53,0,0,0,.72.16,1.42,1.42,0,0,0,.72-.17,1.66,1.66,0,0,0,.54-.44,2.36,2.36,0,0,0,.33-.63,2.45,2.45,0,0,0,.11-.71,2.28,2.28,0,0,0-.12-.73,2,2,0,0,0-.34-.62,1.48,1.48,0,0,0-.53-.43,1.51,1.51,0,0,0-.71-.16,1.57,1.57,0,0,0-.73.16,1.65,1.65,0,0,0-.53.45,1.94,1.94,0,0,0-.33.62A2.45,2.45,0,0,0,353.35,97.05Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 355.015px 97.0576px;"
                                    id="elp0zsis4adbi" class="animable"></path>
                                <path
                                    d="M358.76,100V94.14h2.47a1.58,1.58,0,0,1,.74.17,1.94,1.94,0,0,1,.58.44,1.91,1.91,0,0,1,.39.62,2,2,0,0,1,.14.7,2.18,2.18,0,0,1-.13.72,2,2,0,0,1-.37.62,1.82,1.82,0,0,1-.58.44,1.77,1.77,0,0,1-.73.16h-1.38V100ZM359.89,97h1.31a.65.65,0,0,0,.52-.26,1.05,1.05,0,0,0,.21-.69,1,1,0,0,0-.07-.39.87.87,0,0,0-.17-.3.58.58,0,0,0-.25-.19.72.72,0,0,0-.29-.06h-1.26Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 360.92px 97.0699px;"
                                    id="ely6xwagxxh9f" class="animable"></path>
                                <rect x="336.88" y="382.67" width="13.35" height="83.15"
                                    style="fill: rgb(38, 50, 56); transform-origin: 343.555px 424.245px;"
                                    id="elc7ev48x8zyo" class="animable"></rect>
                            </g>
                            <g id="freepik--character-2--inject-126" class="animable animator-hidden"
                                style="transform-origin: 381.776px 272.686px;">
                                <path
                                    d="M362.32,349.44,328,377.19c-6.59,5.27-12.28,10-15,12.73l0,.05c-1,1-1.62,1.76-1.65,2.11,0,0,0,.05,0,.07.24,3,40.82,56.93,42.86,58.33s6.21-4.32,6.31-7.67-6.22-30.94-6.22-30.94l34-28.05Z"
                                    style="fill: rgb(247, 169, 160); transform-origin: 349.825px 400.068px;"
                                    id="elg5tjfjd3xhq" class="animable"></path>
                                <path
                                    d="M335,371.5l-7,5.69c-6.59,5.27-12.28,10-15,12.73l0,.05a11.49,11.49,0,0,0-1.65,2.11s0,.05,0,.07c.24,3,40.82,56.93,42.86,58.33s6.21-4.32,6.31-7.67-6.22-30.94-6.22-30.94l7.23-5.68Z"
                                    style="fill: rgb(235, 235, 235); transform-origin: 336.44px 411.098px;"
                                    id="el4sj373kwyu5" class="animable"></path>
                                <path
                                    d="M354.15,450.48c-2-1.4-42.62-55.3-42.86-58.33-.11-1.15,7.4-7.52,16.69-15l.29-.23,26.57,34.48-.6.43s6.3,27.58,6.21,30.94S356.2,451.89,354.15,450.48Z"
                                    style="fill: rgb(197, 63, 63); transform-origin: 335.87px 413.809px;"
                                    id="el2usw4fjxr47" class="animable"></path>
                                <path
                                    d="M355.78,448.3c-6.61-9.26-34.17-45.95-41.41-54.59-.06-.07-.11,0-.06,0,6.36,9.31,34.21,45.78,41.32,54.66C355.78,448.6,355.92,448.49,355.78,448.3Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 335.064px 421.089px;"
                                    id="el16sztgqk7r5h" class="animable"></path>
                                <path
                                    d="M356.33,414.87c-2-4.08-5.86-8-10.47-8.85-.17,0-.22.22-.09.31a63.07,63.07,0,0,1,10.1,8.87A.29.29,0,0,0,356.33,414.87Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 351.025px 410.647px;"
                                    id="el6f1ecrtnfm9" class="animable"></path>
                                <path
                                    d="M356.72,418.62c-2-4.07-5.87-8-10.47-8.85-.18,0-.22.22-.1.31A63.14,63.14,0,0,1,356.26,419,.29.29,0,0,0,356.72,418.62Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 351.435px 414.439px;"
                                    id="elf111wdtlp1h" class="animable"></path>
                                <path
                                    d="M357.11,422.37c-2-4.07-5.87-8-10.47-8.85-.18,0-.22.23-.1.31a62.64,62.64,0,0,1,10.1,8.87A.29.29,0,0,0,357.11,422.37Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 351.807px 418.156px;"
                                    id="elvg0pfadibhq" class="animable"></path>
                                <path
                                    d="M380.88,316.39c-2.43,12-52.25,59.92-52.25,59.92l34.74,40.09s70.72-70.61,67-97.13c-3.21-23.08-37.76-115.88-37.76-115.88H352.78S383.27,304.58,380.88,316.39Z"
                                    style="fill: rgb(69, 90, 100); transform-origin: 379.571px 309.895px;"
                                    id="elsnzre57ny9" class="animable"></path>
                                <path
                                    d="M367.32,406.86c-4.62-5.74-3.21-4.16-7.89-9.85-2.29-2.78-17.36-21.08-19.95-23.3-.05,0-.15,0-.11.1,1.73,2.94,17.11,21,19.46,23.7,4.78,5.61,3.47,3.95,8.32,9.49C367.24,407.11,367.4,407,367.32,406.86Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 353.351px 390.377px;"
                                    id="el0q93sdl1jy5" class="animable"></path>
                                <path
                                    d="M385.83,310.53c-.57-3-1.22-6-1.85-9q-2-9.15-4.12-18.24-4.29-18-9.36-35.87c-3.4-11.93-7-23.83-11.12-35.53-.52-1.44-1-2.88-1.57-4.32,0-.11-.21-.06-.17,0,3.58,11.72,7.27,23.4,10.63,35.18s6.44,23.53,9.36,35.38c1.46,5.95,2.83,11.92,4.16,17.9q1,4.41,1.92,8.83a64,64,0,0,1,1.67,9.09,13.84,13.84,0,0,1-2.35,8.19c-1.49,2.45-3.25,4.75-4.95,7-3.4,4.62-35.84,40.77-36.89,41.75-.08.08.05.2.13.12,4.35-3.9,31.88-33.7,35.37-38.31,1.73-2.28,3.42-4.6,5.07-6.93a27.27,27.27,0,0,0,4-7A16.49,16.49,0,0,0,385.83,310.53Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 363.742px 289.271px;"
                                    id="elbq0cl4fnsc" class="animable"></path>
                                <path d="M385.75,203.39l-7.24,95c-6.9-32.5-25.72-95-25.72-95Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 369.27px 250.89px;"
                                    id="el8l52kasdlrc" class="animable"></path>
                                <path
                                    d="M368.66,398.92s8.6,41.89,8.6,41.92c.12,8.44.37,15.84.85,19.65a.13.13,0,0,0,0,.06,6,6,0,0,0,.66,2.6l.05.05c2.54,1.67,70,2.72,72.35,2s.4-7.55-2.18-9.68-28.25-14.08-28.25-14.08l-9-41.87Z"
                                    style="fill: rgb(247, 169, 160); transform-origin: 410.443px 432.175px;"
                                    id="el1wbny5hpx6f" class="animable"></path>
                                <path
                                    d="M451.19,465.16c-2.37.75-69.83-.29-72.36-2l-.05-.06a5.81,5.81,0,0,1-.66-2.6.13.13,0,0,1,0-.06c-.49-3.81-.73-11.21-.85-19.64,0,0-1.49-7.3-1.49-7.3h43.3l1.68,7.84s25.64,12,28.25,14.09S453.56,464.42,451.19,465.16Z"
                                    style="fill: rgb(235, 235, 235); transform-origin: 414.02px 449.454px;"
                                    id="elumaynhmcg1" class="animable"></path>
                                <path
                                    d="M451.19,465.16c-2.37.76-69.82-.29-72.36-2-1-.62-1.4-10.45-1.57-22.35v-.38l43.53.19,0,.74s25.64,12,28.24,14.08S453.56,464.42,451.19,465.16Z"
                                    style="fill: rgb(197, 63, 63); transform-origin: 414.762px 452.921px;"
                                    id="el9d85nfvxlwp" class="animable"></path>
                                <path
                                    d="M450.46,462.54c-11.36-.46-57.25-1.23-68.52-.81-.09,0-.09.06,0,.07,11.26.7,57.15,1.09,68.52.92C450.7,462.72,450.7,462.55,450.46,462.54Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 416.256px 462.184px;"
                                    id="elgs275opqu8d" class="animable"></path>
                                <path
                                    d="M424.41,441.59c-4.46-.91-9.94-.31-13.41,2.83-.14.12,0,.31.18.27a62.47,62.47,0,0,1,13.2-2.54A.28.28,0,0,0,424.41,441.59Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 417.809px 442.949px;"
                                    id="el3arc7ymqib1" class="animable"></path>
                                <path
                                    d="M427.61,443.58c-4.46-.9-9.94-.3-13.41,2.84-.14.12,0,.31.18.26a63.09,63.09,0,0,1,13.2-2.53A.29.29,0,0,0,427.61,443.58Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 420.988px 444.944px;"
                                    id="el1f4of5rc0sl" class="animable"></path>
                                <path
                                    d="M430.81,445.58c-4.46-.9-9.94-.3-13.41,2.83-.14.12,0,.31.18.27a63.09,63.09,0,0,1,13.2-2.53A.29.29,0,0,0,430.81,445.58Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 424.188px 446.942px;"
                                    id="elpt1zrd4zm9g" class="animable"></path>
                                <path
                                    d="M388.8,203.39a161.94,161.94,0,0,0-3.42,19.89c-.83,8.34-1.88,15.72-3,16.64s-7.56,5.08-9.68,6.37c0,0,19.64,59.54,24.71,79.38,7.35,28.77,24.94,115.09,24.94,115.09H375.48S361.22,358.58,355,331.19c-5.34-23.48-25.81-93.93-25.81-93.93a40.89,40.89,0,0,1,1.65-33.87S388.81,203.36,388.8,203.39Z"
                                    style="fill: rgb(69, 90, 100); transform-origin: 374.32px 322.068px;"
                                    id="eld0n809w2yn" class="animable"></path>
                                <path
                                    d="M420.67,431.63c-7.37,0-5.25-.13-12.62-.09-3.61,0-27.3.19-30.66.8a.08.08,0,0,0,0,.15c3.38.5,27.06-.07,30.67-.16,7.37-.19,5.25-.21,12.61-.48A.11.11,0,0,0,420.67,431.63Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 399.058px 432.113px;"
                                    id="elmmcct2xtx9" class="animable"></path>
                                <path
                                    d="M385.71,237.57a89.66,89.66,0,0,0-12.93,8.65c-.16.13,0,.38.17.27,4.39-2.75,8.88-5.42,13.1-8.4A.31.31,0,0,0,385.71,237.57Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 379.451px 242.019px;"
                                    id="elwwxlv9g8z88" class="animable"></path>
                                <path
                                    d="M382.13,205.18c0-.16-.33-.16-.3,0A157,157,0,0,1,383.48,221c.16,2.46.29,16.13-4.06,15.81-.73-.06-1.19-.69-1.47-1.74a17.15,17.15,0,0,1-.08-4.18c0-2.87,0-5.74-.23-8.6A77.39,77.39,0,0,0,375,206.51a.14.14,0,0,0-.27.05,146.83,146.83,0,0,1,2.11,22c0,3.55-.92,9.06,2.8,9s4.82-9.17,4.9-11.64A81.13,81.13,0,0,0,382.13,205.18Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 379.639px 221.31px;"
                                    id="el3q1n01j7r83" class="animable"></path>
                                <path
                                    d="M379.59,237.16a22.3,22.3,0,0,0-.51,2.92,6.35,6.35,0,0,0,0,2.34c0,.14.23.12.3,0a8.21,8.21,0,0,0,.63-2.37c.18-.9.39-1.81.55-2.72A.47.47,0,0,0,379.59,237.16Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 379.769px 239.636px;"
                                    id="elxafrevdjsd" class="animable"></path>
                                <path
                                    d="M335.82,236.93c4.8-.49,7.25-.71,11.88-2.25a28.12,28.12,0,0,0,11.52-7.11,22.53,22.53,0,0,0,4.42-6.18c0-.09.18,0,.15.07a20.85,20.85,0,0,1-3.12,6.19,23.55,23.55,0,0,1-5.08,4.84,26.51,26.51,0,0,1-12.89,5,20.47,20.47,0,0,1-6.94-.11C335.5,237.32,335.6,237,335.82,236.93Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 349.699px 229.543px;"
                                    id="elb15a2c131b" class="animable"></path>
                                <path
                                    d="M370,405.8c-.13-1.09-.28-2.17-.43-3.25-.29-2.08-.64-4.15-1-6.22-.64-4.17-1.36-8.32-2.09-12.48-1.48-8.28-3.17-16.53-5-24.74-1-4.65-2.19-9.24-3.43-13.83-.08-.31-.53-.16-.48.15.76,4.2,1.48,8.4,2.34,12.58s1.71,8.34,2.54,12.51c1.64,8.25,3.16,16.52,4.8,24.77.46,2.33.87,4.66,1.33,7,.23,1.16.46,2.33.71,3.48s.61,2.29.8,3.46c0,.11.18.06.17-.05C370.17,408.06,370.15,406.92,370,405.8Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 363.913px 377.2px;"
                                    id="elpfoqi43xk8o" class="animable"></path>
                                <path
                                    d="M402.35,343.5c-1.56-7.78-3.66-15.46-5.78-23.1-4.26-15.38-9.28-30.55-14.28-45.7L378,261.6c-.73-2.19-4.26-14-4.7-15.08a.09.09,0,0,0-.18.06c1,4,2.4,9.86,3.57,13.83s2.42,7.81,3.64,11.72c2.39,7.68,4.83,15.34,7.16,23,4.59,15.21,9.16,30.42,12.89,45.87,1,4.33,2.08,8.66,3,13s1.76,8.71,2.67,13.06a.11.11,0,0,0,.22,0C405.49,359.15,403.92,351.31,402.35,343.5Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 389.693px 306.813px;"
                                    id="ellm2x0qoryci" class="animable"></path>
                                <path
                                    d="M373.21,384.2c-2.58-14.84-5.67-29.6-9.1-44.27s-7.27-29.39-11.5-43.93-8.9-28.94-13.92-43.22a177.72,177.72,0,0,1-6.37-20.56c-1.55-6.93-2.33-14.43-.72-21.42a35.25,35.25,0,0,1,1.61-5.21c0-.12-.13-.22-.18-.1-5.64,13.14-2,27.51,2.31,40.47,2.36,7.09,4.87,14.14,7.19,21.24q3.57,10.95,6.84,22c4.33,14.58,8.35,29.25,11.94,44s6.81,29.65,9.63,44.59,5.21,30.06,7.62,45.13c.31,2,.56,3.93.82,5.89,0,.11.19.11.17,0C377.75,413.89,375.79,399,373.21,384.2Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 354.848px 317.164px;"
                                    id="el798khe3l94" class="animable"></path>
                                <path
                                    d="M375.86,129.77c13.07,4.61,53.44,24.09,53.39,35.92-.05,11.34-12.32,15-25.28,7.18-9.28-5.59-22.79-20.07-31.41-30.71C365.57,133.54,363.77,125.51,375.86,129.77Z"
                                    style="fill: rgb(247, 169, 160); transform-origin: 398.147px 152.811px;"
                                    id="elg4zht9u3z2v" class="animable"></path>
                                <path
                                    d="M375.86,129.77c13.07,4.61,53.44,24.09,53.39,35.92-.05,11.34-12.32,15-25.28,7.18-9.28-5.59-22.79-20.07-31.41-30.71C365.57,133.54,363.77,125.51,375.86,129.77Z"
                                    style="fill: rgb(197, 63, 63); transform-origin: 398.147px 152.811px;"
                                    id="eljgd9i94n1n" class="animable"></path>
                                <g id="el5hn39tgfp1m">
                                    <path
                                        d="M372.56,142.16c8.62,10.64,22.13,25.12,31.41,30.71a30,30,0,0,0,8.69,3.61l-44.8-47.12C365.71,131.28,368.05,136.59,372.56,142.16Z"
                                        style="opacity: 0.1; transform-origin: 389.856px 152.92px;" class="animable">
                                    </path>
                                </g>
                                <path
                                    d="M413.56,173.46c7.6,6,16.26-2.77,15.6-9-1.57-14.66-14.85-37.06-22.37-48.06-2.42-3.54-26.05,10.88-24.09,15C385.06,136.38,398.66,161.61,413.56,173.46Z"
                                    style="fill: rgb(247, 169, 160); transform-origin: 405.89px 145.657px;"
                                    id="elijgdh2ct67q" class="animable"></path>
                                <path
                                    d="M384.75,138.65l32.71-18s13.63,34.17,11.68,46.7c-1.84,11.83-12.74,9.32-18.61,5.35C402.41,167.22,384.75,138.65,384.75,138.65Z"
                                    style="fill: rgb(197, 63, 63); transform-origin: 407.04px 148.325px;"
                                    id="elr2anfn75nij" class="animable"></path>
                                <path
                                    d="M408.24,170.38c-.47-.55-.94-1.1-1.42-1.64-1-1.1-1.92-2.24-2.86-3.37-1.9-2.29-3.78-4.6-5.57-7-3.58-4.74-12.4-18.46-13.32-19.83-.05-.07-.42,0-.26.38.07.21,5.47,9.3,7.1,11.76a134,134,0,0,0,10.8,14.3,2.09,2.09,0,0,0,.2.22,6.07,6.07,0,0,0,.24.59,12.34,12.34,0,0,0,.74,1.39,14.82,14.82,0,0,0,1.9,2.48.06.06,0,1,0,.09-.07,19.1,19.1,0,0,1-1.71-2.66c-.18-.32-.37-.63-.55-.94.82.9,1.65,1.79,2.48,2.68.57.61,1.15,1.21,1.76,1.79s1.14,1.17,1.78,1.68c.05,0,.11,0,.07-.08C409.26,171.48,408.72,171,408.24,170.38Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 397.247px 155.328px;"
                                    id="el3r9x079kz3n" class="animable"></path>
                                <path
                                    d="M402.58,138.22c3.51-2,7-3.93,10.49-6.05,1.95-1.21,3.92-2.4,5.87-3.63.07,0,0-.18-.07-.14-3.6,1.83-7.21,3.68-10.73,5.7s-7,4-10.51,6q-3,1.76-5.83,3.69s0,.1,0,.08C395.5,142.19,399,140.22,402.58,138.22Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 405.384px 136.133px;"
                                    id="elzakk1z6cv59" class="animable"></path>
                                <path
                                    d="M407.39,118.76c-.65-3.08-4.86-16.94-6.9-20.53S391.85,84.72,388.93,86s-1.2,4.34-1.2,4.34-3.46-3.75-6.27-2.19,0,6.22,0,6.22-3.82-3.59-6.52-1.83.92,6,.92,6-3.35-3.44-5-1.06c-1.94,2.86,4.94,8.51,6.89,12.64.45.94,7.63,19.68,7.63,19.68Z"
                                    style="fill: rgb(247, 169, 160); transform-origin: 388.954px 107.843px;"
                                    id="elonswse91mm" class="animable"></path>
                                <path
                                    d="M375.54,98.14c5.06,4.17,6.55,6.87,8.57,13,0,.12.22.08.19,0-1.43-6.18-2.81-9.84-8.57-13.21C375.45,97.72,375.3,98,375.54,98.14Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 379.861px 104.535px;"
                                    id="elaxms7bm5fvu" class="animable"></path>
                                <path
                                    d="M381.05,94.05c4.87,4.79,6.51,7.7,9.1,14,0,.09.19,0,.16-.06-2-6.35-3.49-10-9-14.11C381.08,93.65,380.82,93.83,381.05,94.05Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 385.637px 100.931px;"
                                    id="elf6h7icp6ahs" class="animable"></path>
                                <path
                                    d="M387.85,90.66c4.38,5,6.32,8.09,8,14.49a.12.12,0,0,0,.24-.05C395,98.4,392.62,94.5,388,90.54,387.7,90.27,387.57,90.35,387.85,90.66Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 391.894px 97.811px;"
                                    id="elka3mr1teffh" class="animable"></path>
                                <path
                                    d="M372.13,94.84l8.13,28.24a1.42,1.42,0,0,0,1.76,1L395.36,120a1.48,1.48,0,0,0,.94-1.83L388.17,89.9a1.42,1.42,0,0,0-1.76-1L373.08,93A1.48,1.48,0,0,0,372.13,94.84Z"
                                    style="fill: rgb(55, 71, 79); transform-origin: 384.214px 106.49px;"
                                    id="el9cxjg3r9llb" class="animable"></path>
                                <path
                                    d="M372.94,94.59l8.13,28.24a1.41,1.41,0,0,0,1.76,1l13.33-4.11a1.48,1.48,0,0,0,.95-1.83L389,89.65a1.41,1.41,0,0,0-1.76-1l-13.34,4.1A1.47,1.47,0,0,0,372.94,94.59Zm1.15.81c-.4-1.38.08-1.75.75-2l2.39-.73c.14,0,.3.08.36.28l0,.09c.13.47.38.4.69.3l5.53-1.7c.31-.1.56-.18.42-.65l0-.08a.36.36,0,0,1,.14-.45l2.39-.73c.67-.21,1.24-.3,1.67,1.21l7.57,26.3a1.37,1.37,0,0,1-.82,1.72l-11.93,3.67a1.31,1.31,0,0,1-1.6-1Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 385.023px 106.24px;"
                                    id="el1gfytsmv6n5" class="animable"></path>
                                <path
                                    d="M380.15,92.17l1.51-.46a.11.11,0,0,0,.07-.13h0a.1.1,0,0,0-.13-.06l-1.5.46a.11.11,0,0,0-.07.13h0A.09.09,0,0,0,380.15,92.17Z"
                                    style="fill: rgb(255, 255, 255); transform-origin: 380.88px 91.8449px;"
                                    id="el1eajrkcoq0h" class="animable"></path>
                                <line x1="395.53" y1="115.61" x2="395.58" y2="115.6"
                                    style="fill: none; transform-origin: 395.555px 115.605px;" id="el1z0ceo03uf6"
                                    class="animable"></line>
                                <path
                                    d="M374.09,95.4l7.57,26.3a1.31,1.31,0,0,0,1.6,1L395.19,119a1.37,1.37,0,0,0,.82-1.72L388.44,91c-.43-1.51-1-1.42-1.67-1.21l-2.39.73a.36.36,0,0,0-.14.45l0,.08c.14.47-.11.55-.42.65l-5.53,1.7c-.31.1-.56.17-.69-.3l0-.09c-.06-.2-.22-.33-.36-.28l-2.39.73C374.17,93.65,373.69,94,374.09,95.4Z"
                                    style="fill: rgb(255, 255, 255); transform-origin: 385.013px 106.206px;"
                                    id="elxrhmb4mnp29" class="animable"></path>
                                <g id="freepik--u5Zjqx--inject-126" class="animable"
                                    style="transform-origin: 385.225px 90.9803px;">
                                    <path
                                        d="M385,91h0a.35.35,0,0,1,.2-.16.28.28,0,0,1,.25,0v0h0l0,0-.08,0h-.22l-.07,0-.05,0,0,.06,0,0Z"
                                        style="fill: rgb(166, 166, 166); transform-origin: 385.225px 90.9053px;"
                                        id="elo44rfunwco" class="animable"></path>
                                    <path
                                        d="M385.41,91l0,0a.25.25,0,0,0-.17,0,.3.3,0,0,0-.2.15l.05,0a.18.18,0,0,1,.13-.11A.25.25,0,0,1,385.41,91Z"
                                        style="fill: rgb(166, 166, 166); transform-origin: 385.225px 91.0676px;"
                                        id="eliqwtb6xp2jj" class="animable"></path>
                                    <path
                                        d="M385.16,91.07l0,0a.13.13,0,0,1,.07-.06.14.14,0,0,1,.09,0l0,0A.17.17,0,0,0,385.16,91.07Z"
                                        style="fill: rgb(166, 166, 166); transform-origin: 385.24px 91.0363px;"
                                        id="elaidqrpv4ute" class="animable"></path>
                                    <path d="M385.26,91.12s0,0,0,0,0,0,0,0,0,0,0,0A0,0,0,0,0,385.26,91.12Z"
                                        style="fill: rgb(166, 166, 166); transform-origin: 385.26px 91.12px;"
                                        id="elwkaw7wprfs" class="animable"></path>
                                </g>
                                <path
                                    d="M387.24,90.35a.09.09,0,0,0-.12-.07.09.09,0,0,0-.07.12.09.09,0,0,0,.12.07A.09.09,0,0,0,387.24,90.35Z"
                                    style="fill: rgb(166, 166, 166); transform-origin: 387.145px 90.375px;"
                                    id="elbw3ajqubsn" class="animable"></path>
                                <path
                                    d="M386.94,90.44a.09.09,0,0,0-.12-.07.1.1,0,0,0-.07.13.11.11,0,0,0,.12.07A.1.1,0,0,0,386.94,90.44Z"
                                    style="fill: rgb(166, 166, 166); transform-origin: 386.845px 90.4679px;"
                                    id="elxteskrizm1" class="animable"></path>
                                <path
                                    d="M386.64,90.53a.1.1,0,0,0-.12-.07.12.12,0,0,0-.07.13.11.11,0,0,0,.12.07A.1.1,0,0,0,386.64,90.53Z"
                                    style="fill: rgb(166, 166, 166); transform-origin: 386.547px 90.5592px;"
                                    id="elhcsqgk3u80j" class="animable"></path>
                                <path
                                    d="M386.34,90.62a.1.1,0,0,0-.12-.07.12.12,0,0,0-.07.13.09.09,0,0,0,.12.07A.1.1,0,0,0,386.34,90.62Z"
                                    style="fill: rgb(166, 166, 166); transform-origin: 386.247px 90.6514px;"
                                    id="elnwqxlt72xb" class="animable"></path>
                                <path
                                    d="M386,90.72a.09.09,0,0,0-.12-.07.1.1,0,0,0-.07.12.09.09,0,0,0,.12.07A.09.09,0,0,0,386,90.72Z"
                                    style="fill: rgb(166, 166, 166); transform-origin: 385.906px 90.745px;"
                                    id="elseapxvd079s" class="animable"></path>
                                <polygon points="374.88 94.01 375.62 93.78 375.71 94.11 374.98 94.33 374.88 94.01"
                                    style="fill: rgb(166, 166, 166); transform-origin: 375.295px 94.055px;"
                                    id="ellizyfm8urtd" class="animable"></polygon>
                                <polygon points="374.81 94.65 374.57 93.84 375.79 93.47 376.02 94.27 374.81 94.65"
                                    style="fill: rgb(255, 255, 255); transform-origin: 375.295px 94.06px;"
                                    id="el5yn08mt0brk" class="animable"></polygon>
                                <polygon points="375.08 93.99 375.58 93.83 375.65 94.08 375.15 94.23 375.08 93.99"
                                    style="fill: rgb(166, 166, 166); transform-origin: 375.365px 94.03px;"
                                    id="elivf22kbwmga" class="animable"></polygon>
                                <polygon points="374.87 94.3 374.94 94.27 374.88 94.08 374.81 94.1 374.87 94.3"
                                    style="fill: rgb(166, 166, 166); transform-origin: 374.875px 94.19px;"
                                    id="el17r864vygkr" class="animable"></polygon>
                                <path
                                    d="M386,121l6-1.85a.14.14,0,0,1,.18.09.16.16,0,0,1-.1.19l-6,1.85a.15.15,0,0,1-.18-.1A.14.14,0,0,1,386,121Z"
                                    style="fill: rgb(166, 166, 166); transform-origin: 389.039px 120.213px;"
                                    id="elkiq2fsf2jt" class="animable"></path>
                                <path
                                    d="M383.2,105a1.39,1.39,0,0,0,1.75,1,1.46,1.46,0,0,0,.95-1.8,1.4,1.4,0,0,0-1.75-1A1.45,1.45,0,0,0,383.2,105Z"
                                    style="fill: rgb(69, 90, 100); transform-origin: 384.549px 104.601px;"
                                    id="elxl6z07zauqk" class="animable"></path>
                                <path
                                    d="M384.72,103.78a.14.14,0,0,1,.17.1.14.14,0,0,1-.26.08A.15.15,0,0,1,384.72,103.78Z"
                                    style="fill: rgb(255, 255, 255); transform-origin: 384.757px 103.902px;"
                                    id="elksiqx3879h" class="animable"></path>
                                <path
                                    d="M384.35,103.9a.14.14,0,0,1,.17.09.15.15,0,0,1-.09.18.13.13,0,0,1-.17-.1A.14.14,0,0,1,384.35,103.9Z"
                                    style="fill: rgb(255, 255, 255); transform-origin: 384.39px 104.036px;"
                                    id="elfgf4qy6y96v" class="animable"></path>
                                <path
                                    d="M384.05,104.28a.14.14,0,0,1-.17-.09A.13.13,0,0,1,384,104a.12.12,0,0,1,.17.09A.14.14,0,0,1,384.05,104.28Z"
                                    style="fill: rgb(255, 255, 255); transform-origin: 384.022px 104.137px;"
                                    id="ele6l3nqgnp2g" class="animable"></path>
                                <path
                                    d="M384.83,104.16a.14.14,0,0,1,.17.09.15.15,0,0,1-.09.18.14.14,0,0,1-.17-.1A.14.14,0,0,1,384.83,104.16Z"
                                    style="fill: rgb(255, 255, 255); transform-origin: 384.87px 104.295px;"
                                    id="el6a6g8pkefd3" class="animable"></path>
                                <path
                                    d="M384.46,104.27a.13.13,0,0,1,.16.1.13.13,0,0,1-.09.17.14.14,0,0,1-.17-.09A.15.15,0,0,1,384.46,104.27Z"
                                    style="fill: rgb(255, 255, 255); transform-origin: 384.492px 104.405px;"
                                    id="elqdacshj05la" class="animable"></path>
                                <path
                                    d="M384.08,104.39a.14.14,0,0,1,.17.09.15.15,0,0,1-.09.18.14.14,0,0,1-.17-.1A.14.14,0,0,1,384.08,104.39Z"
                                    style="fill: rgb(255, 255, 255); transform-origin: 384.12px 104.525px;"
                                    id="el8etu6sj4qmw" class="animable"></path>
                                <path
                                    d="M384.94,104.53a.14.14,0,0,1,.17.1.14.14,0,0,1-.1.17.13.13,0,0,1-.16-.09A.15.15,0,0,1,384.94,104.53Z"
                                    style="fill: rgb(255, 255, 255); transform-origin: 384.979px 104.665px;"
                                    id="elp5hq81p4wji" class="animable"></path>
                                <path
                                    d="M384.56,104.65a.13.13,0,0,1,.17.09.14.14,0,0,1-.09.17.13.13,0,0,1-.17-.09A.14.14,0,0,1,384.56,104.65Z"
                                    style="fill: rgb(255, 255, 255); transform-origin: 384.6px 104.78px;"
                                    id="elwvfe4ieb79h" class="animable"></path>
                                <path
                                    d="M384.19,104.76a.14.14,0,0,1,.17.1.14.14,0,0,1-.09.17.13.13,0,0,1-.17-.09A.15.15,0,0,1,384.19,104.76Z"
                                    style="fill: rgb(255, 255, 255); transform-origin: 384.23px 104.897px;"
                                    id="el1phsk0mwv5y" class="animable"></path>
                                <path
                                    d="M384.67,105a.14.14,0,0,1,.17.09.15.15,0,0,1-.09.18.14.14,0,0,1-.17-.1A.14.14,0,0,1,384.67,105Z"
                                    style="fill: rgb(255, 255, 255); transform-origin: 384.71px 105.135px;"
                                    id="el0e83dfyn1sy" class="animable"></path>
                                <path
                                    d="M380.54,110.22a1.4,1.4,0,0,0,1.75,1,1.46,1.46,0,0,0,.95-1.81,1.4,1.4,0,0,0-1.75-1A1.46,1.46,0,0,0,380.54,110.22Z"
                                    style="fill: rgb(69, 90, 100); transform-origin: 381.89px 109.815px;"
                                    id="eltl3wve147t" class="animable"></path>
                                <path
                                    d="M381.49,109.5a.29.29,0,0,0,.37.21.32.32,0,0,0,.21-.39.31.31,0,0,0-.38-.21A.31.31,0,0,0,381.49,109.5Z"
                                    style="fill: rgb(255, 255, 255); transform-origin: 381.778px 109.411px;"
                                    id="elkolu9kaoqmj" class="animable"></path>
                                <path
                                    d="M381.51,110.39l0,.12a.8.8,0,0,0,.31,0,.94.94,0,0,0,.69-.34l0-.12a.52.52,0,0,0-.65-.36A.54.54,0,0,0,381.51,110.39Z"
                                    style="fill: rgb(255, 255, 255); transform-origin: 381.994px 110.097px;"
                                    id="elel7bc1tgk7" class="animable"></path>
                                <path
                                    d="M387,103.83a1.39,1.39,0,0,0,1.75,1,1.44,1.44,0,0,0,.94-1.8,1.39,1.39,0,0,0-1.74-1A1.46,1.46,0,0,0,387,103.83Z"
                                    style="fill: rgb(69, 90, 100); transform-origin: 388.348px 103.431px;"
                                    id="el4fyuevqwigs" class="animable"></path>
                                <path
                                    d="M388.59,104.19s0,0,0,0l-.11-.37s0,0,0,0a.05.05,0,0,0,0,0l.11.37S388.57,104.2,388.59,104.19Z"
                                    style="fill: rgb(255, 255, 255); transform-origin: 388.535px 104.007px;"
                                    id="els6vyttkrotd" class="animable"></path>
                                <path
                                    d="M388.39,104.25l.4-.12s0,0,0,0,0,0,0,0l-.4.12a.05.05,0,0,0,0,0S388.38,104.26,388.39,104.25Z"
                                    style="fill: rgb(255, 255, 255); transform-origin: 388.588px 104.192px;"
                                    id="el5b8hx9yltdr" class="animable"></path>
                                <path
                                    d="M388,103l.16.54a.27.27,0,0,0,.33.18.26.26,0,0,0,.18-.22.24.24,0,0,0,0-.12l-.16-.54a.27.27,0,0,0-.33-.18.24.24,0,0,0-.15.13.34.34,0,0,0,0,.2Z"
                                    style="fill: rgb(255, 255, 255); transform-origin: 388.339px 103.19px;"
                                    id="eludm5erzzn7l" class="animable"></path>
                                <path
                                    d="M388.48,103.82a.38.38,0,0,0,.23-.18.41.41,0,0,0,0-.31l-.06-.22a0,0,0,0,0-.07,0l.07.23a.39.39,0,0,1,0,.26.28.28,0,0,1-.2.15.32.32,0,0,1-.39-.23l-.06-.22s0,0,0,0a.05.05,0,0,0,0,0l.06.22a.39.39,0,0,0,.47.28Z"
                                    style="fill: rgb(255, 255, 255); transform-origin: 388.37px 103.465px;"
                                    id="elcei0e3sfiza" class="animable"></path>
                                <path
                                    d="M384.36,109.05a1.4,1.4,0,0,0,1.75,1,1.46,1.46,0,0,0,.95-1.8,1.39,1.39,0,0,0-1.75-1A1.46,1.46,0,0,0,384.36,109.05Z"
                                    style="fill: rgb(69, 90, 100); transform-origin: 385.71px 108.649px;"
                                    id="elycmo3vmqswh" class="animable"></path>
                                <path
                                    d="M384.87,108.7l.11.35a.1.1,0,0,0,.14.06l.14-.09.07,0-.12-.42H385A.1.1,0,0,0,384.87,108.7Z"
                                    style="fill: rgb(255, 255, 255); transform-origin: 385.1px 108.858px;"
                                    id="elevzxfrikgzv" class="animable"></path>
                                <path
                                    d="M385.28,108.49l.15.51a.17.17,0,0,0,.22.12l.59-.18a.19.19,0,0,0,.13-.23l-.15-.51a.19.19,0,0,0-.23-.13l-.59.19A.19.19,0,0,0,385.28,108.49Z"
                                    style="fill: rgb(255, 255, 255); transform-origin: 385.825px 108.597px;"
                                    id="elfnzdkumdte8" class="animable"></path>
                                <path
                                    d="M388.18,107.87a1.39,1.39,0,0,0,1.75,1,1.46,1.46,0,0,0,.95-1.8,1.4,1.4,0,0,0-1.75-1A1.46,1.46,0,0,0,388.18,107.87Z"
                                    style="fill: rgb(69, 90, 100); transform-origin: 389.53px 107.471px;"
                                    id="elt8k9inwpczp" class="animable"></path>
                                <path
                                    d="M389,107.53l.43-.13-.13-.45a.11.11,0,0,1,.06-.11.09.09,0,0,1,.11.06l.13.45.43-.14a.09.09,0,0,1,.1.06.08.08,0,0,1-.05.11l-.43.14.12.44a.08.08,0,0,1-.05.11.09.09,0,0,1-.11-.06l-.13-.44-.43.13a.09.09,0,0,1-.11-.06A.09.09,0,0,1,389,107.53Z"
                                    style="fill: rgb(255, 255, 255); transform-origin: 389.537px 107.455px;"
                                    id="elydw2xchednl" class="animable"></path>
                                <path
                                    d="M379.38,106.19a1.4,1.4,0,0,0,1.75,1,1.47,1.47,0,0,0,.95-1.81,1.4,1.4,0,0,0-1.75-1A1.47,1.47,0,0,0,379.38,106.19Z"
                                    style="fill: rgb(69, 90, 100); transform-origin: 380.73px 105.785px;"
                                    id="elpfhcaq2plq" class="animable"></path>
                                <path
                                    d="M380.05,105.92a.44.44,0,0,1,0-.1.79.79,0,0,1,0-.22.55.55,0,0,1,0-.17l0-.08h0l.06,0,0,0a.72.72,0,0,0-.05.54.69.69,0,0,0,.33.42l0,0,0,.07h0l-.06,0-.11-.09-.09-.1-.09-.17s0,0,0-.06S380.05,105.93,380.05,105.92Z"
                                    style="fill: rgb(255, 255, 255); transform-origin: 380.21px 105.865px;"
                                    id="elipf2b4i9hlp" class="animable"></path>
                                <path
                                    d="M380.26,105.82a.56.56,0,0,1,.06-.36l.1.05a.51.51,0,0,0,0,.36.48.48,0,0,0,.22.28l-.05.11A.6.6,0,0,1,380.26,105.82Z"
                                    style="fill: rgb(255, 255, 255); transform-origin: 380.446px 105.86px;"
                                    id="elyfc6xhzajr" class="animable"></path>
                                <path
                                    d="M380.52,105.57l.1.05a.25.25,0,0,0,0,.19.26.26,0,0,0,.11.14l0,.1A.35.35,0,0,1,380.52,105.57Z"
                                    style="fill: rgb(255, 255, 255); transform-origin: 380.609px 105.81px;"
                                    id="elzjk12o0uwk" class="animable"></path>
                                <polygon points="381.24 105.85 381.46 105.78 381.33 105.34 381.11 105.41 381.24 105.85"
                                    style="fill: rgb(255, 255, 255); transform-origin: 381.285px 105.595px;"
                                    id="elxn872eb4q7l" class="animable"></polygon>
                                <polygon points="381.11 105.41 380.65 105.36 380.88 106.16 381.24 105.85 381.11 105.41"
                                    style="fill: rgb(255, 255, 255); transform-origin: 380.945px 105.76px;"
                                    id="elyh2zwn9oe3" class="animable"></polygon>
                                <path
                                    d="M386.05,115.82a1.64,1.64,0,0,0,2.06,1.14,1.72,1.72,0,0,0,1.12-2.12,1.64,1.64,0,0,0-2.06-1.15A1.72,1.72,0,0,0,386.05,115.82Z"
                                    style="fill: rgb(197, 63, 63); transform-origin: 387.639px 115.325px;"
                                    id="elfepgiwdb4t" class="animable"></path>
                                <path
                                    d="M386.74,115.61a.22.22,0,0,1,0-.08.29.29,0,0,1,0-.09l0-.07.06-.08a1,1,0,0,1,.28-.22,1.92,1.92,0,0,1,.78-.24.82.82,0,0,1,.35,0l.09,0,.08,0,0,0a.21.21,0,0,1,.06.1h0l-.51.16h0a.16.16,0,0,0-.17,0,2.15,2.15,0,0,0-.45.14.16.16,0,0,0-.12.14s0,0,0,0l-.5.15Z"
                                    style="fill: rgb(255, 255, 255); transform-origin: 387.565px 115.211px;"
                                    id="eltn7lfiag4ut" class="animable"></path>
                                <path
                                    d="M388.57,115.17h0c0,.06,0,.12.05.18a.06.06,0,0,1-.05.08l-.37.12s-.08,0-.09,0,0-.1,0-.15,0,0,0,0Z"
                                    style="fill: rgb(255, 255, 255); transform-origin: 388.365px 115.36px;"
                                    id="elkr9kc1gl0z" class="animable"></path>
                                <path
                                    d="M386.77,115.72l.5-.16a1.52,1.52,0,0,1,.06.2.05.05,0,0,1,0,.08l-.38.12a.06.06,0,0,1-.08,0l-.06-.18Z"
                                    style="fill: rgb(255, 255, 255); transform-origin: 387.06px 115.768px;"
                                    id="elmj52n6f1mp" class="animable"></path>
                                <path
                                    d="M385,100.7a.33.33,0,0,1-.26,0,.06.06,0,0,1,0-.08.06.06,0,0,1,.08,0,.28.28,0,0,0,.18,0,.29.29,0,0,0,.16-.13.3.3,0,0,0,0-.21.29.29,0,0,0-.13-.16.27.27,0,0,0-.2,0,.25.25,0,0,0-.15.11.07.07,0,0,1-.09,0,.07.07,0,0,1,0-.09.42.42,0,0,1,.21-.16.4.4,0,0,1,.22.76Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 384.913px 100.358px;"
                                    id="elabemzp949b" class="animable"></path>
                                <path
                                    d="M384.33,100.58a.11.11,0,1,0-.22.06l.07.24a.07.07,0,0,1,0,.08.06.06,0,0,1-.08,0l-.07-.24a.25.25,0,0,1,.16-.3h.12l0-.18a.06.06,0,0,1,0-.07.05.05,0,0,1,.07,0l.18.62h0s0,.06,0,.06a.05.05,0,0,1-.07,0Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 384.291px 100.565px;"
                                    id="el94cr3i49ihw" class="animable"></path>
                                <path
                                    d="M383.29,100.71a.06.06,0,0,1,0-.08s.05,0,.06,0a.25.25,0,0,1,.13-.09.21.21,0,0,1,.19,0,.26.26,0,0,1,.13.16.3.3,0,0,1,0,.21.24.24,0,0,1-.15.13.26.26,0,0,1-.15,0,.08.08,0,0,1,0,.06.06.06,0,0,1-.07,0l-.06-.21Zm.24.27a.14.14,0,0,0,.11,0,.18.18,0,0,0,.08-.07.17.17,0,0,0,0-.12.2.2,0,0,0-.07-.1.14.14,0,0,0-.11,0,.1.1,0,0,0-.08.07.13.13,0,0,0,0,.12A.18.18,0,0,0,383.53,101Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 383.547px 100.814px;"
                                    id="eloqn97nhr58" class="animable"></path>
                                <path
                                    d="M382.81,100.79a.33.33,0,0,1,.14,0l0,0h0a.06.06,0,1,1,.11,0l.12.41s0,.07,0,.07-.07,0-.07,0L383,101l-.07-.08-.06,0h-.07a.06.06,0,0,1,0-.11Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 382.972px 100.988px;"
                                    id="elhimpxd2m5rt" class="animable"></path>
                                <path
                                    d="M382.57,100.7l.18.62a.07.07,0,0,1,0,.08s-.07,0-.07,0l-.18-.63a.05.05,0,0,1,0-.07A.06.06,0,0,1,382.57,100.7Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 382.624px 101.044px;"
                                    id="el3afbgj1hlam" class="animable"></path>
                                <path
                                    d="M382.21,100.81a.07.07,0,0,1,0-.08.07.07,0,0,1,.07,0v0a.06.06,0,1,1-.11,0Zm.1.14a.05.05,0,0,1,.07,0l.12.41a.06.06,0,0,1-.11,0l-.12-.41A.06.06,0,0,1,382.31,101Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 382.332px 101.058px;"
                                    id="elusex50e4rqh" class="animable"></path>
                                <path
                                    d="M382,101.61a.3.3,0,0,1-.21,0,.05.05,0,0,1,0-.07.06.06,0,0,1,.08,0,.18.18,0,0,0,.2-.09.11.11,0,0,0,0-.08l-.32.1a.06.06,0,0,1-.07,0h0a.26.26,0,0,1,.17-.32.28.28,0,0,1,.16.53Zm-.13-.43a.21.21,0,0,0-.12.16l.29-.09A.15.15,0,0,0,381.89,101.18Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 381.92px 101.414px;"
                                    id="el30fw2xj32oo" class="animable"></path>
                                <path
                                    d="M383,95.19a.29.29,0,0,1-.16,0,0,0,0,0,1,0-.05,0,0,0,0,1,0,0,.24.24,0,0,0,.12,0,.16.16,0,0,0,.1-.08.15.15,0,0,0,0-.13.16.16,0,0,0-.08-.1.13.13,0,0,0-.12,0,.14.14,0,0,0-.1.07,0,0,0,0,1,0,0s0,0,0,0a.32.32,0,0,1,.13-.1.25.25,0,0,1,.31.17A.26.26,0,0,1,383,95.19Z"
                                    style="fill: rgb(199, 199, 199); transform-origin: 382.98px 94.9956px;"
                                    id="elq2mhi9b6ltp" class="animable"></path>
                                <path
                                    d="M382.36,95.06a0,0,0,0,1,0,0l0,0,.08,0a.13.13,0,0,1,.12,0,.2.2,0,0,1,.08.1.28.28,0,0,1,0,.13.16.16,0,0,1-.1.08.14.14,0,0,1-.09,0s0,0,0,0,0,0,0,0l0-.13Zm.14.17h.07a.07.07,0,0,0,.05,0,.09.09,0,0,0,0-.07.1.1,0,0,0-.05-.06,0,0,0,0,0-.06,0,.07.07,0,0,0,0,0,.11.11,0,0,0,0,.08Z"
                                    style="fill: rgb(199, 199, 199); transform-origin: 382.504px 95.2114px;"
                                    id="el4lwcepdu3bl" class="animable"></path>
                                <path d="M382.18,95l.11.39s0,0,0,0a0,0,0,0,1,0,0l-.11-.39s0,0,0,0A0,0,0,0,1,382.18,95Z"
                                    style="fill: rgb(199, 199, 199); transform-origin: 382.235px 95.195px;"
                                    id="elo1flgv4gjfk" class="animable"></path>
                                <path d="M382,95l.11.39s0,0,0,0a0,0,0,0,1-.05,0L382,95s0,0,0-.05S382,95,382,95Z"
                                    style="fill: rgb(199, 199, 199); transform-origin: 382.055px 95.163px;"
                                    id="eloezzou16tub" class="animable"></path>
                                <path
                                    d="M381.8,95.09a0,0,0,0,1,0,0,.05.05,0,0,1,.05,0h0a0,0,0,0,1,0,0,.05.05,0,0,1-.05,0Zm.06.08s0,0,0,0l.08.26s0,0,0,0,0,0,0,0l-.07-.26A0,0,0,0,1,381.86,95.17Z"
                                    style="fill: rgb(199, 199, 199); transform-origin: 381.87px 95.2566px;"
                                    id="elt5hqtvlxma" class="animable"></path>
                                <path
                                    d="M381.58,95.26a.11.11,0,0,1,.08,0s0,0,0,0a0,0,0,0,1,.05,0l0,.1.05.16a0,0,0,0,1,0,0l0,0h0l0-.15a.07.07,0,0,0-.09,0,.08.08,0,0,0,0,.09l0,.15a0,0,0,0,1,0,.05.05.05,0,0,1-.05,0l0-.15A.15.15,0,0,1,381.58,95.26Z"
                                    style="fill: rgb(199, 199, 199); transform-origin: 381.645px 95.4596px;"
                                    id="el5oop1xe2f23" class="animable"></path>
                                <path
                                    d="M381.09,95.59l0-.13s0,0,0,0a0,0,0,0,1,.05,0,.13.13,0,0,1,.07-.05.19.19,0,0,1,.13,0,.21.21,0,0,1,.07.11.15.15,0,0,1,0,.13.18.18,0,0,1-.09.08.14.14,0,0,1-.09,0,.07.07,0,0,0,.1,0l0,0a.06.06,0,0,1,.06,0,0,0,0,0,1,0,.06l-.06,0a.16.16,0,0,1-.2-.11l0-.12Zm.11,0a.08.08,0,0,0,.12,0,.08.08,0,0,0,0-.07.07.07,0,0,0,0-.06.08.08,0,0,0-.12,0,.08.08,0,0,0,0,.07A.07.07,0,0,0,381.2,95.63Z"
                                    style="fill: rgb(199, 199, 199); transform-origin: 381.257px 95.5976px;"
                                    id="elza4lszp6tx" class="animable"></path>
                                <path d="M381,95.75a0,0,0,0,1-.09,0,.06.06,0,0,1,0-.07S381,95.72,381,95.75Z"
                                    style="fill: rgb(199, 199, 199); transform-origin: 380.949px 95.715px;"
                                    id="elzp9tr944nvc" class="animable"></path>
                                <path
                                    d="M380.85,95.79a.07.07,0,0,1,0,.07s-.05,0-.06,0,0,0,0-.06S380.84,95.77,380.85,95.79Z"
                                    style="fill: rgb(199, 199, 199); transform-origin: 380.822px 95.8123px;"
                                    id="elzrdtlm6gmgn" class="animable"></path>
                                <path
                                    d="M380.7,95.84a0,0,0,0,1,0,.06s-.06,0-.06,0a.05.05,0,0,1,0-.07A.05.05,0,0,1,380.7,95.84Z"
                                    style="fill: rgb(199, 199, 199); transform-origin: 380.663px 95.8621px;"
                                    id="elj4mlp20oug" class="animable"></path>
                                <path
                                    d="M382.12,99.85a2,2,0,0,0,.6.06,1.9,1.9,0,0,0,1.35-.67,2,2,0,0,0,.49-1.42,2,2,0,0,0-2-1.89,2,2,0,0,0-.41,3.92Z"
                                    style="fill: rgb(199, 199, 199); transform-origin: 382.629px 97.9213px;"
                                    id="el2nni3hwmh42" class="animable"></path>
                                <path
                                    d="M382,97.88a.58.58,0,0,0,.73.4.61.61,0,0,0,.4-.75.58.58,0,0,0-.73-.41A.61.61,0,0,0,382,97.88Z"
                                    style="fill: rgb(255, 255, 255); transform-origin: 382.564px 97.7004px;"
                                    id="elwbnuuw8bmy" class="animable"></path>
                                <path
                                    d="M382.05,99.61l.07.24a2,2,0,0,0,.6.06,1.9,1.9,0,0,0,1.35-.67L384,99a1,1,0,0,0-1.26-.7A1.06,1.06,0,0,0,382.05,99.61Z"
                                    style="fill: rgb(255, 255, 255); transform-origin: 383.038px 99.0843px;"
                                    id="el2q8qkz190j7" class="animable"></path>
                                <path
                                    d="M385.7,133.7s-6.62-4.86-9.05-7.64-7.71-16.46-4.82-17.77c3.74-1.69,8.34,5.62,10.12,9.49a16.56,16.56,0,0,1,12.65,4.82C399,127.13,385.7,133.7,385.7,133.7Z"
                                    style="fill: rgb(247, 169, 160); transform-origin: 383.24px 120.87px;"
                                    id="elmgxb40cq6j" class="animable"></path>
                                <path
                                    d="M326.47,217.2c.17.18,71-.33,71.69-1.06.89-1-15.9-77.67-23.27-87.08-1.58-2-6.72-2.52-11.08-1.94a19.5,19.5,0,0,0-3.35.73l-.12,0a8,8,0,0,0-2.45,1.23c-12,9.82-21.91,43.8-24.2,54C329.91,199.91,325.88,216.54,326.47,217.2Z"
                                    style="fill: rgb(235, 235, 235); transform-origin: 362.303px 172.067px;"
                                    id="elg5abok5yxwh" class="animable"></path>
                                <path
                                    d="M359.59,128s4.62,31.55,5.71,39.72.05,51.36.05,51.36l-44.47,3.75s9.32-28.69,9.42-30.5c0,0,7.37-34.47,15-48.71A43.16,43.16,0,0,1,359.59,128Z"
                                    style="fill: rgb(197, 63, 63); transform-origin: 343.339px 175.415px;"
                                    id="elyux5dhas4k" class="animable"></path>
                                <path
                                    d="M374.4,128.57s6,31.91,6.54,34.55,8.22,54.5,8.22,54.5l11.14.23s-3.55-16.09-4.72-21.9C392.14,178.91,381.34,133.47,374.4,128.57Z"
                                    style="fill: rgb(197, 63, 63); transform-origin: 387.35px 173.21px;"
                                    id="ela6jryezrlf" class="animable"></path>
                                <path
                                    d="M372,137.67c-3.32.75-10.18-3.24-12.49-8-.16-.32.5-3.65,1.1-7.73.36-2.48.7-5.25.83-7.8,0-.52,15.78,4.68,15.78,4.68a41.12,41.12,0,0,0-2,9.71,5.94,5.94,0,0,0,.06,1c0,.05,0,.11,0,.18C375.5,131.75,375.57,136.88,372,137.67Z"
                                    style="fill: rgb(247, 169, 160); transform-origin: 368.353px 125.932px;"
                                    id="eluvxwmv7yeyb" class="animable"></path>
                                <path
                                    d="M375.26,129.57c0,.05,0,.11,0,.17a9.89,9.89,0,0,1-1.64,0c-9.4-.68-11.29-12.58-11.62-15.59,2.82.55,15.22,4.65,15.22,4.65a40.57,40.57,0,0,0-2,9.71A5.94,5.94,0,0,0,375.26,129.57Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 369.61px 121.962px;"
                                    id="elagc89y9pccc" class="animable"></path>
                                <path
                                    d="M358.27,94.9c-1.47,5.75,2.29,22,6.49,25.44,6.1,5,15.69,5.08,19.85-2.16,4-7-1.23-28.08-5.89-31.18C371.86,82.42,360.43,86.41,358.27,94.9Z"
                                    style="fill: rgb(247, 169, 160); transform-origin: 371.989px 104.481px;"
                                    id="eluuckvydqvz" class="animable"></path>
                                <path
                                    d="M374.25,104.15s-.07.07-.06.12c.28,1.09.42,2.38-.49,3,0,0,0,.07,0,.05C374.9,106.85,374.69,105.14,374.25,104.15Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 374.148px 105.737px;"
                                    id="elan9c3q1vucc" class="animable"></path>
                                <path d="M373,103.23c-1.79.27-1.13,3.83.53,3.58S374.51,103,373,103.23Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 373.215px 105.021px;"
                                    id="elb6ie0aixa1" class="animable"></path>
                                <path
                                    d="M380.55,103.17s.09,0,.1.08c.17,1.11.55,2.36,1.62,2.54,0,0,0,.06,0,.06C381,105.91,380.53,104.25,380.55,103.17Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 381.41px 104.511px;"
                                    id="elquha9zlsd8o" class="animable"></path>
                                <path d="M381.32,101.84c1.75-.47,2.55,3.07.93,3.5S379.85,102.23,381.32,101.84Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 381.835px 103.587px;"
                                    id="elfkjmaf0x3jp" class="animable"></path>
                                <path
                                    d="M371.31,101.86a12.51,12.51,0,0,0,1.28-.74,2.39,2.39,0,0,0,1.18-1,.77.77,0,0,0-.3-.88,1.88,1.88,0,0,0-1.91.15,2.74,2.74,0,0,0-1.36,1.48A.82.82,0,0,0,371.31,101.86Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 371.987px 100.487px;"
                                    id="el52jutxwu12x" class="animable"></path>
                                <path
                                    d="M382.16,98.6a14.91,14.91,0,0,1-1.49-.1,2.43,2.43,0,0,1-1.49-.4.76.76,0,0,1-.13-.92,1.9,1.9,0,0,1,1.8-.7,2.77,2.77,0,0,1,1.87.74A.81.81,0,0,1,382.16,98.6Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 380.953px 97.5275px;"
                                    id="el9w51znx3fu" class="animable"></path>
                                <path
                                    d="M375.17,114.7a1.69,1.69,0,0,0,1.05.47,3.06,3.06,0,0,0,1.13-.49,0,0,0,0,1,.06,0,1.5,1.5,0,0,1-1.29.86,1.19,1.19,0,0,1-1.05-.81C375,114.71,375.12,114.67,375.17,114.7Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 376.229px 115.11px;"
                                    id="el3qq40xypi28" class="animable"></path>
                                <path
                                    d="M375.71,111.18a3.85,3.85,0,0,0,2.82,1.21,5.19,5.19,0,0,0,1.36-.19l.26-.08.23-.08a.29.29,0,0,0,.18-.29h0a.49.49,0,0,0,0-.11h0l0-.1c-.13-.85-.45-2.13-.45-2.13.33.1,2.05.52,1.94.08a57.21,57.21,0,0,0-3.57-11.1.1.1,0,0,0-.19.07c.72,3.52,2.07,6.9,2.86,10.43a6.69,6.69,0,0,0-1.88-.21c-.11.06.67,2.46.7,2.84v0a5.33,5.33,0,0,1-4.11-.49C375.7,111,375.63,111.1,375.71,111.18Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 378.866px 105.357px;"
                                    id="el4s1pdu4920t" class="animable"></path>
                                <path
                                    d="M379.31,111.86a4.42,4.42,0,0,1-1.53,1.71,2,2,0,0,1-1.2.31c-.92-.07-1.1-.88-1.06-1.6a4.53,4.53,0,0,1,.2-1.13A5.9,5.9,0,0,0,379.31,111.86Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 377.412px 112.517px;"
                                    id="elkvy8hh9k998" class="animable"></path>
                                <path
                                    d="M377.78,113.57a2,2,0,0,1-1.2.31c-.92-.07-1.1-.88-1.06-1.6A2.1,2.1,0,0,1,377.78,113.57Z"
                                    style="fill: rgb(255, 154, 187); transform-origin: 376.647px 113.07px;"
                                    id="elfci9dud5vha" class="animable"></path>
                                <path
                                    d="M375.86,123.82a13.51,13.51,0,0,0,5.06-2.07A12.59,12.59,0,0,0,383,120a19.34,19.34,0,0,0,1.77-2.14c-.2.42-.41.85-.65,1.25a11.87,11.87,0,0,1-.83,1.14,9.59,9.59,0,0,1-2.11,1.91,9.33,9.33,0,0,1-2.56,1.24A8.23,8.23,0,0,1,375.86,123.82Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 380.315px 120.841px;"
                                    id="elzay0kthhb7m" class="animable"></path>
                                <path
                                    d="M361.59,109.44c2.84-.24.71-7.65.71-7.65s5.58-1.26,5.62-8c0,0,6.55,1.92,9.67,1.09,4.91-1.29,6.53-4.64,6.55-7.74,0-2.37-.91-6.2-2.68-7.06s-4.92,2.56-4.92,2.56-13.06.68-16.73,3.54a8,8,0,0,0-2.72,5.06s-3.29-1.09-3.5-.48,2.47,1.68,2.47,1.68-2.94,1.27-2.65,2.08,2.91-.89,2.91-.89a6.25,6.25,0,0,0-1.39,4.61C355.34,101.57,359.06,109.67,361.59,109.44Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 368.765px 94.693px;"
                                    id="elaxzj9v3a1zg" class="animable"></path>
                                <path
                                    d="M367.76,93c0-.05-.12,0-.11,0a7.89,7.89,0,0,1-4.49,9.1c-.1,0-.05.21.06.17A7.15,7.15,0,0,0,367.76,93Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 365.651px 97.6264px;"
                                    id="el2gbj8bxasn8" class="animable"></path>
                                <path d="M361.7,102.25a0,0,0,0,0,0,.07S361.74,102.26,361.7,102.25Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 361.709px 102.285px;"
                                    id="el0qhpzswd5na" class="animable"></path>
                                <path
                                    d="M378.86,83a49.16,49.16,0,0,0-15.91.82,7.82,7.82,0,0,0-6.14,8c0,.14.24.16.25,0,.22-2.58,1-5.15,3.29-6.63,2.06-1.31,5-1.44,7.38-1.69a80.9,80.9,0,0,1,11.12-.24C379,83.29,379,83,378.86,83Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 367.883px 87.3143px;"
                                    id="eli1xaj1xov7n" class="animable"></path>
                                <path d="M363,108.23s-4.05-5-6.36-3.56,1,9,3.87,9.82a2.86,2.86,0,0,0,3.73-1.8Z"
                                    style="fill: rgb(247, 169, 160); transform-origin: 360.052px 109.541px;"
                                    id="elxq699x67m78" class="animable"></path>
                                <path
                                    d="M357.68,106.79a0,0,0,0,0,0,.08c2,.67,3.19,2.43,4,4.28a1.58,1.58,0,0,0-2.39-.27c-.05,0,0,.11.06.1a1.76,1.76,0,0,1,2,.48,8.57,8.57,0,0,1,1,1.51c.11.17.42,0,.34-.14l0,0C362.59,110.26,360.4,106.87,357.68,106.79Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 360.191px 109.916px;"
                                    id="elu9cioagxybt" class="animable"></path>
                                <path
                                    d="M350.65,135.28c-17.84,20-31.27,48.25-31.11,54.89.18,7.31,9.48,33.05,18.35,45.15,1.14,1.55,8,.9,13.89-2.31,6.15-3.39,11.21-9.45,10-11.25-4.55-6.76-15.32-33-15.23-37.08.09-3.79,8.93-27,12.29-40.41C362.07,131.38,359,126,350.65,135.28Z"
                                    style="fill: rgb(247, 169, 160); transform-origin: 340.749px 183.37px;"
                                    id="elbcbfj40x5yl" class="animable"></path>
                                <path
                                    d="M327.05,233.34l33.23-16.23S347.21,188,347.19,184.8,355.78,157,359,145.6s2-24.2-12.2-7-26.59,42.85-28,49.65S327.05,233.34,327.05,233.34Z"
                                    style="fill: rgb(197, 63, 63); transform-origin: 339.566px 181.779px;"
                                    id="ell5mkazyqcs" class="animable"></path>
                                <path
                                    d="M348.89,176.43q1-3.24,2.13-6.47c.81-2.41,1.66-4.8,2.55-7.19s1.83-4.59,2.76-6.88c.07-.17.36-.06.3.11-1.1,3.07-2.14,6.17-3.17,9.26.78-1.41,1.57-2.81,2.4-4.2a.1.1,0,0,1,.18.1c-.93,1.72-1.91,3.4-2.9,5.07l-.75,2.24c-1.4,4.16-2.74,8.35-3.93,12.57a14.37,14.37,0,0,0-.6,2.9,8.82,8.82,0,0,0,.49,3.3c.61,1.95,1.28,3.88,2,5.8,1.39,3.86,2.9,7.68,4.48,11.46,1.8,4.3,3.85,8.56,5.89,12.75,0,0-1.24.33-1.27.36s-.1,0-.07-.08.78-.4.8-.4c-2.08-3.64-4.06-7.2-5.8-11s-3.29-7.62-4.68-11.52c-.72-2-1.41-4-2.05-6.07a11.36,11.36,0,0,1-.56-5.94A62.88,62.88,0,0,1,348.89,176.43Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 353.821px 186.713px;"
                                    id="elxt2mh0q0m2" class="animable"></path>
                                <path
                                    d="M326.5,224a35.41,35.41,0,0,1,3.63-1.71c1.08-.5,2.16-1,3.25-1.52,2.37-1.07,4.74-2.15,7.12-3.21s4.75-2.13,7.13-3.16,4.73-2.14,7.15-3c.1,0,.16.1.07.16-2.2,1.35-4.56,2.48-6.87,3.63s-4.6,2.21-6.93,3.26-4.78,2.06-7.19,3c-1.16.47-2.34.9-3.51,1.34a32.84,32.84,0,0,1-3.79,1.34A.07.07,0,0,1,326.5,224Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 340.677px 217.768px;"
                                    id="elzyue8b94tv8" class="animable"></path>
                            </g>
                            <g id="freepik--character-1--inject-126" class="animable animator-active"
                                style="transform-origin: 139.547px 275.683px;">
                                <path
                                    d="M108.51,454.39c-2.41-.83-57.07-42.93-58.13-45.85-.42-1.1,5.25-9.43,12.39-19.28.07-.11.15-.21.22-.31,1.47-2,27.77-36,27.77-36l35.95,28.42L98.56,415.71l-.47.59s13.71,25.47,14.54,28.81S110.91,455.22,108.51,454.39Z"
                                    style="fill: rgb(211, 118, 106); transform-origin: 88.534px 403.705px;"
                                    id="ellrmwzarp2j" class="animable"></path>
                                <path
                                    d="M50.39,408.54c1,2.93,55.71,45,58.12,45.85s4.94-6,4.12-9.28-14.54-28.82-14.54-28.82l.47-.58L102,412,66.77,384c-1.18,1.37-3.56,4.64-3.78,4.94-.08.1-.15.21-.23.3C55.63,399.12,50,407.44,50.39,408.54Z"
                                    style="fill: rgb(235, 235, 235); transform-origin: 81.5792px 419.231px;"
                                    id="elfcc162yi6xc" class="animable"></path>
                                <path
                                    d="M108.54,454.65c-2.42-.85-57.3-43.58-58.36-46.53-.41-1.12,5.34-9.47,12.59-19.37l35.46,27.44s13.7,25.76,14.52,29.13S111,455.51,108.54,454.65Z"
                                    style="fill: rgb(197, 63, 63); transform-origin: 81.5325px 421.737px;"
                                    id="el2dloia790o" class="animable"></path>
                                <path
                                    d="M109.46,451.85c-9-7.39-46.12-36.34-55.6-43-.08-.05-.12,0,0,.06,8.79,7.52,46.12,36.16,55.54,43.05C109.54,452.14,109.65,452,109.46,451.85Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 81.6729px 430.437px;"
                                    id="elrq06k1iifqq" class="animable"></path>
                                <path
                                    d="M110.75,440.59a9.4,9.4,0,0,0-7.25-2,9.09,9.09,0,0,0-5.88,3.32c0,.05.06.13.11.08a10.82,10.82,0,0,1,12.93-1.24C110.74,440.76,110.83,440.65,110.75,440.59Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 104.201px 440.25px;"
                                    id="elgaxrh1sy56g" class="animable"></path>
                                <path
                                    d="M101.09,419.89c-3.65-2.92-8.93-4.94-13.56-3.71-.18,0-.11.3,0,.33a64.34,64.34,0,0,1,13.23,3.88A.29.29,0,0,0,101.09,419.89Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 94.3215px 418.126px;"
                                    id="elt4cc358gl1" class="animable"></path>
                                <path
                                    d="M103.07,423.21c-3.65-2.92-8.93-4.94-13.56-3.71-.18,0-.11.3,0,.33a64.34,64.34,0,0,1,13.23,3.88A.29.29,0,0,0,103.07,423.21Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 96.3015px 421.446px;"
                                    id="el0khlak4c3sa" class="animable"></path>
                                <path
                                    d="M105.05,426.53c-3.65-2.92-8.93-4.94-13.56-3.71-.18.05-.11.3,0,.33A64.34,64.34,0,0,1,104.76,427,.29.29,0,0,0,105.05,426.53Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 98.2497px 424.731px;"
                                    id="elo1iy1gx3lgk" class="animable"></path>
                                <path
                                    d="M107,429.85c-3.65-2.92-8.93-4.94-13.56-3.71-.18.05-.11.3,0,.33a65,65,0,0,1,13.23,3.88A.29.29,0,0,0,107,429.85Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 100.232px 428.086px;"
                                    id="elva14ftwo4cl" class="animable"></path>
                                <path d="M63,402c-4.14-3.21-9.13,3.22-5,6.43S67.15,405.19,63,402Z"
                                    style="fill: rgb(255, 255, 255); transform-origin: 60.5035px 405.214px;"
                                    id="eloyay8buqmg9" class="animable"></path>
                                <path
                                    d="M112.72,413.16c-.66-3-4.19-3.31-6.59-2.6a24.4,24.4,0,0,0-10.67,6.81.12.12,0,0,0,0,.19.56.56,0,0,0,.43.81c4,.23,8.32,1,12.3,0C110.55,417.73,113.34,416,112.72,413.16Zm-10.61,4.31c-2-.07-4-.23-6-.22a73.86,73.86,0,0,1,6.32-3.84,26.46,26.46,0,0,1,3.28-1.43c1.75-.6,7.76-.86,5,3.43C109.25,417.78,104.47,417.54,102.11,417.47Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 104.103px 414.555px;"
                                    id="elahz2boye51q" class="animable"></path>
                                <path
                                    d="M85.24,411.61c2.83,3,6.85,4.65,10.38,6.61a.56.56,0,0,0,.79-.45c.08,0,.15,0,.14-.15a24.41,24.41,0,0,0-5.39-11.46c-1.64-1.89-4.79-3.5-7-1.32S83.6,409.86,85.24,411.61Zm-.59-3.83c0-5.1,4.91-1.66,6.07-.22a26.94,26.94,0,0,1,2,3A73,73,0,0,1,96,417.15c-1.67-1.07-3.42-2-5.14-3C88.83,413,84.67,410.59,84.65,407.78Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 89.8215px 411.032px;"
                                    id="el6da6beb3sng" class="animable"></path>
                                <path
                                    d="M73.76,374.14l35.15,29.26S165.21,337,167.27,327c2.35-11.34,8.87-100.18,8.72-104.61-.18-5.37-6.09-29-6.09-29H127.72s-5.9,116.18-7.13,119.78C119.27,317.06,73.76,374.14,73.76,374.14Z"
                                    style="fill: rgb(55, 71, 79); transform-origin: 124.876px 298.395px;"
                                    id="el1m79rde1ag" class="animable"></path>
                                <polygon points="70.04 379.7 74.98 370.38 111.52 402.41 104.33 408.71 70.04 379.7"
                                    style="fill: rgb(69, 90, 100); transform-origin: 90.78px 389.545px;"
                                    id="elcgi5w2ffg9u" class="animable"></polygon>
                                <path
                                    d="M112.23,394.59C106.8,389.34,85.59,372.5,83,371.12c-.06,0-.14.07-.09.12,1.91,2.28,20,17.09,29.23,23.52C112.19,394.83,112.32,394.67,112.23,394.59Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 97.5776px 382.949px;"
                                    id="elot2k06fj29j" class="animable"></path>
                                <path
                                    d="M172,210.88a13.21,13.21,0,0,0-1.71-.4,9.7,9.7,0,0,1-1.78-.68,13.44,13.44,0,0,1-3.25-2.3,12.23,12.23,0,0,1-2.5-4c-.37-.85-2.09-5.37-2.11-5.41s-.17,0-.15.07c.12.63,1.3,4.54,1.65,5.51a12.74,12.74,0,0,0,2.6,4.67,10.44,10.44,0,0,0,3.6,2.42,7.26,7.26,0,0,0,1.94.52,3.09,3.09,0,0,0,1.76-.1C172.12,211.11,172.06,210.91,172,210.88Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 166.29px 204.719px;"
                                    id="eloz9kco8ivo" class="animable"></path>
                                <path
                                    d="M134.68,195.47l-.89,23.33-1,23.33-2.24,46.65c-.42,7.77-.84,15.54-1.33,23.31-.06,1-.13,2-.23,3a1.35,1.35,0,0,1-.09.45,3.2,3.2,0,0,1-.19.37c-.12.23-.26.44-.39.65-.27.42-.55.82-.83,1.22-1.13,1.6-2.3,3.16-3.48,4.71-2.36,3.1-4.78,6.15-7.2,9.2q-7.27,9.14-14.66,18.18l-14.88,18,14.51-18.3c4.83-6.1,9.67-12.2,14.44-18.34q3.58-4.6,7.11-9.26c1.17-1.55,2.33-3.11,3.44-4.69.27-.4.55-.8.8-1.2s.57-.8.54-1.14c.08-.94.16-1.88.21-2.86.46-7.77.84-15.54,1.24-23.31L132,242.09l1.28-23.31Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 110.975px 281.67px;"
                                    id="el7uvzcje5a74" class="animable"></path>
                                <path
                                    d="M168.12,320.8c-.31,2.86-.59,5-.84,6.19-1.16,5.6-19.43,29-35.22,48.46l-10.83-68.11c1.93-24.17,6.49-113.93,6.49-113.93h21Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 144.675px 284.43px;"
                                    id="el7bsqxvsdhwc" class="animable"></path>
                                <path
                                    d="M227.6,453c-2.22,1.23-70.1,13.56-73,12.38-1.1-.42-3.48-10.21-6-22.12l-.07-.37c-.53-2.45-6.61-44.13-6.61-44.13l40.66-7.49,9.65,43.18.12.74s28.09,6.9,31.13,8.53S229.83,451.73,227.6,453Z"
                                    style="fill: rgb(211, 118, 106); transform-origin: 185.125px 428.365px;"
                                    id="el3znsf1g3bbh" class="animable"></path>
                                <path
                                    d="M147.55,438.12c.33,1.61.66,3.18,1,4.72l.07.38c2.53,11.9,4.91,21.69,6,22.11,2.88,1.18,70.76-11.15,73-12.38s-1.11-7.66-4.12-9.28-31.13-8.52-31.13-8.52l-.12-.75-.73-4.65Z"
                                    style="fill: rgb(235, 235, 235); transform-origin: 187.95px 447.58px;"
                                    id="elkdls2psfvm" class="animable"></path>
                                <path
                                    d="M228.2,453c-2.25,1.23-70.73,13.43-73.63,12.25-1.11-.44-3.46-10.31-6-22.32l44.13-8s28.31,7.06,31.35,8.7S230.45,451.77,228.2,453Z"
                                    style="fill: rgb(197, 63, 63); transform-origin: 188.752px 450.13px;"
                                    id="eldrhogin10aq" class="animable"></path>
                                <path
                                    d="M226.73,450.43c-11.53,1.76-57.86,10-69.13,12.59-.09,0-.08.08,0,.07,11.46-1.5,57.73-10.08,69.14-12.47C227,450.57,227,450.39,226.73,450.43Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 192.235px 456.758px;"
                                    id="eli1u0ywiu1ze" class="animable"></path>
                                <path
                                    d="M219.23,441.94a9.39,9.39,0,0,0-6.37,4,9.14,9.14,0,0,0-1.47,6.59c0,.06.14,0,.14,0a10.81,10.81,0,0,1,7.73-10.44A.08.08,0,0,0,219.23,441.94Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 215.288px 447.248px;"
                                    id="elrblpl6pd56t" class="animable"></path>
                                <path
                                    d="M197.38,435.27c-4.61.76-9.65,3.33-11.83,7.59-.09.17.15.29.27.19a64.54,64.54,0,0,1,11.74-7.23A.29.29,0,0,0,197.38,435.27Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 191.636px 439.174px;"
                                    id="el3w2474mz7hd" class="animable"></path>
                                <path
                                    d="M201.17,436c-4.61.76-9.64,3.33-11.83,7.6-.08.16.15.28.28.18a64.46,64.46,0,0,1,11.73-7.23A.29.29,0,0,0,201.17,436Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 195.427px 439.904px;"
                                    id="eldllqm20snjk" class="animable"></path>
                                <path
                                    d="M205,436.77c-4.6.76-9.64,3.33-11.83,7.6-.08.16.15.28.28.19a63.37,63.37,0,0,1,11.73-7.23A.3.3,0,0,0,205,436.77Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 199.244px 440.679px;"
                                    id="elbi6fneqqynv" class="animable"></path>
                                <path
                                    d="M208.76,437.52c-4.61.76-9.65,3.33-11.83,7.6-.09.16.15.28.27.19a64,64,0,0,1,11.74-7.23A.3.3,0,0,0,208.76,437.52Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 203.002px 441.429px;"
                                    id="el58p7n73ufsb" class="animable"></path>
                                <path d="M158.59,451.59c-5.16.94-3.71,8.94,1.45,8S163.75,450.66,158.59,451.59Z"
                                    style="fill: rgb(255, 255, 255); transform-origin: 159.315px 455.591px;"
                                    id="elolti74zy1dl" class="animable"></path>
                                <path
                                    d="M200.16,422.13c-2.67-1.52-5.27.89-6.34,3.15a24.54,24.54,0,0,0-2.09,12.49.13.13,0,0,0,.17.11.57.57,0,0,0,.89.22c2.87-2.84,6.29-5.53,8.2-9.17C202.1,426.8,202.68,423.56,200.16,422.13Zm-3.9,10.77c-1.38,1.43-2.82,2.79-4.14,4.27a72.71,72.71,0,0,1,1.38-7.27,26.9,26.9,0,0,1,1.12-3.39c.73-1.7,4.56-6.34,5.9-1.43C201.27,427.79,197.9,431.19,196.26,432.9Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 196.778px 429.943px;"
                                    id="el39c3fom1m4q" class="animable"></path>
                                <path
                                    d="M180.62,441.51c4.11-.1,8-2,11.86-3.28a.57.57,0,0,0,.19-.9c.05-.06.07-.15,0-.2a24.49,24.49,0,0,0-12.12-3.67c-2.5,0-5.81,1.23-5.63,4.29C175.06,440.65,178.22,441.57,180.62,441.51Zm-3.24-2.12c-3.81-3.39,2.05-4.76,3.89-4.66a26.36,26.36,0,0,1,3.55.49,72.92,72.92,0,0,1,7.12,2c-1.91.53-3.77,1.22-5.66,1.82C184,439.74,179.48,441.26,177.38,439.39Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 183.864px 437.486px;"
                                    id="ele0m2kt2by8q" class="animable"></path>
                                <path
                                    d="M161.5,193.41s-1.11,18-6.08,30.88c0,0-7.18,4.47-7.93,5.18L190.21,422l-43.81,8.52s-17.21-93.26-18.68-99.65c-2.35-10.26-21-97.53-21.78-102.49-1.72-10.37,7.85-34.93,7.85-34.93Z"
                                    style="fill: rgb(55, 71, 79); transform-origin: 147.972px 311.965px;"
                                    id="elekiephn6is" class="animable"></path>
                                <path
                                    d="M185.74,412.34c-12.05,1.81-35.08,6.69-37.92,7.87-.06,0,0,.15,0,.15,3.07-.05,31.14-5.62,37.94-7.8A.11.11,0,0,0,185.74,412.34Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 166.826px 416.35px;"
                                    id="elcz28zjxvjfh" class="animable"></path>
                                <path
                                    d="M119.18,210.89c.88-.2,1.82-.14,2.71-.25a20.7,20.7,0,0,0,7.76-2.56,10.59,10.59,0,0,0,3.62-3.84c.51-.82,2.84-5.26,2.87-5.29s.27,0,.25.09c-.13.62-1.66,4.47-2.12,5.43a10.43,10.43,0,0,1-3.74,4.49,17.59,17.59,0,0,1-8.57,2.47,7.93,7.93,0,0,1-2.83-.26C119,211.11,119.06,210.91,119.18,210.89Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 127.724px 205.2px;"
                                    id="el59ja2n6we1" class="animable"></path>
                                <path
                                    d="M156.46,223.81a71.94,71.94,0,0,0-11.55,5.25.13.13,0,0,0,.1.24c3.89-1.63,7.86-3.19,11.65-5A.25.25,0,0,0,156.46,223.81Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 150.828px 226.55px;"
                                    id="elb9za2bm638l" class="animable"></path>
                                <path
                                    d="M157.93,197.23c0-.14-.24-.17-.24,0a128.2,128.2,0,0,1-.77,12.94c-.2,2-1.9,13-5.36,12.17-.58-.14-.87-.71-.95-1.59a13.93,13.93,0,0,1,.49-3.37c.41-2.31.73-4.62,1-7a63.24,63.24,0,0,0,0-13,.11.11,0,1,0-.22,0,119.14,119.14,0,0,1-1.22,18c-.46,2.87-1.94,7.17,1,7.64s5.1-6.74,5.49-8.71A66,66,0,0,0,157.93,197.23Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 154.021px 210.078px;"
                                    id="el0ncm0qxwv4e" class="animable"></path>
                                <path
                                    d="M151.65,222.62a18.68,18.68,0,0,0-.8,2.28,5.3,5.3,0,0,0-.34,1.88c0,.12.17.13.24.05a6.51,6.51,0,0,0,.82-1.82c.27-.71.56-1.41.81-2.12A.39.39,0,0,0,151.65,222.62Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 151.453px 224.635px;"
                                    id="elpqwx2p7o7lf" class="animable"></path>
                                <path
                                    d="M117.38,193.41c-1.19,4.57-2.32,9.16-3.35,13.77s-2,9.24-2.58,13.92l-.16,1.75c-.05.58,0,1.16-.06,1.74l.52,3.47,1.32,7,2.82,13.89,11.58,55.5,11.6,55.5,5.75,27.76,5.68,27.78-6.16-27.68-6-27.7L126.5,304.61c-3.83-18.51-7.7-37-11.36-55.55l-2.68-13.92-1.26-7-.49-3.54A30,30,0,0,1,111,221c.66-4.7,1.72-9.31,2.82-13.91S116.11,198,117.38,193.41Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 130.605px 304.45px;"
                                    id="elx6ypl5pi038" class="animable"></path>
                                <polygon points="147.02 434.31 142.68 424.69 190.38 415.45 190.96 424.99 147.02 434.31"
                                    style="fill: rgb(69, 90, 100); transform-origin: 166.82px 424.88px;"
                                    id="elmgivzwa7k7" class="animable"></polygon>
                                <path
                                    d="M146.89,157.55c-11.12,14.56-31.28,19.92-46.53,8.95-3.51-2.52-7-5.87-8.59-9.9a15.52,15.52,0,0,1,.42-11.8c2-4.55,5.84-7.53,9.67-10.53,4.27-3.34,14.32-10.85,20.73-24.4,2.15-4.53,3.73-9.38,6.49-13.57,6.79-10.31,14.14-11.66,22.54-9.44a14.56,14.56,0,0,1,9.46,8.87C166.52,109,157.44,143.74,146.89,157.55Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 126.756px 129.14px;"
                                    id="el3hefdw0v91i" class="animable"></path>
                                <path
                                    d="M100.91,134a85,85,0,0,0,7-5.77,81.71,81.71,0,0,0,20.92-31.16h0a86.54,86.54,0,0,1-25.68,34.5c-4.87,3.91-10.78,7.18-12.52,13.64a14.6,14.6,0,0,0,5,15.11c.15.12.38-.09.23-.22A14.34,14.34,0,0,1,93,141.25C95,138.22,98,136.13,100.91,134Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 109.49px 128.713px;"
                                    id="eldj2sr7uc67s" class="animable"></path>
                                <path
                                    d="M161.26,125.2a90.72,90.72,0,0,0,.83-24.24,0,0,0,1,0-.08,0,99.4,99.4,0,0,1-5.34,39.86c-4.31,12-11.82,22.68-24.1,27.38a38.34,38.34,0,0,1-18.68,2.17c-.15,0-.19.24,0,.27a37.23,37.23,0,0,0,30.82-9.26C154.58,152.28,159.1,138.1,161.26,125.2Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 138.152px 136.023px;"
                                    id="elm5lgnc63xkd" class="animable"></path>
                                <path
                                    d="M119.81,114.09c4.42-6.32,6.5-13.91,11.37-20,0,0,0-.13-.08-.08-4.43,4.39-6.37,10.56-9.41,15.87A48.18,48.18,0,0,1,109.41,124c-4.55,3.51-10,5.84-14.17,9.84a19,19,0,0,0-5.74,15,21.88,21.88,0,0,0,7.76,14.9c.12.1.3-.06.18-.17-5.38-5.24-8.58-12.5-6.94-20.05,1.77-8.17,8.52-12,15.06-16.1A49.12,49.12,0,0,0,119.81,114.09Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 110.316px 128.885px;"
                                    id="elqq4x8h8h31f" class="animable"></path>
                                <path
                                    d="M162.34,124.68a91.51,91.51,0,0,0-.18-22.31c0-.07-.12-.07-.11,0,1.84,15.45-.21,31.59-6.67,45.79-3.36,7.39-8,13.36-15.14,17.34-6.46,3.57-13.92,5.94-21.36,5.26-.15,0-.14.22,0,.23a33.62,33.62,0,0,0,16.43-2.72c5.34-2.16,10.49-5.2,14.27-9.62,3.91-4.57,6.45-10.31,8.48-15.92A81.66,81.66,0,0,0,162.34,124.68Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 140.853px 136.716px;"
                                    id="elif95f81klr" class="animable"></path>
                                <path
                                    d="M156,134.88c21.44,18.9,41.35,39.63,43,50.3,2.3,14.79-6.77,19-10.84,19.08-11.11.23-31.8-44.57-39-61.68C142.16,126,151.3,130.73,156,134.88Z"
                                    style="fill: rgb(211, 118, 106); transform-origin: 172.99px 167.588px;"
                                    id="elz8xkp02reio" class="animable"></path>
                                <path
                                    d="M188.39,165.14l-23.46,13.09s-15-26.94-18.5-39.47,1.53-12.22,12.75-2.57S188.39,165.14,188.39,165.14Z"
                                    style="fill: rgb(199, 199, 199); transform-origin: 166.861px 153.683px;"
                                    id="el0ihwk6d8yikf" class="animable"></path>
                                <path
                                    d="M188.39,165.14l-23.46,13.09s-15-26.94-18.5-39.47,1.53-12.22,12.75-2.57S188.39,165.14,188.39,165.14Z"
                                    style="fill: rgb(197, 63, 63); transform-origin: 166.861px 153.683px;"
                                    id="elw5v0paefr9i" class="animable"></path>
                                <g id="elwehn3c8f9za">
                                    <path
                                        d="M146.43,138.76c3.52,12.53,18.5,39.48,18.5,39.48l21.36-11.93-40-36.76C145,130.58,145,133.57,146.43,138.76Z"
                                        style="opacity: 0.1; transform-origin: 165.815px 153.895px;" class="animable">
                                    </path>
                                </g>
                                <path
                                    d="M183.49,161.58A184.09,184.09,0,0,1,163.93,173c-.09.05-.16-.09-.07-.13,1.77-.93,11.39-7.07,19.56-11.41C183.51,161.38,183.58,161.52,183.49,161.58Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 173.675px 167.223px;"
                                    id="elw7w714u9zkb" class="animable"></path>
                                <path
                                    d="M171,196.14l-2.94-17.52s6.35-11.37,2.5-19.43c-1.94-4.09-15.16-24-22.21-29-6.62-4.7-16.59.1-19.6,4.28-8.66,12-13.09,23.38-17.57,62.35Z"
                                    style="fill: rgb(197, 63, 63); transform-origin: 141.49px 162.535px;"
                                    id="elfp3xx6gdsel" class="animable"></path>
                                <g id="elq2f1r3md72">
                                    <path
                                        d="M133.36,130.65l15.42-.17c.38.29.78.62,1.19,1l-18.24.2C132.24,131.32,132.78,131,133.36,130.65Zm-5.25,4.74,25.44-.28c-.31-.35-.61-.67-.91-1l-23.81.26-.06.08Zm-2.47,3.72,31-.35-.8-1-29.55.33C126.06,138.43,125.85,138.77,125.64,139.11Zm-2.13,3.71,36-.41-.76-1-34.65.39C123.87,142.14,123.69,142.48,123.51,142.82Zm-1.8,3.7,40.43-.45-.71-1-39.27.44C122,145.84,121.86,146.18,121.71,146.52Zm-1.52,3.7,44.51-.49-.69-1-43.43.49Zm-1.28,3.7,48.21-.54c-.21-.32-.42-.65-.65-1l-47.23.52Zm-1.1,3.7,51.59-.57c-.18-.31-.38-.65-.6-1l-50.7.57C118,156.94,117.91,157.28,117.81,157.62Zm-.94,3.69,54.3-.6a9.19,9.19,0,0,0-.36-1l-53.7.6ZM116,165l55.77-.62c0-.33,0-.67-.08-1l-55.47.62C116.17,164.34,116.1,164.67,116,165Zm-.75,3.69,56.33-.62c0-.34.08-.67.11-1l-56.24.63C115.41,168,115.35,168.36,115.28,168.7Zm-.68,3.7,56.22-.63c.09-.33.18-.66.26-1l-56.3.62Zm-.62,3.69,55.56-.62c.13-.32.26-.65.39-1l-55.78.62C114.1,175.42,114,175.75,114,176.09Zm54.19,3.08-.09-.55.24-.45-54.75.61-.15,1Zm-55.29,4.3,55.91-.62-.17-1-55.59.62Zm-.49,3.7,57-.64-.17-1-56.72.63C112.47,186.49,112.43,186.83,112.39,187.17Zm-.47,3.68,58.1-.64-.17-1-57.81.64Zm-.45,3.7,59.17-.66-.17-1-58.88.65C111.54,193.88,111.51,194.21,111.47,194.55Z"
                                        style="opacity: 0.1; transform-origin: 141.605px 162.515px;" class="animable">
                                    </path>
                                </g>
                                <path
                                    d="M156.61,175.7a61.15,61.15,0,0,0-8.9,1.65c-1.45.4-2.87.87-4.28,1.36-.71.25-1.42.48-2.13.7a9.93,9.93,0,0,1-2.29.48.05.05,0,1,0,0,.1,16.48,16.48,0,0,0,2.22-.08,16.66,16.66,0,0,0,2.1-.44c1.47-.39,2.92-.86,4.39-1.26,3-.83,5.92-1.65,8.93-2.26C156.79,175.92,156.75,175.69,156.61,175.7Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 147.849px 177.849px;"
                                    id="elx7xpdoc9bpn" class="animable"></path>
                                <path
                                    d="M164.09,178.22a66.32,66.32,0,0,0-7.46-.21c-1.25,0-2.48.15-3.72.3-.59.07-1.18.14-1.77.23s-1.29.28-1.93.37c-.07,0-.07.11,0,.1.61-.06,1.24,0,1.86,0l1.86-.08c1.24-.06,2.48-.1,3.72-.17,2.49-.13,5-.24,7.45-.29C164.24,178.42,164.22,178.23,164.09,178.22Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 156.677px 178.497px;"
                                    id="el93peflzp7ns" class="animable"></path>
                                <path
                                    d="M127.19,133.84c-20,15.68-40.65,42.14-40.8,57.29-.14,15,8.24,13.37,9.65,12.91,14.91-4.82,32.47-46.5,39-63.47S132.12,130,127.19,133.84Z"
                                    style="fill: rgb(211, 118, 106); transform-origin: 111.826px 166.864px;"
                                    id="eltsls5n6udpf" class="animable"></path>
                                <path
                                    d="M95.19,164.34l23.51,13s14.86-27,18.33-39.55-1.59-12.21-12.76-2.51S95.19,164.34,95.19,164.34Z"
                                    style="fill: rgb(197, 63, 63); transform-origin: 116.65px 152.756px;"
                                    id="elb4osgx5pkyq" class="animable"></path>
                                <path
                                    d="M100.07,160.76a183.9,183.9,0,0,0,19.61,11.31c.09.05.16-.09.07-.14-1.78-.92-11.43-7-19.61-11.32C100.05,160.56,100,160.7,100.07,160.76Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 109.914px 166.34px;"
                                    id="elocpsyl5i3tr" class="animable"></path>
                                <path
                                    d="M117.19,176.44a12.37,12.37,0,0,1,1.42.61c2.19-4.49,6.35-12.87,8.59-17.34q1.65-3.28,3.29-6.57c1.14-2.28,2.15-4.66,3.41-6.87a.06.06,0,1,1,.1,0c-.72,2.16-1.7,4.25-2.63,6.33.21-.33.4-.66.63-1,.51-.7,1-1.4,1.45-2.13.07-.12.26,0,.19.09-.43.7-.81,1.42-1.18,2.16s-.8,1.44-1.22,2.14-.87,1.34-1.33,2l-.16.24c-.6,1.3-1.18,2.61-1.81,3.9-2.19,4.52-9,17.48-9.11,17.46a13,13,0,0,1-1.7-1C117.06,176.52,117.13,176.43,117.19,176.44Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 125.555px 161.818px;"
                                    id="eldroxvd6bm3l" class="animable"></path>
                                <path
                                    d="M192.76,163.29c-1-7-3.14-16.81-5.68-18.84s-12.32-9.23-15.1-10.16-15.16-5.48-17.41-4.15c-1.8,1.07.4,5.82,6.29,8a85.08,85.08,0,0,1,9.34,4.42c1.51.63,5.19,5.46,4.22,7.63-.57,1.27-4.25,2.81-6.55,1.79s-2.93-5.56-5.58-7.67-7.28-1.81-7.54-.55,1.29,1.82,3.7,6c1.56,2.72,1.73,9.28,5.24,13.94a82.18,82.18,0,0,1,4.86,8.61Z"
                                    style="fill: rgb(211, 118, 106); transform-origin: 173.359px 151.104px;"
                                    id="elp43h1ioc2km" class="animable"></path>
                                <path
                                    d="M159.81,142.44a4.62,4.62,0,0,1-2.3-1,1.87,1.87,0,0,1-.54-.93,2.33,2.33,0,0,1,0-.59.85.85,0,0,1,.22-.56c.05,0,0-.09,0,0a2.55,2.55,0,0,1-.21.28,2.1,2.1,0,0,0-.13.26,1.74,1.74,0,0,0,.38,1.74,3.14,3.14,0,0,0,2.65.92A0,0,0,1,0,159.81,142.44Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 158.32px 140.953px;"
                                    id="elyydjmzo6xg" class="animable"></path>
                                <path
                                    d="M187.08,144.45c-2.27-3.49-8.06-9.75-13.75-11.87-3.84-1.43-17,5.13-16.54,7.64s2.66,2.5,6,2.07c1.21-.15,7.61-2.53,8.72-1.19,1.59,1.92,3.66,8.51,3.66,8.51Z"
                                    style="fill: rgb(211, 118, 106); transform-origin: 171.929px 140.994px;"
                                    id="elkasbkyn9pk" class="animable"></path>
                                <path
                                    d="M157.11,139.24c1.6-2.72,5.16-4.19,8.71-5.37.05,0,.09.07,0,.09-.9.3-6.68,3-8.7,5.32C157.12,139.31,157.09,139.26,157.11,139.24Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 161.488px 136.58px;"
                                    id="elganbjh34fpd" class="animable"></path>
                                <path
                                    d="M187.08,144.45c-2.27-3.49-8.06-9.75-13.75-11.87-3.84-1.43-14.18,6.9-13.77,9.41s3.65,2.68,7.21,1.4c1.15-.41,5-3.18,6.1-1.85,1.6,1.92,5.48,6.69,5.48,6.69Z"
                                    style="fill: rgb(211, 118, 106); transform-origin: 173.314px 140.323px;"
                                    id="elmwmctmlhuf" class="animable"></path>
                                <path
                                    d="M176.11,145.28c-.36-.55-.49-.75-.86-1.29s-.76-1.08-1.17-1.59a5,5,0,0,0-1.2-1.23,2.55,2.55,0,0,0-1.58-.3,9,9,0,0,0-3.39,1.54c-1.17.69-3.59,1.81-5.46,1.63a3.77,3.77,0,0,1-1.48-.38,2.49,2.49,0,0,1-.89-.7c-.82-1.36.18-2.94,1.2-4.06a23.91,23.91,0,0,1,7-4.87c.62-.31,1.24-.6,1.86-.89a5.39,5.39,0,0,1,2.25-.67c1.3,0,3.44,1.27,4.1,1.66,0,0,.09,0,0-.08-.8-.49-2.8-2.09-4.88-2a6.75,6.75,0,0,0-2.17.75c-.73.33-1.44.67-2.15,1a29.54,29.54,0,0,0-4,2.39,12.45,12.45,0,0,0-3.23,3.12,3.65,3.65,0,0,0-.19,3.73,3.23,3.23,0,0,0,2.37,1.23,6.08,6.08,0,0,0,1.65,0,26.32,26.32,0,0,0,3.57-1.08c1.13-.46,2.14-1.24,3.3-1.6a2.18,2.18,0,0,1,1.7.09,6,6,0,0,1,1.27,1.14,18.06,18.06,0,0,1,2.14,2.48C176.09,145.59,176.26,145.51,176.11,145.28Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 167.989px 138.767px;"
                                    id="elhlj8e0se42s" class="animable"></path>
                                <path
                                    d="M188.77,147.49c-.84-1.66-2.29-8.52-3.64-10.62s-7.49-9.33-10.32-9c-3.56.44.22,6.81,2.11,9.44s1.62,7.11,1.62,7.11Z"
                                    style="fill: rgb(211, 118, 106); transform-origin: 181.054px 137.675px;"
                                    id="el82bece4awpf" class="animable"></path>
                                <path
                                    d="M174.28,133c.67.83,1.26,1.75,1.85,2.64a22.68,22.68,0,0,1,1.62,2.61,9.14,9.14,0,0,1,.72,2.92c.05.5.07,1,.08,1.49s0,1.09,0,1.63c0,.05-.09.06-.09,0a22.53,22.53,0,0,0-.42-2.95,13.12,13.12,0,0,0-.92-2.93c-.85-1.86-2.09-3.5-3-5.35C174.12,133,174.23,132.9,174.28,133Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 176.337px 138.644px;"
                                    id="elua6c20rhx4" class="animable"></path>
                                <path
                                    d="M178.51,145.18a10.33,10.33,0,0,1-.88,5,18.21,18.21,0,0,1-1.12,2.31,17.85,17.85,0,0,1-1.45,2.11,19.61,19.61,0,0,0-2.54,4.19,19.83,19.83,0,0,0-1.3,4.79,13.18,13.18,0,0,1,.59-5.05,15.44,15.44,0,0,1,2.46-4.51,24.91,24.91,0,0,0,2.62-4.17A15.13,15.13,0,0,0,178.51,145.18Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 174.859px 154.38px;"
                                    id="eli8olkvld13p" class="animable"></path>
                                <path
                                    d="M187.14,203.75c-6.93-.94-11.47-12.54-19.39-32.95-1.39-3.58,16.74-25.59,19.2-22.31,3.11,4.14,11.47,27.18,12.35,33.46C201,194.33,195.24,204.84,187.14,203.75Z"
                                    style="fill: rgb(211, 118, 106); transform-origin: 183.636px 175.993px;"
                                    id="elwwf48zf12i" class="animable"></path>
                                <path
                                    d="M176.34,190.22a80.54,80.54,0,0,1-5-9.38c-.73-1.62-1.45-3.24-2.07-4.91a24.54,24.54,0,0,1-1.49-5.13c.62,1.67,1.47,3.22,2.2,4.83l2.27,4.79C173.69,183.64,175.13,186.87,176.34,190.22Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 172.06px 180.51px;"
                                    id="eliuzgoep2vl" class="animable"></path>
                                <path
                                    d="M151,139.21l-9.42,29.18c-.37.85,0,1.59.87,1.64l15.32,1A2.49,2.49,0,0,0,160,169.6l9.43-29.19a1.06,1.06,0,0,0-.88-1.64l-15.31-1A2.48,2.48,0,0,0,151,139.21Z"
                                    style="fill: rgb(55, 71, 79); transform-origin: 155.52px 154.4px;"
                                    id="ela3qiprflkgm" class="animable"></path>
                                <path
                                    d="M152.78,139.31l-9.42,29.19c-.37.85,0,1.58.87,1.64l15.32,1a2.47,2.47,0,0,0,2.22-1.44l9.43-29.18c.37-.86,0-1.59-.88-1.65l-15.31-1A2.48,2.48,0,0,0,152.78,139.31Z"
                                    style="fill: rgb(69, 90, 100); transform-origin: 157.28px 154.505px;"
                                    id="eldxbyje47usj" class="animable"></path>
                                <path
                                    d="M156.89,140.94a1.3,1.3,0,0,1-1.41,1.19,1.32,1.32,0,0,1-1.19-1.42,1.31,1.31,0,0,1,2.6.23Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 155.588px 140.882px;"
                                    id="elacfshmgbuo" class="animable"></path>
                                <path
                                    d="M92.87,204.23c6.68.92,15-4.27,36.63-20,3-2.18-6.74-27.44-10-25.27-4.18,2.73-19.78,14.23-20.82,15.22C89.9,182.43,88.33,203.61,92.87,204.23Z"
                                    style="fill: rgb(211, 118, 106); transform-origin: 110.23px 181.58px;"
                                    id="eladiy2ktanj" class="animable"></path>
                                <path
                                    d="M111.73,166.55s6.15-8.64,10.79-12.17a37.52,37.52,0,0,1,16.63-6.73c6.48-1,22.8,1.22,23,6,.18,4.35-16.39,1.29-16.39,1.29s17.41.34,16.66,5.62-19.79.63-19.79.63,17.88.74,16.24,6.07c-1.23,4-18.71.78-18.71.78s15.37.75,14.27,4.94c-1.21,4.63-17.53,2.65-17.53,2.65-4.57,10.19-10.92,13.17-15.69,14.75C120.05,190.8,111.73,166.55,111.73,166.55Z"
                                    style="fill: rgb(211, 118, 106); transform-origin: 137.087px 168.9px;"
                                    id="ellup92cdu78" class="animable"></path>
                                <path
                                    d="M139.73,154.47c2.05,0,4.12-.09,6.16.06s4.09.37,6.1.71a35,35,0,0,1,7.74,2c-4.55-1.41-11.85-2-13.9-2.2s-4.07-.4-6.11-.54A0,0,0,0,1,139.73,154.47Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 149.725px 155.842px;"
                                    id="elgfzp9e8lb6n" class="animable"></path>
                                <path
                                    d="M139.07,161.83c2.61.07,5.21,0,7.82.23s5.05.59,7.63.95c.2,0,.12.12-.08.1-2.59-.26-5-.29-7.6-.52s-5.19-.56-7.78-.69A0,0,0,0,1,139.07,161.83Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 146.848px 162.471px;"
                                    id="elgzxkzxc1lxn" class="animable"></path>
                                <path
                                    d="M137.36,168.05a58.48,58.48,0,0,1,11.94,1.26c.19,0,.08.16-.13.13-4-.49-7.06-.91-11.81-1.25A.07.07,0,0,1,137.36,168.05Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 143.344px 168.747px;"
                                    id="elfty1lpnug0i" class="animable"></path>
                                <path
                                    d="M104.6,169.58,100,173.74c-.75.7-1.51,1.4-2.2,2.14A12.16,12.16,0,0,0,96,178.22a40.92,40.92,0,0,0-2.71,5.47,48.28,48.28,0,0,0-2,5.82,24.61,24.61,0,0,1,1.31-6.1,28.72,28.72,0,0,1,2.59-5.71,18.25,18.25,0,0,1,4.38-4.55A47.12,47.12,0,0,1,104.6,169.58Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 97.945px 179.545px;"
                                    id="eljud4b73c5k" class="animable"></path>
                                <path
                                    d="M135.1,130.8c.17,1.14,4.88,9,11.13,8.6,3.63-.22,1.16-7.46,1.16-7.46l3.13-9.91-12-9.15S135,130.32,135.1,130.8Z"
                                    style="fill: rgb(211, 118, 106); transform-origin: 142.809px 126.147px;"
                                    id="el83vtt3vdb6" class="animable"></path>
                                <path d="M137.27,119.4a19.8,19.8,0,0,0,10.29,12l3-9.35-12-9.16Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 143.915px 122.145px;"
                                    id="elt8b7af80h9j" class="animable"></path>
                                <path
                                    d="M164.64,108.13c.36,17-9.8,19.15-13.46,19.22-3.34.07-14.69-.13-16.8-17s5.69-22.44,13.3-23S164.29,91.11,164.64,108.13Z"
                                    style="fill: rgb(211, 118, 106); transform-origin: 149.34px 107.33px;"
                                    id="el87ebjtvtduk" class="animable"></path>
                                <path
                                    d="M160.65,106.76a11.16,11.16,0,0,1-1.13-.32,1.89,1.89,0,0,1-1.09-.56.6.6,0,0,1,.06-.74,1.52,1.52,0,0,1,1.5-.24,2.23,2.23,0,0,1,1.33.89A.65.65,0,0,1,160.65,106.76Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 159.87px 105.785px;"
                                    id="elu3fnbc6shg" class="animable"></path>
                                <path
                                    d="M149,106.24a11.74,11.74,0,0,0,1.17-.16,1.87,1.87,0,0,0,1.15-.38.6.6,0,0,0,.06-.74,1.49,1.49,0,0,0-1.45-.46,2.21,2.21,0,0,0-1.44.67A.65.65,0,0,0,149,106.24Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 149.908px 105.351px;"
                                    id="elq1d88rgbmxe" class="animable"></path>
                                <path
                                    d="M151.1,110.71s-.09.05-.09.1c0,1.16-.25,2.48-1.31,2.81,0,0,0,.07,0,.07C151,113.57,151.26,111.81,151.1,110.71Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 150.421px 112.2px;"
                                    id="el0z4f80pyw3x" class="animable"></path>
                                <path d="M150.13,109.45c-1.86-.24-2.19,3.49-.47,3.71S151.68,109.65,150.13,109.45Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 149.837px 111.304px;"
                                    id="elzttn0stzqyr" class="animable"></path>
                                <path
                                    d="M149.38,109.58c-.35.18-.7.52-1.1.53s-.76-.42-1-.82c0,0-.07,0-.07,0-.08.71.13,1.47.89,1.64s1.25-.42,1.49-1.13C149.61,109.71,149.52,109.51,149.38,109.58Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 148.393px 110.125px;"
                                    id="elpxosndyqp7p" class="animable"></path>
                                <path
                                    d="M158.1,110.83s.08.06.08.11c-.15,1.15-.13,2.49.88,3,0,0,0,.07,0,.06C157.78,113.68,157.77,111.89,158.1,110.83Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 158.489px 112.415px;"
                                    id="elw1w90etseqd" class="animable"></path>
                                <path d="M159.25,109.72c1.87,0,1.65,3.78-.09,3.74S157.68,109.69,159.25,109.72Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 159.261px 111.59px;"
                                    id="el0lenrl6a2sz" class="animable"></path>
                                <path
                                    d="M160,110c.28.21.55.59.91.63s.73-.33,1-.71c0,0,.06,0,.06,0,0,.71-.3,1.44-1,1.54s-1.05-.55-1.18-1.27C159.78,110.12,159.9,109.93,160,110Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 160.88px 110.695px;"
                                    id="el684jdc46e2i" class="animable"></path>
                                <path
                                    d="M151.08,119.61c.24.31.46.72.88.81a3,3,0,0,0,1.27-.12s.07,0,0,.06a1.57,1.57,0,0,1-1.54.43,1.25,1.25,0,0,1-.77-1.14A.07.07,0,0,1,151.08,119.61Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 152.089px 120.196px;"
                                    id="elwbtmjxl5jml" class="animable"></path>
                                <path
                                    d="M156.24,115.81s.1,1.75,0,2.56c0,.08-.2.1-.48.09,0,0,0,0,0,0a3.89,3.89,0,0,1-3.65-1.74c-.05-.08.06-.16.13-.1a5.85,5.85,0,0,0,3.45,1.29c.08-.22-.27-3-.14-3a6.56,6.56,0,0,1,1.81.56c-.11-3.64-.8-7.24-.85-10.86a.11.11,0,0,1,.21,0,58.43,58.43,0,0,1,1.42,11.66C158.18,116.72,156.56,116,156.24,115.81Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 155.119px 111.506px;"
                                    id="elu3du8l46h3q" class="animable"></path>
                                <path
                                    d="M155.29,118a4.18,4.18,0,0,1-1.72,1.24,1.88,1.88,0,0,1-1.15,0c-.82-.25-.81-1-.64-1.65a4.85,4.85,0,0,1,.41-1A5.45,5.45,0,0,0,155.29,118Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 153.489px 117.96px;"
                                    id="elyoocdnydhk" class="animable"></path>
                                <path
                                    d="M153.57,119.22a1.88,1.88,0,0,1-1.15,0c-.82-.25-.81-1-.64-1.65A2,2,0,0,1,153.57,119.22Z"
                                    style="fill: rgb(255, 154, 187); transform-origin: 152.629px 118.44px;"
                                    id="elseh9yxfpqhf" class="animable"></path>
                                <path
                                    d="M134.24,110.62c1.89,0,7.07-4.92,7.7-14,0,0-1.13,8.11-1.81,9.27s2.9-2.76,3.51-10.08a29.51,29.51,0,0,0,7.31,4.3c3.41,1.16,5.53,1.24,5.79,1s-4.74-2.11-6-3.78c0,0,9,4.78,13.21,5.33.49.06,1.61-10-4.72-14.64s-17-.56-19.91,2c0,0-3.31.29-7.13,4.95S132.21,110.63,134.24,110.62Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 147.457px 98.2636px;"
                                    id="el473ratj6lq8" class="animable"></path>
                                <path
                                    d="M143.88,94.88c0-.21-.33-.22-.32,0a23.72,23.72,0,0,1-1.87,9.68s.06.08.08,0C143.31,101.46,144.32,98.4,143.88,94.88Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 142.837px 99.6571px;"
                                    id="elbcknizh5ahs" class="animable"></path>
                                <path
                                    d="M155.4,101.59c-4.9-.85-9.06-2.63-12.16-6.65-.06-.09-.2,0-.14.08,2.49,4.35,7.48,6.35,12.27,6.75A.09.09,0,0,0,155.4,101.59Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 149.281px 98.3368px;"
                                    id="ell6fk8o18du" class="animable"></path>
                                <path
                                    d="M137.27,110.42s-3.36-5.55-5.85-4.39-.21,9,2.54,10.27a2.87,2.87,0,0,0,3.95-1.29Z"
                                    style="fill: rgb(211, 118, 106); transform-origin: 134.13px 111.257px;"
                                    id="elhfguxptmr1o" class="animable"></path>
                                <path
                                    d="M132.13,108.27a0,0,0,0,0,0,.08c1.92.93,2.85,2.83,3.45,4.79a1.58,1.58,0,0,0-2.34-.59c-.06,0,0,.11,0,.11a1.78,1.78,0,0,1,1.91.74A9,9,0,0,1,136,115c.08.18.4.1.35-.1a.09.09,0,0,1,0,0C136.55,112.37,134.82,108.71,132.13,108.27Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 134.248px 111.685px;"
                                    id="elh2qxb5xv0yj" class="animable"></path>
                            </g>
                            <g id="freepik--speech-bubbles--inject-126" class="animable"
                                style="transform-origin: 300.97px 84.1087px;">
                                <path
                                    d="M431.71,65.88a19.31,19.31,0,0,1-30.82,15.5l-9.47,2.42L395.36,75a19.32,19.32,0,1,1,36.35-9.11Z"
                                    style="fill: rgb(255, 254, 253); transform-origin: 411.565px 65.8708px;"
                                    id="el554wg593qt8" class="animable"></path>
                                <path
                                    d="M431.71,65.88A19.45,19.45,0,0,1,428.86,76a21.89,21.89,0,0,1-1.53,2.18,21.2,21.2,0,0,1-1.85,1.94A19.65,19.65,0,0,1,416.07,85a21.9,21.9,0,0,1-5.36.35,19.61,19.61,0,0,1-10-3.69l.3.06-9.44,2.5-.88.23.37-.84,3.9-8.83,0,.43a19.57,19.57,0,0,1,12.69-28.33,19.35,19.35,0,0,1,16.68,3.71A19.45,19.45,0,0,1,431.71,65.88Zm0,0a19.12,19.12,0,0,0-15.36-18.73,19.13,19.13,0,0,0-16.15,4.24,19.85,19.85,0,0,0-5.06,6.85,19,19,0,0,0-1.57,8.34,19.18,19.18,0,0,0,2.22,8.18l.11.21-.1.21-4,8.8-.51-.61L400.8,81l.17,0,.13.1a19,19,0,0,0,9.65,3.79,17.74,17.74,0,0,0,2.63,0,19.39,19.39,0,0,0,2.63-.28A18.47,18.47,0,0,0,421,83a17.81,17.81,0,0,0,4.38-3,22.14,22.14,0,0,0,1.85-1.9A21.72,21.72,0,0,0,428.78,76,19.37,19.37,0,0,0,431.71,65.88Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 411.2px 65.8595px;"
                                    id="elvzf37ldavok" class="animable"></path>
                                <path d="M419.92,66.68a1.7,1.7,0,1,0,1.69-1.7A1.7,1.7,0,0,0,419.92,66.68Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 421.62px 66.68px;" id="eltouuless6t"
                                    class="animable"></path>
                                <path d="M411,66.68a1.7,1.7,0,1,0,1.69-1.7A1.7,1.7,0,0,0,411,66.68Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 412.7px 66.68px;" id="el7363znt1vm3"
                                    class="animable"></path>
                                <path d="M402.08,66.68a1.7,1.7,0,1,0,1.69-1.7A1.7,1.7,0,0,0,402.08,66.68Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 403.78px 66.68px;"
                                    id="elaqszqmk2f37" class="animable"></path>
                                <path
                                    d="M228.7,94a27.65,27.65,0,0,1-44.15,22.21L171,119.71l5.64-12.63A27.66,27.66,0,1,1,228.7,94Z"
                                    style="fill: rgb(255, 255, 255); transform-origin: 199.85px 94.0327px;"
                                    id="elajb8oxxvol" class="animable"></path>
                                <path
                                    d="M228.7,94a27.88,27.88,0,0,1-4.09,14.53,32.05,32.05,0,0,1-2.2,3.13,30,30,0,0,1-2.65,2.76,27,27,0,0,1-6.25,4.38,27.57,27.57,0,0,1-7.22,2.54,28.53,28.53,0,0,1-3.81.47,24.75,24.75,0,0,1-3.85,0,27.91,27.91,0,0,1-14.29-5.3l.3.06-13.53,3.54-.88.23.37-.83,5.6-12.64,0,.42A27.91,27.91,0,1,1,228.7,94Zm0,0a27.39,27.39,0,0,0-34.32-26.54,27.19,27.19,0,0,0-10.91,5.68A28.41,28.41,0,0,0,176.15,83a27.28,27.28,0,0,0-2.28,12,27.74,27.74,0,0,0,3.2,11.81l.11.21-.1.21-5.68,12.6-.51-.6,13.58-3.38.16,0,.14.1a27.24,27.24,0,0,0,13.9,5.4,24,24,0,0,0,3.79.06,26.64,26.64,0,0,0,3.77-.4,27.34,27.34,0,0,0,7.18-2.4,25.89,25.89,0,0,0,6.26-4.27,32.5,32.5,0,0,0,2.65-2.73,30.72,30.72,0,0,0,2.21-3.11A27.8,27.8,0,0,0,228.7,94Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 199.465px 94.0315px;"
                                    id="el5fni0l8dlb4" class="animable"></path>
                                <g id="elvlhvtkmg35">
                                    <circle cx="201.1" cy="93.6" r="15.4"
                                        style="fill: rgb(197, 63, 63); transform-origin: 201.1px 93.6px; transform: rotate(-49.24deg);"
                                        class="animable"></circle>
                                </g>
                                <g id="el836109l8bjv">
                                    <path
                                        d="M201.1,109a15.41,15.41,0,1,1,8.79-28,13.36,13.36,0,1,0,5,5.69A15.42,15.42,0,0,1,201.1,109Z"
                                        style="opacity: 0.1; transform-origin: 201.055px 93.5903px;" class="animable">
                                    </path>
                                </g>
                                <circle cx="193.74" cy="90.55" r="2.17"
                                    style="fill: rgb(38, 50, 56); transform-origin: 193.74px 90.55px;"
                                    id="el447ztatcyr3" class="animable"></circle>
                                <circle cx="208.46" cy="90.55" r="2.17"
                                    style="fill: rgb(38, 50, 56); transform-origin: 208.46px 90.55px;"
                                    id="el8xioe79v5iy" class="animable"></circle>
                                <path d="M204.37,89.89a3.27,3.27,0,1,1-6.54,0Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 201.1px 91.5282px;"
                                    id="elusv8584kgjn" class="animable"></path>
                                <path d="M203.65,91.94a3.27,3.27,0,0,1-5.1,0,3.93,3.93,0,0,1,5.1,0Z"
                                    style="fill: rgb(255, 154, 187); transform-origin: 201.1px 92.0817px;"
                                    id="elok2xle4iff7" class="animable"></path>
                            </g>
                            <defs>
                                <filter id="active" height="200%">
                                    <feMorphology in="SourceAlpha" result="DILATED" operator="dilate" radius="2">
                                    </feMorphology>
                                    <feFlood flood-color="#32DFEC" flood-opacity="1" result="PINK"></feFlood>
                                    <feComposite in="PINK" in2="DILATED" operator="in" result="OUTLINE"></feComposite>
                                    <feMerge>
                                        <feMergeNode in="OUTLINE"></feMergeNode>
                                        <feMergeNode in="SourceGraphic"></feMergeNode>
                                    </feMerge>
                                </filter>
                                <filter id="hover" height="200%">
                                    <feMorphology in="SourceAlpha" result="DILATED" operator="dilate" radius="2">
                                    </feMorphology>
                                    <feFlood flood-color="#ff0000" flood-opacity="0.5" result="PINK"></feFlood>
                                    <feComposite in="PINK" in2="DILATED" operator="in" result="OUTLINE"></feComposite>
                                    <feMerge>
                                        <feMergeNode in="OUTLINE"></feMergeNode>
                                        <feMergeNode in="SourceGraphic"></feMergeNode>
                                    </feMerge>
                                    <feColorMatrix type="matrix"
                                        values="0   0   0   0   0                0   1   0   0   0                0   0   0   0   0                0   0   0   1   0 ">
                                    </feColorMatrix>
                                </filter>
                            </defs>
                        </svg>


                        <!-- Floating Chat Bubbles -->
                        <div class="chat-bubble" style="top: 17%; right: 31%; animation-delay: 0s;">
                            "Hello from Tokyo! 🌸"
                        </div>
                        <div class="chat-bubble" style="bottom: 36%; left: 10%; animation-delay: 2s;">
                            "weirdest talent?""
                        </div>
                        <div class="chat-bubble" style="top: 70%; right: 10%; animation-delay: 4s;">
                            "Share your crazy story!"
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1000">
                    <!-- Technology SVG Illustration -->
                    <!-- <img src="Online world-cuate.png" class="img-fluid" width="100%" alt=""> -->

                    <svg class="animated" id="freepik_stories-online-world" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 500 500" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                        xmlns:svgjs="http://svgjs.com/svgjs">

                        <g id="freepik--background-complete--inject-154" class="animable"
                            style="transform-origin: 275.436px 156.45px;">
                            <g id="freepik--aiZGp2--inject-154" class="animable"
                                style="transform-origin: 402.915px 92.66px;">
                                <path
                                    d="M382.73,75.56a48.35,48.35,0,0,0-3.28,15h-13.3v-.37c0-.34.08-.67.11-1a35.6,35.6,0,0,1,.88-5.24,40.24,40.24,0,0,1,2.95-8.19.3.3,0,0,1,.32-.2h12.32Z"
                                    style="fill: rgb(235, 235, 235); transform-origin: 374.44px 83.0589px;"
                                    id="elnukni2t4ne8" class="animable"></path>
                                <path
                                    d="M382.33,109.08H370.12a.28.28,0,0,1-.3-.19,37.21,37.21,0,0,1-3-9.24,34.88,34.88,0,0,1-.6-4.67c0-.06,0-.11,0-.16v-.37l.2,0h12.87c.23,0,.22,0,.24.24.08,1.07.15,2.14.25,3.21a42.35,42.35,0,0,0,.82,5,44,44,0,0,0,1.74,6C382.29,109,382.3,109,382.33,109.08Z"
                                    style="fill: rgb(235, 235, 235); transform-origin: 374.28px 101.766px;"
                                    id="elbtfmqr9mimr" class="animable"></path>
                                <path
                                    d="M433.69,113l-.1.19a36.63,36.63,0,0,1-3.46,4.48,34.58,34.58,0,0,1-5.07,4.68,36.71,36.71,0,0,1-17,7l-.5.08h-.29l-.28-.18.32-.23a39,39,0,0,0,9.63-9.34,44.59,44.59,0,0,0,3.94-6.53.28.28,0,0,1,.3-.19h12.49Z"
                                    style="fill: rgb(235, 235, 235); transform-origin: 420.34px 121.194px;"
                                    id="eley7f89zh9m" class="animable"></path>
                                <path
                                    d="M421.47,90.56H404.32v-15h13.39a.25.25,0,0,1,.27.18,41.65,41.65,0,0,1,2.73,8.79,44.47,44.47,0,0,1,.66,4.75C421.4,89.69,421.44,90.12,421.47,90.56Z"
                                    style="fill: rgb(235, 235, 235); transform-origin: 412.895px 83.0591px;"
                                    id="elk6ea4skgnwp" class="animable"></path>
                                <path
                                    d="M421.37,94.56c0,.35,0,.7-.05,1-.07.84-.13,1.68-.25,2.51-.16,1.15-.34,2.29-.57,3.43a40.65,40.65,0,0,1-2.22,7.32.28.28,0,0,1-.31.22H404.22V94.56Z"
                                    style="fill: rgb(235, 235, 235); transform-origin: 412.795px 101.801px;"
                                    id="el2tlcaf6gty8" class="animable"></path>
                                <path
                                    d="M400.45,75.65v15H383.7c0-.38,0-.76.07-1.13.09-.84.16-1.68.29-2.51.2-1.27.42-2.55.7-3.81a38.72,38.72,0,0,1,2.42-7.39.25.25,0,0,1,.28-.18h13Z"
                                    style="fill: rgb(235, 235, 235); transform-origin: 392.08px 83.1385px;"
                                    id="el91gji5y4oc6" class="animable"></path>
                                <path
                                    d="M400.47,94.76q0,7,0,14.11v.21H387.08a.26.26,0,0,1-.29-.2,37.67,37.67,0,0,1-2.29-7.56c-.25-1.34-.44-2.68-.61-4-.11-.88-.13-1.77-.19-2.65,0,0,0-.05,0-.1h16.56C400.43,94.54,400.47,94.59,400.47,94.76Z"
                                    style="fill: rgb(235, 235, 235); transform-origin: 392.085px 101.822px;"
                                    id="elhemazgcy65q" class="animable"></path>
                                <path
                                    d="M439.67,90.66H425.61a48.86,48.86,0,0,0-3.28-15.1h13.11a.29.29,0,0,1,.3.19,36.35,36.35,0,0,1,3.24,9.4,40.64,40.64,0,0,1,.69,5.27Z"
                                    style="fill: rgb(235, 235, 235); transform-origin: 431px 83.1094px;"
                                    id="el4gt3aasujku" class="animable"></path>
                                <path
                                    d="M439.68,94.44c0,.34,0,.67-.05,1a36,36,0,0,1-3,12.22c-.19.44-.4.87-.6,1.3a.2.2,0,0,1-.21.14h-13c.15-.45.31-.88.46-1.32a46.38,46.38,0,0,0,2.34-12c0-.4.05-.8.07-1.21,0-.1,0-.16.15-.15a.56.56,0,0,0,.13,0Z"
                                    style="fill: rgb(235, 235, 235); transform-origin: 431.25px 101.76px;"
                                    id="eloxiwi5vml9c" class="animable"></path>
                                <path
                                    d="M433.31,71.73l0,.06H420.81a.29.29,0,0,1-.3-.17,42.28,42.28,0,0,0-6.1-9.05,34.21,34.21,0,0,0-4.69-4.31c-.83-.65-1.7-1.25-2.56-1.88l-.14-.1.17-.12c0-.08-.05-.16-.08-.27a36.83,36.83,0,0,1,26.2,15.84Z"
                                    style="fill: rgb(235, 235, 235); transform-origin: 420.165px 63.8411px;"
                                    id="el86l9bshmrei" class="animable"></path>
                                <path
                                    d="M398.07,129.25a1.41,1.41,0,0,1-.36.06,31.76,31.76,0,0,1-4-.78,35.94,35.94,0,0,1-14.41-7.42,33.49,33.49,0,0,1-4.38-4.37,37.81,37.81,0,0,1-2.73-3.78l-.05-.11h11.65a.29.29,0,0,1,.29.19,45,45,0,0,0,4.2,6.86,43.27,43.27,0,0,0,4.94,5.46,38.57,38.57,0,0,0,4.74,3.81Z"
                                    style="fill: rgb(235, 235, 235); transform-origin: 385.105px 121.08px;"
                                    id="el33oeys8myih" class="animable"></path>
                                <path
                                    d="M397.92,56.26c-.52.38-1.14.82-1.74,1.27a43.72,43.72,0,0,0-5.54,5.17,39,39,0,0,0-5.83,8.3,6.1,6.1,0,0,1-.29.57.23.23,0,0,1-.18.11c-.21,0-.42,0-.63,0H372.52A36.56,36.56,0,0,1,397.79,56a1,1,0,0,0-.07.15Z"
                                    style="fill: rgb(235, 235, 235); transform-origin: 385.22px 63.84px;"
                                    id="ell1x0ew71ofs" class="animable"></path>
                                <path d="M416.36,113a40.3,40.3,0,0,1-5.67,7.66,35.82,35.82,0,0,1-6.47,5.49V113Z"
                                    style="fill: rgb(235, 235, 235); transform-origin: 410.29px 119.575px;"
                                    id="elp7cgj4r31op" class="animable"></path>
                                <path d="M400.45,113v12.9A37.34,37.34,0,0,1,388.8,113Z"
                                    style="fill: rgb(235, 235, 235); transform-origin: 394.625px 119.45px;"
                                    id="el8rxmfg4gfi4" class="animable"></path>
                                <path
                                    d="M416,71.68H404.32V59.38a35.49,35.49,0,0,1,6.54,5.48A41.28,41.28,0,0,1,416,71.68Z"
                                    style="fill: rgb(235, 235, 235); transform-origin: 410.16px 65.53px;"
                                    id="el4dfnuapi709" class="animable"></path>
                                <path d="M400.45,59.77v12H389.27A35.32,35.32,0,0,1,400.45,59.77Z"
                                    style="fill: rgb(235, 235, 235); transform-origin: 394.86px 65.77px;"
                                    id="elx00tixk8t5" class="animable"></path>
                            </g>
                            <path
                                d="M127.84,78.16c-1.12-11.25-8.87-22.45-22.5-22.45S84,66.91,82.85,78.16c-1.72,17.38,10,33.11,22.49,47.46C117.85,111.27,129.57,95.54,127.84,78.16Zm-22.5,12.5a12.32,12.32,0,1,1,12.34-12.32A12.32,12.32,0,0,1,105.34,90.66Z"
                                style="fill: rgb(235, 235, 235); transform-origin: 105.346px 90.665px;"
                                id="el5x93hpz6sfn" class="animable"></path>
                            <polygon
                                points="459.34 245.31 463.54 255.46 459.34 257.19 455.12 246.97 448.18 252.36 448.18 223.76 468.19 243.98 459.34 245.31"
                                style="fill: rgb(235, 235, 235); transform-origin: 458.185px 240.475px;"
                                id="elriingy9a32" class="animable"></polygon>
                            <rect x="447.68" y="217.77" width="1" height="2.88"
                                style="fill: rgb(235, 235, 235); transform-origin: 448.18px 219.21px;"
                                id="el0gyx6t4t0snf" class="animable"></rect>
                            <g id="el2953dblttxj">
                                <rect x="444.19" y="219.22" width="1" height="2.88"
                                    style="fill: rgb(235, 235, 235); transform-origin: 444.69px 220.66px; transform: rotate(-45deg);"
                                    class="animable"></rect>
                            </g>
                            <rect x="441.8" y="223.65" width="2.88" height="1"
                                style="fill: rgb(235, 235, 235); transform-origin: 443.24px 224.15px;"
                                id="el38c8gmcrwqd" class="animable"></rect>
                            <g id="elmplj1c2kxqb">
                                <rect x="443.25" y="227.14" width="2.88" height="1"
                                    style="fill: rgb(235, 235, 235); transform-origin: 444.69px 227.64px; transform: rotate(-45deg);"
                                    class="animable"></rect>
                            </g>
                            <rect x="451.68" y="223.65" width="2.88" height="1"
                                style="fill: rgb(235, 235, 235); transform-origin: 453.12px 224.15px;"
                                id="elijtqmddutyc" class="animable"></rect>
                            <g id="elvr6iz1n70l">
                                <rect x="450.23" y="220.16" width="2.88" height="1"
                                    style="fill: rgb(235, 235, 235); transform-origin: 451.67px 220.66px; transform: rotate(-45deg);"
                                    class="animable"></rect>
                            </g>
                        </g>
                        <g id="freepik--Floor--inject-154" class="animable"
                            style="transform-origin: 248.165px 406.65px;">
                            <polygon
                                points="59.51 406.65 106.67 406.4 153.84 406.32 248.17 406.15 342.5 406.31 389.66 406.4 436.82 406.65 389.66 406.89 342.5 406.98 248.17 407.15 153.84 406.98 106.67 406.89 59.51 406.65"
                                style="fill: rgb(38, 50, 56); transform-origin: 248.165px 406.65px;" id="elksxfpwd6ub"
                                class="animable"></polygon>
                        </g>
                        <g id="freepik--Shadow--inject-154" class="animable" style="transform-origin: 250px 436.7px;">
                            <ellipse cx="250" cy="436.7" rx="114.48" ry="17.16"
                                style="fill: rgb(235, 235, 235); transform-origin: 250px 436.7px;" id="elg3lbt1siirk"
                                class="animable"></ellipse>
                        </g>
                        <g id="freepik--Device--inject-154" class="animable"
                            style="transform-origin: 250.09px 269.345px;">
                            <path
                                d="M346,115.19V423.5a16.31,16.31,0,0,1-16.15,16.44H170.31a16.3,16.3,0,0,1-16.13-16.44V115.19a16.29,16.29,0,0,1,16.13-16.44H329.8A16.3,16.3,0,0,1,346,115.19Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 250.09px 269.345px;" id="elvjvmchs2ff"
                                class="animable"></path>
                            <path
                                d="M335.86,130.67V413.35c0,8.64-6.47,15.64-14.45,15.64H178.73c-8,0-14.47-7-14.47-15.64V130.67c0-17.61,6.47-21.5,14.47-21.5H207.3c1.66,0,3,1.88,3,4.22v1c0,5.48,3,5.5,6.69,5.5h66.1c3.71,0,6.69,0,6.69-5.5v-1c0-2.34,1.34-4.22,3-4.22h28.59C329.39,109.17,335.86,114.54,335.86,130.67Z"
                                style="fill: rgb(255, 255, 255); transform-origin: 250.06px 269.08px;"
                                id="elpbi4stod50c" class="animable"></path>
                            <path
                                d="M259.07,113.06h-18a1.12,1.12,0,0,1-1.12-1.12h0a1.12,1.12,0,0,1,1.12-1.11h18a1.12,1.12,0,0,1,1.12,1.11h0A1.12,1.12,0,0,1,259.07,113.06Z"
                                style="fill: rgb(255, 255, 255); transform-origin: 250.07px 111.945px;"
                                id="ele2aj3lghma" class="animable"></path>
                        </g>
                        <g id="freepik--Map--inject-154" class="animable" style="transform-origin: 250.01px 259.986px;">
                            <path
                                d="M191.6,305c.38,1.65.4,1.63-.5,2.94-1.11,1.64-2.24,3.25-3.37,4.87a4.72,4.72,0,0,0-1.21,2.3c-.19,2.4-.35,4.78-.53,7.16-.1,1.57-1.75,3.2-2.56,4.45-.36.55-.65,1.46-1.29,1.5s-2.06-.18-2.56.18c-1.58,1.07-3.15,2.16-4.72,3.23-.33.22-.31,2.58-.37,3s0,1.37-.28,1.76c-1.29,1.69-2.6,3.37-3.91,5s-2.38,3.09-3.59,4.6c-.27.36-4-1.27-4.6-1.45-.35,1.29,1.79,1.43,2,2.54a7.19,7.19,0,0,1,.45,2.14,5.77,5.77,0,0,1-1.09,1.59c-.79,1.17-1.84,1.15-3.11,1.49a5.31,5.31,0,0,1-3.06,0c.24.79.44,1.13.14,1.88-.16.46,0,1.23-.23,1.41-1.25.89-2,.51-3.26-.14a9.6,9.6,0,0,0,0,2.14c.1.46.84,1.25.66,1.69-.4.85-.8,1.7-1.19,2.57s-.52.74-1.41,1-.89.83-1.27,1.56c-.24.44.68,1.31.95,1.69s1.49.06,1.27.87a3.8,3.8,0,0,1-.89,1.67,5.89,5.89,0,0,0-1.29,1.76c-.32,1-.59,1.07-1.47,1.59s.1,3.21.26,4.2c.08.36.06,1.21.34,1.45l2,1.7c1.15,1,1.94.82,3.43.84l-4.06,1.84c-1.07.5-1.27.22-2.38-.32l-4.78-2.3c-.82-.39-1-1.31-1.33-2.2-.89-2.1-2.34-4.18-2.08-6.52.39-3.51.79-7,1.19-10.49s.53-6.88,1.15-10.19c.81-4.19,1.6-8.39,2.38-12.56.49-2.57,1-5.11,1.46-7.65a25,25,0,0,0,.64-3.41,18.06,18.06,0,0,0-.36-2.92,9.11,9.11,0,0,0-.32-2.59c-.35-.54-1.48-1-2-1.39-1-.66-2-1.35-3-2A6,6,0,0,1,140,315l-3.63-6.79c-1-1.86-2-3.72-3-5.59-.6-1.15.42-3.27.71-4.46a8.07,8.07,0,0,1,.58-2.38l1.72-2.2c1.27-1.63,2.36-2.56,2-4.86-.06-.53-.38-.81,0-1.19.06,0-.14-.79-.06-1.05.14-.71-1.39-1.33-1.23-2s.16-.72-.52-1.11c-.49-.3-.49-.26-1,0a4.39,4.39,0,0,0-1,.81c-.18.16.32.77.45.95-1,.42-.95.54-1.4-.53-.2.59-1.19-.4-1.73-.5-.28-.06-.47.26-.65.14l-.88-.69c-.63-.46-1.84-1-2.24-1.71s-.19-1.43-.65-2c-1.17-1.33-1.88-2.52-3.49-3-1.25-.35-3.35-.43-4.34-1.42l-2.6-2.56c-.56-.56-1.37,0-2.06.25-1.53.46-3.12-.65-4.6-1.26-1.19-.48-2.38-.94-3.57-1.43-.36-.16-1.07-.26-1.37-.56-.77-.79-1.53-1.58-2.32-2.36s-.28-1.17,0-2.18c.18-.67-1.05-2-1.39-2.48a6.82,6.82,0,0,0-1.23-1.48L98.06,259c-.18-.16.06-.7.1-.94s-.4-.67-.55-.83a11.2,11.2,0,0,0-1.83-2c-.63-.48-1.29-.76-1.53-1.59-.13-.45-.49-2.62-.85-2.81-.79-.34-1.56-.7-2.32-1.05.24.87.42,2.59,1,3.25a10.94,10.94,0,0,1,2.05,3,2.93,2.93,0,0,0,1,1.39,3.36,3.36,0,0,1,.73,1.49,5.56,5.56,0,0,1,.5,1.7c0,.95.45.26.73.48s1,.81.89,1.29c-.1.65-.67.79-.93.31a7.48,7.48,0,0,0-2.44-2.28c-.26-.19-.16-1.38-.18-1.7,0-.5-.79-.85-1.13-1.15s-.69-.14-1-.48S91.4,256.36,91,256c.52-.06,1.71-.16,1-1.15a4,4,0,0,0-1.74-1.74c-.58-.3-.74-1.27-1-1.89L88.09,248a5,5,0,0,0-3-2.46c-.87-.22-1.17-.16-1.56-.93a.67.67,0,0,1-.06-.12l-1.33-2.86c-.64-1.42-1.92-2.28-2.38-3.84a14.47,14.47,0,0,1-.44-5.42c.08-1.78.18-3.53.28-5.31a10.89,10.89,0,0,0-.87-4.42,24.13,24.13,0,0,1,2.89.89c0-1.43.1-1.61-.83-2.62a12.07,12.07,0,0,0-2.18-1.84,10.63,10.63,0,0,0-2.28-.87c-1.27-.56-1.47-.6-2.06-1.95-.64-1.58-3-2.4-2.82-4.14s0-1.47-1.27-2.3c-.18-.1-1,1.6-1.49.77-.41-.63-1.05-2.22-1.68-2.52a3.1,3.1,0,0,1-1.65-1.52,18.13,18.13,0,0,0-1.78-2.66,14.32,14.32,0,0,0-2.08-1.45,19.72,19.72,0,0,0-4.82-2.34c-.7-.26-1.57.34-2.28.18a10.86,10.86,0,0,1-2.3-1.41,2.83,2.83,0,0,0-2.2-.69c-.92.1-1.39.35-1,1.52.28,1-3.47,2-4.28,2.26a.57.57,0,0,1,.42-.85c-.64-.18-.16-2,.25-2.24a3.9,3.9,0,0,1,2.44-.51c-.25-.22-.49-.44-.71-.66l.83-.61A7.4,7.4,0,0,0,44,198.85a9.43,9.43,0,0,0-2.48,3.31c.39.1.77.2,1.15.28A16.81,16.81,0,0,1,38.89,206c-.75.54-3.13,1.15-3.23,2.26s-3.16,1.59-4,1.85a5.83,5.83,0,0,1-1.11.17c-.44.06-.22.3-.57.52a2.22,2.22,0,0,1-2.07.44,11.46,11.46,0,0,1,2.34-1.43c.64-.38,2.5-2.18,3.06-1.19.41-.7,1.9-2.36,2.71-1.79-.29-.77,1.11-1.25,1.27-2.1a1.88,1.88,0,0,1,.6-1.37c.3-.31.61-.47.3-.93-1,.56-2.09,1.45-3.12.68-.37-.24-1.05-1-1.47-.84l-1.58.7-.54-3.2c-.27.14-1.64,1.15-1.84,1-.5-.42-1.49-.92-1.83-1.51a9.55,9.55,0,0,1-.59-2.62c-.14-.61.36-1.09.67-1.59.58-1,.52-1.3,1.61-1.19.91.08,1.05-.65,1.84-1s1.45.3,1.83-.69c.3-.79-.16-.93-.68-1.51l.72-.43c-.34-1-1.17-.12-1.75.23-.75.42-.87-.08-1.62,0-1.49.18-3.16.48-4-1.13.18-.06.36-.25.54-.29-.72-.26-1.69-.36-2.2-1.08a6,6,0,0,1,3-1.07,3.75,3.75,0,0,0-.26-.33,4.92,4.92,0,0,1,2.46-.7c0,1.19.87,1,1.77,1.25s1-.16,1.76-.65c-.32-.14-.65-.28-1-.4l.38-.16c-.36-.28-.48-.61-.1-.89a9.92,9.92,0,0,1-2.38-.46c-.64-.23-.64-1.27-1.29-1.58-.44-.22-2.32-.72-2.52-1.19-.08-.18.34-1.09.4-1.31s.49-.12.61-.12c.71-.06,1.79.18,2.24-.48a11.91,11.91,0,0,1,1.65-2.12,8.08,8.08,0,0,1,4.1-1.9,4.74,4.74,0,0,0,2.48-.77c1.07-.84,1-.86,2.16-.26s4-.2,4.42,1.07c.32.93,3.38.85,4.39,1,1.54.2,3.05.38,4.58.65l6.72,1.19A20.71,20.71,0,0,1,64,180.43c.24.12,1.81-1.79,2-2,.43-.42,1.23.83,1.72.61.79-.34,4.36-2.52,4.88-1.68l-3.89,2.06c1,.71,4.31-2.2,4.6-1,.4-.44.78-.9,1.17-1.35s-.47-.48.1-.95a43.64,43.64,0,0,0,3.08,3.27,3.83,3.83,0,0,1,1.32-2.2c.48.51-.39.75.3,1.13.24.14-.16.69-.28.93.42-.12,1.25-.12,1.59-.4.12-.12-.16-.65.08-.67l.73-.12c.86-.12,2,.71,2.82,1.07a37.85,37.85,0,0,0,5.29,1.43l-.13-.38a4.67,4.67,0,0,1,2.65,1.21c.7.48-1.48,1.25-1.64,1.31a6.33,6.33,0,0,0,2.28.57l3.77-.31c.59,0,1.62-.22,2,.41.59.86,1.15,1.71,1.74,2.58-.08-.37-.18-.75-.27-1.13-.06-.22.19-.43.15-.65-.15-.88-.53-.66,0-1.53.34-.59,2.9-.67,2.34-1.55a8.06,8.06,0,0,1-3.49.86c.3-1.13.76-1,1.79-1.35s1.21-.46,2.18.1c.28.16.44.81.61,1.09s.48.35.88.43a16,16,0,0,1,2.32.72c.65.24,4.24.67,4.38.16.3-1,.36-1.51,1.49-1.51a9.27,9.27,0,0,1,2.2.57c-.1.34-.54,1.37-.42,1.67s1.11.75,1.39.93c-.38-1.17-.81-2.18.63-2.4.58-.1.92-.63,1.35-1s.1-.71,0-1.13c-.37.18-.73.36-1.09.52-.14-1.15.68-1.33,1.49-1.39,0-.91-.89-.26-1.43-.46s-1.94-.47-2.12-.93a5.72,5.72,0,0,1-.36-2.68c0-1,.48-1.17,1.27-.85.14-.51-.2-.69-.61-.63.77-.5.87-.44.85-1.41a3.63,3.63,0,0,0-.44-2,4,4,0,0,1,0-2c0-.51.84-.24,1.23-.22-1.4-1.56,1.07-1.11,2-1.11a11.25,11.25,0,0,1,3.55.5c-.54.79-1.27,2.48-2,2.95s-2.36.06-3.09.06c2.32.34-.34,1.83-.2,2.58,1.17-.2,1.83.83,2.06,1.93.14.73,1.29,1.6,1.75,2.16-.56.39-1.15.77-1.71,1.15.56.23,1,.61,1.55.25s1,.08,1.55.34c-.26.2-.54.38-.8.56.54.49.82.49.64,1.23s-.3.91.36,1.34a3.05,3.05,0,0,0,.69-1.56c0-.26.24-1.35.73-1.07.3.2,1.35.61,1.43,1,.14.65.54,1.37-.24,1.64,0-.17-.08-.33-.08-.49-1.6.89,2,4.1,2.13,2.36,0-.48,0-.79.33-1.09.16-.16.7-.46.7-.74,0-1.3,0-1.22,1.11-1.7-.44-.69-.84-1-.68-1.83s.6-.61,1.33-.49c.46.08,1.75,0,2.1.4a2.28,2.28,0,0,0,1.69,1c-.38.69.22,1.13-.18,1.6-.24.3-1.11.18-1.47.22a5.74,5.74,0,0,0,1.09,1.83c.58.55.84,1,.22,1.78a7.41,7.41,0,0,1-2,1.21c-.54.34-.93-.38-1.37-.79l.67,1.52-1-.55a4,4,0,0,0,.12.43l-1-.25c-.24-.06-.06-.66-.28-.66-.55,0-1.3-.2-1.56.42l1,.57a4.12,4.12,0,0,1-1.19,1.49c-.79.44-1.07.08-1.88-.36a8.09,8.09,0,0,0-3.75-.65l2.89,1.45a9,9,0,0,0,2.66.35c-.32.52-.83,1.95-1.35,2.19a2.44,2.44,0,0,1-1,.43c-.4,0-.79-.18-1.15.06-1.07.77-1.15.81-2.36.44-.77-.24-1.53-.42-2.3-.62l1.53.68c-.12.1-.18.24-.3.35a1.65,1.65,0,0,1,1.68.22c.38.22,1,.78.34,1.09a3,3,0,0,1-1.78.28c-.24,0-.62.85-.76,1a10.67,10.67,0,0,0-1.82,3.17c-.28,1.33-.54,2.66-.85,4,.55.14,1.7.14,2.1.5s.71,2,.93,2.55c.38,1.06.62.68,1.65.46a3.31,3.31,0,0,1,1.66.42,15.06,15.06,0,0,1,4,2.06c.43.3,1.27,1.21,1.78,1.25.78.08,1.55.18,2.32.24.26,0,1.73,0,1.73.35,0,1.07-.1,2.11-.14,3.18-.06,1.5,1.43,2.63,2.28,3.7s2.64-.89,2.5-1.8l-.48-2.86c-.08-.51-.75-1.17-1-1.6.93-.6,2.74-1.29,3.39-2.22s.72-3.12,0-3.85a12.17,12.17,0,0,1-1.43-1.53c-.59-.85-.79-.77,0-1.46s.86-.62.56-1.71a3.77,3.77,0,0,1-.34-1.9,2.86,2.86,0,0,0,0-2.36c-.2-.68.22-.9.91-1,1.27-.14,2.44.95,3.69.37.78-.37,1,.06,1.71.58.34.24,1.35.67,1.45,1.13.19.71.59,1.25,1.36,1.13a2.51,2.51,0,0,1,1.61.49c-.32.56-.52.72-.42,1.37a3.07,3.07,0,0,1,.06,1.75c.16,0,.34,0,.5,0-.3.39-1.17,1-.71,1.44.81-2.43,3.74,2.86,4.34-.41.12.14.36.16.51.3.32-.68.84-1.35.7-2.13-.1-.55.71-1.64,1.25-1.5-.08.29-.14.57-.2.87,1.27.06,2.12,2.64,2.7,3.67.35.59,1.36,1.76,1.4,2.4,0,.37-.61.87-.53,1.23,0,.16.67.53.77.63.28.22.85.5,1,.83s-.16.8.36.82a3.43,3.43,0,0,1,2.18.63c.54.38,1.65.89.44,1.07a17.4,17.4,0,0,0-2,.58c.4.16.94-.14,1.37-.26-.3.52-1.25.59-1.78.75s-.36,1.19-.08.82a1.39,1.39,0,0,1,.79-.5c.3-.1.18-.28.38-.38a3.47,3.47,0,0,1,1.55-.45.86.86,0,0,1-.58-.3c.38,0,1.13,0,1.29.48s-.44.55-.08,1c.44-.78,1-.36,1.65-.14s.13,1.21,0,1.53c-.22.61.49.81,0,1.5a4.13,4.13,0,0,1-1.49.92c-.52.15-1,0-1.65.23s-.83.54-1.27,1.05a3,3,0,0,1-3,1,23.65,23.65,0,0,0-4-.1c-1.21.08-2.44-.32-2.77,1.27-.08.43-1.25.55-1.55.77a10.09,10.09,0,0,0-1.41,1.51,18.22,18.22,0,0,1-2.18,2.59c1.61-.79,2.48-2.49,4.07-3.27,1.11-.53,4.12-2.22,4.91-.24-.15-.08-.29-.1-.43-.17.83.55-.28,1-.68,1.32s-.95-.35-1.56.08c.25.06.83.7.87.7a1.7,1.7,0,0,1,1.09-.06,1.76,1.76,0,0,1-.71,1.11c.19-.06.41,0,.61,0-.3.85.58,1.53,1.23,1.7a1.53,1.53,0,0,0-.22.16c.93.44,1.85.82,2.66.24,0,.14.06.28.08.44a1.43,1.43,0,0,0,.57-.16c-.57-.72.54-1.75.92-2.34.75.26.33.91.17,1.47.52-.4,1.29.41.82.61a3.09,3.09,0,0,1-1.83.5c.14.13.22.35.36.49-.77.3-1.51.6-2.28.93a2.29,2.29,0,0,0-.85.4c-.32.28-.4-.38-.68-.16-.53.42-1,1.23-1.56,1.75-.36.37-.72-.14-1-.22-.81-1.15,1.13-2.14,1.79-2.62.47-.32.22.06.44.26.43.36.69-.14,1.09-.5-.5,0-1.15-.2-1.59.1a1.76,1.76,0,0,1,.42-.81c-.6-.16-1.35.63-1.85.95-.3.2-.3-.26-.69.16-.18.22-.6.1-.86.1.38,1.23-1.72.79-2,1.35a3.08,3.08,0,0,0-.24-.26c-.33.67-.65.73-1.25,1-.43.16-.45.46-.61.91-.26.64-1.45,2.84.18,2.66l-.12-.3a1.7,1.7,0,0,1,.34.4c-.48.34-1.07,0-1.57-.08-.26-.06-.18.69-.54.71a4.76,4.76,0,0,0-2.77.84c.73-.08,1.33-.44,2.06-.56a1.88,1.88,0,0,1-.24.18c.2,0,.4.06.6,0a3.34,3.34,0,0,1-1.41.54c-.44,0-1.25-.14-1.51.35,1.11.14-.51,2.26-.91,2.6.26-.46-.53-.77-.71-1.31,0,.66.85,1.53.57,2.14a13.79,13.79,0,0,0-1,1.93l-.12,0a3.18,3.18,0,0,1,.38-1.25c-.3-.18-.16-.76-.72-.6a4.57,4.57,0,0,1,.28-1.29c0-.08.4-.93,0-.63-.95.69-.67,1.13-.41,2.3a2.46,2.46,0,0,0-.9-.48c.24.36.82.46,1,.8s-.21,1-.13,1.31c.15.47.79.23.61,1s-.52.57-1.07.75c.46,0,1.29-.16,1.17.54,0,.31-1,.33-1.29.37.14.08.26.22.4.3-.2.08-.32.22-.58.2.22.59.56.06,1,.28-.27.17-.53.31-.79.45s-.51-.22-.67-.12c-.32.18-.64.92-.88,1.27s-.73.12-1,.5a4.19,4.19,0,0,1-.89,1,4.46,4.46,0,0,0-2.2,2.5,3.5,3.5,0,0,0,.2,2.5,23.25,23.25,0,0,1,1.27,3.45c.19.65.37,2.3-.1,2.77s-.66.8-1.07.24c-.12-.18-.88-.87-.88-.93a13.24,13.24,0,0,0-.57-1.37c-.22-.51-.48-.79-.32-1.39l-.28.24c-.23-.77.48-1.86-.29-2.38s-1-1.37-1.81-1.11c-.43.14-.87.44-1.27.18a6.8,6.8,0,0,0-1.21-.79c-.69-.18-1.86.73-2.06-.44-.14,1-2.4.28-3.09.83.49,0,2.22.26.91.88.14.07.85.31.87.45.1.36-.22.5-.47.46.19-.48-.52-.66-.86-.86.08.34-.06.44-.08.7-.31-.66-.59,0-1-.3s-.77-.79-1.4-.57a.57.57,0,0,1-.26,0,4,4,0,0,1-.95-.34c-.64-.24-1.65.49-2.28.75-1,.4-3.42,2.2-3.42,3.67,0,.44.58.89.6,1.33a4.35,4.35,0,0,1-.3,1.11,9.23,9.23,0,0,0-.57,2.44,8.9,8.9,0,0,0,1.44,5.35c.68,1,.94,1.75,2,2.07.25.09.61.65.81.59l1.37-.53a4.47,4.47,0,0,1,1.23-.28c.35,0,.61.41.77.33a2.62,2.62,0,0,0,.58-.29c.1-.08-.16-.36,0-.5a1.91,1.91,0,0,0,.75-1c.26-.89.18-1.92,1.11-2.3a7.58,7.58,0,0,1,2.08-.4c.54.06,2.06-.25,1.57.88-.2.47-.81,1.8-1.13,1.84.16.08.06.26.45.24-.15.12-.25.28-.41.39l.08.1.2-.15a9.21,9.21,0,0,0-.44,1.66,1.17,1.17,0,0,1-.26-1,3.06,3.06,0,0,0-.37.63c.71,0-.1,1.41.13,1.91s-.55,1.29-.85,1.58c1,.36,2,.08,3.09.26.42.06.72-.32,1.15-.26a6.83,6.83,0,0,1,1.57.22,1.94,1.94,0,0,1,1.37,2.16c-.12.7-.22,1.39-.34,2.09-.06.41-.39.77-.45,1.15-.24,1.9,2.06,5,3.78,4.28,1.06-.42,1.61-.87,2.74-.52a4.75,4.75,0,0,1,2.3,1.79c-.06-1.35,1.59-3.17,2.24-4.25.2-.35,1.43-.55,1.77-.67l2.71-1c.82-.3,2.34.42,3.14.61l6.44,1.51c1.15.26,2.34.28,3.23,1.13l5,4.82c1.05,1,3.35,1,4.7,1.37s2.24,2.4,3,3.43,1.59,2.12,2.4,3.17c.2.26.62,1.09.92,1.19l5.17,1.88c1.73.62,3.45,1.23,5.16,1.87,1.44.51,2.91,2.08,4.18,3,.24,0,1.83,0,1.87.22C191.24,303.49,191.42,304.25,191.6,305Z"
                                style="fill: rgb(235, 235, 235); transform-origin: 108.014px 274.645px;"
                                id="eldgyhsf4ms7" class="animable"></path>
                            <path
                                d="M113.77,168c-.28.19-.56.35-.82.53.18.06.32.28.52.36L111.8,170c1.1,0,1.35-.2,1.83.89.14-.14.4-.14.55-.3l.36.86a5.25,5.25,0,0,0-.69.25c1.5.52-.78,2.05-1.61,1.69.2.63-.61,1-1.09.93s-.91-.79-1.31-1.29c-.87-1.11-2.1-1.39-3.17-2.24-.56-.47.1-.87.57-1s.92.83,1.35.91c.91.16.89-.67.89-1.31,0-.33-1.3-.67-1.58-.79.24-.22.65-.93.95-1,.71,0,1.05-.26,1.69.06s.93.14,1.66-.1S113.15,167.68,113.77,168Z"
                                style="fill: rgb(235, 235, 235); transform-origin: 110.498px 170.905px;"
                                id="eldvboqvxzhbe" class="animable"></path>
                            <path
                                d="M420,163.93c-.18-.81,1.37-1.65,1.41-.32.56-.51,1.23-.31,1.9-.29-.07.17,0,.37-.05.55a2.46,2.46,0,0,1,1.84-.12c.14,0,.93.14,1,.3a1.9,1.9,0,0,1-.12.91,10.38,10.38,0,0,1-3.92.46C421.69,165.16,420.08,164.35,420,163.93Z"
                                style="fill: rgb(235, 235, 235); transform-origin: 423.049px 164.181px;"
                                id="elwv7b35n8pk" class="animable"></path>
                            <path
                                d="M475.84,187.07c-.43.36-1.09,1.17-1.62,1.31s-1.29-.2-1.77-.28c0,.82.14,1.09-.57,1.41-.5.24-.06,1,.06,1.55a3.35,3.35,0,0,1-2-.83c-.46-.34-1.49.27-1.63-.3-.2-.83-.08-1.61-.91-1.67s-1.79-.12-2.68-.2c-.54,0,.36-1.64-.81-1.46-.6.1-.36,1.64-.4,2.22,0,1-3,1.21-3.83,1.43.68.51,1.51.73,1.55,1.68a4.07,4.07,0,0,0,1.13,2.44c.06.08-.44.75-.57.81s-.88-.18-1.13-.22c-.42-.11-1.41-.53-1.81-.29-1.65,1-3.29,2-4.94,3-1.27.77-2.67,1.19-3.27,2.68-1.15-1.13-1.21-1.27-2.72-1.07s-1.52.26-2.38,1.54c0-.45,0-.91,0-1.36-.45.23-1.26.85-1.74.79s-1.17-.42-1.53.16l-2.46,4c.44.16,2,.34,1.83.86-.32,1.29-.38,1.33.38,2.36-1.29.57-2.44,1.13-1.75,2.81.12.28-1,.7-1.27.8-.61.23-1.17.15-1.23.89s.18,1.62-.65,1.82c-1,.28-1.07.14-1.25,1.29s-1.59,2.28-2.26,3.11c-.84-3.94-3.69-11.44,1-13.76,1.35-.65,2.14-.85,2.93-2.2a8.17,8.17,0,0,1,2.74-2.68c.79-.59,1.86-.91,2.1-2,.18-.79.38-1.57.56-2.36.06-.18,1.13-.28,1.33-.32a5,5,0,0,0-2-.19c-.59.09-.91,1-1.23,1.52a13.2,13.2,0,0,1-2.93,2.54A4.26,4.26,0,0,1,438,196a3.25,3.25,0,0,1-2.18.69c-1,0-1.25-.08-2,.57a25.89,25.89,0,0,0-3.32,3.38c.32.29,1.15.69.9,1.13-.1.19-1.21.25-1.45.29-1.15.14-2.3.28-3.43.4.41-.28.81-.59,1.21-.87-1.09-.24-2.18-.44-3.27-.66-.3-.06-1,.6-1.33.76s-.76,0-1.15,0a14.3,14.3,0,0,0-2.92-.14c-.63,0-2.46-.26-2.95.2-1.69,1.58-3.35,3.15-5,4.82a33.69,33.69,0,0,1-4.9,3.94c.22.58.62.54,1.13.58s.68,0,.95.61c.06.2.28,1.13.48,1.15,1.31.12,1.41.32,2.06-.95.54-1.07,3.65,1.45,3.49,2.32-.37,2-.83,4-1.27,6.07a13.67,13.67,0,0,1-2.16,4.62,23.65,23.65,0,0,1-3.05,4.28l-2.24,2.2c-.1.12-.22.22-.34.34-.46.46-1.45.46-2.06.61-.3.08-.58-.81-.86-.87s-.93.54-1.13.66c-.95.57-1,.83-1.36,2a7.73,7.73,0,0,1-.32.77c-.06.08-.1.18-.16.26a3.22,3.22,0,0,1-.42.6,6.68,6.68,0,0,1-.61.69l-.66.63-1.15,1.06a9.07,9.07,0,0,1,1.55,1.62h0a3.33,3.33,0,0,1,.36.56,2,2,0,0,1,.22.47,1.63,1.63,0,0,1,.15.4,1.6,1.6,0,0,1,.1.42,3.9,3.9,0,0,1,0,1.28c-.19,1.43,0,1.73-1.19,2.36a4.42,4.42,0,0,1-2.59.44c.1-.81.23-1.61.33-2.42s-.71-.87,0-1.72a.75.75,0,0,0,.18-.78.12.12,0,0,0,0-.14.6.6,0,0,0-.16-.19.55.55,0,0,0-.41-.1c-.6.08-1.57.49-1.77-.46-.1-.48.52-1.65.66-2.14a4.64,4.64,0,0,0-1.11-.76,1.28,1.28,0,0,0-.4-.19c-.48,0-1.39.85-1.81,1.11L388.79,239c-.48-1.21.67-2.1,1.37-2.84-.77-.61-.79-.77-1.61-.37a7.23,7.23,0,0,0-1.48,1,4.7,4.7,0,0,1-1.73,1.11c-.14,0-1.45.51-1.09.91a12.4,12.4,0,0,1,1.39,1.68c.55.88.49.76,1.37.32,1.28-.65,2.26-.1,3.62.26-1.48,1.23-2.95,2.48-4.42,3.73.62.55,1.41,1,1.77,1.8.47,1,.95,2.06,1.39,3.06l-2.28-.42c.81.61,1.62,1.19,2.43,1.78l-1.8,1.27,2.22.66c-.91,1.68-1.7,3.84-2.87,5.31s-2.19,3.35-4,4.09-3.87,1.62-5.83,2.32l-1.82.67c-.5.18-.38.18-.26.76.08.39.08,1.17-.6.83-.18-.1-.39-1-.47-1.23.23,0,.43-.22.65-.26-.69-.53-1.92-.93-2.66-.32s-2.2,1.29-2.46,2.13c-.09.27-.59,1.38-.47,1.6l1.17,1.83a28.78,28.78,0,0,0,1.86,2.49c.78,1,1.23,1.37,1.29,2.68,0,.79.48,2.68-.12,3.23a62.6,62.6,0,0,1-5.15,4.37c-.6-.62.22-1.53-.2-2-.22-.27-.46-.51-.68-.75s-.71-.75-1.05-1.13a4.41,4.41,0,0,0-3.25-1.8l.12-1c-1.37.06-1.11.24-1.23,1.73a9.9,9.9,0,0,1-.81,2.56,1.23,1.23,0,0,0-.06.61c0,.18,0,.36.06.52.06.73.06.61.73.57.34,0,.77,2.18.89,2.58.2.67,1.49,1.27,2,1.65a5.54,5.54,0,0,1,1.5,1.7c.3.79,0,1.89.16,2.72a18.8,18.8,0,0,0,.95,2.34,6.53,6.53,0,0,1-2.83-1.67,3.58,3.58,0,0,1-1.33-2.26c-.26-.79-.48-2.62-1.05-3.21L359.64,284c-.26-.28-.08-1.52.08-2.4a1.35,1.35,0,0,1,0-.29h0c0-.2,0-.38.06-.5a23,23,0,0,0-.22-3.51,25.84,25.84,0,0,0-1.51-6.21c-.45.54-.89,1.07-1.34,1.63s-.5.67-1.35.47-.8-.13-.66-1.09c0-.43.4-1.52.24-1.9-.61-1.37-.93-2.58-2-3.47s-1.31-2.14-1.81-3.31c-.49.34-1.19,1.09-1.78,1.17l-3.06.43c-.15,0-.79,0-.89.12s.12.9-.06,1.11l-1.52,1.55-4.27,4.4a7.8,7.8,0,0,1-2.06,1c-.77.38-.48.94-.46,1.85a10.79,10.79,0,0,1,0,2.66,5.81,5.81,0,0,0-.57,2.51,3,3,0,0,0,.14.5c.06.2.1.38.16.56a2.07,2.07,0,0,0,.21.45,2.28,2.28,0,0,0,.2.38,4.89,4.89,0,0,0,.44.57,8.25,8.25,0,0,1,1.29,2.44c.71,1.63-2.08,3-2.28.85a19.39,19.39,0,0,1-.08-2.85c0-.93-.3-1.09-.91-1.73l0,0c-.08.66,0,1.35-.5,1.71l-1.74,1.15c-1.61-3.07-3-6.21-4.39-9.4a15.54,15.54,0,0,1-1.17-2.68,12.73,12.73,0,0,1-.06-2.14c-.06-2-.12-4.06-.21-6.09-.42.58-.84,1.19-1.27,1.77s-.48.51-1.19.49-1.73-1.56-2.28-2.16c.57-.12,1.76-.06,1.86-.85a3.54,3.54,0,0,1-1,.1,12,12,0,0,1-2.5-1.43c-.52-.3-.87-1.64-1.13-2.2s-4.58.34-5.31.44c-1.59.18-3.2-.44-4.78-.8-.68-.17-1.47-.08-1.81-.77-.65-1.25-.49-1.61-1.74-1.17a4.63,4.63,0,0,1-2.76.06c-.69-.1-1.11-.95-1.74-1.23a2.74,2.74,0,0,1-1.79-1.86c-.36-.78-.5-1.79-1.33-1.93-1.43-.2-1.43-.14-2.42,1-.35.4.84,1.85,1.11,2.28.88,1.49,1.65,3.08,2.46,4.64.12-.71.24-1.42.34-2.12a6.31,6.31,0,0,1,.51,3.33c1-.07,2.76.12,3.71-.47s1.79-2.06,2.54-2.9c.06.88-.14,2.32.58,2.82a8.77,8.77,0,0,0,1.34.91c.4.18.9,0,1.12.48s.47,1.21.83,1.27c.63.12.39.57.32,1.21s-1.37,1.76-1.77,2.24c0-.22-.18-.4-.22-.6a4.26,4.26,0,0,0-.55,2.06c0,.76-.28.68-.92,1s-1.32.63-2,.93c-.39.18-.37,1.29-.75,1.47s-.78-.26-1.11-.12c-.48.23-1,.43-1.45.63-.65.3-.57,1.19-1.17,1.41L298.05,275c-.32.12-.38.28-.58.61s-.61.36-1.05.44c-.95.18-1.88.48-2.81.75-.68.18-.82,1-1.59,1-1.17,0-1.27.27-1.49-.94s-.47-2.46-.69-3.69a14.05,14.05,0,0,0-2.26-4.83c-.58-1-.66-1.15-1.67-1.53-.59-.22-.59-2-.69-2.6a10,10,0,0,0-1.17-2.6c-.26-.51-.83-.75-1.13-1.29-.64-1.17-1.31-2.32-1.95-3.49-.33-.59-.57-1.58-1.34-1.4.08-.7.21-1.43.29-2.14-.29.85-.57,1.72-.85,2.57a11.89,11.89,0,0,1-2.12-3.23c-.68.89.53,2.34.93,3.15l2.38,4.86c.48,1,.3,2.08,1,2.84.3.32,1.07.85,1.15,1.33.12.83.24,1.64.38,2.46.06.49,0,1.4.38,1.76a8.12,8.12,0,0,1,1.46,1.41,19.84,19.84,0,0,1,1.41,3.83c.16.41,1.31.35,1.59.69.45.5.89,1,1.33,1.55.75.85,2.24,1.8,1.09,2.93.77.22,1.62,1.83,2.24,1.67,2.14-.56,4.26-1.15,6.4-1.71.38-.1,1.53-.59,1.85,0,.2.34-.54,2.4-.64,2.82-.39,1.72-1.64,3.33-2.42,4.82a16.37,16.37,0,0,1-2.24,3.68c-2.58,2.72-5.59,5.22-7.51,8.53-.44.73-3.18,4.48-2.74,5.14a3.3,3.3,0,0,1,.69,2.81,2.59,2.59,0,0,0,.74,2.4c1.15,1.57.77,4,.85,6a4.37,4.37,0,0,1-2.28,3.71,8.9,8.9,0,0,0-2.46,1.19l-1.92,2.26c-.56.65-1.25,1-.91,1.82.25.56,1.13,1.89,1.05,2.52s.06,2.44-.32,3-2,.93-2.5,1.19c-.91.45-.71.85-.81,2-.06.59.06,2.2-.28,2.68a47.46,47.46,0,0,1-3.29,4.66,26.52,26.52,0,0,1-2.2,1.9c-.4.34-1.19,1.37-1.73,1.47-1.9.41-3.79.81-5.71,1.19-.87.18-1.76.37-2.62.57-.43.08-1.29-1-1.6-1.31-1-.95-1-.93-.84-2.42.06-.57-.59-1.6-.79-2.1-.44-1.11-.89-2.22-1.33-3.31-.26-.67-1.07-1.17-1.56-1.66-.34-.32-.32-1.85-.4-2.32-.18-1.27-.38-2.54-.56-3.79a15.81,15.81,0,0,0-1.88-4.56c-.48-1-1-2-1.45-3-.22-.45.08-1.25.14-1.72.32-2.16.38-4.21,1.43-6.09s.38-3.23,0-5.1q-.72-3-1.41-6.05a6.52,6.52,0,0,0-1.33-1.82c-.69-.93-1.37-1.86-2.06-2.76-.36-.51-.1-1.15,0-1.78.14-1.25.28-2.5.44-3.77.12-1.07.18-1.13-.44-2s-.69-1.07-1.8-1c-.64,0-2,.45-2.42-.12-.64-.81-1.31-1.61-2-2.44-.29-.34-4.3.3-4.8.55l-2.87,1.45c-.73.4-1.07.2-1.88,0a3.36,3.36,0,0,0-2.21-.2c-1.05.36-2.08.74-3.13,1.11-.49.18-1.05-.49-1.45-.79-1-.73-2-1.45-3-2.16a7.4,7.4,0,0,1-2.66-2.7l-3.81-6.64c-.41-.71-.81-1.41-1.24-2.14-.18-.32.49-1.55.63-1.89.2-.59.87-1.68.73-2.32-.25-1.05-.47-2.1-.71-3.17a10,10,0,0,1-.61-2.7,6.67,6.67,0,0,1,.81-1.48c1.23-2.22,2.44-4.44,3.67-6.65.87-1.56,1.9-2,3.37-3,.77-.48,1.11-.48,1.25-1.43.18-1.17.37-2.34.55-3.51.2-1.37,2.94-1.64,3.49-3,.38-.93.54-2.24,1.49-2.5.24-.08.93,1.21,1.69,1,.33-.06,1.11-.4,1.44-.24.18.1.88.62,1,.52a18.86,18.86,0,0,1,2.26-1.33,17.84,17.84,0,0,1,4.72-1.47,5.08,5.08,0,0,1,1.45-.16,3.54,3.54,0,0,0,1.15.38c.4,0,.76-.46,1.15-.52a4.84,4.84,0,0,1,1.07.06,4,4,0,0,0,2.66-.33c.73-.42,1.39.14,2.16.47-.57,1.23-.69,1.27,0,2.46.28.52-.85,1.35-1.23,1.75.6.55,1.35,1.54,2.12,1.74l3.91,1c1,.26.71,1.39,1.71,1.81s1.7.22,2.51.81c1.13.79,1.73,1,2.46-.44.18-.35-.39-.87-.21-1.17s.45-1.07.71-1.15a5,5,0,0,1,3.15-.23c.28.08,0,.67.4.75.59.12,1.17.22,1.76.36s.5.33.74.81c.12.24.59-.3.79-.24.95.28,1.88.54,2.82.83a2.13,2.13,0,0,0,2.16-.19c1.09-.52,1.19-.68,2.26-.16,1.29.63,3.27.43,3.85-1.21.37-1,2.16-4.13,1.46-5.16-.45-.67.52-2.06.3-2.32s-.63.18-.85.34-.6-.32-.89-.26-.66.83-1,1a4.8,4.8,0,0,1-1.32.06c-.8,0-1.14-.85-1.89-1-.51-.08-.91-.38-1.11.18s-.22.63-.85.75-1.65-.75-2.16-1.05c-.92-.53-2.54-3.23-1.53-4.36l-1,.12c-.14-1.11,1.29-1.41,1.9-1.43a5,5,0,0,0,2.78-.63l-.95-.48c.18-.54,1.36-.3,1.88-.24,1,.14,1-.12,1.8-.65a3.5,3.5,0,0,1,1.79-.78,5.37,5.37,0,0,0,2.26-.08c-.18.32.14.6.48.76.53.26.33-.44.87.32.2.27,1.68.49,2.14.69.81.32,1.31-.16,2.12-.06a3.17,3.17,0,0,0,2.3-.73c.66-.4.3-1.53-.1-2-.59-.65-1.29-.77-1.92-1.36s-1.19-1.41-2.08-1.53a8.06,8.06,0,0,1-.89-.52c-.36-.24-.68-.53-1-.79a4.37,4.37,0,0,1,.28-.4c.32.06.64.14,1,.2-.31-1.07.36-1.39,1.15-1.37a3.47,3.47,0,0,1-1.07-1l1,0c-.25-.75.74-.2.88-.67s-.62-.3-.84-.26c-.83.14-1.72.16-2.28.93v-.28a3.48,3.48,0,0,0-2,1,2.83,2.83,0,0,1,.16-.36c-1-.1-.5,1.07-.14,1.51s1.23.29,2,.29c-.55,1-1.17.24-1.78.56s-1.85,1.45-2.54.89c.42-1.15-.12-1-1.07-1.45.46-.27,2.28-.93,1.05-1.35a3.39,3.39,0,0,0-1.23,0c-.28,0-.69-.43-.93-.61.51,0,1.15.3,1.41-.26-.54.26-1.93-.37-2.28,0s-1.41,1.23-1.49,1.79a4.57,4.57,0,0,1-.22,1.33c-.16.27-.89.23-.95.55-.2,1-.16,1.73-1,2.26s-.6,1.45-.22,2.18c.24.48,1.51,1.07,1.45,1.29-.22.64-1.39-.18-1.79.22L268.9,237c-.08-.69.32-.81.79-1.09-.36-.17-.79-.17-1.21-.33a10.06,10.06,0,0,0-1.62-.26c-.28-.08-.64.16-.92.28s.1.57,0,.69c-.51.42-.87,0-1.32-.28-.48.54.05,1,.33,1.55.42.75.44.67-.16,1.29.78.55,1.65.75,1.49,1.88-.49-.37-.81-.81-1.29-.18.6.12.66.5.22.84s-.22.57,0,1.15c-.52-.12-.93,0-1.17-.56s-.42-.32-.83,0c-.4-1.39-.68-1.51.39-2.38-1,0-1-.12-1.6-1-.34-.51-.58-1.37-1-1.74-.78-.64-.5-1.15-.4-2.22s-.24-1-1-1.57c-1-.77-2.1-1.85-3.31-2-.3,0-1-1-1.13-1.31A2.56,2.56,0,0,0,254,227.9c-.34,1-.74.5-.86-.22s0-.55-.77-.33-1.23.29-.75,1.17c.16.31-.42,1,.1,1.44a6.84,6.84,0,0,1,1.54,1.14c.36.49.3,1.26.74,1.66s.83.85,1.54.89c.44,0,1.23,0,.52.56.65.53,3.85,1.86,3,2.95-.33-.16-1.25-1.44-1.62-1.07a1.34,1.34,0,0,0-.56,1c-.12.46.18.42.5.68.95.73-.62.93-.56,1.37.08.63-1.19,1.72-1.15.71a1.32,1.32,0,0,0-.45,1.76c.31.62-1,.82-1.11.32-.28-.91-3.34-.81-2.13-2.14a5.5,5.5,0,0,0,2.22.26,5.28,5.28,0,0,0,1.57-.36c.4-.26.06-.55.48-.79s-.42-2-.64-2.08-.87,0-.79-.44-.4-.67-.77-.48c.09-.43-.84-1.11-1.21-1-.64.08-1-.57-1.49-1.05-.85-.81-2-1.23-2.26-2.36s-.24-1.13-1.13-1.6c-.46-.24-1.05-.42-1.39,0s-2.64,2.06-3,2l-1.34-.42L241.2,231c-.42-.12-1,.75-1.35,1a.07.07,0,0,0,0,0c-.1.23.31,1.35,0,1.76s-1.39.7-1.81.93c-1.31.68-1.72,1.73-2.48,3.06-.25.41.76.77.28,1.41-.28.41-1.09,1.05-.85,1.56-.28.06-1,.08-1.11.36s-.46,1-.7,1a17.52,17.52,0,0,1-2.51,0c-.72,0-1.17.89-1.75,1.07s-1.47-1-.81-1.47c-.64.3-1-.77-1.77-.31-.65.37-1.11-.2-1.7.25a5.68,5.68,0,0,0,.18-1.44l-.06-.8c0-.29-.3.06-.42-.1-.48-.75-.12-.93.08-1.78s.79-2.08.46-2.86a4,4,0,0,1,0-2.32c-.44.36-.74-.33-.56-.77s1-.4,1.31-.44a2.23,2.23,0,0,0-.14-.27c.79-.7,1.15.25,1.84.08a3.23,3.23,0,0,1,2.25,0c.73.25,1.36-.14,2,.1a3.91,3.91,0,0,0,1.82.21c.8-.19,1-1.23,1.11-2.24,0-.61,0-1.21,0-1.6,0-1,.16-1.29-.75-1.59-.54-.16-.6-1.11-.5-1.41-.49.12-.31-.18-.51-.26a6.44,6.44,0,0,0-.89-.21c-.38-.32-.54-.52-1-.48a.73.73,0,0,1-.81-.4c.14,0,.28-.1.42-.12a.87.87,0,0,1-.54-.79,3.2,3.2,0,0,0,1.63-.28c1-.71.43.54,1.07.38.22,0,1.45-.24,1.39-.59,0-.2-.08-.4-.12-.58l-.18-.46a4.19,4.19,0,0,0-.2-.49c.26,0,.75-.06.85.22a.18.18,0,0,1,0,.1h0a.61.61,0,0,0,.12.29.47.47,0,0,0,.28.1,2.85,2.85,0,0,0,1.73-.24c-.16,0-.32-.15-.48-.17a1.62,1.62,0,0,1,.32-.32,6.23,6.23,0,0,1,1.25-.6c.77-.39,0-.87.35-1.48.16-.28,1.33-.54,1.67-.7a2.69,2.69,0,0,1,1.61-.2c-.24-.09-.86-.15-.86-.43,0-.06.58-.1.62-.16s0-.4.14-.54a3.21,3.21,0,0,0,.63-1.54c.08-.32.6-.26.83-.5.66-.81,1.35-.34,2.16-.61.12,0,0-.42.2-.44s.44-.08.66-.1a3.71,3.71,0,0,1,1,.1c-.12-.63.43-.46.87-.53-.24-.08-.93-.66-.59-.92.55-.43.06-.39-.12-.95s.18-.93-.32-1.33-.3-.57-.34-1.13c0-.93.14-2,1.13-2,.72,0,1.35-.83,2-1.19-.5.73-.74,2.28.33,2.54-.63,1-1.82,1.33-1.62,2.69.18,1,1.09,1.79,2,1.37l-.36.78c.88.53,1.65-.74,2.42-.82a1.59,1.59,0,0,1,1.11.72c.14.51.6.63,1.05.87a1.27,1.27,0,0,0,.08-.48l-.75-.08c.55-.35,2.48-.39,2.87-.89a2.8,2.8,0,0,1,2.69-.83c0,.83,1.16.94,1.58.42.16-.18.24-.68.35-.78s.34,0,.44-.1c.28-.27.66-.41.87-.75a2,2,0,0,1-.55.81c1.41.68.57-1.92.53-2.56a1.91,1.91,0,0,1,.42-1.32c.3-.36.06-.92.56-1.31,1.26-.93,1.56,1.15,2.49,1.21.52,0,.88-.7.8-1.15s.2-1.49.12-1.55-.4.22-.5.14-.36-.4-.57-.58-.38-1.21-.24-1.27a6.06,6.06,0,0,1,2.93-.83l2.16.26c1,.12.16-.24.74-.6.39-.25.95-.11,1.39-.39s1,.1,1.36.14c-.21-.66-1.54-.9-2.12-1.15.1-.14.1-.4.22-.54-2,.38-4.1.89-6.15,1.27-.2.06-1.05.36-1.19.14a1.88,1.88,0,0,0-1.17-1c-.81-.32-.75-.26-.61-1.19a3.12,3.12,0,0,0,0-1.55,6.11,6.11,0,0,1-.46-1.86c.08-.4.91-1,1.17-1.33.64-.75,1.53-1.23,2.16-2,.32-.38.82-1.33,1.25-1.53s1,.2.8-.6a2,2,0,0,0-2.05-1.54c-1.42-.06-1.54-.1-2.51,1-.62.69-.94,1.25-.44,2.14s-3.35,2.76-3.67,3.17c-.95,1.21-2.56,3.12-1.53,4.9.44.74,1.69.72,2.09,1.61.29.61-.76,1.15-1.23,1.54-.78.68-1.39,1-1.55,2a13.14,13.14,0,0,1-.44,3c-.47,1.09-1.27,1.09-2.22,1.29-.37.08-.35.52-.45.91s-.4.32-.84.34c-.67.06-.73.22-.83-.52a3.18,3.18,0,0,1-.12-1.36c.28-.76-.83-1.69-1.27-2.28-.2-.26-.08-.72-.22-1a6.24,6.24,0,0,1-.59-1.22c-.08-.4.26-1.06-.18-1.17s-.42-.74-.57-1.12a2.31,2.31,0,0,1-1.27,1.73c-.58.4-1,1.05-1.63,1.39-.91.57-3.23.28-3.27-1.13-.06-1.75-.75-3.43-.66-5.16.08-1.49.18-1.49,1.27-2.42a8.94,8.94,0,0,1,1.93-1.13,6.25,6.25,0,0,0,2.2-1.41c.59-.65,1.17-1.26,1.8-1.86,1.35-1.27,1.95-2.86,2.94-4.46a30,30,0,0,1,3.41-4.05c1.17-1.31,2.24-2.77,3.79-3.47a46.19,46.19,0,0,1,5.27-1.92c.69-.2,1.05-1.33,1.67-1.69a3.7,3.7,0,0,1,2.18-.39,5,5,0,0,0-1.53,2.63c.79-.17,1.45-1.48,2-2.1.1.38.16.78.24,1.19.36-.49.72-.95,1.07-1.43.14-.21,1.07,0,1.31,0-.22.38-.45.72-.67,1.1.95.71.41-1,1.17-.72s1.62.62,2.42.95-.58.9-.84,1a8.36,8.36,0,0,1-2-.19c.3.55.93.35,1.21,1,.06.16.87-.1,1.17-.08.69.06,1.33.36,1.8-.24.2-.3,1.06.34,1.37.48-.18.65-.79.25-1.23.12-.21,1.34,2.09.83,2.72.85a5.62,5.62,0,0,1,3.07,1,15.75,15.75,0,0,0,3.18,1.53,3.47,3.47,0,0,1,2.38,1.86c.33,1,.29,1-.28,1.86-.34.52-.46.86-1,1a4.11,4.11,0,0,1-2.94.19,26.94,26.94,0,0,1-6.48-2.2c.65.64,2.46,1.85,2.46,2.82s-.16,2.93.73,3.31,2.28,1.57,3.25,1.17c.58-.24.28-1.17-.31-1.17s-.8-.52-1.21-1c.91-.83,1-.62,2.08-.24.91.32,1.82.62,2.72.95a17.54,17.54,0,0,1-.7-2.08l2.06-1.37c.36-.24,1-.93,1.45-.81l2.18.65c.08-.41.42-1.17.28-1.58,0-.1-.75-1.25-.79-1.09.16-.68.33-1.33.47-2,.06-.25-.71-.95-.87-1.13.87.1,1.75.22,2.62.34.67.08,1.09,1.07,1.49,1.61-.42,0-1.71-.08-1.93.33-.38.64.32,1.09.74,1.63s1.13.22,1.8.1c.83-.1.22-.73.67-1.31.2-.26,1-.42,1.25-.57.78-.34,1.57-.7,2.36-1.06l3.61-1.64c.34,1.13.34,1.11,1.39,1.39.69.17,1.05-1.13,1.65-1.07a3.24,3.24,0,0,0,2.22-.14,2.58,2.58,0,0,1,2.2-.18c-.14.26-.3.53-.46.79,1.11.34,1.07.38,1.79-.59s.25-1-.42-1.89a7.72,7.72,0,0,1,5.39.2l3.22,1.29a10.89,10.89,0,0,1,2.24,1.69c.06-.4.47-1.77.14-2-.78-.61-1.59-1.19-2.38-1.8-.52-.38.31-1.49.55-2s-1.05-.9-1.39-1.15l2.34-1.85c.52-.42.74-2,1-2.62.31-.83,4,.06,4.89.14-.35.91-.67,1.83-1,2.74-.18.46.62,1.57.84,2,.39.81-.9,4.38-.26,4.82s1.64.6,1.23,1.57c-.24.55-.5,1.82-1,2.12-.82.51-1.67,1-2.52,1.53-.36.23-1.49-.16-1.93-.22,1.07.89,2.3,1.66,3.73,1.17,1.15-.36,2.44-2,3.29-2.82s-1.5-2.42.5-3c.38-.12,1.47-.7,1.78-.36.5.6,1,1.19,1.53,1.77-.12-.78,0-1.51-.65-2a1.8,1.8,0,0,0-1.87-.47,8.13,8.13,0,0,1-2.26.31c-.14-.55-.63-1.5-.4-2s1-1.51.62-2.14-1.41-1.53-1-2.1c.47-.74,1.19-.86,2-1.19.58-.24.08-1.59-.06-1.93.42-.13,1.25,1,1,1.51-.59,1.13-.53,1.09.1,2.2.4.74,3.49.76,4.27.8a27.27,27.27,0,0,1-3.28-1.35c-1.25-.58.9-1.51,1.41-1.67,1.51-.49,2.14-.12,3.63.44a8.89,8.89,0,0,1,1.31.81c.4.28,1,0,1.43,0a5.82,5.82,0,0,0-.58-1.63c-.31-.29-1.37-.23-1.76-.31s-.6-2.3-.7-2.88l5-.51,2.86-.3c.63-.06.39-.73.41-1.37,0-1.25-.06-1.25.91-1.84a16.61,16.61,0,0,1,2.13-1.27,35.63,35.63,0,0,1,5.11-1,48.61,48.61,0,0,0,9-2c.69-.27.39-1.4.93-1.68.89-.44,1.76-.89,2.63-1.33,1-.54,2.92-.54,3.69.59-.83.26-1.66.5-2.46.74l3.89.57-1.59,1.41c.7,0,1.43.08,2.15.14,0-.28-.12-1.37.15-1.35l1.69.06a4.5,4.5,0,0,1,2.52.34,10.76,10.76,0,0,1,2.52,1.76c.14.18.87.93.77,1.13s-.34,1.09-.59,1.25l-10.47,6.43,7.27-2.05-1.86-.29c.75-.62,1.88-1.23,2.76-.56,1.34,1,1.64.91,3.23.76a31.64,31.64,0,0,1,6.28.47c-.41.22-.81.46-1.19.7.5.25,1.43.95,2,.93l2.5-.12c.49,0,1.86.22,1.94-.42.18-1.27.06-1.23,1.19-1.25a13.48,13.48,0,0,0,2.38-.06c.57-.1,1.78-.63,2.34-.45s1.29,1.48,1.7,1.94c.24.28-.29,1.82-.31,2.24a7.54,7.54,0,0,0,.31,2.36c.76.44,1.51.87,2.28,1.29.34.2,1.35-1.51,1.59-1.84.64-.86.52-1,1.41-.4s1.09.89,2.1.57c.62-.21,1.39-.69,2-.37.44.24,1.45,1.05,1.95.85.77-.32,1.54-.65,2.34-1-.22-.4-1-1.25-.68-1.63s.95-1.62,1.29-1.58l4.5.59a23.68,23.68,0,0,1,3.41.87,16.78,16.78,0,0,1,3.91,1c.67.36,2.16,2.82,2.82,2.7,1.5-.24,3-.51,4.5-.77,1.23-.2,2.4.38,3.59.73.73.22,1.07.1,1.31.89a2.33,2.33,0,0,1,0,1.83c1.28.4,2.24.89,3.53.67a9.55,9.55,0,0,1,4-.08c.54.08,1.29.42,1.77.06.75-.55.65-.57,1.29.08.49.46,1.15,1.45,1.74,1.69.42.18,1.33-.14,1.78-.18-.15-1-.29-2-.43-3,2.16.17,4.3.33,6.44.51,1.67.12,3.28,1.29,4.82,2,1.75.84,3.45,1.75,5.14,2.74,1.05.59,1.21.65,1.66,1.86s.36,1.77,1.69,1.77l-.48-1.63a8.73,8.73,0,0,1,3.28.5A9.15,9.15,0,0,1,475.84,187.07Z"
                                style="fill: rgb(235, 235, 235); transform-origin: 345.095px 251.291px;"
                                id="elc3w0xan162" class="animable"></path>
                            <path d="M259.7,211a1.48,1.48,0,0,0-.53-.22s0,0,0,0C259.32,210.85,259.62,210.93,259.7,211Z"
                                style="fill: rgb(235, 235, 235); transform-origin: 259.435px 210.89px;"
                                id="el6uh3e2rzfdr" class="animable"></path>
                            <path
                                d="M164.79,219.26c0,.25.44.33.63.43s.18.68.2,1c.44-.13,1.91-.67,2.28-.27s.54.55.44,1.25c0,.25.71.43.81.85.14.65.58,2,.2,2.62s-.47.51-1,.29-.61-.29-.44-1.11c-1.11.08-1.32.8-2.38,1a.81.81,0,0,1,.62-.87,5.9,5.9,0,0,0-3.53-.47c-.36,0-1.27.17-1.53-.26a2.55,2.55,0,0,1,.16-1.59,9.68,9.68,0,0,0,2.34-3.47c.38-.93,1.51-2.34,2.56-1.92-.16.36-.34.73-.5,1.09C165,218.36,164.77,218.44,164.79,219.26Z"
                                style="fill: rgb(235, 235, 235); transform-origin: 165.265px 221.134px;"
                                id="eldgfp5pfx2yb" class="animable"></path>
                            <path
                                d="M367.85,303.16c0,.24-.1.49-.1.73-1.19-1.13-2.28-2.26-3.33-3.43a7.37,7.37,0,0,1-1.43-1.82,12.34,12.34,0,0,0-1.31-2.9c-.27-.26-.63-.12-.75-.51-.14-.58-.3-1.15-.44-1.71-.27-1-1.5-.77-1.54-1.82s-1.13-1.15-1.63-1.61c-.24-.18-1.55-1.84-1.27-2.24.16-.24,1.81.4,2.16.43,1.09.14.93.56,1.51,1.39a15.14,15.14,0,0,0,1.82,1.67c.64.61,1.43.83,1.95,1.55.26.39.59.35,1,.41.75.14.24.26.67.58s.66,0,.66.69c0,.34.77.28.89.87.08.38-.38.54-.3,1.07,0,.32.72.44,1,.54s.26,1,.32,1.25c.08.49.64.46.06,1.05a1,1,0,0,1,1.69,1c-.32,1-.1,2.32-.3,3.35C368.76,302.84,368.41,303.87,367.85,303.16Z"
                                style="fill: rgb(235, 235, 235); transform-origin: 362.775px 295.843px;"
                                id="elmhhe16a4e7d" class="animable"></path>
                            <path d="M230.17,212.1l-.22,0a.77.77,0,0,1,.48-.66A.51.51,0,0,1,230.17,212.1Z"
                                style="fill: rgb(235, 235, 235); transform-origin: 230.21px 211.77px;"
                                id="el6jc76r42ows" class="animable"></path>
                            <path
                                d="M134.41,169.21a.86.86,0,0,1,.22-1.61l1.45.55c.41.14,1-.17,1.34,0a6.57,6.57,0,0,1,2.62,2.09,8.72,8.72,0,0,0-2-.08c-.48.1-1.86.71-2.28.45a3.17,3.17,0,0,1-.87-.53C134.53,169.68,135,169.5,134.41,169.21Z"
                                style="fill: rgb(235, 235, 235); transform-origin: 136.99px 169.137px;"
                                id="elasxfpf5btsq" class="animable"></path>
                            <path
                                d="M142.14,269.78c-.29-.85,2.05.1,2.62-.31-.59-.86-.49-1.15-1.41-1.59.9-.42,1.15-.12,2.07-.12a2.52,2.52,0,0,0,.83-.2c.3-.18.81.16,1.13.26s.42-.18.67.28c.32.63.36.63,1,.75.27.06.85.4.69.68-.4.65-.28.17-.85.17-.76,0-1.23.22-1.91.24-.12,0-.22-.39-.61-.1-.22.14-.22,1-.44,1.05-.53.18-.45-.71-.65-.81s-.72,0-1,0C143.27,269.92,142.92,270.34,142.14,269.78Z"
                                style="fill: rgb(235, 235, 235); transform-origin: 145.941px 269.211px;"
                                id="elswepbxi3ssb" class="animable"></path>
                            <path
                                d="M261.74,177.51l-.12-.39a1.41,1.41,0,0,1,.58,0C262.25,177.57,262.08,177.75,261.74,177.51Z"
                                style="fill: rgb(235, 235, 235); transform-origin: 261.914px 177.353px;"
                                id="eln3p7y6c4oxj" class="animable"></path>
                            <path d="M253.09,182.27c0-.12,0-.25,0-.37.24-.22.46-.26.66,0A.59.59,0,0,1,253.09,182.27Z"
                                style="fill: rgb(235, 235, 235); transform-origin: 253.42px 182px;" id="el15jrer3xvhj"
                                class="animable"></path>
                            <path
                                d="M78.05,172.6a3.55,3.55,0,0,1-.65.12c-.14-.66.42-1.12.79-1.59s-.41-.95.7-1c0,0,0,0,0,0-.56-.54.43-1.49.85-1.89.22-.19-.73-1.46-1-1.84,1.27-.18,2.54-.34,3.79-.54.83-.11,1.64.68,2.51.88v0a1.11,1.11,0,0,0,.72,0,4.7,4.7,0,0,1-.12.51c.85-.95,1.92-.55,2.89-.14a6.79,6.79,0,0,1,1.35.88c.62.43.66.69.12,1.17-.85.75-2.44,1.07-3.45,1.52-.46.2-.73.18-.87.7s-.74,1-1.31.69L84,173.67a8.18,8.18,0,0,1-1.17.55c-.14,0-.08-.35-.24-.26s-.39.22-.57.34c-1.21.68-1.09.7-2-.39A5.53,5.53,0,0,0,78.05,172.6Z"
                                style="fill: rgb(235, 235, 235); transform-origin: 83.8775px 170.313px;"
                                id="elc397tk2osdd" class="animable"></path>
                            <path
                                d="M138.75,266.77c0-.52-.77-.32-1-.42-.79-.37-.81-1.19-1.51-1.29s-1.42-.61-2.14-.65c-.43,0-.47-.32-.87-.2a.92.92,0,0,1-.95-.34.78.78,0,0,0,.67-.13c-1.29-1.31-2.77,1.64-4.08.95.67-.42.89-1.21,1.7-1.41a7.74,7.74,0,0,1,2.84-.38,11,11,0,0,1,4.86,2.1,1.39,1.39,0,0,1,.1-.21,2.55,2.55,0,0,0,2.08,1c.16,0,.36.55.73.61a2.77,2.77,0,0,1,1.21.72c-.51.17-1,.33-1.54.45-1-.08-1.95.16-2.92,0C138.08,267.44,138.75,267,138.75,266.77Z"
                                style="fill: rgb(235, 235, 235); transform-origin: 135.63px 265.258px;"
                                id="elbeu1qlhoe49" class="animable"></path>
                            <path
                                d="M227.93,207.22c.18-.22.59-.36.63-.52a1.48,1.48,0,0,1,.44-.87,1.76,1.76,0,0,0-.3-.1l.2-.1c-.22-.08-.38-.06-.32-.39l.34.08c-.12-.2-.14-.48-.26-.68a.87.87,0,0,1,.88.08c-.16-.14-.3-.36-.46-.53a2.26,2.26,0,0,0,.12-.32l.39-.06c-.21-.46.28-.95.38-.38.4-.18.1-.14.36,0a3,3,0,0,1,1.82-.35c-.16.85-1.21,1-1.31,1.54a3.08,3.08,0,0,1-.43,0,3.52,3.52,0,0,1,.61.18c-.2.12-.31.38-.47.54l.12.11c.27-.53,2.57-.81,2.91-.29.52.81-1.47,1.88-1.05,2.79a.86.86,0,0,0-.91.36c1.41.2,2.06.32,2.54,1.88.37,1.23,1.62,1.35,1.86,2.82a.69.69,0,0,0-.89-.28c.57,0,1.72,1,1,1.53.18.2,2.16-.58,2,.59s-.69,1.45-1.54,2.07c.35,0,2,.39.93.85a12.72,12.72,0,0,1-2.24.53c-.48.12-.56-.35-1-.37s-.93.47-1.22.61c-1,.48-1.21-.63-1.77.74-1-.7-1.72.73-2.42.23.38-.43,1.27-.87,1.41-1.42.26-1,1.09-.66,1.88-.56a2,2,0,0,1,.56-.91l-1.23.42c-.1,0-.68-.32-.91-.32l.21-.16c-.57-.32-1,.52-1.44-.12a2.31,2.31,0,0,0,0-.32c.33-.12,1.17-.29,1.37-.57.39-.54.06-.7.15-1.27-.29,0-.57.1-.87.16.44-.3.68-.68.2-1.07a.49.49,0,0,1,.69.31c.38-.31.74-.13,1.19,0a2,2,0,0,1-.08-.31c.22.12.16,0,.34.22l.14,0a1.41,1.41,0,0,1-.1-1.65c-.73.54-1.33-1.27-.18-1.55-.67-.08-1.27.54-1.76.22.18.54-.3.14-.6,0a2.68,2.68,0,0,0,0,.4c-.67-.5-.1-.58.08-1.15s.1-.4,0-.88-.14-.49.2-.51a3.09,3.09,0,0,0-.14-.46c-.43.88-.93.38-.32-.12-.53.2-.51.68-.57,1.11,0,.28.06,1.17-.36.78-.2-.18,0-.3.1-.54.18-.49,0-.49,0-.87.14-.54.22-1.13.74-1.41-.06-.06-.08-.12-.14-.16-.3.28-.52.64-.88.52.48.4-.27.69-.59.38C228.5,207.56,228.48,207.34,227.93,207.22Z"
                                style="fill: rgb(235, 235, 235); transform-origin: 233.035px 211.338px;"
                                id="elhql1bzjhord" class="animable"></path>
                            <path d="M229.42,209.48a.87.87,0,0,1-.22-.57C229.5,209,229.59,209.2,229.42,209.48Z"
                                style="fill: rgb(235, 235, 235); transform-origin: 229.353px 209.195px;"
                                id="el4erbi05tdd2" class="animable"></path>
                            <path
                                d="M91.52,160.3c.93.36.51.83,1.68.6.62-.1,1.25.73,1.73,1.11a3.24,3.24,0,0,1-.36.2c.74-.06.85-.14,1.05.69.08.36,1.37.22,1.67.24.63,0,1.31.39,1.41-.34.06-.36-1.15-.65-1.43-.79l.93-.36-1.37-.85a5,5,0,0,0,.58-.52c.16-.18.33-.36.49-.57h0c.06-.1.14-.2.22-.32a.87.87,0,0,1,.64-.08.67.67,0,0,1,.31.48c0,.06,0,.15.06.23l.06.24a.6.6,0,0,0,.08.2.72.72,0,0,0,.24.36c.3.24.38.89.73,1,.54.16.76.26,1,.91.48-.63-.55-1,.7-1.17,1-.14,1.11.6.93,1.37s-.4,1.35-1,1.35h-1.35c-.42,0-.46.47-.73.49-.52,0-.82-.49-1.37-.31-1,.35-1.88.71-2.82,1-1.7.63-2.34.95-3.92-.08,1.29-.44,3.21-.6,4.14-1.59-.49.34-1.6.66-1.88,0-.06.64-1.13.44-1.59.48.1-.5.34-.95-.24-1.15-.27,1-.41,1-1.21,1.52-.1-.63-.85-.75-.61-.08-.32-.07-.64-.17-1-.27,0-.12.06-.24.1-.36a2.81,2.81,0,0,1-1.85-.14c.54-1.07,2.38-.53,3.27-1.25-.31.06-2.61.76-2.69.14s2.69-.53,3-.73c-.69,0-1.74.29-2.34-.06v-.46a4.69,4.69,0,0,1,2.5-.2c-.28-.08-1.43-.23-1.43-.57S91.34,160.24,91.52,160.3Z"
                                style="fill: rgb(235, 235, 235); transform-origin: 95.2406px 162.664px;"
                                id="ela2s346wi5do" class="animable"></path>
                            <path
                                d="M421,360.25a2.46,2.46,0,0,1-2.24-1.73,7,7,0,0,1-.41-3.31c.69.3,1.37.62,2.06.93.36.16,1.53-.59,1.92-.73C423.69,355.85,422.36,360.51,421,360.25Z"
                                style="fill: rgb(235, 235, 235); transform-origin: 420.601px 357.735px;"
                                id="eljj2t2mugcp" class="animable"></path>
                            <path
                                d="M387.68,273.13c.12-.47-.3-.59-.24-1,.14-.77.26-1.56.38-2.32.06-.31.61-.49.87-.45.83.18.4.67,1.35.2.3.65-.24.87-.14,1.34.18.86.54.44.22,1.45a3.42,3.42,0,0,1-.22.79c-.12.18-.59-.17-.57.16,0,.84-.56.54-.1,1.47.25.48,0,1.11.65,1.15.22,0,.28-.51.6-.42a1.82,1.82,0,0,1,.73.26,3.49,3.49,0,0,0,.77.46c.2.06.24-.5.48-.24.53.54.1.87-.5.56,0,.81.84.57.44,1.44-.24-.16-1-.51-1-.79,0-.83-.14-.73-.85-1,0,.34-.1.67-.16,1a1.92,1.92,0,0,0-.6-.69c-.71-.42-.51,0-1.07,0s-1.19-.84-.38-1.27c-.39-.14-1-.18-1.09-.66s-.47-1.43-.17-2C387.28,272.78,387.48,272.94,387.68,273.13Z"
                                style="fill: rgb(235, 235, 235); transform-origin: 389.833px 273.667px;"
                                id="elibi12merua" class="animable"></path>
                            <path
                                d="M222.81,216.12a2.78,2.78,0,0,0,.64-.33c-.2,0-.4-.14-.6-.18a1.21,1.21,0,0,0,.82-.54c.21-.3.91-.3,1.26-.37a2.57,2.57,0,0,0-1.52.17,8.27,8.27,0,0,1,1.19-1.27,3.65,3.65,0,0,1-1.47-.45c.18-.18.63-.46.54-.73-.16-.56-.3-.62.19-.9.26-.14.66.08.94.16.45.1.63-.18,1-.47l-.84-.3c.42-.72,1.29-1.71,2.17-1.19l-.18.32c.26-.06,1-.38,1.17-.16.3.37.43,1.09.83,1-.08,1-.34,1-1.11,1.55a2,2,0,0,1,.48,1.64c-.12.42-.26.85-.38,1.27s-.42.12-.81.24c-1.11.3-2.68,2.12-3.83,1.13.14-.08.22-.26.36-.34C223.39,216.26,223.11,216.2,222.81,216.12Z"
                                style="fill: rgb(235, 235, 235); transform-origin: 225.88px 213.288px;"
                                id="el1cp0kbanopk" class="animable"></path>
                            <path
                                d="M119.66,163c.63-.62-.36-1.43-.72-1.85-.61-.73-1-.41-1.86-.31s-1.45.31-2.24-.48-1.19-1.33.06-1.68a6.18,6.18,0,0,1,2.48.27c.71.1,1.07.78,1.84.92s1.53-.48,2.26,0c.4.27.14.55.7.71.41.12.81.24,1.21.34-.16.67-1.57.1-1.45.57,0,0,1.45.85,1.64,1l1,.66c.18.12.6-.3.82-.32a8.65,8.65,0,0,1,2.44.52,3.47,3.47,0,0,1-.42-.34,14.68,14.68,0,0,0,2-.56c.72-.25,1.27.1,1.93-.12,1.56-.53,3.07.28,4.28,1.31-.3.22-.6.46-.93.68a1.93,1.93,0,0,1,1.11.45c-.68.22-.93.16-1.13.88-.1.35-1.55.37-1.85.41a2.57,2.57,0,0,1-1.42-.26c-.58-.23-.14-1.09-.94-1.09.06.32.1.64.16.94-.59.1-1.78.65-2-.2-.22.85-1.27.63-1.69.06a5.24,5.24,0,0,1,0,.57c-.77,0-1.56-.08-2.32-.1s0-.89-.73-1.17a5.14,5.14,0,0,0-.14.8c-.08-.18-.28-.3-.38-.48-.13.79-.59.58-1.13.52s-.63-.16-.93-.8c-.38.28-1.23.86-1.51.22C119.5,164.11,119.28,164,119.66,163Z"
                                style="fill: rgb(235, 235, 235); transform-origin: 124.955px 162.366px;"
                                id="elp87fyqtv94" class="animable"></path>
                            <path
                                d="M227.77,208.77a2,2,0,0,1,.42-.3c.18.34.14.61-.18.71C227.89,209,228.11,208.85,227.77,208.77Z"
                                style="fill: rgb(235, 235, 235); transform-origin: 228.033px 208.825px;"
                                id="el5wi751ojho2" class="animable"></path>
                            <path
                                d="M122,145.35c-.7-.32-1.39-.65-2.09-1,1.08-.6,2.38-1.31,3.4-.4.79-1.76,2.79-.89,4.28-1l-1.19-.57c.57,0,1.13,0,1.7,0-.11-.3-.23-.6-.35-.88.51,0,1.25-.14,1.68.16a8.7,8.7,0,0,0,2,1.27l4.44,1.11-4-2.18c.44-.38,1.09-1.21,1.67-1.25s1.05-.08,1.57-.1.45-.47.77-.59a5.39,5.39,0,0,1,2.2.41l2.38,1c-.66-.57-1.35-1.11-2-1.68l3.41.06c.79,0,1.66.93,2.32,1.37-.2-.38-.38-.74-.56-1.13a38.51,38.51,0,0,1,4.23-.62,32.87,32.87,0,0,1,4.42.62l-2.32,1.31a10.58,10.58,0,0,1,4.16-.5,30.14,30.14,0,0,1,4.72,1.25c-1.17.63-2.81,2-4.12,2.1-1.81.12-3.63.26-5.44.4l2.46.43-4.24,1.25,7-1.4c-.08,1.13-3.13,1.92-4.07,2.51a10,10,0,0,1-2.42,1.47c-.91.2-1.82.38-2.73.56l1.7.08a5,5,0,0,1-1.72,1.38c-.54.28-1.29-.14-1.83-.29l.24.85c-1.56.3-3.13.47-4.7.65.64.06,3.12-.25,2.92.8h-2.6c.63.16,2.6.23,2.52,1.15l-2.26.31,1.29.68a2.72,2.72,0,0,1-1.71,1.27c-.45.16-1.47-.5-1.74-.28s.83.65.06,1.31c-.24.22-1.61,1.21-1.33,1.64s.33.32.81,0,.48-.06.91.18c.24.14.18.72.22,1s-.59.34-.77.4-.5-.26-.58-.22-.32.48-.55.56l-2.26.69c.17-.67.39-.89-.14-1.29-.34-.31-.62.42-1.17-.14-.06,1-1.25.46-1.53-.17.16.81-.54.51-.95.37s-.64.44-1.31.44a15.67,15.67,0,0,1-1.67-.14c-.57-.06-1.09.4-1.23-.44-.33,1-1.48.36-1.52-.51-.48.57-.66,1.09-1.23.37.43-.29-.12-.55.08-.79s.93-.4,1.23-.55c.87-.36,1.29-.14,2-.88-1-.1-1-.21-1.57-1.19a3.67,3.67,0,0,1,2.18-.14c.64.1.7,1.1,1.43,1.31,1.81.46,2.48-.57,3.51-2-.63.66-1.9,2.26-3,1.49-1.35-1-.22-1.71.2-3-.58.54-1.19,1.55-2,1.37-1.13-.24-2.22-.32-1-1.51s3.63-1.07,5.06-.31a7.52,7.52,0,0,0-2.26-2.72c-1-.69-2.8-.57-1.87-2.38,0,.08,3.06.08,3.24.14,1.07.28,2.26,1.37,3.23,2-.76-.71-1.53-1.42-2.3-2.1,2.3-.42,4.54-.91,6.8-1.49L137,146.7c.57-.5,1.13-1,1.7-1.53a10.12,10.12,0,0,0-3.35,2.06c-.35.32-1.41.3-1.84.38l-2.12.4c.43-.36.87-.7,1.29-1.07-.58.16-1.15.35-1.71.53.14-.14.24-.34.38-.49-.24.08-1,.17-1.07.45-.08.8-.16.64-.88.64a20.15,20.15,0,0,1-2.67-.28,6.06,6.06,0,0,1,2.85-1.55,5.12,5.12,0,0,0-3.17,1c-1,.64-2,0-3.07-.33a6.76,6.76,0,0,1,2.67-.52,6.82,6.82,0,0,0,2.84-1,17.43,17.43,0,0,1-3.33.75c-1.21,0-2.3.64-3.33-.1l1.82-1.54Z"
                                style="fill: rgb(235, 235, 235); transform-origin: 139.375px 150.41px;"
                                id="el6mv0w5cuwpu" class="animable"></path>
                            <path
                                d="M461.21,175.93c0-.22-.44-1.61-.3-1.67.5-.22,1.29-.79,1.83-.77l2.3.12c.59,0,.93.51,1.37.91-.76.87-1.63.85-2.72,1-.32.08-.6-.18-.95-.08C462.24,175.65,461.73,175.79,461.21,175.93Z"
                                style="fill: rgb(235, 235, 235); transform-origin: 463.646px 174.71px;"
                                id="elpjdbt5aoit" class="animable"></path>
                            <path
                                d="M207.86,177.59l-5,3c-1.31.81-3.11,1-4.56,1.35l-3.05.83c-.66.16-.85.55-1.31,1.13a12.09,12.09,0,0,1-1.82,2.26,9.53,9.53,0,0,1-2.28.75c-1.08.36-2.15.7-3.24,1.07-.81.26-.79.28-1.11,1.17-.61,1.65-1.19,3.28-1.72,5-.68,2.08-1.35,4.17-2,6.25,0,.18-1.54.14-1.8.06-1.09-.4-2.16-.78-3.23-1.19-.52-.2-1.47-.3-1.81-.83-.67-1-1.35-2.09-2-3.16a27,27,0,0,1-3.15-5.47c-.44-1.25-.89-2.5-1.33-3.77-.3-.85.18-2.36.3-3.25,0-.16,0-1,.17-1.09.62-.24,1.23-.52,1.83-.77.18-.08,1-.28,1-.5l.24-2-2.64.79c-1.21.36-1.15.38-2.06-.63-.72-.78-.28-1.37,0-2.44s-.62-1.51-1.33-2.26-.14-1.31.18-2.25.2-1.11-.24-2.1a23.24,23.24,0,0,0-2.66-5.21c-.29-.36-1.19-2-1.64-2.08l-2.66-.44a16.39,16.39,0,0,0-5-.42l-2.91.36c-.48.06-1.69-1-2.12-1.23L146.33,159c-.62-.39-1.17-1.58-1.61-2.16-.14-.2-.83-.89-.77-1.15s.06-1.25.42-1.35l4.4-1.25a13.48,13.48,0,0,1,3.25-.65c.79,0,.91.12,1.21-.66s.57-1.42.83-2.12c-1.27-.14-2.4,0-3.33-1,2.5-1.29,5-2.58,7.54-3.9,1-.5,2-1,3-1.57a9.84,9.84,0,0,1,2.76-.38l5.39-.71a9.87,9.87,0,0,1,2.74-.36,49.4,49.4,0,0,1,7.43,2.18c-.89-1.5-2.44-2.16-3.84-3.05,1.48-.68,3-1.35,4.44-2,1-.46,2.28.1,3.35.29.89.14,1.76.3,2.64.46.69.12.75-1.09,1.27-1.39A4.6,4.6,0,0,1,189,138c1.11-.1,2.2-.18,3.29-.29a40.49,40.49,0,0,1,9,.73c2.75.38,5,1.55,7.61,2.68-1.33.49-2.64,1-4,1.44.83.66,1.76.46,2.73.5,1.13,0-.45,2.5-.57,2.74.81-.34,2.48-1.51,3.33-1.37s1.47.26,2.2.37.89-.59,1.27-1.09c.63-.75,2.44-.57,3.33-.41a22,22,0,0,1,3.67,1.44c-1,.62-2.12,1.23-3.19,1.85a9.17,9.17,0,0,1-2.86.71c.26.24.52.46.81.68a11.87,11.87,0,0,1-2.38,2.12c-.83.59-1.84,1-2.39,1.86s-1.73,2-1.33,3c.53,1.27,1.21,1.56,2.28,2.28l-3,3c.7.48,1.39,1,2.09,1.43s.49,1.45.61,2.12c0,.3.52,2.06.34,2.28-.7.76-1.41,1.53-2.1,2.3-1,1.15-1.35,3-1.87,4.54-.2.58.4,2,.54,2.56C208.69,176.66,208.63,176.64,207.86,177.59Z"
                                style="fill: rgb(235, 235, 235); transform-origin: 182.403px 169.109px;"
                                id="el7damxcqsaye" class="animable"></path>
                            <path
                                d="M350.58,150c.12-.3.45-1.41.71-1.47s1.39-.2,1.47-.49c.2-.82.12-1.05.85-1.27s1.27-.4,1.91-.58-.06-.75.89-.71,2.12,1.43,2.83,1.94c-1.09.32-1.09.18-.87,1.41.1.56,1.27.52,1.75.65l-1,1.08c1-.4,1.58-.86,2.57-.32.44.24,0,.85-.18,1.29s.26,1.07.36,1.41a3.37,3.37,0,0,1-2.58.15,5.22,5.22,0,0,0-2.95-.29c-1,.1-1.39-1-2-1.79-.48-.65-1.91-.18-2.64-.14C351.47,150.7,350.52,150.11,350.58,150Z"
                                style="fill: rgb(235, 235, 235); transform-origin: 356.228px 149.378px;"
                                id="el83jdozd5kd" class="animable"></path>
                            <path
                                d="M414.57,216.32a7,7,0,0,0,.3-2.18c-.14-.5-.26-.57.12-.87s.43.1.63-.08c.48-.44.2-1.15-.24-1.59,1.17-.89.76.91,1.09,1.55.62,1.21-.33,1.82-.12,3,.06.38.5.68.6,1.07l.42,1.67a12.35,12.35,0,0,0,1.15,3.17c-.72,0-.64-1.27-1.37-1.13-1.13.22-1,.54-1.39,1.73-.28.87,0,1,.46,1.8.35.6,1.09,1.61.49,2.26,0-.55-.28-1.35-.93-1.25s-.64.95-.77,1.49a4.26,4.26,0,0,1-.22-2.18c0-.32-.26-.77-.08-1.05a1.23,1.23,0,0,0,.22-1.23c-.2-1-.58-1.05-.1-2.06a5.35,5.35,0,0,0,.28-2.5C415.74,217.31,414.47,217,414.57,216.32Z"
                                style="fill: rgb(235, 235, 235); transform-origin: 416.542px 219.159px;"
                                id="elf1xx1wbrjm6" class="animable"></path>
                            <path
                                d="M294.38,148.21c-.54-.16-1.09-.3-1.63-.44,1.59-.48,2.66-1,4.25-.58a4.5,4.5,0,0,0,2.22-.35c.79-.2,1.21.18,1.88.63-1.19.26-2.38.54-3.57.83.1.34.18.66.28,1a7.91,7.91,0,0,1-3-.48c.59-.38,1.19-.81,1.8-1.21Z"
                                style="fill: rgb(235, 235, 235); transform-origin: 296.925px 148.045px;"
                                id="elo1ocdlbu8j" class="animable"></path>
                            <path
                                d="M460.24,352.36c-.14.15.18.67-.22.49s-1-.12-1,.46c0,.95-.75,1.94-1.15,2.77s-1.21.62-1.85.22c.34-.39,1.21-1.29.84-2-.12-.22-.78-.24-1-.36a8.44,8.44,0,0,1-.9-.81,2.87,2.87,0,0,0,1.23-1.73c.26-.67-.22-1.34,0-2-.67.22-1.27-2-1.56-2.56a2.86,2.86,0,0,0-.3.22c-.26-.57-.52-1.11-.81-1.68.51.15.77.67,1.32.87,1,.41.5.28.8,1.27a3.06,3.06,0,0,0,.51.71c.18.26-.06.68.08,1,.44.9.93.32.85-.41.72.35.26,1.66,1,1.84,1.15.3,1.35.38,2.36-.28C461.47,350.45,460.69,351.94,460.24,352.36Z"
                                style="fill: rgb(235, 235, 235); transform-origin: 457.234px 351.016px;"
                                id="elmmfvyucn6d" class="animable"></path>
                            <path
                                d="M393.75,307.1c-.64.58-2,.2-2.76.22-.36,0-.63.56-1.19.46-.26,0-.32.22-.55.26s-.36-.36-.82,0c-.27-.28-2-.1-1.34-.82s1.78.4,2.37.06c.28-.16.58.3.82.1.45-.4.51-.45,1.05-.4C392.26,307.06,392.82,306.75,393.75,307.1Z"
                                style="fill: rgb(235, 235, 235); transform-origin: 390.345px 307.486px;"
                                id="eltnz4uywrxc" class="animable"></path>
                            <path
                                d="M106.05,178.51a4.43,4.43,0,0,0-.51-.06c.37.37.26.79.24,1.27.49-.46.93-.86,1.64-.68-.43.6.22.5.22,1,0,.28-1,.6-1.31.62-1,.12-2-.46-3-.46.12-.08.22-.2.35-.28l-1.84-.37c.08-.16.06-.38.14-.54-.52-.16-.54.3-.91.6a2,2,0,0,1-1.19.51c-.86.14-1.19.76-2.07.82-1.28.11-2.57.19-3.84.31-1,.06-1.31-.53-1.19-1.68-1.81-.08-4,.29-4.66-2,1.13-.25,2.58-.87,3.73-.73a16.83,16.83,0,0,0,2.2.3c.33,0,1.86-.28.91-.52A14,14,0,0,0,91,176c-1,0-1.9,0-2.85,0-.72,0-.88-.32-1.45-.86,1-.43,1.88-.83,2.81-1.26l-2.69.09a4.19,4.19,0,0,1,.2-.49H85.79c-.14-.85.69-1.29,1.19-1.75-.2,0-.38-.25-.56-.29a12,12,0,0,1,3.79-2.05c.73-.27,1-.53,1.65-.17.89.53.25,1.19-.36,1.7.39,0,.75-.06,1.13-.1s.47-.79.77-.87c.46-.12,1.79.83,2.26,1.07-.18.22-.35.46-.53.71.69,0,.73.06,1.09-.59.14-.24,1,.14,1.31.22l-1.19-1.25C97,170,98.64,170,99,171c.22.69.46,1.37.7,2.06s.49.24,1,0c-.28-.75-.54-1.49-.81-2.24-.12-.32-.24-.67-.34-1s.44-.46.14-1c.26.12,1.13.77,1.29.51.37-.55.79.14,1.27.42,1.13.63,1.46,2.48,2,3.71.2.53-.24,1.13-.08,1.49s1.41.89,1.76,1.09a4.46,4.46,0,0,0,2.76,1c.06.55.16,2.14-.63.93,0,.16-.2.28-.24.44-.54-.46-1.11-.74-1.27.31A1.87,1.87,0,0,1,106.05,178.51Z"
                                style="fill: rgb(235, 235, 235); transform-origin: 97.252px 175.037px;"
                                id="elhi6ys6sdvb8" class="animable"></path>
                            <path
                                d="M376.36,293.72c-.7-.68-.5-.66,0-1.53.41-.67,1-.67,1.72-.91s.86-.83,1.23-1.39c.54-.83.68-.83,1.61-1.07.73-.18.28-.63.79-1.21.28-.32,1.15-1.7,1.55-1.76s1.31.89,1.56,1.21.42.73.7.79.61,0,.75.45l-1.31.36c.18.26.36.5.52.74-.32.09-1.47.07-1.49.63a2.8,2.8,0,0,0,.08.81c.1.42.36.6.6,1.29.06.18-.2.52-.12.68s.59.53.79.73c.85.77.42.91-.48.71-.45-.1-.81.8-.77,1.31.06,1.09.08,1.09-.71,1.77-.58.51-.78.53-.78,1.31s0,1.66-.06,2.51c-.41,0-.43-.31-.31-.69l-1.75.87c-.06-.29-.1-.91-.39-1s-.64.06-.82,0c-1.07-.67-1.19-.43-2.3.2-.06-.32-.1-.67-.16-1-.37.16-1.8.75-1.86,0s0-2.08-.64-2.64c-.11.38-.05.2-.45.4.12-.56-.08-.26-.16-.58a.37.37,0,0,1,0-.14c-.06-.21-.12-.39-.18-.57s.24-.3.2-.46-.44-.53-.4-.83c.06-.5.12-1,.18-1.49.28-.18.54-.35.82-.51C374.41,293.6,375.72,293.56,376.36,293.72Z"
                                style="fill: rgb(235, 235, 235); transform-origin: 379.794px 293.589px;"
                                id="elird4fm8ab4m" class="animable"></path>
                            <path
                                d="M386.29,297.33c.22-.66,1-1,.48-1.77a3.61,3.61,0,0,1,1.33-1.74c.57-.36,1.64.26,2.2.47s.41-.14.79-.1.81.34,1.09.16c.52-.35,1-1.25,1.59-1.27-.44,1.23-1.25,2.8-2.64,2-.59-.32-1.41-.06-2,0s-1.09-.52-1.49,0c-.85,1,.3,3.15,1.41,2,.45-.5.2,0,.65-.08s.4-.3.88-.32,1.23-.61,1,.4c-1-.67-1.43,1.63-2.58,1.21.32.36.59.34.85.83.14.3.3.58.46.88s-.32.51-.26.67c.26.61,1.09.22.79,1,0-.18-1.09.7-.93.7-.49.11-.89,0-.71-.66s-.54-.51-.74-1.11c-.06-.26.38-1.31-.19-1.25-1,.12-.32.46-.38,1s.06,1.15,0,1.61c0,.24-.26.45-.28.69s.28.68.18.82c-.16.35-1.17.21-1.35-.08a7.65,7.65,0,0,1,.32-2.13c.12-.93-.54-.41-.81-.79-.48-.71-.28-.81.11-1.59C386.25,298.22,386.11,297.86,386.29,297.33Z"
                                style="fill: rgb(235, 235, 235); transform-origin: 389.719px 298.378px;"
                                id="el8z0n4b3ofx5" class="animable"></path>
                            <path
                                d="M298.94,313.87c.3,1.46.77,2.59.2,4l-.64-.65a9.66,9.66,0,0,1-.49,4.3c-.77,2.5-1.51,5-2.26,7.54-.22.69-.42,1.4-.62,2.08,0,.08-1.66.57-1.88.69s-1.86-.43-1.9-.77a24.67,24.67,0,0,0-.5-2.7,4.18,4.18,0,0,1-.16-2.66c.26-.83,1.23-1.68,1.31-2.53a9.81,9.81,0,0,0-.63-2.82c-.1-.44.31-2.1.67-2.16a8.08,8.08,0,0,0,2.52-.93c.81-.4,1.11-1.09,1.72-1.79.78-.89,1.13-.89,1.17-2.14.08-1.57,1.13.06,1.45.5Z"
                                style="fill: rgb(235, 235, 235); transform-origin: 294.977px 322.254px;"
                                id="elf1ubsg79ozh" class="animable"></path>
                            <path
                                d="M111.43,159.83c.26-.16.81.21,1.07.31a2.24,2.24,0,0,1,.57,1c0,.33-.17.71-.14,1.07s.34.55.22,1c-.12-.12-.31-.16-.43-.28a.79.79,0,0,1-.32.73c.22.1.38.34.61.44-.59.57-1.5.26-2.18.22-.22,0-.35.39-.61.31-.44-.15-.89-.11-1-.67.21,0,.45-.12.65-.08a2.61,2.61,0,0,0-1-.26.86.86,0,0,1,.87-.37l-.2-.18a.62.62,0,0,0,.68-.42c-.84.1-1.71.18-2.56.36-.54.12-2.14.06-1-.72h-1.07a1.09,1.09,0,0,1,.83-.39c.52-.1,1.53.41,1.69-.16-.62.18-.74-.42-.16-.65-.24,0-.5,0-.76,0-.12-1.75,2.54.79,2.9,1-.28-.36-.54-.72-.81-1.09.19,0,.39-.06.59,0-.12-.48-1.86-.56-.81-1S110.67,160.32,111.43,159.83Z"
                                style="fill: rgb(235, 235, 235); transform-origin: 109.384px 162.216px;"
                                id="el4ce9gsuo7dq" class="animable"></path>
                            <path
                                d="M422.26,304.88l-1.13.12c.1.28.2.89.42,1.05s.77.36.91.64c.54,1.13.5,1.44,1.65,1.48-.32.74.37.66.85.76-.48.43.54,1.13.87,1.47-.45.15-1.27-.48-1.8-.58-.77-.14-1.51-.06-2.08-.67s-1.43-1.49-2.13-2.26c-.37-.38-1.88-.3-2.39-.36s-.62,1.35-1.06,1.66a4.07,4.07,0,0,1-2.63.22c-.56,0-.9-1.41-1.37-1.37l-2.68.28c.16-1.33.26-1.19,1.43-1.54-.32-.78-.64-1.59-1-2.4-.2-.46-1.25-.66-1.65-.82l-3-1.27c-.84-.37-.82-.33-1-1.33-.36.42-.7.84-1.05,1.27-.4-.67-.78-1.34-1.19-2a3.84,3.84,0,0,1,2.41-.1,1.49,1.49,0,0,0,.06-.59,4.16,4.16,0,0,1-2.3-.12c-.27-.14,0-.78-.27-.83l-1.19-.18a2.43,2.43,0,0,1,2.95-1.19c.73.18,1,0,1.07.85a7.46,7.46,0,0,0,.54,2.06c.24.64.55.68,1.15,1,.22.1,1-1.15,1.15-1.38a2.37,2.37,0,0,1,2.3-.9c1.45.54,2.89,1.11,4.34,1.65a16,16,0,0,1,2.84,1.09c.55.34,1.11.71,1.68,1s.3,1.07.7,1.51C420.3,303.77,422.4,303.26,422.26,304.88Z"
                                style="fill: rgb(235, 235, 235); transform-origin: 413.385px 303.256px;"
                                id="elar1dsfv5hgf" class="animable"></path>
                            <path
                                d="M414.13,231.39a1.36,1.36,0,0,0,.14-1c0-.4.62-.77.48-1.13s-.4-2.58.34-1.57a5.82,5.82,0,0,0,1.86,2c1.19.61,1.23.87,2.2-.12.2.59-.85,1.76.54,1.72a2.07,2.07,0,0,1-1.85.72,1.75,1.75,0,0,0-.95.53,6.55,6.55,0,0,0-.34,1.07c-.41.2-1.41-.67-1.74-1s-.76.14-1,.24-.64-.3-1.05-.16c-.12.81.71.5,1,.95s-.22.34-.4.28-.52.58-.69.52a5.31,5.31,0,0,1-.56-1.67c.14-.5.2-.5.64-.73.23-.12.21-.72.27-1Z"
                                style="fill: rgb(235, 235, 235); transform-origin: 415.9px 230.936px;"
                                id="elb3dvey0j1pc" class="animable"></path>
                            <path
                                d="M409.49,164.8c-.35-.43-1.07-1-.91-1.54.28-1,.73-1.27,1.53-1.93s2.75,1,3.65,1.41c-.12-.71-.42-1.15.23-1.43.36-.16.92.24,1.27.36,1.29.48,2.58,1,3.85,1.47a3.61,3.61,0,0,1-1.15,1c-.57.34-.79.12-1.39-.14.16.28.34.56.5.85l-1.43.3c-.3.06-.63-.89-.91-.79-1,.39-1.93,1.25-2.6.2-.38.89-.34.93-1.23,1C410.39,165.56,409.93,165.1,409.49,164.8Z"
                                style="fill: rgb(235, 235, 235); transform-origin: 413.834px 163.368px;"
                                id="elnj6ww6wau5" class="animable"></path>
                            <path
                                d="M103.85,152.71c-.39,0-.75,0-1.11,0,.38-1.13,1-.9,2.06-1.05s1.39.51,1.75,1.34c.48-.27,2.22-1,2,.44.7-.12.86-.22,1.43.24.32.26.28.24.14.67s.38.62.57.82c1.31,1.5-1.34,1.56-1.62,1s-.34-.92-1-1-1.41,0-1.83-.49-2.52,1.41-2.75-.5c.69-.45,2.2.42,2.1-.69l-1-.18c.13-.08.21-.24.35-.32-.59-.59-.81.38-1.46.32A5.74,5.74,0,0,1,103.85,152.71Z"
                                style="fill: rgb(235, 235, 235); transform-origin: 106.896px 154.067px;"
                                id="els7plbhuo14" class="animable"></path>
                            <path
                                d="M301,172.56c0-.76.88-.5,1.17-1.07.38-.76-.35-.8.46-1.39.2-.16,1.47-.84,1.41-1.13-.14-.68-.4-1,0-1.53.61-.65,1.17-1.29,1.76-1.94a35.09,35.09,0,0,1,2.66-2.52c.81-.7,2.4-1,3.37-1.39a8.49,8.49,0,0,1,3.55-.63c1.47-.42,2.87-.62,4.08-1.63.56-.44,3.63-1.13,3.47.48-.13,1.34-3.09,1.86-3.84,2.1-1.49.53-3,1-4.48,1.41-1.25.39-2,1.28-3.1,2a7.62,7.62,0,0,0-2,1.29c-.46.61-.93,1.27-1.43,1.86-.85,1-2.26,2.26-2.24,3.75.06,1.9,1.17,2.7,2.52,3.63-.87.71-2.88.1-3.85,0a4.24,4.24,0,0,1-2.83-1.47C301.06,173.63,300.94,173.61,301,172.56Z"
                                style="fill: rgb(235, 235, 235); transform-origin: 311.961px 167.494px;"
                                id="elzeanl99arep" class="animable"></path>
                            <path d="M228,206.49l-.14-.14a.7.7,0,0,0,.16-.1C228.07,206.37,228,206.43,228,206.49Z"
                                style="fill: rgb(235, 235, 235); transform-origin: 227.949px 206.37px;"
                                id="el29o509wj1f6" class="animable"></path>
                            <path
                                d="M455.2,355.73c.14.51.3,1,.44,1.52-.52.68-1.05,1.35-1.55,2s-.46.75-.08,1.54a.68.68,0,0,1-.59-.53c-1,.75-1.47.95-1.79,2.22a11.39,11.39,0,0,1-1.62,2.7c-.44.73-2,.21-2.4-.28s-2.42-.08-1.69-1.05S447.33,362,448,361c.22-.3,1-.47,1.29-.61a5.69,5.69,0,0,0,1.15-.9,8.49,8.49,0,0,0,1.15-1c.24-.41.2-1.07.46-1.44.39-.54.61-.2.77-.94s.38-.71,1-1a3,3,0,0,1,.4,1.43C454.55,356.28,454.88,356,455.2,355.73Z"
                                style="fill: rgb(235, 235, 235); transform-origin: 450.701px 360.326px;"
                                id="eln8tko0wc78l" class="animable"></path>
                            <path
                                d="M380.38,307.8c-.49-.22-1-.44-1.48-.64A6.21,6.21,0,0,1,377,307c-.14,0-.2.22-.39.2s-.52-.08-.8-.1a4.89,4.89,0,0,1-1-.35,6.48,6.48,0,0,0-1.19-.42c-.38,0-.83.26-1.21.18-.75-.14-1.47-.6-2.26-.75a2.57,2.57,0,0,1,.08-.38c-.67-.16-1.71-.22-.93-1.13.26-.32.28-.48.67-.4s.74.38.89-.08c.28.18,1.57.48,1.63.62.52.89,1.21.69,2.16.79.24,0,.56.2.66-.1.14-.49.35-.73.71-.26a2.2,2.2,0,0,0,1.88.28c-.19.83.68,1.31,1.31,1.17C380.54,306,379.79,307.06,380.38,307.8Z"
                                style="fill: rgb(235, 235, 235); transform-origin: 374.701px 305.785px;"
                                id="elmwzp4r7uqs" class="animable"></path>
                            <path
                                d="M144.82,175.53c.28.77,1.19.16,1.45-.45s3,1,3.51,1.28c-.22.74-1.23.76-1.83.94.48.08,1,0,.82.67.49-.24,1.19-.38,1.29-1.07.47.3,1.19.63,1.17,1.31a2.35,2.35,0,0,0-1.85.49,2.47,2.47,0,0,0,1.29.34c.83-.16.77-.18,1.07.68-.53-.1-1.07-.2-1.62-.32.06.37.13.73.19,1.09l-1.15.12c1.35.63,2.7,1.15,4.09,1.68a2.75,2.75,0,0,1,1.39,1c.59.64,1,.62,1.82.74-.18.28-.36.57-.55.83a6.63,6.63,0,0,1,2.08,0c.85.38.53.93.43,1.83-.43-.08-1.09-.36-1.38,0,.35.15.67.31,1,.47-1,.5-1.37,1-2.3.36a5.11,5.11,0,0,1,0,2.2,6,6,0,0,1-2.46-2c.51-.22,1.25-.3,1-1.07-.32.11-1,.53-1.31.47s-.85-.91-1.23-1.13-.81-.3-1.09.12c-.42.65.32.58.36,1.29-.36-.06-.7-.1-1.07-.14.12.36.22.71.35,1.07.52-.2.66-.47.86.14s.33,1,.49,1.55c.16-.8.56-.44,1.05-.22s.52.42.66,1.15.65.4.93.85a6.37,6.37,0,0,1,.2,1.67l-.62-.84c-.39.68.58.86.28,1.55-.14-.06-.32-.06-.47-.14.11.26.21.52.31.78-.26.11-1-.84-1.41-1.11-.77-.48-1.56-1-2.32-1.45.1.2.1.47.2.65l-1.35-.61c.26.45.5.91.76,1.35s.89.27,1.19.47c.47.32.93.66,1.41,1s.29.54.21,1.17c-1.27-.35-2.55-.67-3.82-1-.46-.12-.42-.69-.7-.77-.65-.18-1.29-.34-1.94-.5.08-.1.14-.22.22-.33a2.71,2.71,0,0,1-1.61-.6c.32-.18.66-.34,1-.52-.59-.33-1.25-.27-1.62-.81-.66-1-.64-1.64-1.65-1,0-.44-.24-.67-.65-.61,0,.19-.1.41-.08.61-.58-.14-1.21-.5-1.67-.06s-1.27.3-1.92.34c-.42,0-1.09-.78-.86-1.19s1.12-.68,1-1.33a8.12,8.12,0,0,0,2.93.22c.24-.08,1.65-.28,1.73-.5.19-.49-.8-1-1.05-1.17.79-.79,1.56-1.58,2.35-2.36.22-.22.56-.37.4-.67-.32-.6-.67-1.21-1-1.81-.5-.93-1.55-.69-2-1.52-.38-.64-.32-.58-1-.32l-1.45.55c0-1.21.22-1.05,1.27-1.36-.56-.46-1.81-2.09-2.5-1.35-.06-.32-.12-.64-.2-1s-.57,0-.77-.06c-.58-.28-.5-1.47-1.31-.7.65.18.73.5,1,1.13-1.53.36-2.46,0-4-.43l1.15,1.07c-.51.18-.65-.46-1.11-.52-.16,0-.29.48-.49.4l-.93-.36a10.65,10.65,0,0,0-3.1-.16,3.16,3.16,0,0,1-1.41-.39c-.57-.52.18-.8-.85-.7-.47,0-.73.48-1.29.16A4.27,4.27,0,0,1,123,175l3,.27c-1-1.05-1.88-.91-3.25-1.05a7.57,7.57,0,0,1-.32-1.7c-.08-.48.52-1.47.68-1.91a3.75,3.75,0,0,1,2.16-2.32,5.7,5.7,0,0,1,3.57-.45c-.08.39-.18.75-.28,1.11a13.43,13.43,0,0,0,2.9-1,4.28,4.28,0,0,1,1.42.06c.52,0,.4.75.7,1.13s.53.39.81.95c.38.79.28.81-.14,1.6s.2.64.58.26c.69-.69.63-.65,1.44-.16.22.14.88-.71,1.08-.89s1.15-.22,1.54-.26a4.1,4.1,0,0,1,2.62,1c.46.46,1.63,2.3,2.12,2.13.81-.3,2.28-.46,2.62.69C146,174.66,144.7,175.21,144.82,175.53Z"
                                style="fill: rgb(235, 235, 235); transform-origin: 140.493px 182.011px;"
                                id="elxpwve55l5y" class="animable"></path>
                            <path
                                d="M81.58,161.89c-.45-.54-.43-.89-.14-1.09a.87.87,0,0,1,.36-.18l.22-.06a.86.86,0,0,1,.24,0l.24,0c.61-.08,1.52-1.21,2-1.61a3.16,3.16,0,0,1,1.92-1.09c.32,0,.83-.23,1.13-.12s.82.44,1.23.08c-.22-.08-.26-.21-.41-.29l.35-.1a.83.83,0,0,1,.3,0v0c.48,0,.83.24,1.45.59-.56.2-1.77.8-.42,1.07a1.51,1.51,0,0,0-.51.06,1.19,1.19,0,0,0-.16.08.6.6,0,0,1,.33.32.72.72,0,0,1-.31.75,2.68,2.68,0,0,1-1,.68c-.82.22-1.77-.72-.8-1.35-.18-.16-.75-.22-.75.14,0,.73-.38.37-.81.63.33.1.53.44.25.74-.49.57-.71-.44-1-.32-.47.22.28.79,0,1.09s-.77.32-1.09.44c.1-.66-.38-1.12-.77-.78a.39.39,0,0,0-.06.23c0,.12,0,.25-.08.31s-.16.08-.34.06Z"
                                style="fill: rgb(235, 235, 235); transform-origin: 85.8503px 159.883px;"
                                id="elgeistt9f679" class="animable"></path>
                            <path
                                d="M361.82,154.93a15.39,15.39,0,0,1,1.81-2.64,2,2,0,0,1,2.48-.46c-.2.18-.42.36-.62.56.32,0,1.27-.28,1.47,0,.51.59.63.87,1.35.95.33,0,.93.91.65,1.13a2.37,2.37,0,0,1-1.23.6l-2.2.41c-.38.06-.83-.47-1.11-.39-.83.31-2.56,1.5-3.25.57C361.37,155.4,361.6,155.17,361.82,154.93Z"
                                style="fill: rgb(235, 235, 235); transform-origin: 365.101px 153.797px;"
                                id="elutw07fqeig" class="animable"></path>
                            <path d="M228.72,208.17a3.13,3.13,0,0,1-.31.56C228.19,208.31,228.46,208.09,228.72,208.17Z"
                                style="fill: rgb(235, 235, 235); transform-origin: 228.524px 208.442px;"
                                id="elwg2n9hashbi" class="animable"></path>
                            <path
                                d="M403,248.27c-.36-1.23,0-1,.47-2,.32.24,2.38-1.09,2.29.44,0,.22-.5.66-.62.85s-.44-.39-.61-.31C403.94,247.53,403.82,248.8,403,248.27Z"
                                style="fill: rgb(235, 235, 235); transform-origin: 404.308px 247.18px;"
                                id="elqp14gt2t97" class="animable"></path>
                            <path
                                d="M127.21,191.28c.1-.24-.16-.66-.12-.92s.12-.77.22-1.13c.24-.91.22-1.62,1-2s1.07.93.14,1.09a1.41,1.41,0,0,0,.26.52c.46-.62.61-.44,1,0,.28.31.83.18,1.17.43s2.76,1.45,1.88,2.36a2,2,0,0,1,2,.52l-1.09.71c-.72-.22-2.74-.45-2.58-1.64-.72.29-.64.87-1.39,1.15-.44.17-.85.87-1.33,1.23s-.45-1.31-.63-1.43-1.63.32-1.87.34C126.16,192.23,127.09,191.55,127.21,191.28Z"
                                style="fill: rgb(235, 235, 235); transform-origin: 130.315px 190.406px;"
                                id="eldv4htw1vwra" class="animable"></path>
                            <path
                                d="M116.19,149.59c.21.08.43.1.63.16a2.38,2.38,0,0,1-.36-.35c.18-.06.34-.24.52-.28-.48-.34-1.07.26-1.63,0a2,2,0,0,1,.28-.16,6.58,6.58,0,0,1-1.51-.28c.34-.14.68-.26,1-.38-.68-.71,1.52-.79,2-.89-.36-.33-1.09-.24-1.55-.41.58-1.51,2.5-.14,3-1.08-.52-.31-1.17-.11-1.75-.31.48-.7,1.51-.34,2.16-.16,1.07.26,1.49,1,2.26,1.86a1.67,1.67,0,0,0,1.79.64c.65-.18.26.57.41.81a1.18,1.18,0,0,0,1.13.54c-.19-.3-.35-.58-.51-.88.77-.67,2,.26,1.11,1,1.39.16,1.09.66.52,1.77.51-.2,1.72-.87,1.8.22,0-.2.24-.36.3-.58a4.11,4.11,0,0,1,1.05,1.15c-.64.2-2.22,1-2.6.7.28.65-.34.87-.75,1.21a2,2,0,0,1-.26-1.29c-1.49.43,1,2.56-1.29,1.37.4.59.22.89,0,1.5l-1.59-1.56.78,1.62c-.56-.47-.86-.77-1.59-.75a.81.81,0,0,1,.56.59c-1.09,0-2.68.16-3.39-1l1.62-.18c-.79-.19-2.1.06-2.56-.65l.84-.06a4.74,4.74,0,0,1-1.53-.58c1.61-.67,3.17-.53,4.84-.85a6.05,6.05,0,0,1-2.68-.12c.58-.08,1.19-.14,1.77-.23-.5-.46-1.69-.08-2.42-.38.12.73-.3.18-.42.24-.38.19-.52.57-1,.33,0-.1,0-.23.06-.33-.4-.16-.6.1-.93.35s-.42-.39-.78-.33-.53-.46-.12-.52,1,0,1.33-.55c-1,.39-2.58.39-2.77-1.08Z"
                                style="fill: rgb(235, 235, 235); transform-origin: 121.4px 150.363px;"
                                id="el0ha98k8hhzyn" class="animable"></path>
                            <path
                                d="M394.22,283c-.06-.36-.13-.73-.19-1.09a1,1,0,0,1,.75.77c.34-.14.44.32.38.64-.08.1-.18.18-.26.28.1,0,.16.13.34.13a1.19,1.19,0,0,1,0,.46c.57,0,.09,1.49,0,1.9a.87.87,0,0,1-.2-.15c0,.31,0,.59,0,.89-.32-.5-.1-1-.44-1.49-.73.52-.34.93-.2,1.55.16.83-.81,1.19-.51.25h-.12c-.2.7-1.31-.13-1.47-.57-.26-.69.64-2-.73-1.82a5.65,5.65,0,0,0,0,.59c-.3-.2-.3-.08-.34-.48-.18.22-.22.12-.34.44-.25-1.33-.77.5-1.05.73-.63-.87.44-1.56,1.05-1.74.32-.1.1-.93.7-.89s.59.67.29,1c.52-.2.78-1.15,1.33-.72,0-.51.1-.81.5-.55C393.87,282.87,393.79,282.93,394.22,283Z"
                                style="fill: rgb(235, 235, 235); transform-origin: 392.581px 284.804px;"
                                id="el74h75z0stk8" class="animable"></path>
                            <path
                                d="M428.59,331.26a30.8,30.8,0,0,1,.79,5.37c-.06,1.79-.95,3.89-1.37,5.65-.39,1.45-2,2.54-2.26,4-.33,1.72-.15,4.44-2.14,4.5a2.34,2.34,0,0,0-2.2,1c-.4.38-1.45.77-1.86.28-.82-1-.74-1.39-1.73-.54s-1,.62-2.14.44c-1.74-.28-3.19-.83-3.61-2.86-.14-.59-.61-2-1.27-2s-.53-1.78-.61-2.5c-.54,1.15-.5,1.81-1.69,1.55.72-1.19,1.65-2.32,1.19-3.73a19.79,19.79,0,0,1-2.6,3.49,21.05,21.05,0,0,1-1.34-2.12c-.64-1.15-.7-1.37-1.85-1.79a21.71,21.71,0,0,0-5.35-1.13c-.54-.06-1.47.8-1.95,1.09s-1.54-.17-2.22.16-1.82.56-2.12,1.23c-.1.2-.38,1.05-.57,1.05-.6,0-1.21,0-1.81.06-.79,0-1.59.14-2.38.22-1.11.12-1.35.42-2.2,1.27-.61.58-1.53.32-2.3.32s-1.45-.86-2.08-1.33.79-1.43.87-1.65c.24-.63-.34-2.44-.44-3.15a18.16,18.16,0,0,0-1.58-5.14c-.32-.69-.78-1.21-.54-2a2.36,2.36,0,0,0,0-2.22c-.67-1.67-.24-3.09.42-4.74.18.4.34.83.51,1.25a3.82,3.82,0,0,1,1.69-2.26,5.85,5.85,0,0,1,2.24-1.21l4.07-.93c1-.26,1-1.13,1.44-2.2.78-2.07,2.92-3.24,4.52-4.6.28-.24,1.49-1.61,1.83-1.41,1,.51,2,1,2.95,1.56a8.66,8.66,0,0,1,1.19-3.27c.72-1.07,1.75-.47,2.88-.28,0-.49-.08-1-.1-1.44a22.64,22.64,0,0,1,3.07.22,3.07,3.07,0,0,1,2.52,1.15,5,5,0,0,0-1.35,2.16c-.29,1.19-.71,1.54.28,2.1s2.08,1.25,3.13,1.88c.58.36,1.07,1.33,1.63,1.53,1.57.59,2.22-3.07,2.18-4.22a10.48,10.48,0,0,1,0-3c.24-.85.32-2.56,1.27-2.81a22.36,22.36,0,0,1,1.63,5.37,1.12,1.12,0,0,1,1.72.85c.08,1.39,0,1.79.87,2.8.62.71.36,1.78.36,2.73,0,.36,2.28,1.39,2.62,1.57.83.48.81,1.05,1.11,2,.16.54.34,1.09.5,1.65s.73-.36.87-.3c1.15.38.14,1.29.89,1.95Z"
                                style="fill: rgb(235, 235, 235); transform-origin: 404.137px 331.275px;"
                                id="eldny5k40zc9v" class="animable"></path>
                            <path
                                d="M400.93,245.69a2.72,2.72,0,0,0,2.3-1.41c.53-.75,2.1-.55,2.93-.65.44,0,.14.57.87.24.5-.22.08-.56.36-.94s.85-.83.87-1.23c0-.77.26-.69.92-.95-.14.14-.68,1-.22,1a3.77,3.77,0,0,0,1.35-.51,3.48,3.48,0,0,0,1.56-2c.2-.62.4-1.23.58-1.85.08-.22-.48-.45-.34-.91s1.05-2.54,1.45-1c-.18-.7.2-1.23.87-.87-.08.41-.28.79-.1,1.15s.64,1,.62,1.36c0,.58.14,1.17-.32,1.47s-.28.66-.28,1.21c-.77-.38-.67.5-.65,1,0,.84-.26.87-.4,1.55-.08.36.1,1.61,0,1.65-.54.29-.65.81-1.27,1,.06-.28.12-.58.2-.88a6.55,6.55,0,0,0-1,1.33c-.12-.26-.26-.53-.4-.79-.57.81-1.78,1.25-2.38.28-.53.37-.39.79.06,1.17-.75-.14-1.09.81-1.47,1.33-.69-.62-1.28-1.17-.33-2-.62-.06-1.55-.39-2,.14-.08.12-.79.26-1,.38-.41.26-.65.49-1-.08-.32,1.17-1,.26-1.68.85.39.56.65,0,.93.5.1.16.55.77.43,1a6,6,0,0,1-1.54,2.6c-1,.73-.93-1.17-.56-1.75.18-.28.56-1.17-.14-1.27s0,.85-.77.76c0-.34-.08-.66-.12-1C399.9,247.16,401.32,246.72,400.93,245.69Z"
                                style="fill: rgb(235, 235, 235); transform-origin: 407.115px 242.744px;"
                                id="elejuayeqbtp" class="animable"></path>
                            <path
                                d="M79.34,222.37a15.81,15.81,0,0,1-5.29-4.12c1-.3,1.27.15,2.2.45,1.19.4,1.39.12,2,1.33.22.4.28.67.66.79s.77.18.93.44C80.53,222.39,80.67,222.85,79.34,222.37Z"
                                style="fill: rgb(235, 235, 235); transform-origin: 77.2018px 220.355px;"
                                id="eln7z0hqe7ixj" class="animable"></path>
                            <path
                                d="M214.8,192.11l-1.09.16c-.36,0-.3.3-.61.47a2.42,2.42,0,0,1-1.79.12,4.88,4.88,0,0,1-1.07-.24c-.16-.13-.34-.69-.57-.65l-2.34.3c-.3-.82.89-.6,1.15-1.31a1.75,1.75,0,0,1-.32,0l.06-.3c-.4.06-.56-.2-.28-.53-.55,0-2.16.37-2.3-.38.89,0,1.88-.38,2.86-.36,0-.08,0-.18,0-.27a1.07,1.07,0,0,1-1-.08c.34-.18.68-.34,1-.5-.42-.1-1.23-.48-1.63-.34-.83.34-1,.5-1.88.16.31-.16.23-.26.59-.22a2.55,2.55,0,0,1,0-.39c.22.14.63.35.79.08s-.73-.28-.27-.84,1.66.88,1.54-.37c-.43-.06-.77,0-.89-.44,1,0,.91.14,1.63.77.14.12.71.24.73.5a.43.43,0,0,1-.54.44,13.48,13.48,0,0,0,.74,1.21,7.14,7.14,0,0,1,.51-1.17c.26-.44.8.07.38-.94.54-.1.85.52,1.21.88-.16-.46,0-1,.54-1s.75.46,1.11,1c-.06-.36-.1-.72-.16-1.09,1,.45,1.23-.06,2.22,0-.58-1.52,2.74-.15,2.06,1,.56-.22.93.14,1.41.41.24.16-.12.8.34,1.13-.38.38-.68.95-1.25.62,0,.79-.4,1.33-1.11,1.13C216.15,191,215.22,191.85,214.8,192.11Z"
                                style="fill: rgb(235, 235, 235); transform-origin: 211.96px 189.542px;"
                                id="el0sid8am1eihq" class="animable"></path>
                            <path d="M378.84,254.66a10.24,10.24,0,0,1-3.07,1.29,10.65,10.65,0,1,1,3.07-1.29Z"
                                style="fill: rgb(199, 199, 199); transform-origin: 373.23px 245.607px;"
                                id="elc48014de3sm" class="animable"></path>
                            <path d="M376.48,244.4a3.24,3.24,0,1,1-3.23-3.24A3.23,3.23,0,0,1,376.48,244.4Z"
                                style="fill: rgb(255, 255, 255); transform-origin: 373.24px 244.4px;" id="elrphuzhuyq8"
                                class="animable"></path>
                            <path
                                d="M378.84,253.33v1.33a10.24,10.24,0,0,1-3.07,1.29,10.58,10.58,0,0,1-8.11-1.29v-1.33a5.59,5.59,0,1,1,11.18,0Z"
                                style="fill: rgb(255, 255, 255); transform-origin: 373.25px 251.998px;"
                                id="elbsdh2jlblyv" class="animable"></path>
                            <path
                                d="M377.93,229.57c-.23-2.35-1.84-4.68-4.68-4.68s-4.45,2.33-4.68,4.68c-.36,3.61,2.08,6.89,4.68,9.87C375.85,236.46,378.29,233.18,377.93,229.57Zm-4.68,2.6a2.57,2.57,0,1,1,2.57-2.57A2.57,2.57,0,0,1,373.25,232.17Z"
                                style="fill: rgb(117, 193, 255); transform-origin: 373.25px 232.165px;"
                                id="elklerxzvktx8" class="animable"></path>
                            <path d="M450,195.81a10.65,10.65,0,0,1-11.18,0,10.63,10.63,0,1,1,11.18,0Z"
                                style="fill: rgb(199, 199, 199); transform-origin: 444.41px 186.767px;"
                                id="el90tbhp74rw" class="animable"></path>
                            <path d="M447.59,185.54a3.24,3.24,0,1,1-3.23-3.23A3.23,3.23,0,0,1,447.59,185.54Z"
                                style="fill: rgb(255, 255, 255); transform-origin: 444.35px 185.55px;"
                                id="el1qojspojtdw" class="animable"></path>
                            <path d="M450,194.47v1.34a10.65,10.65,0,0,1-11.18,0v-1.33a5.59,5.59,0,1,1,11.18,0Z"
                                style="fill: rgb(255, 255, 255); transform-origin: 444.41px 193.142px;"
                                id="elwb1766dv5n" class="animable"></path>
                            <path
                                d="M449,170.71c-.23-2.34-1.84-4.68-4.68-4.68s-4.45,2.34-4.68,4.68c-.36,3.61,2.08,6.89,4.68,9.88C447,177.6,449.4,174.32,449,170.71Zm-4.68,2.6a2.57,2.57,0,1,1,2.57-2.57A2.57,2.57,0,0,1,444.36,173.31Z"
                                style="fill: rgb(117, 193, 255); transform-origin: 444.324px 173.31px;"
                                id="elmkukf6qlac" class="animable"></path>
                            <path d="M312,209.16a10.64,10.64,0,1,1,4.74-11.57A10.6,10.6,0,0,1,312,209.16Z"
                                style="fill: rgb(199, 199, 199); transform-origin: 306.406px 200.111px;"
                                id="elj7xz702009f" class="animable"></path>
                            <circle cx="306.44" cy="198.9" r="3.24"
                                style="fill: rgb(255, 255, 255); transform-origin: 306.44px 198.9px;" id="elcdtbqwt9sap"
                                class="animable"></circle>
                            <path d="M312,207.82v1.34a10.68,10.68,0,0,1-11.19,0v-1.34a5.6,5.6,0,0,1,11.19,0Z"
                                style="fill: rgb(255, 255, 255); transform-origin: 306.405px 206.6px;"
                                id="elxlc5z00w37n" class="animable"></path>
                            <path
                                d="M311.13,184.06c-.23-2.34-1.85-4.67-4.68-4.67s-4.45,2.33-4.69,4.67c-.35,3.62,2.09,6.89,4.69,9.88C309.05,191,311.49,187.68,311.13,184.06Zm-4.68,2.6A2.57,2.57,0,1,1,309,184.1,2.56,2.56,0,0,1,306.45,186.66Z"
                                style="fill: rgb(117, 193, 255); transform-origin: 306.446px 186.665px;"
                                id="elz28hiahtiwn" class="animable"></path>
                            <path d="M275.64,332.29a10.35,10.35,0,0,1-3.07,1.29,10.65,10.65,0,1,1,3.07-1.29Z"
                                style="fill: rgb(199, 199, 199); transform-origin: 270.03px 323.237px;"
                                id="elqm3smfzx4r" class="animable"></path>
                            <path d="M273.28,322a3.24,3.24,0,1,1-3.23-3.23A3.24,3.24,0,0,1,273.28,322Z"
                                style="fill: rgb(255, 255, 255); transform-origin: 270.04px 322.01px;"
                                id="elsqq26wqycfj" class="animable"></path>
                            <path
                                d="M275.64,331v1.33a10.35,10.35,0,0,1-3.07,1.29,10.62,10.62,0,0,1-8.12-1.29V331a5.6,5.6,0,0,1,11.19,0Z"
                                style="fill: rgb(255, 255, 255); transform-origin: 270.045px 329.78px;"
                                id="eloh1a0blwn3k" class="animable"></path>
                            <path
                                d="M274.73,307.2c-.23-2.34-1.85-4.68-4.68-4.68s-4.45,2.34-4.69,4.68c-.35,3.61,2.09,6.89,4.69,9.88C272.65,314.09,275.09,310.81,274.73,307.2Zm-4.68,2.6a2.57,2.57,0,1,1,2.56-2.57A2.57,2.57,0,0,1,270.05,309.8Z"
                                style="fill: rgb(117, 193, 255); transform-origin: 270.046px 309.8px;"
                                id="elnxl8d7cv4sj" class="animable"></path>
                            <path d="M167.13,301.78a10.64,10.64,0,1,1,4.74-11.57A10.6,10.6,0,0,1,167.13,301.78Z"
                                style="fill: rgb(199, 199, 199); transform-origin: 161.536px 292.731px;"
                                id="el6bu92mgwo2a" class="animable"></path>
                            <path d="M164.77,291.52a3.24,3.24,0,1,1-3.23-3.24A3.23,3.23,0,0,1,164.77,291.52Z"
                                style="fill: rgb(255, 255, 255); transform-origin: 161.53px 291.52px;"
                                id="el6wqoj8e5gw7" class="animable"></path>
                            <path d="M167.13,300.44v1.34a10.66,10.66,0,0,1-11.19,0v-1.33a5.6,5.6,0,0,1,11.19,0Z"
                                style="fill: rgb(255, 255, 255); transform-origin: 161.535px 299.226px;"
                                id="elban8v5go2rc" class="animable"></path>
                            <path
                                d="M166.22,276.68c-.23-2.34-1.85-4.67-4.68-4.67s-4.45,2.33-4.69,4.67c-.35,3.62,2.09,6.89,4.69,9.88C164.14,283.57,166.58,280.3,166.22,276.68Zm-4.68,2.6a2.57,2.57,0,1,1,2.56-2.56A2.57,2.57,0,0,1,161.54,279.28Z"
                                style="fill: rgb(117, 193, 255); transform-origin: 161.536px 279.285px;"
                                id="el15mzqvqoqvg" class="animable"></path>
                            <path
                                d="M112.26,257.75a10.72,10.72,0,0,1-3.07,1.28,10.65,10.65,0,0,1-12.86-7.8,10.64,10.64,0,1,1,15.93,6.52Z"
                                style="fill: rgb(199, 199, 199); transform-origin: 106.665px 248.696px;"
                                id="elkxqwxmm3to" class="animable"></path>
                            <path d="M109.9,247.49a3.24,3.24,0,1,1-3.24-3.24A3.24,3.24,0,0,1,109.9,247.49Z"
                                style="fill: rgb(255, 255, 255); transform-origin: 106.66px 247.49px;" id="eloq8ebhk5re"
                                class="animable"></path>
                            <path
                                d="M112.26,256.41v1.34a10.72,10.72,0,0,1-3.07,1.28,10.52,10.52,0,0,1-8.12-1.29v-1.33a5.6,5.6,0,0,1,11.19,0Z"
                                style="fill: rgb(255, 255, 255); transform-origin: 106.665px 255.194px;"
                                id="elr7s7z243v1o" class="animable"></path>
                            <path
                                d="M111.35,232.65c-.24-2.34-1.85-4.67-4.69-4.67s-4.44,2.33-4.68,4.67c-.36,3.62,2.08,6.89,4.68,9.88C109.27,239.54,111.71,236.27,111.35,232.65Zm-4.69,2.6a2.57,2.57,0,1,1,2.57-2.56A2.56,2.56,0,0,1,106.66,235.25Z"
                                style="fill: rgb(117, 193, 255); transform-origin: 106.665px 235.255px;"
                                id="elxxovpdh4l08" class="animable"></path>
                            <path d="M203.36,169.05a10.66,10.66,0,0,1-11.19,0,10.63,10.63,0,1,1,11.19,0Z"
                                style="fill: rgb(199, 199, 199); transform-origin: 197.765px 160.009px;"
                                id="elkh5sgdll31j" class="animable"></path>
                            <path d="M201,158.79a3.24,3.24,0,1,1-3.23-3.24A3.23,3.23,0,0,1,201,158.79Z"
                                style="fill: rgb(255, 255, 255); transform-origin: 197.76px 158.79px;"
                                id="elf8480awc53q" class="animable"></path>
                            <path d="M203.36,167.71v1.34a10.66,10.66,0,0,1-11.19,0v-1.33a5.6,5.6,0,0,1,11.19,0Z"
                                style="fill: rgb(255, 255, 255); transform-origin: 197.765px 166.496px;"
                                id="el3ulx6ssalui" class="animable"></path>
                            <path
                                d="M202.45,144c-.23-2.34-1.85-4.67-4.68-4.67s-4.45,2.33-4.68,4.67c-.36,3.62,2.08,6.89,4.68,9.88C200.37,150.84,202.81,147.57,202.45,144Zm-4.68,2.6a2.57,2.57,0,1,1,2.57-2.56A2.57,2.57,0,0,1,197.77,146.55Z"
                                style="fill: rgb(117, 193, 255); transform-origin: 197.77px 146.605px;"
                                id="elzju6ooi5j8q" class="animable"></path>
                            <polygon points="141.37 290.7 141.73 289.25 141.81 289.27 141.37 290.7"
                                style="fill: rgb(55, 71, 79); transform-origin: 141.59px 289.975px;" id="eldv1dqvzwihh"
                                class="animable"></polygon>
                            <polygon points="142.6 286.27 143.59 283.33 143.92 283.46 142.82 286.35 142.6 286.27"
                                style="fill: rgb(55, 71, 79); transform-origin: 143.26px 284.84px;" id="eli4xunzmiqhn"
                                class="animable"></polygon>
                            <polygon points="144.67 280.42 145.86 277.55 146.38 277.79 145.12 280.61 144.67 280.42"
                                style="fill: rgb(55, 71, 79); transform-origin: 145.525px 279.08px;" id="ellaaflki6zl"
                                class="animable"></polygon>
                            <polygon points="147.14 274.72 148.5 271.93 149.15 272.27 147.72 275.01 147.14 274.72"
                                style="fill: rgb(55, 71, 79); transform-origin: 148.145px 273.47px;" id="elwrzqmls0req"
                                class="animable"></polygon>
                            <polygon points="149.96 269.18 151.51 266.49 152.24 266.94 150.66 269.58 149.96 269.18"
                                style="fill: rgb(55, 71, 79); transform-origin: 151.1px 268.035px;" id="elpt9kowy3eb"
                                class="animable"></polygon>
                            <polygon points="153.17 263.85 154.92 261.27 155.66 261.8 153.91 264.34 153.17 263.85"
                                style="fill: rgb(55, 71, 79); transform-origin: 154.415px 262.805px;" id="elx31gippn49m"
                                class="animable"></polygon>
                            <polygon points="156.76 258.76 158.69 256.32 159.43 256.94 157.5 259.33 156.76 258.76"
                                style="fill: rgb(55, 71, 79); transform-origin: 158.095px 257.825px;" id="eloi0rnyf9wc"
                                class="animable"></polygon>
                            <polygon points="160.72 253.96 162.86 251.69 163.57 252.38 161.46 254.62 160.72 253.96"
                                style="fill: rgb(55, 71, 79); transform-origin: 162.145px 253.155px;" id="elrla5ly4ilgg"
                                class="animable"></polygon>
                            <polygon points="165.11 249.52 167.45 247.46 168.05 248.18 165.76 250.23 165.11 249.52"
                                style="fill: rgb(55, 71, 79); transform-origin: 166.58px 248.845px;" id="eloparguhfidi"
                                class="animable"></polygon>
                            <polygon points="169.89 245.51 172.41 243.69 172.92 244.41 170.44 246.24 169.89 245.51"
                                style="fill: rgb(55, 71, 79); transform-origin: 171.405px 244.965px;" id="eld6ky5h6i0bo"
                                class="animable"></polygon>
                            <polygon points="175.03 241.99 177.74 240.44 178.13 241.15 175.49 242.72 175.03 241.99"
                                style="fill: rgb(55, 71, 79); transform-origin: 176.58px 241.58px;" id="elljx32ehf54a"
                                class="animable"></polygon>
                            <polygon points="180.54 239.05 183.4 237.81 183.65 238.41 180.85 239.71 180.54 239.05"
                                style="fill: rgb(55, 71, 79); transform-origin: 182.095px 238.76px;" id="elmgsiazqo5qg"
                                class="animable"></polygon>
                            <polygon points="186.32 236.74 189.29 235.82 189.43 236.29 186.51 237.27 186.32 236.74"
                                style="fill: rgb(55, 71, 79); transform-origin: 187.875px 236.545px;" id="eloxrl1822gaf"
                                class="animable"></polygon>
                            <polygon points="192.32 235.08 195.37 234.51 195.41 234.74 192.4 235.43 192.32 235.08"
                                style="fill: rgb(55, 71, 79); transform-origin: 193.865px 234.97px;" id="elw5qeulr7fa"
                                class="animable"></polygon>
                            <polygon points="198.51 234.09 200 233.96 198.52 234.18 198.51 234.09"
                                style="fill: rgb(55, 71, 79); transform-origin: 199.255px 234.07px;" id="elb2aomfg66ph"
                                class="animable"></polygon>
                            <polygon points="259.91 213.21 260.67 211.93 260.75 211.97 259.91 213.21"
                                style="fill: rgb(55, 71, 79); transform-origin: 260.33px 212.57px;" id="el3jo1r7pewni"
                                class="animable"></polygon>
                            <polygon points="262.28 209.48 263.99 207.11 264.27 207.33 262.47 209.62 262.28 209.48"
                                style="fill: rgb(55, 71, 79); transform-origin: 263.275px 208.365px;" id="elzuw8o5pfdwn"
                                class="animable"></polygon>
                            <polygon points="265.78 204.8 267.65 202.56 268.08 202.93 266.15 205.11 265.78 204.8"
                                style="fill: rgb(55, 71, 79); transform-origin: 266.93px 203.835px;" id="elt0y9gur5ou"
                                class="animable"></polygon>
                            <polygon points="269.61 200.37 271.62 198.25 272.14 198.76 270.08 200.82 269.61 200.37"
                                style="fill: rgb(55, 71, 79); transform-origin: 270.875px 199.535px;" id="elzqj8iwrzhzl"
                                class="animable"></polygon>
                            <polygon points="273.71 196.19 275.86 194.2 276.43 194.84 274.26 196.78 273.71 196.19"
                                style="fill: rgb(55, 71, 79); transform-origin: 275.07px 195.49px;" id="elqx5pcwdxqwi"
                                class="animable"></polygon>
                            <polygon points="278.08 192.29 280.36 190.44 280.92 191.16 278.64 192.97 278.08 192.29"
                                style="fill: rgb(55, 71, 79); transform-origin: 279.5px 191.705px;" id="el6jlh2cutjnn"
                                class="animable"></polygon>
                            <polygon points="282.7 188.67 285.1 186.97 285.63 187.77 283.25 189.43 282.7 188.67"
                                style="fill: rgb(55, 71, 79); transform-origin: 284.165px 188.2px;" id="el893a00d5kao"
                                class="animable"></polygon>
                            <polygon points="287.54 185.35 290.05 183.82 290.55 184.68 288.07 186.19 287.54 185.35"
                                style="fill: rgb(55, 71, 79); transform-origin: 289.045px 185.005px;" id="elaun9ad91ulj"
                                class="animable"></polygon>
                            <polygon points="292.61 182.39 295.22 181.05 295.64 181.88 293.07 183.24 292.61 182.39"
                                style="fill: rgb(55, 71, 79); transform-origin: 294.125px 182.145px;" id="el2512ho2gxcb"
                                class="animable"></polygon>
                            <polygon points="297.87 179.79 300.57 178.63 300.91 179.44 298.25 180.62 297.87 179.79"
                                style="fill: rgb(55, 71, 79); transform-origin: 299.39px 179.625px;" id="elhta10t60yo"
                                class="animable"></polygon>
                            <polygon points="303.3 177.56 306.07 176.6 306.33 177.36 303.6 178.36 303.3 177.56"
                                style="fill: rgb(55, 71, 79); transform-origin: 304.815px 177.48px;" id="el5h7rjl5azzf"
                                class="animable"></polygon>
                            <polygon points="308.88 175.75 311.72 175 311.88 175.63 309.09 176.45 308.88 175.75"
                                style="fill: rgb(55, 71, 79); transform-origin: 310.38px 175.725px;" id="el0t97u5g75swh"
                                class="animable"></polygon>
                            <polygon points="314.57 174.34 317.45 173.8 317.54 174.28 314.7 174.9 314.57 174.34"
                                style="fill: rgb(55, 71, 79); transform-origin: 316.055px 174.35px;" id="elq56thfmb4ja"
                                class="animable"></polygon>
                            <polygon points="320.35 173.37 323.25 173.05 323.28 173.28 320.4 173.73 320.35 173.37"
                                style="fill: rgb(55, 71, 79); transform-origin: 321.815px 173.39px;" id="elhsgyjorjjrs"
                                class="animable"></polygon>
                            <polygon points="326.24 172.82 327.74 172.76 326.25 172.91 326.24 172.82"
                                style="fill: rgb(55, 71, 79); transform-origin: 326.99px 172.835px;" id="el76ffqrsx8dj"
                                class="animable"></polygon>
                            <polygon points="356.08 257.47 355.71 256.02 355.74 256.01 356.08 257.47"
                                style="fill: rgb(55, 71, 79); transform-origin: 355.895px 256.74px;" id="elmhzcxs5qhf"
                                class="animable"></polygon>
                            <polygon points="354.88 253.18 353.94 250.38 354.05 250.34 354.95 253.16 354.88 253.18"
                                style="fill: rgb(55, 71, 79); transform-origin: 354.445px 251.76px;" id="eljgliba2zzk"
                                class="animable"></polygon>
                            <polygon points="352.91 247.6 351.8 244.86 352 244.78 353.07 247.54 352.91 247.6"
                                style="fill: rgb(55, 71, 79); transform-origin: 352.435px 246.19px;" id="elhikblgkyw4d"
                                class="animable"></polygon>
                            <polygon points="350.62 242.15 349.37 239.47 349.65 239.33 350.87 242.04 350.62 242.15"
                                style="fill: rgb(55, 71, 79); transform-origin: 350.12px 240.74px;" id="el80qdt7nr1wv"
                                class="animable"></polygon>
                            <polygon points="348.05 236.82 346.67 234.21 347.04 234.01 348.38 236.66 348.05 236.82"
                                style="fill: rgb(55, 71, 79); transform-origin: 347.525px 235.415px;" id="ellfputdc6ni"
                                class="animable"></polygon>
                            <polygon points="345.23 231.63 343.72 229.08 344.16 228.82 345.63 231.4 345.23 231.63"
                                style="fill: rgb(55, 71, 79); transform-origin: 344.675px 230.225px;" id="elnc4ln4bpknd"
                                class="animable"></polygon>
                            <polygon points="342.17 226.57 340.55 224.1 341.02 223.79 342.62 226.29 342.17 226.57"
                                style="fill: rgb(55, 71, 79); transform-origin: 341.585px 225.18px;" id="elm6628arcwsf"
                                class="animable"></polygon>
                            <polygon points="338.88 221.66 337.15 219.26 337.65 218.9 339.36 221.32 338.88 221.66"
                                style="fill: rgb(55, 71, 79); transform-origin: 338.255px 220.28px;" id="elm0hw56u81b"
                                class="animable"></polygon>
                            <polygon points="335.37 216.91 333.54 214.59 334.06 214.17 335.88 216.52 335.37 216.91"
                                style="fill: rgb(55, 71, 79); transform-origin: 334.71px 215.54px;" id="el6bvhxbrpnv7"
                                class="animable"></polygon>
                            <polygon points="331.65 212.32 329.71 210.09 330.25 209.62 332.18 211.87 331.65 212.32"
                                style="fill: rgb(55, 71, 79); transform-origin: 330.945px 210.97px;" id="eldja3fog9xf"
                                class="animable"></polygon>
                            <polygon points="327.72 207.91 325.68 205.77 326.24 205.23 328.27 207.4 327.72 207.91"
                                style="fill: rgb(55, 71, 79); transform-origin: 326.975px 206.57px;" id="el3f448577ube"
                                class="animable"></polygon>
                            <polygon points="323.6 203.69 321.46 201.65 322.04 201.04 324.16 203.11 323.6 203.69"
                                style="fill: rgb(55, 71, 79); transform-origin: 322.81px 202.365px;" id="elznvbz2em54d"
                                class="animable"></polygon>
                            <polygon points="319.29 199.65 317.07 197.7 317.64 197.05 319.86 199.02 319.29 199.65"
                                style="fill: rgb(55, 71, 79); transform-origin: 318.465px 198.35px;" id="els07mk4ov67"
                                class="animable"></polygon>
                            <polygon points="314.82 195.8 312.52 193.94 313.06 193.26 315.37 195.13 314.82 195.8"
                                style="fill: rgb(55, 71, 79); transform-origin: 313.945px 194.53px;" id="el21gumq10cch"
                                class="animable"></polygon>
                            <polygon points="310.18 192.14 307.8 190.39 308.32 189.67 310.71 191.44 310.18 192.14"
                                style="fill: rgb(55, 71, 79); transform-origin: 309.255px 190.905px;" id="eljrpol35hhok"
                                class="animable"></polygon>
                            <polygon points="305.38 188.69 302.93 187.05 303.43 186.28 305.89 187.95 305.38 188.69"
                                style="fill: rgb(55, 71, 79); transform-origin: 304.41px 187.485px;" id="elm0y3wbjvgd"
                                class="animable"></polygon>
                            <polygon points="300.44 185.45 297.93 183.91 298.41 183.11 300.94 184.67 300.44 185.45"
                                style="fill: rgb(55, 71, 79); transform-origin: 299.435px 184.28px;" id="eltxc1ivjc7jd"
                                class="animable"></polygon>
                            <polygon points="295.38 182.42 292.81 180.98 293.26 180.15 295.85 181.6 295.38 182.42"
                                style="fill: rgb(55, 71, 79); transform-origin: 294.33px 181.285px;" id="ell07yd1lwah"
                                class="animable"></polygon>
                            <polygon points="290.2 179.59 287.57 178.26 288 177.39 290.64 178.74 290.2 179.59"
                                style="fill: rgb(55, 71, 79); transform-origin: 289.105px 178.49px;" id="eljdgugr0fna"
                                class="animable"></polygon>
                            <polygon points="284.91 176.97 282.23 175.74 282.63 174.84 285.33 176.09 284.91 176.97"
                                style="fill: rgb(55, 71, 79); transform-origin: 283.78px 175.905px;" id="el1z793azkcha"
                                class="animable"></polygon>
                            <polygon points="279.52 174.55 276.8 173.41 277.17 172.49 279.91 173.64 279.52 174.55"
                                style="fill: rgb(55, 71, 79); transform-origin: 278.355px 173.52px;" id="eli0f10l2gct"
                                class="animable"></polygon>
                            <polygon points="274.05 172.32 271.29 171.27 271.63 170.35 274.41 171.4 274.05 172.32"
                                style="fill: rgb(55, 71, 79); transform-origin: 272.85px 171.335px;" id="elv0q97wgn67g"
                                class="animable"></polygon>
                            <polygon points="268.51 170.28 265.71 169.33 266.01 168.41 268.82 169.36 268.51 170.28"
                                style="fill: rgb(55, 71, 79); transform-origin: 267.265px 169.345px;" id="elt01smr1412"
                                class="animable"></polygon>
                            <polygon points="262.9 168.43 260.07 167.57 260.34 166.66 263.18 167.52 262.9 168.43"
                                style="fill: rgb(55, 71, 79); transform-origin: 261.625px 167.545px;" id="elhzat9glv0js"
                                class="animable"></polygon>
                            <polygon points="257.23 166.76 254.38 165.99 254.61 165.1 257.48 165.86 257.23 166.76"
                                style="fill: rgb(55, 71, 79); transform-origin: 255.93px 165.93px;" id="el93353nfb5tw"
                                class="animable"></polygon>
                            <polygon points="251.51 165.27 248.64 164.59 248.84 163.71 251.73 164.38 251.51 165.27"
                                style="fill: rgb(55, 71, 79); transform-origin: 250.185px 164.49px;" id="elswlp9nu8pcm"
                                class="animable"></polygon>
                            <polygon points="245.75 163.96 242.85 163.36 243.02 162.49 245.93 163.08 245.75 163.96"
                                style="fill: rgb(55, 71, 79); transform-origin: 244.39px 163.225px;" id="el35x51j0ohwh"
                                class="animable"></polygon>
                            <polygon points="239.95 162.81 237.04 162.3 237.18 161.44 240.1 161.94 239.95 162.81"
                                style="fill: rgb(55, 71, 79); transform-origin: 238.57px 162.125px;" id="elo96cfu2rzel"
                                class="animable"></polygon>
                            <polygon points="234.12 161.82 231.19 161.39 231.31 160.54 234.25 160.97 234.12 161.82"
                                style="fill: rgb(55, 71, 79); transform-origin: 232.72px 161.18px;" id="el36f8sgppuje"
                                class="animable"></polygon>
                            <polygon points="228.26 160.99 225.32 160.62 225.42 159.81 228.37 160.16 228.26 160.99"
                                style="fill: rgb(55, 71, 79); transform-origin: 226.845px 160.4px;" id="elwie8h1onxqj"
                                class="animable"></polygon>
                            <polygon points="222.39 160.28 219.45 159.99 219.51 159.24 222.47 159.51 222.39 160.28"
                                style="fill: rgb(55, 71, 79); transform-origin: 220.96px 159.76px;" id="eld3wciszh4dp"
                                class="animable"></polygon>
                            <polygon points="216.5 159.73 213.55 159.5 213.6 158.8 216.56 159 216.5 159.73"
                                style="fill: rgb(55, 71, 79); transform-origin: 215.055px 159.265px;" id="elpiht0266fqo"
                                class="animable"></polygon>
                            <polygon points="210.6 159.3 207.64 159.14 207.67 158.5 210.64 158.63 210.6 159.3"
                                style="fill: rgb(55, 71, 79); transform-origin: 209.14px 158.9px;" id="elb7qa2owli76"
                                class="animable"></polygon>
                            <polygon points="204.69 159.01 201.73 158.91 201.74 158.32 204.71 158.39 204.69 159.01"
                                style="fill: rgb(55, 71, 79); transform-origin: 203.22px 158.665px;" id="elo51tdno3ozt"
                                class="animable"></polygon>
                            <polygon points="198.77 158.84 195.81 158.8 195.81 158.27 198.78 158.28 198.77 158.84"
                                style="fill: rgb(55, 71, 79); transform-origin: 197.295px 158.555px;" id="elqmh05ij88x"
                                class="animable"></polygon>
                            <polygon points="192.85 158.79 189.88 158.81 189.88 158.34 192.84 158.29 192.85 158.79"
                                style="fill: rgb(55, 71, 79); transform-origin: 191.365px 158.55px;" id="elacamxcwfoed"
                                class="animable"></polygon>
                            <polygon points="186.92 158.84 183.96 158.91 183.95 158.54 186.91 158.43 186.92 158.84"
                                style="fill: rgb(55, 71, 79); transform-origin: 185.435px 158.67px;" id="elxo9xu8p4rji"
                                class="animable"></polygon>
                            <polygon points="181.01 159 178.05 159.12 178.03 158.85 180.99 158.68 181.01 159"
                                style="fill: rgb(55, 71, 79); transform-origin: 179.52px 158.9px;" id="el2h9d7ts0382"
                                class="animable"></polygon>
                            <polygon points="175.09 159.26 172.13 159.43 172.12 159.25 175.07 159.04 175.09 159.26"
                                style="fill: rgb(55, 71, 79); transform-origin: 173.605px 159.235px;" id="elkjawqtx0oz"
                                class="animable"></polygon>
                            <polygon points="169.17 159.62 166.22 159.84 166.21 159.76 169.16 159.5 169.17 159.62"
                                style="fill: rgb(55, 71, 79); transform-origin: 167.69px 159.67px;" id="elifubk2i7ws"
                                class="animable"></polygon>
                            <polygon points="163.04 160.1 161.54 160.23 163.03 160.07 163.04 160.1"
                                style="fill: rgb(55, 71, 79); transform-origin: 162.29px 160.15px;" id="el8qanuox24n"
                                class="animable"></polygon>
                            <polygon points="286.24 271.19 287.27 270.11 287.33 270.18 286.24 271.19"
                                style="fill: rgb(55, 71, 79); transform-origin: 286.785px 270.65px;" id="elh94lvjohow"
                                class="animable"></polygon>
                            <polygon points="289.38 268.12 291.6 266.25 291.83 266.55 289.54 268.31 289.38 268.12"
                                style="fill: rgb(55, 71, 79); transform-origin: 290.605px 267.28px;" id="elpm09ppkepa"
                                class="animable"></polygon>
                            <polygon points="293.9 264.47 296.28 262.81 296.61 263.31 294.19 264.89 293.9 264.47"
                                style="fill: rgb(55, 71, 79); transform-origin: 295.255px 263.85px;" id="elxu9jtikf6ho"
                                class="animable"></polygon>
                            <polygon points="298.74 261.25 301.25 259.79 301.62 260.46 299.08 261.84 298.74 261.25"
                                style="fill: rgb(55, 71, 79); transform-origin: 300.18px 260.815px;" id="elblexrhic3c5"
                                class="animable"></polygon>
                            <polygon points="303.83 258.43 306.48 257.21 306.82 258.01 304.2 259.19 303.83 258.43"
                                style="fill: rgb(55, 71, 79); transform-origin: 305.325px 258.2px;" id="eldwkkuljb44k"
                                class="animable"></polygon>
                            <polygon points="309.17 256.1 311.92 255.12 312.21 256 309.49 256.95 309.17 256.1"
                                style="fill: rgb(55, 71, 79); transform-origin: 310.69px 256.035px;" id="elbeoarruolim"
                                class="animable"></polygon>
                            <polygon points="314.7 254.25 317.53 253.51 317.75 254.47 314.96 255.17 314.7 254.25"
                                style="fill: rgb(55, 71, 79); transform-origin: 316.225px 254.34px;" id="el559u1cefcqb"
                                class="animable"></polygon>
                            <polygon points="320.39 252.92 323.27 252.48 323.4 253.44 320.56 253.9 320.39 252.92"
                                style="fill: rgb(55, 71, 79); transform-origin: 321.895px 253.19px;" id="el9v6rffcuioi"
                                class="animable"></polygon>
                            <polygon points="326.18 252.18 329.09 252.02 329.12 252.92 326.26 253.11 326.18 252.18"
                                style="fill: rgb(55, 71, 79); transform-origin: 327.65px 252.565px;" id="el7vxii0y7916"
                                class="animable"></polygon>
                            <polygon points="332.01 252 334.92 252.12 334.87 252.96 332 252.87 332.01 252"
                                style="fill: rgb(55, 71, 79); transform-origin: 333.46px 252.48px;" id="elibgn5h1uuv"
                                class="animable"></polygon>
                            <polygon points="337.82 252.4 340.71 252.81 340.6 253.49 337.74 253.16 337.82 252.4"
                                style="fill: rgb(55, 71, 79); transform-origin: 339.225px 252.945px;" id="ele7ujrafu58f"
                                class="animable"></polygon>
                            <polygon points="343.57 253.36 346.39 254.04 346.27 254.54 343.45 253.95 343.57 253.36"
                                style="fill: rgb(55, 71, 79); transform-origin: 344.92px 253.95px;" id="el6myg1oc3xzt"
                                class="animable"></polygon>
                            <polygon points="349.18 254.85 351.93 255.79 351.85 256.03 349.07 255.23 349.18 254.85"
                                style="fill: rgb(55, 71, 79); transform-origin: 350.5px 255.44px;" id="elm2yp6tg69j"
                                class="animable"></polygon>
                            <polygon points="354.7 256.87 356.08 257.47 354.66 256.96 354.7 256.87"
                                style="fill: rgb(55, 71, 79); transform-origin: 355.37px 257.17px;" id="elabd615vu7fk"
                                class="animable"></polygon>
                            <polygon points="161.54 160.23 163.03 160.09 163.03 160.16 161.54 160.23"
                                style="fill: rgb(55, 71, 79); transform-origin: 162.285px 160.16px;" id="elpzu5favsua"
                                class="animable"></polygon>
                            <polygon points="166.04 159.97 169.05 160.01 169.04 160.31 166.04 160.17 166.04 159.97"
                                style="fill: rgb(55, 71, 79); transform-origin: 167.545px 160.14px;" id="ele42zzvzwud8"
                                class="animable"></polygon>
                            <polygon points="172.07 160.18 175.07 160.47 175 160.97 172.03 160.59 172.07 160.18"
                                style="fill: rgb(55, 71, 79); transform-origin: 173.55px 160.575px;" id="elhl1knwsm2ru"
                                class="animable"></polygon>
                            <polygon points="178.06 160.89 181.04 161.42 180.91 162.05 177.97 161.46 178.06 160.89"
                                style="fill: rgb(55, 71, 79); transform-origin: 179.505px 161.47px;" id="elxn19lhpgkl"
                                class="animable"></polygon>
                            <polygon points="183.99 162.06 186.92 162.81 186.71 163.54 183.82 162.74 183.99 162.06"
                                style="fill: rgb(55, 71, 79); transform-origin: 185.37px 162.8px;" id="elvn31q09j3w"
                                class="animable"></polygon>
                            <polygon points="189.82 163.66 192.69 164.63 192.39 165.44 189.56 164.45 189.82 163.66"
                                style="fill: rgb(55, 71, 79); transform-origin: 191.125px 164.55px;" id="elx6rst4r7mvs"
                                class="animable"></polygon>
                            <polygon points="195.51 165.7 198.3 166.88 197.94 167.7 195.18 166.52 195.51 165.7"
                                style="fill: rgb(55, 71, 79); transform-origin: 196.74px 166.7px;" id="eldgrlnturqge"
                                class="animable"></polygon>
                            <polygon points="201.05 168.15 203.75 169.53 203.3 170.36 200.64 168.98 201.05 168.15"
                                style="fill: rgb(55, 71, 79); transform-origin: 202.195px 169.255px;" id="elguclgzq1mj4"
                                class="animable"></polygon>
                            <polygon points="206.4 170.99 208.99 172.54 208.47 173.38 205.91 171.82 206.4 170.99"
                                style="fill: rgb(55, 71, 79); transform-origin: 207.45px 172.185px;" id="elkhuxw8autqk"
                                class="animable"></polygon>
                            <polygon points="211.53 174.2 214 175.95 213.43 176.73 210.97 175.02 211.53 174.2"
                                style="fill: rgb(55, 71, 79); transform-origin: 212.485px 175.465px;" id="el2vl0ef4udx4"
                                class="animable"></polygon>
                            <polygon points="216.41 177.78 218.76 179.69 218.16 180.41 215.82 178.53 216.41 177.78"
                                style="fill: rgb(55, 71, 79); transform-origin: 217.29px 179.095px;" id="elnsntfw0cu2"
                                class="animable"></polygon>
                            <polygon points="221.04 181.68 223.25 183.74 222.64 184.38 220.44 182.36 221.04 181.68"
                                style="fill: rgb(55, 71, 79); transform-origin: 221.845px 183.03px;" id="elm8sz6qbxz0m"
                                class="animable"></polygon>
                            <polygon points="225.4 185.87 227.48 188.06 226.86 188.63 224.78 186.47 225.4 185.87"
                                style="fill: rgb(55, 71, 79); transform-origin: 226.13px 187.25px;" id="elqec6n9yr21a"
                                class="animable"></polygon>
                            <polygon points="229.47 190.34 231.4 192.66 230.86 193.11 228.89 190.84 229.47 190.34"
                                style="fill: rgb(55, 71, 79); transform-origin: 230.145px 191.725px;" id="elp0ty35brtg"
                                class="animable"></polygon>
                            <polygon points="233.26 195.04 235.05 197.48 234.59 197.81 232.75 195.44 233.26 195.04"
                                style="fill: rgb(55, 71, 79); transform-origin: 233.9px 196.425px;" id="elhsst60rqind"
                                class="animable"></polygon>
                            <polygon points="236.78 199.96 238.42 202.48 238.07 202.71 236.36 200.25 236.78 199.96"
                                style="fill: rgb(55, 71, 79); transform-origin: 237.39px 201.335px;" id="elef49qr5t08s"
                                class="animable"></polygon>
                            <polygon points="239.99 205.06 241.5 207.67 241.33 207.77 239.73 205.22 239.99 205.06"
                                style="fill: rgb(55, 71, 79); transform-origin: 240.615px 206.415px;" id="eli9shmrvta8r"
                                class="animable"></polygon>
                            <polygon points="242.98 210.4 243.67 211.73 242.92 210.43 242.98 210.4"
                                style="fill: rgb(55, 71, 79); transform-origin: 243.295px 211.065px;" id="eljlxlkf38d2o"
                                class="animable"></polygon>
                        </g>
                        <g id="freepik--character-5--inject-154" class="animable"
                            style="transform-origin: 380.53px 300.84px;">
                            <rect x="349.2" y="258.02" width="85.64" height="85.64"
                                style="fill: rgb(255, 255, 255); transform-origin: 392.02px 300.84px;"
                                id="elcaskimhz2ze" class="animable"></rect>
                            <path d="M435.33,344.16H348.7V257.52h86.63Zm-85.63-1h84.63V258.52H349.7Z"
                                style="fill: rgb(235, 235, 235); transform-origin: 392.015px 300.84px;"
                                id="elk8zi1ms2nqb" class="animable"></path>
                            <path d="M358.6,263.11a2.52,2.52,0,1,1-2.52-2.53A2.52,2.52,0,0,1,358.6,263.11Z"
                                style="fill: rgb(166, 166, 166); transform-origin: 356.08px 263.1px;" id="el4y5s7w12mwc"
                                class="animable"></path>
                            <path d="M368.89,263.11a2.52,2.52,0,1,1-2.52-2.53A2.52,2.52,0,0,1,368.89,263.11Z"
                                style="fill: rgb(235, 235, 235); transform-origin: 366.37px 263.1px;" id="el5o073qy5hsj"
                                class="animable"></path>
                            <path d="M379.18,263.11a2.52,2.52,0,1,1-2.52-2.53A2.52,2.52,0,0,1,379.18,263.11Z"
                                style="fill: rgb(117, 193, 255); transform-origin: 376.66px 263.1px;" id="el8rn70zznfvm"
                                class="animable"></path>
                            <rect x="349.2" y="267.54" width="85.64" height="1"
                                style="fill: rgb(235, 235, 235); transform-origin: 392.02px 268.04px;"
                                id="elwexpbxy7a4c" class="animable"></rect>
                            <path
                                d="M405.21,313.79c-3.75,5.35-24.61,22.86-43.19,23.89-6.31.34-25.75-25.33-29.72-35.34-2.85-7.18,12.5-12,17-11.25,5.6.93,16.16,23.15,20.1,23.26,6.33.16,18.13-4.35,31.24-7.12C407.36,305.8,408.11,309.67,405.21,313.79Z"
                                style="fill: rgb(221, 106, 87); transform-origin: 369.382px 314.348px;"
                                id="eljkmbmmwk2ji" class="animable"></path>
                            <path
                                d="M405.24,315.69c-4.61,6.93-20,18.3-20,18.3L383,329.24l-7.22-15.69S390,309,399.36,306.91a20.64,20.64,0,0,1,3.35-.5C408.68,306,409.22,309.74,405.24,315.69Z"
                                style="fill: rgb(69, 90, 100); transform-origin: 391.788px 320.185px;"
                                id="el5s1550x0pfs" class="animable"></path>
                            <path d="M387.64,310.9a7.82,7.82,0,0,1,0,4,7.54,7.54,0,0,1,0-4Z"
                                style="fill: rgb(255, 255, 255); transform-origin: 387.635px 312.9px;" id="elmk8jgzra46"
                                class="animable"></path>
                            <path d="M385.72,319a7.82,7.82,0,0,1-4,0,6.55,6.55,0,0,1,2-.26A6.87,6.87,0,0,1,385.72,319Z"
                                style="fill: rgb(255, 255, 255); transform-origin: 383.72px 318.999px;"
                                id="elg6jwqa1u0rs" class="animable"></path>
                            <path d="M406,307.8a7.86,7.86,0,0,1-4,0,6.94,6.94,0,0,1,2-.26A7.28,7.28,0,0,1,406,307.8Z"
                                style="fill: rgb(255, 255, 255); transform-origin: 404px 307.799px;" id="eljb61m7tj87h"
                                class="animable"></path>
                            <path d="M394.93,315.93a7.78,7.78,0,0,1,2.83,2.83,7.78,7.78,0,0,1-2.83-2.83Z"
                                style="fill: rgb(255, 255, 255); transform-origin: 396.345px 317.345px;"
                                id="elv0uik3jwovs" class="animable"></path>
                            <path
                                d="M387.23,325.48a7.24,7.24,0,0,1,1.6,1.23,6.68,6.68,0,0,1,1.23,1.6,7.18,7.18,0,0,1-1.59-1.23A7,7,0,0,1,387.23,325.48Z"
                                style="fill: rgb(255, 255, 255); transform-origin: 388.645px 326.895px;"
                                id="elg7zu2meo5og" class="animable"></path>
                            <path
                                d="M405.24,315.69c-4.61,6.93-20,18.3-20,18.3L383,329.24c5.73-6.74,14.58-17,19.67-22.83C408.68,306,409.22,309.74,405.24,315.69Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 395.396px 320.185px;" id="elbaus405lj0r"
                                class="animable"></path>
                            <path
                                d="M388,330.79c-1.2-2.89-6.53-14.52-7.86-17-.09-.17-.22-.16-.14,0a169.76,169.76,0,0,0,7.89,17C387.91,330.9,388,330.86,388,330.79Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 383.988px 322.262px;" id="elgmu9lxh8225"
                                class="animable"></path>
                            <path
                                d="M332.81,303.45c-1.17-2.13-5.67-12.4-6.28-15.54s-1.72-12.29.64-13,2.89,2,2.89,2,.15-3.94,2.58-4.45,3.14,3.66,3.14,3.66.45-4,2.91-4.36,2.47,4,2.47,4,.24-3.71,2.38-3.12c2.58.7,1.38,7.49,2.31,10.91.21.77,5.42,15.4,5.42,15.4Z"
                                style="fill: rgb(221, 106, 87); transform-origin: 338.5px 287.594px;" id="elte3t20wvmb"
                                class="animable"></path>
                            <path
                                d="M341.15,275.3c-.87,5-.39,7.33,1.51,11.95,0,.09-.09.17-.14.08-2.27-4.36-3.29-7.2-1.61-12.08C341,275,341.2,275.07,341.15,275.3Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 341.368px 281.231px;" id="el89bi4ggiqyl"
                                class="animable"></path>
                            <path
                                d="M335.86,275.67c-.46,5.26,0,7.8,1.67,12.78,0,.07-.09.12-.12.05-2-4.75-3-7.61-1.82-12.82C335.64,275.45,335.88,275.42,335.86,275.67Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 336.307px 282.014px;" id="elma0s12o8bah"
                                class="animable"></path>
                            <path
                                d="M330.15,277.1c-.07,5.13.36,7.93,2.56,12.57a.09.09,0,0,1-.16.09A17,17,0,0,1,330,277.11C330.05,276.79,330.16,276.77,330.15,277.1Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 331.207px 283.334px;" id="el8yr6wgptajp"
                                class="animable"></path>
                            <path
                                d="M354.8,300.94a62.85,62.85,0,0,0-.25-9.17c-.5-2.81-6.24-12.6-8.42-11.49-2.82,1.45-.63,7.75.85,10.7,0,0-6.53,3.34-5.93,8.2S354.8,300.94,354.8,300.94Z"
                                style="fill: rgb(221, 106, 87); transform-origin: 347.938px 291.053px;"
                                id="elvj9pi9mzc1b" class="animable"></path>
                            <path
                                d="M345.48,280.93c-1.62,3.18.57,6.92,1.79,9.89a.3.3,0,0,1-.24.42c-2.65,1.58-5.92,4.58-6.14,7.82,0,.09-.15.1-.15,0-.23-3.51,2.74-6.72,5.75-8.26-1.3-3-3.33-6.88-1-9.88C345.47,280.9,345.49,280.91,345.48,280.93Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 344.012px 290.02px;" id="elk012jv3s6u"
                                class="animable"></path>
                            <path
                                d="M391.19,322.73a41.35,41.35,0,0,0-.82,4.33.88.88,0,0,1,0-.16c-.06-.82-.11-1.65-.24-2.45a0,0,0,0,0-.08,0,12.84,12.84,0,0,0,.06,2.48c0,.39.08.78.14,1.16-.08.66-.15,1.32-.2,2-.09,1.23-.42,6.52-.41,7.43,0,.2.23.22.27,0,.2-.94.76-6.38.91-7.61a65.88,65.88,0,0,0,.48-7.16C391.28,322.67,391.2,322.68,391.19,322.73Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 390.47px 330.184px;" id="elsyj6mljb1ei"
                                class="animable"></path>
                            <path
                                d="M434.4,343.12v-4.54c-5.17-11.38-13.26-25.39-24.46-34.06-2.64-2-8.24-1.17-11.79.9-1.27.73-5.54,7.63-6.48,13.95-.47,3.21-1.63,13.85-2.41,23.75Z"
                                style="fill: rgb(69, 90, 100); transform-origin: 411.83px 323.248px;" id="eljblfj2lhn3q"
                                class="animable"></path>
                            <path
                                d="M402.5,321.82a7.18,7.18,0,0,1,0,2,6.77,6.77,0,0,1-.54,1.94,6.76,6.76,0,0,1,0-2A6.84,6.84,0,0,1,402.5,321.82Z"
                                style="fill: rgb(255, 255, 255); transform-origin: 402.228px 323.79px;"
                                id="els6hqtmvdx2" class="animable"></path>
                            <path
                                d="M423.15,333.61a7.18,7.18,0,0,1,0,2,7.66,7.66,0,0,1-.54,1.95,7.18,7.18,0,0,1,0-2A6.84,6.84,0,0,1,423.15,333.61Z"
                                style="fill: rgb(255, 255, 255); transform-origin: 422.88px 335.585px;"
                                id="elux93le31a0s" class="animable"></path>
                            <path
                                d="M414.28,328.14a7.12,7.12,0,0,1-2,0,7.55,7.55,0,0,1-1.95-.54,7.18,7.18,0,0,1,2,0A7.48,7.48,0,0,1,414.28,328.14Z"
                                style="fill: rgb(255, 255, 255); transform-origin: 412.305px 327.87px;"
                                id="elae98r7dwopj" class="animable"></path>
                            <path
                                d="M406.73,307.54a7.18,7.18,0,0,1-2,0,7.48,7.48,0,0,1-1.94-.54,7.12,7.12,0,0,1,2,0A7.55,7.55,0,0,1,406.73,307.54Z"
                                style="fill: rgb(255, 255, 255); transform-origin: 404.76px 307.27px;" id="elitd39o9nlc"
                                class="animable"></path>
                            <path
                                d="M413.26,311.09a7.17,7.17,0,0,1,1.41,1.45,6.83,6.83,0,0,1,1,1.75,7.12,7.12,0,0,1-1.41-1.44A7.2,7.2,0,0,1,413.26,311.09Z"
                                style="fill: rgb(255, 255, 255); transform-origin: 414.465px 312.69px;"
                                id="elzeriswx6kh8" class="animable"></path>
                            <path
                                d="M430.75,336.12a7.12,7.12,0,0,1,1.41,1.44,6.89,6.89,0,0,1,1,1.76,7.71,7.71,0,0,1-2.4-3.2Z"
                                style="fill: rgb(255, 255, 255); transform-origin: 431.955px 337.72px;"
                                id="elwz1619dr3yf" class="animable"></path>
                            <path d="M397.41,333.78a8,8,0,0,1,2.41,3.21,8,8,0,0,1-2.41-3.21Z"
                                style="fill: rgb(255, 255, 255); transform-origin: 398.615px 335.385px;"
                                id="elpbzcss4nt0a" class="animable"></path>
                            <path
                                d="M394.65,314a7.12,7.12,0,0,1,1.41,1.44,7.2,7.2,0,0,1,1,1.76,7.17,7.17,0,0,1-1.41-1.45A7,7,0,0,1,394.65,314Z"
                                style="fill: rgb(255, 255, 255); transform-origin: 395.855px 315.6px;"
                                id="eld9eou9w0lwh" class="animable"></path>
                            <path
                                d="M390.81,329a7.12,7.12,0,0,1,1.44-1.41,6.89,6.89,0,0,1,1.76-1,7.17,7.17,0,0,1-1.45,1.41A7.33,7.33,0,0,1,390.81,329Z"
                                style="fill: rgb(255, 255, 255); transform-origin: 392.41px 327.795px;"
                                id="ele7cwz9olhwu" class="animable"></path>
                            <path
                                d="M419.81,324a7.17,7.17,0,0,1,1.45-1.41,6.83,6.83,0,0,1,1.75-1,7.12,7.12,0,0,1-1.44,1.41A7.2,7.2,0,0,1,419.81,324Z"
                                style="fill: rgb(255, 255, 255); transform-origin: 421.41px 322.795px;"
                                id="el3xmznuxpfso" class="animable"></path>
                            <path
                                d="M411.16,340a7.17,7.17,0,0,1,1.45-1.41,7,7,0,0,1,1.75-1,7.12,7.12,0,0,1-1.44,1.41A7.2,7.2,0,0,1,411.16,340Z"
                                style="fill: rgb(255, 255, 255); transform-origin: 412.76px 338.795px;"
                                id="elwqa68vidmq" class="animable"></path>
                            <path
                                d="M400.59,315.93c3.25-.15,7.15-6.29,8.14-10.65.07-.3-1.11-2.91-2.38-6.15-.77-2-1.58-4.19-2.17-6.26-.12-.42-1.34.77-1.34.77l-2.5,1.41-8.25,4.68a34,34,0,0,1,3.52,7.6,5.73,5.73,0,0,1,.16.87.44.44,0,0,0,0,.15C396,310,397.45,316.07,400.59,315.93Z"
                                style="fill: rgb(221, 106, 87); transform-origin: 400.411px 304.356px;"
                                id="elmi7ps0seyo" class="animable"></path>
                            <path
                                d="M395.77,308.2a.44.44,0,0,0,0,.15,8.61,8.61,0,0,0,1.35-.31c8.7-2.69,6.62-14.12,6.62-14.12l-3.42,1.13-8.25,4.68a34,34,0,0,1,3.52,7.6A5.73,5.73,0,0,1,395.77,308.2Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 398.014px 301.135px;" id="elezmy8abwhxw"
                                class="animable"></path>
                            <path
                                d="M401.45,278.24c2.6,4.28,3.56,18.32,1,22.15-3.69,5.55-11.42,8-16.56,3.14-5-4.67-5.92-23-2.92-26.63C387.4,271.51,397.61,271.92,401.45,278.24Z"
                                style="fill: rgb(221, 106, 87); transform-origin: 392.605px 289.645px;"
                                id="eln1rz6vu73ad" class="animable"></path>
                            <path d="M402.77,300.17h0"
                                style="fill: none; stroke: rgb(246, 168, 159); stroke-linecap: round; stroke-linejoin: round; stroke-width: 0px; transform-origin: 402.77px 300.17px;"
                                id="el002guvgcs69oi" class="animable"></path>
                            <path
                                d="M390.89,290.21s.08,0,.08.08c0,.94.24,2,1.12,2.27,0,0,0,.06,0,.06C391,292.55,390.77,291.11,390.89,290.21Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 391.476px 291.415px;" id="elaiyab2qd5ke"
                                class="animable"></path>
                            <path d="M391.66,289.16c1.51-.23,1.85,2.81.45,3S390.39,289.35,391.66,289.16Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 391.93px 290.658px;" id="elb5f8ry7d2i5"
                                class="animable"></path>
                            <path
                                d="M385.1,290.73s-.07.06-.06.09c.13.94.13,2-.69,2.45,0,0,0,.06,0,.05C385.39,293.06,385.38,291.6,385.1,290.73Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 384.806px 292.026px;" id="elmm6gfrvy8xk"
                                class="animable"></path>
                            <path d="M384.15,289.84c-1.53.06-1.31,3.11.11,3.06S385.43,289.8,384.15,289.84Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 384.159px 291.37px;" id="elrsvxghap47n"
                                class="animable"></path>
                            <path
                                d="M392.7,287.64c-.42-.06-.81-.19-1.22-.29a2,2,0,0,1-1.19-.52.65.65,0,0,1,0-.79,1.61,1.61,0,0,1,1.59-.35,2.39,2.39,0,0,1,1.46.86A.7.7,0,0,1,392.7,287.64Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 391.808px 286.627px;" id="elhugh4bmhht"
                                class="animable"></path>
                            <path
                                d="M382.8,288.45c.41-.12.78-.3,1.17-.45a2.05,2.05,0,0,0,1.11-.69.65.65,0,0,0-.12-.78,1.62,1.62,0,0,0-1.62-.12,2.34,2.34,0,0,0-1.33,1.06A.69.69,0,0,0,382.8,288.45Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 383.547px 287.36px;" id="elkidz5mjp3ej"
                                class="animable"></path>
                            <path
                                d="M392.64,298.55c-.2.25-.39.57-.73.64a2.44,2.44,0,0,1-1-.12s-.06,0,0,.05a1.27,1.27,0,0,0,1.25.38,1,1,0,0,0,.64-.92C392.74,298.53,392.67,298.51,392.64,298.55Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 391.842px 299.033px;" id="elwolovn9ju4q"
                                class="animable"></path>
                            <path
                                d="M391.33,295.84a3.22,3.22,0,0,1-2,1.67,3.94,3.94,0,0,1-1.14.18h-.44a.22.22,0,0,1-.21-.19h0a.33.33,0,0,1,0-.1h0v-.08c-.1-.72-.16-1.83-.16-1.83-.25.16-1.53.92-1.55.54a48.33,48.33,0,0,1,.15-9.84.09.09,0,0,1,.18,0c.28,3,0,6.08.25,9.13a5.65,5.65,0,0,1,1.46-.63c.11,0,.07,2.15.14,2.47v0a4.45,4.45,0,0,0,3.2-1.4C391.3,295.71,391.38,295.76,391.33,295.84Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 388.497px 291.896px;" id="el39ru8m50cqq"
                                class="animable"></path>
                            <path
                                d="M388.59,297.28a3.88,3.88,0,0,0,1.66,1,1.69,1.69,0,0,0,1-.06c.73-.28.68-1,.47-1.55a4.24,4.24,0,0,0-.44-.86A5,5,0,0,1,388.59,297.28Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 390.223px 297.069px;"
                                id="el0jssjf1tvbx8" class="animable"></path>
                            <path
                                d="M390.25,298.29a1.69,1.69,0,0,0,1-.06c.73-.28.68-1,.47-1.55A1.78,1.78,0,0,0,390.25,298.29Z"
                                style="fill: rgb(255, 153, 186); transform-origin: 391.053px 297.509px;"
                                id="el9lr3uyr6lkt" class="animable"></path>
                            <path
                                d="M402.75,289.84c-2.39.31-3.25-5.51-3.25-5.51s-3.73,0-6.42-4.58c0,0-4.09,3.78-8.11,3.8-6.31,0-7.63-7.91-5.65-9.95,2.8-2.89,9.18-.65,9.18-.65s8.26-4.06,12,1.34a4.55,4.55,0,0,1,5,3.68C406.54,282.22,404.53,289.62,402.75,289.84Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 392.128px 280.669px;" id="elt84kfhpzyeb"
                                class="animable"></path>
                            <path
                                d="M400.47,284.85a8.24,8.24,0,0,1-5-1.63,6.14,6.14,0,0,1-2.39-5.08c0-.1-.16-.11-.16,0a7,7,0,0,0,2.05,5.6,5.7,5.7,0,0,0,5.54,1.29C400.58,285,400.58,284.85,400.47,284.85Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 396.725px 281.668px;" id="elp4xx836o84"
                                class="animable"></path>
                            <path
                                d="M405.3,275.4c-1.49-1.3-3.37-1.19-5.17-.79-.1,0-.06.19,0,.16a5.14,5.14,0,0,1,5,1.6c1.18,1.26,1.31,3.1,1.24,4.75a12.87,12.87,0,0,1-3.63,8.49s0,.1.05.06a12.83,12.83,0,0,0,4.12-9.32C406.92,278.63,406.67,276.6,405.3,275.4Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 403.49px 282.01px;" id="el6xy00dmmk37"
                                class="animable"></path>
                            <path
                                d="M388.8,273.19a6.06,6.06,0,0,0-3.83-1.93,7.24,7.24,0,0,0-5,1.46,4.08,4.08,0,0,0-1.47,3.83,7.21,7.21,0,0,0,2.44,4.19s.08,0,0-.05a7.23,7.23,0,0,1-2-3.85,3.76,3.76,0,0,1,1.56-3.68c2.29-1.58,6-2.09,8.1.15C388.75,273.38,388.87,273.27,388.8,273.19Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 383.634px 275.987px;" id="el5he89mni6ct"
                                class="animable"></path>
                            <path d="M401.37,289.9s2-5.07,4.26-4.44,1.41,7.48-.71,8.88a2.42,2.42,0,0,1-3.46-.53Z"
                                style="fill: rgb(221, 106, 87); transform-origin: 404.169px 290.124px;"
                                id="el1n9ygutqpq9" class="animable"></path>
                            <path
                                d="M405.34,287.42s.06,0,0,.06a6.09,6.09,0,0,0-2.21,4.45,1.33,1.33,0,0,1,1.86-.81c.05,0,0,.09,0,.1a1.5,1.5,0,0,0-1.48.87,7,7,0,0,0-.46,1.48c-.05.16-.33.14-.31,0v0C402.23,291.43,403.17,288.14,405.34,287.42Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 403.985px 290.551px;" id="elj23k0uh4tv"
                                class="animable"></path>
                            <path
                                d="M424.26,343.12c-1.77-12.28-5.55-26.31-9.22-30.94-3.07-3.88-8.16-2.51-8.06,11.7,0,5.26-.47,12.76-1.09,19.24Z"
                                style="fill: rgb(221, 106, 87); transform-origin: 415.075px 326.715px;"
                                id="elzak5b0h39f" class="animable"></path>
                            <path
                                d="M407.07,317.33c1.56-13.36,7.58-12,11.92-.79a191.13,191.13,0,0,1,7,24l-21.75,1S406.08,325.88,407.07,317.33Z"
                                style="fill: rgb(69, 90, 100); transform-origin: 415.115px 324.63px;" id="elu9rcv6dkaog"
                                class="animable"></path>
                            <path
                                d="M423.15,333.61a7.18,7.18,0,0,1,0,2,7.66,7.66,0,0,1-.54,1.95,7.18,7.18,0,0,1,0-2A6.84,6.84,0,0,1,423.15,333.61Z"
                                style="fill: rgb(255, 255, 255); transform-origin: 422.88px 335.585px;"
                                id="elnth0hume6d" class="animable"></path>
                            <path
                                d="M414.28,328.14a7.12,7.12,0,0,1-2,0,7.55,7.55,0,0,1-1.95-.54,7.18,7.18,0,0,1,2,0A7.48,7.48,0,0,1,414.28,328.14Z"
                                style="fill: rgb(255, 255, 255); transform-origin: 412.305px 327.87px;"
                                id="elg4jcliya2d" class="animable"></path>
                            <path
                                d="M413.26,311.09a7.17,7.17,0,0,1,1.41,1.45,6.83,6.83,0,0,1,1,1.75,7.12,7.12,0,0,1-1.41-1.44A7.2,7.2,0,0,1,413.26,311.09Z"
                                style="fill: rgb(255, 255, 255); transform-origin: 414.465px 312.69px;"
                                id="elh5vpwfbmja6" class="animable"></path>
                            <path
                                d="M419.81,324a7.17,7.17,0,0,1,1.45-1.41,6.83,6.83,0,0,1,1.75-1,7.12,7.12,0,0,1-1.44,1.41A7.2,7.2,0,0,1,419.81,324Z"
                                style="fill: rgb(255, 255, 255); transform-origin: 421.41px 322.795px;"
                                id="elcdl7ld0nq1b" class="animable"></path>
                            <path
                                d="M411.16,340a7.17,7.17,0,0,1,1.45-1.41,7,7,0,0,1,1.75-1,7.12,7.12,0,0,1-1.44,1.41A7.2,7.2,0,0,1,411.16,340Z"
                                style="fill: rgb(255, 255, 255); transform-origin: 412.76px 338.795px;"
                                id="eldo99zzgka4" class="animable"></path>
                            <path
                                d="M406.37,321.48c-.23,1.76-.51,3.51-.78,5.26-.1-.76-.23-1.5-.4-2.25,0,0-.06,0-.05,0,.08.6.13,1.2.22,1.8l.12.87c0,.06,0,.12,0,.18-.21,1.37-.41,2.73-.58,4.11-.21,1.63-.37,3.27-.54,4.91s-.19,3.58-.42,5.27a11.35,11.35,0,0,0,2.12-.08c.2,0,.22-.21,0-.17s-1.86-.05-1.89-.06c.17-1.64.51-3.28.72-4.92s.44-3.27.62-4.91c.36-3.33.53-6.68.88-10C406.44,321.44,406.37,321.44,406.37,321.48Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 405.174px 331.549px;" id="elvsos70ffge"
                                class="animable"></path>
                            <path
                                d="M422.34,323.69c0,.65,0,1.31.07,2,0,.27,0,.53.07.8q-.94-3.12-1.9-6.22s0,0,0,0c.86,3.46,1.71,6.91,2.63,10.34A100.52,100.52,0,0,0,426,340.4a12.42,12.42,0,0,0-1.91.34,8.85,8.85,0,0,0,2.24-.11,106.56,106.56,0,0,0-2.74-10.35c-.27-.94-.55-1.87-.83-2.81-.08-.61-.11-1.22-.15-1.84s-.14-1.3-.22-1.95C422.41,323.65,422.34,323.65,422.34,323.69Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 423.455px 330.518px;" id="elpl1bqy35qlh"
                                class="animable"></path>
                            <path
                                d="M424.13,337.82c-3.12-.05-15.92.23-18.68.47-.2,0-.23.14,0,.15a171.74,171.74,0,0,0,18.71-.5C424.2,337.93,424.21,337.82,424.13,337.82Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 414.739px 338.16px;" id="el7vt9y166ckp"
                                class="animable"></path>
                        </g>
                        <g id="freepik--character-4--inject-154" class="animable"
                            style="transform-origin: 370.521px 152.173px;">
                            <rect x="330.52" y="107.3" width="85.64" height="85.64"
                                style="fill: rgb(255, 255, 255); transform-origin: 373.34px 150.12px;"
                                id="elb4970m1bk9e" class="animable"></rect>
                            <path d="M416.66,193.44H330V106.8h86.64Zm-85.64-1h84.64V107.8H331Z"
                                style="fill: rgb(235, 235, 235); transform-origin: 373.33px 150.12px;" id="ele5hsk2p9xs"
                                class="animable"></path>
                            <path d="M339.92,112.38a2.52,2.52,0,1,1-2.52-2.52A2.52,2.52,0,0,1,339.92,112.38Z"
                                style="fill: rgb(199, 199, 199); transform-origin: 337.4px 112.38px;" id="elcofiv7y0f2c"
                                class="animable"></path>
                            <circle cx="347.69" cy="112.38" r="2.52"
                                style="fill: rgb(235, 235, 235); transform-origin: 347.69px 112.38px;"
                                id="el4c1lbi5o1n8" class="animable"></circle>
                            <circle cx="357.99" cy="112.38" r="2.52"
                                style="fill: rgb(117, 193, 255); transform-origin: 357.99px 112.38px;"
                                id="elvsu6kmttlxk" class="animable"></circle>
                            <rect x="330.52" y="116.82" width="85.64" height="1"
                                style="fill: rgb(235, 235, 235); transform-origin: 373.34px 117.32px;" id="ell1ymezqsd3"
                                class="animable"></rect>
                            <rect x="330.52" y="107.3" width="85.64" height="85.64"
                                style="fill: rgb(255, 255, 255); transform-origin: 373.34px 150.12px;" id="el9ztst3pxty"
                                class="animable"></rect>
                            <path d="M416.66,193.44H330V106.8h86.64Zm-85.64-1h84.64V107.8H331Z"
                                style="fill: rgb(235, 235, 235); transform-origin: 373.33px 150.12px;" id="elu7vmdwcl2r"
                                class="animable"></path>
                            <path d="M339.92,112.38a2.52,2.52,0,1,1-2.52-2.52A2.52,2.52,0,0,1,339.92,112.38Z"
                                style="fill: rgb(166, 166, 166); transform-origin: 337.4px 112.38px;" id="el2um2aof82v9"
                                class="animable"></path>
                            <circle cx="347.69" cy="112.38" r="2.52"
                                style="fill: rgb(235, 235, 235); transform-origin: 347.69px 112.38px;"
                                id="elvayd4g4lzcs" class="animable"></circle>
                            <circle cx="357.99" cy="112.38" r="2.52"
                                style="fill: rgb(117, 193, 255); transform-origin: 357.99px 112.38px;" id="elufj4dt6sfl"
                                class="animable"></circle>
                            <rect x="330.52" y="116.82" width="85.64" height="1"
                                style="fill: rgb(235, 235, 235); transform-origin: 373.34px 117.32px;"
                                id="elfd9esvhjeer" class="animable"></rect>
                            <path
                                d="M368.44,120.72c-4.82,6.22-5.24,15.49-5.24,15.49s-4.14,9.82-2,14.57a9.09,9.09,0,0,0,6.54,5.37l-.88-2.67s2.23,3.29,8.36,4,13.76-2.19,17.59-4.79a15.82,15.82,0,0,0,5.33-6.06l-1,4.18a11.92,11.92,0,0,0,8.38-7.53c2.64-6.58-8.35-14.14-9.43-15.93s-3.92-15.51-18.19-11.24C377.86,116.06,371.77,116.44,368.44,120.72Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 383.257px 136.44px;" id="ely62d2t3hfnr"
                                class="animable"></path>
                            <path
                                d="M365.56,156.07a9.46,9.46,0,0,1-4.37-3.54,8.54,8.54,0,0,1-1.62-5.34,18.88,18.88,0,0,1,1.95-6.5c.93-2.15,2-4.23,2.91-6.39.05-.12-.13-.19-.2-.1a53.29,53.29,0,0,0-3,5.24A24.6,24.6,0,0,0,359,144.7a9.17,9.17,0,0,0,0,5.19,9,9,0,0,0,2.31,3.6,19.33,19.33,0,0,0,4.2,2.71C365.6,156.25,365.66,156.1,365.56,156.07Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 362.119px 145.185px;" id="el2kd5x9o9gx4"
                                class="animable"></path>
                            <path
                                d="M405.89,136.76c-2.4-4.88-7.4-7.52-10.76-11.61-1.83-2.21-3.34-4.73-5.57-6.57-.06,0-.15.06-.09.11,1.85,1.67,3.08,3.82,4.52,5.82A38.26,38.26,0,0,0,399.1,130c3.34,3.09,7.32,6.74,7.29,11.67,0,2.28-1,4.93-3.23,5.92-.08,0,0,.18.07.13a7.24,7.24,0,0,0,3.49-4.53A9.19,9.19,0,0,0,405.89,136.76Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 398.208px 133.154px;" id="ell3c7ft11zyp"
                                class="animable"></path>
                            <path
                                d="M406.28,138.1a9.52,9.52,0,0,0-2-5.37,13.52,13.52,0,0,0-4.67-3.34c-2-1-4.05-1.88-5.46-3.66-.06-.07-.16,0-.1.1,2.24,2.94,5.93,4,8.63,6.33,3.1,2.7,3.67,7.14,2.26,10.87a15.53,15.53,0,0,1-4.18,5.92,0,0,0,0,0,0,.05C404,146.29,406.56,142.43,406.28,138.1Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 400.166px 137.351px;" id="el4xnvf9jvp6o"
                                class="animable"></path>
                            <path
                                d="M345.06,129.77l5.25,22.95c.23.67-.12,1.21-.78,1.19l-11.77-.26a1.89,1.89,0,0,1-1.61-1.25l-5.24-22.94c-.23-.68.12-1.21.77-1.2l11.78.26A1.88,1.88,0,0,1,345.06,129.77Z"
                                style="fill: rgb(166, 166, 166); transform-origin: 340.61px 141.085px;"
                                id="el8cb8hh4gd64" class="animable"></path>
                            <path
                                d="M343.67,129.73l5.24,22.94c.23.68-.12,1.21-.77,1.2l-11.78-.26a1.91,1.91,0,0,1-1.61-1.25l-5.24-23c-.23-.67.12-1.21.78-1.19l11.77.26A1.89,1.89,0,0,1,343.67,129.73Z"
                                style="fill: rgb(219, 219, 219); transform-origin: 339.21px 141.02px;"
                                id="el5w6as45e2mc" class="animable"></path>
                            <path d="M340.42,130.7a1,1,0,1,0,1-1A1,1,0,0,0,340.42,130.7Z"
                                style="fill: rgb(69, 90, 100); transform-origin: 341.42px 130.7px;" id="elydrkuw516f"
                                class="animable"></path>
                            <path
                                d="M382.26,165.16C375.4,179.27,360.2,197.5,354,197.5c-2.95,0-8.22.63-12-2.8-8.34-7.5-15.2-21.72-16.53-29.83C325,162,339,156,341.08,158.32c4.76,5.54,10.24,16.38,11.1,16.33,3.17-.2,15.7-10.36,24.45-17.51C387.24,148.46,385,159.54,382.26,165.16Z"
                                style="fill: rgb(235, 148, 129); transform-origin: 354.997px 175.739px;"
                                id="el6fhykqoxumq" class="animable"></path>
                            <path
                                d="M325.29,150c1.56-5.82,2.85-7.08,1.56-12.69-.85-3.68,1.14-5.8,3.7-2.82,4.19,4.87,3.76,12.8,2.81,15.51Z"
                                style="fill: rgb(235, 148, 129); transform-origin: 329.642px 141.539px;"
                                id="el1rmiyxewvgv" class="animable"></path>
                            <path
                                d="M326.09,167.39s-2.5-8.17-1.45-14.54c.72-4.4,3.36-13.8,15.78-18.62,2.94-1.14,7.95-.68,3.82,2.93-2.94,2.57-5.57,3.31-7,5.11,0,0,6.3,1.34,7.33,4.34a58.06,58.06,0,0,1,2.13,8,12.81,12.81,0,0,1-1.46.53S346.1,158,344,162Z"
                                style="fill: rgb(235, 148, 129); transform-origin: 335.541px 150.534px;"
                                id="elkyfyqcxkkum" class="animable"></path>
                            <path
                                d="M326,148.76c1.8-1.49,5.68-4.58,9.73-6,4.49-1.58,13.58-3.42,14.72-.09.83,2.45-2.58,3.45-2.58,3.45s3.92,0,4.19,2.41c.24,2.16-2.44,2.78-2.44,2.78s2.37.43,2.21,2.55c-.2,2.56-5.14,1.25-7.58,3.66C343.7,158.06,326,148.76,326,148.76Z"
                                style="fill: rgb(235, 148, 129); transform-origin: 339.038px 149.175px;"
                                id="ellls9plfe87o" class="animable"></path>
                            <path
                                d="M336.61,147.79a18.92,18.92,0,0,1,11.19-1.74c.09,0,.13.1,0,.1a46.83,46.83,0,0,0-11.22,1.68S336.59,147.8,336.61,147.79Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 342.232px 146.834px;" id="el9ieek2svix"
                                class="animable"></path>
                            <path
                                d="M338.34,152.28a21.26,21.26,0,0,1,11.27-1.07c.1,0,.13.11,0,.11a49.83,49.83,0,0,0-11.3,1S338.32,152.29,338.34,152.28Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 344.003px 151.603px;" id="eld001snjq6r"
                                class="animable"></path>
                            <path
                                d="M361.39,168.05l14.52,10.77s7.07-9.53,8.74-18-2.66-8.55-9.2-3.36S361.39,168.05,361.39,168.05Z"
                                style="fill: rgb(117, 193, 255); transform-origin: 373.2px 166.378px;"
                                id="elbpkyrl7njah" class="animable"></path>
                            <path
                                d="M364.64,166.51c.84.4,7.89,5.47,12.58,9.24.06.06,0,.15-.07.11-2.68-1.43-9.31-6.47-12.59-9.26C364.5,166.55,364.58,166.48,364.64,166.51Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 370.892px 171.186px;" id="eloirc6d3qrp"
                                class="animable"></path>
                            <path
                                d="M384.65,160.77c-1.66,8.52-8.74,18-8.74,18l-9.7-7.19,14.63-17.45C384.11,153.07,385.8,154.93,384.65,160.77Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 375.61px 166.309px;" id="eld87o0rqn65e"
                                class="animable"></path>
                            <path
                                d="M415.57,187.09c-5.71-11.9-12.85-24.85-19.36-31.09-.31-.3-.63-.59-.94-.85l-.18-.16c-6.33-5.37-13-2.81-17.27,1.61-1,1.1-12.25,19.25-12.73,25.78-.3,4.08,1.84,8.11,3.12,10.13h47.36Z"
                                style="fill: rgb(117, 193, 255); transform-origin: 390.316px 172.237px;"
                                id="elcsjdwylxfpe" class="animable"></path>
                            <path
                                d="M415.57,169.56c-6.1-5.67-12.45-10.63-16.61-13.07-4.7-2.75-12.95-4.56-5,7.9,4.66,7.28,12.23,20.63,15.83,28.12h5.76Z"
                                style="fill: rgb(235, 148, 129); transform-origin: 403.108px 173.501px;"
                                id="el57tlrs8e9io" class="animable"></path>
                            <path
                                d="M400,178.36,413.16,166s-8.09-8.68-16.17-11.85-8.89,1.07-5,8.43S400,178.36,400,178.36Z"
                                style="fill: rgb(117, 193, 255); transform-origin: 401.446px 165.723px;"
                                id="elh0z6m0vz9i8" class="animable"></path>
                            <path
                                d="M399,174.9c.54-.76,6.81-6.78,11.36-10.71.07-.05.15,0,.1.09-1.9,2.38-8.05,8-11.39,10.71C399,175,399,175,399,174.9Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 404.738px 169.582px;" id="elekitr8lvcct"
                                class="animable"></path>
                            <path
                                d="M401.44,176.89c-.1,0-1.42.87-1.5.94-.1-.23-.23-.45-.35-.69l-.77-1.54c-.59-1.13-1.19-2.24-1.82-3.35-1.23-2.16-2.57-4.3-3.7-6.52,0-.09-.18,0-.13.09.62,1.17,1.2,2.38,1.76,3.59-.09-.08-1.4-1.13-1.61-1.34s-.19.05-.11.12c.23.17,2,1.95,2.09,2l1.07,2.28q.79,1.67,1.65,3.3c.27.51.54,1,.82,1.52s.84,1.45.85,1.47a20.89,20.89,0,0,0,1.87-1.74A.11.11,0,0,0,401.44,176.89Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 397.358px 172.226px;" id="eldnl0gm3x1cl"
                                class="animable"></path>
                            <path
                                d="M385.81,150.72c-2.63.27-5.73,2.12-8.19,5.45-2.16,2.93-4.14,7.1-2.65,8,1.71,1,5.1-2.77,5.1-2.77s-.86,6.13,2.4,5.82c3.81-.36,7.29-5.66,7.93-9.25C391.08,154.09,390.39,150.25,385.81,150.72Z"
                                style="fill: rgb(255, 255, 255); transform-origin: 382.538px 158.956px;"
                                id="elti17z1h3yhn" class="animable"></path>
                            <path
                                d="M389.56,154c-.26.89-4.89,6.53-9,6.12-1.34-.14-.92-7.5-.92-7.5l-.09-.55-1.3-7.71,9.25-5.27,1.34-.69s.21,2.13.46,4.79l0,.38c0,.15,0,.29.05.43,0,.4.08.8.11,1.21s0,.6.07.93l.06,1A52.05,52.05,0,0,1,389.56,154Z"
                                style="fill: rgb(235, 148, 129); transform-origin: 383.969px 149.271px;"
                                id="elajh838hgrbg" class="animable"></path>
                            <path
                                d="M389.28,143.16a15.71,15.71,0,0,1-9.75,8.88l-1.3-7.71,9.25-5.27,1.34-.69S389,140.5,389.28,143.16Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 383.755px 145.205px;" id="el8wz5ibftwdv"
                                class="animable"></path>
                            <path
                                d="M366.8,133.22c-.7,13.7,7.43,15.66,10.39,15.81,2.68.13,11.83.24,13.93-13.31s-4.05-18.21-10.16-18.84S367.49,119.52,366.8,133.22Z"
                                style="fill: rgb(235, 148, 129); transform-origin: 379.149px 132.931px;"
                                id="elk86k77ghopp" class="animable"></path>
                            <path
                                d="M369.43,131.26a7.21,7.21,0,0,0,.92-.21,1.52,1.52,0,0,0,.9-.4.48.48,0,0,0,0-.59,1.21,1.21,0,0,0-1.2-.26,1.72,1.72,0,0,0-1.1.65A.51.51,0,0,0,369.43,131.26Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 370.1px 130.502px;" id="elvzar5gexdnk"
                                class="animable"></path>
                            <path
                                d="M378.93,131.37a7.42,7.42,0,0,1-.94-.18,1.52,1.52,0,0,1-.91-.36.48.48,0,0,1,0-.59,1.2,1.2,0,0,1,1.19-.31,1.74,1.74,0,0,1,1.12.61A.52.52,0,0,1,378.93,131.37Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 378.236px 130.627px;" id="elkm4k6pccn8r"
                                class="animable"></path>
                            <path
                                d="M377.17,134.87s.07,0,.07.08c0,.93.08,2,.93,2.32,0,0,0,.06,0,.06C377.13,137.18,377,135.75,377.17,134.87Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 377.639px 136.1px;" id="el99wdi9w6bcl"
                                class="animable"></path>
                            <path d="M378,133.9c1.51-.11,1.61,2.9.22,3S376.74,134,378,133.9Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 378.157px 135.4px;" id="eljnts4c5k6e"
                                class="animable"></path>
                            <path
                                d="M378.6,134c.27.17.54.46.86.48s.63-.3.86-.62c0,0,.05,0,.05,0,0,.57-.17,1.17-.78,1.28s-1-.4-1.15-1C378.41,134.13,378.49,134,378.6,134Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 379.402px 134.508px;" id="elsuz7pjgi23"
                                class="animable"></path>
                            <path
                                d="M371.3,134.65s-.07,0-.07.08c.07.94,0,2-.83,2.36,0,0,0,.06,0,0C371.43,137,371.52,135.52,371.3,134.65Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 370.899px 135.883px;" id="el2i85jz0du23"
                                class="animable"></path>
                            <path d="M370.43,133.71c-1.51-.05-1.5,3-.1,3S371.69,133.75,370.43,133.71Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 370.333px 135.21px;" id="elwb1qpei8xz"
                                class="animable"></path>
                            <path
                                d="M369.8,133.91c-.24.16-.47.45-.76.47s-.57-.3-.78-.61c0,0-.05,0-.05,0,0,.58.18,1.18.73,1.29s.88-.4,1-1C370,134,369.9,133.85,369.8,133.91Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 369.084px 134.423px;" id="ell3q0zhcj5lb"
                                class="animable"></path>
                            <path
                                d="M377,142.05c-.21.23-.41.55-.74.61a2.57,2.57,0,0,1-1-.16s-.06,0,0,.05a1.26,1.26,0,0,0,1.23.41,1,1,0,0,0,.66-.88C377.06,142,377,142,377,142.05Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 376.192px 142.503px;" id="elnvoe6ow1hzb"
                                class="animable"></path>
                            <path
                                d="M373,138.76s-.16,1.4-.15,2.06c0,.06.16.09.39.09h0a3.1,3.1,0,0,0,3-1.24c.05-.06,0-.13-.1-.08a4.75,4.75,0,0,1-2.84.88c-.05-.18.36-2.39.25-2.39a5.94,5.94,0,0,0-1.48.37c.25-2.92,1-5.78,1.17-8.7,0-.1-.15-.13-.18,0a47.46,47.46,0,0,0-1.65,9.32C371.37,139.41,372.71,138.88,373,138.76Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 373.834px 135.306px;" id="el8l1rqxlw0b"
                                class="animable"></path>
                            <path
                                d="M373.3,140.67a3.91,3.91,0,0,0,1.52,1.2,1.7,1.7,0,0,0,1.05.07c.76-.19.78-.88.65-1.48a4.19,4.19,0,0,0-.33-.91A5,5,0,0,1,373.3,140.67Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 374.94px 140.771px;" id="elnbse6j6yvmb"
                                class="animable"></path>
                            <path
                                d="M374.82,141.87a1.7,1.7,0,0,0,1.05.07c.76-.19.78-.88.65-1.48A1.79,1.79,0,0,0,374.82,141.87Z"
                                style="fill: rgb(255, 153, 186); transform-origin: 375.7px 141.226px;"
                                id="elwvbuztb4wib" class="animable"></path>
                            <path
                                d="M389.9,136.38c-3.37,0-4.7-10.32-4.85-11.59.05.8.31,5.06,0,5.24a3.31,3.31,0,0,1-1.07-.16h0a10.1,10.1,0,0,0-.17-1.52c0-.24-.07.51-.17,1.44l-.63-.16a12.14,12.14,0,0,0-.43-3.23c-.11-.39-.16,1.42-.49,3a40.7,40.7,0,0,0-8.87-1.26c-.84,0-1.57,0-2.21.08a19,19,0,0,0,0-2.31,11.83,11.83,0,0,0-.44,2.35l-1,.11c-.14-1.78.61-4.64.34-4.2a12.34,12.34,0,0,0-1.57,4.44c-1.21.27-1.54.52-1.58.21a14.8,14.8,0,0,1,4.2-9.34c4.08-4.11,12.44-5.38,17.38.56,0,0,4,2.42,4.74,6.5S391.85,136.38,389.9,136.38Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 380px 126.183px;" id="elx1a6c6orzb"
                                class="animable"></path>
                            <path d="M388.41,136.38s2.84-4.39,4.82-3.39,0,7.28-2.29,8.21a2.33,2.33,0,0,1-3.16-1.13Z"
                                style="fill: rgb(235, 148, 129); transform-origin: 390.911px 137.142px;"
                                id="el3elk0zo1ziw" class="animable"></path>
                            <path
                                d="M392.61,134.78s0,0,0,.06a5.87,5.87,0,0,0-2.9,3.77,1.29,1.29,0,0,1,1.91-.42s0,.1-.05.09a1.43,1.43,0,0,0-1.55.56,7,7,0,0,0-.7,1.29c-.07.15-.33.08-.28-.09v0C388.94,138,390.42,135.06,392.61,134.78Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 390.822px 137.496px;" id="eldsha8cy4729"
                                class="animable"></path>
                        </g>
                        <g id="freepik--character-3--inject-154" class="animable"
                            style="transform-origin: 249.815px 262.701px;">
                            <rect x="200.01" y="213.21" width="85.64" height="85.64"
                                style="fill: rgb(255, 255, 255); transform-origin: 242.83px 256.03px;" id="el57ogt73p6n"
                                class="animable"></rect>
                            <path d="M286.15,299.35H199.51V212.71h86.64Zm-85.64-1h84.64V213.71H200.51Z"
                                style="fill: rgb(235, 235, 235); transform-origin: 242.83px 256.03px;"
                                id="elfefenmm68gl" class="animable"></path>
                            <path d="M209.41,218.3a2.52,2.52,0,1,1-2.52-2.53A2.52,2.52,0,0,1,209.41,218.3Z"
                                style="fill: rgb(166, 166, 166); transform-origin: 206.89px 218.29px;"
                                id="el6ohhlsoqtes" class="animable"></path>
                            <path d="M219.7,218.3a2.52,2.52,0,1,1-2.52-2.53A2.52,2.52,0,0,1,219.7,218.3Z"
                                style="fill: rgb(235, 235, 235); transform-origin: 217.18px 218.29px;"
                                id="el27lxtt82vjp" class="animable"></path>
                            <circle cx="227.47" cy="218.3" r="2.52"
                                style="fill: rgb(117, 193, 255); transform-origin: 227.47px 218.3px;" id="el2t28d5xgk1s"
                                class="animable"></circle>
                            <rect x="200.01" y="222.73" width="85.64" height="1"
                                style="fill: rgb(235, 235, 235); transform-origin: 242.83px 223.23px;" id="elz1d0y45a75"
                                class="animable"></rect>
                            <path
                                d="M285.14,248.41c-2.83-6.11-6.79-10.14-7.57-9.86-1,.35-12.14,25.63-13.32,26.53s-6.75-1.47-17.16-5.82-9.9,3.54-2.69,11.58,19,15.86,28,14.41c5.4-.86,9.93-9.38,12.7-16.44Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 262.126px 261.98px;" id="el6xrzvmq1sup"
                                class="animable"></path>
                            <path d="M263.52,284.21c-6.95-2.35-14.14-7.8-19.12-13.37-6.3-7-7.49-13.92-.75-12.65Z"
                                style="fill: rgb(69, 90, 100); transform-origin: 251.314px 271.124px;"
                                id="elmokfvrru6vl" class="animable"></path>
                            <path
                                d="M242.21,265.27c-3,1.1-8.93-3.06-11.49-6.69-.17-.25-.08-3.09-.14-6.54,0-2.1-.13-4.43-.37-6.56-.06-.43,1.52.2,1.52.2l2.82.35,9.34,1.18a34.21,34.21,0,0,0-.36,8.29,4.61,4.61,0,0,0,.19.87,1.06,1.06,0,0,1,0,.14C244.21,258.13,245.15,264.22,242.21,265.27Z"
                                style="fill: rgb(247, 169, 160); transform-origin: 237.234px 255.39px;"
                                id="el8kq9m3o5u6w" class="animable"></path>
                            <path
                                d="M243.72,256.37a1.06,1.06,0,0,1,0,.14,9.85,9.85,0,0,1-1.36.23c-9,.81-11.4-10.46-11.4-10.46l3.56-.25,9.34,1.18a34.21,34.21,0,0,0-.36,8.29A4.61,4.61,0,0,0,243.72,256.37Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 237.41px 251.406px;" id="elfq9gpmonstb"
                                class="animable"></path>
                            <path
                                d="M227.13,229.1c-1.25,4.81,1.84,18.42,5.35,21.33,5.08,4.23,13.12,4.31,16.63-1.73,3.41-5.86-.93-23.53-4.82-26.14C238.56,218.7,229,222,227.13,229.1Z"
                                style="fill: rgb(247, 169, 160); transform-origin: 238.595px 237.184px;"
                                id="elt5x4f4f19rf" class="animable"></path>
                            <path d="M232.13,250.31h0"
                                style="fill: none; stroke: rgb(243, 165, 156); stroke-linecap: round; stroke-linejoin: round; stroke-width: 0px; transform-origin: 232.13px 250.31px;"
                                id="elnyg52nlcw7" class="animable"></path>
                            <path
                                d="M238.81,237.24s-.06.06-.05.1c.23.91.34,2-.42,2.48,0,0,0,.06,0,.05C239.34,239.5,239.18,238.06,238.81,237.24Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 238.718px 238.556px;" id="elrfd2zj4eml"
                                class="animable"></path>
                            <path d="M237.78,236.46c-1.5.22-1,3.2.43,3S239,236.28,237.78,236.46Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 237.948px 237.961px;" id="elj3i0xbqh99t"
                                class="animable"></path>
                            <path
                                d="M244.4,236.05s.08,0,.08.07c.14.93.46,2,1.35,2.13,0,0,0,.05,0,.05C244.78,238.35,244.38,237,244.4,236.05Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 245.115px 237.176px;" id="elhf2v9p8yiq9"
                                class="animable"></path>
                            <path d="M245.05,234.94c1.46-.38,2.12,2.58.76,2.93S243.82,235.26,245.05,234.94Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 245.472px 236.403px;" id="elcc5lrorf2bl"
                                class="animable"></path>
                            <path
                                d="M236.35,235.31a10.43,10.43,0,0,0,1.08-.62,2,2,0,0,0,1-.84.65.65,0,0,0-.24-.74,1.58,1.58,0,0,0-1.61.12,2.34,2.34,0,0,0-1.14,1.24A.68.68,0,0,0,236.35,235.31Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 236.935px 234.154px;" id="elenp1ln4b8kl"
                                class="animable"></path>
                            <path
                                d="M245.93,233.23c-.43,0-.82-.06-1.24-.1a2,2,0,0,1-1.25-.33.65.65,0,0,1-.11-.78,1.61,1.61,0,0,1,1.51-.58,2.32,2.32,0,0,1,1.56.63A.68.68,0,0,1,245.93,233.23Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 244.923px 232.325px;" id="eld5pr4bansxh"
                                class="animable"></path>
                            <path
                                d="M239.76,245.81c.26.17.54.43.88.4a2.66,2.66,0,0,0,1-.41s.06,0,0,0a1.28,1.28,0,0,1-1.09.71,1,1,0,0,1-.87-.69C239.65,245.81,239.72,245.78,239.76,245.81Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 240.67px 246.154px;" id="elwmvpxhpec3"
                                class="animable"></path>
                            <path
                                d="M240.23,242.86a3.19,3.19,0,0,0,2.36,1,4,4,0,0,0,1.14-.15l.21-.07.2-.06a.25.25,0,0,0,.15-.24h0a.24.24,0,0,0,0-.09h0l0-.08c-.11-.72-.37-1.79-.37-1.79.28.08,1.71.44,1.63.07a49.12,49.12,0,0,0-2.95-9.31c0-.09-.2,0-.17.06.6,3,1.71,5.79,2.36,8.75a5.6,5.6,0,0,0-1.57-.19c-.09.05.55,2.06.57,2.39,0,0,0,0,0,0a4.4,4.4,0,0,1-3.44-.42C240.22,242.72,240.16,242.8,240.23,242.86Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 242.877px 237.981px;" id="eldrnuaf93g6t"
                                class="animable"></path>
                            <path
                                d="M243.24,243.56a3.82,3.82,0,0,1-1.35,1.37,1.74,1.74,0,0,1-1,.21c-.77-.1-.88-.78-.82-1.38a4.38,4.38,0,0,1,.21-.94A4.93,4.93,0,0,0,243.24,243.56Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 241.648px 243.984px;" id="el5g81d16jf2t"
                                class="animable"></path>
                            <path
                                d="M241.89,244.93a1.74,1.74,0,0,1-1,.21c-.77-.1-.88-.78-.82-1.38A1.76,1.76,0,0,1,241.89,244.93Z"
                                style="fill: rgb(255, 153, 186); transform-origin: 240.973px 244.45px;"
                                id="elw9r3ozcgcp" class="animable"></path>
                            <path
                                d="M228.39,239.46c3.14-.61,2.66-6.44,2.66-6.44s5.24-1.92,5.25-6.14c0,0,5.75,2.3,9.5.07s2.24-7.14,1.6-8c-1.48-2-4.28,1.48-4.28,1.48a20.1,20.1,0,0,0-11.33-.43c-4.6,1.36-6.11,6.23-6.11,6.23s-2.42,1-2.9,2.94S226.39,239.85,228.39,239.46Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 235.494px 228.901px;" id="eldx80rz8qsnl"
                                class="animable"></path>
                            <path
                                d="M229.79,233.3c4.29-.24,6.53-3.55,6.37-7.67a0,0,0,0,1,.08,0c.59,3.76-2.1,8.58-6.45,7.87A.1.1,0,0,1,229.79,233.3Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 233.005px 229.6px;" id="elrx6t5wxitbg"
                                class="animable"></path>
                            <path
                                d="M225.77,226.1s.09.05,0,.08c-1.07.76-2.33,1.43-2.95,2.65-.75,1.48-.21,3.13.44,4.52,1,2.16,2.74,4.88,5,5.82a.11.11,0,0,1-.09.2c-2.71-1-4.85-4.52-5.69-7.12C221.6,229.33,223.13,227.27,225.77,226.1Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 225.274px 232.738px;" id="eligcuqmsgkeq"
                                class="animable"></path>
                            <path
                                d="M241.09,227.09a5.84,5.84,0,0,0,6.35-1.37c1.89-2.11.91-4.78-.46-6.9-.07-.1.06-.25.15-.16,1.67,1.77,2.34,4.83.87,6.92a6.12,6.12,0,0,1-7,1.82C240.77,227.33,240.9,227,241.09,227.09Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 244.844px 223.232px;" id="elnxxt3wg3k9p"
                                class="animable"></path>
                            <path
                                d="M238.47,242.25a4.1,4.1,0,1,1,3.41-5.5h0a4.1,4.1,0,0,1-2.42,5.26A4.46,4.46,0,0,1,238.47,242.25Zm-.81-7.6a3.35,3.35,0,0,0-.86.2,3.56,3.56,0,1,0,.86-.2Z"
                                style="fill: rgb(117, 193, 255); transform-origin: 238.034px 238.173px;"
                                id="elab7cvi54vz4" class="animable"></path>
                            <path
                                d="M247.62,240.12c-1.55.17-3.14-1.28-3.61-3.36a4.94,4.94,0,0,1,.21-3,2.71,2.71,0,0,1,1.86-1.68,2.69,2.69,0,0,1,2.4.72,5,5,0,0,1,1.48,2.6c.5,2.2-.43,4.3-2.07,4.67Zm-1.22-7.53-.2,0a2.22,2.22,0,0,0-1.48,1.37,4.45,4.45,0,0,0-.18,2.65c.44,1.9,1.88,3.21,3.23,2.9s2.08-2.1,1.65-4a4.3,4.3,0,0,0-1.3-2.31A2.28,2.28,0,0,0,246.4,232.59Z"
                                style="fill: rgb(117, 193, 255); transform-origin: 246.982px 236.082px;"
                                id="elgps2csjrvek" class="animable"></path>
                            <path
                                d="M241.85,237.24l-.44-.33c.49-.64,1.74-1.65,3-.82l-.31.45C243,235.8,241.89,237.18,241.85,237.24Z"
                                style="fill: rgb(117, 193, 255); transform-origin: 242.91px 236.508px;"
                                id="elpk5dbdtd7ad" class="animable"></path>
                            <path
                                d="M225.11,242.27l-.53-.14c.06-.25.66-2.43,1.81-2.89s7.56-1.35,7.87-1.39l.07.54a72.83,72.83,0,0,0-7.74,1.36C225.83,240.05,225.26,241.67,225.11,242.27Z"
                                style="fill: rgb(117, 193, 255); transform-origin: 229.455px 240.06px;"
                                id="elz97zavxu4js" class="animable"></path>
                            <path d="M230.54,240.15s-3.38-4.23-5.32-3,.79,7.5,3.21,8.24a2.4,2.4,0,0,0,3.13-1.5Z"
                                style="fill: rgb(247, 169, 160); transform-origin: 228.061px 241.235px;"
                                id="el1tpkwjb1mwb" class="animable"></path>
                            <path
                                d="M226.05,238.93a0,0,0,0,0,0,.06,6.08,6.08,0,0,1,3.37,3.6,1.33,1.33,0,0,0-2-.24.05.05,0,0,0,.05.09,1.49,1.49,0,0,1,1.66.41,7.87,7.87,0,0,1,.86,1.27c.08.14.34,0,.28-.12l0,0C230.15,241.85,228.33,239,226.05,238.93Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 228.164px 241.554px;" id="eladxfj57h3mo"
                                class="animable"></path>
                            <path
                                d="M258.79,298.3c-1.84-10.38-4.05-20.67-6.09-25.84a104.59,104.59,0,0,0-7.58-14.69c-.41-.54-.05-2.64-.45-3s-14.48-.93-14.91-.57.38,3.76-.24,4.67c-6.5,5.22-13.23,23-18.18,39.42Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 235.065px 276.193px;" id="el4oab2eyjb"
                                class="animable"></path>
                            <path d="M231.14,255.14a10,10,0,0,1,0,3.21,10.79,10.79,0,0,1,0-3.21Z"
                                style="fill: rgb(69, 90, 100); transform-origin: 231.145px 256.745px;" id="elu79yg99zqo"
                                class="animable"></path>
                            <path d="M232.9,255.14a10,10,0,0,1,0,3.21,10.79,10.79,0,0,1,0-3.21Z"
                                style="fill: rgb(69, 90, 100); transform-origin: 232.905px 256.745px;"
                                id="elam60ddjzm6n" class="animable"></path>
                            <path d="M234.66,255.14a10.79,10.79,0,0,1,0,3.21,10.79,10.79,0,0,1,0-3.21Z"
                                style="fill: rgb(69, 90, 100); transform-origin: 234.66px 256.745px;" id="el98rte84syze"
                                class="animable"></path>
                            <path d="M236.42,255.14a10.79,10.79,0,0,1,0,3.21,10,10,0,0,1,0-3.21Z"
                                style="fill: rgb(69, 90, 100); transform-origin: 236.415px 256.745px;"
                                id="elfrlhd98j12c" class="animable"></path>
                            <path d="M238.18,255.14a10.79,10.79,0,0,1,0,3.21,10,10,0,0,1,0-3.21Z"
                                style="fill: rgb(69, 90, 100); transform-origin: 238.175px 256.745px;" id="el6syy5ca7f"
                                class="animable"></path>
                            <path d="M239.94,255.14a10.79,10.79,0,0,1,0,3.21,10,10,0,0,1,0-3.21Z"
                                style="fill: rgb(69, 90, 100); transform-origin: 239.935px 256.745px;"
                                id="elq7pqbp948bh" class="animable"></path>
                            <path
                                d="M241.7,255.14a10.79,10.79,0,0,1,0,3.21,9.59,9.59,0,0,1-.13-1.6A10.81,10.81,0,0,1,241.7,255.14Z"
                                style="fill: rgb(69, 90, 100); transform-origin: 241.695px 256.745px;"
                                id="elujrptvm1yql" class="animable"></path>
                            <path
                                d="M243.46,255.14a10.79,10.79,0,0,1,0,3.21,9.59,9.59,0,0,1-.13-1.6A10.81,10.81,0,0,1,243.46,255.14Z"
                                style="fill: rgb(69, 90, 100); transform-origin: 243.455px 256.745px;"
                                id="el8t3ol9r4ti7" class="animable"></path>
                            <path
                                d="M221.79,264.36a196.57,196.57,0,0,0-21.32,23.08V298.3h25.61c-5.23-1.18-12-2.45-12-2.45A91.77,91.77,0,0,0,229,271.55C235.27,256.58,230.24,257,221.79,264.36Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 216.139px 278.842px;" id="eltsfeu7ykmu"
                                class="animable"></path>
                            <path
                                d="M230.16,273.39a19.34,19.34,0,0,0-2,1.65c-.18.17-.35.36-.52.53.82-1.4,1.63-2.8,2.39-4.23a.09.09,0,0,0-.16-.09c-2.29,3.63-4.53,7.28-6.87,10.88s-4.7,7.07-7.08,10.58c-1.35,2-2.65,4-4,6-.05.07.07.16.12.09,1.32-1.69,2.66-3.33,3.92-5.07s2.41-3.41,3.58-5.14c2.38-3.56,4.67-7.18,6.84-10.87l.64-1.1.57-.48c.31-.27.63-.56.93-.85a19.62,19.62,0,0,0,1.67-1.86S230.2,273.36,230.16,273.39Z"
                                style="fill: rgb(69, 90, 100); transform-origin: 221.05px 285.014px;" id="el5jxlelzozv"
                                class="animable"></path>
                            <path
                                d="M297.63,227.57c1,2.69-2.74,2.34-2.74,2.34s5.26,1.81,5.23,5-4.55,2.47-4.87,2.43c.27.1,5.07,1.88,4.7,5.07s-4.8,1.94-5.09,1.85c.24.17,3.28,2.54,2.45,4.9-1.42,4-9.37-1.79-12.77-1.12l.26,5.49c0,.18,0,.45-.05.62l-2.57.36a36.92,36.92,0,0,0-2.89-5c-1.31-2-2.5-4-2.62-5.47a3.14,3.14,0,0,1,1.87-3.25s-2.66-1.47-2.45-4c.11-1.29,2.27-2.26,2.27-2.26a3.74,3.74,0,0,1-1.76-3.49c.25-1.77,2.38-2.47,2.38-2.47s-1.44-2.15-.59-3.88C280.09,221.23,295.47,221.82,297.63,227.57Z"
                                style="fill: rgb(247, 169, 160); transform-origin: 288.099px 238.531px;"
                                id="el1mwe3eqpsw7" class="animable"></path>
                            <path
                                d="M284.3,248.75l.59,4.64c0,.18,0,.6-.06.78-.74,6.17-7.32,10.32-8.09,5.93-.59-3.33,3.64-7.24,2.54-10.57h0Z"
                                style="fill: rgb(247, 169, 160); transform-origin: 280.787px 255.337px;"
                                id="elrd3j4r3mep" class="animable"></path>
                            <path
                                d="M279.3,228.43c-.05,0-.06-.07,0-.08a26.72,26.72,0,0,1,15.8,1.55c.16.08.11.36-.07.32A54.49,54.49,0,0,0,279.3,228.43Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 287.228px 229.01px;" id="el76lvly4mhus"
                                class="animable"></path>
                            <path
                                d="M278.28,234.53c-.06,0-.06-.1,0-.11a25,25,0,0,1,17.14,2.76c.18.11.23.39,0,.28C291.81,235.63,283.25,234.29,278.28,234.53Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 286.905px 235.716px;" id="elm07227iitwn"
                                class="animable"></path>
                            <path
                                d="M295.15,244.58c-5.11-2.82-10.61-3.72-16.39-3.83-.08,0-.07-.11,0-.13,2.84-.71,6.52-.25,9.35.34a15.38,15.38,0,0,1,7.14,3.45C295.33,244.48,295.26,244.64,295.15,244.58Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 286.994px 242.426px;" id="eln2dge1741f"
                                class="animable"></path>
                            <path
                                d="M285,250.72c-.19-1-.32-1.88-.49-2.85,0-.09-.16-.06-.16,0,0,1.37.16,2.71.2,4.09a12.55,12.55,0,0,1-.57,4.17,9.71,9.71,0,0,1-1.77,3.21,5.1,5.1,0,0,1-3.29,2.11,2.07,2.07,0,0,1-2.08-2.39,8.33,8.33,0,0,1,1.42-3.51,13.46,13.46,0,0,0,1.48-3.72,5.21,5.21,0,0,0-.68-3.38c-.36-.72-.74-1.44-1.11-2.16a7.69,7.69,0,0,1-.85-1.87,3.24,3.24,0,0,1,1.55-3.6.08.08,0,1,0-.06-.15,4.49,4.49,0,0,0-2.31,2.46,4.29,4.29,0,0,0,.62,3.52c.38.73.76,1.45,1.15,2.17a4.52,4.52,0,0,1,.76,2.43,12.25,12.25,0,0,1-1.86,4.61,6.26,6.26,0,0,0-1,3.86,2.9,2.9,0,0,0,2,2.52c2.72.73,5.15-2.25,6.18-4.39a10.49,10.49,0,0,0,.8-4.69A13.61,13.61,0,0,0,285,250.72Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 280.48px 251.508px;" id="ele7s9yproud6"
                                class="animable"></path>
                            <path
                                d="M289.14,248.91a7,7,0,0,0-1.85-.84,8.76,8.76,0,0,0-2-.41,5.06,5.06,0,0,0-1.9.15,3.43,3.43,0,0,0-1.48.95.08.08,0,0,0,.08.13,14.7,14.7,0,0,1,1.63-.33,10.14,10.14,0,0,1,1.74-.15,9.55,9.55,0,0,1,1.86.22c.63.12,1.24.33,1.88.41A.07.07,0,0,0,289.14,248.91Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 285.532px 248.335px;" id="eln4pqhcyl0j"
                                class="animable"></path>
                            <path
                                d="M278.41,240.59l-.27-.18a4.41,4.41,0,0,1-.51-.46c-.16-.17-.33-.34-.48-.52l-.25-.27a1.59,1.59,0,0,0-.13-.13,2,2,0,0,1-.12-.19c-.06-.09-.2,0-.14.08s.09.13.12.19a1.46,1.46,0,0,1,.07.19c.05.12.11.24.17.36a3.37,3.37,0,0,0,.47.65,1.92,1.92,0,0,0,.62.43,1,1,0,0,0,.35.11.58.58,0,0,0,.32,0,0,0,0,0,0,0-.07A1.06,1.06,0,0,0,278.41,240.59Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 277.563px 239.837px;" id="el4mmvr2tq6j"
                                class="animable"></path>
                            <path
                                d="M213.86,288.42a3.46,3.46,0,0,1,3.57,1.95s1.29-2.88,3.92-2.88c1.35,0,2.53,2.17,2.53,2.17a3.92,3.92,0,0,1,3.48-2.12c1.86.13,2.76,2.27,2.76,2.27s2.11-1.66,4-.93c3.77,1.48,4.42,17.47-1.37,20.19-2.7,1.26-2.64-2.66-2.64-2.66s-1.44,5.62-4.73,5.84-2.92-4.87-2.92-4.87-1.44,5.43-4.88,5.31-2.33-5.14-2.33-5.14-2.26,3.65-4.88,3c-4.31-1.14.57-8.71-.41-12.19H201S207.49,289.25,213.86,288.42Z"
                                style="fill: rgb(247, 169, 160); transform-origin: 219.013px 300.091px;"
                                id="el0q11jr06p0z" class="animable"></path>
                            <path d="M234.55,293c3.6.59,6.94-4.38,10.46-4.31,4.78.1,1.74,8.16-4.84,9.58l-5.6,0Z"
                                style="fill: rgb(247, 169, 160); transform-origin: 240.946px 293.48px;"
                                id="elybalffke25p" class="animable"></path>
                            <path
                                d="M230.31,290.13a0,0,0,0,1,.09,0,27.87,27.87,0,0,1-.31,16.52c-.06.17-.36.14-.33-.06A56.63,56.63,0,0,0,230.31,290.13Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 230.63px 298.445px;" id="el2jknu0ihdhv"
                                class="animable"></path>
                            <path
                                d="M223.91,289.58c0-.06.1-.07.12,0a26,26,0,0,1-1.46,18c-.1.2-.38.28-.28,0C223.89,303.7,224.56,294.71,223.91,289.58Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 223.633px 298.646px;" id="el5sbb26efr6a"
                                class="animable"></path>
                            <path
                                d="M214.88,307.9c2.5-5.53,3-11.31,2.62-17.31,0-.08.11-.08.13,0,1,2.89.81,6.74.42,9.73a16,16,0,0,1-3,7.68C215,308.07,214.82,308,214.88,307.9Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 216.616px 299.279px;" id="el3q0rj154woy"
                                class="animable"></path>
                            <path
                                d="M204,294.46c-.06.06,0,.15.1.1,2.71-2.36,10.69-9.2,13.45-4,.1.18.28.26.22,0C216.86,287.32,213.43,285.33,204,294.46Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 210.879px 291.209px;" id="elsun47m4144e"
                                class="animable"></path>
                            <path
                                d="M220.52,287.17a4.15,4.15,0,0,0-3,3.49c0,.12.18.18.22.07a4.84,4.84,0,0,1,2.14-2.7c1.73-.89,3.11.28,4,1.7a.14.14,0,0,0,.25-.1A3.23,3.23,0,0,0,220.52,287.17Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 220.825px 288.962px;" id="elc9ofwxu0b3"
                                class="animable"></path>
                            <path
                                d="M227.52,287.16a3.83,3.83,0,0,0-3.61,2.37c-.11.24.15.24.17.22,1-1,2-2.2,3.53-1.9a4.73,4.73,0,0,1,2.59,2.07c.06.08.17,0,.15-.09A3.2,3.2,0,0,0,227.52,287.16Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 227.118px 288.556px;"
                                id="el0q3uoorbjpid" class="animable"></path>
                            <path
                                d="M237.09,298.32c0,.05-.09.06-.1,0-.65-2.88-.9-9.38-4.27-9.38h0a3.8,3.8,0,0,0-2.37,1s-.08,0-.06,0a2.82,2.82,0,0,1,4.43-.87l.07.07C236.87,291,237.23,296.52,237.09,298.32Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 233.702px 293.352px;" id="elgmtrr11bz8g"
                                class="animable"></path>
                        </g>
                        <g id="freepik--character-2--inject-154" class="animable"
                            style="transform-origin: 125.865px 344.15px;">
                            <rect x="70.2" y="301.33" width="85.64" height="85.64"
                                style="fill: rgb(255, 255, 255); transform-origin: 113.02px 344.15px;"
                                id="elguvgos8rp7r" class="animable"></rect>
                            <path d="M156.34,387.47H69.7V300.83h86.64Zm-85.64-1h84.64V301.83H70.7Z"
                                style="fill: rgb(235, 235, 235); transform-origin: 113.02px 344.15px;"
                                id="el1dq5oyot1nq" class="animable"></path>
                            <path d="M79.6,306.41a2.52,2.52,0,1,1-2.52-2.52A2.52,2.52,0,0,1,79.6,306.41Z"
                                style="fill: rgb(166, 166, 166); transform-origin: 77.08px 306.41px;" id="eln3o68y1zad8"
                                class="animable"></path>
                            <path d="M89.89,306.41a2.52,2.52,0,1,1-2.52-2.52A2.52,2.52,0,0,1,89.89,306.41Z"
                                style="fill: rgb(235, 235, 235); transform-origin: 87.37px 306.41px;" id="ely06ba84xirc"
                                class="animable"></path>
                            <path d="M100.19,306.41a2.52,2.52,0,1,1-2.52-2.52A2.52,2.52,0,0,1,100.19,306.41Z"
                                style="fill: rgb(117, 193, 255); transform-origin: 97.67px 306.41px;" id="el5ctbj6d4kwc"
                                class="animable"></path>
                            <rect x="70.2" y="310.85" width="85.64" height="1"
                                style="fill: rgb(235, 235, 235); transform-origin: 113.02px 311.35px;"
                                id="elnvivhmh42vo" class="animable"></rect>
                            <path
                                d="M76.24,364c3.69,7.27,11.89,11.51,19.41,13.63s16.56,3.27,24.36,1.15a19.35,19.35,0,0,0,9.17-5.24c2.61-2.8,3.56-6.13,2.12-9.59-1.16-2.78-4.45-5.29-4-7.52s2.64-3.6,3.59-5.63c1.63-3.48.24-6.63-1.79-9.54-4.81-6.9-1.61-14-3.82-21.77-1.26-4.43-5.64-13-17-11.92-4.31.42-7.86,3.54-10.31,7-2.89,4.1-2.77,10.33-6,14.17-2.8,3.26-5.89,3.23-8.64,6.7-1.19,1.51-2,3.39-1.07,7.74.34,1.57.56,3.9-.39,5.49-1.32,2.19-4.33,2.69-5.77,5C74.13,356.78,74.62,360.77,76.24,364Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 103.393px 343.692px;" id="elx1ln5i4cmyc"
                                class="animable"></path>
                            <path
                                d="M126.62,374c3.77.16,6.4-4.58,4.63-7.66-1.11-1.95-3.15-3.17-4.27-5.12-1.85-3.19.81-5.17,2.67-7.54,4-5.13,1-9.81-2.34-14.21-2.53-3.34-2.51-6.55-1.89-10.55,0-.06.12-.05.11,0-.32,3-.52,5.93,1,8.63,1.25,2.2,3.16,3.92,4.35,6.18a9,9,0,0,1-1.07,10.64c-.76,1-2,1.93-2.5,3-1.09,2.62.65,4.45,2.3,6.2,1.26,1.33,2.66,2.82,2.84,4.75.26,2.93-3,6.15-5.85,5.86C126.47,374.17,126.46,374,126.62,374Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 128.768px 351.538px;" id="el66j4k8ktrdm"
                                class="animable"></path>
                            <path
                                d="M124.05,376.32c2.52-.9,5.21-1.63,7-3.75,2.69-3.12.81-6.3-.94-9.27a5.25,5.25,0,0,1-1-4c.55-2.26,2.58-3.82,3.32-6,1.77-5.24-2.81-9.58-4.64-14.07s-1.77-9.48-1.79-14.34a.08.08,0,0,1,.16,0c.06,6.22.65,12.16,3.86,17.61,2.24,3.8,4.62,7.9,2.31,12.25-.57,1.07-1.45,2-2,3a5.21,5.21,0,0,0,.37,5.64c1.1,1.85,2.41,3.77,2.22,6-.37,4.38-5.17,6.34-8.82,7.29A.19.19,0,0,1,124.05,376.32Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 128.607px 350.745px;" id="elhbd8qmyvbxb"
                                class="animable"></path>
                            <path
                                d="M75.41,352.1c2.33-2.23,5.48-3,5.46-6.81,0-2.66-1-5,.06-7.59a10,10,0,0,1,4.61-4.76c2.51-1.45,5.17-2.5,7.2-4.63,2.23-2.33,3.61-5.31,5-8.17,0-.06.13,0,.11,0-1.64,3.94-3.48,8-7.17,10.41-1.92,1.29-4.11,2.11-6,3.42-3.44,2.34-4,5.54-3.51,9.42.24,1.79.41,3.56-.68,5.12s-2.9,2.29-4.3,3.49c-6,5.11-.12,14.22,5.71,16.51.26.1.15.52-.12.42-4.39-1.58-8.38-6.65-8.51-11.35A7.35,7.35,0,0,1,75.41,352.1Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 85.5582px 344.529px;" id="elkxrncv6y5v"
                                class="animable"></path>
                            <path
                                d="M75,355.38c.58-2.7,2.54-3.88,4.25-5.75,2.68-2.95,1.2-6.65,1.63-10.23a8.93,8.93,0,0,1,3.54-5.89c2.5-2,5.42-3.24,7.62-5.69a18,18,0,0,0,4.31-9.37c0-.06.1,0,.1,0a17.06,17.06,0,0,1-6.8,12c-2.46,1.8-5.55,3.06-7.25,5.79-1.8,2.89-.79,6-1,9.23a7,7,0,0,1-2.32,5,14.3,14.3,0,0,0-3,3.19,8.62,8.62,0,0,0-.56,5.92c1.35,6.16,6.61,10.88,12.1,12.89.19.07.11.4-.08.33a20.13,20.13,0,0,1-11.48-10.32A11.64,11.64,0,0,1,75,355.38Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 85.6457px 345.617px;" id="elkgnup68ejig"
                                class="animable"></path>
                            <path
                                d="M103.84,352c4,5.21,25.45,21.93,44.06,22.26,6.32.11,24.79-26.26,28.38-36.41,2.58-7.29-12.94-11.53-17.39-10.62-5.56,1.14-15.28,23.74-19.22,24-6.32.41-18.28-3.67-31.48-6C101.4,344.1,100.8,348,103.84,352Z"
                                style="fill: rgb(247, 169, 160); transform-origin: 139.329px 350.684px;"
                                id="elyiod1k9iux" class="animable"></path>
                            <path
                                d="M175.81,339c1.09-2.18,5.2-12.61,5.7-15.77s1.25-12.35-1.13-13-2.81,2-2.81,2-.3-3.93-2.75-4.34-3,3.77-3,3.77-.59-4-3.07-4.25-2.32,4.06-2.32,4.06-.37-3.69-2.49-3c-2.56.8-1.1,7.54-1.91,11-.18.78-4.84,15.59-4.84,15.59Z"
                                style="fill: rgb(247, 169, 160); transform-origin: 169.61px 323.2px;" id="elj1uli5aner"
                                class="animable"></path>
                            <path
                                d="M166.42,311.16c1.06,4.95.67,7.31-1,12,0,.09.09.16.13.07,2.11-4.43,3-7.31,1.16-12.13C166.57,310.86,166.37,310.92,166.42,311.16Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 166.564px 317.11px;" id="elcl1mnvcey08"
                                class="animable"></path>
                            <path
                                d="M171.73,311.32c.65,5.25.25,7.8-1.2,12.84,0,.07.1.11.13,0,1.83-4.82,2.68-7.72,1.34-12.87C171.94,311.1,171.7,311.08,171.73,311.32Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 171.592px 317.686px;" id="el1dr53fl81nc"
                                class="animable"></path>
                            <path
                                d="M177.48,312.54c.27,5.12-.06,7.94-2.09,12.66a.09.09,0,0,0,.17.08,17,17,0,0,0,2.08-12.73C177.58,312.23,177.47,312.22,177.48,312.54Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 176.729px 318.819px;"
                                id="el00oi22vt3a30q" class="animable"></path>
                            <path
                                d="M153.74,337.28a62.12,62.12,0,0,1-.09-9.17c.4-2.83,5.76-12.83,8-11.79,2.87,1.33.91,7.72-.46,10.72,0,0,6.66,3.09,6.24,8S153.74,337.28,153.74,337.28Z"
                                style="fill: rgb(247, 169, 160); transform-origin: 160.486px 327.125px;"
                                id="elirc7o7fkakp" class="animable"></path>
                            <path
                                d="M162.31,316.94c1.74,3.11-.31,6.94-1.42,9.95a.29.29,0,0,0,.26.41c2.7,1.48,6.08,4.35,6.43,7.58,0,.1.14.1.14,0,.1-3.52-3-6.61-6.05-8,1.19-3.07,3.07-7,.67-9.91C162.32,316.91,162.3,316.92,162.31,316.94Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 164.293px 325.94px;" id="elbd0q1jw9v3w"
                                class="animable"></path>
                            <path
                                d="M146.21,341.12l22,14.47s-11.85,17.82-18.85,19.35S119.56,367.6,107.93,357s-7.16-14.25,5.3-11.34,24.45,5.37,26.4,4.49S146.21,341.12,146.21,341.12Z"
                                style="fill: rgb(117, 193, 255); transform-origin: 134.696px 358.116px;"
                                id="eld4acnvck8" class="animable"></path>
                            <path d="M135.18,372.37c-9.21-3.24-20.26-9-27.25-15.34-10.64-9.67-7.81-13.58,2.28-11.95Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 118.18px 358.546px;" id="el4ejfcu4c2fo"
                                class="animable"></path>
                            <path
                                d="M124.65,386.48v-.12s4.45-5.7,4-11.46c-.49-6.54-11.7-24.68-12.74-25.78-4.22-4.42-10.41-7.28-18.39-.6-8.34,7-17,24.36-23,38Z"
                                style="fill: rgb(117, 193, 255); transform-origin: 101.601px 365.54px;"
                                id="ela3e5l4dkxlb" class="animable"></path>
                            <path
                                d="M91.68,386.48c3.23-7.64,9-19.51,12.57-26.63,6.61-13.24-3.44-14-7.25-10.08-7.48,7.63-20.47,21.74-26.3,32.47v4.24Z"
                                style="fill: rgb(247, 169, 160); transform-origin: 88.5736px 367.089px;"
                                id="elp8xfe1ufjzq" class="animable"></path>
                            <path
                                d="M93,386.48c3.22-7.36,9-20,12.59-27.34,5.24-10.77-.68-17.86-10.15-8.76-7.58,7.29-18.93,21.74-24.73,31.79v4.31Z"
                                style="fill: rgb(117, 193, 255); transform-origin: 89.1289px 366.344px;"
                                id="elf4vy02vkc4i" class="animable"></path>
                            <path
                                d="M93.41,386.48c.24-.49.46-.94.6-1.26.87-2,1.75-4,2.6-6.06s1.73-4.05,2.54-6.1c.14-.35.29-.69.43-1,.19-.14,1.78-2.42,2.23-2.92.08-.08-.06-.2-.12-.12a13,13,0,0,1-1.36,1.51l-.24.29c.55-1.32,1.1-2.65,1.61-4,0-.1-.1-.17-.14-.08-1.19,2.74-2,4.39-3.07,6.55s-1.92,4.24-2.86,6.37-1.84,4.28-2.74,6.43c0,.11-.11.24-.17.39Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 97.277px 376.589px;" id="el6o7wj1jh7fd"
                                class="animable"></path>
                            <path
                                d="M104.2,346.48c.26.9,4.89,6.54,9,6.13,1.34-.14.92-7.5.92-7.5l.09-.55,1.3-7.71-9.25-5.27-1.34-.69s-.21,2.13-.45,4.79c0,.12,0,.25,0,.38s0,.29,0,.43c0,.4-.08.8-.11,1.21s-.05.6-.07.93l-.06,1A51.88,51.88,0,0,0,104.2,346.48Z"
                                style="fill: rgb(247, 169, 160); transform-origin: 109.806px 341.761px;"
                                id="elsyrq5ji21iq" class="animable"></path>
                            <path
                                d="M104.49,335.68a15.68,15.68,0,0,0,9.74,8.88l1.3-7.71-9.25-5.27-1.34-.69S104.73,333,104.49,335.68Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 110.01px 337.725px;" id="el63yrorqc1fj"
                                class="animable"></path>
                            <path d="M104.07,330.34s-3.6-3.78-5.36-2.43,1.39,7.14,3.78,7.64a2.31,2.31,0,0,0,2.88-1.7Z"
                                style="fill: rgb(247, 169, 160); transform-origin: 101.784px 331.628px;"
                                id="elgebjswhmyk9" class="animable"></path>
                            <path
                                d="M99.65,329.55s0,.05,0,.06a5.88,5.88,0,0,1,3.55,3.17,1.29,1.29,0,0,0-2-.06s0,.1.06.08a1.4,1.4,0,0,1,1.62.26,6.87,6.87,0,0,1,.94,1.14c.09.13.34,0,.26-.14l0,0C103.84,332,101.85,329.42,99.65,329.55Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 101.873px 331.899px;" id="elr3gez542qwm"
                                class="animable"></path>
                            <path
                                d="M125.14,322.86c3.23,13.34-4.4,16.77-7.27,17.46-2.61.63-11.58,2.44-16.17-10.49s.6-18.64,6.49-20.39S121.92,309.53,125.14,322.86Z"
                                style="fill: rgb(247, 169, 160); transform-origin: 112.932px 324.831px;"
                                id="eluala84lr8r" class="animable"></path>
                            <path
                                d="M122.19,321.43c-.32,0-.62,0-1,0a1.56,1.56,0,0,1-.95-.22.48.48,0,0,1-.1-.59,1.21,1.21,0,0,1,1.13-.48,1.8,1.8,0,0,1,1.2.43A.52.52,0,0,1,122.19,321.43Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 121.343px 320.783px;" id="elce0271ny2lp"
                                class="animable"></path>
                            <path
                                d="M112.88,323.3c.31-.09.58-.23.88-.35a1.5,1.5,0,0,0,.83-.53.47.47,0,0,0-.1-.58,1.19,1.19,0,0,0-1.22-.08,1.81,1.81,0,0,0-1,.8A.53.53,0,0,0,112.88,323.3Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 113.434px 322.473px;"
                                id="el0a0bji0ix9tb" class="animable"></path>
                            <path
                                d="M115.26,326.4s-.07.06-.06.1c.21.91.29,2-.48,2.45,0,0,0,.06,0,.05C115.72,328.67,115.6,327.24,115.26,326.4Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 115.113px 327.701px;" id="elp93v1u85txe"
                                class="animable"></path>
                            <path d="M114.25,325.61c-1.49.17-1,3.15.35,3S115.51,325.46,114.25,325.61Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 114.381px 327.11px;" id="el4chpvtgzeia"
                                class="animable"></path>
                            <path
                                d="M113.69,325.85c-.23.21-.44.55-.75.63s-.68-.18-1-.45c0,0-.06,0,0,.05.08.57.39,1.12,1,1.11s.9-.57,1-1.17C113.9,325.91,113.79,325.77,113.69,325.85Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 112.927px 326.508px;" id="elyqogf9qh6hi"
                                class="animable"></path>
                            <path
                                d="M121,325.1s.08,0,.08.07c.1.93.38,2,1.26,2.16,0,0,0,.05,0,.05C121.28,327.39,120.93,326,121,325.1Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 121.666px 326.24px;" id="eli3w0rmof81"
                                class="animable"></path>
                            <path d="M121.66,324c1.47-.33,2,2.63.66,2.94S120.43,324.29,121.66,324Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 122.032px 325.469px;" id="elo2b5vruhhe"
                                class="animable"></path>
                            <path
                                d="M122.32,324.1c.26.11.54.35.83.32s.51-.41.66-.75c0,0,0,0,0,0,.12.57,0,1.19-.48,1.4s-.94-.23-1.18-.77C122.16,324.22,122.21,324.05,122.32,324.1Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 123.002px 324.397px;" id="elnzfz7yytoai"
                                class="animable"></path>
                            <path
                                d="M116.79,333.42c.25.19.5.47.84.46a2.49,2.49,0,0,0,1-.34s.06,0,0,0a1.23,1.23,0,0,1-1.12.63,1,1,0,0,1-.82-.74C116.69,333.42,116.76,333.39,116.79,333.42Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 117.673px 333.789px;" id="elf81kdjzt4qm"
                                class="animable"></path>
                            <path
                                d="M120.1,329.45a20.13,20.13,0,0,1,.52,2c0,.06-.14.11-.36.16h0a3.15,3.15,0,0,1-3.19-.66.07.07,0,0,1,.08-.11,4.63,4.63,0,0,0,3,.34c0-.18-.79-2.27-.69-2.3a5.83,5.83,0,0,1,1.53.09c-.79-2.83-2-5.5-2.76-8.33a.09.09,0,0,1,.16-.07,47.65,47.65,0,0,1,3.36,8.85C121.79,329.79,120.38,329.52,120.1,329.45Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 119.402px 326.162px;" id="el7egr37t4uv8"
                                class="animable"></path>
                            <path
                                d="M120.13,331.38a3.78,3.78,0,0,1-1.27,1.47,1.74,1.74,0,0,1-1,.27c-.78-.05-.94-.73-.92-1.34a4.33,4.33,0,0,1,.16-1A4.92,4.92,0,0,0,120.13,331.38Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 118.534px 331.951px;" id="el2i5p8si1akq"
                                class="animable"></path>
                            <path
                                d="M118.86,332.85a1.74,1.74,0,0,1-1,.27c-.78-.05-.94-.73-.92-1.34A1.79,1.79,0,0,1,118.86,332.85Z"
                                style="fill: rgb(255, 153, 186); transform-origin: 117.899px 332.44px;"
                                id="elvq0wvup808" class="animable"></path>
                            <path
                                d="M102.65,330.59c2.24-.29,1.77-5,1.77-5s4.48-.93,4.6-7.67a10.18,10.18,0,0,1-.86,5.74s7.71-2.5,9.64-9.8c0,0-.61,3.64-1.6,5.1a9.46,9.46,0,0,0,4.16-4.65s2.18,3.52,3.47,4.35c0,0-3.24-13.74-15.72-9.58,0,0-7.89,2.22-9.43,9.17S102.65,330.59,102.65,330.59Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 111.119px 319.443px;" id="elgmglbiut6ag"
                                class="animable"></path>
                            <path
                                d="M105,344.53a16.39,16.39,0,0,0-7.79,4.33s8.81,5.49,16.1,4.21c3.28-.58,5-6.11,5-6.11S111.83,343.62,105,344.53Z"
                                style="fill: rgb(247, 169, 160); transform-origin: 107.76px 348.818px;"
                                id="el8gv1schvv3o" class="animable"></path>
                            <path
                                d="M96.43,350.36a42,42,0,0,0,6.23,3,24.72,24.72,0,0,0,6.63,1.66,14.7,14.7,0,0,0,3.38,0,11.5,11.5,0,0,0,1.65-.34,4.71,4.71,0,0,0,1.45-.73,9.86,9.86,0,0,0,2.26-2.5,19.84,19.84,0,0,0,1.66-3,12.54,12.54,0,0,1-3.57,6,4.55,4.55,0,0,1-1.61.9,11.54,11.54,0,0,1-1.74.4,15.07,15.07,0,0,1-3.55.09,22.9,22.9,0,0,1-6.78-1.86A28.51,28.51,0,0,1,96.43,350.36Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 108.06px 352.177px;" id="eleuip5eevi7o"
                                class="animable"></path>
                        </g>
                        <g id="freepik--character-1--inject-154" class="animable"
                            style="transform-origin: 131.784px 186.17px;">
                            <rect x="75.36" y="138.84" width="85.64" height="85.64"
                                style="fill: rgb(255, 255, 255); transform-origin: 118.18px 181.66px;"
                                id="elkredulhpxzi" class="animable"></rect>
                            <path d="M161.5,225H74.86V138.34H161.5Zm-85.64-1H160.5V139.34H75.86Z"
                                style="fill: rgb(235, 235, 235); transform-origin: 118.18px 181.67px;"
                                id="elcchtgt05r6q" class="animable"></path>
                            <path d="M84.76,143.92a2.52,2.52,0,1,1-2.52-2.52A2.52,2.52,0,0,1,84.76,143.92Z"
                                style="fill: rgb(166, 166, 166); transform-origin: 82.24px 143.92px;" id="el91nsxja9gq"
                                class="animable"></path>
                            <circle cx="92.53" cy="143.92" r="2.52"
                                style="fill: rgb(235, 235, 235); transform-origin: 92.53px 143.92px;" id="el1a8w0vpffb"
                                class="animable"></circle>
                            <circle cx="102.83" cy="143.92" r="2.52"
                                style="fill: rgb(117, 193, 255); transform-origin: 102.83px 143.92px;"
                                id="elwvhyvo9jsuj" class="animable"></circle>
                            <rect x="75.36" y="148.36" width="85.64" height="1"
                                style="fill: rgb(235, 235, 235); transform-origin: 118.18px 148.86px;"
                                id="el9brlbr4efpn" class="animable"></rect>
                            <path
                                d="M102,192c5.73,13.78,17.85,30.62,25.37,29.34,6.87-1.16,21.27-11,27.08-16s-10.63-18.85-14.13-16c-4.67,3.84-12.51,12-14,11.71-1.89-.3-4.12-2.89-16.4-14.37C104.82,182,99.51,186.11,102,192Z"
                                style="fill: rgb(173, 99, 89); transform-origin: 128.524px 203.03px;" id="elumn3nh13e1"
                                class="animable"></path>
                            <path
                                d="M146.37,182.34c2.95-1.38,6.22-3.21,9.61-3.48s6.66,3.92,6.79,5.21-.36,9.4-3.75,9.74-2-6-2.15-6.7-.42-1.58-1.05-1.45-11.3,6.56-11.3,6.56Z"
                                style="fill: rgb(173, 99, 89); transform-origin: 153.654px 186.335px;"
                                id="elck8izzkm3j8" class="animable"></path>
                            <path
                                d="M146.64,182.79c.19,0,8.92-4.51,12.32-4.79s6.66,3.93,6.79,5.21-.36,9.41-3.75,9.74-2-6-2.16-6.7-.41-1.57-1.05-1.45-11.3,6.56-11.3,6.56Z"
                                style="fill: rgb(173, 99, 89); transform-origin: 156.204px 185.475px;" id="elkjlgpbgt2s"
                                class="animable"></path>
                            <path
                                d="M160.8,192.64a4,4,0,0,1-.76-1.95,6.92,6.92,0,0,1-.09-2.18,12.29,12.29,0,0,0,.22-1.9,3.7,3.7,0,0,0-.65-1.75c-.31-.45-.79-.24-1.2,0a16.05,16.05,0,0,0-1.76,1c-.62.39-1.23.79-1.84,1.19a18,18,0,0,0-1.86,1.27s0,.12,0,.09c.57-.26,1.1-.62,1.65-.94s1.23-.73,1.85-1.08,1.14-.7,1.73-1c.2-.11.61-.38.86-.35s.46.65.54.85a3.24,3.24,0,0,1,.06,1.85,9.22,9.22,0,0,0-.16,1.89,4.93,4.93,0,0,0,.31,1.75,7,7,0,0,0,1,1.38C160.75,192.78,160.86,192.7,160.8,192.64Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 156.839px 188.679px;" id="elafrqz4xhmyq"
                                class="animable"></path>
                            <path
                                d="M136.76,192.76s8.55-9.5,10.34-11.4c3.58-3.8,19.44-12.2,21.72-12.67s3.59,4.16-7.15,10.19c-5.65,3.17-6.37,6.66-6.07,8.53s2.44,5.18,5.59,4.78,4.74-5.21,7.59-6,1.46,4.71-.28,8a19.5,19.5,0,0,1-7.84,7.47c-2.62,1.3-10.71,5.78-10.71,5.78Z"
                                style="fill: rgb(173, 99, 89); transform-origin: 153.588px 188.049px;"
                                id="el1xlpi9shiy2" class="animable"></path>
                            <path
                                d="M164.89,189.59c-1.1,1-2.33,2.36-3.89,2.58s-2.76-.73-3.65-2a6,6,0,0,1-1.26-4.28,7.32,7.32,0,0,1,1.81-3.76,18.18,18.18,0,0,1,4-3.27c.07,0,0-.14-.07-.1-1.39.8-5.72,3.09-6.23,7.18a6.18,6.18,0,0,0,1.32,4.36,4.44,4.44,0,0,0,3.51,2.27c1.88,0,3.34-1.71,4.56-3C165,189.56,164.94,189.53,164.89,189.59Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 160.285px 185.661px;" id="elszy12lbz3gj"
                                class="animable"></path>
                            <path
                                d="M101.65,195.07a65,65,0,0,0,7.89,15.81c.69,1,1.1,1.45,1.1,1.45l11.84-12.7,1.64-1.76s-.31-.34-1.3-1.26c-1.4-1.29-4.18-3.71-9.41-7.88a27.76,27.76,0,0,0-7.66-4.68C100.08,182.08,98.68,186.64,101.65,195.07Z"
                                style="fill: rgb(55, 71, 79); transform-origin: 112.126px 197.962px;" id="el14off4bj0cz"
                                class="animable"></path>
                            <path
                                d="M108.26,212.26l3.91,4.45,13.2-14.43,2.95-3.24-4.65-3.34-.85.91-1.66,1.79-11.62,12.48Z"
                                style="fill: rgb(55, 71, 79); transform-origin: 118.29px 206.205px;" id="el3j4kedfq03c"
                                class="animable"></path>
                            <path
                                d="M101.65,195.07a65,65,0,0,0,7.89,15.81l-1.28,1.38,3.91,4.45,13.2-14.43-2.89-2.65-1.32-1.23c-5.94-5.49-11.86-11-15.41-14.35C100.08,182.08,98.68,186.64,101.65,195.07Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 112.751px 200.152px;" id="el4fmzrcr8eqe"
                                class="animable"></path>
                            <path
                                d="M122.28,224.07a171.25,171.25,0,0,0-3.38-23.51c-1.39-5.88-8.17-14.33-8.44-14.57-4-3.58-8.9-4.56-14.08.62-6.64,6.65-14.54,24.07-20,37.46Z"
                                style="fill: rgb(55, 71, 79); transform-origin: 99.33px 203.542px;" id="elfdz38tfzwi9"
                                class="animable"></path>
                            <path
                                d="M97.76,197.76C104.6,211.1,130,233.91,138.47,234c9.83.06,32.38-16.28,37.05-22.65,1.87-2.53-15-14.46-17.65-12.4-11.15,8.61-21,12.91-22.92,12.32-3-.91-17.39-11.13-26.85-18.09C96.21,184.4,94.69,191.78,97.76,197.76Z"
                                style="fill: rgb(173, 99, 89); transform-origin: 136.026px 211.568px;"
                                id="elw1r5l6zs5oj" class="animable"></path>
                            <path
                                d="M175,211.88c1.16-.88,8.08-10.22,9.77-14.11a41.41,41.41,0,0,0,3.53-12.88c.7-7,.53-12-.75-13.8-1.49-2.13-1.83-2.45-4.79,9.8-1.68,6.93-4.82,8.64-7.74,9.5a49.54,49.54,0,0,0-19.28,10.77S170.55,215.25,175,211.88Z"
                                style="fill: rgb(173, 99, 89); transform-origin: 172.224px 191.176px;" id="elh8ryeb0eld"
                                class="animable"></path>
                            <path
                                d="M174.62,163.91l-8,22.53c-.24.67.1,1.2.75,1.2l11.63-.08a1.88,1.88,0,0,0,1.6-1.21l8-22.54c.24-.67-.1-1.2-.75-1.2l-11.63.09A1.85,1.85,0,0,0,174.62,163.91Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 177.61px 175.125px;" id="eljyewxxoswhj"
                                class="animable"></path>
                            <path
                                d="M173.58,164l-8,22.54c-.23.66.1,1.2.75,1.19l11.63-.08a1.87,1.87,0,0,0,1.61-1.21l8-22.54c.24-.66-.09-1.19-.74-1.19l-11.63.08A1.91,1.91,0,0,0,173.58,164Z"
                                style="fill: rgb(55, 71, 79); transform-origin: 176.578px 175.22px;" id="el8uec63e6f5"
                                class="animable"></path>
                            <path
                                d="M173.91,165.09l-7.36,20.66c-.22.64.07,1.14.65,1.14l10.4-.07a1.77,1.77,0,0,0,1.47-1.15L186.43,165c.46-1.29.08-1.57-.5-1.56h-2.08c-.12,0-.27.14-.33.31l0,.08c-.14.4-.36.4-.63.4l-4.82,0c-.27,0-.49,0-.34-.39l0-.08c.06-.17,0-.31-.11-.31l-2.08,0C174.94,163.51,174.33,163.91,173.91,165.09Z"
                                style="fill: rgb(255, 255, 255); transform-origin: 176.556px 175.165px;"
                                id="eln6c4zqtnctb" class="animable"></path>
                            <path
                                d="M180,163.76h1.32a.13.13,0,0,0,.11-.08h0a.06.06,0,0,0-.06-.08H180a.12.12,0,0,0-.11.08h0A.05.05,0,0,0,180,163.76Z"
                                style="fill: rgb(255, 255, 255); transform-origin: 180.655px 163.694px;"
                                id="elrllefsyr62" class="animable"></path>
                            <polygon points="171.41 177.25 180.25 177.19 183.41 168.32 174.57 168.39 171.41 177.25"
                                style="fill: rgb(219, 219, 219); transform-origin: 177.41px 172.785px;"
                                id="elccxotgxmyqo" class="animable"></polygon>
                            <polygon points="174.58 178.68 179.74 178.64 179.92 178.12 174.76 178.16 174.58 178.68"
                                style="fill: rgb(166, 166, 166); transform-origin: 177.25px 178.4px;" id="el7t0q3pxwjvn"
                                class="animable"></polygon>
                            <polygon points="173.32 179.54 179.43 179.5 179.52 179.24 173.42 179.28 173.32 179.54"
                                style="fill: rgb(166, 166, 166); transform-origin: 176.42px 179.39px;" id="eldqxzob5cae"
                                class="animable"></polygon>
                            <polygon points="173.15 180.02 179.26 179.97 179.35 179.72 173.25 179.76 173.15 180.02"
                                style="fill: rgb(166, 166, 166); transform-origin: 176.25px 179.87px;" id="elff115bqo5j"
                                class="animable"></polygon>
                            <polygon points="172.98 180.49 179.09 180.45 179.19 180.19 173.08 180.23 172.98 180.49"
                                style="fill: rgb(166, 166, 166); transform-origin: 176.085px 180.34px;"
                                id="el3kdva43w0ki" class="animable"></polygon>
                            <polygon points="175.46 165.55 176.56 165.54 176.64 165.33 175.54 165.34 175.46 165.55"
                                style="fill: rgb(166, 166, 166); transform-origin: 176.05px 165.44px;"
                                id="el1hko0cc92rv" class="animable"></polygon>
                            <polygon points="175.32 165.95 176.42 165.94 176.5 165.72 175.4 165.73 175.32 165.95"
                                style="fill: rgb(166, 166, 166); transform-origin: 175.91px 165.835px;"
                                id="elrimsedeqbic" class="animable"></polygon>
                            <polygon points="175.18 166.34 176.28 166.33 176.36 166.12 175.26 166.12 175.18 166.34"
                                style="fill: rgb(166, 166, 166); transform-origin: 175.77px 166.23px;" id="eliv2q33ghae"
                                class="animable"></polygon>
                            <path
                                d="M171.05,178.56a.58.58,0,0,0,.19.26,1.45,1.45,0,0,0,.39-.27c.24-.2.31-.49.1-.49s-.3.24-.3.24,0-.24-.12-.23S171,178.35,171.05,178.56Z"
                                style="fill: rgb(117, 193, 255); transform-origin: 171.448px 178.44px;"
                                id="eliy5b2ej2ibs" class="animable"></path>
                            <polygon points="169.57 184.82 176.7 184.77 177.43 182.72 170.3 182.77 169.57 184.82"
                                style="fill: rgb(219, 219, 219); transform-origin: 173.5px 183.77px;" id="elztz2zogaqb"
                                class="animable"></polygon>
                            <path
                                d="M176.45,189.89c-3,1,4.85-8.17,3.92-11.63s-3.91-1.34-5.93,1.42c-7,9.55-14,11.39-16.57,19.24S176.45,189.89,176.45,189.89Z"
                                style="fill: rgb(173, 99, 89); transform-origin: 169.05px 188.731px;" id="el9wqmays3ap"
                                class="animable"></path>
                            <path
                                d="M128.89,207.86c1,.51,2,1.08,3,1.62a16.32,16.32,0,0,0,2.79,1.43,5.09,5.09,0,0,0,3.41-.35c1-.36,1.93-.79,2.86-1.24a92.71,92.71,0,0,0,11-6.41,63.78,63.78,0,0,0,5.82-4.07l-.19.3a15.53,15.53,0,0,1,1.32-3.07,17.59,17.59,0,0,1,2.25-3.16,32.07,32.07,0,0,1,2.94-2.89c.55-.48,1.09-1,1.65-1.4l.84-.68c.25-.2.85-.55,1-.83-.05.12-.22,0-.14-.08l0,0a.07.07,0,0,1,.1,0l.06,0s0,0,0,.07c-.07.18-.27.3-.41.44l-.75.76c-.47.48-.93,1-1.4,1.41-1.06,1.05-2.13,2.11-3.11,3.22a28.33,28.33,0,0,0-2.34,3c-.36.53-.68,1.1-1,1.65a11.22,11.22,0,0,0-.77,1.69c0,.05-3.4,2.68-5.17,4s-3.63,2.5-5.53,3.63-3.82,2.19-5.8,3.16a25.57,25.57,0,0,1-3.09,1.31,5.38,5.38,0,0,1-3,.42,11.88,11.88,0,0,1-2.91-1.62c-1.18-.73-2.36-1.44-3.51-2.2C128.79,207.92,128.83,207.83,128.89,207.86Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 148.202px 199.428px;" id="elp2hmlpy195p"
                                class="animable"></path>
                            <path
                                d="M129,207.28,116.8,222.84s-14.44-13.07-19.42-24.12.73-13.53,12.94-4.67C122.26,202.72,129,207.28,129,207.28Z"
                                style="fill: rgb(55, 71, 79); transform-origin: 112.292px 205.76px;" id="ell1vkhidoso8"
                                class="animable"></path>
                            <path
                                d="M116.21,198.22c2.1,1.34,4.14,2.79,6.15,4.23,1,.71,2,1.42,2.92,2.14l1.53,1.15a12,12,0,0,0,1.73,1.22c.11.06,0,.22-.09.14a23.57,23.57,0,0,0-3.09-2.09c-1.07-.7-2.12-1.42-3.17-2.16-2-1.45-4.1-2.95-6-4.56A0,0,0,0,1,116.21,198.22Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 122.388px 202.671px;" id="eljozjhbl04ke"
                                class="animable"></path>
                            <path
                                d="M102.73,208.8a13.61,13.61,0,0,0,1.79,1.33c.25.15.49.32.73.48-1.2-1.44-2.37-2.91-3.46-4.42,0,0,0-.06,0,0,2.59,2.8,5,5.73,7.62,8.52s5.1,5.86,7.85,8.58a.08.08,0,1,1-.11.11c-2.69-2.77-5.53-5.37-8.08-8.27-1-1.16-2-2.33-3-3.51a5.31,5.31,0,0,1-.81-.52c-.3-.22-.61-.44-.89-.68-.57-.5-1.14-1-1.74-1.45C102.55,208.86,102.66,208.73,102.73,208.8Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 109.544px 214.801px;" id="el897nvdxgdhn"
                                class="animable"></path>
                            <path d="M133.27,208.09l-4.92-2.93L114.42,223l4.28,4.1Z"
                                style="fill: rgb(55, 71, 79); transform-origin: 123.845px 216.13px;" id="elt21f4aqswms"
                                class="animable"></path>
                            <path
                                d="M116.09,220.64c1.7-2.37,3.58-4.62,5.38-6.9s3.79-4.46,5.52-6.81c.06-.09.19,0,.13.1-1.77,2.32-3.36,4.78-5.18,7.06a86.37,86.37,0,0,1-5.71,6.66A.09.09,0,0,1,116.09,220.64Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 121.607px 213.834px;" id="eltlydytgf2t"
                                class="animable"></path>
                            <path
                                d="M121.1,223.94c-.91,1-1.76,2-2.59,3l.35,0c-1.39-1.4-2.83-2.76-4.34-4v.19c.32-.47.64-.94.94-1.42-.4.4-.78.82-1.16,1.25l-.08.09.09.1c1.34,1.45,2.76,2.83,4.21,4.17l.2.18.16-.21C119.65,226.15,120.41,225.07,121.1,223.94Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 117.66px 224.605px;" id="elajk62y22zp9"
                                class="animable"></path>
                            <path
                                d="M114.06,193.91c-3.25-.15-10.48-5-12.12-9.2-.11-.28.66-3,1.43-6.44.45-2.06.92-4.37,1.18-6.51.06-.44,1.45.56,1.45.56l2.68,1,8.87,3.38a34.43,34.43,0,0,0-2.33,8,5.34,5.34,0,0,0,0,.89S114.06,193.91,114.06,193.91Z"
                                style="fill: rgb(173, 99, 89); transform-origin: 109.74px 182.779px;" id="elncsngpaecmf"
                                class="animable"></path>
                            <path
                                d="M115.2,185.64a.74.74,0,0,1,0,.15,8.7,8.7,0,0,1-1.38-.11c-9-1.33-8.69-13-8.69-13l3.55.6,8.87,3.38a34.43,34.43,0,0,0-2.33,8A5.34,5.34,0,0,0,115.2,185.64Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 111.339px 179.235px;" id="elpxy7uj2pwnr"
                                class="animable"></path>
                            <path
                                d="M105,156.89c-1.92,4.62-.74,18.64,2.35,22,4.48,4.93,12.49,6.14,16.85.6,4.22-5.38,2.36-23.62-1.16-26.78C117.9,148.1,107.87,150.05,105,156.89Z"
                                style="fill: rgb(173, 99, 89); transform-origin: 115.349px 166.674px;" id="elk6xjw30bw4"
                                class="animable"></path>
                            <path d="M107.06,178.76h0"
                                style="fill: none; stroke: rgb(246, 168, 159); stroke-linecap: round; stroke-linejoin: round; stroke-width: 0px; transform-origin: 107.06px 178.76px;"
                                id="el947qgcjg2n8" class="animable"></path>
                            <path
                                d="M117.29,167.11s-.07,0-.06.09c.1.94.06,2-.77,2.42,0,0,0,.06,0,0C117.5,169.44,117.54,168,117.29,167.11Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 116.939px 168.378px;" id="ele6zg96k74vb"
                                class="animable"></path>
                            <path d="M116.37,166.19c-1.53,0-1.41,3.06,0,3.06S117.65,166.19,116.37,166.19Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 116.323px 167.72px;" id="el9q9vojrl2v"
                                class="animable"></path>
                            <path
                                d="M123.09,166.75s.08,0,.08.08c0,.95.18,2,1,2.32a0,0,0,0,1,0,0C123.16,169.09,123,167.65,123.09,166.75Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 123.619px 167.95px;" id="elk71go716uh"
                                class="animable"></path>
                            <path d="M123.9,165.73c1.52-.18,1.76,2.87.35,3S122.63,165.88,123.9,165.73Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 124.122px 167.228px;" id="elre8f0g7ti3"
                                class="animable"></path>
                            <path
                                d="M115.11,164.84a11.66,11.66,0,0,0,1.16-.46,2,2,0,0,0,1.1-.7.65.65,0,0,0-.13-.78,1.59,1.59,0,0,0-1.62-.1,2.34,2.34,0,0,0-1.32,1.07A.69.69,0,0,0,115.11,164.84Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 115.837px 163.746px;" id="el218n3xxtydu"
                                class="animable"></path>
                            <path
                                d="M125,164.14c-.43,0-.81-.17-1.23-.26a2.1,2.1,0,0,1-1.2-.51.65.65,0,0,1,0-.79,1.61,1.61,0,0,1,1.58-.37,2.39,2.39,0,0,1,1.48.84A.69.69,0,0,1,125,164.14Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 124.098px 163.141px;" id="elu38ct6vfuh"
                                class="animable"></path>
                            <path
                                d="M116.83,175.62c.23.21.47.51.82.53a2.5,2.5,0,0,0,1-.28,0,0,0,0,1,0,0,1.27,1.27,0,0,1-1.18.57,1,1,0,0,1-.78-.81C116.72,175.61,116.79,175.59,116.83,175.62Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 117.67px 176.025px;" id="el1enmt5fgjk3"
                                class="animable"></path>
                            <path
                                d="M117.71,172.75a3.23,3.23,0,0,0,2.21,1.35,4.1,4.1,0,0,0,1.16,0,.78.78,0,0,0,.22,0l.21,0a.25.25,0,0,0,.18-.22h0s0-.06,0-.1h0v-.09c0-.72-.13-1.83-.13-1.83.28.12,1.66.68,1.62.3a48.09,48.09,0,0,0-1.64-9.71c0-.1-.19-.07-.17,0,.18,3,.9,6,1.13,9.07a5.7,5.7,0,0,0-1.54-.41c-.1,0,.26,2.14.24,2.47v0a4.48,4.48,0,0,1-3.38-.9C117.72,172.61,117.65,172.67,117.71,172.75Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 120.434px 168.263px;" id="elfco975fr3ot"
                                class="animable"></path>
                            <path
                                d="M123.87,156.89c-4.35,3.63-11.17-.59-11.17-.59a5.1,5.1,0,0,1-4.84,3.69s-.16,8-2.24,8.15c-3.17.28-5.16-10.37-4.37-12.58a5.66,5.66,0,0,1,3.43-3,5.24,5.24,0,0,1,1.86-3.34c2-1.86,9.67-.34,9.67-.34a6.92,6.92,0,0,1,1.67-2.76,2,2,0,0,1,2.84,0,4.74,4.74,0,0,0-.57,2c-.16,2.34,1.73,2.16,1.51.07a3.3,3.3,0,0,0-.94-2.09c.8-1.45,2.28-2,3.27-1.4C125.79,145.88,127.49,153.87,123.87,156.89Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 113.54px 156.303px;" id="elzr7zoso5xgl"
                                class="animable"></path>
                            <path d="M106.89,168.4s-2.78-4.7-4.89-3.75-.26,7.61,2,8.68a2.43,2.43,0,0,0,3.34-1.06Z"
                                style="fill: rgb(173, 99, 89); transform-origin: 104.207px 169.074px;"
                                id="elys2s2pdhmpm" class="animable"></path>
                            <path
                                d="M102.58,166.55s0,0,0,.06a6.09,6.09,0,0,1,2.87,4.06,1.34,1.34,0,0,0-2-.51s0,.09,0,.09a1.48,1.48,0,0,1,1.59.64,6.89,6.89,0,0,1,.68,1.39c.07.15.35.09.3-.08v0C106.27,170,104.84,166.93,102.58,166.55Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 104.314px 169.458px;" id="el7cxhwjxexcr"
                                class="animable"></path>
                        </g>
                        <g id="freepik--speech-bubbles--inject-154" class="animable"
                            style="transform-origin: 250.24px 263.482px;">
                            <path
                                d="M256.23,225a12.12,12.12,0,0,1-2.08-6.7c0-8.5,9.33-15.39,20.84-15.39s20.82,6.89,20.82,15.39-9.32,15.38-20.82,15.38a24.93,24.93,0,0,1-14.37-4.26l-7.18,1.83Z"
                                style="fill: rgb(117, 193, 255); transform-origin: 274.625px 218.297px;"
                                id="elfsdjy9yjmsu" class="animable"></path>
                            <path d="M282.48,218.29a2.16,2.16,0,1,0,2.16-2.16A2.15,2.15,0,0,0,282.48,218.29Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 284.64px 218.29px;" id="elu473bd92o0o"
                                class="animable"></path>
                            <path d="M272.82,218.29a2.16,2.16,0,1,0,2.16-2.16A2.16,2.16,0,0,0,272.82,218.29Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 274.98px 218.29px;" id="el0tpu60lfvkac"
                                class="animable"></path>
                            <path d="M263.17,218.29a2.16,2.16,0,1,0,2.16-2.16A2.16,2.16,0,0,0,263.17,218.29Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 265.33px 218.29px;" id="el09c27jiagvfk"
                                class="animable"></path>
                            <path
                                d="M418.43,278.71a12.12,12.12,0,0,1-2.08-6.7c0-8.5,9.33-15.39,20.83-15.39S458,263.51,458,272s-9.32,15.38-20.83,15.38a25,25,0,0,1-14.37-4.25L415.64,285Z"
                                style="fill: rgb(117, 193, 255); transform-origin: 436.82px 272.002px;"
                                id="elpqb0jpoi88" class="animable"></path>
                            <path d="M444.67,272a2.16,2.16,0,1,0,2.16-2.16A2.16,2.16,0,0,0,444.67,272Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 446.83px 272px;" id="elt9kppzd8oas"
                                class="animable"></path>
                            <path d="M435,272a2.16,2.16,0,1,0,2.16-2.16A2.16,2.16,0,0,0,435,272Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 437.16px 272px;" id="el6y8n2ey0mzj"
                                class="animable"></path>
                            <path d="M425.37,272a2.16,2.16,0,1,0,2.16-2.16A2.16,2.16,0,0,0,425.37,272Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 427.53px 272px;" id="el85h8v22xyzn"
                                class="animable"></path>
                            <path
                                d="M82.06,315.37a12.15,12.15,0,0,0,2.08-6.71c0-8.5-9.33-15.38-20.83-15.38s-20.83,6.88-20.83,15.38,9.33,15.39,20.83,15.39a25,25,0,0,0,14.37-4.26l7.17,1.82Z"
                                style="fill: rgb(117, 193, 255); transform-origin: 63.665px 308.667px;"
                                id="eltjnmy4c1zc" class="animable"></path>
                            <path d="M55.82,308.66a2.16,2.16,0,1,1-2.16-2.16A2.16,2.16,0,0,1,55.82,308.66Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 53.66px 308.66px;" id="elnuy6lp4dw9"
                                class="animable"></path>
                            <path d="M65.47,308.66a2.16,2.16,0,1,1-2.16-2.16A2.16,2.16,0,0,1,65.47,308.66Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 63.31px 308.66px;" id="elzs8ictnq07g"
                                class="animable"></path>
                            <path d="M75.12,308.66A2.16,2.16,0,1,1,73,306.5,2.16,2.16,0,0,1,75.12,308.66Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 72.96px 308.66px;" id="els0grte4ssm"
                                class="animable"></path>
                        </g>
                        <defs>
                            <filter id="active" height="200%">
                                <feMorphology in="SourceAlpha" result="DILATED" operator="dilate" radius="2">
                                </feMorphology>
                                <feFlood flood-color="#32DFEC" flood-opacity="1" result="PINK"></feFlood>
                                <feComposite in="PINK" in2="DILATED" operator="in" result="OUTLINE"></feComposite>
                                <feMerge>
                                    <feMergeNode in="OUTLINE"></feMergeNode>
                                    <feMergeNode in="SourceGraphic"></feMergeNode>
                                </feMerge>
                            </filter>
                            <filter id="hover" height="200%">
                                <feMorphology in="SourceAlpha" result="DILATED" operator="dilate" radius="2">
                                </feMorphology>
                                <feFlood flood-color="#ff0000" flood-opacity="0.5" result="PINK"></feFlood>
                                <feComposite in="PINK" in2="DILATED" operator="in" result="OUTLINE"></feComposite>
                                <feMerge>
                                    <feMergeNode in="OUTLINE"></feMergeNode>
                                    <feMergeNode in="SourceGraphic"></feMergeNode>
                                </feMerge>
                                <feColorMatrix type="matrix"
                                    values="0   0   0   0   0                0   1   0   0   0                0   0   0   0   0                0   0   0   1   0 ">
                                </feColorMatrix>
                            </filter>
                        </defs>
                    </svg>


                </div>
                <div class="col-lg-6" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
                    <h2 class="section-title text-start">About Disting Disting</h2>
                    <p class="lead">We're revolutionizing the way people connect and communicate in the digital age. Our
                        platform combines cutting-edge AI technology with intuitive design to create meaningful
                        conversations.</p>
                    <p>Built with modern web technologies and powered by advanced machine learning, Disting Disting
                        offers real-time messaging, smart suggestions, and seamless cross-platform synchronization.
                        Whether you're chatting with friends, collaborating with colleagues, or meeting new people, our
                        platform adapts to your communication style.</p>
                    <div class="row mt-4">
                        <div class="col-sm-6">
                            <h5><i class="bi bi-shield-check text-primary me-2"></i>Secure & Private</h5>
                            <p>End-to-end encryption ensures your conversations stay private.</p>
                        </div>
                        <div class="col-sm-6">
                            <h5><i class="bi bi-lightning-charge text-primary me-2"></i>Lightning Fast</h5>
                            <p>Real-time messaging with zero lag across all devices.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="section bg-light">
        <div class="container">
            <h2 class="section-title" data-aos="fade-up">Powerful Features</h2>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="bi bi-lightning-charge"></i>
                        </div>
                        <h4>Instant Connection</h4>
                        <p>Jump into conversations immediately - no lengthy signups or waiting times required.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="bi bi-incognito"></i>
                        </div>
                        <h4>Complete Privacy</h4>
                        <p>Chat anonymously without sharing personal details, emails, or phone numbers.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="bi bi-globe"></i>
                        </div>
                        <h4>Global Reach</h4>
                        <p>Connect with fascinating people from every corner of the world, 24/7.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="bi bi-shield-check"></i>
                        </div>
                        <h4>Safe & Secure</h4>
                        <p>Advanced encryption keeps your conversations private and protected.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="bi bi-chat-dots"></i>
                        </div>
                        <h4>Smart Matching</h4>
                        <p>Our algorithm pairs you with compatible strangers for meaningful exchanges.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="bi bi-tablet"></i>
                        </div>
                        <h4> Any Device</h4>
                        <p>Seamlessly chat across desktop, mobile, and tablet - wherever you are.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Live Stats Section -->
    <section id="stats" class="section">
        <div class="container">
            <h2 class="section-title" data-aos="fade-up">Live Statistics</h2>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="stat-card">
                        <div class="stat-number" data-target="1250000">0</div>
                        <h5>Active Users</h5>
                        <p class="text-muted">Growing every minute</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="stat-card">
                        <div class="stat-number" data-target="50000000">0</div>
                        <h5>Messages Sent</h5>
                        <p class="text-muted">Daily conversations</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="stat-card">
                        <div class="stat-number" data-target="180">0</div>
                        <h5>Countries</h5>
                        <p class="text-muted">Global reach</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="stat-card">
                        <div class="stat-number" data-target="99">0</div>
                        <h5>Uptime %</h5>
                        <p class="text-muted">Reliable service</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="section bg-light">
        <div class="container">
            <h2 class="section-title" data-aos="fade-up">What Users Say</h2>
            <div class="row g-4">
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="testimonial-card">
                        <div class="testimonial-avatar">S</div>
                        <h5>Sarah Johnson</h5>
                        <p class="text-muted mb-2">Product Manager</p>
                        <p>"Disting Disting has completely transformed how our team communicates. The AI features are
                            incredible and save us so much time!"</p>
                        <div class="text-warning">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="testimonial-card">
                        <div class="testimonial-avatar">M</div>
                        <h5>Mike Chen</h5>
                        <p class="text-muted mb-2">Software Developer</p>
                        <p>"The best chat platform I've ever used. Clean interface, powerful features, and absolutely
                            reliable. Highly recommended!"</p>
                        <div class="text-warning">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="testimonial-card">
                        <div class="testimonial-avatar">E</div>
                        <h5>Emily Rodriguez</h5>
                        <p class="text-muted mb-2">Creative Director</p>
                        <p>"Love the design and user experience. It's intuitive, beautiful, and makes staying connected
                            with my team effortless."</p>
                        <div class="text-warning">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="section">
        <div class="container">
            <h2 class="section-title" data-aos="fade-up">Get In Touch</h2>
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1000">
                    <!-- Contact SVG Illustration -->

                    <svg class="animated" id="freepik_stories-get-in-touch" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 500 500" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                        xmlns:svgjs="http://svgjs.com/svgjs">
                        <g id="freepik--Floor--inject-61" class="animable animator-hidden"
                            style="transform-origin: 251.72px 350.29px;">
                            <ellipse id="freepik--floor--inject-61" cx="251.72" cy="350.29" rx="235.28" ry="124.1"
                                style="fill: rgb(245, 245, 245); transform-origin: 251.72px 350.29px;" class="animable">
                            </ellipse>
                        </g>
                        <g id="freepik--Shadows--inject-61" class="animable animator-hidden"
                            style="transform-origin: 263.702px 363.431px;">
                            <path id="freepik--Shadow--inject-61"
                                d="M400.74,309.58c-16.3,9.41-16.3,24.66,0,34.07s42.71,9.41,59,0,16.29-24.66,0-34.07S417,300.17,400.74,309.58Z"
                                style="fill: rgb(230, 230, 230); transform-origin: 430.236px 326.615px;"
                                class="animable"></path>
                            <ellipse id="freepik--shadow--inject-61" cx="366.08" cy="381.84" rx="64.58" ry="37.28"
                                style="fill: rgb(224, 224, 224); transform-origin: 366.08px 381.84px;" class="animable">
                            </ellipse>
                            <path id="freepik--shadow--inject-61"
                                d="M57,411.58l6.6,3.81a8.35,8.35,0,0,0,7.54,0l145.52-84c2.08-1.2,2.08-3.15,0-4.35l-6.61-3.81a8.26,8.26,0,0,0-7.53,0L57,407.23C54.93,408.43,54.93,410.38,57,411.58Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 136.834px 369.306px;"
                                class="animable"></path>
                            <path id="freepik--shadow--inject-61"
                                d="M94,419.63l6.6,3.81a8.35,8.35,0,0,0,7.54,0L232.33,352c2.08-1.2,2.08-3.15,0-4.35l-6.6-3.82a8.35,8.35,0,0,0-7.54,0L94,415.28C91.94,416.48,91.94,418.43,94,419.63Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 163.173px 383.635px;"
                                class="animable"></path>
                        </g>
                        <g id="freepik--Pictures--inject-61" class="animable animator-hidden"
                            style="transform-origin: 435.715px 111.09px;">
                            <g id="freepik--Picture--inject-61" class="animable"
                                style="transform-origin: 435.715px 82.655px;">
                                <g id="freepik--Frame--inject-61" class="animable"
                                    style="transform-origin: 435.715px 82.655px;">
                                    <polygon
                                        points="454.46 111.28 452.71 112.32 416.95 91.68 418.69 90.64 454.46 111.28"
                                        style="fill: rgb(250, 250, 250); transform-origin: 435.705px 101.48px;"
                                        id="elnxv8zsid8q" class="animable"></polygon>
                                    <polygon points="418.69 90.64 452.71 110.27 452.71 74.65 418.69 55.02 418.69 90.64"
                                        style="fill: rgb(255, 255, 255); transform-origin: 435.7px 82.645px;"
                                        id="elsw4fnqqnkzk" class="animable"></polygon>
                                    <path
                                        d="M413.66,93.57,456,118V72.75L413.66,48.31ZM417,54l35.76,20.65v37.67L417,91.68Z"
                                        style="fill: rgb(240, 240, 240); transform-origin: 434.83px 83.155px;"
                                        id="elhevm5btl0jr" class="animable"></path>
                                    <polygon points="416.95 91.68 418.69 90.64 418.69 55.02 416.95 54 416.95 91.68"
                                        style="fill: rgb(224, 224, 224); transform-origin: 417.82px 72.84px;"
                                        id="el00yucv7cxipff" class="animable"></polygon>
                                    <polygon points="413.66 48.3 415.43 47.29 457.77 71.74 456 72.75 413.66 48.3"
                                        style="fill: rgb(250, 250, 250); transform-origin: 435.715px 60.02px;"
                                        id="elpmxm8m3aqn8" class="animable"></polygon>
                                    <polygon points="457.77 71.74 456 72.75 456 118.02 457.77 117.01 457.77 71.74"
                                        style="fill: rgb(224, 224, 224); transform-origin: 456.885px 94.88px;"
                                        id="el46w23f7i0d6" class="animable"></polygon>
                                </g>
                                <g id="freepik--Land--inject-61" class="animable"
                                    style="transform-origin: 435.705px 88.575px;">
                                    <polygon
                                        points="420.02 89.57 451.39 107.68 451.39 98.63 443.54 80.52 438.66 85.05 440.42 92.64 429.59 69.47 420.02 80.52 420.02 89.57"
                                        style="fill: rgb(240, 240, 240); transform-origin: 435.705px 88.575px;"
                                        id="elzyr0ft5ajkc" class="animable"></polygon>
                                    <path
                                        d="M439,71.78a5.07,5.07,0,0,1,2.32,4c0,1.48-1,2.08-2.32,1.34a5.12,5.12,0,0,1-2.31-4C436.64,71.64,437.67,71,439,71.78Z"
                                        style="fill: rgb(240, 240, 240); transform-origin: 439.004px 74.4412px;"
                                        id="el1dc9wnsdm" class="animable"></path>
                                </g>
                            </g>
                            <g id="freepik--picture--inject-61" class="animable"
                                style="transform-origin: 435.715px 139.525px;">
                                <g id="freepik--frame--inject-61" class="animable"
                                    style="transform-origin: 435.715px 139.525px;">
                                    <polygon
                                        points="454.46 168.16 452.71 169.2 416.95 148.55 418.69 147.51 454.46 168.16"
                                        style="fill: rgb(250, 250, 250); transform-origin: 435.705px 158.355px;"
                                        id="elueghfpj7fuf" class="animable"></polygon>
                                    <polygon
                                        points="418.69 147.51 452.71 167.15 452.71 131.52 418.69 111.9 418.69 147.51"
                                        style="fill: rgb(255, 255, 255); transform-origin: 435.7px 139.525px;"
                                        id="elmkjpt8tt9t" class="animable"></polygon>
                                    <path
                                        d="M413.66,150.45,456,174.89V129.62l-42.34-24.44ZM417,110.87l35.76,20.65V169.2L417,148.55Z"
                                        style="fill: rgb(240, 240, 240); transform-origin: 434.83px 140.035px;"
                                        id="elb53dj7hhmbb" class="animable"></path>
                                    <polygon
                                        points="416.95 148.55 418.69 147.51 418.69 111.9 416.95 110.87 416.95 148.55"
                                        style="fill: rgb(224, 224, 224); transform-origin: 417.82px 129.71px;"
                                        id="el4pkgtosewu9" class="animable"></polygon>
                                    <polygon points="413.66 105.18 415.43 104.16 457.77 128.61 456 129.62 413.66 105.18"
                                        style="fill: rgb(250, 250, 250); transform-origin: 435.715px 116.89px;"
                                        id="elp6l85s9ys" class="animable"></polygon>
                                    <polygon points="457.77 128.61 456 129.62 456 174.89 457.77 173.88 457.77 128.61"
                                        style="fill: rgb(224, 224, 224); transform-origin: 456.885px 151.75px;"
                                        id="elde8tvdyqsep" class="animable"></polygon>
                                </g>
                                <g id="freepik--land--inject-61" class="animable"
                                    style="transform-origin: 435.705px 145.45px;">
                                    <polygon
                                        points="420.02 146.44 451.39 164.55 451.39 155.5 443.54 137.39 438.66 141.92 440.42 149.51 429.59 126.35 420.02 137.39 420.02 146.44"
                                        style="fill: rgb(240, 240, 240); transform-origin: 435.705px 145.45px;"
                                        id="elm0xq59xh8g" class="animable"></polygon>
                                    <path
                                        d="M439,128.65a5.1,5.1,0,0,1,2.32,4c0,1.48-1,2.08-2.32,1.34a5.11,5.11,0,0,1-2.31-4C436.64,128.51,437.67,127.91,439,128.65Z"
                                        style="fill: rgb(240, 240, 240); transform-origin: 439.004px 131.32px;"
                                        id="elg8hcw47z42p" class="animable"></path>
                                </g>
                            </g>
                        </g>
                        <g id="freepik--Plants--inject-61" class="animable"
                            style="transform-origin: 48.4203px 359.772px;">
                            <g id="freepik--plants--inject-61" class="animable"
                                style="transform-origin: 48.4203px 359.772px;">
                                <path
                                    d="M66.6,400.74c2.47-13.73,3.63-28.95-1-50.35-3.88-18-13.64-33.45-24.88-35.49-4.56-.83-9.24,1.82-10.4,4.6-3.18,7.65,2.66,14.62,5.38,18.1,2,2.6,20.87,21.08,22.45,49.2l.94,16.82c.14.87.9,1.31,1.5.87Z"
                                    style="fill: rgb(110, 101, 198); transform-origin: 49.0799px 359.704px;"
                                    id="el1q6auzo2phoi" class="animable"></path>
                                <g id="el9h2yezwb6po">
                                    <path
                                        d="M66.6,400.74c2.47-13.73,3.63-28.95-1-50.35-3.88-18-13.64-33.45-24.88-35.49-4.56-.83-9.24,1.82-10.4,4.6-3.18,7.65,2.66,14.62,5.38,18.1,2,2.6,20.87,21.08,22.45,49.2l.94,16.82c.14.87.9,1.31,1.5.87Z"
                                        style="fill: rgb(255, 255, 255); opacity: 0.3; transform-origin: 49.0799px 359.704px;"
                                        class="animable"></path>
                                </g>
                                <path
                                    d="M63.51,394.42a.66.66,0,0,1-.35-.64c.67-35.82-9.84-58.21-25-70.87A.76.76,0,0,1,38,322a.43.43,0,0,1,.69-.19c15.37,12.81,26.16,35.7,25.47,72a.58.58,0,0,1-.51.64Z"
                                    style="fill: rgb(255, 255, 255); transform-origin: 51.0528px 358.077px;"
                                    id="elci3hqkw62r7" class="animable"></path>
                                <path
                                    d="M60.59,404.49c-1.68,1.19-2.6-1.26-3.44-4.07-2.69-9.06-5.65-13.84-10.7-20.2-6.23-7.83-17-15.06-18.22-21.54-1.08-5.88,3.65-10.41,12.07-7.27,10.11,3.78,23.77,16,23.31,51.19Z"
                                    style="fill: rgb(110, 101, 198); transform-origin: 45.8495px 377.591px;"
                                    id="elalh5vmplugb" class="animable"></path>
                                <path
                                    d="M61.31,400a.64.64,0,0,1-.4-.51c-4.77-27.15-19.84-40.62-26.81-43.29a.72.72,0,0,1-.37-.81c.07-.34.33-.54.61-.43,7.72,2.94,22.68,16.58,27.56,44.3a.63.63,0,0,1-.38.75A.3.3,0,0,1,61.31,400Z"
                                    style="fill: rgb(255, 255, 255); transform-origin: 47.8155px 377.477px;"
                                    id="el8mhrw6u8sbv" class="animable"></path>
                            </g>
                        </g>
                        <g id="freepik--Table--inject-61" class="animable"
                            style="transform-origin: 430.072px 284.593px;">
                            <g id="freepik--table--inject-61" class="animable"
                                style="transform-origin: 430.072px 284.593px;">
                                <g id="freepik--table--inject-61" class="animable"
                                    style="transform-origin: 430.072px 290.996px;">
                                    <path
                                        d="M400.45,280.62a1.07,1.07,0,0,1,.63-.87,3.35,3.35,0,0,1,3,0,1.07,1.07,0,0,1,.62.87l-7.6,44.87h0a.76.76,0,0,1-.44.6,2.35,2.35,0,0,1-2.13,0,.74.74,0,0,1-.44-.6h0Z"
                                        style="fill: rgb(69, 90, 100); transform-origin: 399.395px 302.87px;"
                                        id="el9mn0xkde188" class="animable"></path>
                                    <path
                                        d="M459.06,280.62a1.07,1.07,0,0,0-.63-.87,3.33,3.33,0,0,0-3,0,1.07,1.07,0,0,0-.63.87l7.6,44.87h0a.76.76,0,0,0,.44.6,2.37,2.37,0,0,0,2.14,0,.78.78,0,0,0,.44-.6h0Z"
                                        style="fill: rgb(69, 90, 100); transform-origin: 460.11px 302.869px;"
                                        id="elv39ne6vn3tc" class="animable"></path>
                                    <path
                                        d="M432.15,284a1.07,1.07,0,0,0-.63-.87,3.33,3.33,0,0,0-3,0,1.07,1.07,0,0,0-.63.87l.63,53.38h0a.76.76,0,0,0,.44.6,2.35,2.35,0,0,0,2.13,0,.74.74,0,0,0,.44-.6h0Z"
                                        style="fill: rgb(69, 90, 100); transform-origin: 430.02px 310.504px;"
                                        id="eleylzw57tm1i" class="animable"></path>
                                    <path
                                        d="M468.27,265.84h0c0-5.65-3.7-11.3-11.17-15.61-14.93-8.63-39.16-8.63-54.09,0-7.47,4.31-11.18,10-11.17,15.61h0v3h0c.09,5.58,3.83,11.14,11.21,15.4,14.94,8.62,39.16,8.62,54.09,0,7.38-4.26,11.12-9.82,11.21-15.4h0Z"
                                        style="fill: rgb(110, 101, 198); transform-origin: 430.095px 267.231px;"
                                        id="elm4xw57qqh7c" class="animable"></path>
                                    <g id="elngikpt6cnz">
                                        <path
                                            d="M468.27,265.84h0c0-5.65-3.7-11.3-11.17-15.61-14.93-8.63-39.16-8.63-54.09,0-7.47,4.31-11.18,10-11.17,15.61h0v3h0c.09,5.58,3.83,11.14,11.21,15.4,14.94,8.62,39.16,8.62,54.09,0,7.38-4.26,11.12-9.82,11.21-15.4h0Z"
                                            style="fill: rgb(255, 255, 255); opacity: 0.4; transform-origin: 430.095px 267.231px;"
                                            class="animable"></path>
                                    </g>
                                    <path
                                        d="M403,250.23c-14.94,8.62-14.94,22.61,0,31.23s39.16,8.63,54.09,0,14.94-22.61,0-31.23S417.9,241.6,403,250.23Z"
                                        style="fill: rgb(110, 101, 198); transform-origin: 430.043px 265.845px;"
                                        id="elazlsrcld78" class="animable"></path>
                                    <g id="ele8fc4zgad4">
                                        <path
                                            d="M403,250.23c-14.94,8.62-14.94,22.61,0,31.23s39.16,8.63,54.09,0,14.94-22.61,0-31.23S417.9,241.6,403,250.23Z"
                                            style="fill: rgb(255, 255, 255); opacity: 0.6; transform-origin: 430.043px 265.845px;"
                                            class="animable"></path>
                                    </g>
                                </g>
                                <g id="freepik--Pot--inject-61" class="animable"
                                    style="transform-origin: 429.924px 250.789px;">
                                    <g id="elgverjhfp0yh">
                                        <g style="opacity: 0.05; transform-origin: 429.773px 263.55px;"
                                            class="animable">
                                            <path
                                                d="M438.4,258.55c4.76,2.75,4.76,7.21,0,10s-12.49,2.75-17.25,0-4.77-7.21,0-10S433.63,255.8,438.4,258.55Z"
                                                id="el0audgp28scjk" class="animable"
                                                style="transform-origin: 429.773px 263.55px;"></path>
                                        </g>
                                    </g>
                                    <path
                                        d="M422.18,264.14c-4.15-4.23-6.59-14.81-2.54-18.16h20.59c4,3.35,1.61,13.92-2.53,18.16l-.12.11a.93.93,0,0,1-.14.14l-.37.34-.1.08-.32.23a4.41,4.41,0,0,1-.53.35,13.68,13.68,0,0,1-12.37,0h0c-.18-.11-.36-.22-.54-.35l-.29-.22-.12-.1a3.73,3.73,0,0,1-.36-.32l-.17-.16Z"
                                        style="fill: rgb(235, 235, 235); transform-origin: 429.924px 256.424px;"
                                        id="el8kgeja46uaq" class="animable"></path>
                                    <path
                                        d="M438.44,244.62c4.7,2.72,4.7,7.12,0,9.83s-12.31,2.71-17,0-4.7-7.11,0-9.83S433.75,241.91,438.44,244.62Z"
                                        style="fill: rgb(250, 250, 250); transform-origin: 429.942px 249.533px;"
                                        id="elmgjtenx7nym" class="animable"></path>
                                    <path
                                        d="M435.11,246.55c2.86,1.65,2.86,4.32,0,6a11.44,11.44,0,0,1-10.35,0c-2.86-1.65-2.86-4.32,0-6A11.44,11.44,0,0,1,435.11,246.55Z"
                                        style="fill: rgb(235, 235, 235); transform-origin: 429.935px 249.55px;"
                                        id="elup3i8vx45ds" class="animable"></path>
                                    <path
                                        d="M424.76,249.38a11.44,11.44,0,0,1,10.35,0,4.7,4.7,0,0,1,1.71,1.57,4.54,4.54,0,0,1-1.71,1.57,11.44,11.44,0,0,1-10.35,0,4.54,4.54,0,0,1-1.71-1.57A4.7,4.7,0,0,1,424.76,249.38Z"
                                        style="fill: rgb(224, 224, 224); transform-origin: 429.935px 250.95px;"
                                        id="elnok3slqqh7" class="animable"></path>
                                    <path
                                        d="M434.48,251a23.48,23.48,0,0,0,3.75-5c1.73-3.06,2-7.16,1.15-7.66s-4.53,3.58-4.53,3.58a22.45,22.45,0,0,0,.38-5.22c-.15-2.73-.82-5.2-1.6-5.7s-2.52,2.94-3.27,5.43-1.19,4.53-1.19,4.53a39.33,39.33,0,0,0-1.35-5.73c-.9-2.58-1.73-3.17-2.37-2.91s-1.06,1.46-1.24,4.9a34.61,34.61,0,0,0,.15,4.93s-1.28-1.41-2.71-2.78-2.23-1.71-2.68-1.42-.57,2.62,1.86,7a24.2,24.2,0,0,0,4.57,6S428.75,253.12,434.48,251Z"
                                        style="fill: rgb(110, 101, 198); transform-origin: 429.279px 241.44px;"
                                        id="el9oygx9dkfid" class="animable"></path>
                                </g>
                            </g>
                        </g>
                        <g id="freepik--Device--inject-61" class="animable"
                            style="transform-origin: 129.42px 219.41px;">
                            <g id="freepik--Mobile--inject-61" class="animable"
                                style="transform-origin: 129.42px 219.41px;">
                                <path
                                    d="M184.56,31.76,62.36,102.32a12.32,12.32,0,0,0-6.15,10.2V396.64c0,4.18,2.58,9.06,5.76,10.9s8.7,1.63,12.32-.46l121.78-70.31a14.55,14.55,0,0,0,6.55-11.35V42.19c0-4.18-2.58-9-5.76-10.89S188.17,29.67,184.56,31.76Z"
                                    style="fill: rgb(110, 101, 198); transform-origin: 129.415px 219.41px;"
                                    id="el4rgfkzugd18" class="animable"></path>
                                <g id="el56szpka41cr">
                                    <path
                                        d="M184.56,31.76,62.36,102.32a12.32,12.32,0,0,0-6.15,10.2V396.64c0,4.18,2.58,9.06,5.76,10.9s8.7,1.63,12.32-.46l121.78-70.31a14.55,14.55,0,0,0,6.55-11.35V42.19c0-4.18-2.58-9-5.76-10.89S188.17,29.67,184.56,31.76Z"
                                        style="opacity: 0.05; transform-origin: 129.415px 219.41px;" class="animable">
                                    </path>
                                </g>
                                <path
                                    d="M72.72,407.83c-3.5,1.36-8,1.29-10.74-.29-3.18-1.84-5.76-6.72-5.76-10.9V112.52a11.76,11.76,0,0,1,1.66-5.62l10.57,6a12.76,12.76,0,0,0-3,7.63V402C65.39,407,68.57,409.37,72.72,407.83Z"
                                    style="fill: rgb(110, 101, 198); transform-origin: 64.47px 257.846px;"
                                    id="el5444cngrvgm" class="animable"></path>
                                <g id="elbvn65xxpoes">
                                    <path
                                        d="M72.72,407.83c-3.5,1.36-8,1.29-10.74-.29-3.18-1.84-5.76-6.72-5.76-10.9V112.52a11.76,11.76,0,0,1,1.66-5.62l10.57,6a12.76,12.76,0,0,0-3,7.63V402C65.39,407,68.57,409.37,72.72,407.83Z"
                                        style="opacity: 0.3; transform-origin: 64.47px 257.846px;" class="animable">
                                    </path>
                                </g>
                                <path
                                    d="M71.17,110.53a12.81,12.81,0,0,0-5.78,10V402c0,5.64,4,8,8.89,5.13l121.8-70.32a14.55,14.55,0,0,0,6.55-11.35V42.19c0-4.16-2.95-5.86-6.55-3.78Z"
                                    style="fill: rgb(110, 101, 198); transform-origin: 134.01px 222.938px;"
                                    id="elwoqvehx939" class="animable"></path>
                                <g id="elwe8wentca6e">
                                    <path
                                        d="M71.17,110.53a12.81,12.81,0,0,0-5.78,10V402c0,5.64,4,8,8.89,5.13l121.8-70.32a14.55,14.55,0,0,0,6.55-11.35V42.19c0-4.16-2.95-5.86-6.55-3.78Z"
                                        style="opacity: 0.15; transform-origin: 134.01px 222.938px;" class="animable">
                                    </path>
                                </g>
                                <path
                                    d="M75.66,127.46a13.77,13.77,0,0,0-6.23,10.79V390.87c0,4,2.79,5.58,6.23,3.59L190.72,328a13.82,13.82,0,0,0,6.22-10.79V64.62c0-4-2.8-5.57-6.23-3.59Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 133.185px 227.747px;"
                                    id="elpp7h5a9j4tp" class="animable"></path>
                                <path
                                    d="M187.42,310.33V62.93L75.66,127.46a13.78,13.78,0,0,0-6.23,10.79v247.4l111.76-64.54A13.79,13.79,0,0,0,187.42,310.33Z"
                                    style="fill: rgb(55, 71, 79); transform-origin: 128.425px 224.29px;"
                                    id="elzjcl72d2phq" class="animable"></path>
                                <path
                                    d="M123.71,88.18l19-10.94c1.13-.65,2.05-.19,2.05,1a4.38,4.38,0,0,1-2.05,3.4l-19,11c-1.13.65-2,.19-2-1A4.4,4.4,0,0,1,123.71,88.18Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 133.235px 84.94px;"
                                    id="eleocsaf5bap" class="animable"></path>
                                <path
                                    d="M156.23,69.38c1.06-.62,1.92-.12,1.92,1.11a4.24,4.24,0,0,1-1.92,3.32c-1.06.61-1.92.12-1.92-1.11A4.24,4.24,0,0,1,156.23,69.38Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 156.23px 71.5928px;"
                                    id="el6s0pl9n5dr" class="animable"></path>
                                <path
                                    d="M163.92,64.94c1.06-.61,1.92-.11,1.92,1.11a4.24,4.24,0,0,1-1.92,3.33c-1.06.61-1.92.12-1.92-1.11A4.27,4.27,0,0,1,163.92,64.94Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 163.92px 67.1609px;"
                                    id="el13uyjeuecqe8" class="animable"></path>
                                <path
                                    d="M102.45,100.43c1.06-.61,1.92-.12,1.92,1.11a4.27,4.27,0,0,1-1.92,3.33c-1.06.61-1.92.11-1.92-1.11A4.24,4.24,0,0,1,102.45,100.43Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 102.45px 102.649px;"
                                    id="eluxgydk2m5ib" class="animable"></path>
                                <path
                                    d="M110.14,96c1.06-.62,1.92-.12,1.92,1.11a4.24,4.24,0,0,1-1.92,3.32c-1.06.62-1.92.12-1.92-1.11A4.24,4.24,0,0,1,110.14,96Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 110.14px 98.215px;"
                                    id="elhnerbmqy7x" class="animable"></path>
                            </g>
                        </g>
                        <g id="freepik--Icons--inject-61" class="animable"
                            style="transform-origin: 292.175px 238.314px;">
                            <g id="freepik--Mail--inject-61" class="animable"
                                style="transform-origin: 337.27px 212.3px;">
                                <g id="freepik--Box--inject-61" class="animable"
                                    style="transform-origin: 337.27px 212.3px;">
                                    <path
                                        d="M355.88,190.26a4.78,4.78,0,0,0-2.16-3.73l-1.75-1a4.79,4.79,0,0,0-4.3,0l-26.86,15.54a4.73,4.73,0,0,0-2.15,3.72v29.56a4.76,4.76,0,0,0,2.15,3.73l1.75,1a4.79,4.79,0,0,0,4.3,0l26.86-15.54a4.74,4.74,0,0,0,2.16-3.73Z"
                                        style="fill: rgb(110, 101, 198); transform-origin: 337.27px 212.305px;"
                                        id="elj8bmfa3wy2" class="animable"></path>
                                    <g id="eleywi95djcsv">
                                        <path
                                            d="M318.66,234.34a4.76,4.76,0,0,0,2.15,3.73l1.75,1a4.8,4.8,0,0,0,3.93.17c-1,.38-1.78-.19-1.78-1.41V208.28a4.36,4.36,0,0,1,.63-2.12l-6-3.5a4.43,4.43,0,0,0-.63,2.12Z"
                                            style="opacity: 0.2; transform-origin: 322.575px 221.12px;"
                                            class="animable"></path>
                                    </g>
                                    <g id="elbm77tzrpvj">
                                        <path
                                            d="M355.8,189.65c-.25-.92-1.08-1.21-2.07-.63l-26.87,15.54a4.25,4.25,0,0,0-1.51,1.6l-6.06-3.49a4.38,4.38,0,0,1,1.52-1.61l26.86-15.54a4.79,4.79,0,0,1,4.3,0l1.76,1A4.72,4.72,0,0,1,355.8,189.65Z"
                                            style="fill: rgb(255, 255, 255); opacity: 0.3; transform-origin: 337.545px 195.585px;"
                                            class="animable"></path>
                                    </g>
                                </g>
                                <path id="freepik--mail--inject-61"
                                    d="M349.24,200.34a.58.58,0,0,0-.57,0l-17.56,10.14a.56.56,0,0,0-.28.49v16.66a.58.58,0,0,0,.28.49.6.6,0,0,0,.28.08.6.6,0,0,0,.29-.08L349.24,218a.58.58,0,0,0,.28-.49V200.83A.58.58,0,0,0,349.24,200.34ZM340,215.17,332.54,211l14.85-8.57Zm-2.58-.16L332,225.33V211.94Zm1,.56,1.52.87a.58.58,0,0,0,.28.07.55.55,0,0,0,.49-.28l1.72-2.95,5.54,4.15-15.11,8.72Zm4.58-3.28,5.43-9.35v13.42Z"
                                    style="fill: rgb(250, 250, 250); transform-origin: 340.175px 214.233px;"
                                    class="animable"></path>
                            </g>
                            <g id="freepik--Chat--inject-61" class="animable"
                                style="transform-origin: 292.215px 238.279px;">
                                <g id="freepik--box--inject-61" class="animable"
                                    style="transform-origin: 292.215px 238.279px;">
                                    <path
                                        d="M310.82,216.24a4.73,4.73,0,0,0-2.15-3.72l-1.75-1a4.72,4.72,0,0,0-4.3,0L275.76,227a4.76,4.76,0,0,0-2.15,3.73v29.55a4.75,4.75,0,0,0,2.15,3.73l1.75,1a4.72,4.72,0,0,0,4.3,0l26.86-15.54a4.73,4.73,0,0,0,2.15-3.72Z"
                                        style="fill: rgb(110, 101, 198); transform-origin: 292.215px 238.265px;"
                                        id="elcedi5kls5c" class="animable"></path>
                                    <g id="el5su134o70qb">
                                        <path
                                            d="M273.61,260.32a4.75,4.75,0,0,0,2.15,3.73l1.75,1a4.76,4.76,0,0,0,3.93.17c-1,.39-1.78-.18-1.78-1.41V234.26a4.43,4.43,0,0,1,.63-2.12l-6.05-3.49a4.36,4.36,0,0,0-.63,2.12Z"
                                            style="opacity: 0.2; transform-origin: 277.525px 247.107px;"
                                            class="animable"></path>
                                    </g>
                                    <g id="elwmb4fs7ualf">
                                        <path
                                            d="M310.75,215.63c-.25-.91-1.08-1.2-2.07-.63l-26.87,15.54a4.3,4.3,0,0,0-1.52,1.61l-6.05-3.5a4.35,4.35,0,0,1,1.52-1.6l26.85-15.54a4.75,4.75,0,0,1,4.31,0l1.76,1A4.75,4.75,0,0,1,310.75,215.63Z"
                                            style="fill: rgb(255, 255, 255); opacity: 0.3; transform-origin: 292.495px 221.572px;"
                                            class="animable"></path>
                                    </g>
                                </g>
                                <path id="freepik--chat--inject-61"
                                    d="M304.22,232.51l-8.5,4.91a4.88,4.88,0,0,0-1.85,3.91v6.15c0,1.57.83,2.37,1.85,1.78l4.51-2.61,3.14,3.3a.27.27,0,0,0,.35,0,.79.79,0,0,0,.23-.22,1.43,1.43,0,0,0,.25-.95l-.63-4.09.65-.37a4.88,4.88,0,0,0,1.85-3.91v-6.15C306.07,232.72,305.24,231.92,304.22,232.51Zm.89,8.79a2.33,2.33,0,0,1-.89,1.87l-1.24.72a1,1,0,0,0-.38.49,1.38,1.38,0,0,0-.09.68l.38,2.23-2.11-1.9a.26.26,0,0,0-.35,0l-4.71,2.72c-.49.29-.89-.1-.89-.85v-6.46a2.33,2.33,0,0,1,.89-1.87l8.5-4.91c.49-.28.89.1.89.85Zm-12.31,1.88-.16.09a.86.86,0,0,0-.28.31l-4.11,7,.24-4a.84.84,0,0,0-.07-.61.27.27,0,0,0-.39-.08l-1.16.68c-.61.35-1.1-.13-1.1-1.05v-9.28a2.88,2.88,0,0,1,1.1-2.31l13.62-7.86c.6-.35,1.09.12,1.09,1v5.09c0,.41.22.61.48.46a1.26,1.26,0,0,0,.49-1V226.6c0-1.74-.93-2.63-2.06-2l-13.62,7.87a5.43,5.43,0,0,0-2.06,4.35v9.27c0,1.75.92,2.64,2.06,2l.51-.3-.08,4.61c-.06.34,0,.63.18.72a.29.29,0,0,0,.28,0,.82.82,0,0,0,.28-.3l4.76-8.13h0a1.25,1.25,0,0,0,.48-1C293.28,243.23,293.07,243,292.8,243.18Z"
                                    style="fill: rgb(250, 250, 250); transform-origin: 295.44px 238.777px;"
                                    class="animable"></path>
                            </g>
                            <g id="freepik--Phone--inject-61" class="animable"
                                style="transform-origin: 247.08px 264.329px;">
                                <g id="freepik--box--inject-61" class="animable"
                                    style="transform-origin: 247.08px 264.329px;">
                                    <path
                                        d="M265.69,242.29a4.76,4.76,0,0,0-2.16-3.73l-1.75-1a4.72,4.72,0,0,0-4.3,0l-26.86,15.53a4.76,4.76,0,0,0-2.15,3.73v29.56a4.73,4.73,0,0,0,2.15,3.72l1.75,1a4.72,4.72,0,0,0,4.3,0l26.86-15.53a4.78,4.78,0,0,0,2.16-3.73Z"
                                        style="fill: rgb(110, 101, 198); transform-origin: 247.08px 264.33px;"
                                        id="ele80ld2k2efo" class="animable"></path>
                                    <g id="eliro4g9yzz19">
                                        <path
                                            d="M228.47,286.37a4.73,4.73,0,0,0,2.15,3.72l1.75,1a4.8,4.8,0,0,0,3.93.18c-1,.38-1.78-.19-1.78-1.42V260.31a4.36,4.36,0,0,1,.63-2.12l-6.05-3.5a4.36,4.36,0,0,0-.63,2.12Z"
                                            style="opacity: 0.2; transform-origin: 232.385px 273.148px;"
                                            class="animable"></path>
                                    </g>
                                    <g id="elk1j7rtsiu4k">
                                        <path
                                            d="M265.61,241.67c-.25-.91-1.08-1.2-2.07-.63l-26.87,15.54a4.2,4.2,0,0,0-1.51,1.61l-6.06-3.5a4.43,4.43,0,0,1,1.52-1.6l26.86-15.54a4.79,4.79,0,0,1,4.3,0l1.76,1A4.75,4.75,0,0,1,265.61,241.67Z"
                                            style="fill: rgb(255, 255, 255); opacity: 0.3; transform-origin: 247.355px 247.615px;"
                                            class="animable"></path>
                                    </g>
                                </g>
                                <g id="freepik--phone--inject-61" class="animable"
                                    style="transform-origin: 249.955px 266.46px;">
                                    <path
                                        d="M254.08,276.92h-.15c-6-.51-10.16-4.57-12.5-12.05a8.61,8.61,0,0,1,2.12-8.13A2,2,0,0,1,245,256h0c1.31,0,3.51,3.66,3.56,5.11a5.13,5.13,0,0,1-.95,2.88,3.35,3.35,0,0,0-.44,3.07c.71,2.06,1.88,3.15,3.57,3.36.44.05.83-.37,1.14-1.26.52-1.51,1.16-2.4,2-2.72a2,2,0,0,1,1.7.13l.27.13a13.63,13.63,0,0,1,1.39.76h0l.24.15c.84.51,1.57,1.13,1.16,3.16s-2,5.15-3.48,6a.49.49,0,0,1-.19.07l-.14,0A3.27,3.27,0,0,1,254.08,276.92ZM245,257.09c-.12,0-.34.15-.59.42a7.46,7.46,0,0,0-1.87,7c2.22,7.09,6,10.77,11.52,11.24a1.47,1.47,0,0,0,.5-.07l.1,0c1.06-.67,2.45-3.19,2.86-5.18.28-1.41-.08-1.63-.64-2l-.28-.17h0a11.65,11.65,0,0,0-1.26-.69l-.28-.14a.84.84,0,0,0-.76-.09c-.32.13-.81.59-1.31,2-.63,1.83-1.63,2.11-2.34,2-2.14-.26-3.66-1.65-4.51-4.12a4.44,4.44,0,0,1,.54-4,4,4,0,0,0,.79-2.24C247.39,260,245.52,257.25,245,257.09Z"
                                        style="fill: rgb(250, 250, 250); transform-origin: 249.955px 266.46px;"
                                        id="elunuxi88wr9m" class="animable"></path>
                                </g>
                            </g>
                        </g>
                        <g id="freepik--Window--inject-61" class="animable"
                            style="transform-origin: 291.985px 128.841px;">
                            <g id="freepik--window--inject-61" class="animable"
                                style="transform-origin: 291.985px 128.841px;">
                                <path
                                    d="M346.42,23.6,230.68,90.33a5.75,5.75,0,0,0-2.6,4.51V228.67a5.74,5.74,0,0,0,2.61,4.5l1.63.93a5.79,5.79,0,0,0,5.21,0l115.74-66.84a5.76,5.76,0,0,0,2.61-4.51V29a5.71,5.71,0,0,0-2.62-4.5l-1.62-.93A5.78,5.78,0,0,0,346.42,23.6Z"
                                    style="fill: rgb(224, 224, 224); transform-origin: 291.98px 128.841px;"
                                    id="elz2qlim3bgdb" class="animable"></path>
                                <path
                                    d="M355.88,162.92c0,2.29-1.61,3.75-3.61,4.9L238.53,233.5c-2,1.14-3.6.22-3.6-2.08V99.89h0a7.16,7.16,0,0,1,3.58-6.21L352.27,28a2.41,2.41,0,0,1,3.61,2.08h0Z"
                                    style="fill: rgb(250, 250, 250); transform-origin: 295.405px 130.834px;"
                                    id="elmx5puxqjad9" class="animable"></path>
                                <path
                                    d="M353.47,28.65h0a1.4,1.4,0,0,1,1.4,1.4V162.92c0,1.56-.95,2.8-3.1,4L238,232.63a2.39,2.39,0,0,1-1.11.36c-.86,0-1-1-1-1.57V99.89A6.18,6.18,0,0,1,239,94.55L352.77,28.84a1.37,1.37,0,0,1,.7-.19m0-1a2.34,2.34,0,0,0-1.2.33L238.51,93.68a7.16,7.16,0,0,0-3.58,6.21V231.42c0,1.63.81,2.57,2,2.57a3.29,3.29,0,0,0,1.61-.49l113.74-65.68c2-1.15,3.61-2.61,3.61-4.9V30.05a2.42,2.42,0,0,0-2.41-2.41Z"
                                    style="fill: rgb(224, 224, 224); transform-origin: 295.41px 130.815px;"
                                    id="el9rxzvc86k2v" class="animable"></path>
                                <path
                                    d="M355.88,29v1A2.41,2.41,0,0,0,352.27,28L238.51,93.68a7.08,7.08,0,0,0-2.62,2.62l0,.08-7-4.06a5.39,5.39,0,0,1,1.88-2L346.42,23.6a5.73,5.73,0,0,1,5.21,0l1.63.93A5.73,5.73,0,0,1,355.88,29Z"
                                    style="fill: rgb(240, 240, 240); transform-origin: 292.385px 59.6768px;"
                                    id="el9smdd3pyyls" class="animable"></path>
                                <path
                                    d="M249.39,124c-.07,0-.12,0-.16,0l-.08-.08-1.72-3v3.9a.54.54,0,0,1-.05.21.24.24,0,0,1-.12.14l-.49.29c-.05,0-.09,0-.12,0a.21.21,0,0,1-.05-.15v-6.11a.54.54,0,0,1,.05-.21.24.24,0,0,1,.12-.14l.43-.25c.07,0,.12,0,.16,0l.08.09,1.72,2.94v-3.9a.54.54,0,0,1,.05-.21.28.28,0,0,1,.12-.14l.49-.29a.1.1,0,0,1,.12,0,.21.21,0,0,1,.05.15v6.12a.54.54,0,0,1-.05.21.33.33,0,0,1-.12.14Z"
                                    style="fill: rgb(69, 90, 100); transform-origin: 248.295px 121.265px;"
                                    id="ellraioiv8utp" class="animable"></path>
                                <path
                                    d="M250.89,119.39a2.88,2.88,0,0,1,.12-.49,2.83,2.83,0,0,1,.25-.57,3,3,0,0,1,.4-.56,2.17,2.17,0,0,1,.55-.45,1.33,1.33,0,0,1,.56-.19.56.56,0,0,1,.44.12.93.93,0,0,1,.28.46,2.89,2.89,0,0,1,.1.8v2.78a.54.54,0,0,1-.05.21c0,.07-.07.12-.12.14l-.47.27a.08.08,0,0,1-.11,0,.17.17,0,0,1-.05-.15v-.31a2.72,2.72,0,0,1-.38.68,1.79,1.79,0,0,1-.61.55,1.21,1.21,0,0,1-.48.17.48.48,0,0,1-.35-.11.87.87,0,0,1-.22-.34,1.75,1.75,0,0,1-.07-.55,2.42,2.42,0,0,1,.3-1.19,3.37,3.37,0,0,1,.8-1l1-.84c0-.26-.06-.41-.17-.46a.51.51,0,0,0-.41.08,1,1,0,0,0-.24.2,2.29,2.29,0,0,0-.17.28.55.55,0,0,1-.1.16.28.28,0,0,1-.1.09l-.57.33s-.08,0-.11,0S250.89,119.46,250.89,119.39Zm1,2.08a1.56,1.56,0,0,0,.37-.31,1.91,1.91,0,0,0,.28-.4,2.5,2.5,0,0,0,.16-.43,1.64,1.64,0,0,0,.06-.42v-.1l-.84.71a1.45,1.45,0,0,0-.36.41.71.71,0,0,0-.11.4c0,.14,0,.21.13.22A.5.5,0,0,0,251.92,121.47Z"
                                    style="fill: rgb(69, 90, 100); transform-origin: 252.135px 119.988px;"
                                    id="elsvhauoyjc6s" class="animable"></path>
                                <path
                                    d="M255.2,116.16a2.47,2.47,0,0,1,.36-.62,1.36,1.36,0,0,1,.44-.4.82.82,0,0,1,.63-.15.75.75,0,0,1,.39.36,3.57,3.57,0,0,1,.19-.45,3,3,0,0,1,.25-.4,2.21,2.21,0,0,1,.28-.32A2.47,2.47,0,0,1,258,114a.86.86,0,0,1,.59-.15.58.58,0,0,1,.38.26,1.63,1.63,0,0,1,.2.59,5,5,0,0,1,.06.81V118a.54.54,0,0,1-.05.21.42.42,0,0,1-.12.14l-.47.27a.08.08,0,0,1-.11,0,.17.17,0,0,1-.05-.15V116a1.35,1.35,0,0,0-.16-.81c-.11-.11-.26-.1-.45,0a1,1,0,0,0-.42.49,2.25,2.25,0,0,0-.19,1v2.54a.54.54,0,0,1-.05.21.24.24,0,0,1-.12.14l-.46.27s-.09,0-.12,0a.25.25,0,0,1-.05-.16v-2.5a1.26,1.26,0,0,0-.16-.8q-.17-.16-.45,0a1.17,1.17,0,0,0-.43.51,2.29,2.29,0,0,0-.18,1v2.5a.46.46,0,0,1-.16.35l-.47.27a.11.11,0,0,1-.12,0,.21.21,0,0,1,0-.15v-4.41a.54.54,0,0,1,0-.21.35.35,0,0,1,.12-.14l.47-.28a.09.09,0,0,1,.11,0,.2.2,0,0,1,0,.15Z"
                                    style="fill: rgb(69, 90, 100); transform-origin: 256.828px 117.436px;"
                                    id="elsdhto6wco3" class="animable"></path>
                                <path
                                    d="M259.89,115.44a5.45,5.45,0,0,1,.11-1.06,5.18,5.18,0,0,1,.3-1,3.61,3.61,0,0,1,.48-.81,2,2,0,0,1,.62-.56,1,1,0,0,1,.63-.17.71.71,0,0,1,.47.25,1.56,1.56,0,0,1,.31.59,3.17,3.17,0,0,1,.1.86V114a.41.41,0,0,1-.05.21.37.37,0,0,1-.11.15l-2.06,1.18a.85.85,0,0,0,.06.35.38.38,0,0,0,.16.19.34.34,0,0,0,.23,0,.77.77,0,0,0,.26-.1,1.16,1.16,0,0,0,.32-.24,1.31,1.31,0,0,0,.2-.28l.11-.16a.4.4,0,0,1,.12-.1l.49-.28q.08,0,.12,0s.05.08.05.16a1.38,1.38,0,0,1-.1.39,3,3,0,0,1-.26.56,4.58,4.58,0,0,1-.44.6,2.92,2.92,0,0,1-.61.49,1.06,1.06,0,0,1-.62.17.64.64,0,0,1-.48-.25,1.54,1.54,0,0,1-.3-.63A4,4,0,0,1,259.89,115.44Zm1.51-2.29a1.08,1.08,0,0,0-.3.26,1.15,1.15,0,0,0-.21.33,1.78,1.78,0,0,0-.14.36,2.33,2.33,0,0,0-.06.33l1.39-.8a1.26,1.26,0,0,0,0-.27.46.46,0,0,0-.11-.22.26.26,0,0,0-.21-.09A.61.61,0,0,0,261.4,113.15Z"
                                    style="fill: rgb(69, 90, 100); transform-origin: 261.4px 114.564px;"
                                    id="el2l3wim8yp0a" class="animable"></path>
                                <path
                                    d="M268.94,91a2.15,2.15,0,0,0-.56.47,2.85,2.85,0,0,0-.37.6,4.11,4.11,0,0,0-.21.68c0,.24-.08.48-.1.73s0,.32,0,.56v.72c0,.25,0,.49,0,.72s0,.41,0,.54a3.38,3.38,0,0,0,.1.61,1.13,1.13,0,0,0,.21.44.52.52,0,0,0,.38.17,1,1,0,0,0,.55-.18,2.18,2.18,0,0,0,.49-.37,2.22,2.22,0,0,0,.39-.51,3.12,3.12,0,0,0,.27-.67,3.58,3.58,0,0,0,.09-.83l-.82.48a.15.15,0,0,1-.19,0,.36.36,0,0,1-.08-.25v-1.6a.88.88,0,0,1,.08-.34.56.56,0,0,1,.19-.23l2.38-1.37a.15.15,0,0,1,.19,0,.36.36,0,0,1,.07.25v1.93a7.28,7.28,0,0,1-.23,1.88,8.12,8.12,0,0,1-.65,1.69,6.67,6.67,0,0,1-1,1.38,4.87,4.87,0,0,1-1.21,1,2.58,2.58,0,0,1-1.26.4,1.39,1.39,0,0,1-.95-.34,2.09,2.09,0,0,1-.6-1,5.53,5.53,0,0,1-.25-1.44c0-.41,0-.85,0-1.32s0-.94,0-1.38a8.78,8.78,0,0,1,.24-1.72,8.67,8.67,0,0,1,.61-1.66,6.59,6.59,0,0,1,.95-1.43,4.87,4.87,0,0,1,1.26-1.06,2.63,2.63,0,0,1,1.24-.4,1.59,1.59,0,0,1,.94.24,1.87,1.87,0,0,1,.6.7,2.56,2.56,0,0,1,.24,1,.66.66,0,0,1-.06.27.52.52,0,0,1-.16.19l-1.31.75c-.1.06-.18.06-.23,0l-.16-.18a.82.82,0,0,0-.38-.28Q269.43,90.77,268.94,91Z"
                                    style="fill: rgb(110, 101, 198); transform-origin: 268.926px 94.0238px;"
                                    id="eln1rfdp22n5n" class="animable"></path>
                                <path
                                    d="M274.53,93.07a1.2,1.2,0,0,0,.09.53.42.42,0,0,0,.21.24.44.44,0,0,0,.28,0,1.2,1.2,0,0,0,.31-.13,2,2,0,0,0,.47-.36,1.84,1.84,0,0,0,.29-.42l.15-.27a.63.63,0,0,1,.17-.13l1.28-.74c.14-.08.22,0,.22.21a2.53,2.53,0,0,1-.15.64,6.17,6.17,0,0,1-.46,1,7.45,7.45,0,0,1-.8,1.14,4.55,4.55,0,0,1-1.17,1,2.33,2.33,0,0,1-1.14.37,1.09,1.09,0,0,1-.83-.32,2.16,2.16,0,0,1-.52-1,6.76,6.76,0,0,1-.17-1.62,9,9,0,0,1,.17-1.72,7.5,7.5,0,0,1,.52-1.6,5.63,5.63,0,0,1,.83-1.33,4.2,4.2,0,0,1,1.14-1,1.94,1.94,0,0,1,1.22-.34,1.3,1.3,0,0,1,.83.49,2.53,2.53,0,0,1,.46,1.06,6.09,6.09,0,0,1,.14,1.38v.42A.78.78,0,0,1,278,91a.57.57,0,0,1-.19.23Zm.89-3.42a1.47,1.47,0,0,0-.63.75,3,3,0,0,0-.26,1l1.77-1a1.2,1.2,0,0,0-.25-.7C275.9,89.5,275.69,89.5,275.42,89.65Z"
                                    style="fill: rgb(110, 101, 198); transform-origin: 275.417px 91.684px;"
                                    id="elm9gncvpxmd" class="animable"></path>
                                <path
                                    d="M281.28,89.18a.9.9,0,0,0,.1.48c.07.09.17.09.33,0l.78-.45a.14.14,0,0,1,.19,0,.33.33,0,0,1,.08.24V91a.8.8,0,0,1-.08.33.45.45,0,0,1-.19.23l-.93.54a1.73,1.73,0,0,1-.84.28.91.91,0,0,1-.65-.21,1.52,1.52,0,0,1-.41-.71,3.8,3.8,0,0,1-.15-1.16V87.75l-.73.42a.14.14,0,0,1-.18,0,.29.29,0,0,1-.08-.24V86.38a.67.67,0,0,1,.08-.33.49.49,0,0,1,.18-.23l.73-.42V82.93a.8.8,0,0,1,.08-.33.45.45,0,0,1,.19-.23l1.24-.72a.13.13,0,0,1,.18,0,.31.31,0,0,1,.08.24v2.47l1.11-.65a.15.15,0,0,1,.19,0,.33.33,0,0,1,.08.24v1.53a.8.8,0,0,1-.08.33.45.45,0,0,1-.19.23l-1.11.64Z"
                                    style="fill: rgb(110, 101, 198); transform-origin: 280.639px 86.9981px;"
                                    id="el84vfi5n2j7q" class="animable"></path>
                                <path
                                    d="M287.45,79.57a.88.88,0,0,1-.08.34.49.49,0,0,1-.19.23l-1.24.71a.14.14,0,0,1-.18,0,.33.33,0,0,1-.08-.24V79.07a.84.84,0,0,1,.08-.34.54.54,0,0,1,.18-.23l1.24-.71c.08,0,.14,0,.19,0a.33.33,0,0,1,.08.24Zm0,8.71a.8.8,0,0,1-.08.33.41.41,0,0,1-.19.23l-1.24.72a.14.14,0,0,1-.18,0,.34.34,0,0,1-.08-.25v-7a.84.84,0,0,1,.08-.34.54.54,0,0,1,.18-.23l1.24-.71c.08,0,.14,0,.19,0a.33.33,0,0,1,.08.24Z"
                                    style="fill: rgb(110, 101, 198); transform-origin: 286.565px 83.6914px;"
                                    id="elfjp5a8f50h" class="animable"></path>
                                <path
                                    d="M293.84,84.6a.8.8,0,0,1-.08.33.57.57,0,0,1-.19.23l-1.24.71a.15.15,0,0,1-.19,0,.33.33,0,0,1-.08-.24V81.79a1.56,1.56,0,0,0-.2-.93c-.14-.18-.36-.19-.65,0a1.5,1.5,0,0,0-.65.77,3.2,3.2,0,0,0-.2,1.16V86.6a.67.67,0,0,1-.08.33.49.49,0,0,1-.18.23l-1.24.72c-.08,0-.14,0-.19,0a.37.37,0,0,1-.08-.25V80.56a.8.8,0,0,1,.08-.33.45.45,0,0,1,.19-.23l1.19-.68a.14.14,0,0,1,.19,0,.33.33,0,0,1,.07.24v.35c.06-.13.12-.28.2-.43a2.52,2.52,0,0,1,.29-.46,3.86,3.86,0,0,1,.38-.44,2.58,2.58,0,0,1,.52-.38,2.06,2.06,0,0,1,.87-.3.91.91,0,0,1,.67.24,1.8,1.8,0,0,1,.44.83,5.7,5.7,0,0,1,.16,1.45Z"
                                    style="fill: rgb(110, 101, 198); transform-origin: 291.215px 82.8892px;"
                                    id="elb0tcnm2dsll" class="animable"></path>
                                <path
                                    d="M299.18,78.85a.82.82,0,0,0,.1.48c.06.09.17.09.32,0l.79-.46a.14.14,0,0,1,.18,0,.29.29,0,0,1,.08.24v1.53a.67.67,0,0,1-.08.33.49.49,0,0,1-.18.23l-.94.54a1.85,1.85,0,0,1-.84.28.85.85,0,0,1-.64-.22,1.44,1.44,0,0,1-.42-.7,3.87,3.87,0,0,1-.14-1.16V77.41l-.73.42a.14.14,0,0,1-.19,0,.33.33,0,0,1-.08-.24V76.05a.8.8,0,0,1,.08-.33.5.5,0,0,1,.19-.23l.73-.42V72.6a.78.78,0,0,1,.07-.33.51.51,0,0,1,.19-.23l1.24-.72a.15.15,0,0,1,.19,0,.34.34,0,0,1,.08.25V74l1.11-.64a.15.15,0,0,1,.19,0,.33.33,0,0,1,.07.24v1.53a.78.78,0,0,1-.07.33.57.57,0,0,1-.19.23l-1.11.64Z"
                                    style="fill: rgb(110, 101, 198); transform-origin: 298.531px 76.6543px;"
                                    id="ellm1suc2707m" class="animable"></path>
                                <path
                                    d="M306.62,73.11c0,.14,0,.34,0,.57s0,.44,0,.59a6.37,6.37,0,0,1-.21,1.49,7,7,0,0,1-.54,1.43,6.17,6.17,0,0,1-.83,1.23,4.39,4.39,0,0,1-1.09.9,2.23,2.23,0,0,1-1.09.35,1.21,1.21,0,0,1-.83-.27,1.77,1.77,0,0,1-.54-.8,4,4,0,0,1-.22-1.24c0-.14,0-.34,0-.57s0-.44,0-.59a6.52,6.52,0,0,1,.21-1.49,6.94,6.94,0,0,1,.54-1.42,6.43,6.43,0,0,1,.84-1.24,4.23,4.23,0,0,1,1.09-.91,2.23,2.23,0,0,1,1.09-.35,1.26,1.26,0,0,1,.83.28,1.63,1.63,0,0,1,.54.8A3.78,3.78,0,0,1,306.62,73.11ZM303,76.27a1,1,0,0,0,.27.74.56.56,0,0,0,.64,0,1.63,1.63,0,0,0,.63-.69,2.59,2.59,0,0,0,.27-1.06,4.35,4.35,0,0,0,0-.53,3.78,3.78,0,0,0,0-.5,1,1,0,0,0-.27-.74c-.16-.13-.37-.12-.63,0a1.65,1.65,0,0,0-.64.69,2.55,2.55,0,0,0-.27,1.06c0,.15,0,.33,0,.52S303,76.12,303,76.27Z"
                                    style="fill: rgb(110, 101, 198); transform-origin: 303.945px 75.2306px;"
                                    id="eliu8lgqqzo3a" class="animable"></path>
                                <path
                                    d="M307.5,69.65a.8.8,0,0,1,.08-.33.44.44,0,0,1,.18-.23l1.25-.72a.14.14,0,0,1,.18,0,.36.36,0,0,1,.08.25v3.83a1.76,1.76,0,0,0,.19.94c.12.19.33.2.62,0a1.35,1.35,0,0,0,.61-.75,3.35,3.35,0,0,0,.18-1.15V67.7a.8.8,0,0,1,.08-.33.51.51,0,0,1,.19-.23l1.24-.72a.15.15,0,0,1,.19,0,.37.37,0,0,1,.07.25v7.06a.78.78,0,0,1-.07.33.57.57,0,0,1-.19.23l-1.14.66a.15.15,0,0,1-.19,0,.33.33,0,0,1-.08-.24v-.35a3.25,3.25,0,0,1-.19.44,2.76,2.76,0,0,1-.28.45,3.85,3.85,0,0,1-.39.44,2.58,2.58,0,0,1-.52.38c-.64.37-1.15.38-1.52,0a3.19,3.19,0,0,1-.57-2.3Z"
                                    style="fill: rgb(110, 101, 198); transform-origin: 310.056px 71.3687px;"
                                    id="el39sosn9cf12" class="animable"></path>
                                <path
                                    d="M315.35,68.11c0,.16,0,.35,0,.55s0,.37,0,.52a1,1,0,0,0,.27.72c.15.13.36.12.62,0a1.54,1.54,0,0,0,.5-.43,2,2,0,0,0,.28-.56,1.81,1.81,0,0,1,.12-.28.4.4,0,0,1,.17-.19l1.29-.75a.17.17,0,0,1,.19,0,.31.31,0,0,1,.07.25,4.3,4.3,0,0,1-.13.79,5.08,5.08,0,0,1-.41,1.16,6.08,6.08,0,0,1-.8,1.27,4.4,4.4,0,0,1-1.28,1.08,2.39,2.39,0,0,1-1,.35,1.27,1.27,0,0,1-.84-.22,1.63,1.63,0,0,1-.57-.76,3.77,3.77,0,0,1-.23-1.32c0-.14,0-.34,0-.6s0-.45,0-.61a6.42,6.42,0,0,1,.23-1.58,6.88,6.88,0,0,1,.57-1.43,6,6,0,0,1,.84-1.18,4.38,4.38,0,0,1,1-.83,2.31,2.31,0,0,1,1.28-.4,1.34,1.34,0,0,1,.8.34,1.51,1.51,0,0,1,.41.7,2.4,2.4,0,0,1,.13.64.64.64,0,0,1-.07.32.54.54,0,0,1-.19.24l-1.29.74a.15.15,0,0,1-.17,0,.61.61,0,0,1-.12-.15.44.44,0,0,0-.28-.24.74.74,0,0,0-.5.15,1.55,1.55,0,0,0-.62.69A2.58,2.58,0,0,0,315.35,68.11Z"
                                    style="fill: rgb(110, 101, 198); transform-origin: 316.232px 68.1277px;"
                                    id="eld3nozxu51ht" class="animable"></path>
                                <path
                                    d="M325,66.63a.67.67,0,0,1-.08.33.49.49,0,0,1-.18.23l-1.24.72c-.08,0-.14,0-.19,0a.33.33,0,0,1-.08-.24V63.82a1.69,1.69,0,0,0-.2-.93c-.14-.18-.36-.18-.65,0a1.44,1.44,0,0,0-.65.76,3.24,3.24,0,0,0-.2,1.16v3.83a.81.81,0,0,1-.08.34.45.45,0,0,1-.19.23l-1.24.71a.13.13,0,0,1-.18,0,.29.29,0,0,1-.08-.24V59.72a.67.67,0,0,1,.08-.33.49.49,0,0,1,.18-.23l1.24-.72a.15.15,0,0,1,.19,0,.33.33,0,0,1,.08.24v3.23A4.2,4.2,0,0,1,322,61a2.71,2.71,0,0,1,.82-.77,1.91,1.91,0,0,1,.86-.29.85.85,0,0,1,.68.24,1.75,1.75,0,0,1,.43.82,5.28,5.28,0,0,1,.16,1.45Z"
                                    style="fill: rgb(110, 101, 198); transform-origin: 322.379px 64.1811px;"
                                    id="eltxw9preui5" class="animable"></path>
                                <polygon points="246.07 130.3 346.05 72.57 346.05 81.45 246.07 139.18 246.07 130.3"
                                    style="fill: rgb(224, 224, 224); transform-origin: 296.06px 105.875px;"
                                    id="elybu5cuqiyvn" class="animable"></polygon>
                                <path
                                    d="M249.47,149.38a.09.09,0,0,1,.11,0,.17.17,0,0,1,0,.15v.67a.41.41,0,0,1,0,.21.37.37,0,0,1-.11.15l-2.7,1.55q-.08,0-.12,0a.25.25,0,0,1-.05-.16v-6.11a.54.54,0,0,1,.05-.21.24.24,0,0,1,.12-.14l2.65-1.53a.07.07,0,0,1,.11,0,.17.17,0,0,1,.05.15v.67a.41.41,0,0,1-.05.21.27.27,0,0,1-.11.14l-2,1.15v1.5l1.85-1.07a.1.1,0,0,1,.12,0,.21.21,0,0,1,0,.15v.68a.49.49,0,0,1,0,.2.31.31,0,0,1-.12.15L247.43,149v1.57Z"
                                    style="fill: rgb(69, 90, 100); transform-origin: 248.099px 148.022px;"
                                    id="el4kua5isbjhy" class="animable"></path>
                                <path
                                    d="M251.14,145.15a2.73,2.73,0,0,1,.36-.63,1.59,1.59,0,0,1,.43-.4.87.87,0,0,1,.64-.14.64.64,0,0,1,.38.36,3.44,3.44,0,0,1,.45-.85,3,3,0,0,1,.27-.32A1.57,1.57,0,0,1,254,143a.91.91,0,0,1,.58-.16.55.55,0,0,1,.38.27,1.41,1.41,0,0,1,.2.58,5.17,5.17,0,0,1,.06.82V147a.37.37,0,0,1,0,.2.37.37,0,0,1-.11.15l-.47.27a.1.1,0,0,1-.12,0,.21.21,0,0,1,0-.15V145a1.28,1.28,0,0,0-.16-.81q-.15-.16-.45,0a1.22,1.22,0,0,0-.42.49,2.33,2.33,0,0,0-.18,1v2.55a.54.54,0,0,1,0,.21.34.34,0,0,1-.12.14l-.47.27a.08.08,0,0,1-.11,0,.17.17,0,0,1,0-.15v-2.5a1.35,1.35,0,0,0-.16-.81c-.11-.1-.26-.1-.45,0a1.17,1.17,0,0,0-.43.51,2.24,2.24,0,0,0-.18,1v2.5a.54.54,0,0,1,0,.21.31.31,0,0,1-.12.15l-.46.27a.1.1,0,0,1-.12,0,.21.21,0,0,1,0-.15v-4.42a.49.49,0,0,1,0-.2.31.31,0,0,1,.12-.15l.46-.27a.1.1,0,0,1,.12,0,.21.21,0,0,1,0,.15Z"
                                    style="fill: rgb(69, 90, 100); transform-origin: 252.955px 146.444px;"
                                    id="elis975y41j8f" class="animable"></path>
                                <path
                                    d="M256,143.09a2.77,2.77,0,0,1,.11-.49,3.25,3.25,0,0,1,.26-.58,2.57,2.57,0,0,1,.4-.55,2,2,0,0,1,.55-.45,1.31,1.31,0,0,1,.56-.2.62.62,0,0,1,.44.13.89.89,0,0,1,.28.46,2.94,2.94,0,0,1,.09.8V145a.41.41,0,0,1-.05.21.33.33,0,0,1-.11.14l-.47.27a.09.09,0,0,1-.12,0,.21.21,0,0,1-.05-.15v-.31a2.4,2.4,0,0,1-.37.68,1.94,1.94,0,0,1-.62.55,1.12,1.12,0,0,1-.47.17.51.51,0,0,1-.35-.11.77.77,0,0,1-.22-.34,1.77,1.77,0,0,1-.08-.55,2.49,2.49,0,0,1,.31-1.2,3.47,3.47,0,0,1,.8-1l1-.85c0-.25-.05-.41-.16-.45a.47.47,0,0,0-.41.08.61.61,0,0,0-.24.2,1.48,1.48,0,0,0-.17.28l-.1.16a.41.41,0,0,1-.1.09l-.57.33a.11.11,0,0,1-.11,0S256,143.16,256,143.09Zm1,2.07a1.52,1.52,0,0,0,.37-.3,1.76,1.76,0,0,0,.27-.4,1.82,1.82,0,0,0,.17-.44,1.51,1.51,0,0,0,.05-.42v-.09l-.83.71a1.42,1.42,0,0,0-.36.4.78.78,0,0,0-.12.41c0,.13.05.21.14.22A.53.53,0,0,0,257,145.16Z"
                                    style="fill: rgb(69, 90, 100); transform-origin: 257.235px 143.689px;"
                                    id="elis9sjup4syf" class="animable"></path>
                                <path
                                    d="M260.17,137.67a.07.07,0,0,1,.11,0,.21.21,0,0,1,.05.15v.74a.49.49,0,0,1-.05.2.37.37,0,0,1-.11.15l-.53.3c-.05,0-.09,0-.12,0a.21.21,0,0,1,0-.15v-.74a.49.49,0,0,1,0-.2.31.31,0,0,1,.12-.15Zm.13,6.38a.54.54,0,0,1-.05.21.31.31,0,0,1-.12.15l-.46.27a.1.1,0,0,1-.12,0,.21.21,0,0,1-.05-.15V140.1a.53.53,0,0,1,.05-.2.31.31,0,0,1,.12-.15l.46-.27a.1.1,0,0,1,.12,0,.21.21,0,0,1,.05.15Z"
                                    style="fill: rgb(69, 90, 100); transform-origin: 259.915px 141.172px;"
                                    id="ellcrwuxs559" class="animable"></path>
                                <path
                                    d="M262,143.1a.54.54,0,0,1-.05.21.31.31,0,0,1-.12.15l-.46.26q-.07,0-.12,0a.25.25,0,0,1-.05-.16v-6.2a.54.54,0,0,1,.05-.21.31.31,0,0,1,.12-.15l.46-.27a.1.1,0,0,1,.12,0,.21.21,0,0,1,.05.15Z"
                                    style="fill: rgb(69, 90, 100); transform-origin: 261.6px 140.215px;"
                                    id="elrj4diie689" class="animable"></path>
                                <path
                                    d="M264.2,138.35a2.77,2.77,0,0,1,.11-.49,2.88,2.88,0,0,1,.26-.57,2.39,2.39,0,0,1,.4-.56,2,2,0,0,1,.55-.45,1.41,1.41,0,0,1,.56-.2.58.58,0,0,1,.43.13.78.78,0,0,1,.28.46,2.56,2.56,0,0,1,.1.8v2.78a.41.41,0,0,1-.05.21.33.33,0,0,1-.11.14l-.47.27a.09.09,0,0,1-.12,0,.21.21,0,0,1-.05-.15v-.31a2.67,2.67,0,0,1-.37.68,1.94,1.94,0,0,1-.62.55,1.12,1.12,0,0,1-.47.17.51.51,0,0,1-.35-.11.7.7,0,0,1-.22-.34,1.73,1.73,0,0,1-.08-.55,2.43,2.43,0,0,1,.31-1.19,3.37,3.37,0,0,1,.8-1l1-.85c0-.25,0-.4-.16-.45a.47.47,0,0,0-.41.08.71.71,0,0,0-.24.2,1.48,1.48,0,0,0-.17.28l-.1.16a.41.41,0,0,1-.1.09l-.58.33a.09.09,0,0,1-.1,0S264.19,138.42,264.2,138.35Zm1,2.07a1.74,1.74,0,0,0,.37-.3,1.76,1.76,0,0,0,.27-.4,1.82,1.82,0,0,0,.17-.44,2,2,0,0,0,0-.42v-.09l-.83.71a1.67,1.67,0,0,0-.37.4.87.87,0,0,0-.11.41c0,.14.05.21.14.22A.53.53,0,0,0,265.23,140.42Z"
                                    style="fill: rgb(69, 90, 100); transform-origin: 265.436px 138.944px;"
                                    id="elpgs8gr8zfo" class="animable"></path>
                                <path
                                    d="M268.94,134.31a1,1,0,0,1,.34-.14.64.64,0,0,1,.27,0,.54.54,0,0,1,.19.08.47.47,0,0,1,.13.11v-2a.54.54,0,0,1,.05-.21A.33.33,0,0,1,270,132l.47-.27a.09.09,0,0,1,.12,0,.21.21,0,0,1,.05.15v6.21a.54.54,0,0,1-.05.21.28.28,0,0,1-.12.14l-.47.27a.08.08,0,0,1-.11,0,.21.21,0,0,1-.05-.15v-.22c0,.08-.08.16-.13.26a2.49,2.49,0,0,1-.19.3,2.44,2.44,0,0,1-.27.29,1.8,1.8,0,0,1-.34.26.82.82,0,0,1-.56.13.7.7,0,0,1-.42-.24,1.5,1.5,0,0,1-.28-.55,3.06,3.06,0,0,1-.11-.78,3.11,3.11,0,0,1,0-.32c0-.13,0-.24,0-.34a4.8,4.8,0,0,1,.11-.9,4.66,4.66,0,0,1,.28-.87,4.07,4.07,0,0,1,.42-.74A1.75,1.75,0,0,1,268.94,134.31Zm-.57,2.62a4.68,4.68,0,0,0,0,.53c0,.39.1.64.24.74a.45.45,0,0,0,.51,0,1.36,1.36,0,0,0,.51-.57,2.2,2.2,0,0,0,.24-.93c0-.09,0-.22,0-.36a3.33,3.33,0,0,0,0-.35.89.89,0,0,0-.24-.65.45.45,0,0,0-.51,0,1.43,1.43,0,0,0-.51.57A2.41,2.41,0,0,0,268.37,136.93Z"
                                    style="fill: rgb(69, 90, 100); transform-origin: 269.088px 135.647px;"
                                    id="elmfwhikwe8wl" class="animable"></path>
                                <path
                                    d="M272.75,132.11a.94.94,0,0,1,.34-.14.58.58,0,0,1,.26,0,.43.43,0,0,1,.2.07l.13.11v-2a.52.52,0,0,1,0-.21.58.58,0,0,1,.12-.14l.47-.27a.09.09,0,0,1,.11,0,.17.17,0,0,1,.05.15v6.21a.41.41,0,0,1-.05.21.27.27,0,0,1-.11.14l-.47.27a.09.09,0,0,1-.12,0,.25.25,0,0,1,0-.16v-.21l-.13.25a2.61,2.61,0,0,1-.2.3,2.32,2.32,0,0,1-.26.3,2.13,2.13,0,0,1-.34.25.9.9,0,0,1-.56.14.66.66,0,0,1-.42-.25,1.5,1.5,0,0,1-.28-.55,2.65,2.65,0,0,1-.11-.77c0-.1,0-.2,0-.33s0-.24,0-.34a4.1,4.1,0,0,1,.11-.9,4.66,4.66,0,0,1,.28-.87,3.15,3.15,0,0,1,.42-.74A1.87,1.87,0,0,1,272.75,132.11Zm-.58,2.62a4.68,4.68,0,0,0,0,.53c0,.39.11.64.25.74a.45.45,0,0,0,.51,0,1.43,1.43,0,0,0,.51-.57,2.35,2.35,0,0,0,.24-.92c0-.1,0-.22,0-.37s0-.26,0-.35a.89.89,0,0,0-.24-.64.42.42,0,0,0-.51,0,1.34,1.34,0,0,0-.51.56A2.55,2.55,0,0,0,272.17,134.73Z"
                                    style="fill: rgb(69, 90, 100); transform-origin: 272.906px 133.447px;"
                                    id="el9e7yvaj2bgl" class="animable"></path>
                                <path
                                    d="M276.82,131a1.27,1.27,0,0,0-.54.56,2.28,2.28,0,0,0-.16.91v2.46a.41.41,0,0,1-.05.21.27.27,0,0,1-.11.14l-.47.27a.09.09,0,0,1-.12,0,.21.21,0,0,1-.05-.15V131a.54.54,0,0,1,.05-.21.24.24,0,0,1,.12-.14l.47-.27a.08.08,0,0,1,.11,0,.17.17,0,0,1,.05.15v.22a3.07,3.07,0,0,1,.34-.55,1.6,1.6,0,0,1,.48-.4l.28-.16a.09.09,0,0,1,.11,0,.17.17,0,0,1,.05.15v.63a.35.35,0,0,1-.05.2.37.37,0,0,1-.11.15Z"
                                    style="fill: rgb(69, 90, 100); transform-origin: 276.351px 132.597px;"
                                    id="el3le2vzff5ks" class="animable"></path>
                                <path
                                    d="M277.68,131.81a5.53,5.53,0,0,1,.11-1.06,4.87,4.87,0,0,1,.3-1,3.47,3.47,0,0,1,.48-.82,2,2,0,0,1,.62-.56,1,1,0,0,1,.62-.17.71.71,0,0,1,.48.25,1.49,1.49,0,0,1,.31.59,3.22,3.22,0,0,1,.1.86v.42a.41.41,0,0,1-.05.21.37.37,0,0,1-.11.15l-2.06,1.18a.85.85,0,0,0,.06.35.38.38,0,0,0,.16.19.34.34,0,0,0,.23,0,.77.77,0,0,0,.26-.1,1.16,1.16,0,0,0,.32-.24,1.31,1.31,0,0,0,.2-.28c.05-.07.08-.13.11-.16a.4.4,0,0,1,.12-.1l.49-.28q.07,0,.12,0a.17.17,0,0,1,.05.15,1.35,1.35,0,0,1-.1.4,3.88,3.88,0,0,1-.26.56,4.58,4.58,0,0,1-.44.6,2.63,2.63,0,0,1-.61.49,1.16,1.16,0,0,1-.62.18.68.68,0,0,1-.48-.26,1.54,1.54,0,0,1-.3-.63A4,4,0,0,1,277.68,131.81Zm1.51-2.29a1.08,1.08,0,0,0-.3.26,1.46,1.46,0,0,0-.22.33,2.6,2.6,0,0,0-.13.36,2.33,2.33,0,0,0-.06.33l1.39-.8a1.26,1.26,0,0,0,0-.27.57.57,0,0,0-.11-.22.27.27,0,0,0-.21-.09A.61.61,0,0,0,279.19,129.52Z"
                                    style="fill: rgb(69, 90, 100); transform-origin: 279.19px 130.909px;"
                                    id="elmabkqag0xuh" class="animable"></path>
                                <path
                                    d="M283.11,129.73a.21.21,0,0,0,0-.15.21.21,0,0,0-.15,0,1.35,1.35,0,0,0-.29,0l-.45.11a1,1,0,0,1-.45,0,.52.52,0,0,1-.29-.16.81.81,0,0,1-.15-.35,3.49,3.49,0,0,1,0-.5,2.31,2.31,0,0,1,.09-.61,2.75,2.75,0,0,1,.25-.63,3,3,0,0,1,.39-.57,2,2,0,0,1,.54-.44,1.45,1.45,0,0,1,.53-.21.77.77,0,0,1,.41,0,.57.57,0,0,1,.26.25.93.93,0,0,1,.1.38.33.33,0,0,1-.05.21.31.31,0,0,1-.12.15l-.47.27a.16.16,0,0,1-.14,0l-.1-.06a.3.3,0,0,0-.15,0,.65.65,0,0,0-.27.11,1,1,0,0,0-.33.28.59.59,0,0,0-.14.38.35.35,0,0,0,0,.16.17.17,0,0,0,.13.05l.27,0,.44-.11a.74.74,0,0,1,.77.12,1.2,1.2,0,0,1,.22.82,2.18,2.18,0,0,1-.09.6,2.73,2.73,0,0,1-.27.64,2.7,2.7,0,0,1-.43.59,2.5,2.5,0,0,1-.57.46,1.33,1.33,0,0,1-.58.21.72.72,0,0,1-.42-.06.62.62,0,0,1-.26-.27,1,1,0,0,1-.1-.41.39.39,0,0,1,0-.21.35.35,0,0,1,.12-.14l.48-.28a.14.14,0,0,1,.14,0l.1.09a.21.21,0,0,0,.16.06.75.75,0,0,0,.32-.12l.19-.12.18-.17.14-.19A.54.54,0,0,0,283.11,129.73Z"
                                    style="fill: rgb(69, 90, 100); transform-origin: 282.596px 128.966px;"
                                    id="elgnowdhzdqaf" class="animable"></path>
                                <path
                                    d="M286.31,127.88a.18.18,0,0,0,0-.14.21.21,0,0,0-.15,0l-.29,0-.45.11a1,1,0,0,1-.45,0,.5.5,0,0,1-.29-.17.76.76,0,0,1-.15-.34,2.53,2.53,0,0,1,0-.5,2.69,2.69,0,0,1,.08-.61,3.07,3.07,0,0,1,.65-1.21,2,2,0,0,1,.53-.44,1.7,1.7,0,0,1,.54-.21.73.73,0,0,1,.4,0,.51.51,0,0,1,.26.24.94.94,0,0,1,.11.39.43.43,0,0,1,0,.21.24.24,0,0,1-.12.14l-.47.28c-.06,0-.11,0-.14,0l-.1-.06a.33.33,0,0,0-.15,0,.59.59,0,0,0-.28.11,1.18,1.18,0,0,0-.32.27.54.54,0,0,0-.14.38.32.32,0,0,0,0,.16.16.16,0,0,0,.13.05l.26,0,.44-.11q.56-.14.78.12a1.22,1.22,0,0,1,.22.82,2.31,2.31,0,0,1-.09.61,2.92,2.92,0,0,1-.27.64,3.41,3.41,0,0,1-.43.59,2.32,2.32,0,0,1-.58.45,1.41,1.41,0,0,1-.57.22.69.69,0,0,1-.42-.07.64.64,0,0,1-.27-.27.91.91,0,0,1-.09-.41.38.38,0,0,1,0-.2.49.49,0,0,1,.12-.15l.48-.27c.06,0,.1,0,.13,0l.11.1a.25.25,0,0,0,.16.05.55.55,0,0,0,.31-.11l.2-.13.18-.17a1.33,1.33,0,0,0,.14-.19A.54.54,0,0,0,286.31,127.88Z"
                                    style="fill: rgb(69, 90, 100); transform-origin: 285.846px 127.115px;"
                                    id="elcgw1w6c15ck" class="animable"></path>
                                <polygon points="246.07 156.94 346.05 99.21 346.05 108.09 246.07 165.82 246.07 156.94"
                                    style="fill: rgb(224, 224, 224); transform-origin: 296.06px 132.515px;"
                                    id="el8aaeu0d7o3l" class="animable"></polygon>
                                <path
                                    d="M248.62,174.45l1.17-3.8a1.6,1.6,0,0,1,.08-.2.46.46,0,0,1,.18-.21l.42-.24a.11.11,0,0,1,.12,0,.21.21,0,0,1,0,.15v6.12a.52.52,0,0,1,0,.21.43.43,0,0,1-.12.14l-.5.29a.11.11,0,0,1-.12,0,.21.21,0,0,1,0-.15v-3.7l-.79,2.59a1.13,1.13,0,0,1-.09.2.4.4,0,0,1-.14.17l-.32.18c-.06,0-.11,0-.14,0a.41.41,0,0,1-.09-.1l-.8-1.67v3.7a.54.54,0,0,1-.05.21.28.28,0,0,1-.12.14l-.49.29a.1.1,0,0,1-.12,0,.21.21,0,0,1-.05-.15v-6.12a.54.54,0,0,1,.05-.21.28.28,0,0,1,.12-.14l.41-.24c.09-.05.15-.05.19,0l.08.1Z"
                                    style="fill: rgb(69, 90, 100); transform-origin: 248.627px 174.386px;"
                                    id="el1b19fp71x42" class="animable"></path>
                                <path
                                    d="M251.38,173.64a5.51,5.51,0,0,1,.1-1.06,4.87,4.87,0,0,1,.3-1,3.84,3.84,0,0,1,.48-.82,2.19,2.19,0,0,1,.63-.56,1,1,0,0,1,.62-.17.71.71,0,0,1,.48.25,1.42,1.42,0,0,1,.3.59,3.21,3.21,0,0,1,.11.86v.42a.54.54,0,0,1-.05.21.31.31,0,0,1-.12.15l-2,1.18a.85.85,0,0,0,.06.35.42.42,0,0,0,.15.19.35.35,0,0,0,.23,0,.64.64,0,0,0,.27-.1,1.11,1.11,0,0,0,.31-.24,1.37,1.37,0,0,0,.21-.28.85.85,0,0,1,.11-.16.4.4,0,0,1,.12-.1l.49-.28a.09.09,0,0,1,.12,0,.18.18,0,0,1,0,.16,1.29,1.29,0,0,1-.09.39,3.14,3.14,0,0,1-.27.56,3.82,3.82,0,0,1-.44.6,2.39,2.39,0,0,1-.6.49,1.17,1.17,0,0,1-.63.18.7.7,0,0,1-.48-.26,1.54,1.54,0,0,1-.3-.63A4,4,0,0,1,251.38,173.64Zm1.51-2.29a1.13,1.13,0,0,0-.31.26,1.85,1.85,0,0,0-.21.33,1.74,1.74,0,0,0-.13.36,2.33,2.33,0,0,0-.06.33l1.39-.8a2.56,2.56,0,0,0,0-.27.46.46,0,0,0-.11-.22.25.25,0,0,0-.2-.09A.58.58,0,0,0,252.89,171.35Z"
                                    style="fill: rgb(69, 90, 100); transform-origin: 252.89px 172.739px;"
                                    id="elwjpga7n6sea" class="animable"></path>
                                <path
                                    d="M256.81,171.56a.27.27,0,0,0,0-.15.23.23,0,0,0-.16,0,1.28,1.28,0,0,0-.28.05l-.46.11a1,1,0,0,1-.44,0,.49.49,0,0,1-.29-.16.81.81,0,0,1-.15-.35,2.47,2.47,0,0,1,0-.5,2.28,2.28,0,0,1,.08-.61,3.3,3.3,0,0,1,.25-.63,3.09,3.09,0,0,1,.4-.57,1.86,1.86,0,0,1,.53-.44,1.42,1.42,0,0,1,.54-.21.73.73,0,0,1,.4,0,.53.53,0,0,1,.26.25.94.94,0,0,1,.11.39.53.53,0,0,1,0,.2.38.38,0,0,1-.12.15l-.47.27a.17.17,0,0,1-.14,0l-.1-.06a.24.24,0,0,0-.15,0,.63.63,0,0,0-.28.1,1.06,1.06,0,0,0-.32.28.55.55,0,0,0-.15.38.34.34,0,0,0,0,.16.14.14,0,0,0,.13.05l.26,0,.44-.11c.37-.09.62,0,.77.12a1.2,1.2,0,0,1,.23.82,2.18,2.18,0,0,1-.09.6,4,4,0,0,1-.27.64,3.07,3.07,0,0,1-.43.59,2.35,2.35,0,0,1-.58.46,1.34,1.34,0,0,1-.57.21.7.7,0,0,1-.42-.06.59.59,0,0,1-.27-.27,1.12,1.12,0,0,1-.1-.41.54.54,0,0,1,.05-.21.24.24,0,0,1,.12-.14l.47-.28c.07,0,.11,0,.14,0l.11.09a.21.21,0,0,0,.16.06.61.61,0,0,0,.31-.12,1,1,0,0,0,.19-.12,1,1,0,0,0,.18-.17.77.77,0,0,0,.14-.19A.42.42,0,0,0,256.81,171.56Z"
                                    style="fill: rgb(69, 90, 100); transform-origin: 256.337px 170.841px;"
                                    id="elmt9obxbiov" class="animable"></path>
                                <path
                                    d="M260,169.71a.18.18,0,0,0-.05-.14.21.21,0,0,0-.15,0,2.11,2.11,0,0,0-.28.05l-.46.11a1,1,0,0,1-.45,0,.48.48,0,0,1-.28-.17.59.59,0,0,1-.15-.34,2.49,2.49,0,0,1-.05-.5,2.25,2.25,0,0,1,.09-.61,2.85,2.85,0,0,1,.25-.63,3.27,3.27,0,0,1,.39-.58,2.27,2.27,0,0,1,.54-.44,1.86,1.86,0,0,1,.54-.21.74.74,0,0,1,.4,0,.55.55,0,0,1,.26.24.93.93,0,0,1,.1.39.39.39,0,0,1,0,.21.43.43,0,0,1-.12.14l-.48.27c-.06,0-.1.05-.13,0a.3.3,0,0,1-.11-.06.26.26,0,0,0-.14,0,.68.68,0,0,0-.28.11,1.4,1.4,0,0,0-.33.27.6.6,0,0,0-.14.39.22.22,0,0,0,0,.15s.06,0,.12,0l.27,0,.44-.11a.74.74,0,0,1,.77.12,1.22,1.22,0,0,1,.23.82,2.35,2.35,0,0,1-.1.61,3.44,3.44,0,0,1-.26.64,4.66,4.66,0,0,1-.43.59,2.74,2.74,0,0,1-.58.45,1.51,1.51,0,0,1-.58.22.72.72,0,0,1-.42-.07.62.62,0,0,1-.26-.27,1.08,1.08,0,0,1-.1-.41.39.39,0,0,1,.05-.2.31.31,0,0,1,.12-.15l.47-.27c.06,0,.11,0,.14,0l.1.09a.29.29,0,0,0,.17.05.57.57,0,0,0,.31-.11l.19-.13a1,1,0,0,0,.18-.17.85.85,0,0,0,.14-.19A.42.42,0,0,0,260,169.71Z"
                                    style="fill: rgb(69, 90, 100); transform-origin: 259.437px 168.965px;"
                                    id="el9zr5nxv6utp" class="animable"></path>
                                <path
                                    d="M261.46,166.57a3.13,3.13,0,0,1,.12-.49,2.83,2.83,0,0,1,.25-.57,3,3,0,0,1,.4-.56,2.13,2.13,0,0,1,.55-.44,1.23,1.23,0,0,1,.56-.2.6.6,0,0,1,.44.12.93.93,0,0,1,.28.46,3,3,0,0,1,.1.8v2.78a.54.54,0,0,1-.05.21c0,.07-.07.12-.12.14l-.47.27a.08.08,0,0,1-.11,0,.21.21,0,0,1-.05-.16v-.31a2.72,2.72,0,0,1-.38.68,1.79,1.79,0,0,1-.61.55,1.07,1.07,0,0,1-.48.17.52.52,0,0,1-.35-.1.92.92,0,0,1-.22-.35,1.73,1.73,0,0,1-.07-.54,2.43,2.43,0,0,1,.3-1.2,3.51,3.51,0,0,1,.8-1l1-.84c0-.26-.06-.41-.17-.46a.51.51,0,0,0-.41.08.83.83,0,0,0-.24.21,1.59,1.59,0,0,0-.17.27.55.55,0,0,1-.1.16.28.28,0,0,1-.1.09l-.57.33a.08.08,0,0,1-.11,0S261.45,166.64,261.46,166.57Zm1,2.08a1.36,1.36,0,0,0,.37-.31,1.56,1.56,0,0,0,.27-.4,1.92,1.92,0,0,0,.17-.43,1.64,1.64,0,0,0,.06-.42V167l-.84.71a1.45,1.45,0,0,0-.36.41.72.72,0,0,0-.11.41c0,.13,0,.2.13.21A.44.44,0,0,0,262.49,168.65Z"
                                    style="fill: rgb(69, 90, 100); transform-origin: 262.705px 167.164px;"
                                    id="el035dkzjuv4s4" class="animable"></path>
                                <path
                                    d="M266.37,168.4a1,1,0,0,0,.26-.22,1.43,1.43,0,0,0,.25-.33,2.53,2.53,0,0,0,.18-.44,1.81,1.81,0,0,0,.07-.52v-.35a2.08,2.08,0,0,1-.13.26c-.05.09-.12.19-.19.29a3.65,3.65,0,0,1-.27.3,1.76,1.76,0,0,1-.34.25.87.87,0,0,1-.55.14.71.71,0,0,1-.43-.25A1.49,1.49,0,0,1,265,167a3,3,0,0,1-.12-.77v-.67a4.84,4.84,0,0,1,.12-.9,4.65,4.65,0,0,1,.27-.87,3.58,3.58,0,0,1,.43-.74,2,2,0,0,1,.55-.5,1.29,1.29,0,0,1,.34-.14.63.63,0,0,1,.27,0,.4.4,0,0,1,.19.07.5.5,0,0,1,.13.11v-.22a.54.54,0,0,1,.05-.21.28.28,0,0,1,.12-.14l.46-.27a.09.09,0,0,1,.12,0,.21.21,0,0,1,.05.15v4.44a4.44,4.44,0,0,1-.41,2,2.89,2.89,0,0,1-1.15,1.24,1.52,1.52,0,0,1-.58.21.9.9,0,0,1-.47-.07.77.77,0,0,1-.31-.31,1,1,0,0,1-.13-.47.41.41,0,0,1,.05-.21.31.31,0,0,1,.12-.15l.41-.24a.12.12,0,0,1,.15,0l.11.1a.28.28,0,0,0,.22.14A.74.74,0,0,0,266.37,168.4Zm-.74-3.25a4.68,4.68,0,0,0,0,.53c0,.4.11.64.25.74a.45.45,0,0,0,.51,0,1.34,1.34,0,0,0,.5-.57,2.19,2.19,0,0,0,.24-.92c0-.1,0-.22,0-.37s0-.26,0-.35a.85.85,0,0,0-.24-.64.4.4,0,0,0-.5,0,1.34,1.34,0,0,0-.51.56A2.55,2.55,0,0,0,265.63,165.15Z"
                                    style="fill: rgb(69, 90, 100); transform-origin: 266.431px 165.762px;"
                                    id="ele0rv2jp3nov" class="animable"></path>
                                <path
                                    d="M268.62,163.69a5.44,5.44,0,0,1,.1-1.06,4.57,4.57,0,0,1,.31-1,4.08,4.08,0,0,1,.47-.82,2.35,2.35,0,0,1,.63-.56,1,1,0,0,1,.62-.16.74.74,0,0,1,.48.24,1.42,1.42,0,0,1,.3.59,3.26,3.26,0,0,1,.11.86v.43a.54.54,0,0,1-.05.21.24.24,0,0,1-.12.14l-2.05,1.19a.88.88,0,0,0,.06.35.42.42,0,0,0,.15.19.45.45,0,0,0,.23,0,1,1,0,0,0,.27-.1,1.69,1.69,0,0,0,.32-.25,2.34,2.34,0,0,0,.2-.27,1,1,0,0,1,.11-.17l.12-.09.49-.29a.11.11,0,0,1,.12,0,.17.17,0,0,1,0,.15,1.4,1.4,0,0,1-.09.4,3.14,3.14,0,0,1-.27.56,3.35,3.35,0,0,1-.44.59,2.19,2.19,0,0,1-.6.49,1,1,0,0,1-.63.18.67.67,0,0,1-.47-.25,1.43,1.43,0,0,1-.31-.63A4,4,0,0,1,268.62,163.69Zm1.51-2.29a1.26,1.26,0,0,0-.31.25,2.39,2.39,0,0,0-.21.34,1.55,1.55,0,0,0-.13.36,2.33,2.33,0,0,0-.06.33l1.39-.8a1.28,1.28,0,0,0-.05-.27.49.49,0,0,0-.11-.23.34.34,0,0,0-.2-.09A.61.61,0,0,0,270.13,161.4Z"
                                    style="fill: rgb(69, 90, 100); transform-origin: 270.127px 162.789px;"
                                    id="elpladuacx3d" class="animable"></path>
                                <polygon points="246.07 183.58 346.05 125.86 346.05 156.94 246.07 214.66 246.07 183.58"
                                    style="fill: rgb(224, 224, 224); transform-origin: 296.06px 170.26px;"
                                    id="elc0cvhpi2j8d" class="animable"></polygon>
                            </g>
                        </g>
                        <g id="freepik--character-2--inject-61" class="animable animator-active"
                            style="transform-origin: 165.293px 235.292px;">
                            <g id="freepik--window--inject-61" class="animable"
                                style="transform-origin: 157.01px 235.292px;">
                                <path
                                    d="M211.45,68.42,95.71,135.15a5.77,5.77,0,0,0-2.6,4.51V396.75a5.72,5.72,0,0,0,2.61,4.5l1.63.93a5.76,5.76,0,0,0,5.21,0L218.3,335.33a5.76,5.76,0,0,0,2.61-4.51v-257a5.72,5.72,0,0,0-2.62-4.5l-1.62-.93A5.78,5.78,0,0,0,211.45,68.42Z"
                                    style="fill: rgb(224, 224, 224); transform-origin: 157.01px 235.292px;"
                                    id="el2bx41zx5vlv" class="animable"></path>
                                <path
                                    d="M220.91,331c0,2.29-1.61,3.75-3.61,4.89L103.56,401.58c-2,1.15-3.6.22-3.6-2.08V144.71h0a7.16,7.16,0,0,1,3.58-6.21L217.3,72.79a2.41,2.41,0,0,1,3.61,2.08h0Z"
                                    style="fill: rgb(250, 250, 250); transform-origin: 160.435px 237.272px;"
                                    id="eleq1lm6v6fbb" class="animable"></path>
                                <path
                                    d="M218.5,73.47h0a1.4,1.4,0,0,1,1.4,1.4V331c0,1.55-1,2.79-3.1,4L103.06,400.71a2.28,2.28,0,0,1-1.11.36c-.86,0-1-1-1-1.57V144.71a6.19,6.19,0,0,1,3.08-5.34L217.8,73.66a1.37,1.37,0,0,1,.7-.19m0-1a2.43,2.43,0,0,0-1.2.32L103.54,138.5a7.16,7.16,0,0,0-3.58,6.21V399.5c0,1.63.81,2.57,2,2.57a3.29,3.29,0,0,0,1.61-.49L217.3,335.9c2-1.14,3.61-2.6,3.61-4.89V74.87a2.41,2.41,0,0,0-2.41-2.4Z"
                                    style="fill: rgb(224, 224, 224); transform-origin: 160.435px 237.27px;"
                                    id="eltf36fj99j6" class="animable"></path>
                                <path
                                    d="M220.91,73.84v1a2.41,2.41,0,0,0-3.61-2.08L103.54,138.51a7.06,7.06,0,0,0-2.62,2.61l0,.08-7-4.06a5.36,5.36,0,0,1,1.88-2L211.45,68.42a5.81,5.81,0,0,1,5.22,0l1.62.93A5.73,5.73,0,0,1,220.91,73.84Z"
                                    style="fill: rgb(240, 240, 240); transform-origin: 157.415px 104.5px;"
                                    id="elgjbv63unple" class="animable"></path>
                                <path
                                    d="M122.17,142.14a.32.32,0,0,1,0-.17v-.84l-1.31.76c-.08,0-.11,0-.11-.12v-.3a.86.86,0,0,1,0-.17.9.9,0,0,1,0-.16l1.39-3.81a1.13,1.13,0,0,1,.07-.15.24.24,0,0,1,.09-.08l.18-.11q.09,0,.12,0s0,.09,0,.19v2.93l.29-.17c.06,0,.09,0,.12,0a.41.41,0,0,1,0,.19v.2a.58.58,0,0,1,0,.21.28.28,0,0,1-.12.12l-.29.17v.84a.41.41,0,0,1,0,.21.22.22,0,0,1-.12.13l-.22.13C122.24,142.16,122.2,142.17,122.17,142.14Zm.06-1.78v-2.09l-1,2.64Z"
                                    style="fill: rgb(69, 90, 100); transform-origin: 121.883px 139.574px;"
                                    id="elvlgxbpxowgj" class="animable"></path>
                                <path
                                    d="M123.73,140.73a2.81,2.81,0,0,1-.38-1.71,5.41,5.41,0,0,1,.39-2.16,2.6,2.6,0,0,1,1.08-1.31,1.46,1.46,0,0,1,.53-.2.56.56,0,0,1,.41.06.08.08,0,0,1,0,.07.38.38,0,0,1,0,.1l-.12.44a.31.31,0,0,1,0,.09h-.06a.74.74,0,0,0-.67.1,1.9,1.9,0,0,0-.74.91,4.06,4.06,0,0,0-.27,1.59,2.27,2.27,0,0,0,.26,1.3c.18.21.42.23.72.05a1.72,1.72,0,0,0,.32-.23,1.66,1.66,0,0,0,.26-.28v-1.37l-.55.32s-.09,0-.11,0a.26.26,0,0,1,0-.18v-.19a.43.43,0,0,1,0-.22.25.25,0,0,1,.11-.12l.88-.5c.06,0,.1,0,.13,0a.47.47,0,0,1,0,.22v1.94a.72.72,0,0,1,0,.17.24.24,0,0,1,0,.13,2.71,2.71,0,0,1-1,1C124.35,141.05,124,141,123.73,140.73Z"
                                    style="fill: rgb(69, 90, 100); transform-origin: 124.635px 138.145px;"
                                    id="elo27dlrzwnf" class="animable"></path>
                                <path
                                    d="M134.8,134a2,2,0,0,1-.76,1.61c-.42.25-.76-.08-.76-.73a2,2,0,0,1,.76-1.61C134.46,133.05,134.8,133.38,134.8,134Z"
                                    style="fill: rgb(69, 90, 100); transform-origin: 134.04px 134.448px;"
                                    id="el1ae89p1y4tk" class="animable"></path>
                                <path
                                    d="M134,131.38a4.57,4.57,0,0,0-1.77,2.66c-.07.24,0,.46.08.53h0c.14.09.36-.09.44-.39A3.24,3.24,0,0,1,134,132.3a.81.81,0,0,1,1.25.44c.08.2.3.14.44-.12h0a.77.77,0,0,0,.08-.63A1.14,1.14,0,0,0,134,131.38Z"
                                    style="fill: rgb(69, 90, 100); transform-origin: 134.003px 132.877px;"
                                    id="elve6ybzqooeb" class="animable"></path>
                                <path
                                    d="M134,129.5a7.12,7.12,0,0,0-2.72,3.87c-.09.25-.06.51.06.59h0c.14.09.35-.09.44-.37a5.82,5.82,0,0,1,2.22-3.17,1.47,1.47,0,0,1,2.22.6c.1.18.3.12.44-.13h0a.75.75,0,0,0,.06-.66A1.81,1.81,0,0,0,134,129.5Z"
                                    style="fill: rgb(69, 90, 100); transform-origin: 133.999px 131.568px;"
                                    id="ellniyio6p09" class="animable"></path>
                                <path
                                    d="M159.85,117.16a.08.08,0,0,1,.1,0,.21.21,0,0,1,0,.12v.76a.58.58,0,0,1,0,.18.27.27,0,0,1-.1.11l-.47.27a.07.07,0,0,1-.09,0,.17.17,0,0,1,0-.13v-.76a.35.35,0,0,1,0-.17.29.29,0,0,1,.09-.12Zm0,2.72a.08.08,0,0,1,.1,0,.17.17,0,0,1,0,.12v.76a.47.47,0,0,1,0,.17.25.25,0,0,1-.1.12l-.47.27a.06.06,0,0,1-.09,0s0-.06,0-.12v-.76a.35.35,0,0,1,0-.17.24.24,0,0,1,.09-.12Z"
                                    style="fill: rgb(69, 90, 100); transform-origin: 159.619px 119.241px;"
                                    id="ela9vcig731eu" class="animable"></path>
                                <path
                                    d="M162.54,119.51a.08.08,0,0,1-.09,0,.17.17,0,0,1,0-.13v-.94l-1.56.91a.08.08,0,0,1-.1,0,.16.16,0,0,1,0-.12v-.55a.66.66,0,0,1,0-.21c0-.07,0-.14.08-.22l1.54-3.86a.63.63,0,0,1,.21-.31l.38-.22a.08.08,0,0,1,.1,0,.17.17,0,0,1,0,.13v3.1l.43-.25a.08.08,0,0,1,.1,0,.15.15,0,0,1,0,.12v.55a.33.33,0,0,1,0,.17.25.25,0,0,1-.1.12l-.43.25V119a.33.33,0,0,1,0,.17.25.25,0,0,1-.1.12Zm-.13-2.05V115.8l-.86,2.16Z"
                                    style="fill: rgb(69, 90, 100); transform-origin: 162.21px 116.683px;"
                                    id="elggoca5j2xg" class="animable"></path>
                                <path
                                    d="M157.37,122.47a.08.08,0,0,1-.1,0,.22.22,0,0,1,0-.13v-.94l-1.56.91a.08.08,0,0,1-.1,0,.21.21,0,0,1,0-.12v-.56a.45.45,0,0,1,0-.2,1.87,1.87,0,0,1,.07-.22l1.55-3.86a.57.57,0,0,1,.2-.31l.39-.23a.07.07,0,0,1,.09,0,.17.17,0,0,1,0,.13V120l.44-.25a.06.06,0,0,1,.09,0s0,.06,0,.12v.55a.33.33,0,0,1,0,.17.24.24,0,0,1-.09.12l-.44.25V122a.35.35,0,0,1,0,.17.24.24,0,0,1-.09.12Zm-.14-2v-1.66l-.86,2.16Z"
                                    style="fill: rgb(69, 90, 100); transform-origin: 157.025px 119.641px;"
                                    id="elopyklg5ah09" class="animable"></path>
                                <path
                                    d="M164.57,113.11a.35.35,0,0,1,0-.17.25.25,0,0,1,.1-.12l1.89-1.09a.09.09,0,0,1,.1,0,.22.22,0,0,1,0,.13v.55a.53.53,0,0,1,0,.17.25.25,0,0,1-.1.12l-1.41.82-.06,1a1.23,1.23,0,0,1,.27-.25l.22-.15a1.2,1.2,0,0,1,.52-.18.6.6,0,0,1,.42.1.87.87,0,0,1,.28.4,2.06,2.06,0,0,1,.1.71,3.62,3.62,0,0,1-.1.91,3.17,3.17,0,0,1-.29.75,2.21,2.21,0,0,1-.42.58,2.72,2.72,0,0,1-.51.4,1.64,1.64,0,0,1-.6.22.62.62,0,0,1-.41-.1.77.77,0,0,1-.25-.35,1.61,1.61,0,0,1-.09-.52.25.25,0,0,1,0-.17.24.24,0,0,1,.09-.12l.41-.24s.07,0,.09,0a.15.15,0,0,1,.06.11.55.55,0,0,0,.09.23.29.29,0,0,0,.16.09.33.33,0,0,0,.19,0,1.38,1.38,0,0,0,.22-.1,1.15,1.15,0,0,0,.46-.51,1.61,1.61,0,0,0,.18-.76.54.54,0,0,0-.18-.48.41.41,0,0,0-.46,0,1.25,1.25,0,0,0-.24.18.67.67,0,0,0-.14.16l-.1.14a.38.38,0,0,1-.12.1l-.46.27a.08.08,0,0,1-.1,0s0-.06,0-.12Z"
                                    style="fill: rgb(69, 90, 100); transform-origin: 165.558px 114.864px;"
                                    id="elscbin8v0ko" class="animable"></path>
                                <polygon points="107.67 151.14 107.67 149.52 109.07 148.71 109.07 150.33 107.67 151.14"
                                    style="fill: rgb(69, 90, 100); transform-origin: 108.37px 149.925px;"
                                    id="elybrwvrg5rd9" class="animable"></polygon>
                                <polygon points="109.77 149.93 109.77 146.69 111.17 145.88 111.17 149.12 109.77 149.93"
                                    style="fill: rgb(69, 90, 100); transform-origin: 110.47px 147.905px;"
                                    id="elbflexapdogk" class="animable"></polygon>
                                <polygon points="111.87 148.71 111.87 143.86 113.27 143.05 113.27 147.9 111.87 148.71"
                                    style="fill: rgb(69, 90, 100); transform-origin: 112.57px 145.88px;"
                                    id="elkzwwktrdyyk" class="animable"></polygon>
                                <polygon points="113.97 147.5 113.97 141.03 115.38 140.22 115.38 146.69 113.97 147.5"
                                    style="fill: rgb(69, 90, 100); transform-origin: 114.675px 143.86px;"
                                    id="el24o5tx7wves" class="animable"></polygon>
                                <path
                                    d="M212.4,85.42a.37.37,0,0,0-.52-.17l-5.24,3a2,2,0,0,0-.6,1.59v2.94a1.67,1.67,0,0,0,.23.94.42.42,0,0,0,.21.19.31.31,0,0,0,.31,0l5.23-3a2,2,0,0,0,.6-1.59V86.36A1.79,1.79,0,0,0,212.4,85.42Zm-6,7.93a.83.83,0,0,1-.09-.43V90a1.57,1.57,0,0,1,.47-1.21l5.23-3a.21.21,0,0,1,.17,0,.17.17,0,0,1,.06.06.79.79,0,0,1,.09.43v2.94a1.57,1.57,0,0,1-.46,1.21l-5.24,3A.15.15,0,0,1,206.41,93.35Z"
                                    style="fill: rgb(69, 90, 100); transform-origin: 209.33px 89.5767px;"
                                    id="ellvtxzwvouok" class="animable"></path>
                                <path d="M207.78,88.71v3.48l-.82.47a.11.11,0,0,1-.16-.09V90a1.21,1.21,0,0,1,.34-.9Z"
                                    style="fill: rgb(69, 90, 100); transform-origin: 207.289px 90.6911px;"
                                    id="elahczz10inx7" class="animable"></path>
                                <polygon points="208.16 88.5 209.14 87.93 209.14 91.41 208.16 91.97 208.16 88.5"
                                    style="fill: rgb(69, 90, 100); transform-origin: 208.65px 89.95px;"
                                    id="ela20ivuh7e8" class="animable"></polygon>
                                <polygon points="209.52 87.72 210.51 87.14 210.51 90.63 209.52 91.2 209.52 87.72"
                                    style="fill: rgb(69, 90, 100); transform-origin: 210.015px 89.17px;"
                                    id="eln6fp1uqdx6r" class="animable"></polygon>
                                <path
                                    d="M211.87,86.59V89.1a1.3,1.3,0,0,1-.65,1.12l-.33.19V86.93l.78-.45A.13.13,0,0,1,211.87,86.59Z"
                                    style="fill: rgb(69, 90, 100); transform-origin: 211.38px 88.4348px;"
                                    id="eljgw0zq7nvo" class="animable"></path>
                                <path d="M212.82,86.27c.14-.09.26.33.26.93v.55a2.24,2.24,0,0,1-.26,1.27l-.27.18V86.42Z"
                                    style="fill: rgb(69, 90, 100); transform-origin: 212.82px 87.7289px;"
                                    id="elcjlm0din2bm" class="animable"></path>
                                <polygon points="198.09 95.16 203.18 90.64 201.61 97.26 200.87 94.51 198.09 95.16"
                                    style="fill: rgb(69, 90, 100); transform-origin: 200.635px 93.95px;"
                                    id="el67rzwgqam3t" class="animable"></polygon>
                                <path
                                    d="M110.1,158,192,110.74c1.36-.78,2.46-.14,2.46,1.42v7.65a5.45,5.45,0,0,1-2.46,4.26L110.1,171.35c-1.36.78-2.46.15-2.46-1.42v-7.64A5.42,5.42,0,0,1,110.1,158Z"
                                    style="fill: rgb(110, 101, 198); transform-origin: 151.05px 141.046px;"
                                    id="elth9flspwfb9" class="animable"></path>
                                <path
                                    d="M200.64,118.1a.94.94,0,0,1-.82-.47.93.93,0,0,1,.34-1.29L211,110a1,1,0,0,1,1,1.64L201.11,118A.9.9,0,0,1,200.64,118.1Z"
                                    style="fill: rgb(224, 224, 224); transform-origin: 205.974px 114.033px;"
                                    id="eldwweay76z4i" class="animable"></path>
                                <path
                                    d="M200.64,113.43a.94.94,0,0,1-.48-1.76L211,105.35a.95.95,0,1,1,1,1.63l-10.83,6.32A.9.9,0,0,1,200.64,113.43Z"
                                    style="fill: rgb(224, 224, 224); transform-origin: 206.069px 109.32px;"
                                    id="el8354a1x9mmf" class="animable"></path>
                                <path
                                    d="M200.64,108.77a1,1,0,0,1-.48-1.77L211,100.68a1,1,0,0,1,1.3.34.94.94,0,0,1-.34,1.29l-10.83,6.33A1,1,0,0,1,200.64,108.77Z"
                                    style="fill: rgb(224, 224, 224); transform-origin: 206.107px 104.668px;"
                                    id="elwb720x7sgy" class="animable"></path>
                            </g>
                            <g id="freepik--Character--inject-61" class="animable"
                                style="transform-origin: 168.718px 292.966px;">
                                <g id="freepik--Botom--inject-61" class="animable"
                                    style="transform-origin: 134.07px 373.411px;">
                                    <path
                                        d="M100,344.75V399.6c0,2.21,1.56,3.1,3.46,2l34.31-19.81,3.33-1.92,26.49-15.3c.15-5,.28-9.22.37-12.33.12-3.59.18-5.68.18-5.68Z"
                                        style="fill: rgb(69, 90, 100); transform-origin: 134.07px 373.411px;"
                                        id="elqequ0g33rv" class="animable"></path>
                                </g>
                                <g id="freepik--Top--inject-61" class="animable"
                                    style="transform-origin: 168.718px 273.471px;">
                                    <path
                                        d="M206.5,271.07a27.12,27.12,0,0,0,.58-4.22c.56-6.82,4.09-12.87,7.88-18.41.64-.94,1.3-1.88,2-2.82a13.92,13.92,0,0,0,.92-1.39c.24-.47.46-.85,1.12-.72a1.88,1.88,0,0,1,1.1.82,5.56,5.56,0,0,1,.67,4.48,26.65,26.65,0,0,1-1.63,4.36c-.46,1.11.86.77,1.46.52,2.94-1.23,5.89-5.34,7.74-7.87,1.21-1.66,2.11-3.53,3.57-5a6.26,6.26,0,0,1,3.27-1.87c.85-.15,1.68,0,1.77,1.08a4.36,4.36,0,0,1-.52,1.93c-.52,1.28-1,2.44-.4,3.8a10.81,10.81,0,0,1,1,2.57c.17,1.17-.36,2.33-.33,3.51s.63,1.92.76,2.91-.54,2.52-.9,3.5a28.46,28.46,0,0,1-3.52,6.54,54.31,54.31,0,0,1-7.63,8.34,14.92,14.92,0,0,0-4,4.81,31.67,31.67,0,0,0-1.69,6.08c-.54,2.58-1,5.18-1.57,7.76-5.74,28-8.61,29.55-12.25,33.72-2.2,2.52-8.55,4.9-17.18-4C179.14,311.6,160.82,286,160.82,286L157,251.79s3.41.92,7.72,2.15c4,1.15,8.26,5.19,11.12,9.71C181.75,273,197,297.34,197,297.34S205.34,274.71,206.5,271.07Z"
                                        style="fill: rgb(255, 189, 167); transform-origin: 197.238px 283.353px;"
                                        id="el35q73fyceks" class="animable"></path>
                                    <path
                                        d="M159.72,252.11c6.32.84,10,2.8,13.73,7.18s18.05,28.28,18.05,28.28-4.88,10.52-18.05,16.07l-16.37-21.46Z"
                                        style="fill: rgb(110, 101, 198); transform-origin: 174.29px 277.875px;"
                                        id="elshbm0uqa83l" class="animable"></path>
                                    <g id="el2gwlwzyh1bd">
                                        <path
                                            d="M159.72,252.11c6.32.84,10,2.8,13.73,7.18s18.05,28.28,18.05,28.28-4.88,10.52-18.05,16.07l-16.37-21.46Z"
                                            style="opacity: 0.15; transform-origin: 174.29px 277.875px;"
                                            class="animable"></path>
                                    </g>
                                    <path d="M197,297.34a53.79,53.79,0,0,0-4.33,15.29S190.85,302,195,294.1Z"
                                        style="fill: rgb(240, 153, 122); transform-origin: 194.636px 303.365px;"
                                        id="elaoklniuj4rs" class="animable"></path>
                                    <path
                                        d="M218.61,257.85C219,261.7,217.41,267,216,269a12.07,12.07,0,0,0,3.21-5.3C219.9,260.5,219.4,259.09,218.61,257.85Z"
                                        style="fill: rgb(240, 153, 122); transform-origin: 217.768px 263.425px;"
                                        id="el6ip8cy64xq" class="animable"></path>
                                    <path
                                        d="M169.25,352.51c-13.24,9.4-56.59,12.54-69.29,4.14V255.11l1-.2,12.43-2.62,6.73-1.42,1.71-.36h0l6-1.26,15.64.91h0l4.71.28h0l.46,0s5.44.65,11.09,1.63c.21.19.4.39.61.6h0c3.92,4.23,7.3,15,8.26,26.53.36,4.39.62,11,.82,18.41,0,0,0,.46,0,.69C170,321,169.25,352.51,169.25,352.51Z"
                                        style="fill: rgb(110, 101, 198); transform-origin: 134.8px 305.389px;"
                                        id="el37mmi9x2m77" class="animable"></path>
                                    <g id="freepik--Head--inject-61" class="animable"
                                        style="transform-origin: 134.212px 227.257px;">
                                        <path
                                            d="M159.09,211.79c2.77-6.36.06-14.8-3.26-18.76-4.79-5.73-12.24-8.2-23.48-7.5-8.55.53-16.95,4.08-18.55,12.85-6.87,2.05-6.09,13.33-4.38,18.31,3.47,10.09,10.29,18.88,10.4,24Z"
                                            style="fill: rgb(69, 90, 100); transform-origin: 134.239px 213.052px;"
                                            id="elvurmtzrd7a" class="animable"></path>
                                        <path
                                            d="M159.08,235.54c-1.35,4.88-4.17,8.45-8.68,9.15a37.43,37.43,0,0,1-7.11,0l.17,6.21c6.07,5.19,3.85,12-.2,18.16-5-5.59-10.78-7.59-15.81-9.8a16.1,16.1,0,0,1-7.33-7.1l-.64-21s-2.76,3.14-7.31.17a9.92,9.92,0,0,1-3.08-12.14c2.25-4.76,6.76-2.79,8.15-1.35s3,4.16,4.17,3.78a4.17,4.17,0,0,0,2.79-2.85,25.49,25.49,0,0,0,1.48-9.22,12.59,12.59,0,0,0,3.53-2.72,11.47,11.47,0,0,0,3.06-7.06c9.74-3,20.95-1.61,25,1.52,2.33,4.11,2.41,13.65,2.8,19.15C160.49,226.49,160.22,231.46,159.08,235.54Z"
                                            style="fill: rgb(255, 189, 167); transform-origin: 134.212px 233.583px;"
                                            id="el6n2yuf512po" class="animable"></path>
                                        <path
                                            d="M143.28,244.73c-5-.28-15-2.61-17.68-5.39s-3.81-8.48-3.81-8.48.4,7.19,2.47,10.36,7.28,4.56,10.45,5.35a76.62,76.62,0,0,0,8.67,1.31Z"
                                            style="fill: rgb(240, 153, 122); transform-origin: 132.585px 239.37px;"
                                            id="ellfo4ft43cn" class="animable"></path>
                                        <path
                                            d="M143.26,269.1c-2.61-1.6-8.37-8.14-11.24-5.1s-4.39,3.87-6.29,3.31-6.06-4.69-8.79-7.7a17.45,17.45,0,0,1-3.6-7.35,47.47,47.47,0,0,0,3.85-5.35c1.3-2.3,1-2.95,2.68-3.06l.15,4.34s1,2.37,5.74,5.57S139.89,261.72,143.26,269.1Z"
                                            style="fill: rgb(110, 101, 198); transform-origin: 128.3px 256.475px;"
                                            id="elcy3e34o4769" class="animable"></path>
                                        <g id="el039mqa4vi9yn">
                                            <path
                                                d="M143.26,269.1c-2.61-1.6-8.37-8.14-11.24-5.1s-4.39,3.87-6.29,3.31-6.06-4.69-8.79-7.7a17.45,17.45,0,0,1-3.6-7.35,47.47,47.47,0,0,0,3.85-5.35c1.3-2.3,1-2.95,2.68-3.06l.15,4.34s1,2.37,5.74,5.57S139.89,261.72,143.26,269.1Z"
                                                style="opacity: 0.15; transform-origin: 128.3px 256.475px;"
                                                class="animable"></path>
                                        </g>
                                        <path
                                            d="M143.26,269.1c1.55-1.42,4.08-8,4.75-7.84,1,.29,2.78,4.85,3.64,3.79,1.36-1.68.95-9.36-1.32-12.15s-5.29-5.76-7-6.05l.12,4.09a16.58,16.58,0,0,1,1.68,6.6C145.13,259.87,143.58,266.87,143.26,269.1Z"
                                            style="fill: rgb(110, 101, 198); transform-origin: 147.844px 257.975px;"
                                            id="elk1vurhuuy8" class="animable"></path>
                                        <g id="elmdc0zr3due">
                                            <path
                                                d="M143.26,269.1c1.55-1.42,4.08-8,4.75-7.84,1,.29,2.78,4.85,3.64,3.79,1.36-1.68.95-9.36-1.32-12.15s-5.29-5.76-7-6.05l.12,4.09a16.58,16.58,0,0,1,1.68,6.6C145.13,259.87,143.58,266.87,143.26,269.1Z"
                                                style="opacity: 0.15; transform-origin: 147.844px 257.975px;"
                                                class="animable"></path>
                                        </g>
                                        <path d="M140.13,217.33a2,2,0,0,1-2,2.09,2.1,2.1,0,1,1,2-2.09Z"
                                            style="fill: rgb(38, 50, 56); transform-origin: 138.031px 217.322px;"
                                            id="ely6iz9uludnh" class="animable"></path>
                                        <path
                                            d="M137.31,210.88l-4.08,2.76a2.59,2.59,0,0,1,.69-3.51A2.41,2.41,0,0,1,137.31,210.88Z"
                                            style="fill: rgb(55, 71, 79); transform-origin: 135.067px 211.684px;"
                                            id="elorvrntu593s" class="animable"></path>
                                        <path
                                            d="M156.87,212.77l-4.48-2.14a2.38,2.38,0,0,1,3.24-1.22A2.6,2.6,0,0,1,156.87,212.77Z"
                                            style="fill: rgb(55, 71, 79); transform-origin: 154.736px 210.969px;"
                                            id="elso1thfwsydg" class="animable"></path>
                                        <path d="M155.36,217.2a2,2,0,0,1-2,2.1,2.1,2.1,0,1,1,2-2.1Z"
                                            style="fill: rgb(38, 50, 56); transform-origin: 153.261px 217.202px;"
                                            id="elwndu0agnz48" class="animable"></path>
                                        <polygon points="144.76 212.99 146.22 227.49 154 225.14 144.76 212.99"
                                            style="fill: rgb(240, 153, 122); transform-origin: 149.38px 220.24px;"
                                            id="elepeewceznpf" class="animable"></polygon>
                                        <path
                                            d="M140.12,230.86l8.34,1.85a4.2,4.2,0,0,1-5,3.39A4.48,4.48,0,0,1,140.12,230.86Z"
                                            style="fill: rgb(177, 102, 104); transform-origin: 144.246px 233.525px;"
                                            id="elsz7wkcfalus" class="animable"></path>
                                        <path
                                            d="M143.46,236.1c.17,0,.34,0,.52.06a3.89,3.89,0,0,0-3.88-3.79A4.43,4.43,0,0,0,143.46,236.1Z"
                                            style="fill: rgb(242, 143, 143); transform-origin: 142.04px 234.265px;"
                                            id="elxapjn93hkb" class="animable"></path>
                                    </g>
                                    <path d="M103,288.1,100,295.48V255.11S108.62,271.69,103,288.1Z"
                                        style="fill: rgb(110, 101, 198); transform-origin: 102.451px 275.295px;"
                                        id="eloev9kucgyjq" class="animable"></path>
                                    <g id="elisb0q9jkrgc">
                                        <path d="M103,288.1,100,295.48V255.11S108.62,271.69,103,288.1Z"
                                            style="opacity: 0.15; transform-origin: 102.451px 275.295px;"
                                            class="animable"></path>
                                    </g>
                                </g>
                                <path
                                    d="M160.27,224.73a24.92,24.92,0,0,1,5.4,2.51,4.76,4.76,0,0,1,1.66,6.46l-2.06-.4s1.06-2.41-.18-3.71-4.85-2.4-4.85-2.4Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 164.105px 229.215px;"
                                    id="el3qjv48jia4y" class="animable"></path>
                                <path
                                    d="M166.47,232.37c-1.67-.81-2.47.23-3.65,3.06s-.37,3.61,1.06,4.17,2.54-.38,3.42-2.72C168.29,234.24,168.27,233.24,166.47,232.37Z"
                                    style="fill: rgb(110, 101, 198); transform-origin: 165.104px 235.93px;"
                                    id="elyupoqd2nuks" class="animable"></path>
                                <g id="eljhbyu6u17la">
                                    <path
                                        d="M166.47,232.37c-1.67-.81-2.47.23-3.65,3.06s-.37,3.61,1.06,4.17,2.54-.38,3.42-2.72C168.29,234.24,168.27,233.24,166.47,232.37Z"
                                        style="opacity: 0.1; transform-origin: 165.104px 235.93px;" class="animable">
                                    </path>
                                </g>
                                <path
                                    d="M118.09,189c-5,4.61-9.77,11.16-6.22,26.31a8.25,8.25,0,0,0-2.07,8.55c1.38,4.68,5.87,7.75,10,6.87s6.44-5.39,5.07-10.07c-1-3.5-4.78-6.89-7.87-6.66,0,0-3-6.49-.19-15.66,3.79-12.52,18.37-13.55,24.79-12.54C139.48,182.75,124.67,182.93,118.09,189Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 125.484px 207.37px;"
                                    id="el1nskp0ksg75" class="animable"></path>
                                <path
                                    d="M125.8,220.47c-1.52-5.19-6.5-8.6-11.12-7.62a7.24,7.24,0,0,0-2,.75c-.51.28-2.09,1.37-2.4,1.57-2.94,2-4.3,6-3.09,10.1,1.52,5.19,6.49,8.6,11.11,7.62a7.33,7.33,0,0,0,2.39-1c.37-.24,1.84-1.22,2.21-1.48C125.7,228.45,127,224.52,125.8,220.47Z"
                                    style="fill: rgb(110, 101, 198); transform-origin: 116.498px 222.87px;"
                                    id="elq9ess4auq48" class="animable"></path>
                                <g id="el72w9w3yxupw">
                                    <path
                                        d="M125.8,220.47c-1.52-5.19-6.5-8.6-11.12-7.62a7.24,7.24,0,0,0-2,.75c-.51.28-2.09,1.37-2.4,1.57-2.94,2-4.3,6-3.09,10.1,1.52,5.19,6.49,8.6,11.11,7.62a7.33,7.33,0,0,0,2.39-1c.37-.24,1.84-1.22,2.21-1.48C125.7,228.45,127,224.52,125.8,220.47Z"
                                        style="opacity: 0.3; transform-origin: 116.498px 222.87px;" class="animable">
                                    </path>
                                </g>
                                <path
                                    d="M123.91,221.73c-1.52-5.18-6.5-8.59-11.12-7.61s-7.13,6-5.61,11.15,6.49,8.6,11.11,7.62S125.43,226.92,123.91,221.73Z"
                                    style="fill: rgb(110, 101, 198); transform-origin: 115.544px 223.504px;"
                                    id="elf8h2p62pvm7" class="animable"></path>
                                <g id="el4qoxltdj0pj">
                                    <path
                                        d="M123.91,221.73c-1.52-5.18-6.5-8.59-11.12-7.61s-7.13,6-5.61,11.15,6.49,8.6,11.11,7.62S125.43,226.92,123.91,221.73Z"
                                        style="opacity: 0.1; transform-origin: 115.544px 223.504px;" class="animable">
                                    </path>
                                </g>
                                <path
                                    d="M119.49,222.67c-.72-2.45-3.06-4.06-5.24-3.6s-3.37,2.82-2.65,5.27,3.06,4,5.24,3.59S120.21,225.11,119.49,222.67Z"
                                    style="fill: rgb(55, 71, 79); transform-origin: 115.545px 223.494px;"
                                    id="ellach5sze9le" class="animable"></path>
                            </g>
                            <g id="freepik--speech-bubble--inject-61" class="animable"
                                style="transform-origin: 188.37px 174.942px;">
                                <path
                                    d="M177.27,165.06a2.1,2.1,0,0,0-.58.48,2.79,2.79,0,0,0-.38.62,3.81,3.81,0,0,0-.22.7c0,.24-.08.49-.1.74s0,.34,0,.58,0,.49,0,.74,0,.51,0,.75,0,.42,0,.55a3.74,3.74,0,0,0,.1.64,1.21,1.21,0,0,0,.22.44.55.55,0,0,0,.39.18,1,1,0,0,0,.57-.18,2.54,2.54,0,0,0,.5-.38,2.63,2.63,0,0,0,.4-.53,2.85,2.85,0,0,0,.28-.69,3.76,3.76,0,0,0,.1-.86l-.85.49a.15.15,0,0,1-.2,0,.34.34,0,0,1-.08-.25v-1.65a.89.89,0,0,1,.08-.35.51.51,0,0,1,.2-.23l2.45-1.42a.15.15,0,0,1,.19,0,.34.34,0,0,1,.08.25v2a7.81,7.81,0,0,1-.24,1.94,8,8,0,0,1-.67,1.73,6.76,6.76,0,0,1-1,1.43,5.1,5.1,0,0,1-1.24,1,2.69,2.69,0,0,1-1.3.42,1.47,1.47,0,0,1-1-.35,2.13,2.13,0,0,1-.62-1,5.1,5.1,0,0,1-.25-1.49c0-.41,0-.87,0-1.36s0-1,0-1.41a7.84,7.84,0,0,1,.24-1.77,8.33,8.33,0,0,1,.63-1.71,7,7,0,0,1,1-1.48,5.21,5.21,0,0,1,1.31-1.09,2.64,2.64,0,0,1,1.28-.41,1.57,1.57,0,0,1,1,.25,1.82,1.82,0,0,1,.62.72,2.31,2.31,0,0,1,.24,1,.48.48,0,0,1-.06.28.48.48,0,0,1-.16.2l-1.35.77q-.15.09-.24,0l-.16-.18a.81.81,0,0,0-.39-.29C177.85,164.8,177.6,164.87,177.27,165.06Z"
                                    style="fill: rgb(69, 90, 100); transform-origin: 177.261px 168.162px;"
                                    id="el0rmx4yepb9vg" class="animable"></path>
                                <path
                                    d="M183,167.15a1.28,1.28,0,0,0,.08.54.5.5,0,0,0,.22.25.41.41,0,0,0,.29,0,1,1,0,0,0,.32-.12,2.16,2.16,0,0,0,.48-.37,1.9,1.9,0,0,0,.3-.44,1.86,1.86,0,0,1,.16-.27.41.41,0,0,1,.17-.14l1.32-.76c.15-.09.22,0,.22.21a2.53,2.53,0,0,1-.15.66,6.6,6.6,0,0,1-1.3,2.22,4.63,4.63,0,0,1-1.2,1,2.37,2.37,0,0,1-1.17.39,1.13,1.13,0,0,1-.86-.34,2.14,2.14,0,0,1-.53-1,6.52,6.52,0,0,1-.18-1.66,8.81,8.81,0,0,1,.18-1.78,7.32,7.32,0,0,1,.53-1.64,6.21,6.21,0,0,1,.86-1.37,4.27,4.27,0,0,1,1.17-1,2.05,2.05,0,0,1,1.26-.35,1.32,1.32,0,0,1,.85.5,2.74,2.74,0,0,1,.48,1.09,7.27,7.27,0,0,1,.14,1.42v.44a.68.68,0,0,1-.08.34.48.48,0,0,1-.19.24Zm.91-3.52a1.53,1.53,0,0,0-.65.76,3.06,3.06,0,0,0-.26,1l1.82-1.06a1.37,1.37,0,0,0-.26-.72C184.44,163.47,184.22,163.46,183.94,163.63Z"
                                    style="fill: rgb(69, 90, 100); transform-origin: 183.904px 165.749px;"
                                    id="elpar8azb6fgh" class="animable"></path>
                                <path
                                    d="M190,163.13a.86.86,0,0,0,.11.5c.06.09.18.09.33,0l.81-.47a.15.15,0,0,1,.19,0,.3.3,0,0,1,.08.25V165a.74.74,0,0,1-.08.35.5.5,0,0,1-.19.23l-1,.56a2,2,0,0,1-.87.29.91.91,0,0,1-.66-.23,1.66,1.66,0,0,1-.43-.72,4.08,4.08,0,0,1-.15-1.2v-2.62l-.75.43a.14.14,0,0,1-.19,0,.34.34,0,0,1-.08-.25v-1.57a.89.89,0,0,1,.08-.35.5.5,0,0,1,.19-.23l.75-.44V156.7a.84.84,0,0,1,.08-.34.61.61,0,0,1,.19-.24l1.28-.73a.14.14,0,0,1,.19,0,.3.3,0,0,1,.08.25v2.54l1.15-.66a.15.15,0,0,1,.19,0,.33.33,0,0,1,.08.25v1.58a.71.71,0,0,1-.08.34.53.53,0,0,1-.19.24l-1.15.66Z"
                                    style="fill: rgb(69, 90, 100); transform-origin: 189.321px 160.892px;"
                                    id="eleqdb8aegm2g" class="animable"></path>
                                <path
                                    d="M196.33,153.24a.89.89,0,0,1-.08.35.51.51,0,0,1-.2.23l-1.27.74a.16.16,0,0,1-.2,0,.37.37,0,0,1-.08-.25v-1.58a.84.84,0,0,1,.08-.34.55.55,0,0,1,.2-.24l1.27-.73a.15.15,0,0,1,.2,0,.34.34,0,0,1,.08.25Zm0,9a.89.89,0,0,1-.08.35.51.51,0,0,1-.2.23l-1.27.74a.16.16,0,0,1-.2,0,.37.37,0,0,1-.08-.25V156a.89.89,0,0,1,.08-.35.51.51,0,0,1,.2-.23l1.27-.74a.16.16,0,0,1,.2,0,.37.37,0,0,1,.08.25Z"
                                    style="fill: rgb(69, 90, 100); transform-origin: 195.415px 157.488px;"
                                    id="elsiw5gausyeo" class="animable"></path>
                                <path
                                    d="M202.9,158.42a.71.71,0,0,1-.08.34.6.6,0,0,1-.19.24l-1.28.73a.14.14,0,0,1-.19,0,.3.3,0,0,1-.08-.25v-3.95a1.65,1.65,0,0,0-.21-1c-.15-.19-.37-.2-.67,0a1.54,1.54,0,0,0-.67.79,3.21,3.21,0,0,0-.2,1.2v3.94a.76.76,0,0,1-.09.35.45.45,0,0,1-.19.23l-1.27.74a.15.15,0,0,1-.2,0,.34.34,0,0,1-.08-.25v-7.26a.89.89,0,0,1,.08-.35.51.51,0,0,1,.2-.23L199,153c.08,0,.14,0,.19,0a.33.33,0,0,1,.09.25v.36c.05-.13.12-.28.2-.44a4.09,4.09,0,0,1,.29-.48,5.39,5.39,0,0,1,.4-.45,3.16,3.16,0,0,1,.53-.39,2,2,0,0,1,.9-.3.87.87,0,0,1,.69.24,1.89,1.89,0,0,1,.45.85,5.58,5.58,0,0,1,.16,1.5Z"
                                    style="fill: rgb(69, 90, 100); transform-origin: 200.201px 156.682px;"
                                    id="ellx9a4j2q19f" class="animable"></path>
                                <path
                                    d="M175,187.55a.87.87,0,0,0,.1.5c.07.09.18.09.34,0l.81-.47a.15.15,0,0,1,.19,0,.37.37,0,0,1,.08.25v1.58a.84.84,0,0,1-.08.34.48.48,0,0,1-.19.24l-1,.55a1.69,1.69,0,0,1-.86.29.9.9,0,0,1-.66-.22,1.49,1.49,0,0,1-.43-.72,4.08,4.08,0,0,1-.15-1.2v-2.62l-.75.43c-.08,0-.14,0-.19,0a.33.33,0,0,1-.09-.25v-1.58a.72.72,0,0,1,.09-.34.48.48,0,0,1,.19-.24l.75-.43v-2.54a.74.74,0,0,1,.08-.35.5.5,0,0,1,.19-.23l1.28-.74a.14.14,0,0,1,.19,0,.33.33,0,0,1,.08.24v2.55l1.15-.66a.14.14,0,0,1,.19,0,.36.36,0,0,1,.08.25v1.57a.89.89,0,0,1-.08.35.57.57,0,0,1-.19.23L175,185Z"
                                    style="fill: rgb(69, 90, 100); transform-origin: 174.32px 185.298px;"
                                    id="elfr9ntggyw18" class="animable"></path>
                                <path
                                    d="M182.65,181.64c0,.15,0,.35,0,.6s0,.44,0,.6a6.89,6.89,0,0,1-.22,1.54,7.35,7.35,0,0,1-.56,1.46,5.91,5.91,0,0,1-.86,1.27,4.43,4.43,0,0,1-1.11.93,2.31,2.31,0,0,1-1.13.36,1.22,1.22,0,0,1-.85-.28,1.87,1.87,0,0,1-.56-.82,4,4,0,0,1-.22-1.28c0-.15,0-.34,0-.59s0-.45,0-.61a6.7,6.7,0,0,1,.21-1.52,7.21,7.21,0,0,1,.56-1.47,6.37,6.37,0,0,1,.86-1.28,4.36,4.36,0,0,1,1.13-.94,2.33,2.33,0,0,1,1.11-.35,1.35,1.35,0,0,1,.87.28,1.85,1.85,0,0,1,.55.82A4,4,0,0,1,182.65,181.64ZM179,184.89a1,1,0,0,0,.28.77c.17.13.38.12.66,0a1.8,1.8,0,0,0,.65-.71,2.74,2.74,0,0,0,.28-1.09c0-.17,0-.35,0-.54s0-.37,0-.52a1,1,0,0,0-.28-.77.56.56,0,0,0-.65,0,1.75,1.75,0,0,0-.66.71,2.74,2.74,0,0,0-.28,1.09c0,.17,0,.35,0,.55S179,184.75,179,184.89Z"
                                    style="fill: rgb(69, 90, 100); transform-origin: 179.895px 183.831px;"
                                    id="el0htf84fo3icd" class="animable"></path>
                                <path
                                    d="M183.55,178.08a.84.84,0,0,1,.08-.34.49.49,0,0,1,.2-.24l1.27-.74a.15.15,0,0,1,.19,0,.3.3,0,0,1,.09.25V181a1.84,1.84,0,0,0,.19,1c.13.19.34.21.64,0a1.49,1.49,0,0,0,.63-.78A3.52,3.52,0,0,0,187,180v-4a.73.73,0,0,1,.08-.34.6.6,0,0,1,.19-.24l1.28-.73a.14.14,0,0,1,.19,0,.36.36,0,0,1,.08.25v7.27a.84.84,0,0,1-.08.34.48.48,0,0,1-.19.24l-1.18.68a.14.14,0,0,1-.19,0,.34.34,0,0,1-.08-.25v-.35c-.06.14-.12.29-.2.44a3,3,0,0,1-.29.47,4,4,0,0,1-.4.45,3.44,3.44,0,0,1-.54.4c-.65.37-1.18.39-1.56,0a3.27,3.27,0,0,1-.59-2.36Z"
                                    style="fill: rgb(69, 90, 100); transform-origin: 186.155px 179.784px;"
                                    id="eleyrbjf2rdmu" class="animable"></path>
                                <path
                                    d="M191.64,176.5a4.79,4.79,0,0,0,0,.56,4.19,4.19,0,0,0,0,.53,1,1,0,0,0,.27.75c.16.14.38.12.65,0a1.62,1.62,0,0,0,.51-.45,2.25,2.25,0,0,0,.29-.58,1.39,1.39,0,0,1,.12-.28.48.48,0,0,1,.17-.2L195,176a.15.15,0,0,1,.2,0,.27.27,0,0,1,.07.25,4.58,4.58,0,0,1-.13.81,5.77,5.77,0,0,1-.42,1.2,6.85,6.85,0,0,1-.82,1.3,4.67,4.67,0,0,1-1.32,1.12,2.57,2.57,0,0,1-1.06.36,1.33,1.33,0,0,1-.86-.22,1.75,1.75,0,0,1-.59-.79,4.2,4.2,0,0,1-.24-1.36c0-.15,0-.35,0-.61s0-.47,0-.63a7.37,7.37,0,0,1,.24-1.63,6.84,6.84,0,0,1,.59-1.47,6.06,6.06,0,0,1,.86-1.22,4.71,4.71,0,0,1,1.06-.86,2.35,2.35,0,0,1,1.32-.41,1.38,1.38,0,0,1,.82.36,1.6,1.6,0,0,1,.42.71,2.52,2.52,0,0,1,.13.66.61.61,0,0,1-.07.34.71.71,0,0,1-.2.24l-1.33.76c-.07,0-.13,0-.17,0a.44.44,0,0,1-.12-.15.5.5,0,0,0-.29-.25.75.75,0,0,0-.51.15,1.69,1.69,0,0,0-.65.72A2.68,2.68,0,0,0,191.64,176.5Z"
                                    style="fill: rgb(69, 90, 100); transform-origin: 192.554px 176.443px;"
                                    id="ellk5niog326" class="animable"></path>
                                <path
                                    d="M201.52,175a.74.74,0,0,1-.08.35.45.45,0,0,1-.19.23l-1.27.74a.16.16,0,0,1-.2,0,.38.38,0,0,1-.08-.26v-3.94a1.6,1.6,0,0,0-.21-1c-.14-.19-.37-.2-.67,0a1.46,1.46,0,0,0-.66.78,3.25,3.25,0,0,0-.21,1.2V177a.88.88,0,0,1-.08.34.61.61,0,0,1-.2.24l-1.27.73a.14.14,0,0,1-.19,0,.32.32,0,0,1-.08-.25V167.86a.74.74,0,0,1,.08-.35.45.45,0,0,1,.19-.23l1.27-.74a.16.16,0,0,1,.2,0,.37.37,0,0,1,.08.25v3.33a4.31,4.31,0,0,1,.54-.95,2.58,2.58,0,0,1,.84-.78,2.07,2.07,0,0,1,.89-.31.91.91,0,0,1,.69.25,1.75,1.75,0,0,1,.45.85,5.55,5.55,0,0,1,.16,1.49Z"
                                    style="fill: rgb(69, 90, 100); transform-origin: 198.825px 172.426px;"
                                    id="elp3in5cplz0a" class="animable"></path>
                                <path
                                    d="M204.5,169.9a.71.71,0,0,1-.08.34.48.48,0,0,1-.19.24l-1.28.73a.14.14,0,0,1-.19,0,.36.36,0,0,1-.08-.25v-6.72a.81.81,0,0,1,.08-.34.54.54,0,0,1,.19-.24l1.28-.74a.14.14,0,0,1,.19,0,.3.3,0,0,1,.08.25Zm0,3.35a.74.74,0,0,1-.08.35.5.5,0,0,1-.19.23l-1.28.74a.15.15,0,0,1-.19,0,.37.37,0,0,1-.08-.25v-1.58a.81.81,0,0,1,.08-.34.54.54,0,0,1,.19-.24l1.28-.74a.15.15,0,0,1,.19,0,.3.3,0,0,1,.08.25Z"
                                    style="fill: rgb(69, 90, 100); transform-origin: 203.591px 168.743px;"
                                    id="el8d2rpe9ic36" class="animable"></path>
                                <path
                                    d="M170.19,209.39a1.3,1.3,0,0,1-.92-2.21c1.86-1.9,3-4.57,3.54-8.15-6.26-1.28-10-6.71-10-14.59,0-14,11.37-31.89,25.35-40h0c7.44-4.29,14.53-5.13,19.45-2.29,4.08,2.35,6.32,7.05,6.32,13.22,0,14-11.37,31.88-25.35,40a33.15,33.15,0,0,1-5.82,2.69c-3.34,7.44-8.49,10.25-12.24,11.29A1.06,1.06,0,0,1,170.19,209.39Zm18.41-64.17c-13.74,7.93-24.92,25.53-24.92,39.22,0,7.72,3.53,12.76,9.68,13.83l.4.07,0,.4c-.52,4-1.77,6.93-3.84,9a.46.46,0,0,0,.45.76c3.59-1,8.55-3.72,11.76-11l.08-.17.18-.06a33.18,33.18,0,0,0,5.84-2.68c13.74-7.94,24.92-25.53,24.92-39.22,0-5.86-2.09-10.29-5.89-12.49-4.65-2.68-11.43-1.84-18.61,2.3Z"
                                    style="fill: rgb(110, 101, 198); transform-origin: 188.37px 174.942px;"
                                    id="elbqhk4seb6vn" class="animable"></path>
                            </g>
                        </g>
                        <g id="freepik--character-1--inject-61" class="animable"
                            style="transform-origin: 348.729px 253.168px;">
                            <g id="freepik--character--inject-61" class="animable"
                                style="transform-origin: 348.729px 253.168px;">
                                <path
                                    d="M323,396.53a7.81,7.81,0,0,0-.1,4.11c.39.82,2.85,3.54,7.87,4.52s11.93,0,14.9-.18,12.3,1,15.26,1.36c4.66.63,8.25-.39,10-2.08a3.1,3.1,0,0,0,.7-2.45,12.45,12.45,0,0,0-.5-3.32Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 347.167px 401.529px;"
                                    id="eluf717rvv4mo" class="animable"></path>
                                <path
                                    d="M370.37,393.61c.09.39.17.77.25,1.17a19.54,19.54,0,0,1,.43,6.05c-.6,1.47-2.25,2.28-3.58,2.7-3.5,1.12-6.18.94-10.07.2a71.19,71.19,0,0,0-11.81-.72c-3.06.2-7.27.79-10.33.51a24.85,24.85,0,0,1-7.61-1.55c-2-.88-4.13-2-4.62-4.1-.61-4.42,1.25-6.38,3.35-7.61s5.08-1.14,8.27-1.36c2.88-.19,5-.19,7.55-.39a36.67,36.67,0,0,0,6.6-.92c1.93-.61,3.92-3.07,4.74-3.16,0,0,12.84-.1,14.07,0,1.41.12,1.85,4.51,2,5.46.14.75.16,1.55.36,2.27C370.13,392.64,370.25,393.12,370.37,393.61Z"
                                    style="fill: rgb(55, 71, 79); transform-origin: 347.016px 394.357px;"
                                    id="elfhxfox7ou6" class="animable"></path>
                                <path
                                    d="M330.79,402.93c-.4-3.19-.93-10.1,4.94-14.09l.75,0a14.61,14.61,0,0,0-8.12,0c-4.7,1.25-6.78,5.05-5.61,9.06C322.75,397.86,323.8,401.74,330.79,402.93Z"
                                    style="fill: rgb(250, 250, 250); transform-origin: 329.455px 395.597px;"
                                    id="el0s8i8oum8m" class="animable"></path>
                                <path
                                    d="M347.93,387.83c-1.9,1.68-2.56,5.51-2.56,5.51-.24,1.43-2.84,1.64-2.59.26a15,15,0,0,1,2.24-5.33A4.4,4.4,0,0,1,347.93,387.83Z"
                                    style="fill: rgb(250, 250, 250); transform-origin: 345.347px 391.141px;"
                                    id="elcqx7uwu1qia" class="animable"></path>
                                <path
                                    d="M342.61,388.48a9.25,9.25,0,0,0-2.67,5.22c-.26,1.37-2.43,1.35-2.28,0,0,0,.26-3.39,2.28-5A2.89,2.89,0,0,1,342.61,388.48Z"
                                    style="fill: rgb(250, 250, 250); transform-origin: 340.131px 391.486px;"
                                    id="el3kdi3rgqzlk" class="animable"></path>
                                <path
                                    d="M376.26,355.59c-.19,2.25-.49,4.28.43,6.76,1.32,3.57,4.12,5.2,5.76,6.6a47.91,47.91,0,0,1,4.78,5.51c1.61,2,2,3.14,4.46,5.28a8.73,8.73,0,0,0,8.59,1.21c2.1-.89,2.82-1.6,2.69-4.82s-10.37-4.31-10.37-4.31Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 389.521px 368.581px;"
                                    id="el6hf2vpmb5c3" class="animable"></path>
                                <path
                                    d="M401.65,366.55c.87.31,1.09,1.9,1.23,5,.1,2.39,1.15,5.87-2.3,7.37-2.78,1.22-7.23.41-9.11-1.83-2.35-2.81-3.93-5.27-7.28-8.69-2.91-3-5.93-4-7.22-9.9-.83-3.81-.18-5.39,2.52-6.48,3.7-1.5,9.53,3.41,12.44,4.18C394.43,356.91,400.78,366.23,401.65,366.55Z"
                                    style="fill: rgb(55, 71, 79); transform-origin: 389.87px 365.612px;"
                                    id="eltus47r2o4re" class="animable"></path>
                                <path
                                    d="M391.93,356.24c-.16,0-.33-.1-.5-.16a9.56,9.56,0,0,0-8,5c-.49,1,1,1.85,1.94,1,2.07-3.91,6.33-4.78,8-5A4.35,4.35,0,0,0,391.93,356.24Z"
                                    style="fill: rgb(250, 250, 250); transform-origin: 388.352px 359.254px;"
                                    id="elsx246stcaz" class="animable"></path>
                                <path
                                    d="M394.32,358a9.45,9.45,0,0,0-7.46,5c-.49,1,1,1.85,1.94,1a9.73,9.73,0,0,1,6.69-4.75C395.09,358.84,394.7,358.41,394.32,358Z"
                                    style="fill: rgb(250, 250, 250); transform-origin: 391.127px 361.174px;"
                                    id="elrr6bp1wl6ei" class="animable"></path>
                                <path
                                    d="M378.67,362.93s.29-7.06,10.32-8l.57.31a8.54,8.54,0,0,0-4.93-3.62c-3.33-.86-6,0-7.72,2.11S376.94,361.55,378.67,362.93Z"
                                    style="fill: rgb(250, 250, 250); transform-origin: 382.882px 357.11px;"
                                    id="elq3vhkvrnfuh" class="animable"></path>
                                <path
                                    d="M405.07,316.62c-1-11-1.07-18.31-1.07-18.31s0-16,.4-31.11c.22-8.4.07-14.1.21-20.74a106,106,0,0,0-1.75-22s-51.46-10.24-52.1,8.64c-.77,22.63-.68,61.31-1.55,76.09-.49,8.3.35,15.17.87,31.29.43,13.36.3,46.26.3,46.26,5.67,7.78,19.05,1.85,19.05,1.85s4.14-46.18,4.74-55.73c.65-10.26-.43-15.46-.43-15.46l5.31-47.81s.4,15.34.86,23.64S381.05,308,383,323.42c2,16.15,5.28,45.41,5.28,45.41,6.86,4.08,14.85.81,14.85.81S406.11,328.28,405.07,316.62Z"
                                    style="fill: rgb(110, 101, 198); transform-origin: 377.176px 306.22px;"
                                    id="elujtkdav8x3k" class="animable"></path>
                                <g id="elr70wlfnjsaf">
                                    <path
                                        d="M405.07,316.62c-1-11-1.07-18.31-1.07-18.31s0-16,.4-31.11c.22-8.4.07-14.1.21-20.74a106,106,0,0,0-1.75-22s-51.46-10.24-52.1,8.64c-.77,22.63-.68,61.31-1.55,76.09-.49,8.3.35,15.17.87,31.29.43,13.36.3,46.26.3,46.26,5.67,7.78,19.05,1.85,19.05,1.85s4.14-46.18,4.74-55.73c.65-10.26-.43-15.46-.43-15.46l5.31-47.81s.4,15.34.86,23.64S381.05,308,383,323.42c2,16.15,5.28,45.41,5.28,45.41,6.86,4.08,14.85.81,14.85.81S406.11,328.28,405.07,316.62Z"
                                        style="opacity: 0.4; transform-origin: 377.176px 306.22px;" class="animable">
                                    </path>
                                </g>
                                <g id="el9hj8wh4zz9m">
                                    <path
                                        d="M398,250.57s-2.1,7.69-14.85,12.85c0,0-3.46,27.84-3.43,27.26l-.68-21.08,1.16-8.84S392.16,258.23,398,250.57Z"
                                        style="opacity: 0.25; transform-origin: 388.52px 270.629px;" class="animable">
                                    </path>
                                </g>
                                <path
                                    d="M397.09,156.81c5.14,0,9.77,1.52,13.87,14.29s7.64,29.47,8,33.6c.44,5.36.16,7.67-4,11.56s-15,13.13-15,13.13l-3.6-15.29,8.34-9.4Z"
                                    style="fill: rgb(110, 101, 198); transform-origin: 407.736px 193.1px;"
                                    id="elu3818vtsftr" class="animable"></path>
                                <g id="el1uj8krkic1v">
                                    <path
                                        d="M397.09,156.81c5.14,0,9.77,1.52,13.87,14.29s7.64,29.47,8,33.6c.44,5.36.16,7.67-4,11.56s-15,13.13-15,13.13l-3.6-15.29,8.34-9.4Z"
                                        style="fill: rgb(255, 255, 255); opacity: 0.6; transform-origin: 407.736px 193.1px;"
                                        class="animable"></path>
                                </g>
                                <polygon points="371.15 152.21 373.16 170.02 389.72 166.26 387.58 142.47 371.15 152.21"
                                    style="fill: rgb(177, 102, 104); transform-origin: 380.435px 156.245px;"
                                    id="eljoykz2ie2mk" class="animable"></polygon>
                                <path d="M358.7,130.39s-4.42,6.71-3.92,7.36,3.76,1.26,3.76,1.26Z"
                                    style="fill: rgb(154, 74, 77); transform-origin: 356.72px 134.7px;"
                                    id="elnkh89x2q9zr" class="animable"></path>
                                <path
                                    d="M360.66,134.35a5,5,0,1,1,5-5A5,5,0,0,1,360.66,134.35Zm0-8.89a3.89,3.89,0,1,0,3.89,3.89A3.9,3.9,0,0,0,360.66,125.46Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 360.66px 129.35px;"
                                    id="eln1dgtqn1ymi" class="animable"></path>
                                <path
                                    d="M371,112.77c-8.5,1.79-11.55,5.19-12.35,18.69-.84,14.11,1.2,18.88,3.05,20.78,1.25,1.29,8.2,1.52,11.71.55,4.39-1.21,14.31-4.73,19-11.82,5.47-8.35,6.9-19.67,1.05-24.31C385.15,110.12,374.42,112,371,112.77Z"
                                    style="fill: rgb(177, 102, 104); transform-origin: 377.843px 132.653px;"
                                    id="el919jwieodhc" class="animable"></path>
                                <path
                                    d="M371.26,153.19l-.4-2.6a16.83,16.83,0,0,1-8.71,2C363.77,153.36,368,153.59,371.26,153.19Z"
                                    style="fill: rgb(154, 74, 77); transform-origin: 366.705px 151.987px;"
                                    id="el8lf0uwbm8c9" class="animable"></path>
                                <polygon points="356.51 128.44 371.63 130.4 371.02 131.46 356.51 129.58 356.51 128.44"
                                    style="fill: rgb(38, 50, 56); transform-origin: 364.07px 129.95px;"
                                    id="elmu2t11qcl3s" class="animable"></polygon>
                                <path
                                    d="M357.75,118.22a4.21,4.21,0,0,0,1.92-.12,3,3,0,0,0,1,3.54,4.27,4.27,0,0,0,3.81.51,3.71,3.71,0,0,0-.42,2.63,4.25,4.25,0,0,0,4.4,3.17c.09,2,.12,3.91,2.23,4.81,0,0,1.34-5.22,5.74-4.56s5,6.3,2.23,9.73-5.35,2.13-5.39,2.11a9.15,9.15,0,0,0,.7,2.49,10.15,10.15,0,0,0,3.72,4.1,20.07,20.07,0,0,0,10.59,2.87c1.38-4,3.65-7,6.05-10.5,1.89-2.74,4.29-5.86,5.24-9.05a17.86,17.86,0,0,0,.11-10.63c-1.05-3.16-2.28-5.56-5.72-6.41-.78-4.23-5-6.46-8.84-8.4a14.22,14.22,0,0,0-12.44-.1c-1.42-1.5-2.54-3.3-4.51-4.17a4.1,4.1,0,0,0-4.82.86,6.1,6.1,0,0,0-.76,4.05,9.49,9.49,0,0,0-4.85.42,5,5,0,0,0-3.12,3.53,3.46,3.46,0,0,0,2.17,3.92,3,3,0,0,0-1.1,3.44A2.59,2.59,0,0,0,357.75,118.22Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 377.493px 124.655px;"
                                    id="el3uyitn6fnve" class="animable"></path>
                                <path d="M370.64,135.73l.15-5.9a3,3,0,1,0-.15,5.9Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 368.982px 132.766px;"
                                    id="el8o20n7r02cx" class="animable"></path>
                                <path
                                    d="M405.37,164.91c-1.79-4.57-5.66-8.51-11.93-8.7-1.39,0-4.59,0-4.59,0-.71,2.91-11.75,3.85-17,2-2.29.6-13.41,3.5-15.32,4.14-5.46,1.81-5.53,8.77-5.5,24.93,0,15.06,0,32.94-.82,51.79,9.6,5.06,23.54,6.36,34.1,5.29,16.58-1.67,20.57-6.63,20.57-6.63a237.34,237.34,0,0,1-.6-26.09c.2-7.24,1.73-16.09,2.27-23.92S407.05,169.18,405.37,164.91Z"
                                    style="fill: rgb(110, 101, 198); transform-origin: 378.534px 200.459px;"
                                    id="elqogafwztkj" class="animable"></path>
                                <g id="ely8m6fucg81h">
                                    <path
                                        d="M405.37,164.91c-1.79-4.57-5.66-8.51-11.93-8.7-1.39,0-4.59,0-4.59,0-.71,2.91-11.75,3.85-17,2-2.29.6-13.41,3.5-15.32,4.14-5.46,1.81-5.53,8.77-5.5,24.93,0,15.06,0,32.94-.82,51.79,9.6,5.06,23.54,6.36,34.1,5.29,16.58-1.67,20.57-6.63,20.57-6.63a237.34,237.34,0,0,1-.6-26.09c.2-7.24,1.73-16.09,2.27-23.92S407.05,169.18,405.37,164.91Z"
                                        style="fill: rgb(255, 255, 255); opacity: 0.3; transform-origin: 378.534px 200.459px;"
                                        class="animable"></path>
                                </g>
                                <path
                                    d="M298.85,141.51c-.93-2.12.13-5.58.53-7.13.66-2.56.27-6.09.43-7.12.39-2.64-1.38-3.17-2.69-1.41-1.19,1.59-1.19,5.07-2.08,5.29s-3.45-6.57-4.79-10.53-1.68-6.49-3.88-6c-1.59.36-1.51,2.41-.73,5.66a34.68,34.68,0,0,1,1,4.27c0,.54-.79.62-1.15.74-.68.24-1.85.6-2.2,1.26a5.91,5.91,0,0,1-.54,1.1c-.58.73-1.77.7-2.39,1.39-.46.5-.5,1.25-.87,1.82-.24.36-.61.63-.84,1a3,3,0,0,0-.07,2.48,20.79,20.79,0,0,0,4.18,7c1.5,1.89,3.86,4.95,4.72,6.3,2.86,4.48,13.41,21.61,18.62,28.35,1.11,1.43,2.1,2.75,4.48,3.39,6,1.6,42.6,4.77,42.6,4.77,10.6.22,14.29-19.1,5.25-20.06,0,0-7.34-.18-16.13-.25-9.4-.09-25.15-.49-25.15-.49S299.59,143.19,298.85,141.51Z"
                                    style="fill: rgb(177, 102, 104); transform-origin: 320.944px 149.346px;"
                                    id="el0u615lkutemd" class="animable"></path>
                                <path
                                    d="M359,162.44c-5.43-.21-41.23.09-41.23.09l-14.9-15.88a14.52,14.52,0,0,1-10.8,8.3s6.48,11.82,10.2,17.25c3.42,5,4.24,7.55,9.54,8.58s38.87,4.88,41.78,4.78,7.68-.61,10.7-9.1C366.92,169,364.5,162.66,359,162.44Z"
                                    style="fill: rgb(110, 101, 198); transform-origin: 328.713px 166.106px;"
                                    id="elznwlqa36s1" class="animable"></path>
                                <g id="elznfu1mg9wi">
                                    <path
                                        d="M359,162.44c-5.43-.21-41.23.09-41.23.09l-14.9-15.88a14.52,14.52,0,0,1-10.8,8.3s6.48,11.82,10.2,17.25c3.42,5,4.24,7.55,9.54,8.58s38.87,4.88,41.78,4.78,7.68-.61,10.7-9.1C366.92,169,364.5,162.66,359,162.44Z"
                                        style="fill: rgb(255, 255, 255); opacity: 0.6; transform-origin: 328.713px 166.106px;"
                                        class="animable"></path>
                                </g>
                            </g>
                        </g>
                        <defs>
                            <filter id="active" height="200%">
                                <feMorphology in="SourceAlpha" result="DILATED" operator="dilate" radius="2">
                                </feMorphology>
                                <feFlood flood-color="#32DFEC" flood-opacity="1" result="PINK"></feFlood>
                                <feComposite in="PINK" in2="DILATED" operator="in" result="OUTLINE"></feComposite>
                                <feMerge>
                                    <feMergeNode in="OUTLINE"></feMergeNode>
                                    <feMergeNode in="SourceGraphic"></feMergeNode>
                                </feMerge>
                            </filter>
                            <filter id="hover" height="200%">
                                <feMorphology in="SourceAlpha" result="DILATED" operator="dilate" radius="2">
                                </feMorphology>
                                <feFlood flood-color="#ff0000" flood-opacity="0.5" result="PINK"></feFlood>
                                <feComposite in="PINK" in2="DILATED" operator="in" result="OUTLINE"></feComposite>
                                <feMerge>
                                    <feMergeNode in="OUTLINE"></feMergeNode>
                                    <feMergeNode in="SourceGraphic"></feMergeNode>
                                </feMerge>
                                <feColorMatrix type="matrix"
                                    values="0   0   0   0   0                0   1   0   0   0                0   0   0   0   0                0   0   0   1   0 ">
                                </feColorMatrix>
                            </filter>
                        </defs>
                    </svg>
                </div>
                <div class="col-lg-6" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
                    <div class="contact-form">
                        <form id="contactForm">
                            <div class="mb-3">
                                <label for="name" class="form-label">Full Name</label>
                                <input type="text" class="form-control" id="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" class="form-control" id="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="subject" class="form-label">Subject</label>
                                <input type="text" class="form-control" id="subject" required>
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label">Message</label>
                                <textarea class="form-control" id="message" rows="2" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-gradient w-100">
                                <i class="bi bi-send me-2"></i>Send Message
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 mb-4">
                    <h5>Disting Disting</h5>
                    <p class="text">Connect with strangers worldwide through anonymous, instant chat. No registration needed. Start meaningful conversations today and discover the world through genuine connections.</p>
                    <!-- <div class="d-flex gap-3">
                        <a href="#" class="text-decoration-none">
                            <i class="bi bi-facebook fs-4"></i>
                        </a>
                        <a href="#" class="text-decoration-none">
                            <i class="bi bi-twitter fs-4"></i>
                        </a>
                        <a href="#" class="text-decoration-none">
                            <i class="bi bi-instagram fs-4"></i>
                        </a>
                        <a href="#" class="text-decoration-none">
                            <i class="bi bi-linkedin fs-4"></i>
                        </a>
                    </div> -->
                </div>
                <!-- <div class="col-lg-2 col-md-6 mb-4">
                    <h5>Pages</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Terms & Conditions</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">FAQ</a></li>

                    </ul>
                </div> -->
                <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6 mb-4">
                    <h5>Company</h5>
                    <ul class="list-unstyled">
                        <li><a href="#about">About</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6 mb-4">
                    <h5>Legal</h5>
                    <ul class="list-unstyled">
                        <li><a href="{{route('privacy')}}">Privacy</a></li>
                        <li><a href="{{route('terms')}}">Terms</a></li>
                        <li><a href="{{route('faq')}}">FAQ</a></li>
                    </ul>
                </div>
                 <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6 mb-4">
                    <h5>Follow Us</h5>
                    <div class="d-flex   gap-3">

                        <a href="#" class="text-decoration-none">
                            <i class="bi bi-facebook fs-4"></i>
                        </a>
                        <a href="#" class="text-decoration-none">
                            <i class="bi bi-twitter fs-4"></i>
                        </a>
                        <a href="#" class="text-decoration-none">
                            <i class="bi bi-instagram fs-4"></i>
                        </a>
                        <!-- <a href="#" class="text-decoration-none">
                            <i class="bi bi-linkedin fs-4"></i>
                        </a> -->
                    </div>
                </div>
            </div>
            <hr class="my-4">
            <div class="row align-items-center">
                <div class="col-12 text-center">
                    <p class="text mb-0">&copy; 2025 Disting Disting. All rights reserved.</p>
                </div>
                <!-- <div class="col-md-6 text-md-end">
                    <p class="text mb-0">Made with ❤️ for better connections</p>
                </div> -->
            </div>
        </div>
    </footer>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

    <!-- AOS Animation JS -->
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script> --}}
    <script src="{{asset('frontend/assets/js/aos.js')}}"></script>

    <script>
        // Initialize AOS
        AOS.init({
            duration: 1000,
            once: true,
            offset: 100
        });

        // Navbar scroll effect
        window.addEventListener('scroll', function () {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });

        // Smooth scrolling for nav links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // CTA Button pulse animation
        const ctaButton = document.getElementById('ctaButton');
        setInterval(() => {
            ctaButton.classList.add('pulse');
            setTimeout(() => {
                ctaButton.classList.remove('pulse');
            }, 600);
        }, 5000);

        // Animated Counters
        function animateCounters() {
            const counters = document.querySelectorAll('.stat-number');

            counters.forEach(counter => {
                const target = parseInt(counter.getAttribute('data-target'));
                const count = parseInt(counter.innerText);
                const increment = target / 100;

                if (count < target) {
                    counter.innerText = Math.ceil(count + increment);
                    setTimeout(() => animateCounter(counter, target), 20);
                } else {
                    counter.innerText = target.toLocaleString();
                }
            });
        }

        function animateCounter(counter, target) {
            const count = parseInt(counter.innerText.replace(/,/g, ''));
            const increment = target / 100;

            if (count < target) {
                counter.innerText = Math.ceil(count + increment).toLocaleString();
                setTimeout(() => animateCounter(counter, target), 20);
            } else {
                counter.innerText = target.toLocaleString();
            }
        }

        // Intersection Observer for counter animation
        const statsSection = document.getElementById('stats');
        let statsAnimated = false;

        const statsObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting && !statsAnimated) {
                    animateCounters();
                    statsAnimated = true;
                }
            });
        });

        statsObserver.observe(statsSection);

        // Live stats updates (simulated)
        function updateLiveStats() {
            const stats = [
                { element: document.querySelector('[data-target="1250000"]'), increment: Math.floor(Math.random() * 10) + 1 },
                { element: document.querySelector('[data-target="50000000"]'), increment: Math.floor(Math.random() * 100) + 50 },
                { element: document.querySelector('[data-target="180"]'), increment: 0 },
                { element: document.querySelector('[data-target="99"]'), increment: 0 }
            ];

            stats.forEach(stat => {
                if (stat.increment > 0) {
                    const currentValue = parseInt(stat.element.innerText.replace(/,/g, ''));
                    const newValue = currentValue + stat.increment;
                    stat.element.innerText = newValue.toLocaleString();
                    stat.element.setAttribute('data-target', newValue);
                }
            });
        }

        // Update stats every 3 seconds
        setInterval(updateLiveStats, 3000);

        // Contact form handling
        document.getElementById('contactForm').addEventListener('submit', function (e) {
            e.preventDefault();

            // Get form data
            const formData = new FormData(this);
            const name = formData.get('name');
            const email = formData.get('email');
            const subject = formData.get('subject');
            const message = formData.get('message');

            // Simple validation
            if (!name || !email || !subject || !message) {
                alert('Please fill in all fields.');
                return;
            }

            // Simulate form submission
            const submitButton = this.querySelector('button[type="submit"]');
            const originalText = submitButton.innerHTML;

            submitButton.innerHTML = '<i class="bi bi-hourglass-split me-2"></i>Sending...';
            submitButton.disabled = true;

            setTimeout(() => {
                alert('Thank you for your message! We\'ll get back to you soon.');
                this.reset();
                submitButton.innerHTML = originalText;
                submitButton.disabled = false;
            }, 2000);
        });

        // Form field focus animations
        document.querySelectorAll('.form-control').forEach(input => {
            input.addEventListener('focus', function () {
                this.parentElement.style.transform = 'translateY(-2px)';
            });

            input.addEventListener('blur', function () {
                this.parentElement.style.transform = 'translateY(0)';
            });
        });

        // Loading animation for page elements
        function showElements() {
            const elements = document.querySelectorAll('.fade-in');
            elements.forEach((element, index) => {
                setTimeout(() => {
                    element.classList.add('visible');
                }, index * 100);
            });
        }

        // Initialize page
        document.addEventListener('DOMContentLoaded', function () {
            showElements();

            // Add floating animation to chat bubbles
            document.querySelectorAll('.chat-bubble').forEach((bubble, index) => {
                bubble.style.animationDelay = `${index * 2}s`;
            });
        });

        // Enhanced hover effects for cards
        document.querySelectorAll('.feature-card, .stat-card, .testimonial-card').forEach(card => {
            card.addEventListener('mouseenter', function () {
                this.style.transform = 'translateY(-10px) scale(1.02)';
            });

            card.addEventListener('mouseleave', function () {
                this.style.transform = 'translateY(0) scale(1)';
            });
        });

        // Parallax effect for hero section
        window.addEventListener('scroll', function () {
            const scrolled = window.pageYOffset;
            const parallax = document.querySelector('.hero');
            if (parallax) {
                const speed = scrolled * 0.5;
                parallax.style.backgroundPosition = `center ${speed}px`;
            }
        });

        // Mobile menu improvements
        document.addEventListener('DOMContentLoaded', function () {
            const navbarToggler = document.querySelector('.navbar-toggler');
            const navbarCollapse = document.querySelector('.navbar-collapse');

            // Close mobile menu when clicking on a link
            document.querySelectorAll('.nav-link').forEach(link => {
                link.addEventListener('click', () => {
                    if (navbarCollapse.classList.contains('show')) {
                        navbarToggler.click();
                    }
                });
            });
        });
    </script>
    <script type='text/javascript'>

        document.addEventListener('DOMContentLoaded', function () {
            window.setTimeout(document.querySelector('svg').classList.add('animated'), 1000);
        });
    </script>

</body>

</html>
