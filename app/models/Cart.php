<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table = 'cart';
    public $primaryKey = 'cart_id';
    public $timestamps = false;
}
