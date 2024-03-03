@extends('layout.layout')
@section('content')
    <!-- Konten -->
    <form action="/buat_pin" method="post">
        @csrf
        <div>
            <div class="container px-5 pt-32 sm:pl-[320px] lg:pl-[300px] mb-24 lg:flex lg:flex-row ">
                <div class="flex items-center justify-center w-full lg:w-[400px]">
                    <label for="dropzone-file"
                        class="flex flex-col items-center justify-center w-full h-44 lg:h-[300px] border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50">
                        <div class="flex flex-col items-center justify-center pt-5 pb-6">
                            <ion-icon name="cloud-upload-outline" class="text-4xl w-8 h-8 mb-4 text-gray-500"></ion-icon>
                            <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to
                                    upload
                                    <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG</p>
                        </div>
                        <input id="dropzone-file" type="file" class="hidden" name="file" />
                    </label>
                </div>
                <div class="lg:pl-10 lg:w-full">
                    <!-- judul -->
                    <span class="text-sm mt-5 mb-1">Judul</span>
                    <input type="text" id="judul" name="judul_foto"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 mb-2"
                        placeholder="Masukan Judul Foto" required />
                    <!-- deskripsi -->
                    <span class="text-sm mt-5 mb-1">Deskripsi</span>
                    <textarea type="text" id="deskripsi" rows="4" name="deskripsi_foto"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 mb-2"
                        placeholder="Write your thoughts here..."></textarea>
                    <button type="submit"
                        class="bg-blue-800 text-white border border-gray-300 rounded-md text-sm px-5 h-8 mt-3 ml-[250px] lg:ml-[530px]">
                        <span class="">Post</span>
                    </button>
                </div>
            </div>
        </div>
    </form>
    <!-- End Konten -->
@endsection
