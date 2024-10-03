@extends('layouts.front')
@section('content')
    <main class="container mx-auto flex flex-grow">
        <div class="w-full grid grid-cols-4 gap-10">
            <div class="md:col-span-3 col-span-4">
                <livewire:post-list />
            </div>
            <div id="side-bar"
                class="border-t border-t-gray-100 md:border-t-none col-span-4 md:col-span-1 px-3 md:px-0 space-y-10 py-6 pt-10 h-screen sticky top-0">
                @include('pages.articles.sections.search-box')
                @include('pages.articles.sections.categories-box')
            </div>
        </div>
    </main>
@endsection
