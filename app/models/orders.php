<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    protected $table = 'orders';
    public $primaryKey = 'id_order';
    public $timestamps = false;
}
