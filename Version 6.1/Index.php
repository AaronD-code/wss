<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ASC Motors</title>
</head>
<?php require_once 'cars.php'; ?>
<?php include 'Header.php'; ?>
<p>Car count: <?php echo count($cars) === 5 ? 'Test Passed' : 'Test Failed'; ?></p>
<link rel="stylesheet" href="css/index.CSS">
<body>
<?php include 'slideshow.php'; ?>
</body>
</html>
