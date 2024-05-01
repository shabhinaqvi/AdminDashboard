<?php
include('query.php');
include('header.php');
?>

            <div class="container-fluid pt-4 px-4">
                <div class="row vh-100 bg-light rounded mx-0">
                    <div class="col-md-10">
                        <h3>View Category</h3>

                <table class="table">
                    <thead>
                        <tr>
                            <th>Category</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                                $query = $pdo->prepare("select * from categories");
                                $query->execute();
                                $single_categories = $query->fetchAll(PDO::FETCH_ASSOC);
                
                            foreach ($single_categories as $single_category){ 
                        ?>
                        <tr>
                            <td><?php echo $single_category['category'] ?></td>
                            <td><?php echo $single_category['discription'] ?></td>
                            <td><img src="img/<?php echo $single_category['image'] ?>"></td>
                            <td><button id="update" class="btn btn-primary" >Edit</button></td>

                        </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                </table> 
            </div>
            </div>
</div>

<script type="text/javascript">
    document.getElementById("update").onclick = function () {
        location.href = "editProduct.php";
    };
</script>
<?php
include('footer.php');
?>