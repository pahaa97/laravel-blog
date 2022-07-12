<?php

namespace App\Http\Controllers\Personal\Chat;

use App\Http\Controllers\Controller;
use App\Models\UserChats;

class IndexController extends Controller
{
    public function __invoke()
    {
        $chats = auth()->user()->chats()->get();
        foreach($chats as $chat) {
            $names[] = UserChats::where('chat_id', '=', $chat->id)
                ->where('user_id','!=',auth()->user()->id)
                ->join('users','id','=','user_id')
                ->select('users.name', 'users_chats.chat_id', 'users_chats.user_id')
                ->get();
        }

        return view('personal.chat.index', compact('chats', 'names'));
    }
}
