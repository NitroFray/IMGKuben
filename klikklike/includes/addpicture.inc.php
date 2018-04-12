<?php
  include_once 'dbh.inc.php';

  $img_url = mysqli_real_escape_string($conn, $_POST['img_url']);

  $sql = "INSERT INTO images (img_url, like_number)
    values ('$img_url', '0');";
  mysqli_query($conn, $sql);

  header("Location: ../galleri.php?upload=success");
