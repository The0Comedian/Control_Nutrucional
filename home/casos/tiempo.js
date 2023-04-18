function readRecords() {
    $.get("grafica2.php", {}, function (data, status) {
        $("#records_content").html(data);

        
    });
}