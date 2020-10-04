<?php

namespace App\Observers;

use App\Jobs\TellAFriendJob;
use App\Models\TellAFriend;

class TellAFriendObserver
{
    /**
     * Handle the tell a friend "created" event.
     *
     * @param  \App\Models\TellAFriend  $tellAFriend
     * @return void
     */
    public function created(TellAFriend $tellAFriend)
    {
        TellAFriendJob::dispatch($tellAFriend);
    }
}
