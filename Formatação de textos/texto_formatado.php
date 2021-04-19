<!DOCTYPE html>
<html>
<head>
    <?php
      $txt = isset($_GET["t"]) ? $_GET["t"] : "[Não informado]";
      $tam = isset($_GET["tam"]) ? $_GET["tam"] : 0;
      $cor = isset($_GET["cor"]) ? $_GET["cor"] : "[Não informado]";
    ?>
    
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>Formatando textos</title>
    <style> 
      span.texto{
        font-size:<?php echo $tam; ?>;
        color:<?php echo $cor; ?>;
      }
    </style>
</head>
<body>
  <div>
      <?php
        echo "<span class='texto'>$txt</span>";       
      ?>
      <a href="formatando_textos.html">Voltar</a>
  </div>
</body>
</html>
 