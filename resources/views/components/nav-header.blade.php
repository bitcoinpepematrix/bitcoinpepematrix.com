<nav class="bg-green-950 text-white border-b border-b-green-800">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="relative flex h-12 items-center justify-between">
            <a
                href="{{ route('homepage') }}"
                class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-green-900 hover:text-white"
            >
                HOME
            </a>
            {{ $rune->ticker }}
        </div>
    </div>
</nav>
