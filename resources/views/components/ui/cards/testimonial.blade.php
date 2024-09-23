@props(['avatar', 'name', 'occupation', 'comment'])

<div class="bg-white rounded-xl w-fit flex flex-col items-center text-center p-8 gap-5">
    <span class="text-base-red">
        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24">
            <path fill="currentColor"
                d="M21 3a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H6.455L2 22.5V4a1 1 0 0 1 1-1zM10.515 7.412C8.728 8.187 7.5 9.755 7.5 11.505c0 .995.277 1.609.792 2.156c.324.344.837.589 1.374.589a1.75 1.75 0 0 0 1.75-1.75a1.76 1.76 0 0 0-1.614-1.745a2 2 0 0 0-.479.01v-.092c.006-.44.1-1.74 1.639-2.573zm5 0c-1.787.775-3.015 2.343-3.015 4.093c0 .995.277 1.609.792 2.156c.324.344.837.589 1.374.589a1.75 1.75 0 0 0 1.75-1.75a1.76 1.76 0 0 0-1.614-1.745a2 2 0 0 0-.479.01v-.092c.006-.44.1-1.74 1.639-2.573z" />
        </svg>
    </span>
    <p class="text-base-black text-base">
        {{ $comment }}
    </p>
    <div>
        <img class="w-14 h-14 rounded-full object-cover" src="{{ Storage::url($avatar) }}" alt="Rounded avatar">
    </div>
    <div>
        <h5 class="text-lg font-bold tracking-tight text-base-black">
            {{ $name }}
        </h5>
        <p class="font-normal text-sm text-base-red">
            {{ $occupation }}
        </p>
    </div>
</div>
