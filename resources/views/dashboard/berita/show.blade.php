<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <x-sidebar></x-sidebar>

    <div class="pl-10 pt-4 sm:ml-64">
        <h1 class="text-4xl">{{ $berita->title }}</h1>

        <div class="py-5">
            <a href="/dashboard/berita"
                class="ring-blue-400 ring-1 rounded text-white bg-blue-500 px-3 py-[5px] hover:bg-blue-600">Kembali</a>
            <a href=""
                class="ring-blue-400 ring-1 rounded text-white bg-green-500 px-3 py-[5px] hover:bg-green-600">Edit</a>
            <a href=""
                class="ring-blue-400 ring-1 rounded text-white bg-red-500 px-3 py-[5px] hover:bg-red-600">Delete</a>
        </div>

        <img src="{{ $berita->image }}" alt="">
        <div>
            <p>
                {{ $berita->content }}
            </p>
        </div>

        <div class="overflow-x-auto pt-10">

        </div>
    </div>
</x-layout>
