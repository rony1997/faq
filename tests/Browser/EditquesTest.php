<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class EditquesTest extends DuskTestCase
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
              //  ->assertSee('helloworld')
                ->assertSee('Edit Question');
             //   ->ClickLink('Edit Question')
          //      ->assertSee('Create a Question');
              //  ->type('body','helloworld123')
              //  ->press('Save')
          //  ->assertSee('Saved');


        });
    }
}
