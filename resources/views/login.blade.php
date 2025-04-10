@php

    $isAdmin = false;

    if (isset($admin)) {
        $isAdmin = $admin;
    }
@endphp


@extends('templates.auth_layout')

@section('title')

    <title> Login </title>

@endsection

@section('main')

    @error('error')
        @include('errors/red', ['message' => $message])
    @enderror

    <main class="flex items-center justify-center sm:h-screen bg-primary-bg md:px-5">
        <div class="flex sm:flex-row flex-col w-full max-w-5xl bg-white rounded-lg shadow-2xl md:overflow-hidden">
            <!-- Bagian Kiri -->
            <div class="sm:w-1/2 bg-primary-500 text-white p-10 flex flex-col justify-center shadow-lg text-center sm:text-left">
                <h2 class="sm:text-4xl text-2xl font-bold">Selamat Datang</h2>
                <p class="mt-4 font-caveat sm:text-2xl text-xl italic">Rumah Inspirasi Sahabat Gajah</p>
            </div>
            <!-- Bagian Kanan -->
            <div class="sm:w-1/2 p-12">
                <div class="text-center mb-8">
                    <img src="asset/logo.png" alt="Logo" class="w-24 mx-auto">
                </div>

                <!-- Message Alerts  -->
                @if (session('success'))
                    <div id="success-alerts" class="flex items-center p-4 mb-4 text-blue-800 rounded-lg bg-blue-50 "
                        role="alert">
                        <span class="sr-only">Info</span>
                        <div class="ms-3 text-sm font-medium">
                            {{ session('success') }}
                        </div>
                        <button type="button"
                            class="ms-auto -mx-1.5 -my-1.5 bg-blue-50 text-blue-500 rounded-lg focus:ring-2 focus:ring-blue-400 p-1.5 hover:bg-blue-200 inline-flex items-center justify-center h-8 w-8 "
                            data-dismiss-target="#alert-1" aria-label="Close">
                            <span class="sr-only">Close</span>
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                        </button>
                    </div>
                @endif


                <form method="POST" action={{ route('login.store') }}>
                    @csrf
                    <div class="mb-6">
                        <label for="email" class="block text-gray-700 text-lg font-semibold">Email</label>
                        <input type="email" id="email" name="email" value="{{ old('email') }}"
                            class="email w-full px-4 py-3 mt-2 border rounded-lg shadow-md focus:ring-2 focus:ring-primary-500 text-lg">
                        @error('email')
                            <p class="alert-email ms-1 mt-1 italic text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-6">
                        <label for="password" class="block text-gray-700 text-lg font-semibold">Password</label>
                        <div class="shadow-md rounded-lg border" id="password-hide">
                            <div class="flex items-center">
                                <input type="password" id="password" name="password" value="{{ old('password') }}"
                                    class="password w-full px-4 py-3 border-none rounded-l-lg focus:ring-2 focus:ring-primary-500 text-lg">

                                <a href="void:(0)" class="px-4 py-3 rounded-r-lg focus:ring-2 focus:ring-primary-500 text-lg">
                                    <i class="fa-regular fa-eye-slash"></i>
                                </a>

                            </div>
                        </div>

                        @error('password')
                            <p class="alert-password ms-1 mt-1 text-sm italic text-red-600 dark:text-red-400">{{ $message }}</p>
                        @enderror
                    </div>
                    <button type="submit"
                        class="w-full py-3 text-white bg-primary-500 rounded-lg shadow-r-lg hover:bg-green-700 text-lg font-bold">Login</button>
                </form>
                <div class="mt-6 text-center">
                    <a href={{ route('register') }} class="text-md text-primary-500 underline">create account</a> or
                    <a href={{ route('password.request') }} class="text-md text-primary-500 underline">forget password</a>
                </div>
            </div>
        </div>
    </main>

@endsection

@section('scripts')

    <script>
        $(document).ready(function () {
            $('#password-hide a').on('click', function (event) {
                event.preventDefault();
                if ($('#password').attr('type') == 'text') {
                    $('#password').attr('type', 'password');
                    $('#password-hide a i').removeClass('fa-regular fa-eye').addClass('fa-regular fa-eye-slash');
                } else if ($('#password').attr('type') == 'password') {
                    $('#password').attr('type', 'text');
                    $('#password-hide a i').removeClass('fa-regular fa-eye-slash').addClass('fa-regular fa-eye');
                }
            });

            $('#success-alerts button').on('click', function () {
                $('#success-alerts').fadeOut();
            });

            $('.email').on('input', function () {
                $('.alert-email').remove();
            });

            $('.password').on('input', function () {
                $('.alert-password').remove();
            });
        });

    </script>
@endsection
