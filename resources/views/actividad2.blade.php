@extends('layouts')

@section('content')

<section class="container">
  <div class="row">
    <div class="col-12 text-center">
    <img class="imgact1mobile" src="/images/imgact2mobile.jpg" alt="">
    <img class="imgact1" src="/images/vistaimgact2.jpg" alt="">

    <p class="actvideop">Luego de ver el video, seguí las siguientes ins- <br /> trucciones para aprender más sobre el tema.</p>
      <div class="video-responsive">  
        <iframe src="https://www.youtube.com/embed/_0LHaFNzD4k" frameborder="0"  allowfullscreen></iframe>
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
            </span>¿Cuándo comenzó el conflicto entre árabes y judíos en la era moderna?</H2>

      <label class="label-container"> Con la ocupacion de los territorios de Judea, Samaria y Gaza durante la Guerra de los Seis Días.
               <input id="p1r1" type="radio" name="p1" value="0">
               <span class="checkmark"></span>
            </label>
      <br>
      <label class="label-container"> En la revuelta árabe contra los británicos de 1936-1939.
               <input id="p1r2" type="radio" name="p1" value="0">
               <span class="checkmark"></span>
            </label>
      <br>
      <label class="label-container"> A partir de estos 3 sucesos: La adopción de “sentimientos nacionales” por parte de los árabes locales, el comienzo de la incitación religiosa por parte de los líderes árabes palestinos y el papel potenciador de los mandatarios británicos desde  la decada de 1920. 
               <input id="p1r3" type="radio" name="p1" value="1">
               <span class="checkmark"></span>
            </label>
      <br>
      <label class="label-container">En la guerra de la Independencia de Israel en 1948.
               <input id="p1r4" type="radio" name="p1" value="0">
               <span class="checkmark"></span>
            </label>
      
      <div id="result1"></div> 
      <div class="lineadiv1"></div>
      
       <H2><span class="fa-stack circulo1">
           <span class="fa fa-circle-o fa-stack-2x "></span>
              <strong class="fa-stack-1x">
                  2    
              </strong>
           </span>¿Por qué decimos que el concepto de nacionalismo soberano es algo extraño en el mundo musulmán-árabe?</H2>

        <label class="label-container"> Porque no fueron soberanos a lo largo de la historia. 
               <input id="p2r1" type="radio" name="p2" value="0">
               <span class="checkmark"></span>
            </label>
        <br>
        <label class="label-container"> Porque la identidad básica de los árabes es tribal y no territorial. Se identifican a partir de los diversos clanes y no poseen una identidad única nacional.
               <input id="p2r2" type="radio" name="p2" value="1">
               <span class="checkmark"></span>
            </label>

        <br>
        <label class="label-container"> Porque no les interesa poseer territorios, sólo tienen interés religioso de cada zona.
               <input id="p2r3" type="radio" name="p2" value="0">
               <span class="checkmark"></span>
            </label>
        
        <div id="result2"></div> 
        <div class="lineadiv1"></div>

        <H2><span class="fa-stack circulo1">
            <span class="fa fa-circle-o fa-stack-2x "></span>
               <strong class="fa-stack-1x">
                  3    
              </strong>
            </span>¿Cómo sabemos que el nombre Palestina es de origen europeo y no árabe?</H2>
    
        <label class="label-container">Porque suena italiano y tiene raíz latina.
               <input id="p3r1" type="radio" name="p3" value="0">
               <span class="checkmark"></span>
            </label>
        <br>
        <label class="label-container">Porque Palestina era originalmente una ciudad europea.
               <input id="p3r2" type="radio" name="p3" value="0">
               <span class="checkmark"></span>
            </label>
        <br>
       <label class="label-container">Porque la letra P no es de fácil pronunciación en el idioma árabe.
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
           </span>¿Qué es la Declaración de Balfour?</H2>
  
       <label class="label-container">Un documento escrito por el imperio otomano eexpulsando a árabes y judíos de Palestina. 
               <input id="p4r1" type="radio" name="p4" value="0">
               <span class="checkmark"></span>
            </label>
       <br>
       <label class="label-container">Un documento escrito en 1917 en el que el gobierno británico respaldó el establecimiento de un hogar nacional para el pueblo judío en Palestina.
               <input id="p4r2" type="radio" name="p4" value="1">
               <span class="checkmark"></span>
            </label>
       <br>
       <label class="label-container">Un documento escrito por la ONU que rechaza el establecimiento del pueblo judío en Palestina 
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
                       </span>¿Cómo comenzó a manifestarse el conflicto entre árabes y judíos?</H2>

                       <label class="label-container">En una serie de matanzas o pogroms, impulsados por los dirigentes árabes y por el Mufti de Jerusalén, contra la población judía en 1920.
                       <input id="p5r1" type="radio" name="p5" value="1">
                        <span class="checkmark"></span>
                        </label>
                       <br>
                       <label class="label-container">Con manifestaciones de ambos grupos y resistencias contra el gobierno británico.
                       <input id="p5r2" type="radio" name="p5" value="0">
                        <span class="checkmark"></span>
                        </label>
                       <br>
                       <label class="label-container"> A través de propaganda política y panfletos que incitaban al odio.
                       <input id="p5r3" type="radio" name="p5" value="0">
                        <span class="checkmark"></span>
                        </label>
                       <br>
                       <div id="result5"></div> 
                       <div class="lineadiv1"></div>

                       <H2> <span class="fa-stack circulo1"> 
                       <span class="fa fa-circle-o fa-stack-2x "></span>
                       <strong class="fa-stack-1x">
                        6   
                       </strong>
                       </span>¿Qué es el Libro Blanco?</H2>
                
                       <label class="label-container"> Un documento redactado por el Alto Comité Árabe rechazando la ocupación judía en Palestina 
                       <input id="p6r1" type="radio" name="p6" value="0">
                        <span class="checkmark"></span>
                        </label>
                       <br>
                       <label class="label-container"> Un documento redactado por el Irgún donde indica el plan de rebelión y establecimiento del Estado judío independiente. 
                       <input id="p6r2" type="radio" name="p6" value="0">
                        <span class="checkmark"></span>
                        </label>
                       <br>
                       <label class="label-container">Un documento político emitido por el gobierno británico en respuesta a la rebelión árabe de 1936-1939 que regula el mandato, la inmigración y la transferencia de las tierras a los judíos. 
                       <input id="p6r3" type="radio" name="p6" value="1">
                        <span class="checkmark"></span>
                        </label>
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
      </span>Divídanse en equipos para trabajar. Cada equipo analizará dos artículos periodísticos extraídos de la prensa israelí que pueden descargar <span> <a href=""> acá.</a> </span> A partir de ellos, deberán, por escrito, defender o criticar y fundamentar la postura presentada. Luego, suban su producción al drive en formato PDF. No olviden escribir los nombres de los y las integrantes de cada equipo.  </h3>


      <div class="divsubarchivo">
      <a href="http://" class="subirarchivo">Subir Archivo</a>
       </div>
    </div>
 </div>
</div>

</div>
                     
<script src="{{ asset('js/act2.js') }}" defer></script>

@endsection('content')