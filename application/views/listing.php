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
	 
      
	body{font-family: 'Exo 2', sans-serif;}
	nav{background-color: white;}
	.content1{background-color: #4db6ac;padding:1px !important;padding-left: 10px !important;}
	nav .input-field label i{color: black;}
	.card-title{color: white;}
	input:focus::-webkit-input-placeholder {
    opacity: 0;
	}
	.hidee{opacity: 0;}
	.card-action{padding:5px !important;}
	nav ul a{color: black;}
	.carousel{height: 400px !important;}
	.footer{background-color:  rgba(40,40,45,0.1) ;}
	.footer {
    height: 400px;/* or however high you would like */
}
	.inner ul li a{color: grey;}
	.inner1 ul li{display: inline;}
	.tab1{margin-top:-40px;position: relative;z-index: 999;padding-left: 5px;}
	.tab1{visibility: hidden;}
	.visible{visibility: visible;}
	.hidden{visibility: hidden;}
</style>
<body>
	<?php include 'modal.php';?>
	<!--Navbar Starts-->
	<?php include 'navbar.php';?>
  	<!--Navbar Ends-->
  	<!--Navbar1 Starts-->
  	<ul id="dropdown1" class="dropdown-content">
	  <li><a href="#!">one</a></li>
	  <li><a href="#!">two</a></li>
	  <li class="divider"></li>
	  <li><a href="#!">three</a></li>
	</ul>
	<nav style="background-color: #4db6ac;">
	  <div class="nav-wrapper nav1">
	    
	    <ul class="hide-on-med-and-down">
	      
	      <!-- Dropdown Trigger -->
	      <li><a class="dropdown-button" href="#!" data-activates="dropdown1"><font color="white"><B>Categories</B><i class="material-icons right">arrow_drop_down</i></font></a></li>
	      <li><a href="#"><font color="white"><B>Best Sellers</B></font></a></li>
	      <li><a href="#"><font color="white"><B>New Releases</B></font></a></li>
	      <li><a href="#"><font color="white"><B>Collections</B></font></a></li>
	    </ul>
	  </div>
	</nav>
<!--navbar1 ends-->
<!--Carousel Starts-->
	   <div class="carousel carousel-slider">
    <a class="carousel-item" href="#one!"><img class="img-responsive" src="/meetcareer/assets/images/car1.jpg"></a>
    <a class="carousel-item" href="#two!"><img class="img-responsive" src="/meetcareer/assets/images/car2.jpg" ></a>
    <a class="carousel-item" href="#three!"><img class="img-responsive" src="/meetcareer/assets/images/car3.jpg" ></a>
    
  </div>
<!--Carousel Ends-->
  	<div class="row">
        <div class="col s12 m12">
          <div class="card grey lighten-5">
            <div class="card-content content1" style="color: black;">
              <span class="card-title" style="padding-left: 10px;">New Releases</span>
            </div>
            <div class="card-action">
              <div class="row">
              	<?php
                                    foreach($products as $row):
                                ?>
              	<?php include 'card.php';?>
              	<?php
                                    endforeach;
                                ?>
              </div>
            </div>
            <div class="card-action">
              <div class="right-align"><a class="btn btn-small" href="#">Click here for More</a></div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col s12 m12">
          <div class="card grey lighten-5">
            <div class="card-content content1" style="color: black;">
              <span class="card-title" style="padding-left: 10px;">Best Sellers</span>
            </div>
            <div class="card-action">
              <div class="row">
                <?php
                                    foreach($products as $row):
                                ?>
              	<?php include 'card.php';?>
              	<?php
                                    endforeach;
                                ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php include 'footer.php';?>
	<script src="/meetcareer/assets/js/jquery-3.1.1.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
	
	<script type="text/javascript">
		$(document).ready(function(){
    $('ul.tabs').tabs();
      $('.carousel.carousel-slider').carousel({full_width: true,indicators:true,time_constant:10});
  });
	</script>
	<script type="text/javascript">
		  $('.modal').modal({
      dismissible: true, 
      opacity: .5, 
      in_duration: 300, 
      out_duration: 200, 
      starting_top: '4%',
      ending_top: '10%', 

      ready: function(modal, trigger) {
        console.log(modal, trigger);
      },
      complete: function() { alert('Closed'); } 
    }
  );
		  
	</script>
	<script type="text/javascript">
		$(function() {
   $('.c1').hover( function(){
      $("#t1").css('visibility','visible');
   },
   function(){
      $("#t1").css('visibility','hidden');
   });
});
		$(function() {
   $('.c2').hover( function(){
      $("#t2").css('visibility','visible');
   },
   function(){
      $("#t2").css('visibility','hidden');
   });
});
		$(function() {
   $('.c3').hover( function(){
      $("#t3").css('visibility','visible');
   },
   function(){
      $("#t3").css('visibility','hidden');
   });
});
		$(function() {
   $('.c4').hover( function(){
      $("#t4").css('visibility','visible');
   },
   function(){
      $("#t4").css('visibility','hidden');
   });
});
	</script>
</body>
</html>
