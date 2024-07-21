<?php

use App\Livewire\Forms\LoginForm;
use Illuminate\Support\Facades\Log;
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
        Log::channel('daily_access')->info("LOGIN INFO: login() executed");

        $this->validate();

        $this->form->authenticate();

        Session::regenerate();

        $this->redirectIntended(default: route('dashboard', absolute: false), navigate: true);
    }
}; ?>
<section class="py-12 h-screen bg-base-100">
    <div class="w-full lg:w-4/12 px-4 mx-auto">
        <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-md rounded-lg border-0 bg-base-100">
            <div class="rounded-t mb-0 px-6 py-6 text-center">
                <h6 class="text-gray-600 text-lg font-bold mb-3">
                    Login
                </h6>
                {{-- <div class="flex justify-center space-x-2 mb-6">
                    <button
                        class="bg-white text-blueGray-700 font-bold px-4 py-2 rounded shadow hover:shadow-md flex items-center transition duration-150 ease-linear">
                        <img alt="Github" class="w-5 mr-1"
                            src="https://demos.creative-tim.com/notus-js/assets/img/github.svg">Github
                    </button>
                    <button
                        class="bg-white text-blueGray-700 font-bold px-4 py-2 rounded shadow hover:shadow-md flex items-center transition duration-150 ease-linear">
                        <img alt="Google" class="w-5 mr-1"
                            src="https://demos.creative-tim.com/notus-js/assets/img/google.svg">Google
                    </button>
                </div>
                <hr class="my-6 border-blueGray-300"> --}}
            </div>

            <!-- Login Form -->
            <div class="px-4 lg:px-10 py-10">
                <!-- Session Status -->
                <x-elements.auth-session-status class="mb-4" :status="session('status')" />

                <form wire:submit="login">
                    <!-- Email Address -->
                    <div class="relative mb-4">
                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                            for="email">Email</label>
                        <input wire:model="form.email" id="email"
                            class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full transition duration-150 ease-linear"
                            type="email" name="email" required autofocus autocomplete="email" />
                        <x-elements.input-error :messages="$errors->get('form.email')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div class="relative mb-4">
                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                            for="password">Password</label>
                        <input wire:model="form.password" id="password"
                            class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full transition duration-150 ease-linear"
                            type="password" name="password" required autocomplete="current-password" />
                        <x-elements.input-error :messages="$errors->get('form.password')" class="mt-2" />
                    </div>

                    <!-- Remember Me -->
                    <div class="flex items-center mb-4">
                        <input wire:model="form.remember" id="remember" type="checkbox"
                            class="checkbox checkbox-primary" name="remember">
                        <label for="remember" class="ml-2 text-sm font-semibold text-blueGray-600">Remember me</label>
                    </div>

                    <div class="flex items-center justify-between mt-4">
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                href="{{ route('password.request') }}" wire:navigate>
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif

                    </div>
                    <div class="text-center mt-6">
                        <x-elements.primary-button class="w-full">
                            {{ 'Login' }}
                        </x-elements.primary-button>
                        @if (Route::has('register'))
                            <div class="flex text-sm text-gray-600 mt-3">
                                Belum memiliki akun?
                                <a class="underline text-blue-500 font-normal hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                    href="{{ route('register') }}" wire:navigate>
                                    {{ __('Buat akun') }}
                                </a>
                            </div>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
