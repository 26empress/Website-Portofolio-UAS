<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $title ?? 'Home' }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="js/button.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.1/dist/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.1/dist/sweetalert2.min.css">

</head>
  <!-- Header -->
<body onload="load()" class="bg-gray-100 font-sans leading-normal tracking-normal">
<nav class="bg-white shadow-lg">
  <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
    <div class="relative flex items-center justify-between h-16">
      <div class="flex-shrink-0">
        <a href="/" class="flex items-center">
          <img class="h-8 w-auto" src="favicon.ico" alt="Logo">
          <span class="font-bold text-xl ml-2">Ahmad Hutri Semendawai</span>
        </a>
      </div>
      <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
        <div id="menu-items" class="hidden md:block ml-4">
          <a href="/" class="text-gray-500 hover:text-gray-900 font-medium px-3 py-2 rounded-md text-sm uppercase">Home</a>
          <a href="/profile" class="text-gray-500 hover:text-gray-900 font-medium px-3 py-2 rounded-md text-sm uppercase">Tentang Saya</a>
          <a href="/portofolio" class="text-gray-500 hover:text-gray-900 font-medium px-3 py-2 rounded-md text-sm uppercase">Portfolio</a>
          <a href="/hubungi_saya" class="text-gray-500 hover:text-gray-900 font-medium px-3 py-2 rounded-md text-sm uppercase">Kontak</a>
        </div>
      </div>
    </div>
  </div>
</nav>

<!-- banner -->
<div class="bg-gray-900">
  <div class="container mx-auto px-4 py-32">
    <div class="text-white text-center">
      <h1 class="text-4xl font-bold mb-4">Selamat Datang di Website Saya</h1>
      <p class="text-lg mb-8">Anda sudah mengunjungi seluruh halaman website.</p>
      <a role="button" onclick="tamat()"  class="bg-white text-gray-900 py-2 px-6 rounded-full font-bold hover:bg-gray-100 hover:text-gray-900">Kembali</a>
    </div>
  </div>
</div>

<div class="w-full h-2 bg-gray-200 rounded-full">
  <div class="h-full text-center text-xs text-white bg-green-500 rounded-full" style="width: 100%"></div>
</div>

  <!-- Isi -->
<div class="bg-gray-50 py-12">
  <div class="max-w-xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="max-w-4xl mx-auto">
      <h2 class="text-center text-3xl font-bold text-gray-900">Kontak Saya</h2>
      <p class="mt-4 text-center text-gray-500">Silakan hubungi saya jika Anda membutuhkan informasi lebih lanjut atau memiliki pertanyaan.</p>
      <div class="mt-12">
        <dl class="grid grid-cols-1 gap-8 sm:grid-cols-2">
          <div class="bg-white overflow-hidden shadow rounded-lg">
            <div class="px-4 py-5 sm:p-6">
              <dt class="text-base font-medium text-gray-900">Email</dt>
              <dd class="mt-1 text-sm text-gray-500">09031282126033@student.unsri<br>.ac.id</dd>
            </div>
            <div class="bg-gray-50 px-4 py-4 sm:px-6">
              <a href="mailto:09031282126033@student.unsri.ac.id" class="block text-center w-full py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-green-500 hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">Kirim Email</a>
            </div>
          </div>

<div class="bg-white overflow-hidden shadow rounded-lg flex flex-col">
  <div class="px-4 py-5 sm:p-6">
    <dt class="text-base font-medium text-gray-900">Instagram</dt>
    <dd class="mt-1 text-sm text-gray-500">@hutrisemendawai_</dd>
  </div>
  <div class="bg-gray-50 px-4 py-4 sm:px-6 mt-auto">
    <a role="button" onclick="gagal()" class="block text-center w-full py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-green-500 hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">Kunjungi</a>
  </div>
</div>

          <div class="bg-white overflow-hidden shadow rounded-lg">
            <div class="px-4 py-5 sm:p-6">
              <dt class="text-base font-medium text-gray-900">Facebook</dt>
              <dd class="mt-1 text-sm text-gray-500">Ahmad Hutri Semendawai</dd>
            </div>
            <div class="bg-gray-50 px-4 py-4 sm:px-6">
              <a role="button" onclick="gagal()"  class="block text-center w-full py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-green-500 hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">Kunjungi</a>
            </div>
          </div>

          <div class="bg-white overflow-hidden shadow rounded-lg">
            <div class="px-4 py-5 sm:p-6">
              <dt class="text-base font-medium text-gray-900">Linkedin</dt>
              <dd class="mt-1 text-sm text-gray-500">Ahmad Hutri Semendawai</dd>
            </div>
            <div class="bg-gray-50 px-4 py-4 sm:px-6">
              <a role="button" onclick="gagal()"  class="block text-center w-full py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-green-500 hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">Kunjungi</a>
            </div>
          </div>
        </dl>
      </div>
    </div>
  </div>
</div>


  <!-- footer -->
<footer class="bg-gray-900 py-8">
  <div class="container mx-auto px-4 text-center">
    <div class="flex flex-wrap -mx-4">
      <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-8">
        <h3 class="text-white text-lg mb-2 font-bold">Laravel</h3>
        <p class="text-gray-400 leading-relaxed">
Laravel adalah sebuah framework open source untuk pengembangan aplikasi web dengan menggunakan bahasa pemrograman PHP. Laravel memudahkan pengembang untuk mengembangkan aplikasi web dengan lebih cepat dan efisien dengan menyediakan berbagai fitur seperti sistem routing, ORM (Object Relational Mapping), templating engine, dan masih banyak lagi.
        </p>
      </div>
      <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-8">
        <h3 class="text-white text-lg mb-2 font-bold">Javascript</h3>
        <p class="text-gray-400 leading-relaxed">
JS (JavaScript) adalah bahasa pemrograman yang digunakan untuk membuat interaktivitas pada sebuah halaman web. JS dapat digunakan untuk membuat efek animasi, validasi form, manipulasi DOM, dan banyak lagi.
        </p>
      </div>
      <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-8">
        <h3 class="text-white text-lg mb-2 font-bold">Tailwindcss</h3>
        <p class="text-gray-400 leading-relaxed">
Tailwind CSS adalah sebuah framework CSS yang digunakan untuk mempermudah pengembangan tampilan web. Tailwind CSS menyediakan berbagai kelas CSS yang siap digunakan untuk membuat tampilan web dengan cepat dan mudah. Dalam Tailwind CSS, kita tidak perlu membuat CSS dari awal, tetapi cukup memanfaatkan kelas CSS yang telah disediakan.
        </p>
      </div>
    </div>
  </div>
</footer>

</body>
</html>