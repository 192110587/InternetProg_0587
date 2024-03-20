<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Fashion Store</title>
</head>
<body>
    <h1>Welcome to our Online Fashion Store</h1>
    
    <h2>Categories</h2>
    <ul>
        <?php
        // Fetch and display all categories
        $categories = get_categories();
        foreach ($categories as $category) {
            echo "<li><a href='category.php?id={$category['id']}'>{$category['name']}</a></li>";
        }
        ?>
    </ul>
</body>
</html>
