<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS Files -->
    <link rel="stylesheet" type="text/css" href="ecom.css">
	<link href="../fa/svg-with-js/css/svg-with-js.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Registration</title>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-6 m-auto bg-white shadow border border-info">

                <p class="text-warning fs-3 fw-bold my-3">User Register</p>

                <form action="insert.php" method="POST">
                    <div class="mb-3">
                        <label for="">User Name</label>
                        <input type="text" name="name" placeholder="Enter User Name" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">User Email</label>
                        <input type="email" name="email" placeholder="Enter User Email" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">User Number</label>
                        <input type="number" name="number" placeholder="Enter Number " class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">User Password</label>
                        <input type="password" name="password" placeholder="Enter Password" class="form-control">
                    </div>
                    <div class="mb-3">
                        <button name="submit" class="w-100 bg-warning fs-4 text-white">REGISTER</button>
                    </div>
                    <div class="mb-3">
                        <button class="w-100 bg-dark fs-4 text-white"><a href="login.php" class="text-decoration-none">SIGN IN</a></button>
                    </div>
                </form>

            </div>
        </div>
    </div>


    
</body>
</html>