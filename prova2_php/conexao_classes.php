<?php

class Database_Connection
{
    public $servername;
    public $username;
    public $password;
    public $database_name;
    public $connection;
    public $command;

    public function __construct(string $servername, string $username, string $password, string $database_name)
    {
        if (is_string($servername))
        {
            $this->servername = $servername;
        }
        if (is_string($username))
        {
            $this->username = $username;
        }
        if (is_string($password))
        {
            $this->password = $password;
        } 
        if (is_string($database_name))
        {
            $this->database_name = $database_name;
        }
        $this->connection = new mysqli($this->servername, $this->username, $this->password, $this->database_name);

        if($this->connection->connect_error)
        {
            die("Conexão falhou.: " . $this->connection->connect_error);
        }else
        {
            echo "Conexão com o banco de dados feita com sucesso!<br>";
        }
    }

    public function inserting_occurrence(string $nome, int $rg_cpf, string $telefone, string $escola_publica)
    {
        $this->command = "INSERT INTO candidatos(nome, rg_cpf, telefone, escola_publica) VALUES('" . $nome ."','" . $rg_cpf . "'," . $telefone . ",'" . $escola_publica . "');";
        if($this->connection->query($this->command) == TRUE)
        {
            echo "Candidato registrado com sucesso!";
        } else
        {
            echo "Erro ao registrar candidato. " . $this->connection->error;
        }
    }
}
?>