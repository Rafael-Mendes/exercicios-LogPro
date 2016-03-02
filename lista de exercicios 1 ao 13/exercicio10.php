<?php
print"Programa para caucular o valor das ra�zes de uma equa��o de 2�grau:";
print"                      \nax� + bx + c = 0";

print"\n\nDigite o coeficiente a: ";
$a = trim(fgets(STDIN));
print"Digite o coeficiente b: ";
$b =trim(fgets(STDIN));
print"Digite o coeficiente c: ";
$c = trim (fgets(STDIN));

$delta= pow($b,2)-4*$a*$c;

if($delta < 0){
	print"\nEsta equa��o n�o possui ra�zes reais.";
}
else{
	$x1= (-$b + sqrt($delta)) / (2 * $a);
	$x2= (-$b - sqrt($delta)) / (2 * $a);
	print"\nRa�zes da Equa��o:";
	print"\nx1= ".$x1;
	print"\nx2= ".$x2;
}
?>