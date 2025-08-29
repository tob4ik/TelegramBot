<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\TelegramController@index')->name('index');
