<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    use HasFactory;

    // Khai báo tên bảng (nếu khác với dạng số nhiều của model)
    protected $table = 'tables';


    // Nếu không muốn sử dụng timestamps
    public $timestamps = false;
    // Khai báo các cột có thể được gán hàng loạt
    protected $fillable = [
        'table_number',
        'statust',
        'price',
        'area',
    ];
    // Nếu cần định nghĩa các giá trị mặc định
    protected $attributes = [
        'statust' => 'empty', // Giá trị mặc định cho cột 'statust'
    ];
}
