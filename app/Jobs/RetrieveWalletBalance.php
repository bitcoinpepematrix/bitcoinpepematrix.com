<?php

namespace App\Jobs;

use App\Models\Wallet;
use App\Rune;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Http;

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
            Wallet::updateOrCreate([
                'ticker' => $this->rune->tickerWithoutSpacers,
                'address' => $this->address,
            ], [
                'balance' => $response->json('balance'),
            ]);
        }
    }
}
