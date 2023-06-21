<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $naslov = $_POST['title'];
    $sazetak = $_POST['about'];
    $tekst = $_POST['content'];
    $slika = $_FILES['pphoto']['name'];
    $kategorija = $_POST['category'];
    $arhiva = isset($_POST['archive']) ? 'Da' : 'Ne';

    echo "<h2>Prikaz unesenih podataka:</h2>";
    echo "<p>Naslov: $naslov</p>";
    echo "<p>Sažetak: $sazetak</p>";
    echo "<p>Tekst: $tekst</p>";
    echo "<p>Slika: $slika</p>";
    echo "<p>Kategorija: $kategorija</p>";
    echo "<p>Spremiti u arhivu: $arhiva</p>";
}
?>