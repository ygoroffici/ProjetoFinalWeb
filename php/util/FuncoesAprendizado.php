<?php
require_once("../php/database/LivroDAO.php");
require_once("../php/util/Helpers.php");


$cor1 = "azul";
$cor2 = "verde";
$algo = "eae";


function digaAlgo()
{
    global $algo;
    Debug::writeHTML($algo);
}


function crieCasoNaoTenha()
{
    static $dao;
    if( is_null($dao) )
    {
        $dao = new LivroDAO();
        Debug::writeHTML("Criei o negocio");
    }
    else {
        Debug::writeHTML("Ja tava criado o negocio");
    }
}

?>