<?php
class Todo extends Conn{
    public object $conn;
    public array $formData;



    public function list():array
    {
        $this->conn = $this->connectDb();
        $query_todo = "SELECT id, nome, email,celular,mensagem, creaded FROM contato ORDER BY id DESC LIMIT 40";
        $result_todo = $this->conn->prepare($query_todo);
        $result_todo->execute();
        $retorno = $result_todo->fetchAll();
        //var_dump($retorno);
        return $retorno;
    }


   


    public function create(): bool
    {
        //var_dump($this->formData);
        $this->conn = $this->connectDb();
        $query_todo = "INSERT INTO contato (nome, email, celular, mensagem,creaded) VALUES (:nome, :email,:celular,:mensagem, NOW())";
        $add_todo = $this->conn->prepare($query_todo);
        $add_todo->bindParam(':nome', $this->formData['nome']);
        $add_todo->bindParam(':email', $this->formData['email']);
        $add_todo->bindParam(':celular', $this->formData['celular']);
        $add_todo->bindParam(':mensagem', $this->formData['mensagem']);
        $add_todo->execute();

        if ($add_todo->rowCount()) {
            return true;
        } else {
            return false;
        }
    }

    
}