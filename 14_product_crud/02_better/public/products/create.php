<?php

require_once "../../functions.php";
$pdo = require_once '../../database.php';

$errors = [];

$title = '';
$description = '';
$price = '';
$product = [
    'image' => ''
];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $title = $_POST['title'] ?? '';
    $description = $_POST['description'] ?? '';
    $price = $_POST['price'] ?? '';

    $image = $_FILES['image'] ?? null;
    $imagePath = '';

    if ($image && $image['tmp_name']) {
        $imageName = randomString(8) . '_' . $image['name'];
$imagePath = 'images/' . $imageName;

move_uploaded_file($image['tmp_name'], '../../public/' . $imagePath);
    }

    if (empty($errors)) {
        $statement = $pdo->prepare("INSERT INTO products 
            (title, image, description, price, created_at)
            VALUES (:title, :image, :description, :price, :date)");

        $statement->execute([
            'title' => $title,
            'image' => $imagePath,
            'description' => $description,
            'price' => $price,
            'date' => date('Y-m-d H:i:s')
        ]);

        header('Location: index.php');
        exit;
    }
}


?>
<?php require_once '../../views/partials/header.php'; ?>
<h1>Create new Product</h1>

<?php require_once '../../views/products/form.php' ?>

</body>
</html>