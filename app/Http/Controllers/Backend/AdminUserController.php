<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Admin;
use App\Models\Employee;
use Carbon\Carbon;
use Image;
use Auth;
use Illuminate\Support\Facades\Hash;

class AdminUserController extends Controller
{
    // Admin User Role
    public function AllAdminRole(){

    	// $adminuser = Admin::where('type',2)->latest()->get();
    	$adminuser = Admin::all();
    	return view('backend.role.admin_role_all',compact('adminuser'));

    } // end method
    public function EmpPermison(){

    	$employees = Employee::all();
    	return view('backend.role.emp_permision',compact('employees'));
    } // end method


     // Admin All User View
    public function AddAdminRole(){
        $employees = Employee::all();
    	return view('backend.role.admin_role_create',compact('employees'));
    }
 // Admin All User store
 public function StoreAdminRole(Request $request){
// dd($request);
    // $request->validate([
    //     'name' => 'required',
    //     'email' => 'required',
    //     'password' => 'required,
    //     'phone' => 'required',
    //     'image' => 'required',
    // ]);
    $value=$request->all();
       if(array_key_exists('type',$value)){
        $emp= Employee::find($request->type);
	     Admin::insert([
		'name' => $emp->employee_name,
		'email' => $emp->email_id,
		'password' => Hash::make($request->password),
		'phone' => $emp->employee_phone,
		'board' => $request->board,
		'category' => $request->category,
		'project' => $request->project,
		'slider' => $request->slider,
		'blog' => $request->blog,
		'shipping' => $request->shipping,
		'setting' => $request->setting,
		'news' => $request->news,
		'bannerCategory' => $request->bannerCategory,
		'leading' => $request->leading,
		'stock' => $request->stock,
		'reports' => $request->reports,
		'alluser' => $request->alluser,
		'adminuserrole' => $request->adminuserrole,
		'type' =>$emp->department_id,
		'profile_photo_path' =>$emp->employee_img,
		'created_at' => Carbon::now(),
    	]);

       }
       else{
    	$image = $request->file('profile_photo_path');
    	$name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
    	Image::make($image)->resize(225,225)->save('upload/admin_images/'.$name_gen);
    	$save_url = 'upload/admin_images/'.$name_gen;
	     Admin::insert([
		'name' => $request->name,
		'email' => $request->email,
		'password' => Hash::make($request->password),
		'phone' => $request->phone,
		'board' => $request->board,
		'category' => $request->category,
		'project' => $request->project,
		'slider' => $request->slider,
		'blog' => $request->blog,
		'shipping' => $request->shipping,
		'setting' => $request->setting,
		'news' => $request->news,
		'bannerCategory' => $request->bannerCategory,
		'leading' => $request->leading,
		'stock' => $request->stock,
		'reports' => $request->reports,
		'alluser' => $request->alluser,
		'adminuserrole' => $request->adminuserrole,
		'type' =>$request->type,
		'profile_photo_path' => $save_url,
		'created_at' => Carbon::now(),
    	]);
    }
	    $notification = array(
			'message' => 'Admin User Created Successfully',
			'alert-type' => 'success'
		);

		return redirect()->route('all.admin.user')->with($notification);

    } // end method
	public function EditAdminRole($id){
    	$adminuser = Admin::findOrFail($id);
    	return view('backend.role.admin_role_edit',compact('adminuser'));

    } // end method
 public function UpdateAdminRole(Request $request){
    // $request->validate([
    //     'name' => 'required',
    //     'email' => 'required',
    //     'password' => 'required|min:6|max:12',
    //     'phone' => 'required',
    //     'image' => 'required',
    // ]);
    	$admin_id = $request->id;
    	$old_img = $request->old_image;
    	if ($request->file('profile_photo_path')) {
            if (file_exists($old_img)){
                unlink($old_img);
            }
    	// unlink($old_img);
    	$image = $request->file('profile_photo_path');
    	$name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
    	Image::make($image)->resize(225,225)->save('upload/admin_images/'.$name_gen);
    	$save_url = 'upload/admin_images/'.$name_gen;
	Admin::findOrFail($admin_id)->update([
		'name' => $request->name,
		'email' => $request->email,
		'phone' => $request->phone,
		'board' => $request->board,
		'category' => $request->category,
		'project' => $request->project,
		'slider' => $request->slider,
		'blog' => $request->blog,
		'shipping' => $request->shipping,
		'setting' => $request->setting,
		'news' => $request->news,
		'bannerCategory' => $request->bannerCategory,
		'leading' => $request->leading,
		'stock' => $request->stock,
		'reports' => $request->reports,
		'alluser' => $request->alluser,
		'adminuserrole' => $request->adminuserrole,
		'profile_photo_path' => $save_url,
		'created_at' => Carbon::now(),
    	]);
	    $notification = array(
			'message' => 'Admin User Updated Successfully',
			'alert-type' => 'info'
		);
		return redirect()->route('all.admin.user')->with($notification);
    	}else{
    	Admin::findOrFail($admin_id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'board' => $request->board,
            'category' => $request->category,
            'project' => $request->project,
            'slider' => $request->slider,
            'blog' => $request->blog,
            'shipping' => $request->shipping,
            'setting' => $request->setting,
            'news' => $request->news,
            'bannerCategory' => $request->bannerCategory,
            'leading' => $request->leading,
            'stock' => $request->stock,
            'reports' => $request->reports,
            'alluser' => $request->alluser,
            'adminuserrole' => $request->adminuserrole,
		'type' => 2,

		'created_at' => Carbon::now(),

    	]);
	    $notification = array(
			'message' => 'Admin User Updated Successfully',
			'alert-type' => 'info'
		);
		return redirect()->route('all.admin.user')->with($notification);
    	} // end else
    } // end method
	//
	public function DeleteAdminRole($id){
		$adminimg = Admin::findOrFail($id);
		$img = $adminimg->profile_photo_path;
		unlink($img);
		Admin::findOrFail($id)->delete();
		 $notification = array(
		   'message' => 'Admin User Deleted Successfully',
		   'alert-type' => 'info'
	   );
	   return redirect()->back()->with($notification);
	} // end method
}  // main end
