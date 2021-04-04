<?php

/*

[ my understand ]

It's like create a global variable. 

Basicly whta it does is to not acept a another instance of a class, because that class has to be instanteadted 
just one time. 


*/

ini_set('display_errors', 1);
error_reporting(~0);


class Database {

    public static $instance;
    private $data = "";

    private function __constructor(){
        
    }

    public static function getInstance(){
        if(!isset(Database::$instance))
      return   Database::$instance = new Database();

      return Database::$instance;
    }

    public function checKConnectivity(){
        echo "Connected with sucess";
    }

    public function setData($data){
        $this->data = $data;
    }

    public function getData(){
        echo $this->data;
    }
}


$db = Database::getInstance();

$db->checKConnectivity();

$db->setData("This is unchenged data");

$g = Database::getInstance();

echo "<br/>";
echo "<br/>";

$g->getData();






?>