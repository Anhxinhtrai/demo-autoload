<?php
namespace App\model;

use mysql_xdevapi\Exception;

class DBConnect
{
    protected  $dsn;
    protected $username;
    protected $password;

    public function __construct()
    {
        $this->dsn = "mysql:host=localhost;dbname=classicmodels";
        $this->username = "root";
        $this->password = "12345678";
    }

    public function connect()
    {
        try{
            return new \PDO($this->dsn,$this->username,$this->password);
        }catch (\PDOException $exception){
            echo "server dang bao tri";
            exit();
        }
    }
}