<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS Files -->
	<link href="../fa/svg-with-js/css/svg-with-js.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="admin_panel.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>User</title>
</head>
<body>

    <?php
        

         $con = mysqli_connect('localhost','root','','ecommerce');
         $Record = mysqli_query($con, "SELECT * FROM `user` ");
         $row_count = mysqli_num_rows($Record);
    ?>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-10">
                
                    <table class="table table-secondary table-bordered">
                        <thead class="text-center">
                            <th>S.N</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Number</th>
                            <th>Delete</th>

                        </thead>
                        <tbody class="text-center">
                        <?php
                            while($row = mysqli_fetch_array($Record)){

                            echo "
                                <tr>
                                    <td>$row[Id]</td>
                                    <td>$row[UserName]</td>
                                    <td>$row[Email]</td>
                                    <td>$row[Number]</td>
                                    <td><a href='delete.php? ID=$row[Id]' class= 'btn btn-outline-danger'>Delete</a></td>
                                </tr>
                                ";
                            }
                        ?>
                        </tbody>
                    </table>
            </div>
             <div class="col-md-2 pr-5 text-center">
                <h3>Total</h3>
                <h1 class="bg-warning text-white"><?php echo $row_count; ?></h1>
            </div>
        </div>
    </div>


    
    
</body>
</html>