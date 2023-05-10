
<?php
    require_once('info_conexao.php');
    require_once('conexao_classes.php'); 
?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Condidatos inscritos </title>
    </head>
    <body>
        <h2>  Candidatos inscritos </h2>
            <?php
                $database_connection = new Database_Connection($servername, $username, $password, $dbname);
                $command = "SELECT * FROM candidatos";
                $results = $database_connection->connection->query($command);
                if($results == TRUE)
                {   
                    echo "Nome | RG/CPF | Telefone | Escola pública/particular | Id <br>";
                    while($row = $results->fetch_assoc())
                    {
                        echo "| ".$row["nome"]." | ".$row["rg_cpf"]." | ".$row["telefone"]." | ".$row["escola_publica"]." | ".$row["id"]." | ";
                        echo "<br>";
                    }                
                } else
                {
                    echo "Erro ao mostrar registros: " . $database_connection->error;
                }
            ?>
        <br><br>
        <form>
            <div>
                <a href="registro.php" class="btn btn-danger">Novo candidato</a>
            </div>
        </form>

    </body>
</html>