@extends('layouts')

@section('title')
    Actividad 1
@endsection


@section('content')

  <div class="row">
    <div class="col ">
      <div class="divbanneract bgcoloract1">
    <img class="imgact1mobile" src="/images/imgact1mob.jpg" alt="">
    <img class="imgact1" src="/images/vistaimgacti1.jpg" alt="">
        <div class="divmaquetado">
          <h2 class="tituloactividades"> ACTIVIDAD 1</h2>
        <h1 class="tituloact1"> <strong style="color: #eea765">¿</strong><strong>Qué son </strong>los judíos<strong style="color: #eea765">?</strong> </h1>
        <p class="pact1">¿Qué significa ser judío hoy? ¿Hay una forma única y exclusiva de ser judío? ¿Es lo mismo ser judío y ser sionista?¿Qué diferencias y similitudes encontramos en los judíos de origen europeo y de los países árabes?</p>
        <p class="p2act1">En este video analizaremos todas estas cuestiones y la evolución del término "judío" a lo largo de la historia.</p>
        </div>
    </div>
     
     <div class="divvideo">
      <div class="video-responsive">  
        <iframe src="https://www.youtube.com/embed/Iqx-3IqQ_48" frameborder="0"  allowfullscreen></iframe>
      </div>
      </div>

      <p class="actvideop">Luego de ver el video, seguí las siguientes ins- <br /> trucciones para aprender más sobre el tema.</p>
    </div>
  </div>
<br>

<div class="solapas">

<ul class="nav nav-tabs act1li" id="myTab" role="tablist">
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
  
            <label class="label-container" id="resp1" >De Yehuda, el cuarto hijo del patriarca Iaakov
               <input id="p1r1" type="radio" name="p1" value="1">
               <span class="checkmark" id="check1" ></span>
            </label>
      <br>
  
            <label class="label-container" id="resp2" >De Judas, uno de los apóstoles de Jesús
               <input id="p1r2" type="radio" name="p1" value="0">
               <span class="checkmark" id="check2" ></span>
            </label>
      <br>
            <label class="label-container" id="resp3" >De los habitantes de los territorios <br /> de Judea y Samaria
               <input id="p1r3" type="radio" name="p1" value="0">
               <span class="checkmark" id="check3" ></span>
            </label>
      
      <div class="lineadiv1"></div>
      
       <H2><span class="fa-stack circulo1">
           <span class="fa fa-circle-o fa-stack-2x "></span>
              <strong class="fa-stack-1x">
                  2    
              </strong>
           </span>¿Qué otros términos se conocen para definir a los judíos?</H2>
           
             <label class="label-container" id="resp4" >Israelitas
               <input id="p2r1" type="radio" name="p2" value="0">
               <span class="checkmark" id="check4" ></span>
            </label>
        <br>
        <label class="label-container" id="resp5" >Hebreos
               <input id="p2r2" type="radio" name="p2" value="0">
               <span class="checkmark" id="check5" ></span>
            </label>
        <br>
        <label class="label-container" id="resp6" >Los que profesan con la "Fe Mosaica"
               <input id="p2r3" type="radio" name="p2" value="0">
               <span class="checkmark" id="check6" ></span>
            </label>
        <br>
        <label class="label-container" id="resp7" >Todas son correctas
               <input id="p2r4" type="radio" name="p2" value="1">
               <span class="checkmark" id="check7" ></span>
            </label>
        <div class="lineadiv1"></div>

        <H2><span class="fa-stack circulo1">
            <span class="fa fa-circle-o fa-stack-2x "></span>
               <strong class="fa-stack-1x">
                  3    
              </strong>
            </span>¿Cómo respondieron los judíos observantes ante la oferta del Iluminismo?</H2>
         
        <label class="label-container" id="resp8" >Queremos ser parte de la sociedad <br /> y ser europeos como todos
               <input id="p3r1" type="radio" name="p3" value="0">
               <span class="checkmark" id="check8" ></span>
            </label>
        <br>
        <label class="label-container" id="resp9" >No queremos ser como otros pueblos, <br /> nos seguiremos guiando bajo <br /> nuestras leyes tradicionales
               <input id="p3r2" type="radio" name="p3" value="1">
               <span class="checkmark" id="check9" ></span>
            </label>
        <br>
       <label class="label-container" id="resp10" > El judaísmo puede modificarse de acuerdo <br /> a los cambios de paradigma 
               <input id="p3r3" type="radio" name="p3" value="0">
               <span class="checkmark" id="check10" ></span>
            </label>
        <br>
       <div class="lineadiv1"></div>

       <H2><span class="fa-stack circulo1">
           <span class="fa fa-circle-o fa-stack-2x"></span>
             <strong class="fa-stack-1x">
                 4    
             </strong>
           </span>¿Qué ocurrió con la corriente asimilacionista?</H2>
          
       <label class="label-container" id="resp11" >  Emigraron a Israel
               <input id="p4r1" type="radio" name="p4" value="0">
               <span class="checkmark" id="check11" ></span>
            </label>
       <br>
       <label class="label-container" id="resp12" >  Lucharon para seguir siendo Judíos <br /> en la modernidad
               <input id="p4r2" type="radio" name="p4" value="0">
               <span class="checkmark" id="check12" ></span>
            </label>
       
       <br>
       <label class="label-container" id="resp13" > Abandonaron sus tradiciones y tras algunas <br /> generaciones dejaron de ser parte de <br /> las comunidades judías
               <input id="p4r3" type="radio" name="p4" value="1">
               <span class="checkmark" id="check13" ></span>
            </label>
       <br>
       <div class="lineadiv1"></div>

                       <H2> <span class="fa-stack circulo1">
                       <span class="fa fa-circle-o fa-stack-2x "></span>
                       <strong class="fa-stack-1x">
                        5    
                       </strong>
                       </span>¿Cuál fue la respuesta de Hertzl ante el antisemitismo?</H2>
                       
                       <label class="label-container" id="resp14" >  Planteó como solución la creación de <br /> un Estado judío
                        <input id="p5r1" type="radio" name="p5" value="1">
                         <span class="checkmark" id="check14" ></span>
                      </label>
                       <br>
                       <label class="label-container" id="resp15" > Propuso abandonar las prácticas      religiosas
                        <input id="p5r2" type="radio" name="p5" value="0">
                         <span class="checkmark" id="check15" ></span>
                      </label>
                       <br>
                       <label class="label-container" id="resp16" >  Declaró la independencia de los judíos <br /> del mundo
                        <input id="p5r3" type="radio" name="p5" value="0">
                         <span class="checkmark" id="check16" ></span>
                      </label>
                       <br>
                       <div class="lineadiv1"></div>

                       <H2> <span class="fa-stack circulo1"> 
                       <span class="fa fa-circle-o fa-stack-2x "></span>
                       <strong class="fa-stack-1x">
                        6   
                       </strong>
                       </span>¿Qué es el sionismo?</H2>
                       
                       <label class="label-container" id="resp17" >  Sentir amor por Sion- Jerusalén
                        <input id="p6r1" type="radio" name="p6" value="0">
                         <span class="checkmark" id="check17" ></span>
                      </label>
                       <br>
                       <label class="label-container" id="resp18" > Sostener que los judíos como pueblo <br /> tienen derecho a un Estado propio
                        <input id="p6r2" type="radio" name="p6" value="1">
                         <span class="checkmark" id="check18" ></span>
                      </label>
                       <br>
                       <label class="label-container" id="resp19" >  Es un movimiento estudiantil judío 
                        <input id="p6r3" type="radio" name="p6" value="0">
                         <span class="checkmark" id="check19" ></span>
                      </label>
                       <br>
                       <br> 
                       <div class="divrespuestas">
                         <button class="btn btn-primary" type="button" onclick="resultado()"> 
                            Ver Respuestas
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
      </span>Como se observa en el video, existen distintos tipos de sionismo: Sionismo Político, Sionismo Revisionista, Sionismo Sintético, Sionismo Espiritual. ¿Qué podemos concluir respecto de la identidad judía si tenemos en cuenta la multiplicidad de significados al interior del término?</h2>
      <div class="lineadiv"></div>
      <h2><span class="fa-stack circulo1">
      <span class="fa fa-circle-o fa-stack-2x "></span>
      <strong class="fa-stack-1x">
        2    
      </strong>
      </span>Poniendo el foco en las distintas respuestas que dieron los judíos al Iluminismo, ¿te sentís identificado/a con alguna de ellas? </h2>
      <ul class="reflexionul" >
        <li>Podrás reflexionar más sobre estas preguntas y compartir tus respuestas en el encuentro por Zoom. <span style="color: #a14f7f"> Ponete en contacto con tu coordinador/a para conocer fecha y hora de la clase. </span> </li> 
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
      </span>Elegí tres personas de tu entorno más cercano (pueden ser familiares o amigos) para hacerle las siguientes preguntas: </h3>
      <ul class="individualul">
        <li>¿Qué significa para vos ser judío/a?</li>
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
      <a href="https://drive.google.com/drive/folders/18chWs3WLsQEDSmnAOriCYv1TW2aqYTTW?usp=sharing" class="btn btn-primary subirarchivo"  target="_blank">Subir Archivo</a>
       </div>
    </div>
 </div>
</div>

</div>
                     
<script src="{{ asset('js/act1.js') }}" defer></script>

@endsection('content')