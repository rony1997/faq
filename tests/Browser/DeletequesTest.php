<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class DeletequesTest extends DuskTestCase
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
                ->assertSee('View')
                ->ClickLink('View')
                ->assertSee('Question')
                ->assertSee('Answer Question')
                ->assertSee('Delete')
                ->assertSee('helloworld')
                ->assertSee('Delete')
              //   ->press('Delete')
                //->assertSee('Deleted')
                ->ClickLink('My Account')
                ->ClickLink('Logout');


        });
    }
}
