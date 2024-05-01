<?php
include('dbcon.php');

if(isset($_POST['addCategory'])){
    $catname = $_POST['cName'];
    $catdesc = $_POST['cDesc'];
    $catimg = $_FILES['cImage']['name'];
    $cattemimg = $_FILES['cImage']['tmp_name'];
    //echo $catname;
    $extension = pathinfo($catimg,PATHINFO_EXTENSION);
    print_r($extension);
    $destination = "img/".$catimg;
    if($extension == "jpg" || $extension == "PNG" || $extension == "png" ){
        if(move_uploaded_file($cattemimg,$destination)){
            $query = $pdo->prepare("insert into categories (category, discription, image) values (:categoryName, :categoryDesc, :categoryImage)");
            $query->bindParam('categoryName',$catname);
            $query->bindParam('categoryDesc',$catdesc);
            $query->bindParam('categoryImage',$catimg);
            $query->execute();
            echo "<script>alert('Category Data Added')
            location.assign('index.php')
            </script>";
        }          
    }
        else{
            echo "<script>alert('invalid file formate') </script>";       
        }
    }

    if(isset($_POST['updateCategory'])){
        $catname = $_POST['cName'];
        $catdesc = $_POST['cDesc'];
        $catimg = $_FILES['cImage']['name'];
        $cattemimg = $_FILES['cImage']['tmp_name'];
        //echo $catname;
        $extension = pathinfo($catimg,PATHINFO_EXTENSION);
        print_r($extension);
        $destination = "img/".$catimg;
        if($extension == "jpg" || $extension == "PNG" || $extension == "png" ){
            if(move_uploaded_file($cattemimg,$destination)){
                $query = $pdo->prepare("insert into categories (category, discription, image) values (:categoryName, :categoryDesc, :categoryImage)");
                $query->bindParam('categoryName',$catname);
                $query->bindParam('categoryDesc',$catdesc);
                $query->bindParam('categoryImage',$catimg);
                $query->execute();
                echo "<script>alert('Category Data Added')
                location.assign('index.php')
                </script>";
            }          
        }
            else{
                echo "<script>alert('invalid file formate') </script>";       
            }
        }

    if(isset($_POST['addProduct'])){
        $productName = $_POST['productName'];
        $productDesc = $_POST['productDiscription'];
        $ProductImage = $_FILES['productImage']['name'];
        $cattemimg = $_FILES['productImage']['tmp_name'];
        //echo $catname;
        $extension = pathinfo($ProductImage,PATHINFO_EXTENSION);
        print_r($extension);
        $destination = "img/".$ProductImage;
        if($extension == "jpg" || $extension == "PNG" || $extension == "png" ){
            if(move_uploaded_file($cattemimg,$destination)){
                $query = $pdo->prepare("insert into products (product, discription, image) values (:productName, :productDesc, :ProductImage)");
                $query->bindParam('productName',$productName);
                $query->bindParam('productDesc',$productDesc);
                $query->bindParam('ProductImage',$ProductImage);
                $query->execute();
                echo "<script>alert('Product Data Added')
                location.assign('index.php')
                </script>";
            }          
        }
            else{
                echo "<script>alert('invalid file formate') </script>";       
            }
        }

        if(isset($_POST['updateProduct'])){
            $id = $_POST['id'];
            $productName = $_POST['productName'];
            $productDesc = $_POST['productDiscription'];
            $ProductImage = $_FILES['productImage']['name'];
            $cattemimg = $_FILES['productImage']['tmp_name'];
            //echo $catname;
            $extension = pathinfo($ProductImage,PATHINFO_EXTENSION);
            //print_r($extension);
            $destination = "img/".$ProductImage;
            if($extension == "jpg" || $extension == "PNG" || $extension == "png" ){
                if(move_uploaded_file($cattemimg,$destination)){
                    $query = $pdo->prepare("UPDATE products SET product = :productName, discription = :productDesc, image = :ProductImage WHERE id = :id");
                    $query->bindParam('id',$id);
                    $query->bindParam('productName',$productName);
                    $query->bindParam('productDesc',$productDesc);
                    $query->bindParam('ProductImage',$ProductImage);
                    $query->execute();
                    echo "<script>alert('Product Data Updated')
                    location.assign('index.php')
                    </script>";
                }          
            }
                else{
                    echo "<script>alert('invalid file formate') </script>";       
                }
            }

        

?>