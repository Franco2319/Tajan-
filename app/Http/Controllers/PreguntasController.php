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
       return redirect()->back()->with('alert', 'Usuario y/o contraseña incorrectos!');
   }
   public function login2(Request $request){
    $erro = "Usuario y/o contraseña incorrectos";
    $nombre = $request->input('name');
       $contra = $request->input('pass');
       $id = 2;
       $usuario = School::find($id);
       if($usuario["name"]==$nombre && $usuario["password"]==$contra)
       return view('actividad2');
       else
       return redirect()->back()->with('alert', 'Usuario y/o contraseña incorrectos!');
}
public function login3(Request $request){
    $erro = "Usuario y/o contraseña incorrectos";
    $nombre = $request->input('name');
       $contra = $request->input('pass');
       $id = 3;
       $usuario = School::find($id);
       if($usuario["name"]==$nombre && $usuario["password"]==$contra)
       return view('actividad3');
       else
       return redirect()->back()->with('alert', 'Usuario y/o contraseña incorrectos!');
}
public function login4(Request $request){
    $erro = "Usuario y/o contraseña incorrectos";
    $nombre = $request->input('name');
       $contra = $request->input('pass');
       $id = 4;
       $usuario = School::find($id);
       if($usuario["name"]==$nombre && $usuario["password"]==$contra)
       return view('actividad4');
       else
       return redirect()->back()->with('alert', 'Usuario y/o contraseña incorrectos!');
}
       
   
}
