<?php
require("../require/require.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>About</title>
  <link rel="stylesheet" href="../CSS/style.css" />
  <link rel="stylesheet" href="../CSS/backgound.css" />
</head>

<body>
  <section class="cvimg hidden">
    <img src="../IMAGES/cv.png" alt="cv" />
  </section>
  <div class="bg-img hidden">
    <span class="close">&times;</span>
  </div>
  <header>
    <nav>
      <li><a href="../index.php">Home</a></li>
      <li><a href="./projects.php">Projects</a></li>
      <li><a class="active" href="#">About/CV</a></li>
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
  <main class="about-grid">
    <section class="about">
      <h3>Introductie</h3>
      <p>
        Ik ben Maddox de Rooij ik ben 16 jaar oud en ik volg op dit moment de
        opleiding software development dit is een MBO 4 opleiding mijn hobbys
        zijn gamen en vechtsport ik kom uit oud-berijeland.
      </p>
    </section>
    <section class="skills">
      <div>
        <h2>Mijn Skills</h2>
      </div>
      <div>
        <p>HTML</p>
        <div class="container">
          <div class="skills html">70%</div>
        </div>

        <p>CSS</p>
        <div class="container">
          <div class="skills css">60%</div>
        </div>

        <p>JavaScript</p>
        <div class="container">
          <div class="skills js">40%</div>
        </div>

        <p>PHP</p>
        <div class="container">
          <div class="skills php">20%</div>
        </div>
      </div>
    </section>
    <section class="cv">
      <h1>Mijn CV</h1>
      <button class="cvbutton">Bekijk mijn CV</button>
    </section>
    <section class="artiest-video">
      <h3>Mijn Favoriete Artiest</h3>
      <iframe width="600" height="400" src="https://www.youtube.com/embed/H1HdZFgR-aA" title="2Pac - All Eyez On Me" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </section>
  </main>
</body>
<script src="../Js/about.js"></script>
<script>
  document.body.classList.add('slide-in');
</script>

</html>