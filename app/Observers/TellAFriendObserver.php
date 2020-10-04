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

    /**
     * Handle the tell a friend "updated" event.
     *
     * @param  \App\Models\TellAFriend  $tellAFriend
     * @return void
     */
    public function updated(TellAFriend $tellAFriend)
    {
        //
    }

    /**
     * Handle the tell a friend "deleted" event.
     *
     * @param  \App\Models\TellAFriend  $tellAFriend
     * @return void
     */
    public function deleted(TellAFriend $tellAFriend)
    {
        //
    }

    /**
     * Handle the tell a friend "restored" event.
     *
     * @param  \App\Models\TellAFriend  $tellAFriend
     * @return void
     */
    public function restored(TellAFriend $tellAFriend)
    {
        //
    }

    /**
     * Handle the tell a friend "force deleted" event.
     *
     * @param  \App\Models\TellAFriend  $tellAFriend
     * @return void
     */
    public function forceDeleted(TellAFriend $tellAFriend)
    {
        //
    }
}
