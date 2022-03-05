<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Expriance;

class ExprianceController extends Controller
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
        return view('exp.create');
    }

    public function store(Request $request){
        $request->validate([
            'sk_title' => 'required|string',
            'sk_exp' => 'required',
        ]);

        $skil = new Expriance;

        $skil->sk_title = $request->sk_title;
        $skil->sk_exp = $request->sk_exp;

        $skil->save();
        return back()->with('success','Skill insert successfully.!');
    }

    public function index(){
        $sill_data = Expriance::all();
        return view('exp.index',compact('sill_data'));
    }

    public function edit($id){
        $info = Expriance::find($id);
        return view('exp.edit',compact('info'));
    }

    public function update(Request $request,$id){
        $skil = Expriance::find($id);

        $request->validate([
            'sk_title' => 'required|string',
            'sk_exp' => 'required',
        ]);

        $skil->sk_title = $request->sk_title;
        $skil->sk_exp = $request->sk_exp;

        $skil->update();
        return back()->with('update','Skill update.!');
    }

    public function delete($id){
        $delete = Expriance::find($id);
        $delete->delete();
        return back()->with('dele','Angry Delete..??');
    }
}
