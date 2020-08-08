@extends('layouts')

@section('content')
<section class="container-fluid">
      <div style="text-align:center;">
           <form method="POST" action="/formact1">
           <p>Ingresa los datos de usuario y contraseña para comenzar la actividad</p>
                 {{-- {{csrf_field()}} --}}
                 @csrf
              <input type="text" name="name" style="text-align:center;">
              <BR>
              <input type="password" name="pass" style="text-align:center;">
              <br>
              <button type="submit">Ingresar</button>
          </form>
     </div>
</section>
@endsection('content')