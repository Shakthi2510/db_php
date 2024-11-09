<?php
$host="localhost";
$signup="root";
$pass="";
$db="data";
$conn=new mysqli($host,$signup,$pass,$db);
if($conn->connect_errno){
    echo "Failed to conect DB".$conn->connect_error;
}
?>