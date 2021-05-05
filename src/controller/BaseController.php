<?php


namespace App\controller;

use App\model;

class BaseController
{
    protected $connect;

    public function __construct()
    {
        $dbConnect = new model\DBConnect();
        $this->connect = $dbConnect->connect();
    }

    public function getAllCustomer()
    {
        $sql = "SELECT * FROM customers";
        $query = $this->connect->query($sql);

        return $query->fetchAll();
    }
}