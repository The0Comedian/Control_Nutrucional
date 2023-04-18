<?php
	// include Database connection file 
	include("conexion.php");

	// Variable sesion
  session_start(); 						
	$usuario=$_SESSION['user_email_address'];			
						//consulta
$query = "SELECT * FROM tallapeso WHERE id_usuario='$usuario'";
	if (!$result = mysqli_query($con, $query)) {
        exit(mysqli_error($con));
    }
    // if query results contains rows then featch those rows 
    if(mysqli_num_rows($result) > 0)
    {
      //validar varibales
        $number = 1;
        $talla = "";
        $peso = "";
        $edads = "";
        $tallaCal = "";
        $pesoCal = "";
        $edadsCal = "";
        
    	while($row = mysqli_fetch_assoc($result))
    	{
           
            $talla.=''.$row['talla'].',';
            $peso.=''.$row['peso'].',';
            $edads.=''.$row['edad'].',';        
            $number++;
            $tallaCal=''.$row['talla'].'';
            $pesoCal=''.$row['peso'].'';
            $edadsCal=''.$row['edad'].'';
    	}
    }
    else
    {
    
    	
    }
    //echo $a1=$data
   // echo $tallaCal;
    $query = "SELECT * FROM misdatos WHERE id_usuario='$usuario'";
	if (!$result = mysqli_query($con, $query)) {
        exit(mysqli_error($con));
    }
    // if query results contains rows then featch those rows 
    if(mysqli_num_rows($result) > 0)
    {
        $number = 1;
        $sexo = "";
    	while($row = mysqli_fetch_assoc($result))
    	{          
             $sexo=''.$row['Sexo'].'';
             $number++;
    	}
    }


    //Sexo hombre
    if($sexo=="1"){
echo "hombre";
    }


    
    // Sexo Mujer
    if($sexo=="2"){
      //datos varibale de IMC
      $imc ="";
      // Formula para calcular el Imc en niñas
      $sumaTalla = $tallaCal*$tallaCal;
      $imc=$pesoCal/ $sumaTalla;
      //dependiendo de sus edad 7*
      $calcular = $edadsCal;
    
      $VariableBajoPeso='<div class="alert alert-warning" role="alert"> Bajo Peso</div>';
      $VariablePesoNormal='<div class="alert alert-primary" role="alert"> Peso Normal</div>';
      $VariableSobrepeso='<div class="alert alert-warning" role="alert">Sobrepeso </div>';
      $VariableObesidad='<div class="alert alert-danger" role="alert"> Obesidad</div>';
      

switch ($calcular) {
  case "7":
             if ($imc < 12.7) {
              echo $VariableBajoPeso;
              }
              if ($imc > 15.0 && $imc < 15.7) {
              echo $VariablePesoNormal;
              }
              if ($imc > 15.9) {
                echo $VariableSobrepeso;
              }
              if ($imc > 19.8) {
                echo $VariableObesidad;
              }
                    break;
  case "7.6":
              if ($imc < 12.7) {
              echo $VariableBajoPeso;
              }
              if ($imc > 15.0 && $imc < 15.7) {
                echo $VariablePesoNormal;
              }
              if ($imc > 15.9) {
                  echo $VariableSobrepeso;
                }
               if ($imc > 19.8) {
                echo $VariableObesidad;
                }
                    break;

    }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.highcharts.com/highcharts.js"></script>
   
</head>
<body>
<!----<div id="container" style="height: 300px"></div>
<div id="container2" style="height: 300px"></div>-->
<?php //echo $grafica1;?>
</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<canvas id="grafica"></canvas>
<?php  include("graficaPeso.php"); ?>
  <script>
    // Obtener el canvas y crear el contexto
    var ctx = document.getElementById('grafica').getContext('2d');

    // Crear los datos de la gráfica
    var data = {
      labels: [<?php echo $edads; ?>],
      datasets: [{
        label: 'Talla',
        data: [<?php echo $talla; ?>],
        backgroundColor: [
          'rgba(255, 99, 132, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(255, 206, 86, 0.2)',
          'rgba(75, 192, 192, 0.2)',
          'rgba(153, 102, 255, 0.2)',
          'rgba(255, 159, 64, 0.2)'
        ],
        borderColor: [
          
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)',
          'rgba(153, 102, 255, 1)',
          'rgba(255, 159, 64, 1)'
        ],
        borderWidth: 1
      }]
    };

    // Configurar la gráfica
    var options = {
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero: true
          }
        }]
      }
    };

    // Crear la gráfica
    var myChart = new Chart(ctx, {
      type: 'line',
      data: data,
      options: options
    });
  </script>
  