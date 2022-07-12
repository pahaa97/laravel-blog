<?php

namespace App\Http\Controllers\Personal\Chat;

use App\Http\Controllers\Controller;
use App\Http\Requests\Personal\Comment\UpdateRequest;
use App\Models\Chat;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Chat $chat)
    {
        $data = $request->validated();
        $chat->update($data);
        return redirect()->route('personal.chat.index');
    }
}
