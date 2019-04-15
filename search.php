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
  include 'opendb.php';

    if(isset($_POST['submit']) )
    {
      echo "odeslano<br>" ;      
      if($_POST["nazev"]){$query='SELECT * FROM knihy WHERE nazev="'.$_POST["nazev"].'";';}
 
      $result = mysqli_query($con,$query);
      echo "<table><tr><th>Název</th><th>Autor</th><th>Pocet stran</th></tr>";
         while ($row = mysqli_fetch_array($result))
        {
           echo "<tr>";
           echo "<th>" .$row["nazev"]."</th>";
           echo "<th>" .$row["autor"]."</th>";
           echo "<th>" .$row["stranek"]."</th>";
           echo "</tr>";
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