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
    <title>Chat </title>
    <link rel="shortcut icon" href="{{ asset('frontend/assets/images/favicon.ico') }}">
    <link href="{{ asset('frontend/assets/plugin/simplebar/simplebar.min.css') }}" rel="stylesheet">

    <!-- Fancyapps CSS -->
    {{-- <link href="{{asset('frontend/assets/plugin/%40fancyapps/ui/fancybox/fancybox.css')}}" rel="stylesheet"> --}}

    <!--------------Bootstrap Icon----------------->
    <link id="bootstrap-icons" href="{{ asset('frontend/assets/css/bootstrap-icons.min.css') }}" type="text/css"
        rel="stylesheet">
    <!--------------Bootstrap CSS----------------->
    <link id="bootstrap" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}" type="text/css" rel="stylesheet">
    <!--------------Main CSS----------------->
    <link id="main-css" href="{{ asset('frontend/assets/css/main.min.css') }}" type="text/css" rel="stylesheet">


    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> --}}
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"> --}}
    <!-- Fonts -->
    {{-- <link rel="preconnect" href="https://fonts.bunny.net"> --}}
    {{-- <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" /> --}}

    <!-- Scripts -->
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    <style>
        /* Only add these minimal styles to preserve your design */
        .simplebar-wrapper {
            /* display: flex;
                flex-direction: column-reverse; */
            scroll-behavior: smooth;

        }

        .messages {
            width: 100%;
            min-height: min-content;

        }
    </style>
    {{-- <link rel="stylesheet" href="{{ asset('css/chat.css') }}"> --}}
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    @livewireStyles()


</head>

<body class="font-sans antialiased">
    @php
        $auth = auth()->user();
    @endphp



    <div class="main-layout d-flex">

        <div class="sidebar bg-body-secondary p-2 px-xxl-4 border-end">
            <div class="d-flex flex-lg-column justify-content-center">
                <div class="d-lg-flex d-none align-items-center justify-content-center navbar-brand mb-lg-2">
                    <a href="#!" class="brand-logo">
                        {{-- <img src="assets/images/logo-dark.png" alt="" height="30" class="logo-dark"> --}}
                        {{-- <img src="assets/images/logo-light.png" alt="" height="30" class="logo-light"> --}}
                    </a>
                    <a href="#!" class="small-logo">
                        {{-- <img src="assets/images/logo.png" alt="" height="46"> --}}
                    </a>
                </div>

                <div class="sidebar-navbar-menu d-flex flex-lg-column justify-content-center">
                    <ul class="nav gap-3 gap-sm-4 gap-xxl-2 flex-lg-column nav-pills" id="pills-tab" role="tablist">
                        <li class="nav-item" title="Chats">
                            <a class="nav-link active chat-nav" href="#pills-chat" id="pills-chat-tab"
                                data-bs-toggle="pill" role="tab" aria-selected="false">
                                <div class=" d-none spinner-grow text-info"
                                    style="--bs-spinner-width: 0.5rem; --bs-spinner-height: 0.5rem; position:absolute;margin-left:12px;"
                                    role="status"></div>




                                <i class="bi bi-chat-right-text-fill fs-5 me-2"></i>
                                <span>Chats</span>

                            </a>
                        </li>
                        <li class="nav-item" title="Contacts">
                            <a class="nav-link user-nav" href="#pills-contacts" id="pills-contacts-tab"
                                data-bs-toggle="pill" role="tab" aria-selected="false"><i
                                    class="bi bi-person-lines-fill fs-5 me-2"></i> <span>Users</span></a>
                        </li>

                        <li class="nav-item" title="Profile">
                            <a class="nav-link" href="#pills-user" id="pills-user-tab" data-tab-id="v-pills-profile-tab"
                                data-bs-toggle="pill" role="tab" aria-selected="false" tabindex="-1"><i
                                    class="bi bi-person-square fs-5 me-2"></i> <span>Profile</span></a>

                        </li>
                        {{-- <li class="nav-item" title="Setting">
                        <a class="nav-link"  id="pills-setting-tab" data-bs-toggle="pill"
                            role="tab" aria-selected="false" tabindex="-1"><i class="bi bi-gear-fill fs-5 me-2"></i>
                            <span>Settings</span></a>

                    </li> --}}
                        <li class="nav-item" title="log out" role="presentation">
                            <a class="nav-link" data-bs-toggle="modal" data-bs-target="#createGroup"
                                aria-selected="false" tabindex="-1" role="tab" style="cursor: pointer;">
                                <i class="bi bi-box-arrow-right fs-5 me-2"></i>
                                <span>Log Out</span>
                            </a>
                        </li>

                    </ul>


                </div>




                <div
                    class="d-none d-lg-block sidebar-footer align-items-center user mt-lg-auto position-fixed bottom-0 start-0 end-0 bg-body-secondary p-2  border-end">
                    <div
                        class="d-flex flex-xxl-row gap-lg-2 gap-xxl-0 align-items-center justify-content-center justify-content-xxl-between position-relative">
                        <a href="#pills-user" @click=" document.querySelector('#pills-user-tab')?.click();"
                            class=" d-flex align-items-center justify-content-between">
                            <div class="d-none d-lg-flex align-items-center order-2 order-xxl-1" id="userProfile"
                                style="cursor: pointer;">

                                <img src="@if ($auth->gender == 'Female') https://api.dicebear.com/9.x/lorelei/svg?seed=Eden&beard[]&earrings[]&eyebrows=variant07&eyes=variant09,variant21&glasses[]&hair=variant41,variant31&head=variant04&mouth=happy01&nose=variant04&backgroundColor=ffdfbf @else https://api.dicebear.com/9.x/lorelei/svg?seed=Jack&beard[]&earrings[]&eyebrows[]&eyes=variant15&glasses[]&hair=variant43&head=variant04&mouth=happy14&nose=variant03&backgroundColor=b6e3f4 @endif"
                                    alt="User profile image"
                                    class="profile-img img-fluid square-sm p-1 bg-primary-subtle rounded-circle d-xxl-block d-none">
                                <div class="d-block text-truncate">
                                    <h5 class="user-name ms-2 mb-0"> {{ $auth->name }} </h5>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown user-dropdown order-1 order-xxl-2">
                            {{-- <livewire:layout.navigation /> --}}

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sidebar-chat bg-body-secondary border-end overflow-hidden navbar-expand-lg">
            <div class="tab-content" id="myTab" role="tablist">

                <!-- Start chats -->
                <div class="tab-pane active show overflow-hidden chat-tab" id="pills-chat" role="tabpanel"
                    aria-labelledby="pills-chat-tab">
                    <div class="toast-container position-fixed top-0 end-0 p-3">
                        <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                            <div class="toast-header">
                                {{-- <img src="assets/images/logo.png" class="rounded me-2" alt="logo" height="25"> --}}
                                <strong class="me-auto">DISTING DISTING</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="toast"
                                    aria-label="Close"></button>
                            </div>
                            <div class="toast-body">
                                Chat Contact Added Successfully.
                            </div>
                        </div>
                    </div>
                    <!-- Start chats content -->
                    <div class="tab-pane active show overflow-hidden" id="pills-chat" role="tabpanel" aria-labelledby="pills-chat-tab">
                        <div class="d-flex align-items-center mb-4 p-4 pb-0">
                            <div class="flex-grow-1">
                                <h5 class="mb-0">Chats</h5>
                            </div>
                            <div class="flex-shrink-0">
                                <div class="d-flex align-items-center gap-2">
                                    <div data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Add New Chat">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="chat-all-list p-4 pt-0"style=" overflow-y: auto;  scroll-behavior: smooth;scrollbar-width: none; ">

                            @livewire('chat.chatlist')

                        </div>
                    </div>
                    <!-- Start chats content -->
                </div>
                <!-- End chats -->
                <!-- Start contacts -->
                <div class="tab-pane overflow-hidden user-tab" id="pills-contacts" role="tabpanel"
                    aria-labelledby="pills-contacts-tab">
                    <!-- Start Contact content -->
                    <div class="d-flex align-items-center mb-4 p-4 pb-0">
                        <div class="flex-grow-1">
                            <h5 class="mb-0">Active Users</h5>
                        </div>
                        <div class="flex-shrink-0">
                            <div class="d-flex align-items-center gap-2">
                                <div data-bs-toggle="tooltip" data-bs-placement="bottom"
                                    data-bs-title="Add New Contact">

                                </div>
                            </div>
                        </div>
                    </div>

                    @livewire('chat.create-chat')

                </div> <!-- End contacts -->

                <!-- Start Profile -->
                <div class="tab-pane overflow-hidden profile-tab" id="pills-user" role="tabpanel"
                    aria-labelledby="pills-user-tab">
                    <!-- Start profile content -->
                    <div style="height: 150px;"></div>
                    <div class="position-absolute top-0 left-0 end-0 w-100 mt-5">
                        <div class="user-chat-nav p-4">
                            <div class="d-flex w-100 align-items-center">
                                <div class="flex-grow-1">
                                    <h5 class="text-dark mb-0">Profile</h5>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="text-center p-4 py-lg-0 mt-n5">
                        <div class="mb-lg-3 mb-2">
                            <img src="@if ($auth->gender == 'Female') https://api.dicebear.com/9.x/lorelei/svg?seed=Eden&beard[]&earrings[]&eyebrows=variant07&eyes=variant09,variant21&glasses[]&hair=variant41,variant31&head=variant04&mouth=happy01&nose=variant04&backgroundColor=ffdfbf @else https://api.dicebear.com/9.x/lorelei/svg?seed=Jack&beard[]&earrings[]&eyebrows[]&eyes=variant15&glasses[]&hair=variant43&head=variant04&mouth=happy14&nose=variant03&backgroundColor=b6e3f4 @endif""
                                class="rounded-circle square-xxl border-0 img-thumbnail bg-primary-subtle "
                                alt="">
                        </div>

                        <h6 class="font-16 mb-1 text-truncate">{{ $auth->name }} &middot;
                            {{ $auth->age }} &middot; <img
                                src="https://flagsapi.com/{{ $auth->country }}/flat/32.png"> </h6>
                        {{-- <p class="text-muted font-italic font-12">Last seen: Today</p> --}}
                    </div>

                    <!-- End profile user -->

                    <div class="p-4 pt-0 scroll-page simplebar-scrollable-y" data-simplebar="init">
                        <div class="simplebar-wrapper" style="margin: 0px -24px -24px;">
                            <div class="simplebar-height-auto-observer-wrapper">
                                <div class="simplebar-height-auto-observer"></div>
                            </div>
                            <div class="simplebar-mask">
                                <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                    <div class="simplebar-content-wrapper" tabindex="0" role="region"
                                        aria-label="scrollable content"
                                        style="height: 100%; overflow: hidden scroll;">
                                        <div class="simplebar-content" style="padding: 0px 24px 24px;">

                                            <div class="profile-setting mt-3">
                                                <div class="px-4">

                                                    <div class="card rounded-3 shadow-none">
                                                        <div class="card-body p-4 ">
                                                            {{-- <div class="font-16 fw-semibold mb-4">About Me</div> --}}
                                                            {{-- <p>I’m a friendly kitchen assistant who suffers from a
                                                            severe phobia of buttons.</p>
                                                        <p>Brother of Elijah Jay Watkins, who has phobia of
                                                            buttons and trust issues.</p> --}}

                                                            {{-- <hr> --}}
                                                            @php
                                                                $authUser = $auth;
                                                                $code = $authUser->country;
                                                                // $response = Http::get("https://restcountries.com/v3.1/alpha/{$code}");

                                                                $countryName = 'gg';
                                                                //  $response->successful()
                                                                //     ? $response->json()[0]['name']['common']
                                                                //     : strtoupper($code); // fallback to code if failed
                                                            @endphp
                                                            <div id="profile">
                                                                <div class="d-flex align-items-center gap-3 mb-2">
                                                                    <p class="m-0 fw-semibold">Name :</p>
                                                                    <p class="m-0">
                                                                        {{ $authUser->name }}
                                                                    </p>
                                                                </div>
                                                                <div class="d-flex align-items-center gap-3 mb-2">
                                                                    <p class="m-0 fw-semibold">Age :</p>
                                                                    <p class="m-0">
                                                                        {{ $authUser->age }}
                                                                    </p>
                                                                </div>
                                                                <div class="d-flex align-items-center gap-3 mb-2">
                                                                    <p class="m-0 fw-semibold">Country :</p>
                                                                    <p class="m-0">

                                                                        {{ $countryName }}
                                                                    </p>
                                                                </div>
                                                                <div class="d-flex align-items-center gap-3 mb-2">
                                                                    <p class="m-0 fw-semibold">Gender :</p>
                                                                    <p class="m-0"> {{ $authUser->gender }} </p>
                                                                </div>
                                                                <button type="button"
                                                                    class="btn bg-transparent btn-sm p-0 d-flex justify-content-center align-items-centergap-2 ms-auto"
                                                                    id="editBtn">

                                                                    <i class="bi bi-pencil-square align-middle"></i>
                                                                    Edit
                                                                </button>
                                                            </div>
                                                            @livewire('profile.update-profile-information-form')


                                                        </div>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="simplebar-placeholder" style="width: 349px; height: 1254px;"></div>
                        </div>
                        <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                            <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
                        </div>
                        <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                            <div class="simplebar-scrollbar"
                                style="height: 167px; display: block; transform: translate3d(0px, 162px, 0px);">
                            </div>
                        </div>
                    </div>

                    <!-- End profile content -->
                </div>

            </div>
        </div>
        <div class="position-relative flex-fill vh-100 overflow-hidden">
            @livewire('chat.chatbox')
            @livewire('chat.send-message')
            <!-- Customiser setting -->
            <!-- Customiser Settings -->
            <div class="theme-customizer-button">
                <button class="theme-customizer-toggle btn btn-primary rounded-end-0 fs-5" type="button"
                    title="Theme Customizer" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample"
                    aria-controls="offcanvasExample" style="    border-radius: 0px 9px 9px 0px !important;">
                    <i class="bi bi-gear-fill spin"></i>
                </button>
            </div>

            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample"
                aria-labelledby="offcanvasExampleLabel">
                <div class="offcanvas-header border-bottom bg-primary-subtle">
                    <h4 class="offcanvas-title" id="offcanvasExampleLabel">Customize Chat</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <div class="theme-customizer-body">
                        <div class="mt-3">
                            <h5 class="mb-3 font-17">Layouts</h5>
                            <div>
                                <!-- Dark Button -->
                                <div class="form-check form-switch mb-2 d-flex align-items-center">
                                    <input class="form-check-input p-2 px-3" type="checkbox" role="switch"
                                        id="switchDark" x-bind:checked="darkTheme" @click="darkTheme = !darkTheme">
                                    <label class="form-check-label ms-2 align-middle" for="switchDark">Dark</label>
                                </div>

                                <!-- RTL Button -->
                                <div class=" d-none form-check form-switch">
                                    <input class="form-check-input p-2 px-3" type="checkbox" role="switch"
                                        id="switchRtl">

                                    <label class="form-check-label ms-2 align-middle" for="switchRtl">RTL</label>
                                </div>
                            </div>

                            <!-- Theme Color -->
                            <div class="mt-4 theme-color" id="themeColor">
                                <h5 class="mb-3 font-17">Theme Color</h5>
                                <div class="d-flex gap-2">
                                    <input type="radio" class="themecolorBtn btn-check" value="purple"
                                        name="options1" id="option1" autocomplete="off" checked>
                                    <label class="btn btn-purple btn-small p-0" for="option1"></label>

                                    <input type="radio" class="themecolorBtn btn-check" value="red"
                                        name="options1" id="option2" autocomplete="off">
                                    <label class="btn btn-danger btn-small p-0" for="option2"></label>

                                    <input type="radio" class="themecolorBtn btn-check" value="green"
                                        name="options1" id="option3" autocomplete="off">
                                    <label class="btn btn-success btn-small p-0" for="option3"></label>

                                    <input type="radio" class="themecolorBtn btn-check" value="blue"
                                        name="options1" id="option4" autocomplete="off">
                                    <label class="btn btn-secondary btn-small p-0" for="option4"></label>

                                    <input type="radio" class="themecolorBtn btn-check" value="info"
                                        name="options1" id="option5" autocomplete="off">
                                    <label class="btn btn-info btn-small p-0" for="option5"></label>
                                </div>
                            </div>

                            <!-- Chat BG-Color -->
                            <div class="mt-4 chat-bg" id="chatBg">
                                <h5 class="mb-3 font-17">Chat Background Color</h5>
                                <div class="d-flex gap-2">
                                    <input type="radio" class="chatBgBtn btn-check" value="light" name="options2"
                                        id="light" autocomplete="off" checked>
                                    <label class="btn bg-light btn-small border-0 body-color p-0"
                                        for="light"></label>

                                    <input type="radio" class="chatBgBtn btn-check" value="purple-light"
                                        name="options2" id="purple-light" autocomplete="off">
                                    <label class="btn bg-primary-subtle btn-small border-0 text-primary p-0"
                                        for="purple-light"></label>

                                    <input type="radio" class="chatBgBtn btn-check" value="red-light"
                                        name="options2" id="red-light" autocomplete="off">
                                    <label class="btn bg-danger-subtle btn-small border-0 text-danger p-0"
                                        for="red-light"></label>

                                    <input type="radio" class="chatBgBtn btn-check" value="green-light"
                                        name="options2" id="green-light" autocomplete="off">
                                    <label class="btn bg-success-subtle btn-small border-0 text-success p-0"
                                        for="green-light"></label>

                                    <input type="radio" class="chatBgBtn btn-check" value="blue-light"
                                        name="options2" id="blue-light" autocomplete="off">
                                    <label class="btn bg-secondary-subtle btn-small border-0 text-secondary p-0"
                                        for="blue-light"></label>

                                    <input type="radio" class="chatBgBtn btn-check" value="info-light"
                                        name="options2" id="info-light" autocomplete="off">
                                    <label class="btn bg-info-subtle btn-small border-0 text-info p-0"
                                        for="info-light"></label>

                                    <input type="radio" class="chatBgBtn btn-check" value="warning-light"
                                        name="options2" id="warning-light" autocomplete="off">
                                    <label class="btn bg-warning-subtle btn-small border-0 text-warning p-0"
                                        for="warning-light"></label>
                                </div>
                            </div>

                            <!-- Chat Image -->
                            <div class="mt-4 chat-img" id="chatImg">
                                <h5 class="mb-3 font-17">Chat Image</h5>
                                <div class="d-flex gap-2">
                                    <div class="chat-img-1">
                                        <input type="radio" class="chatImgBtn btn-check" value="chat-img-1"
                                            name="options3" id="chat-img-1" autocomplete="off" checked>
                                        <label class="btn bg-light btn-small p-0" style="height: 45px;"
                                            for="chat-img-1"></label>
                                        <p>IM-1</p>
                                    </div>
                                    <div class="chat-img-2">
                                        <input type="radio" class="chatImgBtn btn-check" value="chat-img-2"
                                            name="options3" id="chat-img-2" autocomplete="off">
                                        <label class="btn bg-light btn-small p-0" style="height: 45px;"
                                            for="chat-img-2"></label>
                                        <p>IM-2</p>
                                    </div>
                                    <div class="chat-img-3">
                                        <input type="radio" class="chatImgBtn btn-check" value="chat-img-3"
                                            name="options3" id="chat-img-3" autocomplete="off">
                                        <label class="btn bg-light btn-small p-0" style="height: 45px;"
                                            for="chat-img-3"></label>
                                        <p>IM-3</p>
                                    </div>
                                    <div class="chat-img-4">
                                        <input type="radio" class="chatImgBtn btn-check" value="chat-img-4"
                                            name="options3" id="chat-img-4" autocomplete="off">
                                        <label class="btn bg-light btn-small p-0" style="height: 45px;"
                                            for="chat-img-4"></label>
                                        <p>IM-4</p>
                                    </div>
                                    <div class="chat-img-5">
                                        <input type="radio" class="chatImgBtn btn-check" value="chat-img-5"
                                            name="options3" id="chat-img-5" autocomplete="off">
                                        <label class="btn bg-light btn-small p-0" style="height: 45px;"
                                            for="chat-img-5"></label>
                                        <p>IM-5</p>
                                    </div>
                                    <div>
                                        <input type="radio" class="chatImgBtn btn-check" value="chat-img-6"
                                            name="options3" id="chat-img-6" autocomplete="off">
                                        <label class="btn bg-light btn-small p-0" style="height: 45px;"
                                            for="chat-img-6"></label>
                                        <p>None</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="createGroup" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="createGroupLabel" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content modal-header-colored shadow-lg border-0">
                    <div class="modal-header">

                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        </button>
                    </div>
                    <div class="card" :class="{ 'border': darkTheme, 'border-0 shadow-md': !darkTheme }">
                        <div class="card-body p-4 m-2">
                            <div class="text-center">
                                <img src="{{ asset('frontend/assets/images/logout.png') }}" alt=""
                                    class="square-xxl">
                                <h4 class="mt-5">Oh No! You're leaving... <br> Are You Sure?</h4>
                                <div class="d-flex flex-column flex-sm-row align-items-sm-center gap-3 mt-4">
                                    <button data-bs-dismiss="modal" class='btn btn-primary w-100'>Back To
                                        Chat</button>
                                    {{-- <form action="{{ route('logout') }}"  class="w-100">
                                    @csrf
                                    <button type="submit" class='btn btn-outline-primary w-100'>Yes, Log
                                        Out</Button>
                                </form> --}}

                                    @livewire('layout.navigation')
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Modals -->


    </div>
    <!-- Bootstrap js -->
    {{-- <script  src="{{ asset('frontend/assets/js/cdn.min.js') }}" defer></script> --}}
    <script src="{{ asset('frontend/assets/plugin/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Fancyapps js -->
    {{-- <script src="{{ asset('frontend/assets/plugin/%40fancyapps/ui/fancybox/fancybox.umd.js') }}"></script> --}}

    <!-- Simplebar jS -->
    {{-- <script src="{{ asset('frontend/assets/plugin/simplebar/simplebar.min.js') }}"></script> --}}


    {{-- <script src="{{ asset('frontend/assets/js/pages/chat.init.js') }}"></script> --}}

    <!-- Main jS -->
    <script src="{{ asset('frontend/assets/js/main.js') }}"></script>
    @yield('script')
    <script>
        document.addEventListener('livewire:init', () => {
            Livewire.on('newMessage', (event) => {
                let blink = $('.spinner-grow');
                if (event[0] == true) {
                    blink.removeClass('d-none');
                } else {
                    blink.addClass('d-none');
                }
            });
        });
        window.addEventListener('chatSelected', event => {

            const observer = new MutationObserver((mutations) => {
                const chatboxBody = document.querySelector('.simplebar-wrapper');
                if (!chatboxBody) return;
                chatboxBody.scrollTop = chatboxBody.scrollHeight; // Scroll to the


            });
            observer.observe(document.body, {
                childList: true,
                subtree: true
            });
            setTimeout(() => observer.disconnect(), 2000);
        });
        $(window).resize(function() {
            if (window.innerWidth > 786) {
                $('.chat_list_container').show();
                $('.chat_box_container').show();
            }
        });
        $(document).on('click', '.return', function() {

            Livewire.dispatch('resetChat');
            if (window.innerWidth < 768) {
                $('.chat_list_container').show();
                $('.chat_box_container').hide();
            }
        });
        $(document).on('click', '#editBtn', function() {
            $('#profile').addClass('d-none');
            $('#profile-form').removeClass('d-none');
        });
        $(document).on('click', '#cancelBtn', function() {
            $('#profile').removeClass('d-none');
            $('#profile-form').addClass('d-none');
        });
        // automatic logout
             // Auto logout after 30 minutes of inactivity (1800000 ms)
             const inactivityTime = 10 * 60 * 1000;
        let logoutTimer;

        function resetTimer() {
            clearTimeout(logoutTimer);
            logoutTimer = setTimeout(logoutUser, inactivityTime);
        }

        function logoutUser() {
            // Livewire.dispatch('logoutUser');
            // window.location.href = '/logout'; // Laravel's default logout route
            // console.log('User logged out due to inactivity');
            // $('#logoutBtn').click();
        }

        // Reset timer on these events
        ['mousemove', 'keypress', 'click', 'scroll'].forEach(event => {
            document.addEventListener(event, resetTimer);
        });

        // Start the timer when page loads
        resetTimer();
    </script>



    @livewireScripts()
</body>

</html>
