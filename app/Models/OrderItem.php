<?php

namespace App\Models;

use App\Models\Order;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Frontend\UserController;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OrderItem extends Model
{
    protected $table='orderitems';
    protected $fillable=[
        'order_id',
        'cakeid',
        'cakequantity',
        'price',
    ];


    public function cake()
    {
        return $this->belongsTo(Category::class,'cakeid','id');
    }

    use HasFactory;
}
