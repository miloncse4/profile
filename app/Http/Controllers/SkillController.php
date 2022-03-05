<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skill;

class SkillController extends Controller
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
        return view('skill.create');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required|string',
            'sk_description' => 'required|string',
        ]);

        $skil = new Skill;

        $skil->name = $request->name;
        $skil->sk_description = $request->sk_description;

        $skil->save();
        return back()->with('success','Skill insert successfully.!');
    }

    public function index(){
        $sill_data = Skill::all();
        return view('skill.index',compact('sill_data'));
    }

    public function edit($id){
        $info = Skill::find($id);
        return view('skill.edit',compact('info'));
    }

    public function update(Request $request,$id){
        $skil = Skill::find($id);

        $request->validate([
            'name' => 'required|string',
            'sk_description' => 'required|string',
        ]);

        $skil->name = $request->name;
        $skil->sk_description = $request->sk_description;

        $skil->update();
        return back()->with('update','Skill update.!');
    }

    public function delete($id){
        $delete = Skill::find($id);
        $delete->delete();
        return back()->with('dele','Angry Delete..??');
    }
}
