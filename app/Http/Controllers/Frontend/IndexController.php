<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Mail\ContactUsMail;
use App\Mail\OrderMail;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;
use App\Models\Blog;
use App\Models\Slider;
use App\Models\Product;
use App\Models\Project;
use App\Models\MultiImg;
use App\Models\Valley;
use App\Models\BoardDirector;
use App\Models\Banner;
use App\Models\ContactUs;
use App\Models\PlotType;
use App\Models\News;
use App\Models\Subscriber;
use App\Models\Gallery;
use Illuminate\Support\Carbon;
use App\Models\Nature;
use App\Models\Brand;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
class IndexController extends Controller
{
  // Frontend Index show
   public function index(){

  //valley
   $products = Project::orderBy('id', 'DESC')->limit(4)->get();
  // for  featureds
    $featureds = Project::where('feature_project', 1)->orderBy('id', 'DESC')->limit(8)->get();
    // end product
    $sliders = Slider::where('status', 1)->orderBy('id', 'DESC')->limit(10)->get();
    // end slider
    $categories = Category::all();
    // home page banner-category
    $todayDate = Carbon::now();
       return view('frontend.index',
        compact('categories','sliders', 'products','featureds'));
   }
  // user logout
   public function UserLogout(){
    Auth::logout();
    return redirect()->route('login');
}
  // user Profile Update
  public function UserProfile(){
    // what is id = specify  user and use find id
      $id = Auth::user()->id;
      $user = User::find($id);

      return view('frontend.profile.user_profile', compact('user'));
  }
      // User Profile Store
      public function UserProfileStore(Request $request){
        // Auth login user id is find
        $validateData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required|numeric',
            'profile_photo_path' => 'required',
          ]);
        $data = User::find(Auth::user()->id);
                $data->name = $request->name;
                $data->email = $request->email;
                $data->phone = $request->phone;
                if ($request->file('profile_photo_path')) {
                    $file = $request->file('profile_photo_path');
                    @unlink (public_path('upload/users_images/'.$data->profile_photo_path));

                    $filename = date('YmdHi').$file->getClientOriginalName();
                    $file->move(public_path('upload/users_images'),$filename);
                    $data['profile_photo_path'] = $filename;
                }
                $data->save();

                $notification = array(
                    'message' =>  'Your Profie Update Sucessyfuly',
                    'alert-type' => 'success'
                );
                return redirect()->route('dashboard')->with($notification);
      }
          // user password change
          public function UserChnagePassword(){
            $id = Auth::user()->id;
            $user = User::find($id);
              return view('frontend.profile.change_password', compact('user'));
          }
          // User Update Password
          public function UserPasswordUpdate(Request $request){

            $validateData = $request->validate([
              'oldpassword' => 'required|min:6|max:12',
              'password' => 'required|min:6|max:12confirmed',
            ]);
          $hashedPassword = Auth::user()->password;
          if (Hash::check($request->oldpassword,$hashedPassword)) {
          $user = User::find(Auth::id());
          $user->password = Hash::make($request->password);
          $user->save();

          $notification = array(
            'message' =>  'Your Passowrd Update Sucessyfuly',
            'alert-type' => 'success',
        );
          //Auth::logout();
          return redirect()->route('user.password.update')->with($notification);

          }else{

          $notification = array(
            'message' =>  'New Password did not matched',
            'alert-type' => 'warning',
        );
              return redirect()->route('user.password.update')->with($notification);
           }

          }  // end mahod

    // Product Seach
   public function contactUs(Request $request)
   {
    $validated = $request->validate([
                'name' => 'required|max:30',
                'email' => 'required',
                'subject' => 'required|max:60',
                'message' => 'required|max:255',
                ]);
                if($validated)
                {
                  // Mail::to('pabonsub@gmail.com')->send(new ContactUsMail($request));
                  // return 'Email Sent';
                   $contact  = new ContactUs();
                   $contact->name = $request->name;
                   $contact->phone = $request->phone;
                   $contact->email = $request->email;
                   $contact->subject = $request->subject;
                   $contact->submit = $request->submit;
                   $contact->message = $request->message;
                   $contact->save();
                   $notification = array(
                    'message' =>  'We will response you very soon, Thank you',
                    'alert-type' => 'success'
                );
                   return redirect()->back()->with($notification);

                }
   }
    //about
    public function aboutus(){
        $boardof_directors = BoardDirector::get();
        return view('frontend.valley.about',compact('boardof_directors'));
    }
    //Valley
    public function theValley(){
        $sliders = Slider::where('status', 0)->orderBy('id', 'DESC')->limit(10)->get();
        $valley = Valley::find(2);
        return view('frontend.valley.the_valley',compact('sliders','valley'));
    }
    //PlotType
    public function plotType(){
        $plottype = PlotType::find(1);
        return view('frontend.valley.plot_type',compact('plottype'));
    }
    //nature
    public function nature(){
        $sliders = Slider::where('status', 1)->orderBy('id', 'DESC')->limit(10)->get();
        $projects = Project::limit(30)->orderBy('id', 'desc')->paginate(9);
        return view('frontend.valley.nature',compact('sliders'));
    }
    //gallery
    public function gallery(){
        return view('frontend.valley.gallery');
    }
    //completedProject
    public function plotDetail($id){
        $brand = Brand::find($id);
        $plottype = PlotType::where('plot_id',$brand->id)->first();
        return view('frontend.valley.plot_detail',compact('plottype','brand'));
    }

     //ProjectDetails
     public function ProjectDetails($id){
        $projects = Project::find($id);
        $related_projects = Project::orderBy('id', 'desc')->limit(4)->get();
        return view('frontend.valley.project_details',compact('projects','related_projects'));
    }
     //ProjectDetails by slide
     public function ProjectDetailsSlide($id){
        $slider = Slider::find($id);
        $projects = Project::find($slider->project_id);
        $related_projects = Project::orderBy('id', 'desc')->limit(4)->get();
        return view('frontend.valley.project_details',compact('projects','related_projects'));
    }
    //news
    public function news(){
        $news = News::orderBy('id', 'ASC')->limit(5)->get();
        return view('frontend.valley.news',compact('news'));
    }
       // newsDetails
       public function newsDetails($id){
        $news_details = News::find($id);
        return view('frontend.valley.news_details',compact('news_details'));
    }
    //blog
    public function blog(){
        $blogs = Blog::orderBy('id', 'ASC')->limit(4)->get();
        return view('frontend.valley.blog',compact('blogs'));
    }
    //blogDetails
    public function blogDetails(){
         return view('frontend.valley.blog_details');
    }
     //contactvalley
     public function contactamfl(){
        return view('frontend.valley.contact');
    }
    //about
    public function BoardOfDirector($id){
        $boardof_directors = BoardDirector::find($id);
        return view('frontend.valley.boardof_director',compact('boardof_directors'));
    }
    public function natureDetail($id){
        $nature = Nature::find($id);
        return view('frontend.valley.nature_detail',compact('nature'));
    }
    public function GalleryDetail($id){
        $galley = Gallery::find($id);
        return view('frontend.valley.gallery_detail',compact('galley'));
    }

} // main end






