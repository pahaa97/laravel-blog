<?php

namespace App\Http\Controllers\Personal\Main;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;

class IndexController extends Controller
{
    public function __invoke()
    {
        return view('personal.main.index');
    }
}
