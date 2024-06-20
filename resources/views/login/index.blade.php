<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>

  <div class="container mx-auto bg-white flex justify-center items-center h-screen overflow-hidden relative">
     {{-- alert --}}
     @if (@session()-> has('LoginError'))
     <div id="alert" class="md:w-1/2 absolute transform -translate-y-56 flex items-center p-4 mb-4 text-red-800 rounded-lg bg-red-200 transition-all duration-700" role="alert">
       <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
         <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
       </svg>
       <span class="sr-only">Info</span>
       <div class="ms-3 text-sm font-medium">
         {{ session('LoginError') }}
       </div>
       <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 inline-flex items-center justify-center h-8 w-8" data-dismiss-target="#alert" aria-label="Close">
         <span class="sr-only">Close</span>
         <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
           <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
         </svg>
       </button>
     </div>
     @endif
     {{-- a;errt --}}
    <div class="w-1/2  hidden md:flex justify-center items-center  ">
      <img src="../images/login.png" alt="logo" class="w-3/4">
    </div>
    <div class="w-full md:w-1/2  flex flex-col justify-center items-center gap-5">
      <div class=" font-sans text-[#70E000]  text-center">
        <h3 class="text-4xl tracking-wide font-bold">Login</h3>
        <p class="mt-2 font-medium">CreativeVillage.id</p>
      </div>
      <form action="/login" method="POST" class=" w-4/5 md:w-3/5 space-y-5 form-login">    
        @csrf          
        <div class="relative z-0 w-full group">
          <input type="email" name="email" id="email" class="block pt-2.5 pb-0.5 px-0 w-full  text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0 focus:border-[#70E000] peer" required autofocus>
          <label for="email" class="peer-focus:font-medium  absolute  text-xl  text-gray-500  duration-300 transform -translate-y-6 scale-75 top-2  origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-[#70E000]  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email</label>
          @error('email')
            <span class="text-red-500 text-sm">{{ $message }}</span>
          @enderror
        </div>
        <div class="relative z-0 w-full group">
          <input type="password" name="password" id="nik" class="block pt-2.5 pb-0.5 px-0 w-full  text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0 focus:border-[#70E000] peer" autocomplete="off" required />
          <label for="nik" class="peer-focus:font-medium absolute text-xl  text-gray-500  duration-300 transform -translate-y-6 scale-75 top-2  origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-[#70E000]  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Password</label>
        </div>
        <div>
          <a href="/register" class="font-medium text-[#70E000]">Register</a>
        </div>                
        <button type="submit" class="text-white bg-[#70E000] hover:bg-[#008000] focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-lg tracking-wide w-full px-5 py-2.5 text-center btn-login">Login</button>                
      </form>
    </div>
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const alert = document.getElementById('alert');
      if (alert) {
        setTimeout(() => {
          alert.classList.add('hidden');
        }, 2000); // 5000ms = 5 seconds
      }
    });
  </script>
</x-layout>
