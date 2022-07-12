<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    use HasFactory;
    protected $guarded = false;
    protected $table = 'chats';

    public function messages()
    {
        return $this->belongsToMany(Message::class,'chat_id','id');
    }
}
