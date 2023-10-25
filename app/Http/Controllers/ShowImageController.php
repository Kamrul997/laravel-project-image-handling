<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowImageController extends Controller
{
    public function showImages(){
        return view("showImages.index");
    }
}
