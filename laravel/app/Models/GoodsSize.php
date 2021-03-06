<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GoodsSize extends Model
{
    use HasFactory;

    protected $table = 'goods_size';

    protected $fillable = [
        'goods_id',
        'size_id'
    ];
}
