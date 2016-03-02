<?php
print "CAUCULANDO: HIPOTENUSA, PERÍMETRO E ÁREA DE UM TRIÂNGULO: ";

print "\n\nDigite a medida do cateto1 - ";
$cateto1 = trim(fgets(STDIN));
print "digite a medida do cateto2 - ";
$cateto2 = trim(fgets(STDIN));

$hip =pow($cateto1,2) + pow($cateto2,2);

$hipotenusa= sqrt($hip);

$perimetro =($cateto1 + $cateto2 +$hipotenusa);

$area =($cateto1*$cateto2)/2;

print "\n Hipotenusa = $hipotenusa cm.";


Print "\n Perimetro  = $perimetro cm.";


print "\n Área = $area cm².";


?>
