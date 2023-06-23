<!DOCTYPE html>
<html lang="en">
<?php
include 'connect.php';
define('UPLPATH', 'img/');
?>

<head>
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
          <a class="nav-item nav-link" href="#Home">Home</a>
          <a class="nav-item nav-link" href="#Politik">Politik</a>
          <a class="nav-item nav-link" href="#Sport">Sport</a>
          <a class="nav-item nav-link" href="unos.html">Administracija</a>
        </div>
      </nav>

    </header>

    <div class="logo-space">
      <img src="images/logo.png" height="80">
    </div>

    <div id="Politik" class="container-fluid">
      <div class="row">
        <div class="col-md-2 col-sm-6">
          <div class="blackbox">
            <p></p>
          </div>
          <article>
            <h2>politik</h2>
          </article>
        </div>
        <?php $query = "SELECT * FROM article WHERE arhiva=0 AND kategorija='politik' LIMIT 3";
        $result = mysqli_query($dbc, $query);
        while ($row = mysqli_fetch_array($result)) {
          echo '<article>';
          echo '<div>';
          echo '<div class="sport_img">';
          echo '<img width="100%" src="' . UPLPATH . $row['slika'] . '">';
          echo '</div>';
          echo '<div class="media_body">';
          echo '<h4 class="title">';
          echo '<a href="clanak.php?id=' . $row['id'] . '">';
          echo $row['naslov'];
          echo '</a></h4>';
          echo '<p>' . $row['sazetak'] . '</p>';
          echo '</div></div>';
          echo '</article>';
        } ?>
      </div>
    </div>

    <div id="Sport" class="container-fluid">
      <div class="row">

        <div class="col-md-2 col-sm-6">
          <div class="blackbox">
            <p></p>
          </div>
          <article>
            <h2>Sport</h2>
          </article>
        </div>
        <?php $query = "SELECT * FROM article WHERE arhiva=0 AND kategorija='sport' LIMIT 3";
        $result = mysqli_query($dbc, $query);
        while ($row = mysqli_fetch_array($result)) {
          echo '<article>';
          echo '<div>';
          echo '<div class="sport_img">';
          echo '<img width="100%" src="' . UPLPATH . $row['slika'] . '">';
          echo '</div>';
          echo '<div class="media_body">';
          echo '<h4 class="title">';
          echo '<a href="clanak.php?id=' . $row['id'] . '">';
          echo $row['naslov'];
          echo '</a></h4>';
          echo '<p>' . $row['sazetak'] . '</p>';
          echo '</div></div>';
          echo '</article>';
        } ?>

      </div>
    </div>

  </section>




</body>
<footer>
  <div class="logo-space">
    <img src="images/logo.png" height="80">
  </div>
</footer>

</html>