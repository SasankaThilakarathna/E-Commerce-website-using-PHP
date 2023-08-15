<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Update</title>

    <!-- CSS Files -->
	<link href="../fa/svg-with-js/css/svg-with-js.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>

<?php
// Check if the form is submitted and handle the update
if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $product_name = $_POST['Pname'];
    $product_price = $_POST['Pprice'];
    $product_category = $_POST['Pages'];

    // Check if a new image is uploaded
    if ($_FILES['Pimage']['name']) {
        $image_name = $_FILES['Pimage']['name'];
        $image_tmp = $_FILES['Pimage']['tmp_name'];
        $image_dest = "UploadImage/" . uniqid() . "_" . $image_name; // Using uniqid to generate a unique filename
        move_uploaded_file($image_tmp, $image_dest);
    } else {
        // If no new image is uploaded, keep the existing image path
        $image_dest = $_POST['old_image'];
    }

    include 'Config.php';
    $stmt = mysqli_prepare($con, "UPDATE `product` SET `PName`=?, `PPrice`=?, `PImage`=?, `PCategory`=? WHERE Id=?");
    mysqli_stmt_bind_param($stmt, "ssssi", $product_name, $product_price, $image_dest, $product_category, $id);

    if (mysqli_stmt_execute($stmt)) {
        mysqli_stmt_close($stmt);
        header("location: index.php");
        exit();
    } else {
        echo "Error updating the product: " . mysqli_error($con);
    }

    mysqli_stmt_close($stmt);
}

// Fetch product details based on ID
if (isset($_GET['ID'])) {
    $id = $_GET['ID'];
    include 'Config.php';
    $Record = mysqli_query($con, "SELECT * FROM `product` WHERE ID = $id");

    if ($Record) {
        $data = mysqli_fetch_array($Record);
    } else {
        echo "Error executing the query: " . mysqli_error($con);
    }
}
?>

<div class="container">
    <div class="row">
        <div class="col-md-6 m-auto border border-primary mt-5">
            <form action="update.php" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <p class="text-center fw-bold fs-3 text-warning">Product Update</p>
                </div>
                <div class="mb-3">
                    <label class="form-label">Product Name</label>
                    <input type="text" name="Pname" class="form-control" placeholder="Enter Product Name" value="<?php echo isset($data['PName']) ? $data['PName'] : ''; ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Product Price</label>
                    <input type="text" name="Pprice" class="form-control" placeholder="Enter Product Price" value="<?php echo isset($data['PPrice']) ? $data['PPrice'] : ''; ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Add Product Image</label>
                    <input type="file" name="Pimage" class="form-control"><br>
                    <?php
                    if (!empty($data['PImage'])) {
                        echo '<img src="' . $data['PImage'] . '" alt="Product Image" style="height:200px">';
                    }
                    ?>
                    <input type="hidden" name="old_image" value="<?php echo isset($data['PImage']) ? $data['PImage'] : ''; ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Select Page Category</label>
                    <select class="form-select" name="Pages">
                        <option value="" disabled>Select Page Category</option>
                        <option value="women" <?php echo isset($data['PCategory']) && $data['PCategory'] === 'women' ? 'selected' : ''; ?>>Women</option>
                        <option value="men" <?php echo isset($data['PCategory']) && $data['PCategory'] === 'men' ? 'selected' : ''; ?>>Men</option>
                        <option value="kid" <?php echo isset($data['PCategory']) && $data['PCategory'] === 'kid' ? 'selected' : ''; ?>>Kid</option>
                    </select>
                </div>
                <input type="hidden" name="id" value="<?php echo isset($data['Id']) ? $data['Id'] : ''; ?>">
                <button type="submit" name="submit" class="bg-warning fs-4 fw-bold my-3 form-control text-white">Update All Records</button>
            </form>
        </div>
    </div>
</div>

</body>
</html>
