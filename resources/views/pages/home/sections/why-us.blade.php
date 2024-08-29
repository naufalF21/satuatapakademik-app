<div class="container">
    <div class="flex flex-row w-full justify-between gap-24 py-8 md:py-16">
        <div class="w-full hidden md:block">
            <img src="{{ url('/images/why-us.jpg') }}" class="rounded-xl" alt="why us image" />
        </div>
        <div class="w-full flex flex-col gap-7 justify-center items-start">
            {{-- <span class="text-xl text-base-red font-medium">Overview</span> --}}
            <h2 class="text-4xl leading-tight font-semibold">Kenapa Harus Bergabung Dengan <span
                    class="text-base-red">Satu
                    Atap Akademik</span>?</h2>
            <ul class="flex flex-row justify-between gap-5">
                <li class="flex flex-row items-center gap-3 w-full">
                    <svg xmlns="http://www.w3.org/2000/svg" width="2.8em" height="2.8em" viewBox="0 0 2048 2048">
                        <path fill="currentColor"
                            d="M384 1536h128v128H256V384H128v1408h384v128H0V256h256V128h384q88 0 169 27t151 81q69-54 150-81t170-27h384v128h256v819l-128-58V384h-128v575l-128-59V256h-256q-71 0-136 24t-120 71v608l-128 58V351q-54-46-119-70t-137-25H384zm1408 255l-448 225l-448-225q0-36 1-76t8-81t20-77t36-67l-193-88v582H640v-640l704-320l704 320l-321 146l8 11q21 31 32 67t17 73t7 76t1 74m-448-627l-395 180l395 180l395-180zm0 709l320-161q-1-26-4-47t-11-41t-16-39t-23-42l-266 121l-266-121q-15 24-24 43t-16 38t-9 40t-4 49z" />
                    </svg>
                    Belajar mudah dalam satu tempat.
                </li>
                <li class="flex flex-row items-center gap-3 w-full">
                    <svg xmlns="http://www.w3.org/2000/svg" width="2.8em" height="2.8em" viewBox="0 0 24 24">
                        <g fill="none" fill-rule="evenodd">
                            <path
                                d="M24 0v24H0V0zM12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035q-.016-.005-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427q-.004-.016-.017-.018m.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093q.019.005.029-.008l.004-.014l-.034-.614q-.005-.019-.02-.022m-.715.002a.02.02 0 0 0-.027.006l-.006.014l-.034.614q.001.018.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01z" />
                            <path fill="currentColor"
                                d="M3 4a2 2 0 0 1 2-2h2c.364 0 .706.097 1 .268A2 2 0 0 1 9 2h2c.727 0 1.364.388 1.714.969c.21-.168.456-.296.732-.37l1.932-.517a2 2 0 0 1 2.45 1.414l4.14 15.455a2 2 0 0 1-1.414 2.45l-1.932.517a2 2 0 0 1-2.45-1.414L13 8.663V20a2 2 0 0 1-2 2H9a2 2 0 0 1-1-.268A2 2 0 0 1 7 22H5a2 2 0 0 1-2-2zm2 0h2v16H5zm6 16H9V4h2zm2.964-15.469l1.931-.517l4.142 15.455l-1.932.517z" />
                        </g>
                    </svg>
                    Belajar efisien dan terorganisir.
                </li>
            </ul>
            <ul class="flex flex-row justify-between gap-5">
                <li class="flex flex-row items-center gap-3 w-full">
                    <svg xmlns="http://www.w3.org/2000/svg" width="2.8em" height="2.8em" viewBox="0 0 32 32">
                        <path fill="currentColor"
                            d="M4 6v2h22v16H12v2h18v-2h-2V6zm4.002 3A4.016 4.016 0 0 0 4 13c0 2.199 1.804 4 4.002 4A4.014 4.014 0 0 0 12 13c0-2.197-1.802-4-3.998-4M14 10v2h5v-2zm7 0v2h3v-2zM8.002 11C9.116 11 10 11.883 10 13c0 1.12-.883 2-1.998 2C6.882 15 6 14.12 6 13c0-1.117.883-2 2.002-2M14 14v2h10v-2zM4 18v8h2v-6h3v6h2v-5.342l2.064 1.092c.585.31 1.288.309 1.872 0v.002l3.53-1.867l-.933-1.77l-3.531 1.867l-3.096-1.634A3.005 3.005 0 0 0 9.504 18z" />
                    </svg>
                    Layanan pendidikan yang terpercaya.
                </li>
                <li class="flex flex-row items-center gap-3 w-full">
                    <svg xmlns="http://www.w3.org/2000/svg" width="2.8em" height="2.8em" viewBox="0 0 24 24">
                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2"
                            d="M9.75 17L9 20l-1 1h8l-1-1l-.75-3M3 13h18M5 17h14a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2" />
                    </svg>
                    Solusi belajar yang lengkap dan mudah
                </li>
            </ul>
            <x-ui.link-button href="{{ route('register') }}">Join Now</x-ui.link-button>
        </div>
    </div>

    <div class="flex flex-col items-center py-8 md:py-16 gap-10">
        <h2 class="text-5xl text-center leading-tight font-semibold">Akses Materi Pembelajaran <br /> Dimana
            Saja
        </h2>
        <img src="{{ url('/images/ilustration.png') }}" class="rounded-xl" alt="illustration image" />
        <ul class="flex flex-col md:flex-row w-full gap-5 md:gap-20">
            <li class="w-full">
                <h5 class="font-semibold text-3xl mb-3">Platform Exclusive</h5>
                <p class="text-lg">Belajar lebih nyaman dengan platform exclusive</p>
            </li>
            <li class="w-full">
                <h5 class="font-semibold text-3xl mb-3">Lifetime Membership</h5>
                <p class="text-lg">Tidak usah berlangganan per bulan, sekali bayar dapat akses seumur hidup</p>
            </li>
            <li class="w-full">
                <h5 class="font-semibold text-3xl mb-3">Tidak Terbatas Device</h5>
                <p class="text-lg">Kamu bisa mengakses materi via PC, Laptop, Tab, dan HP hanya memerlukan kuota
                    internet
                </p>
            </li>
        </ul>
    </div>
</div>
