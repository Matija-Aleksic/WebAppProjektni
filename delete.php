<?php
include 'connect.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Prepare the query using prepared statements
    $query = "DELETE FROM article WHERE id = ?";
    $stmt = mysqli_prepare($dbc, $query);
    
    // Bind the ID parameter
    mysqli_stmt_bind_param($stmt, "i", $id);
    
    // Execute the prepared statement
    $result = mysqli_stmt_execute($stmt);

    if ($result) {
        echo "Data deleted successfully!";
        header("Location: main.php");
    } else {
        echo "Error querying database: " . mysqli_stmt_error($stmt);
    }
    
    // Close the prepared statement
    mysqli_stmt_close($stmt);
}

// Close the database connection
mysqli_close($dbc);
?>