<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "book_management";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM books WHERE id = " . $_GET["id"];

$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Book</title>
</head>
<body>
    <h1>Book Details</h1>
    <p><strong>Title:</strong> <?php echo $row['title']; ?></p>
    <p><strong>Author:</strong> <?php echo $row['author']; ?></p>
    <p><strong>Genre:</strong> <?php echo $row['genre']; ?></p>
    <p><strong>Price:</strong> $<?php echo $row['price']; ?></p>
    <p><strong>Publication Year:</strong> <?php echo $row['year']; ?></p>

    <a class="btn" href="list.php">Back to Book List</a>

    <?php $conn->close(); ?>
</body>
</html>


