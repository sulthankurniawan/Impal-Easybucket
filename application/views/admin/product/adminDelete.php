<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Easybucket - </title>

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
                    <h3 class="breadcrumb-header">List Item</h3>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /BREADCRUMB -->
    <?php $queryN = $this->db->query("SELECT * FROM product"); ?>
    <?php $rowNum = 0;?>
    <!-- Products tab & slick -->
    <div class="col-md-12">
        <div class="row">
            <div class="products-tabs">
                <?php for($i=1;$i<=intdiv($queryN->num_rows(),4)+1;$i++){ ?>
                <!-- tab -->
                <div id="tab1" class="tab-pane active">
                    <div class="products-slick" data-nav="#slick-nav-1" style="margin-bottom:5rem;">
                        <?php if($i==intdiv($queryN->num_rows(),4)+1){ ?>
                        <?php for($j=1;$j<=$queryN->num_rows()%4;$j++){ ?>
                        <?php $row = $queryN->row($rowNum); ?>
                        <?php $rowNum = $rowNum + 1; ?>
                        <!-- product -->
                        <div class="product">
                            <div class="product-img">
                                <img src="<?php echo base_url('assets/product02.png') ?>" alt="">
                            </div>
                            <div class="product-body">
                                <p class="product-category"><?php echo $row->category_id;?></p>
                                <h3 class="product-name"><a href="#"><?php echo $row->nama;?></a></h3>
                                <h4 class="product-price"><?php echo $row->harga;?></h4>
                                <h3 class="product-name"><a href="#"><?php echo $row->description;?></a></h3>
                            </div>
                            <div class="add-to-cart">
                                <button class="add-to-cart-btn"><i class=""></i>Delete</button>
                            </div>
                        </div>
                        <!-- /product -->
                        <?php } ?>
                        <?php } else {?>
                        <?php for($j=1;$j<=4;$j++){ ?>
                            <?php $row = $queryN->row($rowNum); ?>
                            <?php $rowNum = $rowNum + 1; ?>
                        <!-- product -->
                        <div class="product">
                            <div class="product-img">
                                <img src="<?php echo base_url('assets/product01.png') ?>" alt="">
                            </div>
                            <div class="product-body">
                                <p class="product-category"><?php echo $row->category_id;?></p>
                                <h3 class="product-name"><a href="#"><?php echo $row->nama;?></a></h3>
                                <h4 class="product-price"><?php echo $row->harga;?></h4>
                                <h3 class="product-name"><a href="#"><?php echo $row->description;?></a></h3>
                            </div>
                            <div class="add-to-cart">
                                <button class="add-to-cart-btn"><i class=""></i>Delete</button>
                            </div>
                        </div>
                        <!-- /product -->
                        <?php } ?>
                        <?php } ?>
                    </div>
                    <div id="slick-nav-1" class="products-slick-nav"></div>
                </div>
                <!-- /tab -->
                <?php } ?>
                
    <script>
			var element = document.getElementById("listDelete");
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
