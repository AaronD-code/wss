<?php

session_start();



// cars which can be modifed 
$products = [
    ["id" => 1, "name" => "Tesla Model 3", "Base price" => "", "image" => "", "description" => ""],
    ["id" => 2, "name" => "Ford Mustang", "Base price" => "", "image" => "", "description" => ""],
    ["id" => 3, "name" => "BMW Series 3", "Base price" => "", "image" => "", "description" => ""],
    ["id" => 4, "name" => "Toyota Corolla", "Base price" => "", "image" => "", "description" => ""],
    ["id" => 5, "name" => "Chevy Silverado", "Base price" => "", "image" => "", "description" => ""],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ASC Motors - Product Page</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>ASC Motors</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="products.php">Products</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h2>Our Products</h2>
        <div class="product-list">
            <?php foreach ($products as $product): ?>
                <div class="product-item">
                    <img src="images/<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>">
                    <h3><?php echo $product['name']; ?></h3>
                    <p><?php echo $product['description']; ?></p>
                    <p><strong>Price: <?php echo $product['price']; ?></strong></p>
                    <button>MODIFY</button>
                </div>
            <?php endforeach; ?>
        </div>
    </main>
</body>
</html>
