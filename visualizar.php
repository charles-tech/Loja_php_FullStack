<?php
session_start();
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
                <li><a href="">Vestidos</a></li>
                <li><a href="">Contatos</a></li>
            </ul>

            <!-- menu mobile -->
            <ul id="slide-out" class="sidenav">
                <li><a href=""> <i class="material-icons left">home</i>Home</a></li>
                <li><a href=""> <i class="material-icons left">favorite</i>Vestidos</a></li>
                <li><a href=""> <i class="material-icons left">call</i>Contatos</a></li>
            </ul>

        </div>

    </nav>

    <?php

            if (isset($_SESSION['msg'])) {
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
            }


            require './Conn.php';
            require './Todo.php';
            $formData = filter_input_array(INPUT_POST, FILTER_DEFAULT);    

            $listtodos = new Todo();
              $result_todos = $listtodos->list();
        ?>

    <div class="row container">
        <h1>Lista de Menssagem</h1><BR></BR>


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

                foreach($result_todos as $row_todo){
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







                // <?php
                //      foreach($result_todos as $row_todo){
                //         extract($row_todo);
                //        // var_dump($row_todo);
                //         $dataBr = "Data: " .date('d/m/Y H:i:s', strtotime($data)) . " <br>";

                        
                //         if($status == 'Aguardando'){
                //             echo "
                //             <tr>
                //             <th scope='row'>{$id}</th>
                //             <td>{$dataBr}</td>
                //             <td>{$tarefa}</td>
                //             <td>{$status}</td>
                //             <td>
                //             <a href='view.php?id=$id' type='button' class='btn btn-outline-primary'>Visualizar</a>
                //             <a href='edit.php?id=$id' type='button' class='btn btn-outline-success'>Editar</a>
                //             <a href='delete.php?id=$id' type='button' class='btn btn-outline-danger'>Deletar</button>
                //         </td>
                //         </tr>
                //             ";
                //         }
                        
                //     }
                //     ?>


            </tbody>
        </table>



    </div>







    </div>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="js/script.js"></script>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>