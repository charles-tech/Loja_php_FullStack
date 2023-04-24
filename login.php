<?php
session_start();

if(empty($_POST) or (empty($_POST["usuario"]) or (empty($_POST["senha"]))))
{
    // echo " senha ou usuario incorreto";
    print "<script>location.href='index.php';</script>";
    
}



include('config.php');


        $usuario = $_POST["usuario"];
        $senha= $_POST["senha"];
        $sql= "SELECT * FROM usuarios where usuario = '{$usuario}'
        and senha = '".md5($senha)."'";

        $res = $connW->query($sql) or die($connW->error);
        $row =$res->fetch_object();

        $qtd = $res->num_rows;

        if($qtd>0){
            $_SESSION["usuario"]= $usuario;
            $_SESSION["nome"]= $row->nome;
            $_SESSION["tipo"]= $row->tipo;
            print "<script>location.href='visualizar.php';</script>";
        }else{
            print "<script>alert('Usuário e/ou Senha incorreto');</script>";

            print "<script>location.href='restrito.php';</script>";

        }