<?php
	// include Database connection file 
	include("conexion.php");

	// Variable sesion
  session_start(); 						
	$usuario=$_SESSION['usuario'];  			
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


while($row = mysqli_fetch_assoc($result))
{          
 $sexo=''.$row['Sexo'].'';
 $number++;
}
}


  
//Sexo hombre
if($sexo=="1"){
  $imch="";
$sumaTalla="";
// Formula para calcular el Imc en niñas
$sumaTalla = $tallaCal*$tallaCal;
$imch=$pesoCal/ $sumaTalla;
//dependiendo de sus edad 7*
$calcular = $edadsCal;

$VariableBajoPeso='<div class="alert alert-danger" role="alert"> <i class="bi bi-exclamation-square-fill"></i> Bajo de Peso</div>';
$VariableBajoRiesgo='<div class="alert alert-warning" role="alert"><i class="bi bi-shield-fill-exclamation"></i> En riesgos de desnutricion</div>';
$VariablePesoNormal='<div class="alert alert-primary" role="alert"><i class="bi bi-shield-shaded"></i> Peso Normal</div>';
$VariableSobrepesoRiesgo='<div class="alert alert-warning" role="alert"><i class="bi bi-shield-fill-exclamation"></i> En riesgos de Sobrepeso </div>';
$VariableSobrepeso='<div class="alert alert-warning" role="alert"><i class="bi bi-exclamation-square-fill"></i> Sobrepeso </div>';
$VariableObesidad='<div class="alert alert-danger" role="alert"><i class="bi bi-exclamation-square-fill"></i> Obesidad</div>';

echo "hombre";

switch ($calcular) {
  case "1":
    if ($imch <8.6) {
     echo $VariableBajoPeso;
     }
     if ($imch > 8.7 && $imch <8.5) {
       echo $VariableBajoRiesgo;
       }
     if ($imch > 9.3 && $imch < 10.0) {
     echo $VariablePesoNormal; 
     }
     if ($imch > 10.1 && $imch < 10.7) {
       echo $VariableSobrepesoRiesgo;
     }
     if ($imch > 10.8) {
       echo $VariableSobrepeso;
  
     }
     if ($imch > 12.0) {
       echo $VariableObesidad;
     }
           break;
    }
    
}




// Sexo Mujer
if($sexo=="2"){

$imc="";
$sumaTalla="";
// Formula para calcular el Imc en niñas
$sumaTalla = $tallaCal*$tallaCal;
$imc=$pesoCal/ $sumaTalla;
//dependiendo de sus edad 7*
$calcular = $edadsCal;

$VariableBajoPeso='<div class="alert alert-danger" role="alert"> <i class="bi bi-exclamation-square-fill"></i> Bajo de Peso</div>';
$VariableBajoRiesgo='<div class="alert alert-warning" role="alert"><i class="bi bi-shield-fill-exclamation"></i> En riesgos de desnutricion</div>';
$VariablePesoNormal='<div class="alert alert-primary" role="alert"><i class="bi bi-shield-shaded"style="font-size: 2rem;"></i> <h4>¡Estado de nutricion Bueno!</h4> <a href="./sugerencias.php" class="alert-link">Conocer más...</a></div>';
$VariableSobrepesoRiesgo='<div class="alert alert-warning" role="alert"><i class="bi bi-shield-fill-exclamation"></i> En riesgos de Sobrepeso </div>';
$VariableSobrepeso='<div class="alert alert-warning" role="alert"><i class="bi bi-exclamation-square-fill"></i> Sobrepeso </div>';
$VariableObesidad='<div class="alert alert-danger" role="alert"><i class="bi bi-exclamation-square-fill"></i> Obesidad</div>';


switch ($calcular) {
  case "1":
    if ($imc < 7.9) {
     echo $VariableBajoPeso;
     }
     if ($imc > 7.9 && $imc <8.5) {
       echo $VariableBajoRiesgo;
       }
     if ($imc > 8.6 && $imc < 9.4) {
     echo $VariablePesoNormal; 
     }
     if ($imc > 9.5 && $imc < 10.4) {
       echo $VariableSobrepesoRiesgo;
     }
     if ($imc > 10.1) {
       echo $VariableSobrepeso;
  
     }
     if ($imc > 11.5) {
       echo $VariableObesidad;
     }
           break;
    case "1.6":
            if ($imc < 9.1) {
             echo $VariableBajoPeso;
             }
             if ($imc >9.1 && $imc <9.9) {
               echo $VariableBajoRiesgo;
               }
             if ($imc >10.0 && $imc < 10.9) {
             echo $VariablePesoNormal; 
             }
             if ($imc >11.0 && $imc < 11.5) {
               echo $VariableSobrepesoRiesgo;
             }
             if ($imc > 11.6) {
               echo $VariableSobrepeso;
          
             }
             if ($imc > 13.2) {
               echo $VariableObesidad;
             }
                   break;
            case "2":
                    if ($imc < 10.2) {
                     echo $VariableBajoPeso;
                     }
                     if ($imc >10.3 && $imc <10.9) {
                       echo $VariableBajoRiesgo;
                       }
                     if ($imc >11.0 && $imc < 11.9) {
                     echo $VariablePesoNormal; 
                     }
                     if ($imc >12.0 && $imc < 12.9) {
                       echo $VariableSobrepesoRiesgo;
                     }
                     if ($imc > 13.0) {
                       echo $VariableSobrepeso;
                  
                     }
                     if ($imc > 14.8) {
                       echo $VariableObesidad;
                     }
                           break;
                    case "2.6":
                            if ($imc < 11.2) {
                             echo $VariableBajoPeso;
                             }
                             if ($imc >11.3 && $imc <12.1) {
                               echo $VariableBajoRiesgo;
                               }
                             if ($imc >12.2 && $imc < 13.0) {
                             echo $VariablePesoNormal; 
                             }
                             if ($imc >13.1 && $imc < 14.3) {
                               echo $VariableSobrepesoRiesgo;
                             }
                             if ($imc > 14.4) {
                               echo $VariableSobrepeso;
                          
                             }
                             if ($imc > 16.5) {
                               echo $VariableObesidad;
                             }
                                   break;
                          case "3":
                                    if ($imc < 12.2) {
                                     echo $VariableBajoPeso;
                                     }
                                     if ($imc >12.3 && $imc <13.4) {
                                       echo $VariableBajoRiesgo;
                                       }
                                     if ($imc >13.5 && $imc < 14.5) {
                                     echo $VariablePesoNormal; 
                                     }
                                     if ($imc >14.6 && $imc < 15.8) {
                                       echo $VariableSobrepesoRiesgo;
                                     }
                                     if ($imc > 15.8) {
                                       echo $VariableSobrepeso;
                                  
                                     }
                                     if ($imc > 18.1) {
                                       echo $VariableObesidad;
                                     }
                                           break;
                                   case "3.6":
                                            if ($imc < 13.1) {
                                             echo $VariableBajoPeso;
                                             }
                                             if ($imc >13.2 && $imc <14.4) {
                                               echo $VariableBajoRiesgo;
                                               }
                                             if ($imc >14.6 && $imc < 15.5) {
                                             echo $VariablePesoNormal; 
                                             }
                                             if ($imc >15.6 && $imc < 17.1) {
                                               echo $VariableSobrepesoRiesgo;
                                             }
                                             if ($imc > 17.2) {
                                               echo $VariableSobrepeso;
                                          
                                             }
                                             if ($imc > 19.8) {
                                               echo $VariableObesidad;
                                             }
                                                   break;
                                          case "4":
                                                    if ($imc < 14) {
                                                     echo $VariableBajoPeso;
                                                     }
                                                     if ($imc >14.1 && $imc <15.5) {
                                                       echo $VariableBajoRiesgo;
                                                       }
                                                     if ($imc >15.6 && $imc < 16.6) {
                                                     echo $VariablePesoNormal; 
                                                     }
                                                     if ($imc >16.7 && $imc < 18.4) {
                                                       echo $VariableSobrepesoRiesgo;
                                                     }
                                                     if ($imc > 18.5) {
                                                       echo $VariableSobrepeso;
                                                  
                                                     }
                                                     if ($imc > 21.5) {
                                                       echo $VariableObesidad;
                                                     }
                                                           break;
                                                    case "4.6":
                                                            if ($imc < 14.9) {
                                                             echo $VariableBajoPeso;
                                                             }
                                                             if ($imc >15 && $imc <16.6) {
                                                               echo $VariableBajoRiesgo;
                                                               }
                                                             if ($imc >16.7 && $imc < 17.6) {
                                                             echo $VariablePesoNormal; 
                                                             }
                                                             if ($imc >17.5 && $imc < 19.8) {
                                                               echo $VariableSobrepesoRiesgo;
                                                             }
                                                             if ($imc > 19.9) {
                                                               echo $VariableSobrepeso;
                                                          
                                                             }
                                                             if ($imc > 23.2) {
                                                               echo $VariableObesidad;
                                                             }
                                                                   break;
                                                            case "5":
                                                                    if ($imc < 12.7) {
                                                                     echo $VariableBajoPeso;
                                                                     }
                                                                     if ($imc >15.9 && $imc <17.6) {
                                                                       echo $VariableBajoRiesgo;
                                                                       }
                                                                     if ($imc >17.7 && $imc < 18.6) {
                                                                     echo $VariablePesoNormal; 
                                                                     }
                                                                     if ($imc >18.6 && $imc < 21.1) {
                                                                       echo $VariableSobrepesoRiesgo;
                                                                     }
                                                                     if ($imc > 21.2) {
                                                                       echo $VariableSobrepeso;
                                                                  
                                                                     }
                                                                     if ($imc > 24.9) {
                                                                       echo $VariableObesidad;
                                                                     }
                                                                           break;
                                                                    case "5.6":
                                                                            if ($imc < 12.7) {
                                                                             echo $VariableBajoPeso;
                                                                             }
                                                                             if ($imc >12.8 && $imc <14.5) {
                                                                               echo $VariableBajoRiesgo;
                                                                               }
                                                                             if ($imc >14.6 && $imc < 15.7) {
                                                                             echo $VariablePesoNormal; 
                                                                             }
                                                                             if ($imc >15.6 && $imc < 16.8) {
                                                                               echo $VariableSobrepesoRiesgo;
                                                                             }
                                                                             if ($imc > 16.9) {
                                                                               echo $VariableSobrepeso;
                                                                          
                                                                             }
                                                                             if ($imc >19.0) {
                                                                               echo $VariableObesidad;
                                                                             }
                                                                                   break;
                                                                          case "6":
                                                                                    if ($imc < 12.7) {
                                                                                     echo $VariableBajoPeso;
                                                                                     }
                                                                                     if ($imc >12.8 && $imc <14.7) {
                                                                                       echo $VariableBajoRiesgo;
                                                                                       }
                                                                                     if ($imc >14.8 && $imc < 15.7) {
                                                                                     echo $VariablePesoNormal; 
                                                                                     }
                                                                                     if ($imc >15.6 && $imc < 16.8) {
                                                                                       echo $VariableSobrepesoRiesgo;
                                                                                     }
                                                                                     if ($imc > 17) {
                                                                                       echo $VariableSobrepeso;
                                                                                  
                                                                                     }
                                                                                     if ($imc >19.2) {
                                                                                       echo $VariableObesidad;
                                                                                     }
                                                                                           break;
                                                                                     case "6.6":
                                                                                            if ($imc < 12.7) {
                                                                                             echo $VariableBajoPeso;
                                                                                             }
                                                                                             if ($imc >12.8 && $imc <14.7) {
                                                                                               echo $VariableBajoRiesgo;
                                                                                               }
                                                                                             if ($imc >14.8 && $imc < 15.7) {
                                                                                             echo $VariablePesoNormal; 
                                                                                             }
                                                                                             if ($imc >15.8 && $imc < 16.8) {
                                                                                               echo $VariableSobrepesoRiesgo;
                                                                                             }
                                                                                             if ($imc > 17.1) {
                                                                                               echo $VariableSobrepeso;
                                                                                          
                                                                                             }
                                                                                             if ($imc >19.5) {
                                                                                               echo $VariableObesidad;
                                                                                             }
                                                                                                   break;
                                                                                             case "7":
                                                                                                    if ($imc < 12.7) {
                                                                                                     echo $VariableBajoPeso;
                                                                                                     }
                                                                                                     if ($imc > 12.8 && $imc < 14.9) {
                                                                                                       echo $VariableBajoRiesgo;
                                                                                                       }
                                                                                                     if ($imc > 15.0 && $imc <= 16.0) {
                                                                                                     echo $VariablePesoNormal; 
                                                                                                     //$subnormal=1;
                                                                                                    // $normal = file_get_contents('../sugerencias/normal.php');
                                                                                                     // Imprime la URL contenida en pagina.php
                                                                                                     }
                                                                                                     if ($imc > 16.1 && $imc < 17.3) {
                                                                                                       echo $VariableSobrepesoRiesgo;
                                                                                                       //conveecion para traer  pagina 
                                                                                                      // $subobesidad=1;
                                                                                                      // $url = file_get_contents('../pruebas.php');
                                                                                                          // Imprime la URL contenida en pagina.php
                                                                                                    
                                                                                                     }
                                                                                                     if ($imc > 17.0) {
                                                                                                       echo $VariableSobrepeso;
                                                                                                      
                                                                                                     }
                                                                                                     if ($imc > 19.8) {
                                                                                                       echo $VariableObesidad;
                                                                                                     }
                                                                                                           break;
                                                                                              case "7.6":
                                                                                                      if ($imc < 12.8) {
                                                                                                        echo $VariableBajoPeso;
                                                                                                        }
                                                                                                        if ($imc > 12.7 && $imc < 14.9) {
                                                                                                          echo $VariableBajoRiesgo;
                                                                                                          }
                                                                                                        if ($imc > 15.1 && $imc <= 16.0) {
                                                                                                        echo $VariablePesoNormal; 
                                                                                                        }
                                                                                                        if ($imc > 16.1 && $imc < 17.4) {
                                                                                                          echo $VariableSobrepesoRiesgo;
                                                                                                        }
                                                                                                        if ($imc > 17.5) {
                                                                                                          echo $VariableSobrepeso;
                                                                                                          echo $imc;
                                                                                                        }
                                                                                                        if ($imc > 20.1) {
                                                                                                          echo $VariableObesidad;
                                                                                                        }
                                                                                                              break;
                                                                                                              case "8":
                                                                                                                if ($imc < 12.9) {
                                                                                                                  echo $VariableBajoPeso;
                                                                                                                  }
                                                                                                                  if ($imc > 13 && $imc < 15.3) {
                                                                                                                    echo $VariableBajoRiesgo;
                                                                                                                    }
                                                                                                                  if ($imc > 15.4 && $imc <= 16.3) {
                                                                                                                  echo $VariablePesoNormal; 
                                                                                                                  }
                                                                                                                  if ($imc > 16.4 && $imc < 17.6) {
                                                                                                                    echo $VariableSobrepesoRiesgo;
                                                                                                                  }
                                                                                                                  if ($imc > 17.7) {
                                                                                                                    echo $VariableSobrepeso;
                                                                                                                    echo $imc;
                                                                                                                  }
                                                                                                                  if ($imc > 20.6) {
                                                                                                                    echo $VariableObesidad;
                                                                                                                  }
                                                                                                                        break;
                                                                                                                          case "8.6":
                                                                                                                if ($imc < 13) {
                                                                                                                  echo $VariableBajoPeso;
                                                                                                                  }
                                                                                                                  if ($imc > 13.1 && $imc < 15.4) {
                                                                                                                    echo $VariableBajoRiesgo;
                                                                                                                    }
                                                                                                                  if ($imc > 15.5 && $imc <= 16.4) {
                                                                                                                  echo $VariablePesoNormal; 
                                                                                                                  }
                                                                                                                  if ($imc > 16.5 && $imc < 17.6) {
                                                                                                                    echo $VariableSobrepesoRiesgo;
                                                                                                                  }
                                                                                                                  if ($imc > 18) {
                                                                                                                    echo $VariableSobrepeso;
                                                                                                                    echo $imc;
                                                                                                                  }
                                                                                                                  if ($imc > 21) {
                                                                                                                    echo $VariableObesidad;
                                                                                                                  }
                                                                                                                        break;
                                                                                                                        case "9":
                                                                                                                          if ($imc < 13.1) {
                                                                                                                            echo $VariableBajoPeso;
                                                                                                                            }
                                                                                                                            if ($imc > 13.2 && $imc < 15.5) {
                                                                                                                              echo $VariableBajoRiesgo;
                                                                                                                              }
                                                                                                                            if ($imc > 15.6 && $imc <= 16.6) {
                                                                                                                            echo $VariablePesoNormal; 
                                                                                                                            }
                                                                                                                            if ($imc > 16.5 && $imc < 18.2) {
                                                                                                                              echo $VariableSobrepesoRiesgo;
                                                                                                                            }
                                                                                                                            if ($imc > 18.3) {
                                                                                                                              echo $VariableSobrepeso;
                                                                                                                              echo $imc;
                                                                                                                            }
                                                                                                                            if ($imc > 21.5) {
                                                                                                                              echo $VariableObesidad;
                                                                                                                            }
                                                                                                                                  break;
                                                                                                                                  case "9.6":
                                                                                                                                    if ($imc < 13.3) {
                                                                                                                                      echo $VariableBajoPeso;
                                                                                                                                      }
                                                                                                                                      if ($imc > 13.4 && $imc < 15.7) {
                                                                                                                                        echo $VariableBajoRiesgo;
                                                                                                                                        }
                                                                                                                                      if ($imc > 15.8 && $imc <= 16.7) {
                                                                                                                                      echo $VariablePesoNormal; 
                                                                                                                                      }
                                                                                                                                      if ($imc > 16.8 && $imc < 18.6) {
                                                                                                                                        echo $VariableSobrepesoRiesgo;
                                                                                                                                      }
                                                                                                                                      if ($imc > 18.7) {
                                                                                                                                        echo $VariableSobrepeso;
                                                                                                                                        echo $imc;
                                                                                                                                      }
                                                                                                                                      if ($imc > 22.0) {
                                                                                                                                        echo $VariableObesidad;
                                                                                                                                      }
                                                                                                                                            break;
                                                                                                                                            case "10":
                                                                                                                                              if ($imc < 13.5) {
                                                                                                                                                echo $VariableBajoPeso;
                                                                                                                                                }
                                                                                                                                                if ($imc > 13.6 && $imc < 15.9) {
                                                                                                                                                  echo $VariableBajoRiesgo;
                                                                                                                                                  }
                                                                                                                                                if ($imc > 16 && $imc <= 17) {
                                                                                                                                                echo $VariablePesoNormal; 
                                                                                                                                                }
                                                                                                                                                if ($imc > 17.1 && $imc < 18.9) {
                                                                                                                                                  echo $VariableSobrepesoRiesgo;
                                                                                                                                                }
                                                                                                                                                if ($imc > 19.0) {
                                                                                                                                                  echo $VariableSobrepeso;
                                                                                                                                                  echo $imc;
                                                                                                                                                }
                                                                                                                                                if ($imc > 22.6) {
                                                                                                                                                  echo $VariableObesidad;
                                                                                                                                                }
                                                                                                                                                      break;
                                                                                                                                                      case "11":
                                                                                                                                                        if ($imc < 13.9) {
                                                                                                                                                          echo $VariableBajoPeso;
                                                                                                                                                          }
                                                                                                                                                          if ($imc > 14 && $imc < 16.5) {
                                                                                                                                                            echo $VariableBajoRiesgo;
                                                                                                                                                            }
                                                                                                                                                          if ($imc > 16.6 && $imc <= 17.6) {
                                                                                                                                                          echo $VariablePesoNormal; 
                                                                                                                                                          }
                                                                                                                                                          if ($imc > 17.7 && $imc < 19.8) {
                                                                                                                                                            echo $VariableSobrepesoRiesgo;
                                                                                                                                                          }
                                                                                                                                                          if ($imc > 19.9) {
                                                                                                                                                            echo $VariableSobrepeso;
                                                                                                                                                            echo $imc;
                                                                                                                                                          }
                                                                                                                                                          if ($imc > 23.7) {
                                                                                                                                                            echo $VariableObesidad;
                                                                                                                                                          }
                                                                                                                                                                break;
                                                                                                                                                                case "12":
                                                                                                                                                                  if ($imc < 14.4) {
                                                                                                                                                                    echo $VariableBajoPeso;
                                                                                                                                                                    }
                                                                                                                                                                    if ($imc > 14.5 && $imc < 17.4) {
                                                                                                                                                                      echo $VariableBajoRiesgo;
                                                                                                                                                                      }
                                                                                                                                                                    if ($imc > 17.5 && $imc <= 18.5) {
                                                                                                                                                                    echo $VariablePesoNormal; 
                                                                                                                                                                    }
                                                                                                                                                                    if ($imc > 18.6 && $imc < 20.7) {
                                                                                                                                                                      echo $VariableSobrepesoRiesgo;
                                                                                                                                                                    }
                                                                                                                                                                    if ($imc > 20.8) {
                                                                                                                                                                      echo $VariableSobrepeso;
                                                                                                                                                                      echo $imc;
                                                                                                                                                                    }
                                                                                                                                                                    if ($imc > 25) {
                                                                                                                                                                      echo $VariableObesidad;
                                                                                                                                                                    }
                                                                                                                                                                          break;




                                                                                                                                                                          
                                                                                                        }
                                                                                                        echo $imc;
                                                                                                        

/*else{
echo '<div class="alert alert-success" role="alert">
<h4 class="alert-heading">Aun no se encuetran Datos!</h4>

<hr>
<p class="mb-0">Los datos se iran graficando de acurdo a los datos grabados</p>
</div>';
}*/
//datos varibale de IMC

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
        borderWidth: 3
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
 
<?php
//decalracion de pagina traida de un if
//echo $normal
?>