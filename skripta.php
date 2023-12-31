<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
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
$query = "INSERT INTO article (datum, naslov, sazetak, tekst, slika, kategorija, arhiva) VALUES (?, ?, ?, ?, ?, ?, ?)";
$stmt = mysqli_prepare($dbc, $query);
mysqli_stmt_bind_param($stmt, "sssssss", $date, $title, $about, $content, $picture, $category, $archive);
$result = mysqli_stmt_execute($stmt);

if ($result) {
    echo "Data inserted successfully!";
} else {
    echo "Error querying database: " . mysqli_stmt_error($stmt);
}
mysqli_close($dbc);

?>

<body>
    <section>
        <?php
        echo '<header>';
        echo '<div class="navbar-nav">';
        echo '<a class="nav-item nav-link" href="main.php">Home</a>';
        echo '<a class="nav-item nav-link" href="category.php?id=politik">Politik</a>';
        echo '<a class="nav-item nav-link" href="category.php?id=sport">Sport</a>';
        echo '<a class="nav-item nav-link" href="login.html">Administracija</a>';
        if (isset($_SESSION['privilegije']) && $_SESSION['privilegije'] == 1) {
            echo '<a class="nav-item nav-link" href="unos.html">unos Novog</a>';
        }
        echo '<br>';
        echo '</div>';
        echo '</header>';
        echo "<h2>Prikaz unesenih podataka:</h2>";
        echo "<p>Naslov: $title</p>";
        echo "<p>Sažetak: $about</p>";
        echo "<p>Tekst: $content</p>";
        echo "<p>Slika: $picture</p>";
        echo "<p>Kategorija: $category</p>";
        echo "<p>Spremiti u arhivu: $archive</p>";
        echo "<p>Datum: $date</p>";
        ?>
        <footer>
            <div class="logo-space">
                <img src="images/logo.png" height="80">
            </div>
        </footer>
    </section>

</body>