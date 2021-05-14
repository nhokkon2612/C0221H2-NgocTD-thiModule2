<?php
require "vendor/autoload.php";
use src\Controller\ProductController;


$page=isset($_REQUEST['page']) ? $_REQUEST['page'] : "";
$productController = new ProductController();
switch ($page){
    case "add-product":
        $productController->add();
        break;
    case "list-product":
        $productController->getProduct();
        break;
    case "update-product":
        $productController->updateProduct();
        break;
    case "delete-product":
        $productController->deleteProduct();
        break;
    default:
}
?>




<a href="index.php?page=list-product">danh sach san pham</a>
<a href="index.php?page=add-product">Them san pham</a>
