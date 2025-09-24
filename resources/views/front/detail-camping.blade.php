<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <title>FERNANDA | PORTOFOLIO</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <script>
        tailwind.config = {
            theme: {
                container: {
                    center: true,
                    padding: "16px",
                },
                extend: {
                    width: {
                        "30rem": "28rem",
                    },
                    colors: {
                        primary: "#019B65",
                        backgpround: "#2A2A2A",
                        footer: "#023322",
                        second: "#023322",
                    },
                    screens: {
                        desktop: "8",
                        "2xl": "1320px",
                    },
                    spacing: {
                        "140px": "140px",
                    },
                    backgroundImage: {
                        portofolio: "url('webportofolio.png')",
                    },

                }
            }
        }
    </script>
    {{-- @vite('resources/css/app.css')  --}}
    <!-- link css tailwinds -->
    {{-- <link rel="stylesheet" href="input.css" /> --}}
    <link rel="stylesheet" href="public/output.css" />
    <style type="text/css">
        /* #Portofolio {
            background-image: url(img/backrgound_portofolio.png);
        } */


        .navbar-fixed {
            @apply fixed z-[9999] bg-backgpround bg-opacity-80;
            backdrop-filter: blur(5px);
            box-shadow: inset 0 -1px 0 0 rgba(0, 0, 0, 0.1);
        }

        .hamburger-line {
            /* @apply w-[30px] h-[2px] my-2 block bg-red-800; */
            @apply w-[30px] h-[2px] my-2 block bg-primary;
        }

        .hamburger-lines {
            @apply w-[30px] h-[2px] my-2 block bg-primary;
        }

        .hamburger-active>span:nth-child(1) {
            @apply rotate-45;
        }

        .hamburger-active>span:nth-child(3) {
            @apply -rotate-45;
        }

        .hamburger-active>span:nth-child(2) {
            @apply scale-0;
        }

        #textPortofolio {
            -webkit-text-stroke-width: 1px;
            -webkit-text-stroke-color: white;
        }

        #textService {
            -webkit-text-stroke-width: 1px;
            -webkit-text-stroke-color: #019b65;
        }
    </style>
    {{-- link font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet" />

    {{-- link animate css --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    {{-- link animate On Scroll --}}
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    {{-- link icon --}}
    <link rel="icon" type="image/svg" href="font-sans-serif.svg">

    <style type="css/text">
        .navbar-fixed {
            @apply fixed z-[9999] bg-backgpround bg-opacity-80;
            backdrop-filter: blur(5px);
            position: fixed;
            left: 0;
            right: 0;
            top: 0;
            z-index: 9999;
            box-shadow: inset 0 -1px 0 0 rgba(0, 0, 0, 0.1);
        }

        .hamburger-line {
            /* @apply w-[30px] h-[2px] my-2 block bg-red-800; */
            @apply w-[30px] h-[2px] my-2 block bg-primary;
        }

        .hamburger-lines {
            @apply w-[30px] h-[2px] my-2 block bg-primary;
        }

        .hamburger-active>span:nth-child(1) {
            @apply rotate-45;
        }

        .hamburger-active>span:nth-child(3) {
            @apply -rotate-45;
        }

        .hamburger-active>span:nth-child(2) {
            @apply scale-0;
        }

        #textPortofolio {
            -webkit-text-stroke-width: 1px;
            -webkit-text-stroke-color: white;
        }

        #textService {
            -webkit-text-stroke-width: 1px;
            -webkit-text-stroke-color: #019b65;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body class="bg-backgpround">
   


<section class="bg-[#2a2a2a] py-16 px-6">
  <div class="max-w-5xl mx-auto">
    
    <!-- Judul -->
    <h1 class="text-4xl font-bold text- mb-2 text-[#019B65]">
      Aplikasi Penyewaan Alat Camping
    </h1>
    <p class="text-white mb-8 italic">
      Freelance Project (dikerjakan berdasarkan permintaan client)
    </p>
    
    <!-- Deskripsi -->
    <div class="mb-10">
      <h2 class="text-2xl font-semibold text-gray-400 mb-2">Deskripsi Singkat</h2>
      <p class="text-white leading-relaxed">
        Aplikasi ini dibuat untuk mempermudah proses penyewaan peralatan camping.
Client menginginkan sistem yang praktis, sehingga pengguna bisa memesan alat outdoor secara online tanpa harus datang langsung ke toko.
      </p>
    </div>
    
    <!-- Fitur -->
    <div class="mb-10">
      <h2 class="text-2xl font-semibold text-gray-400 mb-2">Fitur Utama</h2>
      <ul class="list-disc list-inside text-white space-y-1">
        <li>Registrasi & login pengguna.</li>
        <li>Pencarian dan pemesanan peralatan camping.</li>
        <li>Sistem keranjang untuk mengelola pesanan.</li>
        <li>Riwayat transaksi pengguna.</li>
        <li>Dapat Melihat Detail Produk</li> 
        <li>Dapat Mencari Toko Penyewaan Alat Camping Berdasarkan Gunung yang Dituju</li>
        <li>Pembayaran online via Midtrans (QRIS, e-wallet, Virtual Account).</li>
      </ul>
    </div>
    
    <!-- Teknologi -->
    <div class="mb-10">
      <h2 class="text-2xl font-semibold text-gray-400 mb-2">Teknologi yang Digunakan</h2>
      <ul class="list-disc list-inside text-white space-y-1">
        <li><b>Frontend:</b>Flutter (Mobile Apps)</li>
        <li><b>Backend:</b>Laravel (REST API)</li>
        <li><b>Database:</b> MySQL</li>
        <li><b>Payment Gateway:</b> Midtrans Snap API.</li>
      </ul>
    </div>
    
    <div class="mb-10">
      <h2 class="text-2xl font-semibold text-gray-400 mb-2">Tantangan & Solusi</h2>
      <ul class="list-disc list-inside text-white space-y-1">
        <li><b>Tantangan :</b>Integrasi pembayaran online agar transaksi tercatat otomatis.</li>
        <li><b>Solusi :</b>Menggunakan Midtrans Snap API yang langsung memberi callback ke server Laravel untuk update status pembayaran (paid / pending / failed).</li>
      </ul>
    </div>
    
    <!-- Screenshots -->
    <div class="mb-10">
      <h2 class="text-2xl font-semibold text-white mb-4">Screenshots / Demo</h2>
      <div class="grid grid-cols-1 md:grid-cols-6 gap-4">
          {{-- <img src="{{ asset('img/proyek1.png') }}" alt="Dashboard Admin" class="rounded-lg shadow-md"> --}}
        <img src="{{ asset('img/project2/picture1.jpg') }}" alt="Halaman Utama" class="rounded-lg shadow-md h-96">
        <img src="{{ asset('img/project2/picture2.jpg') }}" alt="Form Pengajuan" class="rounded-lg shadow-md h-96">
        <img src="{{ asset('img/project2/picture3.jpg') }}" alt="Dashboard Admin" class="rounded-lg shadow-md h-96">
        <img src="{{ asset('img/project2/picture4.jpg') }}" alt="Dashboard Admin" class="rounded-lg shadow-md h-96">
        <img src="{{ asset('img/project2/picture5.jpg') }}" alt="Dashboard Admin" class="rounded-lg shadow-md h-96">
        <img src="{{ asset('img/project2/register.jpg') }}" alt="Dashboard Admin" class="rounded-lg shadow-md h-96">
        <img src="{{ asset('img/project2/picture7.jpg') }}" alt="Dashboard Admin" class="rounded-lg shadow-md h-96">
        <img src="{{ asset('img/project2/picture8.jpg') }}" alt="Dashboard Admin" class="rounded-lg shadow-md h-96">
        <img src="{{ asset('img/project2/picture9.jpg') }}" alt="Dashboard Admin" class="rounded-lg shadow-md h-96">
        <img src="{{ asset('img/project2/picture10.jpg') }}" alt="Dashboard Admin" class="rounded-lg shadow-md h-96">
    </div>
      {{-- <p class="mt-3 text-blue-600 hover:underline">
        <a href="#">👉 Lihat Demo Proyek</a>
      </p> --}}
    </div>
    
    <!-- Hasil -->
    <div>
      <h2 class="text-2xl font-semibold text-gray-400 mb-2">Hasil & Manfaat</h2>
     <ul class="list-disc list-inside text-white space-y-1">
        <li>Client memiliki aplikasi custom sesuai kebutuhan</li>
        <li>Penyewa bisa lebih mudah memesan alat camping kapan saja.</li>
        <li>Penyewa bisa menentukan tempat toko penyewaan terdekat dari gunung yang dituju</li>
        {{-- <li><b>Payment Gateway:</b> Midtrans Snap API.</li> --}}
      </ul>
    </div>
    <div class="mt-5">
        <a href="{{ url('/') }}" class="px-4 py-2 bg-[#019B65] mt-5 rounded-xl text-white font-bold hover:bg-white hover:text-[#019B65] ease-in-out duration-200">KEMBALI</a>
    </div>
    
  </div>
</section>


    
    <div class="w-full bg-[#023322] h-10 text-center py-2 text-white font-bold text-lg opacity-100"> Copyright ©️ 2024
        Fernanda Arya Putra</div>

    {{-- footer section end --}}
    {{-- <div class="mb-96"></div>
    <div class="mb-96"></div> --}}
    {{-- File Javascript --}}

    <script>
        // navbar fixed
        window.onscroll = function() {
            const header = document.querySelector("header");
            const fixedNav = header.offsetTop;
            if (window.pageYOffset > fixedNav) {
                header.classList.add("navbar-fixed");
            } else {
                header.classList.remove("navbar-fixed");
            }
        };

        // hamburger
        const hamburger = document.querySelector("#hamburger");
        const navMenu = document.querySelector("#nav-menu");
        hamburger.addEventListener("click", function() {
            hamburger.classList.toggle("hamburger-active");
            navMenu.classList.toggle("hidden");
        });
    </script>
    <script src="js/script.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
