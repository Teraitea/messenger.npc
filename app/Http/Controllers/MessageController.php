<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessageController extends Controller
{
    public function all()
    {
        $messages = Message::all();
        dump($messages);
        return view('messages.messages');
    }

    public function show($messageId)
    {
        $message = Message::find($messageId);
        dump($message);
        return view('messages.message');
    }

    public function new()
    {
        return view('messages.message-form');
    }

    public function create(Request $request)
    {
        dump($request);
        return view ('messages.messages');
    }


}
