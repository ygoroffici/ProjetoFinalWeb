<?php

// Classe que permite a conexão com o banco de dados
// pela propriedade $pdo.

// Todos os DAOS devem herdar dessa classe, e implementar o padrão
// Singleton para que os usuários tenham acesso no código.
abstract class BaseConexaoDB
{
    public readonly PDO $pdo;

    protected function __construct()
    {
        $this->pdo = self::conectar();
    }


    // Responsavel por conectar ao banco de dados
    protected static function conectar()
    {
        $host    = 'localhost';
        $banco   = 'biblioteca';
        $usuario = 'root';
        $senha   = '';
    
        try {
            $pdo = new PDO("mysql:host=$host; dbname=$banco; charset=utf8mb4", $usuario, $senha);
    
            // Se der erro no SQL, o PHP lanca uma excecao (fica mais facil de ver o problema)
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
            // Os resultados voltam como array associativo: $linha['nome']
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    
            return $pdo;
        } catch (PDOException $e) {
            die('Erro ao conectar no banco: ' . $e->getMessage());
        }
    }
}