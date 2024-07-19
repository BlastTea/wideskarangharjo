<x-guest-layout>
    <x-slot name="title">Homepage</x-slot>
    <header>
        <nav></nav>
    </header>

    <main x-show="!loading" x-transition:enter="transition-opacity duration-2000" x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100" class="bg-white">
        {{-- Hero Section Start --}}
        <div class="bg-cover bg-center h-[95vh] w-full absolute left-0"
            style="background-image: url('{{ asset('storage/background/background_2.png') }}');">
        </div>
        <section class="text-base-dark dark:text-base-light relative">
            <div class="absolute bottom-0 bg-gradient-to-t from-white to-white/5 h-56 w-full"></div>
            <div
                class="container px-10 flex flex-col relative z-10 h-[95vh] justify-end py-16 md:justify-end text-base-light">
                <h2 class="text-3xl font-semibold md:text-4xl animate-fadeInDown">Wisata Desa Karangharjo</h2>
                <p class="text-base-light my-4 lg:w-1/2 animate-fadeInDown">
                    Kami dengan senang hati menyambut Anda di Rumah Pintar
                    Karangharjo, destinasi wisata edukasi yang menawarkan pengalaman unik dan menarik di
                    Jember.
                    <span class="hidden lg:block"> Temukan berbagai kegiatan
                        yang menginspirasi, edukatif, dan menyenangkan bagi seluruh keluarga. Dari pameran
                        interaktif
                        hingga workshop kreatif, kami memiliki sesuatu untuk semua orang.</span>
                </p>
                <div class="animate-slideInLeft">
                    <div class="mt-5 mb-10">
                        <p class="text-base-light"><strong class="font-bold">Buka</strong> 08:00 - 17:00</p>
                    </div>
                    <div class="flex gap-3 md:ml-auto">
                        <a href="javascript:void(0)" class="btn btn-secondary">Lihat Aktivitas <i
                                class="pl-2 fas fa-play"></i></a>
                        <button class="btn btn-primary">Pesan Paket <i class="pl-2 fas fa-plus"></i></button>
                        <button
                            class="flex items-center justify-center w-10 h-10 border border-gray-900 text-gray-900 rounded-full outline-icon">
                            <i class="fas fa-share-alt"></i>
                        </button>
                    </div>
                </div>
            </div>
        </section>
        {{-- Hero Section Eng --}}

        {{-- About Section Start --}}
        <section class="h-screen"></section>
        {{-- About Section Eng --}}

        {{-- Package Section Start --}}
        <section class="h-screen"></section>
        {{-- Package Section Eng --}}

        {{-- Rating Section Start --}}
        <section class="h-screen"></section>
        {{-- Rating Section Eng --}}

        {{-- Footer Section Start --}}
        <section class="h-screen"></section>
        {{-- Footer Section Eng --}}

    </main>
</x-guest-layout>
