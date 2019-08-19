<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table= ' Product';
    protected $primaryKey = ' Product_id';
    protected  $fillable =[
        " Product_name",
        "Category_id",
        "Customer_id",
        "Detail",
        "Image",
        "Price",
        "PriceNew",
        "Date",
        "Order",
        "Status",
        "active",
    ];
}
