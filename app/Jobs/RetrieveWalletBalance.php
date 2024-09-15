<?php

namespace App\Jobs;

use App\Rune;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class RetrieveWalletBalance implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public string $apiUrl;

    public function __construct(
        public Rune $rune,
        public string $address,
    ) {
        $this->apiUrl = 'https://api-mainnet.magiceden.dev/v2/ord/btc/runes/wallet/balances/'.$this->address.'/'.$this->rune->tickerWithoutSpacers;
    }

    public function handle(): void
    {
        $response = Http::withToken(
            config('services.magiceden.api_key')
        )
            ->acceptJson()
            ->get($this->apiUrl);

        if ($response->successful()) {
            Cache::put(
                'wallet_balance_'.$this->address.'_'.$this->rune->tickerWithoutSpacers,
                $response->json('balance')
            );
        }
    }
}
