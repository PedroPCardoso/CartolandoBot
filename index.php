<?php


$botToken="226341172:AAFEbFvrFpTZXKtEFM8YCDSKiB1PaBnvLJ8";
$website="https://api.telegram.org/bot".$botToken;
$cartolaapi="https://api.cartolafc.globo.com/";

$update = file_get_contents($website."/getupdates");
$updatearray= json_decode($update,TRUE);
#print_r($updatearray);
$text = $updatearray["result"][0]["message"]["text"];  #captura a primeira msg

$chatid = $updatearray["result"][0]["message"]["chat"]["id"]; #captura o chat

$pontuacao = file_get_contents($cartolaapi."atletas/pontuados");
$pontuacaoarray= json_decode($pontuacao);
#$jogador = $pontuacaoarray["rodada"]["6"]["atletas"]["apelido"]; #captura o chat

print_r($pontuacaoarray);
#print_r($jogador);


print_r($text);
print_r($chatid);
file_get_contents($website."/sendmessage?chat_id=".$chatid."&text=Grafite")


 ?>
