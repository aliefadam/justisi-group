@extends('layouts.app')

@section('content')
    @include('partials.navbar')


    <main class="p-20 bg-[#FFF9F5] pt-36">
        <div class="flex justify-between gap-10">
            <h1 class="text-4xl text-[#570000] poppins-semibold">SAJustice</h1>
            <p class="text-justify">
                Silahkan isi form dengan teliti.
                Kami selalu memeriksa dan mengkoreksi jika terjadi kesalahan pengisian dan menginformasikannya melalui email
                atau no.Telp, untuk itu pastikan email anda valid.
            </p>
        </div>

        <div class="mt-10 grid grid-cols-2 gap-10">
            <div class="">
                <div class="mb-5">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Nama Lengkap
                    </label>
                    <input type="text" id="name"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" />
                </div>
                <div class="mb-5">
                    <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Alamat
                    </label>
                    <input type="text" id="address"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" />
                </div>
                <div class="mb-5">
                    <label for="telephone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        No. Telepon
                    </label>
                    <input type="text" id="telephone"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" />
                </div>
                <div class="mb-5">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Email
                    </label>
                    <input type="email" id="email"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" />
                </div>
                <div class="mb-5">
                    <label for="umur" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Umur
                    </label>
                    <input type="number" id="umur"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" />
                </div>
                <div class="mb-5">
                    <label for="tanggal_temu" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Tanggal Temu
                    </label>
                    <input type="date" id="tanggal_temu"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" />
                </div>
                <div class="mb-5">
                    <label for="keluhan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Keluhan
                    </label>
                    <textarea id="keluhan" rows="4"
                        class="resize-none block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"></textarea>
                </div>
                <div class="mb-5">
                    <label for="harapan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Harapan
                    </label>
                    <textarea id="harapan" rows="4"
                        class="resize-none block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"></textarea>
                </div>
            </div>
            <div class="">
                <div class="mb-5">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="foto">Foto</label>
                    <input
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none"
                        id="foto" type="file">
                </div>
                <div class="mb-5">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="kartu_keluarga">Kartu
                        Keluarga</label>
                    <input
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none"
                        id="kartu_keluarga" type="file">
                </div>
                <div class="mb-5">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="ktp">KTP</label>
                    <input
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none"
                        id="ktp" type="file">
                </div>
                <div class="mb-5">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="akta_kelahiran">Akta
                        Kelahiran</label>
                    <input
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none"
                        id="akta_kelahiran" type="file">
                </div>
                <div class="mb-5">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="surat_pendukung">Surat
                        Pendukung</label>
                    <input
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none"
                        id="surat_pendukung" type="file">
                </div>
                <div class="mb-5">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                        for="surat_permohonan_gugatan">Surat
                        Permohonan Gugatan</label>
                    <input
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none"
                        id="surat_permohonan_gugatan" type="file">
                </div>
                <div class="mb-5">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="bukti_pendukung">Bukti
                        Pendukung</label>
                    <input
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none"
                        id="bukti_pendukung" type="file">
                </div>
                <div class="mb-5 flex justify-end">
                    <button type="button"
                        class="text-[#9A4F14] bg-white border cursor-pointer border-[#9A4F14] hover:bg-gray-50 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-base px-10 py-2.5 text-center">
                        Kirim
                    </button>
                </div>
            </div>
        </div>
    </main>

    @include('partials.footer')
@endsection
