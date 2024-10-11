<?php require_once 'core/dbConfig.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Owner Data</title>
</head>
<body>
    
    <?php
    // Prepare the SQL statement to fetch all data from the owner table
    $stmt = $pdo->prepare("SELECT * FROM owner");

    // Execute the query
    if ($stmt->execute()) {
        // Fetch all rows and display them using print_r within <pre> tags for better readability
        echo '<pre>';
        print_r($stmt->fetchAll());
        echo '</pre>';
    } else {
        echo "Error fetching data from the database.";
    }
    ?>

</body>
</html>
