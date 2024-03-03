@extends('layout.layout')
@section('content')
    <!-- Konten -->
    <div>
        <div class="mt-24 mx-auto justify-center items-center flex ">
            <span class="font-hurricane text-5xl justify-center">PinMe</span>
        </div>
    </div>

    <div class="flex justify-center mx-auto gap-5 mt-8">
        <div class="shadow-lg border border-gray-200 py-6 h-52 rounded-md">
            <div class="flex flex-col mx-auto justify-center w-52">
                <div class="flex justify-center">
                    <img src="/assets/image 2.png" alt="" class="w-28 h-28 rounded-full">
                </div>
                <div class="flex justify-center mt-3">
                    <input
                        class="block w-40 text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50"
                        file_input" type="file">
                </div>
            </div>
        </div>

        <div class="wshadow-lg border border-gray-200 pb-8 rounded-md">
            <div class="flex justify-center">
                <span class="font-hurricane text-4xl mt-5">Change Your Password</span>
            </div>
            <div class="px-7 mt-5">
                <label for="confirm_password" class="block mb-1 text-xs font-medium">Nama Lengkap</label>
                <input type="password" name="new_password" id="confirm_password"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 mb-4 placeholder:text-xs"
                    placeholder="" required="">
                <label for="confirm_password" class="block mb-1 text-xs font-medium">Nomor Telepon</label>
                <input type="number" name="new_password" id="confirm_password"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 mb-4 placeholder:text-xs"
                    placeholder="" required="">
                <label for="confirm_password" class="block mb-1 text-xs font-medium">Jenis Kelamin</label>
                <select type="password" name="new_password" id="confirm_password"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 mb-4 placeholder:text-xs"
                    placeholder="" required="">
                    <option value="">Laki-Laki</option>
                    <option value="">Perempuan</option>
                </select>
                <label for="confirm_password" class="block mb-1 text-xs font-medium">Alamat</label>
                <input type="password" name="new_password" id="confirm_password"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 mb-4 placeholder:text-xs"
                    placeholder="" required="">
                <label for="confirm_password" class="block mb-1 text-xs font-medium">Bio</label>
                <input type="password" name="new_password" id="confirm_password"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 mb-4 placeholder:text-xs"
                    placeholder="" required="">
                <button class="px-3 py-2 mt-2 bg-blue-600 rounded-md text-white ml-[350px]">
                    <span class="text-sm">Perbaharui</span>
                </button>
            </div>
        </div>

    </div>
    <!-- End Konten -->
@endsection
