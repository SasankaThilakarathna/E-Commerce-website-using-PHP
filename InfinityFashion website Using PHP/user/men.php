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

    <title>Document</title>
</head>
<body>

        <div class="header">
			<a href="#" class="logo"><img src="../img/infinitelogo3.png" alt="Infinite Fashion">

			<ul class="navmenu">
				<li><a class="after" href="index.html">Home</li>
				<li><a href="#">Shop</li>
				<li><a href="#">Men</li>
				<li><a href="#">Women</li>
				<li><a href="#">Kids</li>
			</ul>
            
<!-- Search Box -->
		      
		   	    <div class="search-area">
		        	<form action="" method="post">
		            	<input type="text" name="search_box" class="search-box" placeholder="Seach items..."><button class="search-button"><i class="fa fa-search" aria-hidden="true"></i></button>    
		       		 </form>

		        </div> 

<!-- User Menu -->
		
				<div class="user-menu">
					<ul>
						<li> <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-hoshpopup="true" aria-expanded="false"><i class="fa fa-user" aria-hidden="true"></i></a>

						
							<!-- Dropdown Box-->

								<div class="dropdown-menu">
									<a href="#"><button type="button" class="dropdown-item"><i class="fa fa-user" aria-hidden="true"></i> &nbsp Your Account </button></a>
									<a href="#"><button type="button" class="dropdown-item"><i class="fa fa-cube" aria-hidden="true"></i> &nbsp Your Orders</button></a>
									<a href="#"><button type="button" class="dropdown-item"><i class="fa fa-truck" aria-hidden="true"></i> &nbsp Shipping Address</button></a>
									<a href="#"><button type="button" class="dropdown-item"><i class="fa fa-credit-card" aria-hidden="true"></i> &nbsp Payment Options</button></a>

									<div class="dropdown-divider"></div>

										<p class="text-center text-white" style="height: 15px;line-height: 20px;"><small>if you are a new user</small></p>
										<a href="#"><button type="button" class="dropdown-item text-center">&nbsp Register </button></a>
										<a href="#"><button type="button" class="dropdown-item text-center">&nbsp Login </button></a>
								
									</div>



						</li>


						<li><a href="#"><i class='bx bx-heart'></i></a></li>
						<li><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
					</ul>
				</div>
			
		</div>


 <!-- Slider -->


			 <div id="carouselExampleCaptions" class="carousel slide">
			  <div class="carousel-indicators">
			    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
			    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
			    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
			  </div>


			  <div class="carousel-inner">
			    
			    <div class="carousel-item active">
			      <img src="../img/slider1.png" class="d-block w-100" alt="Summer Collection">
			      	<div class="carousel-caption d-none d-md-block">
				        <h5>Summer Collection</h5>
	 					<h1>New Summer <br> Collection</h1>
	 					<p>A classic never goes out of style</p>
	 					<a href="#" class="carousel-btn">Shop Now <i class='bx bx-right-arrow-alt'></i></a>
			      	</div>
			    </div>

			    <div class="carousel-item">
			      <img src="../img/slider2.png" class="d-block w-100" alt="...">
			      <div class="carousel-caption d-none d-md-block">
			        	<h5>Relax-T Collection</h5>
	 					<h1>New Comfortable<br> Relax-T</h1>
	 					<p>Relax in softness</p>
	 					<a href="#" class="carousel-btn">Shop Now <i class='bx bx-right-arrow-alt'></i></a>
			      </div>
			    </div>

			    <div class="carousel-item">
			      <img src="../img/slider3.png" class="d-block w-100" alt="...">
			      <div class="carousel-caption d-none d-md-block">
			        <h5>Work Wear Collection</h5>
	 					<h1>Work In<br> Style</h1>
	 					<p>Efficient, durable, and stylish workwear.</p>
	 					<a href="#" class="carousel-btn">Shop Now <i class='bx bx-right-arrow-alt'></i></a>
			      </div>
			    </div>

			  </div>
			  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    <span class="visually-hidden">Previous</span>
			  </button>
			  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
			    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			    <span class="visually-hidden">Next</span>
			  </button>
			</div>
			 	

<!-- New Arrivals -->

                <div class="center-text">
                    <h2><span>Mens Fashion</span></h2>
                </div>

                <div class="container">
                    <div class="col-md-12">
                        <div class="row">
                            <?php
                            include 'Config.php';
                            $Record = mysqli_query($con, "SELECT * FROM product");
                            while ($row = mysqli_fetch_array($Record)) {

                                $check_page = $row['PCategory'];

                                if ($check_page == 'men') {

                                    ?>
                                    <div class="col-md-6 col-lg-4 m-auto mb-3">
										<form action='Insertcart.php' method='POST'>
											<div class='card m-auto' style='width: 18rem;'>
												<img src='../admin/product/<?php echo $row["PImage"]; ?>' class='card-img-top'>
												<div class='card-body text-center'>
													<h5 class='card-title fs-4 fw-bold'><?php echo $row["PName"]; ?></h5>
													<p class='card-text text-warning fs-4 fw-bold'>Rs:<?php echo $row["PPrice"]; ?></p>
													<input type='hidden' name='PName' value='<?php echo $row["PName"]; ?>'>
													<input type='hidden' name='PPrice' value='<?php echo $row["PPrice"]; ?>'>
													<input type='number' name='PQuantity' value=' min='1' max='10'' placeholder='Quantity'> <br/><br/>
													<input type='submit' name='addCart' class='btn btn-warning text-white w-100' value='Add to Cart'>
												</div>
                                        	</div>
										</form>
                                    </div>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>

                    


<!-- footer -->

	<div class="contact">
		<div class="contact-info">
			<img src="../img/infinitelogo3.png">

			<p>infinitefashion@gmail.com</p>

			<div class="social-icons">
				<a href="#"><i class='bx bxl-facebook'></i></a>
				<a href="#"><i class='bx bxl-twitter'></i></a>
				<a href="#"><i class='bx bxl-instagram'></i></a>
				<a href="#"><i class='bx bxl-linkedin'></i></a>
				<a href="#"><i class='bx bxl-youtube' ></i></a>
			</div>
		</div>

		<div class="second-info">
			<h4>Support</h4>
			<p>Contact us</p>
			<p>About page</p>
			<p>Size Guid</p>
			<p>Privacy</p>
		</div>

		<div class="third-info">
			<h4>Shop</h4>
			<p>Men's Shopping</p>
			<p>Women's Shopping</p>
			<p>Kid's Shopping</p>
			<p>Discounts</p>
		</div>
	</div>

	<div class="end-text">
		<p>Copyright © @2023. All Rights Reserved.</p>
	</div>
    
    
</body>
</html>