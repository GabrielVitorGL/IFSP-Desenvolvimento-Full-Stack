<?php
class Caminho
{
    public static $usuario = "root";
    public static $senha = "";
    public static $connect = null;

    private static function Conectar()
    {
        try {
            if (self::$connect === null) {
                self::$connect = new PDO("mysql:host=localhost;dbname=bdlojinha200", self::$usuario, self::$senha);
                self::$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
        } catch (\Throwable $th) {
            echo "Erro ao conectar ao banco de dados: " . $th->getMessage();
            die();
        }
        return self::$connect;
    }

    public static function getConn()
    {
        return self::Conectar();
    }
}
