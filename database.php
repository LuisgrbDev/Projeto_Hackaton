<?php
class Database {

   private $instance = null;

  public function  GetAllInstance(){
 if(self:: $instance === null){
    $host = 'localhost';
    $name = 'reserva_sala';
    $username = 'root';
    $password = '';

   self::$instance = new PDO("mysql:host=$host;dbname=$dbname", $username , $password);

    self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
return  self::$instance;
}

}

?>