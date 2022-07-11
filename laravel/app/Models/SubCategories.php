<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategories extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function goods()
    {
      return  $this->hasMany(Goods::class);
    }

    public function categories()
    {
        return $this->belongsTo(Categories::class);
    }
}
