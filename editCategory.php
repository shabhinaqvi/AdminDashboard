<?php
include('query.php');
include('header.php');
?>

            <div class="container-fluid pt-4 px-4">
                <div class="row vh-100 bg-light rounded mx-0">
                    <div class="col-md-10">
                        <h3>Add Product</h3>

                <form action="query.php" method="post" enctype="multipart/form-data">
                <div class="form-group" >
                    <label for="">Product Name</label>
                    <input type="text" hidden name="productName">
                    <input type="text" name="productName" id="" class="form-control" placeholder="" aria-describedby="helpId">
                </div>
                <div class="form-group">
                    <label for="">Description</label>
                    <input type="text" name="productDiscription" id="" class="form-control" placeholder="" aria-describedby="helpId">
                </div>
                <div class="form-group">
                   <label for="">Image</label>
                    <input type="file" name="productImage" id="" class="form-control" placeholder="" aria-describedby="helpId">
                </div>
                
                <button class="btn btn-info" name="updateCategory">Update</button>
                </form> 
            </div>
            </div>
</div>


<?php
include('footer.php');
?>