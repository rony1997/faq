<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class EditansTest extends DuskTestCase
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
                ->assertSee('Delete')
                ->assertSee('helloworld')
                ->assertSee('Delete')
                ->assertSee('Answer Question')
                ->ClickLink('View')
                ->assertSee('Answer')
                ->ClickLink('Edit Answer')
                ->assertSee('Create Answer')
                ->type('body','helloNJIT')
                ->press('Save')
                ->assertSee('Updated');








        });
    }
}
