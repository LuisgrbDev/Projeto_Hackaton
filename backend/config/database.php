<?php
class Database
{

    private static $instance = null;

    public static function  getInstance()
    {
        if (self::$instance === null) {
            $host = 'localhost';
            $name = 'reserva_sala';
            $username = 'root';
            $password = '';

            self::$instance = new PDO("mysql:host=$host;dbname=$name", $username, $password);

            self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        return  self::$instance;
    }
}
