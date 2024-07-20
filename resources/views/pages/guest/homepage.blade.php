<?php

use App\Livewire\Forms\LoginForm;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.guest')] class extends Component {
    public LoginForm $form;

    /**
     * Handle an incoming authentication request.
     */
    public function login(): void
    {
        $this->validate();

        $this->form->authenticate();

        Session::regenerate();

        $this->redirectIntended(default: route('checkout', absolute: false), navigate: true);
    }
}; ?>

<x-guest-layout>
    <x-slot name="title">Homepage</x-slot>

    <div>
        <x-fragments.navbar-guest />
        <main class="min-h-screen">
            <x-elements.auth-session-status class="mb-4" :status="session('status')" />

            <section class="hero relative bg-cover bg-center text-white"
                style="background-image: url('{{ asset('storage/background/background_13.jpg') }}');">
                <div class="absolute inset-0 bg-black opacity-55"></div>
                <div class="container mx-auto px-4 py-16 relative z-10">
                    <div class="max-w-lg h-[80vh] flex flex-col justify-end md:justify-center md:pt-20">
                        <h1 class="text-4xl font-bold md:text-6xl leading-tight">Wisata Desa Karangharjo</h1>
                        <p class="mt-4 text-lg md:text-xl">
                            Kami dengan senang hati menyambut Anda di Rumah Pintar Karangharjo, destinasi wisata
                            edukasi
                            yang menawarkan pengalaman unik dan menarik di Jember.
                        </p>
                        <div class="flex gap-3 mt-10 items-center">
                            <a href="javascript:void(0)" class="btn bg-white">Lihat Aktivitas <i
                                    class="pl-2 fas fa-play"></i></a>
                            <button class="btn btn-primary">Pesan Paket Wisata<i class="pl-2 fas fa-plus"></i></button>
                            <button class="flex items-center justify-center w-10 h-10 border rounded-full outline-icon">
                                <i class="fas fa-share-alt"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </section>

            <!-- ====== Pricing Section Start -->
            <section class="relative z-10 overflow-hidden bg-white dark:bg-dark pt-20 pb-12 lg:pt-[120px] lg:pb-[90px]">
                <div class="container mx-auto">
                    <div class="-mx-4 flex flex-wrap">
                        <div class="w-full px-4">
                            <div class="mx-auto mb-[60px] max-w-[510px] text-center">
                                <span class="mb-2 block text-lg font-semibold text-primary">
                                    Desa Wisata Karangharjo
                                </span>
                                <h2
                                    class="mb-3 text-4xl leading-[1.208] font-bold text-dark dark:text-white sm:text-4xl md:text-6xl font-lobster">
                                    Paket Wisata
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="-mx-4 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 px-2">
                        <x-fragments.card image="{{ asset('storage/background/background_1.png') }}" price="IDR 10.000"
                            description="Paket Agrowisata" :isLoggedIn="auth()->check()">
                            <x-slot name="features">
                                <div class="flex items-center">
                                    <i class="fas fa-ticket-alt mr-2"></i>1 orang
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-utensils mr-2"></i>Snack & Minuman
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-star mr-2"></i>Pengalaman Eksklusif
                                </div>
                            </x-slot>
                        </x-fragments.card>
                        <x-fragments.card image="{{ asset('storage/background/background_3.png') }}" price="IDR 10.000"
                            description="Paket Agrowisata" :isLoggedIn="auth()->check()">
                            <x-slot name="features">
                                <div class="flex items-center">
                                    <i class="fas fa-ticket-alt mr-2"></i>1 orang
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-utensils mr-2"></i>Snack & Minuman
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-star mr-2"></i>Pengalaman Eksklusif
                                </div>
                            </x-slot>
                        </x-fragments.card>
                        <x-fragments.card image="{{ asset('storage/background/background_5.png') }}" price="IDR 10.000"
                            description="Paket Agrowisata" :isLoggedIn="auth()->check()">
                            <x-slot name="features">
                                <div class="flex items-center">
                                    <i class="fas fa-ticket-alt mr-2"></i>1 orang
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-utensils mr-2"></i>Snack & Minuman
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-star mr-2"></i>Pengalaman Eksklusif
                                </div>
                            </x-slot>
                        </x-fragments.card>
                        <x-fragments.card image="{{ asset('storage/background/background_6.png') }}" price="IDR 10.000"
                            description="Paket Agrowisata" :isLoggedIn="auth()->check()">
                            <x-slot name="features">
                                <div class="flex items-center">
                                    <i class="fas fa-ticket-alt mr-2"></i>1 orang
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-utensils mr-2"></i>Snack & Minuman
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-star mr-2"></i>Pengalaman Eksklusif
                                </div>
                            </x-slot>
                        </x-fragments.card>
                    </div>
                </div>
            </section>
            <!-- ====== Pricing Section End -->

            <x-fragments.modal name="auth" :show="$errors->isNotEmpty()" focusable>
                <form wire:submit.prevent="login" class="bg-white p-6 sm:p-8 md:p-10 rounded-lg max-w-md mx-auto">
                    {{-- Header --}}
                    <h2 class="text-2xl font-semibold text-gray-800 mb-6">
                        {{ __('Login Sebelum melanjutkan') }}
                    </h2>

                    <!-- Email Address -->
                    <div class="mb-4">
                        <x-elements.input-label for="email" :value="__('Email')"
                            class="block text-gray-700 text-sm font-medium mb-1" />
                        <x-elements.text-input wire:model="form.email" id="email"
                            class="block w-full border-gray-300 rounded-lg shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                            type="email" name="email" required autofocus autocomplete="email" />
                        <x-elements.input-error :messages="$errors->get('form.email')" class="mt-2 text-red-600 text-sm" />
                    </div>

                    <!-- Password -->
                    <div class="mb-6">
                        <x-elements.input-label for="password" :value="__('Password')"
                            class="block text-gray-700 text-sm font-medium mb-1" />
                        <x-elements.text-input wire:model="form.password" id="password"
                            class="block w-full border-gray-300 rounded-lg shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                            type="password" name="password" required autocomplete="current-password" />
                        <x-elements.input-error :messages="$errors->get('form.password')" class="mt-2 text-red-600 text-sm" />
                    </div>

                    <!-- Remember Me -->
                    <div class="flex items-center mb-6">
                        <input wire:model="form.remember" id="remember" type="checkbox"
                            class="h-4 w-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500"
                            name="remember">
                        <label for="remember" class="ml-2 text-gray-700 text-sm">
                            {{ __('Remember me') }}
                        </label>
                    </div>

                    <div class="flex flex-col sm:flex-row justify-between mb-6">
                        <div class="text-sm mb-4 sm:mb-0">
                            {{ __('Already have an account?') }}
                            <br>
                            @if (Route::has('register'))
                                <a class="text-indigo-600 hover:text-indigo-500 font-medium"
                                    href="{{ route('register') }}" wire:navigate>
                                    {{ __('Create an account') }}
                                </a>
                            @endif
                        </div>
                        <div class="text-sm">
                            @if (Route::has('password.request'))
                                <a class="text-indigo-600 hover:text-indigo-500 font-medium"
                                    href="{{ route('password.request') }}" wire:navigate>
                                    {{ __('Forgot your password?') }}
                                </a>
                            @endif
                        </div>
                    </div>

                    <div class="flex justify-end">
                        <x-elements.primary-button>
                            {{ __('Log in') }}
                        </x-elements.primary-button>
                    </div>
                </form>
            </x-fragments.modal>

            7
        </main>
    </div>

</x-guest-layout>
