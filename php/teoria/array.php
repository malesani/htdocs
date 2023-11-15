<?php

    $utente = array(
        "mario",
        "rossu",
        30,
        "roma
        "
    );

    var_dump($utente);
    echo "<br>";
    print_r($utente);



    $utente = array(
        array(
            "Nome" => "mario",
            "Cognome" => "rossu",
            "anni" => 30,
            "luogo" => "roma"
        ),
        array(
            "Nome" => "mario",
            "Cognome" => "rossu",
            "anni" => 30,
            "luogo" => "roma"
        )
    );

    echo $utente[0]["Nome"];
?>