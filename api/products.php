<?php

// api/products.php
header('Content-Type: application/json');
$conn = new mysqli("localhost", "root", "", "cdshop");

$result = $conn->query("SELECT * FROM products");
$products = [];

while($row = $result->fetch_assoc()) {
    $products[] = $row;
}

echo json_encode($products);
