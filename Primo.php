<?php 

/*
2 -Função Primo($inicial,$final)
Crie uma função que receba como parâmetro 2 números  inteiros (inicial e final)  
e retorne um array com os números primos estão compreendidos entre o valor inicial e o final, 
desprezando o número inicial e final recebidos como parâmetro. 

Exemplo para teste:

Numero Inicial = 10
Número Final = 29
Resposta: Encontrados 5 números primos, são eles: 11,13,17,19,23 

**/

function Primo($inicial, $final) {
	$inicial++;
	$array = array();
	for($i=$inicial;$i<$final;$i++) {
		if(gmp_prob_prime($i) >=2) {
			$array[] = $i;
		}
	}
	
	echo "Foram encontrados " . count($array) . " números primos, são eles: ";
	
	foreach($array as $indice => $value) {
		echo $value . ", ";
	}
	
}


Primo(10, 29);
