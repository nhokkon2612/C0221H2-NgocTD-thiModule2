<?php

?>

<form action="index.php?page=add-product    " method="post">
    Product Name : <input type="text" name="productName"> <br>
    Product Type : <input type="text" name="productType"> <br>
    Product Price : <input type="number" name="productPrice"> <br>
    Product Quantity : <input type="number" name="productQuantity"> <br>
    Date Create : <input type="date" name="dateCreate"> <br>
    Product Status : <input type="text" name="productStatus"> <br>

    <button type="submit">Add</button>
    <button type="submit" onclick="window.history.go(-1)">Cancel</button>
</form>
