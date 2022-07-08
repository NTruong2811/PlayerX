<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
  protected $table = 'categories';
  public $primaryKey = 'cate_id';
  public $timestamps = false;
 
}
