<?php
class Banco
{
    //colocar o nome do banco de dados que foi criado
    private static $dbNome = 'prettyfashion';
    
    // foi colocado o ip 127.0.0.1 mas pode ser trocado para localhost caso de problema
    private static $dbHost = '127.0.0.1';
    private static $dbUsuario = 'root';
    private static $dbSenha = '';
   
    private static $cont = null;
    
    public function __construct() 
    {
        die('A função Init nao é permitido!');
    }
    
    public static function conectar()
    {
        if(null == self::$cont)
        {
            try
            {
                self::$cont =  new PDO( "mysql:host=".self::$dbHost.";"."dbname=".self::$dbNome, self::$dbUsuario, self::$dbSenha); 
            }
            catch(PDOException $exception)
            {
                die($exception->getMessage());
            }
        }
        return self::$cont;
    }
    
    public static function desconectar()
    {
        self::$cont = null;
    }
}

?>
