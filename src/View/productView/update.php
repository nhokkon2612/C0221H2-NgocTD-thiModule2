<?php

?>

<form action="index.php?page=update-product" method="post">
    <div style="display: none">product Id   : <input type="number" name="Id" value="<?php echo $_GET['Id']?>"><br> </div>
    Product Name : <input type="text" name="productName"> <br>
    Product Type : <input type="text" name="productType"> <br>
    Product Price : <input type="number" name="productPrice"> <br>
    Product Quantity : <input type="number" name="productQuantity"> <br>
    Date Create : <input type="date" name="dateCreate"> <br>
    Product Status : <input type="text" name="productStatus"> <br>

    <button type="submit">Update</button>
    <button type="submit" onclick="window.history.go(-1)">Cancel</button>
</form>
