<!DOCTYPE html>

<?php

$conexion = mysqli_connect("localhost", "root", "", "peso1");
?>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar info</title>
    
   <link rel="icon" type="image/png" href="http://localhost/crudc/icon.png">
</head>

<body>
    <?php

    include("agregar.php");

    $conexion = mysqli_connect("localhost", "root", "", "peso1");

    if (isset($_POST['actualizar'])) {
        //Si se presiona el botón "Guardar cambios"
        $nombre = $_POST["nombre"];
        $curp = $_POST["curp"];
        $fechanacimiento = $_POST["fechanacimiento"];
        $sexo = $_POST["sexo"];
        $direccion = $_POST["direccion"];
        $telefono = $_POST["telefono"];
        $correo = $_POST["correo"];
        $fechaingreso = $_POST["fechaingreso"];
        $nss = $_POST["nss"];
        $telefonoemergencia = $_POST["telefonoemergencia"];
        $id = $_POST["id"];

        // datos que se van a actualizar
        $sql = " update crudc set
            Nombre='" . $nombre . "',
            `Fecha de nacimiento`='" . $fechanacimiento . "',
            Sexo='" . $sexo . "',
            Dirección='" . $direccion . "',
            Teléfono='" . $telefono . "',
            Correo='" . $correo . "',
            `Fecha de ingreso`='" . $fechaingreso . "',
            NSS='" . $nss . "',
            `Teléfono de emergencia`='" . $telefonoemergencia . "'
            WHERE id='" . $id . "'";
        $resultado = mysqli_query($conexion,$sql);



                         if ($resultado) {
                             echo "
                         <script>
                         alert('Los datos de " . $nombre . " han sido actualizados correctamente');
                         location.assign('indexagregar.php');
                         </script>
                         ";
                         } else {
                             echo "
                         <script>
                         alert('Hubo un error. Los datos de " . $nombre . " no se pudieron actualizar');
                         location.assign('indexagregar.php');
                         </script>
                         ";
                         }

mysqli_close($conexion);

    } else {

        $conexion = mysqli_connect("localhost", "root", "", "peso1");

        $id = $_GET['id'];
        $sql = "SELECT * FROM crudc WHERE id='" . $id . "'";
        $resultado = mysqli_query($conexion, $sql);
        $fila = mysqli_fetch_assoc($resultado);

        // datos que estan escritos en la db que se van a mostrar para modificarse
        $nombre = $fila["Nombre"];
        $curp = $fila["CURP"];
        $fechanacimiento = $fila["Fecha de nacimiento"];
        $sexo = $fila["Sexo"];
        $direccion = $fila["Dirección"];
        $telefono = $fila["Teléfono"];
        $correo = $fila["Correo"];
        $fechaingreso = $fila["Fecha de ingreso"];
       
        $nss = $fila["NSS"];
        $telefonoemergencia = $fila["Teléfono de emergencia"];
        mysqli_close($conexion);
    }
    ?>







    <form id="form1" action="<?= $_SERVER['PHP_SELF'] ?>" class="col-4" method="post">

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nombre</label> <br>
            <input value="<?php echo $nombre; ?>" type="text" class="form-control" id="campo1" required name="nombre" aria-describedby="emailHelp" onkeydown="siguienteCampo(event, 'campo1')" autocomplete="off"><br>
        </div>

        <div class="mb-3">
                     <label for="campo2" class="form-label">CURP</label><br>
                     <input type="text" value="<?php echo $curp; ?>" class="form-control" id="campo2" oninput="this.value = this.value.toUpperCase()"
                        name="curp" required aria-describedby="emailHelp" onkeydown="siguienteCampo(event, 'campo2')"
                        autocomplete="off"><br>
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Fecha de nacimiento</label><br>
            <input value="<?php echo $fechanacimiento; ?>" type="date" class="form-control" id="campo2" required name="fechanacimiento" aria-describedby="emailHelp" onkeydown="siguienteCampo(event, 'campo3')" autocomplete="off"><br>
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Sexo</label><br>
            <input value="<?php echo $sexo; ?>" type="text" class="form-control" id="campo3" name="sexo" placeholder="M / F" aria-describedby="emailHelp" onkeydown="siguienteCampo(event, 'campo4')" autocomplete="off"><br>
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Dirección</label><br>
            <input value="<?php echo $direccion; ?>" type="text" class="form-control" id="campo4" name="direccion" aria-describedby="emailHelp" onkeydown="siguienteCampo(event, 'campo5')" autocomplete="off"><br>
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Teléfono</label><br>
            <input value="<?php echo $telefono; ?>" type="number" class="form-control" id="campo5" name="telefono" aria-describedby="emailHelp" onkeydown="siguienteCampo(event, 'campo6')" autocomplete="off"><br>
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Correo electrónico</label><br>
            <input value="<?php echo $correo; ?>" type="email" class="form-control" id="campo6" name="correo" aria-describedby="emailHelp" onkeydown="siguienteCampo(event, 'campo7')" autocomplete="off"><br>
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Fecha de ingreso</label><br>
            <input value="<?php echo $fechaingreso; ?>" type="date" class="form-control" id="campo7" name="fechaingreso" aria-describedby="emailHelp" onkeydown="siguienteCampo(event, 'campo8')" autocomplete="off"><br>
        </div>

       

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label"> Número de seguro social</label><br>
            <input value="<?php echo $nss; ?>" type="text" class="form-control" id="campo10" name="nss" aria-describedby="emailHelp" onkeydown="siguienteCampo(event, 'campo')" autocomplete="off"><br>
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Teléfono de emergencia</label><br>
            <input value="<?php echo $telefonoemergencia; ?> " type="text" class="form-control" id="campo11" name="telefonoemergencia" aria-describedby="emailHelp" onkeydown="siguienteCampo(event, 'sumbit')" autocomplete="off"><br>
        </div>
        <label class="aspi" for=""> <b>ASPIRANTE</b> </label><br>
 <label class="gr" style="text-align: center;"  id="asp123" for=""><br> <b><?php  echo $nombre; ?> </b></label>
        <div class="img">
           
        <img id="img123" src="<?php echo $fila['Imagen']; ?>" alt="Imagen del estudiante">

        </div>
        

        <input type="hidden" name="id" value="<?php echo $id; ?>"><br>

        <button id="bt" name="actualizar" type="submit" class="btn btn-primary"> Actualizar </button>

        <button id="bt"  ><a href="/crudc/dos.php" style="text-decoration: none;  color:black;  ">Regresar</a></button>

    </form>


<style>
    #bt{
        background:linear-gradient(45deg,#f2a6ff,#e589f5);
        transition: all .3s ease;
        width: 200px;
        margin-left: 10px;
        height: 60px;
        font-size: 18pt;
        font-family: arial;
        border-radius: 10px;
        position: relative;
        top: -750px;
    }
    #bt:hover{
        background:linear-gradient(100deg,#d84ff0,#f2a6ff,#d84ff0);
        transition: all .3s ease;
        width: 210px;
        height: 70px;
    }
    .aspi{
        position: relative;
        top: -730px;
        left: 1020px;
    }
    .gr {
         background: -webkit-linear-gradient(45deg, #d90dc4,#e6475f, #851123);
         -webkit-background-clip: text;
         -webkit-text-fill-color: transparent;
         background-clip: text;
         -text-fill-color: transparent;
      }
    .img{
        position: relative;
        right: -790px;
        top: -700px;
        
    }
    #img123{
        border-radius: 50px;
    }
    #asp123{
        position: relative;
        top: -740px;
        left: 885px;
    }
    #form1{
        background: rgba(0,0,0,.3);
        border-radius: 20px;
        padding: 20px;
        font-size: 20pt;
        font-family: arial;
    }
    input{
        width: 450px;
        height: 30px;
        border-radius: 10px;
        border-style: none;
        margin-bottom: 20px;
        font-family: arial;
    }
    #imagenPrevia:hover{
        border-radius: 20px;
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
</style>




    <script>
        function siguienteCampo(event, siguienteCampoID) {
            // Verificar si la tecla presionada es Enter o flecha hacia abajo/arriba
            if (event.keyCode === 13 || event.keyCode === 38) {
                // Obtener el elemento del siguiente campo
                var siguienteCampo = document.getElementById(siguienteCampoID);
                // Enfocar el siguiente campo
                if (siguienteCampo) {
                    siguienteCampo.focus();
                    event.preventDefault(); // Evitar el comportamiento predeterminado del Enter (enviar el formulario)
                }
            }
        }

        //Cuando se entre a la pagian se selecciona el primer input (nombre)
        window.onload = function() {
            document.getElementById("campo1").focus();
        };

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