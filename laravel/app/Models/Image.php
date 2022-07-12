<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $table = 'image';

    protected $fillable = [
        'image',
        'goods_id'
    ];

    public function goods()
    {
        return $this->belongsTo(Goods::class);
    }
}
