<?php  
/*
	Funcion de Suma de Binarios
 * @param string $_POST['val1']
 * @param string $_POST['val2']
*/

$value1 = $_POST['val1'];
$value2 = $_POST['val2'];

$rest = sumaBinarios($value1,$value2);
$rest2 = ltrim($rest, '0');

echo $rest2;


function sumaBinarios($val1, $val2){
	$car = 0;
	$result = '';
	$sum = 0;
	$num1 = $val1;
	$num2 = $val2;

	for($c=0; $c<32-strlen($val1); $c++){
		$num1 = '0'.$num1;
	}
	for($c=0; $c<32-strlen($val2); $c++){
		$num2 = '0'.$num2;
	}

	for($i=31; $i>=0; $i--){
		$sum = $num1[$i] + $num2[$i] + $car;
		
		$result = ($sum & 1).$result;
		$car = $sum >> 1;
	}
	return $result;
}


?>