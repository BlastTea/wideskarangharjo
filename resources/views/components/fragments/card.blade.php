@props(['image', 'price', 'description', 'features', 'isLoggedIn'])

<div class="card bg-base-100 p-4 shadow-sm border rounded-lg flex flex-col">
    <figure class="mb-4">
        <img src="{{ $image }}" alt="Property Image" />
    </figure>
    <div class="card-body flex flex-col flex-grow">
        <h2 class="text-lg font-semibold mb-2">{{ $price }}</h2>
        <p class="text-sm text-gray-600 mb-4">{{ $description }}</p>
        <div class="flex flex-wrap gap-2 text-sm text-gray-500 mb-4">
            {{ $features }}
        </div>
        <div class="card-actions mt-auto flex justify-end">
            <button x-data="{
                isLoggedIn: @json(auth()->check()), // Cek status login
                handleClick() { if (this.isLoggedIn) { window.location.href = '/checkout'; } else { $dispatch('open-modal', 'auth'); } }
            }" x-on:click.prevent="handleClick" type="button"
                class="btn btn-outline btn-primary hover:btn-primary w-full max-w-xs sm:max-w-sm md:max-w-md lg:max-w-lg lg:w-28 rounded-sm">
                Pilih
            </button>
        </div>
    </div>
</div>
