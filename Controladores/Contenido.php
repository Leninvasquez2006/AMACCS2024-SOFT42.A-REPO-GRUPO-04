<?php 


class Contenido{
     public function mostrar_contenido(){
        $pagina="";
        $url=isset($_GET["url"])? $_GET["url"]:null;
        $url=explode("/",$url);


        if($url[0]== "registro"){
         $pagina = "";
        }






        return $pagina;
     }
}

?>