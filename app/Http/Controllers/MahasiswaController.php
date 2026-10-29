<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MahasiswaModel;

class MahasiswaController extends Controller
{
     public function showmahasiswa(){
    return view("mahasiswaview",[
        'title'=>'My Project',
        'nama'=> MahasiswaModel::allDatanama(),
        "kelas" => MahasiswaModel::allDatakelas(),
        "nim" => MahasiswaModel::allDatanim(),

    ]);
    }
    public function index(){
        $mahasiswa = MahasiswaModel::all();
        return view("mahasiswaview");
    }
}
