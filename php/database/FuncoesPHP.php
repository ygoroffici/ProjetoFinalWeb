<?php
require_once("LivroDAO.php");
require_once("AutorDAO.php");


/**
 * Funções de teste DAO
 */

function obterDAO($objeto): ?AbstractDAO
{
    $dao = NULL;
    switch($objeto)
    {
        case "autor":
            $dao = AutorDAO::Get();
            break;
        case "livros":
            $dao = LivroDAO::Get();
            break;
        default:
            echo "erro: objeto não reconhecido";
            break;
    }
    return $dao;
}


function executarMetodo(string $metodo, AbstractDAO $dao)
{
    switch($metodo)
    {
        case "listar":
            return $dao->listar();
    }
}


/**
 * Acessa DAO de $objeto dentro do banco de dados. Depois, realiza $metodo nesse DAO.
 */
function acessarObjeto($objeto, $metodo)
{
    $dao = obterDAO($objeto);
    return json_encode(executarMetodo($metodo, $dao));
}


echo acessarObjeto($_GET["objeto"], $_GET["metodo"]);
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