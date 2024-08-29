<button>
    <a
        {{ $attributes->merge(['class' => 'text-base-white bg-base-red font-bold rounded-xl px-6 py-3 text-center hover:bg-black hover:text-base-white focus:ring-4 focus:outline-none focus:ring-gray-400']) }}>

        {{ $slot }}
    </a>
</button>
