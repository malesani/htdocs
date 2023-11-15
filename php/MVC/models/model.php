<?php 

class linkPaginaModello{
    public static function collegamentiPagina($linkModel){
        if($linkModel == "home" || 
            $linkModel == "services" || 
            $linkModel == "courses" ||
            $linkModel == "contacts"){
                
                $moduloNav = "views/modules/" . $linkModel . ".php";

        }else if($linkModel == 'index'){
            $moduloNav = 'views/modules/home.php';
        }else{
            $moduloNav = 'views/modules/home.php';
        };
        
        return $moduloNav;
    }

}


?>