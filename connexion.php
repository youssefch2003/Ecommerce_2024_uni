<?php
class connexion
{
    private $pdo;
    public function __construct()
    {

        $dsn = "mysql:host=localhost;dbname=php_ecom";
        $user = "root";
        $pw = "root";
        $this->pdo = new PDO($dsn, $user, $pw);
    }
    public function getConnexion()
    {
        return $this->pdo;
    }
}
// try {
// $dsn = "mysql:host=localhost;dbname=php_ecom";
// $user = "root";
// $pw = "root";
// $pdo = new PDO($dsn, $user, $pw);
// } catch (Exception $e) {
// echo " probleme de conexion ";
// }
