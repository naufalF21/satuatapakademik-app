<div class="container flex flex-col py-14 w-full gap-5">
    <h2 class="text-4xl font-semibold">Events <span class="text-base-red">Satu Atap Akademik</span></h2>
    <div class="block">
        <swiper-container>
            @foreach ($events as $event)
                <li class="swiper-slide">
                    <x-ui.cards.event image="{{ $event->image }}" link="{{ $event->link }}" />
                </li>
            @endforeach
        </swiper-container>
    </div>
</div>

@push('scripts')
    <script>
        // swiper element
        const swiperEl = document.querySelector('swiper-container');

        // swiper parameters
        const swiperParams = {
            breakpoints: {
                640: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 2,
                },
                1024: {
                    slidesPerView: 4,
                },
            },
            speed: 200,
            loop: true,
            autoplay: true
        };

        // now we need to assign all parameters to Swiper element
        Object.assign(swiperEl, swiperParams);

        // and now initialize it
        swiperEl.initialize();
    </script>
@endpush
