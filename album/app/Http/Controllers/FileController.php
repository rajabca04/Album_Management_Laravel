<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\File;

class FileController extends Controller
{
  public function index(){
        $data = File::all();
        return view("home", ["data" => $data]);
  }
  public function store(Request $req){
    //image upload
    $req->validate([
        'file' => "required|mimes:jpg,png,pdf",
    ]);

     $name  = $req->file('file')->getClientOriginalName();
     $path=  $req->file('file')->store(public_path("files"));

     $a = new File();
     $a->name = $name;
     $a->caption = "dog";
     $a->save();
  }
}
