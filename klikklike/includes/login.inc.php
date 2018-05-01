<?php

session_start();

$myfile = fopen("users.txt", "w") or die("Unable to open file!");
$txt = "Peter|test123";
fwrite($myfile, $txt);
fclose($myfile);

$userN = $_POST['user-name'];
$passW = $_POST['pass-word'];
$userlist = file ('users.txt');

$success = false;
foreach ($userlist as $user) {
    $user_details = explode('|', $user);
    if ($user_details[0] == $userN && $user_details[1] == $passW) {
        $success = true;
        break;
    }
}

if ($success) {
    $_SESSION['u_uid'] = $userN;
    echo $_SESSION['u_uid'];
    echo '<meta http-equiv="refresh" content="0;url=../index.php?login=success">';
} else {
    echo '<meta http-equiv="refresh" content="0;url=../login.php?login=failed">';
}

?>
