<div class="container flex flex-col md:flex-row py-14 gap-10 md:gap-20">
    <div class="flex flex-col w-full gap-5">
        <span class="text-base-red">#SatuAtapAkademik</span>
        <h1 class="text-4xl md:text-5xl">Hasil Karya Oleh Murid <span class="text-base-red">Satu Atap</span> Akademik</h1>
        <p class="text-lg">
            Berikut adalah hasil karya dan testimonial dari murid-murid
            Satu Atap Akademik
        </p>
    </div>
    <div class="flex w-full h-[250px] md:h-full">
        @if ($favoriteVideo)
            <iframe class="w-full h-full rounded-xl" src="{{ $favoriteVideo->link }}" frameborder="0"
                allowfullscreen></iframe>
        @else
            <img src="{{ url('/images/hero-image.jpg') }}" class="rounded-xl" alt="Hero Image" />
        @endif
    </div>
</div>
