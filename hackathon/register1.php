<?php
$server= "localhost";
$username="root";
$password="";

$con = mysqli_connect($server,$username,$password);

if(!$con){
    die("connec done".
    mysqli_connect_error())

}
echo "sucess";
?>