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
                
                session_start();
                $_SESSION['validation'] = true;

                header('location:index.php?action=utenti');
             
            }else{

                header('location:index.php?action=errore');
            
            }
        }
    }

    public static function mostraUtentiController(){
        $responseDb = Dati::mostraUtentiModel("utenti"); 
        foreach($responseDb as $row=>$data){
            echo
           ' <tr>
                <td>' . $data["nome"] . '</td>
                <td>' . $data["email"] . '</td>
                <td><a href="index.php?action=update&id='.$data["id"].'">
                        <button class="btn btn-succes">Modifica</button>
                    </a>
                </td>
                <td>
                    <button class="btn btn-danger">Cancella</button>
                </td> 
            </tr>';
        }
    }

    public static function modificaUtenteController(){
        $datiController = $_GET["id"];
        $responseDb = Dati::modificaUtenteModel($datiController, "utenti");
        $id = $responseDb["id"];
        $nome = $responseDb["nome"];
        $email = $responseDb["email"];
        $password = $responseDb["password"];

        echo '
            <div>
                <input value="'.$id.'" name="idUtente" hidden> 
                <label for="nome">Nome</label>
                <input type="text" class="form-controll" name="nome" value="'.$nome.'">
            </div>
            <div>
                <label for="email">Email</label>
                <input type="email" class="form-controll" name="email" value="'.$email.'" aria-describedby="emailHelp">
            </div>
            <div>
                <label for="password">password</label>
                <input type="text" class="form-controll" name="password" value="'.$password.'">
            </div>

            <button type="submit" name="aggiorna" class="btn btn-block btn-primary">Invia</button>        
        

        ';
    }


    public function aggiornaUtenteController(){
        if(isset($_POST['nome'])){
            $datiController = array(
                "id" => $_POST["idUtente"],
                "nome" => $_POST["nome"],
                "email" => $_POST["email"],
                "password" => $_POST["password"]
            );
            
            $responseDb = Dati::aggiornaUtenteModel($datiController, "utenti");
            if($responseDb == 'successo'){

                header('location: index.php?action=edit');
            }else{
                echo 'error';
            }

        }
    }

} 




?>