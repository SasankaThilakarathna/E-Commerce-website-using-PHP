

<?php

    if(isset($_POST['submit'])){
            include 'Config.php';
        $product_name = $_POST['Pname'];
        $product_price = $_POST['Pprice'];
        $product_image = $_FILES['Pimage'];
        $image_loc = $_FILES['Pimage']['tmp_name'];
        $image_name = $_FILES['Pimage']['name'];

            $img_des = "UploadImage/".$image_name;
        move_uploaded_file($image_loc, "UploadImage/".$image_name);

        $product_category = $_POST['Pages'];


        // insert product 

        mysqli_query($con, "INSERT INTO `product`(`PName`, `PPrice`, `PImage`, `PCategory`) 
        VALUES ('$product_name','$product_price','$img_des','$product_category')");
    }
?>

        