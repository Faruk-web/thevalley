<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gallery;
use Intervention\Image\Facades\Image;
class GalleryController extends Controller
{
     // Banner view
     public function GalleryView(){
        $gallery =Gallery::all();
        return view('backend.gallery.view',compact('gallery'));
    } // end mathod
    public function GalleryStore(Request $request){
        $request->validate([
            'image' => 'required',
           ],[
            'image.required' => 'Input The Banner Img',
           ]);
           // Banner Img upload and save
           $image = $request->file('image');
           $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
           Image::make($image)->resize(900,900)->save('upload/gallery/'.$name_gen );
           $save_url = 'upload/gallery/'.$name_gen;
        //    if($request->file('b_image')){
        //     $image = $request->file('b_image');
        //     $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        //     Image::make($image)->resize(1900,860)->save('upload/gallery/'.$name_gen );
        //     $b_save_url = 'upload/gallery/'.$name_gen;
        //    }
           Gallery::insert([
                    'name' => $request->name,
                    'image' => $request->image,
                    'date' => $request->date,
                    'long_descrip' => $request->long_descrip,
                    'image' => $save_url,
                    // 'b_image' => $b_save_url,
                ]);
                $notification = array(
                    'message' =>'The gallery create sucessfully',
                    'alert-type' =>'success'
                );
                return redirect()->back();
    } // end mathod
 // Banner Edit
        public function GalleryEdit($id){
            $gallery = Gallery::findOrFail($id);
            return view('backend.gallery.edit', compact('gallery'));
        } // end mathod
 // Banner Update
        public function GalleryUpdate( Request $request){
        $gallery_id = $request->id;
        $old_img = $request->old_img;
        $old_b_img = $request->old_b_img;
        if ( $request->file('image')) {
            if (file_exists($old_img)){
                unlink($old_img);
            }
        $image = $request->file('image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(500,500)->save('upload/gallery/'.$name_gen );
        $save_url = 'upload/gallery/'.$name_gen;
        // if ( $request->file('b_image')) {
        //     if (file_exists($old_b_img)){
        //         unlink($old_b_img);
        //     }
        //     $image = $request->file('b_image');
        //     $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        //     Image::make($image)->resize(500,500)->save('upload/gallery/'.$name_gen );
        //     $b_save_url = 'upload/gallery/'.$name_gen;
        // }
        if(isset($b_save_url)){
            Gallery::findOrFail($gallery_id)->update([
                'name' => $request->name,
                'date' => $request->date,
                'long_descrip' => $request->long_descrip,
                'image' => $save_url,
                'b_image' => $b_save_url,
        ]);
        }else{
            Gallery::findOrFail($gallery_id)->update([
                'name' => $request->name,
                'date' => $request->date,
                'long_descrip' => $request->long_descrip,
                'image' => $save_url,
        ]);
        }

        $notification = array(
            'message' =>'The Gallery update sucessfully',
            'alert-type' =>'success'
        );
            return redirect()->back()->with($notification);

            }else{
                Gallery::findOrFail($nature_id)->update([
                'name' => $request->name,
                'short_descrip' => $request->short_descrip,

            ]);
                $notification = array(
                'message' =>'The Gallery update sucessfully',
                'alert-type' =>'info'
            );
            return redirect()->back()->with($notification);
            }
         }  // end mathod
  // Banner Delete
 public function GalleryDelete($id){
    $nature = Gallery::findOrFail($id);
    $img = $nature->image;
    $b_img = $nature->b_image;
    if(isset($img)){
        unlink($img);
    }
    if(isset($b_img)){
        unlink($b_img);
    }
    Gallery::findOrFail($id)->delete();
    $notification = array(
'message' =>'Gallery Delete sucessfully',
'alert-type' =>'info'
);
return redirect()->back()->with($notification);

} // end mathod
}
