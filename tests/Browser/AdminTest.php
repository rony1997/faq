<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class AdminTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample1()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/admin')
                ->assertSee('ADMIN Login')
                ->type('email','rohan@gmail.io')
                ->type('password','password')
                ->press('Login')
                ->assertSee('ADMIN Dashboard')
                ->assertSee('You are Logged In as a ADMIN')
                ->ClickLink('My Account')
                ->ClickLink('Logout');


        });
    }
}
