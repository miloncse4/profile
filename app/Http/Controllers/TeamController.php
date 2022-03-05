<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Team;

class TeamController extends Controller
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
    
    public function create(){
        return view('team.create');
    }

    public function store(Request $request){
        $request->validate([
            't_img'=>'required',
            'title'=>'required|string',
            'description'=>'required',
        ]);

        $team = new Team;

        $team->title = $request->title;
        $team->description = $request->description;

        if($request->hasfile('t_img')){
            $file = $request->file('t_img');
            $ext = $file->getClientOriginalExtension();
            $img_nam = time().'.'.$ext;
            $file->move('uploads/team',$img_nam);
            $team->t_img = $img_nam;
        }

        $team->save();
        return back()->with('success','Team member add successfully..!');
    }

    public function index(){
        $tem_infos = Team::all();
        return view('team.index',compact('tem_infos'));
    }

    public function edit($id){
        $info = Team::find($id);
        return view('team.edit',compact('info'));
    }

    public function update(Request $request,$id){

        $request->validate([
            't_img'=>'required',
            'title'=>'required|string',
            'description'=>'required',
        ]);

        $team = Team::find($id);

        $team->title = $request->title;
        $team->description = $request->description;

        if($request->hasfile('t_img')){

            $dest = 'uploads/team'.$team->t_img;
            if(File::exists($dest)){
                File::delete($dest);
              }

            $file = $request->file('t_img');
            $ext = $file->getClientOriginalExtension();
            $img_nam = time().'.'.$ext;
            $file->move('uploads/team',$img_nam);
            $team->t_img = $img_nam;
        }

        $team->update();
        return back()->with('success','Team member update successfully..!');
    }

    public function delete($id){
        $team = Team::find($id);
        $dest = 'uploads/team'.$team->t_img;
        if(File::exists($dest)){
            File::delete($dest);
          }
          $team->delete();
          return back()->with('del','Delete hoica..?'); 
    }
}
