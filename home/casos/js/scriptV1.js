// Add Record
function addRecord() {
    // get values
    nombre= document.getElementById("nombre").value;
 
    if ( nombre===""){
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Las contraseñas no coinciden'    
          })
          return false;

    }
    else 
    {
    var nombre = $("#nombre").val();
    var apelli_paterno = $("#apelli_paterno").val();
    var codmatri = $("#codmatri").val();
    var obs = $("#obs").val();
    var sexo = $("#sexo").val();
    var fecha_Nacimiento = $("#fecha_Nacimiento").val();
    var edads = $("#edads").val();

    // Add record
    $.post("ajax/addRecord.php", {
        nombre: nombre,
        apelli_paterno: apelli_paterno,
        codmatri: codmatri,
		obs: obs,
        sexo: sexo,
        fecha_Nacimiento: fecha_Nacimiento,
        edads: edads
    }, function (data, status) {
        // close the popup
        Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'Cuenta agregada con Exito',
            showConfirmButton: false,
            timer: 1500
            
           
          })
        $("#add_new_record_modal").modal("hide");
      
        // read records again
        readRecords();

        // clear fields from the popup
        $("#nombre").val("");
        $("#").val("");
        $("#codmatri").val("");
        $("#obs").val("");
        $("#sexo").val("");
        $("#fecha_Nacimiento").val("");
        $("#edads").val("");
    });
}
}
// READ records
function readRecords() {
    $.get("ajax/readRecord.php", {}, function (data, status) {
        $("#records_content").html(data);
    });
}


function DeleteUser(id) {
    var conf = confirm("¿Está seguro, realmente desea eliminar el registro?");
    if (conf == true) {
        $.post("ajax/deleteUser.php", {
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
    $.post("ajax/readUserDetails.php", {
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
    $.post("ajax/updateUserDetails.php", {
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