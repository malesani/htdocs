<?php 

class pagine{
    public static function collegamentiPagina($links){

        if($links == "registration" || 
            $links == "login" || 
            $links == "utenti" ||
            $links == "logout"){
                $moduloNav = "views/modules/" . $links . ".php";
               

        }else if($links == 'index'){

            $moduloNav = 'views/modules/home.php';

        }else if($links == 'ok'){

            $moduloNav = 'views/modules/registration.php';

        }else if($links == 'errore'){

            $moduloNav = 'views/modules/registration.php';

        }else{

            $moduloNav = 'views/modules/home.php';

        };
        
        return $moduloNav;
    }

}


?>