<?php

namespace Tests\Unit;

use App\Rune;
use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;

class RuneTest extends TestCase
{
    public function validParams($overrides = []): array
    {
        return array_merge([
            'number' => 1,
            'supply' => 1,
            'decimal' => 0,
            'symbol' => '$',
            'premine' => 0,
            'burned' => 0,
            'ticker' => 'BITCOIN•PEPE•MATRIX',
            'etching_block' => 0,
            'etching_transaction' => 0,
            'etching_tx' => 'abcd',
        ], $overrides);
    }

    #[Test]
    public function rune_has_a_ticker(): void
    {
        $rune = new Rune($this->validParams([
            'ticker' => 'TEST•TICKER',
        ]));

        $this->assertEquals('TEST•TICKER', $rune->ticker);
    }

    #[Test]
    public function rune_has_a_ticker_without_spacers(): void
    {
        $rune = new Rune($this->validParams([
            'ticker' => 'TICKER•WITH•SPACERS',
        ]));

        $this->assertEquals('TICKERWITHSPACERS', $rune->tickerWithoutSpacers);
    }

    #[Test]
    public function rune_has_a_number(): void
    {
        $rune = new Rune($this->validParams([
            'number' => 1234,
        ]));

        $this->assertEquals(1234, $rune->number);
    }

    #[Test]
    public function rune_has_a_supply(): void
    {
        $rune = new Rune($this->validParams([
            'supply' => 69420,
        ]));

        $this->assertEquals(69420, $rune->supply);
    }

    #[Test]
    public function rune_has_a_symbol(): void
    {
        $rune = new Rune($this->validParams([
            'symbol' => 'SYMBOL',
        ]));

        $this->assertEquals('SYMBOL', $rune->symbol);
    }

    #[Test]
    public function rune_has_a_decimal(): void
    {
        $rune = new Rune($this->validParams([
            'decimal' => 1,
        ]));

        $this->assertEquals(1, $rune->decimal);
    }

    #[Test]
    public function rune_has_a_premine_value(): void
    {
        $rune = new Rune($this->validParams([
            'premine' => 100,
        ]));

        $this->assertEquals(100, $rune->premine);
    }

    #[Test]
    public function rune_has_a_burned_value(): void
    {
        $rune = new Rune($this->validParams([
            'burned' => 200,
        ]));

        $this->assertEquals(200, $rune->burned);
    }

    #[Test]
    public function rune_has_an_etching_block(): void
    {
        $rune = new Rune($this->validParams([
            'etching_block' => 84000,
        ]));

        $this->assertEquals(84000, $rune->etching_block);
    }

    #[Test]
    public function rune_has_an_etching_transaction(): void
    {
        $rune = new Rune($this->validParams([
            'etching_transaction' => 456,
        ]));

        $this->assertEquals(456, $rune->etching_transaction);
    }

    #[Test]
    public function rune_has_an_id(): void
    {
        $rune = new Rune($this->validParams([
            'etching_block' => 123,
            'etching_transaction' => 789,
        ]));

        $this->assertEquals('123:789', $rune->id);
    }

    #[Test]
    public function rune_has_an_etching_tx(): void
    {
        $rune = new Rune($this->validParams([
            'etching_tx' => 'tx12abc34',
        ]));

        $this->assertEquals('tx12abc34', $rune->etching_tx);
    }

    #[Test]
    public function rune_has_the_url_to_the_dot_swap_website(): void
    {
        $rune = new Rune($this->validParams([
            'ticker' => 'TEST•TICKER',
        ]));

        $this->assertEquals('https://www.dotswap.app/swap#R_BTC_TEST%E2%80%A2TICKER', $rune->dotswap_url);
    }

    #[Test]
    public function rune_has_the_url_to_the_magic_eden_website(): void
    {
        $rune = new Rune($this->validParams([
            'ticker' => 'TEST•TICKER',
        ]));

        $this->assertEquals('https://magiceden.io/runes/TEST%E2%80%A2TICKER', $rune->magic_eden_url);
    }

    #[Test]
    public function rune_has_the_url_to_the_okx_website(): void
    {
        $rune = new Rune($this->validParams([
            'ticker' => 'TEST•TICKER',
            'etching_block' => 123,
            'etching_transaction' => 987,
        ]));

        $this->assertEquals('https://www.okx.com/web3/marketplace/runes/token/TEST%E2%80%A2TICKER/123:987', $rune->okx_url);
    }

    #[Test]
    public function rune_has_the_url_to_the_ordinals_wallet_website(): void
    {
        $rune = new Rune($this->validParams([
            'ticker' => 'TEST•TICKER',
        ]));

        $this->assertEquals('https://ordinalswallet.com/collection/rune-TEST%E2%80%A2TICKER', $rune->ordinals_wallet_url);
    }

    #[Test]
    public function rune_has_the_url_to_the_unisat_website(): void
    {
        $rune = new Rune($this->validParams([
            'ticker' => 'TEST•TICKER',
        ]));

        $this->assertEquals('https://unisat.io/runes/market?tick=TEST%E2%80%A2TICKER', $rune->unisat_url);
    }
}
