<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
?>
<!DOCTYPE html>
<html>
<head>
    <title>HOME</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Hello, <?php echo $_SESSION['name']; ?></h1>
    <a href="logout.php">Logout</a>

    <!-- Button to open a link -->
    <button onclick="openLink()">Identify Plant Disease</button>

    <script>
        function openLink() {
            // Replace 'https://example.com' with the actual link you want to open
            window.location.href = 'http://172.17.114.252:5000';
        }
    </script>
</body>
</html>
<?php 
} else {
    header("Location: index.php");
    exit();
}
?>
