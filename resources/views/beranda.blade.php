<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>
      Sistem Informasi Desa Kenanga
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
          <a href="/beranda" class="toggleColour text-white no-underline hover:no-underline font-bold text-2xl lg:text-4xl">
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
              <a class="inline-block py-2 px-4 text-black font-bold no-underline" href="/beranda">Beranda</a>
            </li>
            <li class="mr-3">
              <a class="inline-block text-black no-underline hover:text-gray-800 hover:text-underline py-2 px-4" href="/tentang">Tentang</a>
            </li>
            <li class="mr-3">
              <a class="inline-block text-black no-underline hover:text-gray-800 hover:text-underline py-2 px-4" href="/aparatur_desa">Aparatur Desa</a>
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
    
    <!-- Container -->
 <!--Hero-->
  <div class="pt-24">
    <div class="container px-3 mx-auto flex flex-wrap flex-col md:flex-row items-center">
      <!--Left Col-->
      <div class="flex flex-col w-full md:w-2/5 justify-center items-start text-center md:text-left">
        <p class="uppercase tracking-loose w-full">Sistem Informasi</p>
        <h1 class="my-4 text-5xl font-bold leading-tight w-full">
          DESA KENANGA
        </h1>
        <p class="leading-normal text-2xl mb-8">
          Kecamatan Sindang, Kabupaten Indramayu - Jawa Barat 45226
        </p>
        <button class="flex mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
          </svg>
          WhatsApp
        </button>
      </div>
      <!--Right Col-->
      {{-- @component("components.container")
      @endcomponent --}}
      
      
      <div class="w-full md:w-3/5 py-6 text-center mb-24 mt-5">
        <div class="carousel1"
          data-flickity='{ "wrapAround": true }'>
          
            @foreach ($gambar_lp as $data)
          
          <div class="carousel-cell1">
            <img class="w-full md:w-4/5 z-50 mx-auto" src="{{ url('img-gambar_lp/' . $data->gambar)}}" />
          </div>

            @endforeach 

        </div>
      </div>
    </div>
  </div>
  
    <!-- Relative -->
    @component("components.relatif")
    @endcomponent
    
    <!-- Content Tentang Desa -->
    
    @component("components.contentttgdesa")
    @foreach ($visimisi as $data)
    @section('content1')   
    <p class="text-gray-800 mb-8">
      Visi Pembangunan Desa Kenanga adalah terwujudnya Desa Kenanga yang menjadi :
      <br />
      <br />

     " {{$data->visi}} "
    </p>
    @endsection

    @section('content2')
      <p class="text-gray-800 mb-8">
        {{$data->misi}}
      </p> 
    @endsection
    @endforeach
    @endcomponent
    
    <section id="AparaturDesa" class="bg-gray-100 py-8 ">
      <div class="container flex flex-wrap mx-auto px-2 pt-4 pb-12 text-gray-800">
        <h1 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
          Aparatur Desa
        </h1>
        <div class="w-full mb-4">
          <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
        </div>
    <!-- Content Aparatur Desa -->
    {{-- @component("components.contentaparturdesa") --}}

    {{-- <div class="font-serif text-gray-600 text-center text-xl pt-2">
      {{$data->nama}}
    </div> --}}

    @forelse($aparaturdesa as $data)
        {{-- @section('isiaparatur') --}}
        
        <div class='flex max-w-sm w-70 mx-2 my-5 bg-white shadow-2xl border-8 border-gray-300 rounded-lg overflow-hidden mx-auto'>
          <div class='flex items-center w-full px-2 py-2'>
              <div class='mx-3 w-full'>
                  <div class="flex flex-row mb-6 mt-2">
                      <div class="mr-1 h-2 w-8 bg-blue-600 rounded-full cursor-pointer"></div>
                      <div class="mr-1 h-2 w-8 bg-red-600 rounded-full cursor-pointer"></div>
                      <div class="mr-1 h-2 w-8 bg-yellow-400 rounded-full cursor-pointer"></div>
                  </div>
                  <div class='rounded-full cursor-pointer mb-3'><img class="rounded" src="{{ url('img-aparaturdesa/' . $data->foto)}}" width="150px">
                  </div>
                  <div class='flex flex-col items-center py-3'>
                    <div class="font-serif text-gray-600 text-center text-xl">
                      {{$data->nama}}
                    </div> 
                    <span class="font-bold px-2 py-2 bg-yellow-600 rounded-md text-white text-md focus:border-transparent"> {{$data->jabatan}} 
                    </span>
                  </div>
              </div>
          </div>
        </div>
        {{-- @endsection --}}
        @empty
        <h1 class="text-center text-gray-600" >
           Data Aparatur Desa Kosong
        </h1>
    @endforelse
    {{-- @endcomponent --}}
      </div>
    </section>
    
    <section class="bg-white border-b py-8">
      <div class="container mx-auto flex flex-wrap pt-4 pb-12">
        <h1 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
          Kabar Desa
        </h1>
        <div class="w-full mb-4">
          <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
        </div>
        @forelse ($kabar_desa as $data)
        <div class='flex max-w-sm w-70 mx-2 my-5 bg-white shadow-2xl rounded-lg overflow-hidden mx-auto'>
          <div class='flex items-center w-full px-2 py-3'>
              <div class='w-full'>
                <div class="flex mx-auto items-center justify-center">
                  <div class="">
                    <div class="flex flex-col max-w-md bg-white px-8 py-3 rounded-xl items-center">  
                      <img class="rounded-md border-2 border-gray-600" src="{{ url('img-kabar_desa/' . $data->gambar)}}" width="210px" alt="motivation" />
                      <span class="mt-5 text-center font-bold text-xl text-gray-600"> {{$data->judul}} </span>
                      <p class="px-3 text-center leading-relaxed text-gray-900"> {{$data->tanggal}} </p>
                      {{-- <p class="px-3 text-center leading-relaxed text-gray-900"> {{$data->isi}} </p> --}}
                    </div>
                    <div class="flex flex-col max-w-md bg-white px-8 rounded-xl space-y-5">
                      <p class="text-gray-800 text-base px-6 mb-5 truncate">
                        {{$data->isi}}
                      </p>
                    </div>
                    <div class="flex flex-col max-w-md bg-white px-8 py-3 rounded-xl items-center">
                      <a class="px-24 py-4 gradient rounded-md text-white text-sm focus:border-transparent" href="/kabardesa/informasi{{ $data->id_kabar_desa }}">Lihat Selengkapnya ..</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
    @empty
    <h1 class="text-center text-gray-600" >
      Data Kabar Desa Kosong
    </h1>
    @endforelse
      <div class='flex items-center w-full px-2 py-3'>
        <div class='w-full'>
          <div class="flex mx-auto items-center justify-end">
            <div class="flex flex-col max-w-md bg-white px-8 py-3 rounded-xl items-center">
              <a class="px-24 py-4 bg-indigo-600 rounded-md text-white text-sm focus:border-transparent" href="/kabardesa/show">Lihat Kabar Desa Lain <i class="far fa-arrow-alt-circle-right"></i></a>
            </div>
          </div>
        </div>
      </div>
  </div>
  </section>

    <!-- Content Agenda Kegiatan -->
    {{-- @component("components.contentagenda")
    @endcomponent --}}
    {{-- <section class="bg-white border-b py-8">
      <div class="container mx-auto flex flex-wrap pt-4 pb-12">
        <h1 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
          Agenda Kegiatan
        </h1>
        <div class="w-full mb-4">
          <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
        </div>
        @forelse ($agendakegiatan as $data)
        <div class='flex max-w-sm w-70 mx-2 my-5 bg-white shadow-2xl border-gray-200 rounded-lg overflow-hidden mx-auto'>
          <div class='flex items-center w-full px-2 py-3'>
              <div class='mx-3 w-full'>
                <div class="flex mx-auto items-center justify-center">
                  <div class="">
                    <div class="flex flex-col max-w-md bg-white px-8 py-6 rounded-xl space-y-5 items-center">  
                      <img class="w-full rounded-md" src="{{ url('img-agendakegiatan/' . $data->foto)}}" alt="motivation" />
                      <span class="text-center font-bold text-xl text-gray-600"> {{$data->judul}} </span>
                      <p class="px-3 text-center leading-relaxed text-gray-900 "> {{$data->keterangan}} </p>
                      <button class="px-24 py-4 gradient rounded-md text-white text-sm focus:border-transparent"><a href="">Read article</a></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
    @empty
    <h1 class="text-center text-gray-600" >
      Data Aparatur Desa Kosong
    </h1>
    @endforelse
  </div>
  </section> --}}

    <!-- Content Pelayanan Desa -->
    @component("components.contentpelayanandesa")
    @endcomponent

    <!-- Maps -->
    @component("components.maps")
    @endcomponent

    <!-- Footer -->
    @component("components.footer")
    @endcomponent
    

    <!-- Footer -->
    @component("components.footerjs")
    @endcomponent
    
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    
  </body>
</html>
