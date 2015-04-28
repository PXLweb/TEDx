<?php

class Connection {

    // Example usage: Connection::getPDO( Connection::getTEDxDbSettings() )
    public static function getPDO($dbSettings) {
        try {
            // $db = new PDO('mysql:host=localhost;dbname=gasten;charset=UTF8', 'root', 'p@$$w0rd');
            $db = new PDO(
                    "mysql:host=" . $dbSettings["server"] . 
                    ";dbname=" . $dbSettings["database"] . ";charset=UTF8", 
                    $dbSettings["username"], 
                    $dbSettings["password"]);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $db;
        } catch (Exception $ex) {
            var_dump($ex->getTrace());
        }
    }

    public static function getTEDxDbSettings() {
        $dbTEDx = [
            'server' => 'localhost',
            'database' => 'tedx',
            'username' => 'root',
            'password' => 'Kris3803'
            ];
        return $dbTEDx;
    }

}
