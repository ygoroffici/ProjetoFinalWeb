<?php
// require_once 'BaseDAO.php';
require_once 'ConexaoDB.php';

class LivroDAO extends BaseConexaoDB
{
    private static $instancia = NULL;
    
    public static function pegar()
    {
        if( is_null(self::$instancia) )
        {
            self::$instancia = new LivroDAO();
        }
        return self::$instancia;
    }


    public function inserir($titulo, $autor, $datapublicacao)
    {
        $sql = $this->pdo->prepare('INSERT INTO livro (cdlivro, nmlivro, dtpublicacao, idautor) VALUES (DEFAULT, ?, ?, ?)');
        $sql->execute([$titulo, $datapublicacao, $autor]);

        return $this->pdo->lastInsertId();
    }


    public function listar()
    {
        $sql = $this->pdo->query('SELECT * FROM livro ORDER BY cdlivro');

        return $sql->fetchAll();
    }


    public function atualizar($idlivro, $titulo, $autor, $datapublicacao)
    {
        $sql = $this->pdo->prepare('UPDATE livro SET nmlivro = ?, idautor = ?, dtpublicacao = ? WHERE cdlivro = ?');

        return $sql->execute([$titulo, $autor, $datapublicacao, $idlivro]);
    }


    public function excluir($cdlivro)
    {
        $sql = $this->pdo->prepare('DELETE FROM livro WHERE cdlivro = ?');

        return $sql->execute([$cdlivro]);
    }
}