// Add Record

  
function addRecord() {
    // get values
    var Nombre = $("#Nombre").val();
    var Usuario = $("#Usuario").val();
    var Contraseña = $("#Contraseña").val();
    var newContraseña = $("#newContraseña").val();
    Nombre= document.getElementById("Nombre").value;
    Usuario= document.getElementById("Usuario").value;
    Contraseña= document.getElementById("Contraseña").value;
    newContraseña= document.getElementById("newContraseña").value;
    
    
    var expReg= /^[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$/;
    var esValido= expReg.test(Usuario);
    if (esValido==false){
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Correo invalido'    
          })
          return false;
    } 

    if (Nombre === "" || !/^[A-Za-z]+$/.test(Nombre)) {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'El campo Nombre solo debe contener letras'   
          })
          return false;

    } 
    if ( Contraseña===""){
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Todos los capos son obligatorios'    
          })
          return false;

    }
    if ( Contraseña!=newContraseña){
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Las contraseñas no coinciden'    
          })
          return false;

    }
    else 
    {
    

    // Add record
    $.post("ajax/addRecord.php", {
        Nombre: Nombre,
        Usuario: Usuario,
        Contraseña: Contraseña
		
    }, function (data, status) {
        // close the popup
        $("#add_new_record_modal").modal("hide");
    
      
        Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'Cuenta agregada con Exito',
            showConfirmButton: false,
            timer: 1500
            
           
          })
          
          setTimeout(()=>{
            location.href ="../index.php"
          },2000);
           // read records again
       

        // clear fields from the popup
        $("#Nombre").val("");
        $("#Usuario").val("");
        $("#Contraseña").val("");
        $("#newContraseña").val("");
    });
}
}

// READ records
function readRecords() {
    $.get("ajax/readRecord.php", {}, function (data, status) {
        $("#records_content").html(data);
    });
}
