<?php

use Illuminate\Support\Facades\Route;
use App\Models\Table;
use App\Models\Player;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/table', function () {
    // Lấy tất cả các bản ghi từ bảng 'tables'
    $tables = Table::all();
    return response()->json($tables); // Trả về JSON cho API
});

Route::get('/player', function () {
    // Lấy tất cả các bản ghi từ bảng 'players'
    $players = Player::all();
    return response()->json($players); // Trả về JSON cho API
});
