<?php


$pdo = new PDO('mysql:host=localhost; port=3306; dbname=product_crud', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// image=&title=&description=&price=


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
    <h1>Create New Product</h1>

    <p>
        <button href="create.php" class="btn btn-success">Create Product</button>
    </p>

    <form action="" method="get">
        <div class="mb-3">
            <label>Product Image</label>
            <br>
            <input type="file" name="image">
        </div>
        <div class="mb-3">
            <label>Product Title</label>
            <input type="text" class="form-control" name="title">
        </div>
        <div class="mb-3">
            <label>Product Description</label>
            <textarea class="form-control" name="description"></textarea>
        </div>
        <div class="mb-3">
            <label>Product Price</label>
            <input type="number" step='0.01' class="form-control" name="price">
        </div>
                <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>

</html>