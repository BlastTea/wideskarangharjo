<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        @if (isset($title))
            {{ $title }}
        @endif
        | {{ config('app.name') }}
    </title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <!-- SEO -->
    <meta name="description"
        content="Jelajahi keindahan alam dan wisata edukasi di Desa Karangharjo, Jember. Temukan pesona alam, budaya lokal, dan destinasi wisata menarik lainnya.">
    <meta name="keywords"
        content="wisata karangharjo, wisata jember, wisata alam, wisata edukasi, desa wisata, tempat wisata, objek wisata, karangharjo jember, jember, indonesia">

    <!-- Open Graph Protocol -->
    <meta property="og:title" content="Wisata Desa Karangharjo Jember - Pesona Alam & Edukasi" />
    <meta property="og:description"
        content="Jelajahi keindahan alam dan wisata edukasi di Desa Karangharjo, Jember. Temukan pesona alam, budaya lokal, dan destinasi wisata menarik lainnya." />
    <meta property="og:image" content="https://www.contohwebsite.com/gambar-menarik.jpg" />
    <meta property="og:url" content="https://www.contohwebsite.com/" />

    <!-- Twitter Cards -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Wisata Desa Karangharjo Jember - Pesona Alam & Edukasi">
    <meta name="twitter:description"
        content="Jelajahi keindahan alam dan wisata edukasi di Desa Karangharjo, Jember. Temukan pesona alam, budaya lokal, dan destinasi wisata menarik lainnya.">
    <meta name="twitter:image" content="https://www.contohwebsite.com/gambar-menarik.jpg">

    <!-- Scripts -->
    @vite(['resources/css/guest.css', 'resources/js/guest.js'])
</head>

<body x-data="{ loading: true, isDarkmode: false }" x-init="window.onload = () => loading = false" :class="{ 'overflow-hidden': loading }"
    class="font-sans text-gray-900 antialiased dark:text-base-dark dark:bg-base-dark">

    <!-- Elemen Loading -->
    <div x-show="loading" class="flex justify-center items-center h-screen w-screen">
        <span class="loading loading-ring loading-lg text-gray-900"></span>
    </div>

    <!-- Navbar Start -->
    <header x-data="{ navbarOpen: true, mobileMenuOpen: false, lastScrollY: 0 }" x-init="() => {
        window.addEventListener('scroll', () => {
            navbarOpen = window.scrollY <= lastScrollY;
            lastScrollY = window.scrollY;
            mobileMenuOpen = false;
        })
    }"
        :class="{ 'transform translate-y-0 opacity-100': navbarOpen, 'transform -translate-y-full opacity-0': !navbarOpen }"
        class="fixed top-0 left-0 right-0 z-50 flex flex-col justify-between bg-opacity-100 bg-base-100 navbar-transition hover:bg-gray-300">

        <div class="container mx-auto px-4 animate-fadeInDown">
            <div class="flex flex-wrap items-center justify-between py-3 text-base-light hover:text-base-dark animate-fadeInDown">
                <div class="w-full relative flex justify-between lg:w-auto lg:static lg:block lg:justify-start">
                    <a href="#"
                        class="text-xl font-bold leading-relaxed inline-block mr-4 py-2 whitespace-nowrap ">
                        Rumah Pintar
                    </a>
                    <button @click="mobileMenuOpen = !mobileMenuOpen"
                        class="cursor-pointer text-xl leading-none px-3 py-1 border border-solid border-transparent rounded bg-transparent block lg:hidden outline-none focus:outline-none"
                        type="button">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 rotate-180" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h8m-8 6h16" />
                        </svg>
                    </button>
                </div>
                <nav :class="{ 'flex': mobileMenuOpen, 'hidden': !mobileMenuOpen }"
                    class="lg:flex flex-grow items-center max-w-full justify-center transition-all duration-500 lg:transition-none animate-fadeInUp"
                    id="collapse-navbar">
                    <ul class="flex flex-col items-center mt-2 lg:space-x-4 lg:flex-row list-none lg:ml-auto">
                        <li class="nav-item">
                            <a class="px-3 py-2 flex btn btn-ghost font-sans items-center text-sm leading-snug hover:opacity-75" href="#home">
                                Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="px-3 py-2 flex btn btn-ghost font-sans items-center text-sm leading-snug hover:opacity-75"
                                href="#services">
                                services
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="px-3 py-2 flex btn btn-ghost font-sans items-center text-sm leading-snug hover:opacity-75" href="#ticket">
                                ticket
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="px-3 py-2 flex btn btn-ghost font-sans items-center text-sm leading-snug hover:opacity-75" href="#about">
                                About Us
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <!-- Navbar End -->
    <div class="flex flex-col items-center bg-gray-100 dark:bg-base-dark">
        {{ $slot }}
    </div>
</body>

</html>
