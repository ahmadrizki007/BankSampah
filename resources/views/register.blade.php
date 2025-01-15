<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex items-center justify-center h-screen bg-[#fbfbfb]">
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
            <form action="/register" method="POST">
                @csrf
                <div class="mb-4">
                    <input type="text" name="fullname" placeholder="nama lengkap" class="w-full px-4 py-2 mt-2 border rounded shadow-sm focus:outline-none focus:ring-2 focus:ring-[#276561]">
                </div>
                <div class="mb-4">
                    <input type="email" name="email" placeholder="email" class="w-full px-4 py-2 mt-2 border rounded shadow-sm focus:outline-none focus:ring-2 focus:ring-[#276561]">
                </div>
                <div class="mb-4">
                    <input type="number" name="age" placeholder="umur" class="w-full px-4 py-2 mt-2 border rounded shadow-sm focus:outline-none focus:ring-2 focus:ring-[#276561]">
                </div>
                <div class="mb-4">
                    <select name="gender" class="w-full px-4 py-2 mt-2 border rounded shadow-sm focus:outline-none focus:ring-2 focus:ring-[#276561]">
                        <option value="" disabled selected>Jenis Kelamin</option>
                        <option value="male">Laki-Laki</option>
                        <option value="female">Perempuan</option>
                    </select>
                </div>
                <div class="mb-4">
                    <input type="text" name="phone" placeholder="nomor telepon" class="w-full px-4 py-2 mt-2 border rounded shadow-sm focus:outline-none focus:ring-2 focus:ring-[#276561]">
                </div>
                <div class="mb-4">
                    <input type="password" name="password" placeholder="password" class="w-full px-4 py-2 mt-2 border rounded shadow-sm focus:outline-none focus:ring-2 focus:ring-[#276561]">
                </div>
                <button type="submit" class="w-full py-2 text-white bg-[#276561] rounded hover:bg-green-700 font-bold shadow-lg">Sign Up</button>
            </form>
            <div class="mt-4 text-center">
                <p class="text-sm">Sudah punya akun? <a href="{{ url('/login') }}" class="text-[#276561] underline">Login</a></p>
            </div>
        </div>
    </div>
</body>
</html>
