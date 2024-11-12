<x-layout.main>
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
                        class="pl-12 hover:text-slate-200"
                        target="_blank"
                        rel="noopener"
                    >
                        <span class="sr-only">Charts</span>
                        <x-icon-chart-line class="w-6 h-6" />
                    </a>
                    <a
                        href="{{ route('memes') }}"
                        class="flex pl-12 hover:text-slate-200"
                    >
                        <x-icon-image class="w-6 h-6" />
                        <span class="pl-4 font-bold">MEMES</span>
                    </a>
                </div>
                <div class="bg-gradient-to-b from-slate-600/[0.2] to-slate-800/[0.5] rounded-lg py-6 px-8 mt-16 -ml-6 flex items-center gap-x-6 text-slate-200 font-semibold">
                    <ul class="list-disc space-y-2">
                        <li>There was no airdrop for {{ $rune->ticker }}</li>
                        <li>Fair mint started on Apr 22, 2024 at block 840269</li>
                        <li>Minted out in 13 hours and 45 minutes at block 840350</li>
                        <li>23 BTC ($1.5M) was spent to mint out {{ $rune->ticker }}</li>
                        <li>In top 25 with over 14K holders since day one</li>
                    </ul>
                </div>
            </div>
            <div class="mx-auto mt-16 items-center flex max-w-2xl sm:mt-24 lg:ml-10 lg:mr-0 lg:mt-0 lg:max-w-none lg:flex-none xl:ml-32">
                <div class="rounded-2xl bg-slate-900 p-2">
                    <img
                        src="{{ asset('images/bitcoin-pepe-matrix.gif') }}"
                        alt="{{ $rune->ticker }}"
                        width="240"
                        height="240"
                        class="w-[16rem] rounded-md bg-white/5 shadow-2xl ring-1 ring-white/10"
                    >
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
