<?php
session_start();

$products="root";
$server="localhost";
$dbname="testdb";

try{
    $conn=new PDO("mysql:host=$server;dbname=$dbname",$products,);

}catch(PDOException $e){
    echo "Error:" . $e->getMessage();
}
?>