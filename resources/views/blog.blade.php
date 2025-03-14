@extends('layouts.app')

@section('content')
    @include('partials.navbar')

    <main class="p-20 pt-36 bg-gray-200"
        style="background-image: url('/imgs/hero.png'); background-position: center; background-repeat: no-repeat; background-size: 100%;">

        <div class="rounded-lg shdaow-md mt-14 overflow-hidden">
            <div class="bg-[#793A09] px-10 py-5 text-white flex items-center justify-between">
                <h1 class="text-2xl poppins-medium">BLOG</h1>
                <a href="" class="hover:underline">Selengkapnya</a>
            </div>
            <div class="bg-white/80 px-10 py-10 grid grid-cols-2 gap-5">
                <div class="">
                    <h1 class="poppins-semibold text-lg">EIGEN JUSTISI : IFTITAH TOUR TRAVEL, mempersiapkan kantor
                        terbarunya di
                        Karawang
                    </h1>
                    <p class="mt-5 text-justify">
                        Kantor yang akan dibuka di pusat Kabupaten Karawang ini, direncanakan akan dihadiri seluruh
                        manajemen Iftitah Tour Travel dan disaksikan oleh <a href=""
                            class="text-blue-700 hover:text-blue-800">Selengkapnya ....</a>
                    </p>
                </div>
                <div class="">
                    <img src="/imgs/image 15.png" class="rounded-md">
                </div>
            </div>
        </div>
    </main>

    @include('partials.footer')
@endsection
