<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $table= ' OrderDetail
';
    protected $primaryKey = ' OrderDetail
_id';
    protected  $fillable =[
        " OrderDetail_name",
        "Order_id",
        "Product_id",
        "Quantity",
        "active",
    ];
}
