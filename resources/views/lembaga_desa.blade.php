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
                        Lembaga Desa</h1>
                </a>
            </div>
        </div>
    </section>

    <div class="px-8 justify-center md:flex">
        <div class="space-y-8">
            <div>
                <h1 class="md:text-3xl text-2xl font-bold text-primary-200">Lembaga Desa</h1>
            </div>


            <div class="relative overflow-x-auto">
                <table
                    class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 border-b-[1px] border-r-[1px] border-l-[1px]">
                    <thead class="text-sm text-white uppercase bg-primary-200 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-[120px] text-center border-r-2">
                                No
                            </th>
                            <th scope="col" class="px-[120px] text-center border-r-2">
                                Nama Lembaga
                            </th>
                            <th scope="col" class="px-[120px] text-center border-r-2">
                                Singkatan
                            </th>
                            <th scope="col" class="px-[123px] py-3 text-center">
                                Alamat Kantor
                            </th>
                        </tr>
                    </thead>
                    <tbody class="text-center  uppercase">
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white text-center">
                                1
                            </th>
                            <td class="px-6 py-4">
                                KARANG TARUNA RAWA SARI
                            </td>
                            <td class="px-6 py-4">
                                KTRS
                            </td>
                            <td class="px-6 py-4">
                                Kampung Rawasari
                            </td>
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white ">
                                2
                            </th>
                            <td class="px-6 py-4">
                                limnas rawasari
                            </td>
                            <td class="px-6 py-4">
                                limnas
                            </td>
                            <td class="px-6 py-4">
                                kampung rawasari
                            </td>
                        </tr>
                        <tr class="bg-white dark:bg-gray-800 text-center">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                3
                            </th>
                            <td class="px-6 py-4">
                                POSYANDU RAWA SARI
                            </td>
                            <td class="px-6 py-4">
                                PRS
                            </td>
                            <td class="px-6 py-4">
                                kampung rawasari
                            </td>
                        </tr>
                    </tbody>
                </table>
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
