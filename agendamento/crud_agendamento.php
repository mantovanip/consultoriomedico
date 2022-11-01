<?php
$paciente     = isset($_POST['id_paciente']) ? $_POST['id_paciente'] :'';
$medico  = isset($_POST['id_medico']) ? $_POST['id_medico'] :'';
$atendente    = isset($_POST['id_atendente']) ? $_POST['id_atendente'] :'';
$data       = isset($_POST['data_agendamento']) ? $_POST['data_agendamento'] :'';
$hrinicial       = isset($_POST['hrinicial']) ? $_POST['hrinicial'] :'';
$hrfinal    = isset($_POST['hrfinal']) ? $_POST['hrfinal'] :'';


if($paciente ==''){
     echo 'O Nome do paciente é obrigatório  
     <a href="#" onclick="history.back()">Voltar</a>';
     
     exit;
 }
 if($hrfinal ==''){
    echo 'A hora final  é obrigatório  
    <a href="#" onclick="history.back()">Voltar</a>';
    
    exit;
}
if($hrinicial ==''){
    echo 'A hora inicial é obrigatório  
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
