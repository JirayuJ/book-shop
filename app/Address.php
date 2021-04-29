<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = ['id' , 'firstName',  'lastName', 'country' , 'address', 'district', 'county' , 'province' 
    , 'postcode', 'delivery' , 'payment'  ];

}
