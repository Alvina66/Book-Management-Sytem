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

$sql = "DELETE FROM books WHERE id = $id";

$query = mysqli_query($conn, $sql);

if ($query) {
    header("Location: list.php");
    exit;
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

$conn->close();
?>
