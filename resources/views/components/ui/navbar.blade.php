<nav>
    <div class="py-5 bg-base-black text-base-white">
        <ul class="container flex flex-row w-full justify-between">
            <li class="text-sm">
                Info@satuatapakademik.com | 0853552222338
            </li>
            <li class="flex flex-row gap-5 md:gap-8">
                <a href="https://www.instagram.com/satuatap_akademik/" target="_blank" class="hover:text-base-red">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="M7.8 2h8.4C19.4 2 22 4.6 22 7.8v8.4a5.8 5.8 0 0 1-5.8 5.8H7.8C4.6 22 2 19.4 2 16.2V7.8A5.8 5.8 0 0 1 7.8 2m-.2 2A3.6 3.6 0 0 0 4 7.6v8.8C4 18.39 5.61 20 7.6 20h8.8a3.6 3.6 0 0 0 3.6-3.6V7.6C20 5.61 18.39 4 16.4 4zm9.65 1.5a1.25 1.25 0 0 1 1.25 1.25A1.25 1.25 0 0 1 17.25 8A1.25 1.25 0 0 1 16 6.75a1.25 1.25 0 0 1 1.25-1.25M12 7a5 5 0 0 1 5 5a5 5 0 0 1-5 5a5 5 0 0 1-5-5a5 5 0 0 1 5-5m0 2a3 3 0 0 0-3 3a3 3 0 0 0 3 3a3 3 0 0 0 3-3a3 3 0 0 0-3-3" />
                    </svg>
                </a>
                <a href="https://www.youtube.com/@satuatapacademy2887" target="_blank" class="hover:text-base-red">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="m10 15l5.19-3L10 9zm11.56-7.83c.13.47.22 1.1.28 1.9c.07.8.1 1.49.1 2.09L22 12c0 2.19-.16 3.8-.44 4.83c-.25.9-.83 1.48-1.73 1.73c-.47.13-1.33.22-2.65.28c-1.3.07-2.49.1-3.59.1L12 19c-4.19 0-6.8-.16-7.83-.44c-.9-.25-1.48-.83-1.73-1.73c-.13-.47-.22-1.1-.28-1.9c-.07-.8-.1-1.49-.1-2.09L2 12c0-2.19.16-3.8.44-4.83c.25-.9.83-1.48 1.73-1.73c.47-.13 1.33-.22 2.65-.28c1.3-.07 2.49-.1 3.59-.1L12 5c4.19 0 6.8.16 7.83.44c.9.25 1.48.83 1.73 1.73" />
                    </svg>
                </a>
                <a href="https://www.tiktok.com/@satuatap.academy?lang=en" class="hover:text-base-red" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="M16.6 5.82s.51.5 0 0A4.278 4.278 0 0 1 15.54 3h-3.09v12.4a2.592 2.592 0 0 1-2.59 2.5c-1.42 0-2.6-1.16-2.6-2.6c0-1.72 1.66-3.01 3.37-2.48V9.66c-3.45-.46-6.47 2.22-6.47 5.64c0 3.33 2.76 5.7 5.69 5.7c3.14 0 5.69-2.55 5.69-5.7V9.01a7.35 7.35 0 0 0 4.3 1.38V7.3s-1.88.09-3.24-1.48" />
                    </svg>
                </a>
            </li>
        </ul>
    </div>
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="{{ url('/images/logo.png') }}" class="h-16" alt="Flowbite Logo" />
        </a>
        <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
            <div class="hidden md:flex flex-row gap-5">
                <a href="{{ route('login') }}"
                    class="text-black font-bold rounded-lg px-4 py-2 text-center hover:text-base-red">
                    Masuk
                </a>
                <x-ui.link-button :href="route('register')">Daftar</x-ui.link-button>
            </div>
            <button data-collapse-toggle="navbar-dropdown" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 "
                aria-controls="navbar-dropdown" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
        </div>
        <div class="hidden w-full md:block md:w-auto" id="navbar-dropdown">
            <ul
                class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg  md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-base-text-base-white">
                <li>
                    <a href="/"
                        class="block py-2 px-3 hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-base-red md:p-0 {{ request()->routeIs('home') ? 'font-semibold text-base-red' : '' }}">Home</a>
                </li>
                <li>
                    <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar"
                        class="flex items-center justify-between w-full py-2 px-3 md:hover:bg-transparent md:border-0 md:hover:text-base-red md:p-0 md:w-auto {{ request()->is('programs') || request()->is('programs/*') ? 'font-semibold text-base-red' : '' }}">Programs
                        <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 4 4 4-4" />
                        </svg></button>
                    <!-- Dropdown menu -->
                    <div id="dropdownNavbar"
                        class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 ">
                        <ul class="py-2 text-sm" aria-labelledby="dropdownLargeButton">
                            <li>
                                <a href="/programs/movie" class="block px-4 py-2 hover:bg-gray-100 ">Kelas Film</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 ">Kelas IT</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 ">Kelas Motion Graphic</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 ">Kelas Content Creator </a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 ">Kelas Broadcasting</a>
                            </li>
                        </ul>
                        <div class="py-1">
                            <a href="/programs" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">All
                                Programs</a>
                        </div>
                    </div>
                </li>
                <li>
                    <a href="/student"
                        class="block py-2 px-3 hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-base-red md:p-0 {{ request()->routeIs('student') ? 'font-semibold text-base-red' : '' }}">Students</a>
                </li>
                <li>
                    <a href="/about"
                        class="block py-2 px-3 hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-base-red md:p-0 {{ request()->routeIs('about') ? 'font-semibold text-base-red' : '' }}">About
                        Us</a>
                </li>
                <li class="flex flex-row justify-between md:hidden">
                    <a href="{{ route('login') }}"
                        class="text-black font-bold rounded-lg px-4 py-2 text-center hover:text-base-red">
                        Masuk
                    </a>
                    <x-ui.link-button :href="route('register')">Daftar</x-ui.link-button>
                </li>
            </ul>
        </div>
    </div>
</nav>
