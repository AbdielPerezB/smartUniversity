<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
</head>
<body>
  <nav class="navbar navbar-expand-md navbar-dark bg-success">
    <!-- navbar->clase para que booystrap sepa que es un nav -->
    <!-- navbar-expand-md->el menu colapsa en mediano -->
    <div class="container-fluid">
      <!-- Bootstrap siempre recomienda un container fluid para el nav -->

      <!-- icono -->
      <a class="navbar-brand" href="">
        <!-- navbar-brand es la clase para el icono con una imagen por ejemplo y nombre de la empresa -->
        <img src="img/logo.jpg" alt="logo" width="100">
        <span>BUAP Inteligente</span>
      </a>

      <!-- boton del menu -->
      <!-- en data-bs-target va el id del div donde se almacenarán todos los elementos que se despliegan en el botón -->
      <button class="navbar-toggler" 
      type="button" 
      data-bs-toggle="collapse" 
      data-bs-target="#menu"
      aria-controls="navbarSupportedContent" 
      aria-expanded="false" 
      aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Elementos del menpu colapsable -->
      <div class="collapse navbar-collapse" id="menu">
        <ul class="navbar-nav me-auto">
          <li class="nav-item"><a class="nav-link active" href="">Inicio</a></li>
          <li class="nav-item"><a class="nav-link" href="">Precio</a></li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#"
            id="navbarDropdown"
            role="button"
            data-bs-toggle="dropdown">Servicios</a>
            <!-- Creando un submenu. POr eso se les pone dropdown, dropdown-toggle, id, role y data-bs-toggle-->
            <ul class="dropdown-menu bg-secondary"> <!-- le indicamos que es un submenu con dropdown-menu -->
              <!-- A continuación tambipen le ponemos las clases a las etiquetas a -->
              <li><a class="dropdown-item" href="">Renta</a></li>
              <li><a class="dropdown-item" href="">Equipos</a></li>
              <li><a class="dropdown-item" href="">Networking</a></li>
            </ul>
          </li>
        </ul>
        <!-- Linea para que se vea bonito el colapsable -->
        <hr class="text-white-50"/>
      </div>
    </div>
  </nav>
 

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>