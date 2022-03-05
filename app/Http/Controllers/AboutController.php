<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\About;
use Image;
use Carbon\Carbon;

class AboutController extends Controller
{

       /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
   
    public function index(){
        $alls = About::all();
        return view('about.index',compact('alls'));
    }

    public function edit($id){
        $data = About::find($id);
        return view('about.edit',compact('data'));
    }

    public function update(Request $request, $id){

        $about = About::find($id);
        $about->title = $request->title;
        $about->description = $request->description;
        $about->created_at = Carbon::now();

        if($request->hasfile('ab_img')){

          $destination = 'uploads/about_photo'.$about->ab_img;
          if(File::exists($destination)){
            File::delete($destination);
          }

          $file = $request->file('ab_img');
          $extition = $file->getClientOriginalExtension();
          $filename = time().'.'.$extition;
          $file->move('uploads/about_photo',$filename);
          $about->ab_img = $filename;
        }
        $about->update();
        return back()->with('upd','Update Successfuly');
       }
}
