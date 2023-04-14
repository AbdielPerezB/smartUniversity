<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Caseta</title>
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
        <div class="col-sm-2"></div>
        <div class="col-sm-8 ">
            <div class="d-grid contenedor">
                <h2 class = "titulo"> Agregar Caseta</h2>
                <?php
                    include ("class/conexion.php");
                ?>
                <div class="mb-3 mt-3">
                    <label for="nom" class="form-label">Nombre:</label>
                    <input type="text" class="form-control" id="nom" name="nom" placeholder="Nombre">
                </div>
                <div class="mb-3 mt-3">
                    <label for="lt" class="form-label">Latitud:</label>
                    <input type="text" class="form-control" id="lt" name="lt" placeholder="Lt">
                </div>
                <div class="mb-3 mt-3">
                    <label for="lg" class="form-label">Longitud:</label>
                    <input type="text" class="form-control" id="lg" name="lg" placeholder="Lg">
                </div>
                <div class="mb-3 mt-3">
                    <label for="estado" class="form-label">Estado:</label>
                    <input type="text" class="form-control" id="estado" name="estado" placeholder="Estado">
                </div>
                <div class="mb-5 d-grid">
                    <button type="button" class="btn btn-primary form-control" onclick="enviar()">Crear</button>
                    <!-- <input class = "boton" type = "submit" value = "Crear" name = "crear"> -->
                </div>
                
                <div class="mb-3 d-grid">
                    <a class="btn btn-success mb-3" href="lobobici.php" role="button">Regresar</a>
                </div>
            </div>
        
        </div>
        <div class="col-ms-2"></div>
    </div>
</div>
    <script src="js/jquery-3.6.3.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script>

        function enviar(){
            var nom = $("#nom").val();
            var lt = $("#lt").val();
            var lg = $("#lg").val();
            var estado = $("#estado").val();

            var error = "";

            if (nom == "")
            {
                error += "falta el nombre\n";
            }
            if (lt == "")
            {
                error += "falta latitud\n";
            }
            if (lg == "")
            {
                error += "falta longitud\n";
            }
            if (estado == "")
            {
                error += "falta el estado\n";
            }

            if (error == "")
            {
                $nom = $_POST["nom"];
                $lt = $_POST["lt"];
                $lg = $_POST["lg"];
                $estado = $_POST["estado"];

                $sql = $conexion->query("insert into lobobicis(nom,lt,lg,estado) values ('" . $this->llave($id) . "','" . $nom ."','" . $lt . "','" . $lg ."','" . $estado ."')");

                if ($sql == 1){
                    echo '<div class = "alerta">Usuario registrado correctamente</div>';
                }else{
                    echo '<div class = "alerta">Error al registrar</div>';
                }

                
            }
            else
            {
                alert(error);
            }
            
        }
    </script>
</body>
</html>