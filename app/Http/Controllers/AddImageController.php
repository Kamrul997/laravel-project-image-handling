<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;

class AddImageController extends Controller
{
    public function addImage(){
        return view("addImage.index");
    }
    public function storeImage(Request $request){

        $request->validate(
            [
                'image' => 'required|mimes:jpg,png,jpeg|max:2048',
                'imageName' => 'required'
            ]
            );

        $newImageName = time() . '-'. $request->imageName . '.' . $request->image->extension();
        
        $request->image->move(public_path('images'), $newImageName);

        $image = new Image;
        $image->image_name = $request['imageName'];
        $image->image_path = $newImageName;
        $image->save();

        return redirect(route("image.show"));
    }
}
