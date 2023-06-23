<!DOCTYPE html>
<html>

<head>
    <title>News Article</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>

    <section>
        <header id="Home">
            <nav>
                <div class="navbar-nav">
                    <a class="nav-item nav-link" href="main.php">Home</a>
                    <a class="nav-item nav-link" href="#Politik">Politik</a>
                    <a class="nav-item nav-link" href="#Sport">Sport</a>
                    <a class="nav-item nav-link" href="unos.html">Administracija</a>
                </div>
            </nav>

        </header>
        <div class="logo-space">
            <img src="images/logo.png" height="80">
        </div>

        <?php
        session_start();
        define('UPLPATH', 'img/');

        include 'connect.php';

        // Retrieve the article information from the database
        $query = "SELECT * FROM article WHERE id = ?"; // Replace id with the specific article ID
        $stmt = mysqli_prepare($dbc, $query);

        if ($stmt) {
            $articleId = $_GET['id'];
            mysqli_stmt_bind_param($stmt, "i", $articleId);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);

            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                $datum = $row['datum'];
                $naslov = $row['naslov'];
                $sazetak = $row['sazetak'];
                $tekst = $row['tekst'];
                $slika = $row['slika'];
                $kategorija = $row['kategorija'];
                $arhiva = $row['arhiva'];

                // Generate the HTML news article
                echo '<article>';
                echo '<h2>' . $naslov . '</h2>';
                echo '<p>' . $datum . '</p>';
                echo '<img width="100%" height="400px"  src="' . UPLPATH . $row['slika'] . '">';
                echo '<p>' . $sazetak . '</p>';
                echo '<div>' . $tekst . '</div>';
                echo '<p>Category: ' . $kategorija . '</p>';
                echo '</article>';
            } else {
                echo 'Article not found.';
            }
        } else {
            echo 'Failed to prepare the statement.';
        }

        mysqli_close($dbc);
        ?>
        <footer>
            <div class="logo-space">
                <img src="images/logo.png" height="80">
            </div>
        </footer>

    </section>


</body>

</html>