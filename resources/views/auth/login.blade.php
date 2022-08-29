<x-guest-layout>
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Innovations Oasis Dashboard</title>

        <!-- Favicon -->
        <link rel="shortcut icon" href="assets/media/image/favicon.png"/>

        <!-- Plugin styles -->
        <link rel="stylesheet" href="assets/vendors/bundle.css" type="text/css">

        <!-- App styles -->
        <link rel="stylesheet" href="assets/css/app.css" type="text/css">
    </head>
    <body class="form-membership">

    <!-- begin::preloader-->
    <div class="preloader">
        <div class="preloader-icon"></div>
    </div>
    <!-- end::preloader -->

    <div class="form-wrapper">

        <!-- logo -->
        <div id="logo">
            <img src="assets/media/image/academy-logo.jpg" alt="image">
        </div>
        <!-- ./ logo -->


        <h5>Sign in</h5>

        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <!-- Email Address -->
            <div class="form-group">
                <x-input id="email" placeholder="Username or email" class="form-control" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->

            <div class="form-group">
                <x-input id="password" placeholder="Password" class="form-control"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>
            
            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ml-3">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
        or
        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>




    <!-- Plugin scripts -->
    <script src="assets/vendors/bundle.js"></script>

    <!-- App scripts -->
    <script src="assets/js/app.min.js"></script>
    </body>
    </html>
</x-guest-layout>






