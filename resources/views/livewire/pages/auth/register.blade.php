<?php

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;
use App\Events\LoadUser;
use Illuminate\Support\Facades\Broadcast;
new #[Layout('layouts.guest')] class extends Component
{
    public string $name;
    public string $age;
    public string $gender;
    public string $country;
    /**
     * Handle an incoming registration request.
     */
    public function register(): void
    {

        $validated = $this->validate([
            'name' => ['required', 'string', 'max:255', 'unique:'.User::class],
            'age' => ['required', 'integer', 'min:18'],
            'gender' => ['required', 'string'],
            'country' => ['required', 'string'],

        ]);


        event(new Registered($user = User::create($validated)));
        Auth::login($user);
        broadcast(new LoadUser($user))->toOthers();
        $this ->redirect(route('chat', absolute: false), navigate: true);

    }
}; ?>
@section('html-attributes')

x-data="{ darkTheme: false }" x-init="
        const htmlTag = document.querySelector('html');
        const storedTheme = sessionStorage.getItem('darkTheme');
        if (storedTheme === 'true') {
            darkTheme = true;
            htmlTag.setAttribute('data-bs-theme', 'dark');
        }
        $watch('darkTheme', value => {
            htmlTag.setAttribute('data-bs-theme', value ? 'dark' : 'light');
            sessionStorage.setItem('darkTheme', value ? 'true' : 'false');
        })
    " dir="ltr"
@endsection
 @section('title') {{ 'Register' }}@endsection
@section('header')
<head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="SRBThemes" name="author">
    <meta content="Chatizo - Chat App Template" name="description">
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('frontend/assets/images/favicon.ico')}}">
    <!--------------Bootstrap Icon----------------->
    <link id="bootstrap-icons" href="{{asset('frontend/assets/css/bootstrap-icons.min.css')}}" type="text/css" rel="stylesheet">
    <!--------------Bootstrap CSS----------------->
    <link id="bootstrap" href="{{asset('frontend/assets/css/bootstrap.min.css')}}" type="text/css" rel="stylesheet">
    <!--------------Main CSS----------------->
    <link id="main-css" href="{{asset('frontend/assets/css/main.min.css')}}" type="text/css" rel="stylesheet">

</head>
@endsection

<div>

    {{-- <form wire:submit="register">
        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input wire:model="name" id="name" class="block mt-1 w-full" type="text" name="name" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input wire:model="email" id="email" class="block mt-1 w-full" type="email" name="email" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input wire:model="password" id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input wire:model="password_confirmation" id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}" wire:navigate>
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form> --}}
    {{-- <!doctype html> --}}

    {{-- <html lang="en" x-data="{ darkTheme: false }" x-init="
        const htmlTag = document.querySelector('html');
        const storedTheme = sessionStorage.getItem('darkTheme');
        if (storedTheme === 'true') {
            darkTheme = true;
            htmlTag.setAttribute('data-bs-theme', 'dark');
        }
        $watch('darkTheme', value => {
            htmlTag.setAttribute('data-bs-theme', value ? 'dark' : 'light');
            sessionStorage.setItem('darkTheme', value ? 'true' : 'false');
        })
    " dir="ltr"> --}}

    <!-- Mirrored from chatizo.netlify.app/html/signup by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 16 Apr 2025 06:32:48 GMT -->
    {{-- <!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack --> --}}
    {{-- <head>

        <meta charset="utf-8">
        <title>Sign Up | Chatizo Chat App Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="SRBThemes" name="author">
        <meta content="Chatizo - Chat App Template" name="description">
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">
        <!--------------Bootstrap Icon----------------->
        <link id="bootstrap-icons" href="assets/css/bootstrap-icons.min.css" type="text/css" rel="stylesheet">
        <!--------------Bootstrap CSS----------------->
        <link id="bootstrap" href="assets/css/bootstrap.min.css" type="text/css" rel="stylesheet">
        <!--------------Main CSS----------------->
        <link id="main-css" href="assets/css/main.min.css" type="text/css" rel="stylesheet">

    </head> --}}

    <body class="bg-logout min-vh-100 d-flex align-items-center justify-content-center">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-xxl-9 col-lg-12">
                    <div class="card border-0 mb-0">
                        <div class="row justify-content-center align-items-center g-0">
                            <div class="col-lg-6 d-none d-lg-block">
                                <div class="card bg-primary-subtle shadow-none border-0 rounded-0 rounded-start mb-0 pt-5">
                                    <div class="card-body p-0 pt-5 mt-5 mt-xl-3">
                                        <img src="{{asset('frontend/assets/images/login-img.png')}}" alt="" class="img-fluid ">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card shadow-none border-0 rounded-lg-0 rounded-3 mb-0" :class="{'border-0': darkTheme, 'border-0 shadow-md': !darkTheme }">
                                    <div class="card-body text-center p-4 m-2">
                                        <img src="{{asset('frontend/assets/images/login.png')}}" alt="" class="square-xxl">
                                        <h4 class="mt-5 mb-3">Start Chat Now!</h4>
                                        <div>
                                            <form wire:submit="register">
                                                <div class="row g-3">
                                                    <div class="col-lg-12">
                                                        <div>
                                                            <input type="text" class="form-control font-14" id="firstName" placeholder="Nickname"
                                                            wire:model="name" id="name"   name="name" required autofocus autocomplete="name">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div>
                                                            <input type="number" class="form-control font-14" id="age" placeholder="Age 18+" min="18"
                                                            wire:model="age"  name="age" required autocomplete="username">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div class="form-control d-flex justify-content-evenly">
                                                            <div>
                                                                <input type="radio" id="Male" class="" name="gender" value="Male" wire:model="gender"/>
                                                                <label class="" for="Male">Male</label>
                                                            </div>
                                                            <div>
                                                                <input type="radio" id="Female" name="gender" value="Female" wire:model="gender" />
                                                                <label for="Female">Female</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <select wire:model="country" name="country" class="form-control" id="">
                                                            <option value="">Select Country</option>
                                                            <option value="AF">Afghanistan</option>
                                                            <option value="AL">Albania</option>
                                                            <option value="DZ">Algeria</option>
                                                            <option value="AD">Andorra</option>
                                                            <option value="AO">Angola</option>
                                                            <option value="AG">Antigua and Barbuda</option>
                                                            <option value="AR">Argentina</option>
                                                            <option value="AM">Armenia</option>
                                                            <option value="AU">Australia</option>
                                                            <option value="AT">Austria</option>
                                                            <option value="AZ">Azerbaijan</option>
                                                            <option value="BS">Bahamas</option>
                                                            <option value="BH">Bahrain</option>
                                                            <option value="BD">Bangladesh</option>
                                                            <option value="BB">Barbados</option>
                                                            <option value="BY">Belarus</option>
                                                            <option value="BE">Belgium</option>
                                                            <option value="BZ">Belize</option>
                                                            <option value="BJ">Benin</option>
                                                            <option value="BT">Bhutan</option>
                                                            <option value="BO">Bolivia</option>
                                                            <option value="BA">Bosnia and Herzegovina</option>
                                                            <option value="BW">Botswana</option>
                                                            <option value="BR">Brazil</option>
                                                            <option value="BN">Brunei</option>
                                                            <option value="BG">Bulgaria</option>
                                                            <option value="BF">Burkina Faso</option>
                                                            <option value="BI">Burundi</option>
                                                            <option value="CV">Cabo Verde</option>
                                                            <option value="KH">Cambodia</option>
                                                            <option value="CM">Cameroon</option>
                                                            <option value="CA">Canada</option>
                                                            <option value="CF">Central African Republic</option>
                                                            <option value="TD">Chad</option>
                                                            <option value="CL">Chile</option>
                                                            <option value="CN">China</option>
                                                            <option value="CO">Colombia</option>
                                                            <option value="KM">Comoros</option>
                                                            <option value="CG">Congo (Congo-Brazzaville)</option>
                                                            <option value="CR">Costa Rica</option>
                                                            <option value="HR">Croatia</option>
                                                            <option value="CU">Cuba</option>
                                                            <option value="CY">Cyprus</option>
                                                            <option value="CZ">Czechia (Czech Republic)</option>
                                                            <option value="DK">Denmark</option>
                                                            <option value="DJ">Djibouti</option>
                                                            <option value="DM">Dominica</option>
                                                            <option value="DO">Dominican Republic</option>
                                                            <option value="EC">Ecuador</option>
                                                            <option value="EG">Egypt</option>
                                                            <option value="SV">El Salvador</option>
                                                            <option value="GQ">Equatorial Guinea</option>
                                                            <option value="ER">Eritrea</option>
                                                            <option value="EE">Estonia</option>
                                                            <option value="SZ">Eswatini</option>
                                                            <option value="ET">Ethiopia</option>
                                                            <option value="FJ">Fiji</option>
                                                            <option value="FI">Finland</option>
                                                            <option value="FR">France</option>
                                                            <option value="GA">Gabon</option>
                                                            <option value="GM">Gambia</option>
                                                            <option value="GE">Georgia</option>
                                                            <option value="DE">Germany</option>
                                                            <option value="GH">Ghana</option>
                                                            <option value="GR">Greece</option>
                                                            <option value="GD">Grenada</option>
                                                            <option value="GT">Guatemala</option>
                                                            <option value="GN">Guinea</option>
                                                            <option value="GW">Guinea-Bissau</option>
                                                            <option value="GY">Guyana</option>
                                                            <option value="HT">Haiti</option>
                                                            <option value="VA">Holy See</option>
                                                            <option value="HN">Honduras</option>
                                                            <option value="HU">Hungary</option>
                                                            <option value="IS">Iceland</option>
                                                            <option value="IN">India</option>
                                                            <option value="ID">Indonesia</option>
                                                            <option value="IR">Iran</option>
                                                            <option value="IQ">Iraq</option>
                                                            <option value="IE">Ireland</option>
                                                            <option value="IL">Israel</option>
                                                            <option value="IT">Italy</option>
                                                            <option value="JM">Jamaica</option>
                                                            <option value="JP">Japan</option>
                                                            <option value="JO">Jordan</option>
                                                            <option value="KZ">Kazakhstan</option>
                                                            <option value="KE">Kenya</option>
                                                            <option value="KI">Kiribati</option>
                                                            <option value="KP">Korea (North)</option>
                                                            <option value="KR">Korea (South)</option>
                                                            <option value="KW">Kuwait</option>
                                                            <option value="KG">Kyrgyzstan</option>
                                                            <option value="LA">Laos</option>
                                                            <option value="LV">Latvia</option>
                                                            <option value="LB">Lebanon</option>
                                                            <option value="LS">Lesotho</option>
                                                            <option value="LR">Liberia</option>
                                                            <option value="LY">Libya</option>
                                                            <option value="LI">Liechtenstein</option>
                                                            <option value="LT">Lithuania</option>
                                                            <option value="LU">Luxembourg</option>
                                                            <option value="MG">Madagascar</option>
                                                            <option value="MW">Malawi</option>
                                                            <option value="MY">Malaysia</option>
                                                            <option value="MV">Maldives</option>
                                                            <option value="ML">Mali</option>
                                                            <option value="MT">Malta</option>
                                                            <option value="MH">Marshall Islands</option>
                                                            <option value="MR">Mauritania</option>
                                                            <option value="MU">Mauritius</option>
                                                            <option value="MX">Mexico</option>
                                                            <option value="FM">Micronesia</option>
                                                            <option value="MD">Moldova</option>
                                                            <option value="MC">Monaco</option>
                                                            <option value="MN">Mongolia</option>
                                                            <option value="ME">Montenegro</option>
                                                            <option value="MA">Morocco</option>
                                                            <option value="MZ">Mozambique</option>
                                                            <option value="MM">Myanmar (formerly Burma)</option>
                                                            <option value="NA">Namibia</option>
                                                            <option value="NR">Nauru</option>
                                                            <option value="NP">Nepal</option>
                                                            <option value="NL">Netherlands</option>
                                                            <option value="NZ">New Zealand</option>
                                                            <option value="NI">Nicaragua</option>
                                                            <option value="NE">Niger</option>
                                                            <option value="NG">Nigeria</option>
                                                            <option value="MK">North Macedonia</option>
                                                            <option value="NO">Norway</option>
                                                            <option value="OM">Oman</option>
                                                            <option value="PK">Pakistan</option>
                                                            <option value="PW">Palau</option>
                                                            <option value="PS">Palestine State</option>
                                                            <option value="PA">Panama</option>
                                                            <option value="PG">Papua New Guinea</option>
                                                            <option value="PY">Paraguay</option>
                                                            <option value="PE">Peru</option>
                                                            <option value="PH">Philippines</option>
                                                            <option value="PL">Poland</option>
                                                            <option value="PT">Portugal</option>
                                                            <option value="QA">Qatar</option>
                                                            <option value="RO">Romania</option>
                                                            <option value="RU">Russia</option>
                                                            <option value="RW">Rwanda</option>
                                                            <option value="KN">Saint Kitts and Nevis</option>
                                                            <option value="LC">Saint Lucia</option>
                                                            <option value="VC">Saint Vincent and the Grenadines</option>
                                                            <option value="WS">Samoa</option>
                                                            <option value="SM">San Marino</option>
                                                            <option value="ST">Sao Tome and Principe</option>
                                                            <option value="SA">Saudi Arabia</option>
                                                            <option value="SN">Senegal</option>
                                                            <option value="RS">Serbia</option>
                                                            <option value="SC">Seychelles</option>
                                                            <option value="SL">Sierra Leone</option>
                                                            <option value="SG">Singapore</option>
                                                            <option value="SK">Slovakia</option>
                                                            <option value="SI">Slovenia</option>
                                                            <option value="SB">Solomon Islands</option>
                                                            <option value="SO">Somalia</option>
                                                            <option value="ZA">South Africa</option>
                                                            <option value="SS">South Sudan</option>
                                                            <option value="ES">Spain</option>
                                                            <option value="LK">Sri Lanka</option>
                                                            <option value="SD">Sudan</option>
                                                            <option value="SR">Suriname</option>
                                                            <option value="SE">Sweden</option>
                                                            <option value="CH">Switzerland</option>
                                                            <option value="SY">Syria</option>
                                                            <option value="TJ">Tajikistan</option>
                                                            <option value="TZ">Tanzania</option>
                                                            <option value="TH">Thailand</option>
                                                            <option value="TL">Timor-Leste</option>
                                                            <option value="TG">Togo</option>
                                                            <option value="TO">Tonga</option>
                                                            <option value="TT">Trinidad and Tobago</option>
                                                            <option value="TN">Tunisia</option>
                                                            <option value="TR">Turkey</option>
                                                            <option value="TM">Turkmenistan</option>
                                                            <option value="TV">Tuvalu</option>
                                                            <option value="UG">Uganda</option>
                                                            <option value="UA">Ukraine</option>
                                                            <option value="AE">United Arab Emirates</option>
                                                            <option value="GB">United Kingdom</option>
                                                            <option value="US">United States of America</option>
                                                            <option value="UY">Uruguay</option>
                                                            <option value="UZ">Uzbekistan</option>
                                                            <option value="VU">Vanuatu</option>
                                                            <option value="VE">Venezuela</option>
                                                            <option value="VN">Vietnam</option>
                                                            <option value="YE">Yemen</option>
                                                            <option value="ZM">Zambia</option>
                                                            <option value="ZW">Zimbabwe</option>

                                                        </select>
                                                    </div>
                                                    {{--  <div class="col-lg-12">
                                                        <input type="password" class="form-control font-14" id="exampleInputPassword1" placeholder="Enter password">
                                                       <div class="text-end pt-1">
                                                            <a class='text-end text-success font-14 fw-medium' href='reset-psw.html'>Forgot Password ?</a>
                                                        </div>
                                                    </div>--}}
                                                    <div class="col-lg-12">
                                                        <button type="submit" class="btn btn-primary w-100">Register</button>
                                                    </div>
                                                </div>
                                            </form>
                                           {{--   <p class="mb-0 text-muted font-14 mt-3 text-center">Already have an account? <a class='fw-medium' href='login.html'>Log In</a></p>
                                            <div class="text-muted py-4 text-center">
                                                OR
                                            </div>
                                           <div class="vstack gap-2">
                                                <a href="#!" class="btn btn-link border w-100 text-danger"><i class="bi bi-google me-1"></i> Continue with Google</a>
                                                <a href="#!" class="btn btn-link border w-100 text-secondary"><i class="bi bi-facebook me-1"></i> Continue with Facebook</a>
                                                <a href="#!" class="btn btn-link border w-100 text-body"><i class="bi bi-github me-1"></i> Continue with Github</a>
                                            </div> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <button @click="darkTheme = !darkTheme" class="btn btn-dark  position-fixed custom-dark-button py-1 px-3" style="border-radius:0 9px 9px 0; !important">
            <i class="bi bi-brightness-high fs-4" :class="{ 'd-block': darkTheme, 'd-none': !darkTheme }"></i>
            <i class="bi bi-mask fs-4" :class="{ 'd-none': darkTheme, 'd-block': !darkTheme }"></i>
        </button>

        <!-- JAVASCRIPT -->
        {{-- <script src="{{asset('frontend/assets/plugin/bootstrap/js/bootstrap.bundle.min.js')}}"></script> --}}

        {{-- <script defer src="../../cdn.jsdelivr.net/npm/alpinejs%403.x.x/dist/cdn.min.js"></script> --}}

    </body>


    <!-- Mirrored from chatizo.netlify.app/html/signup by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 16 Apr 2025 06:32:53 GMT -->
    {{-- </html> --}}
</div>
