<x-layout.main title="{{ $rune->ticker }} - MEMES">
    <x-nav-header/>
    <div class="flex mt-16 sm:mt-20 xl:mx-auto xl:max-w-7xl xl:px-8">
        <h1 class="text-2xl font-bold tracking-wider text-white sm:text-4xl">
            <a href="{{ url('/') }}">{{ $rune->ticker }}</a>
            <span class="pl-4 text-green-600">MEMES</span>
        </h1>
    </div>

    <x-layout.section>
        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 md:grid-cols-3">
            @foreach ($files as $file)
            <a href="{{ asset('images/'.$file) }}" target="_blank">
                <img
                    src="{{ asset('images/'.$file) }}"
                    class="object-cover object-center w-full h-auto max-w-full rounded-lg"
                >
            </a>
            @endforeach
        </div>
    </x-layout.section>
</x-layout.main>
