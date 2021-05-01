


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="style3.css">
</head>
<body class="bodyregistro">
 <div class="registro">

<?php


$glicimia = $_POST['glicemia'];

if ($glicimia >=70) {
    if ($glicimia<=150) {
        echo '<p class="resultados"><strong>5u</strong> <br> de Insulina</p>';
    }
    
if ($glicimia>150) {
    if ($glicimia<=200) {
         echo '<p class="resultados"><strong>6u</strong> <br> de Insulina</p><br>';
    }
    if ($glicimia>200) {
    //if ($glicimia<=250) {
         echo '<p class="resultados"><strong>7u</strong> <br> de Insulina</p> <br><br>';
    //}
  } 
  } 
}
   elseif ($glicimia == NULL) {
    echo "<h3>você deve colocar um número valido</h3>";
}
  
elseif ($glicimia<70) {
    echo "<h3>não faça insulina e cuide-se pois sua glicimia esta abaixo do recomendado</h3>";
}

?>
   
   </div>
  <input class="inputbarra" type="checkbox" id="check">
  <label for="check">
      <div class="menu">
        <span class="hamburguer"></span>
      </div>
  </label>  
  <div class="barra">
<div class="itens">

 <a href="glicimia.html" class="item">Registre a glicemia</a>
 <br> <br> <br> <br>
<a class="Logout" href="index.html">LogOut</a>
</div>
  </div>
 
</body>
</html>



