<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Telegram\Bot\Api;

class TelegramController extends Controller
{
    //
    protected $telegram;

    public function __construct(Api $telegram)
    {
        $this->telegram = $telegram;
    }
    public function index()
    {
        $response = $this->telegram->sendMessage([
            'chat_id' => '8072029096',
            'text' => 'Hello World'
        ]);
    }
}
