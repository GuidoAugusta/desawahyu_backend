<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-sidebar></x-sidebar>
    <div class="p-4 sm:ml-64">
        <h1 class="text-4xl mb-4 font-semibold text-center">Ini Halaman SKTM</h1>
        {{-- alert --}}
        @if (@session()->has('deleteSuccess') || @session()->has('reject'))
            <div id="alert"
                class="md:w-1/2 mx-auto flex items-center p-4 mb-2 text-red-800 rounded-lg bg-red-200 transition-all duration-700"
                role="alert">
                <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                    viewBox="0 0 20 20">
                    <path
                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                </svg>
                <span class="sr-only">Info</span>
                <div class="ms-3 text-sm font-medium">
                    {{ session('deleteSuccess') }}
                    {{ session('reject') }}
                </div>
                <button type="button"
                    class="ms-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 inline-flex items-center justify-center h-8 w-8"
                    data-dismiss-target="#alert" aria-label="Close">
                    <span class="sr-only">Close</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                </button>
            </div>
        @endif
        @if (@session()->has('SendSuccess'))
            <div id="alert"
                class="md:w-1/2 mx-auto flex items-center p-4 mb-2 text-green-800 rounded-lg bg-green-200 dark:bg-gray-800 dark:text-green-400"
                role="alert">
                <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                </svg>
                <span class="sr-only">Info</span>
                <div class="ms-3 text-sm font-medium">
                    {{ session('SendSuccess') }}
                </div>
                <button type="button"
                    class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700"
                    data-dismiss-target="#alert" aria-label="Close">
                    <span class="sr-only">Close</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                </button>
            </div>
        @endif
        {{-- alert --}}

        {{-- anrian --}}
        @php $antrianNo = 1; @endphp
        <h3 class="text-2xl font-medium mb-2">Antrian</h3>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg mb-10" id="antrian">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-200">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            No
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nama
                        </th>
                        <th scope="col" class="px-6 py-3">
                            NIK
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Alamat
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Pekerjaan
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Agama
                        </th>
                        <th scope="col" class="px-6 py-3">
                            KTP
                        </th>
                        <th scope="col" class="px-6 py-3">
                            opsi
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($sktm as $item)
                        @if ($item['status'] == 'Menunggu')
                            <tr
                                class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                <td class="px-6 py-4">{{ $antrianNo++ }}</td>
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $item->nama }}
                                </th>
                                <td class="px-6 py-4">{{ $item->nik }}</td>
                                <td class="px-6 py-4">{{ $item->alamat }}</td>
                                <td class="px-6 py-4">{{ $item->pekerjaan }}</td>
                                <td class="px-6 py-4">{{ $item->agama }}</td>
                                <td class="px-6 py-4">
                                    <button data-modal-target="ktp-modal" data-modal-toggle="ktp-modal"
                                        class="block text-blue-600 font-medium rounded-lg text-sm text-center"
                                        type="button" data-ktp="{{ asset('storage/' . $item->ktp) }}">
                                        Lihat
                                    </button>
                                </td>
                                <td class="px-6 py-4">
                                    {{-- <form action="{{ route('sktm.updateStatus', $item['id']) }}" method="POST" style="display: inline;"> --}}
                                    <form action="/sktm/{{ $item->id }}/acceptStatus" method="POST"
                                        style="display: inline;">
                                        @csrf
                                        @method('PATCH')
                                        <button type="submit"
                                            class="font-medium text-green-600 hover:underline">Terima</button>
                                    </form>
                                    {{-- <form action="/sktm/{{$item->id}}/rejectStatus" method="POST">
                    @csrf
                    @method('PATCH') --}}
                                    <button data-modal-target="reject-modal" data-modal-toggle="reject-modal"
                                        class="font-medium text-red-600 hover:underline"
                                        data-id="{{ $item->id }}">Tolak</button>
                                    {{-- </form> --}}
                                </td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>

        {{-- acc --}}
        <h3 class="text-2xl font-medium mb-3">Cetak</h3>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg mb-10" id="acc">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-200">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            No
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nama
                        </th>
                        <th scope="col" class="px-6 py-3">
                            NIK
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Alamat
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Pekerjaan
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Agama
                        </th>
                        <th scope="col" class="px-6 py-3">
                            KTP
                        </th>
                        <th scope="col" class="px-6 py-3">
                            opsi
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Kirim
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @php $accNo = 1; @endphp
                    @foreach ($sktm as $item)
                        @if ($item['status'] == 'Diterima')
                            <tr
                                class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                <td class="px-6 py-4">{{ $accNo++ }}</td>
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $item->nama }}
                                </th>
                                <td class="px-6 py-4">{{ $item->nik }}</td>
                                <td class="px-6 py-4">{{ $item->alamat }}</td>
                                <td class="px-6 py-4">{{ $item->pekerjaan }}</td>
                                <td class="px-6 py-4">{{ $item->agama }}</td>
                                <td class="px-6 py-4">
                                    <button data-modal-target="ktp-modal" data-modal-toggle="ktp-modal"
                                        class="block text-blue-600 font-medium rounded-lg text-sm text-center"
                                        type="button" data-ktp="{{ asset('storage/' . $item->ktp) }}">
                                        Lihat
                                    </button>
                                </td>
                                <td class="px-6 py-4">
                                    <a href="/dashboard/sktm/{{ $item->id }}/cetak"
                                        class="font-medium text-blue-600 hover:underline">Cetak</a>
                                    <form action="/dashboard/sktm/{{ $item->id }}" method="post">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="font-medium text-red-600 hover:underline"
                                            onclick="return confirm('apakah anda yakin untuk menghapus ?')">Hapus</button>
                                    </form>
                                </td>
                                <td class="px-6 py-4">
                                    <button data-modal-target="authentication-modal"
                                        data-modal-toggle="authentication-modal"
                                        class="font-medium text-blue-600 hover:underline" type="button"
                                        data-email="{{ $item->email }}" data-nama="{{ $item->nama }}">
                                        Kirim
                                    </button>
                                </td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>

        {{-- daftar tolak --}}
        <h3 class="text-2xl font-medium mb-3">Ditolak</h3>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg mb-10" id="tolak">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 ">
                <thead class="text-xs text-gray-700 uppercase bg-gray-200">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            No
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nama
                        </th>
                        <th scope="col" class="px-6 py-3">
                            NIK
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Alamat
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Pekerjaan
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Agama
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Alasan
                        </th>
                        <th scope="col" class="px-6 py-3">
                            opsi
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @php $tolakNo = 1; @endphp
                    @foreach ($sktm as $item)
                        @if ($item['status'] == 'Ditolak')
                            <tr
                                class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                <td class="px-6 py-4">{{ $tolakNo++ }}</td>
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $item->nama }}
                                </th>
                                <td class="px-6 py-4">{{ $item->nik }}</td>
                                <td class="px-6 py-4">{{ $item->alamat }}</td>
                                <td class="px-6 py-4">{{ $item->pekerjaan }}</td>
                                <td class="px-6 py-4">{{ $item->agama }}</td>
                                <td class="px-6 py-4">{{ $item->alasan }}</td>
                                <td class="px-6 py-4">
                                    <form action="/dashboard/sktm/{{ $item->id }}" method="post">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="font-medium text-red-600 hover:underline"
                                            onclick="return confirm('apakah anda yakin untuk menghapus ?')">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Main modal -->
    <div id="authentication-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Kirim PDF
                    </h3>
                    <button type="button"
                        class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-hide="authentication-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-4 md:p-5">
                    <form class="space-y-4" action="/send-email" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div>
                            <label for="email"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                            <input type="email" name="email" id="email"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="name@company.com" required />
                            <input type="hidden" name="nama" id="nama">
                            <input type="hidden" name="surat" value="SKTM">
                        </div>
                        <div>
                            <input type="file" name="pdf_file" required>
                        </div>
                        <button type="submit"
                            class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Kirim</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- modal ktp -->
    <div id="ktp-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        KTP
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-hide="ktp-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-4 md:p-5 space-y-4">
                    <img src="" alt="" id="image-ktp">
                </div>
            </div>
        </div>
    </div>

    {{-- reject modal --}}
    <!-- Main modal -->
    <div id="reject-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                        Alasan ditolak
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-toggle="reject-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <form class="p-4 md:p-5" action="" method="POST" id="rejectForm">
                    @csrf
                    <div class="grid gap-4 mb-4 grid-cols-2">
                        <div class="col-span-2">
                            <label for="alasan"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi</label>
                            <textarea name="alasan" id="alasan" rows="6"
                                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                                placeholder="Tulis disini" required></textarea>
                        </div>
                    </div>
                    <button type="submit"
                        class="text-white inline-flex items-center bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-slate-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                        Kirim
                    </button>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.querySelectorAll('[data-modal-toggle="authentication-modal"]').forEach(button => {
            button.addEventListener('click', () => {
                const email = button.getAttribute('data-email');
                const nama = button.getAttribute('data-nama');
                document.querySelector('#authentication-modal #email').value = email;
                document.querySelector('#authentication-modal #nama').value = nama;
            });
        });

        document.querySelectorAll('[data-modal-toggle="ktp-modal"]').forEach(button => {
            button.addEventListener('click', () => {
                const ktp = button.getAttribute('data-ktp');
                document.querySelector('#ktp-modal #image-ktp').src = ktp;
            });
        })

        document.querySelectorAll('[data-modal-toggle="reject-modal"]').forEach(button => {
            button.addEventListener('click', () => {
                const id = button.getAttribute('data-id');
                document.querySelector('#rejectForm').action = `/sktm/${id}/rejectStatus`;
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
            const alert = document.getElementById('alert');
            if (alert) {
                setTimeout(() => {
                    alert.classList.add('hidden');
                }, 2000);
            }
        });
    </script>

</x-layout>
