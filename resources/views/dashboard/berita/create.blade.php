<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <x-sidebar></x-sidebar>

    <div class="p-4 sm:ml-64">
        <h1 class="text-4xl mb-10">Buat Berita Baru👋!!</h1>
    </div>

    <form class="max-w-4xl mx-auto px-5 mb-10" method="post" action="/dashboard/berita" enctype="multipart/form-data">
        @csrf
        <div class="mb-5">
            <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
            <input type="text" id="title" name="title"
                class="form-control shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                required value="{{ old('title') }}" />
            @error('title')
                <div class="invalid-feedback text-red-500 text-xs mt-1">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-5">
            <label for="slug" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Slug</label>
            <input type="text" id="slug" name="slug"
                class="form-control shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                required value="{{ old('slug') }}" />
            @error('slug')
                <div class="invalid-feedback text-red-500 text-xs mt-1">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-5">
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="image">Upload
                image</label>
            <div class="grid grid-cols-12 gap-4">
                <img class="img-preview img-fluid mb-3 col-span-12 sm:col-span-5">
            </div>

            <input
                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                aria-describedby="file_input_help" id="image" type="file" name="image"
                onchange="previewImage()">
            @error('image')
                <p class="text-red-500 text-xs my-1">{{ $message }}</p>
            @enderror
            <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">PNG, JPG or JPEG (max.
                2MB).</p>
        </div>
        <div class="mb-5">
            <label for="content" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Content</label>
            @error('content')
                <p class="text-red-500 text-xs my-1">{{ $message }}</p>
            @enderror
            <input id="content" type="hidden" name="content" value="{{ old('content') }}">
            <trix-editor input="content" class="trix-editor"></trix-editor>
        </div>

        <button type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Buat
            Berita</button>
    </form>

    <script>
        const title = document.querySelector("#title");
        const slug = document.querySelector("#slug");

        title.addEventListener("keyup", function() {
            let preslug = title.value;
            preslug = preslug.replace(/ /g, "-");
            slug.value = preslug.toLowerCase();
        });

        document.addEventListener('trix-file-accept', function(event) {
            event.preventDefault();
        });

        function previewImage() {
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            };
        }

        // const title = document.querySelector('#title');
        // const slug = document.querySelector('#slug');

        // title.addEventListener('change', function() {
        //     fetch('/dashboard/checkSlug?title=' + title.value)
        //         .then(response => response.json())
        //         .then(data => {
        //             console.log('Slug response:', data); // Log untuk debugging
        //             slug.value = data.slug;
        //         })
        // });
    </script>
</x-layout>
