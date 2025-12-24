<?php

include_once("config1.php");

$id=$_GET['id'];

$sql="DELETE FROM products where id=:id";
$getProducts=$conn->prepare($sql);

$getProducts->bindParam(":id",$id);
$getProducts->execute();

header("Location:dashboard1.php");

?>