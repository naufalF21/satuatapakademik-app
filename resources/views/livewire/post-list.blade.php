<div class="py-6">
    <div class="flex justify-between md:items-center flex-col md:flex-row">
        <div class="text-gray-600">
            @if ($this->activeCategory || $search)
                <button class="gray-500 text-xs mr-3" wire:click="clearFilters()">X</button>
            @endif
            @if ($this->activeCategory)
                <x-badge wire:navigate href="{{ route('articles', ['category' => $this->activeCategory->slug]) }}">
                    {{ $this->activeCategory->title }}
                </x-badge>
            @endif
            @if ($search)
                <span class="ml-3">Searching : <strong>{{ $search }}</strong></span>
            @endif
        </div>
        <div class="flex items-center space-x-4 font-light">
            <x-checkbox wire:model.live="popular" />
            <x-label>Popular</x-label>
            <button class="{{ $sort === 'desc' ? 'text-gray-900 border-b border-gray-700' : 'text-gray-500' }} py-4"
                wire:click="setSort('desc')">Latest</button>
            <button class="{{ $sort === 'asc' ? 'text-gray-900 border-b border-gray-700' : 'text-gray-500' }} py-4 "
                wire:click="setSort('asc')">Oldest</button>
        </div>
    </div>
    <div class="py-4">
        @foreach ($this->posts as $post)
            <x-posts.post-item :post="$post" />
        @endforeach
    </div>

    <div class="my-3">
        <div>{{ $this->posts->onEachSide(1)->links() }}</div>
    </div>
</div>
