<?php
session_start();


if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

$products = [
    ["id" => 1, "name" => "Tesla Model 3", "price" => "$45,000", "image" => "tesla_model_3.jpg", "description" => "an electric car wih advanced autopilot features."],
    ["id" => 2, "name" => "Ford Mustang", "price" => "$55,000", "image" => "ford_mustang.jpg", "description" => "a classic muscle car with a poweful V8 engine."],
    ["id" => 3, "name" => "BMW Series 3", "price" => "$42,000", "image" => "bmw_series_3.jpg", "description" => "a luxury sedan with premium features."],
    ["id" => 4, "name" => "Toyota Corolla", "price" => "$25,000", "image" => "toyota_corolla.jpg", "description" => "areliable and fuel-efficient compact car."],
    ["id" => 5, "name" => "Chevy Silverado", "price" => "$50,000", "image" => "chevy_silverado.jpg", "description" => "a powerful pickup truck with great towing capacity."]
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
                <li><a href="index.php">Home</a></li> // to be filles 
                <li><a href="productpage.php">Products</a></li>
                <li><a href="cart.php">Cart (<?php echo count($_SESSION['cart']); ?>)</a></li>
                <li><a href="contact.php">Contact</a></li> // to be filled
            </ul>
        </nav>
    </header>
    <main>
        <h2>Our Products</h2>
        <div class="product-list">
            <?php foreach ($products as $product): ?>
                <div class="product-item">
                    <img src="images/<?php echo htmlspecialchars($product['image']); ?>" alt="<?php echo htmlspecialchars($product['name']); ?>">
                    <h3><?php echo htmlspecialchars($product['name']); ?></h3>
                    <p><?php echo htmlspecialchars($product['description']); ?></p>
                    <p><strong>Price: <?php echo htmlspecialchars($product['price']); ?></strong></p>
                    
                    <form action="cart.php" method="POST">
                        <input type="hidden" name="product_id" value="<?php echo $product['id']; ?>">
                        <input type="hidden" name="product_name" value="<?php echo $product['name']; ?>">
                        <input type="hidden" name="product_price" value="<?php echo $product['price']; ?>">
                        <button type="submit" name="add_to_cart">Add to Cart</button>
                    </form>

                    <button>MODIFY</button>
                </div>
            <?php endforeach; ?>
        </div>
    </main>
</body>
</html>
