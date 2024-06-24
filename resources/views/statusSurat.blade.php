<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>
  <x-navbar :background="'bg-navbar'"></x-navbar>  
  <div class="container mx-auto mt-20">
    {{-- alert --}}
    @if (@session()-> has('LoginSuccess'))
    <div id="alert" class="md:w-1/2 mx-auto flex items-center p-4 mb-4 text-green-800 rounded-lg bg-green-200 dark:bg-gray-800 dark:text-green-400" role="alert">
      <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
      </svg>
      <span class="sr-only">Info</span>
      <div class="ms-3 text-sm font-medium">
        {{ session('LoginSuccess') }}
      </div>
      <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700" data-dismiss-target="#alert" aria-label="Close">
        <span class="sr-only">Close</span>
        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
        </svg>
      </button>
    </div>
    @endif
    {{-- alert --}}

    <h1 class="text-4xl font-medium mb-2 ml-4 ">{{ Auth::user()->nama }}</h1>

    <h3 class="text-2xl font-medium mb-2 ml-4 ">Status Surat</h3>
    <div class="relative overflow-x-auto shadow-md mb-5">
      @php $proses = 1; @endphp
      <table class="w-full text-sm text-left rtl:text-right text-gray-500">
          <thead class="text-xs text-gray-700 uppercase bg-gray-100">
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
                      Jenis Pengjuan
                  </th>
                  <th scope="col" class="px-6 py-3">
                      Status
                  </th>
                  <th scope="col" class="px-6 py-3">
                      Alasan di tolak
                  </th>
              </tr>
          </thead>
          <tbody>
          @foreach ($surat as $item)     
            @if ($item->status == "Ditolak" || $item->status == "Menunggu")                
              <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800">
                  <td class="px-6">
                    {{ $proses++ }}
                  </td>
                  <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $item->nama }}
                  </th>
                  <td class="px-6 py-4">
                    {{ $item->nik }}
                  </td>
                  <td class="px-6 py-4">
                    {{ $item->jenis_surat }}
                  </td>
                  <td class="px-6 py-4">
                    {{ $item->status }}      
                  </td>
                  <td class="px-6 py-4">
                    {{ $item->alasan }}      
                  </td>
                </tr>
            @endif                           
          @endforeach 
          </tbody>
      </table>
    </div>

    <h3 class="text-2xl font-medium mb-2 ml-4 ">Surat Yang Diterima</h3>
    <div class="relative overflow-x-auto shadow-md mb-5">
      @php $diterimaNo = 1; @endphp
      <table class="w-full text-sm text-left rtl:text-right text-gray-500">
          <thead class="text-xs text-gray-700 uppercase bg-gray-100">
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
                      Jenis Pengjuan
                  </th>
                  <th scope="col" class="px-6 py-3">
                      Status
                  </th>
                  <th scope="col" class="px-6 py-3">
                      Opsi
                  </th>
              </tr>
          </thead>
          <tbody>
          @foreach ($surat as $item)
            @if ($item->status == "Diterima")
              <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800">
                  <td class="px-6">
                    {{ $diterimaNo++ }}
                  </td>
                  <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $item->nama }}
                  </th>
                  <td class="px-6 py-4">
                    {{ $item->nik }}
                  </td>
                  <td class="px-6 py-4">
                    {{ $item->jenis_surat }}
                  </td>
                  <td class="px-6 py-4">
                    {{ $item->status }}
                  </td>
                  <td class="px-6 py-4">
                    @if ($item->jenis_surat == 'Surat Keterangan Tidak Mampu')
                      <a href="/cetak/sktm/{{ $item->nik }}" class="font-medium text-blue-600 hover:underline">Cetak</a> | 
                    @elseif ($item->jenis_surat == 'jenis_lain')
                      <a href="" class="font-medium text-blue-600 hover:underline">Cetak</a> | 
                    @endif

                    @if ($item->jenis_surat == 'Surat Keterangan Tidak Mampu')
                    <form action="/hapus/sktm/{{ $item->nik }}" method="POST" class="inline">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="font-medium text-red-600 hover:underline" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Hapus</button>
                    </form>
                    @elseif ($item->jenis_surat == 'jenis_lain')
                    <form action="" method="POST" class="inline">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="font-medium text-red-600 hover:underline">Hapus</button>
                    </form>
                    @endif
                  </td>
              </tr>
            @endif
          @endforeach 
          </tbody>
      </table>
    </div>
  </div>

  <script>
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