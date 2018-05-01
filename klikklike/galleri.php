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
    <meta name="keywords" content="web design, education, IMGKuben">
    <meta name="author" content="Teodor S. Selfors">
    <title>IMGKuben | Galleri</title>
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
                 <li class="current"><a href="galleri.php">Galleri</a></li>
                 <li><a href="statistikk.php">Statistikk</a></li>
                 <li><a href="upload.php">Upload picture</a></li>
                 <li><a href="includes/logout.inc.php">Logout</a></li>';
         } else {
           echo '<li><a href="index.php">Home</a></li>
                 <li class="current"><a href="galleri.php">Galleri</a></li>
                 <li><a href="statistikk.php">Statistikk</a></li>
                 <li><a href="login.php">Logg Inn</a></li>';
         }
         ?>
       <nav>
    </header>
    <section class="main-container">
    <div class="mainc">
      <div class="picturearea">
      <?php
        /*$sql = "SELECT * FROM images;";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > -1) {
          while ($row = mysqli_fetch_assoc($result)){
            echo "<div class='likeinter'><img src='" . $row['img_url'] . "'>";
            echo "<form action='includes/likes_update.inc.php' method='POST'>";
            echo "<center><button type='submit' name='like_number' value='" . $row['id'] . "'>Like</button></center>";
            echo "</form>";
            echo "<center><p>" . $row['like_number'] . "</p></center></div>";
          }
        }*/
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
            echo '<div class="picture-interface"><img src="'.$image.'" /><div class="interface-bottomline"><form action="includes/like_update.inc.php" method="POST"><button type="submit" name="submit" value="'.$image2.'">LIKE</button></form><p>'.$likenumber.'</p><p class="picturename">'.$fileactualext2.'</p></div></div>';
          }
        }

      ?>
      </div>
    </div>
    </section>
  </body>
</html>
