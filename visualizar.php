<?php
session_start();
if(empty($_SESSION)){
    print("<script>location.href='index.php';</script>");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Linda Laura</title>
</head>

<body>
    <nav class="#f48fb1 pink lighten-3">
        <a href="#" data-target="slide-out" class="sidenav-trigger">
            <i class="material-icons">menu</i>
        </a>
        <div class="nav-wrapper container">
            <!-- logo -->
            <div class="brand-logo light">Linda Laura</div>
            <!-- menu Desketop -->
            <ul class="right hide-on-med-and-down">
                <li><a href="index.php">Home</a></li>
            </ul>

            <!-- menu mobile -->
            <ul id="slide-out" class="sidenav">
                <li><a href="index.php"> <i class="material-icons left">home</i>Home</a></li>
            </ul>

        </div>

    </nav>

    <?php

    print "Olá, ". $_SESSION["nome"];
    print "<a href='logout.php'class-'btn btn-danger'> Sair</a>";


// if (isset($_SESSION['msg'])) {
//     echo $_SESSION['msg'];
//     unset($_SESSION['msg']);
// }


require './Conn.php';
require './Todo.php';
$formData = filter_input_array(INPUT_POST, FILTER_DEFAULT);   

$result_where = new Todo();
$value = $result_where->list();


if(!empty($formData['SendTodo'])){
    // var_dump($formData);

        $result_where = new Todo();
        $result_where->formData = $formData;
        $value = $result_where->listWhere();
        extract($value);

      

}

   
             
        ?>

    <div class="row container">
        <div class="col s12">
            <h3 class="light">Lista de Menssagem</h3>
        </div>

        <form action="?router=Site/cadastro/" method="post">

            <div class="input-field col s12 m6">
                <input type="date" name="creaded" id="nome" required>
            </div>

            <div class="input fiel col s12 ">
                <input type="submit" value="Filtrar" class="btn-small" name="SendTodo">
            </div>
        </form>
    </div>


    <div class="row container">
        <div class="col s12" id="contato">
            <h3 class="light">Lista de Menssagem</h3>
        </div>
        <div class="col s12">



            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Celular</th>
                        <th scope="col">Menssagem</th>
                        <th scope="col">Data Menssagem</th>


                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    <?php

                foreach($value as $row_todo){
                extract($row_todo);
             
                echo "
                <tr>
                <th scope='row'>{$id}</th>
                <td>{$nome}</td>
                <td>{$email}</td>
                <td>{$celular}</td>
                <td>{$mensagem}</td>
                <td>{$creaded}</td>
                <td>";


                }







                   ?>


                </tbody>
            </table>


        </div>
    </div>







    </div>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="js/script.js"></script>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>