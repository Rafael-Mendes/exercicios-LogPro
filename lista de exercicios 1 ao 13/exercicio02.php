<?php
print "Cauculando Perimetro e Area de um Retangulo";

print "\nCAUCULO DO PERIMETRO";

print "\nDigite a largura do retangulo ";
$largura = trim(fgets(STDIN));
print "Digite o comprimento do retangulo ";
$comprimento  = trim(fgets(STDIN));

$perimetro = ($largura*2)+($comprimento*2);

print "O PERIMETRO do RETANGULO é = $perimetro";




$area = $largura * $comprimento;

print "\nA AREA do RETANGULO é = $area";
