<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <x-sidebar></x-sidebar>

    <div class="px-10 pt-4 sm:ml-64">
        <h1 class="text-4xl">{{ $berita->title }}</h1>

        <div class="py-5">
            <a href="/dashboard/berita"
                class="ring-blue-400 ring-1 rounded text-white bg-blue-500 px-3 py-[5px] hover:bg-blue-600 inline-block">Kembali</a>
            <a href="/dashboard/berita/{{ $berita->slug }}/edit"
                class="ring-blue-400 ring-1 rounded text-white bg-green-500 px-3 py-[5px] hover:bg-green-600 inline-block">Edit</a>
            <form action="/dashboard/berita/{{ $berita->slug }}" method="post" class="inline-block">
                @method('delete')
                @csrf
                <button class="ring-blue-400 ring-1 rounded text-white bg-red-500 px-3 py-[5px] hover:bg-red-600"
                    onclick="return confirm('Are you sure?')">Delete</button>
            </form>
        </div>

        {{-- <img src="{{ $berita->image }}" alt=""> --}}
        <div class="w-3/4">
            @if ($berita->image)
                <div class="overflow-hidden h-[32rem]">
                    <img src="{{ asset('storage/' . $berita->image) }}" alt=""
                        class="object-cover h-full w-full">
                </div>
            @else
                <div class="overflow-hidden h-[32rem]">
                    <img src="https://picsum.photos/1920/1080?random=" alt=""
                        class="object-cover h-full w-full">

                </div>
            @endif

            <div class="mt-5">
                <p class="prose lg:prose-base">
                    {!! $berita->content !!}
                </p>
            </div>
        </div>



        <div class="overflow-x-auto pt-10">

        </div>
    </div>
</x-layout>
