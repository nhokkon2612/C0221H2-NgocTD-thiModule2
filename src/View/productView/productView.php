<?php



?>


<table>
    <tr>
        <th>#</th>
        <th>Product Name</th>
        <th>Product Type</th>
        <th>Product Price</th>
        <th></th>
    </tr>

    <?php foreach ($products as $key=> $product): ?>
        <tr>
            <th><?php echo $key+1?></th>
            <th><?php echo $product['productName']?></th>
            <th><?php echo $product['productType']?></th>
            <th><?php echo $product['productPrice']?></th>
            <th><a href="index.php?page=delete-product&Id=<?php echo $product['Id']?>">Delete</a> <?php echo " | "?> <a href="index.php?page=update-product&Id=<?php echo $product['Id']?>"> Update</a>  </th>
        </tr>
    <?php endforeach;?>
</table>
