<?php 
$parag = "La meccanica quantistica è la teoria fisica che descrive il comportamento della materia, della radiazione e le reciproche interazioni, con particolare riguardo ai fenomeni caratteristici della scala di lunghezza o di energia atomica e subatomica, dove le precedenti teorie classiche risultano inadeguate.";
$censura = $_GET["censura"];

var_dump($_GET);

echo $parag;
echo "<br>";
echo "<strong>Lunghezza paragrafo: </strong>" . strlen($parag);
echo "<br>";
echo "<strong>Parola censurata: </strong>" . $censura . "<strong> alla posizione: </strong>" . stripos($parag, $censura);

echo "<br>";
echo "<strong>Paragrafo con censura</strong>";
echo "<br>";

if(stripos($parag, $censura) !== false) {
    echo str_replace($censura, "***", $parag);
}
?>

