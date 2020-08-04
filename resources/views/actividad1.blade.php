@extends('layouts')

@section('content')

<section class="container">
  <div class="row">
    <div class="col-12 text-center">
    <img src="/images/imgact1mobile.jpg" alt="" width="100%">
    <p class="actvideop">Luego de ver el video, seguí las siguientes ins- <br /> trucciones para aprender más sobre el tema.</p>
      <div class="video-responsive">  
        <iframe src="https://www.youtube.com/embed/_0LHaFNzD4k" frameborder="0"  allowfullscreen></iframe>
      </div> 
    </div>
  </div>

</section>
<br>

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
            </span>¿De dónde proviene el término "judío"?</H2>
      <input id="p1r1" type="radio" name="p1" value="1">
      <label>De Yehuda, el cuarto hijo del patriarca Iaakov </label>
      <br>
      <input id="p1r2" type="radio" name="p1" value="0">
      <label> De Judas, uno de los ápostoles de Jesús. </label>
      <br>
      <input id="p1r3" type="radio" name="p1" value="0">
      <label> De los habitantes de los territorios <br /> de Judea y Samaria. </label>
      <div id="result1"></div> 
      <div class="lineadiv1"></div>
      
       <H2><span class="fa-stack circulo1">
           <span class="fa fa-circle-o fa-stack-2x "></span>
              <strong class="fa-stack-1x">
                  2    
              </strong>
           </span>¿Qué otros términos se conocen para definir a los judíos?</H2>
        <input id="p2r1" type="radio" name="p2" value="1">
        <label> Israelitas. </label>
        <br>
        <input id="p2r2" type="radio" name="p2" value="0">
        <label> Hebreos. </label>
        <br>
        <input id="p2r3" type="radio" name="p2" value="0">
        <label> Los que profesan con la "Fe Mosaica". </label>
        <br>
        <input id="p2r4" type="radio" name="p2" value="0">
        <label> Todas son correctas. </label>
        <div id="result2"></div> 
        <div class="lineadiv1"></div>

        <H2><span class="fa-stack circulo1">
            <span class="fa fa-circle-o fa-stack-2x "></span>
               <strong class="fa-stack-1x">
                  3    
              </strong>
            </span>¿Cómo respondieron los judíos observantes ante la oferta del Iluminismo?</H2>
        <input id="p3r1" type="radio" name="p3" value="1">
        <label> Queremos ser parte de la sociedad <br /> y ser europeos como todos. </label>
        <br>
        <input id="p3r2" type="radio" name="p3" value="0">
        <label> No queremos ser como otros pueblos, <br /> nos seguiremos guiando bajo <br />  nuestras leyes tradicionales. </label>
        <br>
        <input id="p3r3" type="radio" name="p3" value="0">
       <label> El judaísmo puede modificarse de acuerdo <br /> a los cambios de paradigma. </label>
        <br>
       <div id="result3"></div> 
       <div class="lineadiv1"></div>

       <H2><span class="fa-stack circulo1">
           <span class="fa fa-circle-o fa-stack-2x"></span>
             <strong class="fa-stack-1x">
                 4    
             </strong>
           </span>¿Qué ocurrió con la corriente asimilacionista?</H2>
       <input id="p4r1" type="radio" name="p4" value="1">
       <label> Emigraron a Israel. </label>
       <br>
       <input id="p4r2" type="radio" name="p4" value="0">
       <label> Lucharon para seguir siendo Judíos <br /> en la modernidad. </label>
       <br>
       <input id="p4r3" type="radio" name="p4" value="0">
       <label> Abandonaron sus tradiciones y tras algunas <br /> generaciones dejaron de ser parte de <br /> las comunidades judías. </label>
       <br>
       <div id="result4"></div> 
       <div class="lineadiv1"></div>

                       <H2> <span class="fa-stack circulo1">
                       <span class="fa fa-circle-o fa-stack-2x "></span>
                       <strong class="fa-stack-1x">
                        5    
                       </strong>
                       </span>¿Cuál fue la respuesta de Hertzl ante el antisemitismo?</H2>
                       <input id="p5r1" type="radio" name="p5" value="1">
                       <label> Planteó como solución la creación de <br /> un Estado judío. </label>
                       <br>
                       <input id="p5r2" type="radio" name="p5" value="0">
                       <label> Propuso abandonar las prácticas religiosas. </label>
                       <br>
                       <input id="p5r3" type="radio" name="p5" value="0">
                       <label> Declaró la independencia de los judíos <br /> del mundo. </label>
                       <br>
                       <div id="result5"></div> 
                       <div class="lineadiv1"></div>

                       <H2> <span class="fa-stack circulo1"> 
                       <span class="fa fa-circle-o fa-stack-2x "></span>
                       <strong class="fa-stack-1x">
                        6   
                       </strong>
                       </span>¿Qué es el sionismo?</H2>
                       <input id="p6r1" type="radio" name="p6" value="1">
                       <label> Sentir amor por Sion-Jerusalén. </label>
                       <br>
                       <input id="p6r2" type="radio" name="p6" value="0">
                       <label> Sostener que los judíos como pueblo <br /> tienen derecho a un Estado propio. </label>
                       <br>
                       <input id="p6r3" type="radio" name="p6" value="0">
                       <label> Es un movimiento estudiantil judío. </label>
                       <br>
                       <div id="result6"></div> 
                       <br> 
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
      <h3 class="actividadh3"> <span class="fa-stack circulo1">
      <span class="fa fa-circle-o fa-stack-2x "></span>
      <strong class="fa-stack-1x">
        2    
      </strong>
      </span>Hacé un registro documental y fotográfico <br /> -de las respuestas y objetos seleccionados- y subílo en formato PDF al drive. No olvides escribir tu nombre y apellido. </h3>
      <div class="divsubarchivo">
      <a href="http://" class="subirarchivo">Subir Archivo</a>
       </div>
    </div>
 </div>
</div>
                     
<script src="{{ asset('js/act1.js') }}" defer></script>

@endsection('content')