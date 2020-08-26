@extends('layouts')


@section('title')
    Actividad 2
@endsection

@section('content')

  <div class="row">
    <div class="col ">

    <div class="divbanneract bgcoloract2">
    <img class="imgact1mobile" src="/images/imgact2mobile.jpg" alt="">
    <img class="imgact1" src="/images/vistaimgacti2.jpg" alt="">
    <div class="divmaquetado">
          <h2 class="tituloactividades"> ACTIVIDAD 2</h2>
        <h1 class="tituloact2"> <strong>El Conflicto </strong>Israelí-Palestino </h1>
        <p class="pact2">¿Cuando comenzó?</p>
        <p class="p2act2">En este video realizaremos un ánalisis histórico del conflico, desde los comienzos del siglo XX y su vinculación con hitos como la Primera Aliá, Segunda Aliá,Tercera Aliá, Primera Guerra Mundial, el Mandato Británico en Palestina, Segunda Guerra Mundial, entre otros.</p>
        </div>
    </div>
     
    <div class="divvideo">
      <div class="video-responsive">  
        <iframe src="https://www.youtube.com/embed/9WoBchFoO-8" frameborder="0"  allowfullscreen></iframe>
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
            </span>¿Cuándo comenzó el conflicto entre árabes y judíos en la era moderna?</H2>

      <label class="label-container" id="resp1" > Con la ocupación de los territorios de Judea, Samaria y Gaza durante la Guerra de los Seis Días
               <input id="p1r1" type="radio" name="p1" value="0">
               <span class="checkmark" id="check1" ></span>
            </label>
      <br>
      <label class="label-container" id="resp2" > En la revuelta árabe contra los británicos de 1936-1939
               <input id="p1r2" type="radio" name="p1" value="0">
               <span class="checkmark" id="check2" ></span>
            </label>
      <br>
      <label class="label-container" id="resp3" > A partir de estos 3 sucesos: La adopción de “sentimientos nacionales” por parte de los árabes locales, el comienzo de la incitación religiosa por parte de los líderes árabes palestinos y el papel potenciador de los mandatarios británicos desde  la decada de 1920 
               <input id="p1r3" type="radio" name="p1" value="1">
               <span class="checkmark" id="check3" ></span>
            </label>
      <br>
      <label class="label-container" id="resp4" >En la guerra de la Independencia de Israel en 1948
               <input id="p1r4" type="radio" name="p1" value="0">
               <span class="checkmark" id="check4" ></span>
            </label>
      
       
      <div class="lineadiv1"></div>
      
       <H2><span class="fa-stack circulo1">
           <span class="fa fa-circle-o fa-stack-2x "></span>
              <strong class="fa-stack-1x">
                  2    
              </strong>
           </span>¿Por qué decimos que el concepto de nacionalismo soberano es algo extraño en el mundo musulmán-árabe?</H2>

        <label class="label-container" id="resp5" > Porque no fueron soberanos a lo largo de la historia 
               <input id="p2r1" type="radio" name="p2" value="0">
               <span class="checkmark" id="check5" ></span>
            </label>
        <br>
        <label class="label-container" id="resp6" > Porque la identidad básica de los árabes es tribal y no territorial. Se identifican a partir de los diversos clanes y no poseen una identidad única nacional
               <input id="p2r2" type="radio" name="p2" value="1">
               <span class="checkmark" id="check6" ></span>
            </label>

        <br>
        <label class="label-container" id="resp7" > Porque no les interesa poseer territorios, sólo tienen interés religioso de cada zona
               <input id="p2r3" type="radio" name="p2" value="0">
               <span class="checkmark" id="check7" ></span>
            </label>
        
         
        <div class="lineadiv1"></div>

        <H2><span class="fa-stack circulo1">
            <span class="fa fa-circle-o fa-stack-2x "></span>
               <strong class="fa-stack-1x">
                  3    
              </strong>
            </span>¿Cómo sabemos que el nombre Palestina es de origen europeo y no árabe?</H2>
    
        <label class="label-container" id="resp8" >Porque suena italiano y tiene raíz latina
               <input id="p3r1" type="radio" name="p3" value="0">
               <span class="checkmark" id="check8" ></span>
            </label>
        <br>
        <label class="label-container" id="resp9" >Porque Palestina era originalmente una ciudad europea
               <input id="p3r2" type="radio" name="p3" value="0">
               <span class="checkmark" id="check9" ></span>
            </label>
        <br>
       <label class="label-container" id="resp10" >Porque la letra P no es de fácil pronunciación en el idioma árabe
               <input id="p3r3" type="radio" name="p3" value="1">
               <span class="checkmark" id="check10" ></span>
            </label>
        <br>
        
       <div class="lineadiv1"></div>

       <H2><span class="fa-stack circulo1">
           <span class="fa fa-circle-o fa-stack-2x"></span>
             <strong class="fa-stack-1x">
                 4    
             </strong>
           </span>¿Qué es la Declaración de Balfour?</H2>
  
       <label class="label-container" id="resp11" >Un documento escrito por el Imperio Otomano expulsando a árabes y judíos de Palestina 
               <input id="p4r1" type="radio" name="p4" value="0">
               <span class="checkmark" id="check11" ></span>
            </label>
       <br>
       <label class="label-container" id="resp12" >Un documento escrito en 1917 en el que el gobierno británico respaldó el establecimiento de un hogar nacional para el pueblo judío en Palestina
               <input id="p4r2" type="radio" name="p4" value="1">
               <span class="checkmark" id="check12" ></span>
            </label>
       <br>
       <label class="label-container" id="resp13" >Un documento escrito por la ONU que rechaza el establecimiento del pueblo judío en Palestina 
               <input id="p4r3" type="radio" name="p4" value="0">
               <span class="checkmark" id="check13" ></span>
            </label>
       <br>
        
       <div class="lineadiv1"></div>

                       <H2> <span class="fa-stack circulo1">
                       <span class="fa fa-circle-o fa-stack-2x "></span>
                       <strong class="fa-stack-1x">
                        5    
                       </strong>
                       </span>¿Cómo comenzó a manifestarse el conflicto entre árabes y judíos?</H2>

                       <label class="label-container" id="resp14" >En una serie de matanzas o pogroms, impulsados por los dirigentes árabes y por el Mufti de Jerusalén, contra la población judía en 1920
                       <input id="p5r1" type="radio" name="p5" value="1">
                        <span class="checkmark" id="check14" ></span>
                        </label>
                       <br>
                       <label class="label-container" id="resp15" >Con manifestaciones de ambos grupos y resistencias contra el gobierno británico
                       <input id="p5r2" type="radio" name="p5" value="0">
                        <span class="checkmark" id="check15" ></span>
                        </label>
                       <br>
                       <label class="label-container" id="resp16" > A través de propaganda política y panfletos que incitaban al odio
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
                       </span>¿Qué es el Libro Blanco?</H2>
                
                       <label class="label-container" id="resp17" > Un documento redactado por el Alto Comité Árabe rechazando la ocupación judía en Palestina 
                       <input id="p6r1" type="radio" name="p6" value="0">
                        <span class="checkmark" id="check17" ></span>
                        </label>
                       <br>
                       <label class="label-container" id="resp18" > Un documento redactado por el Irgún donde indica el plan de rebelión y establecimiento del Estado judío independiente 
                       <input id="p6r2" type="radio" name="p6" value="0">
                        <span class="checkmark" id="check18" ></span>
                        </label>
                       <br>
                       <label class="label-container" id="resp19" >Un documento político emitido por el gobierno británico en respuesta a la rebelión árabe de 1936-1939 que regula el mandato, la inmigración y la transferencia de las tierras a los judíos 
                       <input id="p6r3" type="radio" name="p6" value="1">
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
      
      <h2 class="actividadh2">Actividad Grupal</h2>
      <h3> <span class="fa-stack circulo1">
      <span class="fa fa-circle-o fa-stack-2x "></span>
      <strong class="fa-stack-1x">
        1    
      </strong>
      </span>Divídanse en equipos para trabajar. Cada equipo analizará dos artículos periodísticos extraídos de la prensa israelí que pueden <span class="spanactividad"> <a href="https://drive.google.com/drive/folders/19qlVC4JRE_EAJJ2EPWxC5QG1nxgPpy3F?usp=sharing" target="_blank"> descargar acá.</a> </span> A partir de ellos, deberán, por escrito, defender o criticar y fundamentar la postura presentada. Luego, suban su producción al drive en formato PDF. No olviden escribir los nombres de los y las integrantes de cada equipo.  </h3>


      <div class="divsubarchivo">
      <a href="https://drive.google.com/drive/folders/18chWs3WLsQEDSmnAOriCYv1TW2aqYTTW?usp=sharing" class="btn btn-primary subirarchivo" target="_blank">Subir Archivo</a>
       </div>
    </div>
 </div>
</div>

</div>
                     
<script src="{{ asset('js/act2.js') }}" defer></script>

@endsection('content')