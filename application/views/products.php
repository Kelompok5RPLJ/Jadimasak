<!DOCTYPE html>
<html>
<head>
<title>JadiMasak</title>
<link href="<?php echo base_url();?>assets/css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/component.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1"><!--supaya responsive, fleksibel, dengan skala 1:1-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><!-- mendeskripsikan bit2 html -->
<meta name="keywords" content="bokuy, borongkuy, Eshop, Eshopbokuy, Eshopborongkuy, onlineshop, jualbeli" />
<!-- Mendefinisikan keywords untuk mesin situs pencari -->
<script type="application/x-javascript"> 
addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Membuat script -->
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
				<div class="header-right">
						<div class="cart box_1">
							<a href="checkout.html">
								<h3> <span>Rp.0  </span> (<span id="simpleCart_quantity" class="simpleCart_quantity"> 0 </span>)<img src="images/bag.png" alt=""></h3>
							</a>	
							<p><a href="javascript:;" class="simpleCart_empty">Empty cart</a></p>
							<div class="clearfix"> </div>
						</div>
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
					<a href="index.html"><img src="<?php echo base_url();?>assets/images/jm1.png" class="img-responsive" alt=""/></a>
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
					<li><a href="#">Keranjang</a></li>
	        </ul>
	    </div>
	    <!--/.navbar-collapse-->
	</nav>
	<!--/.navbar-->
</div>
	</div>
		</div>
		
		<!-- content-section-starts -->
	<div class="container">
	   


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
			            <a href=""><img src="<?php echo base_url();?>assets/images/arrow2.gif" alt="" class="v-middle"></a>
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
									<img src="<?php echo base_url();?>assets/images/1.jpg" class="img-responsive" alt=""/>
									<div class="mask">
			                       		<div class="info">Quick View</div>
					                  </div>
									<div class="product_container">
									   <div class="cart-left">
										 <p class="title">Paket Salad</p>
									   </div>
									   <div class="pricey"><span class="item_price">Rp 30.000</span></div>
									   <div class="clearfix"></div>
								     </div>		
								  </div>
			                     </div>
		                      </div>
		                    </a>
							<div class="cbp-vm-details">
								Bahan makanan yang terdiri dari beberapa jenis sayuran segar
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
									<img src="<?php echo base_url();?>assets/images/2.jpg" class="img-responsive" alt=""/>
									<div class="mask">
			                       		<div class="info">Quick View</div>
					                  </div>
									<div class="product_container">
									   <div class="cart-left">
										 <p class="title">Paket Chicken Teriyaki</p>
									   </div>
									   <div class="pricey"><span class="item_price">Rp 50.000</span></div>
									   <div class="clearfix"></div>
								     </div>		
								  </div>
			                     </div>
		                      </div>
							 </a>
							<div class="cbp-vm-details">
								Bahan makanan untuk membuat Chicken teriyaki lengkap.
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
									<img src="<?php echo base_url();?>assets/images/3.jpg" class="img-responsive" alt=""/>
									<div class="mask">
			                       		<div class="info">Quick View</div>
					                  </div>
									<div class="product_container">
									   <div class="cart-left">
										 <p class="title">Paket Sayur Gado-gado</p>
									   </div>
									   <div class="pricey"><span class="item_price">Rp 20.000</span></div>
									   <div class="clearfix"></div>
								     </div>		
								  </div>
			                     </div>
		                      </div>
							</a>
							<div class="cbp-vm-details">
								Bahan masakan segar untuk membuat sayur gado-gado.
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
									<img src="<?php echo base_url();?>assets/images/4.jpg" class="img-responsive" alt=""/>
									<div class="mask">
			                       		<div class="info">Quick View</div>
					                  </div>
									<div class="product_container">
									   <div class="cart-left">
										 <p class="title">Paket Sayur Asem</p>
									   </div>
									   <div class="pricey"><span class="item_price">Rp 15.000</span></div>
									   <div class="clearfix"></div>
								     </div>		
								  </div>
			                     </div>
		                      </div>
							</a>
							<div class="cbp-vm-details">
								Bahan masakan segar untuk sayur asem dengan bumbu yang lengkap.
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
									<img src="<?php echo base_url();?>assets/images/5.jpg" class="img-responsive" alt=""/>
									<div class="mask">
			                       		<div class="info">Quick View</div>
					                  </div>
									<div class="product_container">
									   <div class="cart-left">
										 <p class="title">Paket Sayur Lodeh</p>
									   </div>
									   <div class="pricey"><span class="item_price">Rp 20.000</span></div>
									   <div class="clearfix"></div>
								     </div>		
								  </div>
			                     </div>
		                      </div>
							</a>
							<div class="cbp-vm-details">
								Bahan masakan segar untuk membuat sayur lodeh dengan kualitas yang bagus.
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
									<img src="<?php echo base_url();?>assets/images/6.jpg" class="img-responsive" alt=""/>
									<div class="mask">
			                       		<div class="info">Quick View</div>
					                  </div>
									<div class="product_container">
									   <div class="cart-left">
										 <p class="title">Paket Sup Macaroni</p>
									   </div>
									   <div class="pricey"><span class="item_price">Rp 25.000</span></div>
									   <div class="clearfix"></div>
								     </div>		
								  </div>
			                     </div>
		                      </div>
							</a>
							<div class="cbp-vm-details">
								Bahan masakan untuk membuat sup macaroni dengan citarasa yang pas.
							</div>
							<a class="cbp-vm-icon cbp-vm-add item_add" href="#">Add to cart</a>
							</div>
						</li>
					</ul>
				</div>
				<script src="<?php echo base_url();?>assets/js/cbpViewModeSwitch.js" type="text/javascript"></script>
                <script src="<?php echo base_url();?>assets/js/classie.js" type="text/javascript"></script>
			</div>
			<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
   </div>
   <!-- content-section-ends -->
		<div class="other-products">
		<div class="container">
			<h3 class="like text-center">Paket Resep Masakan</h3>        			
				     <ul id="flexiselDemo3">
						<li><a href="single.html"><img src="<?php echo base_url();?>assets/images/1.jpg" class="img-responsive"/></a>
							<div class="product liked-product simpleCart_shelfItem">
							<a class="like_name" href="single.html">Caesar Salad</a>
							<p><a class="item_add" href="#"><i></i> <span class=" item_price">Rp 30.000</span></a></p>
							</div>
						</li>
						<li><a href="single.html"><img src="<?php echo base_url();?>assets/images/2.jpg" class="img-responsive"/></a>						
							<div class="product liked-product simpleCart_shelfItem">
							<a class="like_name" href="single.html">Chicken Teriyaki</a>
							<p><a class="item_add" href="#"><i></i> <span class=" item_price">Rp 50.000</span></a></p>
							</div>
						</li>
						<li><a href="single.html"><img src="<?php echo base_url();?>assets/images/3.jpg" class="img-responsive"/></a>
							<div class="product liked-product simpleCart_shelfItem">
							<a class="like_name" href="single.html">Sayur Gado-gado</a>
							<p><a class="item_add" href="#"><i></i> <span class=" item_price">Rp 20.000</span></a></p>
							</div>
						</li>
						<li><a href="single.html"><img src="<?php echo base_url();?>assets/images/4.jpg" class="img-responsive"/></a>
							<div class="product liked-product simpleCart_shelfItem">
							<a class="like_name" href="single.html">Sayur Asem</a>
							<p><a class="item_add" href="#"><i></i> <span class=" item_price">Rp 15.000</span></a></p>
							</div>
						</li>
						<li><a href="single.html"><img src="<?php echo base_url();?>assets/images/5.jpg" class="img-responsive"/></a>
							<div class="product liked-product simpleCart_shelfItem">
							<a class="like_name" href="single.html">Sayur Lodeh</a>
							<p><a class="item_add" href="#"><i></i> <span class=" item_price">Rp 20.000</span></a></p>
							</div>
						</li>
				     </ul>
				    <script type="text/javascript">
					 $(window).load(function() {
						$("#flexiselDemo3").flexisel({
							visibleItems: 4,
							animationSpeed: 1000,
							autoPlay: true,
							autoPlaySpeed: 3000,    		
							pauseOnHover: true,
							enableResponsiveBreakpoints: true,
					    	responsiveBreakpoints: { 
					    		portrait: { 
					    			changePoint:480,
					    			visibleItems: 1
					    		}, 
					    		landscape: { 
					    			changePoint:640,
					    			visibleItems: 2
					    		},
					    		tablet: { 
					    			changePoint:768,
					    			visibleItems: 3
					    		}
					    	}
					    });
					    
					});
				   </script>
				   <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.flexisel.js"></script>
				   </div>
				   </div>
		<!-- content-section-ends-here -->
		<div class="news-letter">
			<div class="container">
				<div class="join">
					<h6>JOIN OUR MAILING LIST</h6>
					<div class="sub-left-right">
						<form>
							<input type="text" value="Enter Your Email Here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter Your Email Here';}" />
							<input type="submit" value="SUBSCRIBE" />
						</form>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
		</div>
		<div class="footer">
		<div class="container">
		 <div class="footer_top">
			<div class="span_of_4">
				<div class="col-md-3 span1_of_4">
					<h4>Shop</h4>
					<ul class="f_nav">
						<li><a href="#">women</a></li>
						<li><a href="#">men</a></li>
						<li><a href="#">accessories</a></li>
						<li><a href="#">sale</a></li>
					</ul>	
				</div>
				<div class="col-md-3 span1_of_4">
					<h4>help</h4>
					<ul class="f_nav">
						<li><a href="#">FAQ</a></li>
					</ul>	
				</div>
				<div class="col-md-3 span1_of_4">
					<h4>account</h4>
					<ul class="f_nav">
						<li><a href="account.html">login</a></li>
						<li><a href="register.html">create an account</a></li>
						<li><a href="checkout.html">my shopping bag</a></li>
					</ul>	
				</div>
				
				<div class="clearfix"></div>
				</div>
		  </div>
		  <div class="copyright text-center">
				<p>© 2017 JadiMasak</p>
		  </div>
		</div>
		</div>
</body>
</html>