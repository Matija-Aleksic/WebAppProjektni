<?php
session_start();
include 'connect.php';
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $hash= password_hash('admin',CRYPT_BLOWFISH);
        echo $hash;

        $query = "SELECT * FROM users WHERE name = ?";
        $stmt = mysqli_prepare($dbc, $query);

        if ($stmt) {
            // Bind the username parameter
            mysqli_stmt_bind_param($stmt, "s", $username);

            // Execute the statement
            mysqli_stmt_execute($stmt);

            // Get the result
            $result = mysqli_stmt_get_result($stmt);

            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                $hashedPassword = $row['password'];

                // Verify the entered password against the stored hashed password
                if (password_verify($password, $hashedPassword)) {
                    $_SESSION['userid'] = $row['id'];
                    header("Location: main.php"); // Replace with the desired page
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
