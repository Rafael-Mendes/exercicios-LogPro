<?php
print "Programa para saber se o numero � positivo , negativo ou nulo:";

print"\nDigite um numero: ";
$n = trim(fgets(STDIN));

if ($n>0){
	print"\nN�mero positivo";
}
else{
	if($n<0){
		print"\nN�mero negativo";
}
else{
	print"\nNulo";
}
}
?>