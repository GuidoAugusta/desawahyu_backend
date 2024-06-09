<x-layout>
  <x-slot:title>{{ $title }}</x-slot:tittle>

  <button data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar" aria-controls="default-sidebar"
  type="button" class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 print:hidden ">
    <span class="sr-only">Open sidebar</span>
    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
        xmlns="http://www.w3.org/2000/svg">
        <path clip-rule="evenodd" fill-rule="evenodd"
            d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
        </path>
    </svg>
  </button>

  <aside id="default-sidebar" class="fixed top-0 left-0 z-40 w-64 md:min-w-96 h-screen transition-transform -translate-x-full sm:translate-x-0 print:hidden" aria-label="Sidebar">
    <div class="h-full px-3 md:px-5 py-4 overflow-y-auto bg-white ">
      <div class="flex items-center gap-3 md:gap-8 ">
        <img src="../icons/logoSurat.png" alt="logo" class="inline-block size-14">
        <span class="text-base md:text-lg xl:text-2xl font-semibold font-klee-one">Surat tidak mampu</span>
      </div>

      <form class="space-y-5 mt-8">
        <!-- nama -->
        <div class="">
          <label for="nama" class="block mb-2 text-sm font-medium text-gray-900">Nama</label>
          <input type="text" id="nama" name="nama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full  focus:ring-primary-100 focus:border-primary-100 p-2.5 " required autocomplete="off" />
        </div>
        <!-- nik -->
        <div class="">
          <label for="nik" class="block mb-2 text-sm font-medium text-gray-900">NIK</label>
          <input type="number" id="nik" name="nik" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full 0focus:ring-primary-100 focus:border-primary-100 p-2.5" required autocomplete="off" />
        </div>
        <!-- jenis kelamin -->
        <div class="">
          <label for="gender" class="block mb-2 text-sm font-medium text-gray-900">Jenis kelamin</label>
          <select id="gender" name="kelamin" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg  focus:ring-primary-100 block focus:border-primary-100 w-full p-2.5" required>
          <option disabled selected value> -- Select-- </option>
            <option>Laki-laki</option>
            <option>Perempuan</option>
          </select>
        </div>
        <!-- tempat tanggal lahir -->
        <div class="">
          <label for="tempat" class="block mb-2 text-sm font-medium text-gray-900">Tempat,<span>
          <label for="tanggal">Tanggal Lahir</label></span>
          <input type="text" id="tempat" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full  focus:ring-primary-100 focus:border-primary-100 p-2.5 mb-5" required autocomplete="off" />
          <input type="date" id="tanggal" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full  focus:ring-primary-100 focus:border-primary-100 p-2.5 " required />
        </div>
        <!-- Warganegara/ Agama -->
        <div class="">
          <label for="agama" class="block mb-2 text-sm font-medium text-gray-900">Agama</label>
          <input type="text" id="agama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full  focus:ring-primary-100 focus:border-primary-100 p-2.5 " required autocomplete="off" />
        </div>
        <!-- Pekerjaan -->
        <div class="">
          <label for="pekerjaan" class="block mb-2 text-sm font-medium text-gray-900">Pekerjaan</label>
          <input type="text" id="pekerjaan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full  focus:ring-primary-100 focus:border-primary-100 p-2.5 " required autocomplete="off" />
        </div>
        <!-- Alamat -->
        <div class="">
          <label for="alamat" class="block mb-2 text-sm font-medium text-gray-900">Alamat Tinggal</label>
          <input type="text" id="alamat" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full  focus:ring-primary-100  focus:border-primary-100 p-2.5 " required autocomplete="off" />
        </div>
        <div class="md:flex md:gap-5 space-y-4 md:space-y-0 ">
          <button type="submit" class="text-white  bg-primary-100  focus:ring-2 focus:outline-none focus:ring-primary-100 font-medium rounded-lg text-sm block w-full  md:w-32   px-5 py-2.5 text-center">Submit</button>
          <button type="button" id="printPDF" class="text-primary-200 border border-primary-200  focus:ring-2 focus:outline-none ring-primary-100 font-medium rounded-lg block w-full text-sm md:w-32 px-5 py-2.5 text-center hover:bg-primary-100 transition ease-in-out duration-500 hover:text-white">Download</button>
        </div>
      </form>
    </div>
  </aside>

  <div class="md:ml-96 flex justify-center py-5 ">
    <div class="max-w-[210mm] min-h-[297mm] bg-white p-8 w-full border-dashed border-4 rounded-lg border-gray-200 print:border-none print:rounded-none ">
      <header class="flex items-center justify-center border-b-4 relative border-black">
        <div class="h-24 absolute top-0 -left-5 overflow-hidden hidden xl:block print:left-5 print:-top-1 print:block">
        <img src="../images/logoSurat.png" alt="logo" class="h-full">
        </div>
        <div class="text-center ">
          <h1 class="font-bold md:text-2xl tracking-wide uppercase">PEMERINTAH Kabupaten lombok barat</h1>
          <strong class="font-bold md:text-lg tracking-wide uppercase">KECAMATAN LANIAPPAI</strong>
          <h1 class="font-bold md:text-2xl tracking-wide uppercase">Desa terong tawah</h1>
          <h5 class="font-medium text-xs tracking-wider">Jl.TGH. Mansyur - kode Pos 868686 </h5>
        </div>
      </header>

      <!-- isi surat px-2  -->
      <div class="">
        <header class="text-center mt-3">
          <h1 class="font-bold md:text-lg uppercase underline">surat keteragan tidak mampu</h1>
          <h5>Nomor : 204/0015/TRI/2021</h5>
        </header>
        <!-- isi -->
        <div class="text-lg text-wrap mt-8 font-normal ">
          <p>yang bertanda tangan di bawah ini kepada desa terog sawah, kecamatan Labu api,Kabupaten lombok barat menerangkan dengan sebenarnya,bahwa:</p>
          <table class="bg-white">
            {{-- nama --}}
            <tr class="">
              <td class="min-w-60">Nama</td>
              <td class="">:&nbsp;</td>
              <td id="nameArea" class="text-wrap"></td>
            </tr>
            <!-- nik -->
            <tr>
              <td class="whitespace-nowrap">NIK</td>
              <td>:&nbsp;</td>
              <td id="nikArea"></td>
            </tr>
            <!-- kelamin -->
            <tr>
              <td class="whitespace-nowrap">Jenis kelamin</td>
              <td>:&nbsp;</td>
              <td id="genderArea" class=""></td>
            </tr>
            <!-- tgl lahir -->
            <tr>
              <td class="whitespace-nowrap">Tempat, Tanggal Lahir</td>
              <td>:&nbsp;</td>
              <td class="">
                <span id="lahirArea"></span>,
                <span id="dateArea"></span>
              </td>
            </tr>
            <!-- wni -->
            <tr>
              <td class="whitespace-nowrap">Warganegara/ Agama</td>
              <td>:&nbsp;</td>
              <td class="">
                <span id="negara">Indonesia</span> / <span id="agamaArea"> </span>
              </td>
            </tr>
            <!-- pekerjaan -->
            <tr>
              <td class="whitespace-nowrap">Pekerjaan</td>
              <td>:&nbsp;</td>
              <td id="pekerjaanArea" class=""></td>
            </tr>
            <!-- alamat -->
            <tr>
              <td class="whitespace-nowrap">Alamat</td>
              <td>:&nbsp;</td>
              <td id="alamatArea" class=""></td>
            </tr>
          </table>

          <p class="whitespace-pre-line">Nama tersebut diatas adalah benar warga Desa Terong Tawah, Kecamatan Labuapi, Kabupaten Lombok Barat. Berdasarkan keterangan yang ada pada kami benar bahwa yang bersangkutan tergolong keluarga yang tidak mampu. Surat Keterangan ini dibuat untuk <strong>Beasiswa.</strong>
          Demikian surat keterangan ini dibuat, atas perhatian dan kerjasamanya kami ucapkan terima kasih.
          </p>
          <br>
          <!-- tanda tangan -->
          <div class="flex flex-row text-base">
            <div class="w-1/2 flex justify-center items-center">
              <div class="w-fit text-center">
                <p>Mengetahui</p>
                <P>CAMAT LABUAPI</P>
                <p class="border-b border-black mt-36"></p>
              </div>
              </div>
                <div class="w-1/2 text-center">
                    <div class="w-fit text-center ">
                      <p>TERONG SAWAH,<span id="dateSurat"></span></p>
                      <P>KEPALA DESA TERONG SAWAH</P>
                      <p class="border-b border-black mt-36"></p>
                    </div>
                </div>
              </div>
            </div>
        </div>
    </div>
</div>
<script>
  document.addEventListener('DOMContentLoaded',function(){
      const inputNama = document.getElementById('nama');
      const inputNik = document.getElementById('nik');
      const inputGender = document.getElementById('gender');
      const inputTempatLahir = document.getElementById('tempat');
      const inputTanggalLahir = document.getElementById('tanggal');
      const inputAgama = document.getElementById('agama');
      const inputPekerjaan = document.getElementById('pekerjaan');
      const inputAlamat = document.getElementById('alamat');


      inputNama.addEventListener('input',function(){
          const nameArea = document.getElementById('nameArea');
          nameArea.innerText = inputNama.value;
      })

      //hanya nomer
      inputNik.addEventListener('input',function(){
          const nikArea = document.getElementById('nikArea');
          nikArea.innerText = inputNik.value;
      })

      inputGender.addEventListener('input',function () {
          const genderArea = document.getElementById('genderArea');
          genderArea.innerText = inputGender.value;
      })

      inputTempatLahir.addEventListener('input',function(){
          const lahirArea = document.getElementById('lahirArea');
          lahirArea.innerText = inputTempatLahir.value;
      })

      inputTanggalLahir.addEventListener('blur',function(){
          const dateArea = document.getElementById('dateArea');
          dateArea.innerText = inputTanggalLahir.value;
      })

      inputAgama.addEventListener('input',function(){
          const agamaArea = document.getElementById('agamaArea');
          agamaArea.innerText = inputAgama.value;
      })

      inputPekerjaan.addEventListener('input',function(){
          const pekerjaanArea = document.getElementById('pekerjaanArea');
          pekerjaanArea.innerText = inputPekerjaan.value;
      })

      inputAlamat.addEventListener('input',function(){
          const alamatArea = document.getElementById('alamatArea');
          alamatArea.innerText = inputAlamat.value;
      })
  })
</script>
</x-layout>