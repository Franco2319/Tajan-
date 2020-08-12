@extends('layouts')

@section('content')
<section class="container-fluid contenedorlogin">
      <div class="divlogin" style="text-align:center;">
           <img class="loginfondo" src="images/fondologin.jpg" alt="">
           <img class="loginfondomobile" src="images/fondologinmobile.jpg" alt="">
           <form class="formlogin" method="POST" action="/formact4">
           <p class="plogin">Ingresa los datos de usuario y contraseña para comenzar con la actividad</p>
                 {{-- {{csrf_field()}} --}}
                 @csrf
              <input class="inputlogin" type="text" name="name" style="text-align:center;">
              <BR>
              <input class="inputlogin" type="password" name="pass" style="text-align:center;">
              <br>
              <button class="submitlogin" type="submit">INGRESAR</button>
          </form>
     </div>
</section>
@endsection('content')