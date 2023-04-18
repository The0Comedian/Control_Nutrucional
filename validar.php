<?php
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];

include('sesion.php');

$_SESSION['usuario']=$usuario;

$conexion=mysqli_connect("localhost","root","","nu-ni-12");

$consulta="SELECT*FROM userlocal where usuario='$usuario' and contraseña='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_fetch_array($resultado);

if($filas){ //administrador
    header("location:User/home.php");
        
}
/*else
if($filas['t_usuario']==2){ //cliente
header("location:./student/index.php");
}*/
else{
    ?>
    <?php
    include("index.php");
    ?>
    <!--------<h1 class="bad">ERROR EN LA AUTENTIFICACION</h1> ------->

    <script src="Notify/notify.js"></script>
    <script src="Notify/notify.min.js"></script>
    <script>
        $.notify("Error en la Autentificaición",{position:"right"});
    </script>
   
    <?php


}
mysqli_free_result($resultado);
mysqli_close($conexion);

