<x-guest-layout>
    <section
        class=" relative z-10 after:contents-[''] after:absolute after:z-0 after:h-full xl:after:w-1/3 after:top-0 after:right-0 after:bg-gray-50">
        <div class="w-full max-w-7xl px-4 md:px-5 lg-6 mx-auto relative z-10">
            <div class="grid grid-cols-12">
                <div
                    class="col-span-12 xl:col-span-8 lg:pr-8 pt-14 pb-8 lg:py-24 w-full max-xl:max-w-3xl max-xl:mx-auto">
                    <div class="flex items-center justify-between pb-8 border-b border-gray-300">
                        <h2 class="font-manrope font-bold text-3xl leading-10 text-black">Checkout Paket Layanan</h2>
                    </div>
                    <div class="grid grid-cols-12 mt-8 max-md:hidden pb-6 border-b border-gray-200">
                        <div class="col-span-12 md:col-span-7">
                            <p class="font-normal text-lg leading-8 text-gray-400">Detail Paket</p>
                        </div>
                    </div>
                    <div class="bg-white shadow-md rounded-md overflow-hidden">
                        <img src="https://placehold.co/600x400?text=Paket%20VIP" alt="Placeholder Gambar Paket VIP"
                            class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h3 class="font-semibold text-lg text-center mb-2">Paket VIP</h3>
                            <p class="text-gray-500 text-sm text-center mb-3">Rasakan pengalaman edukasi eksklusif dan
                                menyeluruh di dunia pertanian modern!</p>

                            <div class="bg-green-50 rounded-md p-3 mb-3">
                                <ul class="list-disc list-inside text-sm">
                                    <li>Tour Edukasi Lengkap</li>
                                    <li>Jelajahi berbagai aspek pertanian dan peternakan modern</li>
                                    <li>Lihat langsung teknik dan teknologi terbaru</li>
                                </ul>
                            </div>

                            <div class="flex items-center justify-between mb-2">
                                <div>
                                    <span class="text-gray-500">Harga:</span>
                                    <span class="font-bold text-lg text-indigo-600">Rp 50.000</span>
                                </div>
                                <div class="flex items-center border border-gray-300 rounded-lg">
                                    <button class="px-3 py-2 text-gray-600 hover:bg-gray-100" data-action="kurang">
                                        <i class="fa fa-minus"></i>
                                    </button>
                                    <input type="text" value="1"
                                        class="w-12 h-full text-center border-l border-r border-gray-300 px-2 text-gray-900"
                                        data-target="jumlah">
                                    <button class="px-3 py-2 text-gray-600 hover:bg-gray-100" data-action="tambah">
                                        <i class="fa fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div
                    class=" col-span-12 xl:col-span-4 bg-gray-50 w-full max-xl:px-6 max-w-3xl xl:max-w-lg mx-auto lg:pl-8 py-24">
                    <h3 class="font-manrope font-bold text-2xl leading-10 text-black pb-8 border-b border-gray-300">
                        Info Pelanggan</h3>
                    <div class="mt-8">
                        <form>
                            {{-- Username --}}
                            <div class="relative mb-4">
                                <x-elements.input-label for="username" :value="__('Username')" />
                                <x-elements.text-input id="username"
                                    class="block mt-1 w-full font-medium text-gray-700" type="text" name="username"
                                    value="{{ auth()->user()->username }}" readonly />
                            </div>

                            {{-- No Telepon --}}
                            <div class="relative mb-4">
                                <x-elements.input-label for="phone" :value="__('No Telepon')" />
                                <x-elements.text-input id="phone" class="block mt-1 w-full" type="text"
                                    name="phone" value="{{ auth()->user()->phone }}" required />
                            </div>

                            {{-- Email --}}
                            <div class="relative mb-4">
                                <x-elements.input-label for="email" :value="__('Email')" />
                                <x-elements.text-input id="email" class="block mt-1 w-full" type="email"
                                    name="email" value="{{ auth()->user()->email }}" readonly />
                            </div>

                            {{-- Tanggal Kunjungan --}}
                            <div class="relative mb-4">
                                <x-elements.input-label for="tanggal_kunjungan" :value="__('Tanggal Kunjungan')" />
                                <x-elements.text-input id="tanggal_kunjungan" class="block mt-1 w-full" type="date"
                                    name="tanggal_kunjungan" required />
                            </div>

                            {{-- Metode Pembayaran --}}
                            <div class="relative mb-4">
                                <x-elements.input-label for="metode_pembayaran" :value="__('Metode Pembayaran')" />
                                <select id="metode_pembayaran"
                                    class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                                    name="metode_pembayaran" required>
                                    <option value="offline">Offline</option>
                                    <option value="dana" disabled>Dana (Online)</option>
                                </select>
                            </div>

                            {{-- Total Harga --}}
                            <div class="flex items-center justify-between py-4">
                                <p class="font-medium text-lg text-gray-900">Total:</p>
                                <p class="font-semibold text-lg text-gray-900" id="total_harga">$485.00</p>
                            </div>

                            <button type="submit"
                                class="w-full text-center bg-indigo-600 rounded-xl py-3 px-6 font-semibold text-lg text-white transition-all duration-500 hover:bg-indigo-700">
                                Checkout
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>
