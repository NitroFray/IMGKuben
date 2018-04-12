<?php
  include_once 'dbh.inc.php';

  $like_img = mysqli_real_escape_string($conn, $_POST['like_number']);

  $sql = "UPDATE images SET like_number=like_number+1 WHERE id='$like_img'";
  mysqli_query($conn, $sql);

  header("Location: ../galleri.php?like=success");
