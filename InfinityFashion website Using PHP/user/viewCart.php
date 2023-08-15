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

    <title>View Cart</title>
</head>
<body>
       
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
						<li><a href="viewCart.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
					</ul>
				</div>
			
		

        <!-- Cart --> 

        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center bg-light mb-5">
                    <h1 class="text-warning">Cart</h1>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row justify-content-around">
                <div class="col-sm-8 col-md-6 col-lg-9">
                    <table class="table table-bordered text-center">
                        <thead>
                            <th>Serial No.</th>
                            <th>Product Name</th>
                            <th>Product Price</th>
                            <th>Product Quantity</th>
                            <th>Total Price</th>
                            <th>Delete</th>
                        </thead>
                        <tbody>

                        <?php
                            session_start();
                            $ptotal =0;
                            $total =0;
                            if(isset($_SESSION['cart'])){
                                foreach($_SESSION['cart'] as $key => $value){

                                    $ptotal = $value['productPrice'] * $value['productQuantity'];
                                    $total += $value['productPrice'] * $value['productQuantity'];

                                echo"
                                    <form action = 'Insertcart.php' method='POST'>
                                        <tr>
                                            <td>$key</td>
                                            <td>$value[productName]</td>
                                            <td>$value[productPrice]</td>
                                            <td>$value[productQuantity]</td>
                                            <td>$ptotal</td>
                                            <td><button name='remove' class='btn-danger'>Delete</button></td>
                                        </tr>
                                    </form>
                                    ";
                                }
                            }
                        ?>

                        </tbody>
                    </table>
                </div>
                    
                <div class="col-lg-3 text-center">
                    <h3>Total</h3>
                    <h1 class="bg-warning text-white"><?php echo number_format($total,2) ?></h1>
                </div>

            </div>
        </div>

    </body>
</html>