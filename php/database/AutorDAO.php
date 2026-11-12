<?php
// require_once 'BaseDAO.php';
require_once 'ConexaoDB.php';

class AutorDAO extends BaseConexaoDB
{
    private static $instancia = NULL;
    
    public static function pegar()
    {
        if( is_null(self::$instancia) )
        {
            self::$instancia = new AutorDAO();
        }
        return self::$instancia;
    }


    public function inserir($nmautor)
    {
        $sql = $this->pdo->prepare('INSERT INTO autor (nmautor) VALUES (?)');
        $sql->execute([$nmautor]);
        return $this->pdo->lastInsertId();
    }


    public function listar()
    {
        $sql = $this->pdo->query('SELECT * FROM autor ORDER BY idautor');
        return $sql->fetchAll();
    }


    public function atualizar($idautor, $nmautor)
    {
        $sql = $this->pdo->prepare('UPDATE autor SET nmautor = ? WHERE idautor = ?');

        return $sql->execute([$nmautor, $idautor]);
    }


    public function excluir($idautor)
    {
        $sql = $this->pdo->prepare('DELETE FROM autor WHERE idautor = ?');

        return $sql->execute([$idautor]);
    }
}