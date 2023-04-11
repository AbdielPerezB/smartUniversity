<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Caseta</title>
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
                <div class="mb-3">
                    <select class="form-select" id="id" name="id">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="nom" class="form-label">Nombre:</label>
                    <input type="text" class="form-control" id="nom" placeholder="Nombre">
                </div>
                <div class="mb-5 d-grid">
                    <button class="btn btn-primary" onclick="">Modificar</button>
                </div>

                <div class="mb-3 d-grid">
                <a class="btn btn-success mb-3" href="lobobici.php" role="button">Regresar</a>
                </div>
            </div>
        
        </div>
        <div class="col-ms-2"></div>
    </div>
</div>
</body>
</html>