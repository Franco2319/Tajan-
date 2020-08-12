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

        <label class="label-container">Es la lucha contra el antisemitismo 
            <input id="p1r1" type="radio" name="p1" value="0">
            <span class="checkmark"></span>
        </label>
      <br>

      <label class="label-container">Es la explicación y el esclarecimiento de los sucesos históricos y acciones actuales vinculados al Estado de Israel y sus políticas. 
          <input id="p1r2" type="radio" name="p1" value="1">
          <span class="checkmark"></span>
      </label>
      <br>

      <label class="label-container">Es la concientización sobre actos de terrorismo relacionados al antisemitismo 
            <input id="p1r3" type="radio" name="p1" value="0">
            <span class="checkmark"></span>
        </label>
      <div id="result1"></div> 
      <div class="lineadiv1"></div>
      
       <H2><span class="fa-stack circulo1">
           <span class="fa fa-circle-o fa-stack-2x "></span>
              <strong class="fa-stack-1x">
                  2    
              </strong>
           </span>¿Cuál es el objetivo de la Hasbará?</H2>

        <label class="label-container">Proveer información y conocimiento para combatir la ideología que propaga la deslegitimación de Israel
            <input id="p2r1" type="radio" name="p2" value="1">
            <span class="checkmark"></span>
        </label>
        <br>

        <label class="label-container">Incrementar el turismo en Israel
            <input id="p2r2" type="radio" name="p2" value="0">
            <span class="checkmark"></span>
        </label>
        <br>

        <label class="label-container">Divulgar la cultura hebrea en el mundo
            <input id="p2r3" type="radio" name="p2" value="0">
            <span class="checkmark"></span>
        </label>
        <br>

        <div id="result2"></div> 
        <div class="lineadiv1"></div>

        <H2><span class="fa-stack circulo1">
            <span class="fa fa-circle-o fa-stack-2x "></span>
               <strong class="fa-stack-1x">
                  3    
              </strong>
            </span>¿Quiénes pueden hacer Hasbará?</H2>

        <label class="label-container">Los representantes oficiales del Estado de Israel
            <input id="p3r1" type="radio" name="p3" value="0">
            <span class="checkmark"></span>
        </label>
        <br>

        <label class="label-container">Los dirigentes comunitarios
            <input id="p3r2" type="radio" name="p3" value="0">
            <span class="checkmark"></span>
        </label>
        <br>

        <label class="label-container">Todas las personas que quieran brindar información precisa acerca del Estado de Israel
            <input id="p3r3" type="radio" name="p3" value="1">
            <span class="checkmark"></span>
        </label>
        <br>

       <div id="result3"></div> 
       <div class="lineadiv1"></div>

       <H2><span class="fa-stack circulo1">
           <span class="fa fa-circle-o fa-stack-2x"></span>
             <strong class="fa-stack-1x">
                 4    
             </strong>
           </span>¿Qué es la diplomacia pública vinculada a la Hasbará?</H2>

       <label class="label-container">Es el trabajo que se realiza entre las comitivas diplomáticas de los países e Israel
            <input id="p4r1" type="radio" name="p4" value="0">
            <span class="checkmark"></span>
        </label>
       <br>

       <label class="label-container">Son acciones proactivas para crear  puentes entre las comunidades judías del mundo y otras organizaciones de los países
            <input id="p4r2" type="radio" name="p4" value="1">
            <span class="checkmark"></span>
        </label>
       <br>

       <label class="label-container">Se trata de acciones vinculadas a la política exterior de Israel con Medio Oriente
            <input id="p4r3" type="radio" name="p4" value="0">
            <span class="checkmark"></span>
        </label>
       <br>

       <div id="result4"></div> 
       <div class="lineadiv1"></div>

        <H2> <span class="fa-stack circulo1">
         <span class="fa fa-circle-o fa-stack-2x "></span>
          <strong class="fa-stack-1x">
            5    
          </strong>
         </span>¿Cómo se puede trabajar en el “posicionamiento de marca” respecto de Israel?</H2>

         <label class="label-container">Publicitando series israelíes para dar a conocer su cultura
            <input id="p5r1" type="radio" name="p5" value="0">
            <span class="checkmark"></span>
        </label>
         <br>

         <label class="label-container">Invitando a la gente a visitar Israel
            <input id="p5r2" type="radio" name="p5" value="0">
            <span class="checkmark"></span>
        </label>
         <br>
         <br>

         <label class="label-container">Remarcando las cuestiones positivas presentes en Israel -como el Estado de las Start Ups- y combatir así la ola de información negativa en contra de los judíos.
            <input id="p5r3" type="radio" name="p5" value="1">
            <span class="checkmark"></span>
        </label>
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
      </span>¿Participaste alguna vez de una experiencia o evento de Hasbará? Si es así, ¿Qué modelo podrías identificar en el modo que fue expuesta la información?</h2>
      <div class="lineadiv"></div>
      <h2><span class="fa-stack circulo1">
      <span class="fa fa-circle-o fa-stack-2x "></span>
      <strong class="fa-stack-1x">
        2    
      </strong>
      </span>¿Qué cuestiones positivas de Israel destacarías con el fin de posicionar favorablemente al Estado Judío frente a la comunidad internacional? </h2>
      <ul class="reflexionul" >
        <li>Podrás reflexionar más sobre estas preguntas y compartir tus respuestas en el encuentro por Zoom. <span style="color: rgba(139, 55, 107, 1)"> Ponete en contacto con tu coordinador/a para conocer fecha y hora de la clase. </span> </li> 
      </ul>
    </div>
  </div>

<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
  <div class="actividadindividual">
      
      <h2 class="actividadh2">Actividad grupal o colectiva</h2>
      <h3> <span class="fa-stack circulo1">
      <span class="fa fa-circle-o fa-stack-2x "></span>
      <strong class="fa-stack-1x">
        1    
      </strong>
      </span>Lean el siguiente caso para luego analizar:</h3>
      <ul class="individualul">
        <li>En el periódico más importante de tu ciudad, el periodista Fernando P. publicó un artículo exponiendo una teoría que vincula al Estado de Israel con el brote del Ckzrt-20, un virus sumamente contagioso que provocó una pandemia a nivel mundial. Dicha teoría es absolutamente conspirativa ya que no hay ninguna prueba al respecto y se fundamenta por noticias falsas.
           La nota publicada causó gran revuelo en la ciudad y la réplica de la falsa teoría en varios medios de comunicación: en TV, radio y portales de noticias en internet. A raíz de esto, se observó un gran número de acciones y comentarios antisemitas en las redes y se denunciaron casos aislados de judeofobia en la vía pública y medios de transporte. 
      </li>
      <br>
       <li>
        Construyan una propuesta para trabajar desde vuestra institución para responder a dicho acto antisemita experimentado, desde los distintos enfoques. Elaboren una propuesta teniendo en cuenta estrategias múltiples para responder ante diversos públicos (comunicacional, jurídico, educativo, etc.)
       </li>
      </ul>
      <div class="lineadiv2"></div>
      <h3 class="actividadh3mobile"> <span class="fa-stack circulo1">
      <span class="fa fa-circle-o fa-stack-2x "></span>
      <strong class="fa-stack-1x">
        2    
      </strong>
      </span>Suban la propuesta al drive en formato PDF. No olviden escribir sus nombres. </h3>
      
      <h3 class="actividadh3"> <span class="fa-stack circulo1">
      <span class="fa fa-circle-o fa-stack-2x "></span>
      <strong class="fa-stack-1x">
        2    
      </strong>
      </span>Suban la propuesta al drive en formato PDF. No olviden escribir sus nombres. </h3>


      <div class="divsubarchivo">
      <a href="http://" class="subirarchivo">Subir Archivo</a>
       </div>
    </div>
 </div>
</div>

</div>
                     
<script src="{{ asset('js/act2.js') }}" defer></script>

@endsection('content')