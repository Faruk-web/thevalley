<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BannerCatagory;
use Intervention\Image\Facades\Image;
class BannerCatagoryController extends Controller
{
    // Banner view
    public function BennarView(){
        $bennars =BannerCatagory::all();
        return view('backend.bannerCatagory.banner_view',compact('bennars'));
    } // end mathod
    public function BennarStore(Request $request){
        $request->validate([
            'bennar_img' => 'required',
           ],[
            'bennar_img.required' => 'Input The Banner Img',
           ]);
           // Banner Img upload and save
           $image = $request->file('bennar_img');
           $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
           Image::make($image)->resize(900,900)->save('upload/banner_Category/'.$name_gen );
           $save_url = 'upload/banner_Category/'.$name_gen;
           BannerCatagory::insert([
                    'category_name' => $request->category_name,
                    'video_link' => $request->video_link,
                    'plot_short_descrip' => $request->plot_short_descrip,
                    'bennar_img' => $save_url,
                ]);
                $notification = array(
                    'message' =>'The Nature Create sucessfully',
                    'alert-type' =>'success'
                );
                return redirect()->back();
    } // end mathod
     // Banner Edit
        public function BennarEdit($id){
            $bennars = BannerCatagory::findOrFail($id);
            return view('backend.bannerCatagory.banner_edit', compact('bennars'));
        } // end mathod

    // Banner Update
        public function BennarUpdate( Request $request){
        $bennar_id = $request->id;
        $old_img = $request->old_img;
        if ( $request->file('bennar_img')) {
            unlink($old_img);
            $image = $request->file('bennar_img');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(900,900)->save('upload/banner_Category/'.$name_gen );
        $save_url = 'upload/banner_Category/'.$name_gen;
        BannerCatagory::findOrFail($bennar_id)->update([
            'category_name' => $request->category_name,
            'video_link' => $request->video_link,
            'plot_short_descrip' => $request->plot_short_descrip,
            'bennar_img' => $save_url,
    ]);
        $notification = array(
            'message' =>'The Nature update sucessfully',
            'alert-type' =>'success'
        );
            return redirect()->route('bannerCategory.manage')->with($notification);
            }else{
                BannerCatagory::findOrFail($slider_id)->update([
                'category_name' => $request->category_name,
                'video_link' => $request->video_link,
                'description' => $request->description,
            ]);
                $notification = array(
                'message' =>'The Nature update sucessfully',
                'alert-type' =>'info'
            );
            return redirect()->back()->with($notification);
            }
         }  // end mathod
     // Banner DeActive
     public function BennarDeactive($id){
        BannerCatagory::findOrFail($id)->update([ 'status' => 0, ]);
        // pass the sms
        $notification = array(
            'message' => 'The Nature Deactive Successfully',
            'alert-type' => 'info'
        );
        return redirect()->back()->with($notification);
    } // end mathod
       // Active
       public function BennarActive($id){
        BannerCatagory::findOrFail($id)->update([ 'status' => 1, ]);
        // pass the sms
        $notification = array(
            'message' => 'The Nature Deactive Successfully',
            'alert-type' => 'info'
        );
        return redirect()->back()->with($notification);
    }// end mathod
 // Banner Delete
 public function BennarDelete($id){
    $bennar = BannerCatagory::findOrFail($id);
    $img = $bennar->bennar_img;
    unlink($img);
    BannerCatagory::findOrFail($id)->delete();
    $notification = array(
'message' =>'The nature Delete sucessfully',
'alert-type' =>'info'
);
return redirect()->back()->with($notification);
} // end mathod
} // main end
