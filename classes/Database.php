<?php
include 'config.inc.php';
class Database{
    
    private $dbh;

    public function __construct(){
        $dsh = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME) or die('Failed'.mysql_error());
    }

    //method to take a query
    public function query($query){
        return mysql_query($query);
    }
}
?>