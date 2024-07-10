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

    <section class="px-8 space-y-5">
        <h1 class="md:text-3xl text-2xl font-bold text-primary-200">Karang Taruna Kampung Rawasari</h1>
        <div class="md:flex py-5">
            <div class="md:w-5/12">
                <img src="icons/karangtaruna.jpg" alt="">
            </div>
            <div class="md:w-7/12 space-y-2 font-semibold py-8">
                <div>
                    <div>Nama Lembaga</div>
                </div>
                <div class="py-2">
                    <hr class="border-2">
                </div>
                <div>
                    <div>Singkatan</div>
                </div>
                <div class="py-2">
                    <hr class="border-2">
                </div>
                <div>
                    <div>Dasar Hukum</div>
                </div>
                <div class="py-2">
                    <hr class="border-2">
                </div>
                <div>
                    <div>Alamat Kantor</div>
                </div>
                <div class="py-2">
                    <hr class="border-2">
                </div>
            </div>
        </div>
    </section>

    {{-- profile --}}
    <div class="rounded-xl px-8 py-8">
        <div class="font-semibold bg-primary-200 rounded-t-xl flex py-3">
            <svg xmlns="http://www.w3.org/2000/svg" class="fill-white pt-1 mx-2" width="40px" height="30px"
                viewBox="0 0 24 24">
                <g fill="none" stroke="white" stroke-width="2.5">
                    <path stroke-linejoin="round"
                        d="M4 18a4 4 0 0 1 4-4h8a4 4 0 0 1 4 4a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2z" />
                    <circle cx="12" cy="7" r="3" />
                </g>
            </svg>
            <h1 class="text-start text-white text-xl">Profile</h1>
        </div>
        <div class="border-l-2 border-b-2 border-r-2 border-[#CECECE] p-5 rounded-b-xl py-5">
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veritatis laborum iusto debitis, quasi,
                provident animi enim, error a fugit eum aliquid culpa ea officia natus vel fugiat blanditiis cum
                mollitia repellat similique quam temporibus recusandae unde! Quos totam libero, quia quam saepe minus
                repudiandae laborum accusamus itaque reiciendis sequi corrupti ullam, natus consequuntur placeat magni
                eveniet. Saepe ea, itaque facere quidem labore aperiam eaque excepturi ipsum quibusdam optio aliquid qui
                accusamus corporis temporibus! Aliquid maxime voluptatum ab et suscipit dolorum praesentium minima
                itaque accusamus est consequatur dolore, libero quas consequuntur quia explicabo quod mollitia ex atque
                ducimus! Quasi, accusantium libero.</p>

        </div>
    </div>

    {{-- visi misi --}}
    <div class="rounded-xl px-8 py-8">
        <div class="font-semibold bg-primary-200 rounded-t-xl flex py-3">
            <svg xmlns="http://www.w3.org/2000/svg" class="fill-white pt-1 mx-2" width="40px" height="30px"
                viewBox="0 0 16 16">
                <path fill="white"
                    d="M0 1.75A.75.75 0 0 1 .75 1h4.253c1.227 0 2.317.59 3 1.501A3.74 3.74 0 0 1 11.006 1h4.245a.75.75 0 0 1 .75.75v10.5a.75.75 0 0 1-.75.75h-4.507a2.25 2.25 0 0 0-1.591.659l-.622.621a.75.75 0 0 1-1.06 0l-.622-.621A2.25 2.25 0 0 0 5.258 13H.75a.75.75 0 0 1-.75-.75Zm7.251 10.324l.004-5.073l-.002-2.253A2.25 2.25 0 0 0 5.003 2.5H1.5v9h3.757a3.75 3.75 0 0 1 1.994.574M8.755 4.75l-.004 7.322a3.75 3.75 0 0 1 1.992-.572H14.5v-9h-3.495a2.25 2.25 0 0 0-2.25 2.25" />
            </svg>
            <h1 class="text-start text-white text-xl">Visi & Misi</h1>
        </div>
        <div class="border-l-2 border-b-2 border-r-2 border-[#CECECE] p-5 rounded-b-xl py-5 text-center">
            <div class=" space-y-4">
                <h1 class="text-2xl font-bold text-primary-200">Visi</h1>
                <p>“Menjadi organisasi pemuda dan remaja yang menjadi kekuatan sosial yang aktif dalam mengembangkan
                    potensi diri dan memberikan kontribusi positif bagi masyarakat.”</p>
            </div>
            <div class="py-5 space-y-4">
                <h1 class="text-2xl font-bold text-primary-200">Misi</h1>
                <p>
                    Karang Taruna bertekad untuk menjadi kekuatan sosial yang proaktif dalam mengembangkan potensi
                    pemuda dan remaja. Kami berkomitmen untuk menyelenggarakan program-program yang mendukung
                    pengembangan intelektual, kreatif, dan kepemimpinan anggota kami. Melalui kegiatan sosial seperti
                    pengabdian kepada masyarakat, bantuan sosial, dan program kepedulian lingkungan, kami berupaya
                    memberikan kontribusi yang positif bagi masyarakat. Kami juga mendukung pembinaan nilai-nilai
                    kebangsaan, persatuan, dan kemanusiaan, serta memfasilitasi pelatihan kepemimpinan untuk membentuk
                    generasi pemuda yang kompeten dan berkolaborasi. Dengan berkolaborasi erat dengan pemerintah,
                    lembaga swadaya masyarakat, dan sektor swasta, kami bertujuan menciptakan sinergi yang kuat dalam
                    mencapai tujuan bersama untuk kemajuan dan kesejahteraan bersama.
                </p>
            </div>
        </div>
    </div>
    </div>

    {{-- tugas pokok --}}
    <div class="rounded-xl px-8 py-8">
        <div class="font-semibold bg-primary-200 rounded-t-xl flex py-3">
            <svg xmlns="http://www.w3.org/2000/svg" class="fill-white pt-1 mx-2" width="40px" height="30px"
                viewBox="0 0 24 24">
                <g fill="none">
                    <path
                        d="M24 0v24H0V0zM12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035q-.016-.005-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427q-.004-.016-.017-.018m.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093q.019.005.029-.008l.004-.014l-.034-.614q-.005-.019-.02-.022m-.715.002a.02.02 0 0 0-.027.006l-.006.014l-.034.614q.001.018.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01z" />
                    <path fill="white"
                        d="M15 2c.683 0 1.287.343 1.647.866l.085.134H18a2 2 0 0 1 1.995 1.85L20 5v12a5 5 0 0 1-4.783 4.995L15 22H6a2 2 0 0 1-1.995-1.85L4 20V5a2 2 0 0 1 1.85-1.995L6 3h1.268a2 2 0 0 1 1.563-.993L9 2zM7 5H6v15h9a3 3 0 0 0 3-3V5h-1a2 2 0 0 1-2 2H9a2 2 0 0 1-2-2m5 9a1 1 0 0 1 .117 1.993L12 16H9a1 1 0 0 1-.117-1.993L9 14zm3-4a1 1 0 1 1 0 2H9a1 1 0 1 1 0-2zm0-6H9v1h6z" />
                </g>
            </svg>
            <h1 class="text-start text-white text-xl">Tugas & Pokok</h1>
        </div>
        <div class="border-l-2 border-b-2 border-r-2 border-[#CECECE] p-5 rounded-b-xl py-5">
            <h1>Tugas pokok Karang Taruna dapat diuraikan sebagai berikut:</h1>
            <p> 1. Mengembangkan potensi dan kreativitas generasi muda. <br>
                2. Meningkatkan kesadaran sosial dan kepedulian lingkungan. <br>
                3. Mengorganisir kegiatan sosial dan kebudayaan. <br>
                4. Mendorong partisipasi aktif dalam pembangunan masyarakat. <br>
                5. Menyediakan wadah untuk pembinaan kepemimpinan dan keterampilan sosial.</p>
        </div>
    </div>

    {{-- kepengurusan --}}
    <div class="rounded-xl px-8 py-8">
        <div class="font-semibold bg-primary-200 rounded-t-xl flex py-3">
            <svg xmlns="http://www.w3.org/2000/svg" class="fill-white pt-1 mx-2" width="40px" height="30px"
                viewBox="0 0 24 24">
                <path fill="white"
                    d="M14.754 10c.966 0 1.75.784 1.75 1.75v4.749a4.501 4.501 0 0 1-9.002 0V11.75c0-.966.783-1.75 1.75-1.75zm0 1.5H9.252a.25.25 0 0 0-.25.25v4.749a3.001 3.001 0 0 0 6.002 0V11.75a.25.25 0 0 0-.25-.25M3.75 10h3.381a2.74 2.74 0 0 0-.618 1.5H3.75a.25.25 0 0 0-.25.25v3.249a2.5 2.5 0 0 0 3.082 2.433c.085.504.24.985.453 1.432Q6.539 18.999 6 19a4 4 0 0 1-4-4.001V11.75c0-.966.784-1.75 1.75-1.75m13.125 0h3.375c.966 0 1.75.784 1.75 1.75V15a4 4 0 0 1-5.03 3.866c.214-.448.369-.929.455-1.433q.277.066.575.067a2.5 2.5 0 0 0 2.5-2.5v-3.25a.25.25 0 0 0-.25-.25h-2.757a2.74 2.74 0 0 0-.618-1.5M12 3a3 3 0 1 1 0 6a3 3 0 0 1 0-6m6.5 1a2.5 2.5 0 1 1 0 5a2.5 2.5 0 0 1 0-5m-13 0a2.5 2.5 0 1 1 0 5a2.5 2.5 0 0 1 0-5m6.5.5a1.5 1.5 0 1 0 0 3a1.5 1.5 0 0 0 0-3m6.5 1a1 1 0 1 0 0 2a1 1 0 0 0 0-2m-13 0a1 1 0 1 0 0 2a1 1 0 0 0 0-2" />
            </svg>
            <h1 class="text-start text-white text-xl">Kepengurusan</h1>
        </div>
        <div class="border-l-2 border-b-2 border-r-2 border-[#CECECE] p-5 rounded-b-xl py-5">
            <div class="relative overflow-x-auto">
                <table
                    class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 border-b-[1px] border-r-[1px] border-l-[1px]">
                    <thead class="text-sm text-white uppercase bg-primary-200 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-[120px] text-center border-r-2">
                                No
                            </th>
                            <th scope="col" class="px-[120px] text-center border-r-2">
                                Nama
                            </th>
                            <th scope="col" class="px-[120px] text-center border-r-2">
                                Jabatan
                            </th>
                            <th scope="col" class="px-[123px] py-3 text-center">
                                Pendidikan
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
                                Guido
                            </td>
                            <td class="px-6 py-4">
                                Ketua
                            </td>
                            <td class="px-6 py-4">
                                S1-Informatika
                            </td>
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white ">
                                2
                            </th>
                            <td class="px-6 py-4">
                                Arie
                            </td>
                            <td class="px-6 py-4">
                                Wakil Ketua
                            </td>
                            <td class="px-6 py-4">
                                S1-Informatika
                            </td>
                        </tr>
                        <tr class="bg-white dark:bg-gray-800 text-center">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                3
                            </th>
                            <td class="px-6 py-4">
                                Andi
                            </td>
                            <td class="px-6 py-4">
                                Sekretaris 1
                            </td>
                            <td class="px-6 py-4">
                                S1-Informatika
                            </td>
                        </tr>
                        <tr class="bg-white dark:bg-gray-800 text-center">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                4
                            </th>
                            <td class="px-6 py-4">
                                Wahyu
                            </td>
                            <td class="px-6 py-4">
                                Sekretaris 2
                            </td>
                            <td class="px-6 py-4">
                                S1-Informatika
                            </td>
                        </tr>
                        <tr class="bg-white dark:bg-gray-800 text-center">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                5
                            </th>
                            <td class="px-6 py-4">
                                Shandika
                            </td>
                            <td class="px-6 py-4">
                                Bendahara
                            </td>
                            <td class="px-6 py-4">
                                S1-Informatika
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
