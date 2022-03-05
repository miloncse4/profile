<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Contact;
use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
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
    
    //Mail work
    public function send(){
        $contact_form_data = request()->all();
        Mail::to('miloncse4@gmail.com')->send(new ContactFormMail($contact_form_data));
        return redirect()->route('index');
    }
    //end work
    public function create(){
        return view('bio.create');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required|string',
            'email' => 'required',
            'address' => 'required',
        ]);

        $all_data = new Contact;

        $all_data->name = $request->name;
        $all_data->email = $request->email;
        $all_data->address = $request->address;
        $all_data->created_at = Carbon::now();

        $all_data->save();
        return back()->with('success','Biodata add Successfully....!');
    }

    public function index(){
        $total_data = Contact::all();
        return view('bio.index',compact('total_data'));
    }

    public function edit($id){
        $info = Contact::find($id);
        return view('bio.edit',compact('info'));
    }

    
    public function update(Request $request,$id){
        $request->validate([
            'name' => 'required|string',
            'email' => 'required',
            'address' => 'required',
        ]);

        $all_data = Contact::find($id);

        $all_data->name = $request->name;
        $all_data->email = $request->email;
        $all_data->address = $request->address;
        $all_data->created_at = Carbon::now();

        $all_data->update();
        return back()->with('update','Biodata update Successfully....!');
    }

    public function delete($id){
        $find = Contact::find($id);
        $find->delete();
        return back()->with('del','Delete hasbeen finish..??');
    }
}
