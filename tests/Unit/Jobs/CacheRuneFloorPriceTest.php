<?php

namespace Tests\Unit\Jobs;

use App\Jobs\CacheRuneFloorPrice;
use App\Rune;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;

class CacheRuneFloorPriceTest extends TestCase
{
    #[Test]
    public function it_caches_the_floor_price(): void
    {
        Http::fake([
            'api-mainnet.magiceden.dev/*' => Http::response([
                'floorUnitPrice' => ['value' => 0.12],
            ], 200),
        ]);

        $rune = new Rune(['ticker' => 'BITCOIN•PEPE•MATRIX']);

        CacheRuneFloorPrice::dispatch($rune);

        $this->assertTrue(Cache::has('floor_price'));
        $this->assertEquals(0.12, Cache::get('floor_price'));
    }
}
