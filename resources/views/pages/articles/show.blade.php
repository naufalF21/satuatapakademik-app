@extends('layouts.front')
@section('content')
    <article class="w-full col-span-4 py-5 mx-auto mt-10 md:col-span-3" style="max-width:700px">
        <img class="w-full my-2 rounded-lg" src="{{ Storage::url($post->image) }}" alt="thumbnail">
        <h1 class="text-4xl font-bold text-left text-gray-800">
            {{ $post->title }}
        </h1>
        <div class="flex items-center justify-between mt-2">
            <div class="flex items-center py-5">
                <x-posts.author :author="$post->author" size="md" />
                <span class="text-sm text-gray-500">| {{ $post->getReadingTime() }} min read</span>
            </div>
            <div class="flex items-center">
                <span class="mr-2 text-gray-500">{{ $post->published_at->diffForHumans() }}</span>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.3"
                    stroke="currentColor" class="w-5 h-5 text-gray-500">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </div>
        </div>

        <div
            class="flex items-center justify-between px-2 py-4 my-6 text-sm border-t border-b border-gray-100 article-actions-bar">
            <div class="flex items-center">
                <livewire:like-button :key="'like-' . $post->id" :$post />
            </div>
            <div>
                <div class="flex items-center">
                </div>
            </div>
        </div>

        <div class="py-3 text-lg prose text-justify text-gray-800 article-content">
            {!! $post->body !!}
        </div>

        <div class="flex items-center mt-10 space-x-4">
            @foreach ($post->categories as $category)
                <x-posts.category-badge :category="$category" />
            @endforeach
        </div>

        <div class="mt-10 comments-box border-t border-gray-100 pt-10">
            <h2 class="text-2xl font-semibold text-gray-900 mb-5">Discussions</h2>
            <textarea
                class="w-full rounded-lg p-4 bg-gray-50 focus:outline-none text-sm text-gray-700 border-gray-200 placeholder:text-gray-400"
                cols="30" rows="7"></textarea>
            <button
                class="mt-3 inline-flex items-center justify-center h-10 px-4 font-medium tracking-wide text-white transition duration-200 bg-gray-900 rounded-lg hover:bg-gray-800 focus:shadow-outline focus:outline-none">
                Post Comment
            </button>

            <!-- <a class="text-yellow-500 underline py-1" href=""> Login to Post Comments</a> -->

            <div class="user-comments px-3 py-2 mt-5">
                <div class="comment [&:not(:last-child)]:border-b border-gray-100 py-5">
                    <div class="user-meta flex mb-4 text-sm items-center">
                        <img class="w-7 h-7 rounded-full mr-3" src="" alt="mn">
                        <span class="mr-1">user name</span>
                        <span class="text-gray-500">. 15 days ago</span>
                    </div>
                    <div class="text-justify text-gray-700  text-sm">
                        comment content
                    </div>
                </div>
                <!-- <div class="text-gray-500 text-center">
                                    <span> No Comments Posted</span>
                                </div> -->
            </div>
        </div>

        {{-- <livewire:post-comments :key="'comments' . $post->id" :$post /> --}}
    </article>
@endsection
