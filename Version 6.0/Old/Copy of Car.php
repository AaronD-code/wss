<?php
$car1 = array (
    'id' =>1,
    'name' => 'Tesla Model 3', 
    'price' => '€50,000', 
    'description' => ' - Electric sedan known for high performance and long range.'
);

$car2 = array (
    'id' =>2,
    'name' => 'Ford Mustang', 
    'price' => '€80,316', 
    'description' => ' - Iconic American muscle car with powerful engine and bold design.'
);

$car3 = array (
    'id' =>3,
    'name' => 'Toyota Corolla', 
    'price' => '€20,148', 
    'description' => ' - Reliable compact car offering excellent fuel efficiency and affordability.'
);

$car4 = array (
    'id' =>4,
    'name' => 'BMW 3 Series',
    'price' => '€52,456', 
    'description' => ' - Luxury sedan with smooth driving dynamics and premium features.'
);

$car5 = array (
    'id' =>5,
'name' => 'Chevrolet Silverado', 
'price' => '€42,120', 
'description' => ' - Durable full-size pickup truck, great for hauling and off-roading.'
);

$cars = array ($car1, $car2, $car3, $car4, $car5);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ASC Motors</title>
</head>
<link rel="stylesheet" href="css/Products.CSS">
<body>
<div class="boxes">
    <?php foreach ($cars as $car): ?>
        <div class="car-box">
            <h2><?php echo $car['name']; ?></h2>
            <p>Price: <strong><?php echo $car['price']; ?></strong></p>
            <p><?php echo $car['description']; ?></p>
            
            <form action="cart.php" method="POST">
                        <input type="hidden" name="product_id" value="<?php echo $car['id']; ?>">
                        <input type="hidden" name="product_name" value="<?php echo $car['name']; ?>">
                        <input type="hidden" name="product_price" value="<?php echo $car['price']; ?>">
                        <div  class = "button_color">
                            <button type="submit" name="add_to_cart">Add to Cart</button>
                        </div>
                </form>
            </div>
    <?php endforeach; ?>
    </div>
    </body>
</html>