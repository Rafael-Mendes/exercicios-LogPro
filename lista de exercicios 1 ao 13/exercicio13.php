<?php
print "conversor entre Celsius e Fahrenheit: ";

print" \nDeseja entrar com temperatura em Celsius ou Fahrenheit (C/F)?: ";
$unidade = trim (fgets(STDIN));

if($unidade =="C" || $unidade =="C"){
print"Digite a temperatura em Celsius: ";
$C =trim(fgets(STDIN));
$F = 9/5 * $C + 32;
print"\nEquivalente em Fahrenheit = $F";
}
else{
	print "digite a temperatura em fahrenheit";
	$F=trim(fgets(STDIN));
	$C =5/9*($F - 32);
	print"\nEquivalente em Celsius = $C";
}