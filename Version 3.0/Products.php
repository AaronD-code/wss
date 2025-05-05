<?php
// Array of cars with names & decription
$cars = [
    ['name' => 'Tesla Model 3', 'description' => ' - Electric sedan known for high performance and long range.'],
    ['name' => 'Ford Mustang', 'description' => ' - Iconic American muscle car with powerful engine and bold design.'],
    ['name' => 'Toyota Corolla', 'description' => ' - Reliable compact car offering excellent fuel efficiency and affordability.'],
    ['name' => 'BMW 3 Series', 'description' => ' - Luxury sedan with smooth driving dynamics and premium features.'],
    ['name' => 'Chevrolet Silverado', 'description' => ' - Durable full-size pickup truck, great for hauling and off-roading.']
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ASC Motors</title>
</head>
<?php include 'Header.php'; ?>
<link rel="stylesheet" href="/css/Products.CSS">
<body>
    <h1>Top 5 Cars</h1>
    <h2>Updated</h2>
    <ul>
        <?php
        // Loop through the array to display top cars
        for ($i = 0; $i < count($cars); $i++) {
            echo '<li>';
            echo '<h2>' . $cars[$i]['name'] . '</h2>';
            echo '<p>' . $cars[$i]['description'] . '</p>';
            echo '</li>';
        }
        ?>
    </ul>
</body>
</html>
