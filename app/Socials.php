<?php

namespace App;

use Illuminate\Support\Str;

class Socials
{
    public string $twitter_url;

    public string $telegram_url;

    public string $discord_url;

    public function __construct()
    {
        $this->twitter_url = Str::of('https://x.com/')->append(
            config('socials.twitter_handle')
        );

        $this->telegram_url = Str::of('https://t.me/')->append(
            config('socials.telegram_handle')
        );

        $this->discord_url = Str::of('https://discord.com/invite/')->append(
            config('socials.discord_handle')
        );
    }
}
