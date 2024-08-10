<?php
class Database
{
    private $hostname = "bhrbsfg9lc8pq8zeheur-mysql.services.clever-cloud.com";
    private $database = "bhrbsfg9lc8pq8zeheur";
    private $username = "u4iqq9tvq7r9ft7y";

    private $password = "lV40FD4YuwSPW21P8r12";
    private $charset = "utf8";

    function conectar()
    {
        try {
            $conexion = "mysql:host=" . $this->hostname . "; dbname=" . $this->database . "; charset=" . $this->charset;
            $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES => false
            ];

            $pdo = new PDO($conexion, $this->username, $this->password, $options);
            return $pdo;
        } catch (PDOException $e) {
            echo 'Error conexion: ' . $e->getMessage();
            exit;
        }
    }
}