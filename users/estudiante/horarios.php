<?php
//include "./../../seguridad.php";
//include "./verificarlogin.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudiante</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="./../../css/bootstrap.min.css">
    <!-- My css -->
    <link rel="stylesheet" href="./../../css/styleInicio.css" />
    <!-- Iconos del fontawesome -->
    <script src="https://kit.fontawesome.com/66c636a4b6.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="main-container d-flex">
        <?php include "./../../side_nav.php"; ?>

        <!-- Content -->
        <div class="content ">
            <!-- navbarHorizontal -->
            <?php include "./../../nav.php"; ?>
            <div class="container">
                <!-- Aqui va el contenido -->
                <h2>Horarios</h2>
                
            </div>

        </div>

    </div>

    <!-- Agregamos el js de bootstrap -->
    <script src="./../../js/bootstrap2.bundle.min.js"> </script>
    <!-- scripts de jquery -->
    <script src="./../../js/jquery-3.6.4.js"></script>
    <script src="./../../js/iniciojs.js"></script>

    <script>
    $(document).ready(function(){
        $("#li-horarios").addClass('active')

        $("li#li-inicio a").on('click' , function(){
            $(this).attr("href", "index.php")
        });

        $("li#li-calles a").on('click' , function(){
            $(this).attr("href", "calles.php")
        });

        $("li#li-lobobus a").on('click' , function(){
            $(this).attr("href", "lobobus.php")
        });

        $("li#li-lobobici a").on('click' , function(){
            $(this).attr("href", "lobobici.php")
        });

        $("li#li-horarios a").on('click' , function(){
            $(this).attr("href", "horarios.php")
        });
    });
</script>
</body>

</html>