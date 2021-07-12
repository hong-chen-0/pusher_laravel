<?php

use Illuminate\Support\Facades\Route;
use App\Events\MessageSent;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::any('/messages', function () {

    event(new \App\Events\MessageSent('客户端收到消息'));
    return '服务器发送信息';
});

