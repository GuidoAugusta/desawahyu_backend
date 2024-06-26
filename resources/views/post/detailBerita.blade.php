<x-layout>
    <x-slot:title>{{ $title }}</x-slot>
    <x-navbar :background="'bg-navbar'"></x-navbar>

      {{-- alert --}}
      @if (@session()-> has('LoginSuccess'))
        <div id="alert" class="md:w-1/2 absolute transform md:-translate-y-14 md:translate-x-80 -translate-y-12 translate-x-11 flex items-center p-4 mb-4 text-green-800 rounded-lg bg-green-200 dark:bg-gray-800 dark:text-green-400" role="alert">
          <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
          </svg>
          <span class="sr-only">Info</span>
          <div class="ms-3 text-sm font-medium">
            {{ session('LoginSuccess') }}
          </div>
          <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700" data-dismiss-target="#alert" aria-label="Close">
            <span class="sr-only">Close</span>
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
            </svg>
          </button>
        </div>
      @endif
      {{-- alert --}}

    <section class="mt-32 container mx-auto md:px-8">
      <!-- head -->
      <div class="grid grid-cols-12 md:gap-20  px-8 md:px-0 items-center">
        <div class="md:col-span-8 col-span-12 space-y-4">
          <h1 class="text-3xl md:text-5xl font-bold text-success-200 text-balance">Selamat Datang di Informasi dan
            Publikasi Kampung Rawasari </h1>
          <p class="whitespace-pre-line text-wrap font-medium text-lg md:text-xl text-slate-400">Selamat Datang di Informasi dan Publikasi Kampung Rawasari, tempat kami berbagi berita, acara, dan perkembangan terbaru dari kampung kami.
          </p>
          </div>
          <!-- img -->
          <div class="md:col-span-4 md:block hidden">
            <img src="images/information_logo.png" alt="" class="object-cover">
          </div>
        </div>
        <!-- head -->

        <!-- border -->
        <div class="py-8">
            <hr class="border-2 border-[#CECECE]">
        </div>
        <!-- border -->

        <div class="grid grid-cols-12 md:gap-20 px-8 md:px-0 items-center">
            <div class="md:col-span-8 col-span-12 space-y-5">
              <h1 class="text-2xl md:text-2xl font-bold text-black py-3">Kerja Bakti Perawatan Sekolan di Wilayah Sekitar Rumah</h1>
              <div class="flex space-x-12 justify-around md:justify-start pb-5">
                <div class="md:flex gap-3 items-center">
                    <img src="icons/date.svg" alt="" class="w-9 md:w-11 mx-auto">
                    <span class="text-sm font-medium md:text-xl">28 Maret 2023</span>
                </div>
                <div class="md:flex gap-3 items-center">
                    <img src="icons/user.svg" alt="" class="w-6 md:w-6 mx-auto">
                    <span class="text-sm font-medium md:text-xl">Gudio</span>
                </div>
                <div class="md:flex gap-3 items-center">
                    <img src="icons/book.svg" alt="" class="w-10 md:w-9 mx-auto">
                    <span class="text-sm font-medium md:text-xl">Dibaca 10 kali</span>
                </div>
                 </div>
              </div>
              <!-- img -->
            </div>

        <x-detailBerita>Surat keterangan Tidak Mampu</x-detailBerita>

    </section>

    <x-footer></x-footer>

    <script>
      document.addEventListener('DOMContentLoaded', function() {
        const alert = document.getElementById('alert');
        if (alert) {
          setTimeout(() => {
            alert.classList.add('hidden');
          }, 2000); // 5000ms = 5 seconds
        }
      });
    </script>
  </x-layout>
