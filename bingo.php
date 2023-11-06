<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Bingo</title>
</head>
<body>
<div class="botoes">
 <form method="post">
  <input type="submit" value="SORTEAR" name="bt-sortear">
  <input type="submit" value="LIMPAR" name="bt-limpar"> 
 </form>
 </div>

 <?php
 
 //botão limpar
 if (isset($_POST['bt-limpar'])){
     $_SESSION['numeros'] = array();
 }

 //botão sortear
 if (isset($_POST['bt-sortear'])){

    if(!isset($_SESSION['numeros'])) {
        $_SESSION['numeros'] = array();
    }
      //Laço de reptição
    do {
        $sorteado = rand(1,75);
    } while(in_array($sorteado, $_SESSION['numeros']));
    $tamanho = sizeof($_SESSION['numeros']);
    (in_array($sorteado, $_SESSION['numeros'])==1);
    $_SESSION['numeros'][$tamanho] = $sorteado;
    sort($_SESSION['numeros']);

      //Letra B
    echo "<div class=fundo> <p class=letra>B</p>";  
     foreach ($_SESSION['numeros'] as $num) {
         if($num <= 15){
             if($num == $sorteado){
                 echo "<div class=ultimo>$num</div>";
             }else{
                echo "<div class=proximo>$num</div>";
             }
         }
    }
    echo "</div>";

      //Letra I
      echo "<div class=fundo> <p class=letra>I</p>";  
     foreach ($_SESSION['numeros'] as $num) {
         if($num >15 && $num <=30){
             if($num == $sorteado){
                 echo "<div class=ultimo>$num</div>";
             }else{
                echo "<div class=proximo>$num</div>";
             }
         }
    }
    echo "</div>";

      //Letra N
      echo "<div class=fundo> <p class=letra>N</p>";   
     foreach ($_SESSION['numeros'] as $num) {
         if($num >30 && $num <=45){
             if($num == $sorteado){
                 echo "<div class=ultimo>$num</div>";
             }else{
                echo "<div class=proximo>$num</div>";
             }
         }
    }
    echo "</div>";

      //Letra G
      echo "<div class=fundo> <p class=letra>G</p>";   
     foreach ($_SESSION['numeros'] as $num) {
         if($num >45 && $num <=60){
             if($num == $sorteado){
                 echo "<div class=ultimo>$num</div>";
             }else{
                echo "<div class=proximo>$num</div>";
             }
         }
    }
    echo "</div>";

      //Letra O
      echo "<div class=fundo> <p class=letra>O</p>";   
     foreach ($_SESSION['numeros'] as $num) {
         if($num >60 && $num <=75){
             if($num == $sorteado){
                 echo "<div class=ultimo>$num</div>";
             }else{
                echo "<div class=proximo>$num</div>";
             }
         }
    }
    echo "</div>";
 }
 
 ?>
    
</body>
</html>