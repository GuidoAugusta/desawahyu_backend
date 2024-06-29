<x-layout>
    <x-slot:title>{{ $title }}</x-slot>
    <x-navbar :background="'bg-navbar'"></x-navbar>

    {{-- alert --}}
    {{-- @if (@session()->has('LoginSuccess'))
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
                {{ session('LoginSuccess') }}
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
    @endif --}}
    {{-- alert --}}

    <section class="mt-32 container mx-auto md:px-8">
        <!-- head -->
        <div class="grid grid-cols-12 md:gap-20  px-8 md:px-0 items-center">
            <div class="md:col-span-8 col-span-12 space-y-4">
                <h1 class="text-3xl md:text-5xl font-bold text-success-200 text-balance">Selamat Datang di Informasi dan
                    Publikasi Kampung Rawasari </h1>
                <p class="whitespace-pre-line text-wrap font-medium text-lg md:text-xl text-slate-400">Selamat Datang di
                    Informasi dan Publikasi Kampung Rawasari, tempat kami berbagi berita, acara, dan perkembangan
                    terbaru dari kampung kami.
                </p>
            </div>
            <!-- img -->
            <div class="md:col-span-4 md:block hidden">
                <img src="../images/information_logo.png" alt="" class="object-cover">
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

                <div class="flex space-x-12 justify-around md:justify-start pb-5">
                    <div class="md:flex gap-3 items-center">
                        <img src="../icons/date.svg" alt="" class="w-9 md:w-11 mx-auto">
                        <span class="text-sm font-medium md:text-xl">28 Maret 2023</span>
                    </div>
                    <div class="md:flex gap-3 items-center">
                        <img src="../icons/user.svg" alt="" class="w-6 md:w-6 mx-auto">
                        <span class="text-sm font-medium md:text-xl">Gudio</span>
                    </div>
                    <div class="md:flex gap-3 items-center">
                        <img src="../icons/book.svg" alt="" class="w-10 md:w-9 mx-auto">
                        <span class="text-sm font-medium md:text-xl">Dibaca 10 kali</span>
                    </div>
                </div>
            </div>
            <!-- img -->
        </div>

        {{-- <x-detailBerita>Surat keterangan Tidak Mampu</x-detailBerita> --}}
        @props(['link' => '#'])
        <div class="md:flex gap-8 px-8 md:px-0 py-0">
            <div class="md:w-7/12">
                <div class="CardSurat ">
                    <div class="bg-[#F0F0F0] px-10 pt-16 pb-5 space-y-3">
                        <h1 class="text-2xl md:text-2xl font-bold text-black py-3">{{ $berita->title }}</h1>
                        <img src="{{ asset('storage/' . $berita->image) }}" alt="" class="w-[100%]">
                        <p>{!! $berita->content !!}</p>
                    </div>
                    <span
                        class="text-white font-semibold text-base md:text-lg bg-primary-100 py-1 px-6 absolute top-0 left-0 rounded-br-xl ">Berita
                        Desa</span>
                </div>
            </div>
            <div class="md:w-5/12 space-y-5">
                <div class="bg-primary-200 rounded-xl py-7">
                    <h1 class="text-center text-white text-2xl font-semibold">Layanan Masyarakat</h1>
                    <form class="space-y-4 mx-8" action="#" method="POST">
                        <div>
                            <label for="text" class="block font-medium leading-6 text-white text-sm">Nama</label>
                            <div class="mt-2">
                                <input id="text" name="text" type="text" autocomplete="text" required
                                    class="px-4 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset  placeholder:text-gray-400 focus:ring-2 focus:ring-inset sm:text-sm sm:leading-6 required">
                            </div>
                        </div>
                        <div>
                            <label for="email" class="block font-medium leading-6 text-white text-sm">Email</label>
                            <div class="mt-2">
                                <input id="email" name="email" type="email" autocomplete="email" required
                                    class="px-4 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset  placeholder:text-gray-400 focus:ring-2 focus:ring-inset sm:text-sm sm:leading-6 required">
                            </div>
                        </div>
                        <div>
                            <label for="text" class="block font-medium leading-6 text-white text-sm">Nik/No
                                KTP</label>
                            <div class="mt-2">
                                <input id="text" name="text" type="text" autocomplete="text" required
                                    class="px-4 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset  placeholder:text-gray-400 focus:ring-2 focus:ring-inset sm:text-sm sm:leading-6 required">
                            </div>
                        </div>
                        <div>
                            <button type="submit"
                                class="flex w-full justify-center rounded-md bg-[#ECD504] px-3 py-2 text-xl font-semibold leading-6 text-white shadow-sm hover:bg-opacity-90 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign
                                in</button>
                        </div>
                    </form>
                </div>

                <div class="rounded-xl">
                    <div class="font-semibold bg-primary-200 rounded-t-xl flex py-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="fill-white pt-1 mx-2" width="40px"
                            height="30px" viewBox="0 0 16 16">
                            <path
                                d="M0 1.75A.75.75 0 0 1 .75 1h4.253c1.227 0 2.317.59 3 1.501A3.74 3.74 0 0 1 11.006 1h4.245a.75.75 0 0 1 .75.75v10.5a.75.75 0 0 1-.75.75h-4.507a2.25 2.25 0 0 0-1.591.659l-.622.621a.75.75 0 0 1-1.06 0l-.622-.621A2.25 2.25 0 0 0 5.258 13H.75a.75.75 0 0 1-.75-.75Zm7.251 10.324l.004-5.073l-.002-2.253A2.25 2.25 0 0 0 5.003 2.5H1.5v9h3.757a3.75 3.75 0 0 1 1.994.574M8.755 4.75l-.004 7.322a3.75 3.75 0 0 1 1.992-.572H14.5v-9h-3.495a2.25 2.25 0 0 0-2.25 2.25" />
                        </svg>
                        <h1 class="text-start text-white text-xl">Berita Terbaru</h1>
                    </div>
                    <div class="border-l-2 border-b-2 border-r-2 border-[#CECECE] p-5 rounded-b-xl py-5">
                        @foreach ($beritaTerbaru as $BT)
                            <a href="/detailBerita/{{ $BT->slug }}">
                                <h1 class="py-4 font-bold hover:text-blue-700">{{ $BT->title }}</h1>
                                <hr class="border-[1.3px] border-[#CECECE]">
                            </a>
                        @endforeach
                    </div>
                </div>

                <div class="rounded-xl">
                    <div class="font-semibold bg-primary-200 rounded-t-xl flex py-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="mx-2" width="40px" height="30px"
                            viewBox="0 0 24 24">
                            <g fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2">
                                <path
                                    d="M5 7h1a2 2 0 0 0 2-2a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1a2 2 0 0 0 2 2h1a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V9a2 2 0 0 1 2-2" />
                                <path d="M9 13a3 3 0 1 0 6 0a3 3 0 0 0-6 0" />
                            </g>
                        </svg>
                        <h1 class="text-start text-white text-xl">Galeri Desa</h1>
                    </div>
                    <div class="border-l-2 border-b-2 border-r-2 border-[#CECECE] rounded-b-xl p-5 space-y-3">
                        <div>
                            <a href="#">
                                <img src="../images/kudalumping.jpg" alt="" class="w-[100%] h-[250px]">
                            </a>
                        </div>
                        <div>
                            <a href="#">
                                <img src="../images/turnament_voly.jpg" alt="" class="w-[100%] h-[250px]">
                            </a>
                        </div>
                        <div>
                            <a href="#">
                                <img src="../images/kerja_bakti.jpg" alt="" class="w-[100%] h-[250px]">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="rounded-xl">
                    <div class="font-semibold bg-primary-200 rounded-t-xl flex py-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="mx-2" width="40px" height="30px"
                            viewBox="0 0 24 24">
                            <path fill="#fff"
                                d="M12 11.5A2.5 2.5 0 0 1 9.5 9A2.5 2.5 0 0 1 12 6.5A2.5 2.5 0 0 1 14.5 9a2.5 2.5 0 0 1-2.5 2.5M12 2a7 7 0 0 0-7 7c0 5.25 7 13 7 13s7-7.75 7-13a7 7 0 0 0-7-7" />
                        </svg>
                        <h1 class="text-start text-white text-xl">Lokasi Kantor Desa</h1>
                    </div>
                    <div class="border-l-2 border-b-2 border-r-2 border-[#CECECE] rounded-b-xl p-5 space-y-3">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2990.274257380938!2d-70.56068388481569!3d41.45496659976631!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e52963ac45bbcb%3A0xf05e8d125e82af10!2sDos%20Mas!5e0!3m2!1sen!2sus!4v1671220374408!5m2!1sen!2sus"
                            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>

                <div class="rounded-xl">
                    <div class="font-semibold bg-primary-200 rounded-t-xl flex py-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="mx-2" width="40px" height="30px"
                            viewBox="0 0 24 24">
                            <g fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2">
                                <path stroke-miterlimit="5.759" d="M3 3v16a2 2 0 0 0 2 2h16" />
                                <path stroke-miterlimit="5.759" d="m7 14l4-4l4 4l6-6" />
                                <path d="M18 8h3v3" />
                            </g>
                        </svg>
                        <h1 class="text-start text-white text-xl">Statistik Desa Rawasari</h1>
                    </div>
                    <div class="border-l-2 border-b-2 border-r-2 border-[#CECECE] rounded-b-xl p-5 space-y-3">
                        <div class="md:flex gap-5 text-center font-bold text-md grid grid-col-2 md:justify-center ">
                            <div class="bg-yellow-200 w-auto md:w-36 h-28 py-6 rounded-2xl">
                                <h1>500</h1>
                                <p>Laki-Laki</p>
                            </div>
                            <div class="bg-yellow-200 w-auto md:w-36 h-28 py-6 rounded-2xl">
                                <h1>500</h1>
                                <p>Perempuan</p>
                            </div>
                            <div class="bg-yellow-200 w-auto md:w-36 h-28 py-6 rounded-2xl">
                                <h1>1000</h1>
                                <p>Total</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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
