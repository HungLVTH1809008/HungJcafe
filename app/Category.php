<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table= 'Category';
    protected $primaryKey = 'Category_id';
    protected  $fillable =[
       "Category_name",
        "Product_id",
        "Content",
        "Images",
        "Describe",
        "Status",
        "active",
    ];
}
