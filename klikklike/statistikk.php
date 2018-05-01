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
    <title>IMGKuben | Statistikk</title>
    <link rel="stylesheet" href="./style.css">
  </head>
  <body>
    <header>
      <div class="container">
        <div id="branding">
         <h1><span class="highlight">IMG</span>Kuben</h1>
       </div>
       <nav>
         <?php
         if (isset($_SESSION['u_uid'])) {
           echo '<li><a href="index.php">Home</a></li>
                 <li><a href="galleri.php">Galleri</a></li>
                 <li class="current"><a href="statistikk.php">Statistikk</a></li>
                 <li><a href="upload.php">Upload picture</a></li>
                 <li><a href="includes/logout.inc.php">Logout</a></li>';
         } else {
           echo '<li><a href="index.php">Home</a></li>
                 <li><a href="galleri.php">Galleri</a></li>
                 <li class="current"><a href="statistikk.php">Statistikk</a></li>
                 <li><a href="login.php">Logg Inn</a></li>';
         }
         ?>
       <nav>
    </header>
    <div class="mainc">
      <section class="main-container">
        <table class="picture-likes-table" border="2">
          <tr>
            <th class="table-header">Picture</th><th class="table-header">Likes</th>
          </tr>
          <?php
          $dirname = "uploads/";
          $images = glob($dirname."*");
          $dirname2 = "likesnumber/";
          $images2 = glob($dirname2."*");
          foreach ($images2 as $image2) {
            $myfile = fopen($image2, "r") or die("Unable to open file!");
            $likenumber = fread($myfile,filesize($image2));
            fclose($myfile);

            foreach($images as $image) {
              $fileext = explode('/', $images[0]);
              $fileactualext1 = $fileext[0];
              $fileactualext2 = $fileext[1];
              echo "<tr><td class='table-body'>".$fileactualext2."</td><td class='table-body'>".$likenumber."</td></tr>";
            }
          }
          ?>
        </table>
      </section>

      <!--Bruker dette som foreløbig lagring av "lastopp"
      <form action="includes/addpicture.inc.php" method="POST">
        <input type="text" name="img_url" placeholder="img_url">
        <br>
        <button type="submit" name="submit">Upload picture</button>
      </form>
      -->
    </div>
  </body>
</html>
