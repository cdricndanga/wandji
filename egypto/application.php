<?php
require_once('configuration.php');

class Application
{
    private $controleurParDefaut = '';
    private static $_application = null;
    private $db ;
    
    private function __construct($fichierIni) {
        $c = Config::getConfig($fichierIni);
        try{
            $this->db = new PDO('mysql:host='.$c->hostname.';dbname='.$c->database, $c->login, $c->password);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $ex) {
            die('Erreur connexion:'.$ex->getMessage());

        }
    }
    
    public static function getApplication($fichierIni=''){
        if(is_null(self::$_application) === true){
            self::$_application = new Application($fichierIni);
        }
        return self::$_application;
    }
    
     public function getDB(){
        return $this->db;
    }
    
    public function setControleurParDefaut($controleurParDefaut){
        $this->controleurParDefaut = $controleurParDefaut;
    }
    
        
}



?>
