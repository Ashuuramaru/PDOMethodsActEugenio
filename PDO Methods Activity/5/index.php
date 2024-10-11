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
    // Define the new record data
    $firstName = "Lance";
    $lastName = "Lance";
    $phone = "5555555555";
    $email = "lance.lance@example.com";

    // Prepare the SQL statement for inserting a record into the owner table
    $stmt = $pdo->prepare("INSERT INTO owner (FirstName, LastName, Phone, Email) VALUES (:firstName, :lastName, :phone, :email)");

    // Bind parameters to the SQL query to prevent SQL injection
    $stmt->bindParam(':firstName', $firstName);
    $stmt->bindParam(':lastName', $lastName);
    $stmt->bindParam(':phone', $phone);
    $stmt->bindParam(':email', $email);

    // Execute the query
    if ($stmt->execute()) {
        echo "Record inserted successfully!";
    } else {
        echo "Error inserting record.";
    }
    ?>

</body>
</html>
