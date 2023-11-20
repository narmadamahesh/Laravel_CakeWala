<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;


    protected $table = 'cakewala';
    protected $fillable = [
        'cakename',
        'slug',
        'original_price',
        'selling_price',
        'cakeflavour',
        'cakeshape',
        'weight',
        'caketype',
        'image',
        'status',
        'popular',
        'quantity',

    ];



}
