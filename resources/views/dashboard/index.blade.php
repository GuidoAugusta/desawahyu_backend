<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>

  <x-sidebar></x-sidebar>

  <div class="p-4 sm:ml-64">
    <h1 class="text-4xl">Welcome back {{ Auth::user()->nama }} 👋!!</h1>
  </div>

</x-layout>