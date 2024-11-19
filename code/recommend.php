<?php
include 'config.php';

// Retrieve user preferences from the form
$book_genre = $_GET['book_genre'];
$movie_genre = $_GET['movie_genre'];
$music_genre = $_GET['music_genre'];

// Fetch book recommendations
$sql_books = "SELECT * FROM books WHERE genre = '$book_genre'";
$books = $conn->query($sql_books);

// Fetch movie recommendations
$sql_movies = "SELECT * FROM movies WHERE genre = '$movie_genre'";
$movies = $conn->query($sql_movies);

// Fetch music recommendations
$sql_music = "SELECT * FROM music WHERE genre = '$music_genre'";
$music = $conn->query($sql_music);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Your Personalized Recommendations</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Your Personalized Recommendations</h1>

    <h2>Books</h2>
    <ul>
        <?php
        if ($books->num_rows > 0) {
            while ($row = $books->fetch_assoc()) {
                echo "<li>" . $row['title'] . " (" . $row['genre'] . ")</li>";
            }
        } else {
            echo "<li>No recommendations found for this genre.</li>";
        }
        ?>
    </ul>

    <h2>Movies</h2>
    <ul>
        <?php
        if ($movies->num_rows > 0) {
            while ($row = $movies->fetch_assoc()) {
                echo "<li>" . $row['title'] . " (" . $row['genre'] . ")</li>";
            }
        } else {
            echo "<li>No recommendations found for this genre.</li>";
        }
        ?>
    </ul>

    <h2>Music</h2>
    <ul>
        <?php
        if ($music->num_rows > 0) {
            while ($row = $music->fetch_assoc()) {
                echo "<li>" . $row['title'] . " (" . $row['genre'] . ")</li>";
            }
        } else {
            echo "<li>No recommendations found for this genre.</li>";
        }
        ?>
    </ul>

    <a href="index.php" class="button">Go Back</a>
</body>
</html>

<?php
$conn->close();
?>
