@extends('layouts.app')

@section('content')
    @include('partials.navbar')

    <main class="p-20 pt-36 bg-gray-200">
        <div class="grid grid-cols-2 gap-10">
            <div class="space-y-10">
                <div class="bg-white rounded-md p-5">
                    <div class="flex items-center gap-5 border-b-2 pb-3 border-[#793A09]">
                        <h1
                            class="border-2 border-[#793A09] text-[#793A09] poppins-semibold w-10 h-10 flex justify-center items-center rounded-full">
                            1
                        </h1>
                        <h1 class="text-lg">Berkas Persyaratan</h1>
                    </div>
                    <div class="mt-5 grid grid-cols-2 gap-5">
                        <div class="">
                            <ol class="max-w-md space-y-1 text-black pl-3 list-decimal list-inside">
                                <li>
                                    Kartu tanda penduduk
                                </li>
                                <li>
                                    Kartu Keluarga
                                </li>
                                <li>
                                    Akta Kelahiran
                                </li>
                                <li>
                                    Pas Foto 3 x 4
                                </li>
                                <li>
                                    Surat Permohonan Gugatan
                                </li>
                                <li>
                                    Surat Kuasa
                                </li>
                                <li>
                                    Bukti Pendukung
                                </li>
                            </ol>
                        </div>
                        <div class="flex items-center justify-center">
                            <i class="fa-solid fa-envelope-open-text text-[100px]"></i>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-md p-5">
                    <div class="flex items-center gap-5 border-b-2 pb-3 border-[#793A09]">
                        <h1
                            class="border-2 border-[#793A09] text-[#793A09] poppins-semibold w-10 h-10 flex justify-center items-center rounded-full">
                            3
                        </h1>
                        <h1 class="text-lg">Penginputan Data</h1>
                    </div>
                    <div class="mt-5">
                        <div class="">
                            <ol class="space-y-1 text-black pl-3 list-decimal list-inside">
                                <li>Setelah berkas siap, maka buka form Pendaftaran Administrasi Gugatan
                                    Kasus Hukum
                                    (SAJustice) yang ada</li>
                                <li>Jika tidak dapat menggunakan web, pengguna wajib membuka kembali prosedur dan panduan
                                    pendaftaran</li>
                                <li>Masukkan id umum pengguna seperti nama, email, nomor hp, dll.</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-md p-5">
                    <div class="flex items-center gap-5 border-b-2 pb-3 border-[#793A09]">
                        <h1
                            class="border-2 border-[#793A09] text-[#793A09] poppins-semibold w-10 h-10 flex justify-center items-center rounded-full">
                            5
                        </h1>
                        <h1 class="text-lg">Penginputan Berkas</h1>
                    </div>
                    <div class="mt-5">
                        <div class="">
                            <ol class="space-y-1 text-black pl-3 list-decimal list-inside">
                                <li>Masukkan semua berkas
                                    yang telah di siapkan berbentuk scan
                                    foto yang jelas ke dalam form
                                    masing-masing sesuai dengan nama
                                    berkas yang di butuhkan,</li>
                                <li> Tekan tombol Submit</li>
                                <li>Berkas akan d proses, Pendaftaran Selesai</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="space-y-10">
                <div class="bg-white rounded-md p-5">
                    <div class="flex items-center gap-5 border-b-2 pb-3 border-[#793A09]">
                        <h1
                            class="border-2 border-[#793A09] text-[#793A09] poppins-semibold w-10 h-10 flex justify-center items-center rounded-full">
                            2
                        </h1>
                        <h1 class="text-lg">Foto Semua Persyaratan (PNG, JPG)</h1>
                    </div>
                    <div class="mt-5 grid grid-cols-2 gap-5">
                        <div class="">
                            <ol class="max-w-md space-y-1 text-black pl-3 list-decimal list-inside">
                                <li>
                                    Scan semua berkas tersebut berbentuk foto
                                </li>
                                <li>
                                    Jangan satukan Foto tersebut dalam 1 folder
                                </li>
                            </ol>
                        </div>
                        <div class="flex items-center justify-center">
                            <i class="fa-solid fa-image text-[100px]"></i>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-md p-5">
                    <div class="flex items-center gap-5 border-b-2 pb-3 border-[#793A09]">
                        <h1
                            class="border-2 border-[#793A09] text-[#793A09] poppins-semibold w-10 h-10 flex justify-center items-center rounded-full">
                            4
                        </h1>
                        <h1 class="text-lg">Penginputan Cerita</h1>
                    </div>
                    <div class="mt-5">
                        <div class="">
                            <ol class="space-y-1 text-black pl-3 list-decimal list-inside">
                                <li>Ceritakan masalah yang telah terjadi
                                    secara terperinci di form yang tertera sehingga
                                    staff dapat menidentifikasi masalah tersebut
                                    masuk kedalam kasus seperti apa</li>
                                <li>Ceritakan harapan Anda dalam menangani
                                    kasus yang di ceritakan sehingga dapat membantu
                                    memudahkan penyelesaian masalah ini</li>
                                <li>Masukkan tanggal penanganan kasus dan para staff akan berusaha memenuhi tanggal yang
                                    diinginkan oleh klien</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    @include('partials.footer')
@endsection
