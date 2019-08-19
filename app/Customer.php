<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table= 'Customer';
    protected $primaryKey = ' Customer_id';
    protected  $fillable =[
        " Customer_name",
        "Product_id",
        "Birthday",
        "Address",
        "Email",
        "PhoneNumber",
        "active",
    ];
}
