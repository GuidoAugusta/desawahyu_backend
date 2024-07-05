@props(['link' => '#', 'img' => '#'])

<a class="CardSurat cursor-pointer " href="{{ $link }}">
    <div class="bg-slate-300 px-10 pt-14 pb-5 h-96">
        <img src="{{ $img }}" alt="" class="h-full w-full">
    </div>
    <div
        class="text-center bg-success-200 h-full text-white w-full block font-semibold text-base md:text-lg py-3 md:py-2 px-5 ">
        <span>
            {{ $slot }}
        </span>
    </div>
    <span
        class="text-white font-semibold text-base md:text-lg bg-primary-100 py-1 px-6 absolute top-0 left-0 rounded-br-xl ">Pengantar</span>
</a>
