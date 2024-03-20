<?php
// Include necessary files and initialize session, database connection, etc.

// Check if category ID is provided in the URL
if (isset($_GET['id'])) {
    $categoryId = $_GET['id'];
    
    // Fetch category details
    $category = get_category_details($categoryId);
    
    if ($category) {
        // Fetch and display subcategories and items associated with this category
        $subcategories = get_subcategories($categoryId);
        $items = get_items_in_category($categoryId);
        
        echo "<h1>{$category['name']}</h1>";
        
        echo "<h2>Subcategories</h2>";
        echo "<ul>";
        foreach ($subcategories as $subcategory) {
            echo "<li>{$subcategory['name']}</li>";
        }
        echo "</ul>";
        
       
