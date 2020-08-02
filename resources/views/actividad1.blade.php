@extends('layouts')

@section('content')

<section class="container">
  <div class="row">
    <div class="col-12 text-center">
    <img src="/storage/imgact1.jpg" alt="" width="100%">
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
                     <H2>¿De dónde proviene el término "judío"?</H2>
                        <input id="p1r1" type="radio" name="p1" value="1">
                        <label for="">De Yehuda, el cuarto hijo del patriarca Iaakov </label>
                        <br>
                        <input id="p1r2" type="radio" name="p1" value="0">
                        <label> De Judas, uno de los ápostoles de Jesús. </label>
                        <br>
                        <input id="p1r3" type="radio" name="p1" value="0">
                        <label> De los habitantes de los territorios de Judea y Samaria. </label>
                        <div id="result1"></div> 
      
      
                        <br> 
      
                     <H2>¿Qué otros términos se conocen para definir a los judíos?</H2>
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

                       <H2>¿Cómo respondieron los judíos observantes ante la oferta del Iluminismo?</H2>
                       <input id="p3r1" type="radio" name="p2" value="1">
                       <label> Queremos ser parte de la sociedad y ser europeos como todos. </label>
                       <br>
                       <input id="p3r2" type="radio" name="p2" value="0">
                       <label> No queremos ser como otros pueblos, nos seguiremos guiando bajos nuestras leyes tradicionales. </label>
                       <br>
                       <input id="p3r3" type="radio" name="p2" value="0">
                       <label> El judaísmo puede modificarse de acuerdo a los cambios de paradigma. </label>
                       <br>
                       <div id="result2"></div> 

                       <H2>¿Qué ocurrió con la corriente asimilacionista?</H2>
                       <input id="p4r1" type="radio" name="p2" value="1">
                       <label> Emigraron a Israel. </label>
                       <br>
                       <input id="p4r2" type="radio" name="p2" value="0">
                       <label> Lucharon para seguir siendo Judíos en la modernidad. </label>
                       <br>
                       <input id="p4r3" type="radio" name="p2" value="0">
                       <label> Abandonaron sus tradiciones y tras algunas generaciones dejaron de ser parte de las comunidades judías. </label>
                       <br>
                       <div id="result2"></div> 

                       <H2>¿Cuál fue la respuesta de Hertzl ante el antisemitismo?</H2>
                       <input id="p5r1" type="radio" name="p2" value="1">
                       <label> Planteó como solución la creación de un Estado judío. </label>
                       <br>
                       <input id="p5r2" type="radio" name="p2" value="0">
                       <label> Propuso abandonar las prácticas religiosas. </label>
                       <br>
                       <input id="p5r3" type="radio" name="p2" value="0">
                       <label> Declaró la independencia de los judíos del mundo. </label>
                       <br>
                       <div id="result2"></div> 

                       <H2>¿Qué es el sionismo?</H2>
                       <input id="p6r1" type="radio" name="p2" value="1">
                       <label> Sentir amor por Sion-Jerusalén. </label>
                       <br>
                       <input id="p6r2" type="radio" name="p2" value="0">
                       <label> Sostener que los judíos como pueblo tienen derecho a un Estado propio. </label>
                       <br>
                       <input id="p6r3" type="radio" name="p2" value="0">
                       <label> Es un movimiento estudiantil judío. </label>
                       <br>
                       <div id="result2"></div> 
      
      
                       <br> 
      
                    <button type="button" onclick="resultado()"> 
                        Ver Respuestas
                    </button>
                 </div>
  </div>
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
    <div>
      <h2>Luego de esta Introducción al conflicto, ¿Qué acciones <br /> conoces que se realizaron a lo largo de 72 años de la existen- <br /> cia del Estado de Israel para lograr la paz?</h2>
      <h2>¿Qué propuestas conoces que ofrecieron los palestinos en <br /> las negociaciones de paz con Israel? </h2>
      <ul>
        <li>Podrás reflexionar más sobre estas preguntas y <br /> compartir tus respuestas en el encuentro por <br /> Zoom.</li> <li>Ponete en contacto con tu coordinador/a <br /> para conocer fecha y hora de la clase.</li>
      </ul>
    </div>
    

  </div>

  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
  <div>
      <h3>Actividad Individual</h3>
      <h3>Elegí tres personas de tu entorno más cercano (pueden ser <br /> familiares o amigos)para hacerle las siguientes preguntas: </h3>
      <ul>
        <li>¿Qué signfica para vos ser judío/a?</li>
        <li>¿Esa definición siempre fue así o fue cambiando a lo largo de las expe- <br />riencias vividas?</li>
        <li>Si pudieras describir tu identidad judía a través de uno o más objetos, <br /> ¿cuáles serían y por qué?</li>
      </ul>
      <h3>Hacé un registro documental y fotográfico -de las respues- <br />tas y objetos seleccionados- y subílo en formato PDF al <br /> drive. No olvides escribir tu nombre y apellido. </h3>
    </div>
</div>

                
                     
 
    <script> 
        function resultado() { 
            if(document.getElementById('p1r1').checked){
                console.log("Correcta");
                document.getElementById("result1").innerHTML = "Correcta!";  
            } else if (document.getElementById('p1r2').checked){
                console.log("incorrecta");
                document.getElementById("result1").innerHTML = "Incorrecta!";
            }
            else if (document.getElementById('p1r3').checked){
                console.log("incorrecta");
                document.getElementById("result1").innerHTML = "Incorrecta!";
            }
            if(document.getElementById('p2r1').checked){
                console.log("Correcta");
                document.getElementById("result2").innerHTML = "Correcta!";  
            } 
            else if (document.getElementById('p2r2').checked){
                console.log("incorrecta");
                document.getElementById("result2").innerHTML = "Incorrecta!";
            } 
            else if (document.getElementById('p2r3').checked){
                console.log("incorrecta");
                document.getElementById("result2").innerHTML = "Incorrecta!";
            }
                 
        }
    </script> 


@endsection('content')