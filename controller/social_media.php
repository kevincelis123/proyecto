<?php
   require_once("../config/conexion.php");
   require_once("../modelos/SocialMedia.php");
   $socialMedia = new SocialMedia();
   
   switch($_GET("op")){
    case "guardaryeditar";
        if(empty($_POST["socmed_id"])){
            $socialMedia->insert_socialMedia($_POST["socmed_icono"], $_POST["socmed_url"]);
        }else{
            $socialMedia->update_socialMedia($_POST["socmed_id"], $_POST["socmed_url"],$_POST["socmed_icono"]);
        }
        break;
    case "mostrar";
        $datos=$socialMedia->get_mostrar_socialMediaXid($_POST["socmed_id"]);
        if(is_array($datos) == true and count($datos) <> 0){
            foreach($datos as $row){
                $output["socmed_icono"] = $row["socmed_icono"];
                $output["socmed_url"] = $row["socmed_urlo"];
            }
            echo json_encode($output);
        }
    
        break;
    case "listar";
    
    
        break;
    case "eliminar";
        $socialMedia->delete_socialMedia($_POST["socmed_id"]);
    
        break;
   }
?>