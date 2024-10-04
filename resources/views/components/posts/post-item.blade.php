@props(['post'])
<article class="[&:not(:last-child)]: pb-10">
    <div class="article-body grid grid-cols-12 gap-3 mt-5 items-start">
        <div class="article-thumbnail col-span-4 flex items-center">
            <a href="{{ route('articles.show', $post->slug) }}">
                <img class="mx-auto rounded-xl object-cover w-full h-[200px] " src="{{ Storage::url($post->image) }}"
                    alt="thumbnail">
            </a>
        </div>
        <div class="col-span-8">
            <div class="article-meta flex py-1 text-sm items-center">
                @if ($post->author->avatar)
                    <img class="w-7 h-7 rounded-full mr-3 object-cover"
                        src="{{ $post->author->getAvatarUrlAttribute() }}" alt="avatar">
                @endif
                <span class="mr-1 text-xs">{{ $post->author->name }}</span>
                <span class="text-gray-500 text-xs">. {{ $post->published_at->diffForHumans() }}</span>
            </div>
            <h2 class="text-xl font-bold text-gray-900">
                <a href="{{ route('articles.show', $post->slug) }}">
                    {{ $post->title }}
                </a>
            </h2>

            <p class="mt-2 text-base text-gray-700 font-light">
                {{ $post->getExcerpt() }}
            </p>
            <div class="article-actions-bar mt-6 flex items-center justify-between">
                <div class="flex gap-x-2">
                    @foreach ($post->categories as $category)
                        <x-posts.category-badge :category="$category" />
                    @endforeach
                    <div class="flex items-center space-x-4">
                        <span class="text-gray-500 text-sm">{{ $post->getReadingTime() }} min read</span>
                    </div>
                </div>

                <div>
                    <livewire:like-button :key="'like-' . $post->id" :$post />
                </div>
            </div>
        </div>
    </div>
</article>
