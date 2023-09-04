<?php
require("../require/require.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Projects</title>
  <link rel="stylesheet" href="../CSS/style.css" />
  <link rel="stylesheet" href="../CSS/backgound.css" />
</head>

<body class='project-body'>
  <header>
    <nav>
      <li><a href="../index.php">Home</a></li>
      <li><a class="active" href="#">Projects</a></li>
      <li><a href="./about.php">About/CV</a></li>
      <li><a href="./contact.php">Contact</a></li>
      <li>
        <?php if ($_SESSION['login'] == true) { ?>
          <a href="./profile.php">Admin <img src="assets/images/profile.jpg" alt="" /></a>
        <?php } else { ?>
          <a href="./login.php">Login <img style="filter: brightness(0) invert(1);" src="assets/images/login-header.png" alt="" /></a>
        <?php } ?>
      </li>
    </nav>
  </header>
  <main>
    <section class="projects">
      <?php
      $SQL = "SELECT * FROM projects";
      $query = $con->query($SQL);

      if (!$query) {
        echo "Error executing query: " . $mysqli->error;
        exit;
      }

      if ($query->num_rows == 0) {
        echo "<p>Geen Projecten Gevonden.</p>";
      } else {
        while ($result = $query->fetch_assoc()) {
          $naam = $result['Naam'];
          $img = $result['IMG'];
          $beschrijving = $result['Beschrijving'];
          $datum = $result['Datum'];
          $link = $result['link'];
          $techniek = $result['Technieken'];

          $imgBase64 = base64_encode($img);

          echo "<div class='project'>
            <img src='data:image/*;base64,$imgBase64' width='500px' />
            <h3>$naam - $datum</h3>
            <a href='$link' target='_blank' class='projectlink'>$beschrijving - Go To Site</a>
            <p>Technieken: $techniek</p>
        </div>";
        }
      }
      ?>


    </section>
  </main>
</body>
<script>
  document.body.classList.add('slide-in');
</script>

</html>