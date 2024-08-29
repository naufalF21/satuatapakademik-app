<div class="container">
    <div class="flex flex-row md:py-14 py-7 gap-20">
        <div class="flex flex-col w-full gap-5 items-start">
            <span class="text-base-red">#SatuAtapAkademik</span>
            <h1 class="text-4xl md:text-5xl">LET’S LEARN TOGETHER AND BECOME EXPERIENCE</h1>
            <p class="text-lg">
                Ikuti kelas kami dan asah kemampuanmu di bidang yang kamu minati.
                Kesempatan emas
                menantimu di
                sini!
            </p>
            <x-ui.link-button :href="route('register')">Join Now</x-ui.link-button>
        </div>
        <div class="hidden md:flex w-full">
            <img src="{{ url('/images/hero-image.jpg') }}" class="rounded-xl" alt="Hero Image" />
        </div>
    </div>

    <div class="flex flex-col md:py-16 py-8 items-center w-full gap-5">
        <h2 class="md:text-5xl text-4xl md:text-center leading-tight font-medium">Let’s Learn Together And Become <br />
            Experience</h2>
        <p class="text-lg">Mulai Perjalananmu Sebagai Leader Bersama <span class="font-semibold text-base-red">Satu Atap
                Akademik</span></p>
        <img src="{{ url('/images/kelas.jpg') }}" class="rounded-xl" alt="Hero Image" />
    </div>
</div>
