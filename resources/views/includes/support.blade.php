<section class="bg-[#E5E9F2] w-full text-[#74767C]">
    <div class="container p-5 font-medium text-2xl flex flex-col gap-5">
        <h2 class="text-center">Support</h2>
        <div class="hidden md:block">
            <swiper-container speed="200" loop="true" autoplay="true" slides-per-view="9">
                @foreach ($supports as $support)
                    <li class="swiper-slide w-full">
                        <img src="{{ Storage::url($support->logo) }}" alt="Logo Mitra" class="w-24 h-auto">
                    </li>
                @endforeach
            </swiper-container>
        </div>
        <div class="md:hidden">
            <swiper-container speed="200" loop="true" autoplay="true" slides-per-view="5">
                @foreach ($supports as $support)
                    <li class="swiper-slide w-full">
                        <img src="{{ Storage::url($support->logo) }}" alt="Logo Mitra" class="w-24 h-auto">
                    </li>
                @endforeach
            </swiper-container>
        </div>
    </div>
</section>
