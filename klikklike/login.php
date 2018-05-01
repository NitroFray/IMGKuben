<?php
include_once 'includes/dbh.inc.php';
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="Besvarelse til prøve">
    <meta name="keywords" content="web design, education, thw winter olympics">
    <meta name="author" content="Teodor S. Selfors">
    <title>IMGKuben | LoggInn</title>
    <link rel="stylesheet" href="./style.css">
  </head>
  <body>
    <header>
      <div class="container">
        <div id="branding">
         <h1><span class="highlight">IMG</span>Kuben</h1>
       </div>
       <nav>
         <li><a href="index.php">Home</a></li>
         <li><a href="galleri.php">Galleri</a></li>
         <li><a href="statistikk.php">Statistikk</a></li>
         <li class="current"><a href="logginn.php">Logg Inn</a></li>
       <nav>
    </header>
    <div class="mainc">
      <section class="main-container">
        <div class="main-wrapper">
          <h2>Login</h2>
          <form class="signup_form" action="includes/login.inc.php" method="POST">
            <input type="text" name="user-name" placeholder="Peter">
            <input type="password" name="pass-word" placeholder="test123">
            <button type="submit" name="submit">Login</button>
          </form>
        </div>
      </section>
    </div>
  </body>
</html>
