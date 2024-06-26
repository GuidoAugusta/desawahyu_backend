@props(['link' => '#'])

<div class="grid grid-cols-12  gap-5 md:px-0 px-8">
  <div class="CardSurat">
      <div class="bg-slate-300 px-10 pt-14 pb-5">
          <img src="images/suratPindah.png" alt="">
      </div>
      <a href="{{ $link }}" class="text-center bg-success-200 h-full text-white w-full block font-semibold text-base md:text-lg py-3 md:py-2 px-5 ">
          <span>
            {{ $slot }}
          </span>
      </a>
      <span class="text-white font-semibold text-base md:text-lg bg-primary-100 py-1 px-6 absolute top-0 left-0 rounded-br-xl ">Pengantar</span>
  </div>
</div>
