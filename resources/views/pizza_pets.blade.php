<x-layout.main
    title="BITCOIN•PEPE•MATRIX x Pizza Pets"
    description="We are thrilled to announce a collaboration with Pizza Ninjas and Mega Punks on their upcoming Pizza Pets airdrop."
>
    <x-nav-header/>
    <div class="relative isolate overflow-hidden">
        <x-matrix-background/>
        <div class="mx-auto max-w-7xl px-6 pb-24 pt-10 sm:pb-40 lg:flex lg:px-8 lg:pt-40">
            <div class="mx-auto max-w-2xl flex-shrink-0 lg:mx-0 lg:max-w-xl">
                <h1 class="mt-2 px-4 text-2xl font-bold tracking-wider text-white sm:text-4xl">
                    HAVE AN EGGCELENT DAY!
                </h1>
                <div class="mt-4 text-xl text-gray-100 bg-slate-950/75 p-4 rounded-xl">
                    <p>
                        We are thrilled to announce a collaboration with
                    </p>
                    <p class="mt-2 mb-2">
                        <a href="https://x.com/Pizza_Ninjas" target="_blank" class="underline underline-offset-2 hover:underline-offset-4">
                            Pizza Ninjas
                        </a> and
                        <a
                            href="https://x.com/MegaPunks_BTC"
                            class="underline underline-offset-2 hover:underline-offset-4"
                            target="_blank"
                        >Mega Punks</a>
                    </p>
                    <p>
                        on their upcoming
                        <a
                            href="https://pets.pizza"
                            class="underline underline-offset-2 hover:underline-offset-4"
                            target="_blank"
                        >Pizza Pets</a> airdrop.
                    </p>
                    <p class="mt-6">
                        More details coming soon...
                    </p>
                </div>
            </div>
            <div class="mx-auto flex justify-end">
                <div class="flex space-x-4 rounded-2xl bg-slate-900 p-2">
                    <img
                        src="{{ asset('images/bitcoin-pepe-matrix.gif') }}"
                        alt="{{ $rune->ticker }}"
                        width="240"
                        height="240"
                        class="w-60 rounded-md bg-white/5 shadow-2xl ring-1 ring-white/10"
                    >
                    <img
                        src="{{ asset('images/pizza_pets_egg.jpg') }}"
                        alt="This is EggCelent!"
                        width="240"
                        height="240"
                        class="w-60 rounded-md bg-white/5 shadow-2xl ring-1 ring-white/10"
                    >
                </div>
            </div>
        </div>
    </div>
    <div class="mx-auto max-w-7xl px-6 pb-4 pt-4 lg:px-8">
        <p class="text-white mt-6 p-4">
            Be the first to know every detail about our collaboration. Join our
            <a
                class="underline underline-offset-2 hover:underline-offset-4"
                href="{{ $socials->telegram_url }}"
                target="_blank"
            >Telegram</a>!
        </p>
    </div>
</x-layout.main>
