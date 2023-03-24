<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cart extends Model
{
    use HasFactory;
    protected $fillable  = [
        'products_id',
        'qty',
    ];

    public function products(){
        return $this->belongsTo(products::class);
    }
}
