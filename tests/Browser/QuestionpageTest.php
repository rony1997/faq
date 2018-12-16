<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class QuestionpageTest extends DuskTestCase
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
                     ->assertSee('Questions')
                    ->assertSee('Create a Question')
                    ->ClickLink('Create a Question')
                    ->type('body','helloworld')
                    ->press('Save')
                        ->assertSee('IT WORKS!')
                            ->assertSee('View')
                            ->ClickLink('View')
                                 ->assertSee('Question')
                                ->assertSee('Answer Question')
                                ->assertSee('Delete')
                                ->assertSee('helloworld')
                                ->assertSee('Edit Question')
                                    //logout
                                ->ClickLink('My Account')
                                 ->ClickLink('Logout');










        });
    }
}
