<?php
require("./require/require.php");

if (!isset($_SESSION['login'])) {
  $_SESSION['login'] = false;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Portfilio-Maddox</title>
  <link rel="stylesheet" href="./CSS/style.css" />
</head>

<body class="indexpage">
  <header>
    <nav>
      <li><a class="active" href="">Home</a></li>
      <li><a href="./Pages/projects.php">Projects</a></li>
      <li><a href="./Pages/about.php">About/CV</a></li>
      <li><a href="./Pages/contact.php">Contact</a></li>
      <li>
        <?php if ($_SESSION['login'] == true) { ?>
          <a href="./Pages/profile.php">Admin</a>
        <?php } else { ?>
          <a href="./Pages/login.php">Login <img style="filter: brightness(0) invert(1);" src="assets/images/login-header.png" alt="" /></a>
        <?php } ?>
      </li>
    </nav>
  </header>
  <main>
    <div class="introduction">
      <h1>Ik ben <span>Maddox</span> de Rooij - WebDeveloper</h1>
      <h4>
        <a class="contacteermij" href="./Pages/contact.php">Contacteer Mij</a>
      </h4>
      <img src="./IMAGES/89667@glr.jpg" alt="ProfilePicture" width="300px" />
    </div>
  </main>
  <footer class="githublink">
    <a class="github" href="https://github.com/Maddox1122" target="_blank">GitHub</a>
  </footer>
</body>

</html>