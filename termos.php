<?php 
	require 'navbar.php';
	include "funcoes.php";

 ?>

<?php 

	if(isset($_POST['check'])){
		$verif = $_POST['check'];
		if ($verif == "sim") {
			echo "<div class='jumbotron'>
					<div class='container'>
					<h1 class='text-success'>Sucesso</h1>
					<legend class='text-success'>Bom uso das funcionalidade do site!</legend>
					</div>
				</div>";
		}
	}
	else{
	 ?> 

	 <div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8 justify-content-center">
					<div class="card text-center">
						<h1 class="card-title">Termos de Compromisso</h1>
						<legend>Todos os conteúdos deste site são apenas para fins informativos, não devem ser considerados completos, atualizados, e não se destinam a ser utilizado no lugar de uma consulta jurídica, médica, financeira, ou de qualquer outro profissional. Os conteúdos são fornecidos sem qualquer tipo de garantia. Todo e qualquer risco da utilização dos conteúdos é assumido pelo próprio usuário.
						</legend>
					</div>
					<form action="termos.php" method="post">
						<fieldset>
							<div class="checkbox">
								<input type="checkbox" name="check" value="sim">Eu aceito
							</div>	
							<div>
								<button type="submit" class="btn btn-default bg-dark text-white"> Prosseguir</button>
							</div>
						</fieldset>
					</form>
				</div>
			</div>	
		</div>	
	 <?php 
	 }
	  ?>
							        