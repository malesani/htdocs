<?php
 
$fiori = array("rosa","garogano","gardenia","orchidea");

foreach($fiori as $fiore){
    echo $fiore . "<br>";
}

echo "<br>";

$fioriAss = array(
    "rossa:" => "rosa",
    "bianco:" => "garogano",
    "blue:" => "gardenia",
    "garden:" => "orchidea"
);

foreach($fioriAss as $fioreSing => $data){
    echo $fioreSing,$data . "<br>";
}

?>

