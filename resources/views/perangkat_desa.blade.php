<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-navbar :background="'bg-transparent'"></x-navbar>
    <x-jumbotron>
        <span class="text-secondary-200">Perangkat</span> Desa
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
                        Perangkat Desa</h1>
                </a>
            </div>
        </div>
    </section>

    <div class="px-8">
        <div class="gap-5 grid md:grid-cols-4 grid-cols-1">
            <div
                class="hover:bg-primary-200 bg-white border-2 p-5 justify-center text-center text-black duration-300 ease-in-out transition space-y-2 hover:text-white rounded-xl drop-shadow-lg">
                <div class="flex justify-center items-center">
                    <img src="images/foto_kades.png" alt="" class="border-2 rounded-xl">
                </div>
                <h1 class="font-semibold text-xl">Wahyu Anang Zulfikri</h1>
                <p class="text-sm font-medium">KEPALA DESA</p>
            </div>
            <div
                class="hover:bg-primary-200 bg-white border-2 p-5 justify-center text-center text-black duration-300 ease-in-out transition space-y-2 hover:text-white rounded-xl drop-shadow-lg">
                <div class="flex justify-center">
                    <img src="images/foto_kades.png" alt="" class="border-2 rounded-xl">
                </div>
                <h1 class="font-semibold text-xl">Wahyu Anang Zulfikri</h1>
                <p class="text-sm font-medium">KEPALA DESA</p>
            </div>
            <div
                class="hover:bg-primary-200 bg-white border-2 p-5 justify-center text-center text-black duration-300 ease-in-out transition space-y-2 hover:text-white rounded-xl drop-shadow-lg">
                <div class="flex justify-center">
                    <img src="images/foto_kades.png" alt="" class="border-2 rounded-xl">
                </div>
                <h1 class="font-semibold text-xl">Wahyu Anang Zulfikri</h1>
                <p class="text-sm font-medium">KEPALA DESA</p>
            </div>
            <div
                class="hover:bg-primary-200 bg-white border-2 p-5 justify-center text-center text-black duration-300 ease-in-out transition space-y-2 hover:text-white rounded-xl drop-shadow-lg">
                <div class="flex justify-center">
                    <img src="images/foto_kades.png" alt="" class="border-2 rounded-xl">
                </div>
                <h1 class="font-semibold text-xl">Wahyu Anang Zulfikri</h1>
                <p class="text-sm font-medium">KEPALA DESA</p>
            </div>
            <div
                class="hover:bg-primary-200 bg-white border-2 p-5 justify-center text-center text-black duration-300 ease-in-out transition space-y-2 hover:text-white rounded-xl drop-shadow-lg">
                <div class="flex justify-center">
                    <img src="images/foto_kades.png" alt="" class="border-2 rounded-xl">
                </div>
                <h1 class="font-semibold text-xl">Wahyu Anang Zulfikri</h1>
                <p class="text-sm font-medium">KEPALA DESA</p>
            </div>
            <div
                class="hover:bg-primary-200 bg-white border-2 p-5 justify-center text-center text-black duration-300 ease-in-out transition space-y-2 hover:text-white rounded-xl drop-shadow-lg">
                <div class="flex justify-center">
                    <img src="images/foto_kades.png" alt="" class="border-2 rounded-xl">
                </div>
                <h1 class="font-semibold text-xl">Wahyu Anang Zulfikri</h1>
                <p class="text-sm font-medium">KEPALA DESA</p>
            </div>
            <div
                class="hover:bg-primary-200 bg-white border-2 p-5 justify-center text-center text-black duration-300 ease-in-out transition space-y-2 hover:text-white rounded-xl drop-shadow-lg">
                <div class="flex justify-center">
                    <img src="images/foto_kades.png" alt="" class="border-2 rounded-xl">
                </div>
                <h1 class="font-semibold text-xl">Wahyu Anang Zulfikri</h1>
                <p class="text-sm font-medium">KEPALA DESA</p>
            </div>
            <div
                class="hover:bg-primary-200 bg-white border-2 p-5 justify-center text-center text-black duration-300 ease-in-out transition space-y-2 hover:text-white rounded-xl drop-shadow-lg">
                <div class="flex justify-center">
                    <img src="images/foto_kades.png" alt="" class="border-2 rounded-xl">
                </div>
                <h1 class="font-semibold text-xl">Wahyu Anang Zulfikri</h1>
                <p class="text-sm font-medium">KEPALA DESA</p>
            </div>
        </div>
    </div>


    <!-- manfaat start -->
    <!-- content  end -->

    <x-apbd></x-apbd>
    <x-footer></x-footer>
    <script src="js/script.js"></script>
    <script src="js/load.js"></script>
</x-layout>
