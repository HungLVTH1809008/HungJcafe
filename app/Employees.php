<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    protected $table= 'Employees';
    protected $primaryKey = 'employees_id';
    protected  $fillable =[
        " employees_name",
        "Order_id",
        "sex",
        "Birthday",
        "Address",
        "Email",
        "PhoneNumber",
        "active",
    ];
}
