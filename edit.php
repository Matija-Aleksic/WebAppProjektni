<!DOCTYPE html>
<html>

<head>
  <title>Unos vijesti/proizvoda</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="validation.js"></script>
</head>

<body>
  <section>

    <header>
      <div class="navbar-nav">
        <a class="nav-item nav-link" href="main.php">Home</a>
        <a class="nav-item nav-link" href="category.php?id=politik">Politik</a>
        <a class="nav-item nav-link" href="category.php?id=sport">Sport</a>
        <a class="nav-item nav-link" href="login.html">Administracija</a>
        <?php
        if ($_SESSION['privilegije'] == 1) {
          echo '<a class="nav-item nav-link" href="unos.html">unos Novog</a>';
        }
        ?>
      </div>
    </header>

    <center>

      <form action="editi.php" method="post" enctype="multipart/form-data">
        <div class="form-item">
          <label for="title">Naslov vijesti</label>
          <div class="form-field">
            <input type="text" name="title" class="form-field-textual">
          </div>
        </div>
        <div class="form-item">
          <label for="about">Kratki sadrzaj vijesti (do 50
            znakova)</label>
          <div class="form-field">
            <textarea name="about" id="" cols="30" rows="10" class="formfield-textual"></textarea>
          </div>
        </div>
        <div class="form-item">
          <label for="content">Sadrzaj vijesti</label>
          <div class="form-field">
            <textarea name="content" id="" cols="30" rows="10" class="form-field-textual"></textarea>
          </div>
        </div>
        <div class="form-item">
          <label for="pphoto">Slika: </label>
          <div class="form-field">
            <input type="file" name="pphoto" accept="image/jpeg">
          </div>
        </div>
        <div class="form-item">
          <label for="category">Kategorija vijesti</l abel>

            <div class="form-field">
              <select name="category" id="" class="form-field-textual">
                <option value="sport">sport</option>
                <option value="politik">politik</option>
              </select>
            </div>
        </div>
        <div class="form-item">
          <label>Spremiti u arhivu:
            <div class="form-field">
              <input type="checkbox" name="archive">
            </div>
          </label>
        </div>
        <div class="form-item">
          <button type="reset" value="Poništi">Poništi</button>
          <button type="submit" value="Prihvati">Prihvati</button>
        </div>
        <?php
        $_GET['id'];
        echo '<input type="hidden" name="articleid" value="' . $_GET['id'] . '">';
        ?>
      </form>
      <br>
      <br>
      <br>

      <footer>
        <div class="logo-space">
          <img src="images/logo.png" height="80">
        </div>
      </footer>

  </section>

</body>

</html>