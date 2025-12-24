<?php
include_once("config1.php");

if(isset($_POST['submit'])){
    $id=$_POST['id']
    $name=$_POST['name'];
    $quantity=$_POST['quantity'];
    $price=$_POST['price'];

    $sql="INSERT INTO products (id,name,quantity,price) values (:id,:name,:quantity,:price)";
    $sqlQuery=$conn->prepare($sql);

    $sqlQuery->bindParam(":id",$id);
    $sqlQuery->bindParam(":name",$name);
    $sqlQuery->bindParam(":quantity",$quantity);
    $sqlQuery->bindParam(":price",$price);
    $sqlQuery->execute();

    echo "Data saved successfully";
    header("dashboard1.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="add1.php" method="POST">
        <input type="hidden" id="id" placeholder="id">
        <input type="text" name="name" placeholder="Name">
        <input type="hidden" name="quantity" placeholder="quantity">
        <input type="hidden" name="price" placeholder="price">
        <button type="submit" name="submit">Add</button>
    </form>
    
</body>
</html>