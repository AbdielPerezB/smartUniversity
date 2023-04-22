<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Caseta</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/vnd.microsoft.icon">
    <style>
        .contenedor {
            padding-top: 50px;
            padding-right: 20px;
            padding-left: 20px;
            padding-bottom: 50px;
            box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;
        }

        .fondo {}
    </style>
</head>

<body class="fondo">
    <div class="container col-sm-5 mb-3 mt-3">
        <?php
        include("menu.php");
        include("lista_desp.php");
        // include("modelo/conexion_bd.php");
        // include("class/controlador_registrar_lobobicis.php");
        ?>
        <div class="row">
            <form method="post" action="">
                <div class="form-floating mb-3 mt-3">
                    <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                        <?php echo $option_del_select; ?>
                    </select>
                    <label for="floatingSelect">Seleccione una Caseta</label>
                </div>

                <div class="mb-5 d-grid">
                    <button class="btn btn-primary" onclick="">Eliminar</button>
                </div>


                <div class="col-ms-2"></div>
            </form>
        </div>
    </div>
    </script>
    <script>
        $(document).ready(function () {
            $("#btn1").attr("disable", true);
        });
        function salir() {
            location.href = "salir.php"
        }
        function agregar() {
            location.href = "lobobicima.php"
        }
        function modificar() {
            location.href = "lobobicim.php"
        }
        function eliminar() {
            location.href = "lobobicime.php"
        }
    </script>
    </script>
</body>

</html>