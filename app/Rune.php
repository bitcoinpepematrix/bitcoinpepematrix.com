<?php

namespace App;

use Illuminate\Support\Str;

class Rune
{
    public string $id;

    public int $number = 0;

    public int $supply = 0;

    public int $decimal = 0;

    public int $premine = 0;

    public int $burned = 0;

    public string $symbol = '';

    public string $ticker = '';

    public string $tickerWithoutSpacers = '';

    public int $etching_block = 0;

    public int $etching_transaction = 0;

    public string $etching_tx = '';

    public string $dotswap_url = '';

    public string $magic_eden_url = '';

    public string $okx_url = '';

    public string $unisat_url = '';

    public string $ordinals_wallet_url = '';

    public function __construct(array $attributes = [])
    {
        foreach ($attributes as $key => $value) {
            if (property_exists($this, $key)) {
                $this->{$key} = $value;
            }
        }

        $this->id = $this->etching_block.':'.$this->etching_transaction;

        $this->tickerWithoutSpacers = Str::of($this->ticker)->remove('•');

        $this->dotswap_url = Str::of('https://www.dotswap.app/swap#R_BTC_')->append(
            urlencode($this->ticker)
        );

        $this->magic_eden_url = Str::of('https://magiceden.io/runes/')->append(
            urlencode($this->ticker)
        );

        $this->okx_url = Str::of('https://www.okx.com/web3/marketplace/runes/token/')->append(
            urlencode($this->ticker)
        )->append('/')->append($this->id);

        $this->unisat_url = Str::of('https://unisat.io/runes/market?tick=')->append(
            urlencode($this->ticker)
        );

        $this->ordinals_wallet_url = Str::of('https://ordinalswallet.com/collection/rune-')->append(
            urlencode($this->ticker)
        );
    }
}
