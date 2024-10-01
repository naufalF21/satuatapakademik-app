@extends('layouts.front')
@section('content')
    {{-- hero section --}}
    <div class="container flex flex-row py-7 md:py-14 gap-20">
        <div class="flex flex-col w-full gap-5">
            <span class="text-base-red">#SatuAtapAkademik</span>
            <h1 class="text-4xl md:text-5xl">{{ $program->title }}</h1>
            <p class="text-lg">
                Kelas online kami menawarkan pengalaman belajar fleksibel untuk semua tingkat, dengan topik beragam dan
                akses materi kapan saja dan di mana saja.
            </p>
            <x-ui.link-button :href="route('register')">Join Now</x-ui.link-button>
        </div>
        <div class="hidden md:flex w-full">
            <img src="{{ Storage::url($program->image) }}" class="rounded-xl" alt="Hero Image" />
        </div>
    </div>
    {{-- end hero section --}}

    {{-- courses --}}
    <section class="container flex flex-col gap-5 py-7 md:py-14">
        <div class="w-full flex flex-row justify-between">
            <h2 class="text-3xl font-semibold">Kelas Film</h2>
            <div>
                <button id="dropdownCheckboxButton" data-dropdown-toggle="dropdownDefaultCheckbox"
                    class="text-white bg-base-red focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-xl text-sm px-5 py-2.5 text-center inline-flex items-center"
                    type="button">Filter<svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" />
                    </svg>
                </button>

                <!-- Dropdown menu -->
                <div id="dropdownDefaultCheckbox"
                    class="z-10 hidden w-48 bg-white divide-y divide-gray-100 rounded-lg shadow">
                    <ul class="p-3 space-y-3 text-sm text-gray-700" aria-labelledby="dropdownCheckboxButton">
                        <li>
                            <div class="flex items-center">
                                <input id="checkbox-item-1" type="checkbox" value=""
                                    class="w-4 h-4 text-base-red bg-gray-100 border-gray-300 rounded focus:ring-red-500">
                                <label for="checkbox-item-1" class="ms-2 text-sm font-medium text-gray-900">Default
                                    checkbox</label>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <input checked id="checkbox-item-2" type="checkbox" value=""
                                    class="w-4 h-4 text-base-red bg-gray-100 border-gray-300 rounded focus:ring-red-500">
                                <label for="checkbox-item-2" class="ms-2 text-sm font-medium text-gray-900">Checked
                                    state</label>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <input id="checkbox-item-3" type="checkbox" value=""
                                    class="w-4 h-4 text-base-red bg-gray-100 border-gray-300 rounded focus:ring-red-500">
                                <label for="checkbox-item-3" class="ms-2 text-sm font-medium text-gray-900">Default
                                    checkbox</label>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="grid md:grid-cols-3 w-full gap-10">
            <x-ui.cards.course title="Cinemas Class" rating="4.4" hours="12" modules="24"
                image="images/class-popular/Film.jpg" />
            <x-ui.cards.course title="Cinemas Class" rating="4.4" hours="12" modules="24"
                image="images/class-popular/Film.jpg" />
            <x-ui.cards.course title="Cinemas Class" rating="4.4" hours="12" modules="24"
                image="images/class-popular/Film.jpg" />
        </div>
    </section>
    {{-- end courses --}}

    {{-- pagination --}}
    {{-- <x-pagination /> --}}
    {{-- end pagination --}}
@endsection
