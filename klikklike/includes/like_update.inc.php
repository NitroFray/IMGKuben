<?php

session_start();

if (isset($_POST['submit'])) {
  $pictureid = $_POST['submit'];

  $myfile = fopen("../".$pictureid, "r") or die("Unable to open file!");
  $oldlike = fread($myfile,filesize("../".$pictureid));
  fclose($myfile);

  $myfile = fopen("../".$pictureid, "w") or die("Unable to open file!");
  $newlike = $oldlike+1;
  fwrite($myfile, $newlike);
  fclose($myfile);

  $myfile = fopen("../ip/ipusers.txt", "a") or die("Unable to open file!");
  $remote_ip = getenv('REMOTE_ADDR');
  $day = date("d");
  $month = date("m");
  $year = date("Y");
  $txt = $day.":".$month.":".$year."|".$pictureid."|".$remote_ip."\n";
  fwrite($myfile, $txt);
  fclose($myfile);

  echo '<meta http-equiv="refresh" content="0;url=../galleri.php?like=updated">';
  exit();
} else {
  echo '<meta http-equiv="refresh" content="0;url=../index.php">';
  exit();
}

?>
