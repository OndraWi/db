<?php
require_once("db.php");
$db = new Database();  

$db->query("select * from knihy");
$q = $db->Rows();

print_r($q);
echo $db->NumRows() ."<br><br>";
print_r($db->GetLink());
$db->UpdateDb("INSERT INTO knihy (nazev, autor, stranek)
VALUES ('JohnD', 'Doe', '100')");
?>