<?php

global $conn;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if ($password === $confirm_password) {
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);

        $query = "INSERT INTO users (username, password) VALUES (?, ?)";
        if ($stmt = $conn->prepare($query)) {
            $stmt->bind_param('ss', $username, $hashed_password);
            if ($stmt->execute()) {
                echo "Registration successful! <a href='index.php?menu=4'>Login here</a>";
            } else {
                echo "Error: " . $stmt->error;
            }
            $stmt->close();
        }
    } else {
        echo "Passwords do not match.";
    }
}
?>

<form class="register-form" method="POST">
    <label for="username">Username:</label>
    <input type="text" name="username" required>
    <br>
    <label for="password">Password:</label>
    <input type="password" name="password" required>
    <br>
    <label for="confirm_password">Confirm Password:</label>
    <input type="password" name="confirm_password" required>
    <br>
    <button type="submit">Register</button>
</form>
