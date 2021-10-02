<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NOSOTROS | REGISTRO</title>
    <title>icono</title>
    <link rel="icon" type="image/jpg" href="img/74.jpg">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <header>
        <div class="contenedor">
            <div id="marco">
                <h1>REGISTRATE</h1>
            </div>
            <nav>
                <ul>
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="contenidos.html">Contenido</a></li>
                    <li ><a href="servicios.php">Servicios</a></li>
                    <li class="actual"><a href="nosotros.php">registrarte</a></li>
                </ul>
            </nav>
        </div>
    </header>

   
    <section id="main">
      <div class="contenedor">
        <h1>REGISTRATE</h1>
          <article id="main-col">
           <form action="nosotros.php" method="POST">
               <label>Nombre</label>
               <input type="text" name="nombre" id="nombre" placeholder="Ingrese su nombre...">
               <br>
               <label>Apellido</label>
               <input type="text" name="apellido" id="apellido" placeholder="Ingrese su apellido...">
               <br>
               <label>Correo</label>
               <input type="email" name="email" id="email" placeholder="Ingrese su correo...">
               <br>
               <label>Telefono</label>
               <input type="tel" name="Telefono" id="Telefono" placeholder="Ingrese su telefono...">
               <br>
               <label>Curso</label><br>
               <select name="Curso" id="Curso">
                <option value="Desarrollo Web">Desarrollo Web</option>
                <option value="Diceño Web">Diceño Web</option>
                <option value="Tutorias Quimica">Tutorias Quimica</option>
            </select><br>
               <label>Contraceña</label>
               <input type="password" name="Contraceña" id="Contraceña" placeholder="Ingrese una Contraceña...">
               <br>
               <label>Repite tu Contraceña</label>
               <input type="password" name="Contraeña" id="Contraeña" placeholder="Repite la Contraceña...">
               <br>
               <label>Mensaje</label>
               <textarea name="men" id="men" placeholder="Mensaje..."></textarea>
               <br>
               <input type="submit" value="Registrarce" name="res" id="res">
           </form>
          </article>
         <aside id="literal">
           <div class="oscuro">
          <h3> PROXIMAMENTE...</h3>
          <p>Tutorias en Ficica y Biologia</p>

           </div>
         </aside>
          <aside id="derecho">
            <div class="oscuro">
           <h3>!INCURCIONATE¡</h3>
           <p> Incurcionate en uno de nuestra tutorias para que haci puedas mejorar todos tus conocimientos
               y puedas emplearlos en tu trabajo o estudos teniendo asi un gran decenpeño
           </p>
 
            </div>
         </aside>
         </aside>
      </div>

    </section><br><br><br><br><br><br>
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
if(isset($_POST['res'])){

    $nombre=$_POST['nombre']; 
    $apellido=$_POST['apellido']; 
    $email=$_POST['email']; 
    $Telefono=$_POST['Telefono']; 
    $Curso=$_POST['Curso']; 
    $Contraceña=$_POST['Contraceña']; 
    $Contraeña=$_POST['Contraeña']; 
    $men=$_POST['men']; 

    $conexion->query("INSERT INTO entrar ( Nombre, Apellido, Correo, Telefono, Curso, Contraseña, Contraceña2, Mensaje)  VALUES ('$nombre','$apellido','$email','$Telefono','$Curso','$Contraceña','$Contraeña','$men')");
    
    include("cerrar.php");
    echo "Se guardo correctamente...";
  }
?>
    
    <footer>
        <a href="">Nosotros</a><br><br>
        <a href="">Contactos</a><br><br>
        <p>Pro-Quimer  2020</p>
    </footer>
</body>
</html>