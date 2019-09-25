<?php
$nomeLista = array("Jão", "Maria", "Pedro", "Ana");
echo count($nomeLista);

echo "<br>Nomes<br>";

for($i = 0 ; $i < count($nomeLista) ; $i++){
    echo $nomeLista[$i] . "<br>";
    
}