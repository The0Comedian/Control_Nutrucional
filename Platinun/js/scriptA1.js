// Add Record
function addRecord() {
    // get values
    var Nombre = $("#Nombre").val();
    var Usuario = $("#Usuario").val();
    var Contraseña = $("#Contraseña").val();
    var newContraseña = $("#newContraseña").val();
    var t_usuario = $("#t_usuario").val();
    Nombre= document.getElementById("Nombre").value;
    Usuario= document.getElementById("Usuario").value;
    Contraseña= document.getElementById("Contraseña").value;
    newContraseña= document.getElementById("newContraseña").value;

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
    $.post("ajaxAdmin/addRecord.php", {
        Nombre: Nombre,
        Usuario: Usuario,
        Contraseña: Contraseña,
        t_usuario: t_usuario
    
    }
    , function (data, status) {
        // close the popup
        $("#add_new_record_modal").modal("hide");
        Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'Cuenta agregada con Exito',
            showConfirmButton: false,
            timer: 1500
            
           
          })
        
        // read records again   
        readRecords();

        // clear fields from the popup
        $("#Nombre").val("");
        $("#Usuario").val("");
        $("#Contraseña").val("");
        
    });
}
}

// READ records
function readRecords() {
    $.get("ajaxAdmin/readRecord.php", {}, function (data, status) {
        $("#records_content").html(data);
    });
}


function DeleteUser(id) {
    var conf = confirm("¿Está seguro, realmente desea eliminar el registro?");
    if (conf == true) {
        $.post("ajaxAdmin/deleteUser.php", {
                id: id
            },
            function (data, status) {
                // reload Users by using readRecords();
                readRecords();
            }
        );
    }
}

function GetUserDetails(id) {
    // Add User ID to the hidden field for furture usage
    $("#hidden_user_id").val(id);
    $.post("ajaxAdmin/readUserDetails.php", {
            id: id
        },
        function (data, status) {
            // PARSE json data
            var user = JSON.parse(data);
            // Assing existing values to the modal popup fields
            $("#update_Usuario").val(user.Usuario);
     
      
          
        }
    );
    // Open modal popup
    $("#update_user_modal").modal("show");
}

function UpdateUserDetails() {
    // get values
    var Usuario = $("#update_Usuario").val();
    var Contraseña = $("#update_Contraseña").val();
    var newContraseña = $("#update_newContraseña").val();


    // get hidden field value
    var id = $("#hidden_user_id").val();

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
    
    // Update the details by requesting to the server using ajax
    $.post("ajaxAdmin/updateUserDetails.php", {
            id: id,
            Usuario: Usuario,
            Contraseña: Contraseña
        },
        function (data, status) {
            // hide modal popup
            $("#update_user_modal").modal("hide");
            // reload Users by using readRecords();
            readRecords();
        }
    );
}
}
$(document).ready(function () {
    // READ recods on page load
    readRecords(); // calling function
});