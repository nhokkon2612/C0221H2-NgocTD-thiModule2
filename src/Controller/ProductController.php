<?php

namespace src\Controller;
use src\Model\ProductModel;

class ProductController
{
    protected $productModel;
    public function __construct()
    {
        $this->productModel=new ProductModel();
    }

    public function add()
    {
        if ($_SERVER['REQUEST_METHOD']=="GET"){
            //var_dump( "aaaaaaaaaa");
            include "src/View/productView/add.php";
        }else{

            $productName=$_POST['productName'];
            $productType=$_POST['productType'];
            $productPrice=$_POST['productPrice'];
            $productQuantity=$_POST['productQuantity'];
            $dateCreate=$_POST['dateCreate'];
            $productStatus=$_POST['productStatus'];
            $this->productModel->add($productName,$productType,$productPrice,$productQuantity,$dateCreate,$productStatus);
            header("location:index.php?page=list-product");
        }
        
    }

    public function getProduct()
    {
        $products=$this->productModel->getAll();
        //var_dump($products);die();
        include "src/View/productView/productView.php";
    }

    public function deleteProduct()
    {
        $Id=$_GET['Id'];
        $this->productModel->delete($Id);
    }

    public function updateProduct()
    {
        if ($_SERVER['REQUEST_METHOD']=="GET"){
            include "src/View/productView/update.php";
        }else{
            $Id = $_POST['Id'];
            $productName=$_POST['productName'];
            $productType=$_POST['productType'];
            $productPrice=$_POST['productPrice'];
            $productQuantity=$_POST['productQuantity'];
            $dateCreate=$_POST['dateCreate'];
            $productStatus=$_POST['productStatus'];
            $this->productModel->update($Id,$productName,$productType,$productPrice,$productQuantity,$dateCreate,$productStatus);
            header("location:index.php?page=list-product");
        }
    }



}