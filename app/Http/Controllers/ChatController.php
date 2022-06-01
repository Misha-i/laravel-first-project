<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chat;

class ChatController extends Controller
{
    public function index(Request $request)
    {
        if ($request->input('id') == 1) {
            $room_name = 'one';
        } elseif ($request->input('id') == 2) {
            $room_name = 'two';
        } else {
            $room_name = 'three';
        }
        return view('room', ['id' => $request->input('id'), 'room-name' => $room_name, 'name' => $request->input('name')]);
    }
}
