@props(['link', 'image'])

<div class="bg-white rounded-xl w-fit mx-auto">
    <a href="{{ $link }}" target="_blank">
        <img class="rounded-xl h-96 w-auto" src="{{ Storage::url($image) }}" alt="card image" />
    </a>
</div>
