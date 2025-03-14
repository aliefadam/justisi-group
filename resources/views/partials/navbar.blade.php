@php
    $activeClass = 'text-[#9A4F14] bg-white/80';
    $nonActiveClass = 'text-white';
@endphp

<nav class="absolute bg-black/30 z-10 top-0 left-0 w-full flex justify-between items-center py-5 px-10">
    <img src="/imgs/logo 2.png" class="w-[130px]">
    <div class="flex items-center gap-5">
        <a href="{{ route('home') }}"
            class="{{ request()->routeIs('home') ? $activeClass : $nonActiveClass }} px-4 py-2 poppins-medium rounded-md text-lg">Home</a>
        <a href="{{ route('prosedur') }}"
            class="{{ request()->routeIs('prosedur') ? $activeClass : $nonActiveClass }} px-4 py-2 poppins-medium rounded-md text-lg">Procedur</a>
        <a href="{{ route('berita') }}"
            class="{{ request()->routeIs('berita') ? $activeClass : $nonActiveClass }} px-4 py-2 poppins-medium rounded-md text-lg">Berita</a>
        <a href="{{ route('blog') }}"
            class="{{ request()->routeIs('blog') ? $activeClass : $nonActiveClass }} px-4 py-2 poppins-medium rounded-md text-lg">Blog</a>
        <a href="{{ route('pendaftaran') }}"
            class="{{ request()->routeIs('pendaftaran') ? $activeClass : $nonActiveClass }} px-4 py-2 poppins-medium rounded-md text-lg">Pendaftaran</a>
    </div>
</nav>
