<?php

namespace App\Http\Controllers\Personal\Chat\Message;

use App\Http\Controllers\Controller;
use App\Models\Chat;
use App\Models\Message;

class IndexController extends Controller
{
    public function __invoke(Chat $chat)
    {
        $messages = Message::all()->where('chat_id', '=', $chat->id);
        return view('personal.chat.index', compact('messages'));
    }
}
