<?php

$pdo = new PDO('mysql:host=localhost;port=3306;dbname=product_crud', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$id = $_GET['id'] ?? null;

if (!$id) {
    header('Location: index.php');
    exit;
}

/* // Optional: delete image file also
$statement = $pdo->prepare("SELECT image FROM products WHERE id = :id");
$statement->bindValue(':id', $id);
$statement->execute();
$product = $statement->fetch(PDO::FETCH_ASSOC);

if ($product && $product['image'] && file_exists($product['image'])) {
    unlink($product['image']); // delete image file
} */

// Delete from DB
$statement = $pdo->prepare("DELETE FROM products WHERE id = :id");
$statement->bindValue(':id', $id);
$statement->execute();

header('Location: index.php');
exit;