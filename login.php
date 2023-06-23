<?php
session_start();
include 'connect.php';
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $hash = password_hash('admin', CRYPT_BLOWFISH);
        echo $hash;

        $query = "SELECT * FROM users WHERE name = ?";
        $stmt = mysqli_prepare($dbc, $query);

        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);

            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                $hashedPassword = $row['password'];
                if (password_verify($password, $hashedPassword)) {
                    $_SESSION['privilegije'] = $row['privilegije'];
                    $_SESSION['name'] = $row['name'];
                    exit;
                } else {
                    echo 'Invalid username or password1.';
                }
            } else {
                echo 'Invalid username or password2.';
            }
        } else {
            echo 'Failed to prepare the statement.';
        }
    } else {
        echo 'Username and password are required.';
    }
}
