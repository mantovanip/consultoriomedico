<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="agendamento.css">
    <title>Agendamento de Consulta Médica</title>
</head>

<body>
    <form action="crud_agendamento.php" method="POST">
        <fieldset>
            <legend class="legend">Agendamento de Consulta</legend>
            <div>
                <label for="id_paciente">Nome Paciente:</label>
                <br>
                <input type="text" name="id_paciente" id="id_paciente">
            </div>
            <div>
                <label for="id_medico">Nome Médico:</label>
                <br>
                <input type="text" name="id_medico" id="id_medico">
            </div>
            <div>
                <label for="id_atendente">Nome Atendente:</label>
                <br>
                <input type="text" name="id_atendente" id="id_atendente">
            </div>
            <div>
                <label for="data_agendamento">Data Agendamento:</label>
                <br>
                <input type="text" name="data_agendamento" id="data_agendamento">
            </div>
            <div>
                <label for="hrinicial">Hora Incial:</label>
                <br>
                <input type="text" name="hrinicial" id="hrinicial">
            </div>
            <div>
                <label for="hrfinal">Hora Final:</label>
                <br>
                <input type="text" name="hrfinal" id="hrfinal">
            </div>
            <div>
                <input class="sub" type="submit" value="Salvar" />
            </div>

        </fieldset>
    </form>
</body>

</html>