<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COMTROL</title>
</head>
<body>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <header>
        <div class="contenedor">
            <div id="marco">
                <h1>CONTROL</h1>
            </div>
            <nav>
                <ul>
                    <li class="actual"><a href="index.php">Inicio</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <?php
        $servidor ="localhost";
        $db="alex";
        $user="alex";
        $pass="95509550";
        
        error_reporting(0);
        
        $conexion = new mysqli($servidor,$user,$pass,$db);
        
        if($conexion->connect_errno){
         echo "Estamos tiendo problemas. Disculpe los inconvenientes causados";
         exit();
        }
    ?>
    <?php
     $resul= mysqli_query($conexion,"SELECT * FROM entrar");
                       
                       ?>
                   <center>
                                  <table width="70%" border="1px" align="center">
              
                   <tr align="center">
                  <td>Nombre</td>
                  <td>Apellido</td>
                  <td>Correo</td>
                  <td>Curso</td>
                  <td>Telefono</td>
                  <td>Contrasena</td>
                  <td>Contraceña2</td>
                  <td>Mensaje</td>
              
              </tr>
              </center>
              <?php 
                        
                          while($consulta = mysqli_fetch_array($resul)){
                     
                      ?>
                       <tr>
                              <td><?php echo $consulta['Nombre']?></td>
                              <td><?php echo $consulta['Apellido']?></td>
                              <td><?php echo $consulta['Correo']?></td>
                              <td><?php echo $consulta['Curso']?></td>
                              <td><?php echo $consulta['Telefono']?></td>
                              <td><?php echo $consulta['Contraseña']?></td>
                              <td><?php echo $consulta['contraceña2']?></td>
                              <td><?php echo $consulta['Mensaje']?></td>
                          </tr>
                          <?php   
                      }
                      echo"<h2>Clientes Activos</h2>"."<br>";
                    
                
                   ?>
</body>
</html>