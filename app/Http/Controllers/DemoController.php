<?php

namespace App\Http\Controllers;

use App\student;
use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function ProductList(){
        // hung
        $Category  = category::all();//DUA VAO VIEW GUI KEM VAO VIEW
        return view ("demo", compact("Category")); // kieu du lieu  sang view dung bien student
    }

}
