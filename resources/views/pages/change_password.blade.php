@extends('layout.layout')
@section('content')
    <!-- Konten -->
    <div>
        <div class="mt-24 mx-auto justify-center items-center flex ">
            <span class="font-hurricane text-5xl justify-center">PinMe</span>
        </div>
    </div>

    <div class="w-[500px] shadow-lg border border-gray-200 mx-auto mt-5 pb-8">
        <div class="flex justify-center">
            <span class="font-hurricane text-4xl mt-5">Change Your Password</span>
        </div>
        <div class="px-7 mt-5">
            <label for="confirm_password" class="block mb-1 text-xs font-medium">New
                Password</label>
            <input type="password" name="new_password" id="confirm_password"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 mb-4 placeholder:text-xs"
                placeholder="Confirm Password Anda" required="">
            <label for="confirm_password" class="block mb-1 text-xs font-medium">New
                Password</label>
            <input type="password" name="new_password" id="confirm_password"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 mb-4 placeholder:text-xs"
                placeholder="Confirm Password Anda" required="">
            <label for="confirm_password" class="block mb-1 text-xs font-medium">New
                Password</label>
            <input type="password" name="new_password" id="confirm_password"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 mb-4 placeholder:text-xs"
                placeholder="Confirm Password Anda" required="">
            <button class="px-3 py-2 mt-2 bg-blue-600 rounded-md text-white ml-[350px]">
                <span class="text-sm">Perbaharui</span>
            </button>
        </div>
    </div>
    <!-- End Konten -->
@endsection
