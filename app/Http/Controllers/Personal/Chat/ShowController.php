<?php

namespace App\Http\Controllers\Personal\Chat;

use App\Http\Controllers\Controller;
use App\Models\Chat;
use App\Models\Message;
use App\Models\User;
use App\Models\UserChats;

class ShowController extends Controller
{
    public function __invoke(Chat $chat)
    {
        $name = UserChats::where('chat_id', '=', $chat->id)
            ->where('user_id','!=',auth()->user()->id)
            ->join('users','id','=','user_id')
            ->select('users.name', 'users_chats.chat_id', 'users_chats.user_id')
            ->first();
        $chat['name'] = $name->name;
        $messages = Message::where('chat_id','=',$chat->id)
            ->join('users', 'messages.from_user_id', '=', 'users.id')
            ->select('users.name', 'messages.id', 'messages.message')
            ->get();
        return view('personal.chat.show', compact('chat','messages'));
    }
}
