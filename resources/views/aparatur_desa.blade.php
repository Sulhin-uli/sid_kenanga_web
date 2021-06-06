<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>
      Aparatur Desa
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
              <a class="inline-block text-black no-underline hover:text-gray-800 hover:text-underline py-2 px-4" href="/beranda">Beranda</a>
            </li>
            <li class="mr-3">
              <a class="inline-block text-black no-underline hover:text-gray-800 hover:text-underline py-2 px-4" href="/tentang">Tentang</a>
            </li>
            <li class="mr-3">
              <a class="inline-block py-2 px-4 text-black font-bold no-underline" href="/aparatur_desa">Aparatur Desa</a>
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
    <section id="AparaturDesa" class="bg-white border-b border py-8 ">
      <div class="container flex flex-wrap mx-auto px-2 pt-4 pb-12 text-gray-800">
        <h1 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
          Aparatur Desa
        </h1>
        <div class="w-full mb-4">
          <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
        </div>
    <!-- Content Aparatur Desa -->
    {{-- @component("components.contentaparturdesa") --}}
    @forelse($aparaturdesa as $data)
        {{-- @section('isiaparatur') --}}
        <div class='flex max-w-sm w-70 mx-2 my-5 bg-white shadow-2xl border-8 border-gray-600 rounded-lg overflow-hidden mx-auto'>
          <div class='flex items-center w-full px-2 py-2'>
              <div class='mx-3 w-full'>
                  <div class="flex flex-row mb-6 mt-2">
                      <div class="mr-1 h-2 w-8 bg-blue-600 rounded-full cursor-pointer"></div>
                      <div class="mr-1 h-2 w-8 bg-red-600 rounded-full cursor-pointer"></div>
                      <div class="mr-1 h-2 w-8 bg-yellow-400 rounded-full cursor-pointer"></div>
                  </div>
                  <div class='text-gray-400 font-medium text-sm border-2 border-gray-200 rounded-md cursor-pointer mb-3'><img class="rounded" src="{{ url('img-aparaturdesa/' . $data->foto)}}" width="220px"></div>
                  <div class='flex flex-col items-center py-3'>
                    <span class="font-bold px-2 py-2 bg-yellow-600 rounded-md text-white text-md focus:border-transparent"> {{$data->jabatan}} 
                    </span>
                  </div>
                  <div class="flex flex-row mb-3">
                    <div class="flex flex-col mb-4 px-1 mt-1">
                      <div class='text-gray-600 font-semibold'>Nama :
                        <span class="px-2 py-2 bg-blue-900 rounded-md text-white text-sm focus:border-transparent"> {{$data->nama}} 
                        </span>
                      </div>
                        
                        {{-- <div class='text-gray-600 font-base text-sm py-2'>email@example.com </div> --}}
                    </div>
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
    
    {{-- @forelse ($aparaturdesa as $data) --}}
    {{-- <section class="bg-white border-b py-8">
      <div class="container mx-auto flex flex-wrap pt-4 pb-4">
        <div class="container bg-yellow-100">
          <div class="md:w-1/3 p-6 mx-auto">
            <div class="flex-1 bg-white rounded-t-xl rounded-b-xl overflow-hidden shadow">
              <div class="px-8 py-5 bg-yellow-600 rounded-t-xl">
                <div class="items-center">
                  <div class="flex-shrink-0">
                    <img class="mx-auto w-25 h-24 rounded-full border-2 border-white" src="{{ url('img-aparaturdesa/' . $data->foto)}}" width="150" alt="kuwu">
                  </div>
                </div>
                <div class="font-serif text-white text-center text-xl pt-2">
                  {{$data->nama}}
                </div>
              </div>
              <div class="bg-white shadow rounded-b-xl overflow-hidden">
                <p class="font-serif py-6 px-8 leading-relaxed text-gray-600">Jabatan : 
                  <span class="font-serif px-2 py-2 bg-blue-900 rounded-md text-white text-sm focus:border-transparent"> {{$data->jabatan}} 
                  </span>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> --}}

    <!-- component -->
    {{-- <section class="bg-white border-b">
      <div class="py-4 bg-gray-100 flex items-center justify-center">
        <div>
          <div class="flex flex-col max-w-md bg-white px-8 py-6 rounded-xl space-y-5 items-center">
            <img class="w-full rounded-md" src="{{ url('img-aparaturdesa/' . $data->foto)}}" alt="kuwu" />
            <p class="text-center leading-relaxed text-gray-600">Nama : <span class="px-2 py-2 bg-blue-900 rounded-md text-white text-sm focus:border-transparent"> {{$data->nama}} </span></p>  
            <h1 class="px-24 py-4 bg-gray-900 rounded-md text-white text-sm focus:border-transparent"> {{$data->jabatan}} </h1>
          </div>
        </div>
      </div>
    </section> --}}
    {{-- @empty
    <h1 class="text-center text-gray-600" >
       Data Aparatur Desa Kosong
    </h1>
    @endforelse --}}

    <!-- Footer -->
    @component("components.footer")
    @endcomponent
    

    <!-- Footer JS -->
    @component("components.footerjs")
    @endcomponent
    
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <script src="assets/main.js"></script> 

  </body>
</html>
