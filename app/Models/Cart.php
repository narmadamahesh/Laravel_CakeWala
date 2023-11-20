<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $table='carts';
    protected $fillable =[
        'userid',
        'cakeid',
        'cakequantity',
    ];

    public function cakes()
    {
        return $this->belongsTo(Category::class,'cakeid','id');
    }
}
