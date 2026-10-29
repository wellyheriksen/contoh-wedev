<?php

use Illuminate\Support\Facades\Route;
// use App\Models\Program;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\MahasiswaController;

// Route::get('/', function () {
//     return view('index');
// });

// Route::view('/about', 'contact', [
//     "name" => "Enma",
//     "email" => "emma@yahoo.com"
// ]
// );


// View
// Route::view('/contact',[ProgramController::class,'showabout']);
Route::get('/contact',[ProgramController::class,'showabout']);


// view
Route::get('/', [ProgramController::class,'showindex']);
Route::get('/project',[ProgramController::class,'show']);
Route::get('/mahasiswaview',[MahasiswaController::class,'showmahasiswa']);

// Route::get('/project', function() {
//     return view("project",[
//         'title'=>'My Project',
//         'Programs'=> Program::allData(),
//         "description" => ["Lorem ipsum dolor sit amet","First Description","Last Description"],
//         "semester",
//         "desc"
//     ]);
// });
