<?php 
	require 'navbar.php';
	include "funcoes.php";
 ?>

 <?php 

	if(isset($_POST['numero'])){
		$numero = $_POST['numero'];
		$tipo = "";
		$estado = "";
		$final = "";
		$mensagem = "";
		$botao = "";

		if (strlen($numero) == 11) {
			$tipo = "CPF";
			$estado = verificar_estado($numero);
			$final = validacao_cpf($numero);
		}
		elseif (strlen($numero) == 14) {
			$tipo = "CNPJ";
			$final = validacao_cnpj($numero);
		}
		else{
			 $final = "errornumber";
		}

		if ($final == "válido") {
			$botao = "badge-success";
			$mensagem = $tipo . " " . $numero . " " .  $estado . " é ". $final;
		}
		if ($final == "falso") {
			$botao = "badge-danger";
			$mensagem = $tipo . " " . $numero . " " .  $estado . " é ". $final;
		}
		if ($final == "errornumber") {
			 $mensagem = "Numero invalido, verifique se você colocou corretamente sem: . /  -";
			 $botao = "badge-danger";
		}


		echo "<div class='container'>
				<form action='validacao.php' method='post'>
				 	<legend>Validar CPF ou CNPJ</legend>
						<div class='form-group'>
							<label for='cpf'>Digite um CPF ou CNPJ (somente numeros)</label>
							<input type='number' name='numero' id='numero' class='form-control' placeholder='00000000000000'>
							<legend class='$botao'>$mensagem</legend>
						</div>
					<div>
					<button type='submit' class='btn btn-default bg-dark text-white'> Prosseguir</button>
					</div>
				</form>
				</div>";
		
	}
	else{
	 ?> 

	<div class="container">
	<form action="validacao.php" method="post">
	 	<legend>Validar CPF ou CNPJ</legend>
			<div class="form-group">
				<label for="cpf">Digite um CPF ou CNPJ (somente numeros)</label>
				<input type="number" name="numero" id="numero" class="form-control" placeholder="00000000000000">
		</div>
		<div>
			<button type="submit" class="btn btn-default bg-dark text-white"> Prosseguir</button>
		</div>
	</form>
	</div>

	<?php 
	}
	 ?>