<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Inserindo dados na tela</title>
</head>
<body>
<div>
    <form method="get" action="capturaDeDados.php">
      <?php
      $c = 1;
      while($c <= 5){
        echo "Valor $c: <input type='number' name='v$c' min='0' max='100' value='0'/><br/>";
        $c++;
      }
      ?>
      <input class="botao" type="submit" value="Enviar"/>

    </form>
</div>
</body>
</html>
 