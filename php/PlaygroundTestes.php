<?php

require_once("../php/util/FuncoesAprendizado.php");

?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aprendizado e experimentos PHP</title>
        <!-- <link rel="stylesheet" href="estilos/style_index.css"> -->
    </head>

    <body>
        <header>
            <h1>PHP</h1>
        </header>
            <hr>
        <div>
            <h3>VVV  Teste  VVV:</h3>
            <?php
                Debug::writeHTML("cor1: ".$cor1);
                Debug::writeHTML("cor2: ".$cor2);
                // echo "<p> cor1: ".$cor1."</p>";
                // echo "<p> cor2: ".$cor2."</p>";
                digaAlgo();
                crieCasoNaoTenha();
                crieCasoNaoTenha();
            ?>
        </div>
    </body>

</html>