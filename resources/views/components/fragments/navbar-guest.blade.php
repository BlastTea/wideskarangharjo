    <!-- Navbar Start -->
    <header x-data="{ navbarOpen: true, mobileMenuOpen: false, lastScrollY: 0 }" x-init="() => {
        window.addEventListener('scroll', () => {
            navbarOpen = window.scrollY <= lastScrollY;
            lastScrollY = window.scrollY;
            mobileMenuOpen = false;
        })
    }"
        :class="{ 'transform translate-y-0 opacity-100': navbarOpen, 'transform -translate-y-full opacity-0': !navbarOpen }"
        class="fixed top-0 left-0 right-0 z-50 flex flex-col justify-between navbar-transition text-base-light hover:bg-base-light hover:text-base-dark">

        <div class="container mx-auto px-4 animate-fadeInDown z-10">
            <div class="flex flex-wrap items-center justify-between py-3 animate-fadeInDown">
                <div class="w-full relative flex justify-between lg:w-auto lg:static lg:block lg:justify-start">
                    <a href="#"
                        class="text-2xl font-bold leading-relaxed inline-block mr-4 py-2 whitespace-nowrap ">
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
                    <ul class="flex flex-col items-center mt-2 lg:space-x-1 lg:flex-row list-none lg:m-auto">
                        <li class="nav-item">
                            <a class="px-3 py-2 flex btn btn-ghost w-32 font-sans items-center text-sm leading-snug hover:opacity-75"
                                href="#home">
                                Beranda
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="px-3 py-2 flex btn btn-ghost w-32 font-sans items-center text-sm leading-snug hover:opacity-75"
                                href="#services">
                                Layanan
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="px-3 py-2 flex btn btn-ghost w-32 font-sans items-center text-sm leading-snug hover:opacity-75"
                                href="#ticket">
                                Tiket Wisata
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="px-3 py-2 flex btn btn-ghost w-32 font-sans items-center text-sm leading-snug hover:opacity-75"
                                href="#about">
                                Tentang
                            </a>
                        </li>
                        <li class="nav-item block mt-4 md:hidden w-full">
                            {{-- <div class="grid grid-cols-2 w-full"> --}}
                            {{-- <button type="button"
                                    class="btn btn-ghost w-24 text-blue-400 font-poppins font-light hover:bg-blue-100 hover:text-blue-600 rounded-lg">
                                    <div class="flex items-center">
                                        <i class="fas fa-sign-in-alt mr-1"></i>
                                        Login
                                    </div>
                                </button> --}}
                            <button type="button"
                                class="btn bg-blue-400 w-32 text-white font-poppins font-light hover:bg-blue-500 rounded-lg border-none">
                                <div class="flex items-center">
                                    <i class="fas fa-user-plus mr-1"></i>
                                    Sign Up
                                </div>
                            </button>
                            {{-- </div> --}}
                        </li>
                    </ul>
                    <ul class="hidden lg:flex flex-row list-none gap-3">
                        {{-- <li>
                            <button type="button"
                                class="btn btn-ghost w-24 text-blue-400 font-poppins font-light hover:bg-blue-100 hover:text-blue-600 rounded-lg">
                                <div class="flex items-center">
                                    <i class="fas fa-sign-in-alt mr-1"></i>
                                    Login
                                </div>
                            </button>
                        </li> --}}
                        <li>
                            <button type="button"
                                class="btn bg-blue-400 w-32 text-white font-poppins font-light hover:bg-blue-500 rounded-lg border-none">
                                <div class="flex items-center">
                                    <i class="fas fa-user-plus mr-1"></i>
                                    Sign Up
                                </div>
                            </button>
                        </li>
                    </ul>

                </nav>
            </div>
        </div>
    </header>
    <!-- Navbar End -->
