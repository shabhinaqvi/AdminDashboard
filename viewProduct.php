<?php
include('query.php');
include('header.php');
?>

            <div class="container-fluid pt-4 px-4">
                <div class="row vh-100 bg-light rounded mx-0">
                    <div class="col-md-10">
                        <h3>View Product</h3>

                <table class="table">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Category</th>
                            <th>Description</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                                $query = $pdo->query("select categories.category as 'category', products.* from products join categories on categories.id = products.category_id");
                                $single_products = $query->fetchAll(PDO::FETCH_ASSOC);
                                //var_dump($single_products);
                            foreach ($single_products as $single_product){ 
                        ?>
                        
                        <tr>
                            <td><?php echo $single_product['product'] ?></td>
                            <td><?php echo $single_product['category'] ?></td>
                            <td><?php echo $single_product['discription'] ?></td>
                            <td><?php echo $single_product['price'] ?></td>
                            <td><?php echo $single_product['quantity'] ?></td>
                            <td><img height="100px" src="img/<?php echo $single_product['image'] ?>"></td>
                            <td><a href="editProduct.php?id=<?php echo $single_product['id'] ?>" class="btn-btn-primary">Edit</a></td>
                            <!-- <td><button id="update" class="btn btn-primary" >Edit</button></td> -->
                        </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                </table> 
            </div>
            </div>
</div>

<!-- <script type="text/javascript">
    document.getElementById("update").onclick = function () {
        location.href = "editProduct.php";
    };
</script> -->
<?php
include('footer.php');
?>