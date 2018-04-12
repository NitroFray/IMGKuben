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
         <li><a href="index.php">Home</a></li>
         <li><a href="galleri.php">Galleri</a></li>
         <li class="current"><a href="index2.php">Statistikk</a></li>
         <li><a href="index3.php">Logg Inn</a></li>
       <nav>
    </header>
    <div class="mainc">

      <!--Bruker dette som foreløbig lagring av "lastopp"-->
      <form action="includes/addpicture.inc.php" method="POST">
        <input type="text" name="img_url" placeholder="img_url">
        <br>
        <button type="submit" name="submit">Upload picture</button>
      </form>

    </div>
  </body>
</html>
