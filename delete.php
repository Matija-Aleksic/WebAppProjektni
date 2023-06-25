<?php
include 'connect.php';
if (isset($_GET['id'])) {

    $id = $_GET['id'];
    $query = "DELETE FROM article WHERE id = ?";
    $stmt = mysqli_prepare($dbc, $query);
    mysqli_stmt_bind_param($stmt, "i", $id);
    $result = mysqli_stmt_execute($stmt);

    if ($result) {
        echo "Data deleted successfully!";
        header("Location: main.php");
    } else {
        echo "Error querying database: " . mysqli_stmt_error($stmt);
    }
    mysqli_stmt_close($stmt);
}
mysqli_close($dbc);
