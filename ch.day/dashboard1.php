<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,th,td{
            border:1px solid black;
            border-collapse:collapse;
        }
        td,th{
            padding:10px 20px;
        }
    </style>
</head>
<body>
    <?php
    include_once("config1.php");
    $sql="SELECT * FROM products";
    $getProducts=$conn->prepare($sql);
    $getProducts->execute();
    $products=$getProducts->fetchAll();
    ?>


<table>
    <thead>
        <th>ID</th>
        <th>Name</th>
        <th>Quantity</th>
        <th>Price</th>
        
    </thead>

    <tbody>
        <?php
        foreach($products as $product){
        ?>
        <tr>
            <td><?=$product['id']?></td>
            <td><?=$product['name']?></td>
            <td><?=$product['quantity']?></td>
            <td><?=$product['price']?></td>
            <td> <?= "<a href='delete1.php?id=$product[id]'>Delete</a> | <a href='edit1.php?id=$product[id]'>Update<\a>"?></td>
        </tr>
        <?php
        }
        ?>
    </tbody>
</table>
<a href="add1.php">Add</a>
    
</body>
</html>