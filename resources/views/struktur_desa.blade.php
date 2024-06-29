<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-navbar :background="'bg-transparent'"></x-navbar>
    <x-jumbotron>
      <span class="text-secondary-200">Struktur</span> Organisasi Desa
    </x-jumbotron>

    <link rel="stylesheet" href="css/load.css">

    
        <div class="md:w-7/12 mx-8 space-y-5 display-on-click transition ease-in-out duration-300">
            <div class="md:py-5">
                <h1 class="md:text-3xl text-lg font-bold text-primary-200">STRUKTUR ORGANISASI</h1>
            </div>
            <div>
                <img src="images/strukturdesa.png" alt="">
            </div>
        </div>
    </section>
      <!-- manfaat start -->
    <!-- content  end -->

    <x-apbd></x-apbd>
    <x-footer></x-footer>
    <script src="js/script.js"></script>
    <script src="js/load.js"></script>
  </x-layout>
