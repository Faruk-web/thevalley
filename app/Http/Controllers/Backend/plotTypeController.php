<?php
namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PlotType;
use Image;
class plotTypeController extends Controller
{
        // banner Bennarshow
        public function plotshow(){
            $valleys =PlotType::all();
            return view('backend.plot.plot_show',compact('valleys'));
        }
    // Banner Edit
        public function PlotEdit($id){
            $valleys = PlotType::findOrFail($id);
            return view('backend.plot.plot_edit', compact('valleys'));
        } // end mathod

        // Banner Update
        public function PlotUpdate( Request $request){
        $valley_id = $request->id;
        $old_img_frist = $request->old_img_frist;
        $old_img_sec = $request->old_img_sec;
        $old_img_thi = $request->old_img_thi;
        $old_img_four = $request->old_img_four;


        if ( $request->file('frist_image')) {
            if (file_exists($old_img_frist)){
                unlink($old_img_frist);
            }
            $image = $request->file('frist_image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(1000,1000)->save('upload/plot/'.$name_gen );
        $save_url_frist = 'upload/plot/'.$name_gen;

            if (file_exists($old_img_sec)){
                unlink($old_img_sec);
            }
            $image = $request->file('sec_image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(1000,1000)->save('upload/plot/'.$name_gen );
        $save_url_sec = 'upload/plot/'.$name_gen;
        if (file_exists($old_img_thi)){
            unlink($old_img_thi);
        }
            $image = $request->file('thi_image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(1000,1000)->save('upload/plot/'.$name_gen );
        $save_url_thi = 'upload/plot/'.$name_gen;

        if (file_exists($old_img_four)){
            unlink($old_img_four);
        }
            $image = $request->file('four_image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(1000,1000)->save('upload/plot/'.$name_gen );
        $save_url_four = 'upload/plot/'.$name_gen;
// ==============================
        PlotType::findOrFail($valley_id)->update([
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
            'sec_name' => $request->sec_name,
            'four_short_descrip' => $request->four_short_descrip,
            'four_descrip' => $request->four_descrip,
            'four_image' => $request->four_image,
            'frist_image' => $save_url_frist,
            'sec_image' => $save_url_sec,
            'thi_image' => $save_url_thi,
            'four_image' => $save_url_four,
        ]);


        $notification = array(
            'message' =>'Plot update sucessfully',
            'alert-type' =>'success'
        );

        return redirect()->back()->with($notification);

            }else{
                PlotType::findOrFail($valley_id)->update([
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
                    'sec_name' => $request->sec_name,
                    'four_short_descrip' => $request->four_short_descrip,
                    'four_descrip' => $request->four_descrip,
                    'four_image' => $request->four_image,
                    'frist_image' => $save_url_frist,
                    'sec_image' => $save_url_sec,
                    'thi_image' => $save_url_thi,
                    'four_image' => $save_url_four,
                ]);
                $notification = array(
                'message' =>'Plot update sucessfully',
                'alert-type' =>'info'
            );
            return redirect()->back()->with($notification);

            }
         }  // end mathod
} // main end

