<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Coletando dados</title>
</head>
<body>
<div>
    <?php
        $nome = isset($_GET["nome"]) ? $_GET["nome"] : "[Não Informado]";
        $anoNasc = isset($_GET["ano"]) ? $_GET["ano"] : 0;
        $sexo = isset($_GET["sexo"]) ? $_GET["sexo"] : "[Não Informado]";
        $idade = date("Y") - $anoNasc;
        echo "$nome é $sexo e tem $idade anos";
    ?>
    <a href="coletando_dados.html">Voltar</a>
</div>
</body>
</html>
 