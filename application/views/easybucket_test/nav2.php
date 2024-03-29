<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Easybucket - Nav2</title>

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="<?php echo base_url('css/bootstrap.min.css') ?>"/>

		<!-- Slick -->
		<link type="text/css" rel="stylesheet" href="<?php echo base_url('css/slick.css') ?>"/>
		<link type="text/css" rel="stylesheet" href="<?php echo base_url('css/slick-theme.css') ?>"/>

		<!-- nouislider -->
		<link type="text/css" rel="stylesheet" href="<?php echo base_url('css/nouislider.min.css') ?>"/>

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="<?php echo base_url('css/font-awesome.min.css') ?>">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="<?php echo base_url('css/style.css') ?>"/>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

    </head>
	<body>
		<!-- HEADER -->
		<header>

			<!-- MAIN HEADER -->
			<div id="header">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<!-- LOGO -->
						<div class="col-md-3">
							<div class="header-logo">
							<a href="<?php echo base_url() ?>" class="logo">
                            	<img src="<?php echo base_url('/assets/easybucket_logo2.png') ?>" alt="">
                        	</a>
							</div>
						</div>
						<!-- /LOGO -->

						<!-- SEARCH BAR -->
						<div class="col-md-6">
							<div class="header-search">
								<form>
									<select class="input-select" width="100px">
										<option value="0">All Categories</option>
										<?php   
											$queryCat = $this->db->query('SELECT * FROM categories');
										?>
										<?php foreach ($queryCat->result() as $row) { ?>
											<?php if($row->category_id != 12){ ?>
											<option value="<?php echo $row->category_id; ?>"><?php echo $row->category;?></option>
											<?php } ?>
										<?php } ?>
									</select>
									<input class="input" placeholder="Search here" style="width:200px">
									<button class="search-btn">Search</button>
								</form>
							</div>
						</div>
						<!-- /SEARCH BAR -->

						<!-- ACCOUNT -->
						<div class="col-md-3 clearfix">
							<div class="header-ctn">

								<!-- Cart -->
								<div class="dropdown">
									<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
										<i class="fa fa-shopping-cart"></i>
										<span>Cart</span>
										<div class="qty">3</div>
									</a>
									<div class="cart-dropdown">
										<div class="cart-list">
											<div class="product-widget">
												<div class="product-img">
													<img src="./img/product01.png" alt="">
												</div>
												<div class="product-body">
													<h3 class="product-name"><a href="#">product name goes here</a></h3>
													<h4 class="product-price"><span class="qty">1x</span>$980.00</h4>
												</div>
												<button class="delete"><i class="fa fa-close"></i></button>
											</div>

											<div class="product-widget">
												<div class="product-img">
													<img src="./img/product02.png" alt="">
												</div>
												<div class="product-body">
													<h3 class="product-name"><a href="#">product name goes here</a></h3>
													<h4 class="product-price"><span class="qty">3x</span>$980.00</h4>
												</div>
												<button class="delete"><i class="fa fa-close"></i></button>
											</div>
										</div>
										<div class="cart-summary">
											<small>3 Item(s) selected</small>
											<h5>SUBTOTAL: $2940.00</h5>
										</div>
										<div class="cart-btns">
											<a href="#">View Cart</a>
											<a href="<?php echo base_url('index.php/welcome/checkout') ?>">Checkout  <i class="fa fa-arrow-circle-right"></i></a>
										</div>
									</div>
								</div>
								<!-- /Cart -->

								<!-- Account -->
								<div class="dropdown">
									<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
										<i class="fa fa-user-o"></i>
										<span>Account</span>
										<!-- <div class="qty">3</div> -->
									</a>
									<div class="cart-dropdown">
										<div class="cart-summary">
											<div class="product-widget">
												<div class="product-img">
													<img src="./img/1.png" alt="">
												</div>
												<div class="product-body">
                                                    
                                                <div class="billing-details">
                                                        <div class="section-title">
                                                            <h3 class="title">Login</h3>
                                                        </div>
                                                        <div class="form-group">
                                                            <input class="input" type="text" name="username" placeholder="username">
                                                        </div>
                                                        <div class="form-group">
                                                            <input class="input" type="password" name="password" placeholder="password">
                                                        </div>
                                                         
                                                    </div>
                                                    
                                                </div>
												<!-- <button class="delete"><i class="fa fa-close"></i></button> -->
											</div>
											<!-- <small>3 Item(s) selected</small>
											<h5>SUBTOTAL: $2940.00</h5> -->
										</div>
										<div class="cart-btns">
											<a href="#">Sign-up</a>
											<a href="#">Log-in   <i class="fa fa-arrow-circle-left"></i></a>
										</div>
									</div>
								</div>
								<!-- /Account -->

								<!-- Menu Toogle -->
								<div class="menu-toggle">
									<a href="#">
										<i class="fa fa-bars"></i>
										<span>Menu</span>
									</a>
								</div>
								<!-- /Menu Toogle -->
							</div>
						</div>
						<!-- /ACCOUNT -->
					</div>
					<!-- row -->
				</div>
				<!-- container -->
			</div>
			<!-- /MAIN HEADER -->
		</header>
		<!-- /HEADER -->

		<!-- NAVIGATION -->
		<nav id="navigation">
			<!-- container -->
			<div class="container">
				<!-- responsive-nav -->
				<div id="responsive-nav">
					<!-- NAV -->
					<ul class="main-nav nav navbar-nav">
						<li class="active"><a href="<?php echo base_url() ?>">Home</a></li>
						<!-- <li><a href="#">Hot Deals</a></li> -->
						<li><a href="<?php echo base_url('index.php/welcome/store') ?>">Categories</a></li>
						<li><a href="<?php echo base_url('index.php/welcome/transaction') ?>">Transaction</a></li>
						<!-- <li><a href="#">Smartphones</a></li> -->
						<!-- <li><a href="#">Cameras</a></li> -->
						<!-- <li><a href="#">Accessories</a></li> -->
					</ul>
					<!-- /NAV -->
				</div>
				<!-- /responsive-nav -->
			</div>
			<!-- /container -->
		</nav>
		<!-- /NAVIGATION -->

		<!-- jQuery Plugins -->
		<script src="<?php echo base_url('js/jquery.min.js') ?>"></script>
		<script src="<?php echo base_url('js/bootstrap.min.js') ?>"></script>
		<script src="<?php echo base_url('js/slick.min.js') ?>"></script>
		<script src="<?php echo base_url('js/nouislider.min.js') ?>"></script>
		<script src="<?php echo base_url('js/jquery.zoom.min.js') ?>"></script>
		<script src="<?php echo base_url('js/main.js') ?>"></script>

	</body>
</html>
