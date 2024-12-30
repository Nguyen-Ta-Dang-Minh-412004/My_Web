<?php

namespace App\Models;
use Illuminate\Support\Facades\Route;
use App\Models\Table;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/table', function () {
    // Lấy tất cả các bản ghi từ bảng 'tables'
    $tables = Table::all();
    return response()->json($tables); // Trả về JSON cho API
});