<section class="w-full relative h-[580px]">
    <div class="absolute inset-0 bg-cover bg-center bg-no-repeat"
        style="background-image: url('{{ url('images/join-now.jpg') }}')">
        <div class="absolute inset-0 bg-black opacity-50"></div>
    </div>
    <div class="container text-white relative z-10 flex flex-col justify-center items-center h-full text-center gap-8">
        <h2 class="md:text-6xl text-5xl font-bold leading-tight md:leading-snug lg:w-2/3">Are you ready to become the
            next <span class="text-base-red">Digital Generation</span>?
        </h2>
        <p class="text-lg">Kami siap membantu impianmu untuk menjadi Digital Generation yang kreatif, <br>
            berdampak positif, dan menghasilkan income yang besar.</p>
        <x-ui.link-button href="{{ route('register') }}">Join Now</x-ui.link-button>
    </div>
</section>
