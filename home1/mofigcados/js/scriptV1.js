// Add Record


function addRecord() {
    // get values
    var nombres, apellido_Paterno ;
    nombres= document.getElementById("nombres").value;
    apellido_Paterno= document.getElementById("apellido_Paterno").value;
    apellido_Materno= document.getElementById("apellido_Materno").value;
 
   
      
    
    if (nombres==="" || apellido_Paterno==="" || apellido_Materno==="" ){
        
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Algun Campo esta vacio'    
          })
          return false;
    } else 
    {
      
        

    // get values
    var nombres = $("#nombres").val();
    var apellido_Paterno = $("#apellido_Paterno").val();
    var apellido_Materno = $("#apellido_Materno").val();

   
    

    

    // Add record
    $.post("ajax/addRecord.php", {
        nombres: nombres,
        apellido_Paterno: apellido_Paterno,
        apellido_Materno: apellido_Materno
    
        
    }, function (data, status) {
        // close the popup
  
      
        Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'Datos Guardados',
            showConfirmButton: false,
            timer: 1500
          })

        // clear fields from the popup
      
        $("#nombres").val("");
        $("#apellido_Paterno").val("");
        $("#apellido_Materno").val("");
     
        
    });
}
}

// READ records
function readRecords() {
    $.get("ajax/readRecord.php", {}, function (data, status) {
        $("#records_content").html(data);
    });
}
