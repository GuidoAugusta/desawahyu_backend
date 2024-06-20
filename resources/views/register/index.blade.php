<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>
  <div class="container mx-auto bg-white flex ustify-center items-center h-screen overflow-hidden">
    <div class="w-1/2 hidden md:flex justify-center items-center">
        <img src="../images/login.png" alt="hehe" class="w-3/4">
    </div>

    <!-- login  -->
    <div class="w-full md:w-1/2 flex flex-col justify-center items-center gap-5">
        <div class=" font-sans text-[#70E000] text-center">
            <h3 class="text-4xl tracking-wide font-bold">REGISTER</h3>
            <p class="mt-2 font-medium">Desaku.id</p>
        </div>

        <form class="w-4/5 md:w-3/5 space-y-3 form-register" action="/register" method="POST">
          @csrf
          {{-- nama --}}
          <div class="relative z-0 w-full group">
              <input type="text" name="nama" id="nama"
                    class="block px-0 w-full pt-2.5 pb-0.5 text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0 focus:border-[#70E000] peer"
                    value="{{ old('nama') }}" required autofocus />
              <label for="nama"
                    class="peer-focus:font-medium absolute text-xl text-gray-500 duration-300 transform -translate-y-6 scale-75 top-2 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-[#70E000]  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nama</label>
              @error('nama')
                <span class="text-red-500 text-sm">{{ $message }}</span>
              @enderror
          </div>
          {{-- email --}}
          <div class="relative z-0 w-full group">
              <input type="email" name="email" id="email"
                    class="block px-0 w-full pt-2.5 pb-0.5 text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0 focus:border-[#70E000] peer"
                    value="{{ old('email') }}" required />
              <label for="email"
                    class="peer-focus:font-medium absolute text-xl  text-gray-500 duration-300 transform -translate-y-6 scale-75 top-2 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-[#70E000]  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email</label>
              @error('email')
                <span class="text-red-500 text-sm">{{ $message }}</span>
              @enderror
          </div>
          {{-- password --}}
          <div class="relative z-0 w-full group">
              <input type="password" name="password" id="password"
                    class="block px-0 w-full pt-2.5 pb-0.5 text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0 focus:border-[#70E000] peer"
                    value="" required />
              <label for="password"
                    class="peer-focus:font-medium absolute text-xl  text-gray-500 duration-300 transform -translate-y-6 scale-75 top-2 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-[#70E000]  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Password</label>
              @error('password')
                <span class="text-red-500 text-sm">{{ $message }}</span>
              @enderror
          </div>

          <button type="submit" class="btn-register text-white bg-[#70E000] transition-all hover:bg-[#008000] focus:ring-4 focus:outline-none font-medium rounded-lg text-lg tracking-wide w-full  px-5 py-2.5 text-center">Register</button>
        </form>
    </div>
  </div>
</x-layout>