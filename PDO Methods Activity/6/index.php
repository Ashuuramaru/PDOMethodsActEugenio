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
    // Define the ID of the record you want to delete
    $ownerID = 1; // Change this to the ID of the record you want to delete

    // Prepare the SQL statement to delete the record from the owner table
    $stmt = $pdo->prepare("DELETE FROM owner WHERE OwnerID = :ownerID");

    // Bind the parameter to the SQL query to prevent SQL injection
    $stmt->bindParam(':ownerID', $ownerID);

    // Execute the query
    if ($stmt->execute()) {
        echo "Record deleted successfully!";
    } else {
        echo "Error deleting record.";
    }
    ?>
    
</body>
</html>
