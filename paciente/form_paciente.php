<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="paciente.css">
    <title>Cadastro de Paciente</title>

</head>

<body>

    <form action="crud_paciente.php" method="POST">
        <fieldset>
            <legend class="legend" >Cadastro de Paciente</legend>

            <div>
                <label for="nome_paciente">Nome Paciente</label>
                <br>
                <input type="text" name="nome_paciente" id="nome_paciente" value="">
            </div>
            <br>
            <div>
                <label for="endereco">Endereço</label>
                <br>
                <input type="text" name="endereco" id="endereco" value="">
            </div>
            <br>
            <div>
                <label for="bairro">Bairro</label>
                <br>
                <input type="text" name="bairro" id="bairro" value="">
            </div>
            <br>
            <div>
                <label for="cep">CEP</label>
                <br>
                <input type="number" name="cep" id="cep" value="">
            </div>
            <br>
            <div>
                <label for="cidade">Cidade</label>
                <br>
                <input type="text" name="cidade" id="cidade" value="">
            </div>
            <br>
            <div>
                <label for="estado">Estado</label>
                <br>
                <input type="text" name="estado" id="estado" value="">
            </div>
            <br>
            <div>
                <label for="email">Email</label>
                <br>
                <input type="email" name="email" id="email" value="">
            </div>
            <br>
            <div>
                <label for="telefone1">Telefone 1</label>
                <br>
                <input type="text" name="telefone1" id="telefone1" value="">
            </div>
            <br>
            <div>
                <label for="telefone2">Telefone 2</label>
                <br>
                <input type="text" name="telefone2" id="telefone2" value="">
            </div>
            <br>
            <div>
                <label for="cpf">CPF</label>
                <br>
                <input type="text" name="cpf" id="cpf" value="">
            </div>
            <br>
            <div>
                <label for="rg">RG</label>
                <br>
                <input type="text" name="rg" id="rg" value="">
            </div>
            <br>
            <div>
                <label for="genero">Genero</label>
                <br>
                <input type="radio" name="genero" id="genero" value="M">Masculino </input>
                <input type="radio" name="genero" id="genero" value="F">Feminino </input>
            </div>
            <br>
            <div>
                <input class="sub" type="submit" value="Salvar" />
            </div>
        </fieldset>
    </form>
</body>

</html>