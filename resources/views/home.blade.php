@extends('layouts.app')

@section('content')
    {{-- Hero --}}
    <header class="relative h-[700px]">
        <img src="/imgs/hero.png" alt="" class="w-full h-full object-cover">
        <div class="bg-black/30 inset-0 absolute"></div>

        @include('partials.navbar')

        <div class="absolute inset-0 flex justify-between items-center text-white px-[150px] py-20">
            <div class="">
                <h1 class="text-[50px] poppins-semibold w-[70%] leading-[60px]">EIGEN JUSTISI & PARTNERS</h1>
                <div class="mt-5 flex items-center gap-2">
                    <img src="/imgs/image 31.png" class="w-[40px]">
                    <span>EJ CORP MITRA GROUP</span>
                </div>
            </div>
            <div class="">
                <img src="/imgs/Rectangle 257.png" class="w-[300px] translate-y-5">
            </div>
        </div>
    </header>
    {{-- End Hero --}}

    <main class="p-20"
        style="background-image: url('/imgs/still-life-with-scales-justice 1.png'); background-position: center; background-repeat: no-repeat; background-size: 100%;">

        {{-- About --}}
        <div class="bg-white/80 rounded-lg shadow-md p-10">
            <div class="">
                <h1 class="text-[#9A4F14] poppins-medium text-2xl">Tentang</h1>
                <p class="mt-2 text-justify">
                    EJ Corp merupakan perusahaan induk yang bergerak di bidang
                    berbagai sektor usaha. Mulai dari kantor hukum pada tahun 2012 yang berkembang pesat
                    bisnis. Dari Karawang yang mempunyai
                    berdampak besar terhadap kemandirian masyarakat
                    & industri. Diharapkan menjadi mayor
                    kontribusinya terhadap bangsa dan negara. Justisi Group sendiri merupakan badan hukum yang bertujuan
                    utama
                    untuk memperjuangkan keadilan bagi masyarakat Indonesia, khususnya di wilayah Karawang dan sekitarnya.
                    Organisasi ini didirikan dengan visi yang kuat untuk mewujudkan sistem hukum yang adil, merata, dan
                    berkeadilan bagi semua individu, tanpa memandang latar belakang sosial, ekonomi, atau politik. <span
                        class="poppins-semibold">
                        Bisnis
                        Perkembangan bisnis Grup Mitra EJ Corp saat ini terdiri dari manufaktur, jasa, urban farming,
                        pendidikan,
                        hingga yayasan amal, tour dan travel.
                    </span>
                </p>
            </div>

            <div class="mt-10">
                <h1 class="text-[#9A4F14] poppins-medium text-2xl">Ketua EJ Corp</h1>
                <div class="mt-5 flex gap-5">
                    <div class="border-r pr-5">
                        <img src="/imgs/image 25 - Copy.png" alt="">
                    </div>
                    <div class="flex-[2]">
                        <div class="poppins-semibold text-lg">
                            <h1>
                                Dr(c).Eigen Justisi,
                            </h1>
                            <h1>ST.,SH.,MH.,CLA.,CLD.,CBLC.,CTL.,CIRP.,CCA.,CMLC.,CCD.,C.Med.</h1>
                        </div>
                        <p class="text-justify mt-5">
                            Seorang aktivis hukum yang berjiwa sosial tinggi dan berwirausaha di berbagai bidang, memberi
                            kesadaran untuk membantu banyak pihak ditambah dengan pendidikan hingga Doktor di bidang hukum.
                            Perjalanan panjang di bidang hukum dan mendapat rekor tanpa kalah hingga 86 kali lipat
                            uji coba diadakan.
                            Ketajaman berpikir memudahkan dalam menganalisis kasus dan bisnis yang didelegasikan
                            direksi agar dapat dijalankan dengan baik.
                            Dengan sumber daya manusia kepemimpinan yang unggul akan menghasilkan perusahaan yang kuat dan
                            mampu
                            memberikan kesejahteraan bagi karyawannya.
                            Bidang usahanya meliputi properti, firma hukum, EPC, pengangkut sampah, kesehatan, pendidikan
                            dan landasan sosial.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        {{-- End About --}}

        {{-- Blog --}}
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
        {{-- End Blog --}}
    </main>

    {{-- Berita --}}
    <section class="p-20">
        <div class="flex justify-between items-center text-[#9A4F14]">
            <h1 class="text-2xl poppins-medium">Berita</h1>
            <a href="" class="hover:underline">Selengkapnya</a>
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
    </section>
    {{-- End Berita --}}

    {{-- Footer --}}
    @include('partials.footer')
    {{-- End Footer --}}
@endsection
