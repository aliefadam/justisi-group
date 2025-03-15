@extends('layouts.app')

@section('content')
    @include('partials.navbar')

    <main class="p-20 pt-36 bg-gray-200"
        style="background-image: url('/imgs/hero.png'); background-position: center; background-repeat: no-repeat; background-size: 100%;">

        <div class="flex justify-between">
            <div class="">
                <div class="text-white flex items-center gap-3 text-2xl">
                    <i class="fa-solid fa-user"></i>
                    <h1>RASYID HAMIDI</h1>
                </div>
                <div class="mt-5">
                    <img src="/imgs/image 15.png" class="rounded-md">
                </div>
            </div>
            <div class="justify-items-end">
                <h1 class="poppins-semibold text-xl text-right w-[70%]">
                    EIGEN JUSTISI : IFTITAH TOUR TRAVEL, mempersiapkan kantor terbarunya di Karawang
                </h1>
                <p class="mt-5 poppins-medium">March, 2024</p>
            </div>
        </div>
    </main>

    <main class="p-20">
        <div class="grid grid-cols-2 gap-10 h-fit">
            <div class="text-justify space-y-5">
                <p>
                    Kantor yang akan dibuka di pusat Kabupaten Karawang ini, direncanakan akan dihadiri seluruh
                    manajemenIftitah Tour Traveldan disaksikan oleh beberapa klien dan partner yang sudah bekerjasama selama
                    ini.
                </p>
                <p>
                    “Melihat besarnya potensi Umroh dan Haji di area Karawang dan sekitarnya, maka sejak tahun 2023, Iftitah
                    Tour Travel melakukan pencarian alternatif kantor baru,” kata Rasyid Hamidi, S.T, DirekturIftitah Tour
                    Travel.
                </p>
                <p>
                    Kemudian direncanakan melakukan investasi pembukaan kantor cabang di tahun 2024. Berlanjut dengan
                    oprasional
                    kantor yang mulai dioperasikan di tahun 2024 pertengahan ini.
                </p>
            </div>
            <div class="justify-items-end">
                <img src="/imgs/image 17.png" class="w-[80%] -translate-y-[300px]">
            </div>
        </div>
        <div class="text-justify space-y-5 -translate-y-[250px]">
            <p>
                “Kehadiran kantor Iftitah Tour Travel cabang Karawang ini adalah salah satu bentuk pertumbuhan
                bisnis Iftitah Tour Tavel perusahaan penyelenggara ibadah umrah & haji serta bentuk nyata peningkatan
                layanan kepada klien dan partner yang memiliki area bisnis Karawang serta bentuk investasi dari owner
                Iftitah Tour Travel Assoc. Prof. Dr. Eigen Justisi, S.T., S.H., M.H., CLD., CLA., CBLC., CTL ,”.
            </p>

            <p>
                Mas Shofa S Zakaria, S.IP, M.Si, Direktur Eksekutif Iftitah Tour Travel menambahkan, hadirnya kantor
                cabang Iftitah Tour Travel ini dapat menjadi pilihan terbaik bagi para jamaah dan pelaku bisnis Travel
                umrah haji di area Jawa Barat dan sekitarnya untuk mengakses produk atau layanan yang bisa meningkatkan
                layanan dan fasilitas kepada jamaah.
            </p>

            <p>
                “Seperti paket Umroh dan haji, maupun kombinasi umroh plus Turki, Dubai, Mesir.,” ujar Mas Shofa S Zakaria,
                S.IP, M.Si. Dengan pembukaan cabang Karawang ini, Iftitah Tour Travel menjadi perusahaan Travel Umroh Haji
                di Indonesia yang memiliki sentra operasi di Jawa Timur & Jawa Barat, yaitu di Malang dan Karawang.
            </p>
        </div>
        <div class="mt-5 -translate-y-[200px]">
            <div class="flex items-center gap-3 text-lg">
                <i class="fa-solid fa-envelope text-[#D20000]"></i>
                <h1>Tinggalkan Pesan</h1>
            </div>
            <div class="mt-5 grid grid-cols-2 gap-10">
                <div class="">
                    <div class="mb-5">
                        <label for="pesan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Pesan
                        </label>
                        <textarea id="pesan" rows="4"
                            class="resize-none block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"></textarea>
                    </div>
                    <div class="mb-5">
                        <label for="nama_lengkap" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Nama Lengkap
                        </label>
                        <input type="text" id="nama_lengkap"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" />
                    </div>
                    <div class="mb-5">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Email
                        </label>
                        <input type="email" id="email"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" />
                    </div>
                </div>
                <div class="">
                    <div class="mb-5">
                        <label for="no_telepon" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            No. Telepon
                        </label>
                        <input type="text" id="no_telepon"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" />
                    </div>
                    <div class="flex justify-end">
                        <button type="button"
                            class="text-white bg-[#793A09] hover:bg-[#9A4F14] focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-base px-5 py-2.5 text-center w-full">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </main>

    @include('partials.footer')
@endsection
