<?php

class MvcController{

    public function pagina(){

        include "views/template.php";

    }

    public function linkPagineController(){
        if(isset( $_GET['action'])){

            $links = $_GET['action'];
            
        }else{
            
            $links = "index";
            
        }
        $response = Pagine::collegamentiPagina($links);

        include $response;
        
    }

    //create = inserimento nuovi dati

    public function registraUtenteController(){
        if(isset($_POST['submit'])){
            $datiController = array(
                "nome" => $_POST["nome"],
                "email" => $_POST["email"],
                "password" => $_POST["password"]
            );
            

            $responseDb = Dati::registraUtenteModel($datiController, "utenti");
            echo $responseDb;
            
            if($responseDb == "dati inseriti"){
                header('location:index.php?action=ok');

            }else{
                header('location:index.php');
            }
        }

    }


    //gestione login 

    public function loginUtenteController(){
        if(isset($_POST['login'])){
            
            $datiController = array(

                "email" => $_POST["email"],
                "password" => $_POST["password"]

            );

            $responseDb = Dati::loginUtenteModel($datiController, "utenti");
            var_dump($responseDb);
            if($responseDb["email"] == $_POST["email"] && $responseDb["password"] == $_POST["password"]){

                header('location:index.php?action=utenti');
                echo "giusto";
            }else{

                header('location:index.php?action=errore');
                echo "error";
            }
        }
    }

    public function mostraUtentiController(){
        $responseDb = Dati::mostraUtentiModel("utenti"); 
        foreach($responseDb as $row=>$data){
            echo
           ' <tr>
                <td>' . $data["nome"] . '</td>
                <td>' . $data["email"] . '</td>
                <td><button class="btn btn-succes">Modifica</button></td>
                <td><button class="btn btn-danger">Cancella</button></td> 
            </tr>';
        }
    }

} 




?>