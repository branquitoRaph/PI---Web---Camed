<?php
//Iniciar  Sessão
session_start();
//Conexão
require_once 'conexao.php';
//Se existir o "Enviar" , é porque clicaram no botão
if(isset($_POST['Enviar'])):
	//Limpa os dados dos campos e envia pelo método POST para o arquivo de conexão
	$nome=mysqli_escape_string($conexao,$_POST['nome']);
	$sobrenome=mysqli_escape_string($conexao,$_POST['sobrenome']);
	$email=mysqli_escape_string($conexao,$_POST['email']);
	$cep=mysqli_escape_string($conexao,$_POST['cep']);
	//Senha criptografada com o MD5
	$senha=md5(mysqli_escape_string($conexao,$_POST['senha']));
	//Sanitizando os campos de nome e sobrenome
	$nomeSanitize = filter_var($nome, FILTER_SANITIZE_STRING);
	$sobrenomeSanitize = filter_var($sobrenome, FILTER_SANITIZE_STRING);
	//Validando o campo de e-mail
	$emailValidate = filter_var($email, FILTER_VALIDATE_EMAIL);
	//CEP já está validando no código HTML na linha 49
	//Fazendo o comando para o SQL
	$sql="INSERT INTO usuario(nomeUsuario, sobrenomeUsuario, cepUsuario, emailUsuario, senhaUsuario) VALUES ('$nomeSanitize', '$sobrenomeSanitize', '$cep', '$emailValidate', '$senha')";
	//Condição de que se foi enviado
	if(mysqli_query($conexao, $sql)):
		//Irá fazer a sessão da mensagem (Cadastrado com sucesso)
		$_SESSION['mensagem'] = "Cadastro com sucesso!";
		//E manda para o login
		header('Location: login.php');
	//Se não
	else:
		//Mostra a mensagem Erro ao cadastrar
		$_SESSION['mensagem'] = "Erro ao cadastrar!";		
	//Fecha os ifs
	endif;
endif;
?>
<!-- Criando o corpo da página-->
<?php include_once 'header.php';?>
	<!-- Título com tamanho em h1-->
	<h1>Cadastro de informações de usuário</h1>
	<h2>Dados Pessoais</h2>
	<!-- Abrindo um formulário para Cadastro-->
	<form action="cadastro.php" method="POST">
		<!-- Texto que aparece-->
		<label for = "fname">Nome:</label>
		<!-- Campo de digitação-->
		<input type = "text" id = "fname" name = "nome" placeholder = "Digite seu nome"><br><br>
		<!-- Texto que aparece-->
		<label for = "lname"><br>Sobrenome:</label>
		<!-- Campo de digitação-->
		<input type = "text" id = "lname" name = "sobrenome" placeholder = "Digite seu sobrenome"><br><br>
		<!-- Texto que aparece-->
		<label for = "fdata"><br>Data de Nascimento</label>
		<!--- Campo de Digitação-->
		<input type = "date" id = "fdata" name = "data" placeholder = "Informe sua data de nascimento"><br><br>
		<!-- Texto que aparece-->
		<label for = "pwd"><br>Senha:</label>
		<!-- Campo de digitação-->
		<input type = "password" id = "pwd" name = "senha" minlength = "8" placeholder = "Digite uma senha"><br><br>
		<!-- Subtítulo com tamanho em h2-->
		<h2>Dados de contato e endereço</h2>
		<!-- Texto que aparece-->
		<p>Tipo de Contato: </p>
		<input type = "checkbox" id = "campo" name = "email">
		<label for = "email">E-mail</label>
		<input type = "checkbox" id = "campo" name = "numero">
		<label for = "numero">Número de celular</label>
		<input type = "checkbox" id = "campo" name = "facebook">
		<label for = "facebook">Facebook</label>
		<input type = "checkbox" id = "campo" name = "instagram">
		<label for = "instagram">Instagram</label>
		<input type = "checkbox" id = "campo" name = "telefone">
		<label for = "telefone">Telefone</label>
	<!-- Fechando o formulário-->
	</form>
<!-- Chamando o rodapé-->
<?php include_once 'footer.php';?>
