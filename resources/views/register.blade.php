@extends('templates.layout_auth')

@section('title')

<title> Sign Up </title>

@endsection

@section('main')

<main class="flex items-center justify-center h-screen bg-[#fbfbfb]">
    <div class="flex w-full max-w-4xl bg-white rounded-lg shadow-xl">
        <!-- Bagian Kiri -->
        <div class="w-1/2 bg-[#276561] text-white p-8 flex flex-col justify-center shadow-lg">
            <h2 class="text-2xl font-bold">Selamat Datang</h2>
            <p class="mt-2 font-caveat text-lg italic">Rumah Inspirasi Sahabat Gajah</p>
        </div>
        <!-- Bagian Kanan -->
        <div class="w-1/2 p-8 shadow-lg">
            <div class="text-center mb-6">
                <h2 class="text-xl font-bold text-[#276561]">Sign Up</h2>
            </div>
            <form method="POST" action={{ route('register.store') }}>
                @csrf
                <div class="mb-4">
                    <input type="text" name="fullname" placeholder="nama lengkap" value="{{ old('fullname') }}"
                        class="fullname w-full px-4 py-2 mt-2 border rounded shadow-sm focus:outline-none focus:ring-2 focus:ring-[#276561]"
                        required>
                    <ul>
                        @error('fullname')
                            <li class="alert-fullname ms-1 mt-1 italic text-sm text-red-600 dark:text-red-400">
                                {{ $message }}
                            </li>
                        @enderror
                    </ul>
                </div>
                <div class="mb-4">
                    <input type="email" name="email" placeholder="email" value="{{ old('email') }}"
                        class="email w-full px-4 py-2 mt-2 border rounded shadow-sm focus:outline-none focus:ring-2 focus:ring-[#276561]"
                        required>
                    <ul>
                        @error('email')
                            <li class="alert-email ms-1 mt-1 italic text-sm text-red-600 dark:text-red-400">{{ $message }}
                            </li>
                        @enderror
                    </ul>
                </div>
                <div class="mb-4">
                    <input type="text" name="age" placeholder="umur" value="{{ old('age') }}"
                        class="age w-full px-4 py-2 mt-2 border rounded shadow-sm focus:outline-none focus:ring-2 focus:ring-[#276561]"
                        required>
                    <ul>
                        @error('age')
                            <li class="alert-age ms-1 mt-1 italic text-sm text-red-600 dark:text-red-400">{{ $message }}
                            </li>
                        @enderror
                    </ul>
                </div>
                <div class="mb-4">
                    <select name="gender" value="{{ old('gender') }}"
                        class="gender w-full px-4 py-2 mt-2 border rounded shadow-sm focus:outline-none focus:ring-2 focus:ring-[#276561]"
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
                <div class="mb-4">
                    <input type="text" name="phone" placeholder="nomor telepon" value="{{ old('phone') }}"
                        class="phone w-full px-4 py-2 mt-2 border rounded shadow-sm focus:outline-none focus:ring-2 focus:ring-[#276561]"
                        required>
                    <ul>
                        @error('phone')
                            <li class="alert-phone ms-1 mt-1 italic text-sm text-red-600 dark:text-red-400">{{ $message }}
                            </li>
                        @enderror
                    </ul>
                </div>
                <div class="w-full mb-4 grid grid-cols-[auto,min-content] grid-rows-2" id="password-hide">
                    <input type="password" name="password" id="password" placeholder="password"
                        value="{{ old('password') }}"
                        class="password px-4 py-2 mt-2 border rounded-l shadow-sm outline-none focus:outline-none focus:ring-2 focus:ring-[#276561]"
                        required>

                    <a href="void:(0)"
                        class="px-4 py-2 mt-2 border-y border-r rounded-r shadow-sm focus:ring-2 focus:ring-[#276561]">
                        <i class="fa-regular fa-eye-slash"></i>
                    </a>

                    <ul class="">
                        @error('password')
                            <li class="alert-password ms-1 mt-1 italic text-sm text-red-600 dark:text-red-400">
                                {{ $message }}</li>
                        @enderror
                    </ul>
                </div>
                <button type="submit"
                    class="w-full py-2 text-white bg-[#276561] rounded hover:bg-green-700 font-bold shadow-lg">Sign
                    Up</button>
            </form>
            <div class="mt-4 text-center">
                <p class="text-sm">Sudah punya akun?
                    <a href="{{ route('login') }}" class="text-[#276561] underline">
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