<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Http;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class SendMessage extends Controller{
    public function send(Request $request){
        $name = $request->input('name');
        $content = $request->input('content');

        $list = array(
            array(
                "laravel_name" => $name,
                "laravel_content" => $content, 
            )
        );

        event(new \App\Events\MessageSent($list));
        return $list;
    }
}
