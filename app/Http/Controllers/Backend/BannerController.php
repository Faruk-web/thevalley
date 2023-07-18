<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Valley;
use Image;

class BannerController extends Controller
{
    // Banner view
    public function BennarView(){

        return view('backend.valley.banner_view');

    } // end mathod
        // banner Bennarshow
        public function Bennarshow(){
            $valleys =Valley::all();
            return view('backend.valley.banner_show',compact('valleys'));
        }
   // Banner Store
    public function ValleyStore(Request $request){

   // frist Img upload and save
   $image = $request->file('frist_image');
   $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
   Image::make($image)->resize(1000,1000)->save('upload/valley/'.$name_gen );
   $save_url_frist = 'upload/valley/'.$name_gen;
   // second Img upload and save
   $image = $request->file('sec_image');
   $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
   Image::make($image)->resize(1000,1000)->save('upload/valley/'.$name_gen );
   $save_url_sec = 'upload/valley/'.$name_gen;
   // third Img upload and save
   $image = $request->file('thi_image');
   $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
   Image::make($image)->resize(1000,1000)->save('upload/valley/'.$name_gen );
   $save_url_thi = 'upload/valley/'.$name_gen;

   Valley::insert([
            'frist_name' => $request->frist_name,
            'frist_short_descrip' => $request->frist_short_descrip,
            'frist_descrip' => $request->frist_descrip,
            'frist_image' => $request->frist_image,
            'sec_name' => $request->sec_name,
            'sec_short_descrip' => $request->sec_short_descrip,
            'sec_descrip' => $request->sec_descrip,
            'sec_image' => $request->sec_image,
            'thi_name' => $request->thi_name,
            'vedio_link' => $request->vedio_link,
            'thi_short_descrip' => $request->thi_short_descrip,
            'thi_descrip' => $request->thi_descrip,
            'thi_image' => $request->thi_image,
            'frist_image' => $save_url_frist,
            'sec_image' => $save_url_sec,
            'thi_image' => $save_url_thi,
        ]);
        $notification = array(
            'message' =>'Valley Create sucessfully',
            'alert-type' =>'success'
        );
        return redirect()->back();

          } // end mathod
    // Banner Edit
        public function ValleyEdit($id){
            $valleys = Valley::findOrFail($id);
            return view('backend.valley.banner_edit', compact('valleys'));
        } // end mathod

        // Banner Update
        public function ValleyUpdate( Request $request){
        $valley_id = $request->id;
        $old_img_frist = $request->old_img_frist;
        $old_img_sec = $request->old_img_sec;
        $old_img_thi = $request->old_img_thi;

        $old_img_frist_ba = $request->old_img_frist_ba;
        $old_img_sec_ba = $request->old_img_sec_ba;
        $old_img_thi_ba = $request->old_img_thi_ba;

        if ( $request->file('frist_image')) {
            if (file_exists($old_img_frist)){
                unlink($old_img_frist);
            }
            $image = $request->file('frist_image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(1000,1000)->save('upload/valley/'.$name_gen );
        $save_url_frist = 'upload/valley/'.$name_gen;

            if (file_exists($old_img_sec)){
                unlink($old_img_sec);
            }
            $image = $request->file('sec_image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(1000,1000)->save('upload/valley/'.$name_gen );
        $save_url_sec = 'upload/valley/'.$name_gen;
        if (file_exists($old_img_thi)){
            unlink($old_img_thi);
        }
            $image = $request->file('thi_image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(1000,1000)->save('upload/valley/'.$name_gen );
        $save_url_thi = 'upload/valley/'.$name_gen;
// ==============================
                if (file_exists($old_img_frist_ba)){
                    unlink($old_img_frist_ba);
                }
                $image = $request->file('ba_frist_image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(2000,400)->save('upload/valley/'.$name_gen );
            $save_url_frist_ba = 'upload/valley/'.$name_gen;

            if (file_exists($old_img_sec_ba)){
                unlink($old_img_sec_ba);
            }
            $image = $request->file('ba_sec_image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(2000,400)->save('upload/valley/'.$name_gen );
        $save_url_sec_ba = 'upload/valley/'.$name_gen;
        if (file_exists($old_img_thi_ba)){
            unlink($old_img_thi_ba);
        }
            $image = $request->file('ba_thi_image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(2000,400)->save('upload/valley/'.$name_gen );
        $save_url_thi_ba = 'upload/valley/'.$name_gen;

        Valley::findOrFail($valley_id)->update([
            'frist_name' => $request->frist_name,
            'frist_short_descrip' => $request->frist_short_descrip,
            'frist_descrip' => $request->frist_descrip,
            'frist_image' => $request->frist_image,
            'sec_name' => $request->sec_name,
            'sec_short_descrip' => $request->sec_short_descrip,
            'sec_descrip' => $request->sec_descrip,
            'sec_image' => $request->sec_image,
            'thi_name' => $request->thi_name,
            'vedio_link' => $request->vedio_link,
            'thi_short_descrip' => $request->thi_short_descrip,
            'thi_descrip' => $request->thi_descrip,
            'thi_image' => $request->thi_image,
            'frist_image' => $save_url_frist,
            'sec_image' => $save_url_sec,
            'thi_image' => $save_url_thi,

            'ba_frist_image' => $save_url_frist_ba,
            'ba_sec_image' => $save_url_sec_ba,
            'ba_thi_image' => $save_url_thi_ba,
        ]);


        $notification = array(
            'message' =>'Valley update sucessfully',
            'alert-type' =>'success'
        );

        return redirect()->back()->with($notification);

            }else{
                Valley::findOrFail($valley_id)->update([
                    'frist_name' => $request->frist_name,
                    'frist_short_descrip' => $request->frist_short_descrip,
                    'frist_descrip' => $request->frist_descrip,
                    'frist_image' => $request->frist_image,
                    'sec_name' => $request->sec_name,
                    'sec_short_descrip' => $request->sec_short_descrip,
                    'sec_descrip' => $request->sec_descrip,
                    'sec_image' => $request->sec_image,
                    'thi_name' => $request->thi_name,
                    'vedio_link' => $request->vedio_link,
                    'thi_short_descrip' => $request->thi_short_descrip,
                    'thi_descrip' => $request->thi_descrip,
                    'thi_image' => $request->thi_image,
                    'frist_image' => $save_url_frist,
                    'sec_image' => $save_url_sec,
                    'thi_image' => $save_url_thi,

                    'ba_frist_image' => $save_url_frist_ba,
                    'ba_sec_image' => $save_url_sec_ba,
                    'ba_thi_image' => $save_url_thi_ba,
                ]);
                $notification = array(
                'message' =>'Valley update sucessfully',
                'alert-type' =>'info'
            );
            return redirect()->back()->with($notification);

            }
         }  // end mathod


        // Banner Delete
            public function BennarDelete($id){
                $bennar = Banner::findOrFail($id);
                $img = $bennar->bennar_img;
                unlink($img);
                Banner::findOrFail($id)->delete();

                $notification = array(
            'message' =>'Banner Delete sucessfully',
            'alert-type' =>'info'
        );
            return redirect()->back()->with($notification);

            } // end mathod









     // Banner DeActive
     public function BennarDeactive($id){
        Banner::findOrFail($id)->update([ 'status' => 0, ]);

        // pass the sms
        $notification = array(
            'message' => 'Banner Deactive Successfully',
            'alert-type' => 'info'
        );

        return redirect()->back()->with($notification);
    } // end mathod

       // Active
       public function BennarActive($id){
        Banner::findOrFail($id)->update([ 'status' => 1, ]);

        // pass the sms
        $notification = array(
            'message' => 'Banner Active Successfully',
            'alert-type' => 'info'
        );

        return redirect()->back()->with($notification);
    }// end mathod


} // main end

