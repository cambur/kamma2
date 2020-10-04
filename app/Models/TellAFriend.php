<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TellAFriend extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $guarded = [];
    protected $table = 'tell_a_friend';
}
