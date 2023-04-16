<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciov2</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <!-- My css -->
    <link rel="stylesheet" href="css/styleInicio.css"/>
    <!-- Iconos del fontawesome -->
    <script src="https://kit.fontawesome.com/66c636a4b6.js" crossorigin="anonymous"></script>

</head>
<body>
    <div class="main-container d-flex">
        <!-- nav -->
        <div class="sidebar" id="side_nav">
            <div class="header-box px-2 pt-3 pb-4 d-flex justify-content-between">
                <h1 class="fs-4">
                    <span class="bg-white text-dark rounded shadow px-2 me-2">BUAP</span>
                    <span class="text-white">Inteligente</span>
                </h1>
                <button class="btn d-md-none d-block close-btn px-1 py-0 text-white">
                    <i class="fa-solid fa-bars-staggered"></i>
                </button>
            </div>
            <ul class="list-unstyled px-2">
                <li class="active">
                    <a href="#" class="text-decoration-none px-3 py-2 d-block"><i class="fa-solid fa-house me-1"></i></i>Inicio</a>
                </li>
                <li class="">
                    <a href="#" class="text-decoration-none px-3 py-2 d-block"><i class="fa-solid fa-road me-1"></i>Dirección de calles</a>
                </li>
                <li class="">
                    <a href="#" class="text-decoration-none px-3 py-2 d-block"><i class="fa-solid fa-bus-simple me-1"></i>Lobobus</a>
                </li>
                <li class="">
                    <a href="#" class="text-decoration-none px-3 py-2 d-block"><i class="fa-solid fa-person-biking me-1"></i>Lobobici</a>
                </li>
                <li class="">
                    <a href="#" class="text-decoration-none px-3 py-2 d-block"><i class="fa-solid fa-chalkboard-user me-1"></i>Horarios de clases</a>
                </li>
            </ul>
            <hr class="text-white-50"/>
        </div>

        <!-- Content -->
        <div class="content ">
            <!-- navbarHorizontal -->
            <nav class="navbar navbar-expand-md navbar-light bg-light">
                <div class="container-fluid">
                    <div class="d-flex justify-content-between d-md-none d-block">
                        <button class="btn px-1 py-0 open-btn me-2"><i class="fa-solid fa-bars-staggered"></i></button>
                        <a class="navbar-brand fs-4" href="#"><span class="bg-buap rounded px-2 py-0 text-white">BI</span></a>
                    </div>
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
                                    <li><a class="dropdown-item" href="">Cerrar sesión</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
              </nav>
              <div class="container">
                
              </div>
        
        </div>
        
    </div>
    
    <!-- Agregamos el js de bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <!-- scripts de jquery -->
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
    <script src="js/iniciojs.js"></script>

</body>
</html>