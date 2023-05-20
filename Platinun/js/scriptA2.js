// Add Record
function addRecord() {
    // get values

    var Nombre = $("#Nombre").val();
    var usuario = $("#usuario").val();
    var Contraseña = $("#Contraseña").val();
    var newContraseña = $("#newContraseña").val();
    var t_usuario = $("#t_usuario").val();
    Nombre= document.getElementById("Nombre").value;
    usuario= document.getElementById("usuario").value;
    Contraseña= document.getElementById("Contraseña").value;
    newContraseña= document.getElementById("newContraseña").value;
    t_usuario = document.getElementById("t_usuario").value;
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
        usuario: usuario,
        Contraseña: Contraseña,
        t_usuario: t_usuario
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
          
  

        // clear fields from the popup
        $("#Nombre").val("");
        $("#Usuario").val("");
        $("#Contraseña").val("");
        $("#newContraseña").val("");
        $("#t_usuario").val("");
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
            $("#update_idalumno").val(user.idalumno);
            $("#update_codalumno").val(user.codalumno);
            $("#update_obs").val(user.obs);
        }
    );
    // Open modal popup
    $("#update_user_modal").modal("show");
}

function UpdateUserDetails() {
    // get values
    var idalumno = $("#update_idalumno").val();
    var codalumno = $("#update_codalumno").val();
    var obs = $("#update_obs").val();

    // get hidden field value
    var id = $("#hidden_user_id").val();

    // Update the details by requesting to the server using ajax
    $.post("ajaxAdmin/updateUserDetails.php", {
            id: id,
            idalumno: idalumno,
            codalumno: codalumno,
            obs: obs
        },
        function (data, status) {
            // hide modal popup
            $("#update_user_modal").modal("hide");
            // reload Users by using readRecords();
            readRecords();
        }
    );
}

$(document).ready(function () {
    // READ recods on page load
    readRecords(); // calling function
});