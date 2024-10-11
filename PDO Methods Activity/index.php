<?php require_once 'core/dbConfig.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Owner Data</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>

    <h1>Owner Records</h1>
    
    <table>
        <thead>
            <tr>
                <th>Owner ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Phone</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Prepare the SQL statement to select all records from the owner table
            $stmt = $pdo->prepare("SELECT * FROM owner");

            // Execute the query
            if ($stmt->execute()) {
                // Fetch all records as an associative array
                $owners = $stmt->fetchAll(PDO::FETCH_ASSOC);

                // Check if there are any records to display
                if (count($owners) > 0) {
                    // Loop through each record and render it in the table
                    foreach ($owners as $owner) {
                        echo "<tr>";
                        echo "<td>" . htmlspecialchars($owner['OwnerID']) . "</td>";
                        echo "<td>" . htmlspecialchars($owner['FirstName']) . "</td>";
                        echo "<td>" . htmlspecialchars($owner['LastName']) . "</td>";
                        echo "<td>" . htmlspecialchars($owner['Phone']) . "</td>";
                        echo "<td>" . htmlspecialchars($owner['Email']) . "</td>";
                        echo "</tr>";
                    }
                } else {
                    // No records found
                    echo "<tr><td colspan='5'>No records found.</td></tr>";
                }
            } else {
                // Error executing the query
                echo "<tr><td colspan='5'>Error fetching records.</td></tr>";
            }
            ?>
        </tbody>
    </table>

</body>
</html>
