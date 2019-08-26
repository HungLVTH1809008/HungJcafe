<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table= ' Order';
    protected $primaryKey = ' Order_id';
    protected  $fillable =[
        " Order_name",
        "Customer_id",
        "TotalMoney",
        "Date",
        "Status",
        "active",
    ];
}
