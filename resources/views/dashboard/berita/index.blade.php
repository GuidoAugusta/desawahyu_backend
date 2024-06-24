<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <x-sidebar></x-sidebar>

    <div class="p-4 sm:ml-64">
        <h1 class="text-4xl mb-10">Kelola Berita 👋!!</h1>

        @if (session()->has('success'))
            <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-5" role="alert">
                <p class="font-bold">Success</p>
                <p>{{ session('success') }}</p>
            </div>
        @endif

        <div>
            <a href="/dashboard/berita/create"
                class="ring-blue-400 ring-1 rounded text-white bg-green-500 px-3 py-[5px] hover:bg-green-600">Buat
                Berita Baru</a>
        </div>

        <div class="overflow-x-auto pt-5">
            <table class="min-w-full bg-white border border-gray-300">
                <thead>
                    <tr class="bg-gray-100 border-b">
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">#
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Title
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Upload At</th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($beritas as $berita)
                        <tr class="border-b">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                {{ $loop->iteration }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $berita->title }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $berita->created_at }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <a href="/dashboard/berita/{{ $berita->slug }}"
                                    class="ring-blue-400 ring-1 rounded text-white bg-blue-500 px-3 py-[5px] hover:bg-blue-600">View</a>
                                <a href="/dashboard/berita/{{ $berita->slug }}/edit"
                                    class="ring-blue-400 ring-1 rounded text-white bg-yellow-300 px-3 py-[5px] hover:bg-yellow-400">Edit</a>
                                <form action="/dashboard/berita/{{ $berita->slug }}" method="post"
                                    class="inline-block">
                                    @method('delete')
                                    @csrf
                                    <button
                                        class="ring-blue-400 ring-1 rounded text-white bg-red-500 px-3 py-[5px] hover:bg-red-600"
                                        onclick="return confirm('Are you sure?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</x-layout>
