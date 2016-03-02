<?php
print 
print "Digite o valor do coeficiente A: ";
$A = trim(fgets(STDIN));

print "Digite o valor do coeficiente B: ";
$B = trim(fgets(STDIN));

print "Digite o valor do coeficiente C: ";
$C = trim(fgets(STDIN));

$delta = pow($B,2)- 4*$A*$C;

if ($delta < 0){
	print "\nEsta equaзгo nao possui raнzes reais";
}
 else {
 	$x1 = (-$B + sqrt($delta)) / (2 * $A);
 	$x2 = (-$B - sqrt($delta)) / (2 * $A);
 	print "\nRaнzes da equaзгo";
 	print "\nx1 = ". $x1; 
 	print "\nx2 = ". $x2;
 }
 ?>