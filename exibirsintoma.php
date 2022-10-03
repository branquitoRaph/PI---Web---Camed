<!-- Chamando o cabeçalho da página-->
<?php include_once 'header.php';

include_once 'medicamento.php';
?>

<?php
//capturando o sintoma

$sintoma= $_POST['sintomas'];



?>
	<!-- Criando a parte principal da página-->
	<div id="conteudo">
		
		<table class="striped">
		<thead>
			<tr>
				<th>Medicamento</th>
				<th>PMVC:</th>
				
			</tr>
		</thead>
		
		<tbody>
			<?php
			
			$medicamento = new Medicamento();
			
			
			$tabela= $medicamento->findbySintoma($sintoma);
			
			
			
			
			if (count($tabela)>0):
				
				foreach($tabela as $linha){
					
					
					echo "Sintoma escolhido: " . $linha['nomeSintoma'];	
					$receita= $linha['necessarioReceita'];
					
					if ($receita==1):
						$receita="Precisa de receita";
					else:
						$receita="Não precisa de receita";
					endif
					
					
			?>
			<tr>
				<td><?php echo $linha['nome'];?></td>
				<td><?php echo $linha['PMVC'];?></td>
			</tr>
			<?php 
			} 
			else: ?>
				<tr>
					<td>-</td>
					<td>-</td>
				
				</tr>
				
				
				
			<?php
			endif;			
			?>
			
			
		</tbody>
	</table>
		
		
		
	<!-- Fechando a parte principal da página-->
	</div>
	<!-- Criando o rodapé-->
	<?php include_once 'footer2.php';?>
