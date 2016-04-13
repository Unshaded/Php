<?php
if(isset ($_GET['table']))
  $table=$_GET['table'];
else
  $table=1;
echo '<h1>table de '.$table.'</h1>';
for ($i=1; $i<=10; $i++){
  $res=$i*$table;
  echo $table.' x '.$i.' = '.$res."<br>";
}
echo"<form method='get' action='TD_2_Q2.php'>
     <input type='text' name='table'>
     <button type='submit' name='envoyer'>Envoyer
     </form>"
?>