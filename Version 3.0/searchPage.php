<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Search Products</title>
</head>
<?php include 'Header.php'; ?>
<body>
    <h1>Search for Products</h1>
    <form action="search.php" method="get">
        <input type="text" name="query" placeholder="Enter product name" required>
        <button type="submit">Search</button>
    </form>

    <?php
    if (isset($_GET['query'])) {
        $query = htmlspecialchars($_GET['query']);
        echo "<h2>Results for: " . $query . "</h2>";
        // This is where you'd normally query the database. You can add mock data or perform a simple search.
        echo "<p>Showing results for '" . $query . "'.</p>";
    }
    ?>
</body>
</html>
