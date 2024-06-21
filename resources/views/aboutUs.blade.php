<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>
  <x-navbar :background="'bg-transparent'"></x-navbar>
  <x-jumbotron>
    <span class="text-secondary-200">Tentang</span> Kami
  </x-jumbotron>

  <!-- content  start -->
  <section class="md:py-16 py-16 px-8">
    <div class="container mx-auto  space-y-3">
      <div class="space-y-3">
        <h1 class="text-3xl font-bold text-primary-200">Tentang Platform Tata Kelola Desa (PTKD) </h1>
        <h1 class="font-bold text-xl">Mewujudkan Modernisasi Tatakelola Desa Melalui Pengembangan Platform Tata Kelola
          Desa</h1>
        <p class="font-semibold">Maksud Pengembangan PTKD adalah penyediaan media dalam memperoleh, mengelola dan
          menyajikan data serta informasi desa dan kawasan perdesaan. </p>
      </div>
      <div class="space-y-2 pt-3">
        <h1 class="text-lg font-bold">Tujuan pengembangan PTKD adalah :</h1>
        <ol class="list-decimal list-inside text-wrap">
          <li>Meningkatkan kualitas perencanaan dan perumusan kebijakan pembangunan desa dan kawasan perdesaan.</li>
          <li>Mengefektifkan pelaksanaan kebijakan, program dan kegiatan pembangunan desa dan kawasan perdesaan yang
            dilakukanoleh Pemerintah Desa.</li>
          <li>Meningkatkan kualitas pelayanan dan memberikan manfaat yang sebesar-besarnya bagi masyarakat dan pihak
            yang
            berkepentingan.</li>
          <li>Mengukur dan memberikan penilaian secara obyektif terhadap kemajuan dan pencapaian strategi pembangunan
            didesa dan kawasan perdesaan yang dilakukan oleh Pemerintah Desa.</li>
        </ol>
        <!-- ruang lingkup start -->
        <div>
          <h1 class="text-lg font-bold">Ruang lingkup Pengembangan PTKD meliputi :</h1>
          <ol class="list-decimal list-inside text-wrap">
            <li>Kedudukan, fungsi dan manfaat PTKD</li>
            <li>Perangkat PTKD</li>
            <li>Muatan PTKD</li>
            <li>Pengembangan PTKD</li>
            <li>Pengelolaan PTKD</li>
            <li>Tata cara dan penerapan PTKD</li>
            <li>Pembiayaan</li>
          </ol>
        </div>
        <!-- ruang lingkup end -->

        <!-- fungsi PTKD start -->
        <div>
          <h1 class="text-lg font-bold">PKTD berfungsi sebagai:</h1>
          <ol class="list-decimal list-inside text-wrap">
            <li>Membantu dalam administrasi dan pengelolaan dana desa</li>
            <li>Untuk mengelola dana desa</li>
            <li>Informasi dan komunikasi pemerintahan desa</li>
            <li>Pelayanan pembuatan surat</li>
          </ol>
        </div>
        <!-- fungsi PTKD start -->

        <!-- manfaat start -->
        <div>
          <h1 class="text-lg font-bold">PTKD Bermanfaat Untuk:</h1>
          <ol class="list-decimal list-inside text-wrap">
            <li>Memudahkan Pemerintah Desa dalam mengakses, menyimpan danmengolah data Desa</li>
            <li>Meningkatkan kualitas pengelolaan data desa yang akurat dan terbarukan secara berkala</li>
            <li>Meningkatkan kualitas pelayanan administrasi Pemerintah Desa</li>
            <li>Mempermudah akses informasi tentang Desa</li>
            <li>Meningkatkan akuntabilitas dan transparansi pemerintahan Desa</li>
            <li>meningkatkan kualitas perencanaan dan perumusan kebijakan pembangunan desa dan kawasan perdesaan oleh
              pemerintah dari tingkat pusat sampai ke tingkat desa</li>
          </ol>
        </div>
      </div>
    </div>
    <!-- manfaat start -->
  </section>
  <!-- content  end -->

  <x-apbd></x-apbd>
  <x-footer></x-footer>
  <script src="js/script.js"></script>
</x-layout>