<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Admin;
use Image;
use Carbon\Carbon;

class AdminController extends Controller
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
        $all_info = Admin::all();
        return view('banner.index',compact('all_info'));
      }

      public function edit($id){
        $operation = Admin::find($id);
        return view('banner.edit',compact('operation'));
      }

      public function update(Request $request, $id){

        $banner = Admin::find($id);
        $banner->title = $request->title;
        $banner->sub_title = $request->sub_title;
        $banner->created_at = Carbon::now();

        if($request->hasfile('bc_img')){

          $destination = 'uploads/banner_photo'.$banner->bc_img;
          if(File::exists($destination)){
            File::delete($destination);
          }

          $file = $request->file('bc_img');
          $extition = $file->getClientOriginalExtension();
          $filename = time().'.'.$extition;
          $file->move('uploads/banner_photo',$filename);
          $banner->bc_img = $filename;
        }
        $banner->update();
        return redirect()->back()->with('success','Update Successfuly');
       }


}
