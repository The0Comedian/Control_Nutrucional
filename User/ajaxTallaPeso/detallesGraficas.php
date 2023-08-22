<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<title>Admin</title>

<style>
.border-right {
  border-right: 1px solid #ccc;
}

.border-left {
  border-left: 1px solid #ccc;
}

</style>
<div class="container">
  <div class="row">
  <div class="col-md-12 border-right">
     
      <?php include("estado.php"); ?>
    </div>
    <div class="col-md-6 border-right">
      <h3>GRAFICA TALLA</h3>
      <?php include("grafica.php"); ?>
    </div>
    <div class="col-md-6 border-left">
      <h3>GRAFICA PESO</h3>
      <br>
      <?php include("graficaPeso.php"); ?>
    </div>
  </div>
</div>
<hr> <!-- Línea divisoria -->



</body>
</html>


<!-- Placed at the end of the document so the pages load faster -->

</body>
</html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>




