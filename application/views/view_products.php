<!doctype html>
<html lang="en" ng-app="demoApp">
<head>
	<title>Meet Careers Book Portal</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-COMPATIBLE" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">
	

	<link href="https://fonts.googleapis.com/css?family=Exo+2" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
	 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<style type="text/css">
html {
    position: relative;
    min-height: 100%;
}
	body{font-family: 'Exo 2', sans-serif;margin: 0 0 500px;}
	nav{background-color: white;}
	#destination{
    min-height: 400px;
    min-width: 400px;
    margin: 40px !important;
}
.breadcrumb{color:black;padding-top: 24px;}
.breadcrumb:last-child{color:black !important;}
.breadcrumb:before{color: grey;font-size: 19px;}
.upper a{color: grey;font-size: 12px;}
.footer{background-color:  rgba(40,40,45,0.1) ;}
	.footer {
    
    position: absolute;
    left: 0;
    bottom: 0;
    height: 500px;
    width: 100%;
    
}
.footer111{margin-top: 60px;}
.footer a{color: grey;}
.inner1 ul li{display: inline;}
.list ul li{list-style: disc;
}
.disc:after{color: grey;}
.righte ul li{list-style: disc;}
.stars ul li{display: inline;}
</style>
<body>
    
	<?php include 'navbar.php';?>
	<?php include 'navbar1.php';?>
    <div class="row">
		<div class="col m1">
			<ul>
				<li style="border:1px solid #f0f0f0;padding-top: 7px;height: 64px;width:63px;padding-left: 13px;"><a class="1"><img src="images/max1.jpeg" height="49px" /></a></li>
				<li style="border:1px solid #f0f0f0;padding-top: 7px;height: 64px;width:63px;padding-left: 13px;"><a class="2"><img src="images/max2.jpg" height="49px" ></a></li>
				
			</ul>
		</div>
		<div class="col m4" style="padding-left: 0;padding-top: 14px;">
			<div class="box" style="height: 400px;border:2px solid #f0f0f0">
				<div id="d1" style="position: absolute;padding-top:10px;padding-left: 70px;">
				    <img id="img1" src="images/max1.jpeg" width="300px" height="375px" data-zoom-image="images/max1.jpeg">
				</div>
				<div id="d2" style="position: relative;padding-top:10px;padding-left: 70px;">
				    <img id="img2" src="images/max2.jpg" width="300px" height="375px" data-zoom-image="images/max2.jpg">
				</div>
			</div>
			
				<div class="row">
					<div class="col m6" style="padding-left: 0px;margin-top: 10px">
						<a class="btn btn-large"> <i class="fa fa-cart-plus" aria-hidden="true"></i>&nbsp;Add to Cart</a>
					</div>
					<div class="col m6" style="padding-right: 0px;margin-top: 10px">
						<a class="btn btn-large" style="padding-left: 74px;padding-right: 60px;"> <i class="fa fa-credit-card-alt" aria-hidden="true"></i>&nbsp;Buy Now</a>
					</div>
				</div>
			
		</div>
		<div class="col m7">
			 
			    <div class="nav-wrapper">
			      <div class="col m12 upper" style="color:grey;margin-top:10px !important;padding-left: 0px;">
			        <a href="#!" class="breadcrumb">Home</a>
			        <a href="#!" class="breadcrumb">Products</a>
			        <a href="#!" class="breadcrumb"><?php echo $products[0]['name'];?></a>
			      </div>
			    </div>
			     
			    <h5><?php echo $products[0]['name'];?></h5>
			   	<div style="width:36px;height: 24px;background-color: green;color: white;border-radius: 10px;display: -webkit-inline-box;">
			   		<span> 4.5</span><i class="material-icons tiny">star</i>
			   	</div>
			   	<div style="display: inline-block;color: grey;font-size: 12px;margin-bottom: 10px;">825 Ratings and 122 Reviews
			   	</div></br>
			   	<B>&nbsp;&nbsp;<B>
			   	&#8377;<?php $p=($products[0]['discount']*$products[0]['price'])/100;
                    $new=$products[0]['price']-$p;
                    echo $new;
                    ?></B>&nbsp;&nbsp;<font color="grey" size="2">&#8377; <strike><?php echo $products[0]['price'];?></font></strike></B>
			   	&nbsp;&nbsp;<font color="green"><B><?php echo $products[0]['discount'];echo"%";?></B></font>
			   	</br></br>
			   	<div class="row" style="margin-bottom: 0;">
			   		<div class="col m2" style="margin-top: 15px;">
			  			<B>Delivery</B></br></br>
			  			<B>Type</B></br></br>
			  			<B>Features</B></br></br></br></br></br></br>
			  			<B>Seller</B></br></br></br>
			  			
			  		</div>
			  		<div class="input-field col m6" style="margin-top: 0;">
		          		<i class="material-icons prefix" style="margin-top: 10px;">my_location</i>
		          		<input id="icon_prefix" type="text" class="validate" style="margin-bottom: 14px;">
		          		<label for="icon_prefix">Enter Delivery Pincode</label>
		          		</br>
		          		<a><B><?php echo $products[0]['type'];?></B></a></br>
		          		<div class="list">
		          			<ul style="padding: 7px;padding-left: 24px;font-size: 14px;margin-bottom: 0;">
			          			<li class="disc">Language: English</li>
			          			<li>Binding: Paperback</li>
			          			<li>Publisher: Bloomsbury Publishing (IN)</li>
			          			<li>ISBN: 9781408855652, 1408855658</li>
			          			<li>Edition: 2014</li>
			          			<li>Pages: 352</li>
		          			</ul>
		          		</div>
		          		<ul style="padding-left:6px;font-size: 14px;margin-top:0;">
				          	<li><a>TrueComRetail&nbsp;&nbsp;(4.3)</a></li>
				          	<li>View <a>42 sellers</a>&nbsp;starting from &#8377;244 </li>
		          		</ul>
		        	</div>
		        	<div class="col m4">
			        	<a class="waves-effect waves-light btn teal lighten-2">Check</a>
			        	
			        	</br>
			        	<div class="righte" style="margin-top: 65px;position: absolute;"><B>Services</B>
				        	<ul style="font-size: 14px;position: relative;padding-left: 20px;">
				        		<li>Cash On Delivery available</li>
				        		<li>10 Days Replacement Policy</li>
				        	</ul>
		        		</div>
		        	</div>
		        </div>
		        <div class="row">
		        	<div class="col m2">
		        		<B>Description</B>
		        	</div>
		        	<div class="col m10">
		        		<p style="margin-top: 0px;">
		        			<?php echo $products[0]['description'];?>
		        		</p>
		        	</div>
		        </div>
		        <div class="row">
		        	<div class="col m12">
		        		<div class="card-panel" style="margin-bottom: 0px;">
					        <span class="black-text"><B>Specifications</B>
					          </span>
					    </div>
					    <div class="card-panel" style="margin-top: 0px;margin-bottom: 0px;">
					        <span class="black-text">Book Details</span>
					        <div class="row">
					        	<div class="col m4" style="color:grey;font-size: 14px;">
					        		<ul>
					        			<li>Imprint</li>
					        			<li>Publication Year</li>
					        			<li>Book Type</li>
					        		</ul>
					        	</div>
					        	<div class="col m8">
					        		<ul>
					        			<li>Bloomsbury Childrens</li>
					        			<li>2014 September</li>
					        			<li>Fiction Book</li>
					        		</ul>
					        	</div>
					        </div>  
					    </div>
					    <div class="card-panel" style="margin-top: 0px;margin-bottom: 0px;">
					    	<span class="black-text">Contributors</span>
					    	<div class="row">
					        	<div class="col m4" style="color:grey;font-size: 14px;">
					        		<ul>
					        			<li>Author</li>
					        			
					        		</ul>
					        	</div>
					        	<div class="col m8">
					        		<ul>
					        			<li>J.K.Rowling</li>
					        			
					        		</ul>
					        	</div>
					        </div>  
					    </div>
					    <div class="card-panel" style="margin-top: 0px;margin-bottom: 0px;">
					    	<a class="btn btn-small">Read More</a>
					    </div>
					    <div class="card-panel">
					    	<div class="row">
					    		<div class="col m2">
					    			<h5>4.6<i class="material-icons tiny">star</i></h5>
					    			835 Ratings
					    			122 Reviews
					    		</div>
					    		<div class="col m1" style="padding-right: 0px;">
					    			<h6>5<i class="material-icons tiny">star</i>
					    			</h6>
					    			<h6>4<i class="material-icons tiny">star</i>
					    			</h6>
					    			<h6>3<i class="material-icons tiny">star</i>
					    			</h6>
					    			<h6>2<i class="material-icons tiny">star</i>
					    			</h6>
					    			<h6>1<i class="material-icons tiny">star</i>
					    			</h6>
					    		</div>
					    		<div class="col m3" style="margin-top: 9px;padding-left: 0;">
					    			<div class="progress">
										<div class="determinate" style="width: 50%">
										</div>
									</div>
									<div class="progress" style="margin-top: 20px;">
										<div class="determinate" style="width: 70%">
										</div>
									</div>
									<div class="progress" style="margin-top: 18px;">
										<div class="determinate" style="width: 60%">
										</div>
									</div>
									<div class="progress" style="margin-top: 22px;">
										<div class="determinate" style="width: 30%">
										</div>
									</div>
									<div class="progress" style="margin-top: 22px;">
										<div class="determinate" style="width: 10%">
										</div>
									</div>
					    		</div>
					    		<div class="col m6" style="padding: 30px;">
					    			<a class="btn btn-large">Rate and Review product</a>
					    		</div>
			    			</div>
					    </div>
		        	</div>
		        </div>
			   
		</div>
	</div>