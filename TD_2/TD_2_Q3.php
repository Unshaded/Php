<?php
  if(isset($_GET['Operande1'])){
    $Operande1=$_GET['Operande1'];
  }
  if(isset($_GET['Operande2'])){
    $Operande2=$_GET['Operande2'];
  }

  if(isset($_GET['Operation'])) {
    $Operation=$_GET['Operation'];
    if($Operation == 'Addition')
      $res=$Operande1+$Operande2;
    if($Operation == 'Soustraction')
      $res=$Operande1-$Operande2;
    if($Operation == 'Multiplication')
      $res=$Operande1*$Operande2;
    if($Operation == 'Division')
      $res=$Operande1/$Operande2;
  }

  

?>
<html>
  <head>
    <meta charset='UTF-8'/>
    <title>Calculatrice</title>
  </head>
  <body>
    <form action='TD_2_Q3.php' method='get'>
      <fieldset>
        <legend>
          Calculatrice
        </legend>
        <input type="text" name="Operande1" value="<?php if(isset($res)) echo $res;?>">
         <select name="Operation">
            <option value="Addition">+</option>
            <option value="Soustraction">-</option>
            <option value="Multiplication">*</option>
            <option value="Division">/</option>
        </select>
        <input type="text" name="Operande2">
        <?php
    if(isset($res))
     echo " = ".$res;
    ?>
      </fieldset>
      <input type="submit" name="Calculer">
    </form>
    
  </body>
</html>