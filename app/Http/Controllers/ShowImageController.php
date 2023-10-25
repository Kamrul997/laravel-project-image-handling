<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;

class ShowImageController extends Controller
{
    public function showImages(){
        $images = Image::all();
        $data = compact('images');
        return view("showImages.index")->with($data);
    }
}
