<?php
print"Progama para saber se o valor (X) esta entre Valor (A) e (B)";

print"\nDigite valor X: ";
$x =trim (fgets(STDIN));
print"Digite valor A: ";
$a = trim (fgets(STDIN));
print"Digite valor B: ";
$b = trim (fgets(STDIN));


if($x >= $a && $x <= $b){
	print"\nValor (x) Esta no intervalo fechado entre A e B";
}
else{
	print"\nValor (x) Não Esta no intervalo fechado entre A e B ";
}
?>
	