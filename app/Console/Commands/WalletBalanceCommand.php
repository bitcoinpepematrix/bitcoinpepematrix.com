<?php

namespace App\Console\Commands;

use App\Rune;
use App\Models\Wallet;
use App\Rules\BitcoinAddress;
use Illuminate\Support\Number;
use Illuminate\Console\Command;
use App\Jobs\RetrieveWalletBalance;
use Illuminate\Support\Facades\Validator;

class WalletBalanceCommand extends Command
{
    protected $signature = 'rune:balance {address}';

    protected $description = 'Retrieve the wallet balance for a Rune';

    protected Rune $rune;

    public function __construct()
    {
        parent::__construct();

        $this->rune = new Rune(config('rune'));
    }

    public function handle()
    {
        $validator = Validator::make(
            data: ['address' => $this->argument('address')],
            rules: ['address' => [new BitcoinAddress]],
        );

        if ($validator->fails()) {
            $this->error('The address is not valid.');

            return 1;
        }

        RetrieveWalletBalance::dispatchSync($this->rune, $this->argument('address'));

        $model = Wallet::where('address', $this->argument('address'))
            ->where('ticker', $this->rune->tickerWithoutSpacers)
            ->firstOrFail();

        $this->info('This wallet has a balance of '.Number::format($model->balance).' '.$this->rune->ticker);
    }
}
