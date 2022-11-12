<?php


class dbConnect {
 
    function _construct(){

require_once('config.php');
$conn = mysql_connect(HOST, USER, PASSWORD); 
mysql_select_db(DATABASE, $conn);
if($conn)

 {

die("Cannot connect the database");

}


return $conn;
    }

 }

?>