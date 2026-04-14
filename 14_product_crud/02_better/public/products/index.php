<?php

require_once "../../functions.php";
$pdo = require_once '../../database.php';

$keyword = $_GET['search'] ?? null;

if ($keyword) {
    $statement = $pdo->prepare('SELECT * FROM products WHERE title like :keyword ORDER BY created_at DESC');
    $statement->bindValue(":keyword", "%$keyword%");
} else {
    $statement = $pdo->prepare('SELECT * FROM products ORDER BY created_at DESC');
}
$statement->execute();
$products = $statement->fetchAll(PDO::FETCH_ASSOC);


?>

<?php require_once '../../views/partials/header.php'; ?>
<h1>Products CRUD</h1>

<p>
    <a href="create.php" class="btn btn-sm btn-success">Add Product</a>
</p>
<form action="" method="get">
    <div class="input-group mb-3">
      <input type="text" name="search" class="form-control" placeholder="Search" value="<?php echo $keyword ?>">
      <div class="input-group-append">
        <button class="btn btn-success" type="submit">Search</button>
      </div>
    </div>
</form>
<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Image</th>
        <th scope="col">Title</th>
        <th scope="col">Price</th>
        <th scope="col">Create Date</th>
        <th scope="col">Actions</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($products as $i => $product) { ?>
        <tr>
            <th scope="row"><?php echo $i + 1 ?></th>
            <td>
                <?php if ($product['image']): ?>
                    <img src="/php-crash-course-2026/14_product_crud/02_better/public/<?php echo $product['image'] ?>" class="product-img">
                <?php endif; ?>
            </td>
            <td><?php echo $product['title'] ?></td>
            <td><?php echo $product['price'] ?></td>
            <td><?php echo $product['created_at'] ?></td>
            <td>
                <a href="update.php?id=<?php echo $product['id'] ?>" class="btn btn-sm btn-outline-primary">Edit</a>
                <form method="post" action="../products/delete.php" style="display: inline-block">
                    <input  type="hidden" name="id" value="<?php echo $product['id'] ?>"/>
                    <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
                </form>
            </td>
        </tr>
    <?php } ?>
    </tbody>
</table>

</body>
</html>