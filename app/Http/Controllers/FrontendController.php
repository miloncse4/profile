<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Service;
use App\Models\About;
use App\Models\Contact;
use App\Models\Skill;
use App\Models\Expriance;
use App\Models\Team;

class FrontendController extends Controller
{
  

    public function index(){

        return view('index',[
            'data' => Admin::first(),
            'servics' => Service::all(),
            'about' => About::first(),
            'skill' => Skill::first(),
            'exprin' => Expriance::all(),
            'team' => Team::all(),
            'contact' => Contact::first(),
        ]);
    }

}
