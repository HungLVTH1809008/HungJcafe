<?php

namespace App\Http\Controllers;
use App\Product;
use App\student;
use App\User;
use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function ProductList(){
        // hung
        $Category  = category::all();//DUA VAO VIEW GUI KEM VAO VIEW
        return view ("demo", compact("Category")); // kieu du lieu  sang view dung bien student
    }

    public function danhsach(){
        $users = User::all();
        return view("danhsach" , compact("users"));
    }



}
