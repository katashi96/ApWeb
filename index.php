<?php
        
        require_once 'controladores/iniciarControlador.php';
        $controlador=new iniciarControlador();
       if(!isset($_REQUEST['c'])){
          $controlador->biografia(); 
       }else {
            $accion= $_REQUEST['c'];
            
            call_user_func(array($controlador,$accion));
            
        }      
?>