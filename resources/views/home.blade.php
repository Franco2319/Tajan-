@extends('layouts')


@section('title')
    Inicio
@endsection

@section('content')

<div class="divmobile"></div>
<div class="row">   
  <div class="col bannerhome">
        <img class="imgbannermobile" src="/images/bannerhomemobile.jpg" alt="">
        <h2 class="titulo">Programa  <br /> <span style="color: #0084c2;">Tajaná </span> </h2>
        <p class='p1'>Reflexiones desde la Identidad para un Debate Constructivo.</p>
        <div class="clasep">     
        <p class='p2'>Programa Intercultural de La Agencia Judía <br /> para Israel dirigido a escuelas de la red <br /> judía de Latinoamérica.</p>
        </div>
  </div>
</div>



   <div class="row">
      <div class="col bannerhomedesktop">
         <div class="contenido">
            <img class="fondobannerdesktop" src="/images/Banner-Home.jpg" alt="">
            <div class="texto-banner">
               <h2 class="titulodesktop">Programa  <br /> <span style="color: #0084c2;">Tajaná </span> </h2>
               <h2 class="p1desktop">Reflexiones desde la Identidad para un Debate Constructivo.</h2>
               <p class="p2desktop">Programa Intercultural de La Agencia Judía <br /> para Israel dirigido a escuelas de la red <br /> judía de Latinoamérica.</p>
               <img class="logohome" src="/images/logohome.png" alt="">
            </div>
         </div>
      </div>
   </div>

<!-- <div class="divmobile"></div> -->
   
     <div class="row text-center divart">   
         <h2 class="col-12 articuloh2mobile">¿Qué es <br /> el programa Tajaná?</h2>
         <h2 class="col-12 articuloh2">¿Qué es el programa Tajaná?</h2>
          <article class="col-12 col-md-4">
         <img class="articuloimg1" src="/images/articuloimg1.png" alt="">
         <p class="articulop1" >Espacios de diálogo <br /> y reflexión.</p>
          </article>

          <article class="col-12 col-md-4">
         <img class="articuloimg2" src="/images/articuloimg2.png" alt="">
         <p class="articulop2">Promovemos identidad, <br /> interculturalidad  <br />y el intercambio.</p>
          </article>

          <article class="col-12 col-md-4">
           <img class="articuloimg1" src="/images/articuloimg3.png" alt="">
            <p class="articulop3">Creamos redes <br /> para realizar acciones <br /> en conjunto.</p>
          </article>
     </div>  
    
    <div class="row divact">
        <h2 class="col-12 col-md-6 acth2">Tajaná <br /> <span style="color: white;">escuelas </span> </h2>
        <p class="col-12 col-md-6 actpmobile">Un espacio de reflexión acerca de la <br /> identidad sionista y judía, con relación a las <br /> nuevas experiencias que los y las jóvenes <br /> vivirán en la próxima etapa educativa <br /> como estudiantes universitarios.</p>
        <p class="col-12 col-md-6 actp">Un espacio de reflexión acerca de la identidad sionista y judía, con relación a las nuevas experiencias que los y las jóvenes vivirán en la próxima etapa educativa como estudiantes universitarios.</p>

           <article class="col-12 col-md-6 articulohover">
               <h3 class="acth3">ACTIVIDAD 1</h3>
               <a class="actimg" href="/actividad1"> <img src="/images/imgact1.jpg" alt=""> </a>
               <div class="middle">
               <div class="text"> <a href="/actividad1">INGRESAR</a>  </div>
              </div>
           </article>

           <article class="col-12 col-md-6 articulohover">
               <h3 class="acth3">ACTIVIDAD 2</h3>
               <a class="actimg" href="/actividad2"> <img src="/images/imgact2.jpg" alt=""> </a>
               <div class="middle">
                 <div class="text"> <a href="/actividad2">INGRESAR</a>  </div>
              </div>
           </article>

           <article class="col-12 col-md-6 articulohover">
               <h3 class="acth3">ACTIVIDAD 3</h3>
               <a class="actimg" href="/actividad3"> <img src="/images/imgact3.jpg" alt=""> </a>
               <div class="middle">
               <div class="text"> <a href="/actividad3">INGRESAR</a>  </div>
              </div>
           </article>

           <article class="col-12 col-md-6 articulohover">
               <h3 class="acth3">ACTIVIDAD 4</h3>
               <a class="actimg" href="/actividad4"> <img src="/images/imgact4.jpg" alt=""> </a>
               <div class="middle">
               <div class="text"> <a href="/actividad4">INGRESAR</a>  </div>
              </div>
           </article>
    </div>

 <div class="row"> 
    <div class="col-12 col-md-6 agencia"> 
        <h1 class="agenciah1mobile">¿Qué es La Agencia Judía para Israel?</h1>
        <h1 class="agenciah1">¿Qué es La Agencia <br /> Judía para Israel?</h1>
        <div class="bordeagencia"> </div>
        <p class= "agenciap">La Agencia Judía para Israel ha contribuido al establecimiento y la construcción del Estado de Israel y continúa sirviendo como el vínculo principal entre el Estado Judío y las comunidades Judías en el mundo entero. </p>
        <a href="/agencia"> <button type="button" class="btn btn-primary vermasagencia">VER MAS</button>  </a>
    </div>
    <img class="col-12 col-md-6 imgagenciamobile" src="/images/agenciamobile.jpg" alt="">
    <img class="col-12 col-md-6 imgagencia" src="/images/agencia.jpg" alt="">
</div> 

    <div class="row justify-content-md-center text-center staffdivpadre">
          <h2 id="staff" class="col-12 staffh2">Staff</h2>
          <article class="col-6 col-md-4 staffdesktop staffleft" >
          <img src="/images/gabystaff.png" alt="">
          <h4 class="staffh4" >Gaby Glazman</h4>
          <p class="staffp" >Directora del Programa Intercultural de La Agencia <br/> Judía para Israel en America Latina.</p>
          </article>
          
          <article class="col-6 col-md-4 staffdesktop" >
          <img src="/images/metastaff.png" alt="">
          <h4 class="staffh4" >Tzipora Meta</h4>
          <p class="staffp" >Coordinadora del Programa Intercultural de <br /> la Agencia Judía para Israel.</p>
          </article>

          <article class="col-6 col-md-4 staffdesktop staffright">
          <img src="/images/meravstaff.png" alt="">
          <h4 class="staffh4" >Merav Szulanski</h4>
          <p class="staffp" >Shlijá de La Agencia Judía <br> para Israel en Argentina.</p>
          </article>
         
          <article class="col-6 col-md-3 " >
          <img src="/images/alexstaff1.png" alt="">
          <h4 class="staffh4" >Alex Schapiro</h4>
          <p class="staffp" >Sheliaj de La Agencia Judía para Israel y de Hashomer Hatzair en Argentina y Uruguay.</p>
          </article>
          
          <article class="col-6 col-md-3" >
          <img src="/images/micaelastaff.png" alt="">
          <h4 class="staffh4" >Micaela Sanchez Arcuschin</h4>
          <p class="staffp" >Egresada y Shlijá de la Tnuá Habonim Dror Argentina y de La Agencia Judía para Israel.</p>
          </article>

          <article class="col-6 col-md-3 " >
          <img src="/images/alejandrostaff.png" alt="">
          <h4 class="staffh4" >Alejandro Arcuschin</h4>
          <p class="staffp" >Sheliaj de La Agencia Judía para Israel y de la Tnua Hanoar Hatzioni. Director del proyecto Manhigut.</p>
       </article>

       <article class="col-12 col-md-3 artmeta" >
          <img class="divstaffartimg" src="/images/dashistaff.png" alt="">
          <h4 class="staffh4" >Dashi Valentina Jusid</h4>
          <p class="staffp" >Shlijá del Movimiento Juvenil Hejalutz Lamerjav Argentina y de La Agencia Judía para Israel.</p>
       </article>
       </div>
    




   <div class="row"> 
    <div class="col text-center divcontacto">
       <img class="imgcontactomobile" src="/images/fondocontactomobile.jpg" alt="">
       <img class="imgcontacto" src="/images/fondocontacto.jpg" alt="">
      <form action="" class="formcontacto"> <h2 id="contacto" class="contactoh2">Contacto</h2> 
         
      <input class="inputcontacto" type="text" placeholder="Nombre" >
      <br>
      <input class="inputcontacto" type="mail" placeholder="Mail">
      <br>
      <textarea class="textcontacto" name="" id="" cols="30" rows="10" placeholder="Escribe algo..."></textarea>
      <br>
      <button type="button"  class="btn btn-primary buttoncontacto">ENVIAR</button>
      </form>
     </div>
  </div>

@endsection('content')