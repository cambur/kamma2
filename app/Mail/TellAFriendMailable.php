<?php

namespace App\Mail;

use App\Models\TellAFriend;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TellAFriendMailable extends Mailable
{
    use Queueable, SerializesModels;
    /**
     * @var TellAFriend
     */
    protected TellAFriend $tellAFriend;

    /**
     * Create a new message instance.
     *
     * @param TellAFriend $tellAFriend
     */
    public function __construct(TellAFriend $tellAFriend)
    {
        $this->tellAFriend = $tellAFriend;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.tell-a-friend')
            ->subject('A recommendation from your friend')
            ->with([
                'title' => 'Look at this!',
                'body' => 'Here is my awesome message.',
            ]);
    }
}
