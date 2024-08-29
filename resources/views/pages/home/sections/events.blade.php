<div class="container flex flex-col py-14 w-full gap-5">
    <h2 class="text-4xl font-semibold">Events <span class="text-base-red">Satu Atap Akademik</span></h2>
    <div class="hidden md:grid grid-cols-3 w-full gap-10">
        <x-ui.cards.event image="poster.jpg"
            link="https://l.instagram.com/?u=https%3A%2F%2Fbit.ly%2Fjoinsineasmuda2024&e=AT0pwSIXr-UeM4LZmosvLk9C9oE8b_-u5FcDtfAyBwjhcx-eeCTY4dmZv1PuDcYYetkKRIQfFfFrmzSCYrk8BAF9BXugzPEte08rVg" />
        <x-ui.cards.event image="modul.png" link="https://www.instagram.com/p/C-BUfBtSFeh/" />
        <x-ui.cards.event image="action.png" link="#" />
    </div>
    <div class="md:hidden">
        <swiper-container slides-per-view="1" speed="200" loop="true" autoplay="true">
            <li class="swiper-slide w-full">
                <x-ui.cards.event image="poster.jpg"
                    link="https://l.instagram.com/?u=https%3A%2F%2Fbit.ly%2Fjoinsineasmuda2024&e=AT0pwSIXr-UeM4LZmosvLk9C9oE8b_-u5FcDtfAyBwjhcx-eeCTY4dmZv1PuDcYYetkKRIQfFfFrmzSCYrk8BAF9BXugzPEte08rVg" />
            </li>
            <li class="swiper-slide w-full">
                <x-ui.cards.event image="modul.png" link="https://www.instagram.com/p/C-BUfBtSFeh/" />
            </li>
            <li class="swiper-slide w-full">
                <x-ui.cards.event image="action.png" link="#" />
            </li>
        </swiper-container>
    </div>
</div>
