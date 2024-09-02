@props(['image', 'name', 'category'])

<div class="bg-white rounded-xl">
    <div class="w-full h-[250px]">
        <img class="rounded-t-lg h-full w-full object-cover" src="{{ url('/images/mentor/' . $image) }}"
            alt="mentor image" />
    </div>
    <div class="p-5 flex flex-col items-center">
        <h5 class="text-xl font-bold tracking-tight text-base-black">
            {{ $name }}
        </h5>
        <p class="font-normal text-base text-base-red">
            {{ $category }}
        </p>
    </div>
</div>
