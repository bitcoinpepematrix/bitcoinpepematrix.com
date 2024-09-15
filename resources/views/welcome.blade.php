<x-layout.main>
    <x-banner-pizza-pets/>
    <div class="relative isolate overflow-hidden">
        <x-matrix-background/>
        <div class="mx-auto max-w-7xl px-6 pb-24 pt-10 sm:pb-40 lg:flex lg:px-8 lg:pt-40">
            <div class="mx-auto max-w-2xl flex-shrink-0 lg:mx-0 lg:max-w-xl lg:pt-8">
                <x-icon-bitcoin class="h-11 fill-red-600" />
                <h1 class="mt-10 text-2xl font-bold tracking-wider text-white sm:text-4xl">
                    {{ $rune->ticker }}
                </h1>
                <div class="mt-10 -ml-6 flex items-center gap-x-6 text-slate-300">
                    <x-social-links/>
                    <a
                        href="https://geniidata.com/ordinals/runes/BITCOIN%E2%80%A2PEPE%E2%80%A2MATRIX"
                        class="pl-6 hover:text-slate-200"
                        target="_blank"
                        rel="noopener"
                    >
                        <span class="sr-only">Charts</span>
                        <x-icon-chart-line class="w-6 h-6" />
                    </a>
                    <a
                        href="{{ route('memes') }}"
                        class="pl-6 hover:text-slate-200"
                    >
                        <span class="sr-only">Memes</span>
                        <x-icon-image class="w-6 h-6" />
                    </a>
                </div>
            </div>
            <div class="mx-auto mt-16 flex max-w-2xl sm:mt-24 lg:ml-10 lg:mr-0 lg:mt-0 lg:max-w-none lg:flex-none xl:ml-32">
                <div class="rounded-2xl bg-slate-900 p-2">
                    <img src="{{ asset('images/bitcoin-pepe-matrix.gif') }}" alt="{{ $rune->ticker }}" width="240" height="240" class="w-[16rem] rounded-md bg-white/5 shadow-2xl ring-1 ring-white/10">
                </div>
            </div>
        </div>
    </div>

    <x-charts/>

    <x-layout.section>
        <x-statistics/>
    </x-layout.section>

    <x-layout.section>
        <x-marketplaces/>
    </x-layout.section>

    <x-layout.section>
        <x-donation/>
    </x-layout.section>

    <x-layout.section>
        <x-rune-specs/>
    </x-layout.section>
</x-layout.main>
