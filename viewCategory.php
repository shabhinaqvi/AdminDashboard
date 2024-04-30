<?php
include('query.php');
include('header.php');
?>

            <div class="container-fluid pt-4 px-4">
                <div class="row vh-100 bg-light rounded mx-0">
                    <div class="col-md-10">
                        <h3>Add Category</h3>

                <table class="table">
                    <thead>
                        <tr>
                            <th>Category</th>
                            <th>Description</th>
                            <th>Image</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                                $query = $pdo->prepare("select * from categories");
                                $query->execute();
                                $single_categories = $query->fetchAll(PDO::FETCH_DEFAULT);
                
                            foreach ($single_categories as $single_category){ 
                        ?>
                        <tr>
                            <td><?php echo $single_category['category'] ?></td>
                            <td><?php echo $single_category['discription'] ?></td>
                            <td><?php echo $single_category['image'] ?></td>
                        </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                </table> 
            </div>
            </div>
</div>


<?php
include('footer.php');
?>