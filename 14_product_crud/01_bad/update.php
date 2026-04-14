<?php

$pdo = new PDO('mysql:host=localhost;port=3306;dbname=product_crud', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$id = $_GET['id'] ?? null;

if (!$id) {
    header('Location: index.php');
    exit;
}

$statement = $pdo->prepare('SELECT * FROM products WHERE id = :id');
$statement->bindValue(':id', $id);
$statement->execute();

$product = $statement->fetch(PDO::FETCH_ASSOC);

if (!$product) {
    header('Location: index.php');
    exit;
}

$errors = [];

$title = $product['title'];
$description = $product['description'];
$price = $product['price'];

# ✅ NOW SAFE
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $title = $_POST['title'] ?? '';
    $description = $_POST['description'] ?? '';
    $price = $_POST['price'] ?? '';

    $image = $_FILES['image'] ?? null;
    $imagePath = $product['image'];

    if (!is_dir('images')) {
        mkdir('images');
    }

    if ($image && $image['tmp_name']) {

        if ($product['image'] && file_exists($product['image'])) {
            unlink($product['image']);
        }

        $imagePath = 'images/' . uniqid() . '_' . $image['name'];
        move_uploaded_file($image['tmp_name'], $imagePath);
    }

    if (!$title) {
        $errors[] = 'Product title is required';
    }

    if (!$price) {
        $errors[] = 'Product price is required';
    }

    if (empty($errors)) {
        $statement = $pdo->prepare("UPDATE products SET
            title = :title,
            image = :image,
            description = :description,
            price = :price
            WHERE id = :id");

        $statement->bindValue(':title', $title);
        $statement->bindValue(':image', $imagePath);
        $statement->bindValue(':description', $description);
        $statement->bindValue(':price', $price);
        $statement->bindValue(':id', $id);

        $statement->execute();

        // ✅ REDIRECT HERE
        header('Location: index.php');
        exit;
    }
}
?>

<!doctype html>
<html>
<head>
    <title>Update Product</title>
</head>
<body>

<h1>Update Product</h1>

<?php if (!empty($errors)): ?>
    <div>
        <?php foreach ($errors as $error): ?>
            <div><?php echo $error ?></div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>

<form method="post" enctype="multipart/form-data">

    <?php if ($product['image']): ?>
        <img src="<?php echo $product['image'] ?>" width="100"><br>
    <?php endif; ?>

    <input type="file" name="image"><br><br>

    <input type="text" name="title" value="<?php echo $title ?>"><br><br>

    <textarea name="description"><?php echo $description ?></textarea><br><br>

    <input type="number" step="0.01" name="price" value="<?php echo $price ?>"><br><br>

    <button type="submit">Update</button>

</form>

</body>
</html>