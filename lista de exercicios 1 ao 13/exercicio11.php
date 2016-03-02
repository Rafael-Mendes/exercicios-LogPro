<?php
print"programa para medir 3 medidas e saber se pode compor um Triângulo:";

print"\nDigite medida 1: ";
$m1 = trim(fgets(STDIN));
print"Digite medida 2: ";
$m2 = trim(fgets(STDIN));
print"Digite medida 3: ";
$m3 = trim(fgets(STDIN));



if($m1+$m2>$m3 && $m2+$m3>$m1 && $m3+$m1>$m2 ){
	print"\nEstas medidas podem formar um Triangulo";
}
else{
	print"\nNão é possivel formar um Triangulo com estas medidas.";
	
}

?>

