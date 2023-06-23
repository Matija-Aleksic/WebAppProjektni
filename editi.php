<?php
include 'connect.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Retrieve the updated values from the form
  $title = $_POST['title'];
  $about = $_POST['about'];
  $content = $_POST['content'];
  $category = $_POST['category'];
  $archive = isset($_POST['archive']) ? 1 : 0;
  $id = $_POST['articleid'];

  // Update the article in the database
  $query = "UPDATE article SET naslov = ?, sazetak = ?, tekst = ?, kategorija = ?, arhiva = ? WHERE id = ?";
  $stmt = mysqli_prepare($dbc, $query);

  // Bind the parameters
  mysqli_stmt_bind_param($stmt, "sssssi", $title, $about, $content, $category, $archive, $id);

  // Execute the prepared statement
  $result = mysqli_stmt_execute($stmt) or die('Error updating article.');

  // Close the database connection
  mysqli_close($dbc);
  
 
  // Redirect the user to the updated article or a success page
  header("Location: clanak.php?id=$id");
  exit;
}
?>