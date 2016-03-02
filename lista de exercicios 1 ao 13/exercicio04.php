<?php
print "Programa  para caucular 4 medias e saber se esta Aprovado ou Reprovado: ";

print "\n\nDigite a primeira nota: ";
$n1 = trim(fgets(STDIN));
print "Digite a segunda nota: ";
$n2 =trim(fgets(STDIN));
print "Digite a terceira nota: ";
$n3 = trim(fgets(STDIN));
print "Digite a quarta nota: ";
$n4 = trim (fgets(STDIN));

$media = ($n1 + $n2 + $n3 + $n4 )/4;
print"\n\nMédia= " .$media;

if ($media >= 6){
	print "\nAprovado";
}
else{
	print"\nReprovado";
}
?>	