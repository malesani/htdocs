<?php

    class MvcTemplate {
        public function mostraTemplate(){
            include 'views/template.php';
        }


        public function collegamentiPagine(){
            if(isset($_GET["action"])){
                $linkController = $_GET["action"];
                // echi $linkController;
                $responses = linkPaginaModello::collegamentiPagina($linkController); 
                include $responses;

            }else{
                $linkController = "index";
            }
        }

    }



?>