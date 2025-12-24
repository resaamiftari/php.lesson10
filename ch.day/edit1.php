<?php
include_once("config1.php");
$id=$_GET['id'];

$sql="SELECT * FROM products Where id=:id";

$prep=$conn->prepare($sql);

$prep->bindParam(':id',$id);
$prep->execute();
$prep=$prep->fetch();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="update.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $data['id']?>"><br>
        <input type="text" name="name" value="<?php echo $data['name']?>"><br>
        <input type="text" name="quantity" value="<?php echo $data['quantity']?>"><br>
        <input type="hidden" name="price" value="<?php echo $data['price']?>"><br>

        <button type="submit" name="update">Update</button>
    </form>
    <a href="dashboard1.php">Dashboard</a>
</body>
</html>