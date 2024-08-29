@props(['title', 'rating', 'hours', 'modules'])

<div class="bg-white rounded-xl">
    <a href="/programs/movie/1">
        <img class="rounded-t-lg" src="{{ url('/images/card-image.jpg') }}" alt="card image" />
    </a>
    <div class="p-5 flex flex-col gap-4">
        <span class="text-xl font-semibold">{{ $title }}</span>
        <div class="flex flex-row gap-2">
            <img src="{{ url('/icons/stars.svg') }}" />
            <label class="text-sm">{{ $rating }}</label>
        </div>
        <hr class="w-full">
        <div class="flex flex-row w-full justify-between">
            <label class="flex flex-row items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="1.3em" height="1.3em" viewBox="0 0 256 256"
                    class="text-base-red">
                    <path fill="currentColor"
                        d="M128 24a104 104 0 1 0 104 104A104.11 104.11 0 0 0 128 24m0 192a88 88 0 1 1 88-88a88.1 88.1 0 0 1-88 88m64-88a8 8 0 0 1-8 8h-56a8 8 0 0 1-8-8V72a8 8 0 0 1 16 0v48h48a8 8 0 0 1 8 8" />
                </svg>
                {{ $hours }} Hours
            </label>
            <label class="flex flex-row items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="1.19em" height="1.2em" viewBox="0 0 26 24"
                    class="text-base-red">
                    <path fill="currentColor"
                        d="m.061 8.78l4.801 14.399c.164.481.611.82 1.138.821h19.199c.048 0 .095-.003.141-.009l-.006.001l.036-.006a.785.785 0 0 0 .094-.018l.038-.009c.031-.008.062-.018.094-.028l.036-.013c.031-.012.061-.025.094-.041l.029-.014a.981.981 0 0 0 .114-.068l-.004.003a1.05 1.05 0 0 0 .106-.081l-.002.001l.028-.025l.067-.064l.031-.034a.794.794 0 0 0 .058-.072l.017-.021l.008-.012q.034-.048.063-.1l.007-.011a.952.952 0 0 0 .055-.115l.003-.008l.007-.019q.021-.052.036-.106c0-.012.007-.024.009-.037c.008-.03.014-.06.02-.094c0-.015.005-.03.007-.045l.008-.085c.002-.028 0-.034 0-.051V1.2A1.2 1.2 0 0 0 25.2 0h-9.6a1.2 1.2 0 0 0-1.2 1.2v1.2H6a1.2 1.2 0 0 0-1.2 1.2v3.6H1.2A1.2 1.2 0 0 0 .065 8.786l-.003-.008zM23.999 2.4v13.003l-2.462-7.385a1.202 1.202 0 0 0-1.138-.821H7.2V4.8h8.4a1.2 1.2 0 0 0 1.2-1.2V2.401zM2.865 9.6h16.67l4 12H6.865z" />
                </svg>
                {{ $modules }} Modules
            </label>
        </div>
        <div class="w-full flex">
            <a href="#"
                class="text-base-white bg-base-red font-bold rounded-xl px-6 py-3 text-center hover:bg-black hover:text-base-white focus:ring-4 focus:outline-none focus:ring-gray-400 w-full">See
                Preview</a>
        </div>
    </div>
</div>
