<?php

namespace App\Http\Controllers;

use App\Http\Requests\ChatOnlineRequest;
use App\Models\ChatOnline;
use Illuminate\Pagination\Paginator;

class ChatOnlineController extends Controller
{
    public function index(ChatOnline $chatOnline){
        $allMessages = ChatOnline::get();
        Paginator::useBootstrap();
        return view('OnlineChat.index', ['all_messages' => $allMessages]);
    }
    public function name(){
        return view('OnlineChat.create');
    }
    public function create(ChatOnlineRequest $request){
        $user = new ChatOnline;
        $user->name = $request->input('name');
        $user->message = $request->input('message');
        $user->save();
        return redirect()->route('onlinechat')->with('success', 'Ви були заєстровані');
    }
}
