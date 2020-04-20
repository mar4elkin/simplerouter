<?php

class Router
{
    function GetPage()
    {
        return $_SERVER['REQUEST_URI'];
    }

    function Routers($RoutersVals)
    {
        # make error throw when page did't exist
        $CurPath = $this->GetPage();

        foreach($RoutersVals as $key => $value) {
            
            if ($CurPath == $value) {

                if (file_exists('../templates/'. $key .'.php')) {

                    include '../templates/'. $key .'.php';
                
                } else {
        
                    echo 'ERROR: template is not exist but announced in config';
                }
            } 
        }
        
    }
}