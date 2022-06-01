<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;

class AdminController extends Controller
{
    //

    public function galleryAdd() {
        return view ('admin.edit-image');

        
    }

    public function galleryEdit(Image $image) {
        return view ('admin.edit-image',['image'=>$image]);
    }

    public function galleryUpdate(Image $image, Request $request) {
        self::saveImage($image, $request);
        return redirect()->route('gallery');
       
    }

    public function galleryCreate(Request $request) {
        $image = new Image ();
        self::saveImage($image, $request);
        return redirect()->route('gallery');
       
    }

    public function galleryCreateGet(Request $request) {
        dd('test');
    }



    public function galleryDelete(Image $image) {
        $image->delete();
        return redirect()->route('gallery');
    }


    private static function saveImage($image, $request) {
        $image->title = $request->input('title');
        $path = $request->file('image')->store('images');
        $image->thumbnail = $request->file('thumbnail')->store('images');
        $image->image = $path;
        
        $image->save();
    }

}
