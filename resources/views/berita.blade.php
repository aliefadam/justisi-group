@extends('layouts.app')

@section('content')
    @include('partials.navbar')

    <main class="p-20 pt-36 bg-gray-200"
        style="background-image: url('/imgs/hero.png'); background-position: center; background-repeat: no-repeat; background-size: 100%;">

        <div class="flex justify-between">
            <div class="flex-[1]">
                <i class="fa-regular fa-newspaper text-[150px] text-white"></i>
            </div>
            <div class="flex-[2]">
                <p class="bg-black p-5 rounded-md text-white">
                    Informasi adalah kekuatan, dan kami hadir untuk memberi Anda berita yang cepat, akurat, dan terpercaya.
                    Jangan hanya sekadar tahu, pahami dunia dengan perspektif yang lebih luas bersama kami!
                </p>
            </div>
        </div>

        <div class="mt-10 grid grid-cols-4 gap-8">
            <a href="" class="hover:scale-[101%] duration-200 bg-[#DEDEDE] rounded-3xl shadow-md p-5">
                <img src="/imgs/1332646_720 1.png" alt="">
                <p class="mt-5 text-justify poppins-medium h-[100px]">
                    Pelaku Union Busting Bisa Kena Pidana hingga Denda Rp 500 Juta, Berikut Aturan dan Hak Mendirikan
                    Serikat
                    Pekerja?
                </p>
                <hr class="my-3">
                <p class="text-sm text-gray-500 poppins-medium">Kamis, 07 Maret 2024 - 13:37 WIB</p>
                <div class="flex justify-end text-sm items-center mt-5 gap-2">
                    <span class="leading-none translate-y-0.5">3.5/4</span>
                    <i class="fa-regular fa-star"></i>
                </div>
            </a>
            <a href="" class="hover:scale-[101%] duration-200 bg-[#DEDEDE] rounded-3xl shadow-md p-5">
                <img src="/imgs/1331957_720 1.png" alt="">
                <p class="mt-5 text-justify poppins-medium h-[100px]">
                    Pansus Haji Belum Bisa Pastikan Adanya Unsur Pidana soal Pembagian Kuota Haji
                </p>
                <hr class="my-3">
                <p class="text-sm text-gray-500 poppins-medium">Kamis, 07 Maret 2024 - 13:37 WIB</p>
                <div class="flex justify-end text-sm items-center mt-5 gap-2">
                    <span class="leading-none translate-y-0.5">3.5/4</span>
                    <i class="fa-regular fa-star"></i>
                </div>
            </a>
            <a href="" class="hover:scale-[101%] duration-200 bg-[#DEDEDE] rounded-3xl shadow-md p-5">
                <img src="/imgs/sri-mulyani-umumkan-thr-gaji-ke-13-pns-dibayar-100-tahun-ini-1_169 1.png" alt="">
                <p class="mt-5 text-justify poppins-medium h-[100px]">
                    Alasan Sri Mulyani Sindir Orang RI yang Histeris Lihat Jumlah Utang Pemerintah
                </p>
                <hr class="my-3">
                <p class="text-sm text-gray-500 poppins-medium">Kamis, 07 Maret 2024 - 13:37 WIB</p>
                <div class="flex justify-end text-sm items-center mt-5 gap-2">
                    <span class="leading-none translate-y-0.5">3.5/4</span>
                    <i class="fa-regular fa-star"></i>
                </div>
            </a>
            <a href="" class="hover:scale-[101%] duration-200 bg-[#DEDEDE] rounded-3xl shadow-md p-5">
                <img src="/imgs/terjerat-kasus-mafia-tanah-terduga-pengemplang-utang-santoso-halim-divonis-ma-pidana-penjara-mdj 1.png"
                    class="w-full h-[210px]">
                <p class="mt-5 text-justify poppins-medium h-[100px]">
                    Terjerat Kasus Mafia Tanah, Terduga Pengemplang Utang Santoso Halim Divonis MA Pidana Penjara
                </p>
                <hr class="my-3">
                <p class="text-sm text-gray-500 poppins-medium">Kamis, 07 Maret 2024 - 13:37 WIB</p>
                <div class="flex justify-end text-sm items-center mt-5 gap-2">
                    <span class="leading-none translate-y-0.5">3.5/4</span>
                    <i class="fa-regular fa-star"></i>
                </div>
            </a>
        </div>
    </main>

    @include('partials.footer')
@endsection
