<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Book Management System</title>
</head>
<body>
    <div class="container">
        <h1>Welcome to the Book Management System</h1>
        <form action="add_book.php" method="post">
            <h2>Add a New Book</h2>

            <label>Title:</label>
            <input type="text" name="title" required>

            <label>Author:</label>
            <input type="text" name="author" required>

            <label>Genre:</label>
            <input type="text" name="genre" required>

            <label>Price:</label>
            <input type="number" name="price" required>

            <label>Publication Year:</label>
            <input type="number" name="year" placeholder="e.g. 2024">

            <button type="submit">Add Book</button>
            <br>
            <br>
            <a class="btn" href="list.php">View Book List</a>
        </form>
    </div>
</body>
</html>
