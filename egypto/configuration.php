<?php

class Config
{

    public  $data = null;
    private static $_config = null;
    
    private function __construct($fichier){
        if(!file_exists($fichier)){
            die('fichier inexistant');
        }
        else {
            if(parse_ini_file($fichier) == false)
            {
                die('erreur de lecture du fichier');
            }
        }
        $this->data = parse_ini_file($fichier);
    }
    
    static public function getConfig($fichier =''){
        if(is_null(self::$_config) === true){
            self::$_config = new Config($fichier);
        }
        return self::$_config;
    }
    
    public function __get($propriete)
    {
        if(isset($this->data[$propriete]))
        {
            return $this->data[$propriete];
        }
        else{
            die('propriete inexistante');
        }
    }
    
    public function demo(){
        return $this->data;
    }
}

