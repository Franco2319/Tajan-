<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PreguntasController extends Controller
{
    public function validar(Request $request)
    {

        $auth = resolve('littlegatekeeper');

        $loginSuccess = $auth->attempt($request->only([
            'username',
            'password'
        ]));

        if ($loginSuccess) {
            return redirect('/actividad');
        }
        else{
            return back();
        }

    }
}
