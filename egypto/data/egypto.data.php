<?php
namespace data;

use PDO;
use PDOException;

class EgyptoData
{
    protected $db = null;
    
    public function __construct()
    {
        $app = \Application::getApplication();
        $this->db = $app->getDB();
    }
    
    public function findAll() {
        
        $sql = "select * from lieu";
        $request = $this->db->prepare($sql);
        try {
            $request->execute();
        } catch (PDOException $err) {
            print "Error :" . $err->getMessage();
        }
        $result = $request->fetchAll(PDO::FETCH_BOTH);
        return $result;
    }

    public function register($nameLocation, $description, $location) {

        $sql = "INSERT INTO lieu(NomLieu, description, situation) " .
            "VALUES(:location_name, :description, :location)";
        $request = $this->db->prepare($sql);
        $request->bindValue(':location_name', $nameLocation);
        $request->bindValue(':description', $description);
        $request->bindValue(':location', $location);
        try {
            $request->execute();
        } catch (PDOException $err) {
            print "Error :" . $err->getMessage();
        }
        //$result = $request->fetchAll(PDO::FETCH_BOTH);
        //return $result;
    }
}

