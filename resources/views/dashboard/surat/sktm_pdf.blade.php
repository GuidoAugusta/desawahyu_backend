<!DOCTYPE html>
<html lang="en" class="print:w-[210mm] print:h-[297mm]">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <title>{{ $title }}</title>

  <style>
    @page {
      size: "A4";
      margin: 0;
    }

  </style>
</head>
<body class="print:w-[210mm] print:h-[297mm]">

  <aside class="fixed top-0 left-0 z-40 h-screen print:hidden" aria-label="Sidebar">
    <div class="h-full px-3 md:px-5 pt-7 bg-white ">
      <a href="/dashboard/sktm" class="px-4 py-2 text-white font-semibold bg-red-600 rounded-md">Back</a>
      <a href="" id="download" class="px-4 py-2 text-white font-semibold bg-green-600 rounded-md">Download</a>
    </div>
  </aside>

  <div class="flex justify-center bg-slate-400 py-7 print:py-0"> 
    <div class="max-w-[210mm] min-h-[297mm] bg-white p-8 w-full border-dashed border-4 rounded-lg border-gray-200 print:border-none print:rounded-none ">
      <header class="flex items-center justify-center border-b-2 print:border-b print:pb-1 relative border-black">
        <div class="h-24 absolute top-0 -left-5 overflow-hidden hidden xl:block print:left-5 print:-top-2 print:block">
        <img src="/images/logoSurat.png" alt="logo" class="h-full">
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
          <h1 class="font-bold md:text-lg uppercase underline print:underline-none ">surat keteragan tidak mampu</h1>
          <h5>Nomor : 204/0015/TRI/2021</h5>
        </header>
        {{-- <!-- isi --> --}}
        <div class="text-lg text-wrap mt-8 font-normal ">
          <p>yang bertanda tangan di bawah ini kepada desa terog sawah, kecamatan Kendal, Kabupaten lombok barat menerangkan dengan sebenarnya,bahwa:</p>          
          {{--isi datdiri  --}}
          <div class="overflow-x-auto print:overflow-hidden">
            {{-- nama --}}
            <div class="grid grid-cols-3 ">
              <div class="col-span-1 flex justify-between">
                  <p>Nama </p>
                  <p>: &nbsp;</p>
              </div>
              <div class="col-span-2 text-wrap" id="nameArea">                
                {{ ucfirst(trans($sktm->nama)) }}
              </div>
            </div>
            {{-- nik --}}
            <div class="grid grid-cols-3 ">
              <div class="col-span-1 flex justify-between">
                  <p>Nik </p>
                  <p>: &nbsp;</p>
              </div>
              <div class="col-span-2" id="nikArea">
                {{ $sktm->nik }}
              </div>
            </div>
            {{-- kelamin --}}
            <div class="grid grid-cols-3 ">
              <div class="col-span-1 flex justify-between">
                  <p>Kelamin  </p>
                  <p>: &nbsp;</p>
              </div>
              <div class="col-span-2" id="genderArea">      
                {{ $sktm->jenis_kelamin }}          
              </div>
            </div>
            {{-- tempat, tanggal lahir --}}
            <div class="grid grid-cols-3 ">
              <div class="col-span-1 flex justify-between">
                  <p>Tempat, Tanggal Lahir </p>
                  <p>: &nbsp;</p>
              </div>      
              <div class="col-span-2" >
                <span id="lahirArea">{{ ucfirst(trans($sktm->tempat)) }}</span>,
                <span id="dateArea">{{ ucfirst(trans($sktm->tanggal_lahir)) }}</span>
              </div>
            </div>
            <div class="grid grid-cols-3 ">
              <div class="col-span-1 flex justify-between">
                  <p class="">Warganegara / Agama </p>
                  <p>: &nbsp;</p>
              </div> 
              <div class="col-span-2">
                <span id="negara">Indonesia</span> / <span id="agamaArea">{{ ucfirst(trans($sktm->agama)) }}</span>
              </div>
            </div>
            {{-- pekerjaan --}}
            <div class="grid grid-cols-3 ">
              <div class="col-span-1 flex justify-between">
                  <p>Pekerjaan </p>
                  <p>: &nbsp;</p>
              </div>
              <div class="col-span-2" id="pekerjaanArea">                
                {{ ucfirst(trans($sktm->pekerjaan)) }}
              </div>
            </div>
            {{-- alamat --}}
            <div class="grid grid-cols-3 ">
              <div class="col-span-1 flex justify-between">
                  <p>Alamat </p>
                  <p>: &nbsp;</p>
              </div>
              <div class="col-span-2" id="alamatArea">                
                {{ ucfirst(trans($sktm->alamat)) }}
              </div>
            </div>
          </div>

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
                </div>
              </div>
            </div>
      </div>
    </div>
  </div>

  <script>
    const download_Btn = document.querySelector('#download');
    download_Btn.addEventListener('click', function(){
      scroll(0, 0);
      print();
    })
  </script>
</body>
</html>