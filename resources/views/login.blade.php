<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex items-center justify-center h-screen bg-[#fbfbfb]">
    <div class="flex w-full max-w-5xl bg-white rounded-lg shadow-2xl">
        <!-- Bagian Kiri -->
        <div class="w-1/2 bg-[#276561] text-white p-10 flex flex-col justify-center shadow-lg">
            <h2 class="text-4xl font-bold">Selamat Datang</h2>
            <p class="mt-4 font-caveat text-2xl italic">Rumah Inspirasi Sahabat Gajah</p>
        </div>
        <!-- Bagian Kanan -->
        <div class="w-1/2 p-12">
            <div class="text-center mb-8">
                <img src="asset/logo.png" alt="Logo" class="w-24 mx-auto">
            </div>
            <form action="/login" method="POST">
                @csrf
                <div class="mb-6">
                    <label for="username" class="block text-gray-700 text-lg font-semibold">Email</label>
                    <input type="text" id="username" name="username" class="w-full px-4 py-3 mt-2 border rounded-lg shadow-md focus:outline-none focus:ring-2 focus:ring-[#276561] text-lg">
                </div>
                <div class="mb-6">
                    <label for="password" class="block text-gray-700 text-lg font-semibold">Password</label>
                    <div class="relative">
                        <input type="password" id="password" name="password" class="w-full px-4 py-3 mt-2 border rounded-lg shadow-md focus:outline-none focus:ring-2 focus:ring-[#276561] text-lg">
                        <span class="absolute right-4 top-1/2 transform -translate-y-1/2 text-gray-500 cursor-pointer">
                        </span>
                    </div>
                </div>
                <button type="submit" class="w-full py-3 text-white bg-[#276561] rounded-lg shadow-lg hover:bg-green-700 text-lg font-bold">Login</button>
            </form>
            <div class="mt-6 text-center">
                <a href="/register" class="text-md text-[#276561] underline">create account</a> or
                <a href="/forgot-password" class="text-md text-[#276561] underline">forget password</a>
            </div>
        </div>
    </div>
</body>
</html>
