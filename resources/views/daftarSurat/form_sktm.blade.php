<x-layout>
    <x-slot:title>{{ $title }}</x-slot:tittle>

    <button data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar" aria-controls="default-sidebar"
        type="button"
        class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 print:hidden ">
        <span class="sr-only">Open sidebar</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path clip-rule="evenodd" fill-rule="evenodd"
                d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
            </path>
        </svg>
    </button>

    <aside id="default-sidebar"
        class="fixed top-0 left-0 z-40 w-64 md:min-w-96 h-screen transition-transform -translate-x-full sm:translate-x-0 print:hidden"
        aria-label="Sidebar">
        <div class="h-full px-3 md:px-5 py-4 overflow-y-auto bg-white ">
            <div class="flex items-center gap-3 md:gap-8 ">
                <img src="../icons/logoSurat.png" alt="logo" class="inline-block size-14">
                <span class="text-base md:text-lg xl:text-2xl font-semibold font-klee-one">Surat tidak mampu</span>
            </div>

            <form class="space-y-5 mt-8" action="/dashboard/sktm" method="POST" enctype="multipart/form-data">
                @csrf
                <!-- nama -->
                <div class="">
                    <label for="nama" class="block mb-2 text-sm font-medium text-gray-900">Nama</label>
                    <input type="text" id="nama" name="nama"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full  focus:ring-primary-100 focus:border-primary-100 p-2.5"
                        required value="{{ old('nama') }}" />
                    @error('nama')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <!-- nik -->
                <div class="">
                    <label for="nik" class="block mb-2 text-sm font-medium text-gray-900">NIK</label>
                    <input type="number" id="nik" name="nik"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full 0focus:ring-primary-100 focus:border-primary-100 p-2.5"
                        required value="{{ old('nik') }}" />
                    @error('nik')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <!-- jenis kelamin -->
                <div class="">
                    <label for="gender" class="block mb-2 text-sm font-medium text-gray-900">Jenis kelamin</label>
                    <select id="gender" name="jenis_kelamin"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg  focus:ring-primary-100 block focus:border-primary-100 w-full p-2.5"
                        required>
                        <option disabled selected value> -- Select-- </option>
                        <option value="Laki-laki" {{ old('jenis_kelamin') == 'Laki-laki' ? 'selected' : '' }}>Laki-laki
                        </option>
                        <option value="Perempuan" {{ old('jenis_kelamin') == 'Perempuan' ? 'selected' : '' }}>Perempuan
                        </option>
                    </select>
                    @error('jenis_kelamin')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <!-- tempat tanggal lahir -->
                <div class="">
                    <label for="tempat" class="block mb-2 text-sm font-medium text-gray-900">Tempat,<span>
                            <label for="tanggal">Tanggal Lahir</label></span>
                        <input type="text" id="tempat" name="tempat"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full  focus:ring-primary-100 focus:border-primary-100 p-2.5 mb-5"
                            required value="{{ old('tempat') }}" />
                        @error('tempat')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                        <input type="date" id="tanggal" name="tanggal_lahir"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full  focus:ring-primary-100 focus:border-primary-100 p-2.5"
                            required value="{{ old('tanggal_lahir') }}" />
                        @error('tanggal_lahir')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                </div>
                <!-- Warganegara/ Agama -->
                <div class="">
                    <label for="agama" class="block mb-2 text-sm font-medium text-gray-900">Agama</label>
                    <input type="text" id="agama" name="agama"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full  focus:ring-primary-100 focus:border-primary-100 p-2.5"
                        required value="{{ old('agama') }}" />
                    @error('agama')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <!-- Pekerjaan -->
                <div class="">
                    <label for="pekerjaan" class="block mb-2 text-sm font-medium text-gray-900">Pekerjaan</label>
                    <input type="text" id="pekerjaan" name="pekerjaan"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full  focus:ring-primary-100 focus:border-primary-100 p-2.5"
                        required value="{{ old('pekerjaan') }}" />
                    @error('pekerjaan')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <!-- Alamat -->
                <div class="">
                    <label for="alamat" class="block mb-2 text-sm font-medium text-gray-900">Alamat Tinggal</label>
                    <input type="text" id="alamat" name="alamat"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full  focus:ring-primary-100  focus:border-primary-100 p-2.5"
                        required value="{{ old('alamat') }}" />
                    @error('alamat')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <!-- email -->
                <div class="">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                    <input type="email" id="email" name="email"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full  focus:ring-primary-100  focus:border-primary-100 p-2.5 read-only"
                        value="{{ Auth::user()->email }}" required value="{{ old('email') }}" />
                    @error('email')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div class="">
                    <label for="ktp" class="block mb-2 text-sm font-medium text-gray-900">KTP</label>
                    <input type="file" id="ktp" name="ktp"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full focus:ring-primary-100  focus:border-primary-100"
                        required />
                    @error('ktp')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div class="">
                    <button type="submit"
                        class="text-white bg-primary-100 focus:ring-2 focus:outline-none focus:ring-primary-100 font-medium rounded-lg text-sm block w-full px-5 py-2.5 text-center">Submit</button>
                </div>
            </form>
        </div>
    </aside>

    <div class="md:ml-96 flex justify-center ">
        <div
            class="max-w-[210mm] min-h-[297mm] bg-white p-8 w-full border-dashed border-4 rounded-lg border-gray-200 print:border-none print:rounded-none ">
            <header
                class="flex items-center justify-center border-b-2 print:border-b print:pb-1 relative border-black">
                <div
                    class="h-24 absolute top-0 -left-5 overflow-hidden hidden xl:block print:left-5 print:-top-2 print:block">
                    <img src="../images/logoSurat.png" alt="logo" class="h-full">
                </div>
                <div class="text-center ">
                    <h1 class="font-bold md:text-2xl tracking-wide uppercase">pemerintah kabupaten merauke</h1>
                    <strong class="font-bold md:text-lg tracking-wide uppercase">kecamatan malind</strong>
                    <h1 class="font-bold md:text-2xl tracking-wide uppercase">Kampung rawasari</h1>
                    <h5 class="font-medium text-xs tracking-wider">Jl.Anggrek - kode Pos 868686 </h5>
                </div>
            </header>

            <!-- isi surat px-2  -->
            <div class="">
                <header class="text-center mt-3">
                    <h1 class="font-bold md:text-lg uppercase underline print:underline-none ">surat keteragan tidak
                        mampu</h1>
                    <h5>Nomor : 204/0015/TRI/2021</h5>
                </header>
                {{-- <!-- isi --> --}}
                <div class="text-lg text-wrap mt-8 font-normal ">
                    <<<<<<< HEAD <p>yang bertanda tangan di bawah ini kepada kampung Rawasari, kecamatan Malind,
                        Kabupaten Merauke menerangkan dengan sebenarnya, bahwa:</p>
                        <table class="bg-white">
                            =======
                            <p>yang bertanda tangan di bawah ini kepada desa terog sawah, kecamatan Labu api,Kabupaten
                                lombok barat menerangkan dengan sebenarnya,bahwa:</p>
                            {{-- isi datdiri  --}}
                            <div class="overflow-x-auto print:overflow-hidden">
                                >>>>>>> origin/main
                                {{-- nama --}}
                                <div class="grid grid-cols-3 ">
                                    <div class="col-span-1 flex justify-between">
                                        <p>Nama </p>
                                        <p>: &nbsp;</p>
                                    </div>
                                    <div class="col-span-2 text-wrap" id="nameArea">
                                    </div>
                                </div>
                                {{-- nik --}}
                                <div class="grid grid-cols-3 ">
                                    <div class="col-span-1 flex justify-between">
                                        <p>Nik </p>
                                        <p>: &nbsp;</p>
                                    </div>
                                    <div class="col-span-2" id="nikArea">

                                    </div>
                                </div>
                                {{-- kelamin --}}
                                <div class="grid grid-cols-3 ">
                                    <div class="col-span-1 flex justify-between">
                                        <p>kelamin </p>
                                        <p>: &nbsp;</p>
                                    </div>
                                    <div class="col-span-2" id="genderArea">
                                    </div>
                                </div>
                                {{-- tempat, tanggal lahir --}}
                                <div class="grid grid-cols-3 ">
                                    <div class="col-span-1 flex justify-between">
                                        <p>Tempat, Tanggal Lahir </p>
                                        <p>: &nbsp;</p>
                                    </div>
                                    <div class="col-span-2">
                                        <span id="lahirArea"></span>,
                                        <span id="dateArea"></span>
                                    </div>
                                </div>
                                <div class="grid grid-cols-3 ">
                                    <div class="col-span-1 flex justify-between">
                                        <p class="">Warganegara / Agama </p>
                                        <p>: &nbsp;</p>
                                    </div>
                                    <div class="col-span-2">
                                        <span id="negara">Indonesia</span> / <span id="agamaArea"> </span>
                                    </div>
                                </div>
                                {{-- pekerjaan --}}
                                <div class="grid grid-cols-3 ">
                                    <div class="col-span-1 flex justify-between">
                                        <p>Pekerjaan </p>
                                        <p>: &nbsp;</p>
                                    </div>
                                    <div class="col-span-2" id="pekerjaanArea">
                                    </div>
                                </div>
                                {{-- alamat --}}
                                <div class="grid grid-cols-3 ">
                                    <div class="col-span-1 flex justify-between">
                                        <p>Alamat </p>
                                        <p>: &nbsp;</p>
                                    </div>
                                    <div class="col-span-2" id="alamatArea">
                                    </div>
                                </div>
                            </div>

                            <p class="whitespace-pre-line">
                                Nama tersebut diatas adalah benar warga Kampung Rawasari, kecamatan Malind, Kabupaten
                                Merauke. Berdasarkan keterangan yang ada pada kami benar bahwa yang bersangkutan
                                tergolong keluarga yang tidak mampu dan Surat Keterangan ini dibuat untuk
                                <strong>Beasiswa</strong>

                                Demikian surat keterangan ini dibuat, atas perhatian dan kerjasamanya kami ucapkan
                                terima kasih.
                            </p>

                            <br>
                            <!-- tanda tangan -->
                            <div class="flex flex-row text-base">
                                <div class="w-1/2 flex justify-center items-center">
                                    <<<<<<< HEAD <div class="w-fit text-center">
                                        <p>Mengetahui, </p>
                                        <P>CAMAT MALIND</P>
                                        <p class="border-b border-black mt-36"></p>
                                        =======
                                        <div class="w-fit text-center">
                                            <p>Mengetahui</p>
                                            <P>CAMAT LABUAPI</P>
                                            <p class="border-b border-black mt-36"></p>
                                            {{ \Carbon\Carbon::now()->format('d-m-Y') }}
                                        </div>
                                </div>
                                <div class="w-1/2 text-center">
                                    <div class="w-fit text-center ">
                                        <p>TERONG SAWAH,<span id="dateSurat"></span></p>
                                        <P>KEPALA DESA TERONG SAWAH</P>
                                        <p class="border-b border-black mt-36"></p>
                                        {{ \Carbon\Carbon::now()->format('d-m-Y') }}
                                    </div>
                                    >>>>>>> origin/main
                                </div>

                            </div>
                            <div class="w-1/2 text-center">
                                <div class="w-fit text-center ">
                                    <p>Rawasari, 20 juni 2023<span id="dateSurat"></span></p>
                                    <P>KEPALA KAMPUNG RAWASARI</P>
                                    <p class="border-b border-black mt-36"></p>
                                </div>
                            </div>
                </div>
            </div>
        </div>
    </div>
    <<<<<<< HEAD </div>
        <script src="../js/sktm.js"></script>
</x-layout>
=======
</div>
<script src="../js/sktm.js"></script>
</x-layout>
>>>>>>> origin/main
