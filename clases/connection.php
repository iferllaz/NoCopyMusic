<?php
require_once $_SERVER['DOCUMENT_ROOT']."./nocopymusic/vendor/autoload.php";
class Connection{
    public function connect(){
        try{
            $server = "127.0.0.1";
            $port = "27017";
            $user = "ncadmin";
            $password = "123123";
            $db = "nocopydb";

            $connection_string = "mongodb://".$user.":".$password."@".$server.":".$port."/".$db;

            $cliente = new MongoDB\Client($connection_string);
            return $cliente->selectDatabase($db);
        } catch (\Throwable $th){
            return $th->getMessage();
        }

            }
}

$object = new Connection();
var_dump($object->connect());

?>