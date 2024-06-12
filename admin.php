<?php

global $conn;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $archive = $_POST['archive'];
    $category = $_POST['category'];

    $picture = $_FILES['picture']['name'];
    $picture_tmp = $_FILES['picture']['tmp_name'];
    $upload_dir = 'img/';
    $upload_file = $upload_dir . basename($picture);

    if (move_uploaded_file($picture_tmp, $upload_file)) {

        $query = "INSERT INTO news (title, description, picture, archive, category) VALUES (?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("sssss", $title, $description, $picture, $archive, $category);

        if ($stmt->execute()) {
            $_SESSION['message'] = "News added successfully.";
        } else {
            $_SESSION['message'] = "Error: " . $stmt->error;
        }

        $stmt->close();
    } else {
        $_SESSION['message'] = "Error uploading file.";
    }
}
?>


<form class="news-form" method="POST" enctype="multipart/form-data">
    <label for="title">Title:</label>
    <input type="text" name="title" id="title" required>
    <div id="titleMessage" class="error-message"></div>
    <br>

    <label for="description">Description:</label>
    <textarea name="description" id="description" required></textarea>
    <div id="descriptionMessage" class="error-message"></div>
    <br>

    <label for="picture">Picture:</label>
    <input type="file" name="picture" id="picture" accept="image/*" required>
    <div id="pictureMessage" class="error-message"></div>
    <br>

    <label>Archive:</label>
    <div class="radio-group">
        <label><input type="radio" name="archive" value="Y" required>Yes</label>
        <label><input type="radio" name="archive" value="N" required>No</label>
    </div>
    <div id="archiveMessage" class="error-message"></div>
    <br>

    <label>Category:</label>
    <div class="radio-group">
        <label><input type="radio" name="category" value="music" required>Music</label>
        <label><input type="radio" name="category" value="sport" required>Sport</label>
    </div>
    <div id="categoryMessage" class="error-message"></div>
    <br>

    <button type="submit">Add News</button>
</form>
<a href="logout.php" class="logout-btn">Logout</a>

<script src="js/validation.js"></script>
