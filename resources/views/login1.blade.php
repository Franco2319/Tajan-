@extends('layouts')

@section('title')
    Ingresar
@endsection

@section('content')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<section class="container-fluid contenedorlogin">
      <div class="divlogin" style="text-align:center;">
           <img class="loginfondo" src="images/fondologin.jpg" alt="">
           <img class="loginfondomobile" src="images/fondologinmobile.jpg" alt="">
           <form class="formlogin" method="POST" action="/formact1">
           <p class="plogin">Ingresa los datos de usuario y contraseña para comenzar con la actividad</p>
                 {{-- {{csrf_field()}} --}}
                 @csrf
              <input class="inputlogin" type="text" name="name" style="text-align:center;">
              <BR>
              <input class="inputlogin" type="password" name="pass" style="text-align:center;">
              <br>
              <button class="btn btn-primary submitlogin" type="submit">INGRESAR</button>
          </form>
     </div>

     <script>
  var msg = '{{Session::get('alert')}}';
  var exist = '{{Session::has('alert')}}';
  if(exist){
    swal(msg);
  }
</script>
</section>
@endsection('content')