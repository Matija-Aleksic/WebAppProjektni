<?php
include 'connect.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $title = $_POST['title'];
  $about = $_POST['about'];
  $content = $_POST['content'];
  $category = $_POST['category'];
  $picture = $_FILES['pphoto']['name'];
  $archive = isset($_POST['archive']) ? 1 : 0;
  $id = $_POST['articleid'];
  $query = "UPDATE article SET naslov = ?, sazetak = ?, tekst = ?, slika=?, kategorija = ?, arhiva = ? WHERE id = ?";
  $stmt = mysqli_prepare($dbc, $query);
  mysqli_stmt_bind_param($stmt, "ssssssi", $title, $about, $content, $picture, $category, $archive, $id);
  $result = mysqli_stmt_execute($stmt) or die('Error updating article.');
  mysqli_close($dbc);
  header("Location: clanak.php?id=$id");
  exit;
}
