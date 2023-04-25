<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciov2</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- My css -->
    <link rel="stylesheet" href="css/styleInicio.css" />
    <!-- Iconos del fontawesome -->
    <script src="https://kit.fontawesome.com/66c636a4b6.js" crossorigin="anonymous"></script>

</head>

<body>
    <div class="main-container d-flex">
        <?php include "./frontend/side_nav.php"; ?>

        <!-- Content -->
        <div class="content ">
            <!-- navbarHorizontal -->
            <?php include "./frontend/nav.php"; ?>
            <div class="container">
                <!-- Aqui va el contenido -->
                
            </div>

        </div>

    </div>

    <!-- Agregamos el js de bootstrap -->
    <script src="js/bootstrap2.bundle.min.js"> </script>
    <!-- scripts de jquery -->
    <script src="js/jquery-3.6.4.js"></script>
    <script src="js/iniciojs.js"></script>

</body>

</html>