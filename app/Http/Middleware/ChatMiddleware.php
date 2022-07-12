<?php

namespace App\Http\Middleware;

use App\Models\UserChats;
use Closure;
use Illuminate\Http\Request;
use App\Models\User;

class ChatMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $chats = auth()->user()->chats()->get();
        foreach($chats as $chat) {
            if($chat->id == explode('/',$request->server->parameters['REQUEST_URI'])[3]) {
                return $next($request);
            }
        }
        return abort(404);
    }
}
