@extends('layouts')

@section('content')

<h1 style="text-align:center;margin-top:50px;">Act1</h1>
<br>

<ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
  <div class="text-center">
                 <H2>P1</H2>
                        <input id="p1r1" type="radio" name="p1" value="1">r 
                        <input id="p1r2" type="radio" name="p1" value="0">r
                        <input id="p1r3" type="radio" name="p1" value="0">r
                        <div id="result1"></div> 
      
      
                        <br> 
      
                     <H2>P2</H2>
                       <input id="p2r1" type="radio" name="p2" value="1">r 
                       <input id="p2r2" type="radio" name="p2" value="0">r
                       <input id="p2r3" type="radio" name="p2" value="0">r
                       <div id="result2"></div> 
      
      
                       <br> 
      
                    <button type="button" onclick="resultado()"> 
                        Submit 
                    </button>
                 </div>
  </div>
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
  <div class="padlet-embed" style="border:1px solid rgba(0,0,0,0.1);border-radius:2px;box-sizing:border-box;overflow:hidden;position:relative;width:100%;background:#F4F4F4"><p style="padding:0;margin:0"><iframe src="https://padlet.com/embed/5n7fpakyrhpkv9fg" frameborder="0" allow="camera;microphone;geolocation" style="width:100%;height:608px;display:block;padding:0;margin:0"></iframe></p><div style="padding:8px;text-align:right;margin:0;"><a href="https://padlet.com?ref=embed" style="padding:0;margin:0;border:none;display:block;line-height:1;height:16px" target="_blank"><img src="https://padlet.net/embeds/made_with_padlet.png" width="86" height="16" style="padding:0;margin:0;background:none;border:none;display:inline;box-shadow:none" alt="Hecho con Padlet"></a></div></div>
  </div>
  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatibus reiciendis aspernatur, porro mollitia, quia voluptatem eius magnam quibusdam sunt consequuntur impedit. Voluptates possimus quae laudantium dolorem, autem perferendis asperiores quaerat?</div>
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