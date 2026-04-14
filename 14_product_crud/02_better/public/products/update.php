<?php

require_once "../../functions.php";
$pdo = require_once '../../database.php';

$id = $_GET['id'] ?? null;
if (!$id) {
    header('Location: index.php');
    exit;
}

$statement = $pdo->prepare('SELECT * FROM products WHERE id = :id');
$statement->bindValue(':id', $id);
$statement->execute();
$product = $statement->fetch(PDO::FETCH_ASSOC);


$title = $product['title'];
$description = $product['description'];
$price = $product['price'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $title = $_POST['title'] ?? '';
    $description = $_POST['description'] ?? '';
    $price = $_POST['price'] ?? '';

    $image = $_FILES['image'] ?? null;
    $imagePath = $product['image']; // keep old image

    if (!is_dir('../../public/images')) {
        mkdir('../../public/images', 0777, true);
    }

    if ($image && $image['tmp_name']) {

        // delete old image
        if ($product['image'] && file_exists('../../public/' . $product['image'])) {
            unlink('../../public/' . $product['image']);
        }

        $imageName = randomString(8) . '_' . $image['name'];
        $imagePath = 'images/' . $imageName;

        move_uploaded_file($image['tmp_name'], '../../public/' . $imagePath);
    }

    if (empty($errors)) {
        $statement = $pdo->prepare("UPDATE products SET 
            title = :title,
            image = :image,
            description = :description,
            price = :price
            WHERE id = :id");

        $statement->execute([
            'title' => $title,
            'image' => $imagePath,
            'description' => $description,
            'price' => $price,
            'id' => $id
        ]);

        header('Location: index.php');
        exit;
    }
}

?>
<?php require_once '../../views/partials/header.php'; ?>
<p>
    <a href="index.php" class="btn btn-secondary">Back to products</a>
</p>
<h1>Update Product: <b><?php echo $product['title'] ?></b></h1>


<?php require_once '../../views/products/form.php' ?>

</body>
</html>
