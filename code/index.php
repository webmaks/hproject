<?php
$servername = "db";
$username = "test";
$password = "test";

try {
    $conn = new PDO("mysql:host=$servername;dbname=test", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully";
    // Query to retrieve Products table rows
    $sql = "SELECT id, name, supplier, category, price, instock FROM products";
    $statement = $conn->prepare($sql);
    $statement->execute();
    $results = $statement->fetchAll(PDO::FETCH_ASSOC);
    $json = json_encode($results);
    //echo $json;
    echo json_encode(json_decode($json), JSON_PRETTY_PRINT);


    
/*
    // Loop to display data
    foreach ($conn->query($sql) as $row) {
        echo "ID: ".$row['id'].", ".
            "Name: ".$row['name'].", ".
            "Supplier: ".$row['supplier'].", ".
            "Category: ".$row['category'].", ".
            "Price: ".$row['price'].", ".
            "In Stock: ".$row['instock']."<br>";
	}
*/
    
    $conn = null;
    }
catch(PDOException $e)
    {
    echo "Failed with the following error: " . $e->getMessage();
    }
?>

