<?php

    class Utente{
        private $nome;
        private $cognome;
        private $anni;

        
        public function __construct($nome, $cognome, $anni){
    
            $this -> nome = $nome;
            $this -> cognome = $cognome;
            $this -> anni = $anni;

        }
     }

    //metodo __set

    public function __set($proprieta, $valore){
        if(property_exists($this, $proprieta)){
            $this -> $proprieta = $valore;
        }
    }

    //metodo __get

    public function __get($proprieta){
        if(property_exists($this, $proprieta)){
            return $this -> $proprieta;
        }
    }



    $utente1 = new Utente("Mario","Rossi", 30);
    echo "<br>";
    
    $utente1 -> __set("cognome", "valori")
    echo "<br>";
     
    echo $utente -> __get("cognome")

    $utente2 = new Utente("Carla", "verdi", 20);
    echo $utente2 -> cognome;

?>