<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>

  <x-navbar ></x-navbar>
  <!-- jumbotron start -->
  <section class="bg-cover bg-no-repeat bg-[url('../../public/images/jumbotron.png')] bg-gray-700 bg-blend-multiply">
    <div class="px-4 mx-auto max-w-screen-xl text-center py-28 lg:py-40 animate__animated animate__fadeIn ">
        <h1 class="mb-4 font-semibold tracking-tight leading-none text-white md:text-7xl text-4xl font-klee-one">
            <span class="text-secondary-200">creative</span>village.id
        </h1>
        <p class="mb-8 text-base font-bold text-white md:text-2xl sm:px-16 lg:px-48">
            SISTEM INFORMASI
        </p>
        <!-- search -->
        <form class="max-w-xl mx-auto">
            <label for="default-search"
                class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-6 h-6 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                </div>
                <input type="search" id="default-search"
                    class="block w-full p-4 ps-12 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-slate-300 focus:border-slate-300"
                    placeholder="Search..." required autocomplete="off" />
                <button type="submit"
                    class="absolute top-0 end-0 px-6 text-xl font-medium h-full text-white bg-primary-200 rounded-e-lg border-y-2 border-primary-200 hover:bg-primary-300 hover:border-primary-300 focus:ring-4 focus:outline-none focus:ring-primary-300">
                    Cari
                </button>
            </div>
        </form>
        <!-- menu jumbotron -->
        <div class="w-full md:mt-5 mt-10 flex flex-wrap justify-evenly gap-1">
          <a href="/petadesa" class="inline-block mb-1 px-4 py-3 lg:p-3 space-y-2 group dark:border dark:border-gray-500 bg-white rounded-lg">
          <img src="icons/peta_desa.png" alt="peta_desa.png"
              class="px-3 h-12 w-20 md:h-16 md:w-24 object-contain group-hover:scale-125 transition duration-200" />
          <span class="text-center text-xs md:text-sm block break-words text-primary-300">Peta Desa</span>
          </a>
          <a href="/surat" class="inline-block mb-1 px-4 py-3 lg:p-3 space-y-2 group dark:border dark:border-gray-500 bg-white rounded-lg">
          <img src="icons/buat_surat.png" alt="buat_surat.png"
              class="px-3 h-12 w-20 md:h-16 md:w-24 object-contain group-hover:scale-125 transition duration-200" />
          <span class="text-center text-xs md:text-sm block break-words text-primary-300">Buat Surat</span>
          </a>
          <a href="/arsipdesa" class="inline-block mb-1 px-4 py-3 lg:p-3 space-y-2 group dark:border dark:border-gray-500 bg-white rounded-lg">
            <img src="icons/arsip_berita.png" alt="arsip_berita.png"
                class="px-3 h-12 w-20 md:h-16 md:w-24 object-contain group-hover:scale-125 transition duration-200" />
            <span class="text-center text-xs md:text-sm block break-words text-primary-300">Arsip Berita</span>
          </a>
          <a href="/produkdesa" class="inline-block mb-1 px-4 py-3 lg:p-3 space-y-2 group dark:border dark:border-gray-500 bg-white rounded-lg">
            <img src="icons/produk_desa.png" alt="produk_desa.png"
                class="px-3 h-12 w-20 md:h-16 md:w-24 object-contain group-hover:scale-125 transition duration-200" />
            <span class="text-center text-xs md:text-sm block break-words text-primary-300">Produk Desa</span>
          </a>
          <a href="/galeri" class="inline-block mb-1 px-4 py-3 lg:p-3 space-y-2 group dark:border dark:border-gray-500 bg-white rounded-lg">
            <img src="icons/galeri.png" alt="galeri.png"
                class="px-3 h-12 w-20 md:h-16 md:w-24 object-contain group-hover:scale-125 transition duration-200" />
            <span class="text-center text-xs md:text-sm block break-words text-primary-300">Galeri</span>
          </a>
          <a href="/pembangunan" class="inline-block mb-1 px-4 py-3 lg:p-3 space-y-2 group dark:border dark:border-gray-500 bg-white rounded-lg">
            <img src="icons/pembangunan.png" alt="pembangunan.png"
                class="px-3 h-12 w-20 md:h-16 md:w-24 object-contain group-hover:scale-125 transition duration-200" />
            <span class="text-center text-xs md:text-sm block break-words text-primary-300">Pembangunan</span>
          </a>
          <a href="/keuangandesa" class="inline-block mb-1 px-4 py-3 lg:p-3 space-y-2 group dark:border dark:border-gray-500 bg-white rounded-lg">
            <img src="icons/keuangan_desa.png" alt="keuangan_desa.png"
                class="px-3 h-12 w-20 md:h-16 md:w-24 object-contain group-hover:scale-125 transition duration-200" />
            <span class="text-center text-xs md:text-sm block break-words text-primary-300">Keuangan Desa</span>
          </a>
          <a href="/apbd" class="inline-block mb-1 px-4 py-3 lg:p-3 space-y-2 group dark:border dark:border-gray-500 bg-white rounded-lg">
            <img src="icons/status_desa.png" alt="status_desa.png"
                class="px-3 h-12 w-20 md:h-16 md:w-24 object-contain group-hover:scale-125 transition duration-200" />
            <span class="text-center text-xs md:text-sm block break-words text-primary-300">Status Desa</span>
          </a>
          <a href="/pengaduan" class="inline-block mb-1 px-4 py-3 lg:p-3 space-y-2 group dark:border dark:border-gray-500 bg-white rounded-lg">
            <img src="icons/pengaduan.png" alt="pengaduan.png"
                class="px-3 h-12 w-20 md:h-16 md:w-24 object-contain group-hover:scale-125 transition duration-200" />
            <span class="text-center text-xs md:text-sm block break-words text-primary-300">Pengaduan</span>
          </a>
        </div>
    </div>
  </section>
  <!-- jumbotron end -->

  <!-- serba serbi start -->
  <section class="container mx-auto md:py-32 py-14 px-8">
    <div class="grid grid-cols-12 gap-5 ">
      <div class="card-container grid grid-cols-6 gap-5 md:col-span-6 col-span-12">
        <!-- card start -->
        <div class="CardSerbaSerbi bg-[url('../../public/images/sejarah_desa.png')]">
          <a href="#" class="">
            <div class="bg-warning-200 w-32 h-20"></div>
            <div class="px-6 py-6">
              <h4 class="font-bold text-2xl">Sejarah indo</h4>
                <p class="line-clamp-6 md:text-sm text-base mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Molestias suscipit
                  voluptates tempora. Molestiae laborum consequuntur rerum harum deserunt optio soluta cum. Molestiae
                  earum,
                  nihil assumenda tenetur ab amet incidunt quidem libero illo et id inventore adipisci porro consectetur
                  accusamus odio! Asperiores nesciunt, debitis tempora harum consectetur aliquid! Eveniet quasi reiciendis
                  fuga neque nisi culpa iste voluptates commodi placeat similique nostrum eligendi error doloribus ipsa
                  magni necessitatibus voluptatibus beatae consequatur vero, sed ea nobis rerum vitae corporis.
                  Consectetur
                  impedit quia iste.</p>
              </div>
            </a>
          </div>
          <!-- card end -->
          <!-- card start -->
          <div class="CardSerbaSerbi bg-[url('../../public/images/tentang_kami.png')]">
            <a href="#" class="">
              <div class="bg-warning-200 w-32 h-20"></div>
              <div class="px-6 py-6">
                <h4 class="font-bold text-2xl">Tentang Kami</h4>
                <p class="line-clamp-6 md:text-sm text-base mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Molestias suscipit
                  voluptates tempora. Molestiae laborum consequuntur rerum harum deserunt optio soluta cum. Molestiae
                  earum,
                  nihil assumenda tenetur ab amet incidunt quidem libero illo et id inventore adipisci porro consectetur
                  accusamus odio! Asperiores nesciunt, debitis tempora harum consectetur aliquid! Eveniet quasi reiciendis
                  fuga neque nisi culpa iste voluptates commodi placeat similique nostrum eligendi error doloribus ipsa
                  magni necessitatibus voluptatibus beatae consequatur vero, sed ea nobis rerum vitae corporis.
                  Consectetur
                  impedit quia iste.</p>
              </div>
            </a>
          </div>
          <!-- card end -->
          <!-- card start -->
          <div class="CardSerbaSerbi bg-[url('../../public/images/visi_desa.png')]">
            <a href="#" class="">
              <div class="bg-warning-200 w-32 h-20"></div>
              <div class="px-6 py-6">
                <h4 class="font-bold text-2xl">Visi Desa</h4>
                <p class="line-clamp-6 md:text-sm text-base mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Molestias suscipit
                  voluptates tempora. Molestiae laborum consequuntur rerum harum deserunt optio soluta cum. Molestiae
                  earum,
                  nihil assumenda tenetur ab amet incidunt quidem libero illo et id inventore adipisci porro consectetur
                  accusamus odio! Asperiores nesciunt, debitis tempora harum consectetur aliquid! Eveniet quasi reiciendis
                  fuga neque nisi culpa iste voluptates commodi placeat similique nostrum eligendi error doloribus ipsa
                  magni necessitatibus voluptatibus beatae consequatur vero, sed ea nobis rerum vitae corporis.
                  Consectetur
                  impedit quia iste.</p>
              </div>
            </a>
          </div>
          <!-- card end -->
          <!-- card start -->
          <div class="CardSerbaSerbi bg-[url('../../public/images/misi_desa.png')]">
            <a href="#" class="">
              <div class="bg-warning-200 w-32 h-20"></div>
              <div class="px-6 py-6">
                <h4 class="font-bold text-2xl">Misi Desa</h4>
                <p class="line-clamp-6 md:text-sm text-base mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Molestias suscipit
                  voluptates tempora. Molestiae laborum consequuntur rerum harum deserunt optio soluta cum. Molestiae
                  earum,
                  nihil assumenda tenetur ab amet incidunt quidem libero illo et id inventore adipisci porro consectetur
                  accusamus odio! Asperiores nesciunt, debitis tempora harum consectetur aliquid! Eveniet quasi reiciendis
                  fuga neque nisi culpa iste voluptates commodi placeat similique nostrum eligendi error doloribus ipsa
                  magni necessitatibus voluptatibus beatae consequatur vero, sed ea nobis rerum vitae corporis.
                  Consectetur
                  impedit quia iste.</p>
              </div>
            </a>
          </div>
          <!-- card end -->
        </div>
        <div class="grid grid-cols-6 md:col-span-6 col-span-12 md:order-last order-first items-center">
          <div class="col-span-6">
            <h1 class="md:text-4xl text-2xl text-primary-300 font-imperial-script">Sistem Informasi Creative Village ID
            </h1>
            <h1 class="md:text-6xl text-4xl font-bold my-3">Serba Serbi Desa</h1>
            <p class="font-light md:text-lg text-base">Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, at
              aliquam tenetur
              nesciunt et, obcaecati illo odit dolores tempore soluta enim nostrum nisi, blanditiis sit dolorem. Placeat,
              veniam omnis? Ab, doloremque id vel doloribus commodi perferendis harum enim minima laboriosam cum ea.
              Temporibus recusandae ex deleniti, rerum laudantium voluptatem vero qui odio aliquid consectetur quae
              ratione
              ipsam veniam excepturi dolor cumque quaerat hic sint adipisci sapiente? Aperiam, non! Unde nam minima vitae
              voluptatibus magni esse est dolor, perspiciatis expedita labore.</p>
        </div>
      </div>
    </div>
  </section>
  <!-- serba serbi start -->

  <!-- berita terkini start -->
  <section class="container mx-auto px-8" id="berita">
    <div class="text-center mb-12">
        <h1 class="md:text-4xl text-3xl font-imperial-script text-primary-200">
          Informasi Desa
        </h1>
        <h1 class="font-bold text-3xl">Berita Terkini</h1>
      </div>
      {{-- card-container --}}
      <div class="grid grid-cols-12 gap-5">
        {{-- berita --}}
        @foreach ($berita as $item)
        <div class="md:col-span-4 col-span-12 relative">
          <div class="md:w-36 md:h-20 w-32 h-16 bg-warning-300 text-white font-bold flex justify-center items-center gap-3 absolute left-10">
            <span class="md:text-5xl text-4xl">{{ $item['date']->format('d') }}</span>
            <div>
              <p class="md:text-xl text-lg">{{ $item['date']->format('F') }}</p>
              <p class="md:text-xl text-lg">{{ $item['date']->format('Y') }}</p>
            </div>
          </div>
          {{-- <div class="ImageBerita bg-[url('{{$item['image']}}')] "> --}}
            <img src="{{$item['image']}}" alt="{{$item['image']}}" class="ImageBerita">
          {{-- </div> --}}
          <div class="w-4/5 mx-auto py-4 px-4 space-y-4 bg-white md:mt-56 mt-48 drop-shadow-lg">
            <a href="{{ $item['url'] }}" class="uppercase font-bold text-xl">{{ $item['title'] }}</a>
            <p class="line-clamp-6 text-base font-light">
              {{ $item['description'] }}
            </p>
            <a href="{{ $item['url'] }}" class="btn-berita">
              Selengkapnya
            </a>
            <div class="flex gap-3 w-fit">
              <a href="#" class="flex items-center justify-center">
                <svg class="w-5 h-5 text-secondary-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                  height="24" fill="none" viewBox="0 0 24 24">
                  <path stroke="currentColor" stroke-width="2"
                    d="M21 12c0 1.2-4.03 6-9 6s-9-4.8-9-6c0-1.2 4.03-6 9-6s9 4.8 9 6Z" />
                  <path stroke="currentColor" stroke-width="2" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                </svg>
                <span class="font-medium text-xs">999</span>
              </a>
              <a href="#" class="flex items-center justify-center">
                <svg class="w-5 h-5 text-secondary-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                  height="24" fill="currentColor" viewBox="0 0 24 24">
                  <path fill-rule="evenodd"
                    d="M3 5.983C3 4.888 3.895 4 5 4h14c1.105 0 2 .888 2 1.983v8.923a1.992 1.992 0 0 1-2 1.983h-6.6l-2.867 2.7c-.955.899-2.533.228-2.533-1.08v-1.62H5c-1.105 0-2-.888-2-1.983V5.983Zm5.706 3.809a1 1 0 1 0-1.412 1.417 1 1 0 1 0 1.412-1.417Zm2.585.002a1 1 0 1 1 .003 1.414 1 1 0 0 1-.003-1.414Zm5.415-.002a1 1 0 1 0-1.412 1.417 1 1 0 1 0 1.412-1.417Z"
                    clip-rule="evenodd" />
                </svg>
                <span class="font-medium text-xs">999</span>
              </a>
              <a href="#" class="flex items-center justify-center">
                <svg class="w-5 h-5 text-secondary-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                  height="24" fill="currentColor" viewBox="0 0 24 24">
                  <path fill-rule="evenodd"
                    d="M15.03 9.684h3.965c.322 0 .64.08.925.232.286.153.532.374.717.645a2.109 2.109 0 0 1 .242 1.883l-2.36 7.201c-.288.814-.48 1.355-1.884 1.355-2.072 0-4.276-.677-6.157-1.256-.472-.145-.924-.284-1.348-.404h-.115V9.478a25.485 25.485 0 0 0 4.238-5.514 1.8 1.8 0 0 1 .901-.83 1.74 1.74 0 0 1 1.21-.048c.396.13.736.397.96.757.225.36.32.788.269 1.211l-1.562 4.63ZM4.177 10H7v8a2 2 0 1 1-4 0v-6.823C3 10.527 3.527 10 4.176 10Z"
                    clip-rule="evenodd" />
                </svg>
                <span class="font-medium text-xs">999</span>
              </a>
            </div>
          </div>
        </div>
        @endforeach
        {{-- berita --}}
      </div>
      <div class="flex justify-center mt-8">
        <ul class="inline-flex space-x-2 text-xl text-secondary-200">
          <li>
            <a href="" class="border border-secondary-200 inline-block p-2 rounded-full">
              <svg class="w-5 h-5 text-secondary-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="m15 19-7-7 7-7" />
              </svg>
            </a>
          </li>
          <li>
            <a href="" class="border border-secondary-200 inline-block py-1 px-3 rounded-full font-bold bg-secondary-200 text-white">1</a>
          </li>
          <li>
            <a href="" class="border border-secondary-200 inline-block py-1 px-3 rounded-full font-bold">2</a>
          </li>
          <li>
            <a href="" class="border border-secondary-200 inline-block py-1 px-3 rounded-full font-bold">3</a>
          </li>
          <li class="hidden md:block">
            <a href="" class="border border-secondary-200 inline-block py-1 px-3 rounded-full font-bold">4</a>
          </li>
          <li class="hidden md:block">
            <a href="" class="border border-secondary-200 inline-block py-1 px-3 rounded-full font-bold">5</a>
          </li>
          <li>
            <a href="" class="border border-secondary-200 inline-block p-2 rounded-full">
              <svg class="w-5 h-5 text-secondary-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="m9 5 7 7-7 7" />
              </svg>
            </a>
          </li>
        </ul>
      </div>
    <!-- pagination end -->
  </section>
  <!-- berita terkini end -->

  <!-- Galeri Desa start -->
  <section class="md:pt-16 pt-12" id="galeri">
    <div class="text-center">
      <h1 class="md:text-4xl text-3xl font-imperial-script text-primary-200">
        Informasi Desa
      </h1>
      <h1 class="font-bold text-3xl">Galeri Desa</h1>
    </div>
    <div>
      <swiper-container class="mySwiper mt-10" autoplay="true" delay="1000" space-between="30" slides-per-view="auto"
        loop="true" effect="coverflow" coverflow-effect='{"rotate": 0, "stretch": 0, "depth": 100, "modifier": 2}'
        centered-slides="true">
        @foreach ($galeri as $item)    
        <swiper-slide class="w-fit px-2 bg-white">
          <a href="{{ $item['url'] }}" class=" ">
            <img src="{{$item['img'] }}" alt=""
              class="w-80 md:w-96 h-60 object-cover" />
          </a>
        </swiper-slide>
        @endforeach
      </swiper-container>
    </div>
  </section>
  <!-- Galeri Desa end -->

  <x-apbd></x-apbd>
  <x-footer></x-footer>
  
  <script src="js/script.js"></script>
</x-layout>