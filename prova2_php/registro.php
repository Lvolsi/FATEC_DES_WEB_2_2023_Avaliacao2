<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Registro de candidatos </title>
    </head>
    <body>
        <h2> Registro de candidatos </h2>
        <br>
        <form action="main.php" method="post">
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome do candidato"><br><br>
                </div>
                <div class="col">
                    <input type="text" class="form-control" id="rg_cpf" name="rg_cpf" placeholder="RG ou CPF"><br><br>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Telefone"><br><br>
                </div>
                <div class="col">
                    <select name="escola_publica">
                        <option value="0">Estudou em escola pública</option>
                        <option value="1">Estudou em escola particular</option>
                    </select>
                </div>
            </div>
            
            <input type="submit" value="Enviar inscrição">
            <a href="leitura_informacoes.php">Veja todos os inscritos</a>
        </form>
    </body>
</html>
