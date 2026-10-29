<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Program;

class ProgramController extends Controller
{
    public function show(){
    return view("project",[
        'title'=>'My Project',
        'Programs'=> Program::allData(),
        "description" => ["Lorem ipsum dolor sit amet","First Description","Last Description"],
        "semester",
        "desc"
    ]);
    }

    public function showabout(){
    return view("contact",[
        'name' => ''
    ]);
    }
    
    public function showindex(){
        return view('index');
    }
    

}
