<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cerrar Caseta</title>
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
    </style>
</head>

<body class="fondo">
    <!-- <div class="container col-sm-5 mb-3 mt-3"> -->
    <div class="container col-sm-5 col-xs-12 mb-3 mt-3">
        <?php
        include("menu.php");
        include("modelo/conexion_bd.php");
        // include("class/controlador_abrir_lobobici.php");
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
                        </tr>

                        <?php
                        $sql = "SELECT * from lobobicis";
                        $result = mysqli_query($conexion, $sql);

                        while ($mostrar = mysqli_fetch_array($result)) {
                            ?>
                            <?php 
                                if ($mostrar["estado"] == 0) {
                                echo '
                                <tr>
                                    <td>' . $mostrar["id"] . '</td>
                                    <td>' . $mostrar["nom"] . '</td>
                                    <td>Abierta</td>
                                </tr>';
                                
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
                        function cerrar() {
                            location.href = "lobobicic.php"
                        }
                    </script>
                </body>

</html>