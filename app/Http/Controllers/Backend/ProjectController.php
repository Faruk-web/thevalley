<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Category;
use App\Models\Location;
use App\Models\Status;
use Carbon\Carbon;
use App\Models\DealsTime;
use App\Models\MultiImg;
use App\Models\MultiImgfloor;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
class ProjectController extends Controller
{
    // project Add
    public function ProjectAdd(){
        $category = Category::latest()->get();
        $location = Location::latest()->get();
        $status = Status::latest()->get();
        return view('backend.project.view', compact('category','location','status'));
        } // end mathod
// product store
public function ProjectStore(Request $request){
    // validation product
    $request->validate([
        // 'project_name' => 'required|max:255|regex:/^[A-Za-z_][A-Za-z\d_]*$/',
        'project_name' => 'required',
    ],[
        'project_name.regex'=>"NOT a valid Product name"
    ]);
    // img upload and save and img intervations packge use
    $image = $request->file('project_thambnail');
    $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
    Image::make($image)->resize(917,1000)->save('upload/projects/thambnail/'.$name_gen);
    $save_url = 'upload/projects/thambnail/'.$name_gen;
     // img upload and save and img intervations packge use
     $image = $request->file('floor_image');
     $name_gen_floor = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
     Image::make($image)->resize(917,1000)->save('upload/projects/thambnail/'.$name_gen_floor);
     $save_url_floor = 'upload/projects/thambnail/'.$name_gen_floor;
     // img upload and save and img intervations packge use
     $image = $request->file('project_map');
     $name_gen_map = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
     Image::make($image)->resize(917,1000)->save('upload/projects/thambnail/'.$name_gen_map);
     $save_url_map = 'upload/projects/thambnail/'.$name_gen_map;
     // img upload and save and img intervations packge use
     $image = $request->file('project_icon_img');
     $name_gen_icon_image = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
     Image::make($image)->resize(917,1000)->save('upload/projects/thambnail/'.$name_gen_icon_image);
     $save_url_iconimage = 'upload/projects/thambnail/'.$name_gen_icon_image;
        $project_id =   Project::insertGetId([
            'status_id' => $request->status_id,
            'category_id' => $request->category_id,
            'location_id' => $request->location_id,
            'project_name' => $request->project_name,
            'project_short_descp' => $request->project_short_descp,
            'project_long_descp' => $request->project_long_descp,
            'project_thambnail' => $request->project_thambnail,
            'floor_image' => $request->floor_image,
            'project_map' => $request->project_map,
            'project_icon_img' => $request->project_icon_img,
            'project_type' => $request->project_type,
            'suqare_feet' => $request->suqare_feet,
            'hight' => $request->hight,
            'width' => $request->width,
            'basement' => $request->basement,
            'parking' => $request->parking,
            'facing' => $request->facing,
            'beedroom' => $request->beedroom,
            'available_units' => $request->available_units,
            'video_link' => $request->video_link,
            'location_address' => $request->location_address,
            'feature_project' => $request->feature_project,
            'delivered_project' => $request->delivered_project,
            'project_thambnail' => $save_url,
            'floor_image' => $save_url_floor,
            'project_map' => $save_url_map,
            'project_icon_img' => $save_url_iconimage,
            'created_at' => Carbon::now(),
        ]);
        // Multiple img upload start
        $images = $request->file('multi_img');
        foreach ($images as $img){
            $make_name = hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
            Image::make($img)->resize(917,1000)->save('upload/projects/multi_image/'.$make_name);
            $uploadPath = 'upload/projects/multi_image/'.$make_name;
            MultiImg::insert([
                'project_id' => $project_id,
                'photo_name' => $uploadPath,
                'created_at' => Carbon::now(),
            ]);
        } // end loop
         // Multiple img upload floor
         $images_floor = $request->file('multi_img_floor');
         foreach ($images_floor as $img){
             $make_name_floor = hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
             Image::make($img)->resize(917,1000)->save('upload/projects/multi_image/'.$make_name_floor);
             $uploadPath_floor = 'upload/projects/multi_image/'.$make_name_floor;
             MultiImgfloor::insert([
                 'project_id' => $project_id,
                 'photo_name_floor' => $uploadPath_floor,
                 'created_at' => Carbon::now(),
             ]);
         } // end loop
    // Multiple img end
    $notification = array(
        'message' => 'Project Add Successfully',
        'alert-type' => 'success'
    );
    if($request->commercial||$request->residential)
    {
        $deals = new DealsTime();
        $deals->project_id = $project_id;
        $deals->save();
    }
    return redirect()->route('manage-project')->with($notification);
    } // end mathod
    public function ManageProject(){
        $project = Project::latest()->get();
        return view('backend/project/project_view', compact('project'));
    } // end mathod
   //edit
   public function EditProject($id){
    $multiimgs = MultiImg::where('project_id', $id)->get();
    $multiimgsfloor = MultiImgfloor::where('project_id', $id)->get();
    $projectall = Project::latest()->get();
    $location = Location::latest()->get();
    $status = Status::latest()->get();
    $projects = Project::findOrFail($id);
    return view('backend.project.project_edit',compact('projectall','projects','location','status','multiimgs','multiimgsfloor'));
   }
   // update Product
   public function UpdateProject(Request $request){
    $product_id = $request->id;
       Project::findOrFail($product_id)->update([
        'status_id' => $request->status_id,
        'category_id' => $request->category_id,
        'position_id' => $request->position_id,
        'location_id' => $request->location_id,
        'project_name' => $request->project_name,
        'project_short_descp' => $request->project_short_descp,
        'project_long_descp' => $request->project_long_descp,
        // 'project_thambnail' => $request->project_thambnail,
        'project_type' => $request->project_type,
        'suqare_feet' => $request->suqare_feet,
        'hight' => $request->hight,
        'width' => $request->width,
        'basement' => $request->basement,
        'parking' => $request->parking,
        'facing' => $request->facing,
        'beedroom' => $request->beedroom,
        'available_units' => $request->available_units,
        'video_link' => $request->video_link,
        'location_address' => $request->location_address,
        'feature_project' => $request->feature_project,
        'delivered_project' => $request->delivered_project,
        // 'project_thambnail' => $save_url,
        'created_at' => Carbon::now(),
    ]);
    $notification = array(
        'message' => 'Project Update Successfully',
        'alert-type' => 'success'
    );
    return redirect()->route('manage-project')->with($notification);
}// end mathod
/// Product Main Thambnail Update ///
    public function ThambnailImageUpdate(Request $request){
        $pro_id = $request->id;
        $oldImage = $request->old_img;
        if (file_exists($oldImage)){
            unlink($oldImage);
        }
    $image = $request->file('project_thambnail');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(917,1000)->save('upload/projects/thambnail/'.$name_gen);
        $save_url = 'upload/projects/thambnail/'.$name_gen;
        Project::findOrFail($pro_id)->update([
            'project_thambnail' => $save_url,
            'updated_at' => Carbon::now(),
        ]);
            $notification = array(
            'message' => 'Project Image Thambnail Updated Successfully',
            'alert-type' => 'info'
        );
        return redirect()->back()->with($notification);
        } // end method
        /// Product Main Floor Update ///
    public function ThambnailImageUpdateFloor(Request $request){
        $pro_id = $request->id;
        $oldImagefloor = $request->old_imgfloor;
        if (file_exists($oldImagefloor)){
            unlink($oldImagefloor);
        }
    $image = $request->file('floor_image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(917,1000)->save('upload/projects/thambnail/'.$name_gen);
        $save_url = 'upload/projects/thambnail/'.$name_gen;
        Project::findOrFail($pro_id)->update([
            'floor_image' => $save_url,
            'updated_at' => Carbon::now(),
        ]);
            $notification = array(
            'message' => 'Project Floor Image Thambnail Updated Successfully',
            'alert-type' => 'info'
        );
        return redirect()->back()->with($notification);
        } // end method
         /// Product Main Floor Update ///
    public function ThambnailImageUpdateMap(Request $request){
        $pro_id = $request->id;
        $oldImagemap = $request->old_imgmap;
        if (file_exists($oldImagemap)){
            unlink($oldImagemap);
        }
    $image = $request->file('project_map');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(917,1000)->save('upload/projects/thambnail/'.$name_gen);
        $save_url = 'upload/projects/thambnail/'.$name_gen;
        Project::findOrFail($pro_id)->update([
            'project_map' => $save_url,
            'updated_at' => Carbon::now(),
        ]);
            $notification = array(
            'message' => 'Project Map Image Thambnail Updated Successfully',
            'alert-type' => 'info'
        );
        return redirect()->back()->with($notification);
        } // end method
         /// Product Main Floor Update ///
    public function ThambnailImageUpdateIconImage(Request $request){
        $pro_id = $request->id;
        $oldImageicon = $request->old_imgicon;
        if (file_exists($oldImageicon)){
            unlink($oldImageicon);
        }
    $image = $request->file('project_icon_img');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(917,1000)->save('upload/projects/thambnail/'.$name_gen);
        $save_url = 'upload/projects/thambnail/'.$name_gen;
        Project::findOrFail($pro_id)->update([
            'project_icon_img' => $save_url,
            'updated_at' => Carbon::now(),
        ]);
            $notification = array(
            'message' => 'Project Icon Image Thambnail Updated Successfully',
            'alert-type' => 'info'
        );
        return redirect()->back()->with($notification);
        } // end method
        /// Multiple Image Update
        public function UpdateProductMultiImg(Request $request){
            $imgs = $request->multi_img;
            foreach ($imgs as $id => $img) {
            $imgDel = MultiImg::findOrFail($id);
            $image_delet = $imgDel->photo_name;
            // dd($imgDel);
            // unlink($imgDel->photo_name);
            if (file_exists($image_delet)){
                unlink($image_delet);
            }
            $make_name = hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
            Image::make($img)->resize(917,1000)->save('upload/projects/multi_image/'.$make_name);
            $uploadPath = 'upload/projects/multi_image/'.$make_name;
            MultiImg::where('id',$id)->update([
                'photo_name' => $uploadPath,
                'updated_at' => Carbon::now(),
            ]);
        } // end foreach
        $notification = array(
                'message' => 'Project Image Updated Successfully',
                'alert-type' => 'info'
            );
            return redirect()->back()->with($notification);
    } // end mathod
    /// Multiple Image Update
    public function UpdateProductMultiImgFloor(Request $request){
        $imgsfloor = $request->multi_imgfloor;
        foreach ($imgsfloor as $id => $img) {
        $imgDel = MultiImgfloor::findOrFail($id);
        $image_deletfloor = $imgDel->photo_name_floor;
        // dd($imgDel);
        // unlink($imgDel->photo_name);
        if (file_exists($image_deletfloor)){
            unlink($image_deletfloor);
        }
        $make_name = hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
        Image::make($img)->resize(917,1000)->save('upload/projects/multi_image/'.$make_name);
        $uploadPath = 'upload/projects/multi_image/'.$make_name;
        MultiImgfloor::where('id',$id)->update([
            'photo_name_floor' => $uploadPath,
            'updated_at' => Carbon::now(),
        ]);
    } // end foreach
    $notification = array(
            'message' => 'Project Floor multi Image Updated Successfully',
            'alert-type' => 'info'
        );
        return redirect()->back()->with($notification);
} // end mathod
}
