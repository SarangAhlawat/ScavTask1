<?php
// Database connection (update credentials as per your setup)
$host = 'localhost'; // Your database host
$dbname = 'scavanger_hunt'; // Your database name
$username = 'root'; // Your database username
$password = ''; // Your database password

try {
    // Create a new PDO instance to connect to the database
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Query to retrieve all records, sorting by points (DESC) and time_taken (ASC)
    $query = "SELECT team_name, team_id, points, time_taken FROM rd1 ORDER BY points DESC, time_taken ASC";
    
    // Execute the query
    $stmt = $pdo->query($query);
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game Results</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Game Results</h1>
    
    <!-- Display the results in a table -->
    <table>
        <tr>
            <th>Rank</th>
            <th>Team Name</th>
            <th>Team ID</th>
            <th>Points</th>
            <th>Time Taken (seconds)</th>
        </tr>

        <?php
        if (!empty($results)) {
            $rank = 1; // Initialize rank
            foreach ($results as $row) {
                echo "<tr>";
                echo "<td>" . $rank . "</td>";
                echo "<td>" . htmlspecialchars($row['team_name']) . "</td>";
                echo "<td>" . htmlspecialchars($row['team_id']) . "</td>";
                echo "<td>" . htmlspecialchars($row['points']) . "</td>";
                echo "<td>" . htmlspecialchars($row['time_taken']) . "</td>";
                echo "</tr>";
                $rank++; // Increment rank
            }
        } else {
            echo "<tr><td colspan='5'>No data available</td></tr>";
        }
        ?>
    </table>

</body>
</html>
