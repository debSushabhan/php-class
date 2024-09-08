<?php
include "conn2.php";
$sql = "create database abcd";
if(mysqli_query($conn, $sql)){
    echo "database has been created";

}else{
    echo "Error connecting database" .mysqli_error($conn);
}

?>