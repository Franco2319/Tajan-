@extends('layouts')

@section('content')

<section class="container">
  <div class="row">
    <div class="col-12 text-center">
    <img class="imgact1mobile" src="/images/imgact4mobile.jpg" alt="">
    <img class="imgact1" src="/images/vistaimgact4.jpg" alt="">

    <p class="actvideop">Luego de ver el video, seguí las siguientes ins- <br /> trucciones para aprender más sobre el tema.</p>
      <div class="video-responsive">  
        <iframe src="https://www.youtube.com/embed/oavMtUWDBTM" frameborder="0"  allowfullscreen></iframe>
        
      </div> 
    </div>
  </div>

</section>
<br>

<div class="solapas">

<ul class="nav nav-tabs nav-justified act1li" id="myTab" role="tablist">
  <li class="nav-item ">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">PREGUNTAS DE REVISIÓN</a>
  </li>
  <li class="nav-item ">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">PREGUNTAS DE REFLEXIÓN</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">PROPUESTA DE ACCIÓN</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
    <div class="divact1">
      <H2><span class="fa-stack circulo1">
           <span class="fa fa-circle-o fa-stack-2x "></span>
              <strong class="fa-stack-1x">
                1    
              </strong>
            </span>¿Qué es la Hasbará?</H2>
      <input id="p1r1" type="radio" name="p1" value="0">
      <label>Es la lucha contra el antisemitismo </label>
      <br>
      <input id="p1r2" type="radio" name="p1" value="1">
      <label class="labelmobile"> Es la explicación y el esclarecimiento de los sucesos históricos y acciones actuales vinculados al Estado de Israel y sus políticas. </label>
      <br>
      <input id="p1r3" type="radio" name="p1" value="0">
      <label class="labelmobile"> Es la concientización sobre actos de terrorismo relacionados al antisemitismo </label>
      <label class="labeldesktop"> Es la concientización sobre actos de terrorismo relacionados al antisemitismo </label>
      <div id="result1"></div> 
      <div class="lineadiv1"></div>
      
       <H2><span class="fa-stack circulo1">
           <span class="fa fa-circle-o fa-stack-2x "></span>
              <strong class="fa-stack-1x">
                  2    
              </strong>
           </span>¿Cuál es el objetivo de la Hasbará?</H2>
        <input id="p2r1" type="radio" name="p2" value="1">
        <label class="labelmobile"> Proveer información y conocimiento para combatir la ideología que propaga la deslegitimación de Israel </label>
        <br>
        <input id="p2r2" type="radio" name="p2" value="0">
        <label> Incrementar el turismo en Israel </label>
        <br>
        <input id="p2r3" type="radio" name="p2" value="0">
        <label> Divulgar la cultura hebrea en el mundo </label>
        <br>
        <div id="result2"></div> 
        <div class="lineadiv1"></div>

        <H2><span class="fa-stack circulo1">
            <span class="fa fa-circle-o fa-stack-2x "></span>
               <strong class="fa-stack-1x">
                  3    
              </strong>
            </span>¿Quiénes pueden hacer Hasbará?</H2>
        <input id="p3r1" type="radio" name="p3" value="0">
        <label class="labelmobile"> Los representantes oficiales del Estado de Israel </label>
        <br>
        <input id="p3r2" type="radio" name="p3" value="0">
        <label class="labelmobile"> Los dirigentes comunitarios </label>
        <br>
        <input id="p3r3" type="radio" name="p3" value="1">
       <label class="labelmobile"> Todas las personas que quieran brindar información precisa acerca del Estado de Israel </label>
        <br>
       <div id="result3"></div> 
       <div class="lineadiv1"></div>

       <H2><span class="fa-stack circulo1">
           <span class="fa fa-circle-o fa-stack-2x"></span>
             <strong class="fa-stack-1x">
                 4    
             </strong>
           </span>¿Qué es la diplomacia pública vinculada a la Hasbará?</H2>
       <input id="p4r1" type="radio" name="p4" value="0">
       <label class="labelmobile"> Es el trabajo que se realiza entre las comitivas diplomáticas de los países e Israel </label>
       <br>
       <input id="p4r2" type="radio" name="p4" value="1">
       <label class="labelmobile"> Son acciones proactivas para crear  puentes entre las comunidades judías del mundo y otras organizaciones de los países </label>
       <br>
       <input id="p4r3" type="radio" name="p4" value="0">
       <label class="labelmobile"> Se trata de acciones vinculadas a la política exterior de Israel con Medio Oriente </label>
       <br>
       <div id="result4"></div> 
       <div class="lineadiv1"></div>

        <H2> <span class="fa-stack circulo1">
         <span class="fa fa-circle-o fa-stack-2x "></span>
          <strong class="fa-stack-1x">
            5    
          </strong>
         </span>¿Cómo se puede trabajar en el “posicionamiento de marca” respecto de Israel?</H2>
         <input id="p5r1" type="radio" name="p5" value="0">
         <label class="labelmobile"> Publicitando series israelíes para dar a conocer su cultura </label>
         <br>
         <input id="p5r2" type="radio" name="p5" value="0">
         <label> Invitando a la gente a visitar Israel </label>
         <br>
         <input id="p5r3" type="radio" name="p5" value="1">
         <label class="labelmobile"> Remarcando las cuestiones positivas presentes en Israel -como el Estado de las Start Ups- y combatir así la ola de información negativa en contra de los judíos. </label>
         <br>
         <div id="result5"></div> 

         <div class="divrespuestas">
            <button type="button" onclick="resultado()"> 
             Ver Respuestas
            </button>
            <button id="botonrespuesta" style="display: none;" type="button" onclick="reiniciar()">
            Reiniciar
            </button>
        </div>
     </div>
    </div>


  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
    <div class="text-center reflexion">
      
      <h2 class="reflexionh2">  <span class="fa-stack circulo1">
      <span class="fa fa-circle-o fa-stack-2x "></span>
      <strong class="fa-stack-1x">
        1    
      </strong>
      </span>Luego de esta Introducción al conflicto, ¿Qué acciones conoces que se realizaron a lo largo de 72 años de la existencia del Estado de Israel para lograr la paz?</h2>
      <div class="lineadiv"></div>
      <h2><span class="fa-stack circulo1">
      <span class="fa fa-circle-o fa-stack-2x "></span>
      <strong class="fa-stack-1x">
        2    
      </strong>
      </span>¿Qué propuestas conoces que ofrecieron los palestinos en las negociaciones de paz con Israel? </h2>
      <ul class="reflexionul" >
        <li>Podrás reflexionar más sobre estas preguntas y compartir tus respuestas en el encuentro por Zoom. <span style="color: rgba(139, 55, 107, 1)"> Ponete en contacto con tu coordinador/a para conocer fecha y hora de la clase. </span> </li> 
      </ul>
    </div>
  </div>

<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
  <div class="actividadindividual">
      
      <h2 class="actividadh2">Actividad Individual</h2>
      <h3> <span class="fa-stack circulo1">
      <span class="fa fa-circle-o fa-stack-2x "></span>
      <strong class="fa-stack-1x">
        1    
      </strong>
      </span>Elegí tres personas de tu entorno más cercano (pueden ser familiares o amigos)para hacerle las siguientes preguntas: </h3>
      <ul class="individualul">
        <li>¿Qué signfica para vos ser judío/a?</li>
        <li>¿Esa definición siempre fue así o fue cambiando a lo largo de las experiencias vividas?</li>
        <li>Si pudieras describir tu identidad judía a través de uno o más objetos, <br /> ¿cuáles serían y por qué?</li>
      </ul>
      <div class="lineadiv2"></div>
      <h3 class="actividadh3mobile"> <span class="fa-stack circulo1">
      <span class="fa fa-circle-o fa-stack-2x "></span>
      <strong class="fa-stack-1x">
        2    
      </strong>
      </span>Hacé un registro documental y fotográfico <br /> -de las respuestas y objetos seleccionados- y subílo en formato PDF al drive. No olvides escribir tu nombre y apellido. </h3>
      
      <h3 class="actividadh3"> <span class="fa-stack circulo1">
      <span class="fa fa-circle-o fa-stack-2x "></span>
      <strong class="fa-stack-1x">
        2    
      </strong>
      </span>Hacé un registro documental y fotográfico -de las respuestas y objetos seleccionados- y subílo en formato PDF al drive. No olvides escribir tu nombre y apellido. </h3>


      <div class="divsubarchivo">
      <a href="http://" class="subirarchivo">Subir Archivo</a>
       </div>
    </div>
 </div>
</div>

</div>
                     
<script src="{{ asset('js/act2.js') }}" defer></script>

@endsection('content')