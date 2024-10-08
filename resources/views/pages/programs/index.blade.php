@extends('layouts.front')
@section('content')
    <div class="container">
        {{-- hero --}}
        <div class="flex flex-row py-7 md:py-14 gap-20">
            <div class="flex flex-col w-full gap-5">
                <span class="text-base-red">#SatuAtapAkademik</span>
                <h1 class="text-4xl md:text-5xl">Solusi Terbaik untuk
                    Freelance
                    Pemula</h1>
                <p class="text-lg">
                    Mulai Perjalananmu Sebagai Leader Bersama SATU ATAP AKADEMIK
                </p>
                <x-ui.link-button :href="route('register')">Join Now</x-ui.link-button>
            </div>
            <div class="hidden md:flex w-full">
                <img src="{{ url('/images/hero-image.jpg') }}" class="rounded-xl" alt="Hero Image" />
            </div>
        </div>
        {{-- end hero --}}

        {{-- list programs --}}
        <section class="flex flex-col items-center gap-10 py-10">
            <h2 class="md:text-5xl text-4xl md:text-center leading-tight font-medium md:max-w-3xl">Temukan Kategori Program
                FavoritMu Sekarang</h2>
            <ul class="flex flex-col w-full gap-5">
                @foreach ($programs as $program)
                    @if ($program->is_active)
                        <li
                            class="flex md:flex-row flex-col w-full bg-white px-10 md:px-10 py-8 rounded-xl md:justify-between gap-5 items-center text-justify">
                            <div class="flex max-w-36 h-full">
                                <img src="{{ Storage::url($program->image) }}" class="rounded-xl" alt="Hero Image" />
                            </div>
                            <p class="md:max-w-3xl text-base">{{ $program->description }}</p>
                            <x-ui.link-button href="/programs/{{ $program->slug }}">Learn More</x-ui.link-button>
                        </li>
                    @endif
                @endforeach
            </ul>
        </section>
        {{-- end list programs --}}
    </div>
@endsection
