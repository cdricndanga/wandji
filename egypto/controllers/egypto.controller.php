<?php
namespace controllers;
use data\EgyptoData;

require_once 'data/egypto.data.php';

class EgyptoController
{
    private $locations;

    public function __construct()
    {}
    
    public function doGetAction($action) {
        
        if(!isset($action) || $action == "home") {
            $this->defaultAction();
        }
        else if ($action == "create") {
            $this->createAction();
        }
        else if ($action == "update") {
            $this->updateAction();
        }
        else if ($action == "register_form") {
            $this->displayRegisterForm();
        }
    }
    
    public function updateAction() {
        
    }
    
    public function defaultAction() {

        $egyptoData = new EgyptoData();
        $result = $egyptoData->findAll();
        $this->setLocations($result);
        require "home.php";
    }
    
    public function createAction($nameLocation, $description, $location){

        $egyptoData = new EgyptoData();
        $egyptoData->register($nameLocation, $description, $location);
        $this->defaultAction();
    }

    public function displayRegisterForm(){
        require "new.php";
    }
    
    public function getLocations()
    {
        return $this->locations;
    }
    
    public function setLocations($locations)
    {
        $this->locations = $locations;
    }
    
}

