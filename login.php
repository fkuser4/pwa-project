<?php

global $conn;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE username = ?";
    if ($stmt = $conn->prepare($query)) {
        $stmt->bind_param('s', $username);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows == 1) {
            $user = $result->fetch_assoc();
            if (password_verify($password, $user['password'])) {
                $_SESSION['username'] = $username;
                $_SESSION['role'] = $user['role'];
                header('Location: index.php?menu=4');
                exit;
            } else {
                echo "Invalid username or password";
            }
        } else {
            echo "Invalid username or password";
        }
        $stmt->close();
    }
}
?>

<form class="login-form" method="POST">
    <label for="username">Username:</label>
    <input type="text" name="username" required>
    <br>
    <label for="password">Password:</label>
    <input type="password" name="password" required>
    <br>
    <button type="submit">Login</button>
    <button type="button" onclick="window.location.href='index.php?menu=5'">Register</button>
</form>




