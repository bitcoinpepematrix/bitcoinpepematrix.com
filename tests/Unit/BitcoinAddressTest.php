<?php

namespace Tests\Unit;

use App\Rules\BitcoinAddress;
use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;

class BitcoinAddressTest extends TestCase
{
    #[Test]
    public function valid_bitcoin_addresses()
    {
        $rule = new BitcoinAddress();

        $validAddresses = [
            '1A1zP1eP5QGefi2DMPTfTL5SLmv7DivfNa', // Legacy (P2PKH)
            '3J98t1WpEZ73CNmQviecrnyiWrnqRhWNLy', // SegWit (P2SH)
            'bc1qar0srrr7xfkvy5l643lydnw9re59gtzzwf6r5', // Bech32 (P2WPKH)
            'bc1pn0049l7luep3wwg4uufz9cyhdxsjkz64fjt2n6jqu8pezfnr9v0q8q20qt', // Ordinals
        ];

        foreach ($validAddresses as $address) {
            $rule->validate('bitcoin_address', $address, function () use ($address) {
                $this->assertTrue(
                    false,
                    sprintf('Address is not a valid Bitcoin address: %s', $address)
                );
            });
        }

        $this->assertTrue(true);
    }

    #[Test]
    public function invalid_bitcoin_addresses()
    {
        $rule = new BitcoinAddress();

        $invalidAddresses = [
            '1A1zP1eP5QGefi2DMPTfTL5SLmv7DivfNa!', // Invalid character '!'
            '3J98t1WpEZ73CNmQviecrnyiWrnqRhWNL', // Too short
            'bc1qar0srrr7xfkvy5l643lydnw9re59gtzzwf6r5bc1', // Too long
            'xQ98t1WpEZ73CNmQviecrnyiWrnqRhWNLy', // Invalid prefix 'x'
            'xx1pn0049l7luep3wwg4uufz9cyhdxsjkz64fjt2n6jqu8pezfnr9v0q8q20qt', // Invalid prefix 'x'
        ];

        foreach ($invalidAddresses as $address) {
            $rule->validate('bitcoin_address', $address, function () use ($address) {
                $this->assertTrue(
                    true,
                    sprintf('Address is not a valid Bitcoin address: %s', $address)
                );
            });
        }

        $this->assertTrue(true);
    }
}
