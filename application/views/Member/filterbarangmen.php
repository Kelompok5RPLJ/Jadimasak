<!DOCTYPE html>
<html>
<head>
<title>BOKUY</title>
<link href="<?php echo base_url();?>assets/css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1"><!--supaya responsive, fleksibel, dengan skala 1:1-->
<meta charset="utf-8" /><!-- mendeskripsikan bit2 html -->
<meta name="keywords" content="bokuy, borongkuy, Eshop, Eshopbokuy, Eshopborongkuy, onlineshop, jualbeli" /><!-- define keywords for search engines-->
<!--webfont-->
<!-- for bootstrap working -->
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap-3.1.1.min.js"></script>
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
	           <li><a href="<?php echo site_url('C_Member/index') ?>">Home</a></li>
		       <li><a href="<?php echo site_url('C_Member/filter_kategoriwomen') ?>">Women</a></li>
		       <li><a href="<?php echo site_url('C_Member/filter_kategorimen') ?>">Men</a></li>
	        </ul>
	        </ul>
	    </div>
	    <!--/.navbar-collapse-->
	</nav>
	<!--/.navbar-->
</div>
</div>
		</div>
<section>
		<div class="container">
			<div class="row">
            <div class="panel-body">
            <h5>Result Category -> Men </h5>
            <table class="table datatable">
            <thead>
              <tr>
              <th>Nama Barang</th>
              <th>Harga</th>
              <th>Deskripsi</th>
              <th>Gambar</th>
              </tr>
            </thead>
            <tbody>
            <?php foreach($barang as $d){ ?>
              <tr>
              <td><?php echo $d['namabarang'];?></td>
              <td><?php echo $d['harga'];?></td>
              <td><?php echo $d['deskripsi'];?></td>
              <td><img src="<?php echo base_url();?><?php echo $d['gambar'];?>" style="width: 200px" /></td>
            </tr>
            <?php }?>
            </tbody>
             
            </table>

            </div>
		</div>
	</section>
		<div class="container">
			<div class="main-content">
				<div class="online-strip">
					<div class="col-md-6 follow-us">
						<h3>Follow us : <a class="twitter" href="#"></a><a class="facebook" href="#"></a></h3>
					</div>
					<div class="col-md-6 online-order">
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