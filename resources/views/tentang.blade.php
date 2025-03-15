@extends('layouts.app')

@section('content')
    <main class="p-20 pt-36 bg-[#EDEDED]">

        @include('partials.navbar')

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

            <div class="mt-10">
                <h1 class="text-[#9A4F14] poppins-medium text-2xl">Pendidikan</h1>
                <div class="mt-5">
                    <img src="/imgs/image 26.png" class="w-full rounded-md">
                </div>
            </div>

            <div class="mt-10">
                <h1 class="text-[#9A4F14] poppins-medium text-2xl">Penghargaan</h1>
                <div class="mt-5">
                    <img src="/imgs/image 27.png" class="w-full rounded-md">
                </div>
            </div>

            <div class="mt-10">
                <h1 class="text-[#9A4F14] poppins-medium text-2xl">Aksi Sosial</h1>
                <div class="mt-5">
                    <img src="/imgs/image 28.png" class="w-full rounded-md">
                </div>
            </div>

            <div class="mt-20 flex gap-5">
                <div class="flex-[1] bg-black/70 p-5 rounded-md text-white">
                    <h1 class="poppins-medium text-lg">Bisnis Pertama</h1>
                    <p class="mt-3 h-[100px]">
                        Berawal dari Eigen Justisi
                        kantor hukum, mengawasi beberapa
                        perusahaan di Karawang
                        KWS. INDUSTRI
                    </p>
                    <p class="text-right">2012</p>
                </div>
                <div class="flex-[2] bg-black/70 p-5 rounded-md text-white">
                    <h1 class="poppins-medium text-lg">E.T.C</h1>
                    <p class="mt-3 h-[100px]">
                        Perkembangan yang pesat membuat persaingan semakin ketat, oleh karena itu PT Cipta Mandala Herang,
                        PT Maxarios Indomobil meningkatkan sertifikasi agar dapat bersaing di industri
                    </p>
                    <p class="text-right">2014</p>
                </div>
            </div>

            <div class="mt-10">
                <h1 class="text-[#9A4F14] poppins-medium text-2xl">Broad of Director EJ Corp</h1>
                <div class="mt-5 grid grid-cols-2 gap-5">
                    <div class="bg-white p-5 rounded-md shadow-md flex gap-5">
                        <img src='/imgs/image 29.png' class="h-fit" alt="">
                        <div class="flex flex-col gap-2">
                            <h1 class="poppins-semibold">Chief Executive Officer (CEO) Mas Shofa S Zakaria, S.IP.,M.Si.</h1>
                            <p>
                                Pengusaha yang berbakti kepada masyarakat dan merupakan keturunan Bupati pertama Karawang,
                                Adipati Singaperbangsa. Pendidikan tingginya dimanfaatkan untuk membantu masyarakat
                                Karawang.
                            </p>
                        </div>
                    </div>
                    <div class="bg-white p-5 rounded-md shadow-md flex gap-5">
                        <img src='/imgs/image 30.png' class="h-fit" alt="">
                        <div class="flex flex-col gap-2">
                            <h1 class="poppins-semibold">
                                Chief of Operation (COO) Rasyid Hamidi, S.T.
                            </h1>
                            <p>
                                Memiliki pendidikan teknik dan belajar teknik di Jepang, memberikan pengalaman dan manajemen
                                yang mumpuni untuk memimpin perusahaan. perbaikan dalam setiap permasalahan teknis dan non
                                teknis di lapangan memberikan warna dan pembelajaran bagi setiap karyawan.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- End About --}}
    </main>


    {{-- Footer --}}
    @include('partials.footer')
    {{-- End Footer --}}
@endsection
