<!DOCTYPE html>
<html lang="es">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>APDanza</title>
   <link rel="stylesheet" href="http://localhost/crud/indexagregar.css">
   <link rel="icon" type="image/png" href="http://localhost/crudc/icon.png">
</head>

<body>

   <?php
   include ("agregar.php");
   $sql = "select * from empleados";
   $conexion = mysqli_connect("localhost", "root", "", "peso1");
   $resultado = mysqli_query($conexion, $sql);
   ?>

   <div class="overlay"></div>
   <div class="content">

      <div class="d1">APDanza <br>
         <p class="e"> Escuela de danza </p>
      </div>

      <div class="rye">
      <h3 class="h1" >REGISTRO</h3>
      <a style="text-decoration: none;" href="http://localhost/crudc/dos.php"><h3 class="h2">ASPIRANTES</h3></a>
      </div>
      <p style="color:black; position:relative; text-align:right; right:50px; top: 40px; " >By: Cynthia Irasema</p>
      <div class="container">
         <section id="s1" class="left-section">
            <div id="d1" class="form-container">
               <form id="form1" action="agregar.php" method="post" enctype="multipart/form-data">
                  <div class="mb-3">
                     <label for="campo1" class="form-label">Nombre</label> <br>
                     <input type="text" class="form-control" id="campo1" name="nombre" required
                        aria-describedby="emailHelp" onkeydown="siguienteCampo(event, 'campo2')" autocomplete="off"><br>
                  </div>

                  <div class="mb-3">
                     <label for="campo2" class="form-label">CURP</label><br>
                     <input type="text" class="form-control" id="campo2" oninput="this.value = this.value.toUpperCase()"
                        name="curp" required aria-describedby="emailHelp" onkeydown="siguienteCampo(event, 'campo3')"
                        autocomplete="off"><br>
                  </div>

                  <div class="mb-3">
                     <label for="campo3" class="form-label">Fecha de nacimiento</label><br>
                     <input type="date" class="form-control" id="campo3" name="fechanacimiento" required
                        aria-describedby="emailHelp" onkeydown="siguienteCampo(event, 'campo4')" autocomplete="off"><br>
                  </div>

                  <div class="mb-3">
                     <label for="campo4" class="form-label">Sexo</label><br>
                     <input type="text" class="form-control" id="campo4" oninput="this.value = this.value.toUpperCase()"
                        name="sexo" placeholder="M / F" required aria-describedby="emailHelp"
                        onkeydown="siguienteCampo(event, 'campo5')" autocomplete="off"><br>
                  </div>

                  <div class="mb-3">
                     <label for="campo5" class="form-label">Dirección</label><br>
                     <input type="text" class="form-control" id="campo5" name="direccion" aria-describedby="emailHelp"
                        required onkeydown="siguienteCampo(event, 'campo6')" autocomplete="off"><br>
                  </div>

                  <div class="mb-3">
                     <label for="campo6" class="form-label">Teléfono</label><br>
                     <input type="number" class="form-control" id="campo6" name="telefono" aria-describedby="emailHelp"
                        required onkeydown="siguienteCampo(event, 'campo7')" autocomplete="off"><br>
                  </div>

                  <div class="mb-3">
                     <label for="campo7" class="form-label">Correo electrónico</label><br>
                     <input type="email" class="form-control" id="campo7" name="correo" aria-describedby="emailHelp"
                        required onkeydown="siguienteCampo(event, 'campo8')" autocomplete="off"><br>
                  </div>

                  <div class="mb-3">
                     <label for="campo8" class="form-label">Fecha de ingreso</label><br>
                     <input type="date" class="form-control" id="campo8" name="fechaingreso"
                        aria-describedby="emailHelp" required onkeydown="siguienteCampo(event, 'campo9')"
                        autocomplete="off"><br>
                  </div>


                  <div class="mb-3">
                     <label for="campo11" class="form-label">Número de seguro social</label><br>
                     <input type="text" class="form-control" id="campo11" name="nss" aria-describedby="emailHelp"
                        required onkeydown="siguienteCampo(event, 'campo12')" autocomplete="off"><br>
                  </div>

                  <div class="mb-3">
                     <label for="campo12" class="form-label">Teléfono de emergencia</label><br>
                     <input type="text" class="form-control" id="campo12" name="telefonoemergencia"
                        aria-describedby="emailHelp" required onkeydown="siguienteCampo(event, 'submit')"
                        autocomplete="off"><br>
                     <br>
                  </div>


                  <button class="bt" id="submit" name="imagen" type="submit">Agregar</button>

                  <a href="http://localhost/crudc/indexagregar.php"><button class="bt" type="button">Cancelar</button></a>    

                  <div class="agregar">
                     <input  style="border-style: none;" type="file" id="imagenInput" name="imagen" accept="image/*"><br><br>
                     <img id="imagenPrevia" src="#" alt="Vista previa de la imagen" style="display: none;"><br>
                  </div>
               </form>
            </div>
         </section>

         <section id="s2" class="right-section">
            <div class="s2">
               <h1 style=" font-size:30pt; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Bienvenidos a
                  APDanza</h1>
               <h3 class="gradient-text" style="font-family:Verdana, Geneva, Tahoma, sans-serif ">Donde el arte y la
                  pasión se unen</h3><br>
               <p style=" text-align:justify; font-size:20pt;" >En APDanza, creemos que la danza es mucho más que un simple movimiento; es una forma de expresión, una
                  manifestación artística que trasciende fronteras y une corazones. Nuestra pequeña pero acogedora
                  academia de danza se dedica a cultivar y nutrir el talento de cada uno de nuestros estudiantes,
                  brindándoles un ambiente de aprendizaje positivo y enriquecedor <br><br> Si siempre has soñado con bailar o simplemente buscas una nueva actividad que te inspire, APDanza es el lugar perfecto para ti. Te invitamos a inscribirte en una clase de prueba y comenzar tu viaje en el mundo de la danza. Aquí, cada paso cuenta, y estamos emocionados de acompañarte en cada uno de ellos.

¡Ven y baila con nosotros en APDanza, donde la danza cobra vida! </p>

            </div>
            <div class="s3" style="font-family:arial; "  >
               <h1>¿Tienes alguna duda? <br> ¡Contáctanos! </h1>
               <a class="gradient-text2" style="text-decoration: none; color:white; " href="https://api.whatsapp.com/send?phone=3143380980&text=Hola%20Cynthia,%20estoy%20interesado%20en%20inscribirme%20en%20APDanza.%20¿Podrías%20proporcionarme%20más%20información,%20por%20favor?%20¡Buen%20día!">¡Haz clic aquí para enviar un mensaje a WhatsApp!</a><br><br><br>
      
            </div>
         </section>
      </div>

   </div>
   <?php
   mysqli_close($conexion);
   ?>

   <style>
      
      .d1 {
         background: rgba(0, 0, 0, 0.5);
         border-radius: 20px;
         height: auto;
         font-size: 65pt;
         padding: 20px;
         font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
         top: 20px;
         width: 80%;
         margin: 10px auto;
         text-align: center;
      }

      .e {
         font-size: 15pt;
         left: 50px;
         font-family: 'Courier New', Courier, monospace;
      }

      #form1 {
         background: rgba(0, 0, 0, 0.5);
         font-family: arial;
         padding: 20px;
         border-radius: 10px;
      }

      body {
         user-select: none;
         margin: 0;
         padding: 0;
         justify-content: center;
         align-items: center;
         background: url('http://localhost/crudc/ballet_133220921.jpg') no-repeat center center fixed;
         background-size: cover;
      }
      .overlay {
   position: fixed;
   top: 0;
   left: 0;
   width: 100%;
   height: 100%;
   background: rgba(255, 255, 255, 0.8); /* Color más claro */
   backdrop-filter: blur(10px); /* Valor de desenfoque */
   z-index: 1;
}


      .content {
         position: relative;
         z-index: 2;
         color: white;
         text-align: center;
      }

      h3 {
         color: black;
         font-size: 20pt;
         padding-top: 30px;
         font-family: 'Courier New', Courier, monospace;
      }

      .container {
         display: flex;
         justify-content: space-between;
         width: 100%;
         padding: 20px;
      }

      .left-section,
      .right-section {
         flex: 1;
         margin: 10px;
         background: rgba(0, 0, 0, .255);
         border-radius: 10px;
         height: auto;
      }

      .left-section {
         padding: 20px;
      }

      .right-section {
         padding: 20px;
      }

      .form-container {
         margin: auto;
      }

      #d1 {
         margin: 0px;
         position: relative;
         height: auto;
      }

      .agregar {
         right: 10%;
         top: 10%;
         position: absolute;
         background: rgba(255, 255, 255, 0.1);
         border-radius: 20px;
         height: auto;
         width: 500px;
         display: flex;
         flex-direction: column;
         align-items: center;
         justify-content: center;
         transition: all .3 ease;
         

      }

      .agregar input[type="file"] {
      cursor: pointer;
      width: 100%;
      position: absolute;
      left: 20px;
      height: auto;
      
      }

      #imagenPrevia {
         border-radius: 20px;
         max-width: 80%;
         max-height: 90%;
         margin-top: 10px;
      }

      input {
         background: RGBA(232, 228, 218, .5);
         border-style: none;
         margin-bottom: 20px;
         border-radius: 5px;
         height: 30px;
         color: white;
         transition: all .3s ease;
      }

      .input-focused {
         background: rgba(232, 228, 218, .9);
         color: black;
         font-size: 15pt;
         transition: all .3s ease;
      }

      #imagenInput {
         border-radius: 20px;
         position: relative;
         left: 10px;
         top: 20px;
         width: auto;
         
      }

      #d1 {

         max-height: 900px;
         height: auto;
         transition: all .3s ease;
      }

      body {
         height: auto;
         width: auto;
         transition: all .3s ease;
      }

      #s2 {
         background: rgba(0, 0, 0, .255);
      }

      .s2 {
         background: rgba(0, 0, 0, .5);
         border-radius: 20px;
         position: relative;
         padding: 20px;

      }
      
      .s3 {
         background: rgba(0, 0, 0, .5);
         border-radius: 20px;
         position: relative;
         padding: 15px;
         margin-top: 20px;

      }

      .gradient-text {
         background: -webkit-linear-gradient(45deg, #ff6ec4, #ffffff, #7873f5);
         -webkit-background-clip: text;
         -webkit-text-fill-color: transparent;
         background-clip: text;
         -text-fill-color: transparent;
      }

      .gradient-text2 {
         background: -webkit-linear-gradient(45deg, #a7f7fa, #ffffff, #8efc88);
         -webkit-background-clip: text;
         -webkit-text-fill-color: transparent;
         background-clip: text;
         -text-fill-color: transparent;
      }



      

      .bt{
         background: #fcdef5;
         border-radius: 5px;
         width: 100px;
         height: 40px;
         font-size:12pt;
         transition: all .1s ease;
         border-style: none;
         font-family: arial;
 
      }
      .bt:hover{
         width:120px ;
         transition: all 8s ease;
         background: rgba(251, 181, 255,1);
      }.rye {
   background: rgba(0, 0, 0, 0.5);
   position: relative;
   width: 200px;
   border-radius: 10px;
   padding-bottom: 10px;
   left: 50%; /* Centrar inicialmente en el 50% del ancho de la ventana */
   transform: translateX(-50%); /* Mover hacia la izquierda la mitad de su propio ancho */
}

      .rye,h3{
         color:white;
      }


.h1{
   background: -webkit-linear-gradient(45deg, #cffffd, #ffffff, #dee6ff);
         -webkit-background-clip: text;
         -webkit-text-fill-color: transparent;
         background-clip: text;
         -text-fill-color: transparent;
}
.h2{
   transition: all .3s ease;
}
.h2:hover{
   background: -webkit-linear-gradient(45deg, #81dbce, #ffffff, #ffbaef);
         -webkit-background-clip: text;
         -webkit-text-fill-color: transparent;
         background-clip: text;
         -text-fill-color: transparent;
         transition: all .9s ease;

}
.h2:hover + .h1 {
   color:white;
}

   </style>

   <script>
      function siguienteCampo(event, siguienteCampoID) {
         if (event.keyCode === 13) {
            var siguienteCampo = document.getElementById(siguienteCampoID);
            if (siguienteCampo) {
               siguienteCampo.focus();
               event.preventDefault();
            }
         }
      }

      window.onload = function () {
         document.getElementById("campo1").focus();
      };

      function confirmar() {
         return confirm('¿Estás seguro que deseas eliminar los datos del empleado? Será imposible recuperarlos una vez aceptando.');
      }

      function mostrarImagenSeleccionada() {
         var archivo = document.getElementById('imagenInput').files[0];
         var imagenPrevia = document.getElementById('imagenPrevia');

         if (archivo && archivo.type.startsWith('image')) {
            var lector = new FileReader();
            lector.onload = function (evento) {
               imagenPrevia.src = evento.target.result;
               imagenPrevia.style.display = 'block';
            }
            lector.readAsDataURL(archivo);
         } else {
            imagenPrevia.style.display = 'none';
         }
      }

      document.getElementById('imagenInput').addEventListener('change', mostrarImagenSeleccionada);
   </script>
   <!-- Añade este script al final de tu archivo HTML, antes de la etiqueta de cierre </body> -->
   <script>
      document.addEventListener('DOMContentLoaded', function () {
         // Seleccionar todos los inputs del formulario
         var inputs = document.querySelectorAll('input');

         // Añadir eventos de enfoque y desenfoque a cada input
         inputs.forEach(function (input) {
            input.addEventListener('focus', function () {
               input.classList.add('input-focused');
            });

            input.addEventListener('blur', function () {
               input.classList.remove('input-focused');
            });
         });
      });
   </script>

</body>

</html>