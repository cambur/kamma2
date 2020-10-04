<?php

namespace App\Jobs;

use App\Mail\TellAFriendMailable;
use App\Models\TellAFriend;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class TellAFriendJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    /**
     * @var TellAFriend
     */
    protected TellAFriend $tellAFriend;

    /**
     * TellAFriendJob constructor.
     * @param TellAFriend $tellAFriend
     */
    public function __construct(TellAFriend $tellAFriend)
    {
        $this->tellAFriend = $tellAFriend;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $mailable = new TellAFriendMailable($this->tellAFriend);

        Mail::to($this->tellAFriend->friends_email)->send($mailable);
    }
}
