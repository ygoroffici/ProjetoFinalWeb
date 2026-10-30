<?php
require_once("LivroDAO.php");
require_once("AutorDAO.php");

/**
 * Funções de teste DAO
 */
function acessarLivros($metodo)
{
    switch($metodo)
    {
        case "listar":
            // print_r($livrodao->listar());
            return json_encode(LivroDAO::pegar()->listar());
            break;
    }
}

function acessarAutores($objeto, $metodo)
{
    $dao = NULL;
    switch($objeto)
    {
        case "autor":
            $dao = AutorDAO::pegar();
            break;
        case "livros":
            $dao = LivroDAO::pegar();
            break;
        default:
            echo "erro: objeto não reconhecido";
            return;
            break;
    }

    
    switch($metodo)
    {
        case "listar":
            // print_r($livrodao->listar());
            return json_encode($dao->listar());
            break;
    }
}



echo acessarAutores($_GET["objeto"], $_GET["metodo"]);
// switch( $_GET["objeto"] )
// {
//     $met = $_GET["metodo"];
//     case "livros":
//         echo acessarLivros($met);
//         break;
//     case "autor":
//         echo acessarAutores($met);
//     default:
//         echo "erro: objeto não reconhecido";
//         break;
// }
?>