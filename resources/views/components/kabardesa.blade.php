<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>
     Kabar Desa
    </title>

    <!-- Navbar -->
    @component("components.navbar")
    @endcomponent

    <!-- Define your gradient here - use online tools to find a gradient matching your branding-->
    <style>
      html{
        scroll-behavior: smooth;
      }
      .gradient {
        background: linear-gradient(90deg, #d53369 0%, #daae51 100%);
      }
    </style>
    
    </head>
  <body class="leading-normal tracking-normal text-white bg-yellow-600" style="font-family: 'Source Sans Pro', sans-serif;">
    
    <!--Nav-->
    <nav id="header" class="fixed w-full z-30 top-0 text-white">
      <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 py-2">
        <div class="flex items-center space-x-3 p-2">
          <button class="relative z-10 w-12 h-12">
              <img class="" src="{{asset('FrontendTailwind')}}/dist/img/Indramayu.png">
          </button>
          <a href="/" class="toggleColour text-white no-underline hover:no-underline font-bold text-2xl lg:text-4xl">
            SID KENANGA
          </a>
        </div>
          
        <div class="block lg:hidden pr-4">
          <button id="nav-toggle" class="flex items-center p-1 text-pink-800 hover:text-gray-900 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
            <svg class="fill-current h-6 w-6" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <title>Menu</title>
              <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
            </svg>
          </button>
        </div>
        <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden mt-2 lg:mt-0 bg-white lg:bg-transparent text-black p-4 lg:p-0 z-20" id="nav-content">
          <ul class="list-reset lg:flex justify-end flex-1 items-center">
            <li class="mr-3">
              <a class="inline-block text-black no-underline hover:text-gray-800 hover:text-underline py-2 px-4" href="/beranda">Beranda</a>
            </li>
            <li class="mr-3">
              <a class="inline-block text-black no-underline hover:text-gray-800 hover:text-underline py-2 px-4" href="/tentang">Tentang</a>
            </li>
            <li class="mr-3">
              <a class="inline-block text-black no-underline hover:text-gray-800 hover:text-underline py-2 px-4" href="/aparaturdesa">Aparatur Desa</a>
            </li>
          </ul>
          <button
            id="navAction"
            class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full mt-4 lg:mt-0 py-4 px-8 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out"
          >
            Download Apk
          </button>
        </div>
      </div>
      <hr class="border-b border-gray-100 opacity-25 my-0 py-0" />
    </nav>
    
    <!--Hero-->
    <div class="pt-24">
      <div class="container px-3 mx-auto flex flex-wrap flex-col md:flex-row items-center">
        <!--Right Col-->
        </div>
    </div>
        
    <section class="bg-white border-b py-8">
      <div class="container max-w-5xl mx-auto m-8">
        <h1 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
          Kabar Desa
        </h1>
        <div class="w-full mb-4">
          <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
        </div>
          <div class="sm:w-full px-6">
            <p class="text-gray-600 mb-8">
            Kabar Desa adalah sebuah informasi yang disampaikan oleh pemerintah desa kenanga tentang ....... ,
            untuk memudahkan masyarakat desa kenanga dalam mendapatkan informasi tentang desa kenanga .
            </p>
          </div>
        
            <div class="px-3 py-5 bg-gray-100">
                <div class="sm:w-full px-6">
                    <h3 class="text-3xl text-gray-800 font-bold leading-none mb-3">
                        Aturan Kabar Desa
                    </h3>
                    <p class="text-gray-600 mb-8">
                    1. Download Aplikasi .... di Playstore . </br>
                    2. Jika belum punya akun, anda minta pembuatan akun ke admin . </br>
                    3. Setelah sudah punya akun silahkan login . </br>
                    4. Sesudah login silahkan pilih fitur kabar desa di aplikasinya . </br>
                    5. Kemudian selamat membaca :) . </br>
                    </p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Footer -->
    @component("components.footer")
    @endcomponent 

    <!-- Footer -->
    @component("components.footerjs")
    @endcomponent 

    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <script src="assets/main.js"></script> 

  </body>
</html>
