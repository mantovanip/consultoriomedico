<?php
/* 
    CRUD
    C- CREATE - R- READ - U- UPDATE - D-DELETE
*/
    $id     = isset($_POST['id'])   ? $_POST['id'] : $_GET['id'];
    $opcao  = isset($_POST['opcao'])? $_POST['opcao']: $_GET['opcao'];
    $nome   = isset($_POST['nome']) ? $_POST['nome'] :'';
    
    if ($opcao == 'inserir'|| $opcao == 'atualizar'){
        if($nome ==''){
        echo 'O campo nome é obrigatório <a href="#" onclick="history.back()">Voltar</a>';
        exit;
    }

    if (strlen($nome) <= 3){
        echo 'Você precisa digitar mais que 3 caracteres no campo nome. <a href="#" onclick="history.back()">Voltar</a>';
        exit;
    }
}
    $conexao    = new PDO('mysql:local=localhost;port=3308;dbname=consultoriomedico','root','');
    if($opcao == 'inserir'){
        $sql        = "INSERT INTO atendente (nome) VALUES ('{$nome}');";
        $mensagem   ='Salvo com Sucesso.<a href="#" onclick="history.back()">Voltar</a>';
    }else if($opcao == 'atualizar'){
        $sql        = "UPDATE atendente SET nome ='{$nome}'WHERE id ={$id};";
        $mensagem   ='Atualizado com Sucesso.<a href="#" onclick="history.back()">Voltar</a>';
    }else if($opcao == 'excluir'){
        $sql        = "DELETE FROM atendente WHERE id ={$id};";
        $mensagem   ='Excluido com Sucesso.<a href="#" onclick="history.back()">Voltar</a>';
    }else{
        echo'Nenhuma opção selecionada.<a href="#" onclick="history.back()">Voltar</a>';
        exit;
    }    

    if ($conexao->exec($sql)){
        echo $mensagem;
    }else{
        printf('Erro ao cadastrar <a href="#" onclick="history.back()">Voltar</a>');
        print_r($conexao->errorInfo());
    }