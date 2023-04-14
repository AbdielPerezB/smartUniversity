<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/vnd.microsoft.icon">
    <style>
        .fondo {
            background-image: url(img/fondo.png);
            background-size: 100%;
            background-repeat: no-repeat;
            background-color: #00385c;
        }
        .panel {
            background-color: white;
            padding: 10px;
            margin-top: 170px;
            border-radius: 7px;
        }
    </style>
</head>
<body class="fondo">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-12"></div>
            <div class="col-sm-4 col-12">
                <div class="panel">
                    <form action="valida.php" method="post">
                        <div class="d-flex justify-content-center">
                            <img src="img/perfil2.png" style="max-width: 150px">
                        </div>
                        <div class="input-group mt-4">
                            <div class="input-group-text bg-primary">
                                <img src="img/username-icon.svg" alt="username-icon" style="height: 1rem">
                            </div>
                            <input class="form-control bg-light" type="text" placeholder="Email" name="Email" required>
                        </div>
                        <div class="input-group mt-1">
                            <div class="input-group-text btn-primary">
                                <img src="img/password-icon.svg" alt="password-icon" style="height: 1rem">
                            </div>
                            <input class="form-control bg-light" type="password" placeholder="Password" name="Password" required>
                        </div>
                        <button class="btn btn-primary text-white w-100 mt-4 fw-semibold shadow-sm" type="submit">
                            Iniciar sesión
                        </button>
                    </form>
                </div>
            </div>
            <div class="col-sm-4 col-12"></div>
        </div>
    </div>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
