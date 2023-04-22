<?php

abstract class Conn 
{
    public string $db = "mysql";
    public string $host = "localhost";
    public string $user = "root";
    public string $pass = "";
    public string $dbname = "loja_moveis";
    public int $port = 3306;
    public object $connect; 

    

    public function connectDb()
    {
        try{
            $this->connect = new PDO($this->db . ':host=' . $this->host . ';dbname='. $this->dbname, $this->user, $this->pass);
                        //echo "Conexão com banco de dados realizado com sucesso!!<br>";

            return $this-> connect;

        }catch (Exception $err)
        {
            die('Erro: Por favor tente novamente. Caso o problema persista, entre em contato o administrador adm@empresa.com');


        }
    }
}