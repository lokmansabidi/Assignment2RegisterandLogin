<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
    <title>Dashboard</title>
</head>
<body>
    <h3>Welcome to your dashboard, <?php echo htmlspecialchars($_SESSION['email']); ?>!</h3>
    <form method="POST" action="logout.php">
        <button type="submit">Logout</button>
    </form>
</body>
</html>
