@extends('templates.auth_layout')

@section('title')

    <title> Sign Up </title>

@endsection

@section('main')

    <main class="sm:flex items-center justify-center sm:h-screen bg-primary-bg md:px-5">
        <div class="flex sm:flex-row flex-col w-full max-w-4xl bg-white rounded-lg shadow-2xl md:overflow-hidden">
            <!-- Bagian Kiri -->
            <div
                class="sm:w-1/2 bg-primary-500 text-white p-10 flex flex-col justify-center shadow-lg text-center sm:text-left">
                <h2 class="sm:text-4xl text-2xl font-bold">Selamat Datang</h2>
                <p class="mt-4 font-caveat sm:text-2xl text-xl italic">Rumah Inspirasi Sahabat Gajah</p>
            </div>
            <!-- Bagian Kanan -->
            <div class="sm:w-1/2 p-8 sm:shadow-lg">
                <div class="text-center mb-6">
                    <h2 class="text-xl font-bold text-primary-500">Sign Up</h2>
                </div>
                <form method="POST" action={{ route('register.store') }}>
                    @csrf
                    <div class="sm:mb-4 mb-2">
                        <input type="text" name="username" placeholder="Username" value="{{ old('username') }}"
                            class="username w-full px-4 py-2 mt-2 border rounded shadow-sm focus:outline-none focus:ring-2 focus:ring-primary-500"
                            required>
                        <ul>
                            @error('username')
                                <li class="alert-username ms-1 mt-1 italic text-sm text-red-600 dark:text-red-400">
                                    {{ $message }}
                                </li>
                            @enderror
                        </ul>
                    </div>
                    <div class="sm:mb-4 mb-2">
                        <input type="email" name="email" placeholder="email" value="{{ old('email') }}"
                            class="email w-full px-4 py-2 mt-2 border rounded shadow-sm focus:outline-none focus:ring-2 focus:ring-primary-500"
                            required>
                        <ul>
                            @error('email')
                                <li class="alert-email ms-1 mt-1 italic text-sm text-red-600 dark:text-red-400">{{ $message }}
                                </li>
                            @enderror
                        </ul>
                    </div>
                    <div class="sm:mb-4 mb-2">
                        <input type="text" name="age" placeholder="umur" value="{{ old('age') }}"
                            class="age w-full px-4 py-2 mt-2 border rounded shadow-sm focus:outline-none focus:ring-2 focus:ring-primary-500"
                            required>
                        <ul>
                            @error('age')
                                <li class="alert-age ms-1 mt-1 italic text-sm text-red-600 dark:text-red-400">{{ $message }}
                                </li>
                            @enderror
                        </ul>
                    </div>
                    <div class="sm:mb-4 mb-2">
                        <select name="gender" value="{{ old('gender') }}"
                            class="gender w-full px-4 py-2 mt-2 border rounded shadow-sm focus:outline-none focus:ring-2 focus:ring-primary-500"
                            required>
                            <option value="" disabled {{ old('gender') === null ? 'selected' : ''}}>Jenis Kelamin</option>
                            <option value="male" {{ old('gender') === 'male' ? 'selected' : ''}}>Laki-Laki</option>
                            <option value="female" {{ old('gender') === 'female' ? 'selected' : ''}}>Perempuan</option>
                        </select>
                        <ul>
                            @error('gender')
                                <li class="alert-gender ms-1 mt-1 italic text-sm text-red-600 dark:text-red-400">{{ $message }}
                                </li>
                            @enderror
                        </ul>
                    </div>
                    <div class="sm:mb-4 mb-2">
                        <input type="text" name="phone" placeholder="nomor telepon" value="{{ old('phone') }}"
                            class="phone w-full px-4 py-2 mt-2 border rounded shadow-sm focus:outline-none focus:ring-2 focus:ring-primary-500"
                            required>
                        <ul>
                            @error('phone')
                                <li class="alert-phone ms-1 mt-1 italic text-sm text-red-600 dark:text-red-400">{{ $message }}
                                </li>
                            @enderror
                        </ul>
                    </div>
                    <div class="w-full sm:mb-4 mb-2 grid grid-cols-[auto,min-content]" id="password-hide">
                        <input type="password" name="password" id="password" placeholder="password"
                            value="{{ old('password') }}"
                            class="password px-4 py-2 mt-2 border rounded-l shadow-sm outline-none focus:outline-none focus:ring-2 focus:ring-primary-500"
                            required>

                        <a href="void:(0)"
                            class="px-4 py-2 mt-2 border-y border-r rounded-r shadow-sm focus:ring-2 focus:ring-primary-500">
                            <i class="fa-regular fa-eye-slash"></i>
                        </a>

                        <ul class="">
                            @error('password')
                                <li class="alert-password ms-1 mt-1 italic text-sm text-red-600 dark:text-red-400">
                                    {{ $message }}
                                </li>
                            @enderror
                        </ul>
                    </div>
                    <button type="submit"
                        class="w-full py-2 text-white bg-primary-500 rounded hover:bg-green-700 font-bold shadow-lg sm:mt-10 mt-7">Sign
                        Up</button>
                </form>
                <div class="mt-4 text-center">
                    <p class="text-sm">Sudah punya akun?
                        <a href="{{ route('login') }}" class="text-primary-500 underline">
                            Login
                        </a>
                    </p>
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

            // handle untuk menghilangkan pesan error saat user menginputkan data
            $('.fullname').on('input', function () {
                $('.alert-fullname').remove();
            });

            $('.email').on('input', function () {
                $('.alert-email').remove();
            });

            $('.age').on('input', function () {
                $('.alert-age').remove();
            });

            $('.gender').on('input', function () {
                $('.alert-gender').remove();
            });

            $('.phone').on('input', function () {
                $('.alert-phone').remove();
            });

            $('.password').on('input', function () {
                $('.alert-password').remove();
            });
        });

    </script>
@endsection