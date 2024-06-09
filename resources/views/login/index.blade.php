<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>

  <div class="container mx-auto bg-white flex justify-center items-center h-screen overflow-hidden relative">
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
          <input type="name" name="name" id="name" class="block pt-2.5 pb-0.5 px-0 w-full  text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0 focus:border-[#70E000] peer" value="{{ old('name') }}" placeholder="" required autofocus>
          <label for="name" class="peer-focus:font-medium  absolute  text-xl  text-gray-500  duration-300 transform -translate-y-6 scale-75 top-2  origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-[#70E000]  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nama</label>
          @error('name')
            <span class="text-red-500 text-sm">{{ $message }}</span>
          @enderror
        </div>
        <div class="relative z-0 w-full group">
          <input type="text" name="password" id="nik" class="block pt-2.5 pb-0.5 px-0 w-full  text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0 focus:border-[#70E000] peer" placeholder="" autocomplete="off" required />
          <label for="nik" class="peer-focus:font-medium absolute text-xl  text-gray-500  duration-300 transform -translate-y-6 scale-75 top-2  origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-[#70E000]  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">NIK</label>
        </div>
        <div>
          <a href="register.html" class="font-medium text-[#70E000]">Register</a>
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
