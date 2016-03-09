<?php 
print "Fazendo soma de dois Numeros Inteiros";
Print "\nDigite um Numero ";
$Numero = trim(fgets(STDIN));
print "Digite outro Numero ";
$Numero2 = trim(fgets(STDIN));

$resultado = $Numero + $Numero2;

print "\nSua soma deu o resultado= ".$resultado;
