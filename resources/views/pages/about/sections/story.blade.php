<div class="container">
    <div class="flex flex-col md:flex-row w-full justify-between md:gap-20 gap-5 py-7 md:py-14">
        <div class="w-full hidden md:block">
            <img src="{{ url('/images/why-us.jpg') }}" class="rounded-xl" alt="story image" />
        </div>
        <div class="w-full flex flex-col gap-5 justify-center">
            <span class="text-xl text-base-red font-medium">Our Story</span>
            <h2 class="text-4xl leading-tight font-semibold">We Believe In The Power
                Of Unity And Team Work</h2>
            <p class="text-lg leading-relaxed">
                Terdapat program-program pelatihan dengan tujuan pengembangan soft skill ditengah maraknya era
                digitalisasi
                yang semakin tinggi, selain itu berdirinya Satu Atap Akademik yakni untuk mewadahi Ekosistem Sumber Daya
                Manusia berbasis edukasi.
            </p>
            <x-ui.link-button :href="route('register')">Join Now</x-ui.link-button>
        </div>
    </div>

    {{-- cards contact --}}
    <div class="py-7 md:py-14">
        <ul class="flex md:flex-row flex-col justify-between w-full gap-10">
            <li class="w-full">
                <div class="bg-base-red border text-white rounded-xl flex flex-col text-center items-center gap-5 p-7">
                    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 32 32">
                        <path fill="currentColor" d="M11.63 8h7.38v2h-7.38z" class="ouiIcon__fillSecondary" />
                        <path fill="currentColor" d="M7 8h3.19v2H7z" />
                        <path fill="currentColor" d="M7 16h7.38v2H7z" class="ouiIcon__fillSecondary" />
                        <path fill="currentColor" d="M15.81 16H19v2h-3.19zM7 12h9v2H7z" />
                        <path fill="currentColor"
                            d="M13 0C5.82 0 0 5.82 0 13s5.82 13 13 13s13-5.82 13-13A13 13 0 0 0 13 0m0 24C6.925 24 2 19.075 2 13S6.925 2 13 2s11 4.925 11 11s-4.925 11-11 11m9.581-.007l1.414-1.414l7.708 7.708l-1.414 1.414z" />
                    </svg>
                    <h5 class="text-2xl font-semibold tracking-tight">About Us</h5>
                    <div>
                        <span class="font-normal">Satu Atap Akademik</span>
                        <p>A place to start and grow!</p>
                    </div>
                </div>
            </li>
            <li class="w-full">
                <div
                    class="bg-base-white border-2 text-base-black border-base-black rounded-xl flex flex-col text-center items-center gap-5 p-7">
                    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 32 32">
                        <path fill="currentColor"
                            d="m16 24l-6.09-8.6A8.14 8.14 0 0 1 16 2a8.08 8.08 0 0 1 8 8.13a8.2 8.2 0 0 1-1.8 5.13Zm0-20a6.07 6.07 0 0 0-6 6.13a6.2 6.2 0 0 0 1.49 4L16 20.52L20.63 14A6.24 6.24 0 0 0 22 10.13A6.07 6.07 0 0 0 16 4" />
                        <circle cx="16" cy="9" r="2" fill="currentColor" />
                        <path fill="currentColor"
                            d="M28 12h-2v2h2v14H4V14h2v-2H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h24a2 2 0 0 0 2-2V14a2 2 0 0 0-2-2" />
                    </svg>
                    <h5 class="text-2xl font-semibold tracking-tight">Our Address</h5>
                    <div>
                        <span class="font-normal">Kota Pasuruan,</span>
                        <p>Jawa Timur 67121</p>
                    </div>
                </div>
            </li>
            <li class="w-full">
                <div class="bg-base-red border text-white rounded-xl flex flex-col text-center items-center gap-5 p-7">
                    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 24 24">
                        <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="1.5" color="currentColor">
                            <path
                                d="M14 2h-4c-3.28 0-4.919 0-6.081.814a4.5 4.5 0 0 0-1.105 1.105C2 5.08 2 6.72 2 10s0 4.919.814 6.081a4.5 4.5 0 0 0 1.105 1.105C5.08 18 6.72 18 10 18h4c3.28 0 4.919 0 6.081-.814a4.5 4.5 0 0 0 1.105-1.105C22 14.92 22 13.28 22 10" />
                            <path
                                d="M18.83 2.754c.298-.323.447-.484.605-.578a1.24 1.24 0 0 1 1.241-.02c.161.09.315.247.622.561s.46.47.548.635c.212.397.205.878-.018 1.268c-.092.162-.25.314-.566.619L17.5 8.862c-.599.577-.898.865-1.273 1.011c-.374.147-.786.136-1.609.114l-.112-.002c-.25-.007-.376-.01-.449-.093c-.072-.083-.062-.21-.043-.466l.011-.138c.056-.719.084-1.078.224-1.4c.14-.324.383-.586.867-1.11zM14.656 22l-.42-.419a3.1 3.1 0 0 1-.58-3.581M9 22l.42-.419A3.1 3.1 0 0 0 10 18m-3 4h10M8 10h7" />
                        </g>
                    </svg>
                    <h5 class="text-2xl font-semibold tracking-tight">Contact Info </h5>
                    <div>
                        <span class="font-normal">Info@satuatapakademik.com</span>
                        <p>0853552222338</p>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>
