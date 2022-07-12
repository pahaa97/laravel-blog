<?php

namespace App\Http\Controllers\Personal\Chat;

use App\Http\Controllers\Controller;
use App\Models\Chat;
use App\Models\User;
use App\Models\Comment;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;

class DeleteController extends Controller
{
    public function __invoke(Chat $chat)
    {
        $chat->delete();
        return redirect()->route('personal.comment.index');
    }
}
