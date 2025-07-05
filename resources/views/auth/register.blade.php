<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Register - Klinik Sehat Bersama</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 font-inter flex flex-col min-h-screen">

    <!-- Navbar -->
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
            <h1 class="text-xl font-bold text-blue-600">Klinik Sehat Bersama</h1>
            <nav>
                <a href="/" class="text-gray-700 hover:text-blue-600 mx-2">Beranda</a>
                <a href="/login" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 ml-4">Login</a>
            </nav>
        </div>
    </header>

    <!-- Register Form -->
    <main class="flex-grow flex items-center justify-center py-12 px-4">
        <div class="max-w-lg w-full bg-white p-8 rounded-lg shadow-lg">
            <h2 class="text-2xl font-bold text-center text-blue-600 mb-6">Daftar Akun Baru</h2>

            <form action="/register" method="POST" class="space-y-5">
                @csrf

                <div>
                    <label for="nama" class="block text-sm font-medium text-gray-700 mb-1">Nama Lengkap</label>
                    <input type="text" name="nama" id="nama" placeholder="Masukkan Nama Lengkap"
                        class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-400" required>
                </div>

                <div>
                    <label for="alamat" class="block text-sm font-medium text-gray-700 mb-1">Alamat</label>
                    <input type="text" name="alamat" id="alamat" placeholder="Masukkan Alamat"
                        class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-400" required>
                </div>

                <div>
                    <label for="no_ktp" class="block text-sm font-medium text-gray-700 mb-1">Nomor KTP</label>
                    <input type="text" name="no_ktp" id="no_ktp" placeholder="Masukkan Nomor KTP"
                        class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-400" required>
                </div>

                <div>
                    <label for="no_hp" class="block text-sm font-medium text-gray-700 mb-1">Nomor HP</label>
                    <input type="text" name="no_hp" id="no_hp" placeholder="Masukkan Nomor HP"
                        class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-400" required>
                </div>

                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                    <input type="email" name="email" id="email" placeholder="Masukkan Email"
                        class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-400" required>
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                    <input type="password" name="password" id="password" placeholder="Masukkan Password"
                        class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-400" required>
                </div>

                <button type="submit"
                    class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700 transition font-semibold">
                    Daftar
                </button>
            </form>

            <p class="mt-4 text-center text-sm text-gray-600">
                Sudah punya akun?
                <a href="/login" class="text-blue-600 hover:underline">Login di sini</a>
            </p>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-white py-4 text-center text-gray-500">
        © 2025 Klinik Sehat Bersama. All rights reserved.
    </footer>

</body>
</html>
