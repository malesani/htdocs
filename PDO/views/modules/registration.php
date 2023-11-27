<h2>REGISTRAZIONE</h2>

<form method="post" onsubmit="return validRegistration()">
    <div class="form-group">

        <label for="nome"><span></span>Nome</label>
        <input id="nome" type="text" class="form-control" placeholder="il tuo nome" name="nome" required>
        
    </div>

    <div class="form-group">
        <label for="email"><span></span>Email</label>
        <input id="email" type="email" class="form-control" aria-describedby="emailHelp" placeholder="la tua mail" name="email" required>
    
    </div>

    <div class="form-group">

        <label for="password">Password</label>
        <input type="password" class="form-control" placeholder="password" name="password" required>

    </div>

    <button type="submit" class="btn btn-block btn-primary" name="submit">INVIA</button>
</form>

<?php

    $registra = new MvcController();
    $registra -> registraUtenteController();


    if(isset($_GET["action"])){
        if($_GET["action"] == "ok"){
            echo 'dati inseriti correttamente';
        }
    }
?>

