<?php

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.guest')] class extends Component {
    public string $username = '';
    public string $email = '';
    public string $password = '';
    public string $password_confirmation = '';

    /**
     * Handle an incoming registration request.
     */
    public function register(): void
    {
        $validated = $this->validate([
            'username' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'string', 'confirmed', Rules\Password::defaults()],
        ]);

        $validated['password'] = Hash::make($validated['password']);

        $user = User::create($validated);

        event(new Registered($user));
        Auth::login($user);
        redirect(route('dashboard'));
    }
}; ?>

<section class="py-12 h-screen bg-base-100">
    <div class="w-full lg:w-4/12 px-4 mx-auto">
        <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-md rounded-lg border-0 bg-base-100">
            <div class="rounded-t mb-0 px-6 py-6 text-center">
                <h6 class="text-gray-600 text-lg font-bold mb-3">
                    Register
                </h6>
            </div>

            <!-- Register Form -->
            <div class="px-4 lg:px-10 py-10">
                <!-- Session Status -->
                <x-elements.auth-session-status class="mb-4" :status="session('status')" />

                <form wire:submit="register">
                    <!-- Username -->
                    <div class="relative mb-4">
                        <x-elements.input-label for="username" :value="__('Username')" />
                        <x-elements.text-input wire:model="username" id="username" class="block mt-1 w-full"
                            type="text" name="username" required autofocus />
                        <x-elements.input-error :messages="$errors->get('username')" class="mt-2" />
                    </div>

                    <!-- Email Address -->
                    <div class="relative mb-4">
                        <x-elements.input-label for="email" :value="__('Email')" />
                        <x-elements.text-input wire:model="email" id="email" class="block mt-1 w-full"
                            type="email" name="email" required autocomplete="email" />
                        <x-elements.input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div class="relative mb-4">
                        <x-elements.input-label for="password" :value="__('Password')" />
                        <x-elements.text-input wire:model="password" id="password" class="block mt-1 w-full"
                            type="password" name="password" required autocomplete="new-password" />
                        <x-elements.input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Confirm Password -->
                    <div class="relative mb-4">
                        <x-elements.input-label for="password_confirmation" :value="__('Confirm Password')" />
                        <x-elements.text-input wire:model="password_confirmation" id="password_confirmation"
                            class="block mt-1 w-full" type="password" name="password_confirmation" required
                            autocomplete="new-password" />
                        <x-elements.input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>

                    <div class="flex items-center justify-between mt-4">
                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                            href="{{ route('login') }}" wire:navigate>
                            {{ __('Already registered?') }}
                        </a>

                        <x-elements.primary-button class="ms-4">
                            {{ __('Register') }}
                        </x-elements.primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
