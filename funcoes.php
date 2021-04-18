<?php 

	function estado_cpf($estado){
		if ($estado == "0") {
			return "0";
		}
		elseif ($estado == "1") {
			return  "1";
		}
		elseif ($estado == "2") {
			return "2";
		}
		elseif ($estado == "3") {
			return "3";
		}
		elseif ($estado == "4") {
			return "4";
		}
		elseif ($estado == "5") {
			return "5";
		}
		elseif ($estado == "6") {
			return "6";
		}
		elseif ($estado == "7") {
			return"7";
		}
		elseif ($estado == "8") {
			return "8";
		}
		elseif ($estado == "9") {
			return "9";
		}

	}

	function verificar_estado($numero){
		$estado = (substr($numero, -3,1));
		if ($estado == "0") {
			return "do Rio Grande do Sul";
		}
		elseif ($estado == "1") {
			return  "do Distrito Federal, Goiás, Mato Grosso, Mato Grosso do Sul ou Tocantins";
		}
		elseif ($estado == "2") {
			return "do Amazonas, Pará, Roraima, Amapá, Acre ou Rondônia";
		}
		elseif ($estado == "3") {
			return "do Ceará, Maranhão ou Piauí";
		}
		elseif ($estado == "4") {
			return "da Paraíba, Pernambuco, Alagoas ou Rio Grande do Norte";
		}
		elseif ($estado == "5") {
			return "da Bahia e Sergipe";
		}
		elseif ($estado == "6") {
			return "de Minas Gerais";
		}
		elseif ($estado == "7") {
			return"do Rio de Janeiro ou Espírito Santo";
		}
		elseif ($estado == "8") {
			return "de São Paulo";
		}
		elseif ($estado == "9") {
			return "do Paraná ou Santa Catarina";
		}

	}

	function validacao_cpf($numero){
		if (strlen($numero)!= 11) {
			return "false";
		}

		$calc = (substr($numero, -11,1)*10)+(substr($numero, -10,1)*9)+(substr($numero, -9,1)*8)+(substr($numero, -8,1)*7)+(substr($numero, -7,1)*6)+(substr($numero, -6,1)*5)+(substr($numero, -5,1)*4)+(substr($numero, -4,1)*3)+(substr($numero, -3,1)*2);
		$resto = $calc%11;

		if ($resto < 2) {
			$primeiro_digito = 0;
		}
		else{
			$primeiro_digito = 11-$resto;
		}

		$calc2 = (substr($numero, -11,1)*11)+(substr($numero, -10,1)*10)+(substr($numero, -9,1)*9)+(substr($numero, -8,1)*8)+(substr($numero, -7,1)*7)+(substr($numero, -6,1)*6)+(substr($numero, -5,1)*5)+(substr($numero, -4,1)*4)+(substr($numero, -3,1)*3)+ $primeiro_digito*2;

		$resto = $calc2%11;

		if ($resto < 2) {
			$segundo_digito = 0;
		}
		else{
			$segundo_digito = 11-$resto;
		}

		if (($primeiro_digito) == substr($numero, -2,1) && ($segundo_digito) == substr($numero, -1,1)) {
			return "válido";
		}
		else{
			return "falso";
		}

	}

	function gerador_cpf($estado){
		$n1 = rand(0,9);
		$n2 = rand(0,9);
		$n3 = rand(0,9);
		$n4 = rand(0,9);
		$n5 = rand(0,9);
		$n6 = rand(0,9);
		$n7 = rand(0,9);
		$n8 = rand(0,9);
		$n9 = 0;
		$n10 = 0;
		$n11 = 0;

		if ($estado != "10") {
			$n9 = estado_cpf($estado);
		}
		else{
			$n9 = rand(1,9);
		}


		$calc = $n1*10 + $n2*9 + $n3*8 + $n4*7 + $n5*6+ $n6*5+ $n7*4+ $n8*3+ $n9*2;
		$resto = $calc%11;
		if ($resto < 2) {
			$n10 = 0;
		}
		else{
			$n10 = 11-$resto;
		}

		$final = $n10;

		$calc2 = $n1*11 + $n2*10 + $n3*9 + $n4*8 + $n5*7+ $n6*6+ $n7*5+ $n8*4+ $n9*3 + $n10*2;
		$resto = $calc2%11;
		if ($resto < 2) {
			$n11 = 0;
		}
		else{
			$n11 = 11-$resto;
		}

		return "$n1"."$n2"."$n3"."$n4"."$n5"."$n6"."$n7"."$n8"."$n9"."$n10"."$n11";
	}

	function validacao_cnpj($numero){
		if (strlen($numero)!= 14) {
			return "false";
		}

		$calc = (substr($numero, -14,1)*5)+(substr($numero, -13,1)*4)+(substr($numero, -12,1)*3)+(substr($numero, -11,1)*2)+(substr($numero, -10,1)*9)+(substr($numero, -9,1)*8)+(substr($numero, -8,1)*7)+(substr($numero, -7,1)*6)+(substr($numero, -6,1)*5)+(substr($numero, -5,1)*4)+(substr($numero, -4,1)*3)+(substr($numero, -3,1)*2);
		$resto = $calc%11;

		if ($resto < 2) {
			$primeiro_digito = 0;
		}
		else{
			$primeiro_digito = 11-$resto;
		}

		$calc2 = (substr($numero, -14,1)*6)+(substr($numero, -13,1)*5)+(substr($numero, -12,1)*4)+(substr($numero, -11,1)*3)+(substr($numero, -10,1)*2)+(substr($numero, -9,1)*9)+(substr($numero, -8,1)*8)+(substr($numero, -7,1)*7)+(substr($numero, -6,1)*6)+(substr($numero, -5,1)*5)+(substr($numero, -4,1)*4)+(substr($numero, -3,1)*3)+ $primeiro_digito*2;

		$resto = $calc2%11;

		if ($resto < 2) {
			$segundo_digito = 0;
		}
		else{
			$segundo_digito = 11-$resto;
		}

		if (($primeiro_digito) == substr($numero, -2,1) && ($segundo_digito) == substr($numero, -1,1)) {
			return "válido";
		}
		else{
			return "falso";
		}

	}

	function gerador_cnpj(){
		$n1 = rand(0,9);
		$n2 = rand(0,9);
		$n3 = rand(0,9);
		$n4 = rand(0,9);
		$n5 = rand(0,9);
		$n6 = rand(0,9);
		$n7 = rand(0,9);
		$n8 = rand(0,9);
		$n9 = 0;
		$n10 = 0;
		$n11 = 0;
		$n12 = 1;
		$n13 = 0;
		$n14 = 0;

		$calc = $n1*5 + $n2*4 + $n3*3+ $n4*2 + $n5*9+ $n6*8+ $n7*7+ $n8*6+ $n9*5 + $n10*4 + $n11*3 + $n12*2;
		$resto = $calc%11;
		if ($resto < 2) {
			$n13 = 0;
		}
		else{
			$n13 = 11-$resto;
		}

		$final = $n10;

		$calc2 = $n1*6 + $n2*5 + $n3*4+ $n4*3 + $n5*2+ $n6*9+ $n7*8+ $n8*7+ $n9*6 + $n10*5 + $n11*4 + $n12*3 + $n13*2;
		$resto = $calc2%11;
		if ($resto < 2) {
			$n14 = 0;
		}
		else{
			$n14 = 11-$resto;
		}

		return "$n1"."$n2"."$n3"."$n4"."$n5"."$n6"."$n7"."$n8"."$n9"."$n10"."$n11"."$n12"."$n13"."$n14";

	}

 ?>