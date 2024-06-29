<x-layout>
    <x-slot:title>{{ $title }}</x-slot>
    <x-navbar :background="'bg-navbar'"></x-navbar>

    {{-- alert --}}
    @if (@session()->has('LoginSuccess') || @session()->has('SendSuccess'))
        <div id="alert"
            class="md:w-1/2 absolute transform md:-translate-y-14 md:translate-x-80 -translate-y-12 translate-x-11 flex items-center p-4 mb-4 text-green-800 rounded-lg bg-green-200 dark:bg-gray-800 dark:text-green-400"
            role="alert">
            <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                viewBox="0 0 20 20">
                <path
                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
            </svg>
            <span class="sr-only">Info</span>
            <div class="ms-3 text-sm font-medium">
                {{ session('LoginSuccess') }} {{ session('SendSuccess') }}
            </div>
            <button type="button"
                class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700"
                data-dismiss-target="#alert" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
            </button>
        </div>
    @endif
    {{-- alert --}}

    <section class="mt-32 container mx-auto md:px-8">
        <!-- head -->
        <div class="grid grid-cols-12  md:gap-20  px-8 md:px-0">
            <div class="md:col-span-8 col-span-12 ">
                <h1 class="text-3xl md:text-4xl font-semibold text-success-200 text-balance">Selamat Datang di Layanan
                    Pembuatan Surat Online </h1>
                <p class="whitespace-pre-line text-wrap font-medium  text-lg md:text-xl text-slate-400">Kami menyediakan
                    fasilitas yang memudahkan Anda untuk membuat berbagai jenis surat secara praktis dan efisien.Silakan
                    pilih jenis surat yang ingin Anda buat dari daftar di bawah ini:

                    Cara Penggunaan:
                <ol class="list-decimal list-inside text-wrap font-medium  text-lg md:text-xl text-slate-400">
                    <li>Pilih jenis surat yang Anda butuhkan dengan mengklik pada opsi yang tersedia.</li>
                    <li>Isi formulir yang disediakan dengan informasi yang diperlukan. Pastikan untuk mengisi semua
                        kolom yang ditandai sebagai wajib diisi.</li>
                    <li>Setelah mengisi formulir, klik tombol "Buat Surat" atau "Proses" untuk melanjutkan.</li>
                    <li>Surat Anda akan segera diproses dan siap untuk diunduh atau dicetak.</li>
                </ol>
                </p>
            </div>
            <!-- img -->
            <div class="md:col-span-4 md:block hidden">
                <img src="icons/logoPilihSurat.png" alt="" class="object-cover">
            </div>
        </div>
        <!-- head -->

        <!-- search -->
        <form class="flex items-center px-8 md:px-0 md:mx-auto gap-4 md:gap-6 my-10 md:my-14">
            <label for="simple-search" class="sr-only">Search</label>
            <div class="md:w-10/12">
                <input type="text" id="simple-search"
                    class="bg-white border border-success-200 text-gray-900 text-base md:text-xl rounded-xl  block w-full md:ps-10 p-2 focus:ring-success-200 focus:border-success-200"
                    placeholder="Cari surat di sini..." required />
            </div>
            <div class="md:flex-1 flex-none">
                <button type="submit"
                    class=" w-full py-2 px-6  text-white bg-success-200 rounded-xl border flex items-center gap-2 focus:outline-none ">
                    <svg class="w-4 h-4 hidden md:inline-block" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                    <span class="font-semibold text-base md:text-xl">Cari surat</span>
                </button>
            </div>
        </form>
        <!-- search -->

        <x-card-surat :link="'/surat/sktm'">Surat keterangan Tidak Mampu</x-card-surat>

    </section>

    <x-footer></x-footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const alert = document.getElementById('alert');
            if (alert) {
                setTimeout(() => {
                    alert.classList.add('hidden');
                }, 2000);
            }
        });
    </script>
</x-layout>
