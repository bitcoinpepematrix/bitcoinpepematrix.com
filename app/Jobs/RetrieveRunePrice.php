<?php

namespace App\Jobs;

use App\Models\RunePrice;
use App\Rune;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Http;

class RetrieveRunePrice implements ShouldQueue
{
    use Dispatchable, Queueable;

    public string $apiUrl;

    public function __construct(
        public Rune $rune,
    ) {
        $this->apiUrl = 'https://api-mainnet.magiceden.dev/v2/ord/btc/runes/market/'.$this->rune->tickerWithoutSpacers.'/info';
    }

    public function handle(): void
    {
        $response = Http::withToken(
            config('services.magiceden.api_key')
        )
            ->acceptJson()
            ->get($this->apiUrl);

        if ($response->successful()) {
            $model = new RunePrice;

            $model->ticker = $this->rune->tickerWithoutSpacers;
            $model->price_in_sats = $response->json('floorUnitPrice.value');

            $model->save();
        }
    }
}
