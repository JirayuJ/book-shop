<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['id' , 'name',  'image_name', 'detail' , 'price' , 'qty', 'discount'];

}
