<?php

namespace App\Repositories;

use App\DTOs\TellAFriendDTO;
use App\Models\TellAFriend;

class TellAFriendRepository
{
    public function store(TellAFriendDTO $tellAFriendDTO)
    {
        TellAFriend::create([
            'your_name'     => $tellAFriendDTO->yourName,
            'friends_email' => $tellAFriendDTO->friendsEmail,
            'friends_name'  => $tellAFriendDTO->friendsName,
        ]);
    }
}
