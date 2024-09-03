<?php

namespace App\Jobs;

use App\Rune;
use Illuminate\Support\Str;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Http;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class VerifyRuneOwnership implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public string $apiUrl;

    public function __construct(
        public Rune $rune,
        public string $address,
        public int $minimum_amount = 1,
    ) {
        $this->apiUrl = Str::of('https://api-mainnet.magiceden.dev/v2/ord/btc/runes/wallet/balances/')
            ->append($address)
            ->append('/')
            ->append($this->rune->tickerWithoutSpacers);
    }

    public function handle(): void
    {
        $response = Http::withToken(
            config('services.magiceden.api_key')
        )
            ->acceptJson()
            ->get($this->apiUrl);

        if ($response->successful()) {
            //
        }
    }
}
