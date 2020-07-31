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
    
    <div class="column text-center divact">
        <h2 class="acth2">Tajaná</h2>
        <h2 class="acth2-2">escuelas</h2>
        <p class="actp">Un espacio de reflexión acerca de la identidad sionista y judía, con relación a las nuevas experiencias que los y las jóvenes vivirán en la próxima etapa educativa como estudiantes universitarios.</p>
       <div>
           <article>
               <h3 class="acth3">Actividad 1</h3>
               <a href="/actividad1"> <img src="/storage/imgact1.jpg" alt="" width="90%"> </a>
           </article>

           <article>
               <h3 class="acth3">Actividad 2</h3>
               <a href="/actividad2"> <img src="/storage/imgact2.jpg" alt="" width="90%"> </a>
           </article>

           <article>
               <h3 class="acth3">Actividad 3</h3>
               <a href="/actividad3"> <img src="/storage/imgact3.jpg" alt="" width="90%"> </a>
           </article>

           <article>
               <h3 class="acth3">Actividad 4</h3>
               <a href="/actividad4"> <img src="/storage/imgact4.jpg" alt="" width="90%"> </a>
           </article>
       </div>
    </div>

    <div class="column text-center agencia"> 
        <h1 class="agenciah1">¿Qué es la agencia judía para Israel?</h1>
        <p class= "agenciap">La agencia Judía para Israel ha contribuido al establecimiento y la construcción del Estado de Israel y continúa sirviendo como el vínculo principal entre el Estado Judío y las comunidades Judías en el mundo entero. </p>
        <a href=""> <img src="/storage/vermas.png" alt="">  </a>
        <img src="/storage/agencia.jpg" alt="" width="100%">
    </div>
    



</section>

@endsection('content')