<?php

print "digite seu peso = " ;

$peso = trim(fgets(STDIN));

print "digite sua altura = ";
		
$altura = trim(fgets(STDIN));

 $IMC = $peso / ( $altura * $altura );
 
 print "\nSeu IMC é = $IMC";
 