<?php

    session_start();

    if(!$_SESSION['validation']){
        header('location:index.php?action=login');

        exit();
    }

?>


<h1>utente</h1>

<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">Nome</th>
            <th scope="col">Email</th>
            <th scope="col">Password</th>
            <th scope="col">Gestici</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <?php
                $mostraUtenti = new MvcController();
                $mostraUtenti -> mostraUtentiController();
                $mostraUtenti -> cancellaUtenteController();
                
            ?>
        </tr>
    </tbody>
</table>



<?php

    if(isset($_GET['action'])){
        if($_GET["action"] == 'edit'){
            echo 'hai aggiornato i dati';
        }
    }


?>