<?php


$pdo = new PDO('mysql:host=localhost; port=3306; dbname=product_crud', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$statement = $pdo->prepare('SELECT * FROM products ORDER BY created_at DESC');
$statement->execute();
$products = $statement->fetchAll(PDO::FETCH_ASSOC);


?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Product CRUD</title>
</head>

<body>
    <h1>Product Crud</h1>

    <p>
        <a href="create.php" class="btn btn-success">Create Product</a>
    </p>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Image</th>
                <th scope="col">Title</th>
                <th scope="col">Price</th>
                <th scope="col">Create Date</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($products as $i=> $product): ?>
                <tr>
                    <th scope="row"><?php echo $i + 1 ?></th>
                    <td>
                        <img src="<?php echo $product['image'] ?>" class="thumb_image" alt="product_image">
                    </td>
                    <td><?php echo $product['title'] ?></td>
                    <td><?php echo $product['price'] ?></td>
                    <td><?php echo $product['created_at'] ?></td>
                    <td>
                        <a href="update.php?id=<?php echo $product['id'] ?>" type="button" class="btn btn-sm btn-outline-primary">Edit</a>
                        <a href="delete.php?id=<?php echo $product['id'] ?>" type="button" class="btn btn-sm btn-outline-danger">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>