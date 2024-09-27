<div class="container flex flex-col md:py-14 py-7 w-full gap-5">
    <h2 class="text-4xl font-semibold">Kelas Populer <span class="text-base-red">Satu Atap Akademik</span></h2>
    <div class="hidden md:block">
        <swiper-container slides-per-view="3" space-between="40" loop="true" autoplay="true" speed="400">
            <li class="swiper-slide">
                <x-ui.cards.course title="Cinemas Class" rating="4.4" hours="12" modules="24"
                    image="/images/class-popular/Film.jpg" />
            </li>
            <li class="swiper-slide">
                <x-ui.cards.course title="Motion Graphics Class" rating="4.8" hours="24" modules="32"
                    image="/images/class-popular/Motion_Graphic.jpg" />
            </li>
            <li class="swiper-slide">
                <x-ui.cards.course title="Junior Developer Class" rating="4.6" hours="8" modules="16"
                    image="/images/class-popular/Junior_Web.jpg" />
            </li>
            <li class="swiper-slide">
                <x-ui.cards.course title="Broadcasting Class" rating="4.6" hours="12" modules="8"
                    image="/images/class-popular/Broadcast.jpg" />
            </li>
        </swiper-container>
    </div>
    <div class="md:hidden">
        <swiper-container slides-per-view="1" space-between="40" loop="true">
            <li class="swiper-slide">
                <x-ui.cards.course title="Cinemas Class" rating="4.4" hours="12" modules="24"
                    image="/images/class-popular/Film.jpg" />
            </li>
            <li class="swiper-slide">
                <x-ui.cards.course title="Motion Graphics Class" rating="4.8" hours="24" modules="32"
                    image="/images/class-popular/Motion_Graphic.jpg" />
            </li>
            <li class="swiper-slide">
                <x-ui.cards.course title="Junior Developer Class" rating="4.6" hours="8" modules="16"
                    image="/images/class-popular/Junior_Web.jpg" />
            </li>
            <li class="swiper-slide">
                <x-ui.cards.course title="Broadcasting Class" rating="4.6" hours="8" modules="16"
                    image="/images/class-popular/Broadcast.jpg" />
            </li>
        </swiper-container>
    </div>
</div>
