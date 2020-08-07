@extends('layouts')

@section('content')

<section class="container">
  <div class="row">
    <div class="col-12 text-center">
    <img class="imgact1mobile" src="/images/imgact3mobile.jpg" alt="">
    <img class="imgact1" src="/images/vistaimgact3.jpg" alt="">

    <p class="actvideop">Luego de ver el video, seguí las siguientes ins- <br /> trucciones para aprender más sobre el tema.</p>
      <div class="video-responsive">  
        <iframe src="https://www.youtube.com/embed/KJsn_C9rvIQ" frameborder="0"  allowfullscreen></iframe>
        
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
            </span>¿Por qué se considera el término antisemitismo como un calificativo errado para denominar la judeofobia?</H2>
      <input id="p1r1" type="radio" name="p1" value="0">
      <label>Porque la judeofobia es el miedo hacia los judíos mientras que el antisemitismo implica rechazo </label>
      <br>
      <input id="p1r2" type="radio" name="p1" value="1">
      <label> Porque el antisemita no odia a los pueblos semitas propios de la antigüedad remota sino odia a los judíos </label>
      <br>
      <input id="p1r3" type="radio" name="p1" value="0">
      <label> Porque es un término poco aceptado por la comunidad internacional </label>
      <div id="result1"></div> 
      <div class="lineadiv1"></div>
      
       <H2><span class="fa-stack circulo1">
           <span class="fa fa-circle-o fa-stack-2x "></span>
              <strong class="fa-stack-1x">
                  2    
              </strong>
           </span>¿Cuándo comenzó a desarrollarse el fenómeno de la Judeofobia? </H2>
        <input id="p2r1" type="radio" name="p2" value="0">
        <label> A principios de siglo XX en Europa </label>
        <br>
        <input id="p2r2" type="radio" name="p2" value="0">
        <label> En los países de medio oriente, en la Era Moderna </label>
        <br>
        <input id="p2r3" type="radio" name="p2" value="1">
        <label> Se cristalizó totalmente durante el imperio romano y a partir del cristianismo, se convirtió en norma  </label>
        <br>
        <div id="result2"></div> 
        <div class="lineadiv1"></div>

        <H2><span class="fa-stack circulo1">
            <span class="fa fa-circle-o fa-stack-2x "></span>
               <strong class="fa-stack-1x">
                  3    
              </strong>
            </span>¿Cuáles son las bases teológicas del antisemitismo?</H2>
        <input id="p3r1" type="radio" name="p3" value="1">
        <label> El principio de la Sustitución y la acusación del Deicidio </label>
        <br>
        <input id="p3r2" type="radio" name="p3" value="0">
        <label> La apropiación del Antiguo Testamento y la negación del Nuevo </label>
        <br>
        <input id="p3r3" type="radio" name="p3" value="0">
       <label> La prohibición de la usura y la profanación de símbolos religiosos</label>
        <br>
       <div id="result3"></div> 
       <div class="lineadiv1"></div>

       <H2><span class="fa-stack circulo1">
           <span class="fa fa-circle-o fa-stack-2x"></span>
             <strong class="fa-stack-1x">
                 4    
             </strong>
           </span>¿Cuáles son los mitos medievales que justificaron el antisemitismo?</H2>
       <input id="p4r1" type="radio" name="p4" value="0">
       <label> La propagación de creencias paganas por parte de los judíos </label>
       <br>
       <input id="p4r2" type="radio" name="p4" value="1">
       <label> El asesinato ritual, la profanación de la hostia y la peste negra </label>
       <br>
       <input id="p4r3" type="radio" name="p4" value="0">
       <label> Los falsos conversos y los actos de fe de la Inquisición </label>
       <br>
       <div id="result4"></div> 
       <div class="lineadiv1"></div>

        <H2> <span class="fa-stack circulo1">
         <span class="fa fa-circle-o fa-stack-2x "></span>
          <strong class="fa-stack-1x">
            5    
          </strong>
         </span>¿Cuáles son los mitos que defiende un antisemita en la actualidad?</H2>
         <input id="p5r1" type="radio" name="p5" value="0">
         <label> Los judíos dominan el mundo y están detrás de todas las desgracias  </label>
         <br>
         <input id="p5r2" type="radio" name="p5" value="0">
         <label> El antisionismo, que descalifica los sentimientos y aspiraciones nacionales de los judíos (y sólo de los judíos) y considera a Israel (y sólo a Israel) un Estado ilegítimo </label>
         <br>
         <input id="p5r3" type="radio" name="p5" value="0">
         <label> La Negación del Holocausto </label>
         <br>
         <input id="p5r4" type="radio" name="p5" value="1">
         <label> Todas las opciones son correctas </label>
         <br>
         <div id="result5"></div>
         <div class="lineadiv1"></div>

         <H2><span class="fa-stack circulo1">
           <span class="fa fa-circle-o fa-stack-2x"></span>
             <strong class="fa-stack-1x">
                 6    
             </strong>
           </span>¿Cuáles son las características de un antisemita?</H2>
       <input id="p6r1" type="radio" name="p4" value="1">
       <label> Demuestra excesiva obsesión para con los judíos, utiliza epítetos ofensivos y condena absolutamente todas las acciones de Israel </label>
       <br>
       <input id="p6r2" type="radio" name="p4" value="0">
       <label> Considera que todas las personas diferentes a él son inferiores y está en contra de la igualdad de derechos </label>
       <br>
       <input id="p6r3" type="radio" name="p4" value="0">
       <label> Expresa críticas ante acciones del Estado de Israel con argumentos sólidos y conocimiento del tema en cuestión </label>
       <br>
       <div id="result6"></div> 
       <div class="lineadiv1"></div>
       
       <H2><span class="fa-stack circulo1">
           <span class="fa fa-circle-o fa-stack-2x"></span>
             <strong class="fa-stack-1x">
                 7    
             </strong>
           </span>¿Quiénes son los portadores fundamentales del antisemitismo en la actualidad?</H2>
       <input id="p7r1" type="radio" name="p4" value="0">
       <label> Los medios de comunicación y las redes sociales </label>
       <br>
       <input id="p7r2" type="radio" name="p4" value="1">
       <label> Los partidos políticos de extrema derecha, la extrema izquierda y corrientes musulmanas con ideología antisemita </label>
       <br>
       <input id="p7r3" type="radio" name="p4" value="0">
       <label> Los países que votan en contra de Israel en la ONU </label>
       <br>
       <div id="result7"></div> 






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
      </span>¿Has vivido alguna situación judeofóbica de cerca, en tu ciudad, barrio o institución? </h2>
      <div class="lineadiv"></div>
      <h2><span class="fa-stack circulo1">
      <span class="fa fa-circle-o fa-stack-2x "></span>
      <strong class="fa-stack-1x">
        2    
      </strong>
      </span>¿Qué experiencia tenés respecto de situaciones antisemitas presentes en las redes sociales? </h2>
      <ul class="reflexionul" >
        <li>Podrás reflexionar más sobre estas preguntas y compartir tus respuestas en el encuentro por Zoom. <span style="color: rgba(139, 55, 107, 1)"> Ponete en contacto con tu coordinador/a para conocer fecha y hora de la clase. </span> </li> 
      </ul>
    </div>
  </div>

<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
  <div class="actividadindividual">
      
      <h2 class="actividadh2">Actividad grupal</h2>
      <h3> <span class="fa-stack circulo1">
      <span class="fa fa-circle-o fa-stack-2x "></span>
      <strong class="fa-stack-1x">
        1    
      </strong>
      </span>Divídanse en equipos para trabajar</h3>
      <ul class="individualul">
        <li>
        Deberán buscar en las redes (Facebook, twitter, Instagram, tik tok) 5 comentarios y posteos donde se reflejen elementos de antisemitismo moderno y péguenlos en el Padlet ofrecido. Luego, piensen cómo responderían a cada posteo y agréguenlos en el Padlet. 
      </li>
      <br>
       <li>
       Además colaboren con cincos reacciones en los posteos de sus compañeros/as, escribiendo respuestas alternativas en el Padlet. 
       </li>
      </ul>
      <div class="lineadiv2"></div>
 </div>
</div>

</div>
                     
<script src="{{ asset('js/act2.js') }}" defer></script>

@endsection('content')
