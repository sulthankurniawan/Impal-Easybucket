<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Easybucket - Admin Add</title>

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

		<!-- BREADCRUMB -->
		<div id="breadcrumb" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<h3 class="breadcrumb-header">Add Item</h3>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /BREADCRUMB -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
				<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>
					<div class="col-md-7">
						<!-- Billing Details -->
						<form action="<?php echo site_url('admin/products/edit') ?>" method="post" enctype="multipart/form-data">
						<div class="billing-details">
							<input type="hidden" name="id" value="<?php echo $product->product_id?>" />
							<div class="section-title">
								<h3 class="title">Item Profile</h3>
							</div>

							<div class="form-group">
								<h4>Image: </h4>
								<img src="/electro/img/1.png" alt="">
								<input class="input" type="file" name="image" placeholder="image">
							</div>
							<br>
							<div class="form-group">
								<label for="nama">Nama</label>
								<input value="<?php echo $product->nama ?>" class="input form-control <?php echo form_error('nama') ? 'is-invalid':'' ?>" type="text" name="nama" placeholder="Name">
							</div>
							<div class="form-group">
								<div class="input-group-prepend">
									<label class="input-group-text" for="categories">Categories</label>
								</div>
								<select class="custom-select" id="inputGroupSelect01" name="category_id">
									<option value='<?php echo $product->category_id ?>' selected>Choose...</option>
									<?php $queryCat = $this->db->query('SELECT * FROM categories');?>
									<?php foreach ($queryCat->result() as $row) { ?>
										<?php if($row->category_id != 12){ ?>
										<option value="<?php echo $row->category_id; ?>"><?php echo $row->category; ?></option>
										<?php } ?>
									<?php } ?>
								</select>	
							</div>
							<div class="form-group">
								<label for="harga">Harga</label>
								<input value="<?php echo $product->harga; ?>" class="input form-control <?php echo form_error('harga') ? 'is-invalid':'' ?>" type="number" name="harga" placeholder="Price">
							</div>
							<div class="form-group">
								<label for="description">Description</label>
								<input value="<?php echo $product->description; ?>" class="input" type="text" name="description" placeholder="Description">
							</div>
							
							<input type="submit" class="primary-btn order-submit" value="UPDATE" name="btn">
							
							
						</div>
						</form>
						<!-- /Billing Details -->

					</div>

				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->
		<script>
			var element = document.getElementById("listUpdate");
			element.classList.add("active");
		</script>
		<!-- jQuery Plugins -->
		<script src="<?php echo base_url('js/jquery.min.js') ?>"></script>
		<script src="<?php echo base_url('js/bootstrap.min.js') ?>"></script>
		<script src="<?php echo base_url('js/slick.min.js') ?>"></script>
		<script src="<?php echo base_url('js/nouislider.min.js') ?>"></script>
		<script src="<?php echo base_url('js/jquery.zoom.min.js') ?>"></script>
		<script src="<?php echo base_url('js/main.js') ?>"></script>

	</body>
</html>
