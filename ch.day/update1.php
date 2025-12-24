<?php
include_once("config.php");

if(isset($_POST['update'])){
    $id=$_POST['id'];
    $name=$_POST['name'];
    $username=$_POST['quantity'];
    $email=$_POST['price'];

    $sql="UPDATE products SET id=:id, name=:name, quantity=:quantity WHERE id=:id";

    $prep=$conn->prepare($sql);
    $prep->bindParam(':id',$id);
    $prep->bindParam(':name',$name);
    $prep->bindParam(':quantity',$quantity);
    $prep->bindParam(':price',$price);

    $prep->execute();

    header("Location:dashboard1.php");

}