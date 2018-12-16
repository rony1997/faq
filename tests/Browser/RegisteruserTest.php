<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class RegisteruserTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testRegisteruser()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/register')
                ->assertSee('Register')
                ->type('email','rohan@abc.aaad')
                ->type('password','abc123')
                ->type('password_confirmation','abc123')
                ->press('Register')
                ->assertSee('Home');

        });
    }
}
