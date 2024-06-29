<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-navbar :background="'bg-transparent'"></x-navbar>
    <x-jumbotron>
        <span class="text-secondary-200">Struktur</span> Organisasi Desa
    </x-jumbotron>

    <link rel="stylesheet" href="css/load.css">

    <!-- content  start -->
    <section class="py-8">
        <div class="container mx-auto space-y-3">
            <div class="bg-primary-200 p-4 flex">
                <svg xmlns="http://www.w3.org/2000/svg" width="50px" height="30px" viewBox="0 0 24 24">
                    <path fill="white"
                        d="M10 19v-5h4v5c0 .55.45 1 1 1h3c.55 0 1-.45 1-1v-7h1.7c.46 0 .68-.57.33-.87L12.67 3.6c-.38-.34-.96-.34-1.34 0l-8.36 7.53c-.34.3-.13.87.33.87H5v7c0 .55.45 1 1 1h3c.55 0 1-.45 1-1" />
                </svg>
                <a href="#">
                    <h1 class="text-white font-normal text-xl hover:text-black transition ease-in-out duration-300 ">/
                        Struktur Organisasi</h1>
                </a>
            </div>
        </div>
    </section>


    <section class="md:flex py-4">
        <div class="px-8 md:w-5/12">
            <div class="click">
                <div class="flex space-x-2 space-y-0 display-on-check text-decoration-none cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25px" height="25px" viewBox="0 0 9 16">
                        <path fill="black"
                            d="M7.62 7.18L2.79 3.03c-.7-.6-1.79-.1-1.79.82v8.29c0 .93 1.09 1.42 1.79.82l4.83-4.14c.5-.43.5-1.21 0-1.64" />
                    </svg>

                    <h1 class="hover:text-[#06A606] font-medium md:text-md text-sm toggle-text"
                        data-target="Struktur Organisasi">Struktur Organisasi</h1>
                </div>
                <div class="py-4">
                    <hr class="border-[1.2px] border-[#CECECE]">
                </div>
            </div>

            <div class="click">
                <div class="flex space-x-2 space-y-0 display-on-check text-decoration-none cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25px" height="25px" viewBox="0 0 9 16">
                        <path fill="black"
                            d="M7.62 7.18L2.79 3.03c-.7-.6-1.79-.1-1.79.82v8.29c0 .93 1.09 1.42 1.79.82l4.83-4.14c.5-.43.5-1.21 0-1.64" />
                    </svg>
                    <h1 class="hover:text-[#06A606] font-medium md:text-md text-sm toggle-text"
                        data-target="Kepala Desa">Kepala Desa</h1>
                </div>
                <div class="py-4">
                    <hr class="border-[1.2px] border-[#CECECE]">
                </div>
            </div>

            <div>
                <div class="flex space-x-2 space-y-0 display-on-check text-decoration-none cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25px" height="25px" viewBox="0 0 9 16">
                        <path fill="black"
                            d="M7.62 7.18L2.79 3.03c-.7-.6-1.79-.1-1.79.82v8.29c0 .93 1.09 1.42 1.79.82l4.83-4.14c.5-.43.5-1.21 0-1.64" />
                    </svg>
                    <h1 class="hover:text-[#06A606] font-medium md:text-md text-sm">Sekretaris</h1>
                </div>
                <div class="py-4">
                    <hr class="border-[1.2px] border-[#CECECE]">
                </div>
            </div>

            <div>
                <div class="flex space-x-2 space-y-0 display-on-check text-decoration-none cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25px" height="25px" viewBox="0 0 9 16">
                        <path fill="black"
                            d="M7.62 7.18L2.79 3.03c-.7-.6-1.79-.1-1.79.82v8.29c0 .93 1.09 1.42 1.79.82l4.83-4.14c.5-.43.5-1.21 0-1.64" />
                    </svg>
                    <h1 class="hover:text-[#06A606] font-medium md:text-md text-sm">Kasi Pemerintahan</h1>
                </div>
                <div class="py-4">
                    <hr class="border-[1.2px] border-[#CECECE]">
                </div>
            </div>

            <div>
                <div class="flex space-x-2 space-y-0 display-on-check text-decoration-none cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25px" height="25px" viewBox="0 0 9 16">
                        <path fill="black"
                            d="M7.62 7.18L2.79 3.03c-.7-.6-1.79-.1-1.79.82v8.29c0 .93 1.09 1.42 1.79.82l4.83-4.14c.5-.43.5-1.21 0-1.64" />
                    </svg>
                    <h1 class="hover:text-[#06A606] font-medium md:text-md text-sm">Kasi Pelayanan</h1>
                </div>
                <div class="py-4">
                    <hr class="border-[1.2px] border-[#CECECE]">
                </div>
            </div>

            <div>
                <div class="flex space-x-2 space-y-0 display-on-check text-decoration-none cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25px" height="25px" viewBox="0 0 9 16">
                        <path fill="black"
                            d="M7.62 7.18L2.79 3.03c-.7-.6-1.79-.1-1.79.82v8.29c0 .93 1.09 1.42 1.79.82l4.83-4.14c.5-.43.5-1.21 0-1.64" />
                    </svg>
                    <h1 class="hover:text-[#06A606] font-medium md:text-md text-sm">Kasi Kesejahteraan</h1>
                </div>
                <div class="py-4">
                    <hr class="border-[1.2px] border-[#CECECE]">
                </div>
            </div>

            <div>
                <div class="flex space-x-2 space-y-0 display-on-check text-decoration-none cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25px" height="25px" viewBox="0 0 9 16">
                        <path fill="black"
                            d="M7.62 7.18L2.79 3.03c-.7-.6-1.79-.1-1.79.82v8.29c0 .93 1.09 1.42 1.79.82l4.83-4.14c.5-.43.5-1.21 0-1.64" />
                    </svg>
                    <h1 class="hover:text-[#06A606] font-medium md:text-md text-sm">Kaur Tata Usaha dan Umum</h1>
                </div>
                <div class="py-4">
                    <hr class="border-[1.2px] border-[#CECECE]">
                </div>
            </div>

            <div>
                <div class="flex space-x-2 space-y-0 display-on-check text-decoration-none cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25px" height="25px" viewBox="0 0 9 16">
                        <path fill="black"
                            d="M7.62 7.18L2.79 3.03c-.7-.6-1.79-.1-1.79.82v8.29c0 .93 1.09 1.42 1.79.82l4.83-4.14c.5-.43.5-1.21 0-1.64" />
                    </svg>
                    <h1 class="hover:text-[#06A606] font-medium md:text-md text-sm">Kaur Keuangan</h1>
                </div>
                <div class="py-4">
                    <hr class="border-[1.2px] border-[#CECECE]">
                </div>
            </div>

            <div>
                <div class="flex space-x-2 space-y-0 display-on-check text-decoration-none cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25px" height="25px" viewBox="0 0 9 16">
                        <path fill="black"
                            d="M7.62 7.18L2.79 3.03c-.7-.6-1.79-.1-1.79.82v8.29c0 .93 1.09 1.42 1.79.82l4.83-4.14c.5-.43.5-1.21 0-1.64" />
                    </svg>
                    <h1 class="hover:text-[#06A606] font-medium md:text-md text-sm">Kaur Perencanaan</h1>
                </div>
                <div class="py-4">
                    <hr class="border-[1.2px] border-[#CECECE]">
                </div>
            </div>

            <div>
                <div class="flex space-x-2 space-y-0 display-on-check text-decoration-none cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25px" height="25px" viewBox="0 0 9 16">
                        <path fill="black"
                            d="M7.62 7.18L2.79 3.03c-.7-.6-1.79-.1-1.79.82v8.29c0 .93 1.09 1.42 1.79.82l4.83-4.14c.5-.43.5-1.21 0-1.64" />
                    </svg>
                    <h1 class="hover:text-[#06A606] font-medium md:text-md text-sm">Kadus</h1>
                </div>
                <div class="py-4">
                    <hr class="border-[1.2px] border-[#CECECE]">
                </div>
            </div>
        </div>

        {{-- load start --}}

        <div class="md:w-7/12 mx-8 space-y-5 content-display transition ease-in-out duration-300">
            <div class="md:py-5 content-title md:text-3xl text-lg font-bold text-primary-200"></div>
            <div class="content-image"></div>
            <div class="content-description"></div>
        </div>

        {{-- load end --}}
    </section>

    <div id="kepala-desa-content" class="hidden">
        <h1>Kepala Desa</h1>
        <img src="images/kudalumping.jpg" alt="Kepala Desa">
        <p>Ini adalah deskripsi khusus untuk Kepala Desa.</p>
    </div>
    <!-- manfaat start -->
    <!-- content  end -->

    <x-apbd></x-apbd>
    <x-footer></x-footer>
    <script src="js/script.js"></script>
    <script src="js/load.js"></script>
</x-layout>
