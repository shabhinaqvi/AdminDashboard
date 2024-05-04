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
                        if(isset($_GET['id'])){
                            $id = $_GET['id'];
                      
                                $query = $pdo->prepare("SELECT products.* , categories.category AS 'category' FROM products JOIN categories ON categories.id = products.category_id where products.id = :id");
                                $query->bindParam('id',$id);
                                $query->execute();
                                $single_products = $query->fetch(PDO::FETCH_ASSOC);
                            }
                        ?>

                <form method="post" enctype="multipart/form-data">
                <div class="form-group" >
                    <label for="">Product Name</label>
                    <input type="text" name="productName" value="<?php echo $single_products['product']?>" class="form-control" value="" aria-describedby="helpId">
                </div>
                <div class="form-group">
                    <label for="">Category</label>
                    <select class="form-control" name="productCategory">
                    <option value = "<?php echo $single_products['id'] ?>"><?php echo $single_products['category'] ?></option>
                      <?php
                            $query = $pdo->prepare("select * from categories where category != :category");
                            $query->bindParam('category',$single_products['category']);
                            $query->execute();
                            $allCategories = $query->fetchAll($pdo::FETCH_ASSOC);
                            foreach ($allCategories as $Category){
                        ?>
                        <option value = "<?php echo $Category['id'] ?>"><?php echo $Category['category'] ?></option>
                      <?php
                            }
                      ?>
                      </select>
                </div>
                <div class="form-group">
                   <label for="">Description</label>
                    <input type="text" name="productDescription" class="form-control" value="<?php echo $single_products['discription'] ?>" aria-describedby="helpId">
                </div>
                <div class="form-group">
                   <label for="">Price</label>
                    <input type="text" name="productPrice" class="form-control" value="<?php echo $single_products['price'] ?>" aria-describedby="helpId">
                </div>
                <div class="form-group">
                   <label for="">Quantity</label>
                    <input type="text" name="productQuantity" class="form-control" value="<?php echo $single_products['quantity'] ?>" aria-describedby="helpId">
                </div>
                <div class="form-group">
                   <label for="">Image</label>
                    <input type="file" name="productImage" class="form-control" aria-describedby="helpId">
                </div>
                <?php
                 
                ?>
                <button class="btn btn-info" name="updateProduct">Update</button>
                </form> 
                <img height="100px" src="img/<?php echo $single_products['image'] ?>">
            </div>
            </div>
</div>


<?php
include('footer.php');
?>