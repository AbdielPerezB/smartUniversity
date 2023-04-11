<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/vnd.microsoft.icon">
    <style>
        .fondo
        {
            background-image: url(img/fondo.png);
            background-size: 100%;
            background-repeat: no-repeat, no-repeat;
            background-color: #00385c;
        }
        .panel
        {
            background-color: white;
            padding: 10px;
            margin-top: 170px;
            border-radius: 7px;
        }
    </style>
</head>
<body class="fondo">
    <div>

    </div>
<div class="container">
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
            <div class="panel">
                <form action="valida.php" method="post">
                    <div class="mb-3">
                        <label for="user" class="form-label">Email:</label>
                        <input type="email" class="form-control" id="user" name="login">
                    </div>
                    <div class="mb-3">
                        <label for="pass" class="form-label">Password:</label>
                        <input type="password" class="form-control" id="pass" name="pass">
                    </div>
                    <div class="mb-3 d-grid">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-ms-4"></div>
    </div>
</div>
</body>
</html>