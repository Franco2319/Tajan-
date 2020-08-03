
        function resultado() { 
            if(document.getElementById('p1r1').checked){
                console.log("Correcta");
                document.getElementById("result1").innerHTML = "Correcta!";  
            }  if (document.getElementById('p1r2').checked){
                console.log("incorrecta");
                document.getElementById("result1").innerHTML = "Incorrecta!";
            }
             if (document.getElementById('p1r3').checked){
                console.log("incorrecta");
                document.getElementById("result1").innerHTML = "Incorrecta!";
            }
            if(document.getElementById('p2r1').checked){
                console.log("Correcta");
                document.getElementById("result2").innerHTML = "Correcta!";  
            } 
             if (document.getElementById('p2r2').checked){
                console.log("incorrecta");
                document.getElementById("result2").innerHTML = "Incorrecta!";
            } 
             if (document.getElementById('p2r3').checked){
                console.log("incorrecta");
                document.getElementById("result2").innerHTML = "Incorrecta!";
            }
             if (document.getElementById('p2r4').checked){
                console.log("incorrecta");
                document.getElementById("result2").innerHTML = "Incorrecta!";
            }
             if (document.getElementById('p3r1').checked){
                console.log("incorrecta");
                document.getElementById("result3").innerHTML = "Correcta!";
            }
             if (document.getElementById('p3r2').checked){
                console.log("incorrecta");
                document.getElementById("result3").innerHTML = "Incorrecta!";
            }
             if (document.getElementById('p3r3').checked){
                console.log("incorrecta");
                document.getElementById("result3").innerHTML = "Incorrecta!";
            }
             if (document.getElementById('p4r1').checked){
                console.log("incorrecta");
                document.getElementById("result4").innerHTML = "Correcta!";
            }
             if (document.getElementById('p4r2').checked){
                console.log("incorrecta");
                document.getElementById("result4").innerHTML = "Incorrecta!";
            }
             if (document.getElementById('p4r3').checked){
                console.log("incorrecta");
                document.getElementById("result4").innerHTML = "Incorrecta!";
            }
             if (document.getElementById('p5r1').checked){
                console.log("incorrecta");
                document.getElementById("result5").innerHTML = "Correcta!";
            }
             if (document.getElementById('p5r2').checked){
                console.log("incorrecta");
                document.getElementById("result5").innerHTML = "Incorrecta!";
            }
             if (document.getElementById('p5r3').checked){
                console.log("incorrecta");
                document.getElementById("result5").innerHTML = "Incorrecta!";
            }
             if (document.getElementById('p6r1').checked){
                console.log("incorrecta");
                document.getElementById("result6").innerHTML = "Correcta!";
            }
             if (document.getElementById('p6r2').checked){
                console.log("incorrecta");
                document.getElementById("result6").innerHTML = "Incorrecta!";
            }
             if (document.getElementById('p6r3').checked){
                console.log("incorrecta");
                document.getElementById("result6").innerHTML = "Incorrecta!";
            }
            $("#botonrespuesta").toggle();
                 
        }

        function reiniciar(){
            document.getElementById("result1").innerHTML = "";
            document.getElementById("result2").innerHTML = "";
            document.getElementById("result3").innerHTML = "";
            document.getElementById("result4").innerHTML = "";
            document.getElementById("result5").innerHTML = "";
            document.getElementById("result6").innerHTML = "";
            $("#botonrespuesta").toggle();
            $("#p1r1").prop("checked", false);
            $("#p1r2").prop("checked", false);
            $("#p1r3").prop("checked", false);
            $("#p2r1").prop("checked", false);
            $("#p2r2").prop("checked", false);
            $("#p2r3").prop("checked", false);
            $("#p2r4").prop("checked", false);
            $("#p3r1").prop("checked", false);
            $("#p3r2").prop("checked", false);
            $("#p3r3").prop("checked", false);
            $("#p4r1").prop("checked", false);
            $("#p4r2").prop("checked", false);
            $("#p4r3").prop("checked", false);
            $("#p5r1").prop("checked", false);
            $("#p5r2").prop("checked", false);
            $("#p5r3").prop("checked", false);
            $("#p6r1").prop("checked", false);
            $("#p6r2").prop("checked", false);
            $("#p6r3").prop("checked", false);
        }