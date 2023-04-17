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
      <p class="text-lg mb-8">Untuk mengetahui tentang diri saya, klik tombol dibawah.</p>
      <a role="button" onclick="satu()" class="bg-white text-gray-900 py-2 px-6 rounded-full font-bold hover:bg-gray-100 hover:text-gray-900">Tentang Saya</a>
    </div>
  </div>
</div>

<div class="w-full h-2 bg-gray-200 rounded-full">
  <div class="h-full text-center text-xs text-white bg-green-500 rounded-full" style="width: 25%"></div>
</div>

  <!-- Isi -->
<div class="container mx-auto px-4 py-8">
  <div class="flex flex-wrap -mx-4">
    <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-8">
      <div class="bg-white rounded-lg shadow-lg overflow-hidden">
        <div class="p-4">
          <div class="text-lg font-bold mb-2">Tailwindcss vs Bootstrap</div>
          <p class="text-gray-700 leading-relaxed">
            Tailwind CSS dan Bootstrap tergantung pada kebutuhan dan preferensi Anda sebagai pengembang web. Jika Anda membutuhkan kerangka kerja front-end yang cepat dan mudah digunakan, maka Bootstrap mungkin menjadi pilihan yang lebih baik. Namun, jika Anda ingin fleksibilitas dan kontrol yang lebih besar dalam desain, maka Tailwind CSS bisa menjadi pilihan yang lebih baik.
          </p>
        </div>
      </div>
    </div>
    <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-8">
      <div class="bg-white rounded-lg shadow-lg overflow-hidden">
        <div class="p-4">
          <div class="text-lg font-bold mb-2">Mengapa Javascript?</div>
          <p class="text-gray-700 leading-relaxed">
            JavaScript didukung oleh semua browser modern, sehingga aplikasi web yang dibangun dengan JavaScript dapat diakses oleh pengguna di semua platform dan perangkat. Client-side scripting, JavaScript adalah bahasa pemrograman yang berjalan di sisi klien, artinya kode dijalankan di browser pengguna dan dapat merespons aksi pengguna seperti klik tombol atau input data di form.
          </p>
        </div>
      </div>
    </div>
    <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-8">
      <div class="bg-white rounded-lg shadow-lg overflow-hidden">
        <div class="p-4">
          <div class="text-lg font-bold mb-2">Sweetalert</div>
          <p class="text-gray-700 leading-relaxed">
            SweetAlert adalah sebuah library JavaScript yang digunakan untuk membuat modals atau dialog box yang lebih cantik dan interaktif. SweetAlert digunakan untuk memberikan pesan atau notifikasi pada pengguna dalam bentuk pop-up yang menarik. SweetAlert menawarkan beberapa fitur menarik seperti tampilan yang lebih interaktif, animasi yang halus, dan pilihan untuk menambahkan gambar atau ikon.
          </p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- isi 2 -->
<div class="bg-gray-200 py-16">
  <div class="container mx-auto px-4">
    <h1 class="text-4xl text-black mb-4">Fun Fact</h1>
    <p class="text-lg text-black leading-relaxed mb-8">A group of flamingos is called a flamboyance.</p>
    <a role="button" onclick="funfact()" class="bg-gray-400 hover:bg-gray-500 text-gray-800 font-semibold py-2 px-4 rounded inline-block">Answer</a>
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