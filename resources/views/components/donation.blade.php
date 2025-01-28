<div class="mx-auto max-w-7xl px-6 lg:px-8">
    <label for="donate-btc" class="block text-lg md:text-xl text-base font-semibold leading-8 text-slate-400">
        we are community driven, please consider making a donation to our community wallet
    </label>

    <div class="flex w-full relative mt-6 rounded-md shadow-xs">
        <span class="w-20 bg-white inline-flex items-center rounded-l-md border border-r-0 border-gray-300 px-3 text-slate-500 sm:text-sm">
            Bitcoin
        </span>
        <input
            onClick="this.select();"
            type="text"
            id="donate-btc"
            class="bg-white block w-full min-w-0 flex-1 rounded-none rounded-r-md border-0 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-green-600 sm:text-sm sm:leading-6"
            value="bc1qs9fknv3e6qxtwczye552sejws3cr80fhn5cn5y"
        >
        <div class="cursor-pointer absolute inset-y-0 right-0 flex items-center pr-3">
            <copy-button target-element="#donate-btc">
                <button class="active:text-green-600">
                    <x-icon-copy class="w-5 h-5"/>
                </button>
            </copy-button>
        </div>
    </div>

    <div class="flex w-full relative mt-2 rounded-md shadow-xs">
        <span class="w-20 bg-white inline-flex items-center rounded-l-md border border-r-0 border-gray-300 px-3 text-slate-500 sm:text-sm">
            Ordinals
        </span>
        <input
            onClick="this.select();"
            type="text"
            id="donate-ord"
            class="bg-white block w-full min-w-0 flex-1 rounded-none rounded-r-md border-0 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-green-600 sm:text-sm sm:leading-6"
            value="bc1pwe9y8d4cs5ded84avk7yecaddjm85uvdd45kwmq3etdc29gpcq9qzg588c"
        >
        <div class="cursor-pointer absolute inset-y-0 right-0 flex items-center pr-3">
            <copy-button target-element="#donate-ord">
                <button class="active:text-green-600">
                    <x-icon-copy class="w-5 h-5"/>
                </button>
            </copy-button>
        </div>
    </div>
</div>
