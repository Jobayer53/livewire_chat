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

    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>DistingDisting - Register</title>
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('frontend/assets/images/favicon.ico') }}">
    <!--------------Bootstrap Icon----------------->
    <link id="bootstrap-icons" href="{{ asset('frontend/assets/css/bootstrap-icons.min.css') }}" type="text/css"
        rel="stylesheet">
    <!--------------Bootstrap CSS----------------->
    <link id="bootstrap" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}" type="text/css" rel="stylesheet">
    <!--------------Main CSS----------------->
    <link id="main-css" href="{{ asset('frontend/assets/css/main.min.css') }}" type="text/css" rel="stylesheet">

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
                                    <img src="{{ asset('frontend/assets/images/login-img.png') }}" alt=""
                                        class="img-fluid ">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card shadow-none border-0 rounded-lg-0 rounded-3 mb-0"
                                :class="{ 'border-0': darkTheme, 'border-0 shadow-md': !darkTheme }">
                                <div class="card-body text-center p-4 m-2">
                                    <img src="{{ asset('frontend/assets/images/login.png') }}" alt=""
                                        class="square-xxl">
                                    <h4 class="mt-5 mb-3">Start Chat Now!</h4>
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
