<!DOCTYPE html>
<html>
  <head>
    <title> Black Name </title>
    <link href="style.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
  </head>
  <body>
    <img src="d.png" class="logopic">
    <div class="legal">
      <h3># THE BL&AtildeCK BUS . . !<h3>
    </div>
    <nav>
      <div class="profile">
          <ul>
            <li><a href="profile.php" title="profile"><img src="user.jpg"width="80px" style="color:#000000"></a></li>
          </ul>
      </div>
      <ul>
        <li><a href="#" style="color:#000000">Home</a></li>
        <li><a href="sessionlogin.php" style="color:#000000">Daftar</a></li>
        <li><a href="#" style="color:#000000">Contact</a></li>
      </ul>
    </nav>
    <header></header>
    <div class="center"><img class="bus" src="bus.png"></div>
    <section>
      <article class="center">
        <?php
          require('login.php');
        ?>
      </article>
    </section>

    <footer>~ By : Black Name ~</footer>
  </body>
</html>
