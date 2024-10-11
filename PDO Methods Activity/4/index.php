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
    // Prepare the SQL statement to fetch data from the owner table
    $stmt = $pdo->prepare("SELECT * FROM owner LIMIT 1");

    // Execute the query
    if ($stmt->execute()) {
        // Fetch a single row from the result set using fetch()
        // This will return an associative array of the row
        $row = $stmt->fetch();

        echo '<pre>';
        print_r($row);
        echo '</pre>';
    } else {
        echo "Error fetching data from the database.";
    }
    ?>

</body>
</html>
