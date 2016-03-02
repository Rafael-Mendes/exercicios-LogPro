<?php
print"saiba se seu néumero é impar ou par: ";

print "\n\nDigite o Número: ";
$a= trim(fgets(STDIN));
 
if($a %2 == 0){
	print" \nSeu numero é PAR";
}
else{
	print"\nSeu numero é IMPAR";
}
?>
