<?php

    class Utente{
        public $nome;
        public $cognome;
        
        public function __construct($nome, $cognome){
    
            $this -> nome = $nome;
            $this -> cognome = $cognome;
        }
     }

    $utente1 = new Utente("Mario","Rossi");
    echo $utente1 -> nome;

    echo "<br>";
    
    $utente2 = new Utente("Carla", "verdi");
    echo $utente2 -> cognome;

?>