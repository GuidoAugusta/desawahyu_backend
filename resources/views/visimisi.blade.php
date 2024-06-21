<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>
  <x-navbar :background="'bg-transparent'"></x-navbar>
  <x-jumbotron>
    <span class="text-secondary-200">Visi</span> Misi
  </x-jumbotron>

  <!-- content  start -->
  <section class="md:py-16 py-16 mx-10 space-y-10 text-justify">
    <!-- Sejarah Desa start -->
    <div class="max-w-sm mx-auto bg-white rounded-xl text-center">
      <div class="bg-white rounded-lg shadow-lg border-[2px] border-gray-100">
        <img src="images/kades.jpg" alt="Gambar Profil" class="w-36 mx-auto pt-5">
        <div class="text-center m-4 space-y-1"> 
          <h1 class="text-2xl font-bold text-primary-200">Kepala Desa</h1>
          <h1 class="text-xl font-bold">Wahyu Anang Zulfikri</h1>
          <p class="font-semibold">NIP : 01290121323623</p>
        </div>
      </div>
    </div>
    </div>
    <div class="text-center space-y-2">
      <h1 class="text-primary-200 text-3xl font-bold">Visi</h1>
      <p class="font-semibold">“Membangun Desa Wahyu yang Maju, Mandiri, dan Sejahtera melalui tata kelola yang
        Baik dan Berkelanjutan.”</p>
    </div>
    <div class="space-y-2 text-center">
      <h1 class="text-center text-primary-200 text-3xl font-bold">Misi</h1>
      <ol class="list-decimal list-inside text-wrap font-semibold space-y-2">
        <li>Meningkatkan kualitas sumber daya manusia melalui pendidikan dan pelatihan yang berkualitas.</li>
        <li>Meningkatkan infrastruktur desa yang memadai dan berkualitas.</li>
        <li>Mengembangkan ekonomi desa yang kreatif, inovatif, dan berkelanjutan.</li>
        <li>Membangun pemerintahan desa yang transparan, akuntabel, dan partisipatif.</li>
        <li>Melestarikan budaya dan nilai-nilai luhur desa.</li>
        <li>Membangun lingkungan desa yang bersih, sehat, dan asri.</li>
        <li>Meningkatkan kualitas pelayanan publik kepada masyarakat.</li>
        <li>Memperkuat peran pemuda dan perempuan dalam pembangunan desa.</li>
        <li>Membangun desa yang ramah lingkungan dan berkelanjutan.</li>
        <li>Meningkatkan kerjasama antar desa, lembaga, dan swasta.</li>
      </ol>
    </div>
    <!-- Sejarah Desa end -->
  </section>
  <!-- content  end -->

  <x-apbd></x-apbd>
  <x-footer></x-footer>
  <script src="js/script.js"></script>
</x-layout>