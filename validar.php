
<?php
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];

include('sesion.php');

$_SESSION['usuario']=$usuario;

$conexion=mysqli_connect("localhost","root","","nu-ni-12");

$consulta="SELECT*FROM userlocal where usuario='$usuario' and contraseña='$contraseña'";

$resultado=mysqli_query($conexion,$consulta);
$filas = mysqli_fetch_array($resultado);

if ($filas) {
  if ($filas['t_usuario'] == 1) { //Admin
    header("location:Platinun/index.php");
  }elseif ($filas['t_usuario'] == "" || $filas['t_usuario'] == 0)  { //Usuario
    header("location:User/home.php");
  }
} else {
  // No se encontró ningún usuario con las credenciales proporcionadas
  include("index.php");
  ?>
  <script>
    Swal.fire({
      icon: 'error',
      title: 'Oops...',
      text: 'Error en la Cuenta !'
    })
  </script>
  <?php
}

mysqli_free_result($resultado);
mysqli_close($conexion);
