<?php
// Retrieve category from URL parameter
$category = isset($_GET['category']) ? $_GET['category'] : 'dresses'; // Default category

// Fetch products from the database based on the category
// Assume products are fetched from a database
$products = array(
    array('id' => 1, 'name' => 'Product 1', 'price' => 50, 'category' => 'dresses'),
    array('id' => 2, 'name' => 'Product 2', 'price' => 60, 'category' => 'dresses'),
    array('id' => 3, 'name' => 'Product 3', 'price' => 40, 'category' => 'shirts'),
    // Add more products here
);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Products</h1>
    </header>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="cart.php">Cart</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </nav>
    <main>
        <h2><?php echo ucfirst($category); ?></h2>
        <ul>
            <?php foreach ($products as $product): ?>
                <?php if ($product['category'] === $category): ?>
                    <li><?php echo $product['name']; ?> - $<?php echo $product['price']; ?></li>
                <?php endif; ?>
            <?php endforeach; ?>
        </ul>
    </main>
    <footer>
        <p>&copy; 2024 Online Fashion Store</p>
    </footer>
</body>
</html>
