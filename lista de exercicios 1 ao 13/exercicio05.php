<?php
print"saiba se seu n�umero � impar ou par: ";

print "\n\nDigite o N�mero: ";
$a= trim(fgets(STDIN));
 
if($a %2 == 0){
	print" \nSeu numero � PAR";
}
else{
	print"\nSeu numero � IMPAR";
}
?>
