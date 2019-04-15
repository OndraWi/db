<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="generator" content="PSPad editor, www.pspad.com">
    <title></title>
    <style>
td, th {
  border: 1px solid #ddd;
  padding: 8px;
}    
    </style>
  </head>
 <body>   

 <?php
 require_once("db.php");
 $db = new Database(); 

    if(isset($_POST['submit']) )
    {
      echo "odeslano<br>" ;      
      if($_POST["nazev"]){
      $db->query("select * from knihy");
      }

      $q = $db->Rows();

      //print_r($q);
      echo "<table><tr><th>Název</th><th>Autor</th><th>Pocet stran</th></tr>";
 
 foreach ($q as $value) {
    echo "<tr>";
    echo "<th>". $value["nazev"]."</th>";
    echo "<th>". $value["autor"]."</th>";
    echo "<th>". $value["stranek"]."</th>";
}

     echo"</table>";
    }

 ?>
  <form method="post">

   Hledat knihu: <input type="text" name="nazev">
<!--
   Hledat knihu: <input type="text" name="autor">
   Hledat knihu: <input type="text" name="stranek">
-->
   
   <input type="submit" value="Odeslat" name="submit">
  </form>

 </body>
</html>