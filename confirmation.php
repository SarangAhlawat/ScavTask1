<?php
// Retrieve data from URL
$teamName = $_GET['teamName'];
$points = $_GET['points'];
$timeTaken = $_GET['timeTaken'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submission Confirmation</title>
</head>
<body>
    <h1>Submission Confirmation</h1>
    <p>Team Name: <?php echo htmlspecialchars($teamName); ?></p>
    <p>Points Earned: <?php echo htmlspecialchars($points); ?></p>
    <p>Time Taken: <?php echo htmlspecialchars($timeTaken); ?> seconds</p>

    <a href="index.php">Back to Home</a> <!-- Link to go back to the home page -->
</body>
</html>
