<?php
$con = mysqli_connect('localhost','root','');
$vysledek_zvoleni_db = mysqli_select_db($con,'kniha');
if ($vysledek_zvoleni_db)
{
  echo "Podařilo se . Databáze otevřena<br>";
}

?>