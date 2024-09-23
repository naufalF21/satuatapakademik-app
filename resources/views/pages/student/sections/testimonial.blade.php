<section class="py-14 text-base-white bg-base-red">
    <div class="container flex flex-col w-full gap-8">
        <div class="flex flex-col gap-2 w-full text-center items-center">
            <p class="text-xl font-medium">Satu Atap Akademik Testimonial</p>
            <h2 class="text-3xl font-semibold">What They Said</h2>
        </div>
        <div class="hidden md:block">
            <swiper-container slides-per-view="3" speed="200" loop="true" autoplay="true" space-between="48">
                @foreach ($users as $user)
                    <li class="swiper-slide"><x-ui.cards.testimonial :avatar="$user->avatar" :name="$user->name"
                            :comment="$user->comments" :occupation="$user->occupation" /></li>
                @endforeach
            </swiper-container>
        </div>
        <div class="md:hidden">
            {{-- <swiper-container slides-per-view="1" speed="200" loop="true" autoplay="true" space-between="48">
                <li class="swiper-slide"><x-ui.cards.testimonial /></li>
                <li class="swiper-slide"><x-ui.cards.testimonial /></li>
                <li class="swiper-slide"><x-ui.cards.testimonial /></li>
                <li class="swiper-slide"><x-ui.cards.testimonial /></li>
                <li class="swiper-slide"><x-ui.cards.testimonial /></li>
                <li class="swiper-slide"><x-ui.cards.testimonial /></li>
            </swiper-container> --}}
        </div>
    </div>
</section>
