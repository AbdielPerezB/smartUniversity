<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/vnd.microsoft.icon">
    <style>
        .contenedor
        {
            padding-top: 50px;
            padding-right: 20px;
            padding-left: 20px;
            padding-bottom: 50px;
            box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;
        }
        .fondo
        {
            
        }

    </style>
</head>
<body class="fondo">
<div class="container">
    <div class="row">
        <div class="col-sm-10">
            <div class="btn-group">
                <button id="btn1" type="button" class="btn btn-primary"onClick="agregar()">Agregar Caseta</button>
                <button id="btn2" type="button" class="btn btn-primary"onClick="modificar()">Modificar Caseta</button>
                <button id="btn3" type="button" class="btn btn-primary"onClick="eliminar()">Eliminar Caseta</button>
            </div>
        </div>
        <div class="col-sm-2 text-end">
            <button type="button" class="btn btn-dark" onClick="salir()">salir</button>
        </div>
    </div>
</div>
</body>
</html>
