<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="Besvarelse til prøve">
    <meta name="keywords" content="web design, education, thw winter olympics">
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
         <li><a href="index.php">Home</a></li>
         <li class="current"><a href="galleri.php">Galleri</a></li>
         <li><a href="statistikk.php">Statistikk</a></li>
         <li><a href="index3.php">Logg Inn</a></li>
       <nav>
    </header>
    <div class="mainc">

      <?php
        $sql = "SELECT * FROM images";
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
        }
      ?>

    </div>
  </body>
</html>
