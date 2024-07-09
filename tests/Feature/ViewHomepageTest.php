<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\Config;
use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;

class ViewHomepageTest extends TestCase
{
    #[Test]
    public function a_request_to_the_homepage_should_return_a_200_status_code(): void
    {
        $this->get('/')->assertOk()->assertViewIs('welcome');
    }

    #[Test]
    public function the_fathom_site_id_is_seen()
    {
        Config::set('services.fathom.site_id', 'TEST123');

        $this->get('/')
            ->assertSee('cdn.usefathom.com/script.js')
            ->assertSee('data-site="TEST123"', escape: false);
    }

    #[Test]
    public function the_fathom_script_tag_is_not_seen_when_site_id_is_not_configured()
    {
        Config::set('services.fathom.site_id', '');

        $this->get('/')->assertDontSee('cdn.usefathom.com/script.js');
    }
}
