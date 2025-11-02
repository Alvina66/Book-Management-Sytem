<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "book_management";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$title = $_POST['title'];
$author = $_POST['author'];
$genre = $_POST['genre'];
$price = $_POST['price'];
$year = $_POST['year'];

$sql = "INSERT INTO books (title, author, genre, price, year)
        VALUES ('$title', '$author', '$genre', '$price', '$year')";

$query = mysqli_query($conn, $sql);

if ($query) {
      header("Location: list.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

$conn->close();
?>
