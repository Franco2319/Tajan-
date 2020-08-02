@extends('layouts')

@section('content')

<section class="container contenedor">
<div class="row">
  <div class="col text-center justify-content-xs-center clasediv bannerhome">
        <h2 class="titulo1">Programa</h2>
        <h2 class="pb-2 titulo2">Tajaná</h2> 
        <p class='p1'>Reflexiones desde la Identidad para un Debate Constructivo.</p>
        <div class="clasep">     
        <p class='p2'>Programa Intercultural de La Agencia Judía</p>
        <p class='p3'>para Israel dirigido a escuelas de la red</p>
        <p class='p4'>judía de Latinoamérica.</p>
        </div>
  </div>
</div>
   
     <div class="row text-center divart">   
         <h2 class="col-12 articuloh2">¿Qué es <br /> el programa Tajaná?</h2>
         <div class="col" >
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
    
    <div class="row text-center divact">
        <h2 class="col-12 acth2">Tajaná</h2>
        <h2 class="col-12 acth2-2">escuelas</h2>
        <p class="col-12 actp">Un espacio de reflexión acerca de la <br /> identidad sionista y judía, con relación a las <br /> nuevas experiencias que los y las jóvenes <br /> vivirán en la próxima etapa educativa <br /> como estudiantes universitarios.</p>
       <div class="col-12">
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

 <div class="row"> 
    <div class="col-12 text-center agencia"> 
        <h1 class="agenciah1">¿Qué es la agencia Judía para Israel?</h1>
        <p class= "agenciap">La agencia Judía para Israel ha contribuido al establecimiento y la construcción del Estado de Israel y continúa sirviendo como el vínculo principal entre el Estado Judío y las comunidades Judías en el mundo entero. </p>
        <a href=""> <img src="/storage/vermas.png" alt="" width="40%" >  </a>
        <img class="imgagencia" src="/storage/agencia.jpg" alt="" width="100%">
    </div>
</div> 

    <div class="row text-center staffdivpadre">
          <h2 class="col-12 staffh2">Staff</h2>
          <article class="col-6 " >
            <div class="divstaffart">
          <img src="/storage/alejandrostaff.png" alt="" width="85%">
          <h4 class="staffh4" >Alejandro <br /> Arcuschin</h4>
          <p class="staffp" >Sheliaj de la Agencia <br /> Judía de Israel y de la <br /> Tnua Hanoar Hatzioni. Es <br /> director del proyecto <br /> Manhigut.</p>
            </div>
       </article>

       <article class="col-6 " >
           <div class="divstaffart">
          <img src="/storage/alexstaff.png" alt="" width="85%">
          <h4 class="staffh4" >Alex Schapiro</h4>
          <p class="staffp" >Sheliaj de la Agencia <br /> Judía de Israel y de Hashomer Hatzair en <br /> Argentina y Uruguay.</p>
           </div>
       </article>

       <article class="col-6 staffart" >
          <img src="/storage/dashistaff.png" alt="" width="85%">
          <h4 class="staffh4" >Dashi</h4>
          <p class="staffp" >Shlijá del Movimiento <br /> Juvenil Hejalutz Lamerjav <br /> Argentina de la Agencia <br /> Judía para Israel.</p>
       </article>

       <article class="col-6 staffart" >
          <img src="/storage/gabystaff.png" alt="" width="85%">
          <h4 class="staffh4" >Gaby Glazman</h4>
          <p class="staffp" >Licenciada en <br /> Ciencias Políticas.</p>
       </article>

       <article class="col-6 staffart">
          <img src="/storage/meravstaff.png" alt="" width="85%">
          <h4 class="staffh4" >Merav Szulanski</h4>
          <p class="staffp" >Estudió Ciencias Políticas, <br /> Gobierno y Administra- <br />ción de Empresas en la <br /> Universidad de Ben Gurión, <br /> Israel.</p>
       </article>

       <article class="col-6 staffart" >
          <img src="/storage/micaelastaff.png" alt="" width="85%">
          <h4 class="staffh4" >Micaela Sanchez <br /> Arcuschin</h4>
          <p class="staffp" >Egresada y Shlijá de la <br /> Tnuá Habonim Dror <br /> Argentina y de la Agencia <br /> Judía para Israel.</p>
       </article>

       <article class="col-12" >
          <img src="/storage/metastaff.png" alt="" width="40%">
          <h4 class="staffh4" >Tzipora Meta</h4>
          <p class="staffp" >Coordinadora del <br /> Programa Intercultural de <br /> la Agencia Judía para <br /> Israel.</p>
       </article>
       </div>
    </div>

   <div class="row"> 
    <div class="col text-center divcontacto">
      <form action="" class="formcontacto">Contacto</form>
      <input class="inputcontacto" type="text" placeholder="Nombre" >
      <input class="inputcontacto" type="mail" placeholder="Mail">
      <textarea class="textcontacto" name="" id="" cols="30" rows="10" placeholder="Escribe algo..."></textarea>
      <br>
      <input class="enviarcontacto" type="image" src="/storage/enviar.png">
     </div>
  </div>


</section>

@endsection('content')