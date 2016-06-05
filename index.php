<?php


$botToken="226341172:AAFEbFvrFpTZXKtEFM8YCDSKiB1PaBnvLJ8";
$website="https://api.telegram.org/bot".$botToken;

$update = file_get_contents($website."/getupdates");
print_r($update);


 ?>
