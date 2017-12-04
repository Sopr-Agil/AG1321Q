<?php
        require_once 'dao/ConexionClass.php'; 
        require_once 'dao/UsuarioClass.php'; 
        require_once 'handler/view.php';
        require 'constants/constants.php';
        require 'constants/constants_views.php';
    
        
        
        $uri = $_SERVER['REQUEST_URI'];
        $view = str_replace(ROOT,'', $uri);      
        $view = str_replace('/','', $view);
        
        handler($view);
    
    
function handler($view ='') {  
    $print_view = new View();
    $users = new UsuarioClass();
   
        switch ($view) {             
            case VIEW_ADMIN:
                echo $users->getUsers();
               $print_view->html($view);
                break;
            
            case VIEW_MONITOREO:
                $print_view->html($view);
                
                
            default: $print_view->html(VIEW_HOME);
    }//switch
}//handler
?>