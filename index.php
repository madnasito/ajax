<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="jquery-3.6.0.min.js"></script>
    <title>Ajax</title>
</head>
<body>
    <script>
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
        })
        return false;
        }
    </script>
    <form method="post" onsubmit="return enviar();">
        <input type="text" name="nombre" placeholder="Nombre" id="nombre">
        <input type="text" name="apellido" placeholder="Apellido" id="apellido">
        <input type="submit" value="Enviar">
    </form>

    <p id="respa"></p>
</body>
</html>