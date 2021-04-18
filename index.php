<!DOCTYPE html>
<html lang="pt-BR"> 
<head>
	<title>Atv 3 PHP</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
	 <link rel="stylesheet" type="text/css" href="estilos.css">
	 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
	 integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
	 crossorigin="anonymous"></script>
	 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
	 integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ"
	 crossorigin="anonymous"></script>
	 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"
	 integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm"
	 crossorigin="anonymous"></script>
</head>
<body>
	<?php 
		include 'navbar.php';
	 ?>

	<div class="jumbotron">
		<div class="container">
		<h1>Pagina de Geração e Validação de CPF E CNPJ</h1>
		<p>Escolha uma opção no menu acima!</p>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col justify-content-center">
					<a href="geracao.php">
					<button type="submit" class="btn btn-default bg-dark text-white"> Gerador de CPF e CNPJ</button>
					</a>
			</div>

			 <div class="col justify-content-center">
					<a href="validacao.php">
					<button type="submit" class="btn btn-default bg-dark text-white"> Validação de CPF e CNPJ</button>
					</a>
			</div>

			 <div class="col justify-content-center">
			 		<a href="termos.php">
					<button type="submit" class="btn btn-default bg-dark text-white"> Termos de Compromisso</button>
					</a>
			</div>
		</div>
	</div>
	
</body>
</html>
