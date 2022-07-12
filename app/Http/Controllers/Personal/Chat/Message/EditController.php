<?php

namespace App\Http\Controllers\Personal\Chat\Message;

use App\Http\Controllers\Controller;
use App\Models\Message;
use App\Models\User;
use App\Models\Comment;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;

class EditController extends Controller
{
    public function __invoke(Message $message)
    {
        return view('personal.chat.edit', compact('message'));
    }
}
