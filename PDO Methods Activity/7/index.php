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
    // Define the ID of the record you want to update
    $ownerID = 1; // Change this to the ID of the record you want to update

    // New data to update
    $newFirstName = "eugenio";
    $newLastName = "Eugenio";
    $newPhone = "5555551234";
    $newEmail = "eugenio.eugenio@example.com";

    // Prepare the SQL statement to update the record in the owner table
    $stmt = $pdo->prepare("UPDATE owner SET FirstName = :firstName, LastName = :lastName, Phone = :phone, Email = :email WHERE OwnerID = :ownerID");

    // Bind the parameters to the SQL query to prevent SQL injection
    $stmt->bindParam(':firstName', $newFirstName);
    $stmt->bindParam(':lastName', $newLastName);
    $stmt->bindParam(':phone', $newPhone);
    $stmt->bindParam(':email', $newEmail);
    $stmt->bindParam(':ownerID', $ownerID);

    // Execute the query
    if ($stmt->execute()) {
        echo "Record updated successfully!";
    } else {
        echo "Error updating record.";
    }
    ?>

</body>
</html>
