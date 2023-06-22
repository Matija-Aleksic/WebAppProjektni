<?php
include 'connect.php';
$picture = $_FILES['pphoto']['name'];
$title = $_POST['title'];
$about = $_POST['about'];
$content = $_POST['content'];
$category = $_POST['category'];
$date = date('d.m.Y.');
if (isset($_POST['archive'])) {
    $archive = 1;
} else {
    $archive = 0;
}
$target_dir = 'img/' . $picture;
move_uploaded_file($_FILES["pphoto"]["tmp_name"], $target_dir);
$query = "INSERT INTO article (datum, naslov, sazetak, tekst, slika, kategorija, arhiva ) VALUES ('$date', '$title', '$about', '$content', '$picture', '$category', '$archive')";
$result = mysqli_query($dbc, $query) or die('Error querying databese.');
mysqli_close($dbc); 

echo "<h2>Prikaz unesenih podataka:</h2>";
echo "<p>Naslov: $title</p>";
echo "<p>Sažetak: $about</p>";
echo "<p>Tekst: $content</p>";
echo "<p>Slika: $picture</p>";
echo "<p>Kategorija: $category</p>";
echo "<p>Spremiti u arhivu: $archive</p>";
echo "<p>Datum: $date</p>";
?>