<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Cálculo de Nota</title>
</head>
<body>
<div>
    <?php
      $nota1 = isset($_GET["n1"]) ? $_GET["n1"] : 0;
      $nota2 = isset($_GET["n2"]) ? $_GET["n2"] : 0;
      $media = ($nota1 + $nota2) / 2;
      $resultado = "";
      
      if($media > 0 && $media < 5){
        $resultado = "REPROVADO";
      } else if ($media >= 5 && $media < 7){
        $resultado = "RECUPERAÇÃO";
      } else{
        $resultado = "APROVADO";
      }

      echo "A média entre <span class='foco'>$nota1</span> e <span class='foco'>$nota2</span> é igual a <span class='foco'>$media</span><br/>";
      echo "Situação do Aluno: <span class='foco'>$resultado</span><br/>";
      echo "<a href='calculo.html'>Voltar</a>";   
    ?>
</div>
</body>
</html>
 