{{-- custom login view --}}
<x-auth-layout>
    <div class="flex flex-row md:p-8 px-4 py-8 min-h-screen">
        <div class="flex flex-col w-full md:px-6 gap-10 md:gap-4 justify-center">
            <a href="{{ route('home') }}" class="w-fit">
                <img src="{{ url('/images/logo.png') }}" class="h-16" alt="Logo" />
            </a>
            <div class="flex flex-col gap-2">
                <h5 class="font-semibold text-xl">Buat Akun</h5>
                <p class="text-sm text-justify text-gray-500">Mulai perjalanan Anda bersama kami! Daftarkan akun baru
                    untuk mendapatkan akses ke fitur-fitur
                    menarik yang
                    telah kami sediakan.
                </p>
            </div>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('register') }}" class="flex flex-col gap-2">
                @csrf

                {{-- name --}}
                <div>
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Name</label>
                    <input type="text" id="name"
                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-base-red focus:border-base-red block w-full py-3"
                        placeholder="Enter your name" name="name" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                {{-- email --}}
                <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                    <input type="email" id="email"
                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-base-red focus:border-base-red block w-full py-3"
                        placeholder="Enter your email" name="email" autocomplete="username" required />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                {{-- password --}}
                <div>
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Password</label>
                    <input type="password" id="password"
                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-base-red focus:border-base-red block w-full py-3"
                        placeholder="Enter your password" name="password" autocomplete="current-password" required />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                {{-- konfirmasi password --}}
                <div>
                    <label for="password_confirmation" class="block mb-2 text-sm font-medium text-gray-900">Konfirmasi
                        Password</label>
                    <input type="password" id="password_confirmation"
                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-base-red focus:border-base-red block w-full py-3"
                        placeholder="Confirm your password" name="password_confirmation" required
                        autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                {{-- buttons --}}
                <div class="flex flex-col gap-3 mt-2 text-sm">
                    <button type="submit"
                        class="text-base-white bg-base-red font-bold rounded-xl px-6 py-3 text-center hover:bg-base-black hover:text-base-white focus:ring-4 focus:outline-none focus:ring-gray-400 w-full">Daftar</button>
                    <a href="{{ route('oauth.google') }}"
                        class="text-base-black border-2 bg-white font-bold rounded-xl px-6 py-3 text-center hover:bg-base-black hover:text-base-white focus:ring-4 focus:outline-none focus:ring-gray-400 w-full flex flex-row items-center justify-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 48 48">
                            <path fill="#ffc107"
                                d="M43.611 20.083H42V20H24v8h11.303c-1.649 4.657-6.08 8-11.303 8c-6.627 0-12-5.373-12-12s5.373-12 12-12c3.059 0 5.842 1.154 7.961 3.039l5.657-5.657C34.046 6.053 29.268 4 24 4C12.955 4 4 12.955 4 24s8.955 20 20 20s20-8.955 20-20c0-1.341-.138-2.65-.389-3.917" />
                            <path fill="#ff3d00"
                                d="m6.306 14.691l6.571 4.819C14.655 15.108 18.961 12 24 12c3.059 0 5.842 1.154 7.961 3.039l5.657-5.657C34.046 6.053 29.268 4 24 4C16.318 4 9.656 8.337 6.306 14.691" />
                            <path fill="#4caf50"
                                d="M24 44c5.166 0 9.86-1.977 13.409-5.192l-6.19-5.238A11.9 11.9 0 0 1 24 36c-5.202 0-9.619-3.317-11.283-7.946l-6.522 5.025C9.505 39.556 16.227 44 24 44" />
                            <path fill="#1976d2"
                                d="M43.611 20.083H42V20H24v8h11.303a12.04 12.04 0 0 1-4.087 5.571l.003-.002l6.19 5.238C36.971 39.205 44 34 44 24c0-1.341-.138-2.65-.389-3.917" />
                        </svg>
                        Daftar
                        dengan Akun Google</a>
                </div>

                <div class="flex flex-row items-center justify-center text-sm">
                    <p class="text-gray-400">Sudah punya Akun? <a href="{{ route('login') }}"
                            class="text-base-red font-semibold">Login
                            Sekarang</a></p>
                </div>
            </form>

        </div>
        <div class="hidden md:flex w-full bg-cover bg-center rounded bg-blend-darken"
            style="background-image: url('{{ url('/images/hero-image.jpg') }}')">
            <div class="flex flex-col w-full px-5 justify-end py-10 gap-2 text-base-white">
                <h5 class="text-2xl font-semibold">Satu Atap Akademik</h5>
                <p class="text-sm">Lorem ipsum dolor sit amet consectetur. Varius sed purus elementum urna orci purus
                    amet nec faucibus
                    urna. Sed sem aliquam donec platea. Tincidunt lacus purus morbi imperdiet.</p>
            </div>
        </div>
    </div>
</x-auth-layout>
