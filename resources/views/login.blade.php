@extends('layouts.app')

@section('content')
    <main class="w-full h-screen flex flex-col gap-10 justify-center items-center bg-[#9A4F14]">
        <p class="text-white w-[30%] text-center">Silakan buat akun untuk akses penuh ke fitur dan layanan. Hubungi
            admin jika
            butuh
            bantuan.
        </p>
        <div class="bg-white p-10 rounded-md w-1/3">
            <h1 class="text-center poppins-semibold text-[#9A4F14] text-2xl">LOGIN</h1>

            <div class="mb-5 mt-5">
                <label for="username" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    Username
                </label>
                <input type="text" id="username"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" />
            </div>
            <div class="mb-5">
                <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    Password
                </label>
                <input type="password" id="password"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" />
            </div>

            <button type="button"
                class="text-[#9A4F14] bg-white border cursor-pointer border-[#9A4F14] hover:bg-gray-50 focus:outline-none focus:ring-4 mx-auto block focus:ring-blue-300 font-medium rounded-full text-sm px-10 py-2.5 text-center">
                Submit
            </button>
        </div>
    </main>
@endsection
