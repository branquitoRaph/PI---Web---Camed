<?php
//Dados do usuário, pasta host, senha (se tiver) e o nome do banco de dados
define("HOST", "localhost");
define("USUARIO", "root");
define("SENHA", "usbw");
define("DB", "camed");

//Variável que inicia a conexão com a função msqli_connect, se não for possível irá mostrar a mensagem
$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possivel conectar');
?>
