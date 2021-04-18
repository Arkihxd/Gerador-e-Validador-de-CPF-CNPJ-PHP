<?php 
	require 'navbar.php';
	include "funcoes.php";
 ?>

<?php 

	if(isset($_POST['tipo'])){

		$radio = $_POST['tipo'];
		$estado = $_POST['estado'];
		$qnt = $_POST['qnt'];

		echo "<table class='table table-dark'>
			  <thead>
			    <tr>
			      <th scope='col'>#</th>
			      <th scope='col'>Números</th>
			    </tr>
			  </thead>";

		if ($radio == "cpf") {
			for ($i=1; $i <= $qnt ; $i++) { 
				echo "<tr>
			     <th scope='row'>$i</th>";
			    echo "<td>";
			   	echo gerador_cpf($estado);
			   	echo "</td>";
			    echo "</tr>";
			}
		}

		elseif ($radio == "cnpj") {
			for ($i=1; $i <= $qnt ; $i++) { 
				echo "<tr>
			     <th scope='row'>$i</th>";
			    echo "<td>";
			   	echo gerador_cnpj();
			   	echo "</td>";
			    echo "</tr>";
			}
		}

	}else{
	 ?> 
	
	 <div class="container">
		<div class="row">

			<form class="col-8" action="geracao.php" method="post">
				<div class="row">
					<fieldset class="col">
							<legend>Escolha uma opção</legend>
							<div>
								<input type="radio" name="tipo" value="cpf"> CPF
								<input type="radio" name="tipo" value="cnpj"> CNPJ
							</div>
							<div>
								<label for="qnt">Quantidade</label>
								<input type="number" name="qnt" id="qnt" class="form-control">
							</div>
							
							<div>
								<select name="estado" class="bg-dark text-white form-control"> Escolha o estado (Valido para CPF)
									<option value="10" selected="">Aleatorio</option>
									<option value="2">AC - Acre</option>
									<option value="4">AL - Alagoas</option>
									<option value="2">AP - Amapá</option>
									<option value="2">AM - Amazonas</option>
									<option value="5">BA - Bahia</option>
									<option value="3">CE - Ceará</option>
									<option value="1">DF - Distrito Federal</option>
									<option value="7">ES - Espírito Santo</option>
									<option value="1">GO - Goiás</option>
									<option value="3">MA - Maranhão</option>
									<option value="1">MT - Mato Grosso</option>
									<option value="1">MS - Mato Grosso do Sul</option>
									<option value="6">MG - Minas Gerais</option>
									<option value="2">PA - Pará</option>
									<option value="4">PB - Paraibá</option>
									<option value="9">PR - Paraná</option>
									<option value="4">PE - Pernambuco</option>
									<option value="3">PI - Piauí</option>
									<option value="4">RN - Rio Grande do Norte</option>
									<option value="0">RS - Rio Grande do Sul</option>
									<option value="7">RJ - Rio de Janeiro</option>
									<option value="2">RO - Rondônia</option>
									<option value="2">RR - Roraima</option>
									<option value="9">SC - Santa Catarina</option>
									<option value="8">SP - São Paulo</option>
									<option value="5">SE - Sergipe</option>
									<option value="1">TO - Tocantins</option>
								</select>
							</div>
							<div>
								<button type="submit" class="btn btn-default bg-dark text-white"> Prosseguir</button>
							</div>
					</fieldset>
				</div>
			</form>
		</div>	
	</div>	
	 <?php 
	 }
	  ?>