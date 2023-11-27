<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <title>il mio MVC</title>
    </head>
    <body>

        <?php
            include 'modules/navigation.php'
        ?>

        <div>
            <?php
                $mvc = new MvcController();
                $mvc -> linkPagineController();
            ?>
        </div>

        <script src="./assets/js/validRegistration.js"></script>
        
    </body>
</html>

