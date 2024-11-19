<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Recommendation Engine</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Welcome to the Recommendation Engine</h1>
    <p>Select your preferences to get personalized recommendations:</p>

    <form action="recommend.php" method="get">
        <label for="book_genre">Book Genre:</label>
        <select name="book_genre" id="book_genre">
            <option value="Fiction">Fiction</option>
            <option value="Non-Fiction">Non-Fiction</option>
            <option value="Sci-Fi">Sci-Fi</option>
            <option value="Fantasy">Fantasy</option>
            <option value="Mystery">Mystery</option>
        </select>

        <label for="movie_genre">Movie Genre:</label>
        <select name="movie_genre" id="movie_genre">
            <option value="Action">Action</option>
            <option value="Drama">Drama</option>
            <option value="Comedy">Comedy</option>
            <option value="Horror">Horror</option>
            <option value="Romance">Romance</option>
        </select>

        <label for="music_genre">Music Genre:</label>
        <select name="music_genre" id="music_genre">
            <option value="Pop">Pop</option>
            <option value="Rock">Rock</option>
            <option value="Jazz">Jazz</option>
            <option value="Classical">Classical</option>
            <option value="Hip-Hop">Hip-Hop</option>
        </select>

        <button type="submit">Get Recommendations</button>
    </form>
</body>
</html>
