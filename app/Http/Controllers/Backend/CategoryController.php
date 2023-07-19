<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;


class CategoryController extends Controller
{
    //  categoary view
    public function CategoryView(){
        $category = Category::latest()->get();
        return view('backend.category.category_view', compact('category') );
    }  // end mathod
       // store category
  public function CategoryStore(Request $request){
    // validation
        $request->validate([
            'category_name' => 'required',
          ]);
        // Category Insert
         // Banner Img upload and save
         $image = $request->file('image');
         $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
         Image::make($image)->resize(1100,500)->save('upload/banner_Category/'.$name_gen );
         $save_url = 'upload/banner_Category/'.$name_gen;

          Category::insert([
           'category_name' => $request->category_name,
           'plot_type' => $request->plot_type,
           'plot_short_descrip' => $request->plot_short_descrip,
           'image' => $save_url,
          ]);

          $notification = array(
            'message' =>  'Category Add Sucessyfuly',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
  } // end method
    // edit category
    public function CategoryEdit($id){
      $category = Category::findOrfail($id);
      return view('backend.category.category_edit', compact('category'));
    } // end mathod
    // Category Update
  public function CategoryUpdate(Request $request){
    $cat_id = $request->id;
      // Category Update
      Category::findorfail($cat_id)->update([
        'category_name' => $request->category_name,
        'plot_type' => $request->plot_type,
        'plot_short_descrip' => $request->plot_short_descrip,
       ]);

       $notification = array(
         'message' =>  'Category Update Sucessyfully',
         'alert-type' => 'success'
     );

     return redirect()->route('all.category')->with($notification);
  } // end mathod

    public function CategoryDelete($id){
      Category::findOrFail($id)->delete();
      $notification = array(
        'message' =>  'Category Delete Sucessyfully',
        'alert-type' => 'success'
    );
    return redirect()->back()->with($notification);
    } // end mathod

}
