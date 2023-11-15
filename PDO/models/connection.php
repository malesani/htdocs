<?php

    class Connection{
        
        public static function connect(){

            $link = new PDO('mysql:host=localhost; dbname=pdo_test','root','root');
            return $link;
            
        }
    }

    $connection = new Connection();
    $link = $connection->connect();
    
    if ($link) {
        echo "Conexión exitosa";
    } else {
        echo "Error al conectar: " . $link->errorInfo()[2];
    }

?>