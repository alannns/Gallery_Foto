@extends('layout.layout_2')
@section('content_2')
    <form action="/proses_register" method="post">
        @csrf
        <div>
            <section class="mt-[20px]">
                <div class="w-[364px] bg-white mx-auto px-9 py-9 rounded-md shadow-xl">
                    <div class="flex flex-col">
                        <!-- header login -->
                        <span class="mt-2 text-5xl font-hurricane mx-auto">PinMe</span>
                        <!-- end -->
                        <!-- input login -->
                        <span class="text-sm mt-5 mb-1">Email</span>
                        <input type="email" id="email" name="email"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5"
                            placeholder="Masukan Email Anda" required />
                        <span class="text-sm mt-4 mb-1">Password</span>
                        <input type="password" id="password" name="password"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5"
                            placeholder="Masukan Password Anda" required />
                        <span class="text-sm mt-4 mb-1">Tanggal Lahir</span>
                        <input type="date" id="date" name="date"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5"
                            placeholder="Masukan Tanggal Lahir Anda" required />
                        <!-- button -->
                        <button type="submit"
                            class="mt-7 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Register
                        </button>
                        <button type="button"
                            class="mt-2 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 flex justify-center items-center">
                            <img src="/assets/icons google 1.png" alt="" class="mr-2">
                            <a href="/src/pages/beranda.html">Continue with google</a>
                        </button>
                        <span class="mt-3 text-center text-sm">Already a member?
                            <a href="/sign_in" class="underline text-sky-500">log in</a></span>
                        <!-- end -->
                    </div>
                </div>
            </section>
        </div>
    </form>
@endsection
