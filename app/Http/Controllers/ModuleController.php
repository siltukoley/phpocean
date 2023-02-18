<?php

namespace App\Http\Controllers;

use App\Models\Module;
use Illuminate\Http\Request;

class ModuleController extends Controller
{
    
public function index(){
    $modules = Module::orderBy('id','desc')->peginate(5);
    //dd($modules);
    echo "hii";die;
    //return view('companies.index', compact('companies'));
}

}
