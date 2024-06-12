<?php

if (!defined('__APP__')) {
    define('__APP__', TRUE);
}
include("includes/database.php");
session_start();
global $conn;

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_SESSION['role']) && $_SESSION['role'] === 'admin') {
    if (!isset($_POST['id'])) {
        echo 'error: id not set';
        exit;
    }

    $articleId = $_POST['id'];

    $query = "DELETE FROM news WHERE id = ?";
    if ($stmt = $conn->prepare($query)) {
        $stmt->bind_param('i', $articleId);
        if ($stmt->execute()) {
            echo 'success';
        } else {
            echo 'error executing statement: ' . $stmt->error;
        }
        $stmt->close();
    } else {
        echo 'error preparing statement: ' . $conn->error;
    }
} else {
    echo 'error: not admin or not POST request';
}
?>
