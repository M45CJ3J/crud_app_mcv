<?php
require_once (LIB.'MysqliDb.php'); 
class DB {
protected $db;
public function connect()
{
    $database = new MysqliDb (HOST, USER, PASS ,DBNAME);
    if(!$database->connect()){
      //  echo "done";
        $this->db = $database;
        return $this->db;
    }else { echo "error";}
}

}