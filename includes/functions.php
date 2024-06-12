<?php
function fetch_article($id) {
    global $conn;
    $sql = "SELECT * FROM news WHERE id='$id'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        return $result->fetch_assoc();
    } else {
        return null;
    }
}

function fetch_articles($category) {
    global $conn;
    $sql = "SELECT * FROM news WHERE category='$category'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<div class='article'>";
            echo "<a href='article.php?id=" . $row['id'] . "'>";
            echo "<img src='img/" . $row['picture'] . "' alt='" . $row['title'] . "'>";
            echo "<h3>" . $row['title'] . "</h3>";
            echo "</a>";
            echo "<p>" . $row['date'] . "</p>";
            if (isset($_SESSION['role']) && $_SESSION['role'] == 'admin') {
                echo "<button class='delete-btn' data-id='" . $row['id'] . "'>Delete</button>";
            }
            echo "</div>";
        }
    } else {
        echo "No articles found.";
    }
}

function fetch_articles_custom($query) {
    global $conn;
    $sql = $query;
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<div class='article'>";
            echo "<a href='index.php?menu=3&id=" . $row['id'] . "'>";
            echo "<img src='img/" . $row['picture'] . "' alt='" . $row['title'] . "'>";
            echo "<h3>" . $row['title'] . "</h3>";
            echo "</a>";
            echo "<div class='article-info'>";
            echo "<p>" . format_date($row['date']) . "</p>";
            if (isset($_SESSION['role']) && $_SESSION['role'] == 'admin') {
                echo "<button class='delete-btn' data-id='" . $row['id'] . "'>Delete</button>";
            }
            echo "</div>";
            echo "</div>";
        }
    } else {
        echo "No articles found.";
    }
}
function format_date($date_string) {
    $date = date_create_from_format('Y-m-d H:i:s', $date_string);
    if ($date === false) {
        return "Invalid date format";
    }
    return date_format($date, 'M d, Y');
}
?>
