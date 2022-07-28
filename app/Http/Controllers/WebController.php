<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index(){
        return view('welcome');
    }
    public function traitement(Request $request){
        $request->validate([
            'name'=>'required|min:5',
            'number'=>'required|min:10'
        ]);
        $test = new Test();
        $test->name  = $request->name;
        $test->number= $request->number;
        $test->save();
    }
}
