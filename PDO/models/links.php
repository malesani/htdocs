<?php 

class pagine{
    public static function collegamentiPagina($links){

        if($links == "registration" || 
            $links == "login" || 
            $links == "utenti" ||
            $links == "update" ||
            $links == "logout"){
                $moduloNav = "views/modules/" . $links . ".php";
               

        }else if($links == 'index'){

            $moduloNav = 'views/modules/home.php';

        }else if($links == 'ok'){

            $moduloNav = 'views/modules/utenti.php';

        }else if($links == 'errore'){

            $moduloNav = 'views/modules/login.php';

        
        }else if($links == 'edit'){

            $moduloNav = 'views/modules/utenti.php';

        }else{

            $moduloNav = 'views/modules/home.php';

        };
        
        return $moduloNav;
    }

}


?>