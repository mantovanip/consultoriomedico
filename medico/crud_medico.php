<?php
$nome            = isset($_POST['nome_medico'])   ? $_POST['nome_medico']   :'';
$crm             = isset($_POST['crm'])           ? $_POST['crm']           :'';
$especialidade   = isset($_POST['especialidade']) ? $_POST['especialidade'] :'';

if($nome ==''){
    echo 'O campo nome é obrigatório  
    <a href="#" onclick="history.back()">Voltar</a>';
    
    exit;
}
if($crm ==''){
    echo 'O campo CRM é obrigatório  
    <a href="#" onclick="history.back()">Voltar</a>';
    
    exit;
}
if($especialidade ==''){
    echo 'O campo Especialidade é obrigatório  
    <a href="#" onclick="history.back()">Voltar</a>';
    
    exit;
}

if (strlen($nome) <= 3){
    echo 'Você precisa digitar mais que 3 caracteres no campo nome. <a href="#" onclick="history.back()">Voltar</a>';
    exit;
}

$conexao  = new PDO('mysql:local=localhost;port=3308;dbname=consultoriomedico','root','');

$sql      = "INSERT INTO medico (
    nome_medico,
    crm,
    especialidade
    )
    VALUES
    (  
    '{$nome}',
    '{$crm}',
    '{$especialidade}'
    );";

if ($conexao->exec($sql)){
    echo 'Salvo com Sucesso.
    <a href="#" onclick="history.back()">Voltar</a>';
    exit;
}else{
    printf('Erro ao cadastrar <a href="#" onclick="history.back()">Voltar</a>');
    print_r($conexao->errorInfo());
    exit;
} 

?>