<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "book_management";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM books";
$query = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>list of Books</title>
    
</head>
<body>
    <h1>List of Books</h1>
    <a class="btn" href="index.php">Insert New Book</a>
    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Author</th>
            <th>Details</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($query)) { ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['title']; ?></td>
            <td><?php echo $row['author']; ?></td>
            <td><a href="detail.php?title=<?php echo $row['title']; ?>">View Details</a></td>
            <td><a href="update.php?id=<?php echo $row['id']; ?>">Edit</a></td>
            <td><a href="delete.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure you want to delete this book?')">Delete</a></td>
        </tr>
        <?php } ?>
    </table>
    <?php $conn->close(); ?>
</body>
</html>