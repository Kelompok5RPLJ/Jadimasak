<!DOCTYPE html>
<html>
<head>
<title>Borong Kuy Shop</title>
<link href="<?php echo base_url();?>assets/css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<!-- for bootstrap working -->
	<script type="<?php echo base_url();?>assets/text/javascript" src="<?php echo base_url();?>assets/js/bootstrap-3.1.1.min.js"></script>
<!-- //for bootstrap working -->
<!-- cart -->
	<script src="<?php echo base_url();?>assets/js/simpleCart.min.js"> </script>
<!-- cart -->
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/flexslider.css" type="text/css" media="screen" />
</head>
<body>
	<!-- header-section-starts -->
	<div class="header">
		<div class="header-top-strip">
			<div class="container">
				<div class="header-top-left">
					<ul>
						<li><a href="<?php echo site_url('C_Login/logout') ?>"><span class="glyphicon glyphicon-user"> </span>Logout</a>
						<li><a href="<?php echo site_url() ?>"><span class="glyphicon glyphicon-user"> </span>Add Item</a>
						</		
					</ul>

				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- header-section-ends -->
				<div class="banner-top">
		<div class="container">
				<nav class="navbar navbar-default" role="navigation">
	    <div class="navbar-header">
	        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
	        </button>
				<div class="logo">
					<h1><a href="index.html"><span>BO</span> -KUY </a></h1>
				</div>
	    </div>
 <!--/.navbar-header-->
	
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	        <ul class="nav navbar-nav">
			<li><a href="#">Home</a></li>
		        <li class="dropdown">
		            <a href="#" class="dropdown-toggle" data-toggle="dropdown"> WOMEN <b class="caret"></b></a>
		            <ul class="dropdown-menu multi-column columns-3">
			            <div class="row">
				            <div class="col-sm-4">
					            <ul class="multi-column-dropdown">
									<h6>CLOTHING</h6>
						            <li><a href="topg.html"> TOP </a></li>
						            <li><a href="bottomg.html"> BOTTOM </a></li>
					            </ul>
				            </div>
							<div class="clearfix"></div>
			            </div>
		            </ul>
		        </li>
		        <li class="dropdown">
		            <a href="#" class="dropdown-toggle" data-toggle="dropdown"> men <b class="caret"></b></a>
		            <ul class="dropdown-menu multi-column columns-3">
			            <div class="row">
				            <div class="col-sm-4">
					            <ul class="multi-column-dropdown">
									<h6>CLOTHING</h6>
						            <li><a href="topb.html"> TOP </a></li>
						            <li><a href="bottomb.html"> BOTTOM </a></li>
					            </ul>
							<div class="clearfix"></div>
			            </div>
		            </ul>
		        </li>
					<li><a href="contact.html">CONTACT</a></li>
	        </ul>
	    </div>
	    <!--/.navbar-collapse-->
	</nav>
	<section>
		<div class="container">
			<div class="row">
            <div class="panel-body">
            <h5>Sudah Terverifikasi</h5>
            <table class="table datatable">
            <thead>
              <tr>
              <th>Nama Barang</th>
              <th>Harga</th>
              <th>Isi</th>
               <th>Gambar</th>
              <th>Action</th>
              </tr>
            </thead>
            <tbody>
             <?php foreach($barang as $d){ ?>
              <tr>
              <td><?php echo $d['namabarang'];?></td>
              <td><?php echo $d['harga'];?></td>
              <td><?php echo $d['isi'];?></td>
              <td><img src="<?php echo base_url();?><?php echo $d['foto'];?>" style=" width: 200px"/></td>
              <td><p>Are you sure you Delete Barang Member ?</p>
                    <div class="mb-footer">
                        <div><a href="<?php echo site_url('C_Admin/action_delete/'.$d['id_barang']);?>" class="btn btn-default">Yes</a> 
                        </div>
                        <div class="pull-left"><a href="<?php echo site_url('C_Admin/index');?>" class="btn btn-default">No</a></div>
                   </div>
              </td>
            </tr>
              <?php }?>
            </tbody>
            </table>
            </div>
		</div>
        </div>
	</section>

			<div class="container">
			<div class="main-content">
				<div class="online-strip">
					<div class="col-md-4 follow-us">
						<h3>Follow us : <a class="twitter" href="#"></a><a class="facebook" href="#"></a></h3>
					</div>
					<div class="col-md-4 shipping-grid">
						<div class="shipping">
							<img src="images/shipping.png" alt="" />
						</div>
						<div class="shipping-text">
							<h3>Free Shipping</h3>
							<p>on orders over Rp 300.000 </p>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-4 online-order">
						<p>Order online</p>
						<h3>Telp: +6222-7654-0301 </h3>
					</div>
					<div class="clearfix"></div>
				</div>
		</div>
				
				<div class="clearfix"></div>
				</div>
		  </div>
		  <div class="cards text-center">
				<img src="<?php echo base_url();?>assets/images/cards.png" alt="" />
		  </div>
		  <div class="copyright text-center">
				<p>© 2017 BorongKuy</p>
		  </div>
		</div>
		</div>
</body>
</html>