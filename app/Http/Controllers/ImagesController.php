<?php

namespace App\Http\Controllers;

use App\Images;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic;

class ImagesController extends Controller
{
   
    public function index()
    {
        return view('Image');
    }

    public function resize_image(Request $request)
    {
        $this->validate($request,
        [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
        ]);

        $image = $request->file('image');
        $imagename = time().'.'.$image->getClientOriginalName(); 
   
        $destinationPath = public_path('/thumbnail_images');

        $thumb_img = ImageManagerStatic::make($image->getRealPath())->resize(300,300);
        //$thumb_img = ImageManagerStatic::make($image->getRealPath())->blur(15);
        $thumb_img->save($destinationPath.'/'.$imagename,80);
                    
        $destinationPath = public_path('/normal_images');
        $image->move($destinationPath, $imagename);
        return back()
            ->with('success','Image Upload successful')
            ->with('imagename',$imagename);
    }
}
