<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klinik Sehat Bersama</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 font-inter">
    <!-- Navbar -->
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
            <h1 class="text-xl font-bold text-blue-600">Klinik Sehat Bersama</h1>
            <nav>
                <a href="#layanan" class="text-gray-700 hover:text-blue-600 mx-2">Layanan</a>
                <a href="#tentang" class="text-gray-700 hover:text-blue-600 mx-2">Tentang</a>
                <a href="#kontak" class="text-gray-700 hover:text-blue-600 mx-2">Kontak</a>
                <a href="{{ route('login') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 ml-4">Login</a>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="text-center py-16 bg-gradient-to-r from-blue-100 to-blue-200">
        <h2 class="text-3xl font-bold text-blue-800 mb-4">Selamat Datang di Klinik Sehat Bersama</h2>
        <p class="text-gray-700 max-w-xl mx-auto">Kami memberikan layanan kesehatan terbaik untuk Anda dan keluarga dengan fasilitas lengkap dan tenaga medis profesional.</p>
        <a href="#layanan" class="inline-block mt-6 bg-blue-600 text-white px-6 py-3 rounded hover:bg-blue-700 transition">Lihat Layanan</a>
    </section>

    <!-- Layanan Section -->
    <section id="layanan" class="py-16 max-w-7xl mx-auto px-4">
        <h3 class="text-2xl font-bold text-center text-blue-800 mb-10">Layanan Kami</h3>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white p-6 rounded shadow hover:shadow-lg transition">
                <h4 class="text-lg font-semibold text-blue-700 mb-2">Pemeriksaan Umum</h4>
                <p class="text-gray-600">Layanan pemeriksaan kesehatan dasar dan konsultasi dengan dokter umum kami.</p>
            </div>
            <div class="bg-white p-6 rounded shadow hover:shadow-lg transition">
                <h4 class="text-lg font-semibold text-blue-700 mb-2">Pemeriksaan Gigi</h4>
                <p class="text-gray-600">Perawatan dan pemeriksaan gigi dengan dokter gigi berpengalaman dan fasilitas modern.</p>
            </div>
            <div class="bg-white p-6 rounded shadow hover:shadow-lg transition">
                <h4 class="text-lg font-semibold text-blue-700 mb-2">Laboratorium</h4>
                <p class="text-gray-600">Layanan laboratorium untuk cek darah, urin, dan tes kesehatan lainnya dengan hasil cepat dan akurat.</p>
            </div>
        </div>
    </section>

    <!-- Tentang Section -->
    <section id="tentang" class="py-16 bg-white max-w-4xl mx-auto px-4 text-center">
        <h3 class="text-2xl font-bold text-blue-800 mb-4">Tentang Kami</h3>
        <p class="text-gray-700 mb-4">Klinik Sehat Bersama telah berdiri sejak 2015 dan berkomitmen memberikan layanan kesehatan yang terjangkau, ramah, dan profesional kepada seluruh lapisan masyarakat.</p>
        <p class="text-gray-700">Kami memiliki tenaga medis yang berpengalaman dan fasilitas lengkap untuk mendukung pemeriksaan kesehatan Anda secara menyeluruh.</p>
    </section>

    <!-- Kontak Section -->
    <section id="kontak" class="py-16 bg-blue-50">
        <div class="max-w-4xl mx-auto px-4 text-center">
            <h3 class="text-2xl font-bold text-blue-800 mb-4">Kontak Kami</h3>
            <p class="text-gray-700 mb-6">Untuk informasi lebih lanjut atau pendaftaran pemeriksaan, silakan hubungi kami melalui kontak di bawah ini.</p>
            <p class="text-blue-800 font-semibold">📞 0822-3456-7890 | ✉️ kliniksehatbersama@gmail.com</p>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-white py-4 text-center text-gray-500">
        © 2025 Klinik Sehat Bersama. All rights reserved.
    </footer>
</body>
</html>
