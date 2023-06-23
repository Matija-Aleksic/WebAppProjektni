<?php
session_start();
include 'connect.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['registration_username']) && isset($_POST['registration_password'])) {
        $username = $_POST['registration_username'];
        $password = $_POST['registration_password'];

        $query = "SELECT * FROM users WHERE name = ?";
        $stmt = mysqli_prepare($dbc, $query);

        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "s", $username);

            mysqli_stmt_execute($stmt);

            $result = mysqli_stmt_get_result($stmt);

            if (mysqli_num_rows($result) > 0) {
                echo 'Username already exists.';
            } else {
                $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

                $insertQuery = "INSERT INTO users (name, password) VALUES (?, ?)";
                $stmt = mysqli_prepare($dbc, $insertQuery);
                mysqli_stmt_bind_param($stmt, "ss", $username, $hashedPassword);

                if (mysqli_stmt_execute($stmt)) {
                    echo 'Registration successful!';
                    header("Location: main.php");
                    exit;
                } else {
                    echo 'Failed to register. Please try again later.';
                }
            }
        } else {
            echo 'Failed to prepare the statement.';
        }
    } else {
        echo 'Username and password are required.';
    }
}
