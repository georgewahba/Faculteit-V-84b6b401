<?php 
print("van welk getal wil je de faculteit weten");
$keuze = readline(":");
$antwoord = 1;
$i=1;
while ($i <= $keuze) {
 	$antwoord = ($antwoord * $i);
 	$i++;
} 
echo $antwoord;