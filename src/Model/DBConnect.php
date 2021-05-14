<?php

namespace src\Model;
use PDO;

class DBConnect
{
    protected $dsn;
    protected $username;
    protected $password;
    public function __construct()
    {
        $this->dsn="mysql:host=localhost;dbname=thimodule2";
        $this->password="123456";
        $this->username="root";
    }

    public function connect()
    {
        return new PDO($this->dsn,$this->username,$this->password);
    }
}