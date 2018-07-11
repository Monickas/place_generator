<!DOCTYPE html>
<html lang=pl>
  <head>
    <meta charset="utf-8">
    <title>Twoje miejsce na urlop</title>
  </head>
<body background="pyramid.jpg",width="100%", height="100%">
<span><center><?php
include "kraje.php";


$kontynent=$_GET["Kontynent"];

switch ($kontynent) {
  case "Europa":
  echo $tabeurope[rand(0, count($tabeurope))];
    break;
  case "Ameryka Północna":
    echo $tabnorthamerica[rand(0, count($tabnorthamerica))];
    break;
  case "Ameryka Południowa":
    echo $tabsouthamerica[rand(0, count($tabsouthamerica))];
    break;
  case "Azja":
    echo $tabasia[rand(0, count($tabasia))];
    break;
  case "Australia":
    echo $tabaustralia[rand(0, count($tabaustralia))];
    break;
}

$datestart=strtotime("2018-07-11");
$dateend=strtotime("2019-12-31");
$randomdate=rand($datestart, $dateend);
echo "<br>"." ".date("Y-m-d", $randomdate);
 ?> </center>
  </body>
</html>
