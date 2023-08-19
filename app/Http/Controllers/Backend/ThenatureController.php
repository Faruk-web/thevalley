<?php
namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Nature;
use Intervention\Image\Facades\Image;
class ThenatureController extends Controller
{
    // Banner view
    public function NatureView(){
        $natures =Nature::all();
        return view('backend.nature.view',compact('natures'));
    } // end mathod
    public function NatureStore(Request $request){
        $request->validate([
            'image' => 'required',
           ],[
            'image.required' => 'Input The Banner Img',
           ]);
           // Banner Img upload and save
           $image = $request->file('image');
           $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
           Image::make($image)->resize(900,900)->save('upload/nature/'.$name_gen );
           $save_url = 'upload/nature/'.$name_gen;
           if($request->file('b_image')){
            $image = $request->file('b_image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(1900,860)->save('upload/nature/'.$name_gen );
            $b_save_url = 'upload/nature/'.$name_gen;
           }
           Nature::insert([
                    'name' => $request->name,
                    'image' => $request->image,
                    'date' => $request->date,
                    'short_descrip' => $request->short_descrip,
                    'long_descrip' => $request->long_descrip,
                    'image' => $save_url,
                    'b_image' => $b_save_url,
                ]);
                $notification = array(
                    'message' =>'The nature create sucessfully',
                    'alert-type' =>'success'
                );
                return redirect()->back();
    } // end mathod
 // Banner Edit
        public function NatureEdit($id){
            $natures = Nature::findOrFail($id);
            return view('backend.nature.edit', compact('natures'));
        } // end mathod
 // Banner Update
        public function NatureUpdate( Request $request){
        $nature_id = $request->id;
        $old_img = $request->old_img;
        $old_b_img = $request->old_b_img;
        if ( $request->file('image')) {
            if (file_exists($old_img)){
                unlink($old_img);
            }
        $image = $request->file('image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(500,500)->save('upload/nature/'.$name_gen );
        $save_url = 'upload/nature/'.$name_gen;
        if ( $request->file('b_image')) {
            if (file_exists($old_b_img)){
                unlink($old_b_img);
            }
            $image = $request->file('b_image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(500,500)->save('upload/nature/'.$name_gen );
            $b_save_url = 'upload/nature/'.$name_gen;
        }
        if(isset($b_save_url)){
            Nature::findOrFail($nature_id)->update([
                'name' => $request->name,
                'date' => $request->date,
                'short_descrip' => $request->short_descrip,
                'long_descrip' => $request->long_descrip,
                'image' => $save_url,
                'b_image' => $b_save_url,
        ]);
        }else{
            Nature::findOrFail($nature_id)->update([
                'name' => $request->name,
                'date' => $request->date,
                'short_descrip' => $request->short_descrip,
                'long_descrip' => $request->long_descrip,
                'image' => $save_url,
        ]);
        }

        $notification = array(
            'message' =>'The nature update sucessfully',
            'alert-type' =>'success'
        );
            return redirect()->back()->with($notification);

            }else{
                Nature::findOrFail($nature_id)->update([
                'name' => $request->name,
                'short_descrip' => $request->short_descrip,

            ]);
                $notification = array(
                'message' =>'The nature update sucessfully',
                'alert-type' =>'info'
            );
            return redirect()->back()->with($notification);
            }
         }  // end mathod
  // Banner Delete
 public function NatureDelete($id){
    $nature = Nature::findOrFail($id);
    $img = $nature->image;
    $b_img = $nature->b_image;
    if(isset($img)){
        unlink($img);
    }
    if(isset($b_img)){
        unlink($b_img);
    }
    Nature::findOrFail($id)->delete();
    $notification = array(
'message' =>'Nature Delete sucessfully',
'alert-type' =>'info'
);
return redirect()->back()->with($notification);

} // end mathod

}
