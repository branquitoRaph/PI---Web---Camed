<!DOCTYPE html>
<html>
<!-- Criando o Cabeçalho do código/página -->
<head>
<?php
	//Chamando a conexão com o banco de dados
	require_once("conexao.php");
	//Condição para não dar erro no session_start(), pois ele já inicia em outra página
	/*if(session_status()=== PHP_SESSION_NONE) {
			session_start();
	}
	//Condição para pegar o nome do usuário e guardar em uma variável
	if($_SESSION['logado'] == true){
		//Puxa o id com a session da página de login
		$id = (int) $_SESSION['id'];
		//Comando sql para selecionar o nome do usuário a partir do id do usuário logado
		$sql = "SELECT  nomeUsuario from usuario where $id = idUsuario;";
		//Efetivamente pega os dados (conectando e mandando o comando)
		$query = mysqli_query($conexao,$sql);
		//Guarda usando a função mysqli_fecth_array
		$resultado = mysqli_fetch_array($query);
		//Atribui o valor recebido (indíce 0) para a variável $titulo
		$titulo = $resultado[0];	
	}
	*/
?>
	<!-- Codificação (especificações da página) -->
	<meta http-equiv = "content-type" content = "text/html; charset=utf-8 unicode_ci">
	<!-- Título da página-->
	<title><?php echo $titulo;?></title>
	<!-- Chamando o css externo (para estilizar a página) -->
	<link rel = "stylesheet" href = "CSS/estilo.css" type = "text/css" media = "screen">
<!-- Fechando o cabeçalho-->
</head>
<!-- Criando o corpo da página -->
<body>
	<!-- Criando o cabeçalho da página -->
	<header id = "miniMenu">
		<!-- Lista do conteúdo do cabeçalho -->
		<ul>
			<!-- Chamando e criando o botão da página home -->
			<li><a href = "home.php">Home</a></li>
			<!-- Chamando e criando o botão da página de contato -->
			<li><a href = "contato.php">Contato</a></li>
			<!-- Chamando e criando o botão da página de sobre -->
			<li><a href = "sobre.php">Sobre</a></li>
			<!-- Chamando e criando o botão da página de consulta -->
			<li><a href = "consulta.php">Lista De Medicamentos</a></li>
			<!-- Chamando e criando o botão da página de gerenciamento da conta -->
			<li><a href = "gerenciamentodeconta.php">Gerenciamento De Conta</a></li>
		<!-- Fechando a lista -->
		</ul>
	<!-- Fechando o cabeçalho -->
	</header>

