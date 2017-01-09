<?php


 $botToken="242721847:AAGIHLO0AYT_329Rt-cuigCpWJdSsgAH5Ho";
 $website="https://api.telegram.org/bot".$botToken;
 $cartolaapi="https://api.cartolafc.globo.com/";

 $update = file_get_contents($website."/getupdates");
 $updatearray= json_decode($update,TRUE);
 #print_r($updatearray);
 $req  = sizeof($updatearray["result"]);
 $req2 = 0;
 $i=0;
 while(i!==2){
   $update = file_get_contents($website."/getupdates");
   $updatearray= json_decode($update,TRUE);
   #print_r($updatearray);
   print_r($req2);
   print_r("resultado1");
   $req2  = sizeof($updatearray["result"]);
   print_r($req2);
   $i= $i+1;
   if (req!==req2) {
     $text = $updatearray["result"][req2-1]["message"]["text"];
     $chatid = $updatearray["result"][0]["message"]["chat"]["id"]; #captura o chat
     obterJogador($text,$chatid);
     $req=$req2;

    }

 }
 $text = $updatearray["result"][0]["message"]["text"];  #captura a primeira msg

 $chatid = $updatearray["result"][0]["message"]["chat"]["id"]; #captura o chat

function obterJogador($text,$chatid){

  $botToken="242721847:AAGIHLO0AYT_329Rt-cuigCpWJdSsgAH5Ho";
  $website="https://api.telegram.org/bot".$botToken;
  $cartolaapi="https://api.cartolafc.globo.com/";
  $pontuacao = json_decode(file_get_contents($cartolaapi."atletas/pontuados"),true);
  print_r($text);
  foreach ($pontuacao['atletas'] as &$jogador) {
      if (strtolower($jogador['apelido'])==strtolower($text))
      {
        file_get_contents($website."/sendmessage?chat_id=".$chatid."&text=".$jogador['pontuacao']);
        break;
      }

}



 }


print_r($text);
print_r($chatid);



 ?>
