<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Events\MessageSent;

class SendMessage extends Controller
{
    public function send(Request $request){
        event(new \App\Events\MessageSent('客户端收到消息'));
        return '服务器发送信息';
    }
}
