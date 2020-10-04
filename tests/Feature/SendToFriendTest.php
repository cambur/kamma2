<?php

namespace Tests\Feature;

use App\Http\Livewire\TellAFriendComponent;
use App\Jobs\TellAFriendJob;
use App\Models\TellAFriend;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Queue;
use Livewire\Livewire;
use Tests\TestCase;

class SendToFriendTest extends TestCase
{
    use WithFaker, RefreshDatabase;

    /** @test */
    function can_send_email()
    {
        $firstName = $this->faker->firstName;

        Livewire::test(TellAFriendComponent::class)
            ->set('your_name', $firstName)
            ->set('friends_email', $this->faker->email)
            ->set('friends_name', $this->faker->firstName)
            ->call('sentToFriend');

        $this->assertTrue(TellAFriend::whereYourName($firstName)->exists());
    }

    /** @test */
    function job_was_dispatched()
    {
        Queue::fake();
        $firstName = $this->faker->firstName;

        Livewire::test(TellAFriendComponent::class)
            ->set('your_name', $firstName)
            ->set('friends_email', $this->faker->email)
            ->set('friends_name', $this->faker->firstName)
            ->call('sentToFriend');

        Queue::assertPushed(TellAFriendJob::class);
    }

    /** @test */
    function welcome_page_contains_livewire_component()
    {
        $this->get('/')->assertSeeLivewire('sent-to-friend');
    }
}
