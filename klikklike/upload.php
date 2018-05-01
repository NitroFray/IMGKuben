<?php
  include_once 'includes/dbh.inc.php';
  session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="Besvarelse til prøve">
    <meta name="keywords" content="web design, education, thw winter olympics">
    <meta name="author" content="Teodor S. Selfors">
    <title>IMGKuben | Velkommen</title>
    <link rel="stylesheet" href="./style.css">
  </head>
  <body>
    <header>
        <div id="branding">
         <h1><span class="highlight">IMG</span>Kuben</h1>
        </div>
       <nav>
         <?php
         if (isset($_SESSION['u_uid'])) {
           echo '<li><a href="index.php">Home</a></li>
                 <li><a href="galleri.php">Galleri</a></li>
                 <li><a href="statistikk.php">Statistikk</a></li>
                 <li class="current"><a href="upload.php">Upload picture</a></li>
                 <li><a href="includes/logout.inc.php">Logout</a></li>';
         } else {
           echo '<meta http-equiv="refresh" content="0;url=index.php">';
         }
         ?>
       <nav>
    </header>

      <section class="main-container">
        <?php

        echo '<div class="upload-form"><form action="includes/profile_upload.inc.php" method="POST" enctype="multipart/form-data">
                <label class="myLabel">
                  <input type="file" name="file" required/>
                  <span>Select picture</span>
                </label>
                <br>
                <center><button type="submit" name="submit">UPLOAD</button></center>
              </form></div>';
        ?>
      </section>

    </div>
  </body>
</html>
