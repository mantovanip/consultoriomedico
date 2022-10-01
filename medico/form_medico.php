<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="medico.css">
    <title>Cadasto de Médico</title>

</head>

<body>
    <form action="crud_medico.php" method="post">
        <fieldset>
            <legend class="legend"> Cadastro de Médico</legend>
            
            <div>
                <label for="nome_medico">Nome Médico</label>
                <br>
                <input type="text" name="nome_medico" id="nome_medico">
            </div>
            <div>
                <label for="crm">CRM</label>
                <br>
                <input type="text" name="crm" id="crm">
            </div>
            <div>
                <label for="especialidade"></label>
                <br>
                <input type="radio" name="especialidade" id="especialidade" value="O">Obstetra</input>
                <input type="radio" name="especialidade" id="especialidade" value="P">Pediatra</input>
                <input type="radio" name="especialidade" id="especialidade" value="D">Dermatologista</input>
                <div>
                    <input type="submit" value="Salvar">
                </div>
        </fieldset>
    </form>
</body>

</html>