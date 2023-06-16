
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/vnd.microsoft.icon">
    <title>Universidad Inteligente</title>
    
    <style>
        .navbar-inverse .navbar-brand {
            display: flex;
            align-items: center;
            padding: 5px;
        }
        .navbar-brand img {
            height: 100%;
            margin-right: 20px;
        }
    </style>
</head>
<body>
    <div class="main-container">
        <nav class="navbar navbar-expand-md navbar-light bg-light">
            <div class="container-fluid">
                <div class="d-flex justify-content-between d-block">
                    <a class="navbar-brand fs-4" href="#"><img src="img/smartuniversitycomplete.jpg" width="200px" height="" style="position:relative;"></a>
                </div>

                <!--Botón para la responsividad del nav-->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent"
                        aria-expanded="false"
                        aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-end me-5" id="navbarSupportedContent">
                    <ul class="navbar-nav mb-2 mb-lg-0">
                        <li class="nav-item dropdown ">
                            <a class="nav-link active dropdown-toggle" href="#"
                            id="navbarDropdown"
                            role="button"
                            data-bs-toggle="dropdown"><i class="fa-solid fa-user pe-1 color-buap"></i>Mi perfil</a>
                            <!-- Creando un submenu. POr eso se les pone dropdown, dropdown-toggle, id, role y data-bs-toggle-->
                            <ul class="dropdown-menu bs-success-text-emphasis"> <!-- le indicamos que es un submenu con dropdown-menu -->
                                <!-- A continuación tambipen le ponemos las clases a las etiquetas a -->
                                <li><a class="dropdown-item" href="">Mi perfil</a></li>
                                <li><a class="dropdown-item" href="">Ver usuarios</a></li>
                                <li><a class="dropdown-item" href="./../../cerrar_sesion.php">Cerrar sesión</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container">
            <!-- Aqui va el contenido -->
            
        </div>

    </div>

    <!-- scripts de jquery -->
    <script src="./../../js/jquery-3.6.4.js"></script>
    <!-- scripts del bootstrap -->
    <script src="js/bootstrap2.bundle.min.js"> </script>
</body>
</html>