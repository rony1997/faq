<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class EditProfileTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                ->assertSee('Login')
                ->type('email','rohan@abc.com')
                ->type('password','abc123')
                ->press('Login')
                ->assertSee('Home')
                ->ClickLink('My Account')
                ->ClickLink('My Profile')
                ->assertSee('My Profile')
                ->assertSee('First Name')
                ->assertSee('Last Name')
                ->assertSee('Body')
                ->ClickLink('Edit')
                ->type('fname','patel')
                ->type('lname','patel')
                ->type('body','My name is rohan')
                ->press('Save')
                ->assertSee('Updated Profile');

        });
    }
}
