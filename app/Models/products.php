<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'qty',
        'categories_id'
    ];

    public function categories(){
        return $this->belongsTo(categories::class);
    }
    public function cart(){
        return $this->hasMany(cart::class);
    }

}
