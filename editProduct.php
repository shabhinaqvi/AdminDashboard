<?php
include('query.php');
include('header.php');
?>

<tbody>
            <div class="container-fluid pt-4 px-4">
                <div class="row vh-100 bg-light rounded mx-0">
                    <div class="col-md-10">
                        <h3>Edit Product</h3>

                        <?php
                                $query = $pdo->prepare("select * from products");
                                $query->execute();
                                $single_products = $query->fetchAll(PDO::FETCH_ASSOC);
                
                            foreach ($single_products as $single_product){ 
                        ?>

                <form action="query.php" method="post" enctype="multipart/form-data">
                <div class="form-group" >
                    <label for="">Product Name</label>
                    <input type="text" hidden name="id" value="<?php echo $single_product['id'] ?>">
                    <input type="text" name="productName" id="" class="form-control" value="<?php echo $single_product['product'] ?>" aria-describedby="helpId">
                </div>
                <div class="form-group">
                    <label for="">Description</label>
                    <input type="text" name="productDiscription" id="" class="form-control" value="<?php echo $single_product['discription'] ?>" aria-describedby="helpId">
                </div>
                <div class="form-group">
                   <label for="">Image</label>
                    <input type="file" name="productImage" id="" class="form-control" placeholder="" aria-describedby="helpId">
                </div>
                
                <?php
                    }
                ?>
                <button class="btn btn-info" name="updateProduct">Update</button>
                </form> 
                <img src="img/<?php echo $single_product['image'] ?>">
            </div>
            </div>
</div>


<?php
include('footer.php');
?>