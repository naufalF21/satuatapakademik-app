{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox"
                    class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}

{{-- custom login view --}}
<x-auth-layout>
    <div class="flex flex-row md:p-10 px-4 py-8 min-h-screen">
        <div class="flex flex-col w-full md:p-6 md:justify-between gap-10 md:gap-0">
            <a href="{{ route('home') }}" class="w-fit">
                <img src="{{ url('/images/logo.png') }}" class="h-16" alt="Logo" />
            </a>
            <div class="flex flex-col gap-2">
                <h5 class="font-semibold text-2xl">Selamat Datang</h5>
                <p class="text-base text-justify text-gray-500">Selamat datang kembali! Akses akun Anda untuk melanjutkan
                    ke
                    fitur-fitur
                    menarik yang
                    telah kami sediakan.
                </p>
            </div>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}" class="flex flex-col gap-4">
                @csrf

                {{-- email --}}
                <div>
                    <label for="email"
                        class="block mb-2 text-base font-medium text-gray-900 dark:text-white">Email</label>
                    <input type="email" id="email"
                        class="bg-white border border-gray-300 text-gray-900 text-base rounded-lg focus:ring-base-red focus:border-base-red block w-full py-3"
                        placeholder="Enter your email" name="email" autofocus autocomplete="username" required />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                {{-- password --}}
                <div>
                    <label for="password"
                        class="block mb-2 text-base font-medium text-gray-900 dark:text-white">Password</label>
                    <input type="password" id="password"
                        class="bg-white border border-gray-300 text-gray-900 text-base rounded-lg focus:ring-base-red focus:border-base-red block w-full py-3"
                        placeholder="Enter your password" name="password" autocomplete="current-password" required />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Remember Me -->
                <div class="flex flex-row justify-between">
                    <div class="flex items-start mb-5">
                        <div class="flex items-center h-5">
                            <input id="remember" type="checkbox" value=""
                                class="w-4 h-4 border border-gray-300 rounded bg-white focus:ring-3 focus:ring-blue-300" />
                        </div>
                        <label for="remember" class="ms-2 text-base font-medium text-gray-900">Remember
                            me</label>
                    </div>
                    @if (Route::has('password.request'))
                        <a class="underline text-base text-gray-600 hover:text-base-red"
                            href="{{ route('password.request') }}">
                            {{ __('Lupa password?') }}
                        </a>
                    @endif
                </div>

                {{-- buttons --}}
                <div class="flex flex-col gap-4">
                    <button type="submit"
                        class="text-base-white bg-base-red font-bold rounded-xl px-6 py-3 text-center hover:bg-base-black hover:text-base-white focus:ring-4 focus:outline-none focus:ring-gray-400 w-full">Masuk</button>
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
                        Masuk
                        dengan Akun Google</a>
                </div>

                <div class="flex flex-row items-center justify-center">
                    <p class="text-gray-400">Belum punya Akun? <a href="{{ route('register') }}"
                            class="text-base-red font-semibold">Daftar
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
