<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog Event</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-100 min-h-screen flex flex-col items-center py-10">

    <nav class="flex flex-wrap justify-center gap-3 mb-10 bg-white p-4 rounded-xl shadow-sm border border-slate-200 w-11/12 max-w-4xl">
        <a href="/" class="px-4 py-2 bg-indigo-50 text-indigo-600 font-semibold rounded-lg hover:bg-indigo-600 hover:text-white transition duration-300">Home</a>
        <a href="/profil" class="px-4 py-2 bg-indigo-50 text-indigo-600 font-semibold rounded-lg hover:bg-indigo-600 hover:text-white transition duration-300">Profil</a>
        <a href="/katalog" class="px-4 py-2 bg-indigo-600 text-white font-semibold rounded-lg shadow-md">Katalog</a>
        <a href="/bantuan" class="px-4 py-2 bg-indigo-50 text-indigo-600 font-semibold rounded-lg hover:bg-indigo-600 hover:text-white transition duration-300">Bantuan</a>
        <a href="/kontak" class="px-4 py-2 bg-indigo-50 text-indigo-600 font-semibold rounded-lg hover:bg-indigo-600 hover:text-white transition duration-300">Kontak</a>
    </nav>

    <div class="w-11/12 max-w-4xl">
        <h1 class="text-3xl font-bold text-slate-800 mb-6 text-center">Katalog AmikomEventHub</h1>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="bg-white p-6 rounded-xl shadow-md border border-slate-200 hover:shadow-lg transition duration-300">
                <div class="bg-blue-100 text-blue-800 text-xs font-bold px-2 py-1 rounded inline-block mb-3">Seminar</div>
                <h2 class="text-xl font-bold text-slate-800 mb-2">Startup Talk 2026</h2>
                <p class="text-slate-500 text-sm mb-4">Belajar membangun startup dari nol bersama para praktisi industri.</p>
                <button class="w-full bg-slate-800 text-white py-2 rounded-lg font-semibold hover:bg-slate-700 transition">Daftar Sekarang</button>
            </div>

            <div class="bg-white p-6 rounded-xl shadow-md border border-slate-200 hover:shadow-lg transition duration-300">
                <div class="bg-emerald-100 text-emerald-800 text-xs font-bold px-2 py-1 rounded inline-block mb-3">Workshop</div>
                <h2 class="text-xl font-bold text-slate-800 mb-2">Mastering Laravel</h2>
                <p class="text-slate-500 text-sm mb-4">Pelatihan intensif framework Laravel untuk pengembangan web modern.</p>
                <button class="w-full bg-slate-800 text-white py-2 rounded-lg font-semibold hover:bg-slate-700 transition">Daftar Sekarang</button>
            </div>

            <div class="bg-white p-6 rounded-xl shadow-md border border-slate-200 hover:shadow-lg transition duration-300">
                <div class="bg-purple-100 text-purple-800 text-xs font-bold px-2 py-1 rounded inline-block mb-3">Kompetisi</div>
                <h2 class="text-xl font-bold text-slate-800 mb-2">Hackathon Amikom</h2>
                <p class="text-slate-500 text-sm mb-4">Ajang kompetisi membuat solusi digital kreatif dalam waktu 48 jam.</p>
                <button class="w-full bg-slate-800 text-white py-2 rounded-lg font-semibold hover:bg-slate-700 transition">Daftar Sekarang</button>
            </div>
        </div>
    </div>

</body>
</html>