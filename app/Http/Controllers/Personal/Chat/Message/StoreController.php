<?php

namespace App\Http\Controllers\Personal\Chat\Message;

use App\Http\Controllers\Controller;
use App\Http\Requests\Personal\Message\StoreRequest;
use App\Models\Message;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $data['chat_id'] = explode('/',$request->server->parameters['REQUEST_URI'])[3];
        $data['from_user_id'] = auth()->user()->id;
        return Message::Create($data);
    }
}
