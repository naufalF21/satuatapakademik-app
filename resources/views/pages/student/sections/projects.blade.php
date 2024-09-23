<section class="container pb-14 md:py-14">
    <ul class="grid md:grid-cols-4 grid-cols-2 gap-10 w-full">
        @foreach ($unfavoriteVideo as $item)
            <li>
                <iframe class="w-full h-[250px] rounded-xl" src="{{ $item->link }}" frameborder="0" loading="lazy"
                    allowfullscreen></iframe>
            </li>
        @endforeach
    </ul>
</section>
