<footer>
    <div class="container py-10 flex flex-col md:flex-row w-full md:justify-between gap-10 items-center md:items-start">
        <div class="md:w-full flex items-center">
            <a href="/">
                <img src="{{ Storage::url($data['siteInfo']->logo) }}" class="w-40" />
            </a>
        </div>
        <ul class="w-full md:flex flex-col gap-5 hidden">
            <li class="text-lg font-semibold">Our Program Categories</li>
            @foreach ($data['programs'] as $program)
                <li>
                    @if ($program->is_active)
                        <a href="/programs/{{ $program->slug }}" class="hover:text-base-red">{{ $program->name }}</a>
                    @else
                        <a href="#" class="hover:text-base-red">{{ $program->name }}</a>
                    @endif
                </li>
            @endforeach
        </ul>
        <ul class="w-full md:flex flex-col gap-5 hidden">
            <li class="text-lg font-semibold">Explore</li>
            <li><a href="/" class="hover:text-base-red">Home</a></li>
            <li><a href="/programs" class="hover:text-base-red">Programs</a></li>
            <li><a href="/student" class="hover:text-base-red">Students</a></li>
            <li><a href="/about" class="hover:text-base-red">About Us</a></li>
        </ul>
        <div class="md:hidden flex flex-row justify-between w-full">
            <ul class="flex flex-col gap-5">
                <li class="text-lg font-semibold">Our Program Categories</li>
                @foreach ($data['programs'] as $program)
                    <li>
                        @if ($program->is_active)
                            <a href="/programs/{{ $program->slug }}"
                                class="hover:text-base-red">{{ $program->name }}</a>
                        @else
                            <a href="#" class="hover:text-base-red">{{ $program->name }}</a>
                        @endif
                    </li>
                @endforeach
            </ul>
            <ul class="flex flex-col gap-5">
                <li class="text-lg font-semibold">Explore</li>
                <li><a href="/" class="hover:text-base-red">Home</a></li>
                <li><a href="/programs" class="hover:text-base-red">Programs</a></li>
                <li><a href="/student" class="hover:text-base-red">Students</a></li>
                <li><a href="/about" class="hover:text-base-red">About Us</a></li>
            </ul>
        </div>
        <ul class="w-full flex flex-col gap-5">
            <li class="text-lg font-semibold">Satu Atap Akademik Official</li>
            <li>Jl. Patimura No.329, Bugul Kidul, Kec. Bugul Kidul, Kota Pasuruan, Jawa Timur 67121</li>
            <li><x-ui.link-button>Contact Us</x-ui.link-button></li>
        </ul>
    </div>
    <div class="py-5 bg-base-black text-base-white">
        <ul class="container flex flex-row w-full justify-between">
            <li class="text-sm">
                Copyright © 2024 | <span class="text-base-white">SAA DIGITAL SCHOOL</span>
            </li>
            <li class="flex flex-row gap-5 md:gap-8">
                <a href="{{ $data['instagram']->link }}" class="hover:text-base-red" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="M7.8 2h8.4C19.4 2 22 4.6 22 7.8v8.4a5.8 5.8 0 0 1-5.8 5.8H7.8C4.6 22 2 19.4 2 16.2V7.8A5.8 5.8 0 0 1 7.8 2m-.2 2A3.6 3.6 0 0 0 4 7.6v8.8C4 18.39 5.61 20 7.6 20h8.8a3.6 3.6 0 0 0 3.6-3.6V7.6C20 5.61 18.39 4 16.4 4zm9.65 1.5a1.25 1.25 0 0 1 1.25 1.25A1.25 1.25 0 0 1 17.25 8A1.25 1.25 0 0 1 16 6.75a1.25 1.25 0 0 1 1.25-1.25M12 7a5 5 0 0 1 5 5a5 5 0 0 1-5 5a5 5 0 0 1-5-5a5 5 0 0 1 5-5m0 2a3 3 0 0 0-3 3a3 3 0 0 0 3 3a3 3 0 0 0 3-3a3 3 0 0 0-3-3" />
                    </svg>
                </a>
                <a href="{{ $data['youtube']->link }}" class="hover:text-base-red" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="m10 15l5.19-3L10 9zm11.56-7.83c.13.47.22 1.1.28 1.9c.07.8.1 1.49.1 2.09L22 12c0 2.19-.16 3.8-.44 4.83c-.25.9-.83 1.48-1.73 1.73c-.47.13-1.33.22-2.65.28c-1.3.07-2.49.1-3.59.1L12 19c-4.19 0-6.8-.16-7.83-.44c-.9-.25-1.48-.83-1.73-1.73c-.13-.47-.22-1.1-.28-1.9c-.07-.8-.1-1.49-.1-2.09L2 12c0-2.19.16-3.8.44-4.83c.25-.9.83-1.48 1.73-1.73c.47-.13 1.33-.22 2.65-.28c1.3-.07 2.49-.1 3.59-.1L12 5c4.19 0 6.8.16 7.83.44c.9.25 1.48.83 1.73 1.73" />
                    </svg>
                </a>
                <a href="{{ $data['tiktok']->link }}" class="hover:text-base-red" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="M16.6 5.82s.51.5 0 0A4.278 4.278 0 0 1 15.54 3h-3.09v12.4a2.592 2.592 0 0 1-2.59 2.5c-1.42 0-2.6-1.16-2.6-2.6c0-1.72 1.66-3.01 3.37-2.48V9.66c-3.45-.46-6.47 2.22-6.47 5.64c0 3.33 2.76 5.7 5.69 5.7c3.14 0 5.69-2.55 5.69-5.7V9.01a7.35 7.35 0 0 0 4.3 1.38V7.3s-1.88.09-3.24-1.48" />
                    </svg>
                </a>
            </li>
        </ul>
    </div>
</footer>
