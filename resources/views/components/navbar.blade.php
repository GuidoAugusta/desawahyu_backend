@props(['background' => 'bg-transparent'])
<nav class="navbar fixed w-full z-20 top-0 start-0 text-white transition-all duration-700 {{ $background }}">
  <div class="container mx-auto flex flex-wrap items-center justify-between p-4">
      <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
          <span class="self-center text-2xl font-semibold whitespace-nowrap font-klee-one ">creativevillage.id</span>
      </a>
      <button data-collapse-toggle="navbar-dropdown" type="button"
          class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-white rounded-lg md:hidden hover:bg-transparent focus:ring-2 focus:ring-white"
          aria-controls="navbar-dropdown" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
              viewBox="0 0 17 14">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M1 1h15M1 7h15M1 13h15" />
          </svg>
      </button>
      <div class="hidden w-full md:block md:w-auto" id="navbar-dropdown">
          <ul
              class="flex flex-col text-base font-normal p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-white md:bg-transparent md:space-x-5 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0">
              <li>
                  <a href="/" class="block py-2 px-3 text-secondary-100 rounded md:bg-transparent md:p-0"
                      aria-current="page">HOME</a>
              </li>
              <!-- dropdownProfil -->
              <li>
                  <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownProfil"
                      class="flex items-center justify-between w-full py-2 px-3 text-gray-900 md:text-white rounded md:p-0 md:w-auto">
                      PROFIL DESA<svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                          fill="none" viewBox="0 0 10 6">
                          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="m1 1 4 4 4-4" />
                      </svg>
                  </button>
                  <!-- Dropdown Profil menu -->
                  <div id="dropdownProfil"
                      class="z-10 hidden font-normal bg-gray-200 divide-y rounded-lg shadow w-80 md:w-44">
                      <ul class="py-2 text-sm text-gray-900" aria-labelledby="dropdownLargeButton">
                          <x-nav-link href="/aboutus">Tentang Kami</x-nav-link>
                          <x-nav-link href="/visimisi">Visi Misi</x-nav-link>
                          <x-nav-link href="/sejarahdesa">Sejarah Desa</x-nav-link>
                      </ul>
                  </div>
              </li>
              <!-- dropdownPemerintah -->
              <li>
                  <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownPemerintah"
                      class="flex items-center justify-between w-full py-2 px-3 text-gray-900 md:text-white rounded md:p-0 md:w-auto">
                      PEMERINTAHAN<svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true"
                          xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="m1 1 4 4 4-4" />
                      </svg>
                  </button>
                  <!-- dropdown Pemerintah menu -->
                  <div id="dropdownPemerintah"
                      class="z-10 hidden font-normal bg-gray-200 divide-y rounded-lg shadow w-80 md:w-44">
                      <ul class="py-2 text-sm text-gray-900" aria-labelledby="dropdownLargeButton">
                        <x-nav-link href="#">Struktur Organisasi</x-nav-link>
                        <x-nav-link href="#">Perangkat Desa</x-nav-link>
                        <x-nav-link href="#">Lembaga Desa</x-nav-link>
                      </ul>
                  </div>
              </li>
              <!-- dropdownInformasi -->
              <li>
                  <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownInformasi"
                      class="flex items-center justify-between w-full py-2 px-3 text-gray-900 md:text-white rounded md:p-0 md:w-auto">
                      INFORMASI<svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                          fill="none" viewBox="0 0 10 6">
                          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="m1 1 4 4 4-4" />
                      </svg>
                  </button>
                  <!-- dropdown Informasi menu -->
                  <div id="dropdownInformasi"
                      class="z-10 hidden font-normal bg-gray-200 divide-y rounded-lg shadow w-80 md:w-44">
                      <ul class="py-2 text-sm text-gray-900" aria-labelledby="dropdownLargeButton">
                        <x-nav-link href="/#berita">Berita Desa</x-nav-link>
                        <x-nav-link href="#">Pengumuman</x-nav-link>
                        <x-nav-link href="#">Agenda Kegiatan</x-nav-link>
                      </ul>
                  </div>
              </li>
              <!-- dropdownLayanan -->
              <li>
                  <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownLayanan"
                      class="flex items-center justify-between w-full py-2 px-3 text-gray-900 md:text-white rounded md:p-0 md:w-auto">
                      LAYANAN MASYARAKAT<svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true"
                          xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                              stroke-width="2" d="m1 1 4 4 4-4" />
                      </svg>
                  </button>
                  <!-- dropdown Layanan menu -->
                  <div id="dropdownLayanan"
                      class="z-10 hidden font-normal bg-gray-200 divide-y rounded-lg shadow w-80 md:w-44">
                      <ul class="py-2 text-sm text-gray-900" aria-labelledby="dropdownLargeButton">
                          <x-nav-link href="/surat">Pembuatan Surat</x-nav-link>
                        <x-nav-link href="/status-surat">Status Pengajuan</x-nav-link>
                      </ul>
                  </div>
              </li>
              <!-- dropdownPotensi -->
              <li>
                  <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownPotensi"
                      class="flex items-center justify-between w-full py-2 px-3 text-gray-900 md:text-white rounded md:p-0 md:w-auto">
                      POTENSI DESA<svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true"
                          xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                              stroke-width="2" d="m1 1 4 4 4-4" />
                      </svg>
                  </button>
                  <!-- dropdown potensi menu -->
                  <div id="dropdownPotensi"
                      class="z-10 hidden font-normal bg-gray-200 divide-y rounded-lg shadow w-80 md:w-44">
                      <ul class="py-2 text-sm text-gray-900" aria-labelledby="dropdownLargeButton">
                        <x-nav-link>Belum Tersedia</x-nav-link>
                      </ul>
                  </div>
              </li>
              <!-- dropdownProduk -->
              <li>
                  <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownProduk"
                      class="flex items-center justify-between w-full py-2 px-3 text-gray-900 md:text-white rounded md:p-0 md:w-auto">
                      PRODUK<svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                          fill="none" viewBox="0 0 10 6">
                          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                              stroke-width="2" d="m1 1 4 4 4-4" />
                      </svg>
                  </button>
                  <!-- dropdown potensi menu -->
                  <div id="dropdownProduk"
                      class="z-10 hidden font-normal bg-gray-200 divide-y rounded-lg shadow w-80 md:w-44">
                      <ul class="py-2 text-sm text-gray-900" aria-labelledby="dropdownLargeButton">
                        <x-nav-link>Belum Tersedia</x-nav-link>
                      </ul>
                  </div>
              </li>
          </ul>
      </div>
  </div>
</nav>
