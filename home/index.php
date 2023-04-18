<h2>perfil</h2>
<a class="nav-link" href="../cerrarSesion.php">
  <div class="p-3 mb-2 bg-info text-white">cerrar<i class="fa fa-power-off fa-4x"></i></div>  </a>
  <?php
include('../newUser/google/datalogin.php');


?>

   <?php





if($login_button == '')
{
  

 echo '<img src="'.$_SESSION["user_image"].'" class="img-responsive img-circle img-thumbnail" />';
 echo '<h3><b>Name :</b> '.$_SESSION['user_first_name'].' '.$_SESSION['user_last_name'].'</h3>';
 echo '<h3><b>Email :</b> '.$_SESSION['user_email_address'].'</h3>';
 echo '<h3><a href="logout.php">Logout</h3></div>';




 if (isset($_SESSION['user_email_address'])) {
  header("Location: home.php");
 }
}
else
{

   echo '<div align="center">'.$login_button . '</div>';
}
?>
   
   </div>
  </div>
 </body>
</html>