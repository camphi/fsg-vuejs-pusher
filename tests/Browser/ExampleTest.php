<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ExampleTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Laravel');
        });
    }

    public function testSendNotification()
    {
        $user1 = factory(User::class)->create([
            'name' => 'Michael Villeneuve'
        ]);

        $user2 = factory(User::class)->create([
            'name' => 'Steven Rosato'
        ]);

        $this->browse(function ($first, $second) use($user1, $user2) {
            $first->loginAs($user1)
                ->visit('/notifications')
                ->waitFor('.notifications-composer');

            $second->loginAs($user2)
                ->visit('/notifications')
                ->waitFor('.chat-composer')
                ->type('#message', 'Hey Steven')
                ->press('Send');

            $first->waitForText('Hey Steven')
                ->assertSee('Jane Doe');
        });
    }
}
