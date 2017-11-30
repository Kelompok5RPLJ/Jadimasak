<!DOCTYPE html>
<html>
<head>
<title>JadiMasak</title>
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
						<li><a href="<?php echo site_url('C_Login/masuk') ?>"><span class="glyphicon glyphicon-user"> </span>Login</a>
						<li><a href="<?php echo site_url('main_user/daftar') ?>"><span class="glyphicon glyphicon-lock"> </span>Create an Account</a></li>		
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- header-section-ends -->
	<div class="inner-banner">
		<div class="container">
			<div class="banner-top inner-head">
				<nav class="navbar navbar-default" role="navigation">
	    <div class="navbar-header">
	        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
	        </button>
				<div class="logo">
					<h1><a href="#">JadiMasak </a></h1>
				</div>
	    </div>
  <!--/.navbar-header-->
		     <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	        <ul class="nav navbar-nav">
	           <li><a href="<?php echo site_url('main_user/index') ?>">Home</a></li>
	           <li class="dropdown">
		        	<a href="#" class="dropdown-toggle" data-toggle="dropdown">Kategori<b class="caret"></b></a>
		            <ul class="dropdown-menu multi-column columns-1">
			            <div class="row">
				            <div class="col-sm-6">
					            <ul class="multi-column-dropdown">
									<h6>NEW IN</h6>
						            <li><a href="<?php echo site_url('main_user/filter_kategoriberkuah') ?>">Berkuah</a></li>
						            <li><a href="products.html">Gorengan</a></li>
						            <li><a href="products.html">Aneka Nasi</a></li>
						            <li><a href="products.html">Oseng-Oseng</a></li>
					            </ul>
				            </div>
							<div class="clearfix"></div>
			            </div>
		            </ul>
		        </li>
					<li><a href="typography.html">Keranjang</a></li>
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
            <h5>Resep Kategori -> Berkuah </h5>
         <!-- <!--    <!-- content-section-starts HAPUS INI
	<div class="container">
	   <div class="products-page">
			<div class="products">
				<div class="product-listy">
					<h2>our Products</h2>
					<ul class="product-list">
						<li><a href="">New Products</a></li>
						<li><a href="">Old Products</a></li>
						<li><a href="">T-shirts</a></li>
						<li><a href="">pants</a></li>
						<li><a href="">Dress</a></li>
						<li><a href="">Shorts</a></li>
						<li><a href="#">Shirts</a></li>
						<li><a href="register.html">Register</a></li>
					</ul>
				</div>
				<div class="latest-bis">
					<img src="images/l4.jpg" class="img-responsive" alt="" />
					<div class="offer">
						<p>40%</p>
						<small>Top Offer</small>
					</div>
				</div> 	
				<div class="tags">
				    	<h4 class="tag_head">Tags Widget</h4>
				         <ul class="tags_links">
							<li><a href="#">Kitesurf</a></li>
							<li><a href="#">Super</a></li>
							<li><a href="#">Duper</a></li>
							<li><a href="#">Theme</a></li>
							<li><a href="#">Men</a></li>
							<li><a href="#">Women</a></li>
							<li><a href="#">Equipment</a></li>
							<li><a href="#">Best</a></li>
							<li><a href="#">Accessories</a></li>
							<li><a href="#">Men</a></li>
							<li><a href="#">Apparel</a></li>
							<li><a href="#">Super</a></li>
							<li><a href="#">Duper</a></li>
							<li><a href="#">Theme</a></li>
							<li><a href="#">Responsive</a></li>
					        <li><a href="#">Women</a></li>
							<li><a href="#">Equipment</a></li>
						</ul>
					
				     </div>

			</div>
			<div class="new-product">
				<div class="new-product-top">
					<ul class="product-top-list">
						<li><a href="index.html">Home</a>&nbsp;<span>&gt;</span></li>
						<li><span class="act">Best Sales</span>&nbsp;</li>
					</ul>
					<p class="back"><a href="index.html">Back to Previous</a></p>
					<div class="clearfix"></div>
				</div>
				<div class="mens-toolbar">
                 <div class="sort">
               	   <div class="sort-by">
			            <label>Sort By</label>
			            <select>
			                            <option value="">
			                    Position                </option>
			                            <option value="">
			                    Name                </option>
			                            <option value="">
			                    Price                </option>
			            </select>
			            <a href=""><img src="images/arrow2.gif" alt="" class="v-middle"></a>
	                   </div>
	    		     </div>
		    	        <ul class="women_pagenation">
					     <li>Page:</li>
					     <li class="active"><a href="#">1</a></li>
					     <li><a href="#">2</a></li>
				  	    </ul>
	               		 <div class="clearfix"></div>		
			        </div>
			        
			        <div id="cbp-vm" class="cbp-vm-switcher cbp-vm-view-grid">
					<div class="cbp-vm-options">
						<a href="#" class="cbp-vm-icon cbp-vm-grid cbp-vm-selected" data-view="cbp-vm-view-grid" title="grid">Grid View</a>
						<a href="#" class="cbp-vm-icon cbp-vm-list" data-view="cbp-vm-view-list" title="list">List View</a>
					</div>
					<div class="pages">   
        	 <div class="limiter visible-desktop">
               <label>Show</label>
                  <select>
                            <option value="" selected="selected">
                    9                </option>
                            <option value="">
                    15                </option>
                            <option value="">
                    30                </option>
                  </select> per page        
               </div>
       	   </div>
           <div class="clearfix"></div>
					<ul>
					  <li>
							<a class="cbp-vm-image" href="single.html">
								<div class="simpleCart_shelfItem">
							 <div class="view view-first">
					   		  <div class="inner_content clearfix">
								<div class="product_image">
									<img src="<?php echo base_url();?>assets/images/l1.jpg" class="img-responsive" alt=""/>
									<div class="mask">
			                       		<div class="info">Quick View</div>
					                  </div>
									<div class="product_container">
									   <div class="cart-left">
										 <p class="title">perspiciatis</p>
									   </div>
									   <div class="pricey"><span class="item_price">$259.00</span></div>
									   <div class="clearfix"></div>
								     </div>		
								  </div>
			                     </div>
		                      </div>
		                    </a>
							<div class="cbp-vm-details">
								Silver beet shallot wakame tomatillo salsify mung bean beetroot groundnut.
							</div>
							<a class="cbp-vm-icon cbp-vm-add item_add" href="#">Add to cart</a>
							</div>
						</li>
						<li>
							<a class="cbp-vm-image" href="single.html">
								<div class="simpleCart_shelfItem">
							  <div class="view view-first">
					   		  <div class="inner_content clearfix">
								<div class="product_image">
									<img src="<?php echo base_url();?>assets/images/l1.jpg" class="img-responsive" alt=""/>
									<div class="mask">
			                       		<div class="info">Quick View</div>
					                  </div>
									<div class="product_container">
									   <div class="cart-left">
										 <p class="title">Great Explorer</p>
									   </div>
									   <div class="pricey"><span class="item_price">$189.00</span></div>
									   <div class="clearfix"></div>
								     </div>		
								  </div>
			                     </div>
		                      </div>
							 </a>
							<div class="cbp-vm-details">
								Wattle seed bunya nuts spring onion okra garlic bitterleaf zucchini.
							</div>
							<a class="cbp-vm-icon cbp-vm-add item_add" href="#">Add to cart</a>
							</div>
						</li>
						<li>
							<a class="cbp-vm-image" href="single.html">
								<div class="simpleCart_shelfItem">
								<div class="view view-first">
					   		  <div class="inner_content clearfix">
								<div class="product_image">
									<img src="<?php echo base_url();?>assets/images/l1.jpg" class="img-responsive" alt=""/>
									<div class="mask">
			                       		<div class="info">Quick View</div>
					                  </div>
									<div class="product_container">
									   <div class="cart-left">
										 <p class="title">Similique Sunt</p>
									   </div>
									   <div class="pricey"><span class="item_price">$699.00</span></div>
									   <div class="clearfix"></div>
								     </div>		
								  </div>
			                     </div>
		                      </div>
							</a>
							<div class="cbp-vm-details">
								Kohlrabi bok choy broccoli rabe welsh onion spring onion tatsoi ricebean kombu chard.
							</div>
							<a class="cbp-vm-icon cbp-vm-add item_add" href="#">Add to cart</a>
							</div>
						</li>
						<li>
							<a class="cbp-vm-image" href="single.html">
								<div class="simpleCart_shelfItem">
								<div class="view view-first">
					   		  <div class="inner_content clearfix">
								<div class="product_image">
									<img src="<?php echo base_url();?>assets/images/l1.jpg" class="img-responsive" alt=""/>
									<div class="mask">
			                       		<div class="info">Quick View</div>
					                  </div>
									<div class="product_container">
									   <div class="cart-left">
										 <p class="title">Shrinking</p>
									   </div>
									   <div class="pricey"><span class="item_price">$599.00</span></div>
									   <div class="clearfix"></div>
								     </div>		
								  </div>
			                     </div>
		                      </div>
							</a>
							<div class="cbp-vm-details">
								Kohlrabi bok choy broccoli rabe welsh onion spring onion tatsoi ricebean kombu chard.
							</div>
							<a class="cbp-vm-icon cbp-vm-add item_add" href="#">Add to cart</a>
							</div>
						</li>
						<li>
							<a class="cbp-vm-image" href="single.html">
								<div class="simpleCart_shelfItem">
								<div class="view view-first">
					   		  <div class="inner_content clearfix">
								<div class="product_image">
									<img src="<?php echo base_url();?>assets/images/l1.jpg" class="img-responsive" alt=""/>
									<div class="mask">
			                       		<div class="info">Quick View</div>
					                  </div>
									<div class="product_container">
									   <div class="cart-left">
										 <p class="title">Perfectly Simple</p>
									   </div>
									   <div class="pricey"><span class="item_price">$459.00</span></div>
									   <div class="clearfix"></div>
								     </div>		
								  </div>
			                     </div>
		                      </div>
							</a>
							<div class="cbp-vm-details">
								Kohlrabi bok choy broccoli rabe welsh onion spring onion tatsoi ricebean kombu chard.
							</div>
							<a class="cbp-vm-icon cbp-vm-add item_add" href="#">Add to cart</a>
							</div>
						</li>  HAPUS INI-->
            <table class="table datatable">
            <thead>
              <tr>
              <th>Nama Resep</th>
              <th>Harga</th>
              <th>Stock</th>
              <th>Deskripsi</th>
              <th>Gambar</th>
              </tr>
            </thead>
            <tbody>
            <?php foreach($resep as $r){ ?>
              <tr>
              <td><?php echo $r['namaresep'];?></td>
              <td><?php echo $r['harga'];?></td>
              <td><?php echo $r['stock'];?></td>
              <td><?php echo $r['deskripsi'];?></td>
              <td><img src="<?php echo base_url();?><?php echo $r['gambar'];?>" style="width: 200px" /></td>
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