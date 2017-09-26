<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<head>
<title>Smart Restaurant Service</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/slider.css" rel="stylesheet" type="text/css" media="all"/>
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script> 
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript" src="js/startstop-slider.js"></script>
</head>
<body>
  <div class="wrap" >
	<div class="header" >
		<!-- style="background-image: url('images/2.jpg');" -->
		<div class="header_top">
			<div class="logo">
				<a href="index.php"><img src="images/logo.png" width="300px" height="150px" alt="" /></a>
			</div>
			<div class="cart">
             <p>Welcome to Smart Restaurant Services!  <span>Cart:</span>
             <div id="dd" class="wrapper-dropdown-2"> 
              <ul class="dropdown">
              <li>
<?php
session_start();

//var_dump($_SESSION['cart']);
if (empty($_SESSION['cart']) && empty($_SESSION['deal'])) 
{
	// if (empty($_SESSION['deal'])) {
	$_SESSION['cart'] = array();
  $_SESSION['deal'] = array();
	echo "Cart is empty";
	// }
	
}
else
{
	include 'cart_s.php';
 // include('check_out.php');
              echo "<tr> <td> <br> <td><td>"; 
              echo "<a  href='check_out_show.php'><input type='button' value='Show Order'></a>"; 
// include 'check_test.php';
}
?> 
              </li>
          </ul>
          </div>
          </p>
        </div>
        <script type="text/javascript">
      function DropDown(el) {
        this.dd = el;
        this.initEvents();
      }
      DropDown.prototype = {
        initEvents : function() {
          var obj = this;

          obj.dd.on('click', function(event){
            $(this).toggleClass('active');
            event.stopPropagation();
          }); 
        }
      }

      $(function() {

        var dd = new DropDown( $('#dd') );

        $(document).click(function() {
          // all dropdowns
          $('.wrapper-dropdown-2').removeClass('active');
        });

      });

    </script> 
			
	 <div class="clear"></div>
  </div>
	<div class="header_bottom">
	     	<div class="menu">
	     		<ul>
			    	<li class="active"><a href="index.php">Home</a></li>
			   
			    	<li><a href="deal.php">Deals</a></li>
			    	<li><a href="call_bill_collector_save.php">CALL BILL COLLECTOR</a></li>
			    	<?php
					    	include 'get_device_name.php';

					    	include 'con_db.php';
					    	// error_reporting(0);
					    	if ($table_num == 1) 
					    	{
					    		# code...
					?>
					    		<li><a >YOUR DEVICE IS NOT REGISTER</a></li>
			    	<?php
					    	}
					    	else
					    	{
					    		
					    	$query1 = "SELECT * FROM order1 Where order_table=(SELECT device_id FROM devices where table_number='$table_num') ORDER BY order_id Desc LIMIT 1";

					    	$fetch1 = mysql_query($query1) or die(mysql_error());
					    	$result1 = mysql_fetch_assoc($fetch1);

					    	// echo $result1['order_time'];

					    	date_default_timezone_set('asia/karachi');
							$time =  date("h:i:sa")." ".date("d-m-Y");  
							// echo "<br>$time";
							$to_time = strtotime($time);

							$from_time = strtotime($result1['order_place_time']);
							$mins = round(abs($to_time - $from_time) / 60,2);
							// echo round(abs($to_time - $from_time) / 60,2). " minute";
							// $_SESSION['check_new_order'] = 0;
							if (!empty($_SESSION['check_new_order'])) 
							{
								$_SESSION['check_new_order'] = 1;
							}

							// echo "<br>$mins Minutes left";
							if ($mins <= 5 ) 
							{
								// $_SESSION['cart_back'] = array();
								// $_SESSION['deal_back'] = array();
								// echo "<br><h2>CAN GET ORDER BACK</h2>";
								// if (empty($_SESSION['cart']) && empty($_SESSION['deal'])) 
								error_reporting(0);
								if($_SESSION['check_new_order'] == 0)
								{			 	
								 	# code...
					?>
								<li><a href="edit_order.php?order_id1=<?php echo $result1['order_id'];?>">Order Edit</a></li>
								<li><a href="new_order.php">New Order</a></li>
					<?php
								}
					?>
								
					<?php

							}
							else
							{
								unset($_SESSION['order_id1']);
								unset($_SESSION['cart_back']);
								unset($_SESSION['deal_back']);
							}
							}
					?>

     		
			    	<div class="clear"></div>
     			</ul>
	     	</div>
	     
	     	<div class="clear"></div>
	     </div>	     
	<div class="header_slide">
			<div class="header_bottom_left">				
				<div class="categories">
				  <ul>
				  	<h3>MENU</h3>

				  	<?php 
				  	include 'con_db.php';

				  	$query = "SELECT * FROM category";
				  	$fetch = mysql_query($query) or die(mysql_error());
				  	while ($result = mysql_fetch_assoc($fetch)) 
				  	{

				  		?>

				  		  <li><a href="mobile.php?nn=<?php echo $result['category_name'] ?>"><?php echo $result['category_name']?></a></li>

				  	<?php
				  	}
				  	?>
				     <!--  <li><a href="mobile.php?nn=bar b.q">Bar B.Q</a></li>
				      <li><a href="mobile.php?nn=chinese">Chinese</a></li>
				      <li><a href="mobile.php?nn=continental">Continental</a></li>
				      <li><a href="mobile.php?nn=desserts">Desserts</a></li>
				       <li><a href="mobile.php?nn=ice cream">Ice Cream</a></li>
				       <li><a href="mobile.php?nn=italian">Italian</a></li>
				          <li><a href="mobile.php?nn=platter offers">Platter Offers</a></li>
				      	<li><a href="mobile.php?nn=salads">Salads</a></li>
				      	<li><a href="mobile.php?nn=tandoor">Tandoor</a></li>
				      --> 	
				     
				      
				  </ul>
				</div>					
	  	     </div>
					 <div class="header_bottom_right">					 
					 	 <div class="slider">					     
							 <div id="slider">
			                    <div id="mover">
			                    	<div id="slide-1" class="slide">			                    
									 <div class="slider-img">
									     <a href="index.php"><img src="images/slide-1-image.jpg" alt="learn more" /></a>									    
									  </div>
						             	<div class="slider-text">
		                                 <h1>Pepperoni<br><span>Pizza</span></h1>
		                                 <!-- <h2>UPTo 20% OFF</h2> -->
									  
							       
					                   </div>			               
									  <div class="clear"></div>				
				                  </div>	
						             	<div class="slide">
						             		<div class="slider-text">
		                                 <h1><br><span>Beef</span></h1>
		                                 <h2>Burger</h2>
									   <div class="features_list">
									   	<h4>With Extra cheze</h4>							               
							            </div>
							            
					                   </div>		
						             	 <div class="slider-img">
									     <a href="index.php"><img src="images/slide-2-image.png" alt="learn more" /></a>
									  </div>						             					                 
									  <div class="clear"></div>				
				                  </div>
				                  <div class="slide">						             	
					                  <div class="slider-img">
									     <a href="index.php"><img src="images/slide-3-image.jpg" alt="learn more" /></a>
									  </div>
									  <div class="slider-text">
		                                 <h1>Special<br><span>Pasta</span></h1>
		                                 <h2 style="color: BLACK;">with meat sauce</h2>
									   <div class="features_list">
									   							               
							        
									  <div class="clear"></div>				
				                  </div>												
			                 </div>		
		                </div>

		               
					 <div class="clear"></div>					       
		         </div>
		      </div>
		   <div class="clear"></div>
		</div>
   </div>



    		
    		
    		<div class="clear"></div>
    	    
			<div class="content_bottom">
    		<h2>Latest Products </h2>
    		<?php
include('con_db.php');

$query = "SELECT  * FROM dish  ORDER BY dish_id DESC";

// ORDER BY column_name ASC|DESC
// ORDER BY Country DESC;
$fetch = mysql_query($query) or die(mysql_error());


while($result = mysql_fetch_assoc($fetch))
{
?>

				<div class="grid_1_of_4 images_1_ofof_4" >
					<a href="preview.php?id=<?php echo $result['dish_id'] ?>">
					<img src="<?php echo $result['dish_image_url']; ?>" alt="" class="product-image"  /></a>					
					<h2><?php echo $result['dish_name'];?></h2>
					<div class="price-details">
				       <div class="price-number">
							<p><span class="rupees"><?php echo $result['dish_price'] ?></span></p>
					    </div>       	
					</div>
				</div>		
			

<?php
}
?>			

    		<div class="clear"></div>
    
		
	


</div>

	    

   <div class="footer">
   	  
        <div class="copy_right">
				<p>All rights Reseverd | Design by  <a>SRS</a> </p>
		   </div>
    </div>
    <script type="text/javascript">
		$(document).ready(function() {			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
    <a href="#" id="toTop"><span id="toTopHover"> </span></a>
</body>
</html>

