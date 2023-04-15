<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Título de tu página</title>

  <!-- Agrega los archivos de Bootstrap -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css" integrity="sha512-kzU6QoU6xCWBLPQoEi7CnRnALeVgMDwKVseFzspn/z14rXyImP8IqEKs4axNlHt4Z4sSTs3tbT2TtTc0tRacJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/js/bootstrap.min.js" integrity="sha512-njQ2zhNeBdbJZJ+enEsGczl16X9zrwF1aeTUfuMNG+p+1pLJ4ZquhPq3QHffTcTn+acRyJ+lTRtT2ziJTEixVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</head>

<body>

<!-- Crea un botón "dropdown" con el botón principal y una lista de elementos desplegables -->
<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
    Botón principal :
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <li><a class="dropdown-item" href="#">Botón 1</a></li>
    <li><a class="dropdown-item" href="#">Botón 2</a></li>
    <li><a class="dropdown-item" href="#">Botón 3</a></li>
  </ul>
</div>

</body>
</html>
