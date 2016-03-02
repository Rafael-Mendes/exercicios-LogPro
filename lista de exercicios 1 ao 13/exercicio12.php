<?php
print"programa para medir 3 medidas e saber se pode formar um Triângulo,e se for possivel mostrar a sua área:";

print"\nDigite medida 1: ";
$m1 = trim(fgets(STDIN));
print"Digite medida 2: ";
$m2 = trim(fgets(STDIN));
print"Digite medida 3: ";
$m3 = trim(fgets(STDIN));



if($m1+$m2>$m3 && $m2+$m3>$m1 && $m3+$m1>$m2 ){
	print"\nEstas medidas podem formar um Triangulo.";
	$T=($m1+$m2+$m3)/2;
	$area=sqrt(($T*($T-$m1)*($T-$m2)*($T-$m3)));
	print"\nArea = ".$area."cm²";
}
else{
	print"\nNão é possivel formar um Triangulo com estas medidas.";
}
?>