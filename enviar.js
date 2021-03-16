function enviar() {
    var nombre = document.getElementById("nombre").value;
    var apellido = document.getElementById("apellido").value;

    var dataEn = 'nombre=' + nombre + '&apellido=' + apellido;

    $.ajax({
        type: 'post',
        url: 'send.php',
        data: dataEn,
        success: function(resp) {
            $('#respa').html(resp)
        }
    });
    return false;
}