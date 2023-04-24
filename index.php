<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Linda Laura</title>
</head>

<body>
    <header>
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
                    <li><a href="#produto">Produtos</a></li>
                    <li><a href="#contato">Contato</a></li>
                    <li><a href="restrito.php">Restrito</a></li>
                </ul>

                <!-- menu mobile -->
                <ul id="slide-out" class="sidenav">
                    <li><a href="index.php"> <i class="material-icons left">home</i>Home</a></li>
                    <li><a href="#produto"> <i class="material-icons left">favorite</i>Produtos</a></li>
                    <li><a href="#contato"> <i class="material-icons left">call</i>Contato</a></li>
                    <li><a href="restrito.php"> <i class="material-icons left">network_locked</i>Restrito</a></li>
                </ul>

            </div>

        </nav>

        <!-- slides -->
        <div class="slider">
            <ul class="slides">
                <li>
                    <img src="Imagens/slide-1.jpg" alt="" class="responsive-img">

                    <div class="caption center-align">
                        <h3>Sala ampla e confortável.</h3>
                        <h5>Elegância .</h5>
                    </div>
                </li>

                <li>
                    <img src="Imagens/slide-2.jpg" alt="" class="responsive-img">

                    <div class="caption center-align">
                        <h3>Área de descanso.</h3>
                        <h5>Relaxar e ler um Livro.</h5>
                    </div>
                </li>

                <li>
                    <img src="Imagens/slide-3.jpg" alt="" class="responsive-img">

                    <div class="caption center-align">
                        <h3>Escadaria Moderna.</h3>
                        <h5>sutiliza.</h5>
                    </div>
                </li>
            </ul>
        </div>
    </header>

    <p>&nbsp;</p>

    <div class="row" id="servico">
        <div class="col s12 16 push-13 ">
            <h5 class="indigo-text center-align"> Lorem ipsum dolor sit amet.</h5>
            <p class="center-align flow-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. At itaque non
                fugiat cumque minima ab repellat tempore impedit cupiditate, nihil veritatis similique deleniti id
                possimus!</p>

        </div>
    </div>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>

    <div class="row container" id="produto">
        <!-- card 1 -->
        <div class="card">
            <div class="col s12 m6 l4">
                <!-- imagem -->
                <div class="card-image">
                    <img src="Imagens/card-1.jpg" alt="" class="responsive-img materialboxed">
                </div>
                <!-- content -->
                <div class="card-content">
                    <span class="card-title">Lorem, ipsum dolor.</span>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquid, iste?</p>
                </div>

                <!-- call to action -->
                <div class="card-action">
                    <a href="#" class="btn btn-smal pink lighten-3">Saiba mais</a>
                </div>



            </div>
        </div>


        <!-- card 2 -->
        <div class="card">
            <div class="col s12 m6 l4">
                <!-- imagem -->
                <div class="card-image">
                    <img src="Imagens/card-2.jpg" alt="" class="responsive-img materialboxed">
                </div>
                <!-- content -->
                <div class="card-content">
                    <span class="card-title">Lorem, ipsum dolor.</span>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquid, iste?</p>
                </div>

                <!-- call to action -->
                <div class="card-action">
                    <a href="#" class="btn btn-smal pink lighten-3">Saiba mais</a>
                </div>



            </div>
            <!-- card 1 -->
            <div class="card">
                <div class="col s12 m6 l4">
                    <!-- imagem -->
                    <div class="card-image">
                        <img src="Imagens/card-3.jpg" alt="" class="responsive-img materialboxed">
                    </div>
                    <!-- content -->
                    <div class="card-content">
                        <span class="card-title">Lorem, ipsum dolor.</span>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquid, iste?</p>
                    </div>

                    <!-- call to action -->
                    <div class="card-action">
                        <a href="#" class="btn btn-smal pink lighten-3">Saiba mais</a>
                    </div>



                </div>
            </div>
        </div>
    </div>
    <p>&nbsp;</p>
    <p>&nbsp;</p>

    <div class="row container">
        <div class="col s12">
            <div class="divider">&nbsp;</div>
        </div>
    </div>

    <div class="row container">
        <div class="col s12">
            <h4 class="light indigo-text">Lorem ipsum dolor sit amet.</h4>
            <p class="flow-text light" style="text-align:justify;">Lorem ipsum dolor, sit amet consectetur adipisicing
                elit.
                Tempore ducimus aut soluta, modi neque adipisci maiores amet ea error, quod id
                facere dolore at voluptatum quisquam corrupti ratione porro dolorem fuga! Nemo,
                minima voluptatum ratione blanditiis temporibus ipsam porro ut doloremque. Voluptates
                laudantium voluptatum veritatis animi consequuntur maxime placeat nesciunt.
            </p>

            <p>
                <a href="#modal" class="btn btn-small pink lighten-3 modal-trigger">Saiba Mais</a>
            </p>
        </div>
    </div>

    <!-- janela modal -->
    <div id="modal" class="modal">
        <div class="modal-content">
            <h4 class="light indigo-text"> Lorem ipsum dolor sit amet.</h4>
            <h6>Lorem ipsum, dolor sit amet consectetur adipisicing.</h6>

            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quibusdam eaque repudiandae minima numquam
                dicta! Reiciendis iure facilis eius animi totam?</p>
            <p>
                <a href="#">Cadastre-se</a>
            </p>
        </div>
    </div>

    <!-- paralax -->

    <div class="parallax-container">
        <div class="parallax">
            <img src="Imagens/paralax.jpg" alt="">

        </div>
    </div>

    <p>&nbsp;</p>

    <div class="row container">
        <div class="col s12">
            <h5 class="indigo-text">Lorem, ipsum dolor.</h5>
            <p class="flow-text light">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Id natus dolorem dolorum asperiores at facilis
                eum quisquam iste est enim.
            </p>

            <p class="flow-text light">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Id natus dolorem dolorum asperiores at facilis
                eum quisquam iste est enim.
            </p>
        </div>
    </div>





    <p>&nbsp;</p>
    <div class="row container">
        <div class="col s12">
            <div class="divider">&nbsp;</div>
        </div>
    </div>


















    <?php

            if (isset($_SESSION['msg'])) {
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
            }


            require './Conn.php';
            require './Todo.php';
            $formData = filter_input_array(INPUT_POST, FILTER_DEFAULT);    

            $listtodos = new Todo();
            //   $result_todos = $listtodos->list();

            if(!empty($formData['SendTodo'])){
                var_dump($formData);

                    $createTodo = new Todo();
                    $createTodo->formData = $formData;
                    $value = $createTodo->create();

                    if($value){
                        $_SESSION['msg'] = "<p style='color: white;'>To-do cadastrado com sucesso!</p><br>";
                        header("Location: index.php");
                    }else{
                        echo "<p style='color: #f00;'>Erro: To-do não cadastrado com sucesso!</p>";
                    }

            }





       
  
    
    ?>



    <div class="row container" id="contato">
        <div class="col s12" id="contato">
            <h3 class="light">Entrar em Contato</h3>
        </div>

        <div class="col s12">

            <form action="?router=Site/cadastro/" method="post">

                <div class="input-field col s12 m6">
                    <input type="text" name="nome" id="nome" required>
                    <label for="nome">Digite seu nome</label>
                </div>

                <div class="input-field col s12 m6">
                    <input type="email" name="email" id="email" required>
                    <label for="email">Digite seu E-mail</label>
                </div>

                <div class="input-field col s12 m6">
                    <input type="tel" name="celular" id="tel" required>
                    <label for="tel">Celular</label>
                </div>

                <div class="input-field col s12 m6">
                    <textarea name="mensagem" id="" cols="40" rows="10" placeholder="Deixe sua menssagem"></textarea>
                </div>



                <div class="input fiel col s12 ">
                    <input type="submit" value="Cadastrar" class="btn-small" name="SendTodo">
                    <input type="reset" value="limpar" class="btn-small red">
                </div>


            </form>
        </div>
    </div>





    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="js/script.js"></script>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

<footer class="page-footer pink lighten-3">
    <div class=" container">
        <div class="row">
            <div class="col l6 s12">
                <h5 class="white-text">Footer Content</h5>
                <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.
                </p>
            </div>
            <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Redes Sociais</h5>
                <ul>
                    <li><a class="grey-text text-lighten-3" href="#!"><img src="Imagens/facebook.png" alt="">
                            Facebook</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!"><img src="Imagens/instagram.png" alt="">
                            Instagram</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!"><img src="Imagens/linkedin.png" alt="">
                            Linkdim</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!"><img src="Imagens/whatsapp.png" alt="">
                            WhatsApp</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            © 2023 Copyright Text
            <a class="grey-text text-lighten-4 right" href="#!">Laura Linda</a>
        </div>
    </div>
</footer>

</html>