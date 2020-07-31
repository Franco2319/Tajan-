@extends('layouts')

@section('content')

<section class="container contenedor">
  <div class="column text-center justify-content-xs-center clasediv bannerhome">  
        <h2 class="titulo1">Programa</h2>
        <h2 class="pb-2 titulo2">Tajaná</h2> 
        <p class='p1'>Reflexiones desde la Identidad para un Debate Constructivo.</p>
        <div class="clasep">     
        <p class='p2'>Programa Intercultural de La Agencia Judía</p>
        <p class='p3'>para Israel dirigido a escuelas de la red</p>
        <p class='p4'>judía de Latinoamérica.</p>
        </div>
</div>
    <div class="column text-center divart">   
        <h2 class="articuloh2">¿Qué es <br /> el programa Tajaná?</h2>
  <div>
       <article>
         <img src="/storage/articuloimg1.png" alt="" width="45%">
         <p class="articulop1" >Espacios de diálogo <br /> y reflexión.</p>
       </article>
       <article>
       <img class="articuloimg2" src="/storage/articuloimg2.png" alt="" width="55%">
         <p class="articulop2">Promovemos identidad, <br /> interculturalidad  <br />y el intercambio.</p>
       </article>
       <article>
       <img src="/storage/articuloimg3.png" alt="" width="45%">
         <p class="articulop3">Creamos redes <br /> para hacer acciones <br /> en conjunto.</p>
       </article>
  </div>
    </div> 
    

</section>




<a href="/actividad1">Act1</a>
<a href="/actividad2">Act2</a>
<a href="/actividad3">Act3</a>
<a href="/actividad4">Act4</a>
@endsection('content')