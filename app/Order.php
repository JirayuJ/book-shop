<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    protected $fillable = ['id' , 'invoce_number',  'total_price', 'user_id' , 'address_id' ];
    
}
