<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "book_management";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$id = $_GET['id'];
$sql = "SELECT * FROM books WHERE id = $id";
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($query);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $author = $_POST['author'];
    $genre = $_POST['genre'];
    $price = $_POST['price'];
    $year = $_POST['year'];

    $sql = "UPDATE books SET 
                title='$title', 
                author='$author', 
                genre='$genre', 
                price='$price', 
                year='$year' 
            WHERE id=$id";

    $query = mysqli_query($conn, $sql);

    if ($query) {
        header("Location: list.php");
        exit;
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Update Book</title>
</head>
<body>
    <h1>Update Book</h1>

    <form method="POST">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

        <label>Book Title:</label>
        <input type="text" name="title" value="<?php echo $row['title']; ?>"><br><br>

        <label>Author:</label>
        <input type="text" name="author" value="<?php echo $row['author']; ?>"><br><br>

        <label>Genre:</label>
        <input type="text" name="genre" value="<?php echo $row['genre']; ?>"><br><br>

        <label>Price:</label>
        <input type="number" name="price" value="<?php echo $row['price']; ?>"><br><br>

        <label>Publication Year:</label>
        <input type="number" name="year" value="<?php echo $row['year']; ?>"><br><br>

        <button type="submit">Update Book</button>
    </form>
</body>
</html>
