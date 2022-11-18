<?php
$nome      = isset($_POST['nome_paciente']) ? $_POST['nome_paciente'] :'';
$endereco  = isset($_POST['endereco']) ? $_POST['endereco'] :'';
$bairro    = isset($_POST['bairro']) ? $_POST['bairro'] :'';
$cep       = isset($_POST['cep']) ? $_POST['cep'] :'';
$cpf       = isset($_POST['cpf']) ? $_POST['cpf'] :'';
$cidade    = isset($_POST['cidade']) ? $_POST['cidade'] :'Criciúma';
$estado    = isset($_POST['estado']) ? $_POST['estado'] :'SC';
$email     = isset($_POST['email']) ? $_POST['email'] :'';
$telefone1 = isset($_POST['telefone1']) ? $_POST['telefone1'] :'';
$telefone2 = isset($_POST['telefone2']) ? $_POST['telefone2'] :'';
$rg        = isset($_POST['rg']) ? $_POST['rg'] :'';
$genero    = isset($_POST['genero']) ? $_POST['genero'] :'';
  

if($nome ==''){
     echo 'O campo nome é obrigatório  
     <a href="#" onclick="history.back()">Voltar</a>';
     
     exit;
 }
 if($endereco ==''){
    echo 'O campo endereco é obrigatório  
    <a href="#" onclick="history.back()">Voltar</a>';
    
    exit;
}
if($cpf ==''){
    echo 'O campo CPF é obrigatório  
    <a href="#" onclick="history.back()">Voltar</a>';
    
    exit;
}
if($cep ==''){
    echo 'O campo CEP é obrigatório  
    <a href="#" onclick="history.back()">Voltar</a>';
    
    exit;
}
if($telefone1 ==''){
    echo 'O campo Telefone Celular é obrigatório  
    <a href="#" onclick="history.back()">Voltar</a>';
    
    exit;
}
 if (strlen($nome) <= 3){
     echo 'Você precisa digitar mais que 3 caracteres no campo nome. <a href="#" onclick="history.back()">Voltar</a>';
     exit;
 }


$conexao  = new PDO('mysql:local=localhost;port=3308;dbname=consultoriomedico','root','');

$sql        = "INSERT INTO paciente (nome_paciente,endereco,bairro,cep,cidade,estado,email,telefone1,telefone2,cpf,rg,genero) VALUES 
('{$nome}','{$endereco}','{$bairro}','{$cep}','{$cidade}','{$estado}','{$email}','{$telefone1}','{$telefone2}','{$cpf}','{$rg}','{$genero}');";

if ($conexao->exec($sql)){
    echo 'Salvo com Sucesso.
    <a href="#" onclick="history.back()">Voltar</a>';
}else{
    printf('Erro ao cadastrar <a href="#" onclick="history.back()">Voltar</a>');
    print_r( $conexao->errorInfo());
} 


?>
