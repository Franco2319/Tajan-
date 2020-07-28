<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\School;

class PreguntasController extends Controller
{
   public function login1(Request $request){
       $nombre = $request->input('name');
       $contra = $request->input('pass');
       $id = 1;
       $usuario = School::find($id);
       if($usuario["name"]==$nombre && $usuario["password"]==$contra)
       return view('actividad1');
       else
       return back();
   }
   public function login2(Request $request){
    $nombre = $request->input('name');
       $contra = $request->input('pass');
       $id = 2;
       $usuario = School::find($id);
       if($usuario["name"]==$nombre && $usuario["password"]==$contra)
       return view('actividad2');
       else
       return back();
}
public function login3(Request $request){
    $nombre = $request->input('name');
       $contra = $request->input('pass');
       $id = 3;
       $usuario = School::find($id);
       if($usuario["name"]==$nombre && $usuario["password"]==$contra)
       return view('actividad3');
       else
       return back();
}
public function login4(Request $request){
    $nombre = $request->input('name');
       $contra = $request->input('pass');
       $id = 4;
       $usuario = School::find($id);
       if($usuario["name"]==$nombre && $usuario["password"]==$contra)
       return view('actividad4');
       else
       return back();
}
       
   
}
