<?php
session_start();
include_once 'dbh.inc.php';

if (isset($_POST['submit'])) {
  $file = $_FILES['file'];

  $fileName = $_FILES['file']['name'];
  $fileTmpname = $_FILES['file']['tmp_name'];
  $fileSize = $_FILES['file']['size'];
  $fileError = $_FILES['file']['error'];
  $fileType = $_FILES['file']['type'];

  $fileExt = explode('.', $fileName);
  $fileActualExt = strtolower(end($fileExt));

  $allowed = array('jpg', 'jpeg', 'png', 'pdf');

  if (in_array($fileActualExt, $allowed)) {
    if ($fileError === 0) {
      if ($fileSize < 10000000) {
        $fileNameNew = "picture_".rand(0,99999999).".".$fileActualExt;
        $fileDestination = '../uploads/'.$fileNameNew;
        move_uploaded_file($fileTmpname, $fileDestination);

        $myfile = fopen("../likesnumber/".$fileNameNew.".txt", "w") or die("Unable to open file!");
        $txt = "0";
        fwrite($myfile, $txt);
        fclose($myfile);

        echo '<meta http-equiv="refresh" content="0;url=../galleri.php?upload=success">';
        exit();
      } else {
        echo '<meta http-equiv="refresh" content="0;url=../galleri.php?upload=toobig">';
        exit();
      }
    } else {
      echo '<meta http-equiv="refresh" content="0;url=../galleri.php?upload=error">';
      exit();
    }
  } else {
    echo '<meta http-equiv="refresh" content="0;url=../galleri.php?upload=unvalid">';
    exit();
  }
} else {
  echo '<meta http-equiv="refresh" content="0;url=../galleri.php">';
  exit();
}
