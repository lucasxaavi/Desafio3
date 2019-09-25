<?php
$filmesLista = ["Avengers", "Captain Marvel", "Homem-Formiga e a vespa"];
echo count($filmesLista);

echo "<br>Filmes<br>";

for($i = 0 ; $i < count($filmesLista) ; $i++){
    echo $filmesLista[$i] . "<br>";
    
}