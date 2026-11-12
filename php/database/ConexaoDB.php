<?php
// Classe que permite a conexão com o banco de dados
// pela propriedade $pdo.

// - Todos os DAOs devem herdar dessa classe.
// - Os DAOs devem possuir um Singleton oferecendo acesso à uma instância da mesma.
// - Não é possível criar um DAO usando 'new'. O acesso deve-se pelo Singleton.
abstract class AbstractDAO
{
    const HOST    = 'localhost';
    const BANCO   = 'biblioteca';
    const USUARIO = 'root';
    const SENHA   = '';

    public readonly PDO $pdo;


    abstract public static function Get();

    protected function __construct()
    {
        $this->pdo = self::conectar();
    }


    // Responsavel por conectar ao banco de dados
    protected static function conectar()
    {
        try {
            $pdo = new PDO("mysql:host=".self::HOST."; dbname=".self::BANCO."; charset=utf8mb4", self::USUARIO, self::SENHA);
    
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