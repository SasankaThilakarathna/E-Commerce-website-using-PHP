<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>

    <!-- CSS Files -->
	<link href="../fa/svg-with-js/css/svg-with-js.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-6 m-auto border border-primary mt-5">
            
                <form action="insert.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <p class="text-center fw-bold fs-3 text-warning">Product Detail</p>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Product Name</label>
                        <input type="text" name="Pname" class="form-control" placeholder="Enter Product Name">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Product Price</label>
                        <input type="text" name="Pprice" class="form-control" placeholder="Enter Product Price">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Add Product Image</label>
                        <input type="file" name="Pimage" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Select Page Category</label>
                        <select class="form-select" name="Pages">
                            <option selected>Open this select menu</option>
                            <option value="women">Women</option>
                            <option value="men">Men</option>
                            <option value="kid">Kid</option>
                        </select>
                    </div>
                    <button name="submit" class="bg-warning fs-4 fw-bold my-3 form-control text-white">Upload</button>
                    
                </form>

            </div>
        </div>
    </div>

        <!-- Fetch data -->

        <div class="container">
            <div class="row">
                <div clas"col-md-8 m-auto">
                <table class="table border border-warning table-hover border my-5">
        
        <thead class="bg-dark text-white fs-5 font-monospace text-center">
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>Image</th>
            <th>Category</th>
            <th>Delete</th>
            <th>Update</th>
        </thead>
        
        <tbody>
            <?php 
                include 'Config.php';
                $Record = mysqli_query($con, "SELECT * FROM `product`");

                   while($row = mysqli_fetch_array($Record))

                   echo"
                        <tr>
                                <td>$row[Id]</td>
                                <td>$row[PName]</td>
                                <td>$row[PPrice]</td>
                                <td><img src='$row[PImage]' height='90px' width='200px'></td>
                                <td>$row[PCategory]</td>
                                <td><a href='delete.php? ID=$row[Id]' class = 'btn btn-danger' >Delete</a></td>
                                <td><a href='update.php? ID=$row[Id]' class = 'btn btn-warning' >Update</a></td>
                        </tr>
                   ";


            ?>
        </tbody>
    </table>
                </div>
            </div>
        </div>

       

</body>
</html>