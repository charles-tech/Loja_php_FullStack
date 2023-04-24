<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="estilo.css">

    <title>Login</title>
    <style>
    body {

        background-color: #f2f2f2;
    }

    .login {
        width: 100%;
        height: 100vh;
        align-items: center;
        justify-content: center;
        margin-top: 10%
    }
    </style>
</head>

<body>
    <div class="login">


        <div class="containe">

            <div class="row">

                <div class="col-lg-4 offset-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-body">
                                <h3>Acesso Restrito</h3>
                            </div>
                            <form action="login.php" method="POST">
                                <div>
                                    <div class="mb-3">
                                        <label for="">Usuário</label>
                                        <input type="text" name="usuario" class="form-control" placeholder="Usuário">
                                    </div>
                                </div>

                                <div>
                                    <div class="mb-3">
                                        <label for="">Senha</label>
                                        <input type="password" name="senha" class="form-control" placeholder="Senha">
                                    </div>
                                </div>
                                <div>
                                    <div class="mb-3">
                                        <input type="submit" value="Entrar" class="btn btn-primary">
                                    </div>
                                </div>



                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>