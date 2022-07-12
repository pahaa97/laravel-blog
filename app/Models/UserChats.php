<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserChats extends Model
{
    use HasFactory;
    protected $table = 'users_chats';
    protected $guarded = false;
}
