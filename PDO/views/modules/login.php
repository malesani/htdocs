<h2>Login</h2>

<form method="POST">

    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" placeholder="la tua mail" name="email" aria-describedby="emailHelp">

    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" placeholder="password" name="password">
    </div>

    <button type="login" class="btn btn-block btn-primary" name="login">Invia</button>

</form>

<?php

$login = new MvcController();
$login -> loginUtenteController();

    if(isset($_GET["action"])){
        if($_GET["action"] == "errore"){
            echo 'login fallito ';
        }
    }
?>
