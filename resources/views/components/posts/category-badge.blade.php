@props(['category'])
<x-badge wire:navigate href="{{ route('articles', ['category' => $category->slug]) }}">
    {{ $category->title }}
</x-badge>
