<?php


//viariabili
$soma = 5 + 3;
echo $soma . "<br>";
 
$soma = 10 + 3;
echo $soma;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>hello world</h1>

    <p>
        <b>
            <?php 
                echo "hello world 2" . $soma;
            ?>
        </b>
    </p>
</body>
</html>