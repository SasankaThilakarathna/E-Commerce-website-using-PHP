<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dashbord</title>

	<!-- CSS Files -->
	<link href="../fa/svg-with-js/css/svg-with-js.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="admin_panel.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

</head>

	<?php
		session_start();
		if(!$_SESSION['admin']){
			header("location:form/login.php");
		}
	?>

<body>

	
<!-- Header section -->
	
	<header>
		<div class="container-flud">
			
			<div class="header-content">
				
			 <!-- sider place of header -->

				<div class="side-head">
					<span class="text-white">Admin Panel</span>&nbsp
				</div>

				<div class="header-nav">

					<ul>
						
						<li><a href="#"><i class="fas fa-shopping-basket"></i>&nbsp Order</a></li>
						<li><a href="#"><i class="fas fa-truck"></i>&nbsp Purchase</a></li>
						<li><a href="user.php"><i class="fas fa-users"></i>&nbsp Users</a></li>
						<li><a href="form/logout.php"><i class="fas fa-sign-out-alt"></i>&nbsp Logout</a></li>

					</ul>	
					

				</div>

			</div>
		</div>
	</header>

	<div class="wrapper">
		
		<!-- this is sidebar -->

		<section class="sidebar">
			
			<ul class="nav-bar">
				<li><a href="#"><i class="fa fa-tachometer" aria-hidden="true"></i>&nbsp Dashbord</a></li>
				<li><a href="brand.php"><i class="fa-solid fa-cart-flatbed" aria-hidden="true"></i>&nbsp Brand</a></li>
				<li><a href="category.php"><i class="fa-solid fa-dolly" aria-hidden="true"></i>&nbsp Category</a></li>
				<li><a href="product.php"><i class="fa fa-shopping-basket" aria-hidden="true"></i>&nbsp Products</a></li>
				<li><a href="#"><i class="fa fa-truck" aria-hidden="true"></i>&nbsp Orders</a></li>
				<li><a href="#"><i class="fas fa-truck-loading" aria-hidden="true"></i>&nbsp Delivery</a></li>
				<li><a href="#"><i class="fas fa-images" aria-hidden="true"></i>&nbsp Slider Images</a></li>
				<li><a href="#"><i class="fa fa-cogs" aria-hidden="true"></i>&nbsp Settings</a></li>
				<li><a href="#"><i class="fa fa-id-badge" aria-hidden="true"></i>&nbsp Profile</a></li>
				<li><a href="#"><i class="fa fa-sign-out" aria-hidden="true"></i>&nbsp Logout</a></li>
			</ul>

		</section>

        <!-- this is working pannel -->

		<section class="working-panel">
			
			<div class="container-fluid">
				
				<h1 class="display-4">Welcome to Dashbord</h1>
				
				<hr>

                <div class="control">
                    <a href="product/index.php">Add a Post </a>
                    <a href="user.php">Users</a>
                </div>
        </section>
						

            

        </body>
 </html>