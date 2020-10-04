<?php

namespace App\DTOs;

use Spatie\DataTransferObject\DataTransferObject;

class TellAFriendDTO extends DataTransferObject
{
    public string $yourName;

    public string $friendsEmail;

    public string $friendsName;

    public static function create(string $yourName, string $friendsEmail, string $friendsName): TellAFriendDTO
    {
        return new static([
            'yourName'     => $yourName,
            'friendsEmail' => $friendsEmail,
            'friendsName'  => $friendsName,
        ]);
    }
}
