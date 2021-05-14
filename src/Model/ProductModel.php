<?php


namespace src\Model;


class ProductModel
{
    protected $db;
    public function __construct()
    {
        $con=new DBConnect();
        $this->db=$con->connect();
    }

    public function getAll()
    {
        $sql="SELECT * FROM products ";
        $stmt=$this->db->query($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function add($name,$type,$price,$quantity,$datecreate,$status)
    {

        $sql="INSERT INTO products(productName,productType,productPrice,productQuantity,dateCreate,productStatus) values (:productName,:productType,:productPrice,:productQuantity,:dateCreate,:productStatus)";
        $stmt=$this->db->prepare($sql);
        $stmt->bindParam(":productName",$name);
        $stmt->bindParam(":productType",$type);
        $stmt->bindParam(":productPrice",$price);
        $stmt->bindParam(":productQuantity",$quantity);
        $stmt->bindParam(":dateCreate",$datecreate);
        $stmt->bindParam(":productStatus",$status);
        $stmt->execute();
    }

    public function delete($Id)
    {
        $sql="DELETE FROM products WHERE Id=:Id";
        $haha=$this->db->prepare($sql);
        $haha->bindParam(":Id",$Id);
        $haha->execute();
    }

    public function update($Id,$name,$type,$price,$quantity,$datecreate,$status)
    {
        //var_dump($name);die();
        $sql="UPDATE products SET productName=:productName,productType=:productType,productPrice=:productPrice,productQuantity=:productQuantity,dateCreate=:dateCreate,productStatus=:productStatus WHERE Id=:Id";
        $stmt=$this->db->prepare($sql);
        $stmt->bindParam(":productName",$name);
        $stmt->bindParam(":productType",$type);
        $stmt->bindParam(":productPrice",$price);
        $stmt->bindParam(":productQuantity",$quantity);
        $stmt->bindParam(":dateCreate",$datecreate);
        $stmt->bindParam(":productStatus",$status);
        $stmt->bindParam(":Id",$Id);
        $stmt->execute();

    }



}