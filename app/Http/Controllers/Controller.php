<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function show()
    {
        return view("welcome", ["messages" => Message::all()]);
    }

    public function insert(Request $request)
    {
        $message = new Message();
        $message->message = $request->input('message');
        $message->save();
        return view("welcome", ["messages" => Message::all()]);
    }
}
