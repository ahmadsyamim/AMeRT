<?php
include('config.php');

// Get the username from the session variable for personalization
$username = $_SESSION['admin_name'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            height: 100vh;
            background-color: #f4f4f4;
            margin: 0;
            color: #333;
        }
        .dashboard-container {
            background: #fff;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        h1 {
            margin-bottom: 10px;
        }
        p {
            font-size: 18px;
            margin-bottom: 30px;
        }
        .logout-link {
            padding: 10px 20px;
            background-color: #dc3545;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
            font-size: 16px;
        }
        .logout-link:hover {
            background-color: #c82333;
        }
    </style>
</head>
<body>

    <div class="dashboard-container">
        <h1>Welcome, <?php echo htmlspecialchars($username ?? ''); ?>!</h1>
        <p>This is your protected dashboard. You are logged in.</p>
        <a href="login.php?logout=true" class="logout-link">Logout</a>
    </div>

</body>
</html>