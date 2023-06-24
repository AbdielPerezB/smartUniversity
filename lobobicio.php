<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abrir Caseta</title>
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

        td {
            font-size: 16px;
        }

        .largo-btn {
            width: 80px;
        }

        .table-caption {
            text-align: center;
        }
    </style>
</head>

<body class="fondo">
    <div class="container col-sm-5 mb-3 mt-3">
        <?php
        include("menu.php");
        include("modelo/conexion_bd.php");

        ?>
        <div class="row">
            <form method="post" action="">

                <body>
                    <br>
                    
                    <table class="table">

                        <tr>

                            <td><strong>Id</strong></td>
                            <td><strong>Caseta</strong></td>
                            <td><strong>Estado</strong></td>
                            <td></td>
                        </tr>

                        <?php
                        $sql = "SELECT * from lobobicis";
                        $result = mysqli_query($conexion, $sql);
                        // $sqloc = "update lobobicis set estado =$estado where id=$id";
                        while ($mostrar = mysqli_fetch_array($result)) {
                            ?>
                            <?php
                            if ($mostrar["estado"] == 1) {
                                echo '
                                <tr>
                                    <td>' . $mostrar["id"] . '</td>
                                    <td>' . $mostrar["nom"] . '</td>
                                    <td>Abierta</td>
                                    <td><a href="status.php?id=' . $mostrar["id"] . '&estado=0" class="btn btn-success largo-btn">Cerrar</a></td
                                </tr>                 
                                ';
                            } else {
                                echo '
                                <tr>
                                    <td>' . $mostrar["id"] . '</td>
                                    <td>' . $mostrar["nom"] . '</td>
                                    <td>Cerrada</td>
                                    <td><a href="status.php?id=' . $mostrar["id"] . '&estado=1" class="btn btn-danger largo-btn">Abrir</a></td
    
                                </tr>
                                ';
                            }
                            ?>
                            <?php
                        }
                        ?>
                    </table>

                    <script src="js/jquery-3.6.3.min.js"></script>
                    <script src="js/bootstrap.js"></script>
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
                        function abrir() {
                            location.href = "lobobicio.php"
                        }
                    
                    </script>
                </body>

</html>