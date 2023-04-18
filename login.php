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
            margin-top: 100px;
            border-radius: 7px;
        }
    </style>
</head>
<body class="fondo">
    <div class="container">
        <div class="row">
            <div class="col-sm-0 col-md-3 col-lg-4 col-xl-4"></div>
            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
                <div class="panel">
                    <!-- <form action="valida.php" method="post"> -->
                    <form  id="form-login" method="post">
                        <div class="d-flex justify-content-center">
                            <img src="img/perfil2.png" style="max-width: 150px">
                        </div>
                        <div class="input-group mt-4">
                            <div class="input-group-text bg-primary">
                                <img src="img/username-icon.svg" alt="username-icon" style="height: 1rem">
                            </div>
                            <input class="form-control bg-light" type="text" placeholder="Email" name="Email" id="email">
                        </div>
                        <div class="input-group mt-1">
                            <div class="input-group-text bg-primary">
                                <img src="img/password-icon.svg" alt="password-icon" style="height: 1rem">
                            </div>
                            <input class="form-control bg-light" type="password" placeholder="Password" name="Password" id="pass" >
                        </div>
                        <button class="btn btn-primary w-100 mt-4 form-control" type="submit" name="iniciar">Iniciar Sesión</button>
                    </form>
                </div>
            </div>
            <div class="col-sm-0 col-md-3 col-lg-4 colxl-4"></div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
      integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
      crossorigin="anonymous"></script>
    
    <script src="js/bootstrap.min.js"></script>
    <script src="js/login.js"></script>
</body>
</html>
