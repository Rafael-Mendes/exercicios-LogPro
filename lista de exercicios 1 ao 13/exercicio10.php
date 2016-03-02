<?php
print"Programa para caucular o valor das raнzes de uma equaзгo de 2°grau:";
print"                      \naxІ + bx + c = 0";

print"\n\nDigite o coeficiente a: ";
$a = trim(fgets(STDIN));
print"Digite o coeficiente b: ";
$b =trim(fgets(STDIN));
print"Digite o coeficiente c: ";
$c = trim (fgets(STDIN));

$delta= pow($b,2)-4*$a*$c;

if($delta < 0){
	print"\nEsta equaзгo nгo possui raнzes reais.";
}
else{
	$x1= (-$b + sqrt($delta)) / (2 * $a);
	$x2= (-$b - sqrt($delta)) / (2 * $a);
	print"\nRaнzes da Equaзгo:";
	print"\nx1= ".$x1;
	print"\nx2= ".$x2;
}
?>