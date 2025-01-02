<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;

    /**
     * Các cột có thể gán hàng loạt.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'std',
    ];
}
