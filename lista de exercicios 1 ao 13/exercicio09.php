<?php
print "Programa para saber se o numero é positivo , negativo ou nulo:";

print"\nDigite um numero: ";
$n = trim(fgets(STDIN));

if ($n>0){
	print"\nNúmero positivo";
}
else{
	if($n<0){
		print"\nNúmero negativo";
}
else{
	print"\nNulo";
}
}
?>